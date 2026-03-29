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
                    <h4 class="record-title"><strong style='color: black;'>ADD NEW TYPICAL FLOOR PLAN</strong></h4>
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
                        <form id="typical_floor_plan-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-vertical needs-validation" action="<?php print_link("typical_floor_plan/add?csrf_token=$csrf_token") ?>" method="post">
                            <div>
                                <div class="form-group ">
                                    <label class="control-label" for="typical_floor_plan">Typical Floor Plan Name <span class="text-danger">*</span></label>
                                    <div id="ctrl-typical_floor_plan-holder" class=""> 
                                        <input id="ctrl-typical_floor_plan"  value="<?php  echo $this->set_field_value('typical_floor_plan',""); ?>" type="text" placeholder="Enter Typical Floor Plan Name"  required="" name="typical_floor_plan"  class="form-control " />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label class="control-label" for="refuge_area">REFUGE AREA  <span class="text-danger">*</span></label>
                                        <div id="ctrl-refuge_area-holder" class=""> 
                                            <select required=""  id="ctrl-refuge_area" name="refuge_area"  placeholder="Select a value ..."    class="custom-select" >
                                                <option value="">Select a value ...</option>
                                                <?php
                                                $refuge_area_options = Menu :: $is_redevelopment;
                                                if(!empty($refuge_area_options)){
                                                foreach($refuge_area_options as $option){
                                                $value = $option['value'];
                                                $label = $option['label'];
                                                $selected = $this->set_field_selected('refuge_area', $value, "");
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
                                        <label class="control-label" for="floor_type">FLOOR TYPE  <span class="text-danger">*</span></label>
                                        <div id="ctrl-floor_type-holder" class=""> 
                                            <select required=""  id="ctrl-floor_type" name="floor_type"  placeholder="Select a value ..."    class="custom-select" >
                                                <option value="">Select a value ...</option>
                                                <?php 
                                                $floor_type_options = $comp_model -> typical_floor_plan_floor_type_option_list();
                                                if(!empty($floor_type_options)){
                                                foreach($floor_type_options as $option){
                                                $value = (!empty($option['value']) ? $option['value'] : null);
                                                $label = (!empty($option['label']) ? $option['label'] : $value);
                                                $selected = $this->set_field_selected('floor_type',$value, "");
                                                ?>
                                                <option <?php echo $selected; ?> value="<?php echo $value; ?>">
                                                    <?php echo $label; ?>
                                                </option>
                                                <?php
                                                }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label class="control-label" for="foor_name_id">FLOOR NAME   <span class="text-danger">*</span></label>
                                        <div id="ctrl-foor_name_id-holder" class=""> 
                                            <select required=""  id="ctrl-foor_name_id" name="foor_name_id"  placeholder="Select a value ..."    class="custom-select" >
                                                <option value="">Select a value ...</option>
                                                <?php 
                                                $foor_name_id_options = $comp_model -> typical_floor_plan_foor_name_id_option_list();
                                                if(!empty($foor_name_id_options)){
                                                foreach($foor_name_id_options as $option){
                                                $value = (!empty($option['value']) ? $option['value'] : null);
                                                $label = (!empty($option['label']) ? $option['label'] : $value);
                                                $selected = $this->set_field_selected('foor_name_id',$value, "");
                                                ?>
                                                <option <?php echo $selected; ?> value="<?php echo $value; ?>">
                                                    <?php echo $label; ?>
                                                </option>
                                                <?php
                                                }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <input id="ctrl-recid"  value="<?php  echo $this->set_field_value('recid',""); ?>" type="hidden" placeholder="Enter Recid"  required="" name="recid"  class="form-control " />
                                        <div class="form-group ">
                                            <label class="control-label" for="floor_wise_p_line_area_in_sqr_mtr">FLOOR-WISE P LINE AREA (SQ.M)  <span class="text-danger">*</span></label>
                                            <div id="ctrl-floor_wise_p_line_area_in_sqr_mtr-holder" class=""> 
                                                <input id="ctrl-floor_wise_p_line_area_in_sqr_mtr"  value="<?php  echo $this->set_field_value('floor_wise_p_line_area_in_sqr_mtr',""); ?>" type="number" placeholder="Enter Floor Wise P Line Area In Sqr Mtr" step="any"  required="" name="floor_wise_p_line_area_in_sqr_mtr"  class="form-control " />
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <label class="control-label" for="hight_in_mtr_from_ground">HEIGHT FROM GROUND (M)  <span class="text-danger">*</span></label>
                                                <div id="ctrl-hight_in_mtr_from_ground-holder" class=""> 
                                                    <input id="ctrl-hight_in_mtr_from_ground"  value="<?php  echo $this->set_field_value('hight_in_mtr_from_ground',""); ?>" type="number" placeholder="Enter Hight In Mtr From Ground" step="any"  required="" name="hight_in_mtr_from_ground"  class="form-control " />
                                                    </div>
                                                </div>
                                                <input id="ctrl-db_name"  value="<?php  echo $this->set_field_value('db_name',""); ?>" type="hidden" placeholder="Enter Db Name"  required="" name="db_name"  class="form-control " />
                                                    <div class="form-group ">
                                                        <label class="control-label" for="hight_of_refuge_area_from_ground_in_mtr">HEIGHT OF REFUGE AREA FROM GROUND (M)  </label>
                                                        <div id="ctrl-hight_of_refuge_area_from_ground_in_mtr-holder" class=""> 
                                                            <input id="ctrl-hight_of_refuge_area_from_ground_in_mtr"  value="<?php  echo $this->set_field_value('hight_of_refuge_area_from_ground_in_mtr',""); ?>" type="number" placeholder="Enter Hight Of Refuge Area From Ground In Mtr" step="any"  name="hight_of_refuge_area_from_ground_in_mtr"  class="form-control " />
                                                            </div>
                                                        </div>
                                                        <div class="form-group ">
                                                            <label class="control-label" for="provided_refuge_area_in_sqr_mtr">PROVIDED REFUGE AREA (SQ.M)  </label>
                                                            <div id="ctrl-provided_refuge_area_in_sqr_mtr-holder" class=""> 
                                                                <input id="ctrl-provided_refuge_area_in_sqr_mtr"  value="<?php  echo $this->set_field_value('provided_refuge_area_in_sqr_mtr',""); ?>" type="number" placeholder="Enter Provided Refuge Area In Sqr Mtr" step="any"  name="provided_refuge_area_in_sqr_mtr"  class="form-control " />
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
