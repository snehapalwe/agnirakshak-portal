<?php 
//check if current user role is allowed access to the pages
$can_add = ACL::is_allowed("typical_floor_plan/add");
$can_edit = ACL::is_allowed("typical_floor_plan/edit");
$can_view = ACL::is_allowed("typical_floor_plan/view");
$can_delete = ACL::is_allowed("typical_floor_plan/delete");
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
                    <h4 class="record-title">View  Typical Floor Plan</h4>
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
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-source='<?php print_link('api/json/typical_floor_plan_foor_name_id_option_list'); ?>' 
                                                data-value="<?php echo $data['foor_name_id']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("typical_floor_plan/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="foor_name_id" 
                                                data-title="Select a value ..." 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="select" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['foor_name_id']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-foor_name_value">
                                        <th class="title"> Foor Name Value: </th>
                                        <td class="value"> <?php echo $data['foor_name_value']; ?></td>
                                    </tr>
                                    <tr  class="td-recid">
                                        <th class="title"> Recid: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-value="<?php echo $data['recid']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("typical_floor_plan/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="recid" 
                                                data-title="Enter Recid" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['recid']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-floor_wise_p_line_area_in_sqr_mtr">
                                        <th class="title"> Floor Wise P Line Area In Sqr Mtr: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-step="any" 
                                                data-value="<?php echo $data['floor_wise_p_line_area_in_sqr_mtr']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("typical_floor_plan/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="floor_wise_p_line_area_in_sqr_mtr" 
                                                data-title="Enter Floor Wise P Line Area In Sqr Mtr" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="number" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['floor_wise_p_line_area_in_sqr_mtr']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-hight_in_mtr_from_ground">
                                        <th class="title"> Hight In Mtr From Ground: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-step="any" 
                                                data-value="<?php echo $data['hight_in_mtr_from_ground']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("typical_floor_plan/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="hight_in_mtr_from_ground" 
                                                data-title="Enter Hight In Mtr From Ground" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="number" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['hight_in_mtr_from_ground']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-date">
                                        <th class="title"> Date: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-value="<?php echo $data['date']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("typical_floor_plan/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="date" 
                                                data-title="Enter Date" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['date']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-user_id">
                                        <th class="title"> User Id: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-value="<?php echo $data['user_id']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("typical_floor_plan/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="user_id" 
                                                data-title="Enter User Id" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['user_id']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-db_name">
                                        <th class="title"> Db Name: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-value="<?php echo $data['db_name']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("typical_floor_plan/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="db_name" 
                                                data-title="Enter Db Name" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['db_name']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-locked">
                                        <th class="title"> Locked: </th>
                                        <td class="value"> <?php echo $data['locked']; ?></td>
                                    </tr>
                                    <tr  class="td-refuge_area">
                                        <th class="title"> Refuge Area: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-source='<?php echo json_encode_quote(Menu :: $is_redevelopment); ?>' 
                                                data-value="<?php echo $data['refuge_area']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("typical_floor_plan/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="refuge_area" 
                                                data-title="Select a value ..." 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="select" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['refuge_area']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-hight_of_refuge_area_from_ground_in_mtr">
                                        <th class="title"> Hight Of Refuge Area From Ground In Mtr: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-step="any" 
                                                data-value="<?php echo $data['hight_of_refuge_area_from_ground_in_mtr']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("typical_floor_plan/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="hight_of_refuge_area_from_ground_in_mtr" 
                                                data-title="Enter Hight Of Refuge Area From Ground In Mtr" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="number" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['hight_of_refuge_area_from_ground_in_mtr']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-provided_refuge_area_in_sqr_mtr">
                                        <th class="title"> Provided Refuge Area In Sqr Mtr: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-step="any" 
                                                data-value="<?php echo $data['provided_refuge_area_in_sqr_mtr']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("typical_floor_plan/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="provided_refuge_area_in_sqr_mtr" 
                                                data-title="Enter Provided Refuge Area In Sqr Mtr" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="number" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['provided_refuge_area_in_sqr_mtr']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-floor_type">
                                        <th class="title"> Floor Type: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-source='<?php print_link('api/json/typical_floor_plan_floor_type_option_list'); ?>' 
                                                data-value="<?php echo $data['floor_type']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("typical_floor_plan/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="floor_type" 
                                                data-title="Select a value ..." 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="select" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['floor_type']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-typical_floor_plan">
                                        <th class="title"> Typical Floor Plan: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-value="<?php echo $data['typical_floor_plan']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("typical_floor_plan/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="typical_floor_plan" 
                                                data-title="Enter Typical Floor Plan Name" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['typical_floor_plan']; ?> 
                                            </span>
                                        </td>
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
                                                <a class="btn btn-sm btn-info"  href="<?php print_link("typical_floor_plan/edit/$rec_id"); ?>">
                                                    <i class="fa fa-edit"></i> Edit
                                                </a>
                                                <?php } ?>
                                                <?php if($can_delete){ ?>
                                                <a class="btn btn-sm btn-danger record-delete-btn mx-1"  href="<?php print_link("typical_floor_plan/delete/$rec_id/?csrf_token=$csrf_token&redirect=$current_page"); ?>" data-prompt-msg="Are you sure you want to delete this record?" data-display-style="modal">
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
