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
                    <h4 class="record-title">Edit  Service Configuration</h4>
                </div>
            </div>
        </div>
    </div>
    <?php
    }
    ?>
    <div  class="">
        <div class="container-fluid">
            <div class="row ">
                <div class="col comp-grid">
                    <?php $this :: display_page_errors(); ?>
                    <div  class="bg-light p-3 animated fadeIn page-content">
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-vertical needs-validation" action="<?php print_link("service_configuration/edit/$page_id/?csrf_token=$csrf_token"); ?>" method="post">
                            <div>
                                <div class="form-group ">
                                    <label class="control-label" for="db_name">Db Name <span class="text-danger">*</span></label>
                                    <div id="ctrl-db_name-holder" class=""> 
                                        <input id="ctrl-db_name"  value="<?php  echo $data['db_name']; ?>" type="text" placeholder="Enter Db Name"  required="" name="db_name"  class="form-control " />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label class="control-label" for="certificate_data">Certificate Data <span class="text-danger">*</span></label>
                                        <div id="ctrl-certificate_data-holder" class=""> 
                                            <textarea placeholder="Enter Certificate Data" id="ctrl-certificate_data"  required="" rows="5" name="certificate_data" class="htmleditor form-control"><?php  echo $data['certificate_data']; ?></textarea>
                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label class="control-label" for="payment">Payment <span class="text-danger">*</span></label>
                                        <div id="ctrl-payment-holder" class=""> 
                                            <select required=""  id="ctrl-payment" name="payment"  placeholder="Select a value ..."    class="custom-select" >
                                                <option value="">Select a value ...</option>
                                                <?php
                                                $payment_options = Menu :: $payment;
                                                $field_value = $data['payment'];
                                                if(!empty($payment_options)){
                                                foreach($payment_options as $option){
                                                $value = $option['value'];
                                                $label = $option['label'];
                                                $selected = ( $value == $field_value ? 'selected' : null );
                                                ?>
                                                <option <?php echo $selected ?> value="<?php echo $value ?>">
                                                    <?php echo $label ?>
                                                </option>                                   
                                                <?php
                                                }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label class="control-label" for="rate">Rate </label>
                                        <div id="ctrl-rate-holder" class=""> 
                                            <input id="ctrl-rate"  value="<?php  echo $data['rate']; ?>" type="number" placeholder="Enter Rate" step="0.01"  name="rate"  class="form-control " />
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label class="control-label" for="code">Code <span class="text-danger">*</span></label>
                                            <div id="ctrl-code-holder" class=""> 
                                                <input id="ctrl-code"  value="<?php  echo $data['code']; ?>" type="text" placeholder="Enter Code"  required="" name="code"  class="form-control " />
                                                </div>
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
