<?php 
/**
 * School_college_coaching_inspection_form Page Controller
 * @category  Controller
 */
class School_college_coaching_inspection_formController extends SecureController{
	function __construct(){
		parent::__construct();
		$this->tablename = "school_college_coaching_inspection_form";
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
			"institute_name", 
			"institute_address", 
			"building_floors", 
			"institute_owners_name", 
			"owners_mobile_no", 
			"principals_name", 
			"principals_mobile_no", 
			"grade_n_class_from", 
			"grade_n_class_to", 
			"entrance_and_exit_routes_details", 
			"stairecase_count", 
			"water_storage_capacity_terrace", 
			"water_storage_capacity_groundfloor", 
			"institute_total_area", 
			"number_of_classrooms", 
			"is_laboratory_in_good_condition", 
			"is_reading_room_in_good_condition", 
			"no_table_reading_room", 
			"no_chair_reading_room", 
			"is_record_room_in_good_condition", 
			"is_computer_n_server_room_in_good_condition", 
			"computer_n_server_room_count", 
			"is_lifts_in_the_good_condition", 
			"no_lifts_in_the_building", 
			"status_lifts_in_the_building", 
			"generator_system_capacity", 
			"is_generator_system_in_good_condition", 
			"is_electrical_conection_in_good_condition", 
			"is_electric_audit_report_value", 
			"electrical_audit_report_date", 
			"air_conditioning_system_cert", 
			"fire_fighting_system_abc_type", 
			"fire_fighting_system_co2_type", 
			"fire_fighting_noc", 
			"user_id", 
			"date");
		$pagination = $this->get_pagination(MAX_RECORD_COUNT); // get current pagination e.g array(page_number, page_limit)
		//search table record
		if(!empty($request->search)){
			$text = trim($request->search); 
			$search_condition = "(
				school_college_coaching_inspection_form.id LIKE ? OR 
				school_college_coaching_inspection_form.recid LIKE ? OR 
				school_college_coaching_inspection_form.institute_name LIKE ? OR 
				school_college_coaching_inspection_form.institute_address LIKE ? OR 
				school_college_coaching_inspection_form.building_floors LIKE ? OR 
				school_college_coaching_inspection_form.institute_owners_name LIKE ? OR 
				school_college_coaching_inspection_form.owners_mobile_no LIKE ? OR 
				school_college_coaching_inspection_form.principals_name LIKE ? OR 
				school_college_coaching_inspection_form.principals_mobile_no LIKE ? OR 
				school_college_coaching_inspection_form.grade_n_class_from LIKE ? OR 
				school_college_coaching_inspection_form.grade_n_class_to LIKE ? OR 
				school_college_coaching_inspection_form.entrance_and_exit_routes_details LIKE ? OR 
				school_college_coaching_inspection_form.stairecase_count LIKE ? OR 
				school_college_coaching_inspection_form.water_storage_capacity_terrace LIKE ? OR 
				school_college_coaching_inspection_form.water_storage_capacity_groundfloor LIKE ? OR 
				school_college_coaching_inspection_form.institute_total_area LIKE ? OR 
				school_college_coaching_inspection_form.number_of_classrooms LIKE ? OR 
				school_college_coaching_inspection_form.is_laboratory_in_good_condition LIKE ? OR 
				school_college_coaching_inspection_form.is_reading_room_in_good_condition LIKE ? OR 
				school_college_coaching_inspection_form.no_table_reading_room LIKE ? OR 
				school_college_coaching_inspection_form.no_chair_reading_room LIKE ? OR 
				school_college_coaching_inspection_form.is_record_room_in_good_condition LIKE ? OR 
				school_college_coaching_inspection_form.is_computer_n_server_room_in_good_condition LIKE ? OR 
				school_college_coaching_inspection_form.computer_n_server_room_count LIKE ? OR 
				school_college_coaching_inspection_form.is_lifts_in_the_good_condition LIKE ? OR 
				school_college_coaching_inspection_form.no_lifts_in_the_building LIKE ? OR 
				school_college_coaching_inspection_form.status_lifts_in_the_building LIKE ? OR 
				school_college_coaching_inspection_form.generator_system_capacity LIKE ? OR 
				school_college_coaching_inspection_form.is_generator_system_in_good_condition LIKE ? OR 
				school_college_coaching_inspection_form.is_electrical_conection_in_good_condition LIKE ? OR 
				school_college_coaching_inspection_form.is_electrical_audit_report LIKE ? OR 
				school_college_coaching_inspection_form.is_electric_audit_report_value LIKE ? OR 
				school_college_coaching_inspection_form.electrical_audit_report_date LIKE ? OR 
				school_college_coaching_inspection_form.air_conditioning_system_cert LIKE ? OR 
				school_college_coaching_inspection_form.fire_fighting_system_abc_type LIKE ? OR 
				school_college_coaching_inspection_form.fire_fighting_system_co2_type LIKE ? OR 
				school_college_coaching_inspection_form.fire_fighting_noc LIKE ? OR 
				school_college_coaching_inspection_form.user_id LIKE ? OR 
				school_college_coaching_inspection_form.date LIKE ? OR 
				school_college_coaching_inspection_form.status LIKE ? OR 
				school_college_coaching_inspection_form.paid LIKE ? OR 
				school_college_coaching_inspection_form.int_no LIKE ? OR 
				school_college_coaching_inspection_form.yr LIKE ? OR 
				school_college_coaching_inspection_form.zone LIKE ? OR 
				school_college_coaching_inspection_form.payment_done LIKE ? OR 
				school_college_coaching_inspection_form.certificate_file LIKE ? OR 
				school_college_coaching_inspection_form.timestamp LIKE ?
			)";
			$search_params = array(
				"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
			);
			//setting search conditions
			$db->where($search_condition, $search_params);
			 //template to use when ajax search
			$this->view->search_template = "school_college_coaching_inspection_form/search.php";
		}
		if(!empty($request->orderby)){
			$orderby = $request->orderby;
			$ordertype = (!empty($request->ordertype) ? $request->ordertype : ORDER_TYPE);
			$db->orderBy($orderby, $ordertype);
		}
		else{
			$db->orderBy("school_college_coaching_inspection_form.id", ORDER_TYPE);
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
				$record['electrical_audit_report_date'] = human_date($record['electrical_audit_report_date']);
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
		$page_title = $this->view->page_title = "School College Coaching Inspection Form";
		$this->render_view("school_college_coaching_inspection_form/list.php", $data); //render the full page
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
			"institute_name", 
			"institute_address", 
			"building_floors", 
			"institute_owners_name", 
			"owners_mobile_no", 
			"principals_name", 
			"principals_mobile_no", 
			"grade_n_class_from", 
			"grade_n_class_to", 
			"entrance_and_exit_routes_details", 
			"stairecase_count", 
			"water_storage_capacity_terrace", 
			"water_storage_capacity_groundfloor", 
			"institute_total_area", 
			"number_of_classrooms", 
			"is_laboratory_in_good_condition", 
			"is_reading_room_in_good_condition", 
			"no_table_reading_room", 
			"no_chair_reading_room", 
			"is_record_room_in_good_condition", 
			"is_computer_n_server_room_in_good_condition", 
			"computer_n_server_room_count", 
			"is_lifts_in_the_good_condition", 
			"no_lifts_in_the_building", 
			"status_lifts_in_the_building", 
			"generator_system_capacity", 
			"is_generator_system_in_good_condition", 
			"is_electrical_conection_in_good_condition", 
			"is_electrical_audit_report", 
			"electrical_audit_report_date", 
			"air_conditioning_system_cert", 
			"fire_fighting_system_abc_type", 
			"fire_fighting_system_co2_type", 
			"fire_fighting_noc", 
			"user_id", 
			"date");
		if($value){
			$db->where($rec_id, urldecode($value)); //select record based on field name
		}
		else{
			$db->where("school_college_coaching_inspection_form.id", $rec_id);; //select record based on primary key
		}
		$record = $db->getOne($tablename, $fields );
		if($record){
			$record['electrical_audit_report_date'] = human_date($record['electrical_audit_report_date']);
			$page_title = $this->view->page_title = "View  School College Coaching Inspection Form";
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
		return $this->render_view("school_college_coaching_inspection_form/view.php", $record);
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
			$fields = $this->fields = array("recid","institute_name","institute_address","building_floors","institute_owners_name","owners_mobile_no","principals_name","principals_mobile_no","grade_n_class_from","grade_n_class_to","entrance_and_exit_routes_details","stairecase_count","water_storage_capacity_terrace","water_storage_capacity_groundfloor","institute_total_area","number_of_classrooms","is_laboratory_in_good_condition","is_reading_room_in_good_condition","no_table_reading_room","no_chair_reading_room","is_record_room_in_good_condition","is_computer_n_server_room_in_good_condition","computer_n_server_room_count","is_lifts_in_the_good_condition","no_lifts_in_the_building","status_lifts_in_the_building","generator_system_capacity","is_generator_system_in_good_condition","is_electrical_conection_in_good_condition","is_electrical_audit_report","electrical_audit_report_date","air_conditioning_system_cert","fire_fighting_system_abc_type","fire_fighting_system_co2_type","fire_fighting_noc","user_id","date","status");
			$postdata = $this->format_request_data($formdata);
			$this->rules_array = array(
				'recid' => 'required',
				'institute_name' => 'required',
				'institute_address' => 'required',
				'building_floors' => 'required',
				'institute_owners_name' => 'required',
				'owners_mobile_no' => 'required',
				'principals_name' => 'required',
				'principals_mobile_no' => 'required',
				'grade_n_class_from' => 'required',
				'grade_n_class_to' => 'required',
				'entrance_and_exit_routes_details' => 'required',
				'stairecase_count' => 'required|numeric',
				'water_storage_capacity_terrace' => 'required',
				'water_storage_capacity_groundfloor' => 'required',
				'institute_total_area' => 'required',
				'number_of_classrooms' => 'required|numeric',
				'is_laboratory_in_good_condition' => 'required',
				'is_reading_room_in_good_condition' => 'required',
				'no_table_reading_room' => 'required|numeric',
				'no_chair_reading_room' => 'required',
				'is_record_room_in_good_condition' => 'required',
				'is_computer_n_server_room_in_good_condition' => 'required',
				'computer_n_server_room_count' => 'required|numeric',
				'is_lifts_in_the_good_condition' => 'required',
				'no_lifts_in_the_building' => 'required|numeric',
				'status_lifts_in_the_building' => 'required',
				'generator_system_capacity' => 'required',
				'is_generator_system_in_good_condition' => 'required',
				'is_electrical_conection_in_good_condition' => 'required',
				'is_electrical_audit_report' => 'required',
				'air_conditioning_system_cert' => 'required',
				'fire_fighting_system_abc_type' => 'required',
				'fire_fighting_system_co2_type' => 'required',
				'fire_fighting_noc' => 'required',
			);
			$this->sanitize_array = array(
				'recid' => 'sanitize_string',
				'institute_name' => 'sanitize_string',
				'institute_address' => 'sanitize_string',
				'building_floors' => 'sanitize_string',
				'institute_owners_name' => 'sanitize_string',
				'owners_mobile_no' => 'sanitize_string',
				'principals_name' => 'sanitize_string',
				'principals_mobile_no' => 'sanitize_string',
				'grade_n_class_from' => 'sanitize_string',
				'grade_n_class_to' => 'sanitize_string',
				'entrance_and_exit_routes_details' => 'sanitize_string',
				'stairecase_count' => 'sanitize_string',
				'water_storage_capacity_terrace' => 'sanitize_string',
				'water_storage_capacity_groundfloor' => 'sanitize_string',
				'institute_total_area' => 'sanitize_string',
				'number_of_classrooms' => 'sanitize_string',
				'is_laboratory_in_good_condition' => 'sanitize_string',
				'is_reading_room_in_good_condition' => 'sanitize_string',
				'no_table_reading_room' => 'sanitize_string',
				'no_chair_reading_room' => 'sanitize_string',
				'is_record_room_in_good_condition' => 'sanitize_string',
				'is_computer_n_server_room_in_good_condition' => 'sanitize_string',
				'computer_n_server_room_count' => 'sanitize_string',
				'is_lifts_in_the_good_condition' => 'sanitize_string',
				'no_lifts_in_the_building' => 'sanitize_string',
				'status_lifts_in_the_building' => 'sanitize_string',
				'generator_system_capacity' => 'sanitize_string',
				'is_generator_system_in_good_condition' => 'sanitize_string',
				'is_electrical_conection_in_good_condition' => 'sanitize_string',
				'is_electrical_audit_report' => 'sanitize_string',
				'electrical_audit_report_date' => 'sanitize_string',
				'air_conditioning_system_cert' => 'sanitize_string',
				'fire_fighting_system_abc_type' => 'sanitize_string',
				'fire_fighting_system_co2_type' => 'sanitize_string',
				'fire_fighting_noc' => 'sanitize_string',
			);
			$this->filter_vals = true; //set whether to remove empty fields
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			$modeldata['user_id'] = USER_ID;
$modeldata['date'] = date_now();
$modeldata['status'] = "0";
			if($this->validated()){
				$rec_id = $this->rec_id = $db->insert($tablename, $modeldata);
				if($rec_id){
		# Statement to execute after adding record
		// Updating the inspection_don status in the `fire_noc_establishment` table.
$db->where("id",$modeldata['recid']);
$db->update("fire_noc_establishment",["inspection_done"=>$rec_id]);
		# End of after add statement
					$this->set_flash_msg("Record added successfully", "success");
					return	$this->redirect("fire_noc_establishment");
				}
				else{
					$this->set_page_error();
				}
			}
		}
		$page_title = $this->view->page_title = "Add New School College Coaching Inspection Form";
		$this->render_view("school_college_coaching_inspection_form/add.php");
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
		$fields = $this->fields = array("id","recid","institute_name","institute_address","building_floors","institute_owners_name","owners_mobile_no","principals_name","principals_mobile_no","grade_n_class_from","grade_n_class_to","entrance_and_exit_routes_details","stairecase_count","water_storage_capacity_terrace","water_storage_capacity_groundfloor","institute_total_area","number_of_classrooms","is_laboratory_in_good_condition","is_reading_room_in_good_condition","no_table_reading_room","no_chair_reading_room","is_record_room_in_good_condition","is_computer_n_server_room_in_good_condition","computer_n_server_room_count","is_lifts_in_the_good_condition","no_lifts_in_the_building","status_lifts_in_the_building","generator_system_capacity","is_generator_system_in_good_condition","is_electrical_conection_in_good_condition","is_electrical_audit_report","electrical_audit_report_date","air_conditioning_system_cert","fire_fighting_system_abc_type","fire_fighting_system_co2_type","fire_fighting_noc","user_id","date","status");
		if($formdata){
			$postdata = $this->format_request_data($formdata);
			$this->rules_array = array(
				'recid' => 'required',
				'institute_name' => 'required',
				'institute_address' => 'required',
				'building_floors' => 'required',
				'institute_owners_name' => 'required',
				'owners_mobile_no' => 'required',
				'principals_name' => 'required',
				'principals_mobile_no' => 'required',
				'grade_n_class_from' => 'required',
				'grade_n_class_to' => 'required',
				'entrance_and_exit_routes_details' => 'required',
				'stairecase_count' => 'required|numeric',
				'water_storage_capacity_terrace' => 'required',
				'water_storage_capacity_groundfloor' => 'required',
				'institute_total_area' => 'required',
				'number_of_classrooms' => 'required|numeric',
				'is_laboratory_in_good_condition' => 'required',
				'is_reading_room_in_good_condition' => 'required',
				'no_table_reading_room' => 'required|numeric',
				'no_chair_reading_room' => 'required',
				'is_record_room_in_good_condition' => 'required',
				'is_computer_n_server_room_in_good_condition' => 'required',
				'computer_n_server_room_count' => 'required|numeric',
				'is_lifts_in_the_good_condition' => 'required',
				'no_lifts_in_the_building' => 'required|numeric',
				'status_lifts_in_the_building' => 'required',
				'generator_system_capacity' => 'required',
				'is_generator_system_in_good_condition' => 'required',
				'is_electrical_conection_in_good_condition' => 'required',
				'is_electrical_audit_report' => 'required',
				'air_conditioning_system_cert' => 'required',
				'fire_fighting_system_abc_type' => 'required',
				'fire_fighting_system_co2_type' => 'required',
				'fire_fighting_noc' => 'required',
			);
			$this->sanitize_array = array(
				'recid' => 'sanitize_string',
				'institute_name' => 'sanitize_string',
				'institute_address' => 'sanitize_string',
				'building_floors' => 'sanitize_string',
				'institute_owners_name' => 'sanitize_string',
				'owners_mobile_no' => 'sanitize_string',
				'principals_name' => 'sanitize_string',
				'principals_mobile_no' => 'sanitize_string',
				'grade_n_class_from' => 'sanitize_string',
				'grade_n_class_to' => 'sanitize_string',
				'entrance_and_exit_routes_details' => 'sanitize_string',
				'stairecase_count' => 'sanitize_string',
				'water_storage_capacity_terrace' => 'sanitize_string',
				'water_storage_capacity_groundfloor' => 'sanitize_string',
				'institute_total_area' => 'sanitize_string',
				'number_of_classrooms' => 'sanitize_string',
				'is_laboratory_in_good_condition' => 'sanitize_string',
				'is_reading_room_in_good_condition' => 'sanitize_string',
				'no_table_reading_room' => 'sanitize_string',
				'no_chair_reading_room' => 'sanitize_string',
				'is_record_room_in_good_condition' => 'sanitize_string',
				'is_computer_n_server_room_in_good_condition' => 'sanitize_string',
				'computer_n_server_room_count' => 'sanitize_string',
				'is_lifts_in_the_good_condition' => 'sanitize_string',
				'no_lifts_in_the_building' => 'sanitize_string',
				'status_lifts_in_the_building' => 'sanitize_string',
				'generator_system_capacity' => 'sanitize_string',
				'is_generator_system_in_good_condition' => 'sanitize_string',
				'is_electrical_conection_in_good_condition' => 'sanitize_string',
				'is_electrical_audit_report' => 'sanitize_string',
				'electrical_audit_report_date' => 'sanitize_string',
				'air_conditioning_system_cert' => 'sanitize_string',
				'fire_fighting_system_abc_type' => 'sanitize_string',
				'fire_fighting_system_co2_type' => 'sanitize_string',
				'fire_fighting_noc' => 'sanitize_string',
			);
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			$modeldata['user_id'] = USER_ID;
$modeldata['date'] = date_now();
$modeldata['status'] = "0";
			if($this->validated()){
				$db->where("school_college_coaching_inspection_form.id", $rec_id);;
				$bool = $db->update($tablename, $modeldata);
				$numRows = $db->getRowCount(); //number of affected rows. 0 = no record field updated
				if($bool && $numRows){
					$this->set_flash_msg("Record updated successfully", "success");
					return $this->redirect("school_college_coaching_inspection_form");
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
						return	$this->redirect("school_college_coaching_inspection_form");
					}
				}
			}
		}
		$db->where("school_college_coaching_inspection_form.id", $rec_id);;
		$data = $db->getOne($tablename, $fields);
		$page_title = $this->view->page_title = "Edit  School College Coaching Inspection Form";
		if(!$data){
			$this->set_page_error();
		}
		return $this->render_view("school_college_coaching_inspection_form/edit.php", $data);
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
		$db->where("school_college_coaching_inspection_form.id", $arr_rec_id, "in");
		$bool = $db->delete($tablename);
		if($bool){
			$this->set_flash_msg("Record deleted successfully", "success");
		}
		elseif($db->getLastError()){
			$page_error = $db->getLastError();
			$this->set_flash_msg($page_error, "danger");
		}
		return	$this->redirect("school_college_coaching_inspection_form");
	}
}
