<?php 
//check if current user role is allowed access to the pages
$can_add = ACL::is_allowed("architecture_oc_noc_buidling_info_first/add");
$can_edit = ACL::is_allowed("architecture_oc_noc_buidling_info_first/edit");
$can_view = ACL::is_allowed("architecture_oc_noc_buidling_info_first/view");
$can_delete = ACL::is_allowed("architecture_oc_noc_buidling_info_first/delete");
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
                    <h4 class="record-title">Architecture Oc Noc Buidling Info First</h4>
                </div>
                <div class="col-sm-3 ">
                    <?php if($can_add){ ?>
                    <a  class="btn btn btn-primary my-1" href="<?php print_link("architecture_oc_noc_buidling_info_first/add") ?>">
                        <i class="fa fa-plus"></i>                              
                        Add New Architecture Oc Noc Buidling Info First 
                    </a>
                    <?php } ?>
                </div>
                <div class="col-sm-4 ">
                    <form  class="search" action="<?php print_link('architecture_oc_noc_buidling_info_first'); ?>" method="get">
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
                                        <a class="text-decoration-none" href="<?php print_link('architecture_oc_noc_buidling_info_first'); ?>">
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
                                        <a class="text-decoration-none" href="<?php print_link('architecture_oc_noc_buidling_info_first'); ?>">
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
                            <div id="architecture_oc_noc_buidling_info_first-list-records">
                                <div id="page-report-body" class="table-responsive">
                                    <table class="table  table-striped table-sm text-left table-bordered">
                                        <thead class="table-header bg-light">
                                            <tr>
                                                <th  class="td-id"> Id</th>
                                                <th  class="td-building_name"> Building Name</th>
                                                <th  class="td-building_address"> Building Address</th>
                                                <th  class="td-plot_no_or_cts_no"> Plot No Or Cts No</th>
                                                <th  class="td-name_of_architect_builder_developer"> Name Of Architect Builder Developer</th>
                                                <th  class="td-noc_particulars"> Noc Particulars</th>
                                                <th  class="td-noc_particulars_first_noc_no"> Noc Particulars First Noc No</th>
                                                <th  class="td-noc_particulars_first_noc_date"> Noc Particulars First Noc Date</th>
                                                <th  class="td-noc_particulars_amendment_no_one"> Noc Particulars Amendment No One</th>
                                                <th  class="td-noc_particulars_amendment_date_one"> Noc Particulars Amendment Date One</th>
                                                <th  class="td-noc_particulars_amendment_no_two"> Noc Particulars Amendment No Two</th>
                                                <th  class="td-noc_particulars_amendment_date_two"> Noc Particulars Amendment Date Two</th>
                                                <th  class="td-noc_particulars_amendment_no_three"> Noc Particulars Amendment No Three</th>
                                                <th  class="td-noc_particulars_amendment_date_three"> Noc Particulars Amendment Date Three</th>
                                                <th  class="td-composition_of_the_building"> Composition Of The Building</th>
                                                <th  class="td-type_of_occupancy"> Type Of Occupancy</th>
                                                <th  class="td-user_id"> User Id</th>
                                                <th  class="td-date"> Date</th>
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
                                                <td class="td-id"><a href="<?php print_link("architecture_oc_noc_buidling_info_first/view/$data[id]") ?>"><?php echo $data['id']; ?></a></td>
                                                <td class="td-building_name"> <?php echo $data['building_name']; ?></td>
                                                <td class="td-building_address"> <?php echo $data['building_address']; ?></td>
                                                <td class="td-plot_no_or_cts_no"> <?php echo $data['plot_no_or_cts_no']; ?></td>
                                                <td class="td-name_of_architect_builder_developer"> <?php echo $data['name_of_architect_builder_developer']; ?></td>
                                                <td class="td-noc_particulars"> <?php echo $data['noc_particulars']; ?></td>
                                                <td class="td-noc_particulars_first_noc_no"> <?php echo $data['noc_particulars_first_noc_no']; ?></td>
                                                <td class="td-noc_particulars_first_noc_date"> <?php echo $data['noc_particulars_first_noc_date']; ?></td>
                                                <td class="td-noc_particulars_amendment_no_one"> <?php echo $data['noc_particulars_amendment_no_one']; ?></td>
                                                <td class="td-noc_particulars_amendment_date_one"> <?php echo $data['noc_particulars_amendment_date_one']; ?></td>
                                                <td class="td-noc_particulars_amendment_no_two"> <?php echo $data['noc_particulars_amendment_no_two']; ?></td>
                                                <td class="td-noc_particulars_amendment_date_two"> <?php echo $data['noc_particulars_amendment_date_two']; ?></td>
                                                <td class="td-noc_particulars_amendment_no_three"> <?php echo $data['noc_particulars_amendment_no_three']; ?></td>
                                                <td class="td-noc_particulars_amendment_date_three"> <?php echo $data['noc_particulars_amendment_date_three']; ?></td>
                                                <td class="td-composition_of_the_building"> <?php echo $data['composition_of_the_building']; ?></td>
                                                <td class="td-type_of_occupancy"> <?php echo $data['type_of_occupancy']; ?></td>
                                                <td class="td-user_id"> <?php echo $data['user_id']; ?></td>
                                                <td class="td-date"> <?php echo $data['date']; ?></td>
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
