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
                    <h4 class="record-title">Add New Architecture Oc Noc Fire Fighting Arrangements Third</h4>
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
                        <form id="architecture_oc_noc_fire_fighting_arrangements_third-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-vertical needs-validation" action="<?php print_link("architecture_oc_noc_fire_fighting_arrangements_third/add?csrf_token=$csrf_token") ?>" method="post">
                            <div>
                                <div class="form-group ">
                                    <label class="control-label" for="ug_water_tank_for_fire_as_per_noc">Ug Water Tank For Fire As Per Noc <span class="text-danger">*</span></label>
                                    <div id="ctrl-ug_water_tank_for_fire_as_per_noc-holder" class=""> 
                                        <input id="ctrl-ug_water_tank_for_fire_as_per_noc"  value="<?php  echo $this->set_field_value('ug_water_tank_for_fire_as_per_noc',""); ?>" type="text" placeholder="Enter Ug Water Tank For Fire As Per Noc"  required="" name="ug_water_tank_for_fire_as_per_noc"  class="form-control " />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label class="control-label" for="is_ug_water_tank_photo_attached_id">Is Ug Water Tank Photo Attached Id <span class="text-danger">*</span></label>
                                        <div id="ctrl-is_ug_water_tank_photo_attached_id-holder" class=""> 
                                            <select required=""  id="ctrl-is_ug_water_tank_photo_attached_id" name="is_ug_water_tank_photo_attached_id"  placeholder="Select a value ..."    class="custom-select" >
                                                <option value="">Select a value ...</option>
                                                <?php 
                                                $is_ug_water_tank_photo_attached_id_options = $comp_model -> architecture_oc_noc_fire_fighting_arrangements_third_is_ug_water_tank_photo_attached_id_option_list();
                                                if(!empty($is_ug_water_tank_photo_attached_id_options)){
                                                foreach($is_ug_water_tank_photo_attached_id_options as $option){
                                                $value = (!empty($option['value']) ? $option['value'] : null);
                                                $label = (!empty($option['label']) ? $option['label'] : $value);
                                                $selected = $this->set_field_selected('is_ug_water_tank_photo_attached_id',$value, "");
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
                                        <label class="control-label" for="upload_ug_water_tank_photo">Upload Ug Water Tank Photo <span class="text-danger">*</span></label>
                                        <div id="ctrl-upload_ug_water_tank_photo-holder" class=""> 
                                            <div class="dropzone required" input="#ctrl-upload_ug_water_tank_photo" fieldname="upload_ug_water_tank_photo"    data-multiple="true" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.gif,.jpeg" filesize="3" maximum="5">
                                                <input name="upload_ug_water_tank_photo" id="ctrl-upload_ug_water_tank_photo" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_ug_water_tank_photo',""); ?>" type="text"  />
                                                    <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                    <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label class="control-label" for="overhead_water_storage_as_per_noc">Overhead Water Storage As Per Noc <span class="text-danger">*</span></label>
                                            <div id="ctrl-overhead_water_storage_as_per_noc-holder" class=""> 
                                                <input id="ctrl-overhead_water_storage_as_per_noc"  value="<?php  echo $this->set_field_value('overhead_water_storage_as_per_noc',""); ?>" type="text" placeholder="Enter Overhead Water Storage As Per Noc"  required="" name="overhead_water_storage_as_per_noc"  class="form-control " />
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <label class="control-label" for="is_overhead_water_storage_as_per_noc_photo_attached_id">Is Overhead Water Storage As Per Noc Photo Attached Id <span class="text-danger">*</span></label>
                                                <div id="ctrl-is_overhead_water_storage_as_per_noc_photo_attached_id-holder" class=""> 
                                                    <select required=""  id="ctrl-is_overhead_water_storage_as_per_noc_photo_attached_id" name="is_overhead_water_storage_as_per_noc_photo_attached_id"  placeholder="Select a value ..."    class="custom-select" >
                                                        <option value="">Select a value ...</option>
                                                        <?php 
                                                        $is_overhead_water_storage_as_per_noc_photo_attached_id_options = $comp_model -> architecture_oc_noc_fire_fighting_arrangements_third_is_overhead_water_storage_as_per_noc_photo_attached_id_option_list();
                                                        if(!empty($is_overhead_water_storage_as_per_noc_photo_attached_id_options)){
                                                        foreach($is_overhead_water_storage_as_per_noc_photo_attached_id_options as $option){
                                                        $value = (!empty($option['value']) ? $option['value'] : null);
                                                        $label = (!empty($option['label']) ? $option['label'] : $value);
                                                        $selected = $this->set_field_selected('is_overhead_water_storage_as_per_noc_photo_attached_id',$value, "");
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
                                                <label class="control-label" for="upload_overhead_water_storage_photo">Upload Overhead Water Storage Photo <span class="text-danger">*</span></label>
                                                <div id="ctrl-upload_overhead_water_storage_photo-holder" class=""> 
                                                    <div class="dropzone required" input="#ctrl-upload_overhead_water_storage_photo" fieldname="upload_overhead_water_storage_photo"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.gif,.jpeg" filesize="3" maximum="5">
                                                        <input name="upload_overhead_water_storage_photo" id="ctrl-upload_overhead_water_storage_photo" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_overhead_water_storage_photo',""); ?>" type="text"  />
                                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                            <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label class="control-label" for="wet_riser_or_down_comer">Wet Riser Or Down Comer <span class="text-danger">*</span></label>
                                                    <div id="ctrl-wet_riser_or_down_comer-holder" class=""> 
                                                        <input id="ctrl-wet_riser_or_down_comer"  value="<?php  echo $this->set_field_value('wet_riser_or_down_comer',""); ?>" type="text" placeholder="Enter Wet Riser Or Down Comer"  required="" name="wet_riser_or_down_comer"  class="form-control " />
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <label class="control-label" for="is_wet_riser_or_down_comer_photo_attached_id">Is Wet Riser Or Down Comer Photo Attached Id <span class="text-danger">*</span></label>
                                                        <div id="ctrl-is_wet_riser_or_down_comer_photo_attached_id-holder" class=""> 
                                                            <select required=""  id="ctrl-is_wet_riser_or_down_comer_photo_attached_id" name="is_wet_riser_or_down_comer_photo_attached_id"  placeholder="Select a value ..."    class="custom-select" >
                                                                <option value="">Select a value ...</option>
                                                                <?php 
                                                                $is_wet_riser_or_down_comer_photo_attached_id_options = $comp_model -> architecture_oc_noc_fire_fighting_arrangements_third_is_wet_riser_or_down_comer_photo_attached_id_option_list();
                                                                if(!empty($is_wet_riser_or_down_comer_photo_attached_id_options)){
                                                                foreach($is_wet_riser_or_down_comer_photo_attached_id_options as $option){
                                                                $value = (!empty($option['value']) ? $option['value'] : null);
                                                                $label = (!empty($option['label']) ? $option['label'] : $value);
                                                                $selected = $this->set_field_selected('is_wet_riser_or_down_comer_photo_attached_id',$value, "");
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
                                                        <label class="control-label" for="upload_wet_riser_or_down_comer_photo">Upload Wet Riser Or Down Comer Photo <span class="text-danger">*</span></label>
                                                        <div id="ctrl-upload_wet_riser_or_down_comer_photo-holder" class=""> 
                                                            <div class="dropzone required" input="#ctrl-upload_wet_riser_or_down_comer_photo" fieldname="upload_wet_riser_or_down_comer_photo"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.gif,.jpeg" filesize="3" maximum="5">
                                                                <input name="upload_wet_riser_or_down_comer_photo" id="ctrl-upload_wet_riser_or_down_comer_photo" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_wet_riser_or_down_comer_photo',""); ?>" type="text"  />
                                                                    <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                    <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group ">
                                                            <label class="control-label" for="automatic_sprinklers">Automatic Sprinklers <span class="text-danger">*</span></label>
                                                            <div id="ctrl-automatic_sprinklers-holder" class=""> 
                                                                <input id="ctrl-automatic_sprinklers"  value="<?php  echo $this->set_field_value('automatic_sprinklers',""); ?>" type="text" placeholder="Enter Automatic Sprinklers"  required="" name="automatic_sprinklers"  class="form-control " />
                                                                </div>
                                                            </div>
                                                            <div class="form-group ">
                                                                <label class="control-label" for="is_automatic_sprinklers_photo_attached_id">Is Automatic Sprinklers Photo Attached Id <span class="text-danger">*</span></label>
                                                                <div id="ctrl-is_automatic_sprinklers_photo_attached_id-holder" class=""> 
                                                                    <select required=""  id="ctrl-is_automatic_sprinklers_photo_attached_id" name="is_automatic_sprinklers_photo_attached_id"  placeholder="Select a value ..."    class="custom-select" >
                                                                        <option value="">Select a value ...</option>
                                                                        <?php 
                                                                        $is_automatic_sprinklers_photo_attached_id_options = $comp_model -> architecture_oc_noc_fire_fighting_arrangements_third_is_automatic_sprinklers_photo_attached_id_option_list();
                                                                        if(!empty($is_automatic_sprinklers_photo_attached_id_options)){
                                                                        foreach($is_automatic_sprinklers_photo_attached_id_options as $option){
                                                                        $value = (!empty($option['value']) ? $option['value'] : null);
                                                                        $label = (!empty($option['label']) ? $option['label'] : $value);
                                                                        $selected = $this->set_field_selected('is_automatic_sprinklers_photo_attached_id',$value, "");
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
                                                                <label class="control-label" for="upload_automatic_sprinklers_photo">Upload Automatic Sprinklers Photo <span class="text-danger">*</span></label>
                                                                <div id="ctrl-upload_automatic_sprinklers_photo-holder" class=""> 
                                                                    <div class="dropzone required" input="#ctrl-upload_automatic_sprinklers_photo" fieldname="upload_automatic_sprinklers_photo"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.gif,.jpeg" filesize="3" maximum="5">
                                                                        <input name="upload_automatic_sprinklers_photo" id="ctrl-upload_automatic_sprinklers_photo" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_automatic_sprinklers_photo',""); ?>" type="text"  />
                                                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                            <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group ">
                                                                    <label class="control-label" for="drenchers">Drenchers <span class="text-danger">*</span></label>
                                                                    <div id="ctrl-drenchers-holder" class=""> 
                                                                        <input id="ctrl-drenchers"  value="<?php  echo $this->set_field_value('drenchers',""); ?>" type="text" placeholder="Enter Drenchers"  required="" name="drenchers"  class="form-control " />
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group ">
                                                                        <label class="control-label" for="is_drenchers_photo_attached_id">Is Drenchers Photo Attached Id <span class="text-danger">*</span></label>
                                                                        <div id="ctrl-is_drenchers_photo_attached_id-holder" class=""> 
                                                                            <select required=""  id="ctrl-is_drenchers_photo_attached_id" name="is_drenchers_photo_attached_id"  placeholder="Select a value ..."    class="custom-select" >
                                                                                <option value="">Select a value ...</option>
                                                                                <?php 
                                                                                $is_drenchers_photo_attached_id_options = $comp_model -> architecture_oc_noc_fire_fighting_arrangements_third_is_drenchers_photo_attached_id_option_list();
                                                                                if(!empty($is_drenchers_photo_attached_id_options)){
                                                                                foreach($is_drenchers_photo_attached_id_options as $option){
                                                                                $value = (!empty($option['value']) ? $option['value'] : null);
                                                                                $label = (!empty($option['label']) ? $option['label'] : $value);
                                                                                $selected = $this->set_field_selected('is_drenchers_photo_attached_id',$value, "");
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
                                                                        <label class="control-label" for="upload_drenchers_photo">Upload Drenchers Photo <span class="text-danger">*</span></label>
                                                                        <div id="ctrl-upload_drenchers_photo-holder" class=""> 
                                                                            <div class="dropzone required" input="#ctrl-upload_drenchers_photo" fieldname="upload_drenchers_photo"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.gif,.jpeg" filesize="3" maximum="5">
                                                                                <input name="upload_drenchers_photo" id="ctrl-upload_drenchers_photo" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_drenchers_photo',""); ?>" type="text"  />
                                                                                    <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                    <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group ">
                                                                            <label class="control-label" for="water_spray_projectors">Water Spray Projectors <span class="text-danger">*</span></label>
                                                                            <div id="ctrl-water_spray_projectors-holder" class=""> 
                                                                                <input id="ctrl-water_spray_projectors"  value="<?php  echo $this->set_field_value('water_spray_projectors',""); ?>" type="text" placeholder="Enter Water Spray Projectors"  required="" name="water_spray_projectors"  class="form-control " />
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group ">
                                                                                <label class="control-label" for="is_water_spray_projectors_photo_attached_id">Is Water Spray Projectors Photo Attached Id <span class="text-danger">*</span></label>
                                                                                <div id="ctrl-is_water_spray_projectors_photo_attached_id-holder" class=""> 
                                                                                    <select required=""  id="ctrl-is_water_spray_projectors_photo_attached_id" name="is_water_spray_projectors_photo_attached_id"  placeholder="Select a value ..."    class="custom-select" >
                                                                                        <option value="">Select a value ...</option>
                                                                                        <?php 
                                                                                        $is_water_spray_projectors_photo_attached_id_options = $comp_model -> architecture_oc_noc_fire_fighting_arrangements_third_is_water_spray_projectors_photo_attached_id_option_list();
                                                                                        if(!empty($is_water_spray_projectors_photo_attached_id_options)){
                                                                                        foreach($is_water_spray_projectors_photo_attached_id_options as $option){
                                                                                        $value = (!empty($option['value']) ? $option['value'] : null);
                                                                                        $label = (!empty($option['label']) ? $option['label'] : $value);
                                                                                        $selected = $this->set_field_selected('is_water_spray_projectors_photo_attached_id',$value, "");
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
                                                                                <label class="control-label" for="upload_water_spray_projectors_photo">Upload Water Spray Projectors Photo <span class="text-danger">*</span></label>
                                                                                <div id="ctrl-upload_water_spray_projectors_photo-holder" class=""> 
                                                                                    <div class="dropzone required" input="#ctrl-upload_water_spray_projectors_photo" fieldname="upload_water_spray_projectors_photo"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.gif,.jpeg" filesize="3" maximum="5">
                                                                                        <input name="upload_water_spray_projectors_photo" id="ctrl-upload_water_spray_projectors_photo" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_water_spray_projectors_photo',""); ?>" type="text"  />
                                                                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                            <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group ">
                                                                                    <label class="control-label" for="type_of_fire_pump_and_cerified_capacity">Type Of Fire Pump And Cerified Capacity <span class="text-danger">*</span></label>
                                                                                    <div id="ctrl-type_of_fire_pump_and_cerified_capacity-holder" class=""> 
                                                                                        <input id="ctrl-type_of_fire_pump_and_cerified_capacity"  value="<?php  echo $this->set_field_value('type_of_fire_pump_and_cerified_capacity',""); ?>" type="text" placeholder="Enter Type Of Fire Pump And Cerified Capacity"  required="" name="type_of_fire_pump_and_cerified_capacity"  class="form-control " />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group ">
                                                                                        <label class="control-label" for="is_fire_pump_photo_attached_id">Is Fire Pump Photo Attached Id <span class="text-danger">*</span></label>
                                                                                        <div id="ctrl-is_fire_pump_photo_attached_id-holder" class=""> 
                                                                                            <select required=""  id="ctrl-is_fire_pump_photo_attached_id" name="is_fire_pump_photo_attached_id"  placeholder="Select a value ..."    class="custom-select" >
                                                                                                <option value="">Select a value ...</option>
                                                                                                <?php 
                                                                                                $is_fire_pump_photo_attached_id_options = $comp_model -> architecture_oc_noc_fire_fighting_arrangements_third_is_fire_pump_photo_attached_id_option_list();
                                                                                                if(!empty($is_fire_pump_photo_attached_id_options)){
                                                                                                foreach($is_fire_pump_photo_attached_id_options as $option){
                                                                                                $value = (!empty($option['value']) ? $option['value'] : null);
                                                                                                $label = (!empty($option['label']) ? $option['label'] : $value);
                                                                                                $selected = $this->set_field_selected('is_fire_pump_photo_attached_id',$value, "");
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
                                                                                        <label class="control-label" for="upload_fire_pump_photo">Upload Fire Pump Photo <span class="text-danger">*</span></label>
                                                                                        <div id="ctrl-upload_fire_pump_photo-holder" class=""> 
                                                                                            <div class="dropzone required" input="#ctrl-upload_fire_pump_photo" fieldname="upload_fire_pump_photo"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.gif,.jpeg" filesize="3" maximum="5">
                                                                                                <input name="upload_fire_pump_photo" id="ctrl-upload_fire_pump_photo" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_fire_pump_photo',""); ?>" type="text"  />
                                                                                                    <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                    <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group ">
                                                                                            <label class="control-label" for="disel_driven_pump">Disel Driven Pump <span class="text-danger">*</span></label>
                                                                                            <div id="ctrl-disel_driven_pump-holder" class=""> 
                                                                                                <input id="ctrl-disel_driven_pump"  value="<?php  echo $this->set_field_value('disel_driven_pump',""); ?>" type="text" placeholder="Enter Disel Driven Pump"  required="" name="disel_driven_pump"  class="form-control " />
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group ">
                                                                                                <label class="control-label" for="is_disel_driven_pump_photo_attached_id">Is Disel Driven Pump Photo Attached Id <span class="text-danger">*</span></label>
                                                                                                <div id="ctrl-is_disel_driven_pump_photo_attached_id-holder" class=""> 
                                                                                                    <select required=""  id="ctrl-is_disel_driven_pump_photo_attached_id" name="is_disel_driven_pump_photo_attached_id"  placeholder="Select a value ..."    class="custom-select" >
                                                                                                        <option value="">Select a value ...</option>
                                                                                                        <?php 
                                                                                                        $is_disel_driven_pump_photo_attached_id_options = $comp_model -> architecture_oc_noc_fire_fighting_arrangements_third_is_disel_driven_pump_photo_attached_id_option_list();
                                                                                                        if(!empty($is_disel_driven_pump_photo_attached_id_options)){
                                                                                                        foreach($is_disel_driven_pump_photo_attached_id_options as $option){
                                                                                                        $value = (!empty($option['value']) ? $option['value'] : null);
                                                                                                        $label = (!empty($option['label']) ? $option['label'] : $value);
                                                                                                        $selected = $this->set_field_selected('is_disel_driven_pump_photo_attached_id',$value, "");
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
                                                                                                <label class="control-label" for="upload_disel_driven_pump_photo">Upload Disel Driven Pump Photo <span class="text-danger">*</span></label>
                                                                                                <div id="ctrl-upload_disel_driven_pump_photo-holder" class=""> 
                                                                                                    <div class="dropzone required" input="#ctrl-upload_disel_driven_pump_photo" fieldname="upload_disel_driven_pump_photo"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.gif,.jpeg" filesize="3" maximum="5">
                                                                                                        <input name="upload_disel_driven_pump_photo" id="ctrl-upload_disel_driven_pump_photo" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_disel_driven_pump_photo',""); ?>" type="text"  />
                                                                                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                            <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="form-group ">
                                                                                                    <label class="control-label" for="booster_pump_and_certified_capacity">Booster Pump And Certified Capacity <span class="text-danger">*</span></label>
                                                                                                    <div id="ctrl-booster_pump_and_certified_capacity-holder" class=""> 
                                                                                                        <input id="ctrl-booster_pump_and_certified_capacity"  value="<?php  echo $this->set_field_value('booster_pump_and_certified_capacity',""); ?>" type="text" placeholder="Enter Booster Pump And Certified Capacity"  required="" name="booster_pump_and_certified_capacity"  class="form-control " />
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form-group ">
                                                                                                        <label class="control-label" for="is_booster_pump_and_certified_capacity_photo_attached_id">Is Booster Pump And Certified Capacity Photo Attached Id <span class="text-danger">*</span></label>
                                                                                                        <div id="ctrl-is_booster_pump_and_certified_capacity_photo_attached_id-holder" class=""> 
                                                                                                            <select required=""  id="ctrl-is_booster_pump_and_certified_capacity_photo_attached_id" name="is_booster_pump_and_certified_capacity_photo_attached_id"  placeholder="Select a value ..."    class="custom-select" >
                                                                                                                <option value="">Select a value ...</option>
                                                                                                                <?php 
                                                                                                                $is_booster_pump_and_certified_capacity_photo_attached_id_options = $comp_model -> architecture_oc_noc_fire_fighting_arrangements_third_is_booster_pump_and_certified_capacity_photo_attached_id_option_list();
                                                                                                                if(!empty($is_booster_pump_and_certified_capacity_photo_attached_id_options)){
                                                                                                                foreach($is_booster_pump_and_certified_capacity_photo_attached_id_options as $option){
                                                                                                                $value = (!empty($option['value']) ? $option['value'] : null);
                                                                                                                $label = (!empty($option['label']) ? $option['label'] : $value);
                                                                                                                $selected = $this->set_field_selected('is_booster_pump_and_certified_capacity_photo_attached_id',$value, "");
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
                                                                                                        <label class="control-label" for="upload_booster_pump_and_certified_capacity_photo">Upload Booster Pump And Certified Capacity Photo <span class="text-danger">*</span></label>
                                                                                                        <div id="ctrl-upload_booster_pump_and_certified_capacity_photo-holder" class=""> 
                                                                                                            <div class="dropzone required" input="#ctrl-upload_booster_pump_and_certified_capacity_photo" fieldname="upload_booster_pump_and_certified_capacity_photo"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.gif,.jpeg" filesize="3" maximum="5">
                                                                                                                <input name="upload_booster_pump_and_certified_capacity_photo" id="ctrl-upload_booster_pump_and_certified_capacity_photo" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_booster_pump_and_certified_capacity_photo',""); ?>" type="text"  />
                                                                                                                    <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                    <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="form-group ">
                                                                                                            <label class="control-label" for="standby_pump_and_certified_capacity">Standby Pump And Certified Capacity <span class="text-danger">*</span></label>
                                                                                                            <div id="ctrl-standby_pump_and_certified_capacity-holder" class=""> 
                                                                                                                <input id="ctrl-standby_pump_and_certified_capacity"  value="<?php  echo $this->set_field_value('standby_pump_and_certified_capacity',""); ?>" type="text" placeholder="Enter Standby Pump And Certified Capacity"  required="" name="standby_pump_and_certified_capacity"  class="form-control " />
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="form-group ">
                                                                                                                <label class="control-label" for="is_standby_pump_and_certified_capacity_photo_attached_id">Is Standby Pump And Certified Capacity Photo Attached Id <span class="text-danger">*</span></label>
                                                                                                                <div id="ctrl-is_standby_pump_and_certified_capacity_photo_attached_id-holder" class=""> 
                                                                                                                    <select required=""  id="ctrl-is_standby_pump_and_certified_capacity_photo_attached_id" name="is_standby_pump_and_certified_capacity_photo_attached_id"  placeholder="Select a value ..."    class="custom-select" >
                                                                                                                        <option value="">Select a value ...</option>
                                                                                                                        <?php 
                                                                                                                        $is_standby_pump_and_certified_capacity_photo_attached_id_options = $comp_model -> architecture_oc_noc_fire_fighting_arrangements_third_is_standby_pump_and_certified_capacity_photo_attached_id_option_list();
                                                                                                                        if(!empty($is_standby_pump_and_certified_capacity_photo_attached_id_options)){
                                                                                                                        foreach($is_standby_pump_and_certified_capacity_photo_attached_id_options as $option){
                                                                                                                        $value = (!empty($option['value']) ? $option['value'] : null);
                                                                                                                        $label = (!empty($option['label']) ? $option['label'] : $value);
                                                                                                                        $selected = $this->set_field_selected('is_standby_pump_and_certified_capacity_photo_attached_id',$value, "");
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
                                                                                                                <label class="control-label" for="upload_standby_pump_and_certified_capacity_photo">Upload Standby Pump And Certified Capacity Photo <span class="text-danger">*</span></label>
                                                                                                                <div id="ctrl-upload_standby_pump_and_certified_capacity_photo-holder" class=""> 
                                                                                                                    <div class="dropzone required" input="#ctrl-upload_standby_pump_and_certified_capacity_photo" fieldname="upload_standby_pump_and_certified_capacity_photo"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.gif,.jpeg" filesize="3" maximum="5">
                                                                                                                        <input name="upload_standby_pump_and_certified_capacity_photo" id="ctrl-upload_standby_pump_and_certified_capacity_photo" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_standby_pump_and_certified_capacity_photo',""); ?>" type="text"  />
                                                                                                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                            <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="form-group ">
                                                                                                                    <label class="control-label" for="jockey_pump_and_certified_capacity">Jockey Pump And Certified Capacity <span class="text-danger">*</span></label>
                                                                                                                    <div id="ctrl-jockey_pump_and_certified_capacity-holder" class=""> 
                                                                                                                        <input id="ctrl-jockey_pump_and_certified_capacity"  value="<?php  echo $this->set_field_value('jockey_pump_and_certified_capacity',""); ?>" type="text" placeholder="Enter Jockey Pump And Certified Capacity"  required="" name="jockey_pump_and_certified_capacity"  class="form-control " />
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <div class="form-group ">
                                                                                                                        <label class="control-label" for="is_jockey_pump_and_certified_capacity_photo_attached_id">Is Jockey Pump And Certified Capacity Photo Attached Id <span class="text-danger">*</span></label>
                                                                                                                        <div id="ctrl-is_jockey_pump_and_certified_capacity_photo_attached_id-holder" class=""> 
                                                                                                                            <select required=""  id="ctrl-is_jockey_pump_and_certified_capacity_photo_attached_id" name="is_jockey_pump_and_certified_capacity_photo_attached_id"  placeholder="Select a value ..."    class="custom-select" >
                                                                                                                                <option value="">Select a value ...</option>
                                                                                                                                <?php 
                                                                                                                                $is_jockey_pump_and_certified_capacity_photo_attached_id_options = $comp_model -> architecture_oc_noc_fire_fighting_arrangements_third_is_jockey_pump_and_certified_capacity_photo_attached_id_option_list();
                                                                                                                                if(!empty($is_jockey_pump_and_certified_capacity_photo_attached_id_options)){
                                                                                                                                foreach($is_jockey_pump_and_certified_capacity_photo_attached_id_options as $option){
                                                                                                                                $value = (!empty($option['value']) ? $option['value'] : null);
                                                                                                                                $label = (!empty($option['label']) ? $option['label'] : $value);
                                                                                                                                $selected = $this->set_field_selected('is_jockey_pump_and_certified_capacity_photo_attached_id',$value, "");
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
                                                                                                                        <label class="control-label" for="upload_jockey_pump_and_certified_capacity_photo">Upload Jockey Pump And Certified Capacity Photo <span class="text-danger">*</span></label>
                                                                                                                        <div id="ctrl-upload_jockey_pump_and_certified_capacity_photo-holder" class=""> 
                                                                                                                            <div class="dropzone required" input="#ctrl-upload_jockey_pump_and_certified_capacity_photo" fieldname="upload_jockey_pump_and_certified_capacity_photo"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.gif,.jpeg" filesize="3" maximum="5">
                                                                                                                                <input name="upload_jockey_pump_and_certified_capacity_photo" id="ctrl-upload_jockey_pump_and_certified_capacity_photo" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_jockey_pump_and_certified_capacity_photo',""); ?>" type="text"  />
                                                                                                                                    <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                                    <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="form-group ">
                                                                                                                            <label class="control-label" for="sprinkler_pump_and_certified_capacity">Sprinkler Pump And Certified Capacity <span class="text-danger">*</span></label>
                                                                                                                            <div id="ctrl-sprinkler_pump_and_certified_capacity-holder" class=""> 
                                                                                                                                <input id="ctrl-sprinkler_pump_and_certified_capacity"  value="<?php  echo $this->set_field_value('sprinkler_pump_and_certified_capacity',""); ?>" type="text" placeholder="Enter Sprinkler Pump And Certified Capacity"  required="" name="sprinkler_pump_and_certified_capacity"  class="form-control " />
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <div class="form-group ">
                                                                                                                                <label class="control-label" for="is_sprinkler_pump_and_certified_capacity_photo_attached_id">Is Sprinkler Pump And Certified Capacity Photo Attached Id <span class="text-danger">*</span></label>
                                                                                                                                <div id="ctrl-is_sprinkler_pump_and_certified_capacity_photo_attached_id-holder" class=""> 
                                                                                                                                    <select required=""  id="ctrl-is_sprinkler_pump_and_certified_capacity_photo_attached_id" name="is_sprinkler_pump_and_certified_capacity_photo_attached_id"  placeholder="Select a value ..."    class="custom-select" >
                                                                                                                                        <option value="">Select a value ...</option>
                                                                                                                                        <?php 
                                                                                                                                        $is_sprinkler_pump_and_certified_capacity_photo_attached_id_options = $comp_model -> architecture_oc_noc_fire_fighting_arrangements_third_is_sprinkler_pump_and_certified_capacity_photo_attached_id_option_list();
                                                                                                                                        if(!empty($is_sprinkler_pump_and_certified_capacity_photo_attached_id_options)){
                                                                                                                                        foreach($is_sprinkler_pump_and_certified_capacity_photo_attached_id_options as $option){
                                                                                                                                        $value = (!empty($option['value']) ? $option['value'] : null);
                                                                                                                                        $label = (!empty($option['label']) ? $option['label'] : $value);
                                                                                                                                        $selected = $this->set_field_selected('is_sprinkler_pump_and_certified_capacity_photo_attached_id',$value, "");
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
                                                                                                                                <label class="control-label" for="upload_sprinkler_pump_and_certified_capacity_photo">Upload Sprinkler Pump And Certified Capacity Photo <span class="text-danger">*</span></label>
                                                                                                                                <div id="ctrl-upload_sprinkler_pump_and_certified_capacity_photo-holder" class=""> 
                                                                                                                                    <div class="dropzone required" input="#ctrl-upload_sprinkler_pump_and_certified_capacity_photo" fieldname="upload_sprinkler_pump_and_certified_capacity_photo"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.gif,.jpeg" filesize="3" maximum="5">
                                                                                                                                        <input name="upload_sprinkler_pump_and_certified_capacity_photo" id="ctrl-upload_sprinkler_pump_and_certified_capacity_photo" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_sprinkler_pump_and_certified_capacity_photo',""); ?>" type="text"  />
                                                                                                                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                                            <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <div class="form-group ">
                                                                                                                                    <label class="control-label" for="courtyard_hydrants_numbers">Courtyard Hydrants Numbers <span class="text-danger">*</span></label>
                                                                                                                                    <div id="ctrl-courtyard_hydrants_numbers-holder" class=""> 
                                                                                                                                        <input id="ctrl-courtyard_hydrants_numbers"  value="<?php  echo $this->set_field_value('courtyard_hydrants_numbers',""); ?>" type="text" placeholder="Enter Courtyard Hydrants Numbers"  required="" name="courtyard_hydrants_numbers"  class="form-control " />
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    <div class="form-group ">
                                                                                                                                        <label class="control-label" for="is_courtyard_hydrants_photo_attached_id">Is Courtyard Hydrants Photo Attached Id <span class="text-danger">*</span></label>
                                                                                                                                        <div id="ctrl-is_courtyard_hydrants_photo_attached_id-holder" class=""> 
                                                                                                                                            <select required=""  id="ctrl-is_courtyard_hydrants_photo_attached_id" name="is_courtyard_hydrants_photo_attached_id"  placeholder="Select a value ..."    class="custom-select" >
                                                                                                                                                <option value="">Select a value ...</option>
                                                                                                                                                <?php 
                                                                                                                                                $is_courtyard_hydrants_photo_attached_id_options = $comp_model -> architecture_oc_noc_fire_fighting_arrangements_third_is_courtyard_hydrants_photo_attached_id_option_list();
                                                                                                                                                if(!empty($is_courtyard_hydrants_photo_attached_id_options)){
                                                                                                                                                foreach($is_courtyard_hydrants_photo_attached_id_options as $option){
                                                                                                                                                $value = (!empty($option['value']) ? $option['value'] : null);
                                                                                                                                                $label = (!empty($option['label']) ? $option['label'] : $value);
                                                                                                                                                $selected = $this->set_field_selected('is_courtyard_hydrants_photo_attached_id',$value, "");
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
                                                                                                                                        <label class="control-label" for="upload_courtyard_hydrants_photo">Upload Courtyard Hydrants Photo <span class="text-danger">*</span></label>
                                                                                                                                        <div id="ctrl-upload_courtyard_hydrants_photo-holder" class=""> 
                                                                                                                                            <div class="dropzone required" input="#ctrl-upload_courtyard_hydrants_photo" fieldname="upload_courtyard_hydrants_photo"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.gif,.jpeg" filesize="3" maximum="5">
                                                                                                                                                <input name="upload_courtyard_hydrants_photo" id="ctrl-upload_courtyard_hydrants_photo" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_courtyard_hydrants_photo',""); ?>" type="text"  />
                                                                                                                                                    <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                                                    <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                        <div class="form-group ">
                                                                                                                                            <label class="control-label" for="first_aid_hose_reel">First Aid Hose Reel <span class="text-danger">*</span></label>
                                                                                                                                            <div id="ctrl-first_aid_hose_reel-holder" class=""> 
                                                                                                                                                <input id="ctrl-first_aid_hose_reel"  value="<?php  echo $this->set_field_value('first_aid_hose_reel',""); ?>" type="text" placeholder="Enter First Aid Hose Reel"  required="" name="first_aid_hose_reel"  class="form-control " />
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                            <div class="form-group ">
                                                                                                                                                <label class="control-label" for="is_first_aid_hose_reel_photo_attached_id">Is First Aid Hose Reel Photo Attached Id <span class="text-danger">*</span></label>
                                                                                                                                                <div id="ctrl-is_first_aid_hose_reel_photo_attached_id-holder" class=""> 
                                                                                                                                                    <select required=""  id="ctrl-is_first_aid_hose_reel_photo_attached_id" name="is_first_aid_hose_reel_photo_attached_id"  placeholder="Select a value ..."    class="custom-select" >
                                                                                                                                                        <option value="">Select a value ...</option>
                                                                                                                                                        <?php 
                                                                                                                                                        $is_first_aid_hose_reel_photo_attached_id_options = $comp_model -> architecture_oc_noc_fire_fighting_arrangements_third_is_first_aid_hose_reel_photo_attached_id_option_list();
                                                                                                                                                        if(!empty($is_first_aid_hose_reel_photo_attached_id_options)){
                                                                                                                                                        foreach($is_first_aid_hose_reel_photo_attached_id_options as $option){
                                                                                                                                                        $value = (!empty($option['value']) ? $option['value'] : null);
                                                                                                                                                        $label = (!empty($option['label']) ? $option['label'] : $value);
                                                                                                                                                        $selected = $this->set_field_selected('is_first_aid_hose_reel_photo_attached_id',$value, "");
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
                                                                                                                                                <label class="control-label" for="upload_first_aid_hose_reel_photo">Upload First Aid Hose Reel Photo <span class="text-danger">*</span></label>
                                                                                                                                                <div id="ctrl-upload_first_aid_hose_reel_photo-holder" class=""> 
                                                                                                                                                    <div class="dropzone required" input="#ctrl-upload_first_aid_hose_reel_photo" fieldname="upload_first_aid_hose_reel_photo"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.gif,.jpeg" filesize="3" maximum="5">
                                                                                                                                                        <input name="upload_first_aid_hose_reel_photo" id="ctrl-upload_first_aid_hose_reel_photo" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_first_aid_hose_reel_photo',""); ?>" type="text"  />
                                                                                                                                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                                                            <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                                <div class="form-group ">
                                                                                                                                                    <label class="control-label" for="fire_alarm_system">Fire Alarm System <span class="text-danger">*</span></label>
                                                                                                                                                    <div id="ctrl-fire_alarm_system-holder" class=""> 
                                                                                                                                                        <input id="ctrl-fire_alarm_system"  value="<?php  echo $this->set_field_value('fire_alarm_system',""); ?>" type="text" placeholder="Enter Fire Alarm System"  required="" name="fire_alarm_system"  class="form-control " />
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                    <div class="form-group ">
                                                                                                                                                        <label class="control-label" for="is_fire_alarm_system_photo_attached_id">Is Fire Alarm System Photo Attached Id <span class="text-danger">*</span></label>
                                                                                                                                                        <div id="ctrl-is_fire_alarm_system_photo_attached_id-holder" class=""> 
                                                                                                                                                            <select required=""  id="ctrl-is_fire_alarm_system_photo_attached_id" name="is_fire_alarm_system_photo_attached_id"  placeholder="Select a value ..."    class="custom-select" >
                                                                                                                                                                <option value="">Select a value ...</option>
                                                                                                                                                                <?php 
                                                                                                                                                                $is_fire_alarm_system_photo_attached_id_options = $comp_model -> architecture_oc_noc_fire_fighting_arrangements_third_is_fire_alarm_system_photo_attached_id_option_list();
                                                                                                                                                                if(!empty($is_fire_alarm_system_photo_attached_id_options)){
                                                                                                                                                                foreach($is_fire_alarm_system_photo_attached_id_options as $option){
                                                                                                                                                                $value = (!empty($option['value']) ? $option['value'] : null);
                                                                                                                                                                $label = (!empty($option['label']) ? $option['label'] : $value);
                                                                                                                                                                $selected = $this->set_field_selected('is_fire_alarm_system_photo_attached_id',$value, "");
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
                                                                                                                                                        <label class="control-label" for="upload_fire_alarm_system_photo">Upload Fire Alarm System Photo <span class="text-danger">*</span></label>
                                                                                                                                                        <div id="ctrl-upload_fire_alarm_system_photo-holder" class=""> 
                                                                                                                                                            <div class="dropzone required" input="#ctrl-upload_fire_alarm_system_photo" fieldname="upload_fire_alarm_system_photo"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.gif,.jpeg" filesize="3" maximum="5">
                                                                                                                                                                <input name="upload_fire_alarm_system_photo" id="ctrl-upload_fire_alarm_system_photo" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_fire_alarm_system_photo',""); ?>" type="text"  />
                                                                                                                                                                    <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                                                                    <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                                                                </div>
                                                                                                                                                            </div>
                                                                                                                                                        </div>
                                                                                                                                                        <div class="form-group ">
                                                                                                                                                            <label class="control-label" for="detection_system">Detection System <span class="text-danger">*</span></label>
                                                                                                                                                            <div id="ctrl-detection_system-holder" class=""> 
                                                                                                                                                                <input id="ctrl-detection_system"  value="<?php  echo $this->set_field_value('detection_system',""); ?>" type="text" placeholder="Enter Detection System"  required="" name="detection_system"  class="form-control " />
                                                                                                                                                                </div>
                                                                                                                                                            </div>
                                                                                                                                                            <div class="form-group ">
                                                                                                                                                                <label class="control-label" for="is_detection_system_photo_attached_id">Is Detection System Photo Attached Id <span class="text-danger">*</span></label>
                                                                                                                                                                <div id="ctrl-is_detection_system_photo_attached_id-holder" class=""> 
                                                                                                                                                                    <select required=""  id="ctrl-is_detection_system_photo_attached_id" name="is_detection_system_photo_attached_id"  placeholder="Select a value ..."    class="custom-select" >
                                                                                                                                                                        <option value="">Select a value ...</option>
                                                                                                                                                                        <?php 
                                                                                                                                                                        $is_detection_system_photo_attached_id_options = $comp_model -> architecture_oc_noc_fire_fighting_arrangements_third_is_detection_system_photo_attached_id_option_list();
                                                                                                                                                                        if(!empty($is_detection_system_photo_attached_id_options)){
                                                                                                                                                                        foreach($is_detection_system_photo_attached_id_options as $option){
                                                                                                                                                                        $value = (!empty($option['value']) ? $option['value'] : null);
                                                                                                                                                                        $label = (!empty($option['label']) ? $option['label'] : $value);
                                                                                                                                                                        $selected = $this->set_field_selected('is_detection_system_photo_attached_id',$value, "");
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
                                                                                                                                                                <label class="control-label" for="upload_detection_system_photo">Upload Detection System Photo <span class="text-danger">*</span></label>
                                                                                                                                                                <div id="ctrl-upload_detection_system_photo-holder" class=""> 
                                                                                                                                                                    <div class="dropzone required" input="#ctrl-upload_detection_system_photo" fieldname="upload_detection_system_photo"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.gif,.jpeg" filesize="3" maximum="5">
                                                                                                                                                                        <input name="upload_detection_system_photo" id="ctrl-upload_detection_system_photo" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_detection_system_photo',""); ?>" type="text"  />
                                                                                                                                                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                                                                            <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                                                                        </div>
                                                                                                                                                                    </div>
                                                                                                                                                                </div>
                                                                                                                                                                <div class="form-group ">
                                                                                                                                                                    <label class="control-label" for="location_of_alarm_panel">Location Of Alarm Panel <span class="text-danger">*</span></label>
                                                                                                                                                                    <div id="ctrl-location_of_alarm_panel-holder" class=""> 
                                                                                                                                                                        <input id="ctrl-location_of_alarm_panel"  value="<?php  echo $this->set_field_value('location_of_alarm_panel',""); ?>" type="text" placeholder="Enter Location Of Alarm Panel"  required="" name="location_of_alarm_panel"  class="form-control " />
                                                                                                                                                                        </div>
                                                                                                                                                                    </div>
                                                                                                                                                                    <div class="form-group ">
                                                                                                                                                                        <label class="control-label" for="is_location_of_alarm_panel_photo_attached_id">Is Location Of Alarm Panel Photo Attached Id <span class="text-danger">*</span></label>
                                                                                                                                                                        <div id="ctrl-is_location_of_alarm_panel_photo_attached_id-holder" class=""> 
                                                                                                                                                                            <select required=""  id="ctrl-is_location_of_alarm_panel_photo_attached_id" name="is_location_of_alarm_panel_photo_attached_id"  placeholder="Select a value ..."    class="custom-select" >
                                                                                                                                                                                <option value="">Select a value ...</option>
                                                                                                                                                                                <?php 
                                                                                                                                                                                $is_location_of_alarm_panel_photo_attached_id_options = $comp_model -> architecture_oc_noc_fire_fighting_arrangements_third_is_location_of_alarm_panel_photo_attached_id_option_list();
                                                                                                                                                                                if(!empty($is_location_of_alarm_panel_photo_attached_id_options)){
                                                                                                                                                                                foreach($is_location_of_alarm_panel_photo_attached_id_options as $option){
                                                                                                                                                                                $value = (!empty($option['value']) ? $option['value'] : null);
                                                                                                                                                                                $label = (!empty($option['label']) ? $option['label'] : $value);
                                                                                                                                                                                $selected = $this->set_field_selected('is_location_of_alarm_panel_photo_attached_id',$value, "");
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
                                                                                                                                                                        <label class="control-label" for="upload_location_of_alarm_panel_photo">Upload Location Of Alarm Panel Photo <span class="text-danger">*</span></label>
                                                                                                                                                                        <div id="ctrl-upload_location_of_alarm_panel_photo-holder" class=""> 
                                                                                                                                                                            <div class="dropzone required" input="#ctrl-upload_location_of_alarm_panel_photo" fieldname="upload_location_of_alarm_panel_photo"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.gif,.jpeg" filesize="3" maximum="5">
                                                                                                                                                                                <input name="upload_location_of_alarm_panel_photo" id="ctrl-upload_location_of_alarm_panel_photo" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_location_of_alarm_panel_photo',""); ?>" type="text"  />
                                                                                                                                                                                    <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                                                                                    <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                                                                                </div>
                                                                                                                                                                            </div>
                                                                                                                                                                        </div>
                                                                                                                                                                        <div class="form-group ">
                                                                                                                                                                            <label class="control-label" for="escape_signages">Escape Signages <span class="text-danger">*</span></label>
                                                                                                                                                                            <div id="ctrl-escape_signages-holder" class=""> 
                                                                                                                                                                                <input id="ctrl-escape_signages"  value="<?php  echo $this->set_field_value('escape_signages',""); ?>" type="text" placeholder="Enter Escape Signages"  required="" name="escape_signages"  class="form-control " />
                                                                                                                                                                                </div>
                                                                                                                                                                            </div>
                                                                                                                                                                            <div class="form-group ">
                                                                                                                                                                                <label class="control-label" for="is_escape_signages_photo_attached_id">Is Escape Signages Photo Attached Id <span class="text-danger">*</span></label>
                                                                                                                                                                                <div id="ctrl-is_escape_signages_photo_attached_id-holder" class=""> 
                                                                                                                                                                                    <select required=""  id="ctrl-is_escape_signages_photo_attached_id" name="is_escape_signages_photo_attached_id"  placeholder="Select a value ..."    class="custom-select" >
                                                                                                                                                                                        <option value="">Select a value ...</option>
                                                                                                                                                                                        <?php 
                                                                                                                                                                                        $is_escape_signages_photo_attached_id_options = $comp_model -> architecture_oc_noc_fire_fighting_arrangements_third_is_escape_signages_photo_attached_id_option_list();
                                                                                                                                                                                        if(!empty($is_escape_signages_photo_attached_id_options)){
                                                                                                                                                                                        foreach($is_escape_signages_photo_attached_id_options as $option){
                                                                                                                                                                                        $value = (!empty($option['value']) ? $option['value'] : null);
                                                                                                                                                                                        $label = (!empty($option['label']) ? $option['label'] : $value);
                                                                                                                                                                                        $selected = $this->set_field_selected('is_escape_signages_photo_attached_id',$value, "");
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
                                                                                                                                                                                <label class="control-label" for="upload_escape_signages_photo">Upload Escape Signages Photo <span class="text-danger">*</span></label>
                                                                                                                                                                                <div id="ctrl-upload_escape_signages_photo-holder" class=""> 
                                                                                                                                                                                    <div class="dropzone required" input="#ctrl-upload_escape_signages_photo" fieldname="upload_escape_signages_photo"    data-multiple="true" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.gif,.jpeg" filesize="3" maximum="5">
                                                                                                                                                                                        <input name="upload_escape_signages_photo" id="ctrl-upload_escape_signages_photo" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_escape_signages_photo',""); ?>" type="text"  />
                                                                                                                                                                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                                                                                            <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                                                                                        </div>
                                                                                                                                                                                    </div>
                                                                                                                                                                                </div>
                                                                                                                                                                                <div class="form-group ">
                                                                                                                                                                                    <label class="control-label" for="pa_system">Pa System <span class="text-danger">*</span></label>
                                                                                                                                                                                    <div id="ctrl-pa_system-holder" class=""> 
                                                                                                                                                                                        <input id="ctrl-pa_system"  value="<?php  echo $this->set_field_value('pa_system',""); ?>" type="text" placeholder="Enter Pa System"  required="" name="pa_system"  class="form-control " />
                                                                                                                                                                                        </div>
                                                                                                                                                                                    </div>
                                                                                                                                                                                    <div class="form-group ">
                                                                                                                                                                                        <label class="control-label" for="is_pa_system_photo_attached_id">Is Pa System Photo Attached Id <span class="text-danger">*</span></label>
                                                                                                                                                                                        <div id="ctrl-is_pa_system_photo_attached_id-holder" class=""> 
                                                                                                                                                                                            <select required=""  id="ctrl-is_pa_system_photo_attached_id" name="is_pa_system_photo_attached_id"  placeholder="Select a value ..."    class="custom-select" >
                                                                                                                                                                                                <option value="">Select a value ...</option>
                                                                                                                                                                                                <?php 
                                                                                                                                                                                                $is_pa_system_photo_attached_id_options = $comp_model -> architecture_oc_noc_fire_fighting_arrangements_third_is_pa_system_photo_attached_id_option_list();
                                                                                                                                                                                                if(!empty($is_pa_system_photo_attached_id_options)){
                                                                                                                                                                                                foreach($is_pa_system_photo_attached_id_options as $option){
                                                                                                                                                                                                $value = (!empty($option['value']) ? $option['value'] : null);
                                                                                                                                                                                                $label = (!empty($option['label']) ? $option['label'] : $value);
                                                                                                                                                                                                $selected = $this->set_field_selected('is_pa_system_photo_attached_id',$value, "");
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
                                                                                                                                                                                        <label class="control-label" for="upload_pa_system_photo">Upload Pa System Photo <span class="text-danger">*</span></label>
                                                                                                                                                                                        <div id="ctrl-upload_pa_system_photo-holder" class=""> 
                                                                                                                                                                                            <div class="dropzone required" input="#ctrl-upload_pa_system_photo" fieldname="upload_pa_system_photo"    data-multiple="true" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.gif,.jpeg" filesize="3" maximum="5">
                                                                                                                                                                                                <input name="upload_pa_system_photo" id="ctrl-upload_pa_system_photo" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_pa_system_photo',""); ?>" type="text"  />
                                                                                                                                                                                                    <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                                                                                                    <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                                                                                                </div>
                                                                                                                                                                                            </div>
                                                                                                                                                                                        </div>
                                                                                                                                                                                        <div class="form-group ">
                                                                                                                                                                                            <label class="control-label" for="alternate_source_of_electric_supply_from_separate_sub_station">Alternate Source Of Electric Supply From Separate Sub Station <span class="text-danger">*</span></label>
                                                                                                                                                                                            <div id="ctrl-alternate_source_of_electric_supply_from_separate_sub_station-holder" class=""> 
                                                                                                                                                                                                <input id="ctrl-alternate_source_of_electric_supply_from_separate_sub_station"  value="<?php  echo $this->set_field_value('alternate_source_of_electric_supply_from_separate_sub_station',""); ?>" type="text" placeholder="Enter Alternate Source Of Electric Supply From Separate Sub Station"  required="" name="alternate_source_of_electric_supply_from_separate_sub_station"  class="form-control " />
                                                                                                                                                                                                </div>
                                                                                                                                                                                            </div>
                                                                                                                                                                                            <div class="form-group ">
                                                                                                                                                                                                <label class="control-label" for="is_substation_photo_attached_id">Is Substation Photo Attached Id <span class="text-danger">*</span></label>
                                                                                                                                                                                                <div id="ctrl-is_substation_photo_attached_id-holder" class=""> 
                                                                                                                                                                                                    <select required=""  id="ctrl-is_substation_photo_attached_id" name="is_substation_photo_attached_id"  placeholder="Select a value ..."    class="custom-select" >
                                                                                                                                                                                                        <option value="">Select a value ...</option>
                                                                                                                                                                                                        <?php 
                                                                                                                                                                                                        $is_substation_photo_attached_id_options = $comp_model -> architecture_oc_noc_fire_fighting_arrangements_third_is_substation_photo_attached_id_option_list();
                                                                                                                                                                                                        if(!empty($is_substation_photo_attached_id_options)){
                                                                                                                                                                                                        foreach($is_substation_photo_attached_id_options as $option){
                                                                                                                                                                                                        $value = (!empty($option['value']) ? $option['value'] : null);
                                                                                                                                                                                                        $label = (!empty($option['label']) ? $option['label'] : $value);
                                                                                                                                                                                                        $selected = $this->set_field_selected('is_substation_photo_attached_id',$value, "");
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
                                                                                                                                                                                                <label class="control-label" for="upload_substation_photo">Upload Substation Photo <span class="text-danger">*</span></label>
                                                                                                                                                                                                <div id="ctrl-upload_substation_photo-holder" class=""> 
                                                                                                                                                                                                    <div class="dropzone required" input="#ctrl-upload_substation_photo" fieldname="upload_substation_photo"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.gif,.jpeg" filesize="3" maximum="1">
                                                                                                                                                                                                        <input name="upload_substation_photo" id="ctrl-upload_substation_photo" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_substation_photo',""); ?>" type="text"  />
                                                                                                                                                                                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                                                                                                            <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                </div>
                                                                                                                                                                                                <div class="form-group ">
                                                                                                                                                                                                    <label class="control-label" for="alternate_source_of_electric_supply_from_separate_dg_set">Alternate Source Of Electric Supply From Separate Dg Set <span class="text-danger">*</span></label>
                                                                                                                                                                                                    <div id="ctrl-alternate_source_of_electric_supply_from_separate_dg_set-holder" class=""> 
                                                                                                                                                                                                        <input id="ctrl-alternate_source_of_electric_supply_from_separate_dg_set"  value="<?php  echo $this->set_field_value('alternate_source_of_electric_supply_from_separate_dg_set',""); ?>" type="text" placeholder="Enter Alternate Source Of Electric Supply From Separate Dg Set"  required="" name="alternate_source_of_electric_supply_from_separate_dg_set"  class="form-control " />
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                    <div class="form-group ">
                                                                                                                                                                                                        <label class="control-label" for="is_dg_set_photo_attached_id">Is Dg Set Photo Attached Id <span class="text-danger">*</span></label>
                                                                                                                                                                                                        <div id="ctrl-is_dg_set_photo_attached_id-holder" class=""> 
                                                                                                                                                                                                            <select required=""  id="ctrl-is_dg_set_photo_attached_id" name="is_dg_set_photo_attached_id"  placeholder="Select a value ..."    class="custom-select" >
                                                                                                                                                                                                                <option value="">Select a value ...</option>
                                                                                                                                                                                                                <?php 
                                                                                                                                                                                                                $is_dg_set_photo_attached_id_options = $comp_model -> architecture_oc_noc_fire_fighting_arrangements_third_is_dg_set_photo_attached_id_option_list();
                                                                                                                                                                                                                if(!empty($is_dg_set_photo_attached_id_options)){
                                                                                                                                                                                                                foreach($is_dg_set_photo_attached_id_options as $option){
                                                                                                                                                                                                                $value = (!empty($option['value']) ? $option['value'] : null);
                                                                                                                                                                                                                $label = (!empty($option['label']) ? $option['label'] : $value);
                                                                                                                                                                                                                $selected = $this->set_field_selected('is_dg_set_photo_attached_id',$value, "");
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
                                                                                                                                                                                                        <label class="control-label" for="upload_dg_set_photo">Upload Dg Set Photo <span class="text-danger">*</span></label>
                                                                                                                                                                                                        <div id="ctrl-upload_dg_set_photo-holder" class=""> 
                                                                                                                                                                                                            <div class="dropzone required" input="#ctrl-upload_dg_set_photo" fieldname="upload_dg_set_photo"    data-multiple="true" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.gif,.jpeg" filesize="3" maximum="5">
                                                                                                                                                                                                                <input name="upload_dg_set_photo" id="ctrl-upload_dg_set_photo" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_dg_set_photo',""); ?>" type="text"  />
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
