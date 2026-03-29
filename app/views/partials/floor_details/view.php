<?php 
//check if current user role is allowed access to the pages
$can_add = ACL::is_allowed("floor_details/add");
$can_edit = ACL::is_allowed("floor_details/edit");
$can_view = ACL::is_allowed("floor_details/view");
$can_delete = ACL::is_allowed("floor_details/delete");
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
                    <h4 class="record-title">View  Floor Details</h4>
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
                                    <tr  class="td-foor_name_id">
                                        <th class="title"> Foor Name Id: </th>
                                        <td class="value"> <?php echo $data['foor_name_id']; ?></td>
                                    </tr>
                                    <tr  class="td-foor_name_value">
                                        <th class="title"> Foor Name Value: </th>
                                        <td class="value"> <?php echo $data['foor_name_value']; ?></td>
                                    </tr>
                                    <tr  class="td-recid">
                                        <th class="title"> Recid: </th>
                                        <td class="value"> <?php echo $data['recid']; ?></td>
                                    </tr>
                                    <tr  class="td-floor_wise_p_line_area_in_sqr_mtr">
                                        <th class="title"> Floor Wise P Line Area In Sqr Mtr: </th>
                                        <td class="value"> <?php echo $data['floor_wise_p_line_area_in_sqr_mtr']; ?></td>
                                    </tr>
                                    <tr  class="td-hight_in_mtr_from_ground">
                                        <th class="title"> Hight In Mtr From Ground: </th>
                                        <td class="value"> <?php echo $data['hight_in_mtr_from_ground']; ?></td>
                                    </tr>
                                    <tr  class="td-date">
                                        <th class="title"> Date: </th>
                                        <td class="value"> <?php echo $data['date']; ?></td>
                                    </tr>
                                    <tr  class="td-user_id">
                                        <th class="title"> User Id: </th>
                                        <td class="value"> <?php echo $data['user_id']; ?></td>
                                    </tr>
                                    <tr  class="td-db_name">
                                        <th class="title"> Db Name: </th>
                                        <td class="value"> <?php echo $data['db_name']; ?></td>
                                    </tr>
                                    <tr  class="td-locked">
                                        <th class="title"> Locked: </th>
                                        <td class="value"> <?php echo $data['locked']; ?></td>
                                    </tr>
                                    <tr  class="td-refuge_area">
                                        <th class="title"> Refuge Area: </th>
                                        <td class="value"> <?php echo $data['refuge_area']; ?></td>
                                    </tr>
                                    <tr  class="td-hight_of_refuge_area_from_ground_in_mtr">
                                        <th class="title"> Hight Of Refuge Area From Ground In Mtr: </th>
                                        <td class="value"> <?php echo $data['hight_of_refuge_area_from_ground_in_mtr']; ?></td>
                                    </tr>
                                    <tr  class="td-provided_refuge_area_in_sqr_mtr">
                                        <th class="title"> Provided Refuge Area In Sqr Mtr: </th>
                                        <td class="value"> <?php echo $data['provided_refuge_area_in_sqr_mtr']; ?></td>
                                    </tr>
                                    <tr  class="td-floor_type">
                                        <th class="title"> Floor Type: </th>
                                        <td class="value"> <?php echo $data['floor_type']; ?></td>
                                    </tr>
                                    <tr  class="td-typical_floor_plan">
                                        <th class="title"> Typical Floor Plan: </th>
                                        <td class="value"> <?php echo $data['typical_floor_plan']; ?></td>
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
                                <a class="btn btn-sm btn-info"  href="<?php print_link("floor_details/edit/$rec_id"); ?>">
                                    <i class="fa fa-edit"></i> Edit
                                </a>
                                <?php } ?>
                                <?php if($can_delete){ ?>
                                <a class="btn btn-sm btn-danger record-delete-btn mx-1"  href="<?php print_link("floor_details/delete/$rec_id/?csrf_token=$csrf_token&redirect=$current_page"); ?>" data-prompt-msg="Are you sure you want to delete this record?" data-display-style="modal">
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
