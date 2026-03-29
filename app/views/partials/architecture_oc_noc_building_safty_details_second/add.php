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
                    <h4 class="record-title">Add New Architecture Oc Noc Building Safty Details Second</h4>
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
                        <form id="architecture_oc_noc_building_safty_details_second-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-vertical needs-validation" action="<?php print_link("architecture_oc_noc_building_safty_details_second/add?csrf_token=$csrf_token") ?>" method="post">
                            <div>
                                <div class="form-group ">
                                    <label class="control-label" for="access">Access <span class="text-danger">*</span></label>
                                    <div id="ctrl-access-holder" class=""> 
                                        <input id="ctrl-access"  value="<?php  echo $this->set_field_value('access',""); ?>" type="text" placeholder="Enter Access"  required="" name="access"  class="form-control " />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label class="control-label" for="road_name_and_width">Road Name And Width <span class="text-danger">*</span></label>
                                        <div id="ctrl-road_name_and_width-holder" class=""> 
                                            <input id="ctrl-road_name_and_width"  value="<?php  echo $this->set_field_value('road_name_and_width',""); ?>" type="text" placeholder="Enter Road Name And Width"  required="" name="road_name_and_width"  class="form-control " />
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label class="control-label" for="internal_acess_width_if_any">Internal Acess Width If Any <span class="text-danger">*</span></label>
                                            <div id="ctrl-internal_acess_width_if_any-holder" class=""> 
                                                <input id="ctrl-internal_acess_width_if_any"  value="<?php  echo $this->set_field_value('internal_acess_width_if_any',""); ?>" type="text" placeholder="Enter Internal Acess Width If Any"  required="" name="internal_acess_width_if_any"  class="form-control " />
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <label class="control-label" for="entrance_gates_number_and_width">Entrance Gates Number And Width <span class="text-danger">*</span></label>
                                                <div id="ctrl-entrance_gates_number_and_width-holder" class=""> 
                                                    <input id="ctrl-entrance_gates_number_and_width"  value="<?php  echo $this->set_field_value('entrance_gates_number_and_width',""); ?>" type="text" placeholder="Enter Entrance Gates Number And Width"  required="" name="entrance_gates_number_and_width"  class="form-control " />
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label class="control-label" for="is_entrance_gates_photo_attached">Is Entrance Gates Photo Attached <span class="text-danger">*</span></label>
                                                    <div id="ctrl-is_entrance_gates_photo_attached-holder" class=""> 
                                                        <select required=""  id="ctrl-is_entrance_gates_photo_attached" name="is_entrance_gates_photo_attached"  placeholder="Select a value ..."    class="custom-select" >
                                                            <option value="">Select a value ...</option>
                                                            <?php 
                                                            $is_entrance_gates_photo_attached_options = $comp_model -> architecture_oc_noc_building_safty_details_second_is_entrance_gates_photo_attached_option_list();
                                                            if(!empty($is_entrance_gates_photo_attached_options)){
                                                            foreach($is_entrance_gates_photo_attached_options as $option){
                                                            $value = (!empty($option['value']) ? $option['value'] : null);
                                                            $label = (!empty($option['label']) ? $option['label'] : $value);
                                                            $selected = $this->set_field_selected('is_entrance_gates_photo_attached',$value, "");
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
                                                    <label class="control-label" for="upload_entrance_gates_photo">Upload Entrance Gates Photo <span class="text-danger">*</span></label>
                                                    <div id="ctrl-upload_entrance_gates_photo-holder" class=""> 
                                                        <div class="dropzone required" input="#ctrl-upload_entrance_gates_photo" fieldname="upload_entrance_gates_photo"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.gif,.jpeg" filesize="3" maximum="5">
                                                            <input name="upload_entrance_gates_photo" id="ctrl-upload_entrance_gates_photo" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_entrance_gates_photo',""); ?>" type="text"  />
                                                                <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <label class="control-label" for="is_compound_wall_available_id">Is Compound Wall Available Id <span class="text-danger">*</span></label>
                                                        <div id="ctrl-is_compound_wall_available_id-holder" class=""> 
                                                            <select required=""  id="ctrl-is_compound_wall_available_id" name="is_compound_wall_available_id"  placeholder="Select a value ..."    class="custom-select" >
                                                                <option value="">Select a value ...</option>
                                                                <?php 
                                                                $is_compound_wall_available_id_options = $comp_model -> architecture_oc_noc_building_safty_details_second_is_compound_wall_available_id_option_list();
                                                                if(!empty($is_compound_wall_available_id_options)){
                                                                foreach($is_compound_wall_available_id_options as $option){
                                                                $value = (!empty($option['value']) ? $option['value'] : null);
                                                                $label = (!empty($option['label']) ? $option['label'] : $value);
                                                                $selected = $this->set_field_selected('is_compound_wall_available_id',$value, "");
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
                                                        <label class="control-label" for="is_compound_wall_photo_attached_id">Is Compound Wall Photo Attached Id <span class="text-danger">*</span></label>
                                                        <div id="ctrl-is_compound_wall_photo_attached_id-holder" class=""> 
                                                            <select required=""  id="ctrl-is_compound_wall_photo_attached_id" name="is_compound_wall_photo_attached_id"  placeholder="Select a value ..."    class="custom-select" >
                                                                <option value="">Select a value ...</option>
                                                                <?php 
                                                                $is_compound_wall_photo_attached_id_options = $comp_model -> architecture_oc_noc_building_safty_details_second_is_compound_wall_photo_attached_id_option_list();
                                                                if(!empty($is_compound_wall_photo_attached_id_options)){
                                                                foreach($is_compound_wall_photo_attached_id_options as $option){
                                                                $value = (!empty($option['value']) ? $option['value'] : null);
                                                                $label = (!empty($option['label']) ? $option['label'] : $value);
                                                                $selected = $this->set_field_selected('is_compound_wall_photo_attached_id',$value, "");
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
                                                        <label class="control-label" for="upload_compound_wall_photo">Upload Compound Wall Photo <span class="text-danger">*</span></label>
                                                        <div id="ctrl-upload_compound_wall_photo-holder" class=""> 
                                                            <div class="dropzone required" input="#ctrl-upload_compound_wall_photo" fieldname="upload_compound_wall_photo"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.gif,.jpeg" filesize="3" maximum="5">
                                                                <input name="upload_compound_wall_photo" id="ctrl-upload_compound_wall_photo" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_compound_wall_photo',""); ?>" type="text"  />
                                                                    <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                    <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group ">
                                                            <label class="control-label" for="is_courtyards_or_open_spaces_as_per_noc_id">Is Courtyards Or Open Spaces As Per Noc Id <span class="text-danger">*</span></label>
                                                            <div id="ctrl-is_courtyards_or_open_spaces_as_per_noc_id-holder" class=""> 
                                                                <select required=""  id="ctrl-is_courtyards_or_open_spaces_as_per_noc_id" name="is_courtyards_or_open_spaces_as_per_noc_id"  placeholder="Select a value ..."    class="custom-select" >
                                                                    <option value="">Select a value ...</option>
                                                                    <?php 
                                                                    $is_courtyards_or_open_spaces_as_per_noc_id_options = $comp_model -> architecture_oc_noc_building_safty_details_second_is_courtyards_or_open_spaces_as_per_noc_id_option_list();
                                                                    if(!empty($is_courtyards_or_open_spaces_as_per_noc_id_options)){
                                                                    foreach($is_courtyards_or_open_spaces_as_per_noc_id_options as $option){
                                                                    $value = (!empty($option['value']) ? $option['value'] : null);
                                                                    $label = (!empty($option['label']) ? $option['label'] : $value);
                                                                    $selected = $this->set_field_selected('is_courtyards_or_open_spaces_as_per_noc_id',$value, "");
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
                                                            <label class="control-label" for="is_access_for_fire_appliances_on_podium_id">Is Access For Fire Appliances On Podium Id <span class="text-danger">*</span></label>
                                                            <div id="ctrl-is_access_for_fire_appliances_on_podium_id-holder" class=""> 
                                                                <select required=""  id="ctrl-is_access_for_fire_appliances_on_podium_id" name="is_access_for_fire_appliances_on_podium_id"  placeholder="Select a value ..."    class="custom-select" >
                                                                    <option value="">Select a value ...</option>
                                                                    <?php 
                                                                    $is_access_for_fire_appliances_on_podium_id_options = $comp_model -> architecture_oc_noc_building_safty_details_second_is_access_for_fire_appliances_on_podium_id_option_list();
                                                                    if(!empty($is_access_for_fire_appliances_on_podium_id_options)){
                                                                    foreach($is_access_for_fire_appliances_on_podium_id_options as $option){
                                                                    $value = (!empty($option['value']) ? $option['value'] : null);
                                                                    $label = (!empty($option['label']) ? $option['label'] : $value);
                                                                    $selected = $this->set_field_selected('is_access_for_fire_appliances_on_podium_id',$value, "");
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
                                                            <label class="control-label" for="officer_remark_on_access_for_fire_appliances_on_podium">Officer Remark On Access For Fire Appliances On Podium <span class="text-danger">*</span></label>
                                                            <div id="ctrl-officer_remark_on_access_for_fire_appliances_on_podium-holder" class=""> 
                                                                <input id="ctrl-officer_remark_on_access_for_fire_appliances_on_podium"  value="<?php  echo $this->set_field_value('officer_remark_on_access_for_fire_appliances_on_podium',""); ?>" type="text" placeholder="Enter Officer Remark On Access For Fire Appliances On Podium"  required="" name="officer_remark_on_access_for_fire_appliances_on_podium"  class="form-control " />
                                                                </div>
                                                            </div>
                                                            <div class="form-group ">
                                                                <label class="control-label" for="escape_staircase_width">Escape Staircase Width <span class="text-danger">*</span></label>
                                                                <div id="ctrl-escape_staircase_width-holder" class=""> 
                                                                    <input id="ctrl-escape_staircase_width"  value="<?php  echo $this->set_field_value('escape_staircase_width',""); ?>" type="text" placeholder="Enter Escape Staircase Width"  required="" name="escape_staircase_width"  class="form-control " />
                                                                    </div>
                                                                </div>
                                                                <div class="form-group ">
                                                                    <label class="control-label" for="open_type_staircase_width">Open Type Staircase Width <span class="text-danger">*</span></label>
                                                                    <div id="ctrl-open_type_staircase_width-holder" class=""> 
                                                                        <input id="ctrl-open_type_staircase_width"  value="<?php  echo $this->set_field_value('open_type_staircase_width',""); ?>" type="text" placeholder="Enter Open Type Staircase Width"  required="" name="open_type_staircase_width"  class="form-control " />
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group ">
                                                                        <label class="control-label" for="is_open_type_photo_attached_id">Is Open Type Photo Attached Id <span class="text-danger">*</span></label>
                                                                        <div id="ctrl-is_open_type_photo_attached_id-holder" class=""> 
                                                                            <select required=""  id="ctrl-is_open_type_photo_attached_id" name="is_open_type_photo_attached_id"  placeholder="Select a value ..."    class="custom-select" >
                                                                                <option value="">Select a value ...</option>
                                                                                <?php 
                                                                                $is_open_type_photo_attached_id_options = $comp_model -> architecture_oc_noc_building_safty_details_second_is_open_type_photo_attached_id_option_list();
                                                                                if(!empty($is_open_type_photo_attached_id_options)){
                                                                                foreach($is_open_type_photo_attached_id_options as $option){
                                                                                $value = (!empty($option['value']) ? $option['value'] : null);
                                                                                $label = (!empty($option['label']) ? $option['label'] : $value);
                                                                                $selected = $this->set_field_selected('is_open_type_photo_attached_id',$value, "");
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
                                                                        <label class="control-label" for="upload_open_type_staircase_photo">Upload Open Type Staircase Photo <span class="text-danger">*</span></label>
                                                                        <div id="ctrl-upload_open_type_staircase_photo-holder" class=""> 
                                                                            <div class="dropzone required" input="#ctrl-upload_open_type_staircase_photo" fieldname="upload_open_type_staircase_photo"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.gif,.jpeg" filesize="3" maximum="5">
                                                                                <input name="upload_open_type_staircase_photo" id="ctrl-upload_open_type_staircase_photo" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_open_type_staircase_photo',""); ?>" type="text"  />
                                                                                    <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                    <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group ">
                                                                            <label class="control-label" for="enclosed_type_pressurized_or_natural_staircase_width">Enclosed Type Pressurized Or Natural Staircase Width <span class="text-danger">*</span></label>
                                                                            <div id="ctrl-enclosed_type_pressurized_or_natural_staircase_width-holder" class=""> 
                                                                                <input id="ctrl-enclosed_type_pressurized_or_natural_staircase_width"  value="<?php  echo $this->set_field_value('enclosed_type_pressurized_or_natural_staircase_width',""); ?>" type="text" placeholder="Enter Enclosed Type Pressurized Or Natural Staircase Width"  required="" name="enclosed_type_pressurized_or_natural_staircase_width"  class="form-control " />
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group ">
                                                                                <label class="control-label" for="is_enclosed_type_photo_attached_id">Is Enclosed Type Photo Attached Id <span class="text-danger">*</span></label>
                                                                                <div id="ctrl-is_enclosed_type_photo_attached_id-holder" class=""> 
                                                                                    <select required=""  id="ctrl-is_enclosed_type_photo_attached_id" name="is_enclosed_type_photo_attached_id"  placeholder="Select a value ..."    class="custom-select" >
                                                                                        <option value="">Select a value ...</option>
                                                                                        <?php 
                                                                                        $is_enclosed_type_photo_attached_id_options = $comp_model -> architecture_oc_noc_building_safty_details_second_is_enclosed_type_photo_attached_id_option_list();
                                                                                        if(!empty($is_enclosed_type_photo_attached_id_options)){
                                                                                        foreach($is_enclosed_type_photo_attached_id_options as $option){
                                                                                        $value = (!empty($option['value']) ? $option['value'] : null);
                                                                                        $label = (!empty($option['label']) ? $option['label'] : $value);
                                                                                        $selected = $this->set_field_selected('is_enclosed_type_photo_attached_id',$value, "");
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
                                                                                <label class="control-label" for="upload_enclosed_type_photo">Upload Enclosed Type Photo <span class="text-danger">*</span></label>
                                                                                <div id="ctrl-upload_enclosed_type_photo-holder" class=""> 
                                                                                    <div class="dropzone required" input="#ctrl-upload_enclosed_type_photo" fieldname="upload_enclosed_type_photo"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.gif,.jpeg" filesize="3" maximum="5">
                                                                                        <input name="upload_enclosed_type_photo" id="ctrl-upload_enclosed_type_photo" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_enclosed_type_photo',""); ?>" type="text"  />
                                                                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                            <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group ">
                                                                                    <label class="control-label" for="internal_staircase_type_width_location">Internal Staircase Type Width Location <span class="text-danger">*</span></label>
                                                                                    <div id="ctrl-internal_staircase_type_width_location-holder" class=""> 
                                                                                        <input id="ctrl-internal_staircase_type_width_location"  value="<?php  echo $this->set_field_value('internal_staircase_type_width_location',""); ?>" type="text" placeholder="Enter Internal Staircase Type Width Location"  required="" name="internal_staircase_type_width_location"  class="form-control " />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group ">
                                                                                        <label class="control-label" for="is_internal_staircase_type_width_location_id">Is Internal Staircase Type Width Location Id <span class="text-danger">*</span></label>
                                                                                        <div id="ctrl-is_internal_staircase_type_width_location_id-holder" class=""> 
                                                                                            <select required=""  id="ctrl-is_internal_staircase_type_width_location_id" name="is_internal_staircase_type_width_location_id"  placeholder="Select a value ..."    class="custom-select" >
                                                                                                <option value="">Select a value ...</option>
                                                                                                <?php 
                                                                                                $is_internal_staircase_type_width_location_id_options = $comp_model -> architecture_oc_noc_building_safty_details_second_is_internal_staircase_type_width_location_id_option_list();
                                                                                                if(!empty($is_internal_staircase_type_width_location_id_options)){
                                                                                                foreach($is_internal_staircase_type_width_location_id_options as $option){
                                                                                                $value = (!empty($option['value']) ? $option['value'] : null);
                                                                                                $label = (!empty($option['label']) ? $option['label'] : $value);
                                                                                                $selected = $this->set_field_selected('is_internal_staircase_type_width_location_id',$value, "");
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
                                                                                        <label class="control-label" for="upload_internal_staircase_type_photo">Upload Internal Staircase Type Photo <span class="text-danger">*</span></label>
                                                                                        <div id="ctrl-upload_internal_staircase_type_photo-holder" class=""> 
                                                                                            <div class="dropzone required" input="#ctrl-upload_internal_staircase_type_photo" fieldname="upload_internal_staircase_type_photo"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.gif,.jpeg" filesize="3" maximum="5">
                                                                                                <input name="upload_internal_staircase_type_photo" id="ctrl-upload_internal_staircase_type_photo" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_internal_staircase_type_photo',""); ?>" type="text"  />
                                                                                                    <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                    <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group ">
                                                                                            <label class="control-label" for="certified_lift_numbers">Certified Lift Numbers <span class="text-danger">*</span></label>
                                                                                            <div id="ctrl-certified_lift_numbers-holder" class=""> 
                                                                                                <input id="ctrl-certified_lift_numbers"  value="<?php  echo $this->set_field_value('certified_lift_numbers',""); ?>" type="text" placeholder="Enter Certified Lift Numbers"  required="" name="certified_lift_numbers"  class="form-control " />
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group ">
                                                                                                <label class="control-label" for="is_certified_lift_photo_attached_id">Is Certified Lift Photo Attached Id <span class="text-danger">*</span></label>
                                                                                                <div id="ctrl-is_certified_lift_photo_attached_id-holder" class=""> 
                                                                                                    <select required=""  id="ctrl-is_certified_lift_photo_attached_id" name="is_certified_lift_photo_attached_id"  placeholder="Select a value ..."    class="custom-select" >
                                                                                                        <option value="">Select a value ...</option>
                                                                                                        <?php 
                                                                                                        $is_certified_lift_photo_attached_id_options = $comp_model -> architecture_oc_noc_building_safty_details_second_is_certified_lift_photo_attached_id_option_list();
                                                                                                        if(!empty($is_certified_lift_photo_attached_id_options)){
                                                                                                        foreach($is_certified_lift_photo_attached_id_options as $option){
                                                                                                        $value = (!empty($option['value']) ? $option['value'] : null);
                                                                                                        $label = (!empty($option['label']) ? $option['label'] : $value);
                                                                                                        $selected = $this->set_field_selected('is_certified_lift_photo_attached_id',$value, "");
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
                                                                                                <label class="control-label" for="upload_certified_lift_photo">Upload Certified Lift Photo <span class="text-danger">*</span></label>
                                                                                                <div id="ctrl-upload_certified_lift_photo-holder" class=""> 
                                                                                                    <div class="dropzone required" input="#ctrl-upload_certified_lift_photo" fieldname="upload_certified_lift_photo"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.gif,.jpeg" filesize="3" maximum="5">
                                                                                                        <input name="upload_certified_lift_photo" id="ctrl-upload_certified_lift_photo" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_certified_lift_photo',""); ?>" type="text"  />
                                                                                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                            <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="form-group ">
                                                                                                    <label class="control-label" for="other_lift_numbers">Other Lift Numbers <span class="text-danger">*</span></label>
                                                                                                    <div id="ctrl-other_lift_numbers-holder" class=""> 
                                                                                                        <input id="ctrl-other_lift_numbers"  value="<?php  echo $this->set_field_value('other_lift_numbers',""); ?>" type="text" placeholder="Enter Other Lift Numbers"  required="" name="other_lift_numbers"  class="form-control " />
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form-group ">
                                                                                                        <label class="control-label" for="officer_remark_on_other_lift">Officer Remark On Other Lift <span class="text-danger">*</span></label>
                                                                                                        <div id="ctrl-officer_remark_on_other_lift-holder" class=""> 
                                                                                                            <input id="ctrl-officer_remark_on_other_lift"  value="<?php  echo $this->set_field_value('officer_remark_on_other_lift',""); ?>" type="text" placeholder="Enter Officer Remark On Other Lift"  required="" name="officer_remark_on_other_lift"  class="form-control " />
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="form-group ">
                                                                                                            <label class="control-label" for="lift_lobby_ventilated_pressurized_or_naturally">Lift Lobby Ventilated Pressurized Or Naturally <span class="text-danger">*</span></label>
                                                                                                            <div id="ctrl-lift_lobby_ventilated_pressurized_or_naturally-holder" class=""> 
                                                                                                                <input id="ctrl-lift_lobby_ventilated_pressurized_or_naturally"  value="<?php  echo $this->set_field_value('lift_lobby_ventilated_pressurized_or_naturally',""); ?>" type="text" placeholder="Enter Lift Lobby Ventilated Pressurized Or Naturally"  required="" name="lift_lobby_ventilated_pressurized_or_naturally"  class="form-control " />
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="form-group ">
                                                                                                                <label class="control-label" for="is_lift_lobby_ventilated_photo_attached_id">Is Lift Lobby Ventilated Photo Attached Id <span class="text-danger">*</span></label>
                                                                                                                <div id="ctrl-is_lift_lobby_ventilated_photo_attached_id-holder" class=""> 
                                                                                                                    <select required=""  id="ctrl-is_lift_lobby_ventilated_photo_attached_id" name="is_lift_lobby_ventilated_photo_attached_id"  placeholder="Select a value ..."    class="custom-select" >
                                                                                                                        <option value="">Select a value ...</option>
                                                                                                                        <?php 
                                                                                                                        $is_lift_lobby_ventilated_photo_attached_id_options = $comp_model -> architecture_oc_noc_building_safty_details_second_is_lift_lobby_ventilated_photo_attached_id_option_list();
                                                                                                                        if(!empty($is_lift_lobby_ventilated_photo_attached_id_options)){
                                                                                                                        foreach($is_lift_lobby_ventilated_photo_attached_id_options as $option){
                                                                                                                        $value = (!empty($option['value']) ? $option['value'] : null);
                                                                                                                        $label = (!empty($option['label']) ? $option['label'] : $value);
                                                                                                                        $selected = $this->set_field_selected('is_lift_lobby_ventilated_photo_attached_id',$value, "");
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
                                                                                                                <label class="control-label" for="upload_lift_lobby_photo">Upload Lift Lobby Photo <span class="text-danger">*</span></label>
                                                                                                                <div id="ctrl-upload_lift_lobby_photo-holder" class=""> 
                                                                                                                    <div class="dropzone required" input="#ctrl-upload_lift_lobby_photo" fieldname="upload_lift_lobby_photo"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.gif,.jpeg" filesize="3" maximum="5">
                                                                                                                        <input name="upload_lift_lobby_photo" id="ctrl-upload_lift_lobby_photo" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_lift_lobby_photo',""); ?>" type="text"  />
                                                                                                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                            <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="form-group ">
                                                                                                                    <label class="control-label" for="type_of_lift_doors">Type Of Lift Doors <span class="text-danger">*</span></label>
                                                                                                                    <div id="ctrl-type_of_lift_doors-holder" class=""> 
                                                                                                                        <input id="ctrl-type_of_lift_doors"  value="<?php  echo $this->set_field_value('type_of_lift_doors',""); ?>" type="text" placeholder="Enter Type Of Lift Doors"  required="" name="type_of_lift_doors"  class="form-control " />
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <div class="form-group ">
                                                                                                                        <label class="control-label" for="is_lift_doors_photo_attached_id">Is Lift Doors Photo Attached Id <span class="text-danger">*</span></label>
                                                                                                                        <div id="ctrl-is_lift_doors_photo_attached_id-holder" class=""> 
                                                                                                                            <select required=""  id="ctrl-is_lift_doors_photo_attached_id" name="is_lift_doors_photo_attached_id"  placeholder="Select a value ..."    class="custom-select" >
                                                                                                                                <option value="">Select a value ...</option>
                                                                                                                                <?php 
                                                                                                                                $is_lift_doors_photo_attached_id_options = $comp_model -> architecture_oc_noc_building_safty_details_second_is_lift_doors_photo_attached_id_option_list();
                                                                                                                                if(!empty($is_lift_doors_photo_attached_id_options)){
                                                                                                                                foreach($is_lift_doors_photo_attached_id_options as $option){
                                                                                                                                $value = (!empty($option['value']) ? $option['value'] : null);
                                                                                                                                $label = (!empty($option['label']) ? $option['label'] : $value);
                                                                                                                                $selected = $this->set_field_selected('is_lift_doors_photo_attached_id',$value, "");
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
                                                                                                                        <label class="control-label" for="upload_lift_doors_photo">Upload Lift Doors Photo <span class="text-danger">*</span></label>
                                                                                                                        <div id="ctrl-upload_lift_doors_photo-holder" class=""> 
                                                                                                                            <div class="dropzone required" input="#ctrl-upload_lift_doors_photo" fieldname="upload_lift_doors_photo"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.gif,.jpeg" filesize="3" maximum="5">
                                                                                                                                <input name="upload_lift_doors_photo" id="ctrl-upload_lift_doors_photo" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_lift_doors_photo',""); ?>" type="text"  />
                                                                                                                                    <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                                    <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="form-group ">
                                                                                                                            <label class="control-label" for="location_of_electric_meter">Location Of Electric Meter <span class="text-danger">*</span></label>
                                                                                                                            <div id="ctrl-location_of_electric_meter-holder" class=""> 
                                                                                                                                <input id="ctrl-location_of_electric_meter"  value="<?php  echo $this->set_field_value('location_of_electric_meter',""); ?>" type="text" placeholder="Enter Location Of Electric Meter"  required="" name="location_of_electric_meter"  class="form-control " />
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <div class="form-group ">
                                                                                                                                <label class="control-label" for="is_electric_meter_photo_attached_id">Is Electric Meter Photo Attached Id <span class="text-danger">*</span></label>
                                                                                                                                <div id="ctrl-is_electric_meter_photo_attached_id-holder" class=""> 
                                                                                                                                    <select required=""  id="ctrl-is_electric_meter_photo_attached_id" name="is_electric_meter_photo_attached_id"  placeholder="Select a value ..."    class="custom-select" >
                                                                                                                                        <option value="">Select a value ...</option>
                                                                                                                                        <?php 
                                                                                                                                        $is_electric_meter_photo_attached_id_options = $comp_model -> architecture_oc_noc_building_safty_details_second_is_electric_meter_photo_attached_id_option_list();
                                                                                                                                        if(!empty($is_electric_meter_photo_attached_id_options)){
                                                                                                                                        foreach($is_electric_meter_photo_attached_id_options as $option){
                                                                                                                                        $value = (!empty($option['value']) ? $option['value'] : null);
                                                                                                                                        $label = (!empty($option['label']) ? $option['label'] : $value);
                                                                                                                                        $selected = $this->set_field_selected('is_electric_meter_photo_attached_id',$value, "");
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
                                                                                                                                <label class="control-label" for="upload_electric_meter_photo">Upload Electric Meter Photo <span class="text-danger">*</span></label>
                                                                                                                                <div id="ctrl-upload_electric_meter_photo-holder" class=""> 
                                                                                                                                    <div class="dropzone required" input="#ctrl-upload_electric_meter_photo" fieldname="upload_electric_meter_photo"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.gif,.jpeg" filesize="3" maximum="5">
                                                                                                                                        <input name="upload_electric_meter_photo" id="ctrl-upload_electric_meter_photo" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_electric_meter_photo',""); ?>" type="text"  />
                                                                                                                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                                            <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <div class="form-group ">
                                                                                                                                    <label class="control-label" for="is_electrical_cable_shaft_sealed">Is Electrical Cable Shaft Sealed <span class="text-danger">*</span></label>
                                                                                                                                    <div id="ctrl-is_electrical_cable_shaft_sealed-holder" class=""> 
                                                                                                                                        <input id="ctrl-is_electrical_cable_shaft_sealed"  value="<?php  echo $this->set_field_value('is_electrical_cable_shaft_sealed',""); ?>" type="text" placeholder="Enter Is Electrical Cable Shaft Sealed"  required="" name="is_electrical_cable_shaft_sealed"  class="form-control " />
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    <div class="form-group ">
                                                                                                                                        <label class="control-label" for="is_electrical_cable_shaft_sealed_photo_attached_id">Is Electrical Cable Shaft Sealed Photo Attached Id <span class="text-danger">*</span></label>
                                                                                                                                        <div id="ctrl-is_electrical_cable_shaft_sealed_photo_attached_id-holder" class=""> 
                                                                                                                                            <select required=""  id="ctrl-is_electrical_cable_shaft_sealed_photo_attached_id" name="is_electrical_cable_shaft_sealed_photo_attached_id"  placeholder="Select a value ..."    class="custom-select" >
                                                                                                                                                <option value="">Select a value ...</option>
                                                                                                                                                <?php 
                                                                                                                                                $is_electrical_cable_shaft_sealed_photo_attached_id_options = $comp_model -> architecture_oc_noc_building_safty_details_second_is_electrical_cable_shaft_sealed_photo_attached_id_option_list();
                                                                                                                                                if(!empty($is_electrical_cable_shaft_sealed_photo_attached_id_options)){
                                                                                                                                                foreach($is_electrical_cable_shaft_sealed_photo_attached_id_options as $option){
                                                                                                                                                $value = (!empty($option['value']) ? $option['value'] : null);
                                                                                                                                                $label = (!empty($option['label']) ? $option['label'] : $value);
                                                                                                                                                $selected = $this->set_field_selected('is_electrical_cable_shaft_sealed_photo_attached_id',$value, "");
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
                                                                                                                                        <label class="control-label" for="upload_electrical_cable_shaft_photo">Upload Electrical Cable Shaft Photo <span class="text-danger">*</span></label>
                                                                                                                                        <div id="ctrl-upload_electrical_cable_shaft_photo-holder" class=""> 
                                                                                                                                            <div class="dropzone required" input="#ctrl-upload_electrical_cable_shaft_photo" fieldname="upload_electrical_cable_shaft_photo"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.gif,.jpeg" filesize="3" maximum="5">
                                                                                                                                                <input name="upload_electrical_cable_shaft_photo" id="ctrl-upload_electrical_cable_shaft_photo" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_electrical_cable_shaft_photo',""); ?>" type="text"  />
                                                                                                                                                    <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                                                    <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                        <div class="form-group ">
                                                                                                                                            <label class="control-label" for="number_of_basements">Number Of Basements <span class="text-danger">*</span></label>
                                                                                                                                            <div id="ctrl-number_of_basements-holder" class=""> 
                                                                                                                                                <input id="ctrl-number_of_basements"  value="<?php  echo $this->set_field_value('number_of_basements',""); ?>" type="text" placeholder="Enter Number Of Basements"  required="" name="number_of_basements"  class="form-control " />
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                            <div class="form-group ">
                                                                                                                                                <label class="control-label" for="use_of_first_basement">Use Of First Basement <span class="text-danger">*</span></label>
                                                                                                                                                <div id="ctrl-use_of_first_basement-holder" class=""> 
                                                                                                                                                    <input id="ctrl-use_of_first_basement"  value="<?php  echo $this->set_field_value('use_of_first_basement',""); ?>" type="text" placeholder="Enter Use Of First Basement"  required="" name="use_of_first_basement"  class="form-control " />
                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                                <div class="form-group ">
                                                                                                                                                    <label class="control-label" for="use_of_second_basement">Use Of Second Basement <span class="text-danger">*</span></label>
                                                                                                                                                    <div id="ctrl-use_of_second_basement-holder" class=""> 
                                                                                                                                                        <input id="ctrl-use_of_second_basement"  value="<?php  echo $this->set_field_value('use_of_second_basement',""); ?>" type="text" placeholder="Enter Use Of Second Basement"  required="" name="use_of_second_basement"  class="form-control " />
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                    <div class="form-group ">
                                                                                                                                                        <label class="control-label" for="use_of_third_basement">Use Of Third Basement <span class="text-danger">*</span></label>
                                                                                                                                                        <div id="ctrl-use_of_third_basement-holder" class=""> 
                                                                                                                                                            <input id="ctrl-use_of_third_basement"  value="<?php  echo $this->set_field_value('use_of_third_basement',""); ?>" type="text" placeholder="Enter Use Of Third Basement"  required="" name="use_of_third_basement"  class="form-control " />
                                                                                                                                                            </div>
                                                                                                                                                        </div>
                                                                                                                                                        <div class="form-group ">
                                                                                                                                                            <label class="control-label" for="no_of_staircase_or_ramps_for_basement">No Of Staircase Or Ramps For Basement <span class="text-danger">*</span></label>
                                                                                                                                                            <div id="ctrl-no_of_staircase_or_ramps_for_basement-holder" class=""> 
                                                                                                                                                                <input id="ctrl-no_of_staircase_or_ramps_for_basement"  value="<?php  echo $this->set_field_value('no_of_staircase_or_ramps_for_basement',""); ?>" type="text" placeholder="Enter No Of Staircase Or Ramps For Basement"  required="" name="no_of_staircase_or_ramps_for_basement"  class="form-control " />
                                                                                                                                                                </div>
                                                                                                                                                            </div>
                                                                                                                                                            <div class="form-group ">
                                                                                                                                                                <label class="control-label" for="is_basement_staircase_as_per_noc">Is Basement Staircase As Per Noc <span class="text-danger">*</span></label>
                                                                                                                                                                <div id="ctrl-is_basement_staircase_as_per_noc-holder" class=""> 
                                                                                                                                                                    <input id="ctrl-is_basement_staircase_as_per_noc"  value="<?php  echo $this->set_field_value('is_basement_staircase_as_per_noc',""); ?>" type="text" placeholder="Enter Is Basement Staircase As Per Noc"  required="" name="is_basement_staircase_as_per_noc"  class="form-control " />
                                                                                                                                                                    </div>
                                                                                                                                                                </div>
                                                                                                                                                                <div class="form-group ">
                                                                                                                                                                    <label class="control-label" for="is_basement_staircase_as_per_noc_photo_attached_id">Is Basement Staircase As Per Noc Photo Attached Id <span class="text-danger">*</span></label>
                                                                                                                                                                    <div id="ctrl-is_basement_staircase_as_per_noc_photo_attached_id-holder" class=""> 
                                                                                                                                                                        <select required=""  id="ctrl-is_basement_staircase_as_per_noc_photo_attached_id" name="is_basement_staircase_as_per_noc_photo_attached_id"  placeholder="Select a value ..."    class="custom-select" >
                                                                                                                                                                            <option value="">Select a value ...</option>
                                                                                                                                                                            <?php 
                                                                                                                                                                            $is_basement_staircase_as_per_noc_photo_attached_id_options = $comp_model -> architecture_oc_noc_building_safty_details_second_is_basement_staircase_as_per_noc_photo_attached_id_option_list();
                                                                                                                                                                            if(!empty($is_basement_staircase_as_per_noc_photo_attached_id_options)){
                                                                                                                                                                            foreach($is_basement_staircase_as_per_noc_photo_attached_id_options as $option){
                                                                                                                                                                            $value = (!empty($option['value']) ? $option['value'] : null);
                                                                                                                                                                            $label = (!empty($option['label']) ? $option['label'] : $value);
                                                                                                                                                                            $selected = $this->set_field_selected('is_basement_staircase_as_per_noc_photo_attached_id',$value, "");
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
                                                                                                                                                                    <label class="control-label" for="upload_basement_staircase_as_per_noc_photo">Upload Basement Staircase As Per Noc Photo <span class="text-danger">*</span></label>
                                                                                                                                                                    <div id="ctrl-upload_basement_staircase_as_per_noc_photo-holder" class=""> 
                                                                                                                                                                        <div class="dropzone required" input="#ctrl-upload_basement_staircase_as_per_noc_photo" fieldname="upload_basement_staircase_as_per_noc_photo"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.gif,.jpeg" filesize="3" maximum="5">
                                                                                                                                                                            <input name="upload_basement_staircase_as_per_noc_photo" id="ctrl-upload_basement_staircase_as_per_noc_photo" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_basement_staircase_as_per_noc_photo',""); ?>" type="text"  />
                                                                                                                                                                                <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                                                                                <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                                                                            </div>
                                                                                                                                                                        </div>
                                                                                                                                                                    </div>
                                                                                                                                                                    <div class="form-group ">
                                                                                                                                                                        <label class="control-label" for="type_of_ventilation">Type Of Ventilation <span class="text-danger">*</span></label>
                                                                                                                                                                        <div id="ctrl-type_of_ventilation-holder" class=""> 
                                                                                                                                                                            <input id="ctrl-type_of_ventilation"  value="<?php  echo $this->set_field_value('type_of_ventilation',""); ?>" type="text" placeholder="Enter Type Of Ventilation"  required="" name="type_of_ventilation"  class="form-control " />
                                                                                                                                                                            </div>
                                                                                                                                                                        </div>
                                                                                                                                                                        <div class="form-group ">
                                                                                                                                                                            <label class="control-label" for="is_ventilation_photo_attached_id">Is Ventilation Photo Attached Id <span class="text-danger">*</span></label>
                                                                                                                                                                            <div id="ctrl-is_ventilation_photo_attached_id-holder" class=""> 
                                                                                                                                                                                <select required=""  id="ctrl-is_ventilation_photo_attached_id" name="is_ventilation_photo_attached_id"  placeholder="Select a value ..."    class="custom-select" >
                                                                                                                                                                                    <option value="">Select a value ...</option>
                                                                                                                                                                                    <?php 
                                                                                                                                                                                    $is_ventilation_photo_attached_id_options = $comp_model -> architecture_oc_noc_building_safty_details_second_is_ventilation_photo_attached_id_option_list();
                                                                                                                                                                                    if(!empty($is_ventilation_photo_attached_id_options)){
                                                                                                                                                                                    foreach($is_ventilation_photo_attached_id_options as $option){
                                                                                                                                                                                    $value = (!empty($option['value']) ? $option['value'] : null);
                                                                                                                                                                                    $label = (!empty($option['label']) ? $option['label'] : $value);
                                                                                                                                                                                    $selected = $this->set_field_selected('is_ventilation_photo_attached_id',$value, "");
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
                                                                                                                                                                            <label class="control-label" for="upload_ventilation_photo">Upload Ventilation Photo <span class="text-danger">*</span></label>
                                                                                                                                                                            <div id="ctrl-upload_ventilation_photo-holder" class=""> 
                                                                                                                                                                                <div class="dropzone required" input="#ctrl-upload_ventilation_photo" fieldname="upload_ventilation_photo"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.gif,.jpeg" filesize="3" maximum="1">
                                                                                                                                                                                    <input name="upload_ventilation_photo" id="ctrl-upload_ventilation_photo" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_ventilation_photo',""); ?>" type="text"  />
                                                                                                                                                                                        <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                                                                                        <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                                                                                    </div>
                                                                                                                                                                                </div>
                                                                                                                                                                            </div>
                                                                                                                                                                            <div class="form-group ">
                                                                                                                                                                                <label class="control-label" for="compartmentation">Compartmentation <span class="text-danger">*</span></label>
                                                                                                                                                                                <div id="ctrl-compartmentation-holder" class=""> 
                                                                                                                                                                                    <input id="ctrl-compartmentation"  value="<?php  echo $this->set_field_value('compartmentation',""); ?>" type="text" placeholder="Enter Compartmentation"  required="" name="compartmentation"  class="form-control " />
                                                                                                                                                                                    </div>
                                                                                                                                                                                </div>
                                                                                                                                                                                <div class="form-group ">
                                                                                                                                                                                    <label class="control-label" for="is_compartmentation_photo_attached_id">Is Compartmentation Photo Attached Id <span class="text-danger">*</span></label>
                                                                                                                                                                                    <div id="ctrl-is_compartmentation_photo_attached_id-holder" class=""> 
                                                                                                                                                                                        <select required=""  id="ctrl-is_compartmentation_photo_attached_id" name="is_compartmentation_photo_attached_id"  placeholder="Select a value ..."    class="custom-select" >
                                                                                                                                                                                            <option value="">Select a value ...</option>
                                                                                                                                                                                            <?php 
                                                                                                                                                                                            $is_compartmentation_photo_attached_id_options = $comp_model -> architecture_oc_noc_building_safty_details_second_is_compartmentation_photo_attached_id_option_list();
                                                                                                                                                                                            if(!empty($is_compartmentation_photo_attached_id_options)){
                                                                                                                                                                                            foreach($is_compartmentation_photo_attached_id_options as $option){
                                                                                                                                                                                            $value = (!empty($option['value']) ? $option['value'] : null);
                                                                                                                                                                                            $label = (!empty($option['label']) ? $option['label'] : $value);
                                                                                                                                                                                            $selected = $this->set_field_selected('is_compartmentation_photo_attached_id',$value, "");
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
                                                                                                                                                                                    <label class="control-label" for="upload_compartmentation_photo">Upload Compartmentation Photo <span class="text-danger">*</span></label>
                                                                                                                                                                                    <div id="ctrl-upload_compartmentation_photo-holder" class=""> 
                                                                                                                                                                                        <div class="dropzone required" input="#ctrl-upload_compartmentation_photo" fieldname="upload_compartmentation_photo"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.gif,.jpeg" filesize="3" maximum="5">
                                                                                                                                                                                            <input name="upload_compartmentation_photo" id="ctrl-upload_compartmentation_photo" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_compartmentation_photo',""); ?>" type="text"  />
                                                                                                                                                                                                <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                                                                                                <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                                                                                            </div>
                                                                                                                                                                                        </div>
                                                                                                                                                                                    </div>
                                                                                                                                                                                    <div class="form-group ">
                                                                                                                                                                                        <label class="control-label" for="entrance_and_kitchen_doors">Entrance And Kitchen Doors <span class="text-danger">*</span></label>
                                                                                                                                                                                        <div id="ctrl-entrance_and_kitchen_doors-holder" class=""> 
                                                                                                                                                                                            <input id="ctrl-entrance_and_kitchen_doors"  value="<?php  echo $this->set_field_value('entrance_and_kitchen_doors',""); ?>" type="text" placeholder="Enter Entrance And Kitchen Doors"  required="" name="entrance_and_kitchen_doors"  class="form-control " />
                                                                                                                                                                                            </div>
                                                                                                                                                                                        </div>
                                                                                                                                                                                        <div class="form-group ">
                                                                                                                                                                                            <label class="control-label" for="is_entrance_and_kitchen_doors_photo_attached_id">Is Entrance And Kitchen Doors Photo Attached Id <span class="text-danger">*</span></label>
                                                                                                                                                                                            <div id="ctrl-is_entrance_and_kitchen_doors_photo_attached_id-holder" class=""> 
                                                                                                                                                                                                <select required=""  id="ctrl-is_entrance_and_kitchen_doors_photo_attached_id" name="is_entrance_and_kitchen_doors_photo_attached_id"  placeholder="Select a value ..."    class="custom-select" >
                                                                                                                                                                                                    <option value="">Select a value ...</option>
                                                                                                                                                                                                    <?php 
                                                                                                                                                                                                    $is_entrance_and_kitchen_doors_photo_attached_id_options = $comp_model -> architecture_oc_noc_building_safty_details_second_is_entrance_and_kitchen_doors_photo_attached_id_option_list();
                                                                                                                                                                                                    if(!empty($is_entrance_and_kitchen_doors_photo_attached_id_options)){
                                                                                                                                                                                                    foreach($is_entrance_and_kitchen_doors_photo_attached_id_options as $option){
                                                                                                                                                                                                    $value = (!empty($option['value']) ? $option['value'] : null);
                                                                                                                                                                                                    $label = (!empty($option['label']) ? $option['label'] : $value);
                                                                                                                                                                                                    $selected = $this->set_field_selected('is_entrance_and_kitchen_doors_photo_attached_id',$value, "");
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
                                                                                                                                                                                            <label class="control-label" for="upload_entrance_and_kitchen_doors_photo">Upload Entrance And Kitchen Doors Photo <span class="text-danger">*</span></label>
                                                                                                                                                                                            <div id="ctrl-upload_entrance_and_kitchen_doors_photo-holder" class=""> 
                                                                                                                                                                                                <div class="dropzone required" input="#ctrl-upload_entrance_and_kitchen_doors_photo" fieldname="upload_entrance_and_kitchen_doors_photo"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.gif,.jpeg" filesize="3" maximum="5">
                                                                                                                                                                                                    <input name="upload_entrance_and_kitchen_doors_photo" id="ctrl-upload_entrance_and_kitchen_doors_photo" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_entrance_and_kitchen_doors_photo',""); ?>" type="text"  />
                                                                                                                                                                                                        <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                                                                                                        <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                </div>
                                                                                                                                                                                            </div>
                                                                                                                                                                                            <div class="form-group ">
                                                                                                                                                                                                <label class="control-label" for="duplex_flat_entry">Duplex Flat Entry <span class="text-danger">*</span></label>
                                                                                                                                                                                                <div id="ctrl-duplex_flat_entry-holder" class=""> 
                                                                                                                                                                                                    <input id="ctrl-duplex_flat_entry"  value="<?php  echo $this->set_field_value('duplex_flat_entry',""); ?>" type="text" placeholder="Enter Duplex Flat Entry"  required="" name="duplex_flat_entry"  class="form-control " />
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                </div>
                                                                                                                                                                                                <div class="form-group ">
                                                                                                                                                                                                    <label class="control-label" for="is_duplex_flat_entry_photo_attached_id">Is Duplex Flat Entry Photo Attached Id <span class="text-danger">*</span></label>
                                                                                                                                                                                                    <div id="ctrl-is_duplex_flat_entry_photo_attached_id-holder" class=""> 
                                                                                                                                                                                                        <select required=""  id="ctrl-is_duplex_flat_entry_photo_attached_id" name="is_duplex_flat_entry_photo_attached_id"  placeholder="Select a value ..."    class="custom-select" >
                                                                                                                                                                                                            <option value="">Select a value ...</option>
                                                                                                                                                                                                            <?php 
                                                                                                                                                                                                            $is_duplex_flat_entry_photo_attached_id_options = $comp_model -> architecture_oc_noc_building_safty_details_second_is_duplex_flat_entry_photo_attached_id_option_list();
                                                                                                                                                                                                            if(!empty($is_duplex_flat_entry_photo_attached_id_options)){
                                                                                                                                                                                                            foreach($is_duplex_flat_entry_photo_attached_id_options as $option){
                                                                                                                                                                                                            $value = (!empty($option['value']) ? $option['value'] : null);
                                                                                                                                                                                                            $label = (!empty($option['label']) ? $option['label'] : $value);
                                                                                                                                                                                                            $selected = $this->set_field_selected('is_duplex_flat_entry_photo_attached_id',$value, "");
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
                                                                                                                                                                                                    <label class="control-label" for="upload_duplex_flat_entry_photo">Upload Duplex Flat Entry Photo <span class="text-danger">*</span></label>
                                                                                                                                                                                                    <div id="ctrl-upload_duplex_flat_entry_photo-holder" class=""> 
                                                                                                                                                                                                        <div class="dropzone required" input="#ctrl-upload_duplex_flat_entry_photo" fieldname="upload_duplex_flat_entry_photo"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.gif,.jpeg" filesize="3" maximum="5">
                                                                                                                                                                                                            <input name="upload_duplex_flat_entry_photo" id="ctrl-upload_duplex_flat_entry_photo" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_duplex_flat_entry_photo',""); ?>" type="text"  />
                                                                                                                                                                                                                <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                                                                                                                <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                                                                                                            </div>
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
