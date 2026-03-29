<?php 
//check if current user role is allowed access to the pages
$can_add = ACL::is_allowed("architecture_oc_noc_building_safty_details_second/add");
$can_edit = ACL::is_allowed("architecture_oc_noc_building_safty_details_second/edit");
$can_view = ACL::is_allowed("architecture_oc_noc_building_safty_details_second/view");
$can_delete = ACL::is_allowed("architecture_oc_noc_building_safty_details_second/delete");
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
                    <h4 class="record-title">Architecture Oc Noc Building Safty Details Second</h4>
                </div>
                <div class="col-sm-3 ">
                    <?php if($can_add){ ?>
                    <a  class="btn btn btn-primary my-1" href="<?php print_link("architecture_oc_noc_building_safty_details_second/add") ?>">
                        <i class="fa fa-plus"></i>                              
                        Add New Architecture Oc Noc Building Safty Details Second 
                    </a>
                    <?php } ?>
                </div>
                <div class="col-sm-4 ">
                    <form  class="search" action="<?php print_link('architecture_oc_noc_building_safty_details_second'); ?>" method="get">
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
                                        <a class="text-decoration-none" href="<?php print_link('architecture_oc_noc_building_safty_details_second'); ?>">
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
                                        <a class="text-decoration-none" href="<?php print_link('architecture_oc_noc_building_safty_details_second'); ?>">
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
                            <div id="architecture_oc_noc_building_safty_details_second-list-records">
                                <div id="page-report-body" class="table-responsive">
                                    <table class="table  table-striped table-sm text-center table-bordered">
                                        <thead class="table-header bg-light">
                                            <tr>
                                                <th  class="td-id"> Id</th>
                                                <th  class="td-access"> Access</th>
                                                <th  class="td-road_name_and_width"> Road Name And Width</th>
                                                <th  class="td-officer_remark_on_road_name_and_width"> Officer Remark On Road Name And Width</th>
                                                <th  class="td-internal_acess_width_if_any"> Internal Acess Width If Any</th>
                                                <th  class="td-officer_remark_on_internal_acess_width"> Officer Remark On Internal Acess Width</th>
                                                <th  class="td-entrance_gates_number_and_width"> Entrance Gates Number And Width</th>
                                                <th  class="td-is_entrance_gates_photo_attached_value"> Is Entrance Gates Photo Attached Value</th>
                                                <th  class="td-upload_entrance_gates_photo"> Upload Entrance Gates Photo</th>
                                                <th  class="td-officer_remark_on_entrance_gates_number_and_width"> Officer Remark On Entrance Gates Number And Width</th>
                                                <th  class="td-is_compound_wall_available_value"> Is Compound Wall Available Value</th>
                                                <th  class="td-is_compound_wall_photo_attached_value"> Is Compound Wall Photo Attached Value</th>
                                                <th  class="td-upload_compound_wall_photo"> Upload Compound Wall Photo</th>
                                                <th  class="td-officer_remark_on_compound_wall"> Officer Remark On Compound Wall</th>
                                                <th  class="td-is_courtyards_or_open_spaces_as_per_noc_value"> Is Courtyards Or Open Spaces As Per Noc Value</th>
                                                <th  class="td-officers_remark_on_courtyards_or_open_spaces"> Officers Remark On Courtyards Or Open Spaces</th>
                                                <th  class="td-is_access_for_fire_appliances_on_podium_value"> Is Access For Fire Appliances On Podium Value</th>
                                                <th  class="td-officer_remark_on_access_for_fire_appliances_on_podium"> Officer Remark On Access For Fire Appliances On Podium</th>
                                                <th  class="td-escape_staircase_width"> Escape Staircase Width</th>
                                                <th  class="td-officer_remark_on_escape_staircase_width"> Officer Remark On Escape Staircase Width</th>
                                                <th  class="td-open_type_staircase_width"> Open Type Staircase Width</th>
                                                <th  class="td-is_open_type_photo_attached_value"> Is Open Type Photo Attached Value</th>
                                                <th  class="td-upload_open_type_staircase_photo"> Upload Open Type Staircase Photo</th>
                                                <th  class="td-officer_remark_staircase_width"> Officer Remark Staircase Width</th>
                                                <th  class="td-enclosed_type_pressurized_or_natural_staircase_width"> Enclosed Type Pressurized Or Natural Staircase Width</th>
                                                <th  class="td-is_enclosed_type_photo_attached_value"> Is Enclosed Type Photo Attached Value</th>
                                                <th  class="td-upload_enclosed_type_photo"> Upload Enclosed Type Photo</th>
                                                <th  class="td-officer_remark_on_enclosed_pressurized_or_natural_staircase"> Officer Remark On Enclosed Pressurized Or Natural Staircase</th>
                                                <th  class="td-internal_staircase_type_width_location"> Internal Staircase Type Width Location</th>
                                                <th  class="td-is_internal_staircase_type_width_location_value"> Is Internal Staircase Type Width Location Value</th>
                                                <th  class="td-upload_internal_staircase_type_photo"> Upload Internal Staircase Type Photo</th>
                                                <th  class="td-officer_remark_on_internal_staircase_type_width_location"> Officer Remark On Internal Staircase Type Width Location</th>
                                                <th  class="td-certified_lift_numbers"> Certified Lift Numbers</th>
                                                <th  class="td-is_certified_lift_photo_attached_value"> Is Certified Lift Photo Attached Value</th>
                                                <th  class="td-upload_certified_lift_photo"> Upload Certified Lift Photo</th>
                                                <th  class="td-officer_remark_on_certified_lift"> Officer Remark On Certified Lift</th>
                                                <th  class="td-other_lift_numbers"> Other Lift Numbers</th>
                                                <th  class="td-officer_remark_on_other_lift"> Officer Remark On Other Lift</th>
                                                <th  class="td-lift_lobby_ventilated_pressurized_or_naturally"> Lift Lobby Ventilated Pressurized Or Naturally</th>
                                                <th  class="td-is_lift_lobby_ventilated_photo_attached_value"> Is Lift Lobby Ventilated Photo Attached Value</th>
                                                <th  class="td-upload_lift_lobby_photo"> Upload Lift Lobby Photo</th>
                                                <th  class="td-officer_remark_on_lift_lobby"> Officer Remark On Lift Lobby</th>
                                                <th  class="td-type_of_lift_doors"> Type Of Lift Doors</th>
                                                <th  class="td-is_lift_doors_photo_attached_vlaue"> Is Lift Doors Photo Attached Vlaue</th>
                                                <th  class="td-upload_lift_doors_photo"> Upload Lift Doors Photo</th>
                                                <th  class="td-officer_remark_on_type_of_lift_doors"> Officer Remark On Type Of Lift Doors</th>
                                                <th  class="td-location_of_electric_meter"> Location Of Electric Meter</th>
                                                <th  class="td-is_electric_meter_photo_attached_value"> Is Electric Meter Photo Attached Value</th>
                                                <th  class="td-upload_electric_meter_photo"> Upload Electric Meter Photo</th>
                                                <th  class="td-is_electrical_cable_shaft_sealed"> Is Electrical Cable Shaft Sealed</th>
                                                <th  class="td-is_electrical_cable_shaft_sealed_photo_attached_value"> Is Electrical Cable Shaft Sealed Photo Attached Value</th>
                                                <th  class="td-upload_electrical_cable_shaft_photo"> Upload Electrical Cable Shaft Photo</th>
                                                <th  class="td-number_of_basements"> Number Of Basements</th>
                                                <th  class="td-officer_remark_on_number_of_basements"> Officer Remark On Number Of Basements</th>
                                                <th  class="td-use_of_first_basement"> Use Of First Basement</th>
                                                <th  class="td-officer_remark_on_use_of_first_basement"> Officer Remark On Use Of First Basement</th>
                                                <th  class="td-use_of_second_basement"> Use Of Second Basement</th>
                                                <th  class="td-officer_remark_on_use_of_second_basement"> Officer Remark On Use Of Second Basement</th>
                                                <th  class="td-use_of_third_basement"> Use Of Third Basement</th>
                                                <th  class="td-officer_remark_on_use_of_third_basement"> Officer Remark On Use Of Third Basement</th>
                                                <th  class="td-no_of_staircase_or_ramps_for_basement"> No Of Staircase Or Ramps For Basement</th>
                                                <th  class="td-officer_remark_on_no_of_staircase_or_ramps_for_basement"> Officer Remark On No Of Staircase Or Ramps For Basement</th>
                                                <th  class="td-is_basement_staircase_as_per_noc"> Is Basement Staircase As Per Noc</th>
                                                <th  class="td-is_basement_staircase_as_per_noc_photo_attached_value"> Is Basement Staircase As Per Noc Photo Attached Value</th>
                                                <th  class="td-upload_basement_staircase_as_per_noc_photo"> Upload Basement Staircase As Per Noc Photo</th>
                                                <th  class="td-officer_remark_on_basement_staircase_as_per_noc"> Officer Remark On Basement Staircase As Per Noc</th>
                                                <th  class="td-type_of_ventilation"> Type Of Ventilation</th>
                                                <th  class="td-is_ventilation_photo_attached_value"> Is Ventilation Photo Attached Value</th>
                                                <th  class="td-upload_ventilation_photo"> Upload Ventilation Photo</th>
                                                <th  class="td-officer_remark_on_ventilation_type"> Officer Remark On Ventilation Type</th>
                                                <th  class="td-compartmentation"> Compartmentation</th>
                                                <th  class="td-is_compartmentation_photo_attached_value"> Is Compartmentation Photo Attached Value</th>
                                                <th  class="td-upload_compartmentation_photo"> Upload Compartmentation Photo</th>
                                                <th  class="td-officers_remark_compartmentation"> Officers Remark Compartmentation</th>
                                                <th  class="td-entrance_and_kitchen_doors"> Entrance And Kitchen Doors</th>
                                                <th  class="td-is_entrance_and_kitchen_doors_photo_attached_value"> Is Entrance And Kitchen Doors Photo Attached Value</th>
                                                <th  class="td-upload_entrance_and_kitchen_doors_photo"> Upload Entrance And Kitchen Doors Photo</th>
                                                <th  class="td-officers_remark_on_entrance_and_kitchen_doors"> Officers Remark On Entrance And Kitchen Doors</th>
                                                <th  class="td-duplex_flat_entry"> Duplex Flat Entry</th>
                                                <th  class="td-is_duplex_flat_entry_photo_attached_value"> Is Duplex Flat Entry Photo Attached Value</th>
                                                <th  class="td-upload_duplex_flat_entry_photo"> Upload Duplex Flat Entry Photo</th>
                                                <th  class="td-officer_remark_on_is_duplex_flat_entry"> Officer Remark On Is Duplex Flat Entry</th>
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
                                                <td class="td-id"><a href="<?php print_link("architecture_oc_noc_building_safty_details_second/view/$data[id]") ?>"><?php echo $data['id']; ?></a></td>
                                                <td class="td-access"> <?php echo $data['access']; ?></td>
                                                <td class="td-road_name_and_width"> <?php echo $data['road_name_and_width']; ?></td>
                                                <td class="td-officer_remark_on_road_name_and_width"> <?php echo $data['officer_remark_on_road_name_and_width']; ?></td>
                                                <td class="td-internal_acess_width_if_any"> <?php echo $data['internal_acess_width_if_any']; ?></td>
                                                <td class="td-officer_remark_on_internal_acess_width"> <?php echo $data['officer_remark_on_internal_acess_width']; ?></td>
                                                <td class="td-entrance_gates_number_and_width"> <?php echo $data['entrance_gates_number_and_width']; ?></td>
                                                <td class="td-is_entrance_gates_photo_attached_value"> <?php echo $data['is_entrance_gates_photo_attached_value']; ?></td>
                                                <td class="td-upload_entrance_gates_photo"><?php Html :: page_link_file($data['upload_entrance_gates_photo']); ?></td>
                                                <td class="td-officer_remark_on_entrance_gates_number_and_width"> <?php echo $data['officer_remark_on_entrance_gates_number_and_width']; ?></td>
                                                <td class="td-is_compound_wall_available_value"> <?php echo $data['is_compound_wall_available_value']; ?></td>
                                                <td class="td-is_compound_wall_photo_attached_value"> <?php echo $data['is_compound_wall_photo_attached_value']; ?></td>
                                                <td class="td-upload_compound_wall_photo"><?php Html :: page_link_file($data['upload_compound_wall_photo']); ?></td>
                                                <td class="td-officer_remark_on_compound_wall"> <?php echo $data['officer_remark_on_compound_wall']; ?></td>
                                                <td class="td-is_courtyards_or_open_spaces_as_per_noc_value"> <?php echo $data['is_courtyards_or_open_spaces_as_per_noc_value']; ?></td>
                                                <td class="td-officers_remark_on_courtyards_or_open_spaces"> <?php echo $data['officers_remark_on_courtyards_or_open_spaces']; ?></td>
                                                <td class="td-is_access_for_fire_appliances_on_podium_value"> <?php echo $data['is_access_for_fire_appliances_on_podium_value']; ?></td>
                                                <td class="td-officer_remark_on_access_for_fire_appliances_on_podium"> <?php echo $data['officer_remark_on_access_for_fire_appliances_on_podium']; ?></td>
                                                <td class="td-escape_staircase_width"> <?php echo $data['escape_staircase_width']; ?></td>
                                                <td class="td-officer_remark_on_escape_staircase_width"> <?php echo $data['officer_remark_on_escape_staircase_width']; ?></td>
                                                <td class="td-open_type_staircase_width"> <?php echo $data['open_type_staircase_width']; ?></td>
                                                <td class="td-is_open_type_photo_attached_value"> <?php echo $data['is_open_type_photo_attached_value']; ?></td>
                                                <td class="td-upload_open_type_staircase_photo"><?php Html :: page_link_file($data['upload_open_type_staircase_photo']); ?></td>
                                                <td class="td-officer_remark_staircase_width"> <?php echo $data['officer_remark_staircase_width']; ?></td>
                                                <td class="td-enclosed_type_pressurized_or_natural_staircase_width"> <?php echo $data['enclosed_type_pressurized_or_natural_staircase_width']; ?></td>
                                                <td class="td-is_enclosed_type_photo_attached_value"> <?php echo $data['is_enclosed_type_photo_attached_value']; ?></td>
                                                <td class="td-upload_enclosed_type_photo"><?php Html :: page_link_file($data['upload_enclosed_type_photo']); ?></td>
                                                <td class="td-officer_remark_on_enclosed_pressurized_or_natural_staircase"> <?php echo $data['officer_remark_on_enclosed_pressurized_or_natural_staircase']; ?></td>
                                                <td class="td-internal_staircase_type_width_location"> <?php echo $data['internal_staircase_type_width_location']; ?></td>
                                                <td class="td-is_internal_staircase_type_width_location_value"> <?php echo $data['is_internal_staircase_type_width_location_value']; ?></td>
                                                <td class="td-upload_internal_staircase_type_photo"><?php Html :: page_link_file($data['upload_internal_staircase_type_photo']); ?></td>
                                                <td class="td-officer_remark_on_internal_staircase_type_width_location"> <?php echo $data['officer_remark_on_internal_staircase_type_width_location']; ?></td>
                                                <td class="td-certified_lift_numbers"> <?php echo $data['certified_lift_numbers']; ?></td>
                                                <td class="td-is_certified_lift_photo_attached_value"> <?php echo $data['is_certified_lift_photo_attached_value']; ?></td>
                                                <td class="td-upload_certified_lift_photo"><?php Html :: page_link_file($data['upload_certified_lift_photo']); ?></td>
                                                <td class="td-officer_remark_on_certified_lift"> <?php echo $data['officer_remark_on_certified_lift']; ?></td>
                                                <td class="td-other_lift_numbers"> <?php echo $data['other_lift_numbers']; ?></td>
                                                <td class="td-officer_remark_on_other_lift"> <?php echo $data['officer_remark_on_other_lift']; ?></td>
                                                <td class="td-lift_lobby_ventilated_pressurized_or_naturally"> <?php echo $data['lift_lobby_ventilated_pressurized_or_naturally']; ?></td>
                                                <td class="td-is_lift_lobby_ventilated_photo_attached_value"> <?php echo $data['is_lift_lobby_ventilated_photo_attached_value']; ?></td>
                                                <td class="td-upload_lift_lobby_photo"><?php Html :: page_link_file($data['upload_lift_lobby_photo']); ?></td>
                                                <td class="td-officer_remark_on_lift_lobby"> <?php echo $data['officer_remark_on_lift_lobby']; ?></td>
                                                <td class="td-type_of_lift_doors"> <?php echo $data['type_of_lift_doors']; ?></td>
                                                <td class="td-is_lift_doors_photo_attached_vlaue"> <?php echo $data['is_lift_doors_photo_attached_vlaue']; ?></td>
                                                <td class="td-upload_lift_doors_photo"><?php Html :: page_link_file($data['upload_lift_doors_photo']); ?></td>
                                                <td class="td-officer_remark_on_type_of_lift_doors"> <?php echo $data['officer_remark_on_type_of_lift_doors']; ?></td>
                                                <td class="td-location_of_electric_meter"> <?php echo $data['location_of_electric_meter']; ?></td>
                                                <td class="td-is_electric_meter_photo_attached_value"> <?php echo $data['is_electric_meter_photo_attached_value']; ?></td>
                                                <td class="td-upload_electric_meter_photo"><?php Html :: page_link_file($data['upload_electric_meter_photo']); ?></td>
                                                <td class="td-is_electrical_cable_shaft_sealed"> <?php echo $data['is_electrical_cable_shaft_sealed']; ?></td>
                                                <td class="td-is_electrical_cable_shaft_sealed_photo_attached_value"> <?php echo $data['is_electrical_cable_shaft_sealed_photo_attached_value']; ?></td>
                                                <td class="td-upload_electrical_cable_shaft_photo"><?php Html :: page_link_file($data['upload_electrical_cable_shaft_photo']); ?></td>
                                                <td class="td-number_of_basements"> <?php echo $data['number_of_basements']; ?></td>
                                                <td class="td-officer_remark_on_number_of_basements"> <?php echo $data['officer_remark_on_number_of_basements']; ?></td>
                                                <td class="td-use_of_first_basement"> <?php echo $data['use_of_first_basement']; ?></td>
                                                <td class="td-officer_remark_on_use_of_first_basement"> <?php echo $data['officer_remark_on_use_of_first_basement']; ?></td>
                                                <td class="td-use_of_second_basement"> <?php echo $data['use_of_second_basement']; ?></td>
                                                <td class="td-officer_remark_on_use_of_second_basement"> <?php echo $data['officer_remark_on_use_of_second_basement']; ?></td>
                                                <td class="td-use_of_third_basement"> <?php echo $data['use_of_third_basement']; ?></td>
                                                <td class="td-officer_remark_on_use_of_third_basement"> <?php echo $data['officer_remark_on_use_of_third_basement']; ?></td>
                                                <td class="td-no_of_staircase_or_ramps_for_basement"> <?php echo $data['no_of_staircase_or_ramps_for_basement']; ?></td>
                                                <td class="td-officer_remark_on_no_of_staircase_or_ramps_for_basement"> <?php echo $data['officer_remark_on_no_of_staircase_or_ramps_for_basement']; ?></td>
                                                <td class="td-is_basement_staircase_as_per_noc"> <?php echo $data['is_basement_staircase_as_per_noc']; ?></td>
                                                <td class="td-is_basement_staircase_as_per_noc_photo_attached_value"> <?php echo $data['is_basement_staircase_as_per_noc_photo_attached_value']; ?></td>
                                                <td class="td-upload_basement_staircase_as_per_noc_photo"><?php Html :: page_link_file($data['upload_basement_staircase_as_per_noc_photo']); ?></td>
                                                <td class="td-officer_remark_on_basement_staircase_as_per_noc"> <?php echo $data['officer_remark_on_basement_staircase_as_per_noc']; ?></td>
                                                <td class="td-type_of_ventilation"> <?php echo $data['type_of_ventilation']; ?></td>
                                                <td class="td-is_ventilation_photo_attached_value"> <?php echo $data['is_ventilation_photo_attached_value']; ?></td>
                                                <td class="td-upload_ventilation_photo"><?php Html :: page_link_file($data['upload_ventilation_photo']); ?></td>
                                                <td class="td-officer_remark_on_ventilation_type"> <?php echo $data['officer_remark_on_ventilation_type']; ?></td>
                                                <td class="td-compartmentation"> <?php echo $data['compartmentation']; ?></td>
                                                <td class="td-is_compartmentation_photo_attached_value"> <?php echo $data['is_compartmentation_photo_attached_value']; ?></td>
                                                <td class="td-upload_compartmentation_photo"><?php Html :: page_link_file($data['upload_compartmentation_photo']); ?></td>
                                                <td class="td-officers_remark_compartmentation"> <?php echo $data['officers_remark_compartmentation']; ?></td>
                                                <td class="td-entrance_and_kitchen_doors"> <?php echo $data['entrance_and_kitchen_doors']; ?></td>
                                                <td class="td-is_entrance_and_kitchen_doors_photo_attached_value"> <?php echo $data['is_entrance_and_kitchen_doors_photo_attached_value']; ?></td>
                                                <td class="td-upload_entrance_and_kitchen_doors_photo"><?php Html :: page_link_file($data['upload_entrance_and_kitchen_doors_photo']); ?></td>
                                                <td class="td-officers_remark_on_entrance_and_kitchen_doors"> <?php echo $data['officers_remark_on_entrance_and_kitchen_doors']; ?></td>
                                                <td class="td-duplex_flat_entry"> <?php echo $data['duplex_flat_entry']; ?></td>
                                                <td class="td-is_duplex_flat_entry_photo_attached_value"> <?php echo $data['is_duplex_flat_entry_photo_attached_value']; ?></td>
                                                <td class="td-upload_duplex_flat_entry_photo"><?php Html :: page_link_file($data['upload_duplex_flat_entry_photo']); ?></td>
                                                <td class="td-officer_remark_on_is_duplex_flat_entry"> <?php echo $data['officer_remark_on_is_duplex_flat_entry']; ?></td>
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
