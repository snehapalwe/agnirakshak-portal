<?php 
//check if current user role is allowed access to the pages
$can_add = ACL::is_allowed("fire_final_noc_renewal/add");
$can_edit = ACL::is_allowed("fire_final_noc_renewal/edit");
$can_view = ACL::is_allowed("fire_final_noc_renewal/view");
$can_delete = ACL::is_allowed("fire_final_noc_renewal/delete");
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
                    <h4 class="record-title"><strong style='color: black;'>RENEWAL OF FIRE FINAL NOC</strong>
                    </h4>
                </div>
                <div class="col-sm-3 ">
                    <?php if($can_add){ ?>
                    <a  class="btn btn btn-primary my-1" href="<?php print_link("fire_final_noc_renewal/add") ?>">
                        <i class="fa fa-plus"></i>                              
                        Add New / नवीन नोंद 
                    </a>
                    <?php } ?>
                </div>
                <div class="col-sm-4 ">
                    <form  class="search" action="<?php print_link('fire_final_noc_renewal'); ?>" method="get">
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
                                        <a class="text-decoration-none" href="<?php print_link('fire_final_noc_renewal'); ?>">
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
                                        <a class="text-decoration-none" href="<?php print_link('fire_final_noc_renewal'); ?>">
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
                            <div id="fire_final_noc_renewal-list-records">
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
                                                // put this in every form
                                                if($data['status'] == 'Reverted' ){
                                                echo '<span style="font-weight: bold; background-color: yellow; padding: 2px 5px; border-radius: 3px;">APPLICATION REVERTED</span>';
                                                echo "<br>";
                                                    echo "<a href='" . SITE_ADDR . "fire_final_noc_renewal/revert/$id' class='btn btn-sm btn-danger'>Edit Application</a>";
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
                                                            <?php if (!empty($data['old_final_fire_noc_number'])): ?>
                                                            <div class="mb-2">
                                                                <strong style="font-weight: 500 !important; color: #000 !important;">
                                                                    Old Final Fire NOC Number:
                                                                </strong>  
                                                                <span style="font-weight: bold;">
                                                                    <?php echo $data['old_final_fire_noc_number']; ?>
                                                                </span>
                                                            </div>
                                                            <?php endif; ?>
                                                            <div class="mb-2">  
                                                                <span class="font-weight-light text-muted ">
                                                                    APPLICANT NAME :  
                                                                </span>
                                                            <?php echo $data['applicant_name']; ?></div>
                                                            <div class="mb-2">  
                                                                <span class="font-weight-light text-muted ">
                                                                    APPLICANT ADDRESS :  
                                                                </span>
                                                            <?php echo $data['applicant_address']; ?></div>
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
                                                                <a href="<?php echo SITE_ADDR . "fire_final_noc_renewal/edit_zone/" . $data['id']; ?>" 
                                                                    class="btn btn-danger btn-sm">
                                                                    Edit Zone
                                                                </a>
                                                            </div>
                                                            <?php endif; ?>
                                                            <div class="mb-2">  
                                                                <span class="font-weight-light text-muted ">
                                                                    MOBILE NO. :  
                                                                </span>
                                                            <?php echo $data['mobile_no']; ?></div>
                                                            <div class="mb-2">  
                                                                <span class="font-weight-light text-muted ">
                                                                    Architect or Developers Lic Number and Name:  
                                                                </span>
                                                            <?php echo $data['architect_or_developers_lic_number']; ?></div>
                                                            <div class="mb-2">  
                                                                <span class="font-weight-light text-muted ">
                                                                    SURVEY NUMBER :  
                                                                </span>
                                                            <?php echo $data['survey_number']; ?></div>
                                                            <div class="mb-2">  
                                                                <span class="font-weight-light text-muted ">
                                                                    VILLAGE :  
                                                                </span>
                                                            <?php echo $data['village']; ?></div>
                                                            <div class="mb-2">  
                                                                <span class="font-weight-light text-muted ">
                                                                    VP NUMBER :  
                                                                </span>
                                                            <?php echo $data['vp_number']; ?></div>
                                                            <div class="mb-2">
                                                                <strong style="font-weight: 500 !important; color: #000 !important;">
                                                                    Building Layout:
                                                                </strong>  
                                                                <span><?php  
                                                                    echo "<a href='".SITE_ADDR."api/building_layout/".$_SESSION['tablename']."/".$data['id']."' class='btn btn-danger'>View Layout</a>";
                                                                ?></span>
                                                            </div>
                                                            <div class="mb-2">  
                                                                <span class="font-weight-light text-muted ">
                                                                    Road Width North (In Meter):  
                                                                </span>
                                                            <?php echo $data['road_width_north']; ?></div>
                                                            <div class="mb-2">  
                                                                <span class="font-weight-light text-muted ">
                                                                    Road Width South (In Meter):  
                                                                </span>
                                                            <?php echo $data['road_width_south']; ?></div>
                                                            <div class="mb-2">  
                                                                <span class="font-weight-light text-muted ">
                                                                    Road Width East (In Meter):  
                                                                </span>
                                                            <?php echo $data['road_width_east']; ?></div>
                                                            <div class="mb-2">  
                                                                <span class="font-weight-light text-muted ">
                                                                    Road Width West (In Meter):  
                                                                </span>
                                                            <?php echo $data['road_width_west']; ?></div>
                                                            <div class="mb-2">  
                                                                <span class="font-weight-light text-muted ">
                                                                    OPEN SPACE MARGIN NORTH :  
                                                                </span>
                                                            <?php echo $data['open_space_margin_north']; ?></div>
                                                            <div class="mb-2">  
                                                                <span class="font-weight-light text-muted ">
                                                                    OPEN SPACE MARGIN SOUTH :  
                                                                </span>
                                                            <?php echo $data['open_space_margin_south']; ?></div>
                                                            <div class="mb-2">  
                                                                <span class="font-weight-light text-muted ">
                                                                    OPEN SPACE MARGIN EAST :  
                                                                </span>
                                                            <?php echo $data['open_space_margin_east']; ?></div>
                                                            <div class="mb-2">  
                                                                <span class="font-weight-light text-muted ">
                                                                    OPEN SPACE MARGIN WEST :  
                                                                </span>
                                                            <?php echo $data['open_space_margin_west']; ?></div>
                                                            <?php if (!empty($data['upload_last_year_final_fire_noc'])): ?>
                                                            <div class="mb-2" style="display: flex; justify-content: space-between; align-items: center;">
                                                                <strong style="font-weight: 500 !important; color: #000 !important;">
                                                                    Last Year Final Fire Noc:
                                                                </strong>  
                                                                <a href="<?php echo htmlspecialchars($data['upload_last_year_final_fire_noc'], ENT_QUOTES, 'UTF-8'); ?>" 
                                                                    target="_blank" onclick="return autoPrintImage(this.href);"
                                                                    class="btn btn-info btn-sm">
                                                                    View Document
                                                                </a>
                                                            </div>
                                                            <?php endif; ?>
                                                            <?php if (!empty($data['upload_architect_application_letter'])): ?>
                                                            <div class="mb-2" style="display: flex; justify-content: space-between; align-items: center;">
                                                                <strong style="font-weight: 500 !important; color: #000 !important;">
                                                                    Architect Application Letter:
                                                                </strong>  
                                                                <a href="<?php echo htmlspecialchars($data['upload_architect_application_letter'], ENT_QUOTES, 'UTF-8'); ?>" 
                                                                    target="_blank" onclick="return autoPrintImage(this.href);"
                                                                    class="btn btn-info btn-sm">
                                                                    View Letter
                                                                </a>
                                                            </div>
                                                            <?php endif; ?>
                                                            <?php if (!empty($data['upload_builders_application_letter'])): ?>
                                                            <div class="mb-2" style="display: flex; justify-content: space-between; align-items: center;">
                                                                <strong style="font-weight: 500 !important; color: #000 !important;">
                                                                    Builders Application Letter:
                                                                </strong>  
                                                                <a href="<?php echo htmlspecialchars($data['upload_builders_application_letter'], ENT_QUOTES, 'UTF-8'); ?>" 
                                                                    target="_blank" onclick="return autoPrintImage(this.href);"
                                                                    class="btn btn-info btn-sm">
                                                                    View Letter
                                                                </a>
                                                            </div>
                                                            <?php endif; ?>
                                                            <?php if (!empty($data['upload_gross_built_up_area_certificate'])): ?>
                                                            <div class="mb-2" style="display: flex; justify-content: space-between; align-items: center;">
                                                                <strong style="font-weight: 500 !important; color: #000 !important;">
                                                                    Gross Built Up Area Certificate:
                                                                </strong>  
                                                                <a href="<?php echo htmlspecialchars($data['upload_gross_built_up_area_certificate'], ENT_QUOTES, 'UTF-8'); ?>" 
                                                                    target="_blank" onclick="return autoPrintImage(this.href);"
                                                                    class="btn btn-info btn-sm">
                                                                    View Certificate
                                                                </a>
                                                            </div>
                                                            <?php endif; ?>
                                                            <?php if (!empty($data['upload_cc_rdp_oc'])): ?>
                                                            <div class="mb-2" style="display: flex; justify-content: space-between; align-items: center;">
                                                                <strong style="font-weight: 500 !important; color: #000 !important;">
                                                                    Uploaded cc_rdp_oc:
                                                                </strong>  
                                                                <a href="<?php echo htmlspecialchars($data['upload_cc_rdp_oc'], ENT_QUOTES, 'UTF-8'); ?>" 
                                                                    target="_blank" onclick="return autoPrintImage(this.href);"
                                                                    class="btn btn-info btn-sm">
                                                                    View cc_rdp_oc
                                                                </a>
                                                            </div>
                                                            <?php endif; ?>
                                                            <?php
                                                            $files = explode(',', $data['upload_floor_plan_set']);
                                                            $shown_heading = false;
                                                            foreach ($files as $file) {
                                                            $file = trim($file);
                                                            if (!empty($file)):
                                                            if (!$shown_heading): ?>
                                                            <div class="mb-2">
                                                                <strong style="font-weight: 500 !important; color: #000 !important;">
                                                                    Floor Plan File:
                                                                </strong>
                                                            </div>
                                                            <?php 
                                                            $shown_heading = true;
                                                            endif;
                                                            // Check if the file path is already a full URL
                                                            $is_full_url = (strpos($file, 'http://') === 0 || strpos($file, 'https://') === 0);
                                                            $file_url = $is_full_url ? $file : SITE_ADDR . 'uploads/' . $file;
                                                            ?>
                                                            <div class="mb-2" style="display: flex; justify-content: flex-end;">
                                                                <a href="<?php echo htmlspecialchars($file_url, ENT_QUOTES, 'UTF-8'); ?>"
                                                                    target="_blank" onclick="return autoPrintImage(this.href);"
                                                                    class="btn btn-info btn-sm">
                                                                    <?php echo htmlspecialchars(basename($file), ENT_QUOTES, 'UTF-8'); ?>
                                                                </a>
                                                            </div>
                                                            <?php 
                                                            endif;
                                                            }
                                                            ?>
                                                            <?php if (!empty($data['upload_location_site_photo'])): ?>
                                                            <div class="mb-2" style="display: flex; justify-content: space-between; align-items: center;">
                                                                <strong style="font-weight: 500 !important; color: #000 !important;">
                                                                    Location Site Photo:
                                                                </strong>  
                                                                <a href="<?php echo htmlspecialchars($data['upload_location_site_photo'], ENT_QUOTES, 'UTF-8'); ?>" 
                                                                    target="_blank" onclick="return autoPrintImage(this.href);"
                                                                    class="btn btn-info btn-sm">
                                                                    View Photo
                                                                </a>
                                                            </div>
                                                            <?php endif; ?>
                                                            <?php if (!empty($data['upload_google_map_of_land_in_color'])): ?>
                                                            <div class="mb-2" style="display: flex; justify-content: space-between; align-items: center;">
                                                                <strong style="font-weight: 500 !important; color: #000 !important;">
                                                                    Google Map Of Land in Color:
                                                                </strong>  
                                                                <a href="<?php echo htmlspecialchars($data['upload_google_map_of_land_in_color'], ENT_QUOTES, 'UTF-8'); ?>" 
                                                                    target="_blank" onclick="return autoPrintImage(this.href);"
                                                                    class="btn btn-info btn-sm">
                                                                    View Gmap Photo
                                                                </a>
                                                            </div>
                                                            <?php endif; ?>
                                                            <div class="mb-2">  
                                                                <span class="font-weight-light text-muted ">
                                                                    DATE :  
                                                                </span>
                                                            <?php echo $data['date']; ?></div>
                                                            <span><?php
                                                                if(round($data['status'])!=0){
                                                                echo '<span style="font-weight: bold; background-color: yellow; padding: 2px 5px; border-radius: 3px;">Pending at auth Authority</span>';
                                                                }
                                                                if($data['status']=="0"){
                                                                echo "<span class='text-danger'><b>Please Enter Building & Floor Details</b></span>";
                                                                }else{
                                                                $status = $data['status'];
                                                                if ($status === 'Rejected') {
                                                                $bgColor = '#FF0000';
                                                                $textColor = 'white';
                                                                } else {
                                                                $bgColor = 'yellow';
                                                                $textColor = 'grey';
                                                                }
                                                                echo "<span style='font-weight: bold; background-color: $bgColor; color: $textColor; padding: 2px 5px;'>$status</span>";
                                                                }
                                                                if($data['status'] == 3 && USER_ROLE == 3 && $data['payment_done'] == 0 && $data['paid'] > 0) {
                                                                echo "<br><span style='font-weight: bold; background-color: yellow; padding: 2px 5px; border-radius: 3px;'>
                                                                    Pending for payment - " . getamt($data['paid']) . "
                                                                </span>";
                                                                echo "<a href='".SITE_ADDR."ccav.php?amt=".getamt($data['paid'])."&paid=".$data['paid']."' class='btn btn-danger'>Make Online Payment</a>";
                                                                }
                                                                if($data['status']== "Rejected"){
                                                                echo "<a href='".SITE_ADDR."api/viewreason/".$data['id']."/".$_SESSION['tablename']."' class='btn btn-warning page-modal modal-page'>View Reason</a>";
                                                                }
                                                                if(USER_ROLE == 3){
                                                                if($data['status']=="Completed"  ){
                                                                if($data['admin_report']==""){ 
                                                                echo " Certificate Upload pending";
                                                                }else{
                                                                // echo "<a href='".$data['admin_report']."' class='btn btn-success'>Download Administrative Report</a>";
                                                                echo "<br>";
                                                                    echo "<a href='".$data['upload_noc']."' class='btn btn-success'>Download NOC</a>";
                                                                    echo "<br>";
                                                                        echo "<br>";
                                                                            }
                                                                            }
                                                                            }
                                                                            else{
                                                                            if($data['status']=="Completed"  ){
                                                                            if($data['admin_report']==""){ 
                                                                            echo " Certificate Upload pending";
                                                                            }else{
                                                                            echo "<br>";
                                                                                echo "<a href='".$data['admin_report']."' class='btn btn-success'>Download Admin Report</a>";
                                                                                echo "<br>";
                                                                                    echo "<br>";
                                                                                        echo "<a href='".$data['upload_noc']."' class='btn btn-success'>Download NOC</a>";
                                                                                        echo "<br>";
                                                                                            echo "<br>";
                                                                                                }
                                                                                                }
                                                                                                }
                                                                                                if(USER_ROLE == 2){/*authority*/
                                                                                                if($data['status']=="Completed" && $_SESSION['stage']==4 && $data['admin_report']==""){
                                                                                                echo "<a href='".SITE_ADDR."certificate_upload2/add?rec_id=".$data['id']."&db_name=".$_SESSION['tablename']."' class='btn btn-sm btn-danger'>Upload certificate</a>";
                                                                                                echo "<br>";
                                                                                                    echo "<br>";
                                                                                                        }
                                                                                                        if($_SESSION['stage'] == $data['status']){
                                                                                                        if($data['status']==2){ // for auth 2
                                                                                                        if($data['servey_done']==0){  
                                                                                                        echo "<a href='".SITE_ADDR."survey_visit/add?rec_id=".$data['id']."&db_name=".$_SESSION['tablename']."' class='btn btn-sm btn-danger'>Do Survey</a>";  
                                                                                                        }else{
                                                                                                        echo "<a href='".SITE_ADDR."accept_reject/add?db_name=".$_SESSION['tablename']."&rec_id=".$data['id']."' class='btn btn-sm btn-danger'>Accept/Reject</a>"; 
                                                                                                        echo "<br>";
                                                                                                            echo "<br>";
                                                                                                                }
                                                                                                                }elseif($data['status']==3){
                                                                                                                if($data['paid']==0){ 
                                                                                                                echo "<a href='".SITE_ADDR."demand/add?rec_id=".$data['id']."&db_name=".$_SESSION['tablename']."' class='btn btn-sm btn-danger'>Demand</a>";  
                                                                                                                }elseif($data['payment_done']==0){ 
                                                                                                                echo "<a href='".SITE_ADDR."demand/edit/".$data['paid']."' class='btn btn-sm btn-danger'>Demand Payment</a>";  
                                                                                                                }else{
                                                                                                                echo "<a href='".SITE_ADDR."accept_reject/add?db_name=".$_SESSION['tablename']."&rec_id=".$data['id']."' class='btn btn-sm btn-danger'>Accept/Reject</a>"; 
                                                                                                                echo "<br>";
                                                                                                                    echo "<br>";
                                                                                                                        }
                                                                                                                        // Receipt
                                                                                                                        }else{
                                                                                                                        echo "<a href='".SITE_ADDR."accept_reject/add?db_name=".$_SESSION['tablename']."&rec_id=".$data['id']."' class='btn btn-sm btn-danger'>Accept/Reject</a>"; 
                                                                                                                        echo "<br>";
                                                                                                                            echo "<br>";
                                                                                                                                }
                                                                                                                                }
                                                                                                                                if($data['servey_done']!=0){  
                                                                                                                                echo "<a href='".SITE_ADDR."survey_visit/view/".$data['servey_done']."' class='btn btn-sm btn-warning'>View Survey</a>";  
                                                                                                                                }
                                                                                                                                }
                                                                                                                                if($data['payment_done']==1){
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
