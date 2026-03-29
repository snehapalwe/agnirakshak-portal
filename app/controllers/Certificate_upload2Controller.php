<?php 
/**
 * Certificate_upload2 Page Controller
 * @category  Controller
 */
class Certificate_upload2Controller extends SecureController{
	function __construct(){
		parent::__construct();
		$this->tablename = "certificate_upload2";
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
			"db_name", 
			"rec_id", 
			"admin_report", 
			"upload_noc");
		$pagination = $this->get_pagination(MAX_RECORD_COUNT); // get current pagination e.g array(page_number, page_limit)
		//search table record
		if(!empty($request->search)){
			$text = trim($request->search); 
			$search_condition = "(
				certificate_upload2.id LIKE ? OR 
				certificate_upload2.db_name LIKE ? OR 
				certificate_upload2.rec_id LIKE ? OR 
				certificate_upload2.admin_report LIKE ? OR 
				certificate_upload2.upload_noc LIKE ?
			)";
			$search_params = array(
				"%$text%","%$text%","%$text%","%$text%","%$text%"
			);
			//setting search conditions
			$db->where($search_condition, $search_params);
			 //template to use when ajax search
			$this->view->search_template = "certificate_upload2/search.php";
		}
		if(!empty($request->orderby)){
			$orderby = $request->orderby;
			$ordertype = (!empty($request->ordertype) ? $request->ordertype : ORDER_TYPE);
			$db->orderBy($orderby, $ordertype);
		}
		else{
			$db->orderBy("certificate_upload2.id", ORDER_TYPE);
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
		$page_title = $this->view->page_title = "Certificate Upload2";
		$this->view->report_filename = date('Y-m-d') . '-' . $page_title;
		$this->view->report_title = $page_title;
		$this->view->report_layout = "report_layout.php";
		$this->view->report_paper_size = "A4";
		$this->view->report_orientation = "portrait";
		$this->render_view("certificate_upload2/list.php", $data); //render the full page
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
			"db_name", 
			"rec_id", 
			"admin_report", 
			"upload_noc");
		if($value){
			$db->where($rec_id, urldecode($value)); //select record based on field name
		}
		else{
			$db->where("certificate_upload2.id", $rec_id);; //select record based on primary key
		}
		$record = $db->getOne($tablename, $fields );
		if($record){
			$page_title = $this->view->page_title = "View  Certificate Upload2";
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
		return $this->render_view("certificate_upload2/view.php", $record);
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
			$fields = $this->fields = array("db_name","rec_id","admin_report","upload_noc");
			$postdata = $this->format_request_data($formdata);
			$this->rules_array = array(
				'db_name' => 'required',
				'rec_id' => 'required',
				'admin_report' => 'required',
				'upload_noc' => 'required',
			);
			$this->sanitize_array = array(
				'db_name' => 'sanitize_string',
				'rec_id' => 'sanitize_string',
				'admin_report' => 'sanitize_string',
				'upload_noc' => 'sanitize_string',
			);
			$this->filter_vals = true; //set whether to remove empty fields
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			if($this->validated()){
				$rec_id = $this->rec_id = $db->insert($tablename, $modeldata);
				if($rec_id){
		# Statement to execute after adding record
		// Searching that id in particular table & then update admin_report & upload_noc status
$db->where("id",$modeldata['rec_id']);
$db->update($modeldata['db_name'],["admin_report"=>$modeldata['admin_report'],"upload_noc"=>$modeldata['upload_noc']]);


        // Completed
        $db->where("id",$modeldata['rec_id']);
        $ui=$db->getOne($modeldata['db_name'],"*");
        $db->where("id",$ui['user_id']);
        $ui=$db->getOne("user_info","*"); 
        
                    $names['Commencement Certificate']='CC';
                    $names['Revised Commencement Certificate']='RCC';
                    $names['Part Occupancy Certificate']='POC';
                    $names['Occupancy Certificate']='OC';
$db->where("rec_id",$modeldata['rec_id']);
$db->where("db_name",$modeldata['db_name']);
$typeapi=$db->getOne("application_mapping","*")['appl_type'];
$passtype=$names[$typeapi];

file_get_contents("https://singlewindowsystemkdmc.in/api/progress/".$modeldata['db_name']."/".$ui['username']."/COMPLETE/".urlencode($typeapi));
          

function sendNocToKDMC($appl_no, $noc_type, $pdf_file_path,$ty) {
     $url = "http://180.149.247.55/API/KDMC/get_noc_certificate.php";
     $url = "https://mahavastu.maharashtra.gov.in/API/KDMC/get_noc_certificate.php";

    // Check if file exists
 
file_put_contents("/home1/singlewindowsyst/public_html/uploads/nocs/$noc_type"."_".$appl_no.".pdf",file_get_contents($pdf_file_path));

    // Read and encode file to base64
     $base64_file = base64_encode(file_get_contents($pdf_file_path));

    // Prepare POST data
    $postData = [
        'appl_no'  => $appl_no,
        'noc_type' => $noc_type,
        'type_appl' => $ty,
        'noc_file' => $base64_file,
        'noc_req' => "AP",
    ];

    // Initialize CURL
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Set Basic Auth headers
    curl_setopt($ch, CURLOPT_USERPWD, "bpms:cXmnZK65rf*&DaaD");
    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);

    // Enable form-data POST
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);

    // Execute request
     $response = curl_exec($ch);

    if (curl_errno($ch)) {
       echo $error_msg = curl_error($ch);
        curl_close($ch);
        return ['status' => 'error', 'message' => $error_msg];
    }

    curl_close($ch);
    
    $x=file_get_contents("/home1/singlewindowsyst/public_html/logs/".$appl_no.".txt");
     

    $x.="
TYPE = $noc_type
    
$response";
file_put_contents("/home1/singlewindowsyst/public_html/logs/".$appl_no.".txt",$x);
    // Decode JSON response
    return json_decode($response, true);
} 

if($modeldata['db_name']=="fire_noc_provisional_new"){
    $NAME="FPNOC";
}else{
    $NAME="FFNOC";
}
if($passtype!=""){
    
sendNocToKDMC($ui['username'],$NAME,$modeldata['upload_noc'],$passtype);
}


// Storing that `db_name` value into `$red` variable
$red = $modeldata['db_name'];
		# End of after add statement
					$this->set_flash_msg("Record added successfully", "success");
					return	$this->redirect("$red");
				}
				else{
					$this->set_page_error();
				}
			}
		}
		$page_title = $this->view->page_title = "Add New Certificate Upload2";
		$this->render_view("certificate_upload2/add.php");
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
		$fields = $this->fields = array("id","db_name","rec_id","admin_report","upload_noc");
		if($formdata){
			$postdata = $this->format_request_data($formdata);
			$this->rules_array = array(
				'db_name' => 'required',
				'rec_id' => 'required',
				'admin_report' => 'required',
				'upload_noc' => 'required',
			);
			$this->sanitize_array = array(
				'db_name' => 'sanitize_string',
				'rec_id' => 'sanitize_string',
				'admin_report' => 'sanitize_string',
				'upload_noc' => 'sanitize_string',
			);
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			if($this->validated()){
				$db->where("certificate_upload2.id", $rec_id);;
				$bool = $db->update($tablename, $modeldata);
				$numRows = $db->getRowCount(); //number of affected rows. 0 = no record field updated
				if($bool && $numRows){
					$this->set_flash_msg("Record updated successfully", "success");
					return $this->redirect("certificate_upload2");
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
						return	$this->redirect("certificate_upload2");
					}
				}
			}
		}
		$db->where("certificate_upload2.id", $rec_id);;
		$data = $db->getOne($tablename, $fields);
		$page_title = $this->view->page_title = "Edit  Certificate Upload2";
		if(!$data){
			$this->set_page_error();
		}
		return $this->render_view("certificate_upload2/edit.php", $data);
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
		$db->where("certificate_upload2.id", $arr_rec_id, "in");
		$bool = $db->delete($tablename);
		if($bool){
			$this->set_flash_msg("Record deleted successfully", "success");
		}
		elseif($db->getLastError()){
			$page_error = $db->getLastError();
			$this->set_flash_msg($page_error, "danger");
		}
		return	$this->redirect("certificate_upload2");
	}
}
