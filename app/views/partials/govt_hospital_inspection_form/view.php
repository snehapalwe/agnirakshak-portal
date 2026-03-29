<?php 
//check if current user role is allowed access to the pages
$can_add = ACL::is_allowed("govt_hospital_inspection_form/add");
$can_edit = ACL::is_allowed("govt_hospital_inspection_form/edit");
$can_view = ACL::is_allowed("govt_hospital_inspection_form/view");
$can_delete = ACL::is_allowed("govt_hospital_inspection_form/delete");
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
                    <h4 class="record-title">View  Govt Hospital Inspection Form</h4>
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
                                    <tr  class="td-hospital_or_health_center_name">
                                        <th class="title"> Hospital Or Health Center Name: </th>
                                        <td class="value"> <?php echo $data['hospital_or_health_center_name']; ?></td>
                                    </tr>
                                    <tr  class="td-hospital_or_health_center_address">
                                        <th class="title"> Hospital Or Health Center Address: </th>
                                        <td class="value"> <?php echo $data['hospital_or_health_center_address']; ?></td>
                                    </tr>
                                    <tr  class="td-doctor_name">
                                        <th class="title"> Doctor Name: </th>
                                        <td class="value"> <?php echo $data['doctor_name']; ?></td>
                                    </tr>
                                    <tr  class="td-doctor_mobile_no">
                                        <th class="title"> Doctor Mobile No: </th>
                                        <td class="value"> <?php echo $data['doctor_mobile_no']; ?></td>
                                    </tr>
                                    <tr  class="td-building_height">
                                        <th class="title"> Building Height: </th>
                                        <td class="value"> <?php echo $data['building_height']; ?></td>
                                    </tr>
                                    <tr  class="td-lifts_company_name">
                                        <th class="title"> Lifts Company Name: </th>
                                        <td class="value"> <?php echo $data['lifts_company_name']; ?></td>
                                    </tr>
                                    <tr  class="td-no_lifts_in_building">
                                        <th class="title"> No Lifts In Building: </th>
                                        <td class="value"> <?php echo $data['no_lifts_in_building']; ?></td>
                                    </tr>
                                    <tr  class="td-capacity_of_lifts">
                                        <th class="title"> Capacity Of Lifts: </th>
                                        <td class="value"> <?php echo $data['capacity_of_lifts']; ?></td>
                                    </tr>
                                    <tr  class="td-elevators_amc_done_by_org_name">
                                        <th class="title"> Elevators Amc Done By Org Name: </th>
                                        <td class="value"> <?php echo $data['elevators_amc_done_by_org_name']; ?></td>
                                    </tr>
                                    <tr  class="td-elevators_amc_period">
                                        <th class="title"> Elevators Amc Period: </th>
                                        <td class="value"> <?php echo $data['elevators_amc_period']; ?></td>
                                    </tr>
                                    <tr  class="td-number_of_staircase_in_bulding">
                                        <th class="title"> Number Of Staircase In Bulding: </th>
                                        <td class="value"> <?php echo $data['number_of_staircase_in_bulding']; ?></td>
                                    </tr>
                                    <tr  class="td-width_of_staircase_in_bulding">
                                        <th class="title"> Width Of Staircase In Bulding: </th>
                                        <td class="value"> <?php echo $data['width_of_staircase_in_bulding']; ?></td>
                                    </tr>
                                    <tr  class="td-entrance_routes_count">
                                        <th class="title"> Entrance Routes Count: </th>
                                        <td class="value"> <?php echo $data['entrance_routes_count']; ?></td>
                                    </tr>
                                    <tr  class="td-exit_routes_count">
                                        <th class="title"> Exit Routes Count: </th>
                                        <td class="value"> <?php echo $data['exit_routes_count']; ?></td>
                                    </tr>
                                    <tr  class="td-is_record_room_available">
                                        <th class="title"> Is Record Room Available: </th>
                                        <td class="value"> <?php echo $data['is_record_room_available']; ?></td>
                                    </tr>
                                    <tr  class="td-hospital_area">
                                        <th class="title"> Hospital Area: </th>
                                        <td class="value"> <?php echo $data['hospital_area']; ?></td>
                                    </tr>
                                    <tr  class="td-doctors_count">
                                        <th class="title"> Doctors Count: </th>
                                        <td class="value"> <?php echo $data['doctors_count']; ?></td>
                                    </tr>
                                    <tr  class="td-nurses_count">
                                        <th class="title"> Nurses Count: </th>
                                        <td class="value"> <?php echo $data['nurses_count']; ?></td>
                                    </tr>
                                    <tr  class="td-ward_boy_count">
                                        <th class="title"> Ward Boy Count: </th>
                                        <td class="value"> <?php echo $data['ward_boy_count']; ?></td>
                                    </tr>
                                    <tr  class="td-aunts_count">
                                        <th class="title"> Aunts Count: </th>
                                        <td class="value"> <?php echo $data['aunts_count']; ?></td>
                                    </tr>
                                    <tr  class="td-clerk_count">
                                        <th class="title"> Clerk Count: </th>
                                        <td class="value"> <?php echo $data['clerk_count']; ?></td>
                                    </tr>
                                    <tr  class="td-other_employees_count">
                                        <th class="title"> Other Employees Count: </th>
                                        <td class="value"> <?php echo $data['other_employees_count']; ?></td>
                                    </tr>
                                    <tr  class="td-floor_number_of_hospital_id">
                                        <th class="title"> Floor Number Of Hospital Id: </th>
                                        <td class="value"> <?php echo $data['floor_number_of_hospital_id']; ?></td>
                                    </tr>
                                    <tr  class="td-floor_number_of_hospital_value">
                                        <th class="title"> Floor Number Of Hospital Value: </th>
                                        <td class="value"> <?php echo $data['floor_number_of_hospital_value']; ?></td>
                                    </tr>
                                    <tr  class="td-is_ot_dept">
                                        <th class="title"> Is Ot Dept: </th>
                                        <td class="value"> <?php echo $data['is_ot_dept']; ?></td>
                                    </tr>
                                    <tr  class="td-is_xray_dept">
                                        <th class="title"> Is Xray Dept: </th>
                                        <td class="value"> <?php echo $data['is_xray_dept']; ?></td>
                                    </tr>
                                    <tr  class="td-is_opd_dept">
                                        <th class="title"> Is Opd Dept: </th>
                                        <td class="value"> <?php echo $data['is_opd_dept']; ?></td>
                                    </tr>
                                    <tr  class="td-is_emergency_opd_dept">
                                        <th class="title"> Is Emergency Opd Dept: </th>
                                        <td class="value"> <?php echo $data['is_emergency_opd_dept']; ?></td>
                                    </tr>
                                    <tr  class="td-is_patholoty_dept">
                                        <th class="title"> Is Patholoty Dept: </th>
                                        <td class="value"> <?php echo $data['is_patholoty_dept']; ?></td>
                                    </tr>
                                    <tr  class="td-is_post_nutal_care_dept">
                                        <th class="title"> Is Post Nutal Care Dept: </th>
                                        <td class="value"> <?php echo $data['is_post_nutal_care_dept']; ?></td>
                                    </tr>
                                    <tr  class="td-is_icu_dept">
                                        <th class="title"> Is Icu Dept: </th>
                                        <td class="value"> <?php echo $data['is_icu_dept']; ?></td>
                                    </tr>
                                    <tr  class="td-is_gw_men_dept">
                                        <th class="title"> Is Gw Men Dept: </th>
                                        <td class="value"> <?php echo $data['is_gw_men_dept']; ?></td>
                                    </tr>
                                    <tr  class="td-is_gw_women_dept">
                                        <th class="title"> Is Gw Women Dept: </th>
                                        <td class="value"> <?php echo $data['is_gw_women_dept']; ?></td>
                                    </tr>
                                    <tr  class="td-is_special_ward_dept">
                                        <th class="title"> Is Special Ward Dept: </th>
                                        <td class="value"> <?php echo $data['is_special_ward_dept']; ?></td>
                                    </tr>
                                    <tr  class="td-is_ante_nutal_care_dept">
                                        <th class="title"> Is Ante Nutal Care Dept: </th>
                                        <td class="value"> <?php echo $data['is_ante_nutal_care_dept']; ?></td>
                                    </tr>
                                    <tr  class="td-is_nicu_dept">
                                        <th class="title"> Is Nicu Dept: </th>
                                        <td class="value"> <?php echo $data['is_nicu_dept']; ?></td>
                                    </tr>
                                    <tr  class="td-directional_board">
                                        <th class="title"> Directional Board: </th>
                                        <td class="value"> <?php echo $data['directional_board']; ?></td>
                                    </tr>
                                    <tr  class="td-total_no_beds_hospital">
                                        <th class="title"> Total No Beds Hospital: </th>
                                        <td class="value"> <?php echo $data['total_no_beds_hospital']; ?></td>
                                    </tr>
                                    <tr  class="td-generator_system_capacity">
                                        <th class="title"> Generator System Capacity: </th>
                                        <td class="value"> <?php echo $data['generator_system_capacity']; ?></td>
                                    </tr>
                                    <tr  class="td-generator_system_amc_org_name">
                                        <th class="title"> Generator System Amc Org Name: </th>
                                        <td class="value"> <?php echo $data['generator_system_amc_org_name']; ?></td>
                                    </tr>
                                    <tr  class="td-generator_system_amc_period">
                                        <th class="title"> Generator System Amc Period: </th>
                                        <td class="value"> <?php echo $data['generator_system_amc_period']; ?></td>
                                    </tr>
                                    <tr  class="td-electrical_audit_report_org_name">
                                        <th class="title"> Electrical Audit Report Org Name: </th>
                                        <td class="value"> <?php echo $data['electrical_audit_report_org_name']; ?></td>
                                    </tr>
                                    <tr  class="td-electrical_audit_report_date">
                                        <th class="title"> Electrical Audit Report Date: </th>
                                        <td class="value"> <?php echo $data['electrical_audit_report_date']; ?></td>
                                    </tr>
                                    <tr  class="td-emergency_power_system">
                                        <th class="title"> Emergency Power System: </th>
                                        <td class="value"> <?php echo $data['emergency_power_system']; ?></td>
                                    </tr>
                                    <tr  class="td-info_about_fire_prevention_measures">
                                        <th class="title"> Info About Fire Prevention Measures: </th>
                                        <td class="value"> <?php echo $data['info_about_fire_prevention_measures']; ?></td>
                                    </tr>
                                    <tr  class="td-mock_drill_date">
                                        <th class="title"> Mock Drill Date: </th>
                                        <td class="value"> <?php echo $data['mock_drill_date']; ?></td>
                                    </tr>
                                    <tr  class="td-no_emp_present_for_mock_drill">
                                        <th class="title"> No Emp Present For Mock Drill: </th>
                                        <td class="value"> <?php echo $data['no_emp_present_for_mock_drill']; ?></td>
                                    </tr>
                                    <tr  class="td-upload_photo_of_employee_present_for_mock_drill">
                                        <th class="title"> Upload Photo Of Employee Present For Mock Drill: </th>
                                        <td class="value"> <?php echo $data['upload_photo_of_employee_present_for_mock_drill']; ?></td>
                                    </tr>
                                    <tr  class="td-upload_fire_marshal_names_with_mobile_no">
                                        <th class="title"> Upload Fire Marshal Names With Mobile No: </th>
                                        <td class="value"> <?php echo $data['upload_fire_marshal_names_with_mobile_no']; ?></td>
                                    </tr>
                                    <tr  class="td-water_storage_capacity_terrace">
                                        <th class="title"> Water Storage Capacity Terrace: </th>
                                        <td class="value"> <?php echo $data['water_storage_capacity_terrace']; ?></td>
                                    </tr>
                                    <tr  class="td-water_storage_capacity_groundfloor">
                                        <th class="title"> Water Storage Capacity Groundfloor: </th>
                                        <td class="value"> <?php echo $data['water_storage_capacity_groundfloor']; ?></td>
                                    </tr>
                                    <tr  class="td-fire_noc_details">
                                        <th class="title"> Fire Noc Details: </th>
                                        <td class="value"> <?php echo $data['fire_noc_details']; ?></td>
                                    </tr>
                                    <tr  class="td-fire_noc_date">
                                        <th class="title"> Fire Noc Date: </th>
                                        <td class="value"> <?php echo $data['fire_noc_date']; ?></td>
                                    </tr>
                                    <tr  class="td-other_info_about_hospital">
                                        <th class="title"> Other Info About Hospital: </th>
                                        <td class="value"> <?php echo $data['other_info_about_hospital']; ?></td>
                                    </tr>
                                    <tr  class="td-oxygen_system">
                                        <th class="title"> Oxygen System: </th>
                                        <td class="value"> <?php echo $data['oxygen_system']; ?></td>
                                    </tr>
                                    <tr  class="td-maintenance_of_emergency_routes">
                                        <th class="title"> Maintenance Of Emergency Routes: </th>
                                        <td class="value"> <?php echo $data['maintenance_of_emergency_routes']; ?></td>
                                    </tr>
                                    <tr  class="td-remark">
                                        <th class="title"> Remark: </th>
                                        <td class="value"> <?php echo $data['remark']; ?></td>
                                    </tr>
                                    <tr  class="td-user_id">
                                        <th class="title"> User Id: </th>
                                        <td class="value"> <?php echo $data['user_id']; ?></td>
                                    </tr>
                                    <tr  class="td-date">
                                        <th class="title"> Date: </th>
                                        <td class="value"> <?php echo $data['date']; ?></td>
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
                                    <tr  class="td-recid">
                                        <th class="title"> Recid: </th>
                                        <td class="value"> <?php echo $data['recid']; ?></td>
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
                                <a class="btn btn-sm btn-info"  href="<?php print_link("govt_hospital_inspection_form/edit/$rec_id"); ?>">
                                    <i class="fa fa-edit"></i> Edit
                                </a>
                                <?php } ?>
                                <?php if($can_delete){ ?>
                                <a class="btn btn-sm btn-danger record-delete-btn mx-1"  href="<?php print_link("govt_hospital_inspection_form/delete/$rec_id/?csrf_token=$csrf_token&redirect=$current_page"); ?>" data-prompt-msg="Are you sure you want to delete this record?" data-display-style="modal">
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
