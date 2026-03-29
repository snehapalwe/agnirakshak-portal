<?php 
/**
 * Hotel_inspection_form Page Controller
 * @category  Controller
 */
class Hotel_inspection_formController extends SecureController{
	function __construct(){
		parent::__construct();
		$this->tablename = "hotel_inspection_form";
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
			"hotel_name", 
			"hotel_address", 
			"owners_name", 
			"mobile_no", 
			"type_of_application_value", 
			"old_noc_number", 
			"old_noc_date", 
			"building_height", 
			"building_floor", 
			"no_n_width_stairs_one", 
			"no_n_width_stairs_two", 
			"no_n_width_stairs_three", 
			"no_lifts_in_the_building", 
			"no_entrance_routes", 
			"no_exit_routes", 
			"store_room_id", 
			"store_room_value", 
			"natural_ventilation_windows", 
			"area", 
			"no_employees_female", 
			"no_employees_male", 
			"no_employees_total", 
			"working_hours", 
			"floor_number_of_hotel", 
			"is_directional_board_available", 
			"hotel_departments", 
			"table_quantity", 
			"chair_quantity", 
			"is_generator_system_available", 
			"is_structural_audit_report_avilable_id", 
			"is_structural_audit_report_avilable_value", 
			"structural_audit_report_date", 
			"is_electrical_audit_report_available_id", 
			"is_electrical_audit_report_available_value", 
			"electrical_audit_report_date", 
			"fire_prevention_measures_information", 
			"extinguishing_licen_agency_name", 
			"extinguishing_licen_agency_no", 
			"extinguishing_licen_agency_validity", 
			"extinguishing_licen_agency_cert_no", 
			"water_storage_capacity_terrace", 
			"water_storage_capacity_groundfloor", 
			"gas_bank", 
			"lpg_cylender", 
			"cng_pipe_line", 
			"date", 
			"timestamp");
		$pagination = $this->get_pagination(MAX_RECORD_COUNT); // get current pagination e.g array(page_number, page_limit)
		//search table record
		if(!empty($request->search)){
			$text = trim($request->search); 
			$search_condition = "(
				hotel_inspection_form.id LIKE ? OR 
				hotel_inspection_form.recid LIKE ? OR 
				hotel_inspection_form.hotel_name LIKE ? OR 
				hotel_inspection_form.hotel_address LIKE ? OR 
				hotel_inspection_form.owners_name LIKE ? OR 
				hotel_inspection_form.mobile_no LIKE ? OR 
				hotel_inspection_form.type_of_application_id LIKE ? OR 
				hotel_inspection_form.type_of_application_value LIKE ? OR 
				hotel_inspection_form.old_noc_number LIKE ? OR 
				hotel_inspection_form.old_noc_date LIKE ? OR 
				hotel_inspection_form.building_height LIKE ? OR 
				hotel_inspection_form.building_floor LIKE ? OR 
				hotel_inspection_form.no_n_width_stairs_one LIKE ? OR 
				hotel_inspection_form.no_n_width_stairs_two LIKE ? OR 
				hotel_inspection_form.no_n_width_stairs_three LIKE ? OR 
				hotel_inspection_form.no_lifts_in_the_building LIKE ? OR 
				hotel_inspection_form.no_entrance_routes LIKE ? OR 
				hotel_inspection_form.no_exit_routes LIKE ? OR 
				hotel_inspection_form.store_room_id LIKE ? OR 
				hotel_inspection_form.store_room_value LIKE ? OR 
				hotel_inspection_form.natural_ventilation_windows LIKE ? OR 
				hotel_inspection_form.area LIKE ? OR 
				hotel_inspection_form.no_employees_female LIKE ? OR 
				hotel_inspection_form.no_employees_male LIKE ? OR 
				hotel_inspection_form.no_employees_total LIKE ? OR 
				hotel_inspection_form.working_hours LIKE ? OR 
				hotel_inspection_form.floor_number_of_hotel LIKE ? OR 
				hotel_inspection_form.is_directional_board_available LIKE ? OR 
				hotel_inspection_form.hotel_departments LIKE ? OR 
				hotel_inspection_form.table_quantity LIKE ? OR 
				hotel_inspection_form.chair_quantity LIKE ? OR 
				hotel_inspection_form.is_generator_system_available LIKE ? OR 
				hotel_inspection_form.is_structural_audit_report_avilable_id LIKE ? OR 
				hotel_inspection_form.is_structural_audit_report_avilable_value LIKE ? OR 
				hotel_inspection_form.structural_audit_report_date LIKE ? OR 
				hotel_inspection_form.is_electrical_audit_report_available_id LIKE ? OR 
				hotel_inspection_form.is_electrical_audit_report_available_value LIKE ? OR 
				hotel_inspection_form.electrical_audit_report_date LIKE ? OR 
				hotel_inspection_form.fire_prevention_measures_information LIKE ? OR 
				hotel_inspection_form.extinguishing_licen_agency_name LIKE ? OR 
				hotel_inspection_form.extinguishing_licen_agency_no LIKE ? OR 
				hotel_inspection_form.extinguishing_licen_agency_validity LIKE ? OR 
				hotel_inspection_form.extinguishing_licen_agency_cert_no LIKE ? OR 
				hotel_inspection_form.water_storage_capacity_terrace LIKE ? OR 
				hotel_inspection_form.water_storage_capacity_groundfloor LIKE ? OR 
				hotel_inspection_form.gas_bank LIKE ? OR 
				hotel_inspection_form.lpg_cylender LIKE ? OR 
				hotel_inspection_form.cng_pipe_line LIKE ? OR 
				hotel_inspection_form.user_id LIKE ? OR 
				hotel_inspection_form.date LIKE ? OR 
				hotel_inspection_form.status LIKE ? OR 
				hotel_inspection_form.paid LIKE ? OR 
				hotel_inspection_form.int_no LIKE ? OR 
				hotel_inspection_form.yr LIKE ? OR 
				hotel_inspection_form.zone LIKE ? OR 
				hotel_inspection_form.payment_done LIKE ? OR 
				hotel_inspection_form.certificate_file LIKE ? OR 
				hotel_inspection_form.timestamp LIKE ?
			)";
			$search_params = array(
				"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
			);
			//setting search conditions
			$db->where($search_condition, $search_params);
			 //template to use when ajax search
			$this->view->search_template = "hotel_inspection_form/search.php";
		}
		if(!empty($request->orderby)){
			$orderby = $request->orderby;
			$ordertype = (!empty($request->ordertype) ? $request->ordertype : ORDER_TYPE);
			$db->orderBy($orderby, $ordertype);
		}
		else{
			$db->orderBy("hotel_inspection_form.id", ORDER_TYPE);
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
		$page_title = $this->view->page_title = "Hotel Inspection Form";
		$this->render_view("hotel_inspection_form/list.php", $data); //render the full page
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
			"hotel_name", 
			"hotel_address", 
			"owners_name", 
			"mobile_no", 
			"type_of_application_id", 
			"type_of_application_value", 
			"old_noc_number", 
			"old_noc_date", 
			"building_height", 
			"building_floor", 
			"no_n_width_stairs_one", 
			"no_n_width_stairs_two", 
			"no_n_width_stairs_three", 
			"no_lifts_in_the_building", 
			"no_entrance_routes", 
			"no_exit_routes", 
			"store_room_id", 
			"store_room_value", 
			"natural_ventilation_windows", 
			"area", 
			"no_employees_female", 
			"no_employees_male", 
			"no_employees_total", 
			"working_hours", 
			"floor_number_of_hotel", 
			"is_directional_board_available", 
			"hotel_departments", 
			"table_quantity", 
			"chair_quantity", 
			"is_generator_system_available", 
			"is_structural_audit_report_avilable_id", 
			"is_structural_audit_report_avilable_value", 
			"structural_audit_report_date", 
			"is_electrical_audit_report_available_id", 
			"is_electrical_audit_report_available_value", 
			"electrical_audit_report_date", 
			"fire_prevention_measures_information", 
			"extinguishing_licen_agency_name", 
			"extinguishing_licen_agency_no", 
			"extinguishing_licen_agency_validity", 
			"extinguishing_licen_agency_cert_no", 
			"water_storage_capacity_terrace", 
			"water_storage_capacity_groundfloor", 
			"gas_bank", 
			"lpg_cylender", 
			"cng_pipe_line", 
			"user_id", 
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
			$db->where("hotel_inspection_form.id", $rec_id);; //select record based on primary key
		}
		$record = $db->getOne($tablename, $fields );
		if($record){
			$record['structural_audit_report_date'] = human_date($record['structural_audit_report_date']);
$record['electrical_audit_report_date'] = human_date($record['electrical_audit_report_date']);
			$page_title = $this->view->page_title = "View  Hotel Inspection Form";
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
		return $this->render_view("hotel_inspection_form/view.php", $record);
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
			$fields = $this->fields = array("recid","hotel_name","hotel_address","owners_name","mobile_no","type_of_application_id","old_noc_number","old_noc_date","building_height","building_floor","no_n_width_stairs_one","no_n_width_stairs_two","no_n_width_stairs_three","no_lifts_in_the_building","no_entrance_routes","no_exit_routes","store_room_id","natural_ventilation_windows","area","no_employees_female","no_employees_male","no_employees_total","working_hours","floor_number_of_hotel","is_directional_board_available","hotel_departments","table_quantity","chair_quantity","is_generator_system_available","is_structural_audit_report_avilable_id","structural_audit_report_date","is_electrical_audit_report_available_id","electrical_audit_report_date","fire_prevention_measures_information","extinguishing_licen_agency_name","extinguishing_licen_agency_no","extinguishing_licen_agency_validity","extinguishing_licen_agency_cert_no","water_storage_capacity_terrace","water_storage_capacity_groundfloor","gas_bank","lpg_cylender","cng_pipe_line","user_id","date","status");
			$postdata = $this->format_request_data($formdata);
			$this->rules_array = array(
				'recid' => 'required',
				'hotel_name' => 'required',
				'hotel_address' => 'required',
				'owners_name' => 'required',
				'mobile_no' => 'required',
				'type_of_application_id' => 'required',
				'building_height' => 'required',
				'building_floor' => 'required',
				'no_n_width_stairs_one' => 'required',
				'no_n_width_stairs_two' => 'required',
				'no_n_width_stairs_three' => 'required',
				'no_lifts_in_the_building' => 'required',
				'no_entrance_routes' => 'required',
				'no_exit_routes' => 'required',
				'store_room_id' => 'required',
				'natural_ventilation_windows' => 'required',
				'area' => 'required',
				'no_employees_female' => 'required|numeric',
				'no_employees_male' => 'required|numeric',
				'no_employees_total' => 'required|numeric',
				'working_hours' => 'required',
				'floor_number_of_hotel' => 'required',
				'is_directional_board_available' => 'required',
				'hotel_departments' => 'required',
				'table_quantity' => 'required|numeric',
				'chair_quantity' => 'required|numeric',
				'is_generator_system_available' => 'required',
				'is_structural_audit_report_avilable_id' => 'required',
				'is_electrical_audit_report_available_id' => 'required',
				'fire_prevention_measures_information' => 'required',
				'extinguishing_licen_agency_name' => 'required',
				'extinguishing_licen_agency_no' => 'required',
				'extinguishing_licen_agency_validity' => 'required',
				'extinguishing_licen_agency_cert_no' => 'required',
				'water_storage_capacity_terrace' => 'required|numeric',
				'water_storage_capacity_groundfloor' => 'required|numeric',
				'gas_bank' => 'required',
				'lpg_cylender' => 'required',
				'cng_pipe_line' => 'required',
			);
			$this->sanitize_array = array(
				'recid' => 'sanitize_string',
				'hotel_name' => 'sanitize_string',
				'hotel_address' => 'sanitize_string',
				'owners_name' => 'sanitize_string',
				'mobile_no' => 'sanitize_string',
				'type_of_application_id' => 'sanitize_string',
				'old_noc_number' => 'sanitize_string',
				'old_noc_date' => 'sanitize_string',
				'building_height' => 'sanitize_string',
				'building_floor' => 'sanitize_string',
				'no_n_width_stairs_one' => 'sanitize_string',
				'no_n_width_stairs_two' => 'sanitize_string',
				'no_n_width_stairs_three' => 'sanitize_string',
				'no_lifts_in_the_building' => 'sanitize_string',
				'no_entrance_routes' => 'sanitize_string',
				'no_exit_routes' => 'sanitize_string',
				'store_room_id' => 'sanitize_string',
				'natural_ventilation_windows' => 'sanitize_string',
				'area' => 'sanitize_string',
				'no_employees_female' => 'sanitize_string',
				'no_employees_male' => 'sanitize_string',
				'no_employees_total' => 'sanitize_string',
				'working_hours' => 'sanitize_string',
				'floor_number_of_hotel' => 'sanitize_string',
				'is_directional_board_available' => 'sanitize_string',
				'hotel_departments' => 'sanitize_string',
				'table_quantity' => 'sanitize_string',
				'chair_quantity' => 'sanitize_string',
				'is_generator_system_available' => 'sanitize_string',
				'is_structural_audit_report_avilable_id' => 'sanitize_string',
				'structural_audit_report_date' => 'sanitize_string',
				'is_electrical_audit_report_available_id' => 'sanitize_string',
				'electrical_audit_report_date' => 'sanitize_string',
				'fire_prevention_measures_information' => 'sanitize_string',
				'extinguishing_licen_agency_name' => 'sanitize_string',
				'extinguishing_licen_agency_no' => 'sanitize_string',
				'extinguishing_licen_agency_validity' => 'sanitize_string',
				'extinguishing_licen_agency_cert_no' => 'sanitize_string',
				'water_storage_capacity_terrace' => 'sanitize_string',
				'water_storage_capacity_groundfloor' => 'sanitize_string',
				'gas_bank' => 'sanitize_string',
				'lpg_cylender' => 'sanitize_string',
				'cng_pipe_line' => 'sanitize_string',
			);
			$this->filter_vals = true; //set whether to remove empty fields
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			$modeldata['user_id'] = USER_ID;
$modeldata['date'] = USER_ID;
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
		$page_title = $this->view->page_title = "Add New Hotel Inspection Form";
		$this->render_view("hotel_inspection_form/add.php");
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
		$fields = $this->fields = array("id","recid","hotel_name","hotel_address","owners_name","mobile_no","type_of_application_id","old_noc_number","old_noc_date","building_height","building_floor","no_n_width_stairs_one","no_n_width_stairs_two","no_n_width_stairs_three","no_lifts_in_the_building","no_entrance_routes","no_exit_routes","store_room_id","natural_ventilation_windows","area","no_employees_female","no_employees_male","no_employees_total","working_hours","floor_number_of_hotel","is_directional_board_available","hotel_departments","table_quantity","chair_quantity","is_generator_system_available","is_structural_audit_report_avilable_id","structural_audit_report_date","is_electrical_audit_report_available_id","electrical_audit_report_date","fire_prevention_measures_information","extinguishing_licen_agency_name","extinguishing_licen_agency_no","extinguishing_licen_agency_validity","extinguishing_licen_agency_cert_no","water_storage_capacity_terrace","water_storage_capacity_groundfloor","gas_bank","lpg_cylender","cng_pipe_line","user_id","date","status");
		if($formdata){
			$postdata = $this->format_request_data($formdata);
			$this->rules_array = array(
				'recid' => 'required',
				'hotel_name' => 'required',
				'hotel_address' => 'required',
				'owners_name' => 'required',
				'mobile_no' => 'required',
				'type_of_application_id' => 'required',
				'building_height' => 'required',
				'building_floor' => 'required',
				'no_n_width_stairs_one' => 'required',
				'no_n_width_stairs_two' => 'required',
				'no_n_width_stairs_three' => 'required',
				'no_lifts_in_the_building' => 'required',
				'no_entrance_routes' => 'required',
				'no_exit_routes' => 'required',
				'store_room_id' => 'required',
				'natural_ventilation_windows' => 'required',
				'area' => 'required',
				'no_employees_female' => 'required|numeric',
				'no_employees_male' => 'required|numeric',
				'no_employees_total' => 'required|numeric',
				'working_hours' => 'required',
				'floor_number_of_hotel' => 'required',
				'is_directional_board_available' => 'required',
				'hotel_departments' => 'required',
				'table_quantity' => 'required|numeric',
				'chair_quantity' => 'required|numeric',
				'is_generator_system_available' => 'required',
				'is_structural_audit_report_avilable_id' => 'required',
				'is_electrical_audit_report_available_id' => 'required',
				'fire_prevention_measures_information' => 'required',
				'extinguishing_licen_agency_name' => 'required',
				'extinguishing_licen_agency_no' => 'required',
				'extinguishing_licen_agency_validity' => 'required',
				'extinguishing_licen_agency_cert_no' => 'required',
				'water_storage_capacity_terrace' => 'required|numeric',
				'water_storage_capacity_groundfloor' => 'required|numeric',
				'gas_bank' => 'required',
				'lpg_cylender' => 'required',
				'cng_pipe_line' => 'required',
			);
			$this->sanitize_array = array(
				'recid' => 'sanitize_string',
				'hotel_name' => 'sanitize_string',
				'hotel_address' => 'sanitize_string',
				'owners_name' => 'sanitize_string',
				'mobile_no' => 'sanitize_string',
				'type_of_application_id' => 'sanitize_string',
				'old_noc_number' => 'sanitize_string',
				'old_noc_date' => 'sanitize_string',
				'building_height' => 'sanitize_string',
				'building_floor' => 'sanitize_string',
				'no_n_width_stairs_one' => 'sanitize_string',
				'no_n_width_stairs_two' => 'sanitize_string',
				'no_n_width_stairs_three' => 'sanitize_string',
				'no_lifts_in_the_building' => 'sanitize_string',
				'no_entrance_routes' => 'sanitize_string',
				'no_exit_routes' => 'sanitize_string',
				'store_room_id' => 'sanitize_string',
				'natural_ventilation_windows' => 'sanitize_string',
				'area' => 'sanitize_string',
				'no_employees_female' => 'sanitize_string',
				'no_employees_male' => 'sanitize_string',
				'no_employees_total' => 'sanitize_string',
				'working_hours' => 'sanitize_string',
				'floor_number_of_hotel' => 'sanitize_string',
				'is_directional_board_available' => 'sanitize_string',
				'hotel_departments' => 'sanitize_string',
				'table_quantity' => 'sanitize_string',
				'chair_quantity' => 'sanitize_string',
				'is_generator_system_available' => 'sanitize_string',
				'is_structural_audit_report_avilable_id' => 'sanitize_string',
				'structural_audit_report_date' => 'sanitize_string',
				'is_electrical_audit_report_available_id' => 'sanitize_string',
				'electrical_audit_report_date' => 'sanitize_string',
				'fire_prevention_measures_information' => 'sanitize_string',
				'extinguishing_licen_agency_name' => 'sanitize_string',
				'extinguishing_licen_agency_no' => 'sanitize_string',
				'extinguishing_licen_agency_validity' => 'sanitize_string',
				'extinguishing_licen_agency_cert_no' => 'sanitize_string',
				'water_storage_capacity_terrace' => 'sanitize_string',
				'water_storage_capacity_groundfloor' => 'sanitize_string',
				'gas_bank' => 'sanitize_string',
				'lpg_cylender' => 'sanitize_string',
				'cng_pipe_line' => 'sanitize_string',
			);
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			$modeldata['user_id'] = USER_ID;
$modeldata['date'] = USER_ID;
$modeldata['status'] = "0";
			if($this->validated()){
				$db->where("hotel_inspection_form.id", $rec_id);;
				$bool = $db->update($tablename, $modeldata);
				$numRows = $db->getRowCount(); //number of affected rows. 0 = no record field updated
				if($bool && $numRows){
					$this->set_flash_msg("Record updated successfully", "success");
					return $this->redirect("hotel_inspection_form");
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
						return	$this->redirect("hotel_inspection_form");
					}
				}
			}
		}
		$db->where("hotel_inspection_form.id", $rec_id);;
		$data = $db->getOne($tablename, $fields);
		$page_title = $this->view->page_title = "Edit  Hotel Inspection Form";
		if(!$data){
			$this->set_page_error();
		}
		return $this->render_view("hotel_inspection_form/edit.php", $data);
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
		$db->where("hotel_inspection_form.id", $arr_rec_id, "in");
		$bool = $db->delete($tablename);
		if($bool){
			$this->set_flash_msg("Record deleted successfully", "success");
		}
		elseif($db->getLastError()){
			$page_error = $db->getLastError();
			$this->set_flash_msg($page_error, "danger");
		}
		return	$this->redirect("hotel_inspection_form");
	}
}
