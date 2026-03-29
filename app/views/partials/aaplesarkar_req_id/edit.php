<?php
$comp_model = new SharedController;
$page_element_id = "edit-page-" . random_str();
$current_page = $this->set_current_page_link();
$csrf_token = Csrf::$token;
$data = $this->view_data;
//$rec_id = $data['__tableprimarykey'];
$page_id = $this->route->page_id;
$show_header = $this->show_header;
$view_title = $this->view_title;
$redirect_to = $this->redirect_to;
?>
<section class="page" id="<?php echo $page_element_id; ?>" data-page-type="edit"  data-display-type="" data-page-url="<?php print_link($current_page); ?>">
    <?php
    if( $show_header == true ){
    ?>
    <div  class="bg-light p-3 mb-3">
        <div class="container">
            <div class="row ">
                <div class="col ">
                    <h4 class="record-title">Edit  Aaplesarkar Req Id</h4>
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
                <div class="col-md-7 comp-grid">
                    <?php $this :: display_page_errors(); ?>
                    <div  class="bg-light p-3 animated fadeIn page-content">
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-vertical needs-validation" action="<?php print_link("aaplesarkar_req_id/edit/$page_id/?csrf_token=$csrf_token"); ?>" method="post">
                            <div>
                                <div class="form-group ">
                                    <label class="control-label" for="service_name">Service Name <span class="text-danger">*</span></label>
                                    <div id="ctrl-service_name-holder" class=""> 
                                        <input id="ctrl-service_name"  value="<?php  echo $data['service_name']; ?>" type="text" placeholder="Enter Service Name"  required="" name="service_name"  class="form-control " />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label class="control-label" for="db_name">Db Name <span class="text-danger">*</span></label>
                                        <div id="ctrl-db_name-holder" class=""> 
                                            <input id="ctrl-db_name"  value="<?php  echo $data['db_name']; ?>" type="text" placeholder="Enter Db Name"  required="" name="db_name"  class="form-control " />
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label class="control-label" for="trackid">Trackid <span class="text-danger">*</span></label>
                                            <div id="ctrl-trackid-holder" class=""> 
                                                <input id="ctrl-trackid"  value="<?php  echo $data['trackid']; ?>" type="text" placeholder="Enter Trackid"  required="" name="trackid"  class="form-control " />
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <label class="control-label" for="recid">Recid <span class="text-danger">*</span></label>
                                                <div id="ctrl-recid-holder" class=""> 
                                                    <input id="ctrl-recid"  value="<?php  echo $data['recid']; ?>" type="number" placeholder="Enter Recid" step="1"  required="" name="recid"  class="form-control " />
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label class="control-label" for="uid">Uid <span class="text-danger">*</span></label>
                                                    <div id="ctrl-uid-holder" class=""> 
                                                        <input id="ctrl-uid"  value="<?php  echo $data['uid']; ?>" type="text" placeholder="Enter Uid"  required="" name="uid"  class="form-control " />
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <label class="control-label" for="status">Status <span class="text-danger">*</span></label>
                                                        <div id="ctrl-status-holder" class=""> 
                                                            <input id="ctrl-status"  value="<?php  echo $data['status']; ?>" type="text" placeholder="Enter Status"  required="" name="status"  class="form-control " />
                                                            </div>
                                                        </div>
                                                        <div class="form-group ">
                                                            <label class="control-label" for="paid">Paid <span class="text-danger">*</span></label>
                                                            <div id="ctrl-paid-holder" class=""> 
                                                                <input id="ctrl-paid"  value="<?php  echo $data['paid']; ?>" type="number" placeholder="Enter Paid" step="1"  required="" name="paid"  class="form-control " />
                                                                </div>
                                                            </div>
                                                            <div class="form-group ">
                                                                <label class="control-label" for="int_no">Int No <span class="text-danger">*</span></label>
                                                                <div id="ctrl-int_no-holder" class=""> 
                                                                    <input id="ctrl-int_no"  value="<?php  echo $data['int_no']; ?>" type="number" placeholder="Enter Int No" step="1"  required="" name="int_no"  class="form-control " />
                                                                    </div>
                                                                </div>
                                                                <div class="form-group ">
                                                                    <label class="control-label" for="yr">Yr <span class="text-danger">*</span></label>
                                                                    <div id="ctrl-yr-holder" class=""> 
                                                                        <input id="ctrl-yr"  value="<?php  echo $data['yr']; ?>" type="text" placeholder="Enter Yr"  required="" name="yr"  class="form-control " />
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group ">
                                                                        <label class="control-label" for="zone">Zone <span class="text-danger">*</span></label>
                                                                        <div id="ctrl-zone-holder" class=""> 
                                                                            <input id="ctrl-zone"  value="<?php  echo $data['zone']; ?>" type="text" placeholder="Enter Zone"  required="" name="zone"  class="form-control " />
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group ">
                                                                            <label class="control-label" for="payment_done">Payment Done <span class="text-danger">*</span></label>
                                                                            <div id="ctrl-payment_done-holder" class=""> 
                                                                                <input id="ctrl-payment_done"  value="<?php  echo $data['payment_done']; ?>" type="text" placeholder="Enter Payment Done"  required="" name="payment_done"  class="form-control " />
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group ">
                                                                                <label class="control-label" for="certificate_file">Certificate File <span class="text-danger">*</span></label>
                                                                                <div id="ctrl-certificate_file-holder" class=""> 
                                                                                    <div class="dropzone required" input="#ctrl-certificate_file" fieldname="certificate_file"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                                        <input name="certificate_file" id="ctrl-certificate_file" required="" class="dropzone-input form-control" value="<?php  echo $data['certificate_file']; ?>" type="text"  />
                                                                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                            <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <?php Html :: uploaded_files_list($data['certificate_file'], '#ctrl-certificate_file'); ?>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-ajax-status"></div>
                                                                            <div class="form-group text-center">
                                                                                <button class="btn btn-primary" type="submit">
                                                                                    Update
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
