<?php 
//check if current user role is allowed access to the pages
$can_add = ACL::is_allowed("bhuilding_details_for_fire_noc/add");
$can_edit = ACL::is_allowed("bhuilding_details_for_fire_noc/edit");
$can_view = ACL::is_allowed("bhuilding_details_for_fire_noc/view");
$can_delete = ACL::is_allowed("bhuilding_details_for_fire_noc/delete");
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
                    <h4 class="record-title">Building Details For Fire Noc</h4>
                </div>
                <div class="col-sm-3 ">
                </div>
                <div class="col-sm-4 ">
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
                                    <a class="text-decoration-none" href="<?php print_link('bhuilding_details_for_fire_noc'); ?>">
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
                                    <a class="text-decoration-none" href="<?php print_link('bhuilding_details_for_fire_noc'); ?>">
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
                        <div id="bhuilding_details_for_fire_noc-list-records">
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
                                                <a href="<?php echo SITE_ADDR; ?>api/building_layout/<?php echo $data['db_name']; ?>/<?php echo $data['recid']; ?>" class='btn btn-danger btn-sm'>Go Back to Layout</a>
                                                <button type="button" class="btn btn-success" onclick="printSection(event)">🖨️ Print</button>
                                            </div>
                                            <br>
                                                <br>
                                                    <p style="font-weight: bold; background-color: yellow; padding: 2px 5px; border-radius: 3px;">
                                                        Add the Staricase & Lift details first & then go back to layout.
                                                    </p>
                                                    <span><?php echo $data['id'];
                                                        $can_edit=1;
                                                        $can_delete=1;
                                                        if($data['locked']==1){
                                                        $can_edit=0;
                                                        $can_delete=0;
                                                        }
                                                        ?>
                                                    </span>
                                                    <div class="mb-2">  
                                                        <span class="font-weight-light text-muted ">
                                                            APPLICANT NAME :  
                                                        </span>
                                                    <?php echo $data['applicant_name']; ?></div>
                                                    <div class="mb-2">  
                                                        <span class="font-weight-light text-muted ">
                                                            NAME OF BUILDING :  
                                                        </span>
                                                    <?php echo $data['name_of_building']; ?></div>
                                                    <div class="mb-2">  
                                                        <span class="font-weight-light text-muted ">
                                                            BUILDING TYPE :  
                                                        </span>
                                                    <?php echo $data['building_type_value']; ?></div>
                                                    <div class="mb-2">  
                                                        <span class="font-weight-light text-muted ">
                                                            HEIGHT OF BUILDING (M) :  
                                                        </span>
                                                    <?php echo $data['height_of_building_in_mtr']; ?></div>
                                                    <strong style="font-weight: 500 !important; color: #000 !important;">
                                                        No. of staircase Entered:
                                                    </strong>
                                                    <span><?php echo $data['number_of_staircase']; ?></span><br>
                                                        <?php if($data['number_of_staircase'] > $data['staircase_added']) { ?>
                                                        <a href='<?php echo SITE_ADDR ?>staircase_details/add?rec_id=<?php echo $data["recid"]; ?>&db_name=<?php echo $data["db_name"]; ?>&building_id=<?php echo $data["id"]; ?>' class='btn btn-primary btn-sm'>Add Staircase</a>
                                                        <?php } ?>
                                                        <a href='<?php echo SITE_ADDR ?>staircase_details/list?rec_id=<?php echo $data["recid"]; ?>&db_name=<?php echo $data["db_name"]; ?>&building_id=<?php echo $data["id"]; ?>' class='btn btn-success btn-sm'>View Staircases</a>
                                                        <div class="mb-2">  
                                                            <span class="font-weight-light text-muted ">
                                                                STAIRCASES ADDED :  
                                                            </span>
                                                        <?php echo $data['staircase_added']; ?></div>
                                                        <strong style="font-weight: 500 !important; color: #000 !important;">
                                                            No. of Lifts Entered:
                                                        </strong>
                                                        <span><?php echo $data['number_of_lifts']; ?></span><br>
                                                            <?php if($data['number_of_lifts'] > $data['lifts_added']) { ?>
                                                            <a href='<?php echo SITE_ADDR ?>lift_details/add?rec_id=<?php echo $data["recid"]; ?>&db_name=<?php echo $data["db_name"]; ?>&building_id=<?php echo $data["id"]; ?>' class='btn btn-primary btn-sm'>Add Lift</a>
                                                            <?php } ?>
                                                            <a href='<?php echo SITE_ADDR ?>lift_details/list?rec_id=<?php echo $data["recid"]; ?>&db_name=<?php echo $data["db_name"]; ?>&building_id=<?php echo $data["id"]; ?>' class='btn btn-success btn-sm'>View Lifts</a>
                                                            <div class="mb-2">  
                                                                <span class="font-weight-light text-muted ">
                                                                    LIFTS ADDED :  
                                                                </span>
                                                            <?php echo $data['lifts_added']; ?></div>
                                                            <div class="mb-2">  
                                                                <span class="font-weight-light text-muted ">
                                                                    LOCATION COUNT OF REFUGE AREA :  
                                                                </span>
                                                            <?php echo $data['location_count_of_refuge_area']; ?></div>
                                                            <div class="mb-2">  
                                                                <span class="font-weight-light text-muted ">
                                                                    Height Of Refuge Area From Ground In Mtr:  
                                                                </span>
                                                            <?php echo $data['hight_of_refuge_area_from_ground_in_mtr']; ?></div>
                                                            <div class="mb-2">  
                                                                <span class="font-weight-light text-muted ">
                                                                    PROVIDED REFUGE AREA (SQ.M) :  
                                                                </span>
                                                            <?php echo $data['provided_refuge_area_in_sqr_mtr']; ?></div>
                                                            <div class="mb-2">  
                                                                <span class="font-weight-light text-muted ">
                                                                    DATE :  
                                                                </span>
                                                            <?php echo $data['date']; ?></div>
                                                            <div class="mb-2">  
                                                                <span class="font-weight-light text-muted ">
                                                                    DO YOU HAVE WING? :  
                                                                </span>
                                                            <?php echo $data['do_you_have_wing']; ?></div>
                                                            <div class="td-btn">
                                                                <?php if($can_view){ ?>
                                                                <a class="btn btn-sm btn-success has-tooltip" title="View Record" href="<?php print_link("bhuilding_details_for_fire_noc/view/$rec_id"); ?>">
                                                                    <i class="fa fa-eye"></i> View
                                                                </a>
                                                                <?php } ?>
                                                                <?php if($can_edit){ ?>
                                                                <a class="btn btn-sm btn-info has-tooltip" title="Edit This Record" href="<?php print_link("bhuilding_details_for_fire_noc/edit/$rec_id"); ?>">
                                                                    <i class="fa fa-edit"></i> Edit
                                                                </a>
                                                                <?php } ?>
                                                                <?php if($can_delete){ ?>
                                                                <a class="btn btn-sm btn-danger has-tooltip record-delete-btn" title="Delete this record" href="<?php print_link("bhuilding_details_for_fire_noc/delete/$rec_id/?csrf_token=$csrf_token&redirect=$current_page"); ?>" data-prompt-msg="Are you sure you want to delete this record?" data-display-style="modal">
                                                                    <i class="fa fa-times"></i>
                                                                    Delete
                                                                </a>
                                                                <?php } ?>
                                                            </div>
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
