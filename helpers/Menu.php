<?php
/**
 * Menu Items
 * All Project Menu
 * @category  Menu List
 */

class Menu{
	
	
			public static $navbarsideleft = array(
		array(
			'path' => 'home', 
			'label' => 'Home', 
			'icon' => ''
		),
		
		array(
			'path' => 'api/offlineredirect', 
			'label' => 'Process Offline Applications', 
			'icon' => ''
		),
		array(
			'path' => 'fire_noc_provisional_new/mis_report', 
			'label' => 'Mis Report', 
			'icon' => '',
'submenu' => array(
		array(
			'path' => 'fire_noc_establishment/mis_report', 
			'label' => 'Fire NOC Establishment', 
			'icon' => ''
		),
		
		array(
			'path' => 'fire_noc_provisional_new/mis_report', 
			'label' => 'Fire NOC Provisional New', 
			'icon' => ''
		),
		
		array(
			'path' => 'fire_noc_revised_provisional/mis_report', 
			'label' => 'Fire NOC Revised Provisional', 
			'icon' => ''
		),
		
		array(
			'path' => 'fire_final_noc/mis_report', 
			'label' => 'Fire Final NOC', 
			'icon' => ''
		),
		
		array(
			'path' => 'fire_final_part_noc/mis_report', 
			'label' => 'Fire Final Part NOC', 
			'icon' => ''
		),
		
		array(
			'path' => 'fire_final_noc_renewal/mis_report', 
			'label' => 'Fial NOC Renewal', 
			'icon' => ''
		)
	)
		),
		
		array(
			'path' => 'fire_noc_establishment', 
			'label' => 'Fire Noc Application for Establishments / आस्थापनांकरिता फायर ना-हरकत दाखला अर्ज', 
			'icon' => ''
		),
		
		array(
			'path' => 'fire_noc_provisional_new', 
			'label' => 'Provisional Fire NOC / तात्पुरता अग्निशमन ना-हरकत दाखला', 
			'icon' => ''
		),
		
		array(
			'path' => 'fire_noc_revised_provisional', 
			'label' => 'Revised Provisional Fire NOC  / सुधारित तात्पुरती अग्निशमन ना हरकत प्रमाणपत्र', 
			'icon' => ''
		),
		
		array(
			'path' => 'fire_final_part_noc', 
			'label' => 'Fire Final Part NOC / फायर फायनल पार्ट ना हरकत दाखला', 
			'icon' => ''
		),
		
		array(
			'path' => 'fire_final_noc', 
			'label' => 'Fire Final NOC / अंतिम फायर ना हरकत दाखला', 
			'icon' => ''
		),
		
		array(
			'path' => 'fire_final_noc_renewal', 
			'label' => 'Renewal of Fire Final NOC / अंतिम फायर ना हरकत दाखला नुतनीकरण', 
			'icon' => ''
		),
		
		array(
			'path' => 'demand/challan', 
			'label' => 'Challan Report', 
			'icon' => ''
		),
		array(
			'path' => 'demand/detailed_challan', 
			'label' => 'Detailed Challan Report', 
			'icon' => ''
		),
		
		array(
			'path' => 'user_info', 
			'label' => 'User Info', 
			'icon' => ''
		),
		
		array(
			'path' => 'role_permissions', 
			'label' => 'Role Permissions', 
			'icon' => ''
		),
		
		array(
			'path' => 'roles', 
			'label' => 'Roles', 
			'icon' => ''
		),
		
		array(
			'path' => 'role_permissions', 
			'label' => 'Floor Details', 
			'icon' => ''
		),
		
		array(
			'path' => 'role_permissions', 
			'label' => 'Masters', 
			'icon' => '',
'submenu' => array(
		array(
			'path' => 'master_yes_no', 
			'label' => 'Master Yes No', 
			'icon' => ''
		),
		
		array(
			'path' => 'master_zone_ward', 
			'label' => 'Master Zone Ward', 
			'icon' => ''
		),
		
		array(
			'path' => 'm_application_type', 
			'label' => 'M Application Type', 
			'icon' => ''
		),
		
		array(
			'path' => 'master_establishment_type', 
			'label' => 'Master Establishment Type', 
			'icon' => ''
		),
		
		array(
			'path' => 'm_lift', 
			'label' => 'M Lift', 
			'icon' => ''
		),
		
		array(
			'path' => 'm_staircase', 
			'label' => 'M Staircase', 
			'icon' => ''
		),
		
		array(
			'path' => 'm_floor', 
			'label' => 'M Floor', 
			'icon' => ''
		),
		
		array(
			'path' => 'm_building_type', 
			'label' => 'M Building Type', 
			'icon' => ''
		),
		
		array(
			'path' => 'm_floor_type', 
			'label' => 'M Floor Type', 
			'icon' => ''
		)
	)
		),
		
// 		array(
// 			'path' => 'application_prefix', 
// 			'label' => 'Application Prefix', 
// 			'icon' => ''
// 		),
		
// 		array(
// 			'path' => 'expiry_services', 
// 			'label' => 'Expiry Services', 
// 			'icon' => ''
// 		),
		
// 		array(
// 			'path' => 'corresponding_values', 
// 			'label' => 'Corresponding Values', 
// 			'icon' => ''
// 		),
		
// 		array(
// 			'path' => 'demand', 
// 			'label' => 'Demand', 
// 			'icon' => ''
// 		),
		
// 		array(
// 			'path' => 'payments', 
// 			'label' => 'Payments', 
// 			'icon' => ''
// 		),
		
// 		array(
// 			'path' => 'role_permissions', 
// 			'label' => 'Bhuilding Details For Fire Noc', 
// 			'icon' => ''
// 		),
		
// 		array(
// 			'path' => 'accept_reject', 
// 			'label' => 'Accept Reject', 
// 			'icon' => ''
// 		),
		
// 		array(
// 			'path' => 'authorization_sequence', 
// 			'label' => 'Authorization Sequence', 
// 			'icon' => ''
// 		),
		
// 		array(
// 			'path' => 'certificate_upload', 
// 			'label' => 'Certificate Upload', 
// 			'icon' => ''
// 		),
		
// 		array(
// 			'path' => 'survey_visit', 
// 			'label' => 'Survey Visit', 
// 			'icon' => ''
// 		),
		
// 		array(
// 			'path' => 'certificate_upload2', 
// 			'label' => 'Certificate Upload2', 
// 			'icon' => ''
// 		),
		
// 		array(
// 			'path' => 'm_building_type', 
// 			'label' => 'M Building Type', 
// 			'icon' => ''
// 		),
		
// 		array(
// 			'path' => 'report_header_footer', 
// 			'label' => 'Report Header Footer', 
// 			'icon' => ''
// 		),
		
// 		array(
// 			'path' => 'typical_floor_plan', 
// 			'label' => 'Typical Floor Plan', 
// 			'icon' => ''
// 		),
		
// 		array(
// 			'path' => 'lift_details', 
// 			'label' => 'Lift Details', 
// 			'icon' => ''
// 		),
		
// 		array(
// 			'path' => 'staircase_details', 
// 			'label' => 'Staircase Details', 
// 			'icon' => ''
// 		)
	);
		
	
	
			public static $is_redevelopment = array(
		array(
			"value" => "YES", 
			"label" => "YES", 
		),
		array(
			"value" => "NO", 
			"label" => "NO", 
		),);
		
			public static $application_type = array(
		array(
			"value" => "NEW", 
			"label" => "NEW", 
		),
		array(
			"value" => "RENEWAL", 
			"label" => "RENEWAL", 
		),);
		
			public static $do_you_want_to_add_more_property = array(
		array(
			"value" => "Yes", 
			"label" => "Yes", 
		),
		array(
			"value" => "No", 
			"label" => "No", 
		),);
		
			public static $yr = array(
		array(
			"value" => "1", 
			"label" => "Confirm Application", 
		),);
		
			public static $payment_type = array(
		array(
			"value" => "DD", 
			"label" => "DD", 
		),);
		
			public static $action = array(
		array(
			"value" => "Accept", 
			"label" => "Accept", 
		),
		array(
			"value" => "Reject", 
			"label" => "Reject", 
		),
		array(
			"value" => "Revert", 
			"label" => "Revert", 
		),);
		
			public static $sendbackto = array(
		array(
			"value" => "Reverted", 
			"label" => "Architect", 
		),
		array(
			"value" => "1", 
			"label" => "Auth1", 
		),
		array(
			"value" => "2", 
			"label" => "Auth2", 
		),);
		
			public static $db_name = array(
		array(
			"value" => "fire_noc_provisional_new", 
			"label" => "fire_noc_provisional_new", 
		),
		array(
			"value" => "fire_noc_revised_provisional", 
			"label" => "fire_noc_revised_provisional", 
		),
		array(
			"value" => "fire_final_part_noc", 
			"label" => "fire_final_part_noc", 
		),
		array(
			"value" => "fire_final_noc", 
			"label" => "fire_final_noc", 
		),
		array(
			"value" => "fire_final_noc_renewal", 
			"label" => "fire_final_noc_renewal", 
		),
		array(
			"value" => "fire_noc_establishment", 
			"label" => "fire_noc_establishment", 
		),);
		
}