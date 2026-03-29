<?php 
//check if current user role is allowed access to the pages
$can_add = ACL::is_allowed("architecture_oc_noc_building_safty_details_second/add");
$can_edit = ACL::is_allowed("architecture_oc_noc_building_safty_details_second/edit");
$can_view = ACL::is_allowed("architecture_oc_noc_building_safty_details_second/view");
$can_delete = ACL::is_allowed("architecture_oc_noc_building_safty_details_second/delete");
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
                    <h4 class="record-title">View  Architecture Oc Noc Building Safty Details Second</h4>
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
                                    <tr  class="td-access">
                                        <th class="title"> Access: </th>
                                        <td class="value"> <?php echo $data['access']; ?></td>
                                    </tr>
                                    <tr  class="td-road_name_and_width">
                                        <th class="title"> Road Name And Width: </th>
                                        <td class="value"> <?php echo $data['road_name_and_width']; ?></td>
                                    </tr>
                                    <tr  class="td-officer_remark_on_road_name_and_width">
                                        <th class="title"> Officer Remark On Road Name And Width: </th>
                                        <td class="value"> <?php echo $data['officer_remark_on_road_name_and_width']; ?></td>
                                    </tr>
                                    <tr  class="td-internal_acess_width_if_any">
                                        <th class="title"> Internal Acess Width If Any: </th>
                                        <td class="value"> <?php echo $data['internal_acess_width_if_any']; ?></td>
                                    </tr>
                                    <tr  class="td-officer_remark_on_internal_acess_width">
                                        <th class="title"> Officer Remark On Internal Acess Width: </th>
                                        <td class="value"> <?php echo $data['officer_remark_on_internal_acess_width']; ?></td>
                                    </tr>
                                    <tr  class="td-entrance_gates_number_and_width">
                                        <th class="title"> Entrance Gates Number And Width: </th>
                                        <td class="value"> <?php echo $data['entrance_gates_number_and_width']; ?></td>
                                    </tr>
                                    <tr  class="td-is_entrance_gates_photo_attached">
                                        <th class="title"> Is Entrance Gates Photo Attached: </th>
                                        <td class="value"> <?php echo $data['is_entrance_gates_photo_attached']; ?></td>
                                    </tr>
                                    <tr  class="td-is_entrance_gates_photo_attached_value">
                                        <th class="title"> Is Entrance Gates Photo Attached Value: </th>
                                        <td class="value"> <?php echo $data['is_entrance_gates_photo_attached_value']; ?></td>
                                    </tr>
                                    <tr  class="td-upload_entrance_gates_photo">
                                        <th class="title"> Upload Entrance Gates Photo: </th>
                                        <td class="value"> <?php echo $data['upload_entrance_gates_photo']; ?></td>
                                    </tr>
                                    <tr  class="td-officer_remark_on_entrance_gates_number_and_width">
                                        <th class="title"> Officer Remark On Entrance Gates Number And Width: </th>
                                        <td class="value"> <?php echo $data['officer_remark_on_entrance_gates_number_and_width']; ?></td>
                                    </tr>
                                    <tr  class="td-is_compound_wall_available_id">
                                        <th class="title"> Is Compound Wall Available Id: </th>
                                        <td class="value"> <?php echo $data['is_compound_wall_available_id']; ?></td>
                                    </tr>
                                    <tr  class="td-is_compound_wall_available_value">
                                        <th class="title"> Is Compound Wall Available Value: </th>
                                        <td class="value"> <?php echo $data['is_compound_wall_available_value']; ?></td>
                                    </tr>
                                    <tr  class="td-is_compound_wall_photo_attached_id">
                                        <th class="title"> Is Compound Wall Photo Attached Id: </th>
                                        <td class="value"> <?php echo $data['is_compound_wall_photo_attached_id']; ?></td>
                                    </tr>
                                    <tr  class="td-is_compound_wall_photo_attached_value">
                                        <th class="title"> Is Compound Wall Photo Attached Value: </th>
                                        <td class="value"> <?php echo $data['is_compound_wall_photo_attached_value']; ?></td>
                                    </tr>
                                    <tr  class="td-upload_compound_wall_photo">
                                        <th class="title"> Upload Compound Wall Photo: </th>
                                        <td class="value"> <?php echo $data['upload_compound_wall_photo']; ?></td>
                                    </tr>
                                    <tr  class="td-officer_remark_on_compound_wall">
                                        <th class="title"> Officer Remark On Compound Wall: </th>
                                        <td class="value"> <?php echo $data['officer_remark_on_compound_wall']; ?></td>
                                    </tr>
                                    <tr  class="td-is_courtyards_or_open_spaces_as_per_noc_id">
                                        <th class="title"> Is Courtyards Or Open Spaces As Per Noc Id: </th>
                                        <td class="value"> <?php echo $data['is_courtyards_or_open_spaces_as_per_noc_id']; ?></td>
                                    </tr>
                                    <tr  class="td-is_courtyards_or_open_spaces_as_per_noc_value">
                                        <th class="title"> Is Courtyards Or Open Spaces As Per Noc Value: </th>
                                        <td class="value"> <?php echo $data['is_courtyards_or_open_spaces_as_per_noc_value']; ?></td>
                                    </tr>
                                    <tr  class="td-officers_remark_on_courtyards_or_open_spaces">
                                        <th class="title"> Officers Remark On Courtyards Or Open Spaces: </th>
                                        <td class="value"> <?php echo $data['officers_remark_on_courtyards_or_open_spaces']; ?></td>
                                    </tr>
                                    <tr  class="td-is_access_for_fire_appliances_on_podium_id">
                                        <th class="title"> Is Access For Fire Appliances On Podium Id: </th>
                                        <td class="value"> <?php echo $data['is_access_for_fire_appliances_on_podium_id']; ?></td>
                                    </tr>
                                    <tr  class="td-is_access_for_fire_appliances_on_podium_value">
                                        <th class="title"> Is Access For Fire Appliances On Podium Value: </th>
                                        <td class="value"> <?php echo $data['is_access_for_fire_appliances_on_podium_value']; ?></td>
                                    </tr>
                                    <tr  class="td-officer_remark_on_access_for_fire_appliances_on_podium">
                                        <th class="title"> Officer Remark On Access For Fire Appliances On Podium: </th>
                                        <td class="value"> <?php echo $data['officer_remark_on_access_for_fire_appliances_on_podium']; ?></td>
                                    </tr>
                                    <tr  class="td-escape_staircase_width">
                                        <th class="title"> Escape Staircase Width: </th>
                                        <td class="value"> <?php echo $data['escape_staircase_width']; ?></td>
                                    </tr>
                                    <tr  class="td-officer_remark_on_escape_staircase_width">
                                        <th class="title"> Officer Remark On Escape Staircase Width: </th>
                                        <td class="value"> <?php echo $data['officer_remark_on_escape_staircase_width']; ?></td>
                                    </tr>
                                    <tr  class="td-open_type_staircase_width">
                                        <th class="title"> Open Type Staircase Width: </th>
                                        <td class="value"> <?php echo $data['open_type_staircase_width']; ?></td>
                                    </tr>
                                    <tr  class="td-is_open_type_photo_attached_id">
                                        <th class="title"> Is Open Type Photo Attached Id: </th>
                                        <td class="value"> <?php echo $data['is_open_type_photo_attached_id']; ?></td>
                                    </tr>
                                    <tr  class="td-is_open_type_photo_attached_value">
                                        <th class="title"> Is Open Type Photo Attached Value: </th>
                                        <td class="value"> <?php echo $data['is_open_type_photo_attached_value']; ?></td>
                                    </tr>
                                    <tr  class="td-upload_open_type_staircase_photo">
                                        <th class="title"> Upload Open Type Staircase Photo: </th>
                                        <td class="value"> <?php echo $data['upload_open_type_staircase_photo']; ?></td>
                                    </tr>
                                    <tr  class="td-officer_remark_staircase_width">
                                        <th class="title"> Officer Remark Staircase Width: </th>
                                        <td class="value"> <?php echo $data['officer_remark_staircase_width']; ?></td>
                                    </tr>
                                    <tr  class="td-enclosed_type_pressurized_or_natural_staircase_width">
                                        <th class="title"> Enclosed Type Pressurized Or Natural Staircase Width: </th>
                                        <td class="value"> <?php echo $data['enclosed_type_pressurized_or_natural_staircase_width']; ?></td>
                                    </tr>
                                    <tr  class="td-is_enclosed_type_photo_attached_id">
                                        <th class="title"> Is Enclosed Type Photo Attached Id: </th>
                                        <td class="value"> <?php echo $data['is_enclosed_type_photo_attached_id']; ?></td>
                                    </tr>
                                    <tr  class="td-is_enclosed_type_photo_attached_value">
                                        <th class="title"> Is Enclosed Type Photo Attached Value: </th>
                                        <td class="value"> <?php echo $data['is_enclosed_type_photo_attached_value']; ?></td>
                                    </tr>
                                    <tr  class="td-upload_enclosed_type_photo">
                                        <th class="title"> Upload Enclosed Type Photo: </th>
                                        <td class="value"> <?php echo $data['upload_enclosed_type_photo']; ?></td>
                                    </tr>
                                    <tr  class="td-officer_remark_on_enclosed_pressurized_or_natural_staircase">
                                        <th class="title"> Officer Remark On Enclosed Pressurized Or Natural Staircase: </th>
                                        <td class="value"> <?php echo $data['officer_remark_on_enclosed_pressurized_or_natural_staircase']; ?></td>
                                    </tr>
                                    <tr  class="td-internal_staircase_type_width_location">
                                        <th class="title"> Internal Staircase Type Width Location: </th>
                                        <td class="value"> <?php echo $data['internal_staircase_type_width_location']; ?></td>
                                    </tr>
                                    <tr  class="td-is_internal_staircase_type_width_location_id">
                                        <th class="title"> Is Internal Staircase Type Width Location Id: </th>
                                        <td class="value"> <?php echo $data['is_internal_staircase_type_width_location_id']; ?></td>
                                    </tr>
                                    <tr  class="td-is_internal_staircase_type_width_location_value">
                                        <th class="title"> Is Internal Staircase Type Width Location Value: </th>
                                        <td class="value"> <?php echo $data['is_internal_staircase_type_width_location_value']; ?></td>
                                    </tr>
                                    <tr  class="td-upload_internal_staircase_type_photo">
                                        <th class="title"> Upload Internal Staircase Type Photo: </th>
                                        <td class="value"> <?php echo $data['upload_internal_staircase_type_photo']; ?></td>
                                    </tr>
                                    <tr  class="td-officer_remark_on_internal_staircase_type_width_location">
                                        <th class="title"> Officer Remark On Internal Staircase Type Width Location: </th>
                                        <td class="value"> <?php echo $data['officer_remark_on_internal_staircase_type_width_location']; ?></td>
                                    </tr>
                                    <tr  class="td-certified_lift_numbers">
                                        <th class="title"> Certified Lift Numbers: </th>
                                        <td class="value"> <?php echo $data['certified_lift_numbers']; ?></td>
                                    </tr>
                                    <tr  class="td-is_certified_lift_photo_attached_id">
                                        <th class="title"> Is Certified Lift Photo Attached Id: </th>
                                        <td class="value"> <?php echo $data['is_certified_lift_photo_attached_id']; ?></td>
                                    </tr>
                                    <tr  class="td-is_certified_lift_photo_attached_value">
                                        <th class="title"> Is Certified Lift Photo Attached Value: </th>
                                        <td class="value"> <?php echo $data['is_certified_lift_photo_attached_value']; ?></td>
                                    </tr>
                                    <tr  class="td-upload_certified_lift_photo">
                                        <th class="title"> Upload Certified Lift Photo: </th>
                                        <td class="value"> <?php echo $data['upload_certified_lift_photo']; ?></td>
                                    </tr>
                                    <tr  class="td-officer_remark_on_certified_lift">
                                        <th class="title"> Officer Remark On Certified Lift: </th>
                                        <td class="value"> <?php echo $data['officer_remark_on_certified_lift']; ?></td>
                                    </tr>
                                    <tr  class="td-other_lift_numbers">
                                        <th class="title"> Other Lift Numbers: </th>
                                        <td class="value"> <?php echo $data['other_lift_numbers']; ?></td>
                                    </tr>
                                    <tr  class="td-officer_remark_on_other_lift">
                                        <th class="title"> Officer Remark On Other Lift: </th>
                                        <td class="value"> <?php echo $data['officer_remark_on_other_lift']; ?></td>
                                    </tr>
                                    <tr  class="td-lift_lobby_ventilated_pressurized_or_naturally">
                                        <th class="title"> Lift Lobby Ventilated Pressurized Or Naturally: </th>
                                        <td class="value"> <?php echo $data['lift_lobby_ventilated_pressurized_or_naturally']; ?></td>
                                    </tr>
                                    <tr  class="td-is_lift_lobby_ventilated_photo_attached_id">
                                        <th class="title"> Is Lift Lobby Ventilated Photo Attached Id: </th>
                                        <td class="value"> <?php echo $data['is_lift_lobby_ventilated_photo_attached_id']; ?></td>
                                    </tr>
                                    <tr  class="td-is_lift_lobby_ventilated_photo_attached_value">
                                        <th class="title"> Is Lift Lobby Ventilated Photo Attached Value: </th>
                                        <td class="value"> <?php echo $data['is_lift_lobby_ventilated_photo_attached_value']; ?></td>
                                    </tr>
                                    <tr  class="td-upload_lift_lobby_photo">
                                        <th class="title"> Upload Lift Lobby Photo: </th>
                                        <td class="value"> <?php echo $data['upload_lift_lobby_photo']; ?></td>
                                    </tr>
                                    <tr  class="td-officer_remark_on_lift_lobby">
                                        <th class="title"> Officer Remark On Lift Lobby: </th>
                                        <td class="value"> <?php echo $data['officer_remark_on_lift_lobby']; ?></td>
                                    </tr>
                                    <tr  class="td-type_of_lift_doors">
                                        <th class="title"> Type Of Lift Doors: </th>
                                        <td class="value"> <?php echo $data['type_of_lift_doors']; ?></td>
                                    </tr>
                                    <tr  class="td-is_lift_doors_photo_attached_id">
                                        <th class="title"> Is Lift Doors Photo Attached Id: </th>
                                        <td class="value"> <?php echo $data['is_lift_doors_photo_attached_id']; ?></td>
                                    </tr>
                                    <tr  class="td-is_lift_doors_photo_attached_vlaue">
                                        <th class="title"> Is Lift Doors Photo Attached Vlaue: </th>
                                        <td class="value"> <?php echo $data['is_lift_doors_photo_attached_vlaue']; ?></td>
                                    </tr>
                                    <tr  class="td-upload_lift_doors_photo">
                                        <th class="title"> Upload Lift Doors Photo: </th>
                                        <td class="value"> <?php echo $data['upload_lift_doors_photo']; ?></td>
                                    </tr>
                                    <tr  class="td-officer_remark_on_type_of_lift_doors">
                                        <th class="title"> Officer Remark On Type Of Lift Doors: </th>
                                        <td class="value"> <?php echo $data['officer_remark_on_type_of_lift_doors']; ?></td>
                                    </tr>
                                    <tr  class="td-location_of_electric_meter">
                                        <th class="title"> Location Of Electric Meter: </th>
                                        <td class="value"> <?php echo $data['location_of_electric_meter']; ?></td>
                                    </tr>
                                    <tr  class="td-is_electric_meter_photo_attached_id">
                                        <th class="title"> Is Electric Meter Photo Attached Id: </th>
                                        <td class="value"> <?php echo $data['is_electric_meter_photo_attached_id']; ?></td>
                                    </tr>
                                    <tr  class="td-is_electric_meter_photo_attached_value">
                                        <th class="title"> Is Electric Meter Photo Attached Value: </th>
                                        <td class="value"> <?php echo $data['is_electric_meter_photo_attached_value']; ?></td>
                                    </tr>
                                    <tr  class="td-upload_electric_meter_photo">
                                        <th class="title"> Upload Electric Meter Photo: </th>
                                        <td class="value"> <?php echo $data['upload_electric_meter_photo']; ?></td>
                                    </tr>
                                    <tr  class="td-is_electrical_cable_shaft_sealed">
                                        <th class="title"> Is Electrical Cable Shaft Sealed: </th>
                                        <td class="value"> <?php echo $data['is_electrical_cable_shaft_sealed']; ?></td>
                                    </tr>
                                    <tr  class="td-is_electrical_cable_shaft_sealed_photo_attached_id">
                                        <th class="title"> Is Electrical Cable Shaft Sealed Photo Attached Id: </th>
                                        <td class="value"> <?php echo $data['is_electrical_cable_shaft_sealed_photo_attached_id']; ?></td>
                                    </tr>
                                    <tr  class="td-is_electrical_cable_shaft_sealed_photo_attached_value">
                                        <th class="title"> Is Electrical Cable Shaft Sealed Photo Attached Value: </th>
                                        <td class="value"> <?php echo $data['is_electrical_cable_shaft_sealed_photo_attached_value']; ?></td>
                                    </tr>
                                    <tr  class="td-upload_electrical_cable_shaft_photo">
                                        <th class="title"> Upload Electrical Cable Shaft Photo: </th>
                                        <td class="value"> <?php echo $data['upload_electrical_cable_shaft_photo']; ?></td>
                                    </tr>
                                    <tr  class="td-number_of_basements">
                                        <th class="title"> Number Of Basements: </th>
                                        <td class="value"> <?php echo $data['number_of_basements']; ?></td>
                                    </tr>
                                    <tr  class="td-officer_remark_on_number_of_basements">
                                        <th class="title"> Officer Remark On Number Of Basements: </th>
                                        <td class="value"> <?php echo $data['officer_remark_on_number_of_basements']; ?></td>
                                    </tr>
                                    <tr  class="td-use_of_first_basement">
                                        <th class="title"> Use Of First Basement: </th>
                                        <td class="value"> <?php echo $data['use_of_first_basement']; ?></td>
                                    </tr>
                                    <tr  class="td-officer_remark_on_use_of_first_basement">
                                        <th class="title"> Officer Remark On Use Of First Basement: </th>
                                        <td class="value"> <?php echo $data['officer_remark_on_use_of_first_basement']; ?></td>
                                    </tr>
                                    <tr  class="td-use_of_second_basement">
                                        <th class="title"> Use Of Second Basement: </th>
                                        <td class="value"> <?php echo $data['use_of_second_basement']; ?></td>
                                    </tr>
                                    <tr  class="td-officer_remark_on_use_of_second_basement">
                                        <th class="title"> Officer Remark On Use Of Second Basement: </th>
                                        <td class="value"> <?php echo $data['officer_remark_on_use_of_second_basement']; ?></td>
                                    </tr>
                                    <tr  class="td-use_of_third_basement">
                                        <th class="title"> Use Of Third Basement: </th>
                                        <td class="value"> <?php echo $data['use_of_third_basement']; ?></td>
                                    </tr>
                                    <tr  class="td-officer_remark_on_use_of_third_basement">
                                        <th class="title"> Officer Remark On Use Of Third Basement: </th>
                                        <td class="value"> <?php echo $data['officer_remark_on_use_of_third_basement']; ?></td>
                                    </tr>
                                    <tr  class="td-no_of_staircase_or_ramps_for_basement">
                                        <th class="title"> No Of Staircase Or Ramps For Basement: </th>
                                        <td class="value"> <?php echo $data['no_of_staircase_or_ramps_for_basement']; ?></td>
                                    </tr>
                                    <tr  class="td-officer_remark_on_no_of_staircase_or_ramps_for_basement">
                                        <th class="title"> Officer Remark On No Of Staircase Or Ramps For Basement: </th>
                                        <td class="value"> <?php echo $data['officer_remark_on_no_of_staircase_or_ramps_for_basement']; ?></td>
                                    </tr>
                                    <tr  class="td-is_basement_staircase_as_per_noc">
                                        <th class="title"> Is Basement Staircase As Per Noc: </th>
                                        <td class="value"> <?php echo $data['is_basement_staircase_as_per_noc']; ?></td>
                                    </tr>
                                    <tr  class="td-is_basement_staircase_as_per_noc_photo_attached_id">
                                        <th class="title"> Is Basement Staircase As Per Noc Photo Attached Id: </th>
                                        <td class="value"> <?php echo $data['is_basement_staircase_as_per_noc_photo_attached_id']; ?></td>
                                    </tr>
                                    <tr  class="td-is_basement_staircase_as_per_noc_photo_attached_value">
                                        <th class="title"> Is Basement Staircase As Per Noc Photo Attached Value: </th>
                                        <td class="value"> <?php echo $data['is_basement_staircase_as_per_noc_photo_attached_value']; ?></td>
                                    </tr>
                                    <tr  class="td-upload_basement_staircase_as_per_noc_photo">
                                        <th class="title"> Upload Basement Staircase As Per Noc Photo: </th>
                                        <td class="value"> <?php echo $data['upload_basement_staircase_as_per_noc_photo']; ?></td>
                                    </tr>
                                    <tr  class="td-officer_remark_on_basement_staircase_as_per_noc">
                                        <th class="title"> Officer Remark On Basement Staircase As Per Noc: </th>
                                        <td class="value"> <?php echo $data['officer_remark_on_basement_staircase_as_per_noc']; ?></td>
                                    </tr>
                                    <tr  class="td-type_of_ventilation">
                                        <th class="title"> Type Of Ventilation: </th>
                                        <td class="value"> <?php echo $data['type_of_ventilation']; ?></td>
                                    </tr>
                                    <tr  class="td-is_ventilation_photo_attached_id">
                                        <th class="title"> Is Ventilation Photo Attached Id: </th>
                                        <td class="value"> <?php echo $data['is_ventilation_photo_attached_id']; ?></td>
                                    </tr>
                                    <tr  class="td-is_ventilation_photo_attached_value">
                                        <th class="title"> Is Ventilation Photo Attached Value: </th>
                                        <td class="value"> <?php echo $data['is_ventilation_photo_attached_value']; ?></td>
                                    </tr>
                                    <tr  class="td-upload_ventilation_photo">
                                        <th class="title"> Upload Ventilation Photo: </th>
                                        <td class="value"> <?php echo $data['upload_ventilation_photo']; ?></td>
                                    </tr>
                                    <tr  class="td-officer_remark_on_ventilation_type">
                                        <th class="title"> Officer Remark On Ventilation Type: </th>
                                        <td class="value"> <?php echo $data['officer_remark_on_ventilation_type']; ?></td>
                                    </tr>
                                    <tr  class="td-compartmentation">
                                        <th class="title"> Compartmentation: </th>
                                        <td class="value"> <?php echo $data['compartmentation']; ?></td>
                                    </tr>
                                    <tr  class="td-is_compartmentation_photo_attached_id">
                                        <th class="title"> Is Compartmentation Photo Attached Id: </th>
                                        <td class="value"> <?php echo $data['is_compartmentation_photo_attached_id']; ?></td>
                                    </tr>
                                    <tr  class="td-is_compartmentation_photo_attached_value">
                                        <th class="title"> Is Compartmentation Photo Attached Value: </th>
                                        <td class="value"> <?php echo $data['is_compartmentation_photo_attached_value']; ?></td>
                                    </tr>
                                    <tr  class="td-upload_compartmentation_photo">
                                        <th class="title"> Upload Compartmentation Photo: </th>
                                        <td class="value"> <?php echo $data['upload_compartmentation_photo']; ?></td>
                                    </tr>
                                    <tr  class="td-officers_remark_compartmentation">
                                        <th class="title"> Officers Remark Compartmentation: </th>
                                        <td class="value"> <?php echo $data['officers_remark_compartmentation']; ?></td>
                                    </tr>
                                    <tr  class="td-entrance_and_kitchen_doors">
                                        <th class="title"> Entrance And Kitchen Doors: </th>
                                        <td class="value"> <?php echo $data['entrance_and_kitchen_doors']; ?></td>
                                    </tr>
                                    <tr  class="td-is_entrance_and_kitchen_doors_photo_attached_id">
                                        <th class="title"> Is Entrance And Kitchen Doors Photo Attached Id: </th>
                                        <td class="value"> <?php echo $data['is_entrance_and_kitchen_doors_photo_attached_id']; ?></td>
                                    </tr>
                                    <tr  class="td-is_entrance_and_kitchen_doors_photo_attached_value">
                                        <th class="title"> Is Entrance And Kitchen Doors Photo Attached Value: </th>
                                        <td class="value"> <?php echo $data['is_entrance_and_kitchen_doors_photo_attached_value']; ?></td>
                                    </tr>
                                    <tr  class="td-upload_entrance_and_kitchen_doors_photo">
                                        <th class="title"> Upload Entrance And Kitchen Doors Photo: </th>
                                        <td class="value"> <?php echo $data['upload_entrance_and_kitchen_doors_photo']; ?></td>
                                    </tr>
                                    <tr  class="td-officers_remark_on_entrance_and_kitchen_doors">
                                        <th class="title"> Officers Remark On Entrance And Kitchen Doors: </th>
                                        <td class="value"> <?php echo $data['officers_remark_on_entrance_and_kitchen_doors']; ?></td>
                                    </tr>
                                    <tr  class="td-duplex_flat_entry">
                                        <th class="title"> Duplex Flat Entry: </th>
                                        <td class="value"> <?php echo $data['duplex_flat_entry']; ?></td>
                                    </tr>
                                    <tr  class="td-is_duplex_flat_entry_photo_attached_id">
                                        <th class="title"> Is Duplex Flat Entry Photo Attached Id: </th>
                                        <td class="value"> <?php echo $data['is_duplex_flat_entry_photo_attached_id']; ?></td>
                                    </tr>
                                    <tr  class="td-is_duplex_flat_entry_photo_attached_value">
                                        <th class="title"> Is Duplex Flat Entry Photo Attached Value: </th>
                                        <td class="value"> <?php echo $data['is_duplex_flat_entry_photo_attached_value']; ?></td>
                                    </tr>
                                    <tr  class="td-upload_duplex_flat_entry_photo">
                                        <th class="title"> Upload Duplex Flat Entry Photo: </th>
                                        <td class="value"> <?php echo $data['upload_duplex_flat_entry_photo']; ?></td>
                                    </tr>
                                    <tr  class="td-officer_remark_on_is_duplex_flat_entry">
                                        <th class="title"> Officer Remark On Is Duplex Flat Entry: </th>
                                        <td class="value"> <?php echo $data['officer_remark_on_is_duplex_flat_entry']; ?></td>
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
                                                <a class="btn btn-sm btn-info"  href="<?php print_link("architecture_oc_noc_building_safty_details_second/edit/$rec_id"); ?>">
                                                    <i class="fa fa-edit"></i> Edit
                                                </a>
                                                <?php } ?>
                                                <?php if($can_delete){ ?>
                                                <a class="btn btn-sm btn-danger record-delete-btn mx-1"  href="<?php print_link("architecture_oc_noc_building_safty_details_second/delete/$rec_id/?csrf_token=$csrf_token&redirect=$current_page"); ?>" data-prompt-msg="Are you sure you want to delete this record?" data-display-style="modal">
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
