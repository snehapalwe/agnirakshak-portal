<?php 
//check if current user role is allowed access to the pages
$can_add = ACL::is_allowed("survey_visit/add");
$can_edit = ACL::is_allowed("survey_visit/edit");
$can_view = ACL::is_allowed("survey_visit/view");
$can_delete = ACL::is_allowed("survey_visit/delete");
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
                    <h4 class="record-title">View  Survey Visit</h4>
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
                                    <tr  class="td-date_of_visit">
                                        <th class="title"> Date Of Visit: </th>
                                        <td class="value"> <?php echo $data['date_of_visit']; ?></td>
                                    </tr>
                                    <tr  class="td-upload_survey_report">
                                        <th class="title"> Upload Survey Report: </th>
                                        <td class="value"><?php Html :: page_link_file($data['upload_survey_report']); ?></td>
                                    </tr>
                                    <tr  class="td-remark">
                                        <th class="title"> Remark: </th>
                                        <td class="value"> <?php echo $data['remark']; ?></td>
                                    </tr>
                                    <tr  class="td-survey_photos">
                                        <th class="title"> Survey Photos: </th>
                                        <td class="value"><?php Html :: page_link_file($data['survey_photos']); ?></td>
                                    </tr>
                                    <tr  class="td-payment_report">
                                        <th class="title"> Payment Report: </th>
                                        <td class="value"><?php Html :: page_link_file($data['payment_report']); ?></td>
                                    </tr>
                                </tbody>
                                <!-- Table Body End -->
                            </table>
                        </div>
                        <div class="p-3 d-flex">
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
