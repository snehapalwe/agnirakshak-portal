<?php 
//check if current user role is allowed access to the pages
$can_add = ACL::is_allowed("industrial_factory_inspection_form/add");
$can_edit = ACL::is_allowed("industrial_factory_inspection_form/edit");
$can_view = ACL::is_allowed("industrial_factory_inspection_form/view");
$can_delete = ACL::is_allowed("industrial_factory_inspection_form/delete");
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
                    <h4 class="record-title">Industrial Factory Inspection Form / Industrial Establishment Inspection / औद्योगिक आस्थापनांकरिता पाहणी</h4>
                </div>
                <div class="col-sm-3 ">
                    <?php if($can_add){ ?>
                    <a  class="btn btn btn-primary my-1" href="<?php print_link("industrial_factory_inspection_form/add") ?>">
                        <i class="fa fa-plus"></i>                              
                        Add New / नवीन नोंद 
                    </a>
                    <?php } ?>
                </div>
                <div class="col-sm-4 ">
                    <form  class="search" action="<?php print_link('industrial_factory_inspection_form'); ?>" method="get">
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
                                        <a class="text-decoration-none" href="<?php print_link('industrial_factory_inspection_form'); ?>">
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
                                        <a class="text-decoration-none" href="<?php print_link('industrial_factory_inspection_form'); ?>">
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
                            <div id="industrial_factory_inspection_form-list-records">
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
                                                        BUSINESS NAME :  
                                                    </span>
                                                <?php echo $data['business_name']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        BUSINESS ADDRESS :  
                                                    </span>
                                                <?php echo $data['business_address']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        MOBILE NO. :  
                                                    </span>
                                                <?php echo $data['mobile_no']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        OWNER’S NAME :  
                                                    </span>
                                                <?php echo $data['owners_name']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        RESIDENTIAL ADDRESS :  
                                                    </span>
                                                <?php echo $data['residential_address']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        OWNER’S MOBILE NUMBER :  
                                                    </span>
                                                <?php echo $data['owners_mobile_number']; ?></div>
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
                                                        BUILDING TYPE :  
                                                    </span>
                                                <?php echo $data['building_type']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        BUILDING HEIGHT :  
                                                    </span>
                                                <?php echo $data['building_height']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        BUILDING FLOORS :  
                                                    </span>
                                                <?php echo $data['building_floor']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        NO. & WIDTH OF STAIRCASES :  
                                                    </span>
                                                <?php echo $data['no_of_staircase_in_building_and_width']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        NO. OF COMMERCIAL SPACES :  
                                                    </span>
                                                <?php echo $data['no_of_commercial_spaces']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        YEAR OF CONSTRUCTION (AUDIT REPORT) :  
                                                    </span>
                                                <?php echo $data['structural_audit_report_year_of_construction']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        STRUCTURAL AUDIT REPORT DATE :  
                                                    </span>
                                                <?php echo $data['structural_audit_report_date']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        STRUCTURAL AUDIT AGENCY NAME :  
                                                    </span>
                                                <?php echo $data['structural_audit_agency_name']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        STRUCTURAL AUDIT AGENCY ADDRESS :  
                                                    </span>
                                                <?php echo $data['structural_audit_agency_address']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        Structural Audit Agency MOBILE NO. :  
                                                    </span>
                                                <?php echo $data['structural_audit_agency_mobile_no']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        PERMISSIONS OBTAINED :  
                                                    </span>
                                                <?php echo $data['permissions_obtained_for_the_business']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        FEMALE EMPLOYEES COUNT :  
                                                    </span>
                                                <?php echo $data['female_employees_count']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        MALE EMPLOYEES COUNT :  
                                                    </span>
                                                <?php echo $data['male_employees_count']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        TOTAL EMPLOYEES COUNT :  
                                                    </span>
                                                <?php echo $data['total_employees_count']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        WORKING HOURS :  
                                                    </span>
                                                <?php echo $data['working_hours_at_business_premises']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        No. of TOTAL WINDOWS (VENTILATION) :  
                                                    </span>
                                                <?php echo $data['natural_ventilation_total_windows']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        No. of TOTAL DOORS (VENTILATION) :  
                                                    </span>
                                                <?php echo $data['natural_ventilation_total_doors']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        AREA OF BUSINESS PREMISES :  
                                                    </span>
                                                <?php echo $data['area_of_business_premises']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        ENTRANCE ROUTE :  
                                                    </span>
                                                <?php echo $data['entrance_route_premises']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        EXIT ROUTE :  
                                                    </span>
                                                <?php echo $data['exit_route_premises']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        RECORD ROOM :  
                                                    </span>
                                                <?php echo $data['record_room']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        WATER STORAGE (TERRACE) :  
                                                    </span>
                                                <?php echo $data['water_storage_capacity_terrace']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        WATER STORAGE (GROUND FLOOR) :  
                                                    </span>
                                                <?php echo $data['water_storage_capacity_groundfloor']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        NO. OF LIFTS :  
                                                    </span>
                                                <?php echo $data['no_lifts_in_the_building']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        LIFT CAPACITY :  
                                                    </span>
                                                <?php echo $data['capacity_lifts_in_the_building']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        ELECTRICAL CONNECTION CAPACITY :  
                                                    </span>
                                                <?php echo $data['electrical_connection_capacity']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        ELECTRICAL AUDIT REPORT DATE :  
                                                    </span>
                                                <?php echo $data['electrical_audit_report_date']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        ELECTRICAL AUDIT AGENCY NAME :  
                                                    </span>
                                                <?php echo $data['electrical_audit_agency_name']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        ELECTRICAL AUDIT AGENCY ADDRESS :  
                                                    </span>
                                                <?php echo $data['electrical_audit_agency_address']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        Electrical Audit Agency MOBILE NO. :  
                                                    </span>
                                                <?php echo $data['electrical_audit_agency_mobile_no']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        GENERATOR SYSTEM :  
                                                    </span>
                                                <?php echo $data['generator_system']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        RAW MATERIAL NAME :  
                                                    </span>
                                                <?php echo $data['raw_material_name']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        RAW MATERIAL STORAGE CAPACITY :  
                                                    </span>
                                                <?php echo $data['raw_material_storage_capacity']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        NO. OF LPG CYLINDERS :  
                                                    </span>
                                                <?php echo $data['no_of_lpg_gas_cylinders']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        FINAL PRODUCT NAME :  
                                                    </span>
                                                <?php echo $data['name_of_final_product']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        FINAL PRODUCT STORAGE CAPACITY :  
                                                    </span>
                                                <?php echo $data['storage_capacity_of_final_product']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        FIRE EXTINGUISHING (PERMANENT) :  
                                                    </span>
                                                <?php echo $data['fire_extinguishing_permanent']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        FIRE EXTINGUISHING (TEMPORARY) :  
                                                    </span>
                                                <?php echo $data['fire_extinguishing_temporary']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        FIRE LICENSE AGENCY NAME :  
                                                    </span>
                                                <?php echo $data['extinguishing_license_agency_name']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        LICENSE NO. :  
                                                    </span>
                                                <?php echo $data['extinguishing_license_agency_lno']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        LICENSE VALIDITY :  
                                                    </span>
                                                <?php echo $data['extinguishing_license_agency_lvalidity']; ?></div>
                                                <div class="mb-2">  
                                                    <span class="font-weight-light text-muted ">
                                                        CERTIFICATE NO. :  
                                                    </span>
                                                <?php echo $data['extinguishing_licen_agency_cert_no']; ?></div>
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
