<?php 
//check if current user role is allowed access to the pages
$can_add = ACL::is_allowed("architecture_oc_noc_refuge_and_other_details_fourth/add");
$can_edit = ACL::is_allowed("architecture_oc_noc_refuge_and_other_details_fourth/edit");
$can_view = ACL::is_allowed("architecture_oc_noc_refuge_and_other_details_fourth/view");
$can_delete = ACL::is_allowed("architecture_oc_noc_refuge_and_other_details_fourth/delete");
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
                    <h4 class="record-title">View  Architecture Oc Noc Refuge And Other Details Fourth</h4>
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
                                    <tr  class="td-refuge_area_or_floor_details">
                                        <th class="title"> Refuge Area Or Floor Details: </th>
                                        <td class="value"> <?php echo $data['refuge_area_or_floor_details']; ?></td>
                                    </tr>
                                    <tr  class="td-is_refuge_area_or_floor_photo_attached_id">
                                        <th class="title"> Is Refuge Area Or Floor Photo Attached Id: </th>
                                        <td class="value"> <?php echo $data['is_refuge_area_or_floor_photo_attached_id']; ?></td>
                                    </tr>
                                    <tr  class="td-is_refuge_area_or_floor_photo_attached_value">
                                        <th class="title"> Is Refuge Area Or Floor Photo Attached Value: </th>
                                        <td class="value"> <?php echo $data['is_refuge_area_or_floor_photo_attached_value']; ?></td>
                                    </tr>
                                    <tr  class="td-upload_refuge_area_or_floor_photo">
                                        <th class="title"> Upload Refuge Area Or Floor Photo: </th>
                                        <td class="value"> <?php echo $data['upload_refuge_area_or_floor_photo']; ?></td>
                                    </tr>
                                    <tr  class="td-officer_remark_on_refuge_area_or_floor">
                                        <th class="title"> Officer Remark On Refuge Area Or Floor: </th>
                                        <td class="value"> <?php echo $data['officer_remark_on_refuge_area_or_floor']; ?></td>
                                    </tr>
                                    <tr  class="td-terrace_door">
                                        <th class="title"> Terrace Door: </th>
                                        <td class="value"> <?php echo $data['terrace_door']; ?></td>
                                    </tr>
                                    <tr  class="td-is_terrace_door_photo_attached_id">
                                        <th class="title"> Is Terrace Door Photo Attached Id: </th>
                                        <td class="value"> <?php echo $data['is_terrace_door_photo_attached_id']; ?></td>
                                    </tr>
                                    <tr  class="td-is_terrace_door_photo_attached_value">
                                        <th class="title"> Is Terrace Door Photo Attached Value: </th>
                                        <td class="value"> <?php echo $data['is_terrace_door_photo_attached_value']; ?></td>
                                    </tr>
                                    <tr  class="td-upload_errace_door_photo">
                                        <th class="title"> Upload Errace Door Photo: </th>
                                        <td class="value"> <?php echo $data['upload_errace_door_photo']; ?></td>
                                    </tr>
                                    <tr  class="td-officer_remark_on_errace_door">
                                        <th class="title"> Officer Remark On Errace Door: </th>
                                        <td class="value"> <?php echo $data['officer_remark_on_errace_door']; ?></td>
                                    </tr>
                                    <tr  class="td-fire_check_floor">
                                        <th class="title"> Fire Check Floor: </th>
                                        <td class="value"> <?php echo $data['fire_check_floor']; ?></td>
                                    </tr>
                                    <tr  class="td-is_fire_check_floor_photo_attached_id">
                                        <th class="title"> Is Fire Check Floor Photo Attached Id: </th>
                                        <td class="value"> <?php echo $data['is_fire_check_floor_photo_attached_id']; ?></td>
                                    </tr>
                                    <tr  class="td-is_fire_check_floor_photo_attached_value">
                                        <th class="title"> Is Fire Check Floor Photo Attached Value: </th>
                                        <td class="value"> <?php echo $data['is_fire_check_floor_photo_attached_value']; ?></td>
                                    </tr>
                                    <tr  class="td-upload_is_fire_check_floor_photo">
                                        <th class="title"> Upload Is Fire Check Floor Photo: </th>
                                        <td class="value"> <?php echo $data['upload_is_fire_check_floor_photo']; ?></td>
                                    </tr>
                                    <tr  class="td-officer_remark_on_fire_check_floor">
                                        <th class="title"> Officer Remark On Fire Check Floor: </th>
                                        <td class="value"> <?php echo $data['officer_remark_on_fire_check_floor']; ?></td>
                                    </tr>
                                    <tr  class="td-portable_fire_extinguishers">
                                        <th class="title"> Portable Fire Extinguishers: </th>
                                        <td class="value"> <?php echo $data['portable_fire_extinguishers']; ?></td>
                                    </tr>
                                    <tr  class="td-is_portable_fire_extinguishers_photo_attached_id">
                                        <th class="title"> Is Portable Fire Extinguishers Photo Attached Id: </th>
                                        <td class="value"> <?php echo $data['is_portable_fire_extinguishers_photo_attached_id']; ?></td>
                                    </tr>
                                    <tr  class="td-is_portable_fire_extinguishers_photo_attached_value">
                                        <th class="title"> Is Portable Fire Extinguishers Photo Attached Value: </th>
                                        <td class="value"> <?php echo $data['is_portable_fire_extinguishers_photo_attached_value']; ?></td>
                                    </tr>
                                    <tr  class="td-upload_portable_fire_extinguishers_photo">
                                        <th class="title"> Upload Portable Fire Extinguishers Photo: </th>
                                        <td class="value"> <?php echo $data['upload_portable_fire_extinguishers_photo']; ?></td>
                                    </tr>
                                    <tr  class="td-officer_remark_on_portable_fire_extinguishers">
                                        <th class="title"> Officer Remark On Portable Fire Extinguishers: </th>
                                        <td class="value"> <?php echo $data['officer_remark_on_portable_fire_extinguishers']; ?></td>
                                    </tr>
                                    <tr  class="td-sand_buckets">
                                        <th class="title"> Sand Buckets: </th>
                                        <td class="value"> <?php echo $data['sand_buckets']; ?></td>
                                    </tr>
                                    <tr  class="td-is_sand_buckets_photo_attached_id">
                                        <th class="title"> Is Sand Buckets Photo Attached Id: </th>
                                        <td class="value"> <?php echo $data['is_sand_buckets_photo_attached_id']; ?></td>
                                    </tr>
                                    <tr  class="td-is_sand_buckets_photo_attached_value">
                                        <th class="title"> Is Sand Buckets Photo Attached Value: </th>
                                        <td class="value"> <?php echo $data['is_sand_buckets_photo_attached_value']; ?></td>
                                    </tr>
                                    <tr  class="td-upload_sand_buckets_photo">
                                        <th class="title"> Upload Sand Buckets Photo: </th>
                                        <td class="value"> <?php echo $data['upload_sand_buckets_photo']; ?></td>
                                    </tr>
                                    <tr  class="td-officer_remark_on_sand_buckets">
                                        <th class="title"> Officer Remark On Sand Buckets: </th>
                                        <td class="value"> <?php echo $data['officer_remark_on_sand_buckets']; ?></td>
                                    </tr>
                                    <tr  class="td-fire_escape_chute">
                                        <th class="title"> Fire Escape Chute: </th>
                                        <td class="value"> <?php echo $data['fire_escape_chute']; ?></td>
                                    </tr>
                                    <tr  class="td-is_fire_escape_chute_photo_attached_id">
                                        <th class="title"> Is Fire Escape Chute Photo Attached Id: </th>
                                        <td class="value"> <?php echo $data['is_fire_escape_chute_photo_attached_id']; ?></td>
                                    </tr>
                                    <tr  class="td-is_fire_escape_chute_photo_attached_value">
                                        <th class="title"> Is Fire Escape Chute Photo Attached Value: </th>
                                        <td class="value"> <?php echo $data['is_fire_escape_chute_photo_attached_value']; ?></td>
                                    </tr>
                                    <tr  class="td-upload_escape_chute_photo">
                                        <th class="title"> Upload Escape Chute Photo: </th>
                                        <td class="value"> <?php echo $data['upload_escape_chute_photo']; ?></td>
                                    </tr>
                                    <tr  class="td-officer_remark_on_fire_escape_chute">
                                        <th class="title"> Officer Remark On Fire Escape Chute: </th>
                                        <td class="value"> <?php echo $data['officer_remark_on_fire_escape_chute']; ?></td>
                                    </tr>
                                    <tr  class="td-external_evaculation_system">
                                        <th class="title"> External Evaculation System: </th>
                                        <td class="value"> <?php echo $data['external_evaculation_system']; ?></td>
                                    </tr>
                                    <tr  class="td-is_external_evaculation_system_photo_attached_id">
                                        <th class="title"> Is External Evaculation System Photo Attached Id: </th>
                                        <td class="value"> <?php echo $data['is_external_evaculation_system_photo_attached_id']; ?></td>
                                    </tr>
                                    <tr  class="td-is_external_evaculation_system_photo_attached_value">
                                        <th class="title"> Is External Evaculation System Photo Attached Value: </th>
                                        <td class="value"> <?php echo $data['is_external_evaculation_system_photo_attached_value']; ?></td>
                                    </tr>
                                    <tr  class="td-upload_external_evaculation_system_photo">
                                        <th class="title"> Upload External Evaculation System Photo: </th>
                                        <td class="value"> <?php echo $data['upload_external_evaculation_system_photo']; ?></td>
                                    </tr>
                                    <tr  class="td-officer_remark_on_external_evaculation_system">
                                        <th class="title"> Officer Remark On External Evaculation System: </th>
                                        <td class="value"> <?php echo $data['officer_remark_on_external_evaculation_system']; ?></td>
                                    </tr>
                                    <tr  class="td-lowering_device">
                                        <th class="title"> Lowering Device: </th>
                                        <td class="value"> <?php echo $data['lowering_device']; ?></td>
                                    </tr>
                                    <tr  class="td-is_lowering_device_photo_attached_id">
                                        <th class="title"> Is Lowering Device Photo Attached Id: </th>
                                        <td class="value"> <?php echo $data['is_lowering_device_photo_attached_id']; ?></td>
                                    </tr>
                                    <tr  class="td-is_lowering_device_photo_attached_value">
                                        <th class="title"> Is Lowering Device Photo Attached Value: </th>
                                        <td class="value"> <?php echo $data['is_lowering_device_photo_attached_value']; ?></td>
                                    </tr>
                                    <tr  class="td-upload_lowering_device_photo">
                                        <th class="title"> Upload Lowering Device Photo: </th>
                                        <td class="value"> <?php echo $data['upload_lowering_device_photo']; ?></td>
                                    </tr>
                                    <tr  class="td-officer_remark_on_lowering_device">
                                        <th class="title"> Officer Remark On Lowering Device: </th>
                                        <td class="value"> <?php echo $data['officer_remark_on_lowering_device']; ?></td>
                                    </tr>
                                    <tr  class="td-fire_brigade_inlet">
                                        <th class="title"> Fire Brigade Inlet: </th>
                                        <td class="value"> <?php echo $data['fire_brigade_inlet']; ?></td>
                                    </tr>
                                    <tr  class="td-is_fire_brigade_inlet_photo_attached_id">
                                        <th class="title"> Is Fire Brigade Inlet Photo Attached Id: </th>
                                        <td class="value"> <?php echo $data['is_fire_brigade_inlet_photo_attached_id']; ?></td>
                                    </tr>
                                    <tr  class="td-is_fire_brigade_inlet_photo_attached_value">
                                        <th class="title"> Is Fire Brigade Inlet Photo Attached Value: </th>
                                        <td class="value"> <?php echo $data['is_fire_brigade_inlet_photo_attached_value']; ?></td>
                                    </tr>
                                    <tr  class="td-upload_fire_brigade_inlet_photo">
                                        <th class="title"> Upload Fire Brigade Inlet Photo: </th>
                                        <td class="value"> <?php echo $data['upload_fire_brigade_inlet_photo']; ?></td>
                                    </tr>
                                    <tr  class="td-officer_remark_on_fire_brigade_inlet">
                                        <th class="title"> Officer Remark On Fire Brigade Inlet: </th>
                                        <td class="value"> <?php echo $data['officer_remark_on_fire_brigade_inlet']; ?></td>
                                    </tr>
                                    <tr  class="td-glass_facade_compliance">
                                        <th class="title"> Glass Facade Compliance: </th>
                                        <td class="value"> <?php echo $data['glass_facade_compliance']; ?></td>
                                    </tr>
                                    <tr  class="td-is_glass_facade_compliance_photo_attached_id">
                                        <th class="title"> Is Glass Facade Compliance Photo Attached Id: </th>
                                        <td class="value"> <?php echo $data['is_glass_facade_compliance_photo_attached_id']; ?></td>
                                    </tr>
                                    <tr  class="td-is_glass_facade_compliance_photo_attached_value">
                                        <th class="title"> Is Glass Facade Compliance Photo Attached Value: </th>
                                        <td class="value"> <?php echo $data['is_glass_facade_compliance_photo_attached_value']; ?></td>
                                    </tr>
                                    <tr  class="td-upload_glass_facade_compliance_photo">
                                        <th class="title"> Upload Glass Facade Compliance Photo: </th>
                                        <td class="value"> <?php echo $data['upload_glass_facade_compliance_photo']; ?></td>
                                    </tr>
                                    <tr  class="td-officer_remark_on_glass_facade_compliance">
                                        <th class="title"> Officer Remark On Glass Facade Compliance: </th>
                                        <td class="value"> <?php echo $data['officer_remark_on_glass_facade_compliance']; ?></td>
                                    </tr>
                                    <tr  class="td-car_parking_tower">
                                        <th class="title"> Car Parking Tower: </th>
                                        <td class="value"> <?php echo $data['car_parking_tower']; ?></td>
                                    </tr>
                                    <tr  class="td-is_car_parking_tower_photo_attached_id">
                                        <th class="title"> Is Car Parking Tower Photo Attached Id: </th>
                                        <td class="value"> <?php echo $data['is_car_parking_tower_photo_attached_id']; ?></td>
                                    </tr>
                                    <tr  class="td-is_car_parking_tower_photo_attached_value">
                                        <th class="title"> Is Car Parking Tower Photo Attached Value: </th>
                                        <td class="value"> <?php echo $data['is_car_parking_tower_photo_attached_value']; ?></td>
                                    </tr>
                                    <tr  class="td-upload_car_parking_tower_photo">
                                        <th class="title"> Upload Car Parking Tower Photo: </th>
                                        <td class="value"> <?php echo $data['upload_car_parking_tower_photo']; ?></td>
                                    </tr>
                                    <tr  class="td-officer_remark_on_car_parking_tower">
                                        <th class="title"> Officer Remark On Car Parking Tower: </th>
                                        <td class="value"> <?php echo $data['officer_remark_on_car_parking_tower']; ?></td>
                                    </tr>
                                    <tr  class="td-location_of_electric_sub_station">
                                        <th class="title"> Location Of Electric Sub Station: </th>
                                        <td class="value"> <?php echo $data['location_of_electric_sub_station']; ?></td>
                                    </tr>
                                    <tr  class="td-is_location_of_electric_sub_station_photo_attached_id">
                                        <th class="title"> Is Location Of Electric Sub Station Photo Attached Id: </th>
                                        <td class="value"> <?php echo $data['is_location_of_electric_sub_station_photo_attached_id']; ?></td>
                                    </tr>
                                    <tr  class="td-is_location_of_electric_sub_station_photo_attached_value">
                                        <th class="title"> Is Location Of Electric Sub Station Photo Attached Value: </th>
                                        <td class="value"> <?php echo $data['is_location_of_electric_sub_station_photo_attached_value']; ?></td>
                                    </tr>
                                    <tr  class="td-upload_location_of_electric_sub_station_photo">
                                        <th class="title"> Upload Location Of Electric Sub Station Photo: </th>
                                        <td class="value"> <?php echo $data['upload_location_of_electric_sub_station_photo']; ?></td>
                                    </tr>
                                    <tr  class="td-officer_remark_on_location_of_electric_sub_station">
                                        <th class="title"> Officer Remark On Location Of Electric Sub Station: </th>
                                        <td class="value"> <?php echo $data['officer_remark_on_location_of_electric_sub_station']; ?></td>
                                    </tr>
                                    <tr  class="td-location_of_dg_set">
                                        <th class="title"> Location Of Dg Set: </th>
                                        <td class="value"> <?php echo $data['location_of_dg_set']; ?></td>
                                    </tr>
                                    <tr  class="td-is_location_of_dg_set_photo_attached_id">
                                        <th class="title"> Is Location Of Dg Set Photo Attached Id: </th>
                                        <td class="value"> <?php echo $data['is_location_of_dg_set_photo_attached_id']; ?></td>
                                    </tr>
                                    <tr  class="td-is_location_of_dg_set_photo_attached_value">
                                        <th class="title"> Is Location Of Dg Set Photo Attached Value: </th>
                                        <td class="value"> <?php echo $data['is_location_of_dg_set_photo_attached_value']; ?></td>
                                    </tr>
                                    <tr  class="td-upload_location_of_dg_set_photo">
                                        <th class="title"> Upload Location Of Dg Set Photo: </th>
                                        <td class="value"> <?php echo $data['upload_location_of_dg_set_photo']; ?></td>
                                    </tr>
                                    <tr  class="td-officer_remark_on_location_of_dg_set">
                                        <th class="title"> Officer Remark On Location Of Dg Set: </th>
                                        <td class="value"> <?php echo $data['officer_remark_on_location_of_dg_set']; ?></td>
                                    </tr>
                                    <tr  class="td-other_remarks">
                                        <th class="title"> Other Remarks: </th>
                                        <td class="value"> <?php echo $data['other_remarks']; ?></td>
                                    </tr>
                                    <tr  class="td-is_any_other_photo_attached_id">
                                        <th class="title"> Is Any Other Photo Attached Id: </th>
                                        <td class="value"> <?php echo $data['is_any_other_photo_attached_id']; ?></td>
                                    </tr>
                                    <tr  class="td-is_any_other_photo_attached_value">
                                        <th class="title"> Is Any Other Photo Attached Value: </th>
                                        <td class="value"> <?php echo $data['is_any_other_photo_attached_value']; ?></td>
                                    </tr>
                                    <tr  class="td-upload_other_photos">
                                        <th class="title"> Upload Other Photos: </th>
                                        <td class="value"> <?php echo $data['upload_other_photos']; ?></td>
                                    </tr>
                                    <tr  class="td-officer_remark_other">
                                        <th class="title"> Officer Remark Other: </th>
                                        <td class="value"> <?php echo $data['officer_remark_other']; ?></td>
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
                                                <a class="btn btn-sm btn-info"  href="<?php print_link("architecture_oc_noc_refuge_and_other_details_fourth/edit/$rec_id"); ?>">
                                                    <i class="fa fa-edit"></i> Edit
                                                </a>
                                                <?php } ?>
                                                <?php if($can_delete){ ?>
                                                <a class="btn btn-sm btn-danger record-delete-btn mx-1"  href="<?php print_link("architecture_oc_noc_refuge_and_other_details_fourth/delete/$rec_id/?csrf_token=$csrf_token&redirect=$current_page"); ?>" data-prompt-msg="Are you sure you want to delete this record?" data-display-style="modal">
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
