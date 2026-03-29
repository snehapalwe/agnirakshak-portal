<?php 

/**
 * SharedController Controller
 * @category  Controller / Model
 */
class SharedController extends BaseController{
	
	/**
     * fire_noc_provisional_new_zone_id_option_list Model Action
     * @return array
     */
	function fire_noc_provisional_new_zone_id_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT id AS value,zone AS label FROM master_zone_ward ORDER BY zone";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * user_info_username_value_exist Model Action
     * @return array
     */
	function user_info_username_value_exist($val){
		$db = $this->GetModel();
		$db->where("username", $val);
		$exist = $db->has("user_info");
		return $exist;
	}

	/**
     * user_info_email_value_exist Model Action
     * @return array
     */
	function user_info_email_value_exist($val){
		$db = $this->GetModel();
		$db->where("email", $val);
		$exist = $db->has("user_info");
		return $exist;
	}

	/**
     * user_info_user_role_id_option_list Model Action
     * @return array
     */
	function user_info_user_role_id_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT role_id AS value, role_name AS label FROM roles";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * floor_details_typical_floor_plan_option_list Model Action
     * @return array
     */
	function floor_details_typical_floor_plan_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT DISTINCT typical_floor_plan AS value, typical_floor_plan AS label FROM typical_floor_plan WHERE recid = ? AND db_name = ?"  ;
		$queryparams = array($_GET['recid'], $_GET['db_name']);
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * floor_details_floor_type_option_list Model Action
     * @return array
     */
	function floor_details_floor_type_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT id AS value,floor_type AS label FROM m_floor_type ORDER BY id ASC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * floor_details_foor_name_id_option_list Model Action
     * @return array
     */
	function floor_details_foor_name_id_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT id AS value,floor AS label FROM m_floor ORDER BY floor ASC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * fire_noc_establishment_establishment_type_id_option_list Model Action
     * @return array
     */
	function fire_noc_establishment_establishment_type_id_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT id AS value,type_name AS label FROM master_establishment_type";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * fire_noc_establishment_zone_id_option_list Model Action
     * @return array
     */
	function fire_noc_establishment_zone_id_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT id AS value,zone AS label FROM master_zone_ward ORDER BY zone";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * hotel_inspection_form_type_of_application_id_option_list Model Action
     * @return array
     */
	function hotel_inspection_form_type_of_application_id_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT id AS value,application_type AS label FROM m_application_type ORDER BY application_type";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * hotel_inspection_form_is_structural_audit_report_avilable_id_option_list Model Action
     * @return array
     */
	function hotel_inspection_form_is_structural_audit_report_avilable_id_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT id AS value,type AS label FROM master_yes_no";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * hotel_inspection_form_is_electrical_audit_report_available_id_option_list Model Action
     * @return array
     */
	function hotel_inspection_form_is_electrical_audit_report_available_id_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT id AS value,type AS label FROM master_yes_no";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * industrial_factory_inspection_form_type_of_application_id_option_list Model Action
     * @return array
     */
	function industrial_factory_inspection_form_type_of_application_id_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT id AS value,application_type AS label FROM m_application_type ORDER BY application_type";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * industrial_factory_inspection_form_building_type_option_list Model Action
     * @return array
     */
	function industrial_factory_inspection_form_building_type_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT building_type AS value,building_type AS label FROM m_building_type ORDER BY building_type ASC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * school_college_coaching_inspection_form_is_electrical_audit_report_option_list Model Action
     * @return array
     */
	function school_college_coaching_inspection_form_is_electrical_audit_report_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT id AS value,type AS label FROM master_yes_no";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * mall_cinema_inspection_form_type_of_application_id_option_list Model Action
     * @return array
     */
	function mall_cinema_inspection_form_type_of_application_id_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT id AS value,application_type AS label FROM m_application_type ORDER BY application_type";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * mall_cinema_inspection_form_building_type_option_list Model Action
     * @return array
     */
	function mall_cinema_inspection_form_building_type_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT building_type AS value,building_type AS label FROM m_building_type ORDER BY building_type ASC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * other_establishment_inspection_form_type_of_application_id_option_list Model Action
     * @return array
     */
	function other_establishment_inspection_form_type_of_application_id_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT id AS value,application_type AS label FROM m_application_type ORDER BY application_type";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * other_establishment_inspection_form_building_type_option_list Model Action
     * @return array
     */
	function other_establishment_inspection_form_building_type_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT building_type AS value,building_type AS label FROM m_building_type ORDER BY building_type ASC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * fire_final_noc_zone_id_option_list Model Action
     * @return array
     */
	function fire_final_noc_zone_id_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT id AS value,zone AS label FROM master_zone_ward ORDER BY zone";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * fire_final_noc_renewal_zone_id_option_list Model Action
     * @return array
     */
	function fire_final_noc_renewal_zone_id_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT id AS value,zone AS label FROM master_zone_ward ORDER BY zone"
;
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * fire_final_part_noc_zone_id_option_list Model Action
     * @return array
     */
	function fire_final_part_noc_zone_id_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT id AS value,zone AS label FROM master_zone_ward ORDER BY zone";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * fire_noc_revised_provisional_zone_id_option_list Model Action
     * @return array
     */
	function fire_noc_revised_provisional_zone_id_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT id AS value,zone AS label FROM master_zone_ward ORDER BY zone";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * bhuilding_details_for_fire_noc_building_type_id_option_list Model Action
     * @return array
     */
	function bhuilding_details_for_fire_noc_building_type_id_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT id AS value,building_type AS label FROM m_building_type ORDER BY building_type ASC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * authorization_sequence_user_id_option_list Model Action
     * @return array
     */
	function authorization_sequence_user_id_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT id AS value,username AS label FROM user_info ORDER BY id ASC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * authorization_sequence_zone_option_list Model Action
     * @return array
     */
	function authorization_sequence_zone_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT id AS value,zone AS label FROM master_zone_ward ORDER BY id ASC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * typical_floor_plan_foor_name_id_option_list Model Action
     * @return array
     */
	function typical_floor_plan_foor_name_id_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT id AS value,floor AS label FROM m_floor ORDER BY id ASC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * typical_floor_plan_floor_type_option_list Model Action
     * @return array
     */
	function typical_floor_plan_floor_type_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT id AS value,floor_type AS label FROM m_floor_type WHERE floor_type!='' ORDER BY id ASC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * getcount_firenocestablishmentapplicationscount Model Action
     * @return Value
     */
	function getcount_firenocestablishmentapplicationscount(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM fire_noc_establishment WHERE status != '0'";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_provisionalfirenocapplicationscount Model Action
     * @return Value
     */
	function getcount_provisionalfirenocapplicationscount(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM fire_noc_provisional_new  WHERE status != '0'";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_revisedprovisionalfirenocapplicationscount Model Action
     * @return Value
     */
	function getcount_revisedprovisionalfirenocapplicationscount(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM fire_noc_revised_provisional  WHERE status != '0'";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_firefinalpartnocapplicationscount Model Action
     * @return Value
     */
	function getcount_firefinalpartnocapplicationscount(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM fire_final_part_noc  WHERE status != '0'";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_firefinalnocapplicationscount Model Action
     * @return Value
     */
	function getcount_firefinalnocapplicationscount(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM fire_final_noc  WHERE status != '0'";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_firefinalnocrenewalapplicationscount Model Action
     * @return Value
     */
	function getcount_firefinalnocrenewalapplicationscount(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM fire_final_noc_renewal  WHERE status != '0'";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
	* piechart_firenocestablishmentstatuschart Model Action
	* @return array
	*/
	function piechart_firenocestablishmentstatuschart(){
		
		$db = $this->GetModel();
		$chart_data = array(
			"labels"=> array(),
			"datasets"=> array(),
		);
		
		//set query result for dataset 1
		$sqltext = "SELECT count(*) AS num, status FROM fire_noc_establishment GROUP BY status";
		$queryparams = null;
		$dataset1 = $db->rawQuery($sqltext, $queryparams);
		$dataset_data =  array_column($dataset1, 'num');
		$dataset_labels =  array_column($dataset1, 'status');
		$chart_data["labels"] = array_unique(array_merge($chart_data["labels"], $dataset_labels));
		$chart_data["datasets"][] = $dataset_data;

		return $chart_data;
	}

	/**
	* piechart_provisionalfirenocstatuschart Model Action
	* @return array
	*/
	function piechart_provisionalfirenocstatuschart(){
		
		$db = $this->GetModel();
		$chart_data = array(
			"labels"=> array(),
			"datasets"=> array(),
		);
		
		//set query result for dataset 1
		$sqltext = "SELECT count(*) AS num, status FROM fire_noc_provisional_new GROUP BY status";
		$queryparams = null;
		$dataset1 = $db->rawQuery($sqltext, $queryparams);
		$dataset_data =  array_column($dataset1, 'num');
		$dataset_labels =  array_column($dataset1, 'status');
		$chart_data["labels"] = array_unique(array_merge($chart_data["labels"], $dataset_labels));
		$chart_data["datasets"][] = $dataset_data;

		return $chart_data;
	}

	/**
	* piechart_revisedprovisionalfirenocstatuschart Model Action
	* @return array
	*/
	function piechart_revisedprovisionalfirenocstatuschart(){
		
		$db = $this->GetModel();
		$chart_data = array(
			"labels"=> array(),
			"datasets"=> array(),
		);
		
		//set query result for dataset 1
		$sqltext = "SELECT count(*) AS num, status FROM fire_noc_revised_provisional GROUP BY status";
		$queryparams = null;
		$dataset1 = $db->rawQuery($sqltext, $queryparams);
		$dataset_data =  array_column($dataset1, 'num');
		$dataset_labels =  array_column($dataset1, 'status');
		$chart_data["labels"] = array_unique(array_merge($chart_data["labels"], $dataset_labels));
		$chart_data["datasets"][] = $dataset_data;

		return $chart_data;
	}

	/**
	* piechart_firefinalpartnocstatuschart Model Action
	* @return array
	*/
	function piechart_firefinalpartnocstatuschart(){
		
		$db = $this->GetModel();
		$chart_data = array(
			"labels"=> array(),
			"datasets"=> array(),
		);
		
		//set query result for dataset 1
		$sqltext = "SELECT count(*) AS num, status FROM fire_final_part_noc GROUP BY status";
		$queryparams = null;
		$dataset1 = $db->rawQuery($sqltext, $queryparams);
		$dataset_data =  array_column($dataset1, 'num');
		$dataset_labels =  array_column($dataset1, 'status');
		$chart_data["labels"] = array_unique(array_merge($chart_data["labels"], $dataset_labels));
		$chart_data["datasets"][] = $dataset_data;

		return $chart_data;
	}

	/**
	* piechart_firefinalnocstatuschart Model Action
	* @return array
	*/
	function piechart_firefinalnocstatuschart(){
		
		$db = $this->GetModel();
		$chart_data = array(
			"labels"=> array(),
			"datasets"=> array(),
		);
		
		//set query result for dataset 1
		$sqltext = "SELECT count(*) AS num, status FROM fire_final_noc GROUP BY status";
		$queryparams = null;
		$dataset1 = $db->rawQuery($sqltext, $queryparams);
		$dataset_data =  array_column($dataset1, 'num');
		$dataset_labels =  array_column($dataset1, 'status');
		$chart_data["labels"] = array_unique(array_merge($chart_data["labels"], $dataset_labels));
		$chart_data["datasets"][] = $dataset_data;

		return $chart_data;
	}

	/**
	* piechart_renewaloffirefinalnocstatuschart Model Action
	* @return array
	*/
	function piechart_renewaloffirefinalnocstatuschart(){
		
		$db = $this->GetModel();
		$chart_data = array(
			"labels"=> array(),
			"datasets"=> array(),
		);
		
		//set query result for dataset 1
		$sqltext = "SELECT count(*) AS num, status FROM fire_final_noc_renewal GROUP BY status";
		$queryparams = null;
		$dataset1 = $db->rawQuery($sqltext, $queryparams);
		$dataset_data =  array_column($dataset1, 'num');
		$dataset_labels =  array_column($dataset1, 'status');
		$chart_data["labels"] = array_unique(array_merge($chart_data["labels"], $dataset_labels));
		$chart_data["datasets"][] = $dataset_data;

		return $chart_data;
	}

}
