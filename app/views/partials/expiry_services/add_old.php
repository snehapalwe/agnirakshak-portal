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
                    <h4 class="record-title">Add New Expiry Services</h4>
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
                        <form id="expiry_services-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-vertical needs-validation" action="<?php print_link("expiry_services/add?csrf_token=$csrf_token") ?>" method="post">
                            <div>
                                <div class="form-group ">
                                    <label class="control-label" for="db_name">DATABASE NAME  <span class="text-danger">*</span></label>
                                    <div id="ctrl-db_name-holder" class=""> 
                                        <input id="ctrl-db_name"  value="<?php  echo $this->set_field_value('db_name',""); ?>" type="text" placeholder="Enter Db Name"  required="" name="db_name"  class="form-control " />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label class="control-label" for="expiry_type">EXPIRY TYPE  <span class="text-danger">*</span></label>
                                        <div id="ctrl-expiry_type-holder" class=""> 
                                            <input id="ctrl-expiry_type"  value="<?php  echo $this->set_field_value('expiry_type',""); ?>" type="text" placeholder="Enter Expiry Type"  required="" name="expiry_type"  class="form-control " />
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label class="control-label" for="month">MONTH  <span class="text-danger">*</span></label>
                                            <div id="ctrl-month-holder" class=""> 
                                                <input id="ctrl-month"  value="<?php  echo $this->set_field_value('month',""); ?>" type="text" placeholder="Enter Month"  required="" name="month"  class="form-control " />
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <label class="control-label" for="day">DAY  <span class="text-danger">*</span></label>
                                                <div id="ctrl-day-holder" class=""> 
                                                    <input id="ctrl-day"  value="<?php  echo $this->set_field_value('day',""); ?>" type="text" placeholder="Enter Day"  required="" name="day"  class="form-control " />
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label class="control-label" for="years">YEARS  <span class="text-danger">*</span></label>
                                                    <div id="ctrl-years-holder" class=""> 
                                                        <input id="ctrl-years"  value="<?php  echo $this->set_field_value('years',""); ?>" type="text" placeholder="Enter Years"  required="" name="years"  class="form-control " />
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
