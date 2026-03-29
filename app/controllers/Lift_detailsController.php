<?php 
/**
 * Lift_details Page Controller
 * @category  Controller
 */
class Lift_detailsController extends SecureController{
	function __construct(){
		parent::__construct();
		$this->tablename = "lift_details";
	}
	/**
     * List page records
     * @param $fieldname (filter record by a field) 
     * @param $fieldvalue (filter field value)
     * @return BaseView
     */
	function index($fieldname = null , $fieldvalue = null){
		$request = $this->request;
		$db = $this->GetModel();
		$tablename = $this->tablename;
		$fields = array("id", 
			"lift_no", 
			"lift_type", 
			"lift_from_floor", 
			"lift_to_floor");
		$pagination = $this->get_pagination(MAX_RECORD_COUNT); // get current pagination e.g array(page_number, page_limit)
	#Statement to execute before list record
	// Setting the GET variables (recid, db_name) here so that we can pass it in the query parameters
if(isset($_GET['recid'])){
    $db->where("recid",$_GET['recid']);
    $db->where("db_name",$_GET['db_name']);
}
if (isset($_GET['building_id'])) {
    // Ensure that you also filter by building_id in the query if it's passed
    $db->where("building_id", $_GET['building_id']);
}
// Setting the GET variables (id) here so that we can pass it in the query parameters
if(isset($_GET['id'])){
    $db->where("id",$_GET['id']); 
} 
	# End of before list statement
		//search table record
		if(!empty($request->search)){
			$text = trim($request->search); 
			$search_condition = "(
				lift_details.id LIKE ? OR 
				lift_details.lift_no LIKE ? OR 
				lift_details.lift_type LIKE ? OR 
				lift_details.lift_from_floor LIKE ? OR 
				lift_details.lift_to_floor LIKE ? OR 
				lift_details.rec_id LIKE ? OR 
				lift_details.db_name LIKE ? OR 
				lift_details.building_id LIKE ?
			)";
			$search_params = array(
				"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
			);
			//setting search conditions
			$db->where($search_condition, $search_params);
			 //template to use when ajax search
			$this->view->search_template = "lift_details/search.php";
		}
		if(!empty($request->orderby)){
			$orderby = $request->orderby;
			$ordertype = (!empty($request->ordertype) ? $request->ordertype : ORDER_TYPE);
			$db->orderBy($orderby, $ordertype);
		}
		else{
			$db->orderBy("lift_details.id", ORDER_TYPE);
		}
		if($fieldname){
			$db->where($fieldname , $fieldvalue); //filter by a single field name
		}
		$tc = $db->withTotalCount();
		$records = $db->get($tablename, $pagination, $fields);
		$records_count = count($records);
		$total_records = intval($tc->totalCount);
		$page_limit = $pagination[1];
		$total_pages = ceil($total_records / $page_limit);
		$data = new stdClass;
		$data->records = $records;
		$data->record_count = $records_count;
		$data->total_records = $total_records;
		$data->total_page = $total_pages;
		if($db->getLastError()){
			$this->set_page_error();
		}
		$page_title = $this->view->page_title = "Lift Details";
		$this->view->report_filename = date('Y-m-d') . '-' . $page_title;
		$this->view->report_title = $page_title;
		$this->view->report_layout = "report_layout.php";
		$this->view->report_paper_size = "A4";
		$this->view->report_orientation = "portrait";
		$this->render_view("lift_details/list.php", $data); //render the full page
	}
	/**
     * View record detail 
	 * @param $rec_id (select record by table primary key) 
     * @param $value value (select record by value of field name(rec_id))
     * @return BaseView
     */
	function view($rec_id = null, $value = null){
		$request = $this->request;
		$db = $this->GetModel();
		$rec_id = $this->rec_id = urldecode($rec_id);
		$tablename = $this->tablename;
		$fields = array("id", 
			"lift_no", 
			"lift_type", 
			"lift_from_floor", 
			"lift_to_floor", 
			"rec_id", 
			"db_name", 
			"building_id");
		if($value){
			$db->where($rec_id, urldecode($value)); //select record based on field name
		}
		else{
			$db->where("lift_details.id", $rec_id);; //select record based on primary key
		}
		$record = $db->getOne($tablename, $fields );
		if($record){
			$page_title = $this->view->page_title = "View  Lift Details";
		$this->view->report_filename = date('Y-m-d') . '-' . $page_title;
		$this->view->report_title = $page_title;
		$this->view->report_layout = "report_layout.php";
		$this->view->report_paper_size = "A4";
		$this->view->report_orientation = "portrait";
		}
		else{
			if($db->getLastError()){
				$this->set_page_error();
			}
			else{
				$this->set_page_error("No record found");
			}
		}
		return $this->render_view("lift_details/view.php", $record);
	}
	/**
     * Insert new record to the database table
	 * @param $formdata array() from $_POST
     * @return BaseView
     */
	function add($formdata = null){
		if($formdata){
			$db = $this->GetModel();
			$tablename = $this->tablename;
			$request = $this->request;
			//fillable fields
			$fields = $this->fields = array("rec_id","db_name","building_id","lift_no","lift_type","lift_from_floor","lift_to_floor");
			$postdata = $this->format_request_data($formdata);
			$this->rules_array = array(
				'rec_id' => 'required',
				'db_name' => 'required',
				'building_id' => 'required',
				'lift_no' => 'required',
				'lift_type' => 'required',
				'lift_from_floor' => 'required',
				'lift_to_floor' => 'required',
			);
			$this->sanitize_array = array(
				'rec_id' => 'sanitize_string',
				'db_name' => 'sanitize_string',
				'building_id' => 'sanitize_string',
				'lift_no' => 'sanitize_string',
				'lift_type' => 'sanitize_string',
				'lift_from_floor' => 'sanitize_string',
				'lift_to_floor' => 'sanitize_string',
			);
			$this->filter_vals = true; //set whether to remove empty fields
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			if($this->validated()){
				$rec_id = $this->rec_id = $db->insert($tablename, $modeldata);
				if($rec_id){
		# Statement to execute after adding record
		// Storing this variable for redirection
$building_id = $modeldata['building_id'];
//execute sql statement and return a single field value
// Storing the lifts_added count into the `$value` variable 
$params = array($modeldata['building_id']);
$value  = $db->rawQueryValue("SELECT lifts_added FROM bhuilding_details_for_fire_noc WHERE id = ?", $params);
// Increamenting the count of Lifts Added & storing it into `$total` varaible
$total = $value[0]+1;
// Update that total value in place of `lifts_added
$table_data = array(
    "lifts_added" => $total
);
$db->where("id", $modeldata['building_id']);
$bool = $db->update("bhuilding_details_for_fire_noc", $table_data);
		# End of after add statement
					$this->set_flash_msg("Record added successfully", "success");
					return	$this->redirect("bhuilding_details_for_fire_noc?id=$building_id");
				}
				else{
					$this->set_page_error();
				}
			}
		}
		$page_title = $this->view->page_title = "Add New Lift Details";
		$this->render_view("lift_details/add.php");
	}
	/**
     * Update table record with formdata
	 * @param $rec_id (select record by table primary key)
	 * @param $formdata array() from $_POST
     * @return array
     */
	function edit($rec_id = null, $formdata = null){
		$request = $this->request;
		$db = $this->GetModel();
		$this->rec_id = $rec_id;
		$tablename = $this->tablename;
		 //editable fields
		$fields = $this->fields = array("id","rec_id","db_name","building_id","lift_no","lift_type","lift_from_floor","lift_to_floor");
		if($formdata){
			$postdata = $this->format_request_data($formdata);
			$this->rules_array = array(
				'rec_id' => 'required',
				'db_name' => 'required',
				'building_id' => 'required',
				'lift_no' => 'required',
				'lift_type' => 'required',
				'lift_from_floor' => 'required',
				'lift_to_floor' => 'required',
			);
			$this->sanitize_array = array(
				'rec_id' => 'sanitize_string',
				'db_name' => 'sanitize_string',
				'building_id' => 'sanitize_string',
				'lift_no' => 'sanitize_string',
				'lift_type' => 'sanitize_string',
				'lift_from_floor' => 'sanitize_string',
				'lift_to_floor' => 'sanitize_string',
			);
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			if($this->validated()){
				$db->where("lift_details.id", $rec_id);;
				$bool = $db->update($tablename, $modeldata);
				$numRows = $db->getRowCount(); //number of affected rows. 0 = no record field updated
				if($bool && $numRows){
		# Statement to execute after adding record
			$building_id = $modeldata['building_id'];
		# End of after update statement
					$this->set_flash_msg("Record updated successfully", "success");
					return $this->redirect("bhuilding_details_for_fire_noc?id=$building_id");
				}
				else{
					if($db->getLastError()){
						$this->set_page_error();
					}
					elseif(!$numRows){
						//not an error, but no record was updated
						$page_error = "No record updated";
						$this->set_page_error($page_error);
						$this->set_flash_msg($page_error, "warning");
						return	$this->redirect("bhuilding_details_for_fire_noc?id=$building_id");
					}
				}
			}
		}
		$db->where("lift_details.id", $rec_id);;
		$data = $db->getOne($tablename, $fields);
		$page_title = $this->view->page_title = "Edit  Lift Details";
		if(!$data){
			$this->set_page_error();
		}
		return $this->render_view("lift_details/edit.php", $data);
	}
	/**
     * Delete record from the database
	 * Support multi delete by separating record id by comma.
     * @return BaseView
     */
	function delete($rec_id = null){
		Csrf::cross_check();
		$request = $this->request;
		$db = $this->GetModel();
		$tablename = $this->tablename;
		$this->rec_id = $rec_id;
		//form multiple delete, split record id separated by comma into array
		$arr_rec_id = array_map('trim', explode(",", $rec_id));
		$db->where("lift_details.id", $arr_rec_id, "in");
		$bool = $db->delete($tablename);
		if($bool){
			$this->set_flash_msg("Record deleted successfully", "success");
		}
		elseif($db->getLastError()){
			$page_error = $db->getLastError();
			$this->set_flash_msg($page_error, "danger");
		}
		return	$this->redirect("lift_details");
	}
}
