<?php 
/**
 * Fire_noc_establishment Page Controller
 * @category  Controller
 */
class Fire_noc_establishmentController extends SecureController{
	function __construct(){
		parent::__construct();
		$this->tablename = "fire_noc_establishment";
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
			"property_number", 
			"name_of_property_owner", 
			"pending_due_amount", 
			"area_in_sq_ft", 
			"application_type", 
			"establishment_type_id", 
			"establishment_type_value", 
			"applicant_name", 
			"establishment_name", 
			"establishment_address", 
			"mobile_no", 
			"zone_value", 
			"working_hours_from", 
			"working_hours_to", 
			"worker_count", 
			"subject", 
			"upload_form_b", 
			"upload_agency_license_copy", 
			"upload_license_agencies_certificate", 
			"upload_fire_equipment_color_photos", 
			"upload_available_fire_equipments_isi_certificate", 
			"upload_property_tax_receipt_or_agreement_or_rent_copy", 
			"upload_mpcb_certificate", 
			"upload_society_noc", 
			"upload_internal_map", 
			"working_area_sqr_feet", 
			"upload_location_layout_map", 
			"upload_electric_audit_report", 
			"upload_affidavite", 
			"upload_lift_annual_maintenance_certificate", 
			"upload_ac_annual_maintenance_certificate", 
			"upload_building_structural_stability_report", 
			"do_you_want_to_add_more_property", 
			"date_of_application", 
			"status", 
			"paid", 
			"payment_done", 
			"noc", 
			"tippni", 
			"timestamp", 
			"inspection_done");
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
				fire_noc_establishment.id LIKE ? OR 
				fire_noc_establishment.application_no LIKE ? OR 
				fire_noc_establishment.property_number LIKE ? OR 
				fire_noc_establishment.name_of_property_owner LIKE ? OR 
				fire_noc_establishment.pending_due_amount LIKE ? OR 
				fire_noc_establishment.area_in_sq_ft LIKE ? OR 
				fire_noc_establishment.application_type LIKE ? OR 
				fire_noc_establishment.establishment_type_id LIKE ? OR 
				fire_noc_establishment.establishment_type_value LIKE ? OR 
				fire_noc_establishment.applicant_name LIKE ? OR 
				fire_noc_establishment.establishment_name LIKE ? OR 
				fire_noc_establishment.establishment_address LIKE ? OR 
				fire_noc_establishment.mobile_no LIKE ? OR 
				fire_noc_establishment.zone_id LIKE ? OR 
				fire_noc_establishment.zone_value LIKE ? OR 
				fire_noc_establishment.working_hours_from LIKE ? OR 
				fire_noc_establishment.working_hours_to LIKE ? OR 
				fire_noc_establishment.worker_count LIKE ? OR 
				fire_noc_establishment.ward_id LIKE ? OR 
				fire_noc_establishment.ward_value LIKE ? OR 
				fire_noc_establishment.subject LIKE ? OR 
				fire_noc_establishment.upload_form_b LIKE ? OR 
				fire_noc_establishment.upload_agency_license_copy LIKE ? OR 
				fire_noc_establishment.upload_license_agencies_certificate LIKE ? OR 
				fire_noc_establishment.upload_fire_equipment_color_photos LIKE ? OR 
				fire_noc_establishment.upload_available_fire_equipments_isi_certificate LIKE ? OR 
				fire_noc_establishment.upload_property_tax_receipt_or_agreement_or_rent_copy LIKE ? OR 
				fire_noc_establishment.upload_mpcb_certificate LIKE ? OR 
				fire_noc_establishment.upload_society_noc LIKE ? OR 
				fire_noc_establishment.upload_internal_map LIKE ? OR 
				fire_noc_establishment.working_area_sqr_feet LIKE ? OR 
				fire_noc_establishment.upload_location_layout_map LIKE ? OR 
				fire_noc_establishment.upload_electric_audit_report LIKE ? OR 
				fire_noc_establishment.upload_affidavite LIKE ? OR 
				fire_noc_establishment.upload_lift_annual_maintenance_certificate LIKE ? OR 
				fire_noc_establishment.upload_ac_annual_maintenance_certificate LIKE ? OR 
				fire_noc_establishment.upload_building_structural_stability_report LIKE ? OR 
				fire_noc_establishment.do_you_want_to_add_more_property LIKE ? OR 
				fire_noc_establishment.declaration LIKE ? OR 
				fire_noc_establishment.date_of_application LIKE ? OR 
				fire_noc_establishment.user_id LIKE ? OR 
				fire_noc_establishment.status LIKE ? OR 
				fire_noc_establishment.int_no LIKE ? OR 
				fire_noc_establishment.yr LIKE ? OR 
				fire_noc_establishment.zone LIKE ? OR 
				fire_noc_establishment.paid LIKE ? OR 
				fire_noc_establishment.payment_done LIKE ? OR 
				fire_noc_establishment.noc LIKE ? OR 
				fire_noc_establishment.tippni LIKE ? OR 
				fire_noc_establishment.certificate_file LIKE ? OR 
				fire_noc_establishment.timestamp LIKE ? OR 
				fire_noc_establishment.expiry_date LIKE ? OR 
				fire_noc_establishment.inspection_done LIKE ?
			)";
			$search_params = array(
				"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
			);
			//setting search conditions
			$db->where($search_condition, $search_params);
			 //template to use when ajax search
			$this->view->search_template = "fire_noc_establishment/search.php";
		}
		if(!empty($request->orderby)){
			$orderby = $request->orderby;
			$ordertype = (!empty($request->ordertype) ? $request->ordertype : ORDER_TYPE);
			$db->orderBy($orderby, $ordertype);
		}
		else{
			$db->orderBy("fire_noc_establishment.id", ORDER_TYPE);
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
				$record['date_of_application'] = human_date($record['date_of_application']);
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
		$page_title = $this->view->page_title = "Fire Noc Establishment";
		$this->render_view("fire_noc_establishment/list.php", $data); //render the full page
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
			"establishment_name", 
			"establishment_address", 
			"establishment_type_id", 
			"establishment_type_value", 
			"zone_id", 
			"zone_value", 
			"ward_id", 
			"ward_value", 
			"mobile_no", 
			"subject", 
			"date_of_application", 
			"upload_form_b", 
			"upload_agency_license_copy", 
			"upload_license_agencies_certificate", 
			"upload_fire_equipment_color_photos", 
			"upload_available_fire_equipments_isi_certificate", 
			"upload_property_tax_receipt_or_agreement_or_rent_copy", 
			"upload_mpcb_certificate", 
			"upload_society_noc", 
			"upload_internal_map", 
			"upload_location_layout_map", 
			"upload_electric_audit_report", 
			"upload_affidavite", 
			"upload_lift_annual_maintenance_certificate", 
			"upload_ac_annual_maintenance_certificate", 
			"upload_building_structural_stability_report", 
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
			"working_hours_from", 
			"working_hours_to", 
			"worker_count", 
			"working_area_sqr_feet", 
			"expiry_date", 
			"inspection_done", 
			"tippni", 
			"noc", 
			"application_type", 
			"property_number", 
			"name_of_property_owner", 
			"pending_due_amount", 
			"area_in_sq_ft", 
			"do_you_want_to_add_more_property");
		if($value){
			$db->where($rec_id, urldecode($value)); //select record based on field name
		}
		else{
			$db->where("fire_noc_establishment.id", $rec_id);; //select record based on primary key
		}
		$record = $db->getOne($tablename, $fields );
		if($record){
			$record['date_of_application'] = human_date($record['date_of_application']);
$record['timestamp'] = human_datetime($record['timestamp']);
			$page_title = $this->view->page_title = "View  Fire Noc Establishment";
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
		return $this->render_view("fire_noc_establishment/view.php", $record);
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
			$fields = $this->fields = array("property_number","name_of_property_owner","pending_due_amount","area_in_sq_ft","application_type","establishment_type_id","applicant_name","establishment_name","establishment_address","mobile_no","zone_id","working_hours_from","working_hours_to","worker_count","subject","upload_form_b","upload_agency_license_copy","upload_license_agencies_certificate","upload_fire_equipment_color_photos","upload_available_fire_equipments_isi_certificate","upload_property_tax_receipt_or_agreement_or_rent_copy","upload_mpcb_certificate","upload_society_noc","upload_internal_map","upload_location_layout_map","upload_electric_audit_report","upload_affidavite","upload_lift_annual_maintenance_certificate","upload_ac_annual_maintenance_certificate","upload_building_structural_stability_report","do_you_want_to_add_more_property","declaration","date_of_application","user_id");
			$postdata = $this->format_request_data($formdata);
			$this->rules_array = array(
				'property_number' => 'required',
				'pending_due_amount' => 'numeric',
				'area_in_sq_ft' => 'numeric',
				'application_type' => 'required',
				'establishment_type_id' => 'required',
				'applicant_name' => 'required',
				'establishment_name' => 'required',
				'establishment_address' => 'required',
				'mobile_no' => 'required|numeric|max_numeric,9999999999|min_numeric,0000000000',
				'zone_id' => 'required',
				'working_hours_from' => 'required',
				'working_hours_to' => 'required',
				'worker_count' => 'required|numeric',
				'subject' => 'required',
				'upload_form_b' => 'required',
				'upload_agency_license_copy' => 'required',
				'upload_license_agencies_certificate' => 'required',
				'upload_fire_equipment_color_photos' => 'required',
				'upload_available_fire_equipments_isi_certificate' => 'required',
				'upload_property_tax_receipt_or_agreement_or_rent_copy' => 'required',
				'upload_internal_map' => 'required',
				'upload_location_layout_map' => 'required',
				'upload_electric_audit_report' => 'required',
				'upload_affidavite' => 'required',
				'do_you_want_to_add_more_property' => 'required',
				'declaration' => 'required',
			);
			$this->sanitize_array = array(
				'property_number' => 'sanitize_string',
				'name_of_property_owner' => 'sanitize_string',
				'pending_due_amount' => 'sanitize_string',
				'area_in_sq_ft' => 'sanitize_string',
				'application_type' => 'sanitize_string',
				'establishment_type_id' => 'sanitize_string',
				'applicant_name' => 'sanitize_string',
				'establishment_name' => 'sanitize_string',
				'establishment_address' => 'sanitize_string',
				'mobile_no' => 'sanitize_string',
				'zone_id' => 'sanitize_string',
				'working_hours_from' => 'sanitize_string',
				'working_hours_to' => 'sanitize_string',
				'worker_count' => 'sanitize_string',
				'subject' => 'sanitize_string',
				'upload_form_b' => 'sanitize_string',
				'upload_agency_license_copy' => 'sanitize_string',
				'upload_license_agencies_certificate' => 'sanitize_string',
				'upload_fire_equipment_color_photos' => 'sanitize_string',
				'upload_available_fire_equipments_isi_certificate' => 'sanitize_string',
				'upload_property_tax_receipt_or_agreement_or_rent_copy' => 'sanitize_string',
				'upload_mpcb_certificate' => 'sanitize_string',
				'upload_society_noc' => 'sanitize_string',
				'upload_internal_map' => 'sanitize_string',
				'upload_location_layout_map' => 'sanitize_string',
				'upload_electric_audit_report' => 'sanitize_string',
				'upload_affidavite' => 'sanitize_string',
				'upload_lift_annual_maintenance_certificate' => 'sanitize_string',
				'upload_ac_annual_maintenance_certificate' => 'sanitize_string',
				'upload_building_structural_stability_report' => 'sanitize_string',
				'do_you_want_to_add_more_property' => 'sanitize_string',
				'declaration' => 'sanitize_string',
			);
			$this->filter_vals = true; //set whether to remove empty fields
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			$modeldata['date_of_application'] = date_now();
$modeldata['user_id'] = USER_ID;
			if($this->validated()){
		# Statement to execute before adding record
		//ID to value for Establishment name
$db->where("id",$modeldata["establishment_type_id"]);
$modeldata["establishment_type_value"] = $db->getOne("master_establishment_type","*")["type_name"];
$modeldata['working_area_sqr_feet'] = ceil($modeldata['area_in_sq_ft']/10.76);
//ID to value for Zone name
$db->where("id",$modeldata["zone_id"]);
$modeldata["zone_value"] = $db->getOne("master_zone_ward","*")["zone"];
// for adding application number on list page
$modeldata['status'] = $modeldata['do_you_want_to_add_more_property'] == "Yes"?0:1;
$loc                 = "";
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
		# Statement to execute after adding record
		    if($modeldata['do_you_want_to_add_more_property']!="Yes"){
$loc = $tablename;
}else{
    $loc = 'fire_noc_establishment_subentry/add?rec_id='.$rec_id; 
}
		# End of after add statement
					$this->set_flash_msg("Record added successfully", "success");
					return	$this->redirect("$loc");
				}
				else{
					$this->set_page_error();
				}
			}
		}
		$page_title = $this->view->page_title = "Add New Fire Noc Establishment";
		$this->render_view("fire_noc_establishment/add.php");
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
		$fields = $this->fields = array("id","property_number","name_of_property_owner","pending_due_amount","area_in_sq_ft","application_type","establishment_type_id","applicant_name","establishment_name","establishment_address","mobile_no","zone_id","working_hours_from","working_hours_to","worker_count","subject","upload_form_b","upload_agency_license_copy","upload_license_agencies_certificate","upload_fire_equipment_color_photos","upload_available_fire_equipments_isi_certificate","upload_property_tax_receipt_or_agreement_or_rent_copy","upload_mpcb_certificate","upload_society_noc","upload_internal_map","upload_location_layout_map","upload_electric_audit_report","upload_affidavite","upload_lift_annual_maintenance_certificate","upload_ac_annual_maintenance_certificate","upload_building_structural_stability_report","do_you_want_to_add_more_property","declaration","date_of_application","user_id");
		if($formdata){
			$postdata = $this->format_request_data($formdata);
			$this->rules_array = array(
				'property_number' => 'required',
				'pending_due_amount' => 'numeric',
				'area_in_sq_ft' => 'numeric',
				'application_type' => 'required',
				'establishment_type_id' => 'required',
				'applicant_name' => 'required',
				'establishment_name' => 'required',
				'establishment_address' => 'required',
				'mobile_no' => 'required|numeric|max_numeric,9999999999|min_numeric,0000000000',
				'zone_id' => 'required',
				'working_hours_from' => 'required',
				'working_hours_to' => 'required',
				'worker_count' => 'required|numeric',
				'subject' => 'required',
				'upload_form_b' => 'required',
				'upload_agency_license_copy' => 'required',
				'upload_license_agencies_certificate' => 'required',
				'upload_fire_equipment_color_photos' => 'required',
				'upload_available_fire_equipments_isi_certificate' => 'required',
				'upload_property_tax_receipt_or_agreement_or_rent_copy' => 'required',
				'upload_internal_map' => 'required',
				'upload_location_layout_map' => 'required',
				'upload_electric_audit_report' => 'required',
				'upload_affidavite' => 'required',
				'do_you_want_to_add_more_property' => 'required',
				'declaration' => 'required',
			);
			$this->sanitize_array = array(
				'property_number' => 'sanitize_string',
				'name_of_property_owner' => 'sanitize_string',
				'pending_due_amount' => 'sanitize_string',
				'area_in_sq_ft' => 'sanitize_string',
				'application_type' => 'sanitize_string',
				'establishment_type_id' => 'sanitize_string',
				'applicant_name' => 'sanitize_string',
				'establishment_name' => 'sanitize_string',
				'establishment_address' => 'sanitize_string',
				'mobile_no' => 'sanitize_string',
				'zone_id' => 'sanitize_string',
				'working_hours_from' => 'sanitize_string',
				'working_hours_to' => 'sanitize_string',
				'worker_count' => 'sanitize_string',
				'subject' => 'sanitize_string',
				'upload_form_b' => 'sanitize_string',
				'upload_agency_license_copy' => 'sanitize_string',
				'upload_license_agencies_certificate' => 'sanitize_string',
				'upload_fire_equipment_color_photos' => 'sanitize_string',
				'upload_available_fire_equipments_isi_certificate' => 'sanitize_string',
				'upload_property_tax_receipt_or_agreement_or_rent_copy' => 'sanitize_string',
				'upload_mpcb_certificate' => 'sanitize_string',
				'upload_society_noc' => 'sanitize_string',
				'upload_internal_map' => 'sanitize_string',
				'upload_location_layout_map' => 'sanitize_string',
				'upload_electric_audit_report' => 'sanitize_string',
				'upload_affidavite' => 'sanitize_string',
				'upload_lift_annual_maintenance_certificate' => 'sanitize_string',
				'upload_ac_annual_maintenance_certificate' => 'sanitize_string',
				'upload_building_structural_stability_report' => 'sanitize_string',
				'do_you_want_to_add_more_property' => 'sanitize_string',
				'declaration' => 'sanitize_string',
			);
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			$modeldata['date_of_application'] = date_now();
$modeldata['user_id'] = USER_ID;
			if($this->validated()){
				$db->where("fire_noc_establishment.id", $rec_id);;
				$bool = $db->update($tablename, $modeldata);
				$numRows = $db->getRowCount(); //number of affected rows. 0 = no record field updated
				if($bool && $numRows){
					$this->set_flash_msg("Record updated successfully", "success");
					return $this->redirect("fire_noc_establishment");
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
						return	$this->redirect("fire_noc_establishment");
					}
				}
			}
		}
		$db->where("fire_noc_establishment.id", $rec_id);;
		$data = $db->getOne($tablename, $fields);
		$page_title = $this->view->page_title = "Edit  Fire Noc Establishment";
		if(!$data){
			$this->set_page_error();
		}
		return $this->render_view("fire_noc_establishment/edit.php", $data);
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
		$db->where("fire_noc_establishment.id", $arr_rec_id, "in");
		$bool = $db->delete($tablename);
		if($bool){
			$this->set_flash_msg("Record deleted successfully", "success");
		}
		elseif($db->getLastError()){
			$page_error = $db->getLastError();
			$this->set_flash_msg($page_error, "danger");
		}
		return	$this->redirect("fire_noc_establishment");
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
//ID to value for Zone name
$db->where("id",$modeldata["zone_id"]);
$modeldata["zone_value"] = $db->getOne("master_zone_ward","*")["zone"];
		# End of before update statement
				$db->where("fire_noc_establishment.id", $rec_id);;
				$bool = $db->update($tablename, $modeldata);
				$numRows = $db->getRowCount(); //number of affected rows. 0 = no record field updated
				if($bool && $numRows){
					$this->set_flash_msg("Record updated successfully", "success");
					return $this->redirect("fire_noc_establishment");
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
						return	$this->redirect("fire_noc_establishment");
					}
				}
			}
		}
		$db->where("fire_noc_establishment.id", $rec_id);;
		$data = $db->getOne($tablename, $fields);
		$page_title = $this->view->page_title = "Edit  Fire Noc Establishment";
		if(!$data){
			$this->set_page_error();
		}
		return $this->render_view("fire_noc_establishment/edit_zone.php", $data);
	}
	/**
     * Update table record with formdata
	 * @param $rec_id (select record by table primary key)
	 * @param $formdata array() from $_POST
     * @return array
     */
	function confirm_application($rec_id = null, $formdata = null){
		$request = $this->request;
		$db = $this->GetModel();
		$this->rec_id = $rec_id;
		$tablename = $this->tablename;
		 //editable fields
		$fields = $this->fields = array("id","yr");
		if($formdata){
			$postdata = $this->format_request_data($formdata);
			$this->rules_array = array(
				'yr' => 'required',
			);
			$this->sanitize_array = array(
				'yr' => 'sanitize_string',
			);
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			if($this->validated()){
		# Statement to execute after adding record
		unset($modeldata['yr']);
$modeldata['status'] = 1;
$db->where("rec_id",$rec_id);
$db->update("fire_noc_establishment_subentry",["status"=>1]);
		# End of before update statement
				$db->where("fire_noc_establishment.id", $rec_id);;
				$bool = $db->update($tablename, $modeldata);
				$numRows = $db->getRowCount(); //number of affected rows. 0 = no record field updated
				if($bool && $numRows){
					$this->set_flash_msg("Record updated successfully", "success");
					return $this->redirect("fire_noc_establishment");
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
						return	$this->redirect("fire_noc_establishment");
					}
				}
			}
		}
		$db->where("fire_noc_establishment.id", $rec_id);;
		$data = $db->getOne($tablename, $fields);
		$page_title = $this->view->page_title = "Edit  Fire Noc Establishment";
		if(!$data){
			$this->set_page_error();
		}
		return $this->render_view("fire_noc_establishment/confirm_application.php", $data);
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
		$fields = $this->fields = array("id","upload_agency_license_copy","upload_license_agencies_certificate","upload_fire_equipment_color_photos","upload_available_fire_equipments_isi_certificate","upload_property_tax_receipt_or_agreement_or_rent_copy","upload_mpcb_certificate","upload_society_noc","upload_internal_map","upload_location_layout_map","upload_electric_audit_report","upload_affidavite","upload_lift_annual_maintenance_certificate","upload_ac_annual_maintenance_certificate","upload_building_structural_stability_report");
		if($formdata){
			$postdata = $this->format_request_data($formdata);
			$this->rules_array = array(
				'upload_agency_license_copy' => 'required',
				'upload_license_agencies_certificate' => 'required',
				'upload_fire_equipment_color_photos' => 'required',
				'upload_available_fire_equipments_isi_certificate' => 'required',
				'upload_property_tax_receipt_or_agreement_or_rent_copy' => 'required',
				'upload_internal_map' => 'required',
				'upload_location_layout_map' => 'required',
				'upload_electric_audit_report' => 'required',
				'upload_affidavite' => 'required',
			);
			$this->sanitize_array = array(
				'upload_agency_license_copy' => 'sanitize_string',
				'upload_license_agencies_certificate' => 'sanitize_string',
				'upload_fire_equipment_color_photos' => 'sanitize_string',
				'upload_available_fire_equipments_isi_certificate' => 'sanitize_string',
				'upload_property_tax_receipt_or_agreement_or_rent_copy' => 'sanitize_string',
				'upload_mpcb_certificate' => 'sanitize_string',
				'upload_society_noc' => 'sanitize_string',
				'upload_internal_map' => 'sanitize_string',
				'upload_location_layout_map' => 'sanitize_string',
				'upload_electric_audit_report' => 'sanitize_string',
				'upload_affidavite' => 'sanitize_string',
				'upload_lift_annual_maintenance_certificate' => 'sanitize_string',
				'upload_ac_annual_maintenance_certificate' => 'sanitize_string',
				'upload_building_structural_stability_report' => 'sanitize_string',
			);
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			if($this->validated()){
		# Statement to execute after adding record
		$modeldata['status'] = 1;
		# End of before update statement
				$db->where("fire_noc_establishment.id", $rec_id);;
				$bool = $db->update($tablename, $modeldata);
				$numRows = $db->getRowCount(); //number of affected rows. 0 = no record field updated
				if($bool && $numRows){
					$this->set_flash_msg("Record updated successfully", "success");
					return $this->redirect("fire_noc_establishment");
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
						return	$this->redirect("fire_noc_establishment");
					}
				}
			}
		}
		$db->where("fire_noc_establishment.id", $rec_id);;
		$data = $db->getOne($tablename, $fields);
		$page_title = $this->view->page_title = "Edit  Fire Noc Establishment";
		if(!$data){
			$this->set_page_error();
		}
		return $this->render_view("fire_noc_establishment/revert.php", $data);
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
			"establishment_name", 
			"establishment_address", 
			"establishment_type_value", 
			"zone_value", 
			"mobile_no", 
			"subject", 
			"date_of_application", 
			"upload_form_b", 
			"upload_agency_license_copy", 
			"upload_license_agencies_certificate", 
			"upload_fire_equipment_color_photos", 
			"upload_available_fire_equipments_isi_certificate", 
			"upload_property_tax_receipt_or_agreement_or_rent_copy", 
			"upload_mpcb_certificate", 
			"upload_society_noc", 
			"upload_internal_map", 
			"upload_location_layout_map", 
			"upload_electric_audit_report", 
			"upload_affidavite", 
			"upload_lift_annual_maintenance_certificate", 
			"upload_ac_annual_maintenance_certificate", 
			"upload_building_structural_stability_report", 
			"status", 
			"yr", 
			"certificate_file", 
			"timestamp", 
			"application_no", 
			"working_hours_from", 
			"working_hours_to", 
			"worker_count", 
			"working_area_sqr_feet", 
			"expiry_date", 
			"tippni", 
			"noc", 
			"application_type", 
			"property_number", 
			"name_of_property_owner", 
			"pending_due_amount", 
			"area_in_sq_ft");
		$pagination = $this->get_pagination(MAX_RECORD_COUNT); // get current pagination e.g array(page_number, page_limit)
		//search table record
		if(!empty($request->search)){
			$text = trim($request->search); 
			$search_condition = "(
				fire_noc_establishment.id LIKE ? OR 
				fire_noc_establishment.applicant_name LIKE ? OR 
				fire_noc_establishment.establishment_name LIKE ? OR 
				fire_noc_establishment.establishment_address LIKE ? OR 
				fire_noc_establishment.establishment_type_id LIKE ? OR 
				fire_noc_establishment.establishment_type_value LIKE ? OR 
				fire_noc_establishment.zone_id LIKE ? OR 
				fire_noc_establishment.zone_value LIKE ? OR 
				fire_noc_establishment.ward_id LIKE ? OR 
				fire_noc_establishment.ward_value LIKE ? OR 
				fire_noc_establishment.mobile_no LIKE ? OR 
				fire_noc_establishment.subject LIKE ? OR 
				fire_noc_establishment.date_of_application LIKE ? OR 
				fire_noc_establishment.upload_form_b LIKE ? OR 
				fire_noc_establishment.upload_agency_license_copy LIKE ? OR 
				fire_noc_establishment.upload_license_agencies_certificate LIKE ? OR 
				fire_noc_establishment.upload_fire_equipment_color_photos LIKE ? OR 
				fire_noc_establishment.upload_available_fire_equipments_isi_certificate LIKE ? OR 
				fire_noc_establishment.upload_property_tax_receipt_or_agreement_or_rent_copy LIKE ? OR 
				fire_noc_establishment.upload_mpcb_certificate LIKE ? OR 
				fire_noc_establishment.upload_society_noc LIKE ? OR 
				fire_noc_establishment.upload_internal_map LIKE ? OR 
				fire_noc_establishment.upload_location_layout_map LIKE ? OR 
				fire_noc_establishment.upload_electric_audit_report LIKE ? OR 
				fire_noc_establishment.upload_affidavite LIKE ? OR 
				fire_noc_establishment.upload_lift_annual_maintenance_certificate LIKE ? OR 
				fire_noc_establishment.upload_ac_annual_maintenance_certificate LIKE ? OR 
				fire_noc_establishment.upload_building_structural_stability_report LIKE ? OR 
				fire_noc_establishment.declaration LIKE ? OR 
				fire_noc_establishment.user_id LIKE ? OR 
				fire_noc_establishment.status LIKE ? OR 
				fire_noc_establishment.paid LIKE ? OR 
				fire_noc_establishment.int_no LIKE ? OR 
				fire_noc_establishment.yr LIKE ? OR 
				fire_noc_establishment.zone LIKE ? OR 
				fire_noc_establishment.payment_done LIKE ? OR 
				fire_noc_establishment.certificate_file LIKE ? OR 
				fire_noc_establishment.timestamp LIKE ? OR 
				fire_noc_establishment.application_no LIKE ? OR 
				fire_noc_establishment.working_hours_from LIKE ? OR 
				fire_noc_establishment.working_hours_to LIKE ? OR 
				fire_noc_establishment.worker_count LIKE ? OR 
				fire_noc_establishment.working_area_sqr_feet LIKE ? OR 
				fire_noc_establishment.expiry_date LIKE ? OR 
				fire_noc_establishment.inspection_done LIKE ? OR 
				fire_noc_establishment.tippni LIKE ? OR 
				fire_noc_establishment.noc LIKE ? OR 
				fire_noc_establishment.application_type LIKE ? OR 
				fire_noc_establishment.property_number LIKE ? OR 
				fire_noc_establishment.name_of_property_owner LIKE ? OR 
				fire_noc_establishment.pending_due_amount LIKE ? OR 
				fire_noc_establishment.area_in_sq_ft LIKE ? OR 
				fire_noc_establishment.do_you_want_to_add_more_property LIKE ?
			)";
			$search_params = array(
				"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
			);
			//setting search conditions
			$db->where($search_condition, $search_params);
			 //template to use when ajax search
			$this->view->search_template = "fire_noc_establishment/search.php";
		}
		if(!empty($request->orderby)){
			$orderby = $request->orderby;
			$ordertype = (!empty($request->ordertype) ? $request->ordertype : ORDER_TYPE);
			$db->orderBy($orderby, $ordertype);
		}
		else{
			$db->orderBy("fire_noc_establishment.id", ORDER_TYPE);
		}
		if($fieldname){
			$db->where($fieldname , $fieldvalue); //filter by a single field name
		}
		if(!empty($request->fire_noc_establishment_timestamp)){
			$val = $request->fire_noc_establishment_timestamp;
			$db->where("DATE(fire_noc_establishment.timestamp)", $val , "=");
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
		$page_title = $this->view->page_title = "Fire Noc Establishment";
		$this->view->report_filename = date('Y-m-d') . '-' . $page_title;
		$this->view->report_title = $page_title;
		$this->view->report_layout = "report_layout.php";
		$this->view->report_paper_size = "A4";
		$this->view->report_orientation = "portrait";
		$this->render_view("fire_noc_establishment/mis_report.php", $data); //render the full page
	}
}
