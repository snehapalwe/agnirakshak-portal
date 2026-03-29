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
                    <h4 class="record-title">Edit  Demand</h4>
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
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-vertical needs-validation" action="<?php print_link("demand/edit/$page_id/?csrf_token=$csrf_token"); ?>" method="post">
                            <div>
                                <input id="ctrl-db_name"  value="<?php  echo $data['db_name']; ?>" type="hidden" placeholder="Enter Db Name"  readonly required="" name="db_name"  class="form-control " />
                                    <input id="ctrl-rec_id"  value="<?php  echo $data['rec_id']; ?>" type="hidden" placeholder="Enter Rec Id"  readonly required="" name="rec_id"  class="form-control " />
                                        <div class="form-group ">
                                            <label class="control-label" for="demand_required">DEMAND REQUIRED  <span class="text-danger">*</span></label>
                                            <div id="ctrl-demand_required-holder" class=""> 
                                                <select required=""  id="ctrl-demand_required" name="demand_required"  placeholder="Select a value ..."    class="custom-select" >
                                                    <option value="">Select a value ...</option>
                                                    <?php
                                                    $demand_required_options = Menu :: $is_redevelopment;
                                                    $field_value = $data['demand_required'];
                                                    if(!empty($demand_required_options)){
                                                    foreach($demand_required_options as $option){
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
                                            <label class="control-label" for="amount">Amount <span class='text-danger'>*</span> </label>
                                            <div id="ctrl-amount-holder" class=""> 
                                                <input id="ctrl-amount"  value="<?php  echo $data['amount']; ?>" type="number" placeholder="Enter Amount" step="1"  name="amount"  class="form-control " />
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <label class="control-label" for="payment_person">Payment Person <span class='text-danger'>*</span> </label>
                                                <div id="ctrl-payment_person-holder" class=""> 
                                                    <input id="ctrl-payment_person"  value="<?php  echo $data['payment_person']; ?>" type="text" placeholder="Enter Payment Person"  name="payment_person"  class="form-control " />
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label class="control-label" for="payment_type">Payment Type <span class='text-danger'>*</span> </label>
                                                    <div id="ctrl-payment_type-holder" class=""> 
                                                        <select  id="ctrl-payment_type" name="payment_type"  placeholder="Select a value ..."    class="custom-select" >
                                                            <option value="">Select a value ...</option>
                                                            <?php
                                                            $payment_type_options = Menu :: $payment_type;
                                                            $field_value = $data['payment_type'];
                                                            if(!empty($payment_type_options)){
                                                            foreach($payment_type_options as $option){
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
                                                    <label class="control-label" for="payment_chq_no">Payment Chq No <span class='text-danger'>*</span> </label>
                                                    <div id="ctrl-payment_chq_no-holder" class=""> 
                                                        <input id="ctrl-payment_chq_no"  value="<?php  echo $data['payment_chq_no']; ?>" type="text" placeholder="Enter Payment Chq No "  name="payment_chq_no"  class="form-control " />
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <label class="control-label" for="payment_chq_date">Payment Chq Date <span class='text-danger'>*</span> </label>
                                                        <div id="ctrl-payment_chq_date-holder" class=""> 
                                                            <input id="ctrl-payment_chq_date"  value="<?php  echo $data['payment_chq_date']; ?>" type="text" placeholder="Enter Payment Chq Date "  name="payment_chq_date"  class="form-control " />
                                                            </div>
                                                        </div>
                                                        <div class="form-group ">
                                                            <label class="control-label" for="payment_bankname">Payment Bankname <span class='text-danger'>*</span> </label>
                                                            <div id="ctrl-payment_bankname-holder" class=""> 
                                                                <input id="ctrl-payment_bankname"  value="<?php  echo $data['payment_bankname']; ?>" type="text" placeholder="Enter Payment Bankname  "  name="payment_bankname"  class="form-control " />
                                                                </div>
                                                            </div>
                                                            <div class="form-group ">
                                                                <label class="control-label" for="remark">Remark <span class='text-danger'>*</span> </label>
                                                                <div id="ctrl-remark-holder" class=""> 
                                                                    <input id="ctrl-remark"  value="<?php  echo $data['remark']; ?>" type="text" placeholder="Enter Remark "  name="remark"  class="form-control " />
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
                                    <div  class="">
                                        <div class="container">
                                            <div class="row ">
                                                <div class="col-md-12 comp-grid">
                                                    <div class=""><div></div>
                                                        <script>
                                                            $('#ctrl-demand_required').on('change', function(){ 
                                                            var ctrlVal = $(this).val();
                                                            if(ctrlVal == "NO"){
                                                            $("#ctrl-payment_person").val(0);
                                                            $("#ctrl-payment_type").val("CASH");
                                                            $("#ctrl-payment_chq_no").val("ALL");
                                                            $("#ctrl-remark").val("ALREADY");
                                                            $("#ctrl-payment_person").parents(".form-group").hide();
                                                            $("#ctrl-payment_type").parents(".form-group").hide();
                                                            $("#ctrl-payment_chq_no").parents(".form-group").hide();
                                                            $("#ctrl-payment_chq_date").parents(".form-group").hide();
                                                            $("#ctrl-payment_bankname").parents(".form-group").hide();
                                                            $("#ctrl-remark").parents(".form-group").hide();
                                                            $("#ctrl-amount").parents(".form-group").hide(); // hide amount field
                                                            // $("#ctrl-payment_person").val(0);
                                                            }else{
                                                            $("#ctrl-payment_person").val("");
                                                            $("#ctrl-payment_type").val("");
                                                            $("#ctrl-payment_chq_no").val("");
                                                            $("#ctrl-remark").val("");
                                                            $("#ctrl-payment_person").parents(".form-group").show();
                                                            $("#ctrl-payment_type").parents(".form-group").show();
                                                            $("#ctrl-payment_chq_date").parents(".form-group").show();
                                                            $("#ctrl-payment_chq_bankname").parents(".form-group").show();
                                                            $("#ctrl-payment_chq_no").parents(".form-group").show();
                                                            $("#ctrl-remark").parents(".form-group").show();
                                                            $("#ctrl-amount").parents(".form-group").show(); // show amount field
                                                            //$("#ctrl-payment_person").val("");
                                                            }
                                                            });
                                                            // ✅ Run the logic automatically on page load
                                                            $(document).ready(function(){
                                                            $('#ctrl-demand_required').trigger('change');
                                                            });
                                                        </script></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
