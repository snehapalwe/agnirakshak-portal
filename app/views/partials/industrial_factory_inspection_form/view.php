<?php 
//check if current user role is allowed access to the pages
$can_add = ACL::is_allowed("industrial_factory_inspection_form/add");
$can_edit = ACL::is_allowed("industrial_factory_inspection_form/edit");
$can_view = ACL::is_allowed("industrial_factory_inspection_form/view");
$can_delete = ACL::is_allowed("industrial_factory_inspection_form/delete");
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
                    <h4 class="record-title">Industrial Establishment Inspection / औद्योगिक आस्थापनांकरिता पाहणी</h4>
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
                                    <tr  class="td-business_name">
                                        <th class="title"> Business Name: </th>
                                        <td class="value"> <?php echo $data['business_name']; ?></td>
                                    </tr>
                                    <tr  class="td-business_address">
                                        <th class="title"> Business Address: </th>
                                        <td class="value"> <?php echo $data['business_address']; ?></td>
                                    </tr>
                                    <tr  class="td-mobile_no">
                                        <th class="title"> Mobile No: </th>
                                        <td class="value"> <?php echo $data['mobile_no']; ?></td>
                                    </tr>
                                    <tr  class="td-owners_name">
                                        <th class="title"> Owners Name: </th>
                                        <td class="value"> <?php echo $data['owners_name']; ?></td>
                                    </tr>
                                    <tr  class="td-residential_address">
                                        <th class="title"> Residential Address: </th>
                                        <td class="value"> <?php echo $data['residential_address']; ?></td>
                                    </tr>
                                    <tr  class="td-owners_mobile_number">
                                        <th class="title"> Owners Mobile Number: </th>
                                        <td class="value"> <?php echo $data['owners_mobile_number']; ?></td>
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
                                    <tr  class="td-building_type">
                                        <th class="title"> Building Type: </th>
                                        <td class="value"> <?php echo $data['building_type']; ?></td>
                                    </tr>
                                    <tr  class="td-building_height">
                                        <th class="title"> Building Height: </th>
                                        <td class="value"> <?php echo $data['building_height']; ?></td>
                                    </tr>
                                    <tr  class="td-building_floor">
                                        <th class="title"> Building Floor: </th>
                                        <td class="value"> <?php echo $data['building_floor']; ?></td>
                                    </tr>
                                    <tr  class="td-no_of_staircase_in_building_and_width">
                                        <th class="title"> No Of Staircase In Building And Width: </th>
                                        <td class="value"> <?php echo $data['no_of_staircase_in_building_and_width']; ?></td>
                                    </tr>
                                    <tr  class="td-no_of_commercial_spaces">
                                        <th class="title"> No Of Commercial Spaces: </th>
                                        <td class="value"> <?php echo $data['no_of_commercial_spaces']; ?></td>
                                    </tr>
                                    <tr  class="td-structural_audit_report_year_of_construction">
                                        <th class="title"> Structural Audit Report Year Of Construction: </th>
                                        <td class="value"> <?php echo $data['structural_audit_report_year_of_construction']; ?></td>
                                    </tr>
                                    <tr  class="td-structural_audit_report_date">
                                        <th class="title"> Structural Audit Report Date: </th>
                                        <td class="value"> <?php echo $data['structural_audit_report_date']; ?></td>
                                    </tr>
                                    <tr  class="td-structural_audit_agency_name">
                                        <th class="title"> Structural Audit Agency Name: </th>
                                        <td class="value"> <?php echo $data['structural_audit_agency_name']; ?></td>
                                    </tr>
                                    <tr  class="td-structural_audit_agency_address">
                                        <th class="title"> Structural Audit Agency Address: </th>
                                        <td class="value"> <?php echo $data['structural_audit_agency_address']; ?></td>
                                    </tr>
                                    <tr  class="td-structural_audit_agency_mobile_no">
                                        <th class="title"> Structural Audit Agency Mobile No: </th>
                                        <td class="value"> <?php echo $data['structural_audit_agency_mobile_no']; ?></td>
                                    </tr>
                                    <tr  class="td-permissions_obtained_for_the_business">
                                        <th class="title"> Permissions Obtained For The Business: </th>
                                        <td class="value"> <?php echo $data['permissions_obtained_for_the_business']; ?></td>
                                    </tr>
                                    <tr  class="td-female_employees_count">
                                        <th class="title"> Female Employees Count: </th>
                                        <td class="value"> <?php echo $data['female_employees_count']; ?></td>
                                    </tr>
                                    <tr  class="td-male_employees_count">
                                        <th class="title"> Male Employees Count: </th>
                                        <td class="value"> <?php echo $data['male_employees_count']; ?></td>
                                    </tr>
                                    <tr  class="td-total_employees_count">
                                        <th class="title"> Total Employees Count: </th>
                                        <td class="value"> <?php echo $data['total_employees_count']; ?></td>
                                    </tr>
                                    <tr  class="td-working_hours_at_business_premises">
                                        <th class="title"> Working Hours At Business Premises: </th>
                                        <td class="value"> <?php echo $data['working_hours_at_business_premises']; ?></td>
                                    </tr>
                                    <tr  class="td-natural_ventilation_total_windows">
                                        <th class="title"> Natural Ventilation Total Windows: </th>
                                        <td class="value"> <?php echo $data['natural_ventilation_total_windows']; ?></td>
                                    </tr>
                                    <tr  class="td-natural_ventilation_total_doors">
                                        <th class="title"> Natural Ventilation Total Doors: </th>
                                        <td class="value"> <?php echo $data['natural_ventilation_total_doors']; ?></td>
                                    </tr>
                                    <tr  class="td-area_of_business_premises">
                                        <th class="title"> Area Of Business Premises: </th>
                                        <td class="value"> <?php echo $data['area_of_business_premises']; ?></td>
                                    </tr>
                                    <tr  class="td-entrance_route_premises">
                                        <th class="title"> Entrance Route Premises: </th>
                                        <td class="value"> <?php echo $data['entrance_route_premises']; ?></td>
                                    </tr>
                                    <tr  class="td-exit_route_premises">
                                        <th class="title"> Exit Route Premises: </th>
                                        <td class="value"> <?php echo $data['exit_route_premises']; ?></td>
                                    </tr>
                                    <tr  class="td-record_room">
                                        <th class="title"> Record Room: </th>
                                        <td class="value"> <?php echo $data['record_room']; ?></td>
                                    </tr>
                                    <tr  class="td-water_storage_capacity_terrace">
                                        <th class="title"> Water Storage Capacity Terrace: </th>
                                        <td class="value"> <?php echo $data['water_storage_capacity_terrace']; ?></td>
                                    </tr>
                                    <tr  class="td-water_storage_capacity_groundfloor">
                                        <th class="title"> Water Storage Capacity Groundfloor: </th>
                                        <td class="value"> <?php echo $data['water_storage_capacity_groundfloor']; ?></td>
                                    </tr>
                                    <tr  class="td-no_lifts_in_the_building">
                                        <th class="title"> No Lifts In The Building: </th>
                                        <td class="value"> <?php echo $data['no_lifts_in_the_building']; ?></td>
                                    </tr>
                                    <tr  class="td-capacity_lifts_in_the_building">
                                        <th class="title"> Capacity Lifts In The Building: </th>
                                        <td class="value"> <?php echo $data['capacity_lifts_in_the_building']; ?></td>
                                    </tr>
                                    <tr  class="td-electrical_connection_capacity">
                                        <th class="title"> Electrical Connection Capacity: </th>
                                        <td class="value"> <?php echo $data['electrical_connection_capacity']; ?></td>
                                    </tr>
                                    <tr  class="td-electrical_audit_report_date">
                                        <th class="title"> Electrical Audit Report Date: </th>
                                        <td class="value"> <?php echo $data['electrical_audit_report_date']; ?></td>
                                    </tr>
                                    <tr  class="td-electrical_audit_agency_name">
                                        <th class="title"> Electrical Audit Agency Name: </th>
                                        <td class="value"> <?php echo $data['electrical_audit_agency_name']; ?></td>
                                    </tr>
                                    <tr  class="td-electrical_audit_agency_address">
                                        <th class="title"> Electrical Audit Agency Address: </th>
                                        <td class="value"> <?php echo $data['electrical_audit_agency_address']; ?></td>
                                    </tr>
                                    <tr  class="td-electrical_audit_agency_mobile_no">
                                        <th class="title"> Electrical Audit Agency Mobile No: </th>
                                        <td class="value"> <?php echo $data['electrical_audit_agency_mobile_no']; ?></td>
                                    </tr>
                                    <tr  class="td-generator_system">
                                        <th class="title"> Generator System: </th>
                                        <td class="value"> <?php echo $data['generator_system']; ?></td>
                                    </tr>
                                    <tr  class="td-raw_material_name">
                                        <th class="title"> Raw Material Name: </th>
                                        <td class="value"> <?php echo $data['raw_material_name']; ?></td>
                                    </tr>
                                    <tr  class="td-raw_material_storage_capacity">
                                        <th class="title"> Raw Material Storage Capacity: </th>
                                        <td class="value"> <?php echo $data['raw_material_storage_capacity']; ?></td>
                                    </tr>
                                    <tr  class="td-no_of_lpg_gas_cylinders">
                                        <th class="title"> No Of Lpg Gas Cylinders: </th>
                                        <td class="value"> <?php echo $data['no_of_lpg_gas_cylinders']; ?></td>
                                    </tr>
                                    <tr  class="td-name_of_final_product">
                                        <th class="title"> Name Of Final Product: </th>
                                        <td class="value"> <?php echo $data['name_of_final_product']; ?></td>
                                    </tr>
                                    <tr  class="td-storage_capacity_of_final_product">
                                        <th class="title"> Storage Capacity Of Final Product: </th>
                                        <td class="value"> <?php echo $data['storage_capacity_of_final_product']; ?></td>
                                    </tr>
                                    <tr  class="td-fire_extinguishing_permanent">
                                        <th class="title"> Fire Extinguishing Permanent: </th>
                                        <td class="value"> <?php echo $data['fire_extinguishing_permanent']; ?></td>
                                    </tr>
                                    <tr  class="td-fire_extinguishing_temporary">
                                        <th class="title"> Fire Extinguishing Temporary: </th>
                                        <td class="value"> <?php echo $data['fire_extinguishing_temporary']; ?></td>
                                    </tr>
                                    <tr  class="td-extinguishing_license_agency_name">
                                        <th class="title"> Extinguishing License Agency Name: </th>
                                        <td class="value"> <?php echo $data['extinguishing_license_agency_name']; ?></td>
                                    </tr>
                                    <tr  class="td-extinguishing_license_agency_lno">
                                        <th class="title"> Extinguishing License Agency Lno: </th>
                                        <td class="value"> <?php echo $data['extinguishing_license_agency_lno']; ?></td>
                                    </tr>
                                    <tr  class="td-extinguishing_license_agency_lvalidity">
                                        <th class="title"> Extinguishing License Agency Lvalidity: </th>
                                        <td class="value"> <?php echo $data['extinguishing_license_agency_lvalidity']; ?></td>
                                    </tr>
                                    <tr  class="td-extinguishing_licen_agency_cert_no">
                                        <th class="title"> Extinguishing Licen Agency Cert No: </th>
                                        <td class="value"> <?php echo $data['extinguishing_licen_agency_cert_no']; ?></td>
                                    </tr>
                                    <tr  class="td-user_id">
                                        <th class="title"> User Id: </th>
                                        <td class="value"> <?php echo $data['user_id']; ?></td>
                                    </tr>
                                    <tr  class="td-date">
                                        <th class="title"> Date: </th>
                                        <td class="value"> <?php echo $data['date']; ?></td>
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
                                <a class="btn btn-sm btn-info"  href="<?php print_link("industrial_factory_inspection_form/edit/$rec_id"); ?>">
                                    <i class="fa fa-edit"></i> Edit
                                </a>
                                <?php } ?>
                                <?php if($can_delete){ ?>
                                <a class="btn btn-sm btn-danger record-delete-btn mx-1"  href="<?php print_link("industrial_factory_inspection_form/delete/$rec_id/?csrf_token=$csrf_token&redirect=$current_page"); ?>" data-prompt-msg="Are you sure you want to delete this record?" data-display-style="modal">
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
