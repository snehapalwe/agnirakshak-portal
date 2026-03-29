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
                    <h4 class="record-title"><strong style='color: black;'>Add NEW LIFT DETAILS</strong></h4>
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
                        <form id="lift_details-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-vertical needs-validation" action="<?php print_link("lift_details/add?csrf_token=$csrf_token") ?>" method="post">
                            <div>
                                <input id="ctrl-rec_id"  value="<?php  echo $this->set_field_value('rec_id',""); ?>" type="hidden" placeholder="Enter Rec Id"  readonly required="" name="rec_id"  class="form-control " />
                                    <input id="ctrl-db_name"  value="<?php  echo $this->set_field_value('db_name',""); ?>" type="hidden" placeholder="Enter Db Name"  readonly required="" name="db_name"  class="form-control " />
                                        <input id="ctrl-building_id"  value="<?php  echo $this->set_field_value('building_id',""); ?>" type="hidden" placeholder="Enter Building Id"  readonly required="" name="building_id"  class="form-control " />
                                            <div class="form-group ">
                                                <label class="control-label" for="lift_no">LIFT NUMBER  <span class="text-danger">*</span></label>
                                                <div id="ctrl-lift_no-holder" class=""> 
                                                    <input id="ctrl-lift_no"  value="<?php  echo $this->set_field_value('lift_no',""); ?>" type="text" placeholder="Enter Lift No"  required="" name="lift_no"  class="form-control " />
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label class="control-label" for="lift_type">LIFT TYPE  <span class="text-danger">*</span></label>
                                                    <div id="ctrl-lift_type-holder" class=""> 
                                                        <input id="ctrl-lift_type"  value="<?php  echo $this->set_field_value('lift_type',""); ?>" type="text" placeholder="Enter Lift Type"  required="" name="lift_type"  class="form-control " />
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <label class="control-label" for="lift_from_floor">LIFT FROM FLOOR  <span class="text-danger">*</span></label>
                                                        <div id="ctrl-lift_from_floor-holder" class=""> 
                                                            <input id="ctrl-lift_from_floor"  value="<?php  echo $this->set_field_value('lift_from_floor',""); ?>" type="text" placeholder="Enter Lift From Floor"  required="" name="lift_from_floor"  class="form-control " />
                                                            </div>
                                                        </div>
                                                        <div class="form-group ">
                                                            <label class="control-label" for="lift_to_floor">LIFT TO FLOOR  <span class="text-danger">*</span></label>
                                                            <div id="ctrl-lift_to_floor-holder" class=""> 
                                                                <input id="ctrl-lift_to_floor"  value="<?php  echo $this->set_field_value('lift_to_floor',""); ?>" type="text" placeholder="Enter Lift To Floor"  required="" name="lift_to_floor"  class="form-control " />
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
