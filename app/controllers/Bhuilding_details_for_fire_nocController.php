<?php 
/**
 * Bhuilding_details_for_fire_noc Page Controller
 * @category  Controller
 */
class Bhuilding_details_for_fire_nocController extends SecureController{
	function __construct(){
		parent::__construct();
		$this->tablename = "bhuilding_details_for_fire_noc";
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
		$fields = array("flag", 
			"id", 
			"applicant_name", 
			"recid", 
			"name_of_building", 
			"building_type_id", 
			"building_type_value", 
			"height_of_building_in_mtr", 
			"number_of_staircase", 
			"staircase_added", 
			"number_of_lifts", 
			"lifts_added", 
			"location_count_of_refuge_area", 
			"hight_of_refuge_area_from_ground_in_mtr", 
			"provided_refuge_area_in_sqr_mtr", 
			"date", 
			"user_id", 
			"db_name", 
			"wing_id", 
			"count_wing", 
			"do_you_have_wing", 
			"locked");
		$pagination = $this->get_pagination(MAX_RECORD_COUNT); // get current pagination e.g array(page_number, page_limit)
	#Statement to execute before list record
	// Setting the `recid` & `db_name` so that we use it in query parameters
if(isset($_GET['recid'])){
    $db->where("recid",$_GET['recid']);
    $db->where("db_name",$_GET['db_name']);
}
// Setting the `id` so that we use it in query parameters
if(isset($_GET['id'])){
    $db->where("id",$_GET['id']); 
} 
	# End of before list statement
		//search table record
		if(!empty($request->search)){
			$text = trim($request->search); 
			$search_condition = "(
				bhuilding_details_for_fire_noc.flag LIKE ? OR 
				bhuilding_details_for_fire_noc.id LIKE ? OR 
				bhuilding_details_for_fire_noc.applicant_name LIKE ? OR 
				bhuilding_details_for_fire_noc.recid LIKE ? OR 
				bhuilding_details_for_fire_noc.name_of_building LIKE ? OR 
				bhuilding_details_for_fire_noc.number_of_wing_in_building LIKE ? OR 
				bhuilding_details_for_fire_noc.building_type_id LIKE ? OR 
				bhuilding_details_for_fire_noc.building_type_value LIKE ? OR 
				bhuilding_details_for_fire_noc.height_of_building_in_mtr LIKE ? OR 
				bhuilding_details_for_fire_noc.number_of_staircase LIKE ? OR 
				bhuilding_details_for_fire_noc.staircase_added LIKE ? OR 
				bhuilding_details_for_fire_noc.number_of_lifts LIKE ? OR 
				bhuilding_details_for_fire_noc.lifts_added LIKE ? OR 
				bhuilding_details_for_fire_noc.location_count_of_refuge_area LIKE ? OR 
				bhuilding_details_for_fire_noc.hight_of_refuge_area_from_ground_in_mtr LIKE ? OR 
				bhuilding_details_for_fire_noc.provided_refuge_area_in_sqr_mtr LIKE ? OR 
				bhuilding_details_for_fire_noc.date LIKE ? OR 
				bhuilding_details_for_fire_noc.user_id LIKE ? OR 
				bhuilding_details_for_fire_noc.establishment_name LIKE ? OR 
				bhuilding_details_for_fire_noc.establishment_address LIKE ? OR 
				bhuilding_details_for_fire_noc.db_name LIKE ? OR 
				bhuilding_details_for_fire_noc.wing_id LIKE ? OR 
				bhuilding_details_for_fire_noc.count_wing LIKE ? OR 
				bhuilding_details_for_fire_noc.do_you_have_wing LIKE ? OR 
				bhuilding_details_for_fire_noc.locked LIKE ?
			)";
			$search_params = array(
				"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
			);
			//setting search conditions
			$db->where($search_condition, $search_params);
			 //template to use when ajax search
			$this->view->search_template = "bhuilding_details_for_fire_noc/search.php";
		}
		if(!empty($request->orderby)){
			$orderby = $request->orderby;
			$ordertype = (!empty($request->ordertype) ? $request->ordertype : ORDER_TYPE);
			$db->orderBy($orderby, $ordertype);
		}
		else{
			$db->orderBy("bhuilding_details_for_fire_noc.id", ORDER_TYPE);
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
		if(	!empty($records)){
			foreach($records as &$record){
				$record['date'] = human_date($record['date']);
			}
		}
		$data = new stdClass;
		$data->records = $records;
		$data->record_count = $records_count;
		$data->total_records = $total_records;
		$data->total_page = $total_pages;
		if($db->getLastError()){
			$this->set_page_error();
		}
		$page_title = $this->view->page_title = "Bhuilding Details For Fire Noc";
		$this->view->report_filename = date('Y-m-d') . '-' . $page_title;
		$this->view->report_title = $page_title;
		$this->view->report_layout = "report_layout.php";
		$this->view->report_paper_size = "A4";
		$this->view->report_orientation = "portrait";
		$this->render_view("bhuilding_details_for_fire_noc/list.php", $data); //render the full page
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
			"name_of_building", 
			"building_type_id", 
			"building_type_value", 
			"height_of_building_in_mtr", 
			"number_of_lifts", 
			"location_count_of_refuge_area", 
			"hight_of_refuge_area_from_ground_in_mtr", 
			"provided_refuge_area_in_sqr_mtr", 
			"recid", 
			"date", 
			"user_id", 
			"number_of_wing_in_building", 
			"applicant_name", 
			"establishment_name", 
			"establishment_address", 
			"db_name", 
			"wing_id", 
			"count_wing", 
			"do_you_have_wing", 
			"locked", 
			"number_of_staircase", 
			"staircase_added", 
			"lifts_added", 
			"flag");
		if($value){
			$db->where($rec_id, urldecode($value)); //select record based on field name
		}
		else{
			$db->where("bhuilding_details_for_fire_noc.id", $rec_id);; //select record based on primary key
		}
		$record = $db->getOne($tablename, $fields );
		if($record){
			$record['date'] = human_date($record['date']);
			$page_title = $this->view->page_title = "View  Bhuilding Details For Fire Noc";
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
		return $this->render_view("bhuilding_details_for_fire_noc/view.php", $record);
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
			$fields = $this->fields = array("db_name","recid","name_of_building","do_you_have_wing","building_type_id","height_of_building_in_mtr","number_of_staircase","number_of_lifts","location_count_of_refuge_area","date","user_id");
			$postdata = $this->format_request_data($formdata);
			$this->rules_array = array(
				'db_name' => 'required',
				'recid' => 'required',
				'name_of_building' => 'required',
				'do_you_have_wing' => 'required',
				'building_type_id' => 'required',
				'height_of_building_in_mtr' => 'required|numeric',
				'number_of_staircase' => 'required|numeric',
				'number_of_lifts' => 'required|numeric',
				'location_count_of_refuge_area' => 'required|numeric',
			);
			$this->sanitize_array = array(
				'db_name' => 'sanitize_string',
				'recid' => 'sanitize_string',
				'name_of_building' => 'sanitize_string',
				'do_you_have_wing' => 'sanitize_string',
				'building_type_id' => 'sanitize_string',
				'height_of_building_in_mtr' => 'sanitize_string',
				'number_of_staircase' => 'sanitize_string',
				'number_of_lifts' => 'sanitize_string',
				'location_count_of_refuge_area' => 'sanitize_string',
			);
			$this->filter_vals = true; //set whether to remove empty fields
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			$modeldata['date'] = date_now();
$modeldata['user_id'] = USER_ID;
			if($this->validated()){
		# Statement to execute before adding record
		// Storing that id into `building_id` varibale
$building_id = $modeldata['id'];
// Checking condition if number-of-wings in building selected NO. Then set number_of_wings_in_building =1
if($modeldata['do_you_have_wing']=="NO"){
// $floor_count = $modeldata['number_of_wing_in_building'];
 $modeldata['number_of_wing_in_building'] = 1;
}
		# End of before add statement
				$rec_id = $this->rec_id = $db->insert($tablename, $modeldata);
				if($rec_id){
		# Statement to execute after adding record
		// Searching the `recid` & `db_name` & then storing count of entries in count varaible
$db->where("recid",$modeldata['recid']);
$db->where("db_name",$modeldata['db_name']);
$count = $db->getOne($tablename,"COUNT(id) as num")['num']+0;
// Seraching id in table & then updating bulding_record_count
$db->where("id",$modeldata['recid']);
$db->update($modeldata['db_name'],["building_record_count"=>$count]);
// Storing the Session variable (Required for redirecting to layout page)  
$locpas = $_SESSION['location'];
$var = $modeldata['db_name'];
//execute sql statement & return a single field value
// Converting id into applicant_name 
$params = array($modeldata['user_id']);
$value  = $db->rawQueryValue("SELECT applicant_name FROM fire_noc_provisional_new WHERE id = ?", $params);
// Updating the value into `bhuilding_details_for_fire_noc` table
$table_data = array(
    "applicant_name" => $value[0]
);
$db->where("id", $rec_id);
$bool = $db->update("bhuilding_details_for_fire_noc", $table_data);
// Now in this form if wing selected is NO 
// Then we have insert data with wing -> Not Applicable
if($modeldata['do_you_have_wing']=="NO"){
//make entry
    $db->insert("wings_info",[
        "rec_id"=>$rec_id,
        "wingno"=>0,
        "wing_name"=>"Not Applicable"
    ]);
}
//execute sql statement and return a single field value
$params2 = array($modeldata['building_type_id']);
$value2  = $db->rawQueryValue("SELECT building_type FROM m_building_type WHERE id = ?", $params2);
$table_data2 = array(
    "building_type_value" => $value2[0]
);
$db->where("id", $rec_id);
$bool = $db->update("bhuilding_details_for_fire_noc", $table_data2);
		# End of after add statement
					$this->set_flash_msg("Record added successfully", "success");
					return	$this->redirect("bhuilding_details_for_fire_noc?id=$rec_id");
				}
				else{
					$this->set_page_error();
				}
			}
		}
		$page_title = $this->view->page_title = "Add New Bhuilding Details For Fire Noc";
		$this->render_view("bhuilding_details_for_fire_noc/add.php");
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
		$fields = $this->fields = array("id","db_name","recid","name_of_building","do_you_have_wing","building_type_id","height_of_building_in_mtr","number_of_staircase","number_of_lifts","location_count_of_refuge_area","date","user_id");
		if($formdata){
			$postdata = $this->format_request_data($formdata);
			$this->rules_array = array(
				'db_name' => 'required',
				'recid' => 'required',
				'name_of_building' => 'required',
				'do_you_have_wing' => 'required',
				'building_type_id' => 'required',
				'height_of_building_in_mtr' => 'required|numeric',
				'number_of_staircase' => 'required|numeric',
				'number_of_lifts' => 'required|numeric',
				'location_count_of_refuge_area' => 'required|numeric',
			);
			$this->sanitize_array = array(
				'db_name' => 'sanitize_string',
				'recid' => 'sanitize_string',
				'name_of_building' => 'sanitize_string',
				'do_you_have_wing' => 'sanitize_string',
				'building_type_id' => 'sanitize_string',
				'height_of_building_in_mtr' => 'sanitize_string',
				'number_of_staircase' => 'sanitize_string',
				'number_of_lifts' => 'sanitize_string',
				'location_count_of_refuge_area' => 'sanitize_string',
			);
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			$modeldata['date'] = date_now();
$modeldata['user_id'] = USER_ID;
			if($this->validated()){
				$db->where("bhuilding_details_for_fire_noc.id", $rec_id);;
				$bool = $db->update($tablename, $modeldata);
				$numRows = $db->getRowCount(); //number of affected rows. 0 = no record field updated
				if($bool && $numRows){
					$this->set_flash_msg("Record updated successfully", "success");
					return $this->redirect("bhuilding_details_for_fire_noc?id=$rec_id");
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
						return	$this->redirect("bhuilding_details_for_fire_noc?id=$rec_id");
					}
				}
			}
		}
		$db->where("bhuilding_details_for_fire_noc.id", $rec_id);;
		$data = $db->getOne($tablename, $fields);
		$page_title = $this->view->page_title = "Edit  Bhuilding Details For Fire Noc";
		if(!$data){
			$this->set_page_error();
		}
		return $this->render_view("bhuilding_details_for_fire_noc/edit.php", $data);
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
		$db->where("bhuilding_details_for_fire_noc.id", $arr_rec_id, "in");
		$bool = $db->delete($tablename);
		if($bool){
			$this->set_flash_msg("Record deleted successfully", "success");
		}
		elseif($db->getLastError()){
			$page_error = $db->getLastError();
			$this->set_flash_msg($page_error, "danger");
		}
		return	$this->redirect("bhuilding_details_for_fire_noc");
	}
}
