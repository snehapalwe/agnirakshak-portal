<?php 
/**
 * Survey_visit Page Controller
 * @category  Controller
 */
class Survey_visitController extends SecureController{
	function __construct(){
		parent::__construct();
		$this->tablename = "survey_visit";
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
			"date_of_visit", 
			"upload_survey_report", 
			"remark", 
			"rec_id", 
			"db_name", 
			"survey_photos", 
			"payment_report");
		$pagination = $this->get_pagination(MAX_RECORD_COUNT); // get current pagination e.g array(page_number, page_limit)
		//search table record
		if(!empty($request->search)){
			$text = trim($request->search); 
			$search_condition = "(
				survey_visit.id LIKE ? OR 
				survey_visit.date_of_visit LIKE ? OR 
				survey_visit.upload_survey_report LIKE ? OR 
				survey_visit.remark LIKE ? OR 
				survey_visit.rec_id LIKE ? OR 
				survey_visit.db_name LIKE ? OR 
				survey_visit.survey_photos LIKE ? OR 
				survey_visit.payment_report LIKE ?
			)";
			$search_params = array(
				"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
			);
			//setting search conditions
			$db->where($search_condition, $search_params);
			 //template to use when ajax search
			$this->view->search_template = "survey_visit/search.php";
		}
		if(!empty($request->orderby)){
			$orderby = $request->orderby;
			$ordertype = (!empty($request->ordertype) ? $request->ordertype : ORDER_TYPE);
			$db->orderBy($orderby, $ordertype);
		}
		else{
			$db->orderBy("survey_visit.id", ORDER_TYPE);
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
		$page_title = $this->view->page_title = "Survey Visit";
		$this->view->report_filename = date('Y-m-d') . '-' . $page_title;
		$this->view->report_title = $page_title;
		$this->view->report_layout = "report_layout.php";
		$this->view->report_paper_size = "A4";
		$this->view->report_orientation = "portrait";
		$this->render_view("survey_visit/list.php", $data); //render the full page
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
			"date_of_visit", 
			"upload_survey_report", 
			"remark", 
			"survey_photos", 
			"payment_report");
		if($value){
			$db->where($rec_id, urldecode($value)); //select record based on field name
		}
		else{
			$db->where("survey_visit.id", $rec_id);; //select record based on primary key
		}
		$record = $db->getOne($tablename, $fields );
		if($record){
			$page_title = $this->view->page_title = "View  Survey Visit";
		}
		else{
			if($db->getLastError()){
				$this->set_page_error();
			}
			else{
				$this->set_page_error("No record found");
			}
		}
		return $this->render_view("survey_visit/view.php", $record);
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
			$fields = $this->fields = array("rec_id","db_name","date_of_visit","upload_survey_report","remark","survey_photos","payment_report");
			$postdata = $this->format_request_data($formdata);
			$this->rules_array = array(
				'rec_id' => 'required',
				'db_name' => 'required',
				'date_of_visit' => 'required',
				'upload_survey_report' => 'required',
				'remark' => 'required',
				'survey_photos' => 'required',
				'payment_report' => 'required',
			);
			$this->sanitize_array = array(
				'rec_id' => 'sanitize_string',
				'db_name' => 'sanitize_string',
				'date_of_visit' => 'sanitize_string',
				'upload_survey_report' => 'sanitize_string',
				'remark' => 'sanitize_string',
				'survey_photos' => 'sanitize_string',
				'payment_report' => 'sanitize_string',
			);
			$this->filter_vals = true; //set whether to remove empty fields
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			if($this->validated()){
				$rec_id = $this->rec_id = $db->insert($tablename, $modeldata);
				if($rec_id){
		# Statement to execute after adding record
		// Searching that id in particular table & then update servey_done status
$db->where("id",$modeldata['rec_id']);
$db->update($modeldata['db_name'],["servey_done"=>$rec_id]);
// Storing that `db_name` value into `$RED` variable
$RED = $modeldata['db_name'];
		# End of after add statement
					$this->set_flash_msg("Record added successfully", "success");
					return	$this->redirect("$RED");
				}
				else{
					$this->set_page_error();
				}
			}
		}
		$page_title = $this->view->page_title = "Add New Survey Visit";
		$this->render_view("survey_visit/add.php");
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
		$fields = $this->fields = array("id","rec_id","db_name","date_of_visit","upload_survey_report","remark","survey_photos","payment_report");
		if($formdata){
			$postdata = $this->format_request_data($formdata);
			$this->rules_array = array(
				'rec_id' => 'required',
				'db_name' => 'required',
				'date_of_visit' => 'required',
				'upload_survey_report' => 'required',
				'remark' => 'required',
				'survey_photos' => 'required',
				'payment_report' => 'required',
			);
			$this->sanitize_array = array(
				'rec_id' => 'sanitize_string',
				'db_name' => 'sanitize_string',
				'date_of_visit' => 'sanitize_string',
				'upload_survey_report' => 'sanitize_string',
				'remark' => 'sanitize_string',
				'survey_photos' => 'sanitize_string',
				'payment_report' => 'sanitize_string',
			);
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			if($this->validated()){
				$db->where("survey_visit.id", $rec_id);;
				$bool = $db->update($tablename, $modeldata);
				$numRows = $db->getRowCount(); //number of affected rows. 0 = no record field updated
				if($bool && $numRows){
					$this->set_flash_msg("Record updated successfully", "success");
					return $this->redirect("survey_visit");
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
						return	$this->redirect("survey_visit");
					}
				}
			}
		}
		$db->where("survey_visit.id", $rec_id);;
		$data = $db->getOne($tablename, $fields);
		$page_title = $this->view->page_title = "Edit  Survey Visit";
		if(!$data){
			$this->set_page_error();
		}
		return $this->render_view("survey_visit/edit.php", $data);
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
		$db->where("survey_visit.id", $arr_rec_id, "in");
		$bool = $db->delete($tablename);
		if($bool){
			$this->set_flash_msg("Record deleted successfully", "success");
		}
		elseif($db->getLastError()){
			$page_error = $db->getLastError();
			$this->set_flash_msg($page_error, "danger");
		}
		return	$this->redirect("survey_visit");
	}
}
