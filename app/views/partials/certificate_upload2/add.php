<?php
$comp_model = new SharedController;
$page_element_id = "add-page-" . random_str();
$current_page = $this->set_current_page_link();
$csrf_token = Csrf::$token;
$show_header = $this->show_header;
$view_title = $this->view_title;
$redirect_to = $this->redirect_to;
?>
<section class="page" id="<?php echo $page_element_id; ?>" data-page-type="add"  data-display-type="" data-page-url="<?php print_link($current_page); ?>">
    <?php
    if( $show_header == true ){
    ?>
    <div  class="bg-light p-3 mb-3">
        <div class="container">
            <div class="row ">
                <div class="col ">
                    <h4 class="record-title"><strong style='color: black;'>PLEASE UPLOAD THE PROVISIONAL NOC & REPORT</strong></h4>
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
                    <div  class="bg-light p-3 animated fadeIn page-content">
                        <form id="certificate_upload2-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-vertical needs-validation" action="<?php print_link("certificate_upload2/add?csrf_token=$csrf_token") ?>" method="post">
                            <div>
                                <input id="ctrl-db_name"  value="<?php  echo $this->set_field_value('db_name',""); ?>" type="hidden" placeholder="Enter Db Name"  readonly required="" name="db_name"  class="form-control " />
                                    <input id="ctrl-rec_id"  value="<?php  echo $this->set_field_value('rec_id',""); ?>" type="hidden" placeholder="Enter Rec Id"  readonly required="" name="rec_id"  class="form-control " />
                                        <div class="form-group ">
                                            <label class="control-label" for="admin_report">STO REPORT  <span class="text-danger">*</span></label>
                                            <div id="ctrl-admin_report-holder" class=""> 
                                                <div class="dropzone required" input="#ctrl-admin_report" fieldname="admin_report"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".pdf" filesize="3" maximum="1">
                                                    <input name="admin_report" id="ctrl-admin_report" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('admin_report',""); ?>" type="text"  />
                                                        <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                        <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                    </div>
                                                </div>
                                                <small class="form-text"><p style="color: red; font-size: 12px;">Upload file size should not exceed 3 MB.</p></small>
                                            </div>
                                            <div class="form-group ">
                                                <label class="control-label" for="upload_noc">UPLOAD NOC  <span class="text-danger">*</span></label>
                                                <div id="ctrl-upload_noc-holder" class=""> 
                                                    <div class="dropzone required" input="#ctrl-upload_noc" fieldname="upload_noc"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".pdf" filesize="6" maximum="1">
                                                        <input name="upload_noc" id="ctrl-upload_noc" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_noc',""); ?>" type="text"  />
                                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                            <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                        </div>
                                                    </div>
                                                    <small class="form-text"><p style="color: red; font-size: 12px;">Upload file size should not exceed 6 MB.</p></small>
                                                </div>
                                            </div>
                                            <div class="form-group form-submit-btn-holder text-center mt-3">
                                                <div class="form-ajax-status"></div>
                                                <button class="btn btn-primary" type="submit">
                                                    Submit
                                                    <i class="fa fa-send"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
