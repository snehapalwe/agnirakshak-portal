<?php 
/**
 * Fire_final_noc_renewal Page Controller
 * @category  Controller
 */
class Fire_final_noc_renewalController extends SecureController{
	function __construct(){
		parent::__construct();
		$this->tablename = "fire_final_noc_renewal";
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
			"application_no", 
			"old_final_fire_noc_number", 
			"applicant_name", 
			"applicant_address", 
			"zone_value", 
			"mobile_no", 
			"architect_or_developers_lic_number", 
			"survey_number", 
			"village", 
			"vp_number", 
			"number_of_buildings", 
			"road_width_north", 
			"road_width_south", 
			"road_width_east", 
			"road_width_west", 
			"open_space_margin_north", 
			"open_space_margin_south", 
			"open_space_margin_east", 
			"open_space_margin_west", 
			"upload_last_year_final_fire_noc", 
			"upload_architect_application_letter", 
			"upload_builders_application_letter", 
			"upload_gross_built_up_area_certificate", 
			"upload_cc_rdp_oc", 
			"upload_floor_plan_set", 
			"upload_location_site_photo", 
			"upload_google_map_of_land_in_color", 
			"date", 
			"status", 
			"paid", 
			"payment_done", 
			"timestamp", 
			"building_record_count", 
			"floor_record_count", 
			"servey_done", 
			"upload_noc", 
			"admin_report");
		$pagination = $this->get_pagination(3); // get current pagination e.g array(page_number, page_limit)
	#Statement to execute before list record
	// Display to only particular logged in (Citizen)
if(USER_ROLE == 3){
    $db->where("user_id",USER_ID);
}
$_SESSION['tablename'] = $tablename;
// Display to only particular logged in (Authority)
if(USER_ROLE == 2){
    $db->where("user_id",USER_ID);
    $db->where("db_name",$tablename);
    $arr               = $db->getOne("authorization_sequence","*");
    $stage             = $arr['stage'];
    $_SESSION['stage'] = $stage;
    $db->where("(status >= $stage or status='Completed' or status='Rejected')");
    if($arr['zone'] != ''){
        $db->where("zone_id",$arr['zone']);
    }
}
	# End of before list statement
		//search table record
		if(!empty($request->search)){
			$text = trim($request->search); 
			$search_condition = "(
				fire_final_noc_renewal.id LIKE ? OR 
				fire_final_noc_renewal.application_no LIKE ? OR 
				fire_final_noc_renewal.old_final_fire_noc_number LIKE ? OR 
				fire_final_noc_renewal.applicant_name LIKE ? OR 
				fire_final_noc_renewal.applicant_address LIKE ? OR 
				fire_final_noc_renewal.zone_id LIKE ? OR 
				fire_final_noc_renewal.zone_value LIKE ? OR 
				fire_final_noc_renewal.mobile_no LIKE ? OR 
				fire_final_noc_renewal.architect_or_developers_lic_number LIKE ? OR 
				fire_final_noc_renewal.survey_number LIKE ? OR 
				fire_final_noc_renewal.village LIKE ? OR 
				fire_final_noc_renewal.vp_number LIKE ? OR 
				fire_final_noc_renewal.number_of_buildings LIKE ? OR 
				fire_final_noc_renewal.number_of_floors LIKE ? OR 
				fire_final_noc_renewal.road_width LIKE ? OR 
				fire_final_noc_renewal.road_width_north LIKE ? OR 
				fire_final_noc_renewal.road_width_south LIKE ? OR 
				fire_final_noc_renewal.road_width_east LIKE ? OR 
				fire_final_noc_renewal.road_width_west LIKE ? OR 
				fire_final_noc_renewal.open_space_margin_north LIKE ? OR 
				fire_final_noc_renewal.open_space_margin_south LIKE ? OR 
				fire_final_noc_renewal.open_space_margin_east LIKE ? OR 
				fire_final_noc_renewal.open_space_margin_west LIKE ? OR 
				fire_final_noc_renewal.upload_last_year_final_fire_noc LIKE ? OR 
				fire_final_noc_renewal.upload_architect_application_letter LIKE ? OR 
				fire_final_noc_renewal.upload_builders_application_letter LIKE ? OR 
				fire_final_noc_renewal.upload_gross_built_up_area_certificate LIKE ? OR 
				fire_final_noc_renewal.upload_cc_rdp_oc LIKE ? OR 
				fire_final_noc_renewal.upload_floor_plan_set LIKE ? OR 
				fire_final_noc_renewal.upload_location_site_photo LIKE ? OR 
				fire_final_noc_renewal.upload_google_map_of_land_in_color LIKE ? OR 
				fire_final_noc_renewal.declaration LIKE ? OR 
				fire_final_noc_renewal.date LIKE ? OR 
				fire_final_noc_renewal.user_id LIKE ? OR 
				fire_final_noc_renewal.status LIKE ? OR 
				fire_final_noc_renewal.paid LIKE ? OR 
				fire_final_noc_renewal.int_no LIKE ? OR 
				fire_final_noc_renewal.yr LIKE ? OR 
				fire_final_noc_renewal.zone LIKE ? OR 
				fire_final_noc_renewal.payment_done LIKE ? OR 
				fire_final_noc_renewal.certificate_file LIKE ? OR 
				fire_final_noc_renewal.timestamp LIKE ? OR 
				fire_final_noc_renewal.building_record_count LIKE ? OR 
				fire_final_noc_renewal.floor_record_count LIKE ? OR 
				fire_final_noc_renewal.servey_done LIKE ? OR 
				fire_final_noc_renewal.upload_noc LIKE ? OR 
				fire_final_noc_renewal.admin_report LIKE ?
			)";
			$search_params = array(
				"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
			);
			//setting search conditions
			$db->where($search_condition, $search_params);
			 //template to use when ajax search
			$this->view->search_template = "fire_final_noc_renewal/search.php";
		}
		if(!empty($request->orderby)){
			$orderby = $request->orderby;
			$ordertype = (!empty($request->ordertype) ? $request->ordertype : ORDER_TYPE);
			$db->orderBy($orderby, $ordertype);
		}
		else{
			$db->orderBy("fire_final_noc_renewal.id", ORDER_TYPE);
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
		$page_title = $this->view->page_title = "Fire Final Noc Renewal";
		$this->render_view("fire_final_noc_renewal/list.php", $data); //render the full page
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
			"applicant_name", 
			"applicant_address", 
			"zone_id", 
			"zone_value", 
			"mobile_no", 
			"architect_or_developers_lic_number", 
			"survey_number", 
			"village", 
			"vp_number", 
			"road_width", 
			"open_space_margin_north", 
			"open_space_margin_south", 
			"open_space_margin_east", 
			"open_space_margin_west", 
			"upload_architect_application_letter", 
			"upload_builders_application_letter", 
			"upload_gross_built_up_area_certificate", 
			"upload_cc_rdp_oc", 
			"upload_floor_plan_set", 
			"upload_location_site_photo", 
			"upload_google_map_of_land_in_color", 
			"declaration", 
			"user_id", 
			"status", 
			"paid", 
			"int_no", 
			"yr", 
			"zone", 
			"payment_done", 
			"certificate_file", 
			"timestamp", 
			"application_no", 
			"old_final_fire_noc_number", 
			"number_of_buildings", 
			"number_of_floors", 
			"upload_last_year_final_fire_noc", 
			"date", 
			"building_record_count", 
			"floor_record_count", 
			"servey_done", 
			"upload_noc", 
			"admin_report", 
			"road_width_north", 
			"road_width_south", 
			"road_width_east", 
			"road_width_west");
		if($value){
			$db->where($rec_id, urldecode($value)); //select record based on field name
		}
		else{
			$db->where("fire_final_noc_renewal.id", $rec_id);; //select record based on primary key
		}
		$record = $db->getOne($tablename, $fields );
		if($record){
			$record['timestamp'] = human_datetime($record['timestamp']);
$record['date'] = human_date($record['date']);
			$page_title = $this->view->page_title = "View  Fire Final Noc Renewal";
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
		return $this->render_view("fire_final_noc_renewal/view.php", $record);
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
			$fields = $this->fields = array("old_final_fire_noc_number","applicant_name","applicant_address","zone_id","mobile_no","architect_or_developers_lic_number","survey_number","village","vp_number","road_width_north","road_width_south","road_width_east","road_width_west","open_space_margin_north","open_space_margin_south","open_space_margin_east","open_space_margin_west","upload_last_year_final_fire_noc","upload_architect_application_letter","upload_builders_application_letter","upload_gross_built_up_area_certificate","upload_cc_rdp_oc","upload_floor_plan_set","upload_location_site_photo","upload_google_map_of_land_in_color","declaration","date","user_id","status");
			$postdata = $this->format_request_data($formdata);
			$this->rules_array = array(
				'old_final_fire_noc_number' => 'required',
				'applicant_name' => 'required',
				'applicant_address' => 'required',
				'zone_id' => 'required',
				'mobile_no' => 'required',
				'architect_or_developers_lic_number' => 'required',
				'survey_number' => 'required',
				'village' => 'required',
				'road_width_north' => 'required|numeric',
				'road_width_south' => 'required|numeric',
				'road_width_east' => 'required|numeric',
				'road_width_west' => 'required|numeric',
				'open_space_margin_north' => 'required|numeric',
				'open_space_margin_south' => 'required|numeric',
				'open_space_margin_east' => 'required|numeric',
				'open_space_margin_west' => 'required|numeric',
				'upload_last_year_final_fire_noc' => 'required',
				'upload_architect_application_letter' => 'required',
				'upload_builders_application_letter' => 'required',
				'upload_gross_built_up_area_certificate' => 'required',
				'upload_cc_rdp_oc' => 'required',
				'upload_floor_plan_set' => 'required',
				'upload_location_site_photo' => 'required',
				'upload_google_map_of_land_in_color' => 'required',
				'declaration' => 'required',
			);
			$this->sanitize_array = array(
				'old_final_fire_noc_number' => 'sanitize_string',
				'applicant_name' => 'sanitize_string',
				'applicant_address' => 'sanitize_string',
				'zone_id' => 'sanitize_string',
				'mobile_no' => 'sanitize_string',
				'architect_or_developers_lic_number' => 'sanitize_string',
				'survey_number' => 'sanitize_string',
				'village' => 'sanitize_string',
				'vp_number' => 'sanitize_string',
				'road_width_north' => 'sanitize_string',
				'road_width_south' => 'sanitize_string',
				'road_width_east' => 'sanitize_string',
				'road_width_west' => 'sanitize_string',
				'open_space_margin_north' => 'sanitize_string',
				'open_space_margin_south' => 'sanitize_string',
				'open_space_margin_east' => 'sanitize_string',
				'open_space_margin_west' => 'sanitize_string',
				'upload_last_year_final_fire_noc' => 'sanitize_string',
				'upload_architect_application_letter' => 'sanitize_string',
				'upload_builders_application_letter' => 'sanitize_string',
				'upload_gross_built_up_area_certificate' => 'sanitize_string',
				'upload_cc_rdp_oc' => 'sanitize_string',
				'upload_floor_plan_set' => 'sanitize_string',
				'upload_location_site_photo' => 'sanitize_string',
				'upload_google_map_of_land_in_color' => 'sanitize_string',
				'declaration' => 'sanitize_string',
			);
			$this->filter_vals = true; //set whether to remove empty fields
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			$modeldata['date'] = date_now();
$modeldata['user_id'] = USER_ID;
$modeldata['status'] = "1";
			if($this->validated()){
		# Statement to execute before adding record
		//ID to value for Zone name
$db->where("id",$modeldata["zone_id"]);
$modeldata["zone_value"] = $db->getOne("master_zone_ward","*")["zone"];
// for adding application number on list page
$modeldata['status'] = "0";
        $modeldata['paid'] = "0";
        # Statement to execute before adding record
        $application_yr = date("Y");
//query the database and return the results
$fields = array('max(int_no) as new_int');
$db->where("yr", $application_yr );
$arr = $db->get($tablename, 1,$fields);
$no  = 1;
foreach($arr as $a){
    $no = $a['new_int']+1;
}
$db->where("db_name",$tablename);
$PRE=$db->getOne("application_prefix","prefix")['prefix'];
$new_application_no = $application_yr.$PRE.$no;
$modeldata['application_no'] = $new_application_no;
$modeldata['yr']             = $application_yr;
$modeldata['int_no'] = $no;
$db->where("db_name",$tablename);
$exp = $db->getone("expiry_services","*");
if(isset($exp['id'])){
    if($exp['expiry_type']=="Days_count"){
    $expiry = date("Y-m-d",strtotime(date("Y-m-d"))+(($exp['day'])*24*60*60)); 
     }else{
         $expiry = date("Y-m-d",strtotime((date("Y")+$exp['years'])."-".$exp['month']."-".$exp['day'])); 
    }
 $modeldata['expiry_date'] = $expiry;
}
    $db->where("target_table",$tablename);
    $confs=$db->get("corresponding_values",999999,"*");
    foreach($confs as $con){
         $modeldata[$con['target_table_field_name']];
        $db->where("id",$modeldata[$con['target_table_field_name']]);
            $values=$db->getOne($con['fetch_table'],$con['fetch_table_field_name'])[$con['fetch_table_field_name']];
        $modeldata[$con['target_table_value_field']]=$values;
    }
		# End of before add statement
				$rec_id = $this->rec_id = $db->insert($tablename, $modeldata);
				if($rec_id){
					$this->set_flash_msg("Record added successfully", "success");
					return	$this->redirect("api/building_layout/fire_final_noc_renewal/$rec_id");
				}
				else{
					$this->set_page_error();
				}
			}
		}
		$page_title = $this->view->page_title = "Add New Fire Final Noc Renewal";
		$this->render_view("fire_final_noc_renewal/add.php");
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
		$fields = $this->fields = array("id","old_final_fire_noc_number","applicant_name","applicant_address","zone_id","mobile_no","architect_or_developers_lic_number","survey_number","village","vp_number","road_width_north","road_width_south","road_width_east","road_width_west","open_space_margin_north","open_space_margin_south","open_space_margin_east","open_space_margin_west","upload_last_year_final_fire_noc","upload_architect_application_letter","upload_builders_application_letter","upload_gross_built_up_area_certificate","upload_cc_rdp_oc","upload_floor_plan_set","upload_location_site_photo","upload_google_map_of_land_in_color","declaration","date","user_id","status");
		if($formdata){
			$postdata = $this->format_request_data($formdata);
			$this->rules_array = array(
				'old_final_fire_noc_number' => 'required',
				'applicant_name' => 'required',
				'applicant_address' => 'required',
				'zone_id' => 'required',
				'mobile_no' => 'required',
				'architect_or_developers_lic_number' => 'required',
				'survey_number' => 'required',
				'village' => 'required',
				'road_width_north' => 'required|numeric',
				'road_width_south' => 'required|numeric',
				'road_width_east' => 'required|numeric',
				'road_width_west' => 'required|numeric',
				'open_space_margin_north' => 'required|numeric',
				'open_space_margin_south' => 'required|numeric',
				'open_space_margin_east' => 'required|numeric',
				'open_space_margin_west' => 'required|numeric',
				'upload_last_year_final_fire_noc' => 'required',
				'upload_architect_application_letter' => 'required',
				'upload_builders_application_letter' => 'required',
				'upload_gross_built_up_area_certificate' => 'required',
				'upload_cc_rdp_oc' => 'required',
				'upload_floor_plan_set' => 'required',
				'upload_location_site_photo' => 'required',
				'upload_google_map_of_land_in_color' => 'required',
				'declaration' => 'required',
			);
			$this->sanitize_array = array(
				'old_final_fire_noc_number' => 'sanitize_string',
				'applicant_name' => 'sanitize_string',
				'applicant_address' => 'sanitize_string',
				'zone_id' => 'sanitize_string',
				'mobile_no' => 'sanitize_string',
				'architect_or_developers_lic_number' => 'sanitize_string',
				'survey_number' => 'sanitize_string',
				'village' => 'sanitize_string',
				'vp_number' => 'sanitize_string',
				'road_width_north' => 'sanitize_string',
				'road_width_south' => 'sanitize_string',
				'road_width_east' => 'sanitize_string',
				'road_width_west' => 'sanitize_string',
				'open_space_margin_north' => 'sanitize_string',
				'open_space_margin_south' => 'sanitize_string',
				'open_space_margin_east' => 'sanitize_string',
				'open_space_margin_west' => 'sanitize_string',
				'upload_last_year_final_fire_noc' => 'sanitize_string',
				'upload_architect_application_letter' => 'sanitize_string',
				'upload_builders_application_letter' => 'sanitize_string',
				'upload_gross_built_up_area_certificate' => 'sanitize_string',
				'upload_cc_rdp_oc' => 'sanitize_string',
				'upload_floor_plan_set' => 'sanitize_string',
				'upload_location_site_photo' => 'sanitize_string',
				'upload_google_map_of_land_in_color' => 'sanitize_string',
				'declaration' => 'sanitize_string',
			);
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			$modeldata['date'] = date_now();
$modeldata['user_id'] = USER_ID;
$modeldata['status'] = "1";
			if($this->validated()){
				$db->where("fire_final_noc_renewal.id", $rec_id);;
				$bool = $db->update($tablename, $modeldata);
				$numRows = $db->getRowCount(); //number of affected rows. 0 = no record field updated
				if($bool && $numRows){
					$this->set_flash_msg("Record updated successfully", "success");
					return $this->redirect("fire_final_noc_renewal");
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
						return	$this->redirect("fire_final_noc_renewal");
					}
				}
			}
		}
		$db->where("fire_final_noc_renewal.id", $rec_id);;
		$data = $db->getOne($tablename, $fields);
		$page_title = $this->view->page_title = "Edit  Fire Final Noc Renewal";
		if(!$data){
			$this->set_page_error();
		}
		return $this->render_view("fire_final_noc_renewal/edit.php", $data);
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
		$db->where("fire_final_noc_renewal.id", $arr_rec_id, "in");
		$bool = $db->delete($tablename);
		if($bool){
			$this->set_flash_msg("Record deleted successfully", "success");
		}
		elseif($db->getLastError()){
			$page_error = $db->getLastError();
			$this->set_flash_msg($page_error, "danger");
		}
		return	$this->redirect("fire_final_noc_renewal");
	}
	/**
     * Update table record with formdata
	 * @param $rec_id (select record by table primary key)
	 * @param $formdata array() from $_POST
     * @return array
     */
	function edit_zone($rec_id = null, $formdata = null){
		$request = $this->request;
		$db = $this->GetModel();
		$this->rec_id = $rec_id;
		$tablename = $this->tablename;
		 //editable fields
		$fields = $this->fields = array("id","zone_id");
		if($formdata){
			$postdata = $this->format_request_data($formdata);
			$this->rules_array = array(
				'zone_id' => 'required',
			);
			$this->sanitize_array = array(
				'zone_id' => 'sanitize_string',
			);
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			if($this->validated()){
		# Statement to execute after adding record
$db->where("id",$modeldata["zone_id"]);
$modeldata["zone_value"] = $db->getOne("master_zone_ward","*")["zone"];
		# End of before update statement
				$db->where("fire_final_noc_renewal.id", $rec_id);;
				$bool = $db->update($tablename, $modeldata);
				$numRows = $db->getRowCount(); //number of affected rows. 0 = no record field updated
				if($bool && $numRows){
					$this->set_flash_msg("Record updated successfully", "success");
					return $this->redirect("fire_final_noc_renewal");
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
						return	$this->redirect("fire_final_noc_renewal");
					}
				}
			}
		}
		$db->where("fire_final_noc_renewal.id", $rec_id);;
		$data = $db->getOne($tablename, $fields);
		$page_title = $this->view->page_title = "Edit  Fire Final Noc Renewal";
		if(!$data){
			$this->set_page_error();
		}
		return $this->render_view("fire_final_noc_renewal/edit_zone.php", $data);
	}
	/**
     * List page records
     * @param $fieldname (filter record by a field) 
     * @param $fieldvalue (filter field value)
     * @return BaseView
     */
	function mis_report($fieldname = null , $fieldvalue = null){
		$request = $this->request;
		$db = $this->GetModel();
		$tablename = $this->tablename;
		$fields = array("id", 
			"applicant_name", 
			"applicant_address", 
			"zone_value", 
			"mobile_no", 
			"architect_or_developers_lic_number", 
			"survey_number", 
			"village", 
			"vp_number", 
			"road_width", 
			"open_space_margin_north", 
			"open_space_margin_south", 
			"open_space_margin_east", 
			"open_space_margin_west", 
			"upload_architect_application_letter", 
			"upload_builders_application_letter", 
			"upload_gross_built_up_area_certificate", 
			"upload_cc_rdp_oc", 
			"upload_floor_plan_set", 
			"upload_location_site_photo", 
			"upload_google_map_of_land_in_color", 
			"declaration", 
			"status", 
			"certificate_file", 
			"timestamp", 
			"application_no", 
			"old_final_fire_noc_number", 
			"number_of_buildings", 
			"number_of_floors", 
			"upload_last_year_final_fire_noc", 
			"date", 
			"building_record_count", 
			"floor_record_count", 
			"servey_done", 
			"upload_noc", 
			"admin_report", 
			"road_width_north", 
			"road_width_south", 
			"road_width_east", 
			"road_width_west");
		$pagination = $this->get_pagination(MAX_RECORD_COUNT); // get current pagination e.g array(page_number, page_limit)
		//search table record
		if(!empty($request->search)){
			$text = trim($request->search); 
			$search_condition = "(
				fire_final_noc_renewal.id LIKE ? OR 
				fire_final_noc_renewal.applicant_name LIKE ? OR 
				fire_final_noc_renewal.applicant_address LIKE ? OR 
				fire_final_noc_renewal.zone_id LIKE ? OR 
				fire_final_noc_renewal.zone_value LIKE ? OR 
				fire_final_noc_renewal.mobile_no LIKE ? OR 
				fire_final_noc_renewal.architect_or_developers_lic_number LIKE ? OR 
				fire_final_noc_renewal.survey_number LIKE ? OR 
				fire_final_noc_renewal.village LIKE ? OR 
				fire_final_noc_renewal.vp_number LIKE ? OR 
				fire_final_noc_renewal.road_width LIKE ? OR 
				fire_final_noc_renewal.open_space_margin_north LIKE ? OR 
				fire_final_noc_renewal.open_space_margin_south LIKE ? OR 
				fire_final_noc_renewal.open_space_margin_east LIKE ? OR 
				fire_final_noc_renewal.open_space_margin_west LIKE ? OR 
				fire_final_noc_renewal.upload_architect_application_letter LIKE ? OR 
				fire_final_noc_renewal.upload_builders_application_letter LIKE ? OR 
				fire_final_noc_renewal.upload_gross_built_up_area_certificate LIKE ? OR 
				fire_final_noc_renewal.upload_cc_rdp_oc LIKE ? OR 
				fire_final_noc_renewal.upload_floor_plan_set LIKE ? OR 
				fire_final_noc_renewal.upload_location_site_photo LIKE ? OR 
				fire_final_noc_renewal.upload_google_map_of_land_in_color LIKE ? OR 
				fire_final_noc_renewal.declaration LIKE ? OR 
				fire_final_noc_renewal.user_id LIKE ? OR 
				fire_final_noc_renewal.status LIKE ? OR 
				fire_final_noc_renewal.paid LIKE ? OR 
				fire_final_noc_renewal.int_no LIKE ? OR 
				fire_final_noc_renewal.yr LIKE ? OR 
				fire_final_noc_renewal.zone LIKE ? OR 
				fire_final_noc_renewal.payment_done LIKE ? OR 
				fire_final_noc_renewal.certificate_file LIKE ? OR 
				fire_final_noc_renewal.timestamp LIKE ? OR 
				fire_final_noc_renewal.application_no LIKE ? OR 
				fire_final_noc_renewal.old_final_fire_noc_number LIKE ? OR 
				fire_final_noc_renewal.number_of_buildings LIKE ? OR 
				fire_final_noc_renewal.number_of_floors LIKE ? OR 
				fire_final_noc_renewal.upload_last_year_final_fire_noc LIKE ? OR 
				fire_final_noc_renewal.date LIKE ? OR 
				fire_final_noc_renewal.building_record_count LIKE ? OR 
				fire_final_noc_renewal.floor_record_count LIKE ? OR 
				fire_final_noc_renewal.servey_done LIKE ? OR 
				fire_final_noc_renewal.upload_noc LIKE ? OR 
				fire_final_noc_renewal.admin_report LIKE ? OR 
				fire_final_noc_renewal.road_width_north LIKE ? OR 
				fire_final_noc_renewal.road_width_south LIKE ? OR 
				fire_final_noc_renewal.road_width_east LIKE ? OR 
				fire_final_noc_renewal.road_width_west LIKE ?
			)";
			$search_params = array(
				"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
			);
			//setting search conditions
			$db->where($search_condition, $search_params);
			 //template to use when ajax search
			$this->view->search_template = "fire_final_noc_renewal/search.php";
		}
		if(!empty($request->orderby)){
			$orderby = $request->orderby;
			$ordertype = (!empty($request->ordertype) ? $request->ordertype : ORDER_TYPE);
			$db->orderBy($orderby, $ordertype);
		}
		else{
			$db->orderBy("fire_final_noc_renewal.id", ORDER_TYPE);
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
		$page_title = $this->view->page_title = "Fire Final Noc Renewal";
		$this->view->report_filename = date('Y-m-d') . '-' . $page_title;
		$this->view->report_title = $page_title;
		$this->view->report_layout = "report_layout.php";
		$this->view->report_paper_size = "A4";
		$this->view->report_orientation = "portrait";
		$this->render_view("fire_final_noc_renewal/mis_report.php", $data); //render the full page
	}
	/**
     * Update table record with formdata
	 * @param $rec_id (select record by table primary key)
	 * @param $formdata array() from $_POST
     * @return array
     */
	function revert($rec_id = null, $formdata = null){
		$request = $this->request;
		$db = $this->GetModel();
		$this->rec_id = $rec_id;
		$tablename = $this->tablename;
		 //editable fields
		$fields = $this->fields = array("id","upload_architect_application_letter","upload_builders_application_letter","upload_gross_built_up_area_certificate","upload_cc_rdp_oc","upload_floor_plan_set","upload_location_site_photo","upload_google_map_of_land_in_color","upload_last_year_final_fire_noc");
		if($formdata){
			$postdata = $this->format_request_data($formdata);
			$this->rules_array = array(
				'upload_architect_application_letter' => 'required',
				'upload_builders_application_letter' => 'required',
				'upload_gross_built_up_area_certificate' => 'required',
				'upload_cc_rdp_oc' => 'required',
				'upload_floor_plan_set' => 'required',
				'upload_location_site_photo' => 'required',
				'upload_google_map_of_land_in_color' => 'required',
				'upload_last_year_final_fire_noc' => 'required',
			);
			$this->sanitize_array = array(
				'upload_architect_application_letter' => 'sanitize_string',
				'upload_builders_application_letter' => 'sanitize_string',
				'upload_gross_built_up_area_certificate' => 'sanitize_string',
				'upload_cc_rdp_oc' => 'sanitize_string',
				'upload_floor_plan_set' => 'sanitize_string',
				'upload_location_site_photo' => 'sanitize_string',
				'upload_google_map_of_land_in_color' => 'sanitize_string',
				'upload_last_year_final_fire_noc' => 'sanitize_string',
			);
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			if($this->validated()){
		# Statement to execute after adding record
		$modeldata['status'] = 1;
//add this code in all forms for newly created page
		# End of before update statement
				$db->where("fire_final_noc_renewal.id", $rec_id);;
				$bool = $db->update($tablename, $modeldata);
				$numRows = $db->getRowCount(); //number of affected rows. 0 = no record field updated
				if($bool && $numRows){
					$this->set_flash_msg("Record updated successfully", "success");
					return $this->redirect("fire_final_noc_renewal");
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
						return	$this->redirect("fire_final_noc_renewal");
					}
				}
			}
		}
		$db->where("fire_final_noc_renewal.id", $rec_id);;
		$data = $db->getOne($tablename, $fields);
		$page_title = $this->view->page_title = "Edit  Fire Final Noc Renewal";
		if(!$data){
			$this->set_page_error();
		}
		return $this->render_view("fire_final_noc_renewal/revert.php", $data);
	}
}
