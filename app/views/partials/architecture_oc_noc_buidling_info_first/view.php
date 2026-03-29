<?php 
//check if current user role is allowed access to the pages
$can_add = ACL::is_allowed("architecture_oc_noc_buidling_info_first/add");
$can_edit = ACL::is_allowed("architecture_oc_noc_buidling_info_first/edit");
$can_view = ACL::is_allowed("architecture_oc_noc_buidling_info_first/view");
$can_delete = ACL::is_allowed("architecture_oc_noc_buidling_info_first/delete");
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
                    <h4 class="record-title">View  Architecture Oc Noc Buidling Info First</h4>
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
                                    <tr  class="td-building_name">
                                        <th class="title"> Building Name: </th>
                                        <td class="value"> <?php echo $data['building_name']; ?></td>
                                    </tr>
                                    <tr  class="td-building_address">
                                        <th class="title"> Building Address: </th>
                                        <td class="value"> <?php echo $data['building_address']; ?></td>
                                    </tr>
                                    <tr  class="td-plot_no_or_cts_no">
                                        <th class="title"> Plot No Or Cts No: </th>
                                        <td class="value"> <?php echo $data['plot_no_or_cts_no']; ?></td>
                                    </tr>
                                    <tr  class="td-name_of_architect_builder_developer">
                                        <th class="title"> Name Of Architect Builder Developer: </th>
                                        <td class="value"> <?php echo $data['name_of_architect_builder_developer']; ?></td>
                                    </tr>
                                    <tr  class="td-noc_particulars">
                                        <th class="title"> Noc Particulars: </th>
                                        <td class="value"> <?php echo $data['noc_particulars']; ?></td>
                                    </tr>
                                    <tr  class="td-noc_particulars_first_noc_no">
                                        <th class="title"> Noc Particulars First Noc No: </th>
                                        <td class="value"> <?php echo $data['noc_particulars_first_noc_no']; ?></td>
                                    </tr>
                                    <tr  class="td-noc_particulars_first_noc_date">
                                        <th class="title"> Noc Particulars First Noc Date: </th>
                                        <td class="value"> <?php echo $data['noc_particulars_first_noc_date']; ?></td>
                                    </tr>
                                    <tr  class="td-noc_particulars_amendment_no_one">
                                        <th class="title"> Noc Particulars Amendment No One: </th>
                                        <td class="value"> <?php echo $data['noc_particulars_amendment_no_one']; ?></td>
                                    </tr>
                                    <tr  class="td-noc_particulars_amendment_date_one">
                                        <th class="title"> Noc Particulars Amendment Date One: </th>
                                        <td class="value"> <?php echo $data['noc_particulars_amendment_date_one']; ?></td>
                                    </tr>
                                    <tr  class="td-noc_particulars_amendment_no_two">
                                        <th class="title"> Noc Particulars Amendment No Two: </th>
                                        <td class="value"> <?php echo $data['noc_particulars_amendment_no_two']; ?></td>
                                    </tr>
                                    <tr  class="td-noc_particulars_amendment_date_two">
                                        <th class="title"> Noc Particulars Amendment Date Two: </th>
                                        <td class="value"> <?php echo $data['noc_particulars_amendment_date_two']; ?></td>
                                    </tr>
                                    <tr  class="td-noc_particulars_amendment_no_three">
                                        <th class="title"> Noc Particulars Amendment No Three: </th>
                                        <td class="value"> <?php echo $data['noc_particulars_amendment_no_three']; ?></td>
                                    </tr>
                                    <tr  class="td-noc_particulars_amendment_date_three">
                                        <th class="title"> Noc Particulars Amendment Date Three: </th>
                                        <td class="value"> <?php echo $data['noc_particulars_amendment_date_three']; ?></td>
                                    </tr>
                                    <tr  class="td-composition_of_the_building">
                                        <th class="title"> Composition Of The Building: </th>
                                        <td class="value"> <?php echo $data['composition_of_the_building']; ?></td>
                                    </tr>
                                    <tr  class="td-type_of_occupancy">
                                        <th class="title"> Type Of Occupancy: </th>
                                        <td class="value"> <?php echo $data['type_of_occupancy']; ?></td>
                                    </tr>
                                    <tr  class="td-user_id">
                                        <th class="title"> User Id: </th>
                                        <td class="value"> <?php echo $data['user_id']; ?></td>
                                    </tr>
                                    <tr  class="td-date">
                                        <th class="title"> Date: </th>
                                        <td class="value"> <?php echo $data['date']; ?></td>
                                    </tr>
                                    <tr  class="td-rec_id">
                                        <th class="title"> Rec Id: </th>
                                        <td class="value"> <?php echo $data['rec_id']; ?></td>
                                    </tr>
                                    <tr  class="td-status">
                                        <th class="title"> Status: </th>
                                        <td class="value"> <?php echo $data['status']; ?></td>
                                    </tr>
                                    <tr  class="td-paid">
                                        <th class="title"> Paid: </th>
                                        <td class="value"> <?php echo $data['paid']; ?></td>
                                    </tr>
                                    <tr  class="td-int_no">
                                        <th class="title"> Int No: </th>
                                        <td class="value"> <?php echo $data['int_no']; ?></td>
                                    </tr>
                                    <tr  class="td-yr">
                                        <th class="title"> Yr: </th>
                                        <td class="value"> <?php echo $data['yr']; ?></td>
                                    </tr>
                                    <tr  class="td-zone">
                                        <th class="title"> Zone: </th>
                                        <td class="value"> <?php echo $data['zone']; ?></td>
                                    </tr>
                                    <tr  class="td-payment_done">
                                        <th class="title"> Payment Done: </th>
                                        <td class="value"> <?php echo $data['payment_done']; ?></td>
                                    </tr>
                                    <tr  class="td-certificate_file">
                                        <th class="title"> Certificate File: </th>
                                        <td class="value"> <?php echo $data['certificate_file']; ?></td>
                                    </tr>
                                    <tr  class="td-timestamp">
                                        <th class="title"> Timestamp: </th>
                                        <td class="value"> <?php echo $data['timestamp']; ?></td>
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
                                                <a class="btn btn-sm btn-info"  href="<?php print_link("architecture_oc_noc_buidling_info_first/edit/$rec_id"); ?>">
                                                    <i class="fa fa-edit"></i> Edit
                                                </a>
                                                <?php } ?>
                                                <?php if($can_delete){ ?>
                                                <a class="btn btn-sm btn-danger record-delete-btn mx-1"  href="<?php print_link("architecture_oc_noc_buidling_info_first/delete/$rec_id/?csrf_token=$csrf_token&redirect=$current_page"); ?>" data-prompt-msg="Are you sure you want to delete this record?" data-display-style="modal">
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
