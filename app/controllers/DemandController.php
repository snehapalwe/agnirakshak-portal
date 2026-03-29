<?php 
/**
 * Demand Page Controller
 * @category  Controller
 */
class DemandController extends SecureController{
	function __construct(){
		parent::__construct();
		$this->tablename = "demand";
	}
	/**
     * List page records
     * @param $fieldname (filter record by a field) 
     * @param $fieldvalue (filter field value)
     * @return BaseView
     */
     
	/**
     * List page records
     * @param $fieldname (filter record by a field) 
     * @param $fieldvalue (filter field value)
     * @return BaseView
     */
	function detailed_challan($fieldname = null , $fieldvalue = null){
		$request = $this->request;
		$db = $this->GetModel();
		$tablename = $this->tablename;
		$fields = array("id", 
			"db_name", 
			"rec_id", 
			"amount", 
			"payment_flag", 
			"payment_person", 
			"payment_type", 
			"paid_by", 
			"payment_chq_no", 
			"payment_chq_date", 
			"payment_bankname", 
			"payment_cash_collection_center", 
			"payment_counter", 
			"status", 
			"paid", 
			"upload_dd_or_cheque", 
			"payment_done", 
			"timestamp", 
			"user_id", 
			"remark", 
			"demand_required");
		$pagination = $this->get_pagination(MAX_RECORD_COUNT); // get current pagination e.g array(page_number, page_limit)
		//search table record
		if(!empty($request->search)){
			$text = trim($request->search); 
			$search_condition = "(
				demand.id LIKE ? OR 
				demand.db_name LIKE ? OR 
				demand.rec_id LIKE ? OR 
				demand.amount LIKE ? OR 
				demand.payment_flag LIKE ? OR 
				demand.payment_person LIKE ? OR 
				demand.payment_type LIKE ? OR 
				demand.paid_by LIKE ? OR 
				demand.payment_chq_no LIKE ? OR 
				demand.payment_chq_date LIKE ? OR 
				demand.payment_bankname LIKE ? OR 
				demand.payment_cash_collection_center LIKE ? OR 
				demand.payment_counter LIKE ? OR 
				demand.status LIKE ? OR 
				demand.paid LIKE ? OR 
				demand.upload_dd_or_cheque LIKE ? OR 
				demand.payment_done LIKE ? OR 
				demand.timestamp LIKE ? OR 
				demand.user_id LIKE ? OR 
				demand.remark LIKE ? OR 
				demand.demand_required LIKE ?
			)";
			$search_params = array(
				"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
			);
			//setting search conditions
			$db->where($search_condition, $search_params);
			 //template to use when ajax search
			$this->view->search_template = "demand/search.php";
		}
		if(!empty($request->orderby)){
			$orderby = $request->orderby;
			$ordertype = (!empty($request->ordertype) ? $request->ordertype : ORDER_TYPE);
			$db->orderBy($orderby, $ordertype);
		}
		else{
			$db->orderBy("demand.id", ORDER_TYPE);
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
		$page_title = $this->view->page_title = "Demand";
		$this->view->report_filename = date('Y-m-d') . '-' . $page_title;
		$this->view->report_title = $page_title;
		$this->view->report_layout = "report_layout.php";
		$this->view->report_paper_size = "A4";
		$this->view->report_orientation = "portrait";
		$this->render_view("demand/detailed_challan.php", $data); //render the full page
	}
	
     function challan($fieldname = null , $fieldvalue = null){
		$request = $this->request;
		$db = $this->GetModel();
		$tablename = $this->tablename;
		$fields = array("id", 
			"db_name", 
			"rec_id", 
			"amount", 
			"payment_flag", 
			"payment_person", 
			"payment_type", 
			"paid_by", 
			"payment_chq_no", 
			"payment_chq_date", 
			"payment_bankname", 
			"payment_cash_collection_center", 
			"payment_counter", 
			"status", 
			"paid", 
			"upload_dd_or_cheque", 
			"payment_done", 
			"timestamp", 
			"user_id", 
			"remark", 
			"demand_required");
		$pagination = $this->get_pagination(MAX_RECORD_COUNT); // get current pagination e.g array(page_number, page_limit)
		//search table record
		if(!empty($request->search)){
			$text = trim($request->search); 
			$search_condition = "(
				demand.id LIKE ? OR 
				demand.db_name LIKE ? OR 
				demand.rec_id LIKE ? OR 
				demand.amount LIKE ? OR 
				demand.payment_flag LIKE ? OR 
				demand.payment_person LIKE ? OR 
				demand.payment_type LIKE ? OR 
				demand.paid_by LIKE ? OR 
				demand.payment_chq_no LIKE ? OR 
				demand.payment_chq_date LIKE ? OR 
				demand.payment_bankname LIKE ? OR 
				demand.payment_cash_collection_center LIKE ? OR 
				demand.payment_counter LIKE ? OR 
				demand.status LIKE ? OR 
				demand.paid LIKE ? OR 
				demand.upload_dd_or_cheque LIKE ? OR 
				demand.payment_done LIKE ? OR 
				demand.timestamp LIKE ? OR 
				demand.user_id LIKE ? OR 
				demand.remark LIKE ? OR 
				demand.demand_required LIKE ?
			)";
			$search_params = array(
				"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
			);
			//setting search conditions
			$db->where($search_condition, $search_params);
			 //template to use when ajax search
			$this->view->search_template = "demand/search.php";
		}
		if(!empty($request->orderby)){
			$orderby = $request->orderby;
			$ordertype = (!empty($request->ordertype) ? $request->ordertype : ORDER_TYPE);
			$db->orderBy($orderby, $ordertype);
		}
		else{
			$db->orderBy("demand.id", ORDER_TYPE);
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
		$page_title = $this->view->page_title = "Demand";
		$this->view->report_filename = date('Y-m-d') . '-' . $page_title;
		$this->view->report_title = $page_title;
		$this->view->report_layout = "report_layout.php";
		$this->view->report_paper_size = "A4";
		$this->view->report_orientation = "portrait";
		$this->render_view("demand/challan.php", $data); //render the full page
	}
	
	
	function index($fieldname = null , $fieldvalue = null){
		$request = $this->request;
		$db = $this->GetModel();
		$tablename = $this->tablename;
		$fields = array("id", 
			"db_name", 
			"rec_id", 
			"amount", 
			"payment_flag", 
			"payment_person", 
			"payment_type", 
			"paid_by", 
			"payment_chq_no", 
			"payment_chq_date", 
			"payment_bankname", 
			"payment_cash_collection_center", 
			"payment_counter", 
			"status", 
			"paid", 
			"upload_dd_or_cheque", 
			"payment_done", 
			"timestamp", 
			"user_id", 
			"remark", 
			"demand_required");
		$pagination = $this->get_pagination(MAX_RECORD_COUNT); // get current pagination e.g array(page_number, page_limit)
		//search table record
		if(!empty($request->search)){
			$text = trim($request->search); 
			$search_condition = "(
				demand.id LIKE ? OR 
				demand.db_name LIKE ? OR 
				demand.rec_id LIKE ? OR 
				demand.amount LIKE ? OR 
				demand.payment_flag LIKE ? OR 
				demand.payment_person LIKE ? OR 
				demand.payment_type LIKE ? OR 
				demand.paid_by LIKE ? OR 
				demand.payment_chq_no LIKE ? OR 
				demand.payment_chq_date LIKE ? OR 
				demand.payment_bankname LIKE ? OR 
				demand.payment_cash_collection_center LIKE ? OR 
				demand.payment_counter LIKE ? OR 
				demand.status LIKE ? OR 
				demand.paid LIKE ? OR 
				demand.upload_dd_or_cheque LIKE ? OR 
				demand.payment_done LIKE ? OR 
				demand.timestamp LIKE ? OR 
				demand.user_id LIKE ? OR 
				demand.remark LIKE ? OR 
				demand.demand_required LIKE ?
			)";
			$search_params = array(
				"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
			);
			//setting search conditions
			$db->where($search_condition, $search_params);
			 //template to use when ajax search
			$this->view->search_template = "demand/search.php";
		}
		if(!empty($request->orderby)){
			$orderby = $request->orderby;
			$ordertype = (!empty($request->ordertype) ? $request->ordertype : ORDER_TYPE);
			$db->orderBy($orderby, $ordertype);
		}
		else{
			$db->orderBy("demand.id", ORDER_TYPE);
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
		$page_title = $this->view->page_title = "Demand";
		$this->view->report_filename = date('Y-m-d') . '-' . $page_title;
		$this->view->report_title = $page_title;
		$this->view->report_layout = "report_layout.php";
		$this->view->report_paper_size = "A4";
		$this->view->report_orientation = "portrait";
		$this->render_view("demand/list.php", $data); //render the full page
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
			"db_name", 
			"rec_id", 
			"amount", 
			"payment_flag", 
			"payment_person", 
			"payment_type", 
			"paid_by", 
			"payment_chq_no", 
			"payment_chq_date", 
			"payment_bankname", 
			"payment_cash_collection_center", 
			"payment_counter", 
			"status", 
			"paid", 
			"upload_dd_or_cheque", 
			"payment_done", 
			"timestamp", 
			"user_id", 
			"remark", 
			"demand_required");
		if($value){
			$db->where($rec_id, urldecode($value)); //select record based on field name
		}
		else{
			$db->where("demand.id", $rec_id);; //select record based on primary key
		}
		$record = $db->getOne($tablename, $fields );
		if($record){
			$page_title = $this->view->page_title = "View  Demand";
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
		return $this->render_view("demand/view.php", $record);
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
			$fields = $this->fields = array("db_name","rec_id","demand_required","amount");
			$postdata = $this->format_request_data($formdata);
			$this->rules_array = array(
				'db_name' => 'required',
				'rec_id' => 'required',
				'demand_required' => 'required',
				'amount' => 'numeric',
			);
			$this->sanitize_array = array(
				'db_name' => 'sanitize_string',
				'rec_id' => 'sanitize_string',
				'demand_required' => 'sanitize_string',
				'amount' => 'sanitize_string',
			);
			$this->filter_vals = true; //set whether to remove empty fields
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			if($this->validated()){
				$rec_id = $this->rec_id = $db->insert($tablename, $modeldata);
				if($rec_id){
				          # Statement to execute after adding record
        $paid = $rec_id;
// Searching that record in database & updating in correct table
$db->where("id",$modeldata['rec_id']);
$rec = $db->getOne($modeldata['db_name'],"*");
$paids = explode(",",$rec['paid']);
$paids[] = $paid;
$db->where("id",$modeldata['rec_id']);
if($modeldata['demand_required']=="NO"){
    
$db->update($modeldata['db_name'],["paid"=>implode(",",$paids),"payment_done"=>1]);
}else{
    
$db->update($modeldata['db_name'],["paid"=>implode(",",$paids),"payment_done"=>0]);
}
$red = $modeldata['db_name'];
// --- Special case for fire_final_noc ---
if ($modeldata['db_name'] == 'fire_final_noc') {
    // Fetch that specific fire_final_noc record
    $db->where("id", $modeldata['rec_id']);
    $rec1 = $db->getOne('fire_final_noc', "*");
    // If payment_done = 0, mark 'paid' as 1
    if ($rec1 && $rec1['payment_done'] == "0") {
        $table_data = array("paid" => $rec_id);
        $db->where("id", $modeldata['rec_id']);
        $bool = $db->update("fire_final_noc", $table_data);
    }
}

		# End of after add statement
					$this->set_flash_msg("Record added successfully", "success");
					return	$this->redirect("$red");
				}
				else{
					$this->set_page_error();
				}
			}
		}
		$page_title = $this->view->page_title = "Add New Demand";
		$this->render_view("demand/add.php");
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
		$fields = $this->fields = array("id","db_name","rec_id","demand_required","amount","payment_person","payment_type","payment_chq_no","payment_chq_date","payment_bankname","remark","user_id");
		if($formdata){
			$postdata = $this->format_request_data($formdata);
			$this->rules_array = array(
				'db_name' => 'required',
				'rec_id' => 'required',
				'demand_required' => 'required',
				'amount' => 'numeric',
			);
			$this->sanitize_array = array(
				'db_name' => 'sanitize_string',
				'rec_id' => 'sanitize_string',
				'demand_required' => 'sanitize_string',
				'amount' => 'sanitize_string',
				'payment_person' => 'sanitize_string',
				'payment_type' => 'sanitize_string',
				'payment_chq_no' => 'sanitize_string',
				'payment_chq_date' => 'sanitize_string',
				'payment_bankname' => 'sanitize_string',
				'remark' => 'sanitize_string',
			);
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			$modeldata['user_id'] = USER_ID;
			if($this->validated()){
		# Statement to execute after adding record
		if($modeldata['demand_required']=="NO"){
 $modeldata['remark'] = "AMOUNT PRE PAID - ".$modeldata['amount'];
 $modeldata['amount'] = 0;
}
		# End of before update statement
				$db->where("demand.id", $rec_id);;
				$bool = $db->update($tablename, $modeldata);
				$numRows = $db->getRowCount(); //number of affected rows. 0 = no record field updated
				if($bool && $numRows){
		# Statement to execute after adding record
			$paid = 1;
if($modeldata['demand_required']=="NO"){
  $paid = -1;
}
// Searching that record inn particular table & updating where payment is greater than 0
$db->where("id",$modeldata['rec_id']);
$db->update($modeldata['db_name'],["payment_done"=>$paid]);
// Storing db_name in the $var variable
$var = $modeldata['db_name'];
		# End of after update statement
					$this->set_flash_msg("Record updated successfully", "success");
					return $this->redirect("$var");
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
						return	$this->redirect("$var");
					}
				}
			}
		}
		$db->where("demand.id", $rec_id);;
		$data = $db->getOne($tablename, $fields);
		$page_title = $this->view->page_title = "Edit  Demand";
		if(!$data){
			$this->set_page_error();
		}
		return $this->render_view("demand/edit.php", $data);
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
		$db->where("demand.id", $arr_rec_id, "in");
		$bool = $db->delete($tablename);
		if($bool){
			$this->set_flash_msg("Record deleted successfully", "success");
		}
		elseif($db->getLastError()){
			$page_error = $db->getLastError();
			$this->set_flash_msg($page_error, "danger");
		}
		return	$this->redirect("demand");
	}
}
