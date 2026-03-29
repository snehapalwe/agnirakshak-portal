<?php 
//check if current user role is allowed access to the pages
$can_add = ACL::is_allowed("govt_private_hospital_clinic_inspection_form/add");
$can_edit = ACL::is_allowed("govt_private_hospital_clinic_inspection_form/edit");
$can_view = ACL::is_allowed("govt_private_hospital_clinic_inspection_form/view");
$can_delete = ACL::is_allowed("govt_private_hospital_clinic_inspection_form/delete");
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
                    <h4 class="record-title">Govt Private Hospital Clinic Inspection Form</h4>
                </div>
                <div class="col-sm-3 ">
                    <?php if($can_add){ ?>
                    <a  class="btn btn btn-primary my-1" href="<?php print_link("govt_private_hospital_clinic_inspection_form/add") ?>">
                        <i class="fa fa-plus"></i>                              
                        Add New Govt Private Hospital Clinic Inspection Form 
                    </a>
                    <?php } ?>
                </div>
                <div class="col-sm-4 ">
                    <form  class="search" action="<?php print_link('govt_private_hospital_clinic_inspection_form'); ?>" method="get">
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
                                        <a class="text-decoration-none" href="<?php print_link('govt_private_hospital_clinic_inspection_form'); ?>">
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
                                        <a class="text-decoration-none" href="<?php print_link('govt_private_hospital_clinic_inspection_form'); ?>">
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
                            <div id="govt_private_hospital_clinic_inspection_form-list-records">
                                <div id="page-report-body" class="table-responsive">
                                    <table class="table  table-striped table-sm text-left table-bordered">
                                        <thead class="table-header bg-light">
                                            <tr>
                                                <?php if($can_delete){ ?>
                                                <th class="td-checkbox">
                                                    <label class="custom-control custom-checkbox custom-control-inline">
                                                        <input class="toggle-check-all custom-control-input" type="checkbox" />
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </th>
                                                <?php } ?>
                                                <th class="td-sno">#</th>
                                                <th  class="td-id"> Id</th>
                                                <th  class="td-hospital_or_health_center_name"> Hospital Or Health Center Name</th>
                                                <th  class="td-hospital_or_health_center_address"> Hospital Or Health Center Address</th>
                                                <th  class="td-doctor_name"> Doctor Name</th>
                                                <th  class="td-doctor_mobile_no"> Doctor Mobile No</th>
                                                <th  class="td-building_height"> Building Height</th>
                                                <th  class="td-lifts_company_name"> Lifts Company Name</th>
                                                <th  class="td-no_lifts_in_building"> No Lifts In Building</th>
                                                <th  class="td-capacity_of_lifts"> Capacity Of Lifts</th>
                                                <th  class="td-elevators_amc_done_by_org_name"> Elevators Amc Done By Org Name</th>
                                                <th  class="td-elevators_amc_period"> Elevators Amc Period</th>
                                                <th  class="td-number_of_staircase_in_bulding"> Number Of Staircase In Bulding</th>
                                                <th  class="td-width_of_staircase_in_bulding"> Width Of Staircase In Bulding</th>
                                                <th  class="td-entrance_routes_count"> Entrance Routes Count</th>
                                                <th  class="td-exit_routes_count"> Exit Routes Count</th>
                                                <th  class="td-is_record_room_available"> Is Record Room Available</th>
                                                <th  class="td-hospital_area"> Hospital Area</th>
                                                <th  class="td-doctors_count"> Doctors Count</th>
                                                <th  class="td-nurses_count"> Nurses Count</th>
                                                <th  class="td-ward_boy_count"> Ward Boy Count</th>
                                                <th  class="td-aunts_count"> Aunts Count</th>
                                                <th  class="td-clerk_count"> Clerk Count</th>
                                                <th  class="td-other_employees_count"> Other Employees Count</th>
                                                <th  class="td-floor_number_of_hospital_id"> Floor Number Of Hospital Id</th>
                                                <th  class="td-floor_number_of_hospital_value"> Floor Number Of Hospital Value</th>
                                                <th  class="td-is_ot_dept"> Is Ot Dept</th>
                                                <th  class="td-is_xray_dept"> Is Xray Dept</th>
                                                <th  class="td-is_opd_dept"> Is Opd Dept</th>
                                                <th  class="td-is_emergency_opd_dept"> Is Emergency Opd Dept</th>
                                                <th  class="td-is_patholoty_dept"> Is Patholoty Dept</th>
                                                <th  class="td-is_post_nutal_care_dept"> Is Post Nutal Care Dept</th>
                                                <th  class="td-is_icu_dept"> Is Icu Dept</th>
                                                <th  class="td-is_gw_men_dept"> Is Gw Men Dept</th>
                                                <th  class="td-is_gw_women_dept"> Is Gw Women Dept</th>
                                                <th  class="td-is_special_ward_dept"> Is Special Ward Dept</th>
                                                <th  class="td-is_ante_nutal_care_dept"> Is Ante Nutal Care Dept</th>
                                                <th  class="td-is_nicu_dept"> Is Nicu Dept</th>
                                                <th  class="td-directional_board"> Directional Board</th>
                                                <th  class="td-total_no_beds_hospital"> Total No Beds Hospital</th>
                                                <th  class="td-generator_system_capacity"> Generator System Capacity</th>
                                                <th  class="td-generator_system_amc_org_name"> Generator System Amc Org Name</th>
                                                <th  class="td-generator_system_amc_period"> Generator System Amc Period</th>
                                                <th  class="td-electrical_audit_report_org_name"> Electrical Audit Report Org Name</th>
                                                <th  class="td-electrical_audit_report_date"> Electrical Audit Report Date</th>
                                                <th  class="td-emergency_power_system"> Emergency Power System</th>
                                                <th  class="td-info_about_fire_prevention_measures"> Info About Fire Prevention Measures</th>
                                                <th  class="td-mock_drill_date"> Mock Drill Date</th>
                                                <th  class="td-no_emp_present_for_mock_drill"> No Emp Present For Mock Drill</th>
                                                <th  class="td-upload_photo_of_employee_present_for_mock_drill"> Upload Photo Of Employee Present For Mock Drill</th>
                                                <th  class="td-upload_fire_marshal_names_with_mobile_no"> Upload Fire Marshal Names With Mobile No</th>
                                                <th  class="td-water_storage_capacity_terrace"> Water Storage Capacity Terrace</th>
                                                <th  class="td-water_storage_capacity_groundfloor"> Water Storage Capacity Groundfloor</th>
                                                <th  class="td-fire_noc_details"> Fire Noc Details</th>
                                                <th  class="td-fire_noc_date"> Fire Noc Date</th>
                                                <th  class="td-other_info_about_hospital"> Other Info About Hospital</th>
                                                <th  class="td-oxygen_system"> Oxygen System</th>
                                                <th  class="td-maintenance_of_emergency_routes"> Maintenance Of Emergency Routes</th>
                                                <th  class="td-remark"> Remark</th>
                                                <th  class="td-user_id"> User Id</th>
                                                <th  class="td-date"> Date</th>
                                                <th  class="td-status"> Status</th>
                                                <th  class="td-paid"> Paid</th>
                                                <th  class="td-int_no"> Int No</th>
                                                <th  class="td-yr"> Yr</th>
                                                <th  class="td-zone"> Zone</th>
                                                <th  class="td-payment_done"> Payment Done</th>
                                                <th  class="td-certificate_file"> Certificate File</th>
                                                <th  class="td-recid"> Recid</th>
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
                                                <?php if($can_delete){ ?>
                                                <th class=" td-checkbox">
                                                    <label class="custom-control custom-checkbox custom-control-inline">
                                                        <input class="optioncheck custom-control-input" name="optioncheck[]" value="<?php echo $data['id'] ?>" type="checkbox" />
                                                            <span class="custom-control-label"></span>
                                                        </label>
                                                    </th>
                                                    <?php } ?>
                                                    <th class="td-sno"><?php echo $counter; ?></th>
                                                    <td class="td-id"><a href="<?php print_link("govt_private_hospital_clinic_inspection_form/view/$data[id]") ?>"><?php echo $data['id']; ?></a></td>
                                                    <td class="td-hospital_or_health_center_name"> <?php echo $data['hospital_or_health_center_name']; ?></td>
                                                    <td class="td-hospital_or_health_center_address"> <?php echo $data['hospital_or_health_center_address']; ?></td>
                                                    <td class="td-doctor_name"> <?php echo $data['doctor_name']; ?></td>
                                                    <td class="td-doctor_mobile_no"> <?php echo $data['doctor_mobile_no']; ?></td>
                                                    <td class="td-building_height"> <?php echo $data['building_height']; ?></td>
                                                    <td class="td-lifts_company_name"> <?php echo $data['lifts_company_name']; ?></td>
                                                    <td class="td-no_lifts_in_building"> <?php echo $data['no_lifts_in_building']; ?></td>
                                                    <td class="td-capacity_of_lifts"> <?php echo $data['capacity_of_lifts']; ?></td>
                                                    <td class="td-elevators_amc_done_by_org_name"> <?php echo $data['elevators_amc_done_by_org_name']; ?></td>
                                                    <td class="td-elevators_amc_period"> <?php echo $data['elevators_amc_period']; ?></td>
                                                    <td class="td-number_of_staircase_in_bulding"> <?php echo $data['number_of_staircase_in_bulding']; ?></td>
                                                    <td class="td-width_of_staircase_in_bulding"> <?php echo $data['width_of_staircase_in_bulding']; ?></td>
                                                    <td class="td-entrance_routes_count"> <?php echo $data['entrance_routes_count']; ?></td>
                                                    <td class="td-exit_routes_count"> <?php echo $data['exit_routes_count']; ?></td>
                                                    <td class="td-is_record_room_available"> <?php echo $data['is_record_room_available']; ?></td>
                                                    <td class="td-hospital_area"> <?php echo $data['hospital_area']; ?></td>
                                                    <td class="td-doctors_count"> <?php echo $data['doctors_count']; ?></td>
                                                    <td class="td-nurses_count"> <?php echo $data['nurses_count']; ?></td>
                                                    <td class="td-ward_boy_count"> <?php echo $data['ward_boy_count']; ?></td>
                                                    <td class="td-aunts_count"> <?php echo $data['aunts_count']; ?></td>
                                                    <td class="td-clerk_count"> <?php echo $data['clerk_count']; ?></td>
                                                    <td class="td-other_employees_count"> <?php echo $data['other_employees_count']; ?></td>
                                                    <td class="td-floor_number_of_hospital_id"> <?php echo $data['floor_number_of_hospital_id']; ?></td>
                                                    <td class="td-floor_number_of_hospital_value"> <?php echo $data['floor_number_of_hospital_value']; ?></td>
                                                    <td class="td-is_ot_dept"> <?php echo $data['is_ot_dept']; ?></td>
                                                    <td class="td-is_xray_dept"> <?php echo $data['is_xray_dept']; ?></td>
                                                    <td class="td-is_opd_dept"> <?php echo $data['is_opd_dept']; ?></td>
                                                    <td class="td-is_emergency_opd_dept"> <?php echo $data['is_emergency_opd_dept']; ?></td>
                                                    <td class="td-is_patholoty_dept"> <?php echo $data['is_patholoty_dept']; ?></td>
                                                    <td class="td-is_post_nutal_care_dept"> <?php echo $data['is_post_nutal_care_dept']; ?></td>
                                                    <td class="td-is_icu_dept"> <?php echo $data['is_icu_dept']; ?></td>
                                                    <td class="td-is_gw_men_dept"> <?php echo $data['is_gw_men_dept']; ?></td>
                                                    <td class="td-is_gw_women_dept"> <?php echo $data['is_gw_women_dept']; ?></td>
                                                    <td class="td-is_special_ward_dept"> <?php echo $data['is_special_ward_dept']; ?></td>
                                                    <td class="td-is_ante_nutal_care_dept"> <?php echo $data['is_ante_nutal_care_dept']; ?></td>
                                                    <td class="td-is_nicu_dept"> <?php echo $data['is_nicu_dept']; ?></td>
                                                    <td class="td-directional_board"> <?php echo $data['directional_board']; ?></td>
                                                    <td class="td-total_no_beds_hospital"> <?php echo $data['total_no_beds_hospital']; ?></td>
                                                    <td class="td-generator_system_capacity"> <?php echo $data['generator_system_capacity']; ?></td>
                                                    <td class="td-generator_system_amc_org_name"> <?php echo $data['generator_system_amc_org_name']; ?></td>
                                                    <td class="td-generator_system_amc_period"> <?php echo $data['generator_system_amc_period']; ?></td>
                                                    <td class="td-electrical_audit_report_org_name"> <?php echo $data['electrical_audit_report_org_name']; ?></td>
                                                    <td class="td-electrical_audit_report_date"> <?php echo $data['electrical_audit_report_date']; ?></td>
                                                    <td class="td-emergency_power_system"> <?php echo $data['emergency_power_system']; ?></td>
                                                    <td class="td-info_about_fire_prevention_measures"> <?php echo $data['info_about_fire_prevention_measures']; ?></td>
                                                    <td class="td-mock_drill_date"> <?php echo $data['mock_drill_date']; ?></td>
                                                    <td class="td-no_emp_present_for_mock_drill"> <?php echo $data['no_emp_present_for_mock_drill']; ?></td>
                                                    <td class="td-upload_photo_of_employee_present_for_mock_drill"> <?php echo $data['upload_photo_of_employee_present_for_mock_drill']; ?></td>
                                                    <td class="td-upload_fire_marshal_names_with_mobile_no"> <?php echo $data['upload_fire_marshal_names_with_mobile_no']; ?></td>
                                                    <td class="td-water_storage_capacity_terrace"> <?php echo $data['water_storage_capacity_terrace']; ?></td>
                                                    <td class="td-water_storage_capacity_groundfloor"> <?php echo $data['water_storage_capacity_groundfloor']; ?></td>
                                                    <td class="td-fire_noc_details"> <?php echo $data['fire_noc_details']; ?></td>
                                                    <td class="td-fire_noc_date"> <?php echo $data['fire_noc_date']; ?></td>
                                                    <td class="td-other_info_about_hospital"> <?php echo $data['other_info_about_hospital']; ?></td>
                                                    <td class="td-oxygen_system"> <?php echo $data['oxygen_system']; ?></td>
                                                    <td class="td-maintenance_of_emergency_routes"> <?php echo $data['maintenance_of_emergency_routes']; ?></td>
                                                    <td class="td-remark"> <?php echo $data['remark']; ?></td>
                                                    <td class="td-user_id"> <?php echo $data['user_id']; ?></td>
                                                    <td class="td-date"> <?php echo $data['date']; ?></td>
                                                    <td class="td-status"> <?php echo $data['status']; ?></td>
                                                    <td class="td-paid"> <?php echo $data['paid']; ?></td>
                                                    <td class="td-int_no"> <?php echo $data['int_no']; ?></td>
                                                    <td class="td-yr"> <?php echo $data['yr']; ?></td>
                                                    <td class="td-zone"> <?php echo $data['zone']; ?></td>
                                                    <td class="td-payment_done"> <?php echo $data['payment_done']; ?></td>
                                                    <td class="td-certificate_file"> <?php echo $data['certificate_file']; ?></td>
                                                    <td class="td-recid"> <?php echo $data['recid']; ?></td>
                                                    <th class="td-btn">
                                                        <?php if($can_view){ ?>
                                                        <a class="btn btn-sm btn-success has-tooltip" title="View Record" href="<?php print_link("govt_private_hospital_clinic_inspection_form/view/$rec_id"); ?>">
                                                            <i class="fa fa-eye"></i> View
                                                        </a>
                                                        <?php } ?>
                                                        <?php if($can_edit){ ?>
                                                        <a class="btn btn-sm btn-info has-tooltip" title="Edit This Record" href="<?php print_link("govt_private_hospital_clinic_inspection_form/edit/$rec_id"); ?>">
                                                            <i class="fa fa-edit"></i> Edit
                                                        </a>
                                                        <?php } ?>
                                                        <?php if($can_delete){ ?>
                                                        <a class="btn btn-sm btn-danger has-tooltip record-delete-btn" title="Delete this record" href="<?php print_link("govt_private_hospital_clinic_inspection_form/delete/$rec_id/?csrf_token=$csrf_token&redirect=$current_page"); ?>" data-prompt-msg="Are you sure you want to delete this record?" data-display-style="modal">
                                                            <i class="fa fa-times"></i>
                                                            Delete
                                                        </a>
                                                        <?php } ?>
                                                    </th>
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
                                                    <?php if($can_delete){ ?>
                                                    <button data-prompt-msg="Are you sure you want to delete these records?" data-display-style="modal" data-url="<?php print_link("govt_private_hospital_clinic_inspection_form/delete/{sel_ids}/?csrf_token=$csrf_token&redirect=$current_page"); ?>" class="btn btn-sm btn-danger btn-delete-selected d-none">
                                                        <i class="fa fa-times"></i> Delete Selected
                                                    </button>
                                                    <?php } ?>
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
