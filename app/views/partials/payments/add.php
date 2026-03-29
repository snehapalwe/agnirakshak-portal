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
                    <h4 class="record-title">Add New Payments</h4>
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
                        <form id="payments-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-vertical needs-validation" action="<?php print_link("payments/add?csrf_token=$csrf_token") ?>" method="post">
                            <div>
                                <div class="form-group ">
                                    <label class="control-label" for="userid_added">USER ID ADDED  <span class="text-danger">*</span></label>
                                    <div id="ctrl-userid_added-holder" class=""> 
                                        <input id="ctrl-userid_added"  value="<?php  echo $this->set_field_value('userid_added',""); ?>" type="number" placeholder="Enter Userid Added" step="1"  required="" name="userid_added"  class="form-control " />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label class="control-label" for="db_name">DATABASE NAME  <span class="text-danger">*</span></label>
                                        <div id="ctrl-db_name-holder" class=""> 
                                            <input id="ctrl-db_name"  value="<?php  echo $this->set_field_value('db_name',""); ?>" type="text" placeholder="Enter Db Name"  required="" name="db_name"  class="form-control " />
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label class="control-label" for="rec_id">RECORD ID  <span class="text-danger">*</span></label>
                                            <div id="ctrl-rec_id-holder" class=""> 
                                                <input id="ctrl-rec_id"  value="<?php  echo $this->set_field_value('rec_id',""); ?>" type="text" placeholder="Enter Rec Id"  required="" name="rec_id"  class="form-control " />
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <label class="control-label" for="amount">AMOUNT  <span class="text-danger">*</span></label>
                                                <div id="ctrl-amount-holder" class=""> 
                                                    <input id="ctrl-amount"  value="<?php  echo $this->set_field_value('amount',""); ?>" type="text" placeholder="Enter Amount"  required="" name="amount"  class="form-control " />
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label class="control-label" for="txn_no">TRANSACTION NUMBER  <span class="text-danger">*</span></label>
                                                    <div id="ctrl-txn_no-holder" class=""> 
                                                        <input id="ctrl-txn_no"  value="<?php  echo $this->set_field_value('txn_no',""); ?>" type="text" placeholder="Enter Txn No"  required="" name="txn_no"  class="form-control " />
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <label class="control-label" for="payment_mode">PAYMENT MODE  <span class="text-danger">*</span></label>
                                                        <div id="ctrl-payment_mode-holder" class=""> 
                                                            <input id="ctrl-payment_mode"  value="<?php  echo $this->set_field_value('payment_mode',""); ?>" type="text" placeholder="Enter Payment Mode"  required="" name="payment_mode"  class="form-control " />
                                                            </div>
                                                        </div>
                                                        <div class="form-group ">
                                                            <label class="control-label" for="remark">REMARK  <span class="text-danger">*</span></label>
                                                            <div id="ctrl-remark-holder" class=""> 
                                                                <input id="ctrl-remark"  value="<?php  echo $this->set_field_value('remark',""); ?>" type="text" placeholder="Enter Remark"  required="" name="remark"  class="form-control " />
                                                                </div>
                                                            </div>
                                                            <div class="form-group ">
                                                                <label class="control-label" for="citizen_userid">CITIZEN USER ID  <span class="text-danger">*</span></label>
                                                                <div id="ctrl-citizen_userid-holder" class=""> 
                                                                    <input id="ctrl-citizen_userid"  value="<?php  echo $this->set_field_value('citizen_userid',""); ?>" type="text" placeholder="Enter Citizen Userid"  required="" name="citizen_userid"  class="form-control " />
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
                                                                            <label class="control-label" for="rec_no">RECORD NO.  <span class="text-danger">*</span></label>
                                                                            <div id="ctrl-rec_no-holder" class=""> 
                                                                                <input id="ctrl-rec_no"  value="<?php  echo $this->set_field_value('rec_no',""); ?>" type="text" placeholder="Enter Rec No"  required="" name="rec_no"  class="form-control " />
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group ">
                                                                                <label class="control-label" for="payment_person">PAYMENT PERSON  <span class="text-danger">*</span></label>
                                                                                <div id="ctrl-payment_person-holder" class=""> 
                                                                                    <input id="ctrl-payment_person"  value="<?php  echo $this->set_field_value('payment_person',""); ?>" type="text" placeholder="Enter Payment Person"  required="" name="payment_person"  class="form-control " />
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group ">
                                                                                    <label class="control-label" for="payment_type">PAYMENT TYPE  <span class="text-danger">*</span></label>
                                                                                    <div id="ctrl-payment_type-holder" class=""> 
                                                                                        <input id="ctrl-payment_type"  value="<?php  echo $this->set_field_value('payment_type',""); ?>" type="text" placeholder="Enter Payment Type"  required="" name="payment_type"  class="form-control " />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group ">
                                                                                        <label class="control-label" for="payment_chq_no">CHEQUE NUMBER  <span class="text-danger">*</span></label>
                                                                                        <div id="ctrl-payment_chq_no-holder" class=""> 
                                                                                            <input id="ctrl-payment_chq_no"  value="<?php  echo $this->set_field_value('payment_chq_no',""); ?>" type="text" placeholder="Enter Payment Chq No"  required="" name="payment_chq_no"  class="form-control " />
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group ">
                                                                                            <label class="control-label" for="payment_chq_date">CHEQUE DATE  <span class="text-danger">*</span></label>
                                                                                            <div id="ctrl-payment_chq_date-holder" class="input-group"> 
                                                                                                <input id="ctrl-payment_chq_date" class="form-control datepicker  datepicker" required="" value="<?php  echo $this->set_field_value('payment_chq_date',""); ?>" type="datetime"  name="payment_chq_date" placeholder="Enter Payment Chq Date" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                                                                                    <div class="input-group-append">
                                                                                                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group ">
                                                                                                <label class="control-label" for="payment_bankname">BANK NAME  <span class="text-danger">*</span></label>
                                                                                                <div id="ctrl-payment_bankname-holder" class=""> 
                                                                                                    <input id="ctrl-payment_bankname"  value="<?php  echo $this->set_field_value('payment_bankname',""); ?>" type="text" placeholder="Enter Payment Bankname"  required="" name="payment_bankname"  class="form-control " />
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="form-group ">
                                                                                                    <label class="control-label" for="payment_cash_collection_center">CASH COLLECTION CENTER  <span class="text-danger">*</span></label>
                                                                                                    <div id="ctrl-payment_cash_collection_center-holder" class=""> 
                                                                                                        <input id="ctrl-payment_cash_collection_center"  value="<?php  echo $this->set_field_value('payment_cash_collection_center',""); ?>" type="text" placeholder="Enter Payment Cash Collection Center"  required="" name="payment_cash_collection_center"  class="form-control " />
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form-group ">
                                                                                                        <label class="control-label" for="payment_counter">PAYMENT COUNTER  <span class="text-danger">*</span></label>
                                                                                                        <div id="ctrl-payment_counter-holder" class=""> 
                                                                                                            <input id="ctrl-payment_counter"  value="<?php  echo $this->set_field_value('payment_counter',""); ?>" type="text" placeholder="Enter Payment Counter"  required="" name="payment_counter"  class="form-control " />
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="form-group ">
                                                                                                            <label class="control-label" for="paid_by">PAID BY  <span class="text-danger">*</span></label>
                                                                                                            <div id="ctrl-paid_by-holder" class=""> 
                                                                                                                <input id="ctrl-paid_by"  value="<?php  echo $this->set_field_value('paid_by',""); ?>" type="text" placeholder="Enter Paid By"  required="" name="paid_by"  class="form-control " />
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
