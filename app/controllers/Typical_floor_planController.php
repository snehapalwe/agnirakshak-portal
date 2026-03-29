<?php 
/**
 * Typical_floor_plan Page Controller
 * @category  Controller
 */
class Typical_floor_planController extends SecureController{
	function __construct(){
		parent::__construct();
		$this->tablename = "typical_floor_plan";
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
			"typical_floor_plan", 
			"floor_type", 
			"foor_name_value", 
			"floor_wise_p_line_area_in_sqr_mtr", 
			"hight_in_mtr_from_ground", 
			"date", 
			"locked", 
			"refuge_area", 
			"hight_of_refuge_area_from_ground_in_mtr", 
			"provided_refuge_area_in_sqr_mtr");
		$pagination = $this->get_pagination(MAX_RECORD_COUNT); // get current pagination e.g array(page_number, page_limit)
	#Statement to execute before list record
	if(isset($_GET['recid'])){
$db->where("recid",$_GET['recid']);
$db->where("db_name",$_GET['db_name']);
} 
if(isset($_GET['id'])){
$db->where("id",$_GET['id']); 
} 
	# End of before list statement
		//search table record
		if(!empty($request->search)){
			$text = trim($request->search); 
			$search_condition = "(
				typical_floor_plan.id LIKE ? OR 
				typical_floor_plan.foor_name_id LIKE ? OR 
				typical_floor_plan.typical_floor_plan LIKE ? OR 
				typical_floor_plan.floor_type LIKE ? OR 
				typical_floor_plan.foor_name_value LIKE ? OR 
				typical_floor_plan.recid LIKE ? OR 
				typical_floor_plan.floor_wise_p_line_area_in_sqr_mtr LIKE ? OR 
				typical_floor_plan.hight_in_mtr_from_ground LIKE ? OR 
				typical_floor_plan.date LIKE ? OR 
				typical_floor_plan.user_id LIKE ? OR 
				typical_floor_plan.db_name LIKE ? OR 
				typical_floor_plan.locked LIKE ? OR 
				typical_floor_plan.refuge_area LIKE ? OR 
				typical_floor_plan.hight_of_refuge_area_from_ground_in_mtr LIKE ? OR 
				typical_floor_plan.provided_refuge_area_in_sqr_mtr LIKE ?
			)";
			$search_params = array(
				"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
			);
			//setting search conditions
			$db->where($search_condition, $search_params);
			 //template to use when ajax search
			$this->view->search_template = "typical_floor_plan/search.php";
		}
		if(!empty($request->orderby)){
			$orderby = $request->orderby;
			$ordertype = (!empty($request->ordertype) ? $request->ordertype : ORDER_TYPE);
			$db->orderBy($orderby, $ordertype);
		}
		else{
			$db->orderBy("typical_floor_plan.id", ORDER_TYPE);
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
		$page_title = $this->view->page_title = "Typical Floor Plan";
		$this->view->report_filename = date('Y-m-d') . '-' . $page_title;
		$this->view->report_title = $page_title;
		$this->view->report_layout = "report_layout.php";
		$this->view->report_paper_size = "A4";
		$this->view->report_orientation = "portrait";
		$this->render_view("typical_floor_plan/list.php", $data); //render the full page
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
			"foor_name_id", 
			"foor_name_value", 
			"recid", 
			"floor_wise_p_line_area_in_sqr_mtr", 
			"hight_in_mtr_from_ground", 
			"date", 
			"user_id", 
			"db_name", 
			"locked", 
			"refuge_area", 
			"hight_of_refuge_area_from_ground_in_mtr", 
			"provided_refuge_area_in_sqr_mtr", 
			"floor_type", 
			"typical_floor_plan");
		if($value){
			$db->where($rec_id, urldecode($value)); //select record based on field name
		}
		else{
			$db->where("typical_floor_plan.id", $rec_id);; //select record based on primary key
		}
		$record = $db->getOne($tablename, $fields );
		if($record){
			$page_title = $this->view->page_title = "View  Typical Floor Plan";
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
		return $this->render_view("typical_floor_plan/view.php", $record);
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
			$fields = $this->fields = array("typical_floor_plan","refuge_area","floor_type","foor_name_id","recid","floor_wise_p_line_area_in_sqr_mtr","hight_in_mtr_from_ground","date","user_id","db_name","hight_of_refuge_area_from_ground_in_mtr","provided_refuge_area_in_sqr_mtr");
			$postdata = $this->format_request_data($formdata);
			$this->rules_array = array(
				'typical_floor_plan' => 'required',
				'refuge_area' => 'required',
				'floor_type' => 'required',
				'foor_name_id' => 'required',
				'recid' => 'required',
				'floor_wise_p_line_area_in_sqr_mtr' => 'required|numeric',
				'hight_in_mtr_from_ground' => 'required|numeric',
				'db_name' => 'required',
				'hight_of_refuge_area_from_ground_in_mtr' => 'numeric',
				'provided_refuge_area_in_sqr_mtr' => 'numeric',
			);
			$this->sanitize_array = array(
				'typical_floor_plan' => 'sanitize_string',
				'refuge_area' => 'sanitize_string',
				'floor_type' => 'sanitize_string',
				'foor_name_id' => 'sanitize_string',
				'recid' => 'sanitize_string',
				'floor_wise_p_line_area_in_sqr_mtr' => 'sanitize_string',
				'hight_in_mtr_from_ground' => 'sanitize_string',
				'db_name' => 'sanitize_string',
				'hight_of_refuge_area_from_ground_in_mtr' => 'sanitize_string',
				'provided_refuge_area_in_sqr_mtr' => 'sanitize_string',
			);
			$this->filter_vals = true; //set whether to remove empty fields
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			$modeldata['date'] = date_now();
$modeldata['user_id'] = USER_ID;
			if($this->validated()){
		# Statement to execute before adding record
		//"SELECT  DISTINCT id AS value,floor AS label FROM m_floor ORDER BY floor ASC"
$db->where("id",$modeldata['foor_name_id']);
$modeldata['foor_name_value'] = $db->getOne("m_floor","*")['floor'];
		# End of before add statement
				$rec_id = $this->rec_id = $db->insert($tablename, $modeldata);
				if($rec_id){
		# Statement to execute after adding record
		// Storing that data into `$locpas` variable
$locpas = $_SESSION['location'];
// Searching that recid into table & storing the number of entries into `$num` variable.
$db->where("recid",$modeldata['recid']);
$num = $db->getOne($tablename,"COUNT(id) as num")['num']+0;
// Searching the record in table by recid & then updating `floor_count_did` into `wings_info` table 
$db->where("id",$modeldata['recid']);
$db->update("wings_info",["floor_count_did"=>$num]);
// Storing database recid value into `$recid`
$recid = $modeldata['recid'];
		# End of after add statement
					$this->set_flash_msg("Record added successfully", "success");
					return	$this->redirect("$locpas");
				}
				else{
					$this->set_page_error();
				}
			}
		}
		$page_title = $this->view->page_title = "Add New Typical Floor Plan";
		$this->render_view("typical_floor_plan/add.php");
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
		$fields = $this->fields = array("id","typical_floor_plan","refuge_area","floor_type","foor_name_id","recid","floor_wise_p_line_area_in_sqr_mtr","hight_in_mtr_from_ground","date","user_id","db_name","hight_of_refuge_area_from_ground_in_mtr","provided_refuge_area_in_sqr_mtr");
		if($formdata){
			$postdata = $this->format_request_data($formdata);
			$this->rules_array = array(
				'typical_floor_plan' => 'required',
				'refuge_area' => 'required',
				'floor_type' => 'required',
				'foor_name_id' => 'required',
				'recid' => 'required',
				'floor_wise_p_line_area_in_sqr_mtr' => 'required|numeric',
				'hight_in_mtr_from_ground' => 'required|numeric',
				'db_name' => 'required',
				'hight_of_refuge_area_from_ground_in_mtr' => 'numeric',
				'provided_refuge_area_in_sqr_mtr' => 'numeric',
			);
			$this->sanitize_array = array(
				'typical_floor_plan' => 'sanitize_string',
				'refuge_area' => 'sanitize_string',
				'floor_type' => 'sanitize_string',
				'foor_name_id' => 'sanitize_string',
				'recid' => 'sanitize_string',
				'floor_wise_p_line_area_in_sqr_mtr' => 'sanitize_string',
				'hight_in_mtr_from_ground' => 'sanitize_string',
				'db_name' => 'sanitize_string',
				'hight_of_refuge_area_from_ground_in_mtr' => 'sanitize_string',
				'provided_refuge_area_in_sqr_mtr' => 'sanitize_string',
			);
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			$modeldata['date'] = date_now();
$modeldata['user_id'] = USER_ID;
			if($this->validated()){
				$db->where("typical_floor_plan.id", $rec_id);;
				$bool = $db->update($tablename, $modeldata);
				$numRows = $db->getRowCount(); //number of affected rows. 0 = no record field updated
				if($bool && $numRows){
					$this->set_flash_msg("Record updated successfully", "success");
					return $this->redirect("typical_floor_plan");
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
						return	$this->redirect("typical_floor_plan");
					}
				}
			}
		}
		$db->where("typical_floor_plan.id", $rec_id);;
		$data = $db->getOne($tablename, $fields);
		$page_title = $this->view->page_title = "Edit  Typical Floor Plan";
		if(!$data){
			$this->set_page_error();
		}
		return $this->render_view("typical_floor_plan/edit.php", $data);
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
		$db->where("typical_floor_plan.id", $arr_rec_id, "in");
		$bool = $db->delete($tablename);
		if($bool){
			$this->set_flash_msg("Record deleted successfully", "success");
		}
		elseif($db->getLastError()){
			$page_error = $db->getLastError();
			$this->set_flash_msg($page_error, "danger");
		}
		return	$this->redirect("typical_floor_plan");
	}
}
