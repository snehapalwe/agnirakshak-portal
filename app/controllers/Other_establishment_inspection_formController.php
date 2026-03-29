<?php 
/**
 * Other_establishment_inspection_form Page Controller
 * @category  Controller
 */
class Other_establishment_inspection_formController extends SecureController{
	function __construct(){
		parent::__construct();
		$this->tablename = "other_establishment_inspection_form";
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
			"business_name", 
			"business_address", 
			"mobile_no", 
			"owners_name", 
			"residential_address", 
			"owners_mobile_number", 
			"type_of_application_id", 
			"type_of_application_value", 
			"old_noc_number", 
			"old_noc_date", 
			"building_type", 
			"building_height", 
			"building_floor", 
			"no_of_staircase_in_building_and_width", 
			"no_of_commercial_spaces", 
			"structural_audit_report_year_of_construction", 
			"structural_audit_report_date", 
			"structural_audit_agency_name", 
			"structural_audit_agency_address", 
			"structural_audit_agency_mobile_no", 
			"permissions_obtained_for_the_business", 
			"female_employees_count", 
			"male_employees_count", 
			"total_employees_count", 
			"working_hours_at_business_premises", 
			"natural_ventilation_total_windows", 
			"natural_ventilation_total_doors", 
			"area_of_business_premises", 
			"entrance_route_premises", 
			"exit_route_premises", 
			"record_room", 
			"water_storage_capacity_terrace", 
			"water_storage_capacity_groundfloor", 
			"no_lifts_in_the_building", 
			"capacity_lifts_in_the_building", 
			"electrical_connection_capacity", 
			"electrical_audit_report_date", 
			"electrical_audit_agency_name", 
			"electrical_audit_agency_address", 
			"electrical_audit_agency_mobile_no", 
			"generator_system", 
			"raw_material_name", 
			"raw_material_storage_capacity", 
			"no_of_lpg_gas_cylinders", 
			"name_of_final_product", 
			"storage_capacity_of_final_product", 
			"fire_extinguishing_permanent", 
			"fire_extinguishing_temporary", 
			"extinguishing_license_agency_name", 
			"extinguishing_license_agency_lno", 
			"extinguishing_license_agency_lvalidity", 
			"extinguishing_licen_agency_cert_no", 
			"mpcb_certificate_date", 
			"mpcb_certificate_validity_date", 
			"ac_amc_date", 
			"ac_amc_validity_date", 
			"ac_amc_agency_name", 
			"ac_amc_agency_address", 
			"ac_amc_agency_contact", 
			"direction_board", 
			"user_id", 
			"date", 
			"status", 
			"certificate_file", 
			"timestamp");
		$pagination = $this->get_pagination(MAX_RECORD_COUNT); // get current pagination e.g array(page_number, page_limit)
		//search table record
		if(!empty($request->search)){
			$text = trim($request->search); 
			$search_condition = "(
				other_establishment_inspection_form.id LIKE ? OR 
				other_establishment_inspection_form.business_name LIKE ? OR 
				other_establishment_inspection_form.business_address LIKE ? OR 
				other_establishment_inspection_form.mobile_no LIKE ? OR 
				other_establishment_inspection_form.owners_name LIKE ? OR 
				other_establishment_inspection_form.residential_address LIKE ? OR 
				other_establishment_inspection_form.owners_mobile_number LIKE ? OR 
				other_establishment_inspection_form.type_of_application_id LIKE ? OR 
				other_establishment_inspection_form.type_of_application_value LIKE ? OR 
				other_establishment_inspection_form.old_noc_number LIKE ? OR 
				other_establishment_inspection_form.old_noc_date LIKE ? OR 
				other_establishment_inspection_form.building_type LIKE ? OR 
				other_establishment_inspection_form.building_height LIKE ? OR 
				other_establishment_inspection_form.building_floor LIKE ? OR 
				other_establishment_inspection_form.no_of_staircase_in_building_and_width LIKE ? OR 
				other_establishment_inspection_form.no_of_commercial_spaces LIKE ? OR 
				other_establishment_inspection_form.structural_audit_report_year_of_construction LIKE ? OR 
				other_establishment_inspection_form.structural_audit_report_date LIKE ? OR 
				other_establishment_inspection_form.structural_audit_agency_name LIKE ? OR 
				other_establishment_inspection_form.structural_audit_agency_address LIKE ? OR 
				other_establishment_inspection_form.structural_audit_agency_mobile_no LIKE ? OR 
				other_establishment_inspection_form.permissions_obtained_for_the_business LIKE ? OR 
				other_establishment_inspection_form.female_employees_count LIKE ? OR 
				other_establishment_inspection_form.male_employees_count LIKE ? OR 
				other_establishment_inspection_form.total_employees_count LIKE ? OR 
				other_establishment_inspection_form.working_hours_at_business_premises LIKE ? OR 
				other_establishment_inspection_form.natural_ventilation_total_windows LIKE ? OR 
				other_establishment_inspection_form.natural_ventilation_total_doors LIKE ? OR 
				other_establishment_inspection_form.area_of_business_premises LIKE ? OR 
				other_establishment_inspection_form.entrance_route_premises LIKE ? OR 
				other_establishment_inspection_form.exit_route_premises LIKE ? OR 
				other_establishment_inspection_form.record_room LIKE ? OR 
				other_establishment_inspection_form.water_storage_capacity_terrace LIKE ? OR 
				other_establishment_inspection_form.water_storage_capacity_groundfloor LIKE ? OR 
				other_establishment_inspection_form.no_lifts_in_the_building LIKE ? OR 
				other_establishment_inspection_form.capacity_lifts_in_the_building LIKE ? OR 
				other_establishment_inspection_form.electrical_connection_capacity LIKE ? OR 
				other_establishment_inspection_form.electrical_audit_report_date LIKE ? OR 
				other_establishment_inspection_form.electrical_audit_agency_name LIKE ? OR 
				other_establishment_inspection_form.electrical_audit_agency_address LIKE ? OR 
				other_establishment_inspection_form.electrical_audit_agency_mobile_no LIKE ? OR 
				other_establishment_inspection_form.generator_system LIKE ? OR 
				other_establishment_inspection_form.raw_material_name LIKE ? OR 
				other_establishment_inspection_form.raw_material_storage_capacity LIKE ? OR 
				other_establishment_inspection_form.no_of_lpg_gas_cylinders LIKE ? OR 
				other_establishment_inspection_form.name_of_final_product LIKE ? OR 
				other_establishment_inspection_form.storage_capacity_of_final_product LIKE ? OR 
				other_establishment_inspection_form.fire_extinguishing_permanent LIKE ? OR 
				other_establishment_inspection_form.fire_extinguishing_temporary LIKE ? OR 
				other_establishment_inspection_form.extinguishing_license_agency_name LIKE ? OR 
				other_establishment_inspection_form.extinguishing_license_agency_lno LIKE ? OR 
				other_establishment_inspection_form.extinguishing_license_agency_lvalidity LIKE ? OR 
				other_establishment_inspection_form.extinguishing_licen_agency_cert_no LIKE ? OR 
				other_establishment_inspection_form.mpcb_certificate_date LIKE ? OR 
				other_establishment_inspection_form.mpcb_certificate_validity_date LIKE ? OR 
				other_establishment_inspection_form.ac_amc_date LIKE ? OR 
				other_establishment_inspection_form.ac_amc_validity_date LIKE ? OR 
				other_establishment_inspection_form.ac_amc_agency_name LIKE ? OR 
				other_establishment_inspection_form.ac_amc_agency_address LIKE ? OR 
				other_establishment_inspection_form.ac_amc_agency_contact LIKE ? OR 
				other_establishment_inspection_form.direction_board LIKE ? OR 
				other_establishment_inspection_form.user_id LIKE ? OR 
				other_establishment_inspection_form.date LIKE ? OR 
				other_establishment_inspection_form.status LIKE ? OR 
				other_establishment_inspection_form.paid LIKE ? OR 
				other_establishment_inspection_form.int_no LIKE ? OR 
				other_establishment_inspection_form.yr LIKE ? OR 
				other_establishment_inspection_form.zone LIKE ? OR 
				other_establishment_inspection_form.payment_done LIKE ? OR 
				other_establishment_inspection_form.certificate_file LIKE ? OR 
				other_establishment_inspection_form.timestamp LIKE ? OR 
				other_establishment_inspection_form.recid LIKE ?
			)";
			$search_params = array(
				"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
			);
			//setting search conditions
			$db->where($search_condition, $search_params);
			 //template to use when ajax search
			$this->view->search_template = "other_establishment_inspection_form/search.php";
		}
		if(!empty($request->orderby)){
			$orderby = $request->orderby;
			$ordertype = (!empty($request->ordertype) ? $request->ordertype : ORDER_TYPE);
			$db->orderBy($orderby, $ordertype);
		}
		else{
			$db->orderBy("other_establishment_inspection_form.id", ORDER_TYPE);
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
				$record['structural_audit_report_date'] = human_date($record['structural_audit_report_date']);
$record['electrical_audit_report_date'] = human_date($record['electrical_audit_report_date']);
$record['extinguishing_license_agency_lvalidity'] = human_date($record['extinguishing_license_agency_lvalidity']);
$record['mpcb_certificate_date'] = human_date($record['mpcb_certificate_date']);
$record['mpcb_certificate_validity_date'] = human_date($record['mpcb_certificate_validity_date']);
$record['ac_amc_date'] = human_date($record['ac_amc_date']);
$record['ac_amc_validity_date'] = human_date($record['ac_amc_validity_date']);
$record['timestamp'] = human_datetime($record['timestamp']);
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
		$page_title = $this->view->page_title = "Other Establishment Inspection Form";
		$this->render_view("other_establishment_inspection_form/list.php", $data); //render the full page
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
			"business_name", 
			"business_address", 
			"mobile_no", 
			"owners_name", 
			"residential_address", 
			"owners_mobile_number", 
			"type_of_application_id", 
			"type_of_application_value", 
			"old_noc_number", 
			"old_noc_date", 
			"building_type", 
			"building_height", 
			"building_floor", 
			"no_of_staircase_in_building_and_width", 
			"no_of_commercial_spaces", 
			"structural_audit_report_year_of_construction", 
			"structural_audit_report_date", 
			"structural_audit_agency_name", 
			"structural_audit_agency_address", 
			"structural_audit_agency_mobile_no", 
			"permissions_obtained_for_the_business", 
			"female_employees_count", 
			"male_employees_count", 
			"total_employees_count", 
			"working_hours_at_business_premises", 
			"natural_ventilation_total_windows", 
			"natural_ventilation_total_doors", 
			"area_of_business_premises", 
			"entrance_route_premises", 
			"exit_route_premises", 
			"record_room", 
			"water_storage_capacity_terrace", 
			"water_storage_capacity_groundfloor", 
			"no_lifts_in_the_building", 
			"capacity_lifts_in_the_building", 
			"electrical_connection_capacity", 
			"electrical_audit_report_date", 
			"electrical_audit_agency_name", 
			"electrical_audit_agency_address", 
			"electrical_audit_agency_mobile_no", 
			"generator_system", 
			"raw_material_name", 
			"raw_material_storage_capacity", 
			"no_of_lpg_gas_cylinders", 
			"name_of_final_product", 
			"storage_capacity_of_final_product", 
			"fire_extinguishing_permanent", 
			"fire_extinguishing_temporary", 
			"extinguishing_license_agency_name", 
			"extinguishing_license_agency_lno", 
			"extinguishing_license_agency_lvalidity", 
			"extinguishing_licen_agency_cert_no", 
			"mpcb_certificate_date", 
			"mpcb_certificate_validity_date", 
			"ac_amc_date", 
			"ac_amc_validity_date", 
			"ac_amc_agency_name", 
			"ac_amc_agency_address", 
			"ac_amc_agency_contact", 
			"direction_board", 
			"user_id", 
			"date", 
			"status", 
			"paid", 
			"int_no", 
			"yr", 
			"zone", 
			"payment_done", 
			"certificate_file", 
			"timestamp", 
			"recid");
		if($value){
			$db->where($rec_id, urldecode($value)); //select record based on field name
		}
		else{
			$db->where("other_establishment_inspection_form.id", $rec_id);; //select record based on primary key
		}
		$record = $db->getOne($tablename, $fields );
		if($record){
			$record['structural_audit_report_date'] = human_date($record['structural_audit_report_date']);
$record['electrical_audit_report_date'] = human_date($record['electrical_audit_report_date']);
$record['extinguishing_license_agency_lvalidity'] = human_date($record['extinguishing_license_agency_lvalidity']);
$record['mpcb_certificate_date'] = human_date($record['mpcb_certificate_date']);
$record['mpcb_certificate_validity_date'] = human_date($record['mpcb_certificate_validity_date']);
$record['ac_amc_date'] = human_date($record['ac_amc_date']);
$record['ac_amc_validity_date'] = human_date($record['ac_amc_validity_date']);
$record['timestamp'] = human_datetime($record['timestamp']);
			$page_title = $this->view->page_title = "View  Other Establishment Inspection Form";
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
		return $this->render_view("other_establishment_inspection_form/view.php", $record);
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
			$fields = $this->fields = array("recid","business_name","business_address","mobile_no","owners_name","residential_address","owners_mobile_number","type_of_application_id","old_noc_number","old_noc_date","building_type","building_height","building_floor","no_of_staircase_in_building_and_width","no_of_commercial_spaces","structural_audit_report_year_of_construction","structural_audit_report_date","structural_audit_agency_name","structural_audit_agency_address","structural_audit_agency_mobile_no","permissions_obtained_for_the_business","female_employees_count","male_employees_count","total_employees_count","working_hours_at_business_premises","natural_ventilation_total_windows","natural_ventilation_total_doors","area_of_business_premises","entrance_route_premises","exit_route_premises","record_room","water_storage_capacity_terrace","water_storage_capacity_groundfloor","no_lifts_in_the_building","capacity_lifts_in_the_building","electrical_connection_capacity","electrical_audit_report_date","electrical_audit_agency_name","electrical_audit_agency_address","electrical_audit_agency_mobile_no","generator_system","raw_material_name","raw_material_storage_capacity","no_of_lpg_gas_cylinders","name_of_final_product","storage_capacity_of_final_product","fire_extinguishing_permanent","fire_extinguishing_temporary","extinguishing_license_agency_name","extinguishing_license_agency_lno","extinguishing_license_agency_lvalidity","extinguishing_licen_agency_cert_no","mpcb_certificate_date","mpcb_certificate_validity_date","ac_amc_date","ac_amc_validity_date","ac_amc_agency_name","ac_amc_agency_address","ac_amc_agency_contact","direction_board","user_id","date","status");
			$postdata = $this->format_request_data($formdata);
			$this->rules_array = array(
				'recid' => 'required',
				'business_name' => 'required',
				'business_address' => 'required',
				'mobile_no' => 'required',
				'owners_name' => 'required',
				'residential_address' => 'required',
				'owners_mobile_number' => 'required|numeric',
				'type_of_application_id' => 'required',
				'building_type' => 'required',
				'building_height' => 'required|numeric',
				'building_floor' => 'required|numeric',
				'no_of_staircase_in_building_and_width' => 'required',
				'no_of_commercial_spaces' => 'required|numeric',
				'structural_audit_report_year_of_construction' => 'required|numeric',
				'structural_audit_report_date' => 'required',
				'structural_audit_agency_name' => 'required',
				'structural_audit_agency_address' => 'required',
				'structural_audit_agency_mobile_no' => 'required|numeric',
				'permissions_obtained_for_the_business' => 'required',
				'female_employees_count' => 'required|numeric',
				'male_employees_count' => 'required|numeric',
				'total_employees_count' => 'required|numeric',
				'working_hours_at_business_premises' => 'required',
				'natural_ventilation_total_windows' => 'required|numeric',
				'natural_ventilation_total_doors' => 'required|numeric',
				'area_of_business_premises' => 'required',
				'entrance_route_premises' => 'required',
				'exit_route_premises' => 'required',
				'record_room' => 'required',
				'water_storage_capacity_terrace' => 'required|numeric',
				'water_storage_capacity_groundfloor' => 'required|numeric',
				'no_lifts_in_the_building' => 'required|numeric',
				'capacity_lifts_in_the_building' => 'required',
				'electrical_connection_capacity' => 'required',
				'electrical_audit_report_date' => 'required',
				'electrical_audit_agency_name' => 'required',
				'electrical_audit_agency_address' => 'required',
				'electrical_audit_agency_mobile_no' => 'required|numeric',
				'generator_system' => 'required',
				'raw_material_name' => 'required',
				'raw_material_storage_capacity' => 'required',
				'no_of_lpg_gas_cylinders' => 'required|numeric',
				'name_of_final_product' => 'required',
				'storage_capacity_of_final_product' => 'required',
				'fire_extinguishing_permanent' => 'required',
				'fire_extinguishing_temporary' => 'required',
				'extinguishing_license_agency_name' => 'required',
				'extinguishing_license_agency_lno' => 'required',
				'extinguishing_license_agency_lvalidity' => 'required',
				'extinguishing_licen_agency_cert_no' => 'required',
				'mpcb_certificate_date' => 'required',
				'mpcb_certificate_validity_date' => 'required',
				'ac_amc_date' => 'required',
				'ac_amc_validity_date' => 'required',
				'ac_amc_agency_name' => 'required',
				'ac_amc_agency_address' => 'required',
				'ac_amc_agency_contact' => 'required',
				'direction_board' => 'required',
			);
			$this->sanitize_array = array(
				'recid' => 'sanitize_string',
				'business_name' => 'sanitize_string',
				'business_address' => 'sanitize_string',
				'mobile_no' => 'sanitize_string',
				'owners_name' => 'sanitize_string',
				'residential_address' => 'sanitize_string',
				'owners_mobile_number' => 'sanitize_string',
				'type_of_application_id' => 'sanitize_string',
				'old_noc_number' => 'sanitize_string',
				'old_noc_date' => 'sanitize_string',
				'building_type' => 'sanitize_string',
				'building_height' => 'sanitize_string',
				'building_floor' => 'sanitize_string',
				'no_of_staircase_in_building_and_width' => 'sanitize_string',
				'no_of_commercial_spaces' => 'sanitize_string',
				'structural_audit_report_year_of_construction' => 'sanitize_string',
				'structural_audit_report_date' => 'sanitize_string',
				'structural_audit_agency_name' => 'sanitize_string',
				'structural_audit_agency_address' => 'sanitize_string',
				'structural_audit_agency_mobile_no' => 'sanitize_string',
				'permissions_obtained_for_the_business' => 'sanitize_string',
				'female_employees_count' => 'sanitize_string',
				'male_employees_count' => 'sanitize_string',
				'total_employees_count' => 'sanitize_string',
				'working_hours_at_business_premises' => 'sanitize_string',
				'natural_ventilation_total_windows' => 'sanitize_string',
				'natural_ventilation_total_doors' => 'sanitize_string',
				'area_of_business_premises' => 'sanitize_string',
				'entrance_route_premises' => 'sanitize_string',
				'exit_route_premises' => 'sanitize_string',
				'record_room' => 'sanitize_string',
				'water_storage_capacity_terrace' => 'sanitize_string',
				'water_storage_capacity_groundfloor' => 'sanitize_string',
				'no_lifts_in_the_building' => 'sanitize_string',
				'capacity_lifts_in_the_building' => 'sanitize_string',
				'electrical_connection_capacity' => 'sanitize_string',
				'electrical_audit_report_date' => 'sanitize_string',
				'electrical_audit_agency_name' => 'sanitize_string',
				'electrical_audit_agency_address' => 'sanitize_string',
				'electrical_audit_agency_mobile_no' => 'sanitize_string',
				'generator_system' => 'sanitize_string',
				'raw_material_name' => 'sanitize_string',
				'raw_material_storage_capacity' => 'sanitize_string',
				'no_of_lpg_gas_cylinders' => 'sanitize_string',
				'name_of_final_product' => 'sanitize_string',
				'storage_capacity_of_final_product' => 'sanitize_string',
				'fire_extinguishing_permanent' => 'sanitize_string',
				'fire_extinguishing_temporary' => 'sanitize_string',
				'extinguishing_license_agency_name' => 'sanitize_string',
				'extinguishing_license_agency_lno' => 'sanitize_string',
				'extinguishing_license_agency_lvalidity' => 'sanitize_string',
				'extinguishing_licen_agency_cert_no' => 'sanitize_string',
				'mpcb_certificate_date' => 'sanitize_string',
				'mpcb_certificate_validity_date' => 'sanitize_string',
				'ac_amc_date' => 'sanitize_string',
				'ac_amc_validity_date' => 'sanitize_string',
				'ac_amc_agency_name' => 'sanitize_string',
				'ac_amc_agency_address' => 'sanitize_string',
				'ac_amc_agency_contact' => 'sanitize_string',
				'direction_board' => 'sanitize_string',
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
		$page_title = $this->view->page_title = "Add New Other Establishment Inspection Form";
		$this->render_view("other_establishment_inspection_form/add.php");
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
		$fields = $this->fields = array("id","recid","business_name","business_address","mobile_no","owners_name","residential_address","owners_mobile_number","type_of_application_id","old_noc_number","old_noc_date","building_type","building_height","building_floor","no_of_staircase_in_building_and_width","no_of_commercial_spaces","structural_audit_report_year_of_construction","structural_audit_report_date","structural_audit_agency_name","structural_audit_agency_address","structural_audit_agency_mobile_no","permissions_obtained_for_the_business","female_employees_count","male_employees_count","total_employees_count","working_hours_at_business_premises","natural_ventilation_total_windows","natural_ventilation_total_doors","area_of_business_premises","entrance_route_premises","exit_route_premises","record_room","water_storage_capacity_terrace","water_storage_capacity_groundfloor","no_lifts_in_the_building","capacity_lifts_in_the_building","electrical_connection_capacity","electrical_audit_report_date","electrical_audit_agency_name","electrical_audit_agency_address","electrical_audit_agency_mobile_no","generator_system","raw_material_name","raw_material_storage_capacity","no_of_lpg_gas_cylinders","name_of_final_product","storage_capacity_of_final_product","fire_extinguishing_permanent","fire_extinguishing_temporary","extinguishing_license_agency_name","extinguishing_license_agency_lno","extinguishing_license_agency_lvalidity","extinguishing_licen_agency_cert_no","mpcb_certificate_date","mpcb_certificate_validity_date","ac_amc_date","ac_amc_validity_date","ac_amc_agency_name","ac_amc_agency_address","ac_amc_agency_contact","direction_board","user_id","date","status");
		if($formdata){
			$postdata = $this->format_request_data($formdata);
			$this->rules_array = array(
				'recid' => 'required',
				'business_name' => 'required',
				'business_address' => 'required',
				'mobile_no' => 'required',
				'owners_name' => 'required',
				'residential_address' => 'required',
				'owners_mobile_number' => 'required|numeric',
				'type_of_application_id' => 'required',
				'building_type' => 'required',
				'building_height' => 'required|numeric',
				'building_floor' => 'required|numeric',
				'no_of_staircase_in_building_and_width' => 'required',
				'no_of_commercial_spaces' => 'required|numeric',
				'structural_audit_report_year_of_construction' => 'required|numeric',
				'structural_audit_report_date' => 'required',
				'structural_audit_agency_name' => 'required',
				'structural_audit_agency_address' => 'required',
				'structural_audit_agency_mobile_no' => 'required|numeric',
				'permissions_obtained_for_the_business' => 'required',
				'female_employees_count' => 'required|numeric',
				'male_employees_count' => 'required|numeric',
				'total_employees_count' => 'required|numeric',
				'working_hours_at_business_premises' => 'required',
				'natural_ventilation_total_windows' => 'required|numeric',
				'natural_ventilation_total_doors' => 'required|numeric',
				'area_of_business_premises' => 'required',
				'entrance_route_premises' => 'required',
				'exit_route_premises' => 'required',
				'record_room' => 'required',
				'water_storage_capacity_terrace' => 'required|numeric',
				'water_storage_capacity_groundfloor' => 'required|numeric',
				'no_lifts_in_the_building' => 'required|numeric',
				'capacity_lifts_in_the_building' => 'required',
				'electrical_connection_capacity' => 'required',
				'electrical_audit_report_date' => 'required',
				'electrical_audit_agency_name' => 'required',
				'electrical_audit_agency_address' => 'required',
				'electrical_audit_agency_mobile_no' => 'required|numeric',
				'generator_system' => 'required',
				'raw_material_name' => 'required',
				'raw_material_storage_capacity' => 'required',
				'no_of_lpg_gas_cylinders' => 'required|numeric',
				'name_of_final_product' => 'required',
				'storage_capacity_of_final_product' => 'required',
				'fire_extinguishing_permanent' => 'required',
				'fire_extinguishing_temporary' => 'required',
				'extinguishing_license_agency_name' => 'required',
				'extinguishing_license_agency_lno' => 'required',
				'extinguishing_license_agency_lvalidity' => 'required',
				'extinguishing_licen_agency_cert_no' => 'required',
				'mpcb_certificate_date' => 'required',
				'mpcb_certificate_validity_date' => 'required',
				'ac_amc_date' => 'required',
				'ac_amc_validity_date' => 'required',
				'ac_amc_agency_name' => 'required',
				'ac_amc_agency_address' => 'required',
				'ac_amc_agency_contact' => 'required',
				'direction_board' => 'required',
			);
			$this->sanitize_array = array(
				'recid' => 'sanitize_string',
				'business_name' => 'sanitize_string',
				'business_address' => 'sanitize_string',
				'mobile_no' => 'sanitize_string',
				'owners_name' => 'sanitize_string',
				'residential_address' => 'sanitize_string',
				'owners_mobile_number' => 'sanitize_string',
				'type_of_application_id' => 'sanitize_string',
				'old_noc_number' => 'sanitize_string',
				'old_noc_date' => 'sanitize_string',
				'building_type' => 'sanitize_string',
				'building_height' => 'sanitize_string',
				'building_floor' => 'sanitize_string',
				'no_of_staircase_in_building_and_width' => 'sanitize_string',
				'no_of_commercial_spaces' => 'sanitize_string',
				'structural_audit_report_year_of_construction' => 'sanitize_string',
				'structural_audit_report_date' => 'sanitize_string',
				'structural_audit_agency_name' => 'sanitize_string',
				'structural_audit_agency_address' => 'sanitize_string',
				'structural_audit_agency_mobile_no' => 'sanitize_string',
				'permissions_obtained_for_the_business' => 'sanitize_string',
				'female_employees_count' => 'sanitize_string',
				'male_employees_count' => 'sanitize_string',
				'total_employees_count' => 'sanitize_string',
				'working_hours_at_business_premises' => 'sanitize_string',
				'natural_ventilation_total_windows' => 'sanitize_string',
				'natural_ventilation_total_doors' => 'sanitize_string',
				'area_of_business_premises' => 'sanitize_string',
				'entrance_route_premises' => 'sanitize_string',
				'exit_route_premises' => 'sanitize_string',
				'record_room' => 'sanitize_string',
				'water_storage_capacity_terrace' => 'sanitize_string',
				'water_storage_capacity_groundfloor' => 'sanitize_string',
				'no_lifts_in_the_building' => 'sanitize_string',
				'capacity_lifts_in_the_building' => 'sanitize_string',
				'electrical_connection_capacity' => 'sanitize_string',
				'electrical_audit_report_date' => 'sanitize_string',
				'electrical_audit_agency_name' => 'sanitize_string',
				'electrical_audit_agency_address' => 'sanitize_string',
				'electrical_audit_agency_mobile_no' => 'sanitize_string',
				'generator_system' => 'sanitize_string',
				'raw_material_name' => 'sanitize_string',
				'raw_material_storage_capacity' => 'sanitize_string',
				'no_of_lpg_gas_cylinders' => 'sanitize_string',
				'name_of_final_product' => 'sanitize_string',
				'storage_capacity_of_final_product' => 'sanitize_string',
				'fire_extinguishing_permanent' => 'sanitize_string',
				'fire_extinguishing_temporary' => 'sanitize_string',
				'extinguishing_license_agency_name' => 'sanitize_string',
				'extinguishing_license_agency_lno' => 'sanitize_string',
				'extinguishing_license_agency_lvalidity' => 'sanitize_string',
				'extinguishing_licen_agency_cert_no' => 'sanitize_string',
				'mpcb_certificate_date' => 'sanitize_string',
				'mpcb_certificate_validity_date' => 'sanitize_string',
				'ac_amc_date' => 'sanitize_string',
				'ac_amc_validity_date' => 'sanitize_string',
				'ac_amc_agency_name' => 'sanitize_string',
				'ac_amc_agency_address' => 'sanitize_string',
				'ac_amc_agency_contact' => 'sanitize_string',
				'direction_board' => 'sanitize_string',
			);
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			$modeldata['user_id'] = USER_ID;
$modeldata['date'] = date_now();
$modeldata['status'] = "0";
			if($this->validated()){
				$db->where("other_establishment_inspection_form.id", $rec_id);;
				$bool = $db->update($tablename, $modeldata);
				$numRows = $db->getRowCount(); //number of affected rows. 0 = no record field updated
				if($bool && $numRows){
					$this->set_flash_msg("Record updated successfully", "success");
					return $this->redirect("other_establishment_inspection_form");
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
						return	$this->redirect("other_establishment_inspection_form");
					}
				}
			}
		}
		$db->where("other_establishment_inspection_form.id", $rec_id);;
		$data = $db->getOne($tablename, $fields);
		$page_title = $this->view->page_title = "Edit  Other Establishment Inspection Form";
		if(!$data){
			$this->set_page_error();
		}
		return $this->render_view("other_establishment_inspection_form/edit.php", $data);
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
		$db->where("other_establishment_inspection_form.id", $arr_rec_id, "in");
		$bool = $db->delete($tablename);
		if($bool){
			$this->set_flash_msg("Record deleted successfully", "success");
		}
		elseif($db->getLastError()){
			$page_error = $db->getLastError();
			$this->set_flash_msg($page_error, "danger");
		}
		return	$this->redirect("other_establishment_inspection_form");
	}
}
