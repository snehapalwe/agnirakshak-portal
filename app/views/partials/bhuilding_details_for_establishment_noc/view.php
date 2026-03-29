<?php 
//check if current user role is allowed access to the pages
$can_add = ACL::is_allowed("bhuilding_details_for_establishment_noc/add");
$can_edit = ACL::is_allowed("bhuilding_details_for_establishment_noc/edit");
$can_view = ACL::is_allowed("bhuilding_details_for_establishment_noc/view");
$can_delete = ACL::is_allowed("bhuilding_details_for_establishment_noc/delete");
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
                    <h4 class="record-title">View  Bhuilding Details For Establishment Noc</h4>
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
                                    <tr  class="td-id">
                                        <th class="title"> Id: </th>
                                        <td class="value"> <?php echo $data['id']; ?></td>
                                    </tr>
                                    <tr  class="td-name_of_building">
                                        <th class="title"> Name Of Building: </th>
                                        <td class="value"> <?php echo $data['name_of_building']; ?></td>
                                    </tr>
                                    <tr  class="td-number_wing_of_in_building">
                                        <th class="title"> Number Wing Of In Building: </th>
                                        <td class="value"> <?php echo $data['number_wing_of_in_building']; ?></td>
                                    </tr>
                                    <tr  class="td-building_type_id">
                                        <th class="title"> Building Type Id: </th>
                                        <td class="value"> <?php echo $data['building_type_id']; ?></td>
                                    </tr>
                                    <tr  class="td-building_type_value">
                                        <th class="title"> Building Type Value: </th>
                                        <td class="value"> <?php echo $data['building_type_value']; ?></td>
                                    </tr>
                                    <tr  class="td-height_of_building_in_mtr">
                                        <th class="title"> Height Of Building In Mtr: </th>
                                        <td class="value"> <?php echo $data['height_of_building_in_mtr']; ?></td>
                                    </tr>
                                    <tr  class="td-recid">
                                        <th class="title"> Recid: </th>
                                        <td class="value"> <?php echo $data['recid']; ?></td>
                                    </tr>
                                    <tr  class="td-date">
                                        <th class="title"> Date: </th>
                                        <td class="value"> <?php echo $data['date']; ?></td>
                                    </tr>
                                    <tr  class="td-user_id">
                                        <th class="title"> User Id: </th>
                                        <td class="value"> <?php echo $data['user_id']; ?></td>
                                    </tr>
                                    <tr  class="td-no_of_staircase">
                                        <th class="title"> No Of Staircase: </th>
                                        <td class="value"> <?php echo $data['no_of_staircase']; ?></td>
                                    </tr>
                                    <tr  class="td-staircase_width">
                                        <th class="title"> Staircase Width: </th>
                                        <td class="value"> <?php echo $data['staircase_width']; ?></td>
                                    </tr>
                                    <tr  class="td-number_of_lifts">
                                        <th class="title"> Number Of Lifts: </th>
                                        <td class="value"> <?php echo $data['number_of_lifts']; ?></td>
                                    </tr>
                                    <tr  class="td-type_of_lift">
                                        <th class="title"> Type Of Lift: </th>
                                        <td class="value"> <?php echo $data['type_of_lift']; ?></td>
                                    </tr>
                                    <tr  class="td-lift_profile">
                                        <th class="title"> Lift Profile: </th>
                                        <td class="value"> <?php echo $data['lift_profile']; ?></td>
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
                                </tbody>
                                <!-- Table Body End -->
                            </table>
                        </div>
                        <div class="p-3 d-flex">
                            <div class="dropup export-btn-holder mx-1">
                                <button class="btn btn-sm btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-save"></i> Export
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <?php $export_print_link = $this->set_current_page_link(array('format' => 'print')); ?>
                                    <a class="dropdown-item export-link-btn" data-format="print" href="<?php print_link($export_print_link); ?>" target="_blank">
                                        <img src="<?php print_link('assets/images/print.png') ?>" class="mr-2" /> PRINT
                                        </a>
                                        <?php $export_pdf_link = $this->set_current_page_link(array('format' => 'pdf')); ?>
                                        <a class="dropdown-item export-link-btn" data-format="pdf" href="<?php print_link($export_pdf_link); ?>" target="_blank">
                                            <img src="<?php print_link('assets/images/pdf.png') ?>" class="mr-2" /> PDF
                                            </a>
                                            <?php $export_word_link = $this->set_current_page_link(array('format' => 'word')); ?>
                                            <a class="dropdown-item export-link-btn" data-format="word" href="<?php print_link($export_word_link); ?>" target="_blank">
                                                <img src="<?php print_link('assets/images/doc.png') ?>" class="mr-2" /> WORD
                                                </a>
                                                <?php $export_csv_link = $this->set_current_page_link(array('format' => 'csv')); ?>
                                                <a class="dropdown-item export-link-btn" data-format="csv" href="<?php print_link($export_csv_link); ?>" target="_blank">
                                                    <img src="<?php print_link('assets/images/csv.png') ?>" class="mr-2" /> CSV
                                                    </a>
                                                    <?php $export_excel_link = $this->set_current_page_link(array('format' => 'excel')); ?>
                                                    <a class="dropdown-item export-link-btn" data-format="excel" href="<?php print_link($export_excel_link); ?>" target="_blank">
                                                        <img src="<?php print_link('assets/images/xsl.png') ?>" class="mr-2" /> EXCEL
                                                        </a>
                                                    </div>
                                                </div>
                                                <?php if($can_edit){ ?>
                                                <a class="btn btn-sm btn-info"  href="<?php print_link("bhuilding_details_for_establishment_noc/edit/$rec_id"); ?>">
                                                    <i class="fa fa-edit"></i> Edit
                                                </a>
                                                <?php } ?>
                                                <?php if($can_delete){ ?>
                                                <a class="btn btn-sm btn-danger record-delete-btn mx-1"  href="<?php print_link("bhuilding_details_for_establishment_noc/delete/$rec_id/?csrf_token=$csrf_token&redirect=$current_page"); ?>" data-prompt-msg="Are you sure you want to delete this record?" data-display-style="modal">
                                                    <i class="fa fa-times"></i> Delete
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
