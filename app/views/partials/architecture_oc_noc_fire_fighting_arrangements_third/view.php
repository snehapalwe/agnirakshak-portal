<?php 
//check if current user role is allowed access to the pages
$can_add = ACL::is_allowed("architecture_oc_noc_fire_fighting_arrangements_third/add");
$can_edit = ACL::is_allowed("architecture_oc_noc_fire_fighting_arrangements_third/edit");
$can_view = ACL::is_allowed("architecture_oc_noc_fire_fighting_arrangements_third/view");
$can_delete = ACL::is_allowed("architecture_oc_noc_fire_fighting_arrangements_third/delete");
?>
<?php
$comp_model = new SharedController;
$page_element_id = "view-page-" . random_str();
$current_page = $this->set_current_page_link();
$csrf_token = Csrf::$token;
//Page Data Information from Controller
$data = $this->view_data;
//$rec_id = $data['__tableprimarykey'];
$page_id = $this->route->page_id; //Page id from url
$view_title = $this->view_title;
$show_header = $this->show_header;
$show_edit_btn = $this->show_edit_btn;
$show_delete_btn = $this->show_delete_btn;
$show_export_btn = $this->show_export_btn;
?>
<section class="page" id="<?php echo $page_element_id; ?>" data-page-type="view"  data-display-type="table" data-page-url="<?php print_link($current_page); ?>">
    <?php
    if( $show_header == true ){
    ?>
    <div  class="bg-light p-3 mb-3">
        <div class="container">
            <div class="row ">
                <div class="col ">
                    <h4 class="record-title">View  Architecture Oc Noc Fire Fighting Arrangements Third</h4>
                </div>
            </div>
        </div>
    </div>
    <?php
    }
    ?>
    <div  class="">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 comp-grid">
                    <?php $this :: display_page_errors(); ?>
                    <div  class="card animated fadeIn page-content">
                        <?php
                        $counter = 0;
                        if(!empty($data)){
                        $rec_id = (!empty($data['id']) ? urlencode($data['id']) : null);
                        $counter++;
                        ?>
                        <div id="page-report-body" class="">
                            <table class="table table-hover table-borderless table-striped">
                                <!-- Table Body Start -->
                                <tbody class="page-data" id="page-data-<?php echo $page_element_id; ?>">
                                    <tr  class="td-id">
                                        <th class="title"> Id: </th>
                                        <td class="value"> <?php echo $data['id']; ?></td>
                                    </tr>
                                    <tr  class="td-ug_water_tank_for_fire_as_per_noc">
                                        <th class="title"> Ug Water Tank For Fire As Per Noc: </th>
                                        <td class="value"> <?php echo $data['ug_water_tank_for_fire_as_per_noc']; ?></td>
                                    </tr>
                                    <tr  class="td-is_ug_water_tank_photo_attached_id">
                                        <th class="title"> Is Ug Water Tank Photo Attached Id: </th>
                                        <td class="value"> <?php echo $data['is_ug_water_tank_photo_attached_id']; ?></td>
                                    </tr>
                                    <tr  class="td-is_ug_water_tank_photo_attached_value">
                                        <th class="title"> Is Ug Water Tank Photo Attached Value: </th>
                                        <td class="value"> <?php echo $data['is_ug_water_tank_photo_attached_value']; ?></td>
                                    </tr>
                                    <tr  class="td-upload_ug_water_tank_photo">
                                        <th class="title"> Upload Ug Water Tank Photo: </th>
                                        <td class="value"> <?php echo $data['upload_ug_water_tank_photo']; ?></td>
                                    </tr>
                                    <tr  class="td-officer_remark_on_ug_water_tank">
                                        <th class="title"> Officer Remark On Ug Water Tank: </th>
                                        <td class="value"> <?php echo $data['officer_remark_on_ug_water_tank']; ?></td>
                                    </tr>
                                    <tr  class="td-overhead_water_storage_as_per_noc">
                                        <th class="title"> Overhead Water Storage As Per Noc: </th>
                                        <td class="value"> <?php echo $data['overhead_water_storage_as_per_noc']; ?></td>
                                    </tr>
                                    <tr  class="td-is_overhead_water_storage_as_per_noc_photo_attached_id">
                                        <th class="title"> Is Overhead Water Storage As Per Noc Photo Attached Id: </th>
                                        <td class="value"> <?php echo $data['is_overhead_water_storage_as_per_noc_photo_attached_id']; ?></td>
                                    </tr>
                                    <tr  class="td-is_overhead_water_storage_as_per_noc_photo_attached_value">
                                        <th class="title"> Is Overhead Water Storage As Per Noc Photo Attached Value: </th>
                                        <td class="value"> <?php echo $data['is_overhead_water_storage_as_per_noc_photo_attached_value']; ?></td>
                                    </tr>
                                    <tr  class="td-upload_overhead_water_storage_photo">
                                        <th class="title"> Upload Overhead Water Storage Photo: </th>
                                        <td class="value"> <?php echo $data['upload_overhead_water_storage_photo']; ?></td>
                                    </tr>
                                    <tr  class="td-officer_remark_on_overhead_water_storage">
                                        <th class="title"> Officer Remark On Overhead Water Storage: </th>
                                        <td class="value"> <?php echo $data['officer_remark_on_overhead_water_storage']; ?></td>
                                    </tr>
                                    <tr  class="td-wet_riser_or_down_comer">
                                        <th class="title"> Wet Riser Or Down Comer: </th>
                                        <td class="value"> <?php echo $data['wet_riser_or_down_comer']; ?></td>
                                    </tr>
                                    <tr  class="td-is_wet_riser_or_down_comer_photo_attached_id">
                                        <th class="title"> Is Wet Riser Or Down Comer Photo Attached Id: </th>
                                        <td class="value"> <?php echo $data['is_wet_riser_or_down_comer_photo_attached_id']; ?></td>
                                    </tr>
                                    <tr  class="td-is_wet_riser_or_down_comer_photo_attached_value">
                                        <th class="title"> Is Wet Riser Or Down Comer Photo Attached Value: </th>
                                        <td class="value"> <?php echo $data['is_wet_riser_or_down_comer_photo_attached_value']; ?></td>
                                    </tr>
                                    <tr  class="td-upload_wet_riser_or_down_comer_photo">
                                        <th class="title"> Upload Wet Riser Or Down Comer Photo: </th>
                                        <td class="value"> <?php echo $data['upload_wet_riser_or_down_comer_photo']; ?></td>
                                    </tr>
                                    <tr  class="td-officer_remark_on_wet_riser_or_down_comer">
                                        <th class="title"> Officer Remark On Wet Riser Or Down Comer: </th>
                                        <td class="value"> <?php echo $data['officer_remark_on_wet_riser_or_down_comer']; ?></td>
                                    </tr>
                                    <tr  class="td-automatic_sprinklers">
                                        <th class="title"> Automatic Sprinklers: </th>
                                        <td class="value"> <?php echo $data['automatic_sprinklers']; ?></td>
                                    </tr>
                                    <tr  class="td-is_automatic_sprinklers_photo_attached_id">
                                        <th class="title"> Is Automatic Sprinklers Photo Attached Id: </th>
                                        <td class="value"> <?php echo $data['is_automatic_sprinklers_photo_attached_id']; ?></td>
                                    </tr>
                                    <tr  class="td-is_automatic_sprinklers_photo_attached_value">
                                        <th class="title"> Is Automatic Sprinklers Photo Attached Value: </th>
                                        <td class="value"> <?php echo $data['is_automatic_sprinklers_photo_attached_value']; ?></td>
                                    </tr>
                                    <tr  class="td-upload_automatic_sprinklers_photo">
                                        <th class="title"> Upload Automatic Sprinklers Photo: </th>
                                        <td class="value"> <?php echo $data['upload_automatic_sprinklers_photo']; ?></td>
                                    </tr>
                                    <tr  class="td-officer_remark_on_automatic_sprinklers">
                                        <th class="title"> Officer Remark On Automatic Sprinklers: </th>
                                        <td class="value"> <?php echo $data['officer_remark_on_automatic_sprinklers']; ?></td>
                                    </tr>
                                    <tr  class="td-drenchers">
                                        <th class="title"> Drenchers: </th>
                                        <td class="value"> <?php echo $data['drenchers']; ?></td>
                                    </tr>
                                    <tr  class="td-is_drenchers_photo_attached_id">
                                        <th class="title"> Is Drenchers Photo Attached Id: </th>
                                        <td class="value"> <?php echo $data['is_drenchers_photo_attached_id']; ?></td>
                                    </tr>
                                    <tr  class="td-is_drenchers_photo_attached_value">
                                        <th class="title"> Is Drenchers Photo Attached Value: </th>
                                        <td class="value"> <?php echo $data['is_drenchers_photo_attached_value']; ?></td>
                                    </tr>
                                    <tr  class="td-upload_drenchers_photo">
                                        <th class="title"> Upload Drenchers Photo: </th>
                                        <td class="value"> <?php echo $data['upload_drenchers_photo']; ?></td>
                                    </tr>
                                    <tr  class="td-officers_remark_on_drenchers">
                                        <th class="title"> Officers Remark On Drenchers: </th>
                                        <td class="value"> <?php echo $data['officers_remark_on_drenchers']; ?></td>
                                    </tr>
                                    <tr  class="td-water_spray_projectors">
                                        <th class="title"> Water Spray Projectors: </th>
                                        <td class="value"> <?php echo $data['water_spray_projectors']; ?></td>
                                    </tr>
                                    <tr  class="td-is_water_spray_projectors_photo_attached_id">
                                        <th class="title"> Is Water Spray Projectors Photo Attached Id: </th>
                                        <td class="value"> <?php echo $data['is_water_spray_projectors_photo_attached_id']; ?></td>
                                    </tr>
                                    <tr  class="td-is_water_spray_projectors_photo_attached_value">
                                        <th class="title"> Is Water Spray Projectors Photo Attached Value: </th>
                                        <td class="value"> <?php echo $data['is_water_spray_projectors_photo_attached_value']; ?></td>
                                    </tr>
                                    <tr  class="td-upload_water_spray_projectors_photo">
                                        <th class="title"> Upload Water Spray Projectors Photo: </th>
                                        <td class="value"> <?php echo $data['upload_water_spray_projectors_photo']; ?></td>
                                    </tr>
                                    <tr  class="td-officer_remark_on_water_spray_projectors">
                                        <th class="title"> Officer Remark On Water Spray Projectors: </th>
                                        <td class="value"> <?php echo $data['officer_remark_on_water_spray_projectors']; ?></td>
                                    </tr>
                                    <tr  class="td-type_of_fire_pump_and_cerified_capacity">
                                        <th class="title"> Type Of Fire Pump And Cerified Capacity: </th>
                                        <td class="value"> <?php echo $data['type_of_fire_pump_and_cerified_capacity']; ?></td>
                                    </tr>
                                    <tr  class="td-is_fire_pump_photo_attached_id">
                                        <th class="title"> Is Fire Pump Photo Attached Id: </th>
                                        <td class="value"> <?php echo $data['is_fire_pump_photo_attached_id']; ?></td>
                                    </tr>
                                    <tr  class="td-is_fire_pump_photo_attached_value">
                                        <th class="title"> Is Fire Pump Photo Attached Value: </th>
                                        <td class="value"> <?php echo $data['is_fire_pump_photo_attached_value']; ?></td>
                                    </tr>
                                    <tr  class="td-upload_fire_pump_photo">
                                        <th class="title"> Upload Fire Pump Photo: </th>
                                        <td class="value"> <?php echo $data['upload_fire_pump_photo']; ?></td>
                                    </tr>
                                    <tr  class="td-officer_remark_on_fire_pump_and_capacity">
                                        <th class="title"> Officer Remark On Fire Pump And Capacity: </th>
                                        <td class="value"> <?php echo $data['officer_remark_on_fire_pump_and_capacity']; ?></td>
                                    </tr>
                                    <tr  class="td-disel_driven_pump">
                                        <th class="title"> Disel Driven Pump: </th>
                                        <td class="value"> <?php echo $data['disel_driven_pump']; ?></td>
                                    </tr>
                                    <tr  class="td-is_disel_driven_pump_photo_attached_id">
                                        <th class="title"> Is Disel Driven Pump Photo Attached Id: </th>
                                        <td class="value"> <?php echo $data['is_disel_driven_pump_photo_attached_id']; ?></td>
                                    </tr>
                                    <tr  class="td-is_disel_driven_pump_photo_attached_value">
                                        <th class="title"> Is Disel Driven Pump Photo Attached Value: </th>
                                        <td class="value"> <?php echo $data['is_disel_driven_pump_photo_attached_value']; ?></td>
                                    </tr>
                                    <tr  class="td-upload_disel_driven_pump_photo">
                                        <th class="title"> Upload Disel Driven Pump Photo: </th>
                                        <td class="value"> <?php echo $data['upload_disel_driven_pump_photo']; ?></td>
                                    </tr>
                                    <tr  class="td-officer_remark_on_disel_driven_pump">
                                        <th class="title"> Officer Remark On Disel Driven Pump: </th>
                                        <td class="value"> <?php echo $data['officer_remark_on_disel_driven_pump']; ?></td>
                                    </tr>
                                    <tr  class="td-booster_pump_and_certified_capacity">
                                        <th class="title"> Booster Pump And Certified Capacity: </th>
                                        <td class="value"> <?php echo $data['booster_pump_and_certified_capacity']; ?></td>
                                    </tr>
                                    <tr  class="td-is_booster_pump_and_certified_capacity_photo_attached_id">
                                        <th class="title"> Is Booster Pump And Certified Capacity Photo Attached Id: </th>
                                        <td class="value"> <?php echo $data['is_booster_pump_and_certified_capacity_photo_attached_id']; ?></td>
                                    </tr>
                                    <tr  class="td-is_booster_pump_and_certified_capacity_photo_attached_value">
                                        <th class="title"> Is Booster Pump And Certified Capacity Photo Attached Value: </th>
                                        <td class="value"> <?php echo $data['is_booster_pump_and_certified_capacity_photo_attached_value']; ?></td>
                                    </tr>
                                    <tr  class="td-upload_booster_pump_and_certified_capacity_photo">
                                        <th class="title"> Upload Booster Pump And Certified Capacity Photo: </th>
                                        <td class="value"> <?php echo $data['upload_booster_pump_and_certified_capacity_photo']; ?></td>
                                    </tr>
                                    <tr  class="td-officer_remark_on_booster_pump_and_certified_capacity">
                                        <th class="title"> Officer Remark On Booster Pump And Certified Capacity: </th>
                                        <td class="value"> <?php echo $data['officer_remark_on_booster_pump_and_certified_capacity']; ?></td>
                                    </tr>
                                    <tr  class="td-standby_pump_and_certified_capacity">
                                        <th class="title"> Standby Pump And Certified Capacity: </th>
                                        <td class="value"> <?php echo $data['standby_pump_and_certified_capacity']; ?></td>
                                    </tr>
                                    <tr  class="td-is_standby_pump_and_certified_capacity_photo_attached_id">
                                        <th class="title"> Is Standby Pump And Certified Capacity Photo Attached Id: </th>
                                        <td class="value"> <?php echo $data['is_standby_pump_and_certified_capacity_photo_attached_id']; ?></td>
                                    </tr>
                                    <tr  class="td-is_standby_pump_and_certified_capacity_photo_attached_value">
                                        <th class="title"> Is Standby Pump And Certified Capacity Photo Attached Value: </th>
                                        <td class="value"> <?php echo $data['is_standby_pump_and_certified_capacity_photo_attached_value']; ?></td>
                                    </tr>
                                    <tr  class="td-upload_standby_pump_and_certified_capacity_photo">
                                        <th class="title"> Upload Standby Pump And Certified Capacity Photo: </th>
                                        <td class="value"> <?php echo $data['upload_standby_pump_and_certified_capacity_photo']; ?></td>
                                    </tr>
                                    <tr  class="td-officer_remark_on_standby_pump_and_certified_capacity">
                                        <th class="title"> Officer Remark On Standby Pump And Certified Capacity: </th>
                                        <td class="value"> <?php echo $data['officer_remark_on_standby_pump_and_certified_capacity']; ?></td>
                                    </tr>
                                    <tr  class="td-jockey_pump_and_certified_capacity">
                                        <th class="title"> Jockey Pump And Certified Capacity: </th>
                                        <td class="value"> <?php echo $data['jockey_pump_and_certified_capacity']; ?></td>
                                    </tr>
                                    <tr  class="td-is_jockey_pump_and_certified_capacity_photo_attached_id">
                                        <th class="title"> Is Jockey Pump And Certified Capacity Photo Attached Id: </th>
                                        <td class="value"> <?php echo $data['is_jockey_pump_and_certified_capacity_photo_attached_id']; ?></td>
                                    </tr>
                                    <tr  class="td-is_jockey_pump_and_certified_capacity_photo_attached_value">
                                        <th class="title"> Is Jockey Pump And Certified Capacity Photo Attached Value: </th>
                                        <td class="value"> <?php echo $data['is_jockey_pump_and_certified_capacity_photo_attached_value']; ?></td>
                                    </tr>
                                    <tr  class="td-upload_jockey_pump_and_certified_capacity_photo">
                                        <th class="title"> Upload Jockey Pump And Certified Capacity Photo: </th>
                                        <td class="value"> <?php echo $data['upload_jockey_pump_and_certified_capacity_photo']; ?></td>
                                    </tr>
                                    <tr  class="td-officer_remark_on_jockey_pump_and_certified_capacity">
                                        <th class="title"> Officer Remark On Jockey Pump And Certified Capacity: </th>
                                        <td class="value"> <?php echo $data['officer_remark_on_jockey_pump_and_certified_capacity']; ?></td>
                                    </tr>
                                    <tr  class="td-sprinkler_pump_and_certified_capacity">
                                        <th class="title"> Sprinkler Pump And Certified Capacity: </th>
                                        <td class="value"> <?php echo $data['sprinkler_pump_and_certified_capacity']; ?></td>
                                    </tr>
                                    <tr  class="td-is_sprinkler_pump_and_certified_capacity_photo_attached_id">
                                        <th class="title"> Is Sprinkler Pump And Certified Capacity Photo Attached Id: </th>
                                        <td class="value"> <?php echo $data['is_sprinkler_pump_and_certified_capacity_photo_attached_id']; ?></td>
                                    </tr>
                                    <tr  class="td-is_sprinkler_pump_and_certified_capacity_photo_attached_value">
                                        <th class="title"> Is Sprinkler Pump And Certified Capacity Photo Attached Value: </th>
                                        <td class="value"> <?php echo $data['is_sprinkler_pump_and_certified_capacity_photo_attached_value']; ?></td>
                                    </tr>
                                    <tr  class="td-upload_sprinkler_pump_and_certified_capacity_photo">
                                        <th class="title"> Upload Sprinkler Pump And Certified Capacity Photo: </th>
                                        <td class="value"> <?php echo $data['upload_sprinkler_pump_and_certified_capacity_photo']; ?></td>
                                    </tr>
                                    <tr  class="td-officer_remark_on_sprinkler_pump_and_certified_capacity">
                                        <th class="title"> Officer Remark On Sprinkler Pump And Certified Capacity: </th>
                                        <td class="value"> <?php echo $data['officer_remark_on_sprinkler_pump_and_certified_capacity']; ?></td>
                                    </tr>
                                    <tr  class="td-courtyard_hydrants_numbers">
                                        <th class="title"> Courtyard Hydrants Numbers: </th>
                                        <td class="value"> <?php echo $data['courtyard_hydrants_numbers']; ?></td>
                                    </tr>
                                    <tr  class="td-is_courtyard_hydrants_photo_attached_id">
                                        <th class="title"> Is Courtyard Hydrants Photo Attached Id: </th>
                                        <td class="value"> <?php echo $data['is_courtyard_hydrants_photo_attached_id']; ?></td>
                                    </tr>
                                    <tr  class="td-is_courtyard_hydrants_photo_attached_value">
                                        <th class="title"> Is Courtyard Hydrants Photo Attached Value: </th>
                                        <td class="value"> <?php echo $data['is_courtyard_hydrants_photo_attached_value']; ?></td>
                                    </tr>
                                    <tr  class="td-upload_courtyard_hydrants_photo">
                                        <th class="title"> Upload Courtyard Hydrants Photo: </th>
                                        <td class="value"> <?php echo $data['upload_courtyard_hydrants_photo']; ?></td>
                                    </tr>
                                    <tr  class="td-officer_remark_on_courtyard_hydrants_numbers">
                                        <th class="title"> Officer Remark On Courtyard Hydrants Numbers: </th>
                                        <td class="value"> <?php echo $data['officer_remark_on_courtyard_hydrants_numbers']; ?></td>
                                    </tr>
                                    <tr  class="td-first_aid_hose_reel">
                                        <th class="title"> First Aid Hose Reel: </th>
                                        <td class="value"> <?php echo $data['first_aid_hose_reel']; ?></td>
                                    </tr>
                                    <tr  class="td-is_first_aid_hose_reel_photo_attached_id">
                                        <th class="title"> Is First Aid Hose Reel Photo Attached Id: </th>
                                        <td class="value"> <?php echo $data['is_first_aid_hose_reel_photo_attached_id']; ?></td>
                                    </tr>
                                    <tr  class="td-is_first_aid_hose_reel_photo_attached_value">
                                        <th class="title"> Is First Aid Hose Reel Photo Attached Value: </th>
                                        <td class="value"> <?php echo $data['is_first_aid_hose_reel_photo_attached_value']; ?></td>
                                    </tr>
                                    <tr  class="td-upload_first_aid_hose_reel_photo">
                                        <th class="title"> Upload First Aid Hose Reel Photo: </th>
                                        <td class="value"> <?php echo $data['upload_first_aid_hose_reel_photo']; ?></td>
                                    </tr>
                                    <tr  class="td-officer_remark_on_first_aid_hose_reel">
                                        <th class="title"> Officer Remark On First Aid Hose Reel: </th>
                                        <td class="value"> <?php echo $data['officer_remark_on_first_aid_hose_reel']; ?></td>
                                    </tr>
                                    <tr  class="td-fire_alarm_system">
                                        <th class="title"> Fire Alarm System: </th>
                                        <td class="value"> <?php echo $data['fire_alarm_system']; ?></td>
                                    </tr>
                                    <tr  class="td-is_fire_alarm_system_photo_attached_id">
                                        <th class="title"> Is Fire Alarm System Photo Attached Id: </th>
                                        <td class="value"> <?php echo $data['is_fire_alarm_system_photo_attached_id']; ?></td>
                                    </tr>
                                    <tr  class="td-is_fire_alarm_system_photo_attached_value">
                                        <th class="title"> Is Fire Alarm System Photo Attached Value: </th>
                                        <td class="value"> <?php echo $data['is_fire_alarm_system_photo_attached_value']; ?></td>
                                    </tr>
                                    <tr  class="td-upload_fire_alarm_system_photo">
                                        <th class="title"> Upload Fire Alarm System Photo: </th>
                                        <td class="value"> <?php echo $data['upload_fire_alarm_system_photo']; ?></td>
                                    </tr>
                                    <tr  class="td-officer_remark_on_fire_alarm_system">
                                        <th class="title"> Officer Remark On Fire Alarm System: </th>
                                        <td class="value"> <?php echo $data['officer_remark_on_fire_alarm_system']; ?></td>
                                    </tr>
                                    <tr  class="td-detection_system">
                                        <th class="title"> Detection System: </th>
                                        <td class="value"> <?php echo $data['detection_system']; ?></td>
                                    </tr>
                                    <tr  class="td-is_detection_system_photo_attached_id">
                                        <th class="title"> Is Detection System Photo Attached Id: </th>
                                        <td class="value"> <?php echo $data['is_detection_system_photo_attached_id']; ?></td>
                                    </tr>
                                    <tr  class="td-is_detection_system_photo_attached_value">
                                        <th class="title"> Is Detection System Photo Attached Value: </th>
                                        <td class="value"> <?php echo $data['is_detection_system_photo_attached_value']; ?></td>
                                    </tr>
                                    <tr  class="td-upload_detection_system_photo">
                                        <th class="title"> Upload Detection System Photo: </th>
                                        <td class="value"> <?php echo $data['upload_detection_system_photo']; ?></td>
                                    </tr>
                                    <tr  class="td-officer_remark_on_detection_system">
                                        <th class="title"> Officer Remark On Detection System: </th>
                                        <td class="value"> <?php echo $data['officer_remark_on_detection_system']; ?></td>
                                    </tr>
                                    <tr  class="td-location_of_alarm_panel">
                                        <th class="title"> Location Of Alarm Panel: </th>
                                        <td class="value"> <?php echo $data['location_of_alarm_panel']; ?></td>
                                    </tr>
                                    <tr  class="td-is_location_of_alarm_panel_photo_attached_id">
                                        <th class="title"> Is Location Of Alarm Panel Photo Attached Id: </th>
                                        <td class="value"> <?php echo $data['is_location_of_alarm_panel_photo_attached_id']; ?></td>
                                    </tr>
                                    <tr  class="td-is_location_of_alarm_panel_photo_attached_value">
                                        <th class="title"> Is Location Of Alarm Panel Photo Attached Value: </th>
                                        <td class="value"> <?php echo $data['is_location_of_alarm_panel_photo_attached_value']; ?></td>
                                    </tr>
                                    <tr  class="td-upload_location_of_alarm_panel_photo">
                                        <th class="title"> Upload Location Of Alarm Panel Photo: </th>
                                        <td class="value"> <?php echo $data['upload_location_of_alarm_panel_photo']; ?></td>
                                    </tr>
                                    <tr  class="td-officer_remark_on_location_of_alarm_panel">
                                        <th class="title"> Officer Remark On Location Of Alarm Panel: </th>
                                        <td class="value"> <?php echo $data['officer_remark_on_location_of_alarm_panel']; ?></td>
                                    </tr>
                                    <tr  class="td-escape_signages">
                                        <th class="title"> Escape Signages: </th>
                                        <td class="value"> <?php echo $data['escape_signages']; ?></td>
                                    </tr>
                                    <tr  class="td-is_escape_signages_photo_attached_id">
                                        <th class="title"> Is Escape Signages Photo Attached Id: </th>
                                        <td class="value"> <?php echo $data['is_escape_signages_photo_attached_id']; ?></td>
                                    </tr>
                                    <tr  class="td-is_escape_signages_photo_attached_value">
                                        <th class="title"> Is Escape Signages Photo Attached Value: </th>
                                        <td class="value"> <?php echo $data['is_escape_signages_photo_attached_value']; ?></td>
                                    </tr>
                                    <tr  class="td-upload_escape_signages_photo">
                                        <th class="title"> Upload Escape Signages Photo: </th>
                                        <td class="value"> <?php echo $data['upload_escape_signages_photo']; ?></td>
                                    </tr>
                                    <tr  class="td-officer_remark_on_escape_signages">
                                        <th class="title"> Officer Remark On Escape Signages: </th>
                                        <td class="value"> <?php echo $data['officer_remark_on_escape_signages']; ?></td>
                                    </tr>
                                    <tr  class="td-pa_system">
                                        <th class="title"> Pa System: </th>
                                        <td class="value"> <?php echo $data['pa_system']; ?></td>
                                    </tr>
                                    <tr  class="td-is_pa_system_photo_attached_id">
                                        <th class="title"> Is Pa System Photo Attached Id: </th>
                                        <td class="value"> <?php echo $data['is_pa_system_photo_attached_id']; ?></td>
                                    </tr>
                                    <tr  class="td-is_pa_system_photo_attached_value">
                                        <th class="title"> Is Pa System Photo Attached Value: </th>
                                        <td class="value"> <?php echo $data['is_pa_system_photo_attached_value']; ?></td>
                                    </tr>
                                    <tr  class="td-upload_pa_system_photo">
                                        <th class="title"> Upload Pa System Photo: </th>
                                        <td class="value"> <?php echo $data['upload_pa_system_photo']; ?></td>
                                    </tr>
                                    <tr  class="td-officer_remark_on_pa_system">
                                        <th class="title"> Officer Remark On Pa System: </th>
                                        <td class="value"> <?php echo $data['officer_remark_on_pa_system']; ?></td>
                                    </tr>
                                    <tr  class="td-alternate_source_of_electric_supply_from_separate_sub_station">
                                        <th class="title"> Alternate Source Of Electric Supply From Separate Sub Station: </th>
                                        <td class="value"> <?php echo $data['alternate_source_of_electric_supply_from_separate_sub_station']; ?></td>
                                    </tr>
                                    <tr  class="td-is_substation_photo_attached_id">
                                        <th class="title"> Is Substation Photo Attached Id: </th>
                                        <td class="value"> <?php echo $data['is_substation_photo_attached_id']; ?></td>
                                    </tr>
                                    <tr  class="td-is_substation_photo_attached_value">
                                        <th class="title"> Is Substation Photo Attached Value: </th>
                                        <td class="value"> <?php echo $data['is_substation_photo_attached_value']; ?></td>
                                    </tr>
                                    <tr  class="td-upload_substation_photo">
                                        <th class="title"> Upload Substation Photo: </th>
                                        <td class="value"> <?php echo $data['upload_substation_photo']; ?></td>
                                    </tr>
                                    <tr  class="td-officer_remark_on_alternate_source_of_electric_supply_substation">
                                        <th class="title"> Officer Remark On Alternate Source Of Electric Supply Substation: </th>
                                        <td class="value"> <?php echo $data['officer_remark_on_alternate_source_of_electric_supply_substation']; ?></td>
                                    </tr>
                                    <tr  class="td-alternate_source_of_electric_supply_from_separate_dg_set">
                                        <th class="title"> Alternate Source Of Electric Supply From Separate Dg Set: </th>
                                        <td class="value"> <?php echo $data['alternate_source_of_electric_supply_from_separate_dg_set']; ?></td>
                                    </tr>
                                    <tr  class="td-is_dg_set_photo_attached_id">
                                        <th class="title"> Is Dg Set Photo Attached Id: </th>
                                        <td class="value"> <?php echo $data['is_dg_set_photo_attached_id']; ?></td>
                                    </tr>
                                    <tr  class="td-is_dg_set_photo_attached_value">
                                        <th class="title"> Is Dg Set Photo Attached Value: </th>
                                        <td class="value"> <?php echo $data['is_dg_set_photo_attached_value']; ?></td>
                                    </tr>
                                    <tr  class="td-upload_dg_set_photo">
                                        <th class="title"> Upload Dg Set Photo: </th>
                                        <td class="value"> <?php echo $data['upload_dg_set_photo']; ?></td>
                                    </tr>
                                    <tr  class="td-officer_remark_on_is_dg_set">
                                        <th class="title"> Officer Remark On Is Dg Set: </th>
                                        <td class="value"> <?php echo $data['officer_remark_on_is_dg_set']; ?></td>
                                    </tr>
                                    <tr  class="td-user_id">
                                        <th class="title"> User Id: </th>
                                        <td class="value"> <?php echo $data['user_id']; ?></td>
                                    </tr>
                                    <tr  class="td-date">
                                        <th class="title"> Date: </th>
                                        <td class="value"> <?php echo $data['date']; ?></td>
                                    </tr>
                                    <tr  class="td-rec_id">
                                        <th class="title"> Rec Id: </th>
                                        <td class="value"> <?php echo $data['rec_id']; ?></td>
                                    </tr>
                                    <tr  class="td-status">
                                        <th class="title"> Status: </th>
                                        <td class="value"> <?php echo $data['status']; ?></td>
                                    </tr>
                                    <tr  class="td-paid">
                                        <th class="title"> Paid: </th>
                                        <td class="value"> <?php echo $data['paid']; ?></td>
                                    </tr>
                                    <tr  class="td-int_no">
                                        <th class="title"> Int No: </th>
                                        <td class="value"> <?php echo $data['int_no']; ?></td>
                                    </tr>
                                    <tr  class="td-yr">
                                        <th class="title"> Yr: </th>
                                        <td class="value"> <?php echo $data['yr']; ?></td>
                                    </tr>
                                    <tr  class="td-zone">
                                        <th class="title"> Zone: </th>
                                        <td class="value"> <?php echo $data['zone']; ?></td>
                                    </tr>
                                    <tr  class="td-payment_done">
                                        <th class="title"> Payment Done: </th>
                                        <td class="value"> <?php echo $data['payment_done']; ?></td>
                                    </tr>
                                    <tr  class="td-certificate_file">
                                        <th class="title"> Certificate File: </th>
                                        <td class="value"> <?php echo $data['certificate_file']; ?></td>
                                    </tr>
                                    <tr  class="td-timestamp">
                                        <th class="title"> Timestamp: </th>
                                        <td class="value"> <?php echo $data['timestamp']; ?></td>
                                    </tr>
                                </tbody>
                                <!-- Table Body End -->
                            </table>
                        </div>
                        <div class="p-3 d-flex">
                            <div class="dropup export-btn-holder mx-1">
                                <button class="btn btn-sm btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-save"></i> Export
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <?php $export_print_link = $this->set_current_page_link(array('format' => 'print')); ?>
                                    <a class="dropdown-item export-link-btn" data-format="print" href="<?php print_link($export_print_link); ?>" target="_blank">
                                        <img src="<?php print_link('assets/images/print.png') ?>" class="mr-2" /> PRINT
                                        </a>
                                        <?php $export_pdf_link = $this->set_current_page_link(array('format' => 'pdf')); ?>
                                        <a class="dropdown-item export-link-btn" data-format="pdf" href="<?php print_link($export_pdf_link); ?>" target="_blank">
                                            <img src="<?php print_link('assets/images/pdf.png') ?>" class="mr-2" /> PDF
                                            </a>
                                            <?php $export_word_link = $this->set_current_page_link(array('format' => 'word')); ?>
                                            <a class="dropdown-item export-link-btn" data-format="word" href="<?php print_link($export_word_link); ?>" target="_blank">
                                                <img src="<?php print_link('assets/images/doc.png') ?>" class="mr-2" /> WORD
                                                </a>
                                                <?php $export_csv_link = $this->set_current_page_link(array('format' => 'csv')); ?>
                                                <a class="dropdown-item export-link-btn" data-format="csv" href="<?php print_link($export_csv_link); ?>" target="_blank">
                                                    <img src="<?php print_link('assets/images/csv.png') ?>" class="mr-2" /> CSV
                                                    </a>
                                                    <?php $export_excel_link = $this->set_current_page_link(array('format' => 'excel')); ?>
                                                    <a class="dropdown-item export-link-btn" data-format="excel" href="<?php print_link($export_excel_link); ?>" target="_blank">
                                                        <img src="<?php print_link('assets/images/xsl.png') ?>" class="mr-2" /> EXCEL
                                                        </a>
                                                    </div>
                                                </div>
                                                <?php if($can_edit){ ?>
                                                <a class="btn btn-sm btn-info"  href="<?php print_link("architecture_oc_noc_fire_fighting_arrangements_third/edit/$rec_id"); ?>">
                                                    <i class="fa fa-edit"></i> Edit
                                                </a>
                                                <?php } ?>
                                                <?php if($can_delete){ ?>
                                                <a class="btn btn-sm btn-danger record-delete-btn mx-1"  href="<?php print_link("architecture_oc_noc_fire_fighting_arrangements_third/delete/$rec_id/?csrf_token=$csrf_token&redirect=$current_page"); ?>" data-prompt-msg="Are you sure you want to delete this record?" data-display-style="modal">
                                                    <i class="fa fa-times"></i> Delete
                                                </a>
                                                <?php } ?>
                                            </div>
                                            <?php
                                            }
                                            else{
                                            ?>
                                            <!-- Empty Record Message -->
                                            <div class="text-muted p-3">
                                                <i class="fa fa-ban"></i> No Record Found
                                            </div>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
