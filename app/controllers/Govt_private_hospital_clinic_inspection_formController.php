<?php 
/**
 * Govt_private_hospital_clinic_inspection_form Page Controller
 * @category  Controller
 */
class Govt_private_hospital_clinic_inspection_formController extends SecureController{
	function __construct(){
		parent::__construct();
		$this->tablename = "govt_private_hospital_clinic_inspection_form";
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
			"hospital_or_health_center_name", 
			"hospital_or_health_center_address", 
			"doctor_name", 
			"doctor_mobile_no", 
			"building_height", 
			"lifts_company_name", 
			"no_lifts_in_building", 
			"capacity_of_lifts", 
			"elevators_amc_done_by_org_name", 
			"elevators_amc_period", 
			"number_of_staircase_in_bulding", 
			"width_of_staircase_in_bulding", 
			"entrance_routes_count", 
			"exit_routes_count", 
			"is_record_room_available", 
			"hospital_area", 
			"doctors_count", 
			"nurses_count", 
			"ward_boy_count", 
			"aunts_count", 
			"clerk_count", 
			"other_employees_count", 
			"floor_number_of_hospital_id", 
			"floor_number_of_hospital_value", 
			"is_ot_dept", 
			"is_xray_dept", 
			"is_opd_dept", 
			"is_emergency_opd_dept", 
			"is_patholoty_dept", 
			"is_post_nutal_care_dept", 
			"is_icu_dept", 
			"is_gw_men_dept", 
			"is_gw_women_dept", 
			"is_special_ward_dept", 
			"is_ante_nutal_care_dept", 
			"is_nicu_dept", 
			"directional_board", 
			"total_no_beds_hospital", 
			"generator_system_capacity", 
			"generator_system_amc_org_name", 
			"generator_system_amc_period", 
			"electrical_audit_report_org_name", 
			"electrical_audit_report_date", 
			"emergency_power_system", 
			"info_about_fire_prevention_measures", 
			"mock_drill_date", 
			"no_emp_present_for_mock_drill", 
			"upload_photo_of_employee_present_for_mock_drill", 
			"upload_fire_marshal_names_with_mobile_no", 
			"water_storage_capacity_terrace", 
			"water_storage_capacity_groundfloor", 
			"fire_noc_details", 
			"fire_noc_date", 
			"other_info_about_hospital", 
			"oxygen_system", 
			"maintenance_of_emergency_routes", 
			"remark", 
			"user_id", 
			"date", 
			"status", 
			"paid", 
			"int_no", 
			"yr", 
			"zone", 
			"payment_done", 
			"certificate_file", 
			"recid");
		$pagination = $this->get_pagination(MAX_RECORD_COUNT); // get current pagination e.g array(page_number, page_limit)
		//search table record
		if(!empty($request->search)){
			$text = trim($request->search); 
			$search_condition = "(
				govt_private_hospital_clinic_inspection_form.id LIKE ? OR 
				govt_private_hospital_clinic_inspection_form.hospital_or_health_center_name LIKE ? OR 
				govt_private_hospital_clinic_inspection_form.hospital_or_health_center_address LIKE ? OR 
				govt_private_hospital_clinic_inspection_form.doctor_name LIKE ? OR 
				govt_private_hospital_clinic_inspection_form.doctor_mobile_no LIKE ? OR 
				govt_private_hospital_clinic_inspection_form.building_height LIKE ? OR 
				govt_private_hospital_clinic_inspection_form.lifts_company_name LIKE ? OR 
				govt_private_hospital_clinic_inspection_form.no_lifts_in_building LIKE ? OR 
				govt_private_hospital_clinic_inspection_form.capacity_of_lifts LIKE ? OR 
				govt_private_hospital_clinic_inspection_form.elevators_amc_done_by_org_name LIKE ? OR 
				govt_private_hospital_clinic_inspection_form.elevators_amc_period LIKE ? OR 
				govt_private_hospital_clinic_inspection_form.number_of_staircase_in_bulding LIKE ? OR 
				govt_private_hospital_clinic_inspection_form.width_of_staircase_in_bulding LIKE ? OR 
				govt_private_hospital_clinic_inspection_form.entrance_routes_count LIKE ? OR 
				govt_private_hospital_clinic_inspection_form.exit_routes_count LIKE ? OR 
				govt_private_hospital_clinic_inspection_form.is_record_room_available LIKE ? OR 
				govt_private_hospital_clinic_inspection_form.hospital_area LIKE ? OR 
				govt_private_hospital_clinic_inspection_form.doctors_count LIKE ? OR 
				govt_private_hospital_clinic_inspection_form.nurses_count LIKE ? OR 
				govt_private_hospital_clinic_inspection_form.ward_boy_count LIKE ? OR 
				govt_private_hospital_clinic_inspection_form.aunts_count LIKE ? OR 
				govt_private_hospital_clinic_inspection_form.clerk_count LIKE ? OR 
				govt_private_hospital_clinic_inspection_form.other_employees_count LIKE ? OR 
				govt_private_hospital_clinic_inspection_form.floor_number_of_hospital_id LIKE ? OR 
				govt_private_hospital_clinic_inspection_form.floor_number_of_hospital_value LIKE ? OR 
				govt_private_hospital_clinic_inspection_form.is_ot_dept LIKE ? OR 
				govt_private_hospital_clinic_inspection_form.is_xray_dept LIKE ? OR 
				govt_private_hospital_clinic_inspection_form.is_opd_dept LIKE ? OR 
				govt_private_hospital_clinic_inspection_form.is_emergency_opd_dept LIKE ? OR 
				govt_private_hospital_clinic_inspection_form.is_patholoty_dept LIKE ? OR 
				govt_private_hospital_clinic_inspection_form.is_post_nutal_care_dept LIKE ? OR 
				govt_private_hospital_clinic_inspection_form.is_icu_dept LIKE ? OR 
				govt_private_hospital_clinic_inspection_form.is_gw_men_dept LIKE ? OR 
				govt_private_hospital_clinic_inspection_form.is_gw_women_dept LIKE ? OR 
				govt_private_hospital_clinic_inspection_form.is_special_ward_dept LIKE ? OR 
				govt_private_hospital_clinic_inspection_form.is_ante_nutal_care_dept LIKE ? OR 
				govt_private_hospital_clinic_inspection_form.is_nicu_dept LIKE ? OR 
				govt_private_hospital_clinic_inspection_form.directional_board LIKE ? OR 
				govt_private_hospital_clinic_inspection_form.total_no_beds_hospital LIKE ? OR 
				govt_private_hospital_clinic_inspection_form.generator_system_capacity LIKE ? OR 
				govt_private_hospital_clinic_inspection_form.generator_system_amc_org_name LIKE ? OR 
				govt_private_hospital_clinic_inspection_form.generator_system_amc_period LIKE ? OR 
				govt_private_hospital_clinic_inspection_form.electrical_audit_report_org_name LIKE ? OR 
				govt_private_hospital_clinic_inspection_form.electrical_audit_report_date LIKE ? OR 
				govt_private_hospital_clinic_inspection_form.emergency_power_system LIKE ? OR 
				govt_private_hospital_clinic_inspection_form.info_about_fire_prevention_measures LIKE ? OR 
				govt_private_hospital_clinic_inspection_form.mock_drill_date LIKE ? OR 
				govt_private_hospital_clinic_inspection_form.no_emp_present_for_mock_drill LIKE ? OR 
				govt_private_hospital_clinic_inspection_form.upload_photo_of_employee_present_for_mock_drill LIKE ? OR 
				govt_private_hospital_clinic_inspection_form.upload_fire_marshal_names_with_mobile_no LIKE ? OR 
				govt_private_hospital_clinic_inspection_form.water_storage_capacity_terrace LIKE ? OR 
				govt_private_hospital_clinic_inspection_form.water_storage_capacity_groundfloor LIKE ? OR 
				govt_private_hospital_clinic_inspection_form.fire_noc_details LIKE ? OR 
				govt_private_hospital_clinic_inspection_form.fire_noc_date LIKE ? OR 
				govt_private_hospital_clinic_inspection_form.other_info_about_hospital LIKE ? OR 
				govt_private_hospital_clinic_inspection_form.oxygen_system LIKE ? OR 
				govt_private_hospital_clinic_inspection_form.maintenance_of_emergency_routes LIKE ? OR 
				govt_private_hospital_clinic_inspection_form.remark LIKE ? OR 
				govt_private_hospital_clinic_inspection_form.user_id LIKE ? OR 
				govt_private_hospital_clinic_inspection_form.date LIKE ? OR 
				govt_private_hospital_clinic_inspection_form.status LIKE ? OR 
				govt_private_hospital_clinic_inspection_form.paid LIKE ? OR 
				govt_private_hospital_clinic_inspection_form.int_no LIKE ? OR 
				govt_private_hospital_clinic_inspection_form.yr LIKE ? OR 
				govt_private_hospital_clinic_inspection_form.zone LIKE ? OR 
				govt_private_hospital_clinic_inspection_form.payment_done LIKE ? OR 
				govt_private_hospital_clinic_inspection_form.certificate_file LIKE ? OR 
				govt_private_hospital_clinic_inspection_form.recid LIKE ?
			)";
			$search_params = array(
				"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
			);
			//setting search conditions
			$db->where($search_condition, $search_params);
			 //template to use when ajax search
			$this->view->search_template = "govt_private_hospital_clinic_inspection_form/search.php";
		}
		if(!empty($request->orderby)){
			$orderby = $request->orderby;
			$ordertype = (!empty($request->ordertype) ? $request->ordertype : ORDER_TYPE);
			$db->orderBy($orderby, $ordertype);
		}
		else{
			$db->orderBy("govt_private_hospital_clinic_inspection_form.id", ORDER_TYPE);
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
		$page_title = $this->view->page_title = "Govt Private Hospital Clinic Inspection Form";
		$this->view->report_filename = date('Y-m-d') . '-' . $page_title;
		$this->view->report_title = $page_title;
		$this->view->report_layout = "report_layout.php";
		$this->view->report_paper_size = "A4";
		$this->view->report_orientation = "portrait";
		$this->render_view("govt_private_hospital_clinic_inspection_form/list.php", $data); //render the full page
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
			"hospital_or_health_center_name", 
			"hospital_or_health_center_address", 
			"doctor_name", 
			"doctor_mobile_no", 
			"building_height", 
			"lifts_company_name", 
			"no_lifts_in_building", 
			"capacity_of_lifts", 
			"elevators_amc_done_by_org_name", 
			"elevators_amc_period", 
			"number_of_staircase_in_bulding", 
			"width_of_staircase_in_bulding", 
			"entrance_routes_count", 
			"exit_routes_count", 
			"is_record_room_available", 
			"hospital_area", 
			"doctors_count", 
			"nurses_count", 
			"ward_boy_count", 
			"aunts_count", 
			"clerk_count", 
			"other_employees_count", 
			"floor_number_of_hospital_id", 
			"floor_number_of_hospital_value", 
			"is_ot_dept", 
			"is_xray_dept", 
			"is_opd_dept", 
			"is_emergency_opd_dept", 
			"is_patholoty_dept", 
			"is_post_nutal_care_dept", 
			"is_icu_dept", 
			"is_gw_men_dept", 
			"is_gw_women_dept", 
			"is_special_ward_dept", 
			"is_ante_nutal_care_dept", 
			"is_nicu_dept", 
			"directional_board", 
			"total_no_beds_hospital", 
			"generator_system_capacity", 
			"generator_system_amc_org_name", 
			"generator_system_amc_period", 
			"electrical_audit_report_org_name", 
			"electrical_audit_report_date", 
			"emergency_power_system", 
			"info_about_fire_prevention_measures", 
			"mock_drill_date", 
			"no_emp_present_for_mock_drill", 
			"upload_photo_of_employee_present_for_mock_drill", 
			"upload_fire_marshal_names_with_mobile_no", 
			"water_storage_capacity_terrace", 
			"water_storage_capacity_groundfloor", 
			"fire_noc_details", 
			"fire_noc_date", 
			"other_info_about_hospital", 
			"oxygen_system", 
			"maintenance_of_emergency_routes", 
			"remark", 
			"user_id", 
			"date", 
			"status", 
			"paid", 
			"int_no", 
			"yr", 
			"zone", 
			"payment_done", 
			"certificate_file", 
			"recid");
		if($value){
			$db->where($rec_id, urldecode($value)); //select record based on field name
		}
		else{
			$db->where("govt_private_hospital_clinic_inspection_form.id", $rec_id);; //select record based on primary key
		}
		$record = $db->getOne($tablename, $fields );
		if($record){
			$page_title = $this->view->page_title = "View  Govt Private Hospital Clinic Inspection Form";
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
		return $this->render_view("govt_private_hospital_clinic_inspection_form/view.php", $record);
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
			$fields = $this->fields = array("hospital_or_health_center_name","hospital_or_health_center_address","doctor_name","doctor_mobile_no","building_height","lifts_company_name","no_lifts_in_building","capacity_of_lifts","elevators_amc_done_by_org_name","elevators_amc_period","number_of_staircase_in_bulding","width_of_staircase_in_bulding","entrance_routes_count","exit_routes_count","is_record_room_available","hospital_area","doctors_count","nurses_count","ward_boy_count","aunts_count","clerk_count","other_employees_count","floor_number_of_hospital_id","floor_number_of_hospital_value","is_ot_dept","is_xray_dept","is_opd_dept","is_emergency_opd_dept","is_patholoty_dept","is_post_nutal_care_dept","is_icu_dept","is_gw_men_dept","is_gw_women_dept","is_special_ward_dept","is_ante_nutal_care_dept","is_nicu_dept","directional_board","total_no_beds_hospital","generator_system_capacity","generator_system_amc_org_name","generator_system_amc_period","electrical_audit_report_org_name","electrical_audit_report_date","emergency_power_system","info_about_fire_prevention_measures","no_emp_present_for_mock_drill","upload_photo_of_employee_present_for_mock_drill","upload_fire_marshal_names_with_mobile_no","water_storage_capacity_terrace","water_storage_capacity_groundfloor","fire_noc_details","fire_noc_date","other_info_about_hospital","oxygen_system","maintenance_of_emergency_routes","remark","user_id","date","status","paid","int_no","yr","zone","payment_done","certificate_file","recid");
			$postdata = $this->format_request_data($formdata);
			$this->rules_array = array(
				'hospital_or_health_center_name' => 'required',
				'hospital_or_health_center_address' => 'required',
				'doctor_name' => 'required',
				'doctor_mobile_no' => 'required',
				'building_height' => 'required',
				'lifts_company_name' => 'required',
				'no_lifts_in_building' => 'required|numeric',
				'capacity_of_lifts' => 'required',
				'elevators_amc_done_by_org_name' => 'required',
				'elevators_amc_period' => 'required',
				'number_of_staircase_in_bulding' => 'required|numeric',
				'width_of_staircase_in_bulding' => 'required',
				'entrance_routes_count' => 'required|numeric',
				'exit_routes_count' => 'required|numeric',
				'is_record_room_available' => 'required',
				'hospital_area' => 'required',
				'doctors_count' => 'required|numeric',
				'nurses_count' => 'required|numeric',
				'ward_boy_count' => 'required|numeric',
				'aunts_count' => 'required|numeric',
				'clerk_count' => 'required|numeric',
				'other_employees_count' => 'required|numeric',
				'floor_number_of_hospital_id' => 'required|numeric',
				'floor_number_of_hospital_value' => 'required',
				'is_ot_dept' => 'required',
				'is_xray_dept' => 'required',
				'is_opd_dept' => 'required',
				'is_emergency_opd_dept' => 'required',
				'is_patholoty_dept' => 'required',
				'is_post_nutal_care_dept' => 'required',
				'is_icu_dept' => 'required',
				'is_gw_men_dept' => 'required',
				'is_gw_women_dept' => 'required',
				'is_special_ward_dept' => 'required',
				'is_ante_nutal_care_dept' => 'required',
				'is_nicu_dept' => 'required',
				'directional_board' => 'required',
				'total_no_beds_hospital' => 'required|numeric',
				'generator_system_capacity' => 'required',
				'generator_system_amc_org_name' => 'required',
				'generator_system_amc_period' => 'required',
				'electrical_audit_report_org_name' => 'required',
				'electrical_audit_report_date' => 'required',
				'emergency_power_system' => 'required',
				'info_about_fire_prevention_measures' => 'required',
				'no_emp_present_for_mock_drill' => 'required|numeric',
				'upload_photo_of_employee_present_for_mock_drill' => 'required',
				'upload_fire_marshal_names_with_mobile_no' => 'required',
				'water_storage_capacity_terrace' => 'required',
				'water_storage_capacity_groundfloor' => 'required',
				'fire_noc_details' => 'required',
				'fire_noc_date' => 'required',
				'other_info_about_hospital' => 'required',
				'oxygen_system' => 'required',
				'maintenance_of_emergency_routes' => 'required',
				'remark' => 'required',
				'user_id' => 'required|numeric',
				'date' => 'required',
				'status' => 'required',
				'paid' => 'required|numeric',
				'int_no' => 'required|numeric',
				'yr' => 'required',
				'zone' => 'required',
				'payment_done' => 'required',
				'certificate_file' => 'required',
				'recid' => 'required|numeric',
			);
			$this->sanitize_array = array(
				'hospital_or_health_center_name' => 'sanitize_string',
				'hospital_or_health_center_address' => 'sanitize_string',
				'doctor_name' => 'sanitize_string',
				'doctor_mobile_no' => 'sanitize_string',
				'building_height' => 'sanitize_string',
				'lifts_company_name' => 'sanitize_string',
				'no_lifts_in_building' => 'sanitize_string',
				'capacity_of_lifts' => 'sanitize_string',
				'elevators_amc_done_by_org_name' => 'sanitize_string',
				'elevators_amc_period' => 'sanitize_string',
				'number_of_staircase_in_bulding' => 'sanitize_string',
				'width_of_staircase_in_bulding' => 'sanitize_string',
				'entrance_routes_count' => 'sanitize_string',
				'exit_routes_count' => 'sanitize_string',
				'is_record_room_available' => 'sanitize_string',
				'hospital_area' => 'sanitize_string',
				'doctors_count' => 'sanitize_string',
				'nurses_count' => 'sanitize_string',
				'ward_boy_count' => 'sanitize_string',
				'aunts_count' => 'sanitize_string',
				'clerk_count' => 'sanitize_string',
				'other_employees_count' => 'sanitize_string',
				'floor_number_of_hospital_id' => 'sanitize_string',
				'floor_number_of_hospital_value' => 'sanitize_string',
				'is_ot_dept' => 'sanitize_string',
				'is_xray_dept' => 'sanitize_string',
				'is_opd_dept' => 'sanitize_string',
				'is_emergency_opd_dept' => 'sanitize_string',
				'is_patholoty_dept' => 'sanitize_string',
				'is_post_nutal_care_dept' => 'sanitize_string',
				'is_icu_dept' => 'sanitize_string',
				'is_gw_men_dept' => 'sanitize_string',
				'is_gw_women_dept' => 'sanitize_string',
				'is_special_ward_dept' => 'sanitize_string',
				'is_ante_nutal_care_dept' => 'sanitize_string',
				'is_nicu_dept' => 'sanitize_string',
				'directional_board' => 'sanitize_string',
				'total_no_beds_hospital' => 'sanitize_string',
				'generator_system_capacity' => 'sanitize_string',
				'generator_system_amc_org_name' => 'sanitize_string',
				'generator_system_amc_period' => 'sanitize_string',
				'electrical_audit_report_org_name' => 'sanitize_string',
				'electrical_audit_report_date' => 'sanitize_string',
				'emergency_power_system' => 'sanitize_string',
				'info_about_fire_prevention_measures' => 'sanitize_string',
				'no_emp_present_for_mock_drill' => 'sanitize_string',
				'upload_photo_of_employee_present_for_mock_drill' => 'sanitize_string',
				'upload_fire_marshal_names_with_mobile_no' => 'sanitize_string',
				'water_storage_capacity_terrace' => 'sanitize_string',
				'water_storage_capacity_groundfloor' => 'sanitize_string',
				'fire_noc_details' => 'sanitize_string',
				'fire_noc_date' => 'sanitize_string',
				'other_info_about_hospital' => 'sanitize_string',
				'oxygen_system' => 'sanitize_string',
				'maintenance_of_emergency_routes' => 'sanitize_string',
				'remark' => 'sanitize_string',
				'user_id' => 'sanitize_string',
				'date' => 'sanitize_string',
				'status' => 'sanitize_string',
				'paid' => 'sanitize_string',
				'int_no' => 'sanitize_string',
				'yr' => 'sanitize_string',
				'zone' => 'sanitize_string',
				'payment_done' => 'sanitize_string',
				'certificate_file' => 'sanitize_string',
				'recid' => 'sanitize_string',
			);
			$this->filter_vals = true; //set whether to remove empty fields
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			if($this->validated()){
				$rec_id = $this->rec_id = $db->insert($tablename, $modeldata);
				if($rec_id){
					$this->set_flash_msg("Record added successfully", "success");
					return	$this->redirect("govt_private_hospital_clinic_inspection_form");
				}
				else{
					$this->set_page_error();
				}
			}
		}
		$page_title = $this->view->page_title = "Add New Govt Private Hospital Clinic Inspection Form";
		$this->render_view("govt_private_hospital_clinic_inspection_form/add.php");
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
		$fields = $this->fields = array("id","hospital_or_health_center_name","hospital_or_health_center_address","doctor_name","doctor_mobile_no","building_height","lifts_company_name","no_lifts_in_building","capacity_of_lifts","elevators_amc_done_by_org_name","elevators_amc_period","number_of_staircase_in_bulding","width_of_staircase_in_bulding","entrance_routes_count","exit_routes_count","is_record_room_available","hospital_area","doctors_count","nurses_count","ward_boy_count","aunts_count","clerk_count","other_employees_count","floor_number_of_hospital_id","floor_number_of_hospital_value","is_ot_dept","is_xray_dept","is_opd_dept","is_emergency_opd_dept","is_patholoty_dept","is_post_nutal_care_dept","is_icu_dept","is_gw_men_dept","is_gw_women_dept","is_special_ward_dept","is_ante_nutal_care_dept","is_nicu_dept","directional_board","total_no_beds_hospital","generator_system_capacity","generator_system_amc_org_name","generator_system_amc_period","electrical_audit_report_org_name","electrical_audit_report_date","emergency_power_system","info_about_fire_prevention_measures","no_emp_present_for_mock_drill","upload_photo_of_employee_present_for_mock_drill","upload_fire_marshal_names_with_mobile_no","water_storage_capacity_terrace","water_storage_capacity_groundfloor","fire_noc_details","fire_noc_date","other_info_about_hospital","oxygen_system","maintenance_of_emergency_routes","remark","user_id","date","status","paid","int_no","yr","zone","payment_done","certificate_file","recid");
		if($formdata){
			$postdata = $this->format_request_data($formdata);
			$this->rules_array = array(
				'hospital_or_health_center_name' => 'required',
				'hospital_or_health_center_address' => 'required',
				'doctor_name' => 'required',
				'doctor_mobile_no' => 'required',
				'building_height' => 'required',
				'lifts_company_name' => 'required',
				'no_lifts_in_building' => 'required|numeric',
				'capacity_of_lifts' => 'required',
				'elevators_amc_done_by_org_name' => 'required',
				'elevators_amc_period' => 'required',
				'number_of_staircase_in_bulding' => 'required|numeric',
				'width_of_staircase_in_bulding' => 'required',
				'entrance_routes_count' => 'required|numeric',
				'exit_routes_count' => 'required|numeric',
				'is_record_room_available' => 'required',
				'hospital_area' => 'required',
				'doctors_count' => 'required|numeric',
				'nurses_count' => 'required|numeric',
				'ward_boy_count' => 'required|numeric',
				'aunts_count' => 'required|numeric',
				'clerk_count' => 'required|numeric',
				'other_employees_count' => 'required|numeric',
				'floor_number_of_hospital_id' => 'required|numeric',
				'floor_number_of_hospital_value' => 'required',
				'is_ot_dept' => 'required',
				'is_xray_dept' => 'required',
				'is_opd_dept' => 'required',
				'is_emergency_opd_dept' => 'required',
				'is_patholoty_dept' => 'required',
				'is_post_nutal_care_dept' => 'required',
				'is_icu_dept' => 'required',
				'is_gw_men_dept' => 'required',
				'is_gw_women_dept' => 'required',
				'is_special_ward_dept' => 'required',
				'is_ante_nutal_care_dept' => 'required',
				'is_nicu_dept' => 'required',
				'directional_board' => 'required',
				'total_no_beds_hospital' => 'required|numeric',
				'generator_system_capacity' => 'required',
				'generator_system_amc_org_name' => 'required',
				'generator_system_amc_period' => 'required',
				'electrical_audit_report_org_name' => 'required',
				'electrical_audit_report_date' => 'required',
				'emergency_power_system' => 'required',
				'info_about_fire_prevention_measures' => 'required',
				'no_emp_present_for_mock_drill' => 'required|numeric',
				'upload_photo_of_employee_present_for_mock_drill' => 'required',
				'upload_fire_marshal_names_with_mobile_no' => 'required',
				'water_storage_capacity_terrace' => 'required',
				'water_storage_capacity_groundfloor' => 'required',
				'fire_noc_details' => 'required',
				'fire_noc_date' => 'required',
				'other_info_about_hospital' => 'required',
				'oxygen_system' => 'required',
				'maintenance_of_emergency_routes' => 'required',
				'remark' => 'required',
				'user_id' => 'required|numeric',
				'date' => 'required',
				'status' => 'required',
				'paid' => 'required|numeric',
				'int_no' => 'required|numeric',
				'yr' => 'required',
				'zone' => 'required',
				'payment_done' => 'required',
				'certificate_file' => 'required',
				'recid' => 'required|numeric',
			);
			$this->sanitize_array = array(
				'hospital_or_health_center_name' => 'sanitize_string',
				'hospital_or_health_center_address' => 'sanitize_string',
				'doctor_name' => 'sanitize_string',
				'doctor_mobile_no' => 'sanitize_string',
				'building_height' => 'sanitize_string',
				'lifts_company_name' => 'sanitize_string',
				'no_lifts_in_building' => 'sanitize_string',
				'capacity_of_lifts' => 'sanitize_string',
				'elevators_amc_done_by_org_name' => 'sanitize_string',
				'elevators_amc_period' => 'sanitize_string',
				'number_of_staircase_in_bulding' => 'sanitize_string',
				'width_of_staircase_in_bulding' => 'sanitize_string',
				'entrance_routes_count' => 'sanitize_string',
				'exit_routes_count' => 'sanitize_string',
				'is_record_room_available' => 'sanitize_string',
				'hospital_area' => 'sanitize_string',
				'doctors_count' => 'sanitize_string',
				'nurses_count' => 'sanitize_string',
				'ward_boy_count' => 'sanitize_string',
				'aunts_count' => 'sanitize_string',
				'clerk_count' => 'sanitize_string',
				'other_employees_count' => 'sanitize_string',
				'floor_number_of_hospital_id' => 'sanitize_string',
				'floor_number_of_hospital_value' => 'sanitize_string',
				'is_ot_dept' => 'sanitize_string',
				'is_xray_dept' => 'sanitize_string',
				'is_opd_dept' => 'sanitize_string',
				'is_emergency_opd_dept' => 'sanitize_string',
				'is_patholoty_dept' => 'sanitize_string',
				'is_post_nutal_care_dept' => 'sanitize_string',
				'is_icu_dept' => 'sanitize_string',
				'is_gw_men_dept' => 'sanitize_string',
				'is_gw_women_dept' => 'sanitize_string',
				'is_special_ward_dept' => 'sanitize_string',
				'is_ante_nutal_care_dept' => 'sanitize_string',
				'is_nicu_dept' => 'sanitize_string',
				'directional_board' => 'sanitize_string',
				'total_no_beds_hospital' => 'sanitize_string',
				'generator_system_capacity' => 'sanitize_string',
				'generator_system_amc_org_name' => 'sanitize_string',
				'generator_system_amc_period' => 'sanitize_string',
				'electrical_audit_report_org_name' => 'sanitize_string',
				'electrical_audit_report_date' => 'sanitize_string',
				'emergency_power_system' => 'sanitize_string',
				'info_about_fire_prevention_measures' => 'sanitize_string',
				'no_emp_present_for_mock_drill' => 'sanitize_string',
				'upload_photo_of_employee_present_for_mock_drill' => 'sanitize_string',
				'upload_fire_marshal_names_with_mobile_no' => 'sanitize_string',
				'water_storage_capacity_terrace' => 'sanitize_string',
				'water_storage_capacity_groundfloor' => 'sanitize_string',
				'fire_noc_details' => 'sanitize_string',
				'fire_noc_date' => 'sanitize_string',
				'other_info_about_hospital' => 'sanitize_string',
				'oxygen_system' => 'sanitize_string',
				'maintenance_of_emergency_routes' => 'sanitize_string',
				'remark' => 'sanitize_string',
				'user_id' => 'sanitize_string',
				'date' => 'sanitize_string',
				'status' => 'sanitize_string',
				'paid' => 'sanitize_string',
				'int_no' => 'sanitize_string',
				'yr' => 'sanitize_string',
				'zone' => 'sanitize_string',
				'payment_done' => 'sanitize_string',
				'certificate_file' => 'sanitize_string',
				'recid' => 'sanitize_string',
			);
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			if($this->validated()){
				$db->where("govt_private_hospital_clinic_inspection_form.id", $rec_id);;
				$bool = $db->update($tablename, $modeldata);
				$numRows = $db->getRowCount(); //number of affected rows. 0 = no record field updated
				if($bool && $numRows){
					$this->set_flash_msg("Record updated successfully", "success");
					return $this->redirect("govt_private_hospital_clinic_inspection_form");
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
						return	$this->redirect("govt_private_hospital_clinic_inspection_form");
					}
				}
			}
		}
		$db->where("govt_private_hospital_clinic_inspection_form.id", $rec_id);;
		$data = $db->getOne($tablename, $fields);
		$page_title = $this->view->page_title = "Edit  Govt Private Hospital Clinic Inspection Form";
		if(!$data){
			$this->set_page_error();
		}
		return $this->render_view("govt_private_hospital_clinic_inspection_form/edit.php", $data);
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
		$db->where("govt_private_hospital_clinic_inspection_form.id", $arr_rec_id, "in");
		$bool = $db->delete($tablename);
		if($bool){
			$this->set_flash_msg("Record deleted successfully", "success");
		}
		elseif($db->getLastError()){
			$page_error = $db->getLastError();
			$this->set_flash_msg($page_error, "danger");
		}
		return	$this->redirect("govt_private_hospital_clinic_inspection_form");
	}
}
