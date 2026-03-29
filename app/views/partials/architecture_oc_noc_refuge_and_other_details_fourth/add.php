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
                    <h4 class="record-title">Add New Architecture Oc Noc Refuge And Other Details Fourth</h4>
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
                        <form id="architecture_oc_noc_refuge_and_other_details_fourth-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-vertical needs-validation" action="<?php print_link("architecture_oc_noc_refuge_and_other_details_fourth/add?csrf_token=$csrf_token") ?>" method="post">
                            <div>
                                <div class="form-group ">
                                    <label class="control-label" for="refuge_area_or_floor_details">Refuge Area Or Floor Details <span class="text-danger">*</span></label>
                                    <div id="ctrl-refuge_area_or_floor_details-holder" class=""> 
                                        <input id="ctrl-refuge_area_or_floor_details"  value="<?php  echo $this->set_field_value('refuge_area_or_floor_details',""); ?>" type="text" placeholder="Enter Refuge Area Or Floor Details"  required="" name="refuge_area_or_floor_details"  class="form-control " />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label class="control-label" for="is_refuge_area_or_floor_photo_attached_id">Is Refuge Area Or Floor Photo Attached Id <span class="text-danger">*</span></label>
                                        <div id="ctrl-is_refuge_area_or_floor_photo_attached_id-holder" class=""> 
                                            <select required=""  id="ctrl-is_refuge_area_or_floor_photo_attached_id" name="is_refuge_area_or_floor_photo_attached_id"  placeholder="Select a value ..."    class="custom-select" >
                                                <option value="">Select a value ...</option>
                                                <?php 
                                                $is_refuge_area_or_floor_photo_attached_id_options = $comp_model -> architecture_oc_noc_refuge_and_other_details_fourth_is_refuge_area_or_floor_photo_attached_id_option_list();
                                                if(!empty($is_refuge_area_or_floor_photo_attached_id_options)){
                                                foreach($is_refuge_area_or_floor_photo_attached_id_options as $option){
                                                $value = (!empty($option['value']) ? $option['value'] : null);
                                                $label = (!empty($option['label']) ? $option['label'] : $value);
                                                $selected = $this->set_field_selected('is_refuge_area_or_floor_photo_attached_id',$value, "");
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
                                        <label class="control-label" for="upload_refuge_area_or_floor_photo">Upload Refuge Area Or Floor Photo <span class="text-danger">*</span></label>
                                        <div id="ctrl-upload_refuge_area_or_floor_photo-holder" class=""> 
                                            <div class="dropzone required" input="#ctrl-upload_refuge_area_or_floor_photo" fieldname="upload_refuge_area_or_floor_photo"    data-multiple="true" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.gif,.jpeg" filesize="3" maximum="5">
                                                <input name="upload_refuge_area_or_floor_photo" id="ctrl-upload_refuge_area_or_floor_photo" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_refuge_area_or_floor_photo',""); ?>" type="text"  />
                                                    <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                    <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label class="control-label" for="terrace_door">Terrace Door <span class="text-danger">*</span></label>
                                            <div id="ctrl-terrace_door-holder" class=""> 
                                                <input id="ctrl-terrace_door"  value="<?php  echo $this->set_field_value('terrace_door',""); ?>" type="text" placeholder="Enter Terrace Door"  required="" name="terrace_door"  class="form-control " />
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <label class="control-label" for="is_terrace_door_photo_attached_id">Is Terrace Door Photo Attached Id <span class="text-danger">*</span></label>
                                                <div id="ctrl-is_terrace_door_photo_attached_id-holder" class=""> 
                                                    <select required=""  id="ctrl-is_terrace_door_photo_attached_id" name="is_terrace_door_photo_attached_id"  placeholder="Select a value ..."    class="custom-select" >
                                                        <option value="">Select a value ...</option>
                                                        <?php 
                                                        $is_terrace_door_photo_attached_id_options = $comp_model -> architecture_oc_noc_refuge_and_other_details_fourth_is_terrace_door_photo_attached_id_option_list();
                                                        if(!empty($is_terrace_door_photo_attached_id_options)){
                                                        foreach($is_terrace_door_photo_attached_id_options as $option){
                                                        $value = (!empty($option['value']) ? $option['value'] : null);
                                                        $label = (!empty($option['label']) ? $option['label'] : $value);
                                                        $selected = $this->set_field_selected('is_terrace_door_photo_attached_id',$value, "");
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
                                                <label class="control-label" for="upload_errace_door_photo">Upload Errace Door Photo <span class="text-danger">*</span></label>
                                                <div id="ctrl-upload_errace_door_photo-holder" class=""> 
                                                    <div class="dropzone required" input="#ctrl-upload_errace_door_photo" fieldname="upload_errace_door_photo"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.gif,.jpeg" filesize="3" maximum="1">
                                                        <input name="upload_errace_door_photo" id="ctrl-upload_errace_door_photo" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_errace_door_photo',""); ?>" type="text"  />
                                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                            <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label class="control-label" for="fire_check_floor">Fire Check Floor <span class="text-danger">*</span></label>
                                                    <div id="ctrl-fire_check_floor-holder" class=""> 
                                                        <input id="ctrl-fire_check_floor"  value="<?php  echo $this->set_field_value('fire_check_floor',""); ?>" type="text" placeholder="Enter Fire Check Floor"  required="" name="fire_check_floor"  class="form-control " />
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <label class="control-label" for="is_fire_check_floor_photo_attached_id">Is Fire Check Floor Photo Attached Id <span class="text-danger">*</span></label>
                                                        <div id="ctrl-is_fire_check_floor_photo_attached_id-holder" class=""> 
                                                            <select required=""  id="ctrl-is_fire_check_floor_photo_attached_id" name="is_fire_check_floor_photo_attached_id"  placeholder="Select a value ..."    class="custom-select" >
                                                                <option value="">Select a value ...</option>
                                                                <?php 
                                                                $is_fire_check_floor_photo_attached_id_options = $comp_model -> architecture_oc_noc_refuge_and_other_details_fourth_is_fire_check_floor_photo_attached_id_option_list();
                                                                if(!empty($is_fire_check_floor_photo_attached_id_options)){
                                                                foreach($is_fire_check_floor_photo_attached_id_options as $option){
                                                                $value = (!empty($option['value']) ? $option['value'] : null);
                                                                $label = (!empty($option['label']) ? $option['label'] : $value);
                                                                $selected = $this->set_field_selected('is_fire_check_floor_photo_attached_id',$value, "");
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
                                                        <label class="control-label" for="upload_is_fire_check_floor_photo">Upload Is Fire Check Floor Photo <span class="text-danger">*</span></label>
                                                        <div id="ctrl-upload_is_fire_check_floor_photo-holder" class=""> 
                                                            <div class="dropzone required" input="#ctrl-upload_is_fire_check_floor_photo" fieldname="upload_is_fire_check_floor_photo"    data-multiple="true" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.gif,.jpeg" filesize="3" maximum="5">
                                                                <input name="upload_is_fire_check_floor_photo" id="ctrl-upload_is_fire_check_floor_photo" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_is_fire_check_floor_photo',""); ?>" type="text"  />
                                                                    <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                    <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group ">
                                                            <label class="control-label" for="portable_fire_extinguishers">Portable Fire Extinguishers <span class="text-danger">*</span></label>
                                                            <div id="ctrl-portable_fire_extinguishers-holder" class=""> 
                                                                <input id="ctrl-portable_fire_extinguishers"  value="<?php  echo $this->set_field_value('portable_fire_extinguishers',""); ?>" type="text" placeholder="Enter Portable Fire Extinguishers"  required="" name="portable_fire_extinguishers"  class="form-control " />
                                                                </div>
                                                            </div>
                                                            <div class="form-group ">
                                                                <label class="control-label" for="is_portable_fire_extinguishers_photo_attached_id">Is Portable Fire Extinguishers Photo Attached Id <span class="text-danger">*</span></label>
                                                                <div id="ctrl-is_portable_fire_extinguishers_photo_attached_id-holder" class=""> 
                                                                    <select required=""  id="ctrl-is_portable_fire_extinguishers_photo_attached_id" name="is_portable_fire_extinguishers_photo_attached_id"  placeholder="Select a value ..."    class="custom-select" >
                                                                        <option value="">Select a value ...</option>
                                                                        <?php 
                                                                        $is_portable_fire_extinguishers_photo_attached_id_options = $comp_model -> architecture_oc_noc_refuge_and_other_details_fourth_is_portable_fire_extinguishers_photo_attached_id_option_list();
                                                                        if(!empty($is_portable_fire_extinguishers_photo_attached_id_options)){
                                                                        foreach($is_portable_fire_extinguishers_photo_attached_id_options as $option){
                                                                        $value = (!empty($option['value']) ? $option['value'] : null);
                                                                        $label = (!empty($option['label']) ? $option['label'] : $value);
                                                                        $selected = $this->set_field_selected('is_portable_fire_extinguishers_photo_attached_id',$value, "");
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
                                                                <label class="control-label" for="upload_portable_fire_extinguishers_photo">Upload Portable Fire Extinguishers Photo <span class="text-danger">*</span></label>
                                                                <div id="ctrl-upload_portable_fire_extinguishers_photo-holder" class=""> 
                                                                    <div class="dropzone required" input="#ctrl-upload_portable_fire_extinguishers_photo" fieldname="upload_portable_fire_extinguishers_photo"    data-multiple="true" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.gif,.jpeg" filesize="3" maximum="5">
                                                                        <input name="upload_portable_fire_extinguishers_photo" id="ctrl-upload_portable_fire_extinguishers_photo" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_portable_fire_extinguishers_photo',""); ?>" type="text"  />
                                                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                            <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group ">
                                                                    <label class="control-label" for="sand_buckets">Sand Buckets <span class="text-danger">*</span></label>
                                                                    <div id="ctrl-sand_buckets-holder" class=""> 
                                                                        <input id="ctrl-sand_buckets"  value="<?php  echo $this->set_field_value('sand_buckets',""); ?>" type="text" placeholder="Enter Sand Buckets"  required="" name="sand_buckets"  class="form-control " />
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group ">
                                                                        <label class="control-label" for="is_sand_buckets_photo_attached_id">Is Sand Buckets Photo Attached Id <span class="text-danger">*</span></label>
                                                                        <div id="ctrl-is_sand_buckets_photo_attached_id-holder" class=""> 
                                                                            <select required=""  id="ctrl-is_sand_buckets_photo_attached_id" name="is_sand_buckets_photo_attached_id"  placeholder="Select a value ..."    class="custom-select" >
                                                                                <option value="">Select a value ...</option>
                                                                                <?php 
                                                                                $is_sand_buckets_photo_attached_id_options = $comp_model -> architecture_oc_noc_refuge_and_other_details_fourth_is_sand_buckets_photo_attached_id_option_list();
                                                                                if(!empty($is_sand_buckets_photo_attached_id_options)){
                                                                                foreach($is_sand_buckets_photo_attached_id_options as $option){
                                                                                $value = (!empty($option['value']) ? $option['value'] : null);
                                                                                $label = (!empty($option['label']) ? $option['label'] : $value);
                                                                                $selected = $this->set_field_selected('is_sand_buckets_photo_attached_id',$value, "");
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
                                                                        <label class="control-label" for="upload_sand_buckets_photo">Upload Sand Buckets Photo <span class="text-danger">*</span></label>
                                                                        <div id="ctrl-upload_sand_buckets_photo-holder" class=""> 
                                                                            <div class="dropzone required" input="#ctrl-upload_sand_buckets_photo" fieldname="upload_sand_buckets_photo"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.gif,.jpeg" filesize="3" maximum="1">
                                                                                <input name="upload_sand_buckets_photo" id="ctrl-upload_sand_buckets_photo" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_sand_buckets_photo',""); ?>" type="text"  />
                                                                                    <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                    <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group ">
                                                                            <label class="control-label" for="fire_escape_chute">Fire Escape Chute <span class="text-danger">*</span></label>
                                                                            <div id="ctrl-fire_escape_chute-holder" class=""> 
                                                                                <input id="ctrl-fire_escape_chute"  value="<?php  echo $this->set_field_value('fire_escape_chute',""); ?>" type="text" placeholder="Enter Fire Escape Chute"  required="" name="fire_escape_chute"  class="form-control " />
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group ">
                                                                                <label class="control-label" for="is_fire_escape_chute_photo_attached_id">Is Fire Escape Chute Photo Attached Id <span class="text-danger">*</span></label>
                                                                                <div id="ctrl-is_fire_escape_chute_photo_attached_id-holder" class=""> 
                                                                                    <select required=""  id="ctrl-is_fire_escape_chute_photo_attached_id" name="is_fire_escape_chute_photo_attached_id"  placeholder="Select a value ..."    class="custom-select" >
                                                                                        <option value="">Select a value ...</option>
                                                                                        <?php 
                                                                                        $is_fire_escape_chute_photo_attached_id_options = $comp_model -> architecture_oc_noc_refuge_and_other_details_fourth_is_fire_escape_chute_photo_attached_id_option_list();
                                                                                        if(!empty($is_fire_escape_chute_photo_attached_id_options)){
                                                                                        foreach($is_fire_escape_chute_photo_attached_id_options as $option){
                                                                                        $value = (!empty($option['value']) ? $option['value'] : null);
                                                                                        $label = (!empty($option['label']) ? $option['label'] : $value);
                                                                                        $selected = $this->set_field_selected('is_fire_escape_chute_photo_attached_id',$value, "");
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
                                                                                <label class="control-label" for="upload_escape_chute_photo">Upload Escape Chute Photo <span class="text-danger">*</span></label>
                                                                                <div id="ctrl-upload_escape_chute_photo-holder" class=""> 
                                                                                    <div class="dropzone required" input="#ctrl-upload_escape_chute_photo" fieldname="upload_escape_chute_photo"    data-multiple="true" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.gif,.jpeg" filesize="3" maximum="5">
                                                                                        <input name="upload_escape_chute_photo" id="ctrl-upload_escape_chute_photo" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_escape_chute_photo',""); ?>" type="text"  />
                                                                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                            <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group ">
                                                                                    <label class="control-label" for="external_evaculation_system">External Evaculation System <span class="text-danger">*</span></label>
                                                                                    <div id="ctrl-external_evaculation_system-holder" class=""> 
                                                                                        <input id="ctrl-external_evaculation_system"  value="<?php  echo $this->set_field_value('external_evaculation_system',""); ?>" type="text" placeholder="Enter External Evaculation System"  required="" name="external_evaculation_system"  class="form-control " />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group ">
                                                                                        <label class="control-label" for="is_external_evaculation_system_photo_attached_id">Is External Evaculation System Photo Attached Id <span class="text-danger">*</span></label>
                                                                                        <div id="ctrl-is_external_evaculation_system_photo_attached_id-holder" class=""> 
                                                                                            <select required=""  id="ctrl-is_external_evaculation_system_photo_attached_id" name="is_external_evaculation_system_photo_attached_id"  placeholder="Select a value ..."    class="custom-select" >
                                                                                                <option value="">Select a value ...</option>
                                                                                                <?php 
                                                                                                $is_external_evaculation_system_photo_attached_id_options = $comp_model -> architecture_oc_noc_refuge_and_other_details_fourth_is_external_evaculation_system_photo_attached_id_option_list();
                                                                                                if(!empty($is_external_evaculation_system_photo_attached_id_options)){
                                                                                                foreach($is_external_evaculation_system_photo_attached_id_options as $option){
                                                                                                $value = (!empty($option['value']) ? $option['value'] : null);
                                                                                                $label = (!empty($option['label']) ? $option['label'] : $value);
                                                                                                $selected = $this->set_field_selected('is_external_evaculation_system_photo_attached_id',$value, "");
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
                                                                                        <label class="control-label" for="upload_external_evaculation_system_photo">Upload External Evaculation System Photo <span class="text-danger">*</span></label>
                                                                                        <div id="ctrl-upload_external_evaculation_system_photo-holder" class=""> 
                                                                                            <div class="dropzone required" input="#ctrl-upload_external_evaculation_system_photo" fieldname="upload_external_evaculation_system_photo"    data-multiple="true" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.gif,.jpeg" filesize="3" maximum="5">
                                                                                                <input name="upload_external_evaculation_system_photo" id="ctrl-upload_external_evaculation_system_photo" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_external_evaculation_system_photo',""); ?>" type="text"  />
                                                                                                    <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                    <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group ">
                                                                                            <label class="control-label" for="lowering_device">Lowering Device <span class="text-danger">*</span></label>
                                                                                            <div id="ctrl-lowering_device-holder" class=""> 
                                                                                                <input id="ctrl-lowering_device"  value="<?php  echo $this->set_field_value('lowering_device',""); ?>" type="text" placeholder="Enter Lowering Device"  required="" name="lowering_device"  class="form-control " />
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group ">
                                                                                                <label class="control-label" for="is_lowering_device_photo_attached_id">Is Lowering Device Photo Attached Id <span class="text-danger">*</span></label>
                                                                                                <div id="ctrl-is_lowering_device_photo_attached_id-holder" class=""> 
                                                                                                    <select required=""  id="ctrl-is_lowering_device_photo_attached_id" name="is_lowering_device_photo_attached_id"  placeholder="Select a value ..."    class="custom-select" >
                                                                                                        <option value="">Select a value ...</option>
                                                                                                        <?php 
                                                                                                        $is_lowering_device_photo_attached_id_options = $comp_model -> architecture_oc_noc_refuge_and_other_details_fourth_is_lowering_device_photo_attached_id_option_list();
                                                                                                        if(!empty($is_lowering_device_photo_attached_id_options)){
                                                                                                        foreach($is_lowering_device_photo_attached_id_options as $option){
                                                                                                        $value = (!empty($option['value']) ? $option['value'] : null);
                                                                                                        $label = (!empty($option['label']) ? $option['label'] : $value);
                                                                                                        $selected = $this->set_field_selected('is_lowering_device_photo_attached_id',$value, "");
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
                                                                                                <label class="control-label" for="upload_lowering_device_photo">Upload Lowering Device Photo <span class="text-danger">*</span></label>
                                                                                                <div id="ctrl-upload_lowering_device_photo-holder" class=""> 
                                                                                                    <div class="dropzone required" input="#ctrl-upload_lowering_device_photo" fieldname="upload_lowering_device_photo"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.gif,.jpeg" filesize="3" maximum="1">
                                                                                                        <input name="upload_lowering_device_photo" id="ctrl-upload_lowering_device_photo" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_lowering_device_photo',""); ?>" type="text"  />
                                                                                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                            <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="form-group ">
                                                                                                    <label class="control-label" for="fire_brigade_inlet">Fire Brigade Inlet <span class="text-danger">*</span></label>
                                                                                                    <div id="ctrl-fire_brigade_inlet-holder" class=""> 
                                                                                                        <input id="ctrl-fire_brigade_inlet"  value="<?php  echo $this->set_field_value('fire_brigade_inlet',""); ?>" type="text" placeholder="Enter Fire Brigade Inlet"  required="" name="fire_brigade_inlet"  class="form-control " />
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form-group ">
                                                                                                        <label class="control-label" for="is_fire_brigade_inlet_photo_attached_id">Is Fire Brigade Inlet Photo Attached Id <span class="text-danger">*</span></label>
                                                                                                        <div id="ctrl-is_fire_brigade_inlet_photo_attached_id-holder" class=""> 
                                                                                                            <select required=""  id="ctrl-is_fire_brigade_inlet_photo_attached_id" name="is_fire_brigade_inlet_photo_attached_id"  placeholder="Select a value ..."    class="custom-select" >
                                                                                                                <option value="">Select a value ...</option>
                                                                                                                <?php 
                                                                                                                $is_fire_brigade_inlet_photo_attached_id_options = $comp_model -> architecture_oc_noc_refuge_and_other_details_fourth_is_fire_brigade_inlet_photo_attached_id_option_list();
                                                                                                                if(!empty($is_fire_brigade_inlet_photo_attached_id_options)){
                                                                                                                foreach($is_fire_brigade_inlet_photo_attached_id_options as $option){
                                                                                                                $value = (!empty($option['value']) ? $option['value'] : null);
                                                                                                                $label = (!empty($option['label']) ? $option['label'] : $value);
                                                                                                                $selected = $this->set_field_selected('is_fire_brigade_inlet_photo_attached_id',$value, "");
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
                                                                                                        <label class="control-label" for="upload_fire_brigade_inlet_photo">Upload Fire Brigade Inlet Photo <span class="text-danger">*</span></label>
                                                                                                        <div id="ctrl-upload_fire_brigade_inlet_photo-holder" class=""> 
                                                                                                            <div class="dropzone required" input="#ctrl-upload_fire_brigade_inlet_photo" fieldname="upload_fire_brigade_inlet_photo"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.gif,.jpeg" filesize="3" maximum="1">
                                                                                                                <input name="upload_fire_brigade_inlet_photo" id="ctrl-upload_fire_brigade_inlet_photo" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_fire_brigade_inlet_photo',""); ?>" type="text"  />
                                                                                                                    <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                    <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="form-group ">
                                                                                                            <label class="control-label" for="glass_facade_compliance">Glass Facade Compliance <span class="text-danger">*</span></label>
                                                                                                            <div id="ctrl-glass_facade_compliance-holder" class=""> 
                                                                                                                <input id="ctrl-glass_facade_compliance"  value="<?php  echo $this->set_field_value('glass_facade_compliance',""); ?>" type="text" placeholder="Enter Glass Facade Compliance"  required="" name="glass_facade_compliance"  class="form-control " />
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="form-group ">
                                                                                                                <label class="control-label" for="is_glass_facade_compliance_photo_attached_id">Is Glass Facade Compliance Photo Attached Id <span class="text-danger">*</span></label>
                                                                                                                <div id="ctrl-is_glass_facade_compliance_photo_attached_id-holder" class=""> 
                                                                                                                    <select required=""  id="ctrl-is_glass_facade_compliance_photo_attached_id" name="is_glass_facade_compliance_photo_attached_id"  placeholder="Select a value ..."    class="custom-select" >
                                                                                                                        <option value="">Select a value ...</option>
                                                                                                                        <?php 
                                                                                                                        $is_glass_facade_compliance_photo_attached_id_options = $comp_model -> architecture_oc_noc_refuge_and_other_details_fourth_is_glass_facade_compliance_photo_attached_id_option_list();
                                                                                                                        if(!empty($is_glass_facade_compliance_photo_attached_id_options)){
                                                                                                                        foreach($is_glass_facade_compliance_photo_attached_id_options as $option){
                                                                                                                        $value = (!empty($option['value']) ? $option['value'] : null);
                                                                                                                        $label = (!empty($option['label']) ? $option['label'] : $value);
                                                                                                                        $selected = $this->set_field_selected('is_glass_facade_compliance_photo_attached_id',$value, "");
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
                                                                                                                <label class="control-label" for="upload_glass_facade_compliance_photo">Upload Glass Facade Compliance Photo <span class="text-danger">*</span></label>
                                                                                                                <div id="ctrl-upload_glass_facade_compliance_photo-holder" class=""> 
                                                                                                                    <div class="dropzone required" input="#ctrl-upload_glass_facade_compliance_photo" fieldname="upload_glass_facade_compliance_photo"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.gif,.jpeg" filesize="3" maximum="1">
                                                                                                                        <input name="upload_glass_facade_compliance_photo" id="ctrl-upload_glass_facade_compliance_photo" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_glass_facade_compliance_photo',""); ?>" type="text"  />
                                                                                                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                            <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="form-group ">
                                                                                                                    <label class="control-label" for="car_parking_tower">Car Parking Tower <span class="text-danger">*</span></label>
                                                                                                                    <div id="ctrl-car_parking_tower-holder" class=""> 
                                                                                                                        <input id="ctrl-car_parking_tower"  value="<?php  echo $this->set_field_value('car_parking_tower',""); ?>" type="text" placeholder="Enter Car Parking Tower"  required="" name="car_parking_tower"  class="form-control " />
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <div class="form-group ">
                                                                                                                        <label class="control-label" for="is_car_parking_tower_photo_attached_id">Is Car Parking Tower Photo Attached Id <span class="text-danger">*</span></label>
                                                                                                                        <div id="ctrl-is_car_parking_tower_photo_attached_id-holder" class=""> 
                                                                                                                            <select required=""  id="ctrl-is_car_parking_tower_photo_attached_id" name="is_car_parking_tower_photo_attached_id"  placeholder="Select a value ..."    class="custom-select" >
                                                                                                                                <option value="">Select a value ...</option>
                                                                                                                                <?php 
                                                                                                                                $is_car_parking_tower_photo_attached_id_options = $comp_model -> architecture_oc_noc_refuge_and_other_details_fourth_is_car_parking_tower_photo_attached_id_option_list();
                                                                                                                                if(!empty($is_car_parking_tower_photo_attached_id_options)){
                                                                                                                                foreach($is_car_parking_tower_photo_attached_id_options as $option){
                                                                                                                                $value = (!empty($option['value']) ? $option['value'] : null);
                                                                                                                                $label = (!empty($option['label']) ? $option['label'] : $value);
                                                                                                                                $selected = $this->set_field_selected('is_car_parking_tower_photo_attached_id',$value, "");
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
                                                                                                                        <label class="control-label" for="upload_car_parking_tower_photo">Upload Car Parking Tower Photo <span class="text-danger">*</span></label>
                                                                                                                        <div id="ctrl-upload_car_parking_tower_photo-holder" class=""> 
                                                                                                                            <div class="dropzone required" input="#ctrl-upload_car_parking_tower_photo" fieldname="upload_car_parking_tower_photo"    data-multiple="true" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.gif,.jpeg" filesize="3" maximum="5">
                                                                                                                                <input name="upload_car_parking_tower_photo" id="ctrl-upload_car_parking_tower_photo" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_car_parking_tower_photo',""); ?>" type="text"  />
                                                                                                                                    <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                                    <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="form-group ">
                                                                                                                            <label class="control-label" for="location_of_electric_sub_station">Location Of Electric Sub Station <span class="text-danger">*</span></label>
                                                                                                                            <div id="ctrl-location_of_electric_sub_station-holder" class=""> 
                                                                                                                                <input id="ctrl-location_of_electric_sub_station"  value="<?php  echo $this->set_field_value('location_of_electric_sub_station',""); ?>" type="text" placeholder="Enter Location Of Electric Sub Station"  required="" name="location_of_electric_sub_station"  class="form-control " />
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <div class="form-group ">
                                                                                                                                <label class="control-label" for="is_location_of_electric_sub_station_photo_attached_id">Is Location Of Electric Sub Station Photo Attached Id <span class="text-danger">*</span></label>
                                                                                                                                <div id="ctrl-is_location_of_electric_sub_station_photo_attached_id-holder" class=""> 
                                                                                                                                    <select required=""  id="ctrl-is_location_of_electric_sub_station_photo_attached_id" name="is_location_of_electric_sub_station_photo_attached_id"  placeholder="Select a value ..."    class="custom-select" >
                                                                                                                                        <option value="">Select a value ...</option>
                                                                                                                                        <?php 
                                                                                                                                        $is_location_of_electric_sub_station_photo_attached_id_options = $comp_model -> architecture_oc_noc_refuge_and_other_details_fourth_is_location_of_electric_sub_station_photo_attached_id_option_list();
                                                                                                                                        if(!empty($is_location_of_electric_sub_station_photo_attached_id_options)){
                                                                                                                                        foreach($is_location_of_electric_sub_station_photo_attached_id_options as $option){
                                                                                                                                        $value = (!empty($option['value']) ? $option['value'] : null);
                                                                                                                                        $label = (!empty($option['label']) ? $option['label'] : $value);
                                                                                                                                        $selected = $this->set_field_selected('is_location_of_electric_sub_station_photo_attached_id',$value, "");
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
                                                                                                                                <label class="control-label" for="upload_location_of_electric_sub_station_photo">Upload Location Of Electric Sub Station Photo <span class="text-danger">*</span></label>
                                                                                                                                <div id="ctrl-upload_location_of_electric_sub_station_photo-holder" class=""> 
                                                                                                                                    <div class="dropzone required" input="#ctrl-upload_location_of_electric_sub_station_photo" fieldname="upload_location_of_electric_sub_station_photo"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.gif,.jpeg" filesize="3" maximum="1">
                                                                                                                                        <input name="upload_location_of_electric_sub_station_photo" id="ctrl-upload_location_of_electric_sub_station_photo" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_location_of_electric_sub_station_photo',""); ?>" type="text"  />
                                                                                                                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                                            <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <div class="form-group ">
                                                                                                                                    <label class="control-label" for="location_of_dg_set">Location Of Dg Set <span class="text-danger">*</span></label>
                                                                                                                                    <div id="ctrl-location_of_dg_set-holder" class=""> 
                                                                                                                                        <input id="ctrl-location_of_dg_set"  value="<?php  echo $this->set_field_value('location_of_dg_set',""); ?>" type="text" placeholder="Enter Location Of Dg Set"  required="" name="location_of_dg_set"  class="form-control " />
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    <div class="form-group ">
                                                                                                                                        <label class="control-label" for="is_location_of_dg_set_photo_attached_id">Is Location Of Dg Set Photo Attached Id <span class="text-danger">*</span></label>
                                                                                                                                        <div id="ctrl-is_location_of_dg_set_photo_attached_id-holder" class=""> 
                                                                                                                                            <select required=""  id="ctrl-is_location_of_dg_set_photo_attached_id" name="is_location_of_dg_set_photo_attached_id"  placeholder="Select a value ..."    class="custom-select" >
                                                                                                                                                <option value="">Select a value ...</option>
                                                                                                                                                <?php 
                                                                                                                                                $is_location_of_dg_set_photo_attached_id_options = $comp_model -> architecture_oc_noc_refuge_and_other_details_fourth_is_location_of_dg_set_photo_attached_id_option_list();
                                                                                                                                                if(!empty($is_location_of_dg_set_photo_attached_id_options)){
                                                                                                                                                foreach($is_location_of_dg_set_photo_attached_id_options as $option){
                                                                                                                                                $value = (!empty($option['value']) ? $option['value'] : null);
                                                                                                                                                $label = (!empty($option['label']) ? $option['label'] : $value);
                                                                                                                                                $selected = $this->set_field_selected('is_location_of_dg_set_photo_attached_id',$value, "");
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
                                                                                                                                        <label class="control-label" for="upload_location_of_dg_set_photo">Upload Location Of Dg Set Photo <span class="text-danger">*</span></label>
                                                                                                                                        <div id="ctrl-upload_location_of_dg_set_photo-holder" class=""> 
                                                                                                                                            <div class="dropzone required" input="#ctrl-upload_location_of_dg_set_photo" fieldname="upload_location_of_dg_set_photo"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.gif,.jpeg" filesize="3" maximum="1">
                                                                                                                                                <input name="upload_location_of_dg_set_photo" id="ctrl-upload_location_of_dg_set_photo" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_location_of_dg_set_photo',""); ?>" type="text"  />
                                                                                                                                                    <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                                                    <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                        <div class="form-group ">
                                                                                                                                            <label class="control-label" for="other_remarks">Other Remarks <span class="text-danger">*</span></label>
                                                                                                                                            <div id="ctrl-other_remarks-holder" class=""> 
                                                                                                                                                <input id="ctrl-other_remarks"  value="<?php  echo $this->set_field_value('other_remarks',""); ?>" type="number" placeholder="Enter Other Remarks" step="1"  required="" name="other_remarks"  class="form-control " />
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                            <div class="form-group ">
                                                                                                                                                <label class="control-label" for="is_any_other_photo_attached_id">Is Any Other Photo Attached Id <span class="text-danger">*</span></label>
                                                                                                                                                <div id="ctrl-is_any_other_photo_attached_id-holder" class=""> 
                                                                                                                                                    <select required=""  id="ctrl-is_any_other_photo_attached_id" name="is_any_other_photo_attached_id"  placeholder="Select a value ..."    class="custom-select" >
                                                                                                                                                        <option value="">Select a value ...</option>
                                                                                                                                                        <?php 
                                                                                                                                                        $is_any_other_photo_attached_id_options = $comp_model -> architecture_oc_noc_refuge_and_other_details_fourth_is_any_other_photo_attached_id_option_list();
                                                                                                                                                        if(!empty($is_any_other_photo_attached_id_options)){
                                                                                                                                                        foreach($is_any_other_photo_attached_id_options as $option){
                                                                                                                                                        $value = (!empty($option['value']) ? $option['value'] : null);
                                                                                                                                                        $label = (!empty($option['label']) ? $option['label'] : $value);
                                                                                                                                                        $selected = $this->set_field_selected('is_any_other_photo_attached_id',$value, "");
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
                                                                                                                                                <label class="control-label" for="upload_other_photos">Upload Other Photos <span class="text-danger">*</span></label>
                                                                                                                                                <div id="ctrl-upload_other_photos-holder" class=""> 
                                                                                                                                                    <div class="dropzone required" input="#ctrl-upload_other_photos" fieldname="upload_other_photos"    data-multiple="true" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.gif,.jpeg" filesize="3" maximum="5">
                                                                                                                                                        <input name="upload_other_photos" id="ctrl-upload_other_photos" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_other_photos',""); ?>" type="text"  />
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
