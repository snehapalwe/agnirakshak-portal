<?php 
//check if current user role is allowed access to the pages
$can_add = ACL::is_allowed("hotel_inspection_form/add");
$can_edit = ACL::is_allowed("hotel_inspection_form/edit");
$can_view = ACL::is_allowed("hotel_inspection_form/view");
$can_delete = ACL::is_allowed("hotel_inspection_form/delete");
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
                    <h4 class="record-title">Hotel Inspection  / हॉटेल पाहणी</h4>
                </div>
                <div class="col-sm-3 ">
                    <?php if($can_add){ ?>
                    <a  class="btn btn btn-primary my-1" href="<?php print_link("hotel_inspection_form/add") ?>">
                        <i class="fa fa-plus"></i>                              
                        Add New / नवीन नोंद 
                    </a>
                    <?php } ?>
                </div>
                <div class="col-sm-4 ">
                    <form  class="search" action="<?php print_link('hotel_inspection_form'); ?>" method="get">
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
                                        <a class="text-decoration-none" href="<?php print_link('hotel_inspection_form'); ?>">
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
                                        <a class="text-decoration-none" href="<?php print_link('hotel_inspection_form'); ?>">
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
                            <div id="hotel_inspection_form-list-records">
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
                                                        HOTEL NAME :  
                                                    </span>
                                                <?php echo $data['hotel_name']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        HOTEL ADDRESS :  
                                                    </span>
                                                <?php echo $data['hotel_address']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        OWNERS NAME :  
                                                    </span>
                                                <?php echo $data['owners_name']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        MOBILE NO. :  
                                                    </span>
                                                <?php echo $data['mobile_no']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        TYPE OF APPLICATION :  
                                                    </span>
                                                <?php echo $data['type_of_application_value']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        OLD NOC NUMBER :  
                                                    </span>
                                                <?php echo $data['old_noc_number']; ?></div>
                                                <span>
                                                    <?php 
                                                    if (!empty($data['old_noc_date']) && $data['old_noc_date'] !== "0000-00-00" && $data['old_noc_date'] !== "1970-01-01") {
                                                    echo date("jS F Y", strtotime($data['old_noc_date']));
                                                    } else {
                                                    echo ""; // Display empty block
                                                    }
                                                    ?>
                                                </span>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        BUILDING HEIGHT :  
                                                    </span>
                                                <?php echo $data['building_height']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        NUMBER OF FLOORS :  
                                                    </span>
                                                <?php echo $data['building_floor']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        No. of N Width Stairs One:  
                                                    </span>
                                                <?php echo $data['no_n_width_stairs_one']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        No. of N Width Stairs Two:  
                                                    </span>
                                                <?php echo $data['no_n_width_stairs_two']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        No. of N Width Stairs Three:  
                                                    </span>
                                                <?php echo $data['no_n_width_stairs_three']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        No. of Lifts In The Building:  
                                                    </span>
                                                <?php echo $data['no_lifts_in_the_building']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        No. of Entrance Routes:  
                                                    </span>
                                                <?php echo $data['no_entrance_routes']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        No. of Exit Routes:  
                                                    </span>
                                                <?php echo $data['no_exit_routes']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        Store Room ID :  
                                                    </span>
                                                <?php echo $data['store_room_id']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        STORE ROOM :  
                                                    </span>
                                                <?php echo $data['store_room_value']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        NATURAL VENTILATION WINDOWS :  
                                                    </span>
                                                <?php echo $data['natural_ventilation_windows']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        AREA :  
                                                    </span>
                                                <?php echo $data['area']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        No. of Female Employees :  
                                                    </span>
                                                <?php echo $data['no_employees_female']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        No. of Male Employees :  
                                                    </span>
                                                <?php echo $data['no_employees_male']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        No. of Total Employees :  
                                                    </span>
                                                <?php echo $data['no_employees_total']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        WORKING HOURS :  
                                                    </span>
                                                <?php echo $data['working_hours']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        Number Of Floor in Hotel:  
                                                    </span>
                                                <?php echo $data['floor_number_of_hotel']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        IS DIRECTIONAL BOARD AVAILABLE? :  
                                                    </span>
                                                <?php echo $data['is_directional_board_available']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        HOTEL DEPARTMENTS :  
                                                    </span>
                                                <?php echo $data['hotel_departments']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        TABLE QUANTITY :  
                                                    </span>
                                                <?php echo $data['table_quantity']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        CHAIR QUANTITY :  
                                                    </span>
                                                <?php echo $data['chair_quantity']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        IS GENERATOR SYSTEM AVAILABLE? :  
                                                    </span>
                                                <?php echo $data['is_generator_system_available']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        Is Structural Audit Report Avilable ID :  
                                                    </span>
                                                <?php echo $data['is_structural_audit_report_avilable_id']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        STRUCTURAL AUDIT REPORT AVAILABLE :  
                                                    </span>
                                                <?php echo $data['is_structural_audit_report_avilable_value']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        STRUCTURAL AUDIT REPORT DATE :  
                                                    </span>
                                                <?php echo $data['structural_audit_report_date']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        Is Electrical Audit Report Available ID :  
                                                    </span>
                                                <?php echo $data['is_electrical_audit_report_available_id']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        ELECTRICAL AUDIT REPORT AVAILABLE :  
                                                    </span>
                                                <?php echo $data['is_electrical_audit_report_available_value']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        ELECTRICAL AUDIT REPORT DATE :  
                                                    </span>
                                                <?php echo $data['electrical_audit_report_date']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        FIRE PREVENTION MEASURES INFORMATION :  
                                                    </span>
                                                <?php echo $data['fire_prevention_measures_information']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        EXTINGUISHING LICENSE AGENCY NAME :  
                                                    </span>
                                                <?php echo $data['extinguishing_licen_agency_name']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        EXTINGUISHING LICENSE AGENCY NUMBER :  
                                                    </span>
                                                <?php echo $data['extinguishing_licen_agency_no']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        EXTINGUISHING LICENSE VALIDITY :  
                                                    </span>
                                                <?php echo $data['extinguishing_licen_agency_validity']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        EXTINGUISHING LICENSE CERTIFICATE NUMBER :  
                                                    </span>
                                                <?php echo $data['extinguishing_licen_agency_cert_no']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        WATER STORAGE CAPACITY (TERRACE) :  
                                                    </span>
                                                <?php echo $data['water_storage_capacity_terrace']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        WATER STORAGE CAPACITY (GROUND FLOOR) :  
                                                    </span>
                                                <?php echo $data['water_storage_capacity_groundfloor']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        GAS BANK :  
                                                    </span>
                                                <?php echo $data['gas_bank']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        LPG CYLINDER :  
                                                    </span>
                                                <?php echo $data['lpg_cylender']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        CNG PIPE LINE :  
                                                    </span>
                                                <?php echo $data['cng_pipe_line']; ?></div>
                                                <span>
                                                    <?php 
                                                    if (!empty($data['date']) && $data['date'] !== "0000-00-00" && $data['date'] !== "1970-01-01") {
                                                    echo date("jS F Y", strtotime($data['date']));
                                                    } else {
                                                    echo ""; // Display empty block
                                                    }
                                                    ?>
                                                </span>
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
