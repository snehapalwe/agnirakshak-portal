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
                    <h4 class="record-title"><strong style='color: black;'>ADD NEW STAIRCASE DETAILS</strong></h4>
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
                        <form id="staircase_details-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-vertical needs-validation" action="<?php print_link("staircase_details/add?csrf_token=$csrf_token") ?>" method="post">
                            <div>
                                <input id="ctrl-rec_id"  value="<?php  echo $this->set_field_value('rec_id',""); ?>" type="hidden" placeholder="Enter Rec Id"  readonly required="" name="rec_id"  class="form-control " />
                                    <input id="ctrl-db_name"  value="<?php  echo $this->set_field_value('db_name',""); ?>" type="hidden" placeholder="Enter Db Name"  readonly required="" name="db_name"  class="form-control " />
                                        <input id="ctrl-building_id"  value="<?php  echo $this->set_field_value('building_id',""); ?>" type="hidden" placeholder="Enter Building Id"  readonly required="" name="building_id"  class="form-control " />
                                            <div class="form-group ">
                                                <label class="control-label" for="staircase_no">STAIRCASE NUMBER  <span class="text-danger">*</span></label>
                                                <div id="ctrl-staircase_no-holder" class=""> 
                                                    <input id="ctrl-staircase_no"  value="<?php  echo $this->set_field_value('staircase_no',""); ?>" type="text" placeholder="Enter Staircase No"  required="" name="staircase_no"  class="form-control " />
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label class="control-label" for="staircase_width">STAIRCASE WIDTH  <span class="text-danger">*</span></label>
                                                    <div id="ctrl-staircase_width-holder" class=""> 
                                                        <input id="ctrl-staircase_width"  value="<?php  echo $this->set_field_value('staircase_width',""); ?>" type="text" placeholder="Enter Staircase Width"  required="" name="staircase_width"  class="form-control " />
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <label class="control-label" for="staircase_from_floor">STAIRCASE FROM FLOOR  <span class="text-danger">*</span></label>
                                                        <div id="ctrl-staircase_from_floor-holder" class=""> 
                                                            <input id="ctrl-staircase_from_floor"  value="<?php  echo $this->set_field_value('staircase_from_floor',""); ?>" type="text" placeholder="Enter Staircase From Floor"  required="" name="staircase_from_floor"  class="form-control " />
                                                            </div>
                                                        </div>
                                                        <div class="form-group ">
                                                            <label class="control-label" for="staircase_to_floor">STAIRCASE TO FLOOR  <span class="text-danger">*</span></label>
                                                            <div id="ctrl-staircase_to_floor-holder" class=""> 
                                                                <input id="ctrl-staircase_to_floor"  value="<?php  echo $this->set_field_value('staircase_to_floor',""); ?>" type="text" placeholder="Enter Staircase To Floor"  required="" name="staircase_to_floor"  class="form-control " />
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
