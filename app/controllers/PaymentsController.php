<?php 
/**
 * Payments Page Controller
 * @category  Controller
 */
class PaymentsController extends SecureController{
	function __construct(){
		parent::__construct();
		$this->tablename = "payments";
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
			"userid_added", 
			"db_name", 
			"rec_id", 
			"amount", 
			"txn_no", 
			"payment_mode", 
			"timestamp", 
			"remark", 
			"citizen_userid", 
			"int_no", 
			"yr", 
			"rec_no", 
			"payment_person", 
			"payment_type", 
			"payment_chq_no", 
			"payment_chq_date", 
			"payment_bankname", 
			"payment_cash_collection_center", 
			"payment_counter", 
			"paid_by");
		$pagination = $this->get_pagination(MAX_RECORD_COUNT); // get current pagination e.g array(page_number, page_limit)
		//search table record
		if(!empty($request->search)){
			$text = trim($request->search); 
			$search_condition = "(
				payments.id LIKE ? OR 
				payments.userid_added LIKE ? OR 
				payments.db_name LIKE ? OR 
				payments.rec_id LIKE ? OR 
				payments.amount LIKE ? OR 
				payments.txn_no LIKE ? OR 
				payments.payment_mode LIKE ? OR 
				payments.timestamp LIKE ? OR 
				payments.remark LIKE ? OR 
				payments.citizen_userid LIKE ? OR 
				payments.int_no LIKE ? OR 
				payments.yr LIKE ? OR 
				payments.rec_no LIKE ? OR 
				payments.payment_person LIKE ? OR 
				payments.payment_type LIKE ? OR 
				payments.payment_chq_no LIKE ? OR 
				payments.payment_chq_date LIKE ? OR 
				payments.payment_bankname LIKE ? OR 
				payments.payment_cash_collection_center LIKE ? OR 
				payments.payment_counter LIKE ? OR 
				payments.paid_by LIKE ?
			)";
			$search_params = array(
				"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
			);
			//setting search conditions
			$db->where($search_condition, $search_params);
			 //template to use when ajax search
			$this->view->search_template = "payments/search.php";
		}
		if(!empty($request->orderby)){
			$orderby = $request->orderby;
			$ordertype = (!empty($request->ordertype) ? $request->ordertype : ORDER_TYPE);
			$db->orderBy($orderby, $ordertype);
		}
		else{
			$db->orderBy("payments.id", ORDER_TYPE);
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
		$page_title = $this->view->page_title = "Payments";
		$this->view->report_filename = date('Y-m-d') . '-' . $page_title;
		$this->view->report_title = $page_title;
		$this->view->report_layout = "report_layout.php";
		$this->view->report_paper_size = "A4";
		$this->view->report_orientation = "portrait";
		$this->render_view("payments/list.php", $data); //render the full page
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
			"userid_added", 
			"db_name", 
			"rec_id", 
			"amount", 
			"txn_no", 
			"payment_mode", 
			"timestamp", 
			"remark", 
			"citizen_userid", 
			"int_no", 
			"yr", 
			"rec_no", 
			"payment_person", 
			"payment_type", 
			"payment_chq_no", 
			"payment_chq_date", 
			"payment_bankname", 
			"payment_cash_collection_center", 
			"payment_counter", 
			"paid_by");
		if($value){
			$db->where($rec_id, urldecode($value)); //select record based on field name
		}
		else{
			$db->where("payments.id", $rec_id);; //select record based on primary key
		}
		$record = $db->getOne($tablename, $fields );
		if($record){
			$page_title = $this->view->page_title = "View  Payments";
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
		return $this->render_view("payments/view.php", $record);
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
			$fields = $this->fields = array("userid_added","db_name","rec_id","amount","txn_no","payment_mode","remark","citizen_userid","int_no","yr","rec_no","payment_person","payment_type","payment_chq_no","payment_chq_date","payment_bankname","payment_cash_collection_center","payment_counter","paid_by");
			$postdata = $this->format_request_data($formdata);
			$this->rules_array = array(
				'userid_added' => 'required|numeric',
				'db_name' => 'required',
				'rec_id' => 'required',
				'amount' => 'required',
				'txn_no' => 'required',
				'payment_mode' => 'required',
				'remark' => 'required',
				'citizen_userid' => 'required',
				'int_no' => 'required|numeric',
				'yr' => 'required',
				'rec_no' => 'required',
				'payment_person' => 'required',
				'payment_type' => 'required',
				'payment_chq_no' => 'required',
				'payment_chq_date' => 'required',
				'payment_bankname' => 'required',
				'payment_cash_collection_center' => 'required',
				'payment_counter' => 'required',
				'paid_by' => 'required',
			);
			$this->sanitize_array = array(
				'userid_added' => 'sanitize_string',
				'db_name' => 'sanitize_string',
				'rec_id' => 'sanitize_string',
				'amount' => 'sanitize_string',
				'txn_no' => 'sanitize_string',
				'payment_mode' => 'sanitize_string',
				'remark' => 'sanitize_string',
				'citizen_userid' => 'sanitize_string',
				'int_no' => 'sanitize_string',
				'yr' => 'sanitize_string',
				'rec_no' => 'sanitize_string',
				'payment_person' => 'sanitize_string',
				'payment_type' => 'sanitize_string',
				'payment_chq_no' => 'sanitize_string',
				'payment_chq_date' => 'sanitize_string',
				'payment_bankname' => 'sanitize_string',
				'payment_cash_collection_center' => 'sanitize_string',
				'payment_counter' => 'sanitize_string',
				'paid_by' => 'sanitize_string',
			);
			$this->filter_vals = true; //set whether to remove empty fields
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			if($this->validated()){
				$rec_id = $this->rec_id = $db->insert($tablename, $modeldata);
				if($rec_id){
					$this->set_flash_msg("Record added successfully", "success");
					return	$this->redirect("payments");
				}
				else{
					$this->set_page_error();
				}
			}
		}
		$page_title = $this->view->page_title = "Add New Payments";
		$this->render_view("payments/add.php");
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
		$fields = $this->fields = array("id","userid_added","db_name","rec_id","amount","txn_no","payment_mode","remark","citizen_userid","int_no","yr","rec_no","payment_person","payment_type","payment_chq_no","payment_chq_date","payment_bankname","payment_cash_collection_center","payment_counter","paid_by");
		if($formdata){
			$postdata = $this->format_request_data($formdata);
			$this->rules_array = array(
				'userid_added' => 'required|numeric',
				'db_name' => 'required',
				'rec_id' => 'required',
				'amount' => 'required',
				'txn_no' => 'required',
				'payment_mode' => 'required',
				'remark' => 'required',
				'citizen_userid' => 'required',
				'int_no' => 'required|numeric',
				'yr' => 'required',
				'rec_no' => 'required',
				'payment_person' => 'required',
				'payment_type' => 'required',
				'payment_chq_no' => 'required',
				'payment_chq_date' => 'required',
				'payment_bankname' => 'required',
				'payment_cash_collection_center' => 'required',
				'payment_counter' => 'required',
				'paid_by' => 'required',
			);
			$this->sanitize_array = array(
				'userid_added' => 'sanitize_string',
				'db_name' => 'sanitize_string',
				'rec_id' => 'sanitize_string',
				'amount' => 'sanitize_string',
				'txn_no' => 'sanitize_string',
				'payment_mode' => 'sanitize_string',
				'remark' => 'sanitize_string',
				'citizen_userid' => 'sanitize_string',
				'int_no' => 'sanitize_string',
				'yr' => 'sanitize_string',
				'rec_no' => 'sanitize_string',
				'payment_person' => 'sanitize_string',
				'payment_type' => 'sanitize_string',
				'payment_chq_no' => 'sanitize_string',
				'payment_chq_date' => 'sanitize_string',
				'payment_bankname' => 'sanitize_string',
				'payment_cash_collection_center' => 'sanitize_string',
				'payment_counter' => 'sanitize_string',
				'paid_by' => 'sanitize_string',
			);
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			if($this->validated()){
				$db->where("payments.id", $rec_id);;
				$bool = $db->update($tablename, $modeldata);
				$numRows = $db->getRowCount(); //number of affected rows. 0 = no record field updated
				if($bool && $numRows){
					$this->set_flash_msg("Record updated successfully", "success");
					return $this->redirect("payments");
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
						return	$this->redirect("payments");
					}
				}
			}
		}
		$db->where("payments.id", $rec_id);;
		$data = $db->getOne($tablename, $fields);
		$page_title = $this->view->page_title = "Edit  Payments";
		if(!$data){
			$this->set_page_error();
		}
		return $this->render_view("payments/edit.php", $data);
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
		$db->where("payments.id", $arr_rec_id, "in");
		$bool = $db->delete($tablename);
		if($bool){
			$this->set_flash_msg("Record deleted successfully", "success");
		}
		elseif($db->getLastError()){
			$page_error = $db->getLastError();
			$this->set_flash_msg($page_error, "danger");
		}
		return	$this->redirect("payments");
	}
}
