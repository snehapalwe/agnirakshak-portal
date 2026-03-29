<?php 
//check if current user role is allowed access to the pages
$can_add = ACL::is_allowed("architecture_oc_noc_refuge_and_other_details_fourth/add");
$can_edit = ACL::is_allowed("architecture_oc_noc_refuge_and_other_details_fourth/edit");
$can_view = ACL::is_allowed("architecture_oc_noc_refuge_and_other_details_fourth/view");
$can_delete = ACL::is_allowed("architecture_oc_noc_refuge_and_other_details_fourth/delete");
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
                    <h4 class="record-title">Architecture Oc Noc Refuge And Other Details Fourth</h4>
                </div>
                <div class="col-sm-3 ">
                    <?php if($can_add){ ?>
                    <a  class="btn btn btn-primary my-1" href="<?php print_link("architecture_oc_noc_refuge_and_other_details_fourth/add") ?>">
                        <i class="fa fa-plus"></i>                              
                        Add New Architecture Oc Noc Refuge And Other Details Fourth 
                    </a>
                    <?php } ?>
                </div>
                <div class="col-sm-4 ">
                    <form  class="search" action="<?php print_link('architecture_oc_noc_refuge_and_other_details_fourth'); ?>" method="get">
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
                                        <a class="text-decoration-none" href="<?php print_link('architecture_oc_noc_refuge_and_other_details_fourth'); ?>">
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
                                        <a class="text-decoration-none" href="<?php print_link('architecture_oc_noc_refuge_and_other_details_fourth'); ?>">
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
                            <div id="architecture_oc_noc_refuge_and_other_details_fourth-list-records">
                                <div id="page-report-body" class="table-responsive">
                                    <table class="table  table-striped table-sm text-center table-bordered">
                                        <thead class="table-header bg-light">
                                            <tr>
                                                <th  class="td-id"> Id</th>
                                                <th  class="td-refuge_area_or_floor_details"> Refuge Area Or Floor Details</th>
                                                <th  class="td-is_refuge_area_or_floor_photo_attached_id"> Is Refuge Area Or Floor Photo Attached Id</th>
                                                <th  class="td-is_refuge_area_or_floor_photo_attached_value"> Is Refuge Area Or Floor Photo Attached Value</th>
                                                <th  class="td-upload_refuge_area_or_floor_photo"> Upload Refuge Area Or Floor Photo</th>
                                                <th  class="td-officer_remark_on_refuge_area_or_floor"> Officer Remark On Refuge Area Or Floor</th>
                                                <th  class="td-terrace_door"> Terrace Door</th>
                                                <th  class="td-is_terrace_door_photo_attached_id"> Is Terrace Door Photo Attached Id</th>
                                                <th  class="td-is_terrace_door_photo_attached_value"> Is Terrace Door Photo Attached Value</th>
                                                <th  class="td-upload_errace_door_photo"> Upload Errace Door Photo</th>
                                                <th  class="td-officer_remark_on_errace_door"> Officer Remark On Errace Door</th>
                                                <th  class="td-fire_check_floor"> Fire Check Floor</th>
                                                <th  class="td-is_fire_check_floor_photo_attached_id"> Is Fire Check Floor Photo Attached Id</th>
                                                <th  class="td-is_fire_check_floor_photo_attached_value"> Is Fire Check Floor Photo Attached Value</th>
                                                <th  class="td-upload_is_fire_check_floor_photo"> Upload Is Fire Check Floor Photo</th>
                                                <th  class="td-officer_remark_on_fire_check_floor"> Officer Remark On Fire Check Floor</th>
                                                <th  class="td-portable_fire_extinguishers"> Portable Fire Extinguishers</th>
                                                <th  class="td-is_portable_fire_extinguishers_photo_attached_id"> Is Portable Fire Extinguishers Photo Attached Id</th>
                                                <th  class="td-is_portable_fire_extinguishers_photo_attached_value"> Is Portable Fire Extinguishers Photo Attached Value</th>
                                                <th  class="td-upload_portable_fire_extinguishers_photo"> Upload Portable Fire Extinguishers Photo</th>
                                                <th  class="td-officer_remark_on_portable_fire_extinguishers"> Officer Remark On Portable Fire Extinguishers</th>
                                                <th  class="td-sand_buckets"> Sand Buckets</th>
                                                <th  class="td-is_sand_buckets_photo_attached_id"> Is Sand Buckets Photo Attached Id</th>
                                                <th  class="td-is_sand_buckets_photo_attached_value"> Is Sand Buckets Photo Attached Value</th>
                                                <th  class="td-upload_sand_buckets_photo"> Upload Sand Buckets Photo</th>
                                                <th  class="td-officer_remark_on_sand_buckets"> Officer Remark On Sand Buckets</th>
                                                <th  class="td-fire_escape_chute"> Fire Escape Chute</th>
                                                <th  class="td-is_fire_escape_chute_photo_attached_id"> Is Fire Escape Chute Photo Attached Id</th>
                                                <th  class="td-is_fire_escape_chute_photo_attached_value"> Is Fire Escape Chute Photo Attached Value</th>
                                                <th  class="td-upload_escape_chute_photo"> Upload Escape Chute Photo</th>
                                                <th  class="td-officer_remark_on_fire_escape_chute"> Officer Remark On Fire Escape Chute</th>
                                                <th  class="td-external_evaculation_system"> External Evaculation System</th>
                                                <th  class="td-is_external_evaculation_system_photo_attached_id"> Is External Evaculation System Photo Attached Id</th>
                                                <th  class="td-is_external_evaculation_system_photo_attached_value"> Is External Evaculation System Photo Attached Value</th>
                                                <th  class="td-upload_external_evaculation_system_photo"> Upload External Evaculation System Photo</th>
                                                <th  class="td-officer_remark_on_external_evaculation_system"> Officer Remark On External Evaculation System</th>
                                                <th  class="td-lowering_device"> Lowering Device</th>
                                                <th  class="td-is_lowering_device_photo_attached_id"> Is Lowering Device Photo Attached Id</th>
                                                <th  class="td-is_lowering_device_photo_attached_value"> Is Lowering Device Photo Attached Value</th>
                                                <th  class="td-upload_lowering_device_photo"> Upload Lowering Device Photo</th>
                                                <th  class="td-officer_remark_on_lowering_device"> Officer Remark On Lowering Device</th>
                                                <th  class="td-fire_brigade_inlet"> Fire Brigade Inlet</th>
                                                <th  class="td-is_fire_brigade_inlet_photo_attached_id"> Is Fire Brigade Inlet Photo Attached Id</th>
                                                <th  class="td-is_fire_brigade_inlet_photo_attached_value"> Is Fire Brigade Inlet Photo Attached Value</th>
                                                <th  class="td-upload_fire_brigade_inlet_photo"> Upload Fire Brigade Inlet Photo</th>
                                                <th  class="td-officer_remark_on_fire_brigade_inlet"> Officer Remark On Fire Brigade Inlet</th>
                                                <th  class="td-glass_facade_compliance"> Glass Facade Compliance</th>
                                                <th  class="td-is_glass_facade_compliance_photo_attached_id"> Is Glass Facade Compliance Photo Attached Id</th>
                                                <th  class="td-is_glass_facade_compliance_photo_attached_value"> Is Glass Facade Compliance Photo Attached Value</th>
                                                <th  class="td-upload_glass_facade_compliance_photo"> Upload Glass Facade Compliance Photo</th>
                                                <th  class="td-officer_remark_on_glass_facade_compliance"> Officer Remark On Glass Facade Compliance</th>
                                                <th  class="td-car_parking_tower"> Car Parking Tower</th>
                                                <th  class="td-is_car_parking_tower_photo_attached_id"> Is Car Parking Tower Photo Attached Id</th>
                                                <th  class="td-is_car_parking_tower_photo_attached_value"> Is Car Parking Tower Photo Attached Value</th>
                                                <th  class="td-upload_car_parking_tower_photo"> Upload Car Parking Tower Photo</th>
                                                <th  class="td-officer_remark_on_car_parking_tower"> Officer Remark On Car Parking Tower</th>
                                                <th  class="td-location_of_electric_sub_station"> Location Of Electric Sub Station</th>
                                                <th  class="td-is_location_of_electric_sub_station_photo_attached_id"> Is Location Of Electric Sub Station Photo Attached Id</th>
                                                <th  class="td-is_location_of_electric_sub_station_photo_attached_value"> Is Location Of Electric Sub Station Photo Attached Value</th>
                                                <th  class="td-upload_location_of_electric_sub_station_photo"> Upload Location Of Electric Sub Station Photo</th>
                                                <th  class="td-officer_remark_on_location_of_electric_sub_station"> Officer Remark On Location Of Electric Sub Station</th>
                                                <th  class="td-location_of_dg_set"> Location Of Dg Set</th>
                                                <th  class="td-is_location_of_dg_set_photo_attached_id"> Is Location Of Dg Set Photo Attached Id</th>
                                                <th  class="td-is_location_of_dg_set_photo_attached_value"> Is Location Of Dg Set Photo Attached Value</th>
                                                <th  class="td-upload_location_of_dg_set_photo"> Upload Location Of Dg Set Photo</th>
                                                <th  class="td-officer_remark_on_location_of_dg_set"> Officer Remark On Location Of Dg Set</th>
                                                <th  class="td-other_remarks"> Other Remarks</th>
                                                <th  class="td-is_any_other_photo_attached_id"> Is Any Other Photo Attached Id</th>
                                                <th  class="td-is_any_other_photo_attached_value"> Is Any Other Photo Attached Value</th>
                                                <th  class="td-upload_other_photos"> Upload Other Photos</th>
                                                <th  class="td-officer_remark_other"> Officer Remark Other</th>
                                                <th  class="td-user_id"> User Id</th>
                                                <th  class="td-date"> Date</th>
                                                <th  class="td-rec_id"> Rec Id</th>
                                                <th  class="td-status"> Status</th>
                                                <th  class="td-paid"> Paid</th>
                                                <th  class="td-timestamp"> Timestamp</th>
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
                                                <td class="td-id"><a href="<?php print_link("architecture_oc_noc_refuge_and_other_details_fourth/view/$data[id]") ?>"><?php echo $data['id']; ?></a></td>
                                                <td class="td-refuge_area_or_floor_details"> <?php echo $data['refuge_area_or_floor_details']; ?></td>
                                                <td class="td-is_refuge_area_or_floor_photo_attached_id"> <?php echo $data['is_refuge_area_or_floor_photo_attached_id']; ?></td>
                                                <td class="td-is_refuge_area_or_floor_photo_attached_value"> <?php echo $data['is_refuge_area_or_floor_photo_attached_value']; ?></td>
                                                <td class="td-upload_refuge_area_or_floor_photo"><?php Html :: page_link_file($data['upload_refuge_area_or_floor_photo']); ?></td>
                                                <td class="td-officer_remark_on_refuge_area_or_floor"> <?php echo $data['officer_remark_on_refuge_area_or_floor']; ?></td>
                                                <td class="td-terrace_door"> <?php echo $data['terrace_door']; ?></td>
                                                <td class="td-is_terrace_door_photo_attached_id"> <?php echo $data['is_terrace_door_photo_attached_id']; ?></td>
                                                <td class="td-is_terrace_door_photo_attached_value"> <?php echo $data['is_terrace_door_photo_attached_value']; ?></td>
                                                <td class="td-upload_errace_door_photo"><?php Html :: page_link_file($data['upload_errace_door_photo']); ?></td>
                                                <td class="td-officer_remark_on_errace_door"> <?php echo $data['officer_remark_on_errace_door']; ?></td>
                                                <td class="td-fire_check_floor"> <?php echo $data['fire_check_floor']; ?></td>
                                                <td class="td-is_fire_check_floor_photo_attached_id"> <?php echo $data['is_fire_check_floor_photo_attached_id']; ?></td>
                                                <td class="td-is_fire_check_floor_photo_attached_value"> <?php echo $data['is_fire_check_floor_photo_attached_value']; ?></td>
                                                <td class="td-upload_is_fire_check_floor_photo"><?php Html :: page_link_file($data['upload_is_fire_check_floor_photo']); ?></td>
                                                <td class="td-officer_remark_on_fire_check_floor"> <?php echo $data['officer_remark_on_fire_check_floor']; ?></td>
                                                <td class="td-portable_fire_extinguishers"> <?php echo $data['portable_fire_extinguishers']; ?></td>
                                                <td class="td-is_portable_fire_extinguishers_photo_attached_id"> <?php echo $data['is_portable_fire_extinguishers_photo_attached_id']; ?></td>
                                                <td class="td-is_portable_fire_extinguishers_photo_attached_value"> <?php echo $data['is_portable_fire_extinguishers_photo_attached_value']; ?></td>
                                                <td class="td-upload_portable_fire_extinguishers_photo"><?php Html :: page_link_file($data['upload_portable_fire_extinguishers_photo']); ?></td>
                                                <td class="td-officer_remark_on_portable_fire_extinguishers"> <?php echo $data['officer_remark_on_portable_fire_extinguishers']; ?></td>
                                                <td class="td-sand_buckets"> <?php echo $data['sand_buckets']; ?></td>
                                                <td class="td-is_sand_buckets_photo_attached_id"> <?php echo $data['is_sand_buckets_photo_attached_id']; ?></td>
                                                <td class="td-is_sand_buckets_photo_attached_value"> <?php echo $data['is_sand_buckets_photo_attached_value']; ?></td>
                                                <td class="td-upload_sand_buckets_photo"><?php Html :: page_link_file($data['upload_sand_buckets_photo']); ?></td>
                                                <td class="td-officer_remark_on_sand_buckets"> <?php echo $data['officer_remark_on_sand_buckets']; ?></td>
                                                <td class="td-fire_escape_chute"> <?php echo $data['fire_escape_chute']; ?></td>
                                                <td class="td-is_fire_escape_chute_photo_attached_id"> <?php echo $data['is_fire_escape_chute_photo_attached_id']; ?></td>
                                                <td class="td-is_fire_escape_chute_photo_attached_value"> <?php echo $data['is_fire_escape_chute_photo_attached_value']; ?></td>
                                                <td class="td-upload_escape_chute_photo"><?php Html :: page_link_file($data['upload_escape_chute_photo']); ?></td>
                                                <td class="td-officer_remark_on_fire_escape_chute"> <?php echo $data['officer_remark_on_fire_escape_chute']; ?></td>
                                                <td class="td-external_evaculation_system"> <?php echo $data['external_evaculation_system']; ?></td>
                                                <td class="td-is_external_evaculation_system_photo_attached_id"> <?php echo $data['is_external_evaculation_system_photo_attached_id']; ?></td>
                                                <td class="td-is_external_evaculation_system_photo_attached_value"> <?php echo $data['is_external_evaculation_system_photo_attached_value']; ?></td>
                                                <td class="td-upload_external_evaculation_system_photo"><?php Html :: page_link_file($data['upload_external_evaculation_system_photo']); ?></td>
                                                <td class="td-officer_remark_on_external_evaculation_system"> <?php echo $data['officer_remark_on_external_evaculation_system']; ?></td>
                                                <td class="td-lowering_device"> <?php echo $data['lowering_device']; ?></td>
                                                <td class="td-is_lowering_device_photo_attached_id"> <?php echo $data['is_lowering_device_photo_attached_id']; ?></td>
                                                <td class="td-is_lowering_device_photo_attached_value"> <?php echo $data['is_lowering_device_photo_attached_value']; ?></td>
                                                <td class="td-upload_lowering_device_photo"><?php Html :: page_link_file($data['upload_lowering_device_photo']); ?></td>
                                                <td class="td-officer_remark_on_lowering_device"> <?php echo $data['officer_remark_on_lowering_device']; ?></td>
                                                <td class="td-fire_brigade_inlet"> <?php echo $data['fire_brigade_inlet']; ?></td>
                                                <td class="td-is_fire_brigade_inlet_photo_attached_id"> <?php echo $data['is_fire_brigade_inlet_photo_attached_id']; ?></td>
                                                <td class="td-is_fire_brigade_inlet_photo_attached_value"> <?php echo $data['is_fire_brigade_inlet_photo_attached_value']; ?></td>
                                                <td class="td-upload_fire_brigade_inlet_photo"><?php Html :: page_link_file($data['upload_fire_brigade_inlet_photo']); ?></td>
                                                <td class="td-officer_remark_on_fire_brigade_inlet"> <?php echo $data['officer_remark_on_fire_brigade_inlet']; ?></td>
                                                <td class="td-glass_facade_compliance"> <?php echo $data['glass_facade_compliance']; ?></td>
                                                <td class="td-is_glass_facade_compliance_photo_attached_id"> <?php echo $data['is_glass_facade_compliance_photo_attached_id']; ?></td>
                                                <td class="td-is_glass_facade_compliance_photo_attached_value"> <?php echo $data['is_glass_facade_compliance_photo_attached_value']; ?></td>
                                                <td class="td-upload_glass_facade_compliance_photo"><?php Html :: page_link_file($data['upload_glass_facade_compliance_photo']); ?></td>
                                                <td class="td-officer_remark_on_glass_facade_compliance"> <?php echo $data['officer_remark_on_glass_facade_compliance']; ?></td>
                                                <td class="td-car_parking_tower"> <?php echo $data['car_parking_tower']; ?></td>
                                                <td class="td-is_car_parking_tower_photo_attached_id"> <?php echo $data['is_car_parking_tower_photo_attached_id']; ?></td>
                                                <td class="td-is_car_parking_tower_photo_attached_value"> <?php echo $data['is_car_parking_tower_photo_attached_value']; ?></td>
                                                <td class="td-upload_car_parking_tower_photo"><?php Html :: page_link_file($data['upload_car_parking_tower_photo']); ?></td>
                                                <td class="td-officer_remark_on_car_parking_tower"> <?php echo $data['officer_remark_on_car_parking_tower']; ?></td>
                                                <td class="td-location_of_electric_sub_station"> <?php echo $data['location_of_electric_sub_station']; ?></td>
                                                <td class="td-is_location_of_electric_sub_station_photo_attached_id"> <?php echo $data['is_location_of_electric_sub_station_photo_attached_id']; ?></td>
                                                <td class="td-is_location_of_electric_sub_station_photo_attached_value"> <?php echo $data['is_location_of_electric_sub_station_photo_attached_value']; ?></td>
                                                <td class="td-upload_location_of_electric_sub_station_photo"><?php Html :: page_link_file($data['upload_location_of_electric_sub_station_photo']); ?></td>
                                                <td class="td-officer_remark_on_location_of_electric_sub_station"> <?php echo $data['officer_remark_on_location_of_electric_sub_station']; ?></td>
                                                <td class="td-location_of_dg_set"> <?php echo $data['location_of_dg_set']; ?></td>
                                                <td class="td-is_location_of_dg_set_photo_attached_id"> <?php echo $data['is_location_of_dg_set_photo_attached_id']; ?></td>
                                                <td class="td-is_location_of_dg_set_photo_attached_value"> <?php echo $data['is_location_of_dg_set_photo_attached_value']; ?></td>
                                                <td class="td-upload_location_of_dg_set_photo"><?php Html :: page_link_file($data['upload_location_of_dg_set_photo']); ?></td>
                                                <td class="td-officer_remark_on_location_of_dg_set"> <?php echo $data['officer_remark_on_location_of_dg_set']; ?></td>
                                                <td class="td-other_remarks"> <?php echo $data['other_remarks']; ?></td>
                                                <td class="td-is_any_other_photo_attached_id"> <?php echo $data['is_any_other_photo_attached_id']; ?></td>
                                                <td class="td-is_any_other_photo_attached_value"> <?php echo $data['is_any_other_photo_attached_value']; ?></td>
                                                <td class="td-upload_other_photos"><?php Html :: page_link_file($data['upload_other_photos']); ?></td>
                                                <td class="td-officer_remark_other"> <?php echo $data['officer_remark_other']; ?></td>
                                                <td class="td-user_id"> <?php echo $data['user_id']; ?></td>
                                                <td class="td-date"> <?php echo $data['date']; ?></td>
                                                <td class="td-rec_id"> <?php echo $data['rec_id']; ?></td>
                                                <td class="td-status"> <?php echo $data['status']; ?></td>
                                                <td class="td-paid"> <?php echo $data['paid']; ?></td>
                                                <td class="td-timestamp"> <?php echo $data['timestamp']; ?></td>
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
