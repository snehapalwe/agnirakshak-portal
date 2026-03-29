<?php 
//check if current user role is allowed access to the pages
$can_add = ACL::is_allowed("fire_noc_provisional_new/add");
$can_edit = ACL::is_allowed("fire_noc_provisional_new/edit");
$can_view = ACL::is_allowed("fire_noc_provisional_new/view");
$can_delete = ACL::is_allowed("fire_noc_provisional_new/delete");
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
                    <h4 class="record-title"><strong style='color: black;'>PROVISIONAL FIRE NOC</strong></h4>
                </div>
                <div class="col-sm-3 ">
                    <?php if($can_add){ ?>
                    <a  class="btn btn btn-primary my-1" href="<?php print_link("fire_noc_provisional_new/add") ?>">
                        <i class="fa fa-plus"></i>                              
                        Add New / नवीन नोंद 
                    </a>
                    <?php } ?>
                </div>
                <div class="col-sm-4 ">
                    <form  class="search" action="<?php print_link('fire_noc_provisional_new'); ?>" method="get">
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
                                        <a class="text-decoration-none" href="<?php print_link('fire_noc_provisional_new'); ?>">
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
                                        <a class="text-decoration-none" href="<?php print_link('fire_noc_provisional_new'); ?>">
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
                            <div id="fire_noc_provisional_new-list-records">
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
                                                    echo "<a href='" . SITE_ADDR . "fire_noc_provisional_new/edit/$id' class='btn btn-sm btn-danger'>Edit Application</a>";
                                                    echo "<br>";
                                                        echo "<br>";
                                                            }    ?>
                                                            <span><?php
                                                                if(round($data['status'])!=0){
                                                                echo '<span style="font-weight: bold; background-color: yellow; padding: 2px 5px; border-radius: 3px; color: black;">PENDING AT AUTH AUTHORITY</span>';
                                                                }
                                                                if($data['status']=="0"){
                                                                /*echo "<span class='text-danger'><b>Please Enter Building & Floor Details</b></span>";*/
                                                                }else{
                                                                $status = $data['status'];
                                                                if ($status === 'Rejected') {
                                                                $bgColor = '#FF0000';
                                                                $textColor = 'white';
                                                                }elseif ($status === 'Reverted') {
                                                                if(USER_ROLE==2){
                                                                echo "<a href='".SITE_ADDR."api/viewreason/".$data['id']."/".$_SESSION['tablename']."' class='btn btn-warning page-modal modal-page'>View Reason of Revert</a><br>";
                                                                    echo "<a href='".SITE_ADDR.$_SESSION['tablename']."/edit/".$data['id']."' class='btn btn-warning page-modal modal-page'>EDIT</a>";
                                                                    }
                                                                    $bgColor = '#FF0000';
                                                                    $textColor = 'white';
                                                                    } else {
                                                                    $bgColor = 'yellow';
                                                                    $textColor = 'grey';
                                                                    }
                                                                    echo "<span style='font-weight: bold; background-color: $bgColor; color: $textColor; padding: 2px 5px; color: black;'>$status</span><br>";
                                                                        }
                                                                        if($data['status'] == 3 && USER_ROLE == 3 && $data['payment_done'] == 0 && $data['paid'] > 0) {
                                                                        echo "<br><span style='font-weight: bold; background-color: yellow; padding: 2px 5px; border-radius: 3px;'>
                                                                            PENDING FOR PAYMENT - " . getamt($data['paid']) . "
                                                                        </span>";
                                                                        echo "<a href='".SITE_ADDR."ccav.php?amt=".getamt($data['paid'])."&paid=".$data['paid']."' class='btn btn-danger'>Make Online Payment</a>";
                                                                        }
                                                                        if($data['status']== "Rejected"){
                                                                        echo "<a href='".SITE_ADDR."api/viewreason/".$data['id']."/".$_SESSION['tablename']."' class='btn btn-warning page-modal modal-page'>View Reason</a>";
                                                                        }
                                                                        if(USER_ROLE == 3){
                                                                        if($data['status']=="Completed"  ){
                                                                        if($data['admin_report']==""){ 
                                                                        // echo "CERTIFICATE UPLOAD PENDING";
                                                                        echo '<span style="font-weight: bold; background-color: yellow; padding: 2px 5px; border-radius: 3px; color: black;">CERTIFICATE UPLOAD PENDING</span><br>';
                                                                            }else{
                                                                            // echo "<a href='".$data['admin_report']."' class='btn btn-success'>Download Administrative Report</a>";
                                                                            echo "<br>";
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
                                                                                            // echo "CERTIFICATE UPLOAD PENDING";
                                                                                            echo '<span style="font-weight: bold; background-color: yellow; padding: 2px 5px; border-radius: 3px; color: black;">CERTIFICATE UPLOAD PENDING</span><br>';
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
                                                                                                                                            $recpaid=$data['paid'];
                                                                                                                                            $paid=explode(",",$recpaid);
                                                                                                                                            $cont=count($paid);
                                                                                                                    if(USER_ROLE==3 && count($paid)!=0 && $paid[$cont-1]!=0 && ( $data['payment_done']==0)){ //$data['payment_done']==-5 ||
                                                                                                                        
                                                                                                                        echo "<a href='".SITE_ADDR."api/redirectpayments/".$paid[$cont-1]."' class='btn btn-sm btn-danger'>Demand Payment</a>";  
                                                                                                                        echo '<br><span style="font-weight: bold; background-color: yellow; padding: 2px 5px; border-radius: 3px; color: black;">PENDING AT CITIZEN END FOR PAYMENT</span><br>';
                                                                                                                                               
                                                                                                                    }
                                                                                                                    
                                                                                                                    if(USER_ROLE == 2){/*authority*/
                                                                                                                    if($data['status']=="Completed" && $_SESSION['stage']==3 && $data['admin_report']==""){
                                                                                                                    echo "<a href='".SITE_ADDR."certificate_upload2/add?rec_id=".$data['id']."&db_name=".$_SESSION['tablename']."' class='btn btn-sm btn-danger'>Upload certificate</a>";
                                                                                                                    echo "<br>";
                                                                                                                        echo "<br>";
                                                                                                                            }
                                                                                                                            if($_SESSION['stage'] == $data['status']){
                                                                                                                            if($data['status']==1){ // for auth 1
                                                                                                                            echo "<a href='".SITE_ADDR."accept_reject/add?db_name=".$_SESSION['tablename']."&rec_id=".$data['id']."' class='btn btn-sm btn-danger'>Accept/Reject</a>"; 
                                                                                                                            echo "<br>";
                                                                                                                                echo "<br>";
                                                                                                                                    }
                                                                                                                                    elseif($data['status']==2){
                                                                                                                                    if($data['servey_done']==0){  
                                                                                                                                    echo "<a href='".SITE_ADDR."survey_visit/add?rec_id=".$data['id']."&db_name=".$_SESSION['tablename']."' class='btn btn-sm btn-danger'>Do Survey</a>";  
                                                                                                                                    echo "<a href='".SITE_ADDR."accept_reject/add?db_name=".$_SESSION['tablename']."&rec_id=".$data['id']."&action=Reject' class='btn btn-sm btn-danger'>Reject</a>"; 
                                                                                                                                    }else{
                                                                                                                                    echo "<a href='".SITE_ADDR."accept_reject/add?db_name=".$_SESSION['tablename']."&rec_id=".$data['id']."' class='btn btn-sm btn-danger'>Accept/Reject</a>"; 
                                                                                                                                    echo "<br>";
                                                                                                                                        echo "<br>";
                                                                                                                                            }
                                                                                                                                            }else{
                                                                                                                                            $recpaid=$data['paid'];
                                                                                                                                            $paid=explode(",",$recpaid);
                                                                                                                                            $cont=count($paid);
                                                                                                                                            if(count($paid)==0 || $paid[$cont-1]==0 || $data['payment_done']==-5){ 
                                                                                                                                            echo "<a href='".SITE_ADDR."demand/add?rec_id=".$data['id']."&db_name=".$_SESSION['tablename']."' class='btn btn-sm btn-danger'>Demand</a>";  
                                                                                                                                            }elseif($data['payment_done']==0){ 
                                                                                                                                                
                                                                                                                                        // echo "<a href='".SITE_ADDR."api/redirectpayments/".$paid[$cont-1]."' class='btn btn-sm btn-danger'>Demand Payment</a>";  
                                                                                                                                            // echo "<a href='".SITE_ADDR."demand/edit/".$paid[$cont-1]."' class='btn btn-sm btn-danger'>Demand Payment</a>";  
                                                                                                                                            echo '<br><span style="font-weight: bold; background-color: yellow; padding: 2px 5px; border-radius: 3px; color: black;">PENDING AT CITIZEN END FOR PAYMENT</span><br>';
                                                                                                                                                }else{
                                                                                                                                                echo "<a href='".SITE_ADDR."accept_reject/add?db_name=".$_SESSION['tablename']."&rec_id=".$data['id']."' class='btn btn-sm btn-danger'>Accept/Reject</a>";
                                                                                                                                                echo "<br>";
                                                                                                                                                    echo "<br>";
                                                                                                                                                        }
                                                                                                                                                        //  echo "<a href='".SITE_ADDR."accept_reject/add?db_name=".$_SESSION['tablename']."&rec_id=".$data['id']."' class='btn btn-sm btn-danger'>Accept/Reject</a>"; 
                                                                                                                                                        //  echo "<br>";
                                                                                                                                                            //  echo "<br>";
                                                                                                                                                                }
                                                                                                                                                                }
                                                                                                                                                                if($data['servey_done']!=0){  
                                                                                                                                                                echo "<a href='".SITE_ADDR."survey_visit/view/".$data['servey_done']."' class='btn btn-sm btn-warning'>View Survey</a>";  
                                                                                                                                                                }
                                                                                                                                                                }
                                                                                                                                                                if($data['payment_done']==1 || $cont>=3 || $data['payment_done']==-5){
                                                                                                                                                                echo "<a href='".SITE_ADDR."demand/view/0?paid=".$data['paid']."' class='btn btn-sm btn-success'>View Receipt</a>"; 
                                                                                                                                                                }
                                                                                                                                                            ?></span>
                                                                                                                                                            <br>
                                                                                                                                                                <br>
                                                                                                                                                                    <?php if (!empty($data['application_no'])): ?>
                                                                                                                                                                    <div class="mb-2">
                                                                                                                                                                        <strong style="font-weight: 500 !important; color: #000 !important;">
                                                                                                                                                                            APPLICATION NO.:
                                                                                                                                                                        </strong>  
                                                                                                                                                                        <span style="font-weight: bold; background-color: yellow; padding: 2px 5px; border-radius: 3px;">
                                                                                                                                                                            <?php echo $data['status']=="0"?"":$data['application_no']; ?>
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
                                                                                                                                                                    <div class="mb-2">  
                                                                                                                                                                        <span class="font-weight-light text-muted ">
                                                                                                                                                                            MOBILE NO. :  
                                                                                                                                                                        </span>
                                                                                                                                                                    <?php echo $data['mobile_no']; ?></div>
                                                                                                                                                                    <div class="mb-2">  
                                                                                                                                                                        <span class="font-weight-light text-muted ">
                                                                                                                                                                            ARCHITECT OR DEVELOPERS LIC NUMBER AND NAME:  
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
                                                                                                                                                                        <span class="font-weight-light text-muted ">
                                                                                                                                                                            OPEN SPACE MARGIN WEST :  
                                                                                                                                                                        </span>
                                                                                                                                                                    <?php echo $data['open_space_margin_west']; ?></div>
                                                                                                                                                                    <?php if (!empty($data['uplaod_architect_application_with_building_plans'])): ?>
                                                                                                                                                                    <div class="mb-2" style="display: flex; justify-content: space-between; align-items: center;">
                                                                                                                                                                        <strong style="font-weight: 500 !important; color: #000 !important;">
                                                                                                                                                                            ARCHITECT APPLICATION WITH BUILDING PLANS:
                                                                                                                                                                        </strong>  
                                                                                                                                                                        <a href="<?php echo htmlspecialchars($data['uplaod_architect_application_with_building_plans'], ENT_QUOTES, 'UTF-8'); ?>" 
                                                                                                                                                                            target="_blank" onclick="return autoPrintImage(this.href);"
                                                                                                                                                                            class="btn btn-info btn-sm">
                                                                                                                                                                            View Document
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
                                                                                                                                                                            FLOOR PLAN FILE:
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
                                                                                                                                                                    <?php if (!empty($data['upload_layout_of_fire_prevention_and_protection_measures'])): ?>
                                                                                                                                                                    <div class="mb-2" style="display: flex; justify-content: space-between; align-items: center;">
                                                                                                                                                                        <strong style="font-weight: 500 !important; color: #000 !important;">
                                                                                                                                                                            LAYOUT OF FIRE PREVENTION AND PROTECTION MEASURES:
                                                                                                                                                                        </strong>  
                                                                                                                                                                        <a href="<?php echo htmlspecialchars($data['upload_layout_of_fire_prevention_and_protection_measures'], ENT_QUOTES, 'UTF-8'); ?>" 
                                                                                                                                                                            target="_blank" onclick="return autoPrintImage(this.href);"
                                                                                                                                                                            class="btn btn-info btn-sm">
                                                                                                                                                                            View Layout Doc
                                                                                                                                                                        </a>
                                                                                                                                                                    </div>
                                                                                                                                                                    <?php endif; ?>
                                                                                                                                                                    <?php if (!empty($data['upload_dbr_report'])): ?>
                                                                                                                                                                    <div class="mb-2" style="display: flex; justify-content: space-between; align-items: center;">
                                                                                                                                                                        <strong style="font-weight: 500 !important; color: #000 !important;">
                                                                                                                                                                            D. B. R. REPORT (FOR BUILDINGS ABOVE 90 METERS IN HEIGHT):
                                                                                                                                                                        </strong>  
                                                                                                                                                                        <a href="<?php echo htmlspecialchars($data['upload_dbr_report'], ENT_QUOTES, 'UTF-8'); ?>" 
                                                                                                                                                                            target="_blank" onclick="return autoPrintImage(this.href);"
                                                                                                                                                                            class="btn btn-info btn-sm">
                                                                                                                                                                            View Report
                                                                                                                                                                        </a>
                                                                                                                                                                    </div>
                                                                                                                                                                    <?php endif; ?>
                                                                                                                                                                    <div class="mb-2">  
                                                                                                                                                                        <span class="font-weight-light text-muted ">
                                                                                                                                                                            IS REDEVELOPEMENT:  
                                                                                                                                                                        </span>
                                                                                                                                                                    <?php echo $data['is_redevelopment']; ?></div>
                                                                                                                                                                    <?php if (!empty($data['upload_society_consent_or_recommendation_letter'])): ?>
                                                                                                                                                                    <div class="mb-2" style="display: flex; justify-content: space-between; align-items: center;">
                                                                                                                                                                        <strong style="font-weight: 500 !important; color: #000 !important;">
                                                                                                                                                                            SOCIETY CONSENT OR RECOMMENDATION LETTER:
                                                                                                                                                                        </strong>  
                                                                                                                                                                        <a href="<?php echo htmlspecialchars($data['upload_society_consent_or_recommendation_letter'], ENT_QUOTES, 'UTF-8'); ?>" 
                                                                                                                                                                            target="_blank" onclick="return autoPrintImage(this.href);"
                                                                                                                                                                            class="btn btn-info btn-sm">
                                                                                                                                                                            View Letter
                                                                                                                                                                        </a>
                                                                                                                                                                    </div>
                                                                                                                                                                    <?php endif; ?>
                                                                                                                                                                    <div class="mb-2">  
                                                                                                                                                                        <span class="font-weight-light text-muted ">
                                                                                                                                                                            DATE :  
                                                                                                                                                                        </span>
                                                                                                                                                                    <?php echo $data['date']; ?></div>
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
