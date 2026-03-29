<?php 
/**
 * Architecture_oc_noc_fire_fighting_arrangements_third Page Controller
 * @category  Controller
 */
class Architecture_oc_noc_fire_fighting_arrangements_thirdController extends SecureController{
	function __construct(){
		parent::__construct();
		$this->tablename = "architecture_oc_noc_fire_fighting_arrangements_third";
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
			"ug_water_tank_for_fire_as_per_noc", 
			"is_ug_water_tank_photo_attached_value", 
			"upload_ug_water_tank_photo", 
			"officer_remark_on_ug_water_tank", 
			"overhead_water_storage_as_per_noc", 
			"is_overhead_water_storage_as_per_noc_photo_attached_value", 
			"upload_overhead_water_storage_photo", 
			"officer_remark_on_overhead_water_storage", 
			"wet_riser_or_down_comer", 
			"is_wet_riser_or_down_comer_photo_attached_value", 
			"upload_wet_riser_or_down_comer_photo", 
			"officer_remark_on_wet_riser_or_down_comer", 
			"automatic_sprinklers", 
			"is_automatic_sprinklers_photo_attached_value", 
			"upload_automatic_sprinklers_photo", 
			"officer_remark_on_automatic_sprinklers", 
			"drenchers", 
			"is_drenchers_photo_attached_value", 
			"upload_drenchers_photo", 
			"officers_remark_on_drenchers", 
			"water_spray_projectors", 
			"is_water_spray_projectors_photo_attached_value", 
			"upload_water_spray_projectors_photo", 
			"officer_remark_on_water_spray_projectors", 
			"type_of_fire_pump_and_cerified_capacity", 
			"is_fire_pump_photo_attached_value", 
			"upload_fire_pump_photo", 
			"officer_remark_on_fire_pump_and_capacity", 
			"disel_driven_pump", 
			"is_disel_driven_pump_photo_attached_value", 
			"upload_disel_driven_pump_photo", 
			"officer_remark_on_disel_driven_pump", 
			"booster_pump_and_certified_capacity", 
			"is_booster_pump_and_certified_capacity_photo_attached_value", 
			"upload_booster_pump_and_certified_capacity_photo", 
			"officer_remark_on_booster_pump_and_certified_capacity", 
			"standby_pump_and_certified_capacity", 
			"is_standby_pump_and_certified_capacity_photo_attached_value", 
			"upload_standby_pump_and_certified_capacity_photo", 
			"officer_remark_on_standby_pump_and_certified_capacity", 
			"jockey_pump_and_certified_capacity", 
			"is_jockey_pump_and_certified_capacity_photo_attached_value", 
			"upload_jockey_pump_and_certified_capacity_photo", 
			"officer_remark_on_jockey_pump_and_certified_capacity", 
			"sprinkler_pump_and_certified_capacity", 
			"is_sprinkler_pump_and_certified_capacity_photo_attached_value", 
			"upload_sprinkler_pump_and_certified_capacity_photo", 
			"officer_remark_on_sprinkler_pump_and_certified_capacity", 
			"courtyard_hydrants_numbers", 
			"is_courtyard_hydrants_photo_attached_value", 
			"upload_courtyard_hydrants_photo", 
			"officer_remark_on_courtyard_hydrants_numbers", 
			"first_aid_hose_reel", 
			"is_first_aid_hose_reel_photo_attached_value", 
			"upload_first_aid_hose_reel_photo", 
			"officer_remark_on_first_aid_hose_reel", 
			"fire_alarm_system", 
			"is_fire_alarm_system_photo_attached_value", 
			"upload_fire_alarm_system_photo", 
			"officer_remark_on_fire_alarm_system", 
			"detection_system", 
			"is_detection_system_photo_attached_value", 
			"upload_detection_system_photo", 
			"officer_remark_on_detection_system", 
			"location_of_alarm_panel", 
			"is_location_of_alarm_panel_photo_attached_value", 
			"upload_location_of_alarm_panel_photo", 
			"officer_remark_on_location_of_alarm_panel", 
			"escape_signages", 
			"is_escape_signages_photo_attached_value", 
			"upload_escape_signages_photo", 
			"officer_remark_on_escape_signages", 
			"pa_system", 
			"is_pa_system_photo_attached_value", 
			"upload_pa_system_photo", 
			"officer_remark_on_pa_system", 
			"alternate_source_of_electric_supply_from_separate_sub_station", 
			"is_substation_photo_attached_value", 
			"upload_substation_photo", 
			"officer_remark_on_alternate_source_of_electric_supply_substation", 
			"alternate_source_of_electric_supply_from_separate_dg_set", 
			"is_dg_set_photo_attached_value", 
			"upload_dg_set_photo", 
			"officer_remark_on_is_dg_set", 
			"user_id", 
			"date");
		$pagination = $this->get_pagination(MAX_RECORD_COUNT); // get current pagination e.g array(page_number, page_limit)
		//search table record
		if(!empty($request->search)){
			$text = trim($request->search); 
			$search_condition = "(
				architecture_oc_noc_fire_fighting_arrangements_third.id LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.ug_water_tank_for_fire_as_per_noc LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.is_ug_water_tank_photo_attached_id LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.is_ug_water_tank_photo_attached_value LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.upload_ug_water_tank_photo LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.officer_remark_on_ug_water_tank LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.overhead_water_storage_as_per_noc LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.is_overhead_water_storage_as_per_noc_photo_attached_id LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.is_overhead_water_storage_as_per_noc_photo_attached_value LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.upload_overhead_water_storage_photo LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.officer_remark_on_overhead_water_storage LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.wet_riser_or_down_comer LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.is_wet_riser_or_down_comer_photo_attached_id LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.is_wet_riser_or_down_comer_photo_attached_value LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.upload_wet_riser_or_down_comer_photo LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.officer_remark_on_wet_riser_or_down_comer LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.automatic_sprinklers LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.is_automatic_sprinklers_photo_attached_id LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.is_automatic_sprinklers_photo_attached_value LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.upload_automatic_sprinklers_photo LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.officer_remark_on_automatic_sprinklers LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.drenchers LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.is_drenchers_photo_attached_id LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.is_drenchers_photo_attached_value LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.upload_drenchers_photo LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.officers_remark_on_drenchers LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.water_spray_projectors LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.is_water_spray_projectors_photo_attached_id LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.is_water_spray_projectors_photo_attached_value LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.upload_water_spray_projectors_photo LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.officer_remark_on_water_spray_projectors LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.type_of_fire_pump_and_cerified_capacity LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.is_fire_pump_photo_attached_id LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.is_fire_pump_photo_attached_value LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.upload_fire_pump_photo LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.officer_remark_on_fire_pump_and_capacity LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.disel_driven_pump LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.is_disel_driven_pump_photo_attached_id LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.is_disel_driven_pump_photo_attached_value LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.upload_disel_driven_pump_photo LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.officer_remark_on_disel_driven_pump LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.booster_pump_and_certified_capacity LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.is_booster_pump_and_certified_capacity_photo_attached_id LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.is_booster_pump_and_certified_capacity_photo_attached_value LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.upload_booster_pump_and_certified_capacity_photo LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.officer_remark_on_booster_pump_and_certified_capacity LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.standby_pump_and_certified_capacity LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.is_standby_pump_and_certified_capacity_photo_attached_id LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.is_standby_pump_and_certified_capacity_photo_attached_value LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.upload_standby_pump_and_certified_capacity_photo LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.officer_remark_on_standby_pump_and_certified_capacity LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.jockey_pump_and_certified_capacity LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.is_jockey_pump_and_certified_capacity_photo_attached_id LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.is_jockey_pump_and_certified_capacity_photo_attached_value LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.upload_jockey_pump_and_certified_capacity_photo LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.officer_remark_on_jockey_pump_and_certified_capacity LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.sprinkler_pump_and_certified_capacity LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.is_sprinkler_pump_and_certified_capacity_photo_attached_id LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.is_sprinkler_pump_and_certified_capacity_photo_attached_value LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.upload_sprinkler_pump_and_certified_capacity_photo LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.officer_remark_on_sprinkler_pump_and_certified_capacity LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.courtyard_hydrants_numbers LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.is_courtyard_hydrants_photo_attached_id LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.is_courtyard_hydrants_photo_attached_value LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.upload_courtyard_hydrants_photo LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.officer_remark_on_courtyard_hydrants_numbers LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.first_aid_hose_reel LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.is_first_aid_hose_reel_photo_attached_id LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.is_first_aid_hose_reel_photo_attached_value LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.upload_first_aid_hose_reel_photo LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.officer_remark_on_first_aid_hose_reel LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.fire_alarm_system LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.is_fire_alarm_system_photo_attached_id LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.is_fire_alarm_system_photo_attached_value LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.upload_fire_alarm_system_photo LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.officer_remark_on_fire_alarm_system LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.detection_system LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.is_detection_system_photo_attached_id LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.is_detection_system_photo_attached_value LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.upload_detection_system_photo LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.officer_remark_on_detection_system LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.location_of_alarm_panel LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.is_location_of_alarm_panel_photo_attached_id LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.is_location_of_alarm_panel_photo_attached_value LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.upload_location_of_alarm_panel_photo LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.officer_remark_on_location_of_alarm_panel LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.escape_signages LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.is_escape_signages_photo_attached_id LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.is_escape_signages_photo_attached_value LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.upload_escape_signages_photo LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.officer_remark_on_escape_signages LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.pa_system LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.is_pa_system_photo_attached_id LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.is_pa_system_photo_attached_value LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.upload_pa_system_photo LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.officer_remark_on_pa_system LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.alternate_source_of_electric_supply_from_separate_sub_station LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.is_substation_photo_attached_id LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.is_substation_photo_attached_value LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.upload_substation_photo LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.officer_remark_on_alternate_source_of_electric_supply_substation LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.alternate_source_of_electric_supply_from_separate_dg_set LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.is_dg_set_photo_attached_id LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.is_dg_set_photo_attached_value LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.upload_dg_set_photo LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.officer_remark_on_is_dg_set LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.user_id LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.date LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.rec_id LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.status LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.paid LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.int_no LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.yr LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.zone LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.payment_done LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.certificate_file LIKE ? OR 
				architecture_oc_noc_fire_fighting_arrangements_third.timestamp LIKE ?
			)";
			$search_params = array(
				"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
			);
			//setting search conditions
			$db->where($search_condition, $search_params);
			 //template to use when ajax search
			$this->view->search_template = "architecture_oc_noc_fire_fighting_arrangements_third/search.php";
		}
		if(!empty($request->orderby)){
			$orderby = $request->orderby;
			$ordertype = (!empty($request->ordertype) ? $request->ordertype : ORDER_TYPE);
			$db->orderBy($orderby, $ordertype);
		}
		else{
			$db->orderBy("architecture_oc_noc_fire_fighting_arrangements_third.id", ORDER_TYPE);
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
		$page_title = $this->view->page_title = "Architecture Oc Noc Fire Fighting Arrangements Third";
		$this->render_view("architecture_oc_noc_fire_fighting_arrangements_third/list.php", $data); //render the full page
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
			"ug_water_tank_for_fire_as_per_noc", 
			"is_ug_water_tank_photo_attached_id", 
			"is_ug_water_tank_photo_attached_value", 
			"upload_ug_water_tank_photo", 
			"officer_remark_on_ug_water_tank", 
			"overhead_water_storage_as_per_noc", 
			"is_overhead_water_storage_as_per_noc_photo_attached_id", 
			"is_overhead_water_storage_as_per_noc_photo_attached_value", 
			"upload_overhead_water_storage_photo", 
			"officer_remark_on_overhead_water_storage", 
			"wet_riser_or_down_comer", 
			"is_wet_riser_or_down_comer_photo_attached_id", 
			"is_wet_riser_or_down_comer_photo_attached_value", 
			"upload_wet_riser_or_down_comer_photo", 
			"officer_remark_on_wet_riser_or_down_comer", 
			"automatic_sprinklers", 
			"is_automatic_sprinklers_photo_attached_id", 
			"is_automatic_sprinklers_photo_attached_value", 
			"upload_automatic_sprinklers_photo", 
			"officer_remark_on_automatic_sprinklers", 
			"drenchers", 
			"is_drenchers_photo_attached_id", 
			"is_drenchers_photo_attached_value", 
			"upload_drenchers_photo", 
			"officers_remark_on_drenchers", 
			"water_spray_projectors", 
			"is_water_spray_projectors_photo_attached_id", 
			"is_water_spray_projectors_photo_attached_value", 
			"upload_water_spray_projectors_photo", 
			"officer_remark_on_water_spray_projectors", 
			"type_of_fire_pump_and_cerified_capacity", 
			"is_fire_pump_photo_attached_id", 
			"is_fire_pump_photo_attached_value", 
			"upload_fire_pump_photo", 
			"officer_remark_on_fire_pump_and_capacity", 
			"disel_driven_pump", 
			"is_disel_driven_pump_photo_attached_id", 
			"is_disel_driven_pump_photo_attached_value", 
			"upload_disel_driven_pump_photo", 
			"officer_remark_on_disel_driven_pump", 
			"booster_pump_and_certified_capacity", 
			"is_booster_pump_and_certified_capacity_photo_attached_id", 
			"is_booster_pump_and_certified_capacity_photo_attached_value", 
			"upload_booster_pump_and_certified_capacity_photo", 
			"officer_remark_on_booster_pump_and_certified_capacity", 
			"standby_pump_and_certified_capacity", 
			"is_standby_pump_and_certified_capacity_photo_attached_id", 
			"is_standby_pump_and_certified_capacity_photo_attached_value", 
			"upload_standby_pump_and_certified_capacity_photo", 
			"officer_remark_on_standby_pump_and_certified_capacity", 
			"jockey_pump_and_certified_capacity", 
			"is_jockey_pump_and_certified_capacity_photo_attached_id", 
			"is_jockey_pump_and_certified_capacity_photo_attached_value", 
			"upload_jockey_pump_and_certified_capacity_photo", 
			"officer_remark_on_jockey_pump_and_certified_capacity", 
			"sprinkler_pump_and_certified_capacity", 
			"is_sprinkler_pump_and_certified_capacity_photo_attached_id", 
			"is_sprinkler_pump_and_certified_capacity_photo_attached_value", 
			"upload_sprinkler_pump_and_certified_capacity_photo", 
			"officer_remark_on_sprinkler_pump_and_certified_capacity", 
			"courtyard_hydrants_numbers", 
			"is_courtyard_hydrants_photo_attached_id", 
			"is_courtyard_hydrants_photo_attached_value", 
			"upload_courtyard_hydrants_photo", 
			"officer_remark_on_courtyard_hydrants_numbers", 
			"first_aid_hose_reel", 
			"is_first_aid_hose_reel_photo_attached_id", 
			"is_first_aid_hose_reel_photo_attached_value", 
			"upload_first_aid_hose_reel_photo", 
			"officer_remark_on_first_aid_hose_reel", 
			"fire_alarm_system", 
			"is_fire_alarm_system_photo_attached_id", 
			"is_fire_alarm_system_photo_attached_value", 
			"upload_fire_alarm_system_photo", 
			"officer_remark_on_fire_alarm_system", 
			"detection_system", 
			"is_detection_system_photo_attached_id", 
			"is_detection_system_photo_attached_value", 
			"upload_detection_system_photo", 
			"officer_remark_on_detection_system", 
			"location_of_alarm_panel", 
			"is_location_of_alarm_panel_photo_attached_id", 
			"is_location_of_alarm_panel_photo_attached_value", 
			"upload_location_of_alarm_panel_photo", 
			"officer_remark_on_location_of_alarm_panel", 
			"escape_signages", 
			"is_escape_signages_photo_attached_id", 
			"is_escape_signages_photo_attached_value", 
			"upload_escape_signages_photo", 
			"officer_remark_on_escape_signages", 
			"pa_system", 
			"is_pa_system_photo_attached_id", 
			"is_pa_system_photo_attached_value", 
			"upload_pa_system_photo", 
			"officer_remark_on_pa_system", 
			"alternate_source_of_electric_supply_from_separate_sub_station", 
			"is_substation_photo_attached_id", 
			"is_substation_photo_attached_value", 
			"upload_substation_photo", 
			"officer_remark_on_alternate_source_of_electric_supply_substation", 
			"alternate_source_of_electric_supply_from_separate_dg_set", 
			"is_dg_set_photo_attached_id", 
			"is_dg_set_photo_attached_value", 
			"upload_dg_set_photo", 
			"officer_remark_on_is_dg_set", 
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
			$db->where("architecture_oc_noc_fire_fighting_arrangements_third.id", $rec_id);; //select record based on primary key
		}
		$record = $db->getOne($tablename, $fields );
		if($record){
			$record['date'] = human_date($record['date']);
			$page_title = $this->view->page_title = "View  Architecture Oc Noc Fire Fighting Arrangements Third";
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
		return $this->render_view("architecture_oc_noc_fire_fighting_arrangements_third/view.php", $record);
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
			$fields = $this->fields = array("ug_water_tank_for_fire_as_per_noc","is_ug_water_tank_photo_attached_id","upload_ug_water_tank_photo","overhead_water_storage_as_per_noc","is_overhead_water_storage_as_per_noc_photo_attached_id","upload_overhead_water_storage_photo","wet_riser_or_down_comer","is_wet_riser_or_down_comer_photo_attached_id","upload_wet_riser_or_down_comer_photo","automatic_sprinklers","is_automatic_sprinklers_photo_attached_id","upload_automatic_sprinklers_photo","drenchers","is_drenchers_photo_attached_id","upload_drenchers_photo","water_spray_projectors","is_water_spray_projectors_photo_attached_id","upload_water_spray_projectors_photo","type_of_fire_pump_and_cerified_capacity","is_fire_pump_photo_attached_id","upload_fire_pump_photo","disel_driven_pump","is_disel_driven_pump_photo_attached_id","upload_disel_driven_pump_photo","booster_pump_and_certified_capacity","is_booster_pump_and_certified_capacity_photo_attached_id","upload_booster_pump_and_certified_capacity_photo","standby_pump_and_certified_capacity","is_standby_pump_and_certified_capacity_photo_attached_id","upload_standby_pump_and_certified_capacity_photo","jockey_pump_and_certified_capacity","is_jockey_pump_and_certified_capacity_photo_attached_id","upload_jockey_pump_and_certified_capacity_photo","sprinkler_pump_and_certified_capacity","is_sprinkler_pump_and_certified_capacity_photo_attached_id","upload_sprinkler_pump_and_certified_capacity_photo","courtyard_hydrants_numbers","is_courtyard_hydrants_photo_attached_id","upload_courtyard_hydrants_photo","first_aid_hose_reel","is_first_aid_hose_reel_photo_attached_id","upload_first_aid_hose_reel_photo","fire_alarm_system","is_fire_alarm_system_photo_attached_id","upload_fire_alarm_system_photo","detection_system","is_detection_system_photo_attached_id","upload_detection_system_photo","location_of_alarm_panel","is_location_of_alarm_panel_photo_attached_id","upload_location_of_alarm_panel_photo","escape_signages","is_escape_signages_photo_attached_id","upload_escape_signages_photo","pa_system","is_pa_system_photo_attached_id","upload_pa_system_photo","alternate_source_of_electric_supply_from_separate_sub_station","is_substation_photo_attached_id","upload_substation_photo","alternate_source_of_electric_supply_from_separate_dg_set","is_dg_set_photo_attached_id","upload_dg_set_photo","user_id","date","rec_id");
			$postdata = $this->format_request_data($formdata);
			$this->rules_array = array(
				'ug_water_tank_for_fire_as_per_noc' => 'required',
				'is_ug_water_tank_photo_attached_id' => 'required',
				'upload_ug_water_tank_photo' => 'required',
				'overhead_water_storage_as_per_noc' => 'required',
				'is_overhead_water_storage_as_per_noc_photo_attached_id' => 'required',
				'upload_overhead_water_storage_photo' => 'required',
				'wet_riser_or_down_comer' => 'required',
				'is_wet_riser_or_down_comer_photo_attached_id' => 'required',
				'upload_wet_riser_or_down_comer_photo' => 'required',
				'automatic_sprinklers' => 'required',
				'is_automatic_sprinklers_photo_attached_id' => 'required',
				'upload_automatic_sprinklers_photo' => 'required',
				'drenchers' => 'required',
				'is_drenchers_photo_attached_id' => 'required',
				'upload_drenchers_photo' => 'required',
				'water_spray_projectors' => 'required',
				'is_water_spray_projectors_photo_attached_id' => 'required',
				'upload_water_spray_projectors_photo' => 'required',
				'type_of_fire_pump_and_cerified_capacity' => 'required',
				'is_fire_pump_photo_attached_id' => 'required',
				'upload_fire_pump_photo' => 'required',
				'disel_driven_pump' => 'required',
				'is_disel_driven_pump_photo_attached_id' => 'required',
				'upload_disel_driven_pump_photo' => 'required',
				'booster_pump_and_certified_capacity' => 'required',
				'is_booster_pump_and_certified_capacity_photo_attached_id' => 'required',
				'upload_booster_pump_and_certified_capacity_photo' => 'required',
				'standby_pump_and_certified_capacity' => 'required',
				'is_standby_pump_and_certified_capacity_photo_attached_id' => 'required',
				'upload_standby_pump_and_certified_capacity_photo' => 'required',
				'jockey_pump_and_certified_capacity' => 'required',
				'is_jockey_pump_and_certified_capacity_photo_attached_id' => 'required',
				'upload_jockey_pump_and_certified_capacity_photo' => 'required',
				'sprinkler_pump_and_certified_capacity' => 'required',
				'is_sprinkler_pump_and_certified_capacity_photo_attached_id' => 'required',
				'upload_sprinkler_pump_and_certified_capacity_photo' => 'required',
				'courtyard_hydrants_numbers' => 'required',
				'is_courtyard_hydrants_photo_attached_id' => 'required',
				'upload_courtyard_hydrants_photo' => 'required',
				'first_aid_hose_reel' => 'required',
				'is_first_aid_hose_reel_photo_attached_id' => 'required',
				'upload_first_aid_hose_reel_photo' => 'required',
				'fire_alarm_system' => 'required',
				'is_fire_alarm_system_photo_attached_id' => 'required',
				'upload_fire_alarm_system_photo' => 'required',
				'detection_system' => 'required',
				'is_detection_system_photo_attached_id' => 'required',
				'upload_detection_system_photo' => 'required',
				'location_of_alarm_panel' => 'required',
				'is_location_of_alarm_panel_photo_attached_id' => 'required',
				'upload_location_of_alarm_panel_photo' => 'required',
				'escape_signages' => 'required',
				'is_escape_signages_photo_attached_id' => 'required',
				'upload_escape_signages_photo' => 'required',
				'pa_system' => 'required',
				'is_pa_system_photo_attached_id' => 'required',
				'upload_pa_system_photo' => 'required',
				'alternate_source_of_electric_supply_from_separate_sub_station' => 'required',
				'is_substation_photo_attached_id' => 'required',
				'upload_substation_photo' => 'required',
				'alternate_source_of_electric_supply_from_separate_dg_set' => 'required',
				'is_dg_set_photo_attached_id' => 'required',
				'upload_dg_set_photo' => 'required',
			);
			$this->sanitize_array = array(
				'ug_water_tank_for_fire_as_per_noc' => 'sanitize_string',
				'is_ug_water_tank_photo_attached_id' => 'sanitize_string',
				'upload_ug_water_tank_photo' => 'sanitize_string',
				'overhead_water_storage_as_per_noc' => 'sanitize_string',
				'is_overhead_water_storage_as_per_noc_photo_attached_id' => 'sanitize_string',
				'upload_overhead_water_storage_photo' => 'sanitize_string',
				'wet_riser_or_down_comer' => 'sanitize_string',
				'is_wet_riser_or_down_comer_photo_attached_id' => 'sanitize_string',
				'upload_wet_riser_or_down_comer_photo' => 'sanitize_string',
				'automatic_sprinklers' => 'sanitize_string',
				'is_automatic_sprinklers_photo_attached_id' => 'sanitize_string',
				'upload_automatic_sprinklers_photo' => 'sanitize_string',
				'drenchers' => 'sanitize_string',
				'is_drenchers_photo_attached_id' => 'sanitize_string',
				'upload_drenchers_photo' => 'sanitize_string',
				'water_spray_projectors' => 'sanitize_string',
				'is_water_spray_projectors_photo_attached_id' => 'sanitize_string',
				'upload_water_spray_projectors_photo' => 'sanitize_string',
				'type_of_fire_pump_and_cerified_capacity' => 'sanitize_string',
				'is_fire_pump_photo_attached_id' => 'sanitize_string',
				'upload_fire_pump_photo' => 'sanitize_string',
				'disel_driven_pump' => 'sanitize_string',
				'is_disel_driven_pump_photo_attached_id' => 'sanitize_string',
				'upload_disel_driven_pump_photo' => 'sanitize_string',
				'booster_pump_and_certified_capacity' => 'sanitize_string',
				'is_booster_pump_and_certified_capacity_photo_attached_id' => 'sanitize_string',
				'upload_booster_pump_and_certified_capacity_photo' => 'sanitize_string',
				'standby_pump_and_certified_capacity' => 'sanitize_string',
				'is_standby_pump_and_certified_capacity_photo_attached_id' => 'sanitize_string',
				'upload_standby_pump_and_certified_capacity_photo' => 'sanitize_string',
				'jockey_pump_and_certified_capacity' => 'sanitize_string',
				'is_jockey_pump_and_certified_capacity_photo_attached_id' => 'sanitize_string',
				'upload_jockey_pump_and_certified_capacity_photo' => 'sanitize_string',
				'sprinkler_pump_and_certified_capacity' => 'sanitize_string',
				'is_sprinkler_pump_and_certified_capacity_photo_attached_id' => 'sanitize_string',
				'upload_sprinkler_pump_and_certified_capacity_photo' => 'sanitize_string',
				'courtyard_hydrants_numbers' => 'sanitize_string',
				'is_courtyard_hydrants_photo_attached_id' => 'sanitize_string',
				'upload_courtyard_hydrants_photo' => 'sanitize_string',
				'first_aid_hose_reel' => 'sanitize_string',
				'is_first_aid_hose_reel_photo_attached_id' => 'sanitize_string',
				'upload_first_aid_hose_reel_photo' => 'sanitize_string',
				'fire_alarm_system' => 'sanitize_string',
				'is_fire_alarm_system_photo_attached_id' => 'sanitize_string',
				'upload_fire_alarm_system_photo' => 'sanitize_string',
				'detection_system' => 'sanitize_string',
				'is_detection_system_photo_attached_id' => 'sanitize_string',
				'upload_detection_system_photo' => 'sanitize_string',
				'location_of_alarm_panel' => 'sanitize_string',
				'is_location_of_alarm_panel_photo_attached_id' => 'sanitize_string',
				'upload_location_of_alarm_panel_photo' => 'sanitize_string',
				'escape_signages' => 'sanitize_string',
				'is_escape_signages_photo_attached_id' => 'sanitize_string',
				'upload_escape_signages_photo' => 'sanitize_string',
				'pa_system' => 'sanitize_string',
				'is_pa_system_photo_attached_id' => 'sanitize_string',
				'upload_pa_system_photo' => 'sanitize_string',
				'alternate_source_of_electric_supply_from_separate_sub_station' => 'sanitize_string',
				'is_substation_photo_attached_id' => 'sanitize_string',
				'upload_substation_photo' => 'sanitize_string',
				'alternate_source_of_electric_supply_from_separate_dg_set' => 'sanitize_string',
				'is_dg_set_photo_attached_id' => 'sanitize_string',
				'upload_dg_set_photo' => 'sanitize_string',
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
					return	$this->redirect("architecture_oc_noc_fire_fighting_arrangements_third");
				}
				else{
					$this->set_page_error();
				}
			}
		}
		$page_title = $this->view->page_title = "Add New Architecture Oc Noc Fire Fighting Arrangements Third";
		$this->render_view("architecture_oc_noc_fire_fighting_arrangements_third/add.php");
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
		$fields = $this->fields = array("id","ug_water_tank_for_fire_as_per_noc","is_ug_water_tank_photo_attached_id","upload_ug_water_tank_photo","officer_remark_on_ug_water_tank","overhead_water_storage_as_per_noc","is_overhead_water_storage_as_per_noc_photo_attached_id","upload_overhead_water_storage_photo","officer_remark_on_overhead_water_storage","wet_riser_or_down_comer","is_wet_riser_or_down_comer_photo_attached_id","upload_wet_riser_or_down_comer_photo","officer_remark_on_wet_riser_or_down_comer","automatic_sprinklers","is_automatic_sprinklers_photo_attached_id","upload_automatic_sprinklers_photo","officer_remark_on_automatic_sprinklers","drenchers","is_drenchers_photo_attached_id","upload_drenchers_photo","officers_remark_on_drenchers","water_spray_projectors","is_water_spray_projectors_photo_attached_id","upload_water_spray_projectors_photo","officer_remark_on_water_spray_projectors","type_of_fire_pump_and_cerified_capacity","is_fire_pump_photo_attached_id","upload_fire_pump_photo","officer_remark_on_fire_pump_and_capacity","disel_driven_pump","is_disel_driven_pump_photo_attached_id","upload_disel_driven_pump_photo","officer_remark_on_disel_driven_pump","booster_pump_and_certified_capacity","is_booster_pump_and_certified_capacity_photo_attached_id","upload_booster_pump_and_certified_capacity_photo","officer_remark_on_booster_pump_and_certified_capacity","standby_pump_and_certified_capacity","is_standby_pump_and_certified_capacity_photo_attached_id","upload_standby_pump_and_certified_capacity_photo","officer_remark_on_standby_pump_and_certified_capacity","jockey_pump_and_certified_capacity","is_jockey_pump_and_certified_capacity_photo_attached_id","upload_jockey_pump_and_certified_capacity_photo","officer_remark_on_jockey_pump_and_certified_capacity","sprinkler_pump_and_certified_capacity","is_sprinkler_pump_and_certified_capacity_photo_attached_id","upload_sprinkler_pump_and_certified_capacity_photo","officer_remark_on_sprinkler_pump_and_certified_capacity","courtyard_hydrants_numbers","is_courtyard_hydrants_photo_attached_id","upload_courtyard_hydrants_photo","officer_remark_on_courtyard_hydrants_numbers","first_aid_hose_reel","is_first_aid_hose_reel_photo_attached_id","upload_first_aid_hose_reel_photo","officer_remark_on_first_aid_hose_reel","fire_alarm_system","is_fire_alarm_system_photo_attached_id","upload_fire_alarm_system_photo","officer_remark_on_fire_alarm_system","detection_system","is_detection_system_photo_attached_id","upload_detection_system_photo","officer_remark_on_detection_system","location_of_alarm_panel","is_location_of_alarm_panel_photo_attached_id","upload_location_of_alarm_panel_photo","officer_remark_on_location_of_alarm_panel","escape_signages","is_escape_signages_photo_attached_id","upload_escape_signages_photo","officer_remark_on_escape_signages","pa_system","is_pa_system_photo_attached_id","upload_pa_system_photo","officer_remark_on_pa_system","alternate_source_of_electric_supply_from_separate_sub_station","is_substation_photo_attached_id","upload_substation_photo","officer_remark_on_alternate_source_of_electric_supply_substation","alternate_source_of_electric_supply_from_separate_dg_set","is_dg_set_photo_attached_id","upload_dg_set_photo","officer_remark_on_is_dg_set","user_id","date","rec_id");
		if($formdata){
			$postdata = $this->format_request_data($formdata);
			$this->rules_array = array(
				'ug_water_tank_for_fire_as_per_noc' => 'required',
				'is_ug_water_tank_photo_attached_id' => 'required',
				'upload_ug_water_tank_photo' => 'required',
				'officer_remark_on_ug_water_tank' => 'required',
				'overhead_water_storage_as_per_noc' => 'required',
				'is_overhead_water_storage_as_per_noc_photo_attached_id' => 'required',
				'upload_overhead_water_storage_photo' => 'required',
				'officer_remark_on_overhead_water_storage' => 'required',
				'wet_riser_or_down_comer' => 'required',
				'is_wet_riser_or_down_comer_photo_attached_id' => 'required',
				'upload_wet_riser_or_down_comer_photo' => 'required',
				'officer_remark_on_wet_riser_or_down_comer' => 'required',
				'automatic_sprinklers' => 'required',
				'is_automatic_sprinklers_photo_attached_id' => 'required',
				'upload_automatic_sprinklers_photo' => 'required',
				'officer_remark_on_automatic_sprinklers' => 'required',
				'drenchers' => 'required',
				'is_drenchers_photo_attached_id' => 'required',
				'upload_drenchers_photo' => 'required',
				'officers_remark_on_drenchers' => 'required',
				'water_spray_projectors' => 'required',
				'is_water_spray_projectors_photo_attached_id' => 'required',
				'upload_water_spray_projectors_photo' => 'required',
				'officer_remark_on_water_spray_projectors' => 'required',
				'type_of_fire_pump_and_cerified_capacity' => 'required',
				'is_fire_pump_photo_attached_id' => 'required',
				'upload_fire_pump_photo' => 'required',
				'officer_remark_on_fire_pump_and_capacity' => 'required',
				'disel_driven_pump' => 'required',
				'is_disel_driven_pump_photo_attached_id' => 'required',
				'upload_disel_driven_pump_photo' => 'required',
				'officer_remark_on_disel_driven_pump' => 'required',
				'booster_pump_and_certified_capacity' => 'required',
				'is_booster_pump_and_certified_capacity_photo_attached_id' => 'required',
				'upload_booster_pump_and_certified_capacity_photo' => 'required',
				'officer_remark_on_booster_pump_and_certified_capacity' => 'required',
				'standby_pump_and_certified_capacity' => 'required',
				'is_standby_pump_and_certified_capacity_photo_attached_id' => 'required',
				'upload_standby_pump_and_certified_capacity_photo' => 'required',
				'officer_remark_on_standby_pump_and_certified_capacity' => 'required',
				'jockey_pump_and_certified_capacity' => 'required',
				'is_jockey_pump_and_certified_capacity_photo_attached_id' => 'required',
				'upload_jockey_pump_and_certified_capacity_photo' => 'required',
				'officer_remark_on_jockey_pump_and_certified_capacity' => 'required',
				'sprinkler_pump_and_certified_capacity' => 'required',
				'is_sprinkler_pump_and_certified_capacity_photo_attached_id' => 'required',
				'upload_sprinkler_pump_and_certified_capacity_photo' => 'required',
				'officer_remark_on_sprinkler_pump_and_certified_capacity' => 'required',
				'courtyard_hydrants_numbers' => 'required',
				'is_courtyard_hydrants_photo_attached_id' => 'required',
				'upload_courtyard_hydrants_photo' => 'required',
				'officer_remark_on_courtyard_hydrants_numbers' => 'required',
				'first_aid_hose_reel' => 'required',
				'is_first_aid_hose_reel_photo_attached_id' => 'required',
				'upload_first_aid_hose_reel_photo' => 'required',
				'officer_remark_on_first_aid_hose_reel' => 'required',
				'fire_alarm_system' => 'required',
				'is_fire_alarm_system_photo_attached_id' => 'required',
				'upload_fire_alarm_system_photo' => 'required',
				'officer_remark_on_fire_alarm_system' => 'required',
				'detection_system' => 'required',
				'is_detection_system_photo_attached_id' => 'required',
				'upload_detection_system_photo' => 'required',
				'officer_remark_on_detection_system' => 'required',
				'location_of_alarm_panel' => 'required',
				'is_location_of_alarm_panel_photo_attached_id' => 'required',
				'upload_location_of_alarm_panel_photo' => 'required',
				'officer_remark_on_location_of_alarm_panel' => 'required',
				'escape_signages' => 'required',
				'is_escape_signages_photo_attached_id' => 'required',
				'upload_escape_signages_photo' => 'required',
				'officer_remark_on_escape_signages' => 'required',
				'pa_system' => 'required',
				'is_pa_system_photo_attached_id' => 'required',
				'upload_pa_system_photo' => 'required',
				'officer_remark_on_pa_system' => 'required',
				'alternate_source_of_electric_supply_from_separate_sub_station' => 'required',
				'is_substation_photo_attached_id' => 'required',
				'upload_substation_photo' => 'required',
				'officer_remark_on_alternate_source_of_electric_supply_substation' => 'required',
				'alternate_source_of_electric_supply_from_separate_dg_set' => 'required',
				'is_dg_set_photo_attached_id' => 'required',
				'upload_dg_set_photo' => 'required',
				'officer_remark_on_is_dg_set' => 'required',
			);
			$this->sanitize_array = array(
				'ug_water_tank_for_fire_as_per_noc' => 'sanitize_string',
				'is_ug_water_tank_photo_attached_id' => 'sanitize_string',
				'upload_ug_water_tank_photo' => 'sanitize_string',
				'officer_remark_on_ug_water_tank' => 'sanitize_string',
				'overhead_water_storage_as_per_noc' => 'sanitize_string',
				'is_overhead_water_storage_as_per_noc_photo_attached_id' => 'sanitize_string',
				'upload_overhead_water_storage_photo' => 'sanitize_string',
				'officer_remark_on_overhead_water_storage' => 'sanitize_string',
				'wet_riser_or_down_comer' => 'sanitize_string',
				'is_wet_riser_or_down_comer_photo_attached_id' => 'sanitize_string',
				'upload_wet_riser_or_down_comer_photo' => 'sanitize_string',
				'officer_remark_on_wet_riser_or_down_comer' => 'sanitize_string',
				'automatic_sprinklers' => 'sanitize_string',
				'is_automatic_sprinklers_photo_attached_id' => 'sanitize_string',
				'upload_automatic_sprinklers_photo' => 'sanitize_string',
				'officer_remark_on_automatic_sprinklers' => 'sanitize_string',
				'drenchers' => 'sanitize_string',
				'is_drenchers_photo_attached_id' => 'sanitize_string',
				'upload_drenchers_photo' => 'sanitize_string',
				'officers_remark_on_drenchers' => 'sanitize_string',
				'water_spray_projectors' => 'sanitize_string',
				'is_water_spray_projectors_photo_attached_id' => 'sanitize_string',
				'upload_water_spray_projectors_photo' => 'sanitize_string',
				'officer_remark_on_water_spray_projectors' => 'sanitize_string',
				'type_of_fire_pump_and_cerified_capacity' => 'sanitize_string',
				'is_fire_pump_photo_attached_id' => 'sanitize_string',
				'upload_fire_pump_photo' => 'sanitize_string',
				'officer_remark_on_fire_pump_and_capacity' => 'sanitize_string',
				'disel_driven_pump' => 'sanitize_string',
				'is_disel_driven_pump_photo_attached_id' => 'sanitize_string',
				'upload_disel_driven_pump_photo' => 'sanitize_string',
				'officer_remark_on_disel_driven_pump' => 'sanitize_string',
				'booster_pump_and_certified_capacity' => 'sanitize_string',
				'is_booster_pump_and_certified_capacity_photo_attached_id' => 'sanitize_string',
				'upload_booster_pump_and_certified_capacity_photo' => 'sanitize_string',
				'officer_remark_on_booster_pump_and_certified_capacity' => 'sanitize_string',
				'standby_pump_and_certified_capacity' => 'sanitize_string',
				'is_standby_pump_and_certified_capacity_photo_attached_id' => 'sanitize_string',
				'upload_standby_pump_and_certified_capacity_photo' => 'sanitize_string',
				'officer_remark_on_standby_pump_and_certified_capacity' => 'sanitize_string',
				'jockey_pump_and_certified_capacity' => 'sanitize_string',
				'is_jockey_pump_and_certified_capacity_photo_attached_id' => 'sanitize_string',
				'upload_jockey_pump_and_certified_capacity_photo' => 'sanitize_string',
				'officer_remark_on_jockey_pump_and_certified_capacity' => 'sanitize_string',
				'sprinkler_pump_and_certified_capacity' => 'sanitize_string',
				'is_sprinkler_pump_and_certified_capacity_photo_attached_id' => 'sanitize_string',
				'upload_sprinkler_pump_and_certified_capacity_photo' => 'sanitize_string',
				'officer_remark_on_sprinkler_pump_and_certified_capacity' => 'sanitize_string',
				'courtyard_hydrants_numbers' => 'sanitize_string',
				'is_courtyard_hydrants_photo_attached_id' => 'sanitize_string',
				'upload_courtyard_hydrants_photo' => 'sanitize_string',
				'officer_remark_on_courtyard_hydrants_numbers' => 'sanitize_string',
				'first_aid_hose_reel' => 'sanitize_string',
				'is_first_aid_hose_reel_photo_attached_id' => 'sanitize_string',
				'upload_first_aid_hose_reel_photo' => 'sanitize_string',
				'officer_remark_on_first_aid_hose_reel' => 'sanitize_string',
				'fire_alarm_system' => 'sanitize_string',
				'is_fire_alarm_system_photo_attached_id' => 'sanitize_string',
				'upload_fire_alarm_system_photo' => 'sanitize_string',
				'officer_remark_on_fire_alarm_system' => 'sanitize_string',
				'detection_system' => 'sanitize_string',
				'is_detection_system_photo_attached_id' => 'sanitize_string',
				'upload_detection_system_photo' => 'sanitize_string',
				'officer_remark_on_detection_system' => 'sanitize_string',
				'location_of_alarm_panel' => 'sanitize_string',
				'is_location_of_alarm_panel_photo_attached_id' => 'sanitize_string',
				'upload_location_of_alarm_panel_photo' => 'sanitize_string',
				'officer_remark_on_location_of_alarm_panel' => 'sanitize_string',
				'escape_signages' => 'sanitize_string',
				'is_escape_signages_photo_attached_id' => 'sanitize_string',
				'upload_escape_signages_photo' => 'sanitize_string',
				'officer_remark_on_escape_signages' => 'sanitize_string',
				'pa_system' => 'sanitize_string',
				'is_pa_system_photo_attached_id' => 'sanitize_string',
				'upload_pa_system_photo' => 'sanitize_string',
				'officer_remark_on_pa_system' => 'sanitize_string',
				'alternate_source_of_electric_supply_from_separate_sub_station' => 'sanitize_string',
				'is_substation_photo_attached_id' => 'sanitize_string',
				'upload_substation_photo' => 'sanitize_string',
				'officer_remark_on_alternate_source_of_electric_supply_substation' => 'sanitize_string',
				'alternate_source_of_electric_supply_from_separate_dg_set' => 'sanitize_string',
				'is_dg_set_photo_attached_id' => 'sanitize_string',
				'upload_dg_set_photo' => 'sanitize_string',
				'officer_remark_on_is_dg_set' => 'sanitize_string',
			);
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			$modeldata['user_id'] = USER_ID;
$modeldata['date'] = date_now();
$modeldata['rec_id'] = "0";
			if($this->validated()){
				$db->where("architecture_oc_noc_fire_fighting_arrangements_third.id", $rec_id);;
				$bool = $db->update($tablename, $modeldata);
				$numRows = $db->getRowCount(); //number of affected rows. 0 = no record field updated
				if($bool && $numRows){
					$this->set_flash_msg("Record updated successfully", "success");
					return $this->redirect("architecture_oc_noc_fire_fighting_arrangements_third");
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
						return	$this->redirect("architecture_oc_noc_fire_fighting_arrangements_third");
					}
				}
			}
		}
		$db->where("architecture_oc_noc_fire_fighting_arrangements_third.id", $rec_id);;
		$data = $db->getOne($tablename, $fields);
		$page_title = $this->view->page_title = "Edit  Architecture Oc Noc Fire Fighting Arrangements Third";
		if(!$data){
			$this->set_page_error();
		}
		return $this->render_view("architecture_oc_noc_fire_fighting_arrangements_third/edit.php", $data);
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
		$db->where("architecture_oc_noc_fire_fighting_arrangements_third.id", $arr_rec_id, "in");
		$bool = $db->delete($tablename);
		if($bool){
			$this->set_flash_msg("Record deleted successfully", "success");
		}
		elseif($db->getLastError()){
			$page_error = $db->getLastError();
			$this->set_flash_msg($page_error, "danger");
		}
		return	$this->redirect("architecture_oc_noc_fire_fighting_arrangements_third");
	}
}
