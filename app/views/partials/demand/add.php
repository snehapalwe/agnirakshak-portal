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
                    <h4 class="record-title"><strong style='color: black;'>MAKE PAYMENT</strong></h4>
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
                        <form id="demand-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-vertical needs-validation" action="<?php print_link("demand/add?csrf_token=$csrf_token") ?>" method="post">
                            <div>
                                <input id="ctrl-db_name"  value="<?php  echo $this->set_field_value('db_name',""); ?>" type="hidden" placeholder="Enter Db Name"  readonly required="" name="db_name"  class="form-control " />
                                    <input id="ctrl-rec_id"  value="<?php  echo $this->set_field_value('rec_id',""); ?>" type="hidden" placeholder="Enter Rec Id"  readonly required="" name="rec_id"  class="form-control " />
                                        <div class="form-group ">
                                            <label class="control-label" for="demand_required">DEMAND REQUIRED  <span class="text-danger">*</span></label>
                                            <div id="ctrl-demand_required-holder" class=""> 
                                                <select required=""  id="ctrl-demand_required" name="demand_required"  placeholder="Select a value ..."    class="custom-select" >
                                                    <option value="">Select a value ...</option>
                                                    <?php
                                                    $demand_required_options = Menu :: $is_redevelopment;
                                                    if(!empty($demand_required_options)){
                                                    foreach($demand_required_options as $option){
                                                    $value = $option['value'];
                                                    $label = $option['label'];
                                                    $selected = $this->set_field_selected('demand_required', $value, "");
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
                                            <label class="control-label" for="amount">AMOUNT<span class='text-danger'>*</span> </label>
                                            <div id="ctrl-amount-holder" class=""> 
                                                <input id="ctrl-amount"  value="<?php  echo $this->set_field_value('amount',""); ?>" type="number" placeholder="Enter Amount" step="1" min="1" name="amount"  class="form-control " />
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
                <div  class="">
                    <div class="container">
                        <div class="row ">
                            <div class="col-md-12 comp-grid">
                                <div class=""><div></div>
                                    <script>
                                    
                                    document.querySelector("form").addEventListener("submit", function(e){

    let required = this.querySelectorAll("[required]");
    let missing = [];

    required.forEach(f=>{
        if(f.value.trim() === ""){
            missing.push(f.name);
        }
    });

    if(missing.length > 0){
        e.preventDefault();
        console.log("Missing:", missing);
    } else {
        console.log("All required OK — forced submit");
        // force submit
        this.submit();
    }

});

                                        $('#ctrl-demand_required').on('change', function(){ 
                                        var ctrlVal = $(this).val();
                                        if(ctrlVal == "NO"){
                                        $("#ctrl-payment_person").val(0);
                                        $("#ctrl-payment_type").val("CASH");
                                        $("#ctrl-payment_chq_no").val("ALL");
                                        $("#ctrl-remark").val("ALREADY");
                                        $("#ctrl-payment_bankname").val(" ");
                                        $("#ctrl-payment_person").parents(".form-group").hide();
                                        $("#ctrl-payment_type").parents(".form-group").hide();
                                        $("#ctrl-payment_chq_no").parents(".form-group").hide();
                                        $("#ctrl-payment_chq_date").parents(".form-group").hide();
                                        $("#ctrl-payment_bankname").parents(".form-group").hide();
                                        $("#ctrl-remark").parents(".form-group").hide();
                                        $("#ctrl-amount").parents(".form-group").hide(); // hide amount field
                                        $("#ctrl-amount").removeAttr("required");
                                        $("#ctrl-amount").val(0);
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
                                        $("#ctrl-amount").prop("required",true);
                                        //$("#ctrl-payment_person").val("");
                                        }
                                        });
                                        // ✅ Run the logic automatically on page load
                                        $(document).ready(function(){
                                        // $('#ctrl-demand_required').trigger('change');
                                        });
                                    </script></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
