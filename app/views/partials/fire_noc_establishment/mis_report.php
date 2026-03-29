<?php 
//check if current user role is allowed access to the pages
$can_add = ACL::is_allowed("fire_noc_establishment/add");
$can_edit = ACL::is_allowed("fire_noc_establishment/edit");
$can_view = ACL::is_allowed("fire_noc_establishment/view");
$can_delete = ACL::is_allowed("fire_noc_establishment/delete");
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
                    <h4 class="record-title">Fire Noc Establishment</h4>
                </div>
                <div class="col-sm-3 ">
                </div>
                <div class="col-sm-4 ">
                    <form  class="search" action="<?php print_link('fire_noc_establishment/'); ?>" method="get">
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
                                        <a class="text-decoration-none" href="<?php print_link('fire_noc_establishment'); ?>">
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
                                        <a class="text-decoration-none" href="<?php print_link('fire_noc_establishment'); ?>">
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
            <div class="container">
                <div class="row ">
                    <div class="col-md-12 comp-grid">
                        <form method="get" action="<?php print_link($current_page) ?>" class="form filter-form">
                            <div class="card mb-3">
                                <div class="card-header h4 h4">Filter by Fire Noc Establishment Timestamp</div>
                                <div class="p-2">
                                    <input class="form-control datepicker"  value="<?php echo $this->set_field_value('fire_noc_establishment_timestamp') ?>" type="datetime"  name="fire_noc_establishment_timestamp" placeholder="" data-enable-time="" data-date-format="Y-m-d" data-alt-format="M j, Y" data-inline="false" data-no-calendar="false" data-mode="single" />
                                    </div>
                                </div>
                                <hr />
                                <div class="form-group text-center">
                                    <button class="btn btn-primary">Filter</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div  class="">
                <div class="container-fluid">
                    <div class="row ">
                        <div class="col-md-12 comp-grid">
                            <?php $this :: display_page_errors(); ?>
                            <div  class=" animated fadeIn page-content">
                                <div id="fire_noc_establishment-mis_report-records">
                                    <div id="page-report-body" class="table-responsive">
                                        <table class="table  table-striped table-sm text-left">
                                            <thead class="table-header bg-light">
                                                <tr>
                                                    <th class="td-sno">#</th>
                                                    <th  class="td-id"> Id</th>
                                                    <th  class="td-applicant_name"> Applicant Name</th>
                                                    <th  class="td-establishment_name"> Establishment Name</th>
                                                    <th  class="td-establishment_address"> Establishment Address</th>
                                                    <th  class="td-establishment_type_value"> Establishment Type Value</th>
                                                    <th  class="td-zone_value"> Zone Value</th>
                                                    <th  class="td-mobile_no"> Mobile No</th>
                                                    <th  class="td-subject"> Subject</th>
                                                    <th  class="td-date_of_application"> Date Of Application</th>
                                                    <th  class="td-upload_form_b"> Upload Form B</th>
                                                    <th  class="td-upload_agency_license_copy"> Upload Agency License Copy</th>
                                                    <th  class="td-upload_license_agencies_certificate"> Upload License Agencies Certificate</th>
                                                    <th  class="td-upload_fire_equipment_color_photos"> Upload Fire Equipment Color Photos</th>
                                                    <th  class="td-upload_available_fire_equipments_isi_certificate"> Upload Available Fire Equipments Isi Certificate</th>
                                                    <th  class="td-upload_property_tax_receipt_or_agreement_or_rent_copy"> Upload Property Tax Receipt Or Agreement Or Rent Copy</th>
                                                    <th  class="td-upload_mpcb_certificate"> Upload Mpcb Certificate</th>
                                                    <th  class="td-upload_society_noc"> Upload Society Noc</th>
                                                    <th  class="td-upload_internal_map"> Upload Internal Map</th>
                                                    <th  class="td-upload_location_layout_map"> Upload Location Layout Map</th>
                                                    <th  class="td-upload_electric_audit_report"> Upload Electric Audit Report</th>
                                                    <th  class="td-upload_affidavite"> Upload Affidavite</th>
                                                    <th  class="td-upload_lift_annual_maintenance_certificate"> Upload Lift Annual Maintenance Certificate</th>
                                                    <th  class="td-upload_ac_annual_maintenance_certificate"> Upload Ac Annual Maintenance Certificate</th>
                                                    <th  class="td-upload_building_structural_stability_report"> Upload Building Structural Stability Report</th>
                                                    <th  class="td-status"> Status</th>
                                                    <th  class="td-yr"> Yr</th>
                                                    <th  class="td-certificate_file"> Certificate File</th>
                                                    <th  class="td-timestamp"> Timestamp</th>
                                                    <th  class="td-application_no"> Application No</th>
                                                    <th  class="td-working_hours_from"> Working Hours From</th>
                                                    <th  class="td-working_hours_to"> Working Hours To</th>
                                                    <th  class="td-worker_count"> Worker Count</th>
                                                    <th  class="td-working_area_sqr_feet"> Working Area Sqr Feet</th>
                                                    <th  class="td-expiry_date"> Expiry Date</th>
                                                    <th  class="td-tippni"> Tippni</th>
                                                    <th  class="td-noc"> Noc</th>
                                                    <th  class="td-application_type"> Application Type</th>
                                                    <th  class="td-property_number"> Property Number</th>
                                                    <th  class="td-name_of_property_owner"> Name Of Property Owner</th>
                                                    <th  class="td-pending_due_amount"> Pending Due Amount</th>
                                                    <th  class="td-area_in_sq_ft"> Area In Sq Ft</th>
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
                                                    <th class="td-sno"><?php echo $counter; ?></th>
                                                    <td class="td-id"><a href="<?php print_link("fire_noc_establishment/view/$data[id]") ?>"><?php echo $data['id']; ?></a></td>
                                                    <td class="td-applicant_name"> <?php echo $data['applicant_name']; ?></td>
                                                    <td class="td-establishment_name"> <?php echo $data['establishment_name']; ?></td>
                                                    <td class="td-establishment_address"> <?php echo $data['establishment_address']; ?></td>
                                                    <td class="td-establishment_type_value"> <?php echo $data['establishment_type_value']; ?></td>
                                                    <td class="td-zone_value"> <?php echo $data['zone_value']; ?></td>
                                                    <td class="td-mobile_no"> <?php echo $data['mobile_no']; ?></td>
                                                    <td class="td-subject"> <?php echo $data['subject']; ?></td>
                                                    <td class="td-date_of_application"> <?php echo $data['date_of_application']; ?></td>
                                                    <td class="td-upload_form_b"><?php Html :: page_link_file($data['upload_form_b']); ?></td>
                                                    <td class="td-upload_agency_license_copy"><?php Html :: page_link_file($data['upload_agency_license_copy']); ?></td>
                                                    <td class="td-upload_license_agencies_certificate"><?php Html :: page_link_file($data['upload_license_agencies_certificate']); ?></td>
                                                    <td class="td-upload_fire_equipment_color_photos"><?php Html :: page_link_file($data['upload_fire_equipment_color_photos']); ?></td>
                                                    <td class="td-upload_available_fire_equipments_isi_certificate"> <?php echo $data['upload_available_fire_equipments_isi_certificate']; ?></td>
                                                    <td class="td-upload_property_tax_receipt_or_agreement_or_rent_copy"><?php Html :: page_link_file($data['upload_property_tax_receipt_or_agreement_or_rent_copy']); ?></td>
                                                    <td class="td-upload_mpcb_certificate"><?php Html :: page_link_file($data['upload_mpcb_certificate']); ?></td>
                                                    <td class="td-upload_society_noc"><?php Html :: page_link_file($data['upload_society_noc']); ?></td>
                                                    <td class="td-upload_internal_map"><?php Html :: page_link_file($data['upload_internal_map']); ?></td>
                                                    <td class="td-upload_location_layout_map"><?php Html :: page_link_file($data['upload_location_layout_map']); ?></td>
                                                    <td class="td-upload_electric_audit_report"><?php Html :: page_link_file($data['upload_electric_audit_report']); ?></td>
                                                    <td class="td-upload_affidavite"><?php Html :: page_link_file($data['upload_affidavite']); ?></td>
                                                    <td class="td-upload_lift_annual_maintenance_certificate"><?php Html :: page_link_file($data['upload_lift_annual_maintenance_certificate']); ?></td>
                                                    <td class="td-upload_ac_annual_maintenance_certificate"><?php Html :: page_link_file($data['upload_ac_annual_maintenance_certificate']); ?></td>
                                                    <td class="td-upload_building_structural_stability_report"><?php Html :: page_link_file($data['upload_building_structural_stability_report']); ?></td>
                                                    <td class="td-status">  <span><?php 
                                                        if(round($data['status'])!=0){
                                                        echo '<span style="font-weight: bold; background-color: yellow; padding: 2px 5px; border-radius: 3px;">Pending at auth Authority</span>';
                                                        } 
                                                        $status = $data['status'];
                                                        if ($status === 'Rejected') {
                                                        $bgColor = '#FF0000';
                                                        $textColor = 'white';
                                                        } else {
                                                        $bgColor = 'yellow';
                                                        $textColor = 'grey';
                                                        }
                                                        if($status=="0"){
                                                        $status="Pending with citizen";
                                                        }
                                                        echo "<span style='font-weight: bold; background-color: $bgColor; color: $textColor; padding: 2px 5px;'>$status</span>";
                                                        if($data['status'] == 3 && USER_ROLE == 3 && $data['payment_done'] == 0 && $data['paid'] > 0) {
                                                        echo "<br><span style='font-weight: bold; background-color: yellow; padding: 2px 5px; border-radius: 3px;'>
                                                            Pending for payment - " . getamt($data['paid']) . "
                                                        </span>";
                                                        }
                                                    ?></span>
                                                </td>
                                                <td class="td-yr"> <?php echo $data['yr']; ?></td>
                                                <td class="td-certificate_file"><?php Html :: page_link_file($data['certificate_file']); ?></td>
                                                <td class="td-timestamp"> <?php echo $data['timestamp']; ?></td>
                                                <td class="td-application_no"> <?php echo $data['application_no']; ?></td>
                                                <td class="td-working_hours_from"> <?php echo $data['working_hours_from']; ?></td>
                                                <td class="td-working_hours_to"> <?php echo $data['working_hours_to']; ?></td>
                                                <td class="td-worker_count"> <?php echo $data['worker_count']; ?></td>
                                                <td class="td-working_area_sqr_feet"> <?php echo $data['working_area_sqr_feet']; ?></td>
                                                <td class="td-expiry_date"> <?php echo $data['expiry_date']; ?></td>
                                                <td class="td-tippni"><?php Html :: page_link_file($data['tippni']); ?></td>
                                                <td class="td-noc"><?php Html :: page_link_file($data['noc']); ?></td>
                                                <td class="td-application_type"> <?php echo $data['application_type']; ?></td>
                                                <td class="td-property_number"> <?php echo $data['property_number']; ?></td>
                                                <td class="td-name_of_property_owner"> <?php echo $data['name_of_property_owner']; ?></td>
                                                <td class="td-pending_due_amount"> <?php echo $data['pending_due_amount']; ?></td>
                                                <td class="td-area_in_sq_ft"> <?php echo $data['area_in_sq_ft']; ?></td>
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
                                                <?php $export_excel_link = $this->set_current_page_link(array('format' => 'excel')); ?>
                                                <a class="btn  btn-sm btn-primary export-link-btn" data-format="excel" href="<?php print_link($export_excel_link); ?>" target="_blank">
                                                    <img src="<?php print_link('assets/images/xsl.png') ?>" class="mr-2" /> EXCEL
                                                    </a>
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
