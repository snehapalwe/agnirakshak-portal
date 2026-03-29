<?php 
/**
 * Architecture_oc_noc_buidling_info_first Page Controller
 * @category  Controller
 */
class Architecture_oc_noc_buidling_info_firstController extends SecureController{
	function __construct(){
		parent::__construct();
		$this->tablename = "architecture_oc_noc_buidling_info_first";
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
			"building_name", 
			"building_address", 
			"plot_no_or_cts_no", 
			"name_of_architect_builder_developer", 
			"noc_particulars", 
			"noc_particulars_first_noc_no", 
			"noc_particulars_first_noc_date", 
			"noc_particulars_amendment_no_one", 
			"noc_particulars_amendment_date_one", 
			"noc_particulars_amendment_no_two", 
			"noc_particulars_amendment_date_two", 
			"noc_particulars_amendment_no_three", 
			"noc_particulars_amendment_date_three", 
			"composition_of_the_building", 
			"type_of_occupancy", 
			"user_id", 
			"date");
		$pagination = $this->get_pagination(MAX_RECORD_COUNT); // get current pagination e.g array(page_number, page_limit)
		//search table record
		if(!empty($request->search)){
			$text = trim($request->search); 
			$search_condition = "(
				architecture_oc_noc_buidling_info_first.id LIKE ? OR 
				architecture_oc_noc_buidling_info_first.building_name LIKE ? OR 
				architecture_oc_noc_buidling_info_first.building_address LIKE ? OR 
				architecture_oc_noc_buidling_info_first.plot_no_or_cts_no LIKE ? OR 
				architecture_oc_noc_buidling_info_first.name_of_architect_builder_developer LIKE ? OR 
				architecture_oc_noc_buidling_info_first.noc_particulars LIKE ? OR 
				architecture_oc_noc_buidling_info_first.noc_particulars_first_noc_no LIKE ? OR 
				architecture_oc_noc_buidling_info_first.noc_particulars_first_noc_date LIKE ? OR 
				architecture_oc_noc_buidling_info_first.noc_particulars_amendment_no_one LIKE ? OR 
				architecture_oc_noc_buidling_info_first.noc_particulars_amendment_date_one LIKE ? OR 
				architecture_oc_noc_buidling_info_first.noc_particulars_amendment_no_two LIKE ? OR 
				architecture_oc_noc_buidling_info_first.noc_particulars_amendment_date_two LIKE ? OR 
				architecture_oc_noc_buidling_info_first.noc_particulars_amendment_no_three LIKE ? OR 
				architecture_oc_noc_buidling_info_first.noc_particulars_amendment_date_three LIKE ? OR 
				architecture_oc_noc_buidling_info_first.composition_of_the_building LIKE ? OR 
				architecture_oc_noc_buidling_info_first.type_of_occupancy LIKE ? OR 
				architecture_oc_noc_buidling_info_first.user_id LIKE ? OR 
				architecture_oc_noc_buidling_info_first.date LIKE ? OR 
				architecture_oc_noc_buidling_info_first.rec_id LIKE ? OR 
				architecture_oc_noc_buidling_info_first.status LIKE ? OR 
				architecture_oc_noc_buidling_info_first.paid LIKE ? OR 
				architecture_oc_noc_buidling_info_first.int_no LIKE ? OR 
				architecture_oc_noc_buidling_info_first.yr LIKE ? OR 
				architecture_oc_noc_buidling_info_first.zone LIKE ? OR 
				architecture_oc_noc_buidling_info_first.payment_done LIKE ? OR 
				architecture_oc_noc_buidling_info_first.certificate_file LIKE ? OR 
				architecture_oc_noc_buidling_info_first.timestamp LIKE ?
			)";
			$search_params = array(
				"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
			);
			//setting search conditions
			$db->where($search_condition, $search_params);
			 //template to use when ajax search
			$this->view->search_template = "architecture_oc_noc_buidling_info_first/search.php";
		}
		if(!empty($request->orderby)){
			$orderby = $request->orderby;
			$ordertype = (!empty($request->ordertype) ? $request->ordertype : ORDER_TYPE);
			$db->orderBy($orderby, $ordertype);
		}
		else{
			$db->orderBy("architecture_oc_noc_buidling_info_first.id", ORDER_TYPE);
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
		$page_title = $this->view->page_title = "Architecture Oc Noc Buidling Info First";
		$this->render_view("architecture_oc_noc_buidling_info_first/list.php", $data); //render the full page
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
			"building_name", 
			"building_address", 
			"plot_no_or_cts_no", 
			"name_of_architect_builder_developer", 
			"noc_particulars", 
			"noc_particulars_first_noc_no", 
			"noc_particulars_first_noc_date", 
			"noc_particulars_amendment_no_one", 
			"noc_particulars_amendment_date_one", 
			"noc_particulars_amendment_no_two", 
			"noc_particulars_amendment_date_two", 
			"noc_particulars_amendment_no_three", 
			"noc_particulars_amendment_date_three", 
			"composition_of_the_building", 
			"type_of_occupancy", 
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
			$db->where("architecture_oc_noc_buidling_info_first.id", $rec_id);; //select record based on primary key
		}
		$record = $db->getOne($tablename, $fields );
		if($record){
			$page_title = $this->view->page_title = "View  Architecture Oc Noc Buidling Info First";
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
		return $this->render_view("architecture_oc_noc_buidling_info_first/view.php", $record);
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
			$fields = $this->fields = array("building_name","building_address","plot_no_or_cts_no","name_of_architect_builder_developer","noc_particulars","noc_particulars_first_noc_no","noc_particulars_first_noc_date","noc_particulars_amendment_no_one","noc_particulars_amendment_date_one","noc_particulars_amendment_no_two","noc_particulars_amendment_date_two","noc_particulars_amendment_no_three","noc_particulars_amendment_date_three","composition_of_the_building","type_of_occupancy","user_id","date","rec_id");
			$postdata = $this->format_request_data($formdata);
			$this->rules_array = array(
				'building_name' => 'required',
				'building_address' => 'required',
				'plot_no_or_cts_no' => 'required',
				'name_of_architect_builder_developer' => 'required',
				'noc_particulars' => 'required',
				'noc_particulars_first_noc_no' => 'required',
				'noc_particulars_first_noc_date' => 'required',
				'noc_particulars_amendment_no_one' => 'required',
				'noc_particulars_amendment_date_one' => 'required',
				'noc_particulars_amendment_no_two' => 'required',
				'noc_particulars_amendment_date_two' => 'required',
				'noc_particulars_amendment_no_three' => 'required',
				'noc_particulars_amendment_date_three' => 'required',
				'composition_of_the_building' => 'required',
				'type_of_occupancy' => 'required',
			);
			$this->sanitize_array = array(
				'building_name' => 'sanitize_string',
				'building_address' => 'sanitize_string',
				'plot_no_or_cts_no' => 'sanitize_string',
				'name_of_architect_builder_developer' => 'sanitize_string',
				'noc_particulars' => 'sanitize_string',
				'noc_particulars_first_noc_no' => 'sanitize_string',
				'noc_particulars_first_noc_date' => 'sanitize_string',
				'noc_particulars_amendment_no_one' => 'sanitize_string',
				'noc_particulars_amendment_date_one' => 'sanitize_string',
				'noc_particulars_amendment_no_two' => 'sanitize_string',
				'noc_particulars_amendment_date_two' => 'sanitize_string',
				'noc_particulars_amendment_no_three' => 'sanitize_string',
				'noc_particulars_amendment_date_three' => 'sanitize_string',
				'composition_of_the_building' => 'sanitize_string',
				'type_of_occupancy' => 'sanitize_string',
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
					return	$this->redirect("architecture_oc_noc_buidling_info_first");
				}
				else{
					$this->set_page_error();
				}
			}
		}
		$page_title = $this->view->page_title = "Add New Architecture Oc Noc Buidling Info First";
		$this->render_view("architecture_oc_noc_buidling_info_first/add.php");
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
		$fields = $this->fields = array("id","building_name","building_address","plot_no_or_cts_no","name_of_architect_builder_developer","noc_particulars","noc_particulars_first_noc_no","noc_particulars_first_noc_date","noc_particulars_amendment_no_one","noc_particulars_amendment_date_one","noc_particulars_amendment_no_two","noc_particulars_amendment_date_two","noc_particulars_amendment_no_three","noc_particulars_amendment_date_three","composition_of_the_building","type_of_occupancy","user_id","date","rec_id");
		if($formdata){
			$postdata = $this->format_request_data($formdata);
			$this->rules_array = array(
				'building_name' => 'required',
				'building_address' => 'required',
				'plot_no_or_cts_no' => 'required',
				'name_of_architect_builder_developer' => 'required',
				'noc_particulars' => 'required',
				'noc_particulars_first_noc_no' => 'required',
				'noc_particulars_first_noc_date' => 'required',
				'noc_particulars_amendment_no_one' => 'required',
				'noc_particulars_amendment_date_one' => 'required',
				'noc_particulars_amendment_no_two' => 'required',
				'noc_particulars_amendment_date_two' => 'required',
				'noc_particulars_amendment_no_three' => 'required',
				'noc_particulars_amendment_date_three' => 'required',
				'composition_of_the_building' => 'required',
				'type_of_occupancy' => 'required',
			);
			$this->sanitize_array = array(
				'building_name' => 'sanitize_string',
				'building_address' => 'sanitize_string',
				'plot_no_or_cts_no' => 'sanitize_string',
				'name_of_architect_builder_developer' => 'sanitize_string',
				'noc_particulars' => 'sanitize_string',
				'noc_particulars_first_noc_no' => 'sanitize_string',
				'noc_particulars_first_noc_date' => 'sanitize_string',
				'noc_particulars_amendment_no_one' => 'sanitize_string',
				'noc_particulars_amendment_date_one' => 'sanitize_string',
				'noc_particulars_amendment_no_two' => 'sanitize_string',
				'noc_particulars_amendment_date_two' => 'sanitize_string',
				'noc_particulars_amendment_no_three' => 'sanitize_string',
				'noc_particulars_amendment_date_three' => 'sanitize_string',
				'composition_of_the_building' => 'sanitize_string',
				'type_of_occupancy' => 'sanitize_string',
			);
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			$modeldata['user_id'] = USER_ID;
$modeldata['date'] = date_now();
$modeldata['rec_id'] = "0";
			if($this->validated()){
				$db->where("architecture_oc_noc_buidling_info_first.id", $rec_id);;
				$bool = $db->update($tablename, $modeldata);
				$numRows = $db->getRowCount(); //number of affected rows. 0 = no record field updated
				if($bool && $numRows){
					$this->set_flash_msg("Record updated successfully", "success");
					return $this->redirect("architecture_oc_noc_buidling_info_first");
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
						return	$this->redirect("architecture_oc_noc_buidling_info_first");
					}
				}
			}
		}
		$db->where("architecture_oc_noc_buidling_info_first.id", $rec_id);;
		$data = $db->getOne($tablename, $fields);
		$page_title = $this->view->page_title = "Edit  Architecture Oc Noc Buidling Info First";
		if(!$data){
			$this->set_page_error();
		}
		return $this->render_view("architecture_oc_noc_buidling_info_first/edit.php", $data);
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
		$db->where("architecture_oc_noc_buidling_info_first.id", $arr_rec_id, "in");
		$bool = $db->delete($tablename);
		if($bool){
			$this->set_flash_msg("Record deleted successfully", "success");
		}
		elseif($db->getLastError()){
			$page_error = $db->getLastError();
			$this->set_flash_msg($page_error, "danger");
		}
		return	$this->redirect("architecture_oc_noc_buidling_info_first");
	}
}
