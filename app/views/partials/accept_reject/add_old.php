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
                    <h4 class="record-title"><strong style='color: black;'>APPROVE OR REJECT</strong></h4>
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
                        <form id="accept_reject-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-vertical needs-validation" action="<?php print_link("accept_reject/add?csrf_token=$csrf_token") ?>" method="post">
                            <div>
                                <input id="ctrl-db_name"  value="<?php  echo $this->set_field_value('db_name',""); ?>" type="hidden" placeholder="Enter Db Name"  readonly required="" name="db_name"  class="form-control " />
                                    <input id="ctrl-rec_id"  value="<?php  echo $this->set_field_value('rec_id',""); ?>" type="hidden" placeholder="Enter Rec Id"  readonly required="" name="rec_id"  class="form-control " />
                                        <div class="form-group ">
                                            <label class="control-label" for="action">ACTION  <span class="text-danger">*</span></label>
                                            <div id="ctrl-action-holder" class=""> 
                                                <select required=""  id="ctrl-action" name="action"  placeholder="Select a value ..."    class="custom-select" >
                                                    <option value="">Select a value ...</option>
                                                    <?php
                                                    $action_options = Menu :: $action;
                                                    if(!empty($action_options)){
                                                    foreach($action_options as $option){
                                                    $value = $option['value'];
                                                    $label = $option['label'];
                                                    $selected = $this->set_field_selected('action', $value, "");
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
                                            <label class="control-label" for="remark">REMARK  <span class="text-danger">*</span></label>
                                            <div id="ctrl-remark-holder" class=""> 
                                                <textarea placeholder="Enter Remark" id="ctrl-remark"  required="" rows="5" name="remark" class=" form-control"><?php  echo $this->set_field_value('remark',""); ?></textarea>
                                                <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label class="control-label" for="sendbackto">Send Back To </label>
                                            <div id="ctrl-sendbackto-holder" class=""> 
                                                <select  id="ctrl-sendbackto" name="sendbackto"  placeholder="Select a value ..."    class="custom-select" >
                                                    <option value="">Select a value ...</option>
                                                    <?php
                                                    $sendbackto_options = Menu :: $sendbackto;
                                                    if(!empty($sendbackto_options)){
                                                    foreach($sendbackto_options as $option){
                                                    $value = $option['value'];
                                                    $label = $option['label'];
                                                    $selected = $this->set_field_selected('sendbackto', $value, "");
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
                                    $("#ctrl-is_survey_needed").parents(".form-group").hide();
                                    <?php 
                                    if($_GET['db_name']=="fire_noc_revised_provisional" || $_GET['db_name']=="fire_noc_provisional_new"){
                                    $jei=new User_infoController();
                                    $db=$jei->GetModel();
                                    $db->where("db_name",$_GET['db_name']);
                                    $db->where("user_id",USER_ID);
                                    $as=$db->getOne("authorization_sequence","*");
                                    if($as['stage']+0==1){
                                    ?>
                                    $("#ctrl-is_survey_needed").parents(".form-group").show();
                                    $("#ctrl-is_survey_needed").prop('required',true);
                                    <?php
                                    }
                                    }
                                    ?>
                                    $("#ctrl-sendbackto").parents(".form-group").hide();
                                    $("#ctrl-action").on("change",function(){
                                    if($("#ctrl-action").val()=="Revert"){ 
                                    $("#ctrl-sendbackto").parents(".form-group").show();
                                    $("#ctrl-sendbackto").prop('required',true);
                                    }else{
                                    $("#ctrl-sendbackto").parents(".form-group").hide();
                                    $("#ctrl-sendbackto").removeAttr('required');
                                    }
                                    });
                                    </script><script>
                                    $(document).ready(function() {
                                    // Function to get a GET param like PHP's $_GET
                                    function getQueryParam(param) {
                                    const urlParams = new URLSearchParams(window.location.search);
                                    return urlParams.get(param);
                                    }
                                    // Check if ?action=reject
                                    const action = getQueryParam('action');
                                    if (action === 'Reject') {
                                    // Remove the option with text or value "Accept"
                                    $("#ctrl-action option[value='Accept']").remove();
                                    // Alternatively, if you want to match text:
                                    // $("#ctrl-action option").filter(function() {
                                    //   return $(this).text().trim() === "Accept";
                                    // }).remove();
                                    }
                                    });
                                </script></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
