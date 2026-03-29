<?php 
//check if current user role is allowed access to the pages
$can_add = ACL::is_allowed("bhuilding_details_for_fire_noc/add");
$can_edit = ACL::is_allowed("bhuilding_details_for_fire_noc/edit");
$can_view = ACL::is_allowed("bhuilding_details_for_fire_noc/view");
$can_delete = ACL::is_allowed("bhuilding_details_for_fire_noc/delete");
?>
<?php
$comp_model = new SharedController;
$page_element_id = "view-page-" . random_str();
$current_page = $this->set_current_page_link();
$csrf_token = Csrf::$token;
//Page Data Information from Controller
$data = $this->view_data;
//$rec_id = $data['__tableprimarykey'];
$page_id = $this->route->page_id; //Page id from url
$view_title = $this->view_title;
$show_header = $this->show_header;
$show_edit_btn = $this->show_edit_btn;
$show_delete_btn = $this->show_delete_btn;
$show_export_btn = $this->show_export_btn;
?>
<section class="page" id="<?php echo $page_element_id; ?>" data-page-type="view"  data-display-type="table" data-page-url="<?php print_link($current_page); ?>">
    <?php
    if( $show_header == true ){
    ?>
    <div  class="bg-light p-3 mb-3">
        <div class="container">
            <div class="row ">
                <div class="col ">
                    <h4 class="record-title">View  Building Details For Fire Noc</h4>
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
                    <?php $this :: display_page_errors(); ?>
                    <div  class="card animated fadeIn page-content">
                        <?php
                        $counter = 0;
                        if(!empty($data)){
                        $rec_id = (!empty($data['id']) ? urlencode($data['id']) : null);
                        $counter++;
                        ?>
                        <div id="page-report-body" class="">
                            <table class="table table-hover table-borderless table-striped">
                                <!-- Table Body Start -->
                                <tbody class="page-data" id="page-data-<?php echo $page_element_id; ?>">
                                    <tr  class="td-name_of_building">
                                        <th class="title"> Name Of Building: </th>
                                        <td class="value"> <?php echo $data['name_of_building']; ?></td>
                                    </tr>
                                    <tr  class="td-building_type_value">
                                        <th class="title"> Building Type Value: </th>
                                        <td class="value"> <?php echo $data['building_type_value']; ?></td>
                                    </tr>
                                    <tr  class="td-height_of_building_in_mtr">
                                        <th class="title"> Height Of Building In Mtr: </th>
                                        <td class="value"> <?php echo $data['height_of_building_in_mtr']; ?></td>
                                    </tr>
                                    <tr  class="td-number_of_lifts">
                                        <th class="title"> Number Of Lifts: </th>
                                        <td class="value"> <?php echo $data['number_of_lifts']; ?></td>
                                    </tr>
                                    <tr  class="td-location_count_of_refuge_area">
                                        <th class="title"> Location Count Of Refuge Area: </th>
                                        <td class="value"> <?php echo $data['location_count_of_refuge_area']; ?></td>
                                    </tr>
                                    <tr  class="td-hight_of_refuge_area_from_ground_in_mtr">
                                        <th class="title"> Hight Of Refuge Area From Ground In Mtr: </th>
                                        <td class="value"> <?php echo $data['hight_of_refuge_area_from_ground_in_mtr']; ?></td>
                                    </tr>
                                    <tr  class="td-provided_refuge_area_in_sqr_mtr">
                                        <th class="title"> Provided Refuge Area In Sqr Mtr: </th>
                                        <td class="value"> <?php echo $data['provided_refuge_area_in_sqr_mtr']; ?></td>
                                    </tr>
                                    <tr  class="td-date">
                                        <th class="title"> Date: </th>
                                        <td class="value"> <?php echo $data['date']; ?></td>
                                    </tr>
                                    <tr  class="td-number_of_wing_in_building">
                                        <th class="title"> Number Of Wing In Building: </th>
                                        <td class="value"> <?php echo $data['number_of_wing_in_building']; ?></td>
                                    </tr>
                                    <tr  class="td-applicant_name">
                                        <th class="title"> Applicant Name: </th>
                                        <td class="value"> <?php echo $data['applicant_name']; ?></td>
                                    </tr>
                                    <tr  class="td-establishment_name">
                                        <th class="title"> Establishment Name: </th>
                                        <td class="value"> <?php echo $data['establishment_name']; ?></td>
                                    </tr>
                                    <tr  class="td-establishment_address">
                                        <th class="title"> Establishment Address: </th>
                                        <td class="value"> <?php echo $data['establishment_address']; ?></td>
                                    </tr>
                                    <tr  class="td-do_you_have_wing">
                                        <th class="title"> Do You Have Wing: </th>
                                        <td class="value"> <?php echo $data['do_you_have_wing']; ?></td>
                                    </tr>
                                    <tr  class="td-number_of_staircase">
                                        <th class="title"> Number Of Staircase: </th>
                                        <td class="value"> <?php echo $data['number_of_staircase']; ?></td>
                                    </tr>
                                    <tr  class="td-staircase_added">
                                        <th class="title"> Staircase Added: </th>
                                        <td class="value"> <?php echo $data['staircase_added']; ?></td>
                                    </tr>
                                    <tr  class="td-lifts_added">
                                        <th class="title"> Lifts Added: </th>
                                        <td class="value"> <?php echo $data['lifts_added']; ?></td>
                                    </tr>
                                    <tr  class="td-flag">
                                        <th class="title"> Flag: </th>
                                        <td class="value"> <?php echo $data['flag']; ?></td>
                                    </tr>
                                </tbody>
                                <!-- Table Body End -->
                            </table>
                        </div>
                        <div class="p-3 d-flex">
                            <?php $export_excel_link = $this->set_current_page_link(array('format' => 'excel')); ?>
                            <a class="btn  btn-sm btn-primary export-link-btn" data-format="excel" href="<?php print_link($export_excel_link); ?>" target="_blank">
                                <img src="<?php print_link('assets/images/xsl.png') ?>" class="mr-2" /> EXCEL
                                </a>
                                <?php if($can_edit){ ?>
                                <a class="btn btn-sm btn-info"  href="<?php print_link("bhuilding_details_for_fire_noc/edit/$rec_id"); ?>">
                                    <i class="fa fa-edit"></i> Edit
                                </a>
                                <?php } ?>
                            </div>
                            <?php
                            }
                            else{
                            ?>
                            <!-- Empty Record Message -->
                            <div class="text-muted p-3">
                                <i class="fa fa-ban"></i> No Record Found
                            </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
