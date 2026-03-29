<?php 
/**
 * Report_header_footer Page Controller
 * @category  Controller
 */
class Report_header_footerController extends SecureController{
	function __construct(){
		parent::__construct();
		$this->tablename = "report_header_footer";
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
			"header", 
			"footer", 
			"type", 
			"status", 
			"paid", 
			"int_no", 
			"yr", 
			"zone", 
			"payment_done", 
			"certificate_file", 
			"timestamp");
		$pagination = $this->get_pagination(MAX_RECORD_COUNT); // get current pagination e.g array(page_number, page_limit)
		//search table record
		if(!empty($request->search)){
			$text = trim($request->search); 
			$search_condition = "(
				report_header_footer.id LIKE ? OR 
				report_header_footer.header LIKE ? OR 
				report_header_footer.footer LIKE ? OR 
				report_header_footer.type LIKE ? OR 
				report_header_footer.status LIKE ? OR 
				report_header_footer.paid LIKE ? OR 
				report_header_footer.int_no LIKE ? OR 
				report_header_footer.yr LIKE ? OR 
				report_header_footer.zone LIKE ? OR 
				report_header_footer.payment_done LIKE ? OR 
				report_header_footer.certificate_file LIKE ? OR 
				report_header_footer.timestamp LIKE ?
			)";
			$search_params = array(
				"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
			);
			//setting search conditions
			$db->where($search_condition, $search_params);
			 //template to use when ajax search
			$this->view->search_template = "report_header_footer/search.php";
		}
		if(!empty($request->orderby)){
			$orderby = $request->orderby;
			$ordertype = (!empty($request->ordertype) ? $request->ordertype : ORDER_TYPE);
			$db->orderBy($orderby, $ordertype);
		}
		else{
			$db->orderBy("report_header_footer.id", ORDER_TYPE);
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
		$page_title = $this->view->page_title = "Report Header Footer";
		$this->view->report_filename = date('Y-m-d') . '-' . $page_title;
		$this->view->report_title = $page_title;
		$this->view->report_layout = "report_layout.php";
		$this->view->report_paper_size = "A4";
		$this->view->report_orientation = "portrait";
		$this->render_view("report_header_footer/list.php", $data); //render the full page
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
			"header", 
			"footer", 
			"type", 
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
			$db->where("report_header_footer.id", $rec_id);; //select record based on primary key
		}
		$record = $db->getOne($tablename, $fields );
		if($record){
			$page_title = $this->view->page_title = "View  Report Header Footer";
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
		return $this->render_view("report_header_footer/view.php", $record);
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
			$fields = $this->fields = array("header","footer","type","status","paid","int_no","yr","zone","payment_done","certificate_file");
			$postdata = $this->format_request_data($formdata);
			$this->rules_array = array(
				'header' => 'required',
				'footer' => 'required',
				'type' => 'required',
				'status' => 'required',
				'paid' => 'required|numeric',
				'int_no' => 'required|numeric',
				'yr' => 'required',
				'zone' => 'required',
				'payment_done' => 'required',
				'certificate_file' => 'required',
			);
			$this->sanitize_array = array(
				'header' => 'sanitize_string',
				'footer' => 'sanitize_string',
				'type' => 'sanitize_string',
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
					return	$this->redirect("report_header_footer");
				}
				else{
					$this->set_page_error();
				}
			}
		}
		$page_title = $this->view->page_title = "Add New Report Header Footer";
		$this->render_view("report_header_footer/add.php");
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
		$fields = $this->fields = array("id","header","footer","type","status","paid","int_no","yr","zone","payment_done","certificate_file");
		if($formdata){
			$postdata = $this->format_request_data($formdata);
			$this->rules_array = array(
				'header' => 'required',
				'footer' => 'required',
				'type' => 'required',
				'status' => 'required',
				'paid' => 'required|numeric',
				'int_no' => 'required|numeric',
				'yr' => 'required',
				'zone' => 'required',
				'payment_done' => 'required',
				'certificate_file' => 'required',
			);
			$this->sanitize_array = array(
				'header' => 'sanitize_string',
				'footer' => 'sanitize_string',
				'type' => 'sanitize_string',
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
				$db->where("report_header_footer.id", $rec_id);;
				$bool = $db->update($tablename, $modeldata);
				$numRows = $db->getRowCount(); //number of affected rows. 0 = no record field updated
				if($bool && $numRows){
					$this->set_flash_msg("Record updated successfully", "success");
					return $this->redirect("report_header_footer");
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
						return	$this->redirect("report_header_footer");
					}
				}
			}
		}
		$db->where("report_header_footer.id", $rec_id);;
		$data = $db->getOne($tablename, $fields);
		$page_title = $this->view->page_title = "Edit  Report Header Footer";
		if(!$data){
			$this->set_page_error();
		}
		return $this->render_view("report_header_footer/edit.php", $data);
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
		$db->where("report_header_footer.id", $arr_rec_id, "in");
		$bool = $db->delete($tablename);
		if($bool){
			$this->set_flash_msg("Record deleted successfully", "success");
		}
		elseif($db->getLastError()){
			$page_error = $db->getLastError();
			$this->set_flash_msg($page_error, "danger");
		}
		return	$this->redirect("report_header_footer");
	}
}
