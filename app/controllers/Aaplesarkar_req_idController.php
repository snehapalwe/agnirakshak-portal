<?php 
/**
 * Aaplesarkar_req_id Page Controller
 * @category  Controller
 */
class Aaplesarkar_req_idController extends SecureController{
	function __construct(){
		parent::__construct();
		$this->tablename = "aaplesarkar_req_id";
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
			"service_name", 
			"db_name", 
			"trackid", 
			"recid", 
			"uid", 
			"status", 
			"paid", 
			"int_no", 
			"yr", 
			"zone", 
			"payment_done", 
			"certificate_file", 
			"timestamp");
		$pagination = $this->get_pagination(100); // get current pagination e.g array(page_number, page_limit)
		//search table record
		if(!empty($request->search)){
			$text = trim($request->search); 
			$search_condition = "(
				aaplesarkar_req_id.id LIKE ? OR 
				aaplesarkar_req_id.service_name LIKE ? OR 
				aaplesarkar_req_id.db_name LIKE ? OR 
				aaplesarkar_req_id.trackid LIKE ? OR 
				aaplesarkar_req_id.recid LIKE ? OR 
				aaplesarkar_req_id.uid LIKE ? OR 
				aaplesarkar_req_id.status LIKE ? OR 
				aaplesarkar_req_id.paid LIKE ? OR 
				aaplesarkar_req_id.int_no LIKE ? OR 
				aaplesarkar_req_id.yr LIKE ? OR 
				aaplesarkar_req_id.zone LIKE ? OR 
				aaplesarkar_req_id.payment_done LIKE ? OR 
				aaplesarkar_req_id.certificate_file LIKE ? OR 
				aaplesarkar_req_id.timestamp LIKE ?
			)";
			$search_params = array(
				"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
			);
			//setting search conditions
			$db->where($search_condition, $search_params);
			 //template to use when ajax search
			$this->view->search_template = "aaplesarkar_req_id/search.php";
		}
		if(!empty($request->orderby)){
			$orderby = $request->orderby;
			$ordertype = (!empty($request->ordertype) ? $request->ordertype : ORDER_TYPE);
			$db->orderBy($orderby, $ordertype);
		}
		else{
			$db->orderBy("aaplesarkar_req_id.id", ORDER_TYPE);
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
		$page_title = $this->view->page_title = "Aaplesarkar Req Id";
		$this->view->report_filename = date('Y-m-d') . '-' . $page_title;
		$this->view->report_title = $page_title;
		$this->view->report_layout = "report_layout.php";
		$this->view->report_paper_size = "A4";
		$this->view->report_orientation = "portrait";
		$this->render_view("aaplesarkar_req_id/list.php", $data); //render the full page
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
			"service_name", 
			"db_name", 
			"trackid", 
			"recid", 
			"uid", 
			"status", 
			"paid", 
			"int_no", 
			"yr", 
			"zone", 
			"payment_done", 
			"certificate_file", 
			"timestamp");
		if($value){
			$db->where($rec_id, urldecode($value)); //select record based on field name
		}
		else{
			$db->where("aaplesarkar_req_id.id", $rec_id);; //select record based on primary key
		}
		$record = $db->getOne($tablename, $fields );
		if($record){
			$page_title = $this->view->page_title = "View  Aaplesarkar Req Id";
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
		return $this->render_view("aaplesarkar_req_id/view.php", $record);
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
			$fields = $this->fields = array("service_name","db_name","trackid","recid","uid","status","paid","int_no","yr","zone","payment_done","certificate_file");
			$postdata = $this->format_request_data($formdata);
			$this->rules_array = array(
				'service_name' => 'required',
				'db_name' => 'required',
				'trackid' => 'required',
				'recid' => 'required|numeric',
				'uid' => 'required',
				'status' => 'required',
				'paid' => 'required|numeric',
				'int_no' => 'required|numeric',
				'yr' => 'required',
				'zone' => 'required',
				'payment_done' => 'required',
				'certificate_file' => 'required',
			);
			$this->sanitize_array = array(
				'service_name' => 'sanitize_string',
				'db_name' => 'sanitize_string',
				'trackid' => 'sanitize_string',
				'recid' => 'sanitize_string',
				'uid' => 'sanitize_string',
				'status' => 'sanitize_string',
				'paid' => 'sanitize_string',
				'int_no' => 'sanitize_string',
				'yr' => 'sanitize_string',
				'zone' => 'sanitize_string',
				'payment_done' => 'sanitize_string',
				'certificate_file' => 'sanitize_string',
			);
			$this->filter_vals = true; //set whether to remove empty fields
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			if($this->validated()){
				$rec_id = $this->rec_id = $db->insert($tablename, $modeldata);
				if($rec_id){
					$this->set_flash_msg("Record added successfully", "success");
					return	$this->redirect("aaplesarkar_req_id");
				}
				else{
					$this->set_page_error();
				}
			}
		}
		$page_title = $this->view->page_title = "Add New Aaplesarkar Req Id";
		$this->render_view("aaplesarkar_req_id/add.php");
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
		$fields = $this->fields = array("id","service_name","db_name","trackid","recid","uid","status","paid","int_no","yr","zone","payment_done","certificate_file");
		if($formdata){
			$postdata = $this->format_request_data($formdata);
			$this->rules_array = array(
				'service_name' => 'required',
				'db_name' => 'required',
				'trackid' => 'required',
				'recid' => 'required|numeric',
				'uid' => 'required',
				'status' => 'required',
				'paid' => 'required|numeric',
				'int_no' => 'required|numeric',
				'yr' => 'required',
				'zone' => 'required',
				'payment_done' => 'required',
				'certificate_file' => 'required',
			);
			$this->sanitize_array = array(
				'service_name' => 'sanitize_string',
				'db_name' => 'sanitize_string',
				'trackid' => 'sanitize_string',
				'recid' => 'sanitize_string',
				'uid' => 'sanitize_string',
				'status' => 'sanitize_string',
				'paid' => 'sanitize_string',
				'int_no' => 'sanitize_string',
				'yr' => 'sanitize_string',
				'zone' => 'sanitize_string',
				'payment_done' => 'sanitize_string',
				'certificate_file' => 'sanitize_string',
			);
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			if($this->validated()){
				$db->where("aaplesarkar_req_id.id", $rec_id);;
				$bool = $db->update($tablename, $modeldata);
				$numRows = $db->getRowCount(); //number of affected rows. 0 = no record field updated
				if($bool && $numRows){
					$this->set_flash_msg("Record updated successfully", "success");
					return $this->redirect("aaplesarkar_req_id");
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
						return	$this->redirect("aaplesarkar_req_id");
					}
				}
			}
		}
		$db->where("aaplesarkar_req_id.id", $rec_id);;
		$data = $db->getOne($tablename, $fields);
		$page_title = $this->view->page_title = "Edit  Aaplesarkar Req Id";
		if(!$data){
			$this->set_page_error();
		}
		return $this->render_view("aaplesarkar_req_id/edit.php", $data);
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
		$db->where("aaplesarkar_req_id.id", $arr_rec_id, "in");
		$bool = $db->delete($tablename);
		if($bool){
			$this->set_flash_msg("Record deleted successfully", "success");
		}
		elseif($db->getLastError()){
			$page_error = $db->getLastError();
			$this->set_flash_msg($page_error, "danger");
		}
		return	$this->redirect("aaplesarkar_req_id");
	}
}
