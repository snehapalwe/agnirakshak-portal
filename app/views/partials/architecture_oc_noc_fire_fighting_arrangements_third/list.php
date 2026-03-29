<?php 
//check if current user role is allowed access to the pages
$can_add = ACL::is_allowed("architecture_oc_noc_fire_fighting_arrangements_third/add");
$can_edit = ACL::is_allowed("architecture_oc_noc_fire_fighting_arrangements_third/edit");
$can_view = ACL::is_allowed("architecture_oc_noc_fire_fighting_arrangements_third/view");
$can_delete = ACL::is_allowed("architecture_oc_noc_fire_fighting_arrangements_third/delete");
?>
<?php
$comp_model = new SharedController;
$page_element_id = "list-page-" . random_str();
$current_page = $this->set_current_page_link();
$csrf_token = Csrf::$token;
//Page Data From Controller
$view_data = $this->view_data;
$records = $view_data->records;
$record_count = $view_data->record_count;
$total_records = $view_data->total_records;
$field_name = $this->route->field_name;
$field_value = $this->route->field_value;
$view_title = $this->view_title;
$show_header = $this->show_header;
$show_footer = $this->show_footer;
$show_pagination = $this->show_pagination;
?>
<section class="page" id="<?php echo $page_element_id; ?>" data-page-type="list"  data-display-type="table" data-page-url="<?php print_link($current_page); ?>">
    <?php
    if( $show_header == true ){
    ?>
    <div  class="bg-light p-3 mb-3">
        <div class="container-fluid">
            <div class="row ">
                <div class="col ">
                    <h4 class="record-title">Architecture Oc Noc Fire Fighting Arrangements Third</h4>
                </div>
                <div class="col-sm-3 ">
                    <?php if($can_add){ ?>
                    <a  class="btn btn btn-primary my-1" href="<?php print_link("architecture_oc_noc_fire_fighting_arrangements_third/add") ?>">
                        <i class="fa fa-plus"></i>                              
                        Add New Architecture Oc Noc Fire Fighting Arrangements Third 
                    </a>
                    <?php } ?>
                </div>
                <div class="col-sm-4 ">
                    <form  class="search" action="<?php print_link('architecture_oc_noc_fire_fighting_arrangements_third'); ?>" method="get">
                        <div class="input-group">
                            <input value="<?php echo get_value('search'); ?>" class="form-control" type="text" name="search"  placeholder="Search" />
                                <div class="input-group-append">
                                    <button class="btn btn-primary"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-12 comp-grid">
                        <div class="">
                            <!-- Page bread crumbs components-->
                            <?php
                            if(!empty($field_name) || !empty($_GET['search'])){
                            ?>
                            <hr class="sm d-block d-sm-none" />
                            <nav class="page-header-breadcrumbs mt-2" aria-label="breadcrumb">
                                <ul class="breadcrumb m-0 p-1">
                                    <?php
                                    if(!empty($field_name)){
                                    ?>
                                    <li class="breadcrumb-item">
                                        <a class="text-decoration-none" href="<?php print_link('architecture_oc_noc_fire_fighting_arrangements_third'); ?>">
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <?php echo (get_value("tag") ? get_value("tag")  :  make_readable($field_name)); ?>
                                    </li>
                                    <li  class="breadcrumb-item active text-capitalize font-weight-bold">
                                        <?php echo (get_value("label") ? get_value("label")  :  make_readable(urldecode($field_value))); ?>
                                    </li>
                                    <?php 
                                    }   
                                    ?>
                                    <?php
                                    if(get_value("search")){
                                    ?>
                                    <li class="breadcrumb-item">
                                        <a class="text-decoration-none" href="<?php print_link('architecture_oc_noc_fire_fighting_arrangements_third'); ?>">
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item text-capitalize">
                                        Search
                                    </li>
                                    <li  class="breadcrumb-item active text-capitalize font-weight-bold"><?php echo get_value("search"); ?></li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </nav>
                            <!--End of Page bread crumbs components-->
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
        <div  class="">
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-md-12 comp-grid">
                        <?php $this :: display_page_errors(); ?>
                        <div  class=" animated fadeIn page-content">
                            <div id="architecture_oc_noc_fire_fighting_arrangements_third-list-records">
                                <div id="page-report-body" class="table-responsive">
                                    <table class="table  table-striped table-sm text-left table-bordered">
                                        <thead class="table-header bg-light">
                                            <tr>
                                                <th  class="td-id"> Id</th>
                                                <th  class="td-ug_water_tank_for_fire_as_per_noc"> Ug Water Tank For Fire As Per Noc</th>
                                                <th  class="td-is_ug_water_tank_photo_attached_value"> Is Ug Water Tank Photo Attached Value</th>
                                                <th  class="td-upload_ug_water_tank_photo"> Upload Ug Water Tank Photo</th>
                                                <th  class="td-officer_remark_on_ug_water_tank"> Officer Remark On Ug Water Tank</th>
                                                <th  class="td-overhead_water_storage_as_per_noc"> Overhead Water Storage As Per Noc</th>
                                                <th  class="td-is_overhead_water_storage_as_per_noc_photo_attached_value"> Is Overhead Water Storage As Per Noc Photo Attached Value</th>
                                                <th  class="td-upload_overhead_water_storage_photo"> Upload Overhead Water Storage Photo</th>
                                                <th  class="td-officer_remark_on_overhead_water_storage"> Officer Remark On Overhead Water Storage</th>
                                                <th  class="td-wet_riser_or_down_comer"> Wet Riser Or Down Comer</th>
                                                <th  class="td-is_wet_riser_or_down_comer_photo_attached_value"> Is Wet Riser Or Down Comer Photo Attached Value</th>
                                                <th  class="td-upload_wet_riser_or_down_comer_photo"> Upload Wet Riser Or Down Comer Photo</th>
                                                <th  class="td-officer_remark_on_wet_riser_or_down_comer"> Officer Remark On Wet Riser Or Down Comer</th>
                                                <th  class="td-automatic_sprinklers"> Automatic Sprinklers</th>
                                                <th  class="td-is_automatic_sprinklers_photo_attached_value"> Is Automatic Sprinklers Photo Attached Value</th>
                                                <th  class="td-upload_automatic_sprinklers_photo"> Upload Automatic Sprinklers Photo</th>
                                                <th  class="td-officer_remark_on_automatic_sprinklers"> Officer Remark On Automatic Sprinklers</th>
                                                <th  class="td-drenchers"> Drenchers</th>
                                                <th  class="td-is_drenchers_photo_attached_value"> Is Drenchers Photo Attached Value</th>
                                                <th  class="td-upload_drenchers_photo"> Upload Drenchers Photo</th>
                                                <th  class="td-officers_remark_on_drenchers"> Officers Remark On Drenchers</th>
                                                <th  class="td-water_spray_projectors"> Water Spray Projectors</th>
                                                <th  class="td-is_water_spray_projectors_photo_attached_value"> Is Water Spray Projectors Photo Attached Value</th>
                                                <th  class="td-upload_water_spray_projectors_photo"> Upload Water Spray Projectors Photo</th>
                                                <th  class="td-officer_remark_on_water_spray_projectors"> Officer Remark On Water Spray Projectors</th>
                                                <th  class="td-type_of_fire_pump_and_cerified_capacity"> Type Of Fire Pump And Cerified Capacity</th>
                                                <th  class="td-is_fire_pump_photo_attached_value"> Is Fire Pump Photo Attached Value</th>
                                                <th  class="td-upload_fire_pump_photo"> Upload Fire Pump Photo</th>
                                                <th  class="td-officer_remark_on_fire_pump_and_capacity"> Officer Remark On Fire Pump And Capacity</th>
                                                <th  class="td-disel_driven_pump"> Disel Driven Pump</th>
                                                <th  class="td-is_disel_driven_pump_photo_attached_value"> Is Disel Driven Pump Photo Attached Value</th>
                                                <th  class="td-upload_disel_driven_pump_photo"> Upload Disel Driven Pump Photo</th>
                                                <th  class="td-officer_remark_on_disel_driven_pump"> Officer Remark On Disel Driven Pump</th>
                                                <th  class="td-booster_pump_and_certified_capacity"> Booster Pump And Certified Capacity</th>
                                                <th  class="td-is_booster_pump_and_certified_capacity_photo_attached_value"> Is Booster Pump And Certified Capacity Photo Attached Value</th>
                                                <th  class="td-upload_booster_pump_and_certified_capacity_photo"> Upload Booster Pump And Certified Capacity Photo</th>
                                                <th  class="td-officer_remark_on_booster_pump_and_certified_capacity"> Officer Remark On Booster Pump And Certified Capacity</th>
                                                <th  class="td-standby_pump_and_certified_capacity"> Standby Pump And Certified Capacity</th>
                                                <th  class="td-is_standby_pump_and_certified_capacity_photo_attached_value"> Is Standby Pump And Certified Capacity Photo Attached Value</th>
                                                <th  class="td-upload_standby_pump_and_certified_capacity_photo"> Upload Standby Pump And Certified Capacity Photo</th>
                                                <th  class="td-officer_remark_on_standby_pump_and_certified_capacity"> Officer Remark On Standby Pump And Certified Capacity</th>
                                                <th  class="td-jockey_pump_and_certified_capacity"> Jockey Pump And Certified Capacity</th>
                                                <th  class="td-is_jockey_pump_and_certified_capacity_photo_attached_value"> Is Jockey Pump And Certified Capacity Photo Attached Value</th>
                                                <th  class="td-upload_jockey_pump_and_certified_capacity_photo"> Upload Jockey Pump And Certified Capacity Photo</th>
                                                <th  class="td-officer_remark_on_jockey_pump_and_certified_capacity"> Officer Remark On Jockey Pump And Certified Capacity</th>
                                                <th  class="td-sprinkler_pump_and_certified_capacity"> Sprinkler Pump And Certified Capacity</th>
                                                <th  class="td-is_sprinkler_pump_and_certified_capacity_photo_attached_value"> Is Sprinkler Pump And Certified Capacity Photo Attached Value</th>
                                                <th  class="td-upload_sprinkler_pump_and_certified_capacity_photo"> Upload Sprinkler Pump And Certified Capacity Photo</th>
                                                <th  class="td-officer_remark_on_sprinkler_pump_and_certified_capacity"> Officer Remark On Sprinkler Pump And Certified Capacity</th>
                                                <th  class="td-courtyard_hydrants_numbers"> Courtyard Hydrants Numbers</th>
                                                <th  class="td-is_courtyard_hydrants_photo_attached_value"> Is Courtyard Hydrants Photo Attached Value</th>
                                                <th  class="td-upload_courtyard_hydrants_photo"> Upload Courtyard Hydrants Photo</th>
                                                <th  class="td-officer_remark_on_courtyard_hydrants_numbers"> Officer Remark On Courtyard Hydrants Numbers</th>
                                                <th  class="td-first_aid_hose_reel"> First Aid Hose Reel</th>
                                                <th  class="td-is_first_aid_hose_reel_photo_attached_value"> Is First Aid Hose Reel Photo Attached Value</th>
                                                <th  class="td-upload_first_aid_hose_reel_photo"> Upload First Aid Hose Reel Photo</th>
                                                <th  class="td-officer_remark_on_first_aid_hose_reel"> Officer Remark On First Aid Hose Reel</th>
                                                <th  class="td-fire_alarm_system"> Fire Alarm System</th>
                                                <th  class="td-is_fire_alarm_system_photo_attached_value"> Is Fire Alarm System Photo Attached Value</th>
                                                <th  class="td-upload_fire_alarm_system_photo"> Upload Fire Alarm System Photo</th>
                                                <th  class="td-officer_remark_on_fire_alarm_system"> Officer Remark On Fire Alarm System</th>
                                                <th  class="td-detection_system"> Detection System</th>
                                                <th  class="td-is_detection_system_photo_attached_value"> Is Detection System Photo Attached Value</th>
                                                <th  class="td-upload_detection_system_photo"> Upload Detection System Photo</th>
                                                <th  class="td-officer_remark_on_detection_system"> Officer Remark On Detection System</th>
                                                <th  class="td-location_of_alarm_panel"> Location Of Alarm Panel</th>
                                                <th  class="td-is_location_of_alarm_panel_photo_attached_value"> Is Location Of Alarm Panel Photo Attached Value</th>
                                                <th  class="td-upload_location_of_alarm_panel_photo"> Upload Location Of Alarm Panel Photo</th>
                                                <th  class="td-officer_remark_on_location_of_alarm_panel"> Officer Remark On Location Of Alarm Panel</th>
                                                <th  class="td-escape_signages"> Escape Signages</th>
                                                <th  class="td-is_escape_signages_photo_attached_value"> Is Escape Signages Photo Attached Value</th>
                                                <th  class="td-upload_escape_signages_photo"> Upload Escape Signages Photo</th>
                                                <th  class="td-officer_remark_on_escape_signages"> Officer Remark On Escape Signages</th>
                                                <th  class="td-pa_system"> Pa System</th>
                                                <th  class="td-is_pa_system_photo_attached_value"> Is Pa System Photo Attached Value</th>
                                                <th  class="td-upload_pa_system_photo"> Upload Pa System Photo</th>
                                                <th  class="td-officer_remark_on_pa_system"> Officer Remark On Pa System</th>
                                                <th  class="td-alternate_source_of_electric_supply_from_separate_sub_station"> Alternate Source Of Electric Supply From Separate Sub Station</th>
                                                <th  class="td-is_substation_photo_attached_value"> Is Substation Photo Attached Value</th>
                                                <th  class="td-upload_substation_photo"> Upload Substation Photo</th>
                                                <th  class="td-officer_remark_on_alternate_source_of_electric_supply_substation"> Officer Remark On Alternate Source Of Electric Supply Substation</th>
                                                <th  class="td-alternate_source_of_electric_supply_from_separate_dg_set"> Alternate Source Of Electric Supply From Separate Dg Set</th>
                                                <th  class="td-is_dg_set_photo_attached_value"> Is Dg Set Photo Attached Value</th>
                                                <th  class="td-upload_dg_set_photo"> Upload Dg Set Photo</th>
                                                <th  class="td-officer_remark_on_is_dg_set"> Officer Remark On Is Dg Set</th>
                                                <th  class="td-user_id"> User Id</th>
                                                <th  class="td-date"> Date</th>
                                                <th class="td-btn"></th>
                                            </tr>
                                        </thead>
                                        <?php
                                        if(!empty($records)){
                                        ?>
                                        <tbody class="page-data" id="page-data-<?php echo $page_element_id; ?>">
                                            <!--record-->
                                            <?php
                                            $counter = 0;
                                            foreach($records as $data){
                                            $rec_id = (!empty($data['id']) ? urlencode($data['id']) : null);
                                            $counter++;
                                            ?>
                                            <tr>
                                                <td class="td-id"><a href="<?php print_link("architecture_oc_noc_fire_fighting_arrangements_third/view/$data[id]") ?>"><?php echo $data['id']; ?></a></td>
                                                <td class="td-ug_water_tank_for_fire_as_per_noc"> <?php echo $data['ug_water_tank_for_fire_as_per_noc']; ?></td>
                                                <td class="td-is_ug_water_tank_photo_attached_value"> <?php echo $data['is_ug_water_tank_photo_attached_value']; ?></td>
                                                <td class="td-upload_ug_water_tank_photo"><?php Html :: page_link_file($data['upload_ug_water_tank_photo']); ?></td>
                                                <td class="td-officer_remark_on_ug_water_tank"> <?php echo $data['officer_remark_on_ug_water_tank']; ?></td>
                                                <td class="td-overhead_water_storage_as_per_noc"> <?php echo $data['overhead_water_storage_as_per_noc']; ?></td>
                                                <td class="td-is_overhead_water_storage_as_per_noc_photo_attached_value"> <?php echo $data['is_overhead_water_storage_as_per_noc_photo_attached_value']; ?></td>
                                                <td class="td-upload_overhead_water_storage_photo"><?php Html :: page_link_file($data['upload_overhead_water_storage_photo']); ?></td>
                                                <td class="td-officer_remark_on_overhead_water_storage"> <?php echo $data['officer_remark_on_overhead_water_storage']; ?></td>
                                                <td class="td-wet_riser_or_down_comer"> <?php echo $data['wet_riser_or_down_comer']; ?></td>
                                                <td class="td-is_wet_riser_or_down_comer_photo_attached_value"> <?php echo $data['is_wet_riser_or_down_comer_photo_attached_value']; ?></td>
                                                <td class="td-upload_wet_riser_or_down_comer_photo"><?php Html :: page_link_file($data['upload_wet_riser_or_down_comer_photo']); ?></td>
                                                <td class="td-officer_remark_on_wet_riser_or_down_comer"> <?php echo $data['officer_remark_on_wet_riser_or_down_comer']; ?></td>
                                                <td class="td-automatic_sprinklers"> <?php echo $data['automatic_sprinklers']; ?></td>
                                                <td class="td-is_automatic_sprinklers_photo_attached_value"> <?php echo $data['is_automatic_sprinklers_photo_attached_value']; ?></td>
                                                <td class="td-upload_automatic_sprinklers_photo"><?php Html :: page_link_file($data['upload_automatic_sprinklers_photo']); ?></td>
                                                <td class="td-officer_remark_on_automatic_sprinklers"> <?php echo $data['officer_remark_on_automatic_sprinklers']; ?></td>
                                                <td class="td-drenchers"> <?php echo $data['drenchers']; ?></td>
                                                <td class="td-is_drenchers_photo_attached_value"> <?php echo $data['is_drenchers_photo_attached_value']; ?></td>
                                                <td class="td-upload_drenchers_photo"><?php Html :: page_link_file($data['upload_drenchers_photo']); ?></td>
                                                <td class="td-officers_remark_on_drenchers"> <?php echo $data['officers_remark_on_drenchers']; ?></td>
                                                <td class="td-water_spray_projectors"> <?php echo $data['water_spray_projectors']; ?></td>
                                                <td class="td-is_water_spray_projectors_photo_attached_value"> <?php echo $data['is_water_spray_projectors_photo_attached_value']; ?></td>
                                                <td class="td-upload_water_spray_projectors_photo"><?php Html :: page_link_file($data['upload_water_spray_projectors_photo']); ?></td>
                                                <td class="td-officer_remark_on_water_spray_projectors"> <?php echo $data['officer_remark_on_water_spray_projectors']; ?></td>
                                                <td class="td-type_of_fire_pump_and_cerified_capacity"> <?php echo $data['type_of_fire_pump_and_cerified_capacity']; ?></td>
                                                <td class="td-is_fire_pump_photo_attached_value"> <?php echo $data['is_fire_pump_photo_attached_value']; ?></td>
                                                <td class="td-upload_fire_pump_photo"><?php Html :: page_link_file($data['upload_fire_pump_photo']); ?></td>
                                                <td class="td-officer_remark_on_fire_pump_and_capacity"> <?php echo $data['officer_remark_on_fire_pump_and_capacity']; ?></td>
                                                <td class="td-disel_driven_pump"> <?php echo $data['disel_driven_pump']; ?></td>
                                                <td class="td-is_disel_driven_pump_photo_attached_value"> <?php echo $data['is_disel_driven_pump_photo_attached_value']; ?></td>
                                                <td class="td-upload_disel_driven_pump_photo"><?php Html :: page_link_file($data['upload_disel_driven_pump_photo']); ?></td>
                                                <td class="td-officer_remark_on_disel_driven_pump"> <?php echo $data['officer_remark_on_disel_driven_pump']; ?></td>
                                                <td class="td-booster_pump_and_certified_capacity"> <?php echo $data['booster_pump_and_certified_capacity']; ?></td>
                                                <td class="td-is_booster_pump_and_certified_capacity_photo_attached_value"> <?php echo $data['is_booster_pump_and_certified_capacity_photo_attached_value']; ?></td>
                                                <td class="td-upload_booster_pump_and_certified_capacity_photo"><?php Html :: page_link_file($data['upload_booster_pump_and_certified_capacity_photo']); ?></td>
                                                <td class="td-officer_remark_on_booster_pump_and_certified_capacity"> <?php echo $data['officer_remark_on_booster_pump_and_certified_capacity']; ?></td>
                                                <td class="td-standby_pump_and_certified_capacity"> <?php echo $data['standby_pump_and_certified_capacity']; ?></td>
                                                <td class="td-is_standby_pump_and_certified_capacity_photo_attached_value"> <?php echo $data['is_standby_pump_and_certified_capacity_photo_attached_value']; ?></td>
                                                <td class="td-upload_standby_pump_and_certified_capacity_photo"><?php Html :: page_link_file($data['upload_standby_pump_and_certified_capacity_photo']); ?></td>
                                                <td class="td-officer_remark_on_standby_pump_and_certified_capacity"> <?php echo $data['officer_remark_on_standby_pump_and_certified_capacity']; ?></td>
                                                <td class="td-jockey_pump_and_certified_capacity"> <?php echo $data['jockey_pump_and_certified_capacity']; ?></td>
                                                <td class="td-is_jockey_pump_and_certified_capacity_photo_attached_value"> <?php echo $data['is_jockey_pump_and_certified_capacity_photo_attached_value']; ?></td>
                                                <td class="td-upload_jockey_pump_and_certified_capacity_photo"><?php Html :: page_link_file($data['upload_jockey_pump_and_certified_capacity_photo']); ?></td>
                                                <td class="td-officer_remark_on_jockey_pump_and_certified_capacity"> <?php echo $data['officer_remark_on_jockey_pump_and_certified_capacity']; ?></td>
                                                <td class="td-sprinkler_pump_and_certified_capacity"> <?php echo $data['sprinkler_pump_and_certified_capacity']; ?></td>
                                                <td class="td-is_sprinkler_pump_and_certified_capacity_photo_attached_value"> <?php echo $data['is_sprinkler_pump_and_certified_capacity_photo_attached_value']; ?></td>
                                                <td class="td-upload_sprinkler_pump_and_certified_capacity_photo"><?php Html :: page_link_file($data['upload_sprinkler_pump_and_certified_capacity_photo']); ?></td>
                                                <td class="td-officer_remark_on_sprinkler_pump_and_certified_capacity"> <?php echo $data['officer_remark_on_sprinkler_pump_and_certified_capacity']; ?></td>
                                                <td class="td-courtyard_hydrants_numbers"> <?php echo $data['courtyard_hydrants_numbers']; ?></td>
                                                <td class="td-is_courtyard_hydrants_photo_attached_value"> <?php echo $data['is_courtyard_hydrants_photo_attached_value']; ?></td>
                                                <td class="td-upload_courtyard_hydrants_photo"><?php Html :: page_link_file($data['upload_courtyard_hydrants_photo']); ?></td>
                                                <td class="td-officer_remark_on_courtyard_hydrants_numbers"> <?php echo $data['officer_remark_on_courtyard_hydrants_numbers']; ?></td>
                                                <td class="td-first_aid_hose_reel"> <?php echo $data['first_aid_hose_reel']; ?></td>
                                                <td class="td-is_first_aid_hose_reel_photo_attached_value"> <?php echo $data['is_first_aid_hose_reel_photo_attached_value']; ?></td>
                                                <td class="td-upload_first_aid_hose_reel_photo"><?php Html :: page_link_file($data['upload_first_aid_hose_reel_photo']); ?></td>
                                                <td class="td-officer_remark_on_first_aid_hose_reel"> <?php echo $data['officer_remark_on_first_aid_hose_reel']; ?></td>
                                                <td class="td-fire_alarm_system"> <?php echo $data['fire_alarm_system']; ?></td>
                                                <td class="td-is_fire_alarm_system_photo_attached_value"> <?php echo $data['is_fire_alarm_system_photo_attached_value']; ?></td>
                                                <td class="td-upload_fire_alarm_system_photo"><?php Html :: page_link_file($data['upload_fire_alarm_system_photo']); ?></td>
                                                <td class="td-officer_remark_on_fire_alarm_system"> <?php echo $data['officer_remark_on_fire_alarm_system']; ?></td>
                                                <td class="td-detection_system"> <?php echo $data['detection_system']; ?></td>
                                                <td class="td-is_detection_system_photo_attached_value"> <?php echo $data['is_detection_system_photo_attached_value']; ?></td>
                                                <td class="td-upload_detection_system_photo"><?php Html :: page_link_file($data['upload_detection_system_photo']); ?></td>
                                                <td class="td-officer_remark_on_detection_system"> <?php echo $data['officer_remark_on_detection_system']; ?></td>
                                                <td class="td-location_of_alarm_panel"> <?php echo $data['location_of_alarm_panel']; ?></td>
                                                <td class="td-is_location_of_alarm_panel_photo_attached_value"> <?php echo $data['is_location_of_alarm_panel_photo_attached_value']; ?></td>
                                                <td class="td-upload_location_of_alarm_panel_photo"><?php Html :: page_link_file($data['upload_location_of_alarm_panel_photo']); ?></td>
                                                <td class="td-officer_remark_on_location_of_alarm_panel"> <?php echo $data['officer_remark_on_location_of_alarm_panel']; ?></td>
                                                <td class="td-escape_signages"> <?php echo $data['escape_signages']; ?></td>
                                                <td class="td-is_escape_signages_photo_attached_value"> <?php echo $data['is_escape_signages_photo_attached_value']; ?></td>
                                                <td class="td-upload_escape_signages_photo"><?php Html :: page_link_file($data['upload_escape_signages_photo']); ?></td>
                                                <td class="td-officer_remark_on_escape_signages"> <?php echo $data['officer_remark_on_escape_signages']; ?></td>
                                                <td class="td-pa_system"> <?php echo $data['pa_system']; ?></td>
                                                <td class="td-is_pa_system_photo_attached_value"> <?php echo $data['is_pa_system_photo_attached_value']; ?></td>
                                                <td class="td-upload_pa_system_photo"><?php Html :: page_link_file($data['upload_pa_system_photo']); ?></td>
                                                <td class="td-officer_remark_on_pa_system"> <?php echo $data['officer_remark_on_pa_system']; ?></td>
                                                <td class="td-alternate_source_of_electric_supply_from_separate_sub_station"> <?php echo $data['alternate_source_of_electric_supply_from_separate_sub_station']; ?></td>
                                                <td class="td-is_substation_photo_attached_value"> <?php echo $data['is_substation_photo_attached_value']; ?></td>
                                                <td class="td-upload_substation_photo"><?php Html :: page_link_file($data['upload_substation_photo']); ?></td>
                                                <td class="td-officer_remark_on_alternate_source_of_electric_supply_substation"> <?php echo $data['officer_remark_on_alternate_source_of_electric_supply_substation']; ?></td>
                                                <td class="td-alternate_source_of_electric_supply_from_separate_dg_set"> <?php echo $data['alternate_source_of_electric_supply_from_separate_dg_set']; ?></td>
                                                <td class="td-is_dg_set_photo_attached_value"> <?php echo $data['is_dg_set_photo_attached_value']; ?></td>
                                                <td class="td-upload_dg_set_photo"><?php Html :: page_link_file($data['upload_dg_set_photo']); ?></td>
                                                <td class="td-officer_remark_on_is_dg_set"> <?php echo $data['officer_remark_on_is_dg_set']; ?></td>
                                                <td class="td-user_id"> <?php echo $data['user_id']; ?></td>
                                                <td class="td-date"> <?php echo $data['date']; ?></td>
                                            </tr>
                                            <?php 
                                            }
                                            ?>
                                            <!--endrecord-->
                                        </tbody>
                                        <tbody class="search-data" id="search-data-<?php echo $page_element_id; ?>"></tbody>
                                        <?php
                                        }
                                        ?>
                                    </table>
                                    <?php 
                                    if(empty($records)){
                                    ?>
                                    <h4 class="bg-light text-center border-top text-muted animated bounce  p-3">
                                        <i class="fa fa-ban"></i> No record found
                                    </h4>
                                    <?php
                                    }
                                    ?>
                                </div>
                                <?php
                                if( $show_footer && !empty($records)){
                                ?>
                                <div class=" border-top mt-2">
                                    <div class="row justify-content-center">    
                                        <div class="col-md-auto justify-content-center">    
                                            <div class="p-3 d-flex justify-content-between">    
                                            </div>
                                        </div>
                                        <div class="col">   
                                            <?php
                                            if($show_pagination == true){
                                            $pager = new Pagination($total_records, $record_count);
                                            $pager->route = $this->route;
                                            $pager->show_page_count = true;
                                            $pager->show_record_count = true;
                                            $pager->show_page_limit =true;
                                            $pager->limit_count = $this->limit_count;
                                            $pager->show_page_number_list = true;
                                            $pager->pager_link_range=5;
                                            $pager->render();
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
