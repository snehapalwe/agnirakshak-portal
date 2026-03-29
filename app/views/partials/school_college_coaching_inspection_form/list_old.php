<?php 
//check if current user role is allowed access to the pages
$can_add = ACL::is_allowed("school_college_coaching_inspection_form/add");
$can_edit = ACL::is_allowed("school_college_coaching_inspection_form/edit");
$can_view = ACL::is_allowed("school_college_coaching_inspection_form/view");
$can_delete = ACL::is_allowed("school_college_coaching_inspection_form/delete");
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
                    <h4 class="record-title">School, College, Coaching Institute Inspection / शाळा, महाविद्यालय, कोचिंग क्लास पाहणी</h4>
                </div>
                <div class="col-sm-3 ">
                    <?php if($can_add){ ?>
                    <a  class="btn btn btn-primary my-1" href="<?php print_link("school_college_coaching_inspection_form/add") ?>">
                        <i class="fa fa-plus"></i>                              
                        Add New / नवीन नोंद 
                    </a>
                    <?php } ?>
                </div>
                <div class="col-sm-4 ">
                    <form  class="search" action="<?php print_link('school_college_coaching_inspection_form'); ?>" method="get">
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
                                        <a class="text-decoration-none" href="<?php print_link('school_college_coaching_inspection_form'); ?>">
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
                                        <a class="text-decoration-none" href="<?php print_link('school_college_coaching_inspection_form'); ?>">
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
                            <div id="school_college_coaching_inspection_form-list-records">
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
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        ID :  
                                                    </span>
                                                <?php echo $data['id']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        INSTITUTE NAME :  
                                                    </span>
                                                <?php echo $data['institute_name']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        INSTITUTE ADDRESS :  
                                                    </span>
                                                <?php echo $data['institute_address']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        BUILDING FLOORS :  
                                                    </span>
                                                <?php echo $data['building_floors']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        OWNER’S NAME :  
                                                    </span>
                                                <?php echo $data['institute_owners_name']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        OWNER’S MOBILE NO. :  
                                                    </span>
                                                <?php echo $data['owners_mobile_no']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        PRINCIPAL’S NAME :  
                                                    </span>
                                                <?php echo $data['principals_name']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        PRINCIPAL’S MOBILE NO. :  
                                                    </span>
                                                <?php echo $data['principals_mobile_no']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        GRADE/CLASS FROM:  
                                                    </span>
                                                <?php echo $data['grade_n_class_from']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        GRADE/CLASS TO:  
                                                    </span>
                                                <?php echo $data['grade_n_class_to']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        ENTRANCE & EXIT ROUTES DETAILS :  
                                                    </span>
                                                <?php echo $data['entrance_and_exit_routes_details']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        STAIRCASE COUNT :  
                                                    </span>
                                                <?php echo $data['stairecase_count']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        WATER STORAGE TERRACE :  
                                                    </span>
                                                <?php echo $data['water_storage_capacity_terrace']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        WATER STORAGE GROUND FLOOR :  
                                                    </span>
                                                <?php echo $data['water_storage_capacity_groundfloor']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        TOTAL AREA :  
                                                    </span>
                                                <?php echo $data['institute_total_area']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        NUMBER OF CLASSROOMS :  
                                                    </span>
                                                <?php echo $data['number_of_classrooms']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        LABORATORY IN GOOD CONDITION :  
                                                    </span>
                                                <?php echo $data['is_laboratory_in_good_condition']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        READING ROOM IN GOOD CONDITION :  
                                                    </span>
                                                <?php echo $data['is_reading_room_in_good_condition']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        NO. OF TABLES IN READING ROOM :  
                                                    </span>
                                                <?php echo $data['no_table_reading_room']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        NO. OF CHAIRS IN READING ROOM :  
                                                    </span>
                                                <?php echo $data['no_chair_reading_room']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        RECORD ROOM IN GOOD CONDITION :  
                                                    </span>
                                                <?php echo $data['is_record_room_in_good_condition']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        COMPUTER & SERVER ROOM IN GOOD CONDITION :  
                                                    </span>
                                                <?php echo $data['is_computer_n_server_room_in_good_condition']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        COMPUTER & SERVER ROOM COUNT :  
                                                    </span>
                                                <?php echo $data['computer_n_server_room_count']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        LIFTS IN GOOD CONDITION :  
                                                    </span>
                                                <?php echo $data['is_lifts_in_the_good_condition']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        NO. OF LIFTS :  
                                                    </span>
                                                <?php echo $data['no_lifts_in_the_building']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        STATUS OF LIFTS :  
                                                    </span>
                                                <?php echo $data['status_lifts_in_the_building']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        GENERATOR SYSTEM CAPACITY :  
                                                    </span>
                                                <?php echo $data['generator_system_capacity']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        GENERATOR IN GOOD CONDITION :  
                                                    </span>
                                                <?php echo $data['is_generator_system_in_good_condition']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        ELECTRICAL CONNECTION IN GOOD CONDITION :  
                                                    </span>
                                                <?php echo $data['is_electrical_conection_in_good_condition']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        ELECTRICAL AUDIT REPORT VALUE :  
                                                    </span>
                                                <?php echo $data['is_electric_audit_report_value']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        ELECTRICAL AUDIT REPORT DATE :  
                                                    </span>
                                                <?php echo $data['electrical_audit_report_date']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        AC SYSTEM CERTIFICATE :  
                                                    </span>
                                                <?php echo $data['air_conditioning_system_cert']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        FIRE FIGHTING SYSTEM ABC TYPE :  
                                                    </span>
                                                <?php echo $data['fire_fighting_system_abc_type']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        FIRE FIGHTING SYSTEM CO2 TYPE :  
                                                    </span>
                                                <?php echo $data['fire_fighting_system_co2_type']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        FIRE FIGHTING NOC :  
                                                    </span>
                                                <?php echo $data['fire_fighting_noc']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        User ID :  
                                                    </span>
                                                <?php echo $data['user_id']; ?></div>
                                                <span>
                                                    <?php 
                                                    if (!empty($data['date']) && $data['date'] !== "0000-00-00" && $data['date'] !== "1970-01-01") {
                                                    echo date("jS F Y", strtotime($data['date']));
                                                    } else {
                                                    echo ""; // Display empty block
                                                    }
                                                    ?>
                                                </span>
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
