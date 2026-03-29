<?php 
/**
 * Architecture_oc_noc_refuge_and_other_details_fourth Page Controller
 * @category  Controller
 */
class Architecture_oc_noc_refuge_and_other_details_fourthController extends SecureController{
	function __construct(){
		parent::__construct();
		$this->tablename = "architecture_oc_noc_refuge_and_other_details_fourth";
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
			"refuge_area_or_floor_details", 
			"is_refuge_area_or_floor_photo_attached_id", 
			"is_refuge_area_or_floor_photo_attached_value", 
			"upload_refuge_area_or_floor_photo", 
			"officer_remark_on_refuge_area_or_floor", 
			"terrace_door", 
			"is_terrace_door_photo_attached_id", 
			"is_terrace_door_photo_attached_value", 
			"upload_errace_door_photo", 
			"officer_remark_on_errace_door", 
			"fire_check_floor", 
			"is_fire_check_floor_photo_attached_id", 
			"is_fire_check_floor_photo_attached_value", 
			"upload_is_fire_check_floor_photo", 
			"officer_remark_on_fire_check_floor", 
			"portable_fire_extinguishers", 
			"is_portable_fire_extinguishers_photo_attached_id", 
			"is_portable_fire_extinguishers_photo_attached_value", 
			"upload_portable_fire_extinguishers_photo", 
			"officer_remark_on_portable_fire_extinguishers", 
			"sand_buckets", 
			"is_sand_buckets_photo_attached_id", 
			"is_sand_buckets_photo_attached_value", 
			"upload_sand_buckets_photo", 
			"officer_remark_on_sand_buckets", 
			"fire_escape_chute", 
			"is_fire_escape_chute_photo_attached_id", 
			"is_fire_escape_chute_photo_attached_value", 
			"upload_escape_chute_photo", 
			"officer_remark_on_fire_escape_chute", 
			"external_evaculation_system", 
			"is_external_evaculation_system_photo_attached_id", 
			"is_external_evaculation_system_photo_attached_value", 
			"upload_external_evaculation_system_photo", 
			"officer_remark_on_external_evaculation_system", 
			"lowering_device", 
			"is_lowering_device_photo_attached_id", 
			"is_lowering_device_photo_attached_value", 
			"upload_lowering_device_photo", 
			"officer_remark_on_lowering_device", 
			"fire_brigade_inlet", 
			"is_fire_brigade_inlet_photo_attached_id", 
			"is_fire_brigade_inlet_photo_attached_value", 
			"upload_fire_brigade_inlet_photo", 
			"officer_remark_on_fire_brigade_inlet", 
			"glass_facade_compliance", 
			"is_glass_facade_compliance_photo_attached_id", 
			"is_glass_facade_compliance_photo_attached_value", 
			"upload_glass_facade_compliance_photo", 
			"officer_remark_on_glass_facade_compliance", 
			"car_parking_tower", 
			"is_car_parking_tower_photo_attached_id", 
			"is_car_parking_tower_photo_attached_value", 
			"upload_car_parking_tower_photo", 
			"officer_remark_on_car_parking_tower", 
			"location_of_electric_sub_station", 
			"is_location_of_electric_sub_station_photo_attached_id", 
			"is_location_of_electric_sub_station_photo_attached_value", 
			"upload_location_of_electric_sub_station_photo", 
			"officer_remark_on_location_of_electric_sub_station", 
			"location_of_dg_set", 
			"is_location_of_dg_set_photo_attached_id", 
			"is_location_of_dg_set_photo_attached_value", 
			"upload_location_of_dg_set_photo", 
			"officer_remark_on_location_of_dg_set", 
			"other_remarks", 
			"is_any_other_photo_attached_id", 
			"is_any_other_photo_attached_value", 
			"upload_other_photos", 
			"officer_remark_other", 
			"user_id", 
			"date", 
			"rec_id", 
			"status", 
			"paid", 
			"payment_done", 
			"certificate_file", 
			"timestamp");
		$pagination = $this->get_pagination(MAX_RECORD_COUNT); // get current pagination e.g array(page_number, page_limit)
		//search table record
		if(!empty($request->search)){
			$text = trim($request->search); 
			$search_condition = "(
				architecture_oc_noc_refuge_and_other_details_fourth.id LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.refuge_area_or_floor_details LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.is_refuge_area_or_floor_photo_attached_id LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.is_refuge_area_or_floor_photo_attached_value LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.upload_refuge_area_or_floor_photo LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.officer_remark_on_refuge_area_or_floor LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.terrace_door LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.is_terrace_door_photo_attached_id LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.is_terrace_door_photo_attached_value LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.upload_errace_door_photo LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.officer_remark_on_errace_door LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.fire_check_floor LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.is_fire_check_floor_photo_attached_id LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.is_fire_check_floor_photo_attached_value LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.upload_is_fire_check_floor_photo LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.officer_remark_on_fire_check_floor LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.portable_fire_extinguishers LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.is_portable_fire_extinguishers_photo_attached_id LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.is_portable_fire_extinguishers_photo_attached_value LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.upload_portable_fire_extinguishers_photo LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.officer_remark_on_portable_fire_extinguishers LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.sand_buckets LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.is_sand_buckets_photo_attached_id LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.is_sand_buckets_photo_attached_value LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.upload_sand_buckets_photo LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.officer_remark_on_sand_buckets LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.fire_escape_chute LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.is_fire_escape_chute_photo_attached_id LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.is_fire_escape_chute_photo_attached_value LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.upload_escape_chute_photo LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.officer_remark_on_fire_escape_chute LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.external_evaculation_system LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.is_external_evaculation_system_photo_attached_id LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.is_external_evaculation_system_photo_attached_value LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.upload_external_evaculation_system_photo LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.officer_remark_on_external_evaculation_system LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.lowering_device LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.is_lowering_device_photo_attached_id LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.is_lowering_device_photo_attached_value LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.upload_lowering_device_photo LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.officer_remark_on_lowering_device LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.fire_brigade_inlet LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.is_fire_brigade_inlet_photo_attached_id LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.is_fire_brigade_inlet_photo_attached_value LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.upload_fire_brigade_inlet_photo LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.officer_remark_on_fire_brigade_inlet LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.glass_facade_compliance LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.is_glass_facade_compliance_photo_attached_id LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.is_glass_facade_compliance_photo_attached_value LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.upload_glass_facade_compliance_photo LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.officer_remark_on_glass_facade_compliance LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.car_parking_tower LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.is_car_parking_tower_photo_attached_id LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.is_car_parking_tower_photo_attached_value LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.upload_car_parking_tower_photo LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.officer_remark_on_car_parking_tower LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.location_of_electric_sub_station LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.is_location_of_electric_sub_station_photo_attached_id LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.is_location_of_electric_sub_station_photo_attached_value LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.upload_location_of_electric_sub_station_photo LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.officer_remark_on_location_of_electric_sub_station LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.location_of_dg_set LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.is_location_of_dg_set_photo_attached_id LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.is_location_of_dg_set_photo_attached_value LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.upload_location_of_dg_set_photo LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.officer_remark_on_location_of_dg_set LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.other_remarks LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.is_any_other_photo_attached_id LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.is_any_other_photo_attached_value LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.upload_other_photos LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.officer_remark_other LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.user_id LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.date LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.rec_id LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.status LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.paid LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.int_no LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.yr LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.zone LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.payment_done LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.certificate_file LIKE ? OR 
				architecture_oc_noc_refuge_and_other_details_fourth.timestamp LIKE ?
			)";
			$search_params = array(
				"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
			);
			//setting search conditions
			$db->where($search_condition, $search_params);
			 //template to use when ajax search
			$this->view->search_template = "architecture_oc_noc_refuge_and_other_details_fourth/search.php";
		}
		if(!empty($request->orderby)){
			$orderby = $request->orderby;
			$ordertype = (!empty($request->ordertype) ? $request->ordertype : ORDER_TYPE);
			$db->orderBy($orderby, $ordertype);
		}
		else{
			$db->orderBy("architecture_oc_noc_refuge_and_other_details_fourth.id", ORDER_TYPE);
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
		$page_title = $this->view->page_title = "Architecture Oc Noc Refuge And Other Details Fourth";
		$this->render_view("architecture_oc_noc_refuge_and_other_details_fourth/list.php", $data); //render the full page
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
			"refuge_area_or_floor_details", 
			"is_refuge_area_or_floor_photo_attached_id", 
			"is_refuge_area_or_floor_photo_attached_value", 
			"upload_refuge_area_or_floor_photo", 
			"officer_remark_on_refuge_area_or_floor", 
			"terrace_door", 
			"is_terrace_door_photo_attached_id", 
			"is_terrace_door_photo_attached_value", 
			"upload_errace_door_photo", 
			"officer_remark_on_errace_door", 
			"fire_check_floor", 
			"is_fire_check_floor_photo_attached_id", 
			"is_fire_check_floor_photo_attached_value", 
			"upload_is_fire_check_floor_photo", 
			"officer_remark_on_fire_check_floor", 
			"portable_fire_extinguishers", 
			"is_portable_fire_extinguishers_photo_attached_id", 
			"is_portable_fire_extinguishers_photo_attached_value", 
			"upload_portable_fire_extinguishers_photo", 
			"officer_remark_on_portable_fire_extinguishers", 
			"sand_buckets", 
			"is_sand_buckets_photo_attached_id", 
			"is_sand_buckets_photo_attached_value", 
			"upload_sand_buckets_photo", 
			"officer_remark_on_sand_buckets", 
			"fire_escape_chute", 
			"is_fire_escape_chute_photo_attached_id", 
			"is_fire_escape_chute_photo_attached_value", 
			"upload_escape_chute_photo", 
			"officer_remark_on_fire_escape_chute", 
			"external_evaculation_system", 
			"is_external_evaculation_system_photo_attached_id", 
			"is_external_evaculation_system_photo_attached_value", 
			"upload_external_evaculation_system_photo", 
			"officer_remark_on_external_evaculation_system", 
			"lowering_device", 
			"is_lowering_device_photo_attached_id", 
			"is_lowering_device_photo_attached_value", 
			"upload_lowering_device_photo", 
			"officer_remark_on_lowering_device", 
			"fire_brigade_inlet", 
			"is_fire_brigade_inlet_photo_attached_id", 
			"is_fire_brigade_inlet_photo_attached_value", 
			"upload_fire_brigade_inlet_photo", 
			"officer_remark_on_fire_brigade_inlet", 
			"glass_facade_compliance", 
			"is_glass_facade_compliance_photo_attached_id", 
			"is_glass_facade_compliance_photo_attached_value", 
			"upload_glass_facade_compliance_photo", 
			"officer_remark_on_glass_facade_compliance", 
			"car_parking_tower", 
			"is_car_parking_tower_photo_attached_id", 
			"is_car_parking_tower_photo_attached_value", 
			"upload_car_parking_tower_photo", 
			"officer_remark_on_car_parking_tower", 
			"location_of_electric_sub_station", 
			"is_location_of_electric_sub_station_photo_attached_id", 
			"is_location_of_electric_sub_station_photo_attached_value", 
			"upload_location_of_electric_sub_station_photo", 
			"officer_remark_on_location_of_electric_sub_station", 
			"location_of_dg_set", 
			"is_location_of_dg_set_photo_attached_id", 
			"is_location_of_dg_set_photo_attached_value", 
			"upload_location_of_dg_set_photo", 
			"officer_remark_on_location_of_dg_set", 
			"other_remarks", 
			"is_any_other_photo_attached_id", 
			"is_any_other_photo_attached_value", 
			"upload_other_photos", 
			"officer_remark_other", 
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
			$db->where("architecture_oc_noc_refuge_and_other_details_fourth.id", $rec_id);; //select record based on primary key
		}
		$record = $db->getOne($tablename, $fields );
		if($record){
			$page_title = $this->view->page_title = "View  Architecture Oc Noc Refuge And Other Details Fourth";
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
		return $this->render_view("architecture_oc_noc_refuge_and_other_details_fourth/view.php", $record);
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
			$fields = $this->fields = array("refuge_area_or_floor_details","is_refuge_area_or_floor_photo_attached_id","upload_refuge_area_or_floor_photo","terrace_door","is_terrace_door_photo_attached_id","upload_errace_door_photo","fire_check_floor","is_fire_check_floor_photo_attached_id","upload_is_fire_check_floor_photo","portable_fire_extinguishers","is_portable_fire_extinguishers_photo_attached_id","upload_portable_fire_extinguishers_photo","sand_buckets","is_sand_buckets_photo_attached_id","upload_sand_buckets_photo","fire_escape_chute","is_fire_escape_chute_photo_attached_id","upload_escape_chute_photo","external_evaculation_system","is_external_evaculation_system_photo_attached_id","upload_external_evaculation_system_photo","lowering_device","is_lowering_device_photo_attached_id","upload_lowering_device_photo","fire_brigade_inlet","is_fire_brigade_inlet_photo_attached_id","upload_fire_brigade_inlet_photo","glass_facade_compliance","is_glass_facade_compliance_photo_attached_id","upload_glass_facade_compliance_photo","car_parking_tower","is_car_parking_tower_photo_attached_id","upload_car_parking_tower_photo","location_of_electric_sub_station","is_location_of_electric_sub_station_photo_attached_id","upload_location_of_electric_sub_station_photo","location_of_dg_set","is_location_of_dg_set_photo_attached_id","upload_location_of_dg_set_photo","other_remarks","is_any_other_photo_attached_id","upload_other_photos","user_id","date","rec_id");
			$postdata = $this->format_request_data($formdata);
			$this->rules_array = array(
				'refuge_area_or_floor_details' => 'required',
				'is_refuge_area_or_floor_photo_attached_id' => 'required',
				'upload_refuge_area_or_floor_photo' => 'required',
				'terrace_door' => 'required',
				'is_terrace_door_photo_attached_id' => 'required',
				'upload_errace_door_photo' => 'required',
				'fire_check_floor' => 'required',
				'is_fire_check_floor_photo_attached_id' => 'required',
				'upload_is_fire_check_floor_photo' => 'required',
				'portable_fire_extinguishers' => 'required',
				'is_portable_fire_extinguishers_photo_attached_id' => 'required',
				'upload_portable_fire_extinguishers_photo' => 'required',
				'sand_buckets' => 'required',
				'is_sand_buckets_photo_attached_id' => 'required',
				'upload_sand_buckets_photo' => 'required',
				'fire_escape_chute' => 'required',
				'is_fire_escape_chute_photo_attached_id' => 'required',
				'upload_escape_chute_photo' => 'required',
				'external_evaculation_system' => 'required',
				'is_external_evaculation_system_photo_attached_id' => 'required',
				'upload_external_evaculation_system_photo' => 'required',
				'lowering_device' => 'required',
				'is_lowering_device_photo_attached_id' => 'required',
				'upload_lowering_device_photo' => 'required',
				'fire_brigade_inlet' => 'required',
				'is_fire_brigade_inlet_photo_attached_id' => 'required',
				'upload_fire_brigade_inlet_photo' => 'required',
				'glass_facade_compliance' => 'required',
				'is_glass_facade_compliance_photo_attached_id' => 'required',
				'upload_glass_facade_compliance_photo' => 'required',
				'car_parking_tower' => 'required',
				'is_car_parking_tower_photo_attached_id' => 'required',
				'upload_car_parking_tower_photo' => 'required',
				'location_of_electric_sub_station' => 'required',
				'is_location_of_electric_sub_station_photo_attached_id' => 'required',
				'upload_location_of_electric_sub_station_photo' => 'required',
				'location_of_dg_set' => 'required',
				'is_location_of_dg_set_photo_attached_id' => 'required',
				'upload_location_of_dg_set_photo' => 'required',
				'other_remarks' => 'required|numeric',
				'is_any_other_photo_attached_id' => 'required',
				'upload_other_photos' => 'required',
			);
			$this->sanitize_array = array(
				'refuge_area_or_floor_details' => 'sanitize_string',
				'is_refuge_area_or_floor_photo_attached_id' => 'sanitize_string',
				'upload_refuge_area_or_floor_photo' => 'sanitize_string',
				'terrace_door' => 'sanitize_string',
				'is_terrace_door_photo_attached_id' => 'sanitize_string',
				'upload_errace_door_photo' => 'sanitize_string',
				'fire_check_floor' => 'sanitize_string',
				'is_fire_check_floor_photo_attached_id' => 'sanitize_string',
				'upload_is_fire_check_floor_photo' => 'sanitize_string',
				'portable_fire_extinguishers' => 'sanitize_string',
				'is_portable_fire_extinguishers_photo_attached_id' => 'sanitize_string',
				'upload_portable_fire_extinguishers_photo' => 'sanitize_string',
				'sand_buckets' => 'sanitize_string',
				'is_sand_buckets_photo_attached_id' => 'sanitize_string',
				'upload_sand_buckets_photo' => 'sanitize_string',
				'fire_escape_chute' => 'sanitize_string',
				'is_fire_escape_chute_photo_attached_id' => 'sanitize_string',
				'upload_escape_chute_photo' => 'sanitize_string',
				'external_evaculation_system' => 'sanitize_string',
				'is_external_evaculation_system_photo_attached_id' => 'sanitize_string',
				'upload_external_evaculation_system_photo' => 'sanitize_string',
				'lowering_device' => 'sanitize_string',
				'is_lowering_device_photo_attached_id' => 'sanitize_string',
				'upload_lowering_device_photo' => 'sanitize_string',
				'fire_brigade_inlet' => 'sanitize_string',
				'is_fire_brigade_inlet_photo_attached_id' => 'sanitize_string',
				'upload_fire_brigade_inlet_photo' => 'sanitize_string',
				'glass_facade_compliance' => 'sanitize_string',
				'is_glass_facade_compliance_photo_attached_id' => 'sanitize_string',
				'upload_glass_facade_compliance_photo' => 'sanitize_string',
				'car_parking_tower' => 'sanitize_string',
				'is_car_parking_tower_photo_attached_id' => 'sanitize_string',
				'upload_car_parking_tower_photo' => 'sanitize_string',
				'location_of_electric_sub_station' => 'sanitize_string',
				'is_location_of_electric_sub_station_photo_attached_id' => 'sanitize_string',
				'upload_location_of_electric_sub_station_photo' => 'sanitize_string',
				'location_of_dg_set' => 'sanitize_string',
				'is_location_of_dg_set_photo_attached_id' => 'sanitize_string',
				'upload_location_of_dg_set_photo' => 'sanitize_string',
				'other_remarks' => 'sanitize_string',
				'is_any_other_photo_attached_id' => 'sanitize_string',
				'upload_other_photos' => 'sanitize_string',
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
					return	$this->redirect("architecture_oc_noc_refuge_and_other_details_fourth");
				}
				else{
					$this->set_page_error();
				}
			}
		}
		$page_title = $this->view->page_title = "Add New Architecture Oc Noc Refuge And Other Details Fourth";
		$this->render_view("architecture_oc_noc_refuge_and_other_details_fourth/add.php");
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
		$fields = $this->fields = array("id","refuge_area_or_floor_details","is_refuge_area_or_floor_photo_attached_id","upload_refuge_area_or_floor_photo","officer_remark_on_refuge_area_or_floor","terrace_door","is_terrace_door_photo_attached_id","upload_errace_door_photo","officer_remark_on_errace_door","fire_check_floor","is_fire_check_floor_photo_attached_id","upload_is_fire_check_floor_photo","officer_remark_on_fire_check_floor","portable_fire_extinguishers","is_portable_fire_extinguishers_photo_attached_id","upload_portable_fire_extinguishers_photo","officer_remark_on_portable_fire_extinguishers","sand_buckets","is_sand_buckets_photo_attached_id","upload_sand_buckets_photo","officer_remark_on_sand_buckets","fire_escape_chute","is_fire_escape_chute_photo_attached_id","upload_escape_chute_photo","officer_remark_on_fire_escape_chute","external_evaculation_system","is_external_evaculation_system_photo_attached_id","upload_external_evaculation_system_photo","officer_remark_on_external_evaculation_system","lowering_device","is_lowering_device_photo_attached_id","upload_lowering_device_photo","officer_remark_on_lowering_device","fire_brigade_inlet","is_fire_brigade_inlet_photo_attached_id","upload_fire_brigade_inlet_photo","officer_remark_on_fire_brigade_inlet","glass_facade_compliance","is_glass_facade_compliance_photo_attached_id","upload_glass_facade_compliance_photo","officer_remark_on_glass_facade_compliance","car_parking_tower","is_car_parking_tower_photo_attached_id","upload_car_parking_tower_photo","officer_remark_on_car_parking_tower","location_of_electric_sub_station","is_location_of_electric_sub_station_photo_attached_id","upload_location_of_electric_sub_station_photo","officer_remark_on_location_of_electric_sub_station","location_of_dg_set","is_location_of_dg_set_photo_attached_id","upload_location_of_dg_set_photo","officer_remark_on_location_of_dg_set","other_remarks","is_any_other_photo_attached_id","upload_other_photos","officer_remark_other","user_id","date","rec_id");
		if($formdata){
			$postdata = $this->format_request_data($formdata);
			$this->rules_array = array(
				'refuge_area_or_floor_details' => 'required',
				'is_refuge_area_or_floor_photo_attached_id' => 'required',
				'upload_refuge_area_or_floor_photo' => 'required',
				'officer_remark_on_refuge_area_or_floor' => 'required',
				'terrace_door' => 'required',
				'is_terrace_door_photo_attached_id' => 'required',
				'upload_errace_door_photo' => 'required',
				'officer_remark_on_errace_door' => 'required',
				'fire_check_floor' => 'required',
				'is_fire_check_floor_photo_attached_id' => 'required',
				'upload_is_fire_check_floor_photo' => 'required',
				'officer_remark_on_fire_check_floor' => 'required',
				'portable_fire_extinguishers' => 'required',
				'is_portable_fire_extinguishers_photo_attached_id' => 'required',
				'upload_portable_fire_extinguishers_photo' => 'required',
				'officer_remark_on_portable_fire_extinguishers' => 'required',
				'sand_buckets' => 'required',
				'is_sand_buckets_photo_attached_id' => 'required',
				'upload_sand_buckets_photo' => 'required',
				'officer_remark_on_sand_buckets' => 'required',
				'fire_escape_chute' => 'required',
				'is_fire_escape_chute_photo_attached_id' => 'required',
				'upload_escape_chute_photo' => 'required',
				'officer_remark_on_fire_escape_chute' => 'required',
				'external_evaculation_system' => 'required',
				'is_external_evaculation_system_photo_attached_id' => 'required',
				'upload_external_evaculation_system_photo' => 'required',
				'officer_remark_on_external_evaculation_system' => 'required',
				'lowering_device' => 'required',
				'is_lowering_device_photo_attached_id' => 'required',
				'upload_lowering_device_photo' => 'required',
				'officer_remark_on_lowering_device' => 'required',
				'fire_brigade_inlet' => 'required',
				'is_fire_brigade_inlet_photo_attached_id' => 'required',
				'upload_fire_brigade_inlet_photo' => 'required',
				'officer_remark_on_fire_brigade_inlet' => 'required',
				'glass_facade_compliance' => 'required',
				'is_glass_facade_compliance_photo_attached_id' => 'required',
				'upload_glass_facade_compliance_photo' => 'required',
				'officer_remark_on_glass_facade_compliance' => 'required',
				'car_parking_tower' => 'required',
				'is_car_parking_tower_photo_attached_id' => 'required',
				'upload_car_parking_tower_photo' => 'required',
				'officer_remark_on_car_parking_tower' => 'required',
				'location_of_electric_sub_station' => 'required',
				'is_location_of_electric_sub_station_photo_attached_id' => 'required',
				'upload_location_of_electric_sub_station_photo' => 'required',
				'officer_remark_on_location_of_electric_sub_station' => 'required',
				'location_of_dg_set' => 'required',
				'is_location_of_dg_set_photo_attached_id' => 'required',
				'upload_location_of_dg_set_photo' => 'required',
				'officer_remark_on_location_of_dg_set' => 'required',
				'other_remarks' => 'required|numeric',
				'is_any_other_photo_attached_id' => 'required',
				'upload_other_photos' => 'required',
				'officer_remark_other' => 'required',
			);
			$this->sanitize_array = array(
				'refuge_area_or_floor_details' => 'sanitize_string',
				'is_refuge_area_or_floor_photo_attached_id' => 'sanitize_string',
				'upload_refuge_area_or_floor_photo' => 'sanitize_string',
				'officer_remark_on_refuge_area_or_floor' => 'sanitize_string',
				'terrace_door' => 'sanitize_string',
				'is_terrace_door_photo_attached_id' => 'sanitize_string',
				'upload_errace_door_photo' => 'sanitize_string',
				'officer_remark_on_errace_door' => 'sanitize_string',
				'fire_check_floor' => 'sanitize_string',
				'is_fire_check_floor_photo_attached_id' => 'sanitize_string',
				'upload_is_fire_check_floor_photo' => 'sanitize_string',
				'officer_remark_on_fire_check_floor' => 'sanitize_string',
				'portable_fire_extinguishers' => 'sanitize_string',
				'is_portable_fire_extinguishers_photo_attached_id' => 'sanitize_string',
				'upload_portable_fire_extinguishers_photo' => 'sanitize_string',
				'officer_remark_on_portable_fire_extinguishers' => 'sanitize_string',
				'sand_buckets' => 'sanitize_string',
				'is_sand_buckets_photo_attached_id' => 'sanitize_string',
				'upload_sand_buckets_photo' => 'sanitize_string',
				'officer_remark_on_sand_buckets' => 'sanitize_string',
				'fire_escape_chute' => 'sanitize_string',
				'is_fire_escape_chute_photo_attached_id' => 'sanitize_string',
				'upload_escape_chute_photo' => 'sanitize_string',
				'officer_remark_on_fire_escape_chute' => 'sanitize_string',
				'external_evaculation_system' => 'sanitize_string',
				'is_external_evaculation_system_photo_attached_id' => 'sanitize_string',
				'upload_external_evaculation_system_photo' => 'sanitize_string',
				'officer_remark_on_external_evaculation_system' => 'sanitize_string',
				'lowering_device' => 'sanitize_string',
				'is_lowering_device_photo_attached_id' => 'sanitize_string',
				'upload_lowering_device_photo' => 'sanitize_string',
				'officer_remark_on_lowering_device' => 'sanitize_string',
				'fire_brigade_inlet' => 'sanitize_string',
				'is_fire_brigade_inlet_photo_attached_id' => 'sanitize_string',
				'upload_fire_brigade_inlet_photo' => 'sanitize_string',
				'officer_remark_on_fire_brigade_inlet' => 'sanitize_string',
				'glass_facade_compliance' => 'sanitize_string',
				'is_glass_facade_compliance_photo_attached_id' => 'sanitize_string',
				'upload_glass_facade_compliance_photo' => 'sanitize_string',
				'officer_remark_on_glass_facade_compliance' => 'sanitize_string',
				'car_parking_tower' => 'sanitize_string',
				'is_car_parking_tower_photo_attached_id' => 'sanitize_string',
				'upload_car_parking_tower_photo' => 'sanitize_string',
				'officer_remark_on_car_parking_tower' => 'sanitize_string',
				'location_of_electric_sub_station' => 'sanitize_string',
				'is_location_of_electric_sub_station_photo_attached_id' => 'sanitize_string',
				'upload_location_of_electric_sub_station_photo' => 'sanitize_string',
				'officer_remark_on_location_of_electric_sub_station' => 'sanitize_string',
				'location_of_dg_set' => 'sanitize_string',
				'is_location_of_dg_set_photo_attached_id' => 'sanitize_string',
				'upload_location_of_dg_set_photo' => 'sanitize_string',
				'officer_remark_on_location_of_dg_set' => 'sanitize_string',
				'other_remarks' => 'sanitize_string',
				'is_any_other_photo_attached_id' => 'sanitize_string',
				'upload_other_photos' => 'sanitize_string',
				'officer_remark_other' => 'sanitize_string',
			);
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			$modeldata['user_id'] = USER_ID;
$modeldata['date'] = date_now();
$modeldata['rec_id'] = "0";
			if($this->validated()){
				$db->where("architecture_oc_noc_refuge_and_other_details_fourth.id", $rec_id);;
				$bool = $db->update($tablename, $modeldata);
				$numRows = $db->getRowCount(); //number of affected rows. 0 = no record field updated
				if($bool && $numRows){
					$this->set_flash_msg("Record updated successfully", "success");
					return $this->redirect("architecture_oc_noc_refuge_and_other_details_fourth");
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
						return	$this->redirect("architecture_oc_noc_refuge_and_other_details_fourth");
					}
				}
			}
		}
		$db->where("architecture_oc_noc_refuge_and_other_details_fourth.id", $rec_id);;
		$data = $db->getOne($tablename, $fields);
		$page_title = $this->view->page_title = "Edit  Architecture Oc Noc Refuge And Other Details Fourth";
		if(!$data){
			$this->set_page_error();
		}
		return $this->render_view("architecture_oc_noc_refuge_and_other_details_fourth/edit.php", $data);
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
		$db->where("architecture_oc_noc_refuge_and_other_details_fourth.id", $arr_rec_id, "in");
		$bool = $db->delete($tablename);
		if($bool){
			$this->set_flash_msg("Record deleted successfully", "success");
		}
		elseif($db->getLastError()){
			$page_error = $db->getLastError();
			$this->set_flash_msg($page_error, "danger");
		}
		return	$this->redirect("architecture_oc_noc_refuge_and_other_details_fourth");
	}
}
