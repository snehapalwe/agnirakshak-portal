<?php 
/**
 * Fire_noc_provisional Page Controller
 * @category  Controller
 */
class Fire_noc_provisionalController extends SecureController{
	function __construct(){
		parent::__construct();
		$this->tablename = "fire_noc_provisional";
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
			"applicant_name", 
			"applicant_address", 
			"mobile_no", 
			"zone_value", 
			"subject", 
			"date_of_application", 
			"upload_architect_application_letter", 
			"upload_developers_letter", 
			"upload_gross_builtup_area_certificate", 
			"upload_cc_rdp_oc", 
			"upload_floor_plan_set", 
			"upload_location_site_photos", 
			"declaration", 
			"application_no", 
			"user_id", 
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
				fire_noc_provisional.id LIKE ? OR 
				fire_noc_provisional.applicant_name LIKE ? OR 
				fire_noc_provisional.applicant_address LIKE ? OR 
				fire_noc_provisional.mobile_no LIKE ? OR 
				fire_noc_provisional.zone_id LIKE ? OR 
				fire_noc_provisional.zone_value LIKE ? OR 
				fire_noc_provisional.ward_id LIKE ? OR 
				fire_noc_provisional.ward_value LIKE ? OR 
				fire_noc_provisional.subject LIKE ? OR 
				fire_noc_provisional.date_of_application LIKE ? OR 
				fire_noc_provisional.upload_architect_application_letter LIKE ? OR 
				fire_noc_provisional.upload_developers_letter LIKE ? OR 
				fire_noc_provisional.upload_gross_builtup_area_certificate LIKE ? OR 
				fire_noc_provisional.upload_cc_rdp_oc LIKE ? OR 
				fire_noc_provisional.upload_floor_plan_set LIKE ? OR 
				fire_noc_provisional.upload_location_site_photos LIKE ? OR 
				fire_noc_provisional.declaration LIKE ? OR 
				fire_noc_provisional.application_no LIKE ? OR 
				fire_noc_provisional.user_id LIKE ? OR 
				fire_noc_provisional.status LIKE ? OR 
				fire_noc_provisional.paid LIKE ? OR 
				fire_noc_provisional.int_no LIKE ? OR 
				fire_noc_provisional.yr LIKE ? OR 
				fire_noc_provisional.zone LIKE ? OR 
				fire_noc_provisional.payment_done LIKE ? OR 
				fire_noc_provisional.certificate_file LIKE ? OR 
				fire_noc_provisional.timestamp LIKE ?
			)";
			$search_params = array(
				"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
			);
			//setting search conditions
			$db->where($search_condition, $search_params);
			 //template to use when ajax search
			$this->view->search_template = "fire_noc_provisional/search.php";
		}
		if(!empty($request->orderby)){
			$orderby = $request->orderby;
			$ordertype = (!empty($request->ordertype) ? $request->ordertype : ORDER_TYPE);
			$db->orderBy($orderby, $ordertype);
		}
		else{
			$db->orderBy("fire_noc_provisional.id", ORDER_TYPE);
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
		$page_title = $this->view->page_title = "Fire Noc Provisional";
		$this->render_view("fire_noc_provisional/list.php", $data); //render the full page
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
			"subject", 
			"date_of_application", 
			"upload_architect_application_letter", 
			"upload_developers_letter", 
			"upload_gross_builtup_area_certificate", 
			"upload_cc_rdp_oc", 
			"upload_floor_plan_set", 
			"upload_location_site_photos", 
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
			"application_no");
		if($value){
			$db->where($rec_id, urldecode($value)); //select record based on field name
		}
		else{
			$db->where("fire_noc_provisional.id", $rec_id);; //select record based on primary key
		}
		$record = $db->getOne($tablename, $fields );
		if($record){
			$record['date_of_application'] = human_date($record['date_of_application']);
			$page_title = $this->view->page_title = "View  Fire Noc Provisional";
		}
		else{
			if($db->getLastError()){
				$this->set_page_error();
			}
			else{
				$this->set_page_error("No record found");
			}
		}
		return $this->render_view("fire_noc_provisional/view.php", $record);
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
			$fields = $this->fields = array("applicant_name","applicant_address","mobile_no","zone_id","subject","date_of_application","upload_architect_application_letter","upload_developers_letter","upload_gross_builtup_area_certificate","upload_cc_rdp_oc","upload_floor_plan_set","upload_location_site_photos","declaration","user_id");
			$postdata = $this->format_request_data($formdata);
			$this->rules_array = array(
				'applicant_name' => 'required',
				'applicant_address' => 'required',
				'mobile_no' => 'required|numeric|max_numeric,9999999999|min_numeric,0000000000',
				'zone_id' => 'required',
				'subject' => 'required',
				'upload_architect_application_letter' => 'required',
				'upload_developers_letter' => 'required',
				'upload_gross_builtup_area_certificate' => 'required',
				'upload_cc_rdp_oc' => 'required',
				'upload_floor_plan_set' => 'required',
				'upload_location_site_photos' => 'required',
				'declaration' => 'required',
			);
			$this->sanitize_array = array(
				'applicant_name' => 'sanitize_string',
				'applicant_address' => 'sanitize_string',
				'mobile_no' => 'sanitize_string',
				'zone_id' => 'sanitize_string',
				'subject' => 'sanitize_string',
				'upload_architect_application_letter' => 'sanitize_string',
				'upload_developers_letter' => 'sanitize_string',
				'upload_gross_builtup_area_certificate' => 'sanitize_string',
				'upload_cc_rdp_oc' => 'sanitize_string',
				'upload_floor_plan_set' => 'sanitize_string',
				'upload_location_site_photos' => 'sanitize_string',
				'declaration' => 'sanitize_string',
			);
			$this->filter_vals = true; //set whether to remove empty fields
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			$modeldata['date_of_application'] = date_now();
$modeldata['user_id'] = USER_ID;
			if($this->validated()){
		# Statement to execute before adding record
		$modeldata['status'] = "1";
        $modeldata['paid']   = "1";
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

// file_get_contents("https://jskbulkmarketing.in/app/smsapi/index.php?key=5676D2A626B98C&campaign=13987&routeid=3&type=text&contacts=".$modeldata['mobile_no']."&senderid=VVMCDM&msg=Dear%20Applicant,%20You%20have%20successfully%20applied%20for%20fire%20NOC,%20your%20application%20id%20is$new_application_no%20please%20keep%20this%20for%20future%20reference%E2%80%9D%20Regards%20VVCMC&template_id=1007982114993360101&pe_id=1001240621308818319");



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
					return	$this->redirect("fire_noc_provisional/view/$rec_id");
				}
				else{
					$this->set_page_error();
				}
			}
		}
		$page_title = $this->view->page_title = "Add New Fire Noc Provisional";
		$this->render_view("fire_noc_provisional/add.php");
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
		$fields = $this->fields = array("id","applicant_name","applicant_address","mobile_no","zone_id","subject","date_of_application","upload_architect_application_letter","upload_developers_letter","upload_gross_builtup_area_certificate","upload_cc_rdp_oc","upload_floor_plan_set","upload_location_site_photos","declaration","user_id");
		if($formdata){
			$postdata = $this->format_request_data($formdata);
			$this->rules_array = array(
				'applicant_name' => 'required',
				'applicant_address' => 'required',
				'mobile_no' => 'required|numeric|max_numeric,9999999999|min_numeric,0000000000',
				'zone_id' => 'required',
				'subject' => 'required',
				'upload_architect_application_letter' => 'required',
				'upload_developers_letter' => 'required',
				'upload_gross_builtup_area_certificate' => 'required',
				'upload_cc_rdp_oc' => 'required',
				'upload_floor_plan_set' => 'required',
				'upload_location_site_photos' => 'required',
				'declaration' => 'required',
			);
			$this->sanitize_array = array(
				'applicant_name' => 'sanitize_string',
				'applicant_address' => 'sanitize_string',
				'mobile_no' => 'sanitize_string',
				'zone_id' => 'sanitize_string',
				'subject' => 'sanitize_string',
				'upload_architect_application_letter' => 'sanitize_string',
				'upload_developers_letter' => 'sanitize_string',
				'upload_gross_builtup_area_certificate' => 'sanitize_string',
				'upload_cc_rdp_oc' => 'sanitize_string',
				'upload_floor_plan_set' => 'sanitize_string',
				'upload_location_site_photos' => 'sanitize_string',
				'declaration' => 'sanitize_string',
			);
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			$modeldata['date_of_application'] = date_now();
$modeldata['user_id'] = USER_ID;
			if($this->validated()){
				$db->where("fire_noc_provisional.id", $rec_id);;
				$bool = $db->update($tablename, $modeldata);
				$numRows = $db->getRowCount(); //number of affected rows. 0 = no record field updated
				if($bool && $numRows){
					$this->set_flash_msg("Record updated successfully", "success");
					return $this->redirect("fire_noc_provisional");
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
						return	$this->redirect("fire_noc_provisional");
					}
				}
			}
		}
		$db->where("fire_noc_provisional.id", $rec_id);;
		$data = $db->getOne($tablename, $fields);
		$page_title = $this->view->page_title = "Edit  Fire Noc Provisional";
		if(!$data){
			$this->set_page_error();
		}
		return $this->render_view("fire_noc_provisional/edit.php", $data);
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
		$db->where("fire_noc_provisional.id", $arr_rec_id, "in");
		$bool = $db->delete($tablename);
		if($bool){
			$this->set_flash_msg("Record deleted successfully", "success");
		}
		elseif($db->getLastError()){
			$page_error = $db->getLastError();
			$this->set_flash_msg($page_error, "danger");
		}
		return	$this->redirect("fire_noc_provisional");
	}
}
