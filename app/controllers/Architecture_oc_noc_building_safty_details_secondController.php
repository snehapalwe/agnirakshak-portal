<?php 
/**
 * Architecture_oc_noc_building_safty_details_second Page Controller
 * @category  Controller
 */
class Architecture_oc_noc_building_safty_details_secondController extends SecureController{
	function __construct(){
		parent::__construct();
		$this->tablename = "architecture_oc_noc_building_safty_details_second";
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
			"access", 
			"road_name_and_width", 
			"officer_remark_on_road_name_and_width", 
			"internal_acess_width_if_any", 
			"officer_remark_on_internal_acess_width", 
			"entrance_gates_number_and_width", 
			"is_entrance_gates_photo_attached_value", 
			"upload_entrance_gates_photo", 
			"officer_remark_on_entrance_gates_number_and_width", 
			"is_compound_wall_available_value", 
			"is_compound_wall_photo_attached_value", 
			"upload_compound_wall_photo", 
			"officer_remark_on_compound_wall", 
			"is_courtyards_or_open_spaces_as_per_noc_value", 
			"officers_remark_on_courtyards_or_open_spaces", 
			"is_access_for_fire_appliances_on_podium_value", 
			"officer_remark_on_access_for_fire_appliances_on_podium", 
			"escape_staircase_width", 
			"officer_remark_on_escape_staircase_width", 
			"open_type_staircase_width", 
			"is_open_type_photo_attached_value", 
			"upload_open_type_staircase_photo", 
			"officer_remark_staircase_width", 
			"enclosed_type_pressurized_or_natural_staircase_width", 
			"is_enclosed_type_photo_attached_value", 
			"upload_enclosed_type_photo", 
			"officer_remark_on_enclosed_pressurized_or_natural_staircase", 
			"internal_staircase_type_width_location", 
			"is_internal_staircase_type_width_location_value", 
			"upload_internal_staircase_type_photo", 
			"officer_remark_on_internal_staircase_type_width_location", 
			"certified_lift_numbers", 
			"is_certified_lift_photo_attached_value", 
			"upload_certified_lift_photo", 
			"officer_remark_on_certified_lift", 
			"other_lift_numbers", 
			"officer_remark_on_other_lift", 
			"lift_lobby_ventilated_pressurized_or_naturally", 
			"is_lift_lobby_ventilated_photo_attached_value", 
			"upload_lift_lobby_photo", 
			"officer_remark_on_lift_lobby", 
			"type_of_lift_doors", 
			"is_lift_doors_photo_attached_vlaue", 
			"upload_lift_doors_photo", 
			"officer_remark_on_type_of_lift_doors", 
			"location_of_electric_meter", 
			"is_electric_meter_photo_attached_value", 
			"upload_electric_meter_photo", 
			"is_electrical_cable_shaft_sealed", 
			"is_electrical_cable_shaft_sealed_photo_attached_value", 
			"upload_electrical_cable_shaft_photo", 
			"number_of_basements", 
			"officer_remark_on_number_of_basements", 
			"use_of_first_basement", 
			"officer_remark_on_use_of_first_basement", 
			"use_of_second_basement", 
			"officer_remark_on_use_of_second_basement", 
			"use_of_third_basement", 
			"officer_remark_on_use_of_third_basement", 
			"no_of_staircase_or_ramps_for_basement", 
			"officer_remark_on_no_of_staircase_or_ramps_for_basement", 
			"is_basement_staircase_as_per_noc", 
			"is_basement_staircase_as_per_noc_photo_attached_value", 
			"upload_basement_staircase_as_per_noc_photo", 
			"officer_remark_on_basement_staircase_as_per_noc", 
			"type_of_ventilation", 
			"is_ventilation_photo_attached_value", 
			"upload_ventilation_photo", 
			"officer_remark_on_ventilation_type", 
			"compartmentation", 
			"is_compartmentation_photo_attached_value", 
			"upload_compartmentation_photo", 
			"officers_remark_compartmentation", 
			"entrance_and_kitchen_doors", 
			"is_entrance_and_kitchen_doors_photo_attached_value", 
			"upload_entrance_and_kitchen_doors_photo", 
			"officers_remark_on_entrance_and_kitchen_doors", 
			"duplex_flat_entry", 
			"is_duplex_flat_entry_photo_attached_value", 
			"upload_duplex_flat_entry_photo", 
			"officer_remark_on_is_duplex_flat_entry", 
			"user_id", 
			"date");
		$pagination = $this->get_pagination(MAX_RECORD_COUNT); // get current pagination e.g array(page_number, page_limit)
		//search table record
		if(!empty($request->search)){
			$text = trim($request->search); 
			$search_condition = "(
				architecture_oc_noc_building_safty_details_second.id LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.access LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.road_name_and_width LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.officer_remark_on_road_name_and_width LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.internal_acess_width_if_any LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.officer_remark_on_internal_acess_width LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.entrance_gates_number_and_width LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.is_entrance_gates_photo_attached LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.is_entrance_gates_photo_attached_value LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.upload_entrance_gates_photo LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.officer_remark_on_entrance_gates_number_and_width LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.is_compound_wall_available_id LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.is_compound_wall_available_value LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.is_compound_wall_photo_attached_id LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.is_compound_wall_photo_attached_value LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.upload_compound_wall_photo LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.officer_remark_on_compound_wall LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.is_courtyards_or_open_spaces_as_per_noc_id LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.is_courtyards_or_open_spaces_as_per_noc_value LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.officers_remark_on_courtyards_or_open_spaces LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.is_access_for_fire_appliances_on_podium_id LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.is_access_for_fire_appliances_on_podium_value LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.officer_remark_on_access_for_fire_appliances_on_podium LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.escape_staircase_width LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.officer_remark_on_escape_staircase_width LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.open_type_staircase_width LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.is_open_type_photo_attached_id LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.is_open_type_photo_attached_value LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.upload_open_type_staircase_photo LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.officer_remark_staircase_width LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.enclosed_type_pressurized_or_natural_staircase_width LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.is_enclosed_type_photo_attached_id LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.is_enclosed_type_photo_attached_value LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.upload_enclosed_type_photo LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.officer_remark_on_enclosed_pressurized_or_natural_staircase LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.internal_staircase_type_width_location LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.is_internal_staircase_type_width_location_id LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.is_internal_staircase_type_width_location_value LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.upload_internal_staircase_type_photo LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.officer_remark_on_internal_staircase_type_width_location LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.certified_lift_numbers LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.is_certified_lift_photo_attached_id LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.is_certified_lift_photo_attached_value LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.upload_certified_lift_photo LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.officer_remark_on_certified_lift LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.other_lift_numbers LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.officer_remark_on_other_lift LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.lift_lobby_ventilated_pressurized_or_naturally LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.is_lift_lobby_ventilated_photo_attached_id LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.is_lift_lobby_ventilated_photo_attached_value LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.upload_lift_lobby_photo LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.officer_remark_on_lift_lobby LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.type_of_lift_doors LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.is_lift_doors_photo_attached_id LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.is_lift_doors_photo_attached_vlaue LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.upload_lift_doors_photo LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.officer_remark_on_type_of_lift_doors LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.location_of_electric_meter LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.is_electric_meter_photo_attached_id LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.is_electric_meter_photo_attached_value LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.upload_electric_meter_photo LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.is_electrical_cable_shaft_sealed LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.is_electrical_cable_shaft_sealed_photo_attached_id LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.is_electrical_cable_shaft_sealed_photo_attached_value LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.upload_electrical_cable_shaft_photo LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.number_of_basements LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.officer_remark_on_number_of_basements LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.use_of_first_basement LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.officer_remark_on_use_of_first_basement LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.use_of_second_basement LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.officer_remark_on_use_of_second_basement LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.use_of_third_basement LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.officer_remark_on_use_of_third_basement LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.no_of_staircase_or_ramps_for_basement LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.officer_remark_on_no_of_staircase_or_ramps_for_basement LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.is_basement_staircase_as_per_noc LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.is_basement_staircase_as_per_noc_photo_attached_id LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.is_basement_staircase_as_per_noc_photo_attached_value LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.upload_basement_staircase_as_per_noc_photo LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.officer_remark_on_basement_staircase_as_per_noc LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.type_of_ventilation LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.is_ventilation_photo_attached_id LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.is_ventilation_photo_attached_value LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.upload_ventilation_photo LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.officer_remark_on_ventilation_type LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.compartmentation LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.is_compartmentation_photo_attached_id LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.is_compartmentation_photo_attached_value LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.upload_compartmentation_photo LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.officers_remark_compartmentation LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.entrance_and_kitchen_doors LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.is_entrance_and_kitchen_doors_photo_attached_id LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.is_entrance_and_kitchen_doors_photo_attached_value LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.upload_entrance_and_kitchen_doors_photo LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.officers_remark_on_entrance_and_kitchen_doors LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.duplex_flat_entry LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.is_duplex_flat_entry_photo_attached_id LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.is_duplex_flat_entry_photo_attached_value LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.upload_duplex_flat_entry_photo LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.officer_remark_on_is_duplex_flat_entry LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.user_id LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.date LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.rec_id LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.status LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.paid LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.int_no LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.yr LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.zone LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.payment_done LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.certificate_file LIKE ? OR 
				architecture_oc_noc_building_safty_details_second.timestamp LIKE ?
			)";
			$search_params = array(
				"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
			);
			//setting search conditions
			$db->where($search_condition, $search_params);
			 //template to use when ajax search
			$this->view->search_template = "architecture_oc_noc_building_safty_details_second/search.php";
		}
		if(!empty($request->orderby)){
			$orderby = $request->orderby;
			$ordertype = (!empty($request->ordertype) ? $request->ordertype : ORDER_TYPE);
			$db->orderBy($orderby, $ordertype);
		}
		else{
			$db->orderBy("architecture_oc_noc_building_safty_details_second.id", ORDER_TYPE);
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
				$record['date'] = human_date($record['date']);
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
		$page_title = $this->view->page_title = "Architecture Oc Noc Building Safty Details Second";
		$this->render_view("architecture_oc_noc_building_safty_details_second/list.php", $data); //render the full page
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
			"access", 
			"road_name_and_width", 
			"officer_remark_on_road_name_and_width", 
			"internal_acess_width_if_any", 
			"officer_remark_on_internal_acess_width", 
			"entrance_gates_number_and_width", 
			"is_entrance_gates_photo_attached", 
			"is_entrance_gates_photo_attached_value", 
			"upload_entrance_gates_photo", 
			"officer_remark_on_entrance_gates_number_and_width", 
			"is_compound_wall_available_id", 
			"is_compound_wall_available_value", 
			"is_compound_wall_photo_attached_id", 
			"is_compound_wall_photo_attached_value", 
			"upload_compound_wall_photo", 
			"officer_remark_on_compound_wall", 
			"is_courtyards_or_open_spaces_as_per_noc_id", 
			"is_courtyards_or_open_spaces_as_per_noc_value", 
			"officers_remark_on_courtyards_or_open_spaces", 
			"is_access_for_fire_appliances_on_podium_id", 
			"is_access_for_fire_appliances_on_podium_value", 
			"officer_remark_on_access_for_fire_appliances_on_podium", 
			"escape_staircase_width", 
			"officer_remark_on_escape_staircase_width", 
			"open_type_staircase_width", 
			"is_open_type_photo_attached_id", 
			"is_open_type_photo_attached_value", 
			"upload_open_type_staircase_photo", 
			"officer_remark_staircase_width", 
			"enclosed_type_pressurized_or_natural_staircase_width", 
			"is_enclosed_type_photo_attached_id", 
			"is_enclosed_type_photo_attached_value", 
			"upload_enclosed_type_photo", 
			"officer_remark_on_enclosed_pressurized_or_natural_staircase", 
			"internal_staircase_type_width_location", 
			"is_internal_staircase_type_width_location_id", 
			"is_internal_staircase_type_width_location_value", 
			"upload_internal_staircase_type_photo", 
			"officer_remark_on_internal_staircase_type_width_location", 
			"certified_lift_numbers", 
			"is_certified_lift_photo_attached_id", 
			"is_certified_lift_photo_attached_value", 
			"upload_certified_lift_photo", 
			"officer_remark_on_certified_lift", 
			"other_lift_numbers", 
			"officer_remark_on_other_lift", 
			"lift_lobby_ventilated_pressurized_or_naturally", 
			"is_lift_lobby_ventilated_photo_attached_id", 
			"is_lift_lobby_ventilated_photo_attached_value", 
			"upload_lift_lobby_photo", 
			"officer_remark_on_lift_lobby", 
			"type_of_lift_doors", 
			"is_lift_doors_photo_attached_id", 
			"is_lift_doors_photo_attached_vlaue", 
			"upload_lift_doors_photo", 
			"officer_remark_on_type_of_lift_doors", 
			"location_of_electric_meter", 
			"is_electric_meter_photo_attached_id", 
			"is_electric_meter_photo_attached_value", 
			"upload_electric_meter_photo", 
			"is_electrical_cable_shaft_sealed", 
			"is_electrical_cable_shaft_sealed_photo_attached_id", 
			"is_electrical_cable_shaft_sealed_photo_attached_value", 
			"upload_electrical_cable_shaft_photo", 
			"number_of_basements", 
			"officer_remark_on_number_of_basements", 
			"use_of_first_basement", 
			"officer_remark_on_use_of_first_basement", 
			"use_of_second_basement", 
			"officer_remark_on_use_of_second_basement", 
			"use_of_third_basement", 
			"officer_remark_on_use_of_third_basement", 
			"no_of_staircase_or_ramps_for_basement", 
			"officer_remark_on_no_of_staircase_or_ramps_for_basement", 
			"is_basement_staircase_as_per_noc", 
			"is_basement_staircase_as_per_noc_photo_attached_id", 
			"is_basement_staircase_as_per_noc_photo_attached_value", 
			"upload_basement_staircase_as_per_noc_photo", 
			"officer_remark_on_basement_staircase_as_per_noc", 
			"type_of_ventilation", 
			"is_ventilation_photo_attached_id", 
			"is_ventilation_photo_attached_value", 
			"upload_ventilation_photo", 
			"officer_remark_on_ventilation_type", 
			"compartmentation", 
			"is_compartmentation_photo_attached_id", 
			"is_compartmentation_photo_attached_value", 
			"upload_compartmentation_photo", 
			"officers_remark_compartmentation", 
			"entrance_and_kitchen_doors", 
			"is_entrance_and_kitchen_doors_photo_attached_id", 
			"is_entrance_and_kitchen_doors_photo_attached_value", 
			"upload_entrance_and_kitchen_doors_photo", 
			"officers_remark_on_entrance_and_kitchen_doors", 
			"duplex_flat_entry", 
			"is_duplex_flat_entry_photo_attached_id", 
			"is_duplex_flat_entry_photo_attached_value", 
			"upload_duplex_flat_entry_photo", 
			"officer_remark_on_is_duplex_flat_entry", 
			"user_id", 
			"date", 
			"rec_id", 
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
			$db->where("architecture_oc_noc_building_safty_details_second.id", $rec_id);; //select record based on primary key
		}
		$record = $db->getOne($tablename, $fields );
		if($record){
			$record['date'] = human_date($record['date']);
			$page_title = $this->view->page_title = "View  Architecture Oc Noc Building Safty Details Second";
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
		return $this->render_view("architecture_oc_noc_building_safty_details_second/view.php", $record);
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
			$fields = $this->fields = array("access","road_name_and_width","internal_acess_width_if_any","entrance_gates_number_and_width","is_entrance_gates_photo_attached","upload_entrance_gates_photo","is_compound_wall_available_id","is_compound_wall_photo_attached_id","upload_compound_wall_photo","is_courtyards_or_open_spaces_as_per_noc_id","is_access_for_fire_appliances_on_podium_id","officer_remark_on_access_for_fire_appliances_on_podium","escape_staircase_width","open_type_staircase_width","is_open_type_photo_attached_id","upload_open_type_staircase_photo","enclosed_type_pressurized_or_natural_staircase_width","is_enclosed_type_photo_attached_id","upload_enclosed_type_photo","internal_staircase_type_width_location","is_internal_staircase_type_width_location_id","upload_internal_staircase_type_photo","certified_lift_numbers","is_certified_lift_photo_attached_id","upload_certified_lift_photo","other_lift_numbers","officer_remark_on_other_lift","lift_lobby_ventilated_pressurized_or_naturally","is_lift_lobby_ventilated_photo_attached_id","upload_lift_lobby_photo","type_of_lift_doors","is_lift_doors_photo_attached_id","upload_lift_doors_photo","location_of_electric_meter","is_electric_meter_photo_attached_id","upload_electric_meter_photo","is_electrical_cable_shaft_sealed","is_electrical_cable_shaft_sealed_photo_attached_id","upload_electrical_cable_shaft_photo","number_of_basements","use_of_first_basement","use_of_second_basement","use_of_third_basement","no_of_staircase_or_ramps_for_basement","is_basement_staircase_as_per_noc","is_basement_staircase_as_per_noc_photo_attached_id","upload_basement_staircase_as_per_noc_photo","type_of_ventilation","is_ventilation_photo_attached_id","upload_ventilation_photo","compartmentation","is_compartmentation_photo_attached_id","upload_compartmentation_photo","entrance_and_kitchen_doors","is_entrance_and_kitchen_doors_photo_attached_id","upload_entrance_and_kitchen_doors_photo","duplex_flat_entry","is_duplex_flat_entry_photo_attached_id","upload_duplex_flat_entry_photo","user_id","date","rec_id");
			$postdata = $this->format_request_data($formdata);
			$this->rules_array = array(
				'access' => 'required',
				'road_name_and_width' => 'required',
				'internal_acess_width_if_any' => 'required',
				'entrance_gates_number_and_width' => 'required',
				'is_entrance_gates_photo_attached' => 'required',
				'upload_entrance_gates_photo' => 'required',
				'is_compound_wall_available_id' => 'required',
				'is_compound_wall_photo_attached_id' => 'required',
				'upload_compound_wall_photo' => 'required',
				'is_courtyards_or_open_spaces_as_per_noc_id' => 'required',
				'is_access_for_fire_appliances_on_podium_id' => 'required',
				'officer_remark_on_access_for_fire_appliances_on_podium' => 'required',
				'escape_staircase_width' => 'required',
				'open_type_staircase_width' => 'required',
				'is_open_type_photo_attached_id' => 'required',
				'upload_open_type_staircase_photo' => 'required',
				'enclosed_type_pressurized_or_natural_staircase_width' => 'required',
				'is_enclosed_type_photo_attached_id' => 'required',
				'upload_enclosed_type_photo' => 'required',
				'internal_staircase_type_width_location' => 'required',
				'is_internal_staircase_type_width_location_id' => 'required',
				'upload_internal_staircase_type_photo' => 'required',
				'certified_lift_numbers' => 'required',
				'is_certified_lift_photo_attached_id' => 'required',
				'upload_certified_lift_photo' => 'required',
				'other_lift_numbers' => 'required',
				'officer_remark_on_other_lift' => 'required',
				'lift_lobby_ventilated_pressurized_or_naturally' => 'required',
				'is_lift_lobby_ventilated_photo_attached_id' => 'required',
				'upload_lift_lobby_photo' => 'required',
				'type_of_lift_doors' => 'required',
				'is_lift_doors_photo_attached_id' => 'required',
				'upload_lift_doors_photo' => 'required',
				'location_of_electric_meter' => 'required',
				'is_electric_meter_photo_attached_id' => 'required',
				'upload_electric_meter_photo' => 'required',
				'is_electrical_cable_shaft_sealed' => 'required',
				'is_electrical_cable_shaft_sealed_photo_attached_id' => 'required',
				'upload_electrical_cable_shaft_photo' => 'required',
				'number_of_basements' => 'required',
				'use_of_first_basement' => 'required',
				'use_of_second_basement' => 'required',
				'use_of_third_basement' => 'required',
				'no_of_staircase_or_ramps_for_basement' => 'required',
				'is_basement_staircase_as_per_noc' => 'required',
				'is_basement_staircase_as_per_noc_photo_attached_id' => 'required',
				'upload_basement_staircase_as_per_noc_photo' => 'required',
				'type_of_ventilation' => 'required',
				'is_ventilation_photo_attached_id' => 'required',
				'upload_ventilation_photo' => 'required',
				'compartmentation' => 'required',
				'is_compartmentation_photo_attached_id' => 'required',
				'upload_compartmentation_photo' => 'required',
				'entrance_and_kitchen_doors' => 'required',
				'is_entrance_and_kitchen_doors_photo_attached_id' => 'required',
				'upload_entrance_and_kitchen_doors_photo' => 'required',
				'duplex_flat_entry' => 'required',
				'is_duplex_flat_entry_photo_attached_id' => 'required',
				'upload_duplex_flat_entry_photo' => 'required',
			);
			$this->sanitize_array = array(
				'access' => 'sanitize_string',
				'road_name_and_width' => 'sanitize_string',
				'internal_acess_width_if_any' => 'sanitize_string',
				'entrance_gates_number_and_width' => 'sanitize_string',
				'is_entrance_gates_photo_attached' => 'sanitize_string',
				'upload_entrance_gates_photo' => 'sanitize_string',
				'is_compound_wall_available_id' => 'sanitize_string',
				'is_compound_wall_photo_attached_id' => 'sanitize_string',
				'upload_compound_wall_photo' => 'sanitize_string',
				'is_courtyards_or_open_spaces_as_per_noc_id' => 'sanitize_string',
				'is_access_for_fire_appliances_on_podium_id' => 'sanitize_string',
				'officer_remark_on_access_for_fire_appliances_on_podium' => 'sanitize_string',
				'escape_staircase_width' => 'sanitize_string',
				'open_type_staircase_width' => 'sanitize_string',
				'is_open_type_photo_attached_id' => 'sanitize_string',
				'upload_open_type_staircase_photo' => 'sanitize_string',
				'enclosed_type_pressurized_or_natural_staircase_width' => 'sanitize_string',
				'is_enclosed_type_photo_attached_id' => 'sanitize_string',
				'upload_enclosed_type_photo' => 'sanitize_string',
				'internal_staircase_type_width_location' => 'sanitize_string',
				'is_internal_staircase_type_width_location_id' => 'sanitize_string',
				'upload_internal_staircase_type_photo' => 'sanitize_string',
				'certified_lift_numbers' => 'sanitize_string',
				'is_certified_lift_photo_attached_id' => 'sanitize_string',
				'upload_certified_lift_photo' => 'sanitize_string',
				'other_lift_numbers' => 'sanitize_string',
				'officer_remark_on_other_lift' => 'sanitize_string',
				'lift_lobby_ventilated_pressurized_or_naturally' => 'sanitize_string',
				'is_lift_lobby_ventilated_photo_attached_id' => 'sanitize_string',
				'upload_lift_lobby_photo' => 'sanitize_string',
				'type_of_lift_doors' => 'sanitize_string',
				'is_lift_doors_photo_attached_id' => 'sanitize_string',
				'upload_lift_doors_photo' => 'sanitize_string',
				'location_of_electric_meter' => 'sanitize_string',
				'is_electric_meter_photo_attached_id' => 'sanitize_string',
				'upload_electric_meter_photo' => 'sanitize_string',
				'is_electrical_cable_shaft_sealed' => 'sanitize_string',
				'is_electrical_cable_shaft_sealed_photo_attached_id' => 'sanitize_string',
				'upload_electrical_cable_shaft_photo' => 'sanitize_string',
				'number_of_basements' => 'sanitize_string',
				'use_of_first_basement' => 'sanitize_string',
				'use_of_second_basement' => 'sanitize_string',
				'use_of_third_basement' => 'sanitize_string',
				'no_of_staircase_or_ramps_for_basement' => 'sanitize_string',
				'is_basement_staircase_as_per_noc' => 'sanitize_string',
				'is_basement_staircase_as_per_noc_photo_attached_id' => 'sanitize_string',
				'upload_basement_staircase_as_per_noc_photo' => 'sanitize_string',
				'type_of_ventilation' => 'sanitize_string',
				'is_ventilation_photo_attached_id' => 'sanitize_string',
				'upload_ventilation_photo' => 'sanitize_string',
				'compartmentation' => 'sanitize_string',
				'is_compartmentation_photo_attached_id' => 'sanitize_string',
				'upload_compartmentation_photo' => 'sanitize_string',
				'entrance_and_kitchen_doors' => 'sanitize_string',
				'is_entrance_and_kitchen_doors_photo_attached_id' => 'sanitize_string',
				'upload_entrance_and_kitchen_doors_photo' => 'sanitize_string',
				'duplex_flat_entry' => 'sanitize_string',
				'is_duplex_flat_entry_photo_attached_id' => 'sanitize_string',
				'upload_duplex_flat_entry_photo' => 'sanitize_string',
			);
			$this->filter_vals = true; //set whether to remove empty fields
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			$modeldata['user_id'] = USER_ID;
$modeldata['date'] = date_now();
$modeldata['rec_id'] = "0";
			if($this->validated()){
				$rec_id = $this->rec_id = $db->insert($tablename, $modeldata);
				if($rec_id){
					$this->set_flash_msg("Record added successfully", "success");
					return	$this->redirect("architecture_oc_noc_building_safty_details_second");
				}
				else{
					$this->set_page_error();
				}
			}
		}
		$page_title = $this->view->page_title = "Add New Architecture Oc Noc Building Safty Details Second";
		$this->render_view("architecture_oc_noc_building_safty_details_second/add.php");
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
		$fields = $this->fields = array("id","access","road_name_and_width","officer_remark_on_road_name_and_width","internal_acess_width_if_any","officer_remark_on_internal_acess_width","entrance_gates_number_and_width","is_entrance_gates_photo_attached","upload_entrance_gates_photo","officer_remark_on_entrance_gates_number_and_width","is_compound_wall_available_id","is_compound_wall_photo_attached_id","upload_compound_wall_photo","officer_remark_on_compound_wall","is_courtyards_or_open_spaces_as_per_noc_id","officers_remark_on_courtyards_or_open_spaces","is_access_for_fire_appliances_on_podium_id","officer_remark_on_access_for_fire_appliances_on_podium","escape_staircase_width","officer_remark_on_escape_staircase_width","open_type_staircase_width","is_open_type_photo_attached_id","upload_open_type_staircase_photo","officer_remark_staircase_width","enclosed_type_pressurized_or_natural_staircase_width","is_enclosed_type_photo_attached_id","upload_enclosed_type_photo","officer_remark_on_enclosed_pressurized_or_natural_staircase","internal_staircase_type_width_location","is_internal_staircase_type_width_location_id","upload_internal_staircase_type_photo","officer_remark_on_internal_staircase_type_width_location","certified_lift_numbers","is_certified_lift_photo_attached_id","upload_certified_lift_photo","officer_remark_on_certified_lift","other_lift_numbers","officer_remark_on_other_lift","lift_lobby_ventilated_pressurized_or_naturally","is_lift_lobby_ventilated_photo_attached_id","upload_lift_lobby_photo","officer_remark_on_lift_lobby","type_of_lift_doors","is_lift_doors_photo_attached_id","upload_lift_doors_photo","officer_remark_on_type_of_lift_doors","location_of_electric_meter","is_electric_meter_photo_attached_id","upload_electric_meter_photo","is_electrical_cable_shaft_sealed","is_electrical_cable_shaft_sealed_photo_attached_id","upload_electrical_cable_shaft_photo","number_of_basements","officer_remark_on_number_of_basements","use_of_first_basement","officer_remark_on_use_of_first_basement","use_of_second_basement","officer_remark_on_use_of_second_basement","use_of_third_basement","officer_remark_on_use_of_third_basement","no_of_staircase_or_ramps_for_basement","officer_remark_on_no_of_staircase_or_ramps_for_basement","is_basement_staircase_as_per_noc","is_basement_staircase_as_per_noc_photo_attached_id","upload_basement_staircase_as_per_noc_photo","officer_remark_on_basement_staircase_as_per_noc","type_of_ventilation","is_ventilation_photo_attached_id","upload_ventilation_photo","officer_remark_on_ventilation_type","compartmentation","is_compartmentation_photo_attached_id","upload_compartmentation_photo","officers_remark_compartmentation","entrance_and_kitchen_doors","is_entrance_and_kitchen_doors_photo_attached_id","upload_entrance_and_kitchen_doors_photo","officers_remark_on_entrance_and_kitchen_doors","duplex_flat_entry","is_duplex_flat_entry_photo_attached_id","upload_duplex_flat_entry_photo","officer_remark_on_is_duplex_flat_entry","user_id","date","rec_id");
		if($formdata){
			$postdata = $this->format_request_data($formdata);
			$this->rules_array = array(
				'access' => 'required',
				'road_name_and_width' => 'required',
				'officer_remark_on_road_name_and_width' => 'required',
				'internal_acess_width_if_any' => 'required',
				'officer_remark_on_internal_acess_width' => 'required',
				'entrance_gates_number_and_width' => 'required',
				'is_entrance_gates_photo_attached' => 'required',
				'upload_entrance_gates_photo' => 'required',
				'officer_remark_on_entrance_gates_number_and_width' => 'required',
				'is_compound_wall_available_id' => 'required',
				'is_compound_wall_photo_attached_id' => 'required',
				'upload_compound_wall_photo' => 'required',
				'officer_remark_on_compound_wall' => 'required',
				'is_courtyards_or_open_spaces_as_per_noc_id' => 'required',
				'officers_remark_on_courtyards_or_open_spaces' => 'required',
				'is_access_for_fire_appliances_on_podium_id' => 'required',
				'officer_remark_on_access_for_fire_appliances_on_podium' => 'required',
				'escape_staircase_width' => 'required',
				'officer_remark_on_escape_staircase_width' => 'required',
				'open_type_staircase_width' => 'required',
				'is_open_type_photo_attached_id' => 'required',
				'upload_open_type_staircase_photo' => 'required',
				'officer_remark_staircase_width' => 'required',
				'enclosed_type_pressurized_or_natural_staircase_width' => 'required',
				'is_enclosed_type_photo_attached_id' => 'required',
				'upload_enclosed_type_photo' => 'required',
				'officer_remark_on_enclosed_pressurized_or_natural_staircase' => 'required',
				'internal_staircase_type_width_location' => 'required',
				'is_internal_staircase_type_width_location_id' => 'required',
				'upload_internal_staircase_type_photo' => 'required',
				'officer_remark_on_internal_staircase_type_width_location' => 'required',
				'certified_lift_numbers' => 'required',
				'is_certified_lift_photo_attached_id' => 'required',
				'upload_certified_lift_photo' => 'required',
				'officer_remark_on_certified_lift' => 'required',
				'other_lift_numbers' => 'required',
				'officer_remark_on_other_lift' => 'required',
				'lift_lobby_ventilated_pressurized_or_naturally' => 'required',
				'is_lift_lobby_ventilated_photo_attached_id' => 'required',
				'upload_lift_lobby_photo' => 'required',
				'officer_remark_on_lift_lobby' => 'required',
				'type_of_lift_doors' => 'required',
				'is_lift_doors_photo_attached_id' => 'required',
				'upload_lift_doors_photo' => 'required',
				'officer_remark_on_type_of_lift_doors' => 'required',
				'location_of_electric_meter' => 'required',
				'is_electric_meter_photo_attached_id' => 'required',
				'upload_electric_meter_photo' => 'required',
				'is_electrical_cable_shaft_sealed' => 'required',
				'is_electrical_cable_shaft_sealed_photo_attached_id' => 'required',
				'upload_electrical_cable_shaft_photo' => 'required',
				'number_of_basements' => 'required',
				'officer_remark_on_number_of_basements' => 'required',
				'use_of_first_basement' => 'required',
				'officer_remark_on_use_of_first_basement' => 'required',
				'use_of_second_basement' => 'required',
				'officer_remark_on_use_of_second_basement' => 'required',
				'use_of_third_basement' => 'required',
				'officer_remark_on_use_of_third_basement' => 'required',
				'no_of_staircase_or_ramps_for_basement' => 'required',
				'officer_remark_on_no_of_staircase_or_ramps_for_basement' => 'required',
				'is_basement_staircase_as_per_noc' => 'required',
				'is_basement_staircase_as_per_noc_photo_attached_id' => 'required',
				'upload_basement_staircase_as_per_noc_photo' => 'required',
				'officer_remark_on_basement_staircase_as_per_noc' => 'required',
				'type_of_ventilation' => 'required',
				'is_ventilation_photo_attached_id' => 'required',
				'upload_ventilation_photo' => 'required',
				'officer_remark_on_ventilation_type' => 'required',
				'compartmentation' => 'required',
				'is_compartmentation_photo_attached_id' => 'required',
				'upload_compartmentation_photo' => 'required',
				'officers_remark_compartmentation' => 'required',
				'entrance_and_kitchen_doors' => 'required',
				'is_entrance_and_kitchen_doors_photo_attached_id' => 'required',
				'upload_entrance_and_kitchen_doors_photo' => 'required',
				'officers_remark_on_entrance_and_kitchen_doors' => 'required',
				'duplex_flat_entry' => 'required',
				'is_duplex_flat_entry_photo_attached_id' => 'required',
				'upload_duplex_flat_entry_photo' => 'required',
				'officer_remark_on_is_duplex_flat_entry' => 'required',
			);
			$this->sanitize_array = array(
				'access' => 'sanitize_string',
				'road_name_and_width' => 'sanitize_string',
				'officer_remark_on_road_name_and_width' => 'sanitize_string',
				'internal_acess_width_if_any' => 'sanitize_string',
				'officer_remark_on_internal_acess_width' => 'sanitize_string',
				'entrance_gates_number_and_width' => 'sanitize_string',
				'is_entrance_gates_photo_attached' => 'sanitize_string',
				'upload_entrance_gates_photo' => 'sanitize_string',
				'officer_remark_on_entrance_gates_number_and_width' => 'sanitize_string',
				'is_compound_wall_available_id' => 'sanitize_string',
				'is_compound_wall_photo_attached_id' => 'sanitize_string',
				'upload_compound_wall_photo' => 'sanitize_string',
				'officer_remark_on_compound_wall' => 'sanitize_string',
				'is_courtyards_or_open_spaces_as_per_noc_id' => 'sanitize_string',
				'officers_remark_on_courtyards_or_open_spaces' => 'sanitize_string',
				'is_access_for_fire_appliances_on_podium_id' => 'sanitize_string',
				'officer_remark_on_access_for_fire_appliances_on_podium' => 'sanitize_string',
				'escape_staircase_width' => 'sanitize_string',
				'officer_remark_on_escape_staircase_width' => 'sanitize_string',
				'open_type_staircase_width' => 'sanitize_string',
				'is_open_type_photo_attached_id' => 'sanitize_string',
				'upload_open_type_staircase_photo' => 'sanitize_string',
				'officer_remark_staircase_width' => 'sanitize_string',
				'enclosed_type_pressurized_or_natural_staircase_width' => 'sanitize_string',
				'is_enclosed_type_photo_attached_id' => 'sanitize_string',
				'upload_enclosed_type_photo' => 'sanitize_string',
				'officer_remark_on_enclosed_pressurized_or_natural_staircase' => 'sanitize_string',
				'internal_staircase_type_width_location' => 'sanitize_string',
				'is_internal_staircase_type_width_location_id' => 'sanitize_string',
				'upload_internal_staircase_type_photo' => 'sanitize_string',
				'officer_remark_on_internal_staircase_type_width_location' => 'sanitize_string',
				'certified_lift_numbers' => 'sanitize_string',
				'is_certified_lift_photo_attached_id' => 'sanitize_string',
				'upload_certified_lift_photo' => 'sanitize_string',
				'officer_remark_on_certified_lift' => 'sanitize_string',
				'other_lift_numbers' => 'sanitize_string',
				'officer_remark_on_other_lift' => 'sanitize_string',
				'lift_lobby_ventilated_pressurized_or_naturally' => 'sanitize_string',
				'is_lift_lobby_ventilated_photo_attached_id' => 'sanitize_string',
				'upload_lift_lobby_photo' => 'sanitize_string',
				'officer_remark_on_lift_lobby' => 'sanitize_string',
				'type_of_lift_doors' => 'sanitize_string',
				'is_lift_doors_photo_attached_id' => 'sanitize_string',
				'upload_lift_doors_photo' => 'sanitize_string',
				'officer_remark_on_type_of_lift_doors' => 'sanitize_string',
				'location_of_electric_meter' => 'sanitize_string',
				'is_electric_meter_photo_attached_id' => 'sanitize_string',
				'upload_electric_meter_photo' => 'sanitize_string',
				'is_electrical_cable_shaft_sealed' => 'sanitize_string',
				'is_electrical_cable_shaft_sealed_photo_attached_id' => 'sanitize_string',
				'upload_electrical_cable_shaft_photo' => 'sanitize_string',
				'number_of_basements' => 'sanitize_string',
				'officer_remark_on_number_of_basements' => 'sanitize_string',
				'use_of_first_basement' => 'sanitize_string',
				'officer_remark_on_use_of_first_basement' => 'sanitize_string',
				'use_of_second_basement' => 'sanitize_string',
				'officer_remark_on_use_of_second_basement' => 'sanitize_string',
				'use_of_third_basement' => 'sanitize_string',
				'officer_remark_on_use_of_third_basement' => 'sanitize_string',
				'no_of_staircase_or_ramps_for_basement' => 'sanitize_string',
				'officer_remark_on_no_of_staircase_or_ramps_for_basement' => 'sanitize_string',
				'is_basement_staircase_as_per_noc' => 'sanitize_string',
				'is_basement_staircase_as_per_noc_photo_attached_id' => 'sanitize_string',
				'upload_basement_staircase_as_per_noc_photo' => 'sanitize_string',
				'officer_remark_on_basement_staircase_as_per_noc' => 'sanitize_string',
				'type_of_ventilation' => 'sanitize_string',
				'is_ventilation_photo_attached_id' => 'sanitize_string',
				'upload_ventilation_photo' => 'sanitize_string',
				'officer_remark_on_ventilation_type' => 'sanitize_string',
				'compartmentation' => 'sanitize_string',
				'is_compartmentation_photo_attached_id' => 'sanitize_string',
				'upload_compartmentation_photo' => 'sanitize_string',
				'officers_remark_compartmentation' => 'sanitize_string',
				'entrance_and_kitchen_doors' => 'sanitize_string',
				'is_entrance_and_kitchen_doors_photo_attached_id' => 'sanitize_string',
				'upload_entrance_and_kitchen_doors_photo' => 'sanitize_string',
				'officers_remark_on_entrance_and_kitchen_doors' => 'sanitize_string',
				'duplex_flat_entry' => 'sanitize_string',
				'is_duplex_flat_entry_photo_attached_id' => 'sanitize_string',
				'upload_duplex_flat_entry_photo' => 'sanitize_string',
				'officer_remark_on_is_duplex_flat_entry' => 'sanitize_string',
			);
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			$modeldata['user_id'] = USER_ID;
$modeldata['date'] = date_now();
$modeldata['rec_id'] = "0";
			if($this->validated()){
				$db->where("architecture_oc_noc_building_safty_details_second.id", $rec_id);;
				$bool = $db->update($tablename, $modeldata);
				$numRows = $db->getRowCount(); //number of affected rows. 0 = no record field updated
				if($bool && $numRows){
					$this->set_flash_msg("Record updated successfully", "success");
					return $this->redirect("architecture_oc_noc_building_safty_details_second");
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
						return	$this->redirect("architecture_oc_noc_building_safty_details_second");
					}
				}
			}
		}
		$db->where("architecture_oc_noc_building_safty_details_second.id", $rec_id);;
		$data = $db->getOne($tablename, $fields);
		$page_title = $this->view->page_title = "Edit  Architecture Oc Noc Building Safty Details Second";
		if(!$data){
			$this->set_page_error();
		}
		return $this->render_view("architecture_oc_noc_building_safty_details_second/edit.php", $data);
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
		$db->where("architecture_oc_noc_building_safty_details_second.id", $arr_rec_id, "in");
		$bool = $db->delete($tablename);
		if($bool){
			$this->set_flash_msg("Record deleted successfully", "success");
		}
		elseif($db->getLastError()){
			$page_error = $db->getLastError();
			$this->set_flash_msg($page_error, "danger");
		}
		return	$this->redirect("architecture_oc_noc_building_safty_details_second");
	}
}
