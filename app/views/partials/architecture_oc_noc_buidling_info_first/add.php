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
                    <h4 class="record-title">Add New Architecture Oc Noc Buidling Info First</h4>
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
                <div class="col-md-12 comp-grid">
                    <?php $this :: display_page_errors(); ?>
                    <div  class="bg-light p-3 animated fadeIn page-content">
                        <form id="architecture_oc_noc_buidling_info_first-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-vertical needs-validation" action="<?php print_link("architecture_oc_noc_buidling_info_first/add?csrf_token=$csrf_token") ?>" method="post">
                            <div>
                                <div class="form-group ">
                                    <label class="control-label" for="building_name">Building Name <span class="text-danger">*</span></label>
                                    <div id="ctrl-building_name-holder" class=""> 
                                        <input id="ctrl-building_name"  value="<?php  echo $this->set_field_value('building_name',""); ?>" type="text" placeholder="Enter Building Name"  required="" name="building_name"  class="form-control " />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label class="control-label" for="building_address">Building Address <span class="text-danger">*</span></label>
                                        <div id="ctrl-building_address-holder" class=""> 
                                            <input id="ctrl-building_address"  value="<?php  echo $this->set_field_value('building_address',""); ?>" type="text" placeholder="Enter Building Address"  required="" name="building_address"  class="form-control " />
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label class="control-label" for="plot_no_or_cts_no">Plot No Or Cts No <span class="text-danger">*</span></label>
                                            <div id="ctrl-plot_no_or_cts_no-holder" class=""> 
                                                <input id="ctrl-plot_no_or_cts_no"  value="<?php  echo $this->set_field_value('plot_no_or_cts_no',""); ?>" type="text" placeholder="Enter Plot No Or Cts No"  required="" name="plot_no_or_cts_no"  class="form-control " />
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <label class="control-label" for="name_of_architect_builder_developer">Name Of Architect Builder Developer <span class="text-danger">*</span></label>
                                                <div id="ctrl-name_of_architect_builder_developer-holder" class=""> 
                                                    <input id="ctrl-name_of_architect_builder_developer"  value="<?php  echo $this->set_field_value('name_of_architect_builder_developer',""); ?>" type="text" placeholder="Enter Name Of Architect Builder Developer"  required="" name="name_of_architect_builder_developer"  class="form-control " />
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label class="control-label" for="noc_particulars">Noc Particulars <span class="text-danger">*</span></label>
                                                    <div id="ctrl-noc_particulars-holder" class=""> 
                                                        <input id="ctrl-noc_particulars"  value="<?php  echo $this->set_field_value('noc_particulars',""); ?>" type="text" placeholder="Enter Noc Particulars"  required="" name="noc_particulars"  class="form-control " />
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <label class="control-label" for="noc_particulars_first_noc_no">Noc Particulars First Noc No <span class="text-danger">*</span></label>
                                                        <div id="ctrl-noc_particulars_first_noc_no-holder" class=""> 
                                                            <input id="ctrl-noc_particulars_first_noc_no"  value="<?php  echo $this->set_field_value('noc_particulars_first_noc_no',""); ?>" type="text" placeholder="Enter Noc Particulars First Noc No"  required="" name="noc_particulars_first_noc_no"  class="form-control " />
                                                            </div>
                                                        </div>
                                                        <div class="form-group ">
                                                            <label class="control-label" for="noc_particulars_first_noc_date">Noc Particulars First Noc Date <span class="text-danger">*</span></label>
                                                            <div id="ctrl-noc_particulars_first_noc_date-holder" class="input-group"> 
                                                                <input id="ctrl-noc_particulars_first_noc_date" class="form-control datepicker  datepicker"  required="" value="<?php  echo $this->set_field_value('noc_particulars_first_noc_date',""); ?>" type="datetime" name="noc_particulars_first_noc_date" placeholder="Enter Noc Particulars First Noc Date" data-enable-time="false" data-min-date="" data-max-date="" data-date-format="Y-m-d" data-alt-format="F j, Y" data-inline="false" data-no-calendar="false" data-mode="single" />
                                                                    <div class="input-group-append">
                                                                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group ">
                                                                <label class="control-label" for="noc_particulars_amendment_no_one">Noc Particulars Amendment No One <span class="text-danger">*</span></label>
                                                                <div id="ctrl-noc_particulars_amendment_no_one-holder" class=""> 
                                                                    <input id="ctrl-noc_particulars_amendment_no_one"  value="<?php  echo $this->set_field_value('noc_particulars_amendment_no_one',""); ?>" type="text" placeholder="Enter Noc Particulars Amendment No One"  required="" name="noc_particulars_amendment_no_one"  class="form-control " />
                                                                    </div>
                                                                </div>
                                                                <div class="form-group ">
                                                                    <label class="control-label" for="noc_particulars_amendment_date_one">Noc Particulars Amendment Date One <span class="text-danger">*</span></label>
                                                                    <div id="ctrl-noc_particulars_amendment_date_one-holder" class="input-group"> 
                                                                        <input id="ctrl-noc_particulars_amendment_date_one" class="form-control datepicker  datepicker"  required="" value="<?php  echo $this->set_field_value('noc_particulars_amendment_date_one',""); ?>" type="datetime" name="noc_particulars_amendment_date_one" placeholder="Enter Noc Particulars Amendment Date One" data-enable-time="false" data-min-date="" data-max-date="" data-date-format="Y-m-d" data-alt-format="F j, Y" data-inline="false" data-no-calendar="false" data-mode="single" />
                                                                            <div class="input-group-append">
                                                                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group ">
                                                                        <label class="control-label" for="noc_particulars_amendment_no_two">Noc Particulars Amendment No Two <span class="text-danger">*</span></label>
                                                                        <div id="ctrl-noc_particulars_amendment_no_two-holder" class=""> 
                                                                            <input id="ctrl-noc_particulars_amendment_no_two"  value="<?php  echo $this->set_field_value('noc_particulars_amendment_no_two',""); ?>" type="text" placeholder="Enter Noc Particulars Amendment No Two"  required="" name="noc_particulars_amendment_no_two"  class="form-control " />
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group ">
                                                                            <label class="control-label" for="noc_particulars_amendment_date_two">Noc Particulars Amendment Date Two <span class="text-danger">*</span></label>
                                                                            <div id="ctrl-noc_particulars_amendment_date_two-holder" class="input-group"> 
                                                                                <input id="ctrl-noc_particulars_amendment_date_two" class="form-control datepicker  datepicker"  required="" value="<?php  echo $this->set_field_value('noc_particulars_amendment_date_two',""); ?>" type="datetime" name="noc_particulars_amendment_date_two" placeholder="Enter Noc Particulars Amendment Date Two" data-enable-time="false" data-min-date="" data-max-date="" data-date-format="Y-m-d" data-alt-format="F j, Y" data-inline="false" data-no-calendar="false" data-mode="single" />
                                                                                    <div class="input-group-append">
                                                                                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group ">
                                                                                <label class="control-label" for="noc_particulars_amendment_no_three">Noc Particulars Amendment No Three <span class="text-danger">*</span></label>
                                                                                <div id="ctrl-noc_particulars_amendment_no_three-holder" class=""> 
                                                                                    <input id="ctrl-noc_particulars_amendment_no_three"  value="<?php  echo $this->set_field_value('noc_particulars_amendment_no_three',""); ?>" type="text" placeholder="Enter Noc Particulars Amendment No Three"  required="" name="noc_particulars_amendment_no_three"  class="form-control " />
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group ">
                                                                                    <label class="control-label" for="noc_particulars_amendment_date_three">Noc Particulars Amendment Date Three <span class="text-danger">*</span></label>
                                                                                    <div id="ctrl-noc_particulars_amendment_date_three-holder" class="input-group"> 
                                                                                        <input id="ctrl-noc_particulars_amendment_date_three" class="form-control datepicker  datepicker"  required="" value="<?php  echo $this->set_field_value('noc_particulars_amendment_date_three',""); ?>" type="datetime" name="noc_particulars_amendment_date_three" placeholder="Enter Noc Particulars Amendment Date Three" data-enable-time="false" data-min-date="" data-max-date="" data-date-format="Y-m-d" data-alt-format="F j, Y" data-inline="false" data-no-calendar="false" data-mode="single" />
                                                                                            <div class="input-group-append">
                                                                                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group ">
                                                                                        <label class="control-label" for="composition_of_the_building">Composition Of The Building <span class="text-danger">*</span></label>
                                                                                        <div id="ctrl-composition_of_the_building-holder" class=""> 
                                                                                            <input id="ctrl-composition_of_the_building"  value="<?php  echo $this->set_field_value('composition_of_the_building',""); ?>" type="text" placeholder="Enter Composition Of The Building"  required="" name="composition_of_the_building"  class="form-control " />
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group ">
                                                                                            <label class="control-label" for="type_of_occupancy">Type Of Occupancy <span class="text-danger">*</span></label>
                                                                                            <div id="ctrl-type_of_occupancy-holder" class=""> 
                                                                                                <input id="ctrl-type_of_occupancy"  value="<?php  echo $this->set_field_value('type_of_occupancy',""); ?>" type="text" placeholder="Enter Type Of Occupancy"  required="" name="type_of_occupancy"  class="form-control " />
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
