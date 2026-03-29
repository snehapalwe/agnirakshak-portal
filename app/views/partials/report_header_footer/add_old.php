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
                    <h4 class="record-title">Add New Report Header Footer</h4>
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
                        <form id="report_header_footer-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-vertical needs-validation" action="<?php print_link("report_header_footer/add?csrf_token=$csrf_token") ?>" method="post">
                            <div>
                                <div class="form-group ">
                                    <label class="control-label" for="header">HEADER  <span class="text-danger">*</span></label>
                                    <div id="ctrl-header-holder" class=""> 
                                        <textarea placeholder="Enter Header" id="ctrl-header"  required="" rows="5" name="header" class=" form-control"><?php  echo $this->set_field_value('header',""); ?></textarea>
                                        <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label" for="footer">FOOTER  <span class="text-danger">*</span></label>
                                    <div id="ctrl-footer-holder" class=""> 
                                        <textarea placeholder="Enter Footer" id="ctrl-footer"  required="" rows="5" name="footer" class=" form-control"><?php  echo $this->set_field_value('footer',""); ?></textarea>
                                        <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label" for="type">TYPE  <span class="text-danger">*</span></label>
                                    <div id="ctrl-type-holder" class=""> 
                                        <input id="ctrl-type"  value="<?php  echo $this->set_field_value('type',""); ?>" type="text" placeholder="Enter Type"  required="" name="type"  class="form-control " />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label class="control-label" for="status">STATUS  <span class="text-danger">*</span></label>
                                        <div id="ctrl-status-holder" class=""> 
                                            <input id="ctrl-status"  value="<?php  echo $this->set_field_value('status',""); ?>" type="text" placeholder="Enter Status"  required="" name="status"  class="form-control " />
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label class="control-label" for="paid">PAID  <span class="text-danger">*</span></label>
                                            <div id="ctrl-paid-holder" class=""> 
                                                <input id="ctrl-paid"  value="<?php  echo $this->set_field_value('paid',""); ?>" type="number" placeholder="Enter Paid" step="1"  required="" name="paid"  class="form-control " />
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <label class="control-label" for="int_no">INTERNAL NO.  <span class="text-danger">*</span></label>
                                                <div id="ctrl-int_no-holder" class=""> 
                                                    <input id="ctrl-int_no"  value="<?php  echo $this->set_field_value('int_no',""); ?>" type="number" placeholder="Enter Int No" step="1"  required="" name="int_no"  class="form-control " />
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label class="control-label" for="yr">YEAR  <span class="text-danger">*</span></label>
                                                    <div id="ctrl-yr-holder" class=""> 
                                                        <input id="ctrl-yr"  value="<?php  echo $this->set_field_value('yr',""); ?>" type="text" placeholder="Enter Yr"  required="" name="yr"  class="form-control " />
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <label class="control-label" for="zone">ZONE  <span class="text-danger">*</span></label>
                                                        <div id="ctrl-zone-holder" class=""> 
                                                            <input id="ctrl-zone"  value="<?php  echo $this->set_field_value('zone',""); ?>" type="text" placeholder="Enter Zone"  required="" name="zone"  class="form-control " />
                                                            </div>
                                                        </div>
                                                        <div class="form-group ">
                                                            <label class="control-label" for="payment_done">PAYMENT DONE  <span class="text-danger">*</span></label>
                                                            <div id="ctrl-payment_done-holder" class=""> 
                                                                <input id="ctrl-payment_done"  value="<?php  echo $this->set_field_value('payment_done',""); ?>" type="text" placeholder="Enter Payment Done"  required="" name="payment_done"  class="form-control " />
                                                                </div>
                                                            </div>
                                                            <div class="form-group ">
                                                                <label class="control-label" for="certificate_file">CERTIFICATE FILE  <span class="text-danger">*</span></label>
                                                                <div id="ctrl-certificate_file-holder" class=""> 
                                                                    <div class="dropzone required" input="#ctrl-certificate_file" fieldname="certificate_file"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                        <input name="certificate_file" id="ctrl-certificate_file" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('certificate_file',""); ?>" type="text"  />
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
