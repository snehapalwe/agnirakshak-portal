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
                    <h4 class="record-title">Add New Survey Visit</h4>
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
                        <form id="survey_visit-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-vertical needs-validation" action="<?php print_link("survey_visit/add?csrf_token=$csrf_token") ?>" method="post">
                            <div>
                                <input id="ctrl-rec_id"  value="<?php  echo $this->set_field_value('rec_id',""); ?>" type="hidden" placeholder="Enter Rec Id"  readonly required="" name="rec_id"  class="form-control " />
                                    <input id="ctrl-db_name"  value="<?php  echo $this->set_field_value('db_name',""); ?>" type="hidden" placeholder="Enter Db Name"  readonly required="" name="db_name"  class="form-control " />
                                        <div class="form-group ">
                                            <label class="control-label" for="date_of_visit">DATE OF VISIT  <span class="text-danger">*</span></label>
                                            <div id="ctrl-date_of_visit-holder" class="input-group"> 
                                                <input id="ctrl-date_of_visit" class="form-control datepicker  datepicker"  required="" value="<?php  echo $this->set_field_value('date_of_visit',""); ?>" type="datetime" name="date_of_visit" placeholder="Enter Date Of Visit" data-enable-time="false" data-min-date="" data-max-date="<?php echo date_now(); ?>" data-date-format="Y-m-d" data-alt-format="F j, Y" data-inline="false" data-no-calendar="false" data-mode="single" />
                                                    <div class="input-group-append">
                                                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <label class="control-label" for="upload_survey_report">UPLOAD SURVEY REPORT  <span class="text-danger">*</span></label>
                                                <div id="ctrl-upload_survey_report-holder" class=""> 
                                                    <div class="dropzone required" input="#ctrl-upload_survey_report" fieldname="upload_survey_report"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                        <input name="upload_survey_report" id="ctrl-upload_survey_report" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_survey_report',""); ?>" type="text"  />
                                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                            <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                        </div>
                                                    </div>
                                                    <small class="form-text"><p style="color: red; font-size: 12px;">Upload file size should not exceed 3 MB.</p></small>
                                                </div>
                                                <div class="form-group ">
                                                    <label class="control-label" for="remark">REMARK  <span class="text-danger">*</span></label>
                                                    <div id="ctrl-remark-holder" class=""> 
                                                        <textarea placeholder="Enter Remark" id="ctrl-remark"  required="" rows="5" name="remark" class=" form-control"><?php  echo $this->set_field_value('remark',""); ?></textarea>
                                                        <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label class="control-label" for="survey_photos">Survey Photos <span class="text-danger">*</span></label>
                                                    <div id="ctrl-survey_photos-holder" class=""> 
                                                        <div class="dropzone required" input="#ctrl-survey_photos" fieldname="survey_photos"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.gif,.jpeg" filesize="30" maximum="100">
                                                            <input name="survey_photos" id="ctrl-survey_photos" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('survey_photos',""); ?>" type="text"  />
                                                                <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <label class="control-label" for="payment_report">Payment Report <span class="text-danger">*</span></label>
                                                        <div id="ctrl-payment_report-holder" class=""> 
                                                            <div class="dropzone required" input="#ctrl-payment_report" fieldname="payment_report"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="30" maximum="1">
                                                                <input name="payment_report" id="ctrl-payment_report" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('payment_report',""); ?>" type="text"  />
                                                                    <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                    <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                </div>
                                                            </div>
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
