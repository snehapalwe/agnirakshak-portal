<?php 
//check if current user role is allowed access to the pages
$can_add = ACL::is_allowed("hotel_inspection_form/add");
$can_edit = ACL::is_allowed("hotel_inspection_form/edit");
$can_view = ACL::is_allowed("hotel_inspection_form/view");
$can_delete = ACL::is_allowed("hotel_inspection_form/delete");
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
                    <h4 class="record-title">Hotel Inspection  / हॉटेल पाहणी</h4>
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
                                    <tr  class="td-hotel_name">
                                        <th class="title"> Hotel Name: </th>
                                        <td class="value"> <?php echo $data['hotel_name']; ?></td>
                                    </tr>
                                    <tr  class="td-hotel_address">
                                        <th class="title"> Hotel Address: </th>
                                        <td class="value"> <?php echo $data['hotel_address']; ?></td>
                                    </tr>
                                    <tr  class="td-owners_name">
                                        <th class="title"> Owners Name: </th>
                                        <td class="value"> <?php echo $data['owners_name']; ?></td>
                                    </tr>
                                    <tr  class="td-mobile_no">
                                        <th class="title"> Mobile No: </th>
                                        <td class="value"> <?php echo $data['mobile_no']; ?></td>
                                    </tr>
                                    <tr  class="td-type_of_application_id">
                                        <th class="title"> Type Of Application Id: </th>
                                        <td class="value"> <?php echo $data['type_of_application_id']; ?></td>
                                    </tr>
                                    <tr  class="td-type_of_application_value">
                                        <th class="title"> Type Of Application Value: </th>
                                        <td class="value"> <?php echo $data['type_of_application_value']; ?></td>
                                    </tr>
                                    <tr  class="td-old_noc_number">
                                        <th class="title"> Old Noc Number: </th>
                                        <td class="value"> <?php echo $data['old_noc_number']; ?></td>
                                    </tr>
                                    <tr  class="td-old_noc_date">
                                        <th class="title"> Old Noc Date: </th>
                                        <td class="value"> <?php echo $data['old_noc_date']; ?></td>
                                    </tr>
                                    <tr  class="td-building_height">
                                        <th class="title"> Building Height: </th>
                                        <td class="value"> <?php echo $data['building_height']; ?></td>
                                    </tr>
                                    <tr  class="td-building_floor">
                                        <th class="title"> Building Floor: </th>
                                        <td class="value"> <?php echo $data['building_floor']; ?></td>
                                    </tr>
                                    <tr  class="td-no_n_width_stairs_one">
                                        <th class="title"> No N Width Stairs One: </th>
                                        <td class="value"> <?php echo $data['no_n_width_stairs_one']; ?></td>
                                    </tr>
                                    <tr  class="td-no_n_width_stairs_two">
                                        <th class="title"> No N Width Stairs Two: </th>
                                        <td class="value"> <?php echo $data['no_n_width_stairs_two']; ?></td>
                                    </tr>
                                    <tr  class="td-no_n_width_stairs_three">
                                        <th class="title"> No N Width Stairs Three: </th>
                                        <td class="value"> <?php echo $data['no_n_width_stairs_three']; ?></td>
                                    </tr>
                                    <tr  class="td-no_lifts_in_the_building">
                                        <th class="title"> No Lifts In The Building: </th>
                                        <td class="value"> <?php echo $data['no_lifts_in_the_building']; ?></td>
                                    </tr>
                                    <tr  class="td-no_entrance_routes">
                                        <th class="title"> No Entrance Routes: </th>
                                        <td class="value"> <?php echo $data['no_entrance_routes']; ?></td>
                                    </tr>
                                    <tr  class="td-no_exit_routes">
                                        <th class="title"> No Exit Routes: </th>
                                        <td class="value"> <?php echo $data['no_exit_routes']; ?></td>
                                    </tr>
                                    <tr  class="td-store_room_id">
                                        <th class="title"> Store Room Id: </th>
                                        <td class="value"> <?php echo $data['store_room_id']; ?></td>
                                    </tr>
                                    <tr  class="td-store_room_value">
                                        <th class="title"> Store Room Value: </th>
                                        <td class="value"> <?php echo $data['store_room_value']; ?></td>
                                    </tr>
                                    <tr  class="td-natural_ventilation_windows">
                                        <th class="title"> Natural Ventilation Windows: </th>
                                        <td class="value"> <?php echo $data['natural_ventilation_windows']; ?></td>
                                    </tr>
                                    <tr  class="td-area">
                                        <th class="title"> Area: </th>
                                        <td class="value"> <?php echo $data['area']; ?></td>
                                    </tr>
                                    <tr  class="td-no_employees_female">
                                        <th class="title"> No Employees Female: </th>
                                        <td class="value"> <?php echo $data['no_employees_female']; ?></td>
                                    </tr>
                                    <tr  class="td-no_employees_male">
                                        <th class="title"> No Employees Male: </th>
                                        <td class="value"> <?php echo $data['no_employees_male']; ?></td>
                                    </tr>
                                    <tr  class="td-no_employees_total">
                                        <th class="title"> No Employees Total: </th>
                                        <td class="value"> <?php echo $data['no_employees_total']; ?></td>
                                    </tr>
                                    <tr  class="td-working_hours">
                                        <th class="title"> Working Hours: </th>
                                        <td class="value"> <?php echo $data['working_hours']; ?></td>
                                    </tr>
                                    <tr  class="td-floor_number_of_hotel">
                                        <th class="title"> Floor Number Of Hotel: </th>
                                        <td class="value"> <?php echo $data['floor_number_of_hotel']; ?></td>
                                    </tr>
                                    <tr  class="td-is_directional_board_available">
                                        <th class="title"> Is Directional Board Available: </th>
                                        <td class="value"> <?php echo $data['is_directional_board_available']; ?></td>
                                    </tr>
                                    <tr  class="td-hotel_departments">
                                        <th class="title"> Hotel Departments: </th>
                                        <td class="value"> <?php echo $data['hotel_departments']; ?></td>
                                    </tr>
                                    <tr  class="td-table_quantity">
                                        <th class="title"> Table Quantity: </th>
                                        <td class="value"> <?php echo $data['table_quantity']; ?></td>
                                    </tr>
                                    <tr  class="td-chair_quantity">
                                        <th class="title"> Chair Quantity: </th>
                                        <td class="value"> <?php echo $data['chair_quantity']; ?></td>
                                    </tr>
                                    <tr  class="td-is_generator_system_available">
                                        <th class="title"> Is Generator System Available: </th>
                                        <td class="value"> <?php echo $data['is_generator_system_available']; ?></td>
                                    </tr>
                                    <tr  class="td-is_structural_audit_report_avilable_id">
                                        <th class="title"> Is Structural Audit Report Avilable Id: </th>
                                        <td class="value"> <?php echo $data['is_structural_audit_report_avilable_id']; ?></td>
                                    </tr>
                                    <tr  class="td-is_structural_audit_report_avilable_value">
                                        <th class="title"> Is Structural Audit Report Avilable Value: </th>
                                        <td class="value"> <?php echo $data['is_structural_audit_report_avilable_value']; ?></td>
                                    </tr>
                                    <tr  class="td-structural_audit_report_date">
                                        <th class="title"> Structural Audit Report Date: </th>
                                        <td class="value"> <?php echo $data['structural_audit_report_date']; ?></td>
                                    </tr>
                                    <tr  class="td-is_electrical_audit_report_available_id">
                                        <th class="title"> Is Electrical Audit Report Available Id: </th>
                                        <td class="value"> <?php echo $data['is_electrical_audit_report_available_id']; ?></td>
                                    </tr>
                                    <tr  class="td-is_electrical_audit_report_available_value">
                                        <th class="title"> Is Electrical Audit Report Available Value: </th>
                                        <td class="value"> <?php echo $data['is_electrical_audit_report_available_value']; ?></td>
                                    </tr>
                                    <tr  class="td-electrical_audit_report_date">
                                        <th class="title"> Electrical Audit Report Date: </th>
                                        <td class="value"> <?php echo $data['electrical_audit_report_date']; ?></td>
                                    </tr>
                                    <tr  class="td-fire_prevention_measures_information">
                                        <th class="title"> Fire Prevention Measures Information: </th>
                                        <td class="value"> <?php echo $data['fire_prevention_measures_information']; ?></td>
                                    </tr>
                                    <tr  class="td-extinguishing_licen_agency_name">
                                        <th class="title"> Extinguishing Licen Agency Name: </th>
                                        <td class="value"> <?php echo $data['extinguishing_licen_agency_name']; ?></td>
                                    </tr>
                                    <tr  class="td-extinguishing_licen_agency_no">
                                        <th class="title"> Extinguishing Licen Agency No: </th>
                                        <td class="value"> <?php echo $data['extinguishing_licen_agency_no']; ?></td>
                                    </tr>
                                    <tr  class="td-extinguishing_licen_agency_validity">
                                        <th class="title"> Extinguishing Licen Agency Validity: </th>
                                        <td class="value"> <?php echo $data['extinguishing_licen_agency_validity']; ?></td>
                                    </tr>
                                    <tr  class="td-extinguishing_licen_agency_cert_no">
                                        <th class="title"> Extinguishing Licen Agency Cert No: </th>
                                        <td class="value"> <?php echo $data['extinguishing_licen_agency_cert_no']; ?></td>
                                    </tr>
                                    <tr  class="td-water_storage_capacity_terrace">
                                        <th class="title"> Water Storage Capacity Terrace: </th>
                                        <td class="value"> <?php echo $data['water_storage_capacity_terrace']; ?></td>
                                    </tr>
                                    <tr  class="td-water_storage_capacity_groundfloor">
                                        <th class="title"> Water Storage Capacity Groundfloor: </th>
                                        <td class="value"> <?php echo $data['water_storage_capacity_groundfloor']; ?></td>
                                    </tr>
                                    <tr  class="td-gas_bank">
                                        <th class="title"> Gas Bank: </th>
                                        <td class="value"> <?php echo $data['gas_bank']; ?></td>
                                    </tr>
                                    <tr  class="td-lpg_cylender">
                                        <th class="title"> Lpg Cylender: </th>
                                        <td class="value"> <?php echo $data['lpg_cylender']; ?></td>
                                    </tr>
                                    <tr  class="td-cng_pipe_line">
                                        <th class="title"> Cng Pipe Line: </th>
                                        <td class="value"> <?php echo $data['cng_pipe_line']; ?></td>
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
                            <?php $export_excel_link = $this->set_current_page_link(array('format' => 'excel')); ?>
                            <a class="btn  btn-sm btn-primary export-link-btn" data-format="excel" href="<?php print_link($export_excel_link); ?>" target="_blank">
                                <img src="<?php print_link('assets/images/xsl.png') ?>" class="mr-2" /> EXCEL
                                </a>
                                <?php if($can_edit){ ?>
                                <a class="btn btn-sm btn-info"  href="<?php print_link("hotel_inspection_form/edit/$rec_id"); ?>">
                                    <i class="fa fa-edit"></i> Edit
                                </a>
                                <?php } ?>
                                <?php if($can_delete){ ?>
                                <a class="btn btn-sm btn-danger record-delete-btn mx-1"  href="<?php print_link("hotel_inspection_form/delete/$rec_id/?csrf_token=$csrf_token&redirect=$current_page"); ?>" data-prompt-msg="Are you sure you want to delete this record?" data-display-style="modal">
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
