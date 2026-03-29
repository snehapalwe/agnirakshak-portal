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
<section class="page" id="<?php echo $page_element_id; ?>" data-page-type="list"  data-display-type="table" data-page-url="<?php print_link($current_page); ?>">
    <?php
    if( $show_header == true ){
    ?>
    <div  class="bg-light p-3 mb-3">
        <div class="container-fluid">
            <div class="row ">
                <div class="col ">
                    <h4 class="record-title">Fire Final Noc Renewal</h4>
                </div>
                <div class="col-sm-3 ">
                </div>
                <div class="col-sm-4 ">
                    <form  class="search" action="<?php print_link('fire_final_noc_renewal/'); ?>" method="get">
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
                            <div id="fire_final_noc_renewal-mis_report-records">
                                <div id="page-report-body" class="table-responsive">
                                    <table class="table  table-striped table-sm text-left">
                                        <thead class="table-header bg-light">
                                            <tr>
                                                <th class="td-sno">#</th>
                                                <th  class="td-id"> Id</th>
                                                <th  class="td-applicant_name"> Applicant Name</th>
                                                <th  class="td-applicant_address"> Applicant Address</th>
                                                <th  class="td-zone_value"> Zone Value</th>
                                                <th  class="td-mobile_no"> Mobile No</th>
                                                <th  class="td-architect_or_developers_lic_number"> Architect Or Developers Lic Number</th>
                                                <th  class="td-survey_number"> Survey Number</th>
                                                <th  class="td-village"> Village</th>
                                                <th  class="td-vp_number"> Vp Number</th>
                                                <th  class="td-road_width"> Road Width</th>
                                                <th  class="td-open_space_margin_north"> Open Space Margin North</th>
                                                <th  class="td-open_space_margin_south"> Open Space Margin South</th>
                                                <th  class="td-open_space_margin_east"> Open Space Margin East</th>
                                                <th  class="td-open_space_margin_west"> Open Space Margin West</th>
                                                <th  class="td-upload_architect_application_letter"> Upload Architect Application Letter</th>
                                                <th  class="td-upload_builders_application_letter"> Upload Builders Application Letter</th>
                                                <th  class="td-upload_gross_built_up_area_certificate"> Upload Gross Built Up Area Certificate</th>
                                                <th  class="td-upload_cc_rdp_oc"> Upload Cc Rdp Oc</th>
                                                <th  class="td-upload_floor_plan_set"> Upload Floor Plan Set</th>
                                                <th  class="td-upload_location_site_photo"> Upload Location Site Photo</th>
                                                <th  class="td-upload_google_map_of_land_in_color"> Upload Google Map Of Land In Color</th>
                                                <th  class="td-declaration"> Declaration</th>
                                                <th  class="td-status"> Status</th>
                                                <th  class="td-certificate_file"> Certificate File</th>
                                                <th  class="td-timestamp"> Timestamp</th>
                                                <th  class="td-application_no"> Application No</th>
                                                <th  class="td-old_final_fire_noc_number"> Old Final Fire Noc Number</th>
                                                <th  class="td-number_of_buildings"> Number Of Buildings</th>
                                                <th  class="td-number_of_floors"> Number Of Floors</th>
                                                <th  class="td-upload_last_year_final_fire_noc"> Upload Last Year Final Fire Noc</th>
                                                <th  class="td-date"> Date</th>
                                                <th  class="td-building_record_count"> Building Record Count</th>
                                                <th  class="td-floor_record_count"> Floor Record Count</th>
                                                <th  class="td-servey_done"> Servey Done</th>
                                                <th  class="td-upload_noc"> Upload Noc</th>
                                                <th  class="td-admin_report"> Admin Report</th>
                                                <th  class="td-road_width_north"> Road Width North</th>
                                                <th  class="td-road_width_south"> Road Width South</th>
                                                <th  class="td-road_width_east"> Road Width East</th>
                                                <th  class="td-road_width_west"> Road Width West</th>
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
                                                <td class="td-id"> <?php echo $data['id']; ?></td>
                                                <td class="td-applicant_name"> <?php echo $data['applicant_name']; ?></td>
                                                <td class="td-applicant_address"> <?php echo $data['applicant_address']; ?></td>
                                                <td class="td-zone_value"> <?php echo $data['zone_value']; ?></td>
                                                <td class="td-mobile_no"> <?php echo $data['mobile_no']; ?></td>
                                                <td class="td-architect_or_developers_lic_number"> <?php echo $data['architect_or_developers_lic_number']; ?></td>
                                                <td class="td-survey_number"> <?php echo $data['survey_number']; ?></td>
                                                <td class="td-village"> <?php echo $data['village']; ?></td>
                                                <td class="td-vp_number"> <?php echo $data['vp_number']; ?></td>
                                                <td class="td-road_width"> <?php echo $data['road_width']; ?></td>
                                                <td class="td-open_space_margin_north"> <?php echo $data['open_space_margin_north']; ?></td>
                                                <td class="td-open_space_margin_south"> <?php echo $data['open_space_margin_south']; ?></td>
                                                <td class="td-open_space_margin_east"> <?php echo $data['open_space_margin_east']; ?></td>
                                                <td class="td-open_space_margin_west"> <?php echo $data['open_space_margin_west']; ?></td>
                                                <td class="td-upload_architect_application_letter"><?php Html :: page_link_file($data['upload_architect_application_letter']); ?></td>
                                                <td class="td-upload_builders_application_letter"><?php Html :: page_link_file($data['upload_builders_application_letter']); ?></td>
                                                <td class="td-upload_gross_built_up_area_certificate"><?php Html :: page_link_file($data['upload_gross_built_up_area_certificate']); ?></td>
                                                <td class="td-upload_cc_rdp_oc"><?php Html :: page_link_file($data['upload_cc_rdp_oc']); ?></td>
                                                <td class="td-upload_floor_plan_set"><?php Html :: page_link_file($data['upload_floor_plan_set']); ?></td>
                                                <td class="td-upload_location_site_photo"><?php Html :: page_link_file($data['upload_location_site_photo']); ?></td>
                                                <td class="td-upload_google_map_of_land_in_color"><?php Html :: page_link_file($data['upload_google_map_of_land_in_color']); ?></td>
                                                <td class="td-declaration"> <?php echo $data['declaration']; ?></td>
                                                <td class="td-status"> <span><?php
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
                                                ?></span>
                                            </td>
                                            <td class="td-certificate_file"><?php Html :: page_link_file($data['certificate_file']); ?></td>
                                            <td class="td-timestamp"> <?php echo $data['timestamp']; ?></td>
                                            <td class="td-application_no"> <?php echo $data['application_no']; ?></td>
                                            <td class="td-old_final_fire_noc_number"> <?php echo $data['old_final_fire_noc_number']; ?></td>
                                            <td class="td-number_of_buildings"> <?php echo $data['number_of_buildings']; ?></td>
                                            <td class="td-number_of_floors"> <?php echo $data['number_of_floors']; ?></td>
                                            <td class="td-upload_last_year_final_fire_noc"><?php Html :: page_link_file($data['upload_last_year_final_fire_noc']); ?></td>
                                            <td class="td-date"> <?php echo $data['date']; ?></td>
                                            <td class="td-building_record_count"> <?php echo $data['building_record_count']; ?></td>
                                            <td class="td-floor_record_count"> <?php echo $data['floor_record_count']; ?></td>
                                            <td class="td-servey_done"> <?php echo $data['servey_done']; ?></td>
                                            <td class="td-upload_noc"><?php Html :: page_link_file($data['upload_noc']); ?></td>
                                            <td class="td-admin_report"><?php Html :: page_link_file($data['admin_report']); ?></td>
                                            <td class="td-road_width_north"> <?php echo $data['road_width_north']; ?></td>
                                            <td class="td-road_width_south"> <?php echo $data['road_width_south']; ?></td>
                                            <td class="td-road_width_east"> <?php echo $data['road_width_east']; ?></td>
                                            <td class="td-road_width_west"> <?php echo $data['road_width_west']; ?></td>
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
