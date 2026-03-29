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
<section class="page" id="<?php echo $page_element_id; ?>" data-page-type="list"  data-display-type="grid" data-page-url="<?php print_link($current_page); ?>">
    <?php
    if( $show_header == true ){
    ?>
    <div  class="bg-light p-3 mb-3">
        <div class="container-fluid">
            <div class="row ">
                <div class="col ">
                    <h4 class="record-title">FIRE NOC APPLICATION FOR ESTABLISHMENTS</h4>
                </div>
                <div class="col-sm-3 ">
                    <?php if($can_add){ ?>
                    <a  class="btn btn btn-primary my-1" href="<?php print_link("fire_noc_establishment/add") ?>">
                        <i class="fa fa-plus"></i>                              
                        Add New / नवीन नोंद 
                    </a>
                    <?php } ?>
                </div>
                <div class="col-sm-4 ">
                    <form  class="search" action="<?php print_link('fire_noc_establishment'); ?>" method="get">
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
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-md-12 comp-grid">
                        <?php $this :: display_page_errors(); ?>
                        <div  class=" animated fadeIn page-content">
                            <div id="fire_noc_establishment-list-records">
                                <?php
                                if(!empty($records)){
                                ?>
                                <div id="page-report-body">
                                    <div class="row sm-gutters page-data" id="page-data-<?php echo $page_element_id; ?>">
                                        <!--record-->
                                        <?php
                                        $counter = 0;
                                        foreach($records as $data){
                                        $rec_id = (!empty($data['id']) ? urlencode($data['id']) : null);
                                        $counter++;
                                        ?>
                                        <div class="col-sm-4">
                                            <div class="bg-light p-2 mb-3 animated bounceIn">
                                                <div style="display: flex; justify-content: space-between; align-items: center;">
                                                    <span><?php echo $data['id']; ?></span>
                                                    <button type="button" class="btn btn-success" onclick="printSection(event)">🖨️ Print</button>
                                                </div>
                                                <?php 
                                                $id=$data['id'];
                                                if($data['do_you_want_to_add_more_property'] == 'Yes' && $data['status']+0==0){
                                                echo "<br>";
                                                    if(USER_ROLE==3){
                                                    echo "<a href='" . SITE_ADDR . "fire_noc_establishment_subentry/add?rec_id=$id' class='btn btn-sm btn-danger'>Add More Property</a>";
                                                    echo "<a href='" . SITE_ADDR . "fire_noc_establishment/confirm_application/$id' class='btn btn-sm btn-success'>Confirm Application</a>";
                                                    echo "<br>";
                                                        echo "<br>";
                                                            }
                                                            }   
                                                            if($data['do_you_want_to_add_more_property'] == 'Yes' ){
                                                            echo "<br>";
                                                                echo "<a href='" . SITE_ADDR . "fire_noc_establishment_subentry/?rec_id=$id' class='btn btn-sm btn-warning'>View More Property</a>";
                                                                echo "<br>";
                                                                    echo "<br>";
                                                                        } 
                                                                        if($data['status'] == 'Reverted' ){
                                                                        echo "APPLICATION REVERTED";
                                                                        echo "<br>";
                                                                            echo "<a href='" . SITE_ADDR . "fire_noc_establishment/revert/$id' class='btn btn-sm btn-danger'>Edit Application</a>";
                                                                            echo "<br>";
                                                                                echo "<br>";
                                                                                    }   
                                                                                    ?>
                                                                                    <?php if (!empty($data['application_no'])): ?>
                                                                                    <div class="mb-2">
                                                                                        <strong style="font-weight: 500 !important; color: #000 !important;">
                                                                                            Application No.:
                                                                                        </strong>  
                                                                                        <span style="font-weight: bold; background-color: yellow; padding: 2px 5px; border-radius: 3px;">
                                                                                            <?php echo $data['status']=="0"?"":$data['application_no']; ?>
                                                                                        </span>
                                                                                    </div>
                                                                                    <?php endif; ?>
                                                                                    <div class="mb-2">  
                                                                                        <span class="font-weight-light text-muted ">
                                                                                            PROPERTY NUMBER :  
                                                                                        </span>
                                                                                    <?php echo $data['property_number']; ?></div>
                                                                                    <div class="mb-2">  
                                                                                        <span class="font-weight-light text-muted ">
                                                                                            NAME OF PROPERTY OWNER :  
                                                                                        </span>
                                                                                    <?php echo $data['name_of_property_owner']; ?></div>
                                                                                    <div class="mb-2">  
                                                                                        <span class="font-weight-light text-muted ">
                                                                                            PENDING DUE AMOUNT :  
                                                                                        </span>
                                                                                    <?php echo $data['pending_due_amount']; ?></div>
                                                                                    <div class="mb-2">  
                                                                                        <span class="font-weight-light text-muted ">
                                                                                            AREA (SQ. FT.) :  
                                                                                        </span>
                                                                                    <?php echo $data['area_in_sq_ft']; ?></div>
                                                                                    <div class="mb-2">  
                                                                                        <span class="font-weight-light text-muted ">
                                                                                            APPLICATION TYPE :  
                                                                                        </span>
                                                                                    <?php echo $data['application_type']; ?></div>
                                                                                    <div class="mb-2">  
                                                                                        <span class="font-weight-light text-muted ">
                                                                                            ESTABLISHMENT TYPE :  
                                                                                        </span>
                                                                                    <?php echo $data['establishment_type_value']; ?></div>
                                                                                    <div class="mb-2">  
                                                                                        <span class="font-weight-light text-muted ">
                                                                                            APPLICANT NAME :  
                                                                                        </span>
                                                                                    <?php echo $data['applicant_name']; ?></div>
                                                                                    <div class="mb-2">  
                                                                                        <span class="font-weight-light text-muted ">
                                                                                            ESTABLISHMENT NAME :  
                                                                                        </span>
                                                                                    <?php echo $data['establishment_name']; ?></div>
                                                                                    <div class="mb-2">  
                                                                                        <span class="font-weight-light text-muted ">
                                                                                            ESTABLISHMENT ADDRESS :  
                                                                                        </span>
                                                                                    <?php echo $data['establishment_address']; ?></div>
                                                                                    <div class="mb-2">  
                                                                                        <span class="font-weight-light text-muted ">
                                                                                            MOBILE NO. :  
                                                                                        </span>
                                                                                    <?php echo $data['mobile_no']; ?></div>
                                                                                    <?php if (!empty($data['zone_value'])): ?>
                                                                                    <div class="mb-2">
                                                                                        <strong style="font-weight: 500 !important; color: #000 !important;">
                                                                                            ZONE :
                                                                                        </strong>
                                                                                        <span><?php echo $data['zone_value']; ?></span>
                                                                                    </div>
                                                                                    <?php endif; ?>
                                                                                    <?php if (USER_ROLE == 2 && ($_SESSION['stage'] + 0) == 1 && $data['status'] == 1): ?>
                                                                                    <div class="mb-2 mt-1">
                                                                                        <strong style="font-weight: 500 !important; color: #000 !important;">
                                                                                            ZONE :
                                                                                        </strong>
                                                                                        <a href="<?php echo SITE_ADDR . "fire_noc_establishment/edit_zone/" . $data['id']; ?>" 
                                                                                            class="btn btn-danger btn-sm">
                                                                                            Edit Zone
                                                                                        </a>
                                                                                    </div>
                                                                                    <?php endif; ?>
                                                                                    <div class="mb-2">  
                                                                                        <span class="font-weight-light text-muted ">
                                                                                            WORKING HOURS FROM :  
                                                                                        </span>
                                                                                    <?php echo $data['working_hours_from']; ?></div>
                                                                                    <div class="mb-2">  
                                                                                        <span class="font-weight-light text-muted ">
                                                                                            WORKING HOURS TO :  
                                                                                        </span>
                                                                                    <?php echo $data['working_hours_to']; ?></div>
                                                                                    <div class="mb-2">  
                                                                                        <span class="font-weight-light text-muted ">
                                                                                            WORKER COUNT :  
                                                                                        </span>
                                                                                    <?php echo $data['worker_count']; ?></div>
                                                                                    <div class="mb-2">  
                                                                                        <span class="font-weight-light text-muted ">
                                                                                            SUBJECT :  
                                                                                        </span>
                                                                                    <?php echo $data['subject']; ?></div>
                                                                                    <?php if (!empty($data['upload_form_b'])): ?>
                                                                                    <div class="mb-2" style="display: flex; justify-content: space-between; align-items: center;">
                                                                                        <strong style="font-weight: 500 !important; color: #000 !important;">
                                                                                            Form-B:
                                                                                        </strong>  
                                                                                        <a href="<?php echo htmlspecialchars($data['upload_form_b'], ENT_QUOTES, 'UTF-8'); ?>" 
                                                                                            target="_blank" onclick="return autoPrintImage(this.href);"
                                                                                            class="btn btn-info btn-sm">
                                                                                            View Form B
                                                                                        </a>
                                                                                    </div>
                                                                                    <?php endif; ?>
                                                                                    <?php if (!empty($data['upload_agency_license_copy'])): ?>
                                                                                    <div class="mb-2" style="display: flex; justify-content: space-between; align-items: center;">
                                                                                        <strong style="font-weight: 500 !important; color: #000 !important;">
                                                                                            Agency License Copy:
                                                                                        </strong>  
                                                                                        <a href="<?php echo htmlspecialchars($data['upload_agency_license_copy'], ENT_QUOTES, 'UTF-8'); ?>" 
                                                                                            target="_blank" onclick="return autoPrintImage(this.href);"
                                                                                            class="btn btn-info btn-sm">
                                                                                            View Agency License Copy
                                                                                        </a>
                                                                                    </div>
                                                                                    <?php endif; ?>
                                                                                    <?php if (!empty($data['upload_license_agencies_certificate'])): ?>
                                                                                    <div class="mb-2" style="display: flex; justify-content: space-between; align-items: center;">
                                                                                        <strong style="font-weight: 500 !important; color: #000 !important;">
                                                                                            License Agencies Certificate:
                                                                                        </strong>  
                                                                                        <a href="<?php echo htmlspecialchars($data['upload_license_agencies_certificate'], ENT_QUOTES, 'UTF-8'); ?>" 
                                                                                            target="_blank" onclick="return autoPrintImage(this.href);"
                                                                                            class="btn btn-info btn-sm">
                                                                                            View License Agencies Certificate
                                                                                        </a>
                                                                                    </div>
                                                                                    <?php endif; ?>
                                                                                    <?php if (!empty($data['upload_fire_equipment_color_photos'])): ?>
                                                                                    <div class="mb-2" style="display: flex; justify-content: space-between; align-items: center;">
                                                                                        <strong style="font-weight: 500 !important; color: #000 !important;">
                                                                                            Fire Equipment Color Photo:
                                                                                        </strong>  
                                                                                        <a href="<?php echo htmlspecialchars($data['upload_fire_equipment_color_photos'], ENT_QUOTES, 'UTF-8'); ?>" 
                                                                                            target="_blank" onclick="return autoPrintImage(this.href);"
                                                                                            class="btn btn-info btn-sm">
                                                                                            View Photo
                                                                                        </a>
                                                                                    </div>
                                                                                    <?php endif; ?>
                                                                                    <?php if (!empty($data['upload_available_fire_equipments_isi_certificate'])): ?>
                                                                                    <div class="mb-2" style="display: flex; justify-content: space-between; align-items: center;">
                                                                                        <strong style="font-weight: 500 !important; color: #000 !important;">
                                                                                            Available Fire Equipments ISI Certificate:
                                                                                        </strong>  
                                                                                        <a href="<?php echo htmlspecialchars($data['upload_available_fire_equipments_isi_certificate'], ENT_QUOTES, 'UTF-8'); ?>" 
                                                                                            target="_blank" onclick="return autoPrintImage(this.href);"
                                                                                            class="btn btn-info btn-sm">
                                                                                            View Certificate
                                                                                        </a>
                                                                                    </div>
                                                                                    <?php endif; ?>
                                                                                    <?php if (!empty($data['upload_property_tax_receipt_or_agreement_or_rent_copy'])): ?>
                                                                                    <div class="mb-2" style="display: flex; justify-content: space-between; align-items: center;">
                                                                                        <strong style="font-weight: 500 !important; color: #000 !important;">
                                                                                            Property Tax Receipt / Agreement / Rent Copy:
                                                                                        </strong>  
                                                                                        <a href="<?php echo htmlspecialchars($data['upload_property_tax_receipt_or_agreement_or_rent_copy'], ENT_QUOTES, 'UTF-8'); ?>" 
                                                                                            target="_blank" onclick="return autoPrintImage(this.href);"
                                                                                            class="btn btn-info btn-sm">
                                                                                            View Document
                                                                                        </a>
                                                                                    </div>
                                                                                    <?php endif; ?>
                                                                                    <?php if (!empty($data['upload_mpcb_certificate'])): ?>
                                                                                    <div class="mb-2" style="display: flex; justify-content: space-between; align-items: center;">
                                                                                        <strong style="font-weight: 500 !important; color: #000 !important;">
                                                                                            Mpcb Certificate:
                                                                                        </strong>  
                                                                                        <a href="<?php echo htmlspecialchars($data['upload_mpcb_certificate'], ENT_QUOTES, 'UTF-8'); ?>" 
                                                                                            target="_blank" onclick="return autoPrintImage(this.href);"
                                                                                            class="btn btn-info btn-sm">
                                                                                            View Certificate
                                                                                        </a>
                                                                                    </div>
                                                                                    <?php endif; ?>
                                                                                    <?php if (!empty($data['upload_society_noc'])): ?>
                                                                                    <div class="mb-2" style="display: flex; justify-content: space-between; align-items: center;">
                                                                                        <strong style="font-weight: 500 !important; color: #000 !important;">
                                                                                            Society NOC :
                                                                                        </strong>  
                                                                                        <a href="<?php echo htmlspecialchars($data['upload_society_noc'], ENT_QUOTES, 'UTF-8'); ?>" 
                                                                                            target="_blank" onclick="return autoPrintImage(this.href);"
                                                                                            class="btn btn-info btn-sm">
                                                                                            View Document
                                                                                        </a>
                                                                                    </div>
                                                                                    <?php endif; ?>
                                                                                    <?php if (!empty($data['upload_internal_map'])): ?>
                                                                                    <div class="mb-2" style="display: flex; justify-content: space-between; align-items: center;">
                                                                                        <strong style="font-weight: 500 !important; color: #000 !important;">
                                                                                            Internal Map:
                                                                                        </strong>  
                                                                                        <a href="<?php echo htmlspecialchars($data['upload_internal_map'], ENT_QUOTES, 'UTF-8'); ?>" 
                                                                                            target="_blank" onclick="return autoPrintImage(this.href);"
                                                                                            class="btn btn-info btn-sm">
                                                                                            View Internal Map
                                                                                        </a>
                                                                                    </div>
                                                                                    <?php endif; ?>
                                                                                    <div class="mb-2">  
                                                                                        <span class="font-weight-light text-muted ">
                                                                                            Area Sqr Mtr:  
                                                                                        </span>
                                                                                    <?php echo $data['working_area_sqr_feet']; ?></div>
                                                                                    <?php if (!empty($data['upload_location_layout_map'])): ?>
                                                                                    <div class="mb-2" style="display: flex; justify-content: space-between; align-items: center;">
                                                                                        <strong style="font-weight: 500 !important; color: #000 !important;">
                                                                                            Location Layout Map:
                                                                                        </strong>  
                                                                                        <a href="<?php echo htmlspecialchars($data['upload_location_layout_map'], ENT_QUOTES, 'UTF-8'); ?>" 
                                                                                            target="_blank" onclick="return autoPrintImage(this.href);"
                                                                                            class="btn btn-info btn-sm">
                                                                                            View Layout Map
                                                                                        </a>
                                                                                    </div>
                                                                                    <?php endif; ?>
                                                                                    <?php if (!empty($data['upload_electric_audit_report'])): ?>
                                                                                    <div class="mb-2" style="display: flex; justify-content: space-between; align-items: center;">
                                                                                        <strong style="font-weight: 500 !important; color: #000 !important;">
                                                                                            Electric Audit Report:
                                                                                        </strong>  
                                                                                        <a href="<?php echo htmlspecialchars($data['upload_electric_audit_report'], ENT_QUOTES, 'UTF-8'); ?>" 
                                                                                            target="_blank" onclick="return autoPrintImage(this.href);"
                                                                                            class="btn btn-info btn-sm">
                                                                                            View Audit Report
                                                                                        </a>
                                                                                    </div>
                                                                                    <?php endif; ?>
                                                                                    <?php if (!empty($data['upload_affidavite'])): ?>
                                                                                    <div class="mb-2" style="display: flex; justify-content: space-between; align-items: center;">
                                                                                        <strong style="font-weight: 500 !important; color: #000 !important;">
                                                                                            Affidavite:
                                                                                        </strong>  
                                                                                        <a href="<?php echo htmlspecialchars($data['upload_affidavite'], ENT_QUOTES, 'UTF-8'); ?>" 
                                                                                            target="_blank" onclick="return autoPrintImage(this.href);"
                                                                                            class="btn btn-info btn-sm">
                                                                                            View Affidavite
                                                                                        </a>
                                                                                    </div>
                                                                                    <?php endif; ?>
                                                                                    <?php if (!empty($data['upload_lift_annual_maintenance_certificate'])): ?>
                                                                                    <div class="mb-2" style="display: flex; justify-content: space-between; align-items: center;">
                                                                                        <strong style="font-weight: 500 !important; color: #000 !important;">
                                                                                            Lift Annual Maintenance Certificate:
                                                                                        </strong>  
                                                                                        <a href="<?php echo htmlspecialchars($data['upload_lift_annual_maintenance_certificate'], ENT_QUOTES, 'UTF-8'); ?>" 
                                                                                            target="_blank" onclick="return autoPrintImage(this.href);"
                                                                                            class="btn btn-info btn-sm">
                                                                                            View Certificate
                                                                                        </a>
                                                                                    </div>
                                                                                    <?php endif; ?>
                                                                                    <?php if (!empty($data['upload_ac_annual_maintenance_certificate'])): ?>
                                                                                    <div class="mb-2" style="display: flex; justify-content: space-between; align-items: center;">
                                                                                        <strong style="font-weight: 500 !important; color: #000 !important;">
                                                                                            Ac Mannual Maintenance Certificate:
                                                                                        </strong>  
                                                                                        <a href="<?php echo htmlspecialchars($data['upload_ac_annual_maintenance_certificate'], ENT_QUOTES, 'UTF-8'); ?>" 
                                                                                            target="_blank" onclick="return autoPrintImage(this.href);"
                                                                                            class="btn btn-info btn-sm">
                                                                                            View Certificate
                                                                                        </a>
                                                                                    </div>
                                                                                    <?php endif; ?>
                                                                                    <?php if (!empty($data['upload_building_structural_stability_report'])): ?>
                                                                                    <div class="mb-2" style="display: flex; justify-content: space-between; align-items: center;">
                                                                                        <strong style="font-weight: 500 !important; color: #000 !important;">
                                                                                            Building Structural Stability Report:
                                                                                        </strong>  
                                                                                        <a href="<?php echo htmlspecialchars($data['upload_building_structural_stability_report'], ENT_QUOTES, 'UTF-8'); ?>" 
                                                                                            target="_blank" onclick="return autoPrintImage(this.href);"
                                                                                            class="btn btn-info btn-sm">
                                                                                            View Report
                                                                                        </a>
                                                                                    </div>
                                                                                    <?php endif; ?>
                                                                                    <div class="mb-2">  
                                                                                        <span class="font-weight-light text-muted ">
                                                                                            Do You Want To Add More Property:  
                                                                                        </span>
                                                                                    <?php echo $data['do_you_want_to_add_more_property']; ?></div>
                                                                                    <div class="mb-2">  
                                                                                        <span class="font-weight-light text-muted ">
                                                                                            DATE OF APPLICATION :  
                                                                                        </span>
                                                                                    <?php echo $data['date_of_application']; ?></div>
                                                                                    <span><?php 
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
                                                                                        $status="Pending with me";
                                                                                        }
                                                                                        echo "<span style='font-weight: bold; background-color: $bgColor; color: $textColor; padding: 2px 5px;'>$status</span>";
                                                                                        if($data['status'] == 3 && USER_ROLE == 3 && $data['payment_done'] == 0 && $data['paid'] > 0) {
                                                                                        echo "<br><span style='font-weight: bold; background-color: yellow; padding: 2px 5px; border-radius: 3px;'>
                                                                                            Pending for payment - " . getamt($data['paid']) . "
                                                                                        </span>";
                                                                                        echo "<a href='".SITE_ADDR."ccav.php?amt=".getamt($data['paid'])."&paid=".$data['paid']."' class='btn btn-danger'>Make Online Payment</a>";
                                                                                        }
                                                                                        if($data['status']== "Rejected"){
                                                                                        echo "<br>";
                                                                                            echo "<a href='".SITE_ADDR."api/viewreason/".$data['id']."/".$_SESSION['tablename']."' class='btn btn-warning page-modal modal-page'>View Reason</a>";
                                                                                            }
                                                                                            if(USER_ROLE == 3){
                                                                                            if($data['status']=="Completed"  ){
                                                                                            if($data['tippni']==""){ 
                                                                                            echo " Certificate Upload pending";
                                                                                            }else{
                                                                                            // echo "<a href='".$data['tippni']."' class='btn btn-success'>Download Tippni</a>";
                                                                                            echo "<br>";
                                                                                                echo "<a href='".$data['noc']."' class='btn btn-success'>Download NOC</a>";
                                                                                                echo "<br>";
                                                                                                    echo "<br>";
                                                                                                        }
                                                                                                        }
                                                                                                        }
                                                                                                        else{
                                                                                                        if($data['status']=="Completed"  ){
                                                                                                        if($data['tippni']==""){ 
                                                                                                        echo " Certificate Upload pending";
                                                                                                        }else{
                                                                                                        echo "<a href='".$data['tippni']."' class='btn btn-success'>Download Tippni</a>";
                                                                                                        echo "<a href='".$data['noc']."' class='btn btn-success'>Download NOC</a>";
                                                                                                        }
                                                                                                        }
                                                                                                        }
                                                                                                        if(USER_ROLE == 2){/*authority*/
                                                                                                        if($data['status']=="Completed" && $_SESSION['stage']==4 && $data['tippni']==""){
                                                                                                        echo "<a href='".SITE_ADDR."certificate_upload/add?rec_id=".$data['id']."&db_name=".$_SESSION['tablename']."' class='btn btn-sm btn-danger'>Upload certificate</a>";  
                                                                                                        }
                                                                                                        if($_SESSION['stage'] == $data['status']){
                                                                                                        if($data['status']==2){ // for auth 2
                                                                                                        if($data['inspection_done']==0){  
                                                                                                        $arr[1]="hotel_inspection_form";
                                                                                                        $arr[2]="industrial_factory_inspection_form";
                                                                                                        $arr[3]="private_hospital_inspection_form";
                                                                                                        $arr[4]="govt_hospital_inspection_form";
                                                                                                        $arr[5]="school_college_coaching_inspection_form";
                                                                                                        $arr[6]="mall_cinema_inspection_form";
                                                                                                        $arr[7]="other_establishment_inspection_form";
                                                                                                        $tablename=$arr[$data['establishment_type_id']+0];
                                                                                                        echo "<a href='".SITE_ADDR."$tablename/add?recid=".$data['id']."' class='btn btn-sm btn-danger'>Do Inspection</a>";  
                                                                                                        }elseif($data['paid']==0){ 
                                                                                                        echo "<a href='".SITE_ADDR."demand/add?rec_id=".$data['id']."&db_name=".$_SESSION['tablename']."' class='btn btn-sm btn-danger'>Demand</a>";  
                                                                                                        }else{
                                                                                                        echo "<a href='".SITE_ADDR."accept_reject/add?db_name=".$_SESSION['tablename']."&rec_id=".$data['id']."' class='btn btn-sm btn-danger'>Accept/Reject</a>"; 
                                                                                                        echo "<br>";
                                                                                                            echo "<br>";
                                                                                                                }
                                                                                                                if($data['inspection_done']>0){
                                                                                                                $arr[1]="hotel_inspection_form";
                                                                                                                $arr[2]="industrial_factory_inspection_form";
                                                                                                                $arr[3]="private_hospital_inspection_form";
                                                                                                                $arr[4]="govt_hospital_inspection_form";
                                                                                                                $arr[5]="school_college_coaching_inspection_form";
                                                                                                                $arr[6]="mall_cinema_inspection_form";
                                                                                                                $arr[7]="other_establishment_inspection_form";
                                                                                                                $tablename=$arr[$data['establishment_type_id']+0];
                                                                                                                echo "<a href='".SITE_ADDR."$tablename/view/".$data['inspection_done']."' class='btn btn-sm btn-warning'>View Inspection</a>";
                                                                                                                }
                                                                                                                }elseif($data['status']==3){
                                                                                                                if($data['payment_done']==0){ 
                                                                                                                echo "<a href='".SITE_ADDR."demand/edit/".$data['paid']."' class='btn btn-sm btn-danger'>Demand Payment</a>";  
                                                                                                                }else{
                                                                                                                echo "<a href='".SITE_ADDR."accept_reject/add?db_name=".$_SESSION['tablename']."&rec_id=".$data['id']."' class='btn btn-sm btn-danger'>Accept/Reject</a>"; 
                                                                                                                echo "<br>";
                                                                                                                    echo "<br>";
                                                                                                                        }
                                                                                                                        }else{
                                                                                                                        echo "<a href='".SITE_ADDR."accept_reject/add?db_name=".$_SESSION['tablename']."&rec_id=".$data['id']."' class='btn btn-sm btn-danger'>Accept/Reject</a>";
                                                                                                                        echo "<br>";
                                                                                                                            echo "<br>";
                                                                                                                                }
                                                                                                                                }
                                                                                                                                }
                                                                                                                                if($data['payment_done']==1){
                                                                                                                                echo "<br>";
                                                                                                                                    echo "<a href='".SITE_ADDR."demand/view/".$data['paid']."' class='btn btn-sm btn-success'>View Receipt</a>"; 
                                                                                                                                    }
                                                                                                                                ?></span>
                                                                                                                                <div class="mb-2">  
                                                                                                                                    <span class="font-weight-light text-muted ">
                                                                                                                                        TIMESTAMP :  
                                                                                                                                    </span>
                                                                                                                                <?php echo $data['timestamp']; ?></div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <?php 
                                                                                                                        }
                                                                                                                        ?>
                                                                                                                        <!--endrecord-->
                                                                                                                    </div>
                                                                                                                    <div class="row sm-gutters search-data" id="search-data-<?php echo $page_element_id; ?>"></div>
                                                                                                                    <div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <?php
                                                                                                                if($show_footer == true){
                                                                                                                ?>
                                                                                                                <div class=" border-top mt-2">
                                                                                                                    <div class="row justify-content-center">    
                                                                                                                        <div class="col-md-auto">   
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
                                                                                                                }
                                                                                                                else{
                                                                                                                ?>
                                                                                                                <div class="text-muted  animated bounce p-3">
                                                                                                                    <h4><i class="fa fa-ban"></i> No record found</h4>
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
