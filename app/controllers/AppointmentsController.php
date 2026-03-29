<?php 
/**
 * Appointments Page Controller
 * @category  Controller
 */
class AppointmentsController extends SecureController{
	function __construct(){
		parent::__construct();
		$this->tablename = "appointments";
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
			"db_name", 
			"rec_id", 
			"admin_id", 
			"date", 
			"time", 
			"timestamp", 
			"user_id");
		$pagination = $this->get_pagination(MAX_RECORD_COUNT); // get current pagination e.g array(page_number, page_limit)
		//search table record
		if(!empty($request->search)){
			$text = trim($request->search); 
			$search_condition = "(
				appointments.id LIKE ? OR 
				appointments.db_name LIKE ? OR 
				appointments.rec_id LIKE ? OR 
				appointments.admin_id LIKE ? OR 
				appointments.date LIKE ? OR 
				appointments.time LIKE ? OR 
				appointments.status LIKE ? OR 
				appointments.paid LIKE ? OR 
				appointments.int_no LIKE ? OR 
				appointments.yr LIKE ? OR 
				appointments.zone LIKE ? OR 
				appointments.payment_done LIKE ? OR 
				appointments.certificate_file LIKE ? OR 
				appointments.timestamp LIKE ? OR 
				appointments.user_id LIKE ?
			)";
			$search_params = array(
				"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
			);
			//setting search conditions
			$db->where($search_condition, $search_params);
			 //template to use when ajax search
			$this->view->search_template = "appointments/search.php";
		}
		if(!empty($request->orderby)){
			$orderby = $request->orderby;
			$ordertype = (!empty($request->ordertype) ? $request->ordertype : ORDER_TYPE);
			$db->orderBy($orderby, $ordertype);
		}
		else{
			$db->orderBy("appointments.id", ORDER_TYPE);
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
		$page_title = $this->view->page_title = "Appointments";
		$this->view->report_filename = date('Y-m-d') . '-' . $page_title;
		$this->view->report_title = $page_title;
		$this->view->report_layout = "report_layout.php";
		$this->view->report_paper_size = "A4";
		$this->view->report_orientation = "portrait";
		$this->render_view("appointments/list.php", $data); //render the full page
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
			"admin_id", 
			"date", 
			"time", 
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
			$db->where("appointments.id", $rec_id);; //select record based on primary key
		}
		$record = $db->getOne($tablename, $fields );
		if($record){
			$page_title = $this->view->page_title = "View  Appointments";
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
		return $this->render_view("appointments/view.php", $record);
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
			$fields = $this->fields = array("db_name","rec_id","admin_id","date","time","user_id");
			$postdata = $this->format_request_data($formdata);
			$this->rules_array = array(
				'db_name' => 'required',
				'rec_id' => 'required',
				'date' => 'required',
				'time' => 'required',
			);
			$this->sanitize_array = array(
				'db_name' => 'sanitize_string',
				'rec_id' => 'sanitize_string',
				'date' => 'sanitize_string',
				'time' => 'sanitize_string',
			);
			$this->filter_vals = true; //set whether to remove empty fields
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			$modeldata['admin_id'] = USER_ID;
$modeldata['user_id'] = USER_ID;
			if($this->validated()){
		# Statement to execute before adding record
//query the database and return a single row
$fields = array('*');
$db->where("admin_id", $modeldata['admin_id']);
$db->where("date", $modeldata['date']);
$db->where("time", $modeldata['time']);
$record = $db->get("appointments",99999, $fields);
if(count($record)>0){
    $this->set_flash_msg("PLZ YOU HAVE ALREADY GIVEN APPOINTMENT ON SAME TIME", "danger");
        return $this->redirect("$db_name");
        exit();
}
$fields = array('*');
$db->where("id", $modeldata['rec_id']);
$record = $db->get($modeldata['db_name'],1, $fields);
//get email
$fields = array('email');
$db->where("id", $record[0]['userid']);
  $email = $db->get("user_info",1, $fields)[0]['email'];
$fields = array('*');
$db->where("type", "appointment");
$format = $db->get("mail_formats",1, $fields)[0];
$mailt    = "Dear Citizen,<br> Your Appointment for ".$modeldata['db_name']." has been scheduled at ".$modeldata['date']." Time : ".$modeldata['time'];
$mailtext = $format['header'].$mailt.$format['footer'];
#please make sure you have configure the mail settings
$mailtitle      = "Appointment Scheduled";
$mailbody       = $mailtext;
$receiver_email = DEFAULT_EMAIL;
$mailer         = new Mailer;
$mailer->send_mail($email, $mailtitle, $mailbody);
		# End of before add statement
				$rec_id = $this->rec_id = $db->insert($tablename, $modeldata);
				if($rec_id){
					$this->set_flash_msg("Record added successfully", "success");
					return	$this->redirect("appointments");
				}
				else{
					$this->set_page_error();
				}
			}
		}
		$page_title = $this->view->page_title = "Add New Appointments";
		$this->render_view("appointments/add.php");
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
		$fields = $this->fields = array("id","db_name","rec_id","admin_id","date","time","user_id");
		if($formdata){
			$postdata = $this->format_request_data($formdata);
			$this->rules_array = array(
				'db_name' => 'required',
				'rec_id' => 'required',
				'date' => 'required',
				'time' => 'required',
			);
			$this->sanitize_array = array(
				'db_name' => 'sanitize_string',
				'rec_id' => 'sanitize_string',
				'date' => 'sanitize_string',
				'time' => 'sanitize_string',
			);
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			$modeldata['admin_id'] = USER_ID;
$modeldata['user_id'] = USER_ID;
			if($this->validated()){
				$db->where("appointments.id", $rec_id);;
				$bool = $db->update($tablename, $modeldata);
				$numRows = $db->getRowCount(); //number of affected rows. 0 = no record field updated
				if($bool && $numRows){
					$this->set_flash_msg("Record updated successfully", "success");
					return $this->redirect("appointments");
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
						return	$this->redirect("appointments");
					}
				}
			}
		}
		$db->where("appointments.id", $rec_id);;
		$data = $db->getOne($tablename, $fields);
		$page_title = $this->view->page_title = "Edit  Appointments";
		if(!$data){
			$this->set_page_error();
		}
		return $this->render_view("appointments/edit.php", $data);
	}
	/**
     * Update single field
	 * @param $rec_id (select record by table primary key)
	 * @param $formdata array() from $_POST
     * @return array
     */
	function editfield($rec_id = null, $formdata = null){
		$db = $this->GetModel();
		$this->rec_id = $rec_id;
		$tablename = $this->tablename;
		//editable fields
		$fields = $this->fields = array("id","db_name","rec_id","admin_id","date","time","user_id");
		$page_error = null;
		if($formdata){
			$postdata = array();
			$fieldname = $formdata['name'];
			$fieldvalue = $formdata['value'];
			$postdata[$fieldname] = $fieldvalue;
			$postdata = $this->format_request_data($postdata);
			$this->rules_array = array(
				'db_name' => 'required',
				'rec_id' => 'required',
				'date' => 'required',
				'time' => 'required',
			);
			$this->sanitize_array = array(
				'db_name' => 'sanitize_string',
				'rec_id' => 'sanitize_string',
				'date' => 'sanitize_string',
				'time' => 'sanitize_string',
			);
			$this->filter_rules = true; //filter validation rules by excluding fields not in the formdata
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			if($this->validated()){
				$db->where("appointments.id", $rec_id);;
				$bool = $db->update($tablename, $modeldata);
				$numRows = $db->getRowCount();
				if($bool && $numRows){
					return render_json(
						array(
							'num_rows' =>$numRows,
							'rec_id' =>$rec_id,
						)
					);
				}
				else{
					if($db->getLastError()){
						$page_error = $db->getLastError();
					}
					elseif(!$numRows){
						$page_error = "No record updated";
					}
					render_error($page_error);
				}
			}
			else{
				render_error($this->view->page_error);
			}
		}
		return null;
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
		$db->where("appointments.id", $arr_rec_id, "in");
		$bool = $db->delete($tablename);
		if($bool){
			$this->set_flash_msg("Record deleted successfully", "success");
		}
		elseif($db->getLastError()){
			$page_error = $db->getLastError();
			$this->set_flash_msg($page_error, "danger");
		}
		return	$this->redirect("appointments");
	}
}
