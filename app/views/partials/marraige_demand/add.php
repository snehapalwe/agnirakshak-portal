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
                    <h4 class="record-title">Marraige Demand / विवाह मागणी</h4>
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
                        <form id="marraige_demand-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-vertical needs-validation" action="<?php print_link("marraige_demand/add?csrf_token=$csrf_token") ?>" method="post">
                            <div>
                                <div class="form-group ">
                                    <label class="control-label" for="from_date">From Date / या तारखेपासून <span class="text-danger">*</span></label>
                                    <div id="ctrl-from_date-holder" class="input-group"> 
                                        <input id="ctrl-from_date" class="form-control datepicker  datepicker" required="" value="<?php  echo $this->set_field_value('from_date',""); ?>" type="datetime"  name="from_date" placeholder="Enter From Date / या तारखेपासून" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label class="control-label" for="to_date">To Date / या तारखेपर्यंत <span class="text-danger">*</span></label>
                                        <div id="ctrl-to_date-holder" class="input-group"> 
                                            <input id="ctrl-to_date" class="form-control datepicker  datepicker" required="" value="<?php  echo $this->set_field_value('to_date',""); ?>" type="datetime"  name="to_date" placeholder="Enter To Date / या तारखेपर्यंत" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label class="control-label" for="amount">Amount / रक्कम <span class="text-danger">*</span></label>
                                            <div id="ctrl-amount-holder" class=""> 
                                                <input id="ctrl-amount"  value="<?php  echo $this->set_field_value('amount',""); ?>" type="text" placeholder="Enter Amount / रक्कम"  required="" name="amount"  class="form-control " />
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <label class="control-label" for="status">Status <span class="text-danger">*</span></label>
                                                <div id="ctrl-status-holder" class=""> 
                                                    <input id="ctrl-status"  value="<?php  echo $this->set_field_value('status',""); ?>" type="text" placeholder="Enter Status"  required="" name="status"  class="form-control " />
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label class="control-label" for="paid">Paid <span class="text-danger">*</span></label>
                                                    <div id="ctrl-paid-holder" class=""> 
                                                        <input id="ctrl-paid"  value="<?php  echo $this->set_field_value('paid',""); ?>" type="number" placeholder="Enter Paid" step="1"  required="" name="paid"  class="form-control " />
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <label class="control-label" for="payment_done">Payment Done <span class="text-danger">*</span></label>
                                                        <div id="ctrl-payment_done-holder" class=""> 
                                                            <input id="ctrl-payment_done"  value="<?php  echo $this->set_field_value('payment_done',""); ?>" type="text" placeholder="Enter Payment Done"  required="" name="payment_done"  class="form-control " />
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
