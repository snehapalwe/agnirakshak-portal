<?php 
/**
 * Corresponding_values Page Controller
 * @category  Controller
 */
class Corresponding_valuesController extends SecureController{
	function __construct(){
		parent::__construct();
		$this->tablename = "corresponding_values";
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
			"target_table", 
			"target_table_field_name", 
			"target_table_value_field", 
			"fetch_table", 
			"fetch_table_field_name", 
			"status", 
			"paid", 
			"int_no", 
			"yr", 
			"zone", 
			"payment_done", 
			"certificate_file", 
			"timestamp", 
			"user_id");
		$pagination = $this->get_pagination(MAX_RECORD_COUNT); // get current pagination e.g array(page_number, page_limit)
		//search table record
		if(!empty($request->search)){
			$text = trim($request->search); 
			$search_condition = "(
				corresponding_values.id LIKE ? OR 
				corresponding_values.target_table LIKE ? OR 
				corresponding_values.target_table_field_name LIKE ? OR 
				corresponding_values.target_table_value_field LIKE ? OR 
				corresponding_values.fetch_table LIKE ? OR 
				corresponding_values.fetch_table_field_name LIKE ? OR 
				corresponding_values.status LIKE ? OR 
				corresponding_values.paid LIKE ? OR 
				corresponding_values.int_no LIKE ? OR 
				corresponding_values.yr LIKE ? OR 
				corresponding_values.zone LIKE ? OR 
				corresponding_values.payment_done LIKE ? OR 
				corresponding_values.certificate_file LIKE ? OR 
				corresponding_values.timestamp LIKE ? OR 
				corresponding_values.user_id LIKE ?
			)";
			$search_params = array(
				"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
			);
			//setting search conditions
			$db->where($search_condition, $search_params);
			 //template to use when ajax search
			$this->view->search_template = "corresponding_values/search.php";
		}
		if(!empty($request->orderby)){
			$orderby = $request->orderby;
			$ordertype = (!empty($request->ordertype) ? $request->ordertype : ORDER_TYPE);
			$db->orderBy($orderby, $ordertype);
		}
		else{
			$db->orderBy("corresponding_values.id", ORDER_TYPE);
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
		$page_title = $this->view->page_title = "Corresponding Values";
		$this->view->report_filename = date('Y-m-d') . '-' . $page_title;
		$this->view->report_title = $page_title;
		$this->view->report_layout = "report_layout.php";
		$this->view->report_paper_size = "A4";
		$this->view->report_orientation = "portrait";
		$this->render_view("corresponding_values/list.php", $data); //render the full page
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
			"target_table", 
			"target_table_field_name", 
			"target_table_value_field", 
			"fetch_table", 
			"fetch_table_field_name", 
			"status", 
			"paid", 
			"int_no", 
			"yr", 
			"zone", 
			"payment_done", 
			"certificate_file", 
			"timestamp", 
			"user_id");
		if($value){
			$db->where($rec_id, urldecode($value)); //select record based on field name
		}
		else{
			$db->where("corresponding_values.id", $rec_id);; //select record based on primary key
		}
		$record = $db->getOne($tablename, $fields );
		if($record){
			$page_title = $this->view->page_title = "View  Corresponding Values";
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
		return $this->render_view("corresponding_values/view.php", $record);
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
			$fields = $this->fields = array("target_table","target_table_field_name","target_table_value_field","fetch_table","fetch_table_field_name","status","paid","int_no","yr","zone","payment_done","certificate_file","user_id");
			$postdata = $this->format_request_data($formdata);
			$this->rules_array = array(
				'target_table' => 'required',
				'target_table_field_name' => 'required',
				'target_table_value_field' => 'required',
				'fetch_table' => 'required',
				'fetch_table_field_name' => 'required',
				'status' => 'required',
				'paid' => 'required|numeric',
				'int_no' => 'required|numeric',
				'yr' => 'required',
				'zone' => 'required',
				'payment_done' => 'required',
				'certificate_file' => 'required',
				'user_id' => 'required',
			);
			$this->sanitize_array = array(
				'target_table' => 'sanitize_string',
				'target_table_field_name' => 'sanitize_string',
				'target_table_value_field' => 'sanitize_string',
				'fetch_table' => 'sanitize_string',
				'fetch_table_field_name' => 'sanitize_string',
				'status' => 'sanitize_string',
				'paid' => 'sanitize_string',
				'int_no' => 'sanitize_string',
				'yr' => 'sanitize_string',
				'zone' => 'sanitize_string',
				'payment_done' => 'sanitize_string',
				'certificate_file' => 'sanitize_string',
				'user_id' => 'sanitize_string',
			);
			$this->filter_vals = true; //set whether to remove empty fields
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			if($this->validated()){
				$rec_id = $this->rec_id = $db->insert($tablename, $modeldata);
				if($rec_id){
					$this->set_flash_msg("Record added successfully", "success");
					return	$this->redirect("corresponding_values");
				}
				else{
					$this->set_page_error();
				}
			}
		}
		$page_title = $this->view->page_title = "Add New Corresponding Values";
		$this->render_view("corresponding_values/add.php");
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
		$fields = $this->fields = array("id","target_table","target_table_field_name","target_table_value_field","fetch_table","fetch_table_field_name","status","paid","int_no","yr","zone","payment_done","certificate_file","user_id");
		if($formdata){
			$postdata = $this->format_request_data($formdata);
			$this->rules_array = array(
				'target_table' => 'required',
				'target_table_field_name' => 'required',
				'target_table_value_field' => 'required',
				'fetch_table' => 'required',
				'fetch_table_field_name' => 'required',
				'status' => 'required',
				'paid' => 'required|numeric',
				'int_no' => 'required|numeric',
				'yr' => 'required',
				'zone' => 'required',
				'payment_done' => 'required',
				'certificate_file' => 'required',
				'user_id' => 'required',
			);
			$this->sanitize_array = array(
				'target_table' => 'sanitize_string',
				'target_table_field_name' => 'sanitize_string',
				'target_table_value_field' => 'sanitize_string',
				'fetch_table' => 'sanitize_string',
				'fetch_table_field_name' => 'sanitize_string',
				'status' => 'sanitize_string',
				'paid' => 'sanitize_string',
				'int_no' => 'sanitize_string',
				'yr' => 'sanitize_string',
				'zone' => 'sanitize_string',
				'payment_done' => 'sanitize_string',
				'certificate_file' => 'sanitize_string',
				'user_id' => 'sanitize_string',
			);
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			if($this->validated()){
				$db->where("corresponding_values.id", $rec_id);;
				$bool = $db->update($tablename, $modeldata);
				$numRows = $db->getRowCount(); //number of affected rows. 0 = no record field updated
				if($bool && $numRows){
					$this->set_flash_msg("Record updated successfully", "success");
					return $this->redirect("corresponding_values");
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
						return	$this->redirect("corresponding_values");
					}
				}
			}
		}
		$db->where("corresponding_values.id", $rec_id);;
		$data = $db->getOne($tablename, $fields);
		$page_title = $this->view->page_title = "Edit  Corresponding Values";
		if(!$data){
			$this->set_page_error();
		}
		return $this->render_view("corresponding_values/edit.php", $data);
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
		$db->where("corresponding_values.id", $arr_rec_id, "in");
		$bool = $db->delete($tablename);
		if($bool){
			$this->set_flash_msg("Record deleted successfully", "success");
		}
		elseif($db->getLastError()){
			$page_error = $db->getLastError();
			$this->set_flash_msg($page_error, "danger");
		}
		return	$this->redirect("corresponding_values");
	}
}
