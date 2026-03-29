<?php
$comp_model = new SharedController;
$page_element_id = "edit-page-" . random_str();
$current_page = $this->set_current_page_link();
$csrf_token = Csrf::$token;
$data = $this->view_data;
//$rec_id = $data['__tableprimarykey'];
$page_id = $this->route->page_id;
$show_header = $this->show_header;
$view_title = $this->view_title;
$redirect_to = $this->redirect_to;
?>
<section class="page" id="<?php echo $page_element_id; ?>" data-page-type="edit"  data-display-type="" data-page-url="<?php print_link($current_page); ?>">
    <?php
    if( $show_header == true ){
    ?>
    <div  class="bg-light p-3 mb-3">
        <div class="container">
            <div class="row ">
                <div class="col ">
                    <h4 class="record-title">Edit  Architecture Oc Noc Refuge And Other Details Fourth</h4>
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
                <div class="col-md-7 comp-grid">
                    <?php $this :: display_page_errors(); ?>
                    <div  class="bg-light p-3 animated fadeIn page-content">
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-horizontal needs-validation" action="<?php print_link("architecture_oc_noc_refuge_and_other_details_fourth/edit/$page_id/?csrf_token=$csrf_token"); ?>" method="post">
                            <div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="refuge_area_or_floor_details">Refuge Area Or Floor Details <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="">
                                                <input id="ctrl-refuge_area_or_floor_details"  value="<?php  echo $data['refuge_area_or_floor_details']; ?>" type="text" placeholder="Enter Refuge Area Or Floor Details"  required="" name="refuge_area_or_floor_details"  class="form-control " />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="is_refuge_area_or_floor_photo_attached_id">Is Refuge Area Or Floor Photo Attached Id <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <select required=""  id="ctrl-is_refuge_area_or_floor_photo_attached_id" name="is_refuge_area_or_floor_photo_attached_id"  placeholder="Select a value ..."    class="custom-select" >
                                                        <option value="">Select a value ...</option>
                                                        <?php
                                                        $rec = $data['is_refuge_area_or_floor_photo_attached_id'];
                                                        $is_refuge_area_or_floor_photo_attached_id_options = $comp_model -> architecture_oc_noc_refuge_and_other_details_fourth_is_refuge_area_or_floor_photo_attached_id_option_list();
                                                        if(!empty($is_refuge_area_or_floor_photo_attached_id_options)){
                                                        foreach($is_refuge_area_or_floor_photo_attached_id_options as $option){
                                                        $value = (!empty($option['value']) ? $option['value'] : null);
                                                        $label = (!empty($option['label']) ? $option['label'] : $value);
                                                        $selected = ( $value == $rec ? 'selected' : null );
                                                        ?>
                                                        <option 
                                                            <?php echo $selected; ?> value="<?php echo $value; ?>"><?php echo $label; ?>
                                                        </option>
                                                        <?php
                                                        }
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="upload_refuge_area_or_floor_photo">Upload Refuge Area Or Floor Photo <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <div class="dropzone required" input="#ctrl-upload_refuge_area_or_floor_photo" fieldname="upload_refuge_area_or_floor_photo"    data-multiple="true" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.gif,.jpeg" filesize="3" maximum="5">
                                                        <input name="upload_refuge_area_or_floor_photo" id="ctrl-upload_refuge_area_or_floor_photo" required="" class="dropzone-input form-control" value="<?php  echo $data['upload_refuge_area_or_floor_photo']; ?>" type="text"  />
                                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                            <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                        </div>
                                                    </div>
                                                    <?php Html :: uploaded_files_list($data['upload_refuge_area_or_floor_photo'], '#ctrl-upload_refuge_area_or_floor_photo'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <label class="control-label" for="officer_remark_on_refuge_area_or_floor">Officer Remark On Refuge Area Or Floor <span class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="">
                                                        <input id="ctrl-officer_remark_on_refuge_area_or_floor"  value="<?php  echo $data['officer_remark_on_refuge_area_or_floor']; ?>" type="text" placeholder="Enter Officer Remark On Refuge Area Or Floor"  required="" name="officer_remark_on_refuge_area_or_floor"  class="form-control " />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <label class="control-label" for="terrace_door">Terrace Door <span class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="">
                                                            <input id="ctrl-terrace_door"  value="<?php  echo $data['terrace_door']; ?>" type="text" placeholder="Enter Terrace Door"  required="" name="terrace_door"  class="form-control " />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <label class="control-label" for="is_terrace_door_photo_attached_id">Is Terrace Door Photo Attached Id <span class="text-danger">*</span></label>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <div class="">
                                                                <select required=""  id="ctrl-is_terrace_door_photo_attached_id" name="is_terrace_door_photo_attached_id"  placeholder="Select a value ..."    class="custom-select" >
                                                                    <option value="">Select a value ...</option>
                                                                    <?php
                                                                    $rec = $data['is_terrace_door_photo_attached_id'];
                                                                    $is_terrace_door_photo_attached_id_options = $comp_model -> architecture_oc_noc_refuge_and_other_details_fourth_is_terrace_door_photo_attached_id_option_list();
                                                                    if(!empty($is_terrace_door_photo_attached_id_options)){
                                                                    foreach($is_terrace_door_photo_attached_id_options as $option){
                                                                    $value = (!empty($option['value']) ? $option['value'] : null);
                                                                    $label = (!empty($option['label']) ? $option['label'] : $value);
                                                                    $selected = ( $value == $rec ? 'selected' : null );
                                                                    ?>
                                                                    <option 
                                                                        <?php echo $selected; ?> value="<?php echo $value; ?>"><?php echo $label; ?>
                                                                    </option>
                                                                    <?php
                                                                    }
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <label class="control-label" for="upload_errace_door_photo">Upload Errace Door Photo <span class="text-danger">*</span></label>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <div class="">
                                                                <div class="dropzone required" input="#ctrl-upload_errace_door_photo" fieldname="upload_errace_door_photo"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.gif,.jpeg" filesize="3" maximum="1">
                                                                    <input name="upload_errace_door_photo" id="ctrl-upload_errace_door_photo" required="" class="dropzone-input form-control" value="<?php  echo $data['upload_errace_door_photo']; ?>" type="text"  />
                                                                        <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                        <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                    </div>
                                                                </div>
                                                                <?php Html :: uploaded_files_list($data['upload_errace_door_photo'], '#ctrl-upload_errace_door_photo'); ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <label class="control-label" for="officer_remark_on_errace_door">Officer Remark On Errace Door <span class="text-danger">*</span></label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="">
                                                                    <input id="ctrl-officer_remark_on_errace_door"  value="<?php  echo $data['officer_remark_on_errace_door']; ?>" type="text" placeholder="Enter Officer Remark On Errace Door"  required="" name="officer_remark_on_errace_door"  class="form-control " />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group ">
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <label class="control-label" for="fire_check_floor">Fire Check Floor <span class="text-danger">*</span></label>
                                                                </div>
                                                                <div class="col-sm-8">
                                                                    <div class="">
                                                                        <input id="ctrl-fire_check_floor"  value="<?php  echo $data['fire_check_floor']; ?>" type="text" placeholder="Enter Fire Check Floor"  required="" name="fire_check_floor"  class="form-control " />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group ">
                                                                <div class="row">
                                                                    <div class="col-sm-4">
                                                                        <label class="control-label" for="is_fire_check_floor_photo_attached_id">Is Fire Check Floor Photo Attached Id <span class="text-danger">*</span></label>
                                                                    </div>
                                                                    <div class="col-sm-8">
                                                                        <div class="">
                                                                            <select required=""  id="ctrl-is_fire_check_floor_photo_attached_id" name="is_fire_check_floor_photo_attached_id"  placeholder="Select a value ..."    class="custom-select" >
                                                                                <option value="">Select a value ...</option>
                                                                                <?php
                                                                                $rec = $data['is_fire_check_floor_photo_attached_id'];
                                                                                $is_fire_check_floor_photo_attached_id_options = $comp_model -> architecture_oc_noc_refuge_and_other_details_fourth_is_fire_check_floor_photo_attached_id_option_list();
                                                                                if(!empty($is_fire_check_floor_photo_attached_id_options)){
                                                                                foreach($is_fire_check_floor_photo_attached_id_options as $option){
                                                                                $value = (!empty($option['value']) ? $option['value'] : null);
                                                                                $label = (!empty($option['label']) ? $option['label'] : $value);
                                                                                $selected = ( $value == $rec ? 'selected' : null );
                                                                                ?>
                                                                                <option 
                                                                                    <?php echo $selected; ?> value="<?php echo $value; ?>"><?php echo $label; ?>
                                                                                </option>
                                                                                <?php
                                                                                }
                                                                                }
                                                                                ?>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group ">
                                                                <div class="row">
                                                                    <div class="col-sm-4">
                                                                        <label class="control-label" for="upload_is_fire_check_floor_photo">Upload Is Fire Check Floor Photo <span class="text-danger">*</span></label>
                                                                    </div>
                                                                    <div class="col-sm-8">
                                                                        <div class="">
                                                                            <div class="dropzone required" input="#ctrl-upload_is_fire_check_floor_photo" fieldname="upload_is_fire_check_floor_photo"    data-multiple="true" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.gif,.jpeg" filesize="3" maximum="5">
                                                                                <input name="upload_is_fire_check_floor_photo" id="ctrl-upload_is_fire_check_floor_photo" required="" class="dropzone-input form-control" value="<?php  echo $data['upload_is_fire_check_floor_photo']; ?>" type="text"  />
                                                                                    <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                    <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                </div>
                                                                            </div>
                                                                            <?php Html :: uploaded_files_list($data['upload_is_fire_check_floor_photo'], '#ctrl-upload_is_fire_check_floor_photo'); ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group ">
                                                                    <div class="row">
                                                                        <div class="col-sm-4">
                                                                            <label class="control-label" for="officer_remark_on_fire_check_floor">Officer Remark On Fire Check Floor <span class="text-danger">*</span></label>
                                                                        </div>
                                                                        <div class="col-sm-8">
                                                                            <div class="">
                                                                                <input id="ctrl-officer_remark_on_fire_check_floor"  value="<?php  echo $data['officer_remark_on_fire_check_floor']; ?>" type="text" placeholder="Enter Officer Remark On Fire Check Floor"  required="" name="officer_remark_on_fire_check_floor"  class="form-control " />
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group ">
                                                                        <div class="row">
                                                                            <div class="col-sm-4">
                                                                                <label class="control-label" for="portable_fire_extinguishers">Portable Fire Extinguishers <span class="text-danger">*</span></label>
                                                                            </div>
                                                                            <div class="col-sm-8">
                                                                                <div class="">
                                                                                    <input id="ctrl-portable_fire_extinguishers"  value="<?php  echo $data['portable_fire_extinguishers']; ?>" type="text" placeholder="Enter Portable Fire Extinguishers"  required="" name="portable_fire_extinguishers"  class="form-control " />
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group ">
                                                                            <div class="row">
                                                                                <div class="col-sm-4">
                                                                                    <label class="control-label" for="is_portable_fire_extinguishers_photo_attached_id">Is Portable Fire Extinguishers Photo Attached Id <span class="text-danger">*</span></label>
                                                                                </div>
                                                                                <div class="col-sm-8">
                                                                                    <div class="">
                                                                                        <select required=""  id="ctrl-is_portable_fire_extinguishers_photo_attached_id" name="is_portable_fire_extinguishers_photo_attached_id"  placeholder="Select a value ..."    class="custom-select" >
                                                                                            <option value="">Select a value ...</option>
                                                                                            <?php
                                                                                            $rec = $data['is_portable_fire_extinguishers_photo_attached_id'];
                                                                                            $is_portable_fire_extinguishers_photo_attached_id_options = $comp_model -> architecture_oc_noc_refuge_and_other_details_fourth_is_portable_fire_extinguishers_photo_attached_id_option_list();
                                                                                            if(!empty($is_portable_fire_extinguishers_photo_attached_id_options)){
                                                                                            foreach($is_portable_fire_extinguishers_photo_attached_id_options as $option){
                                                                                            $value = (!empty($option['value']) ? $option['value'] : null);
                                                                                            $label = (!empty($option['label']) ? $option['label'] : $value);
                                                                                            $selected = ( $value == $rec ? 'selected' : null );
                                                                                            ?>
                                                                                            <option 
                                                                                                <?php echo $selected; ?> value="<?php echo $value; ?>"><?php echo $label; ?>
                                                                                            </option>
                                                                                            <?php
                                                                                            }
                                                                                            }
                                                                                            ?>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group ">
                                                                            <div class="row">
                                                                                <div class="col-sm-4">
                                                                                    <label class="control-label" for="upload_portable_fire_extinguishers_photo">Upload Portable Fire Extinguishers Photo <span class="text-danger">*</span></label>
                                                                                </div>
                                                                                <div class="col-sm-8">
                                                                                    <div class="">
                                                                                        <div class="dropzone required" input="#ctrl-upload_portable_fire_extinguishers_photo" fieldname="upload_portable_fire_extinguishers_photo"    data-multiple="true" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.gif,.jpeg" filesize="3" maximum="5">
                                                                                            <input name="upload_portable_fire_extinguishers_photo" id="ctrl-upload_portable_fire_extinguishers_photo" required="" class="dropzone-input form-control" value="<?php  echo $data['upload_portable_fire_extinguishers_photo']; ?>" type="text"  />
                                                                                                <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <?php Html :: uploaded_files_list($data['upload_portable_fire_extinguishers_photo'], '#ctrl-upload_portable_fire_extinguishers_photo'); ?>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group ">
                                                                                <div class="row">
                                                                                    <div class="col-sm-4">
                                                                                        <label class="control-label" for="officer_remark_on_portable_fire_extinguishers">Officer Remark On Portable Fire Extinguishers <span class="text-danger">*</span></label>
                                                                                    </div>
                                                                                    <div class="col-sm-8">
                                                                                        <div class="">
                                                                                            <input id="ctrl-officer_remark_on_portable_fire_extinguishers"  value="<?php  echo $data['officer_remark_on_portable_fire_extinguishers']; ?>" type="text" placeholder="Enter Officer Remark On Portable Fire Extinguishers"  required="" name="officer_remark_on_portable_fire_extinguishers"  class="form-control " />
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group ">
                                                                                    <div class="row">
                                                                                        <div class="col-sm-4">
                                                                                            <label class="control-label" for="sand_buckets">Sand Buckets <span class="text-danger">*</span></label>
                                                                                        </div>
                                                                                        <div class="col-sm-8">
                                                                                            <div class="">
                                                                                                <input id="ctrl-sand_buckets"  value="<?php  echo $data['sand_buckets']; ?>" type="text" placeholder="Enter Sand Buckets"  required="" name="sand_buckets"  class="form-control " />
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group ">
                                                                                        <div class="row">
                                                                                            <div class="col-sm-4">
                                                                                                <label class="control-label" for="is_sand_buckets_photo_attached_id">Is Sand Buckets Photo Attached Id <span class="text-danger">*</span></label>
                                                                                            </div>
                                                                                            <div class="col-sm-8">
                                                                                                <div class="">
                                                                                                    <select required=""  id="ctrl-is_sand_buckets_photo_attached_id" name="is_sand_buckets_photo_attached_id"  placeholder="Select a value ..."    class="custom-select" >
                                                                                                        <option value="">Select a value ...</option>
                                                                                                        <?php
                                                                                                        $rec = $data['is_sand_buckets_photo_attached_id'];
                                                                                                        $is_sand_buckets_photo_attached_id_options = $comp_model -> architecture_oc_noc_refuge_and_other_details_fourth_is_sand_buckets_photo_attached_id_option_list();
                                                                                                        if(!empty($is_sand_buckets_photo_attached_id_options)){
                                                                                                        foreach($is_sand_buckets_photo_attached_id_options as $option){
                                                                                                        $value = (!empty($option['value']) ? $option['value'] : null);
                                                                                                        $label = (!empty($option['label']) ? $option['label'] : $value);
                                                                                                        $selected = ( $value == $rec ? 'selected' : null );
                                                                                                        ?>
                                                                                                        <option 
                                                                                                            <?php echo $selected; ?> value="<?php echo $value; ?>"><?php echo $label; ?>
                                                                                                        </option>
                                                                                                        <?php
                                                                                                        }
                                                                                                        }
                                                                                                        ?>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group ">
                                                                                        <div class="row">
                                                                                            <div class="col-sm-4">
                                                                                                <label class="control-label" for="upload_sand_buckets_photo">Upload Sand Buckets Photo <span class="text-danger">*</span></label>
                                                                                            </div>
                                                                                            <div class="col-sm-8">
                                                                                                <div class="">
                                                                                                    <div class="dropzone required" input="#ctrl-upload_sand_buckets_photo" fieldname="upload_sand_buckets_photo"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.gif,.jpeg" filesize="3" maximum="1">
                                                                                                        <input name="upload_sand_buckets_photo" id="ctrl-upload_sand_buckets_photo" required="" class="dropzone-input form-control" value="<?php  echo $data['upload_sand_buckets_photo']; ?>" type="text"  />
                                                                                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                            <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <?php Html :: uploaded_files_list($data['upload_sand_buckets_photo'], '#ctrl-upload_sand_buckets_photo'); ?>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group ">
                                                                                            <div class="row">
                                                                                                <div class="col-sm-4">
                                                                                                    <label class="control-label" for="officer_remark_on_sand_buckets">Officer Remark On Sand Buckets <span class="text-danger">*</span></label>
                                                                                                </div>
                                                                                                <div class="col-sm-8">
                                                                                                    <div class="">
                                                                                                        <input id="ctrl-officer_remark_on_sand_buckets"  value="<?php  echo $data['officer_remark_on_sand_buckets']; ?>" type="text" placeholder="Enter Officer Remark On Sand Buckets"  required="" name="officer_remark_on_sand_buckets"  class="form-control " />
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group ">
                                                                                                <div class="row">
                                                                                                    <div class="col-sm-4">
                                                                                                        <label class="control-label" for="fire_escape_chute">Fire Escape Chute <span class="text-danger">*</span></label>
                                                                                                    </div>
                                                                                                    <div class="col-sm-8">
                                                                                                        <div class="">
                                                                                                            <input id="ctrl-fire_escape_chute"  value="<?php  echo $data['fire_escape_chute']; ?>" type="text" placeholder="Enter Fire Escape Chute"  required="" name="fire_escape_chute"  class="form-control " />
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="form-group ">
                                                                                                    <div class="row">
                                                                                                        <div class="col-sm-4">
                                                                                                            <label class="control-label" for="is_fire_escape_chute_photo_attached_id">Is Fire Escape Chute Photo Attached Id <span class="text-danger">*</span></label>
                                                                                                        </div>
                                                                                                        <div class="col-sm-8">
                                                                                                            <div class="">
                                                                                                                <select required=""  id="ctrl-is_fire_escape_chute_photo_attached_id" name="is_fire_escape_chute_photo_attached_id"  placeholder="Select a value ..."    class="custom-select" >
                                                                                                                    <option value="">Select a value ...</option>
                                                                                                                    <?php
                                                                                                                    $rec = $data['is_fire_escape_chute_photo_attached_id'];
                                                                                                                    $is_fire_escape_chute_photo_attached_id_options = $comp_model -> architecture_oc_noc_refuge_and_other_details_fourth_is_fire_escape_chute_photo_attached_id_option_list();
                                                                                                                    if(!empty($is_fire_escape_chute_photo_attached_id_options)){
                                                                                                                    foreach($is_fire_escape_chute_photo_attached_id_options as $option){
                                                                                                                    $value = (!empty($option['value']) ? $option['value'] : null);
                                                                                                                    $label = (!empty($option['label']) ? $option['label'] : $value);
                                                                                                                    $selected = ( $value == $rec ? 'selected' : null );
                                                                                                                    ?>
                                                                                                                    <option 
                                                                                                                        <?php echo $selected; ?> value="<?php echo $value; ?>"><?php echo $label; ?>
                                                                                                                    </option>
                                                                                                                    <?php
                                                                                                                    }
                                                                                                                    }
                                                                                                                    ?>
                                                                                                                </select>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="form-group ">
                                                                                                    <div class="row">
                                                                                                        <div class="col-sm-4">
                                                                                                            <label class="control-label" for="upload_escape_chute_photo">Upload Escape Chute Photo <span class="text-danger">*</span></label>
                                                                                                        </div>
                                                                                                        <div class="col-sm-8">
                                                                                                            <div class="">
                                                                                                                <div class="dropzone required" input="#ctrl-upload_escape_chute_photo" fieldname="upload_escape_chute_photo"    data-multiple="true" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.gif,.jpeg" filesize="3" maximum="5">
                                                                                                                    <input name="upload_escape_chute_photo" id="ctrl-upload_escape_chute_photo" required="" class="dropzone-input form-control" value="<?php  echo $data['upload_escape_chute_photo']; ?>" type="text"  />
                                                                                                                        <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                        <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <?php Html :: uploaded_files_list($data['upload_escape_chute_photo'], '#ctrl-upload_escape_chute_photo'); ?>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form-group ">
                                                                                                        <div class="row">
                                                                                                            <div class="col-sm-4">
                                                                                                                <label class="control-label" for="officer_remark_on_fire_escape_chute">Officer Remark On Fire Escape Chute <span class="text-danger">*</span></label>
                                                                                                            </div>
                                                                                                            <div class="col-sm-8">
                                                                                                                <div class="">
                                                                                                                    <input id="ctrl-officer_remark_on_fire_escape_chute"  value="<?php  echo $data['officer_remark_on_fire_escape_chute']; ?>" type="text" placeholder="Enter Officer Remark On Fire Escape Chute"  required="" name="officer_remark_on_fire_escape_chute"  class="form-control " />
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="form-group ">
                                                                                                            <div class="row">
                                                                                                                <div class="col-sm-4">
                                                                                                                    <label class="control-label" for="external_evaculation_system">External Evaculation System <span class="text-danger">*</span></label>
                                                                                                                </div>
                                                                                                                <div class="col-sm-8">
                                                                                                                    <div class="">
                                                                                                                        <input id="ctrl-external_evaculation_system"  value="<?php  echo $data['external_evaculation_system']; ?>" type="text" placeholder="Enter External Evaculation System"  required="" name="external_evaculation_system"  class="form-control " />
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="form-group ">
                                                                                                                <div class="row">
                                                                                                                    <div class="col-sm-4">
                                                                                                                        <label class="control-label" for="is_external_evaculation_system_photo_attached_id">Is External Evaculation System Photo Attached Id <span class="text-danger">*</span></label>
                                                                                                                    </div>
                                                                                                                    <div class="col-sm-8">
                                                                                                                        <div class="">
                                                                                                                            <select required=""  id="ctrl-is_external_evaculation_system_photo_attached_id" name="is_external_evaculation_system_photo_attached_id"  placeholder="Select a value ..."    class="custom-select" >
                                                                                                                                <option value="">Select a value ...</option>
                                                                                                                                <?php
                                                                                                                                $rec = $data['is_external_evaculation_system_photo_attached_id'];
                                                                                                                                $is_external_evaculation_system_photo_attached_id_options = $comp_model -> architecture_oc_noc_refuge_and_other_details_fourth_is_external_evaculation_system_photo_attached_id_option_list();
                                                                                                                                if(!empty($is_external_evaculation_system_photo_attached_id_options)){
                                                                                                                                foreach($is_external_evaculation_system_photo_attached_id_options as $option){
                                                                                                                                $value = (!empty($option['value']) ? $option['value'] : null);
                                                                                                                                $label = (!empty($option['label']) ? $option['label'] : $value);
                                                                                                                                $selected = ( $value == $rec ? 'selected' : null );
                                                                                                                                ?>
                                                                                                                                <option 
                                                                                                                                    <?php echo $selected; ?> value="<?php echo $value; ?>"><?php echo $label; ?>
                                                                                                                                </option>
                                                                                                                                <?php
                                                                                                                                }
                                                                                                                                }
                                                                                                                                ?>
                                                                                                                            </select>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="form-group ">
                                                                                                                <div class="row">
                                                                                                                    <div class="col-sm-4">
                                                                                                                        <label class="control-label" for="upload_external_evaculation_system_photo">Upload External Evaculation System Photo <span class="text-danger">*</span></label>
                                                                                                                    </div>
                                                                                                                    <div class="col-sm-8">
                                                                                                                        <div class="">
                                                                                                                            <div class="dropzone required" input="#ctrl-upload_external_evaculation_system_photo" fieldname="upload_external_evaculation_system_photo"    data-multiple="true" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.gif,.jpeg" filesize="3" maximum="5">
                                                                                                                                <input name="upload_external_evaculation_system_photo" id="ctrl-upload_external_evaculation_system_photo" required="" class="dropzone-input form-control" value="<?php  echo $data['upload_external_evaculation_system_photo']; ?>" type="text"  />
                                                                                                                                    <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                                    <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <?php Html :: uploaded_files_list($data['upload_external_evaculation_system_photo'], '#ctrl-upload_external_evaculation_system_photo'); ?>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="form-group ">
                                                                                                                    <div class="row">
                                                                                                                        <div class="col-sm-4">
                                                                                                                            <label class="control-label" for="officer_remark_on_external_evaculation_system">Officer Remark On External Evaculation System <span class="text-danger">*</span></label>
                                                                                                                        </div>
                                                                                                                        <div class="col-sm-8">
                                                                                                                            <div class="">
                                                                                                                                <input id="ctrl-officer_remark_on_external_evaculation_system"  value="<?php  echo $data['officer_remark_on_external_evaculation_system']; ?>" type="text" placeholder="Enter Officer Remark On External Evaculation System"  required="" name="officer_remark_on_external_evaculation_system"  class="form-control " />
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <div class="form-group ">
                                                                                                                        <div class="row">
                                                                                                                            <div class="col-sm-4">
                                                                                                                                <label class="control-label" for="lowering_device">Lowering Device <span class="text-danger">*</span></label>
                                                                                                                            </div>
                                                                                                                            <div class="col-sm-8">
                                                                                                                                <div class="">
                                                                                                                                    <input id="ctrl-lowering_device"  value="<?php  echo $data['lowering_device']; ?>" type="text" placeholder="Enter Lowering Device"  required="" name="lowering_device"  class="form-control " />
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="form-group ">
                                                                                                                            <div class="row">
                                                                                                                                <div class="col-sm-4">
                                                                                                                                    <label class="control-label" for="is_lowering_device_photo_attached_id">Is Lowering Device Photo Attached Id <span class="text-danger">*</span></label>
                                                                                                                                </div>
                                                                                                                                <div class="col-sm-8">
                                                                                                                                    <div class="">
                                                                                                                                        <select required=""  id="ctrl-is_lowering_device_photo_attached_id" name="is_lowering_device_photo_attached_id"  placeholder="Select a value ..."    class="custom-select" >
                                                                                                                                            <option value="">Select a value ...</option>
                                                                                                                                            <?php
                                                                                                                                            $rec = $data['is_lowering_device_photo_attached_id'];
                                                                                                                                            $is_lowering_device_photo_attached_id_options = $comp_model -> architecture_oc_noc_refuge_and_other_details_fourth_is_lowering_device_photo_attached_id_option_list();
                                                                                                                                            if(!empty($is_lowering_device_photo_attached_id_options)){
                                                                                                                                            foreach($is_lowering_device_photo_attached_id_options as $option){
                                                                                                                                            $value = (!empty($option['value']) ? $option['value'] : null);
                                                                                                                                            $label = (!empty($option['label']) ? $option['label'] : $value);
                                                                                                                                            $selected = ( $value == $rec ? 'selected' : null );
                                                                                                                                            ?>
                                                                                                                                            <option 
                                                                                                                                                <?php echo $selected; ?> value="<?php echo $value; ?>"><?php echo $label; ?>
                                                                                                                                            </option>
                                                                                                                                            <?php
                                                                                                                                            }
                                                                                                                                            }
                                                                                                                                            ?>
                                                                                                                                        </select>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="form-group ">
                                                                                                                            <div class="row">
                                                                                                                                <div class="col-sm-4">
                                                                                                                                    <label class="control-label" for="upload_lowering_device_photo">Upload Lowering Device Photo <span class="text-danger">*</span></label>
                                                                                                                                </div>
                                                                                                                                <div class="col-sm-8">
                                                                                                                                    <div class="">
                                                                                                                                        <div class="dropzone required" input="#ctrl-upload_lowering_device_photo" fieldname="upload_lowering_device_photo"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.gif,.jpeg" filesize="3" maximum="1">
                                                                                                                                            <input name="upload_lowering_device_photo" id="ctrl-upload_lowering_device_photo" required="" class="dropzone-input form-control" value="<?php  echo $data['upload_lowering_device_photo']; ?>" type="text"  />
                                                                                                                                                <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                                                <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                        <?php Html :: uploaded_files_list($data['upload_lowering_device_photo'], '#ctrl-upload_lowering_device_photo'); ?>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <div class="form-group ">
                                                                                                                                <div class="row">
                                                                                                                                    <div class="col-sm-4">
                                                                                                                                        <label class="control-label" for="officer_remark_on_lowering_device">Officer Remark On Lowering Device <span class="text-danger">*</span></label>
                                                                                                                                    </div>
                                                                                                                                    <div class="col-sm-8">
                                                                                                                                        <div class="">
                                                                                                                                            <input id="ctrl-officer_remark_on_lowering_device"  value="<?php  echo $data['officer_remark_on_lowering_device']; ?>" type="text" placeholder="Enter Officer Remark On Lowering Device"  required="" name="officer_remark_on_lowering_device"  class="form-control " />
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <div class="form-group ">
                                                                                                                                    <div class="row">
                                                                                                                                        <div class="col-sm-4">
                                                                                                                                            <label class="control-label" for="fire_brigade_inlet">Fire Brigade Inlet <span class="text-danger">*</span></label>
                                                                                                                                        </div>
                                                                                                                                        <div class="col-sm-8">
                                                                                                                                            <div class="">
                                                                                                                                                <input id="ctrl-fire_brigade_inlet"  value="<?php  echo $data['fire_brigade_inlet']; ?>" type="text" placeholder="Enter Fire Brigade Inlet"  required="" name="fire_brigade_inlet"  class="form-control " />
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    <div class="form-group ">
                                                                                                                                        <div class="row">
                                                                                                                                            <div class="col-sm-4">
                                                                                                                                                <label class="control-label" for="is_fire_brigade_inlet_photo_attached_id">Is Fire Brigade Inlet Photo Attached Id <span class="text-danger">*</span></label>
                                                                                                                                            </div>
                                                                                                                                            <div class="col-sm-8">
                                                                                                                                                <div class="">
                                                                                                                                                    <select required=""  id="ctrl-is_fire_brigade_inlet_photo_attached_id" name="is_fire_brigade_inlet_photo_attached_id"  placeholder="Select a value ..."    class="custom-select" >
                                                                                                                                                        <option value="">Select a value ...</option>
                                                                                                                                                        <?php
                                                                                                                                                        $rec = $data['is_fire_brigade_inlet_photo_attached_id'];
                                                                                                                                                        $is_fire_brigade_inlet_photo_attached_id_options = $comp_model -> architecture_oc_noc_refuge_and_other_details_fourth_is_fire_brigade_inlet_photo_attached_id_option_list();
                                                                                                                                                        if(!empty($is_fire_brigade_inlet_photo_attached_id_options)){
                                                                                                                                                        foreach($is_fire_brigade_inlet_photo_attached_id_options as $option){
                                                                                                                                                        $value = (!empty($option['value']) ? $option['value'] : null);
                                                                                                                                                        $label = (!empty($option['label']) ? $option['label'] : $value);
                                                                                                                                                        $selected = ( $value == $rec ? 'selected' : null );
                                                                                                                                                        ?>
                                                                                                                                                        <option 
                                                                                                                                                            <?php echo $selected; ?> value="<?php echo $value; ?>"><?php echo $label; ?>
                                                                                                                                                        </option>
                                                                                                                                                        <?php
                                                                                                                                                        }
                                                                                                                                                        }
                                                                                                                                                        ?>
                                                                                                                                                    </select>
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    <div class="form-group ">
                                                                                                                                        <div class="row">
                                                                                                                                            <div class="col-sm-4">
                                                                                                                                                <label class="control-label" for="upload_fire_brigade_inlet_photo">Upload Fire Brigade Inlet Photo <span class="text-danger">*</span></label>
                                                                                                                                            </div>
                                                                                                                                            <div class="col-sm-8">
                                                                                                                                                <div class="">
                                                                                                                                                    <div class="dropzone required" input="#ctrl-upload_fire_brigade_inlet_photo" fieldname="upload_fire_brigade_inlet_photo"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.gif,.jpeg" filesize="3" maximum="1">
                                                                                                                                                        <input name="upload_fire_brigade_inlet_photo" id="ctrl-upload_fire_brigade_inlet_photo" required="" class="dropzone-input form-control" value="<?php  echo $data['upload_fire_brigade_inlet_photo']; ?>" type="text"  />
                                                                                                                                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                                                            <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                    <?php Html :: uploaded_files_list($data['upload_fire_brigade_inlet_photo'], '#ctrl-upload_fire_brigade_inlet_photo'); ?>
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                        <div class="form-group ">
                                                                                                                                            <div class="row">
                                                                                                                                                <div class="col-sm-4">
                                                                                                                                                    <label class="control-label" for="officer_remark_on_fire_brigade_inlet">Officer Remark On Fire Brigade Inlet <span class="text-danger">*</span></label>
                                                                                                                                                </div>
                                                                                                                                                <div class="col-sm-8">
                                                                                                                                                    <div class="">
                                                                                                                                                        <input id="ctrl-officer_remark_on_fire_brigade_inlet"  value="<?php  echo $data['officer_remark_on_fire_brigade_inlet']; ?>" type="text" placeholder="Enter Officer Remark On Fire Brigade Inlet"  required="" name="officer_remark_on_fire_brigade_inlet"  class="form-control " />
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                            <div class="form-group ">
                                                                                                                                                <div class="row">
                                                                                                                                                    <div class="col-sm-4">
                                                                                                                                                        <label class="control-label" for="glass_facade_compliance">Glass Facade Compliance <span class="text-danger">*</span></label>
                                                                                                                                                    </div>
                                                                                                                                                    <div class="col-sm-8">
                                                                                                                                                        <div class="">
                                                                                                                                                            <input id="ctrl-glass_facade_compliance"  value="<?php  echo $data['glass_facade_compliance']; ?>" type="text" placeholder="Enter Glass Facade Compliance"  required="" name="glass_facade_compliance"  class="form-control " />
                                                                                                                                                            </div>
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                                <div class="form-group ">
                                                                                                                                                    <div class="row">
                                                                                                                                                        <div class="col-sm-4">
                                                                                                                                                            <label class="control-label" for="is_glass_facade_compliance_photo_attached_id">Is Glass Facade Compliance Photo Attached Id <span class="text-danger">*</span></label>
                                                                                                                                                        </div>
                                                                                                                                                        <div class="col-sm-8">
                                                                                                                                                            <div class="">
                                                                                                                                                                <select required=""  id="ctrl-is_glass_facade_compliance_photo_attached_id" name="is_glass_facade_compliance_photo_attached_id"  placeholder="Select a value ..."    class="custom-select" >
                                                                                                                                                                    <option value="">Select a value ...</option>
                                                                                                                                                                    <?php
                                                                                                                                                                    $rec = $data['is_glass_facade_compliance_photo_attached_id'];
                                                                                                                                                                    $is_glass_facade_compliance_photo_attached_id_options = $comp_model -> architecture_oc_noc_refuge_and_other_details_fourth_is_glass_facade_compliance_photo_attached_id_option_list();
                                                                                                                                                                    if(!empty($is_glass_facade_compliance_photo_attached_id_options)){
                                                                                                                                                                    foreach($is_glass_facade_compliance_photo_attached_id_options as $option){
                                                                                                                                                                    $value = (!empty($option['value']) ? $option['value'] : null);
                                                                                                                                                                    $label = (!empty($option['label']) ? $option['label'] : $value);
                                                                                                                                                                    $selected = ( $value == $rec ? 'selected' : null );
                                                                                                                                                                    ?>
                                                                                                                                                                    <option 
                                                                                                                                                                        <?php echo $selected; ?> value="<?php echo $value; ?>"><?php echo $label; ?>
                                                                                                                                                                    </option>
                                                                                                                                                                    <?php
                                                                                                                                                                    }
                                                                                                                                                                    }
                                                                                                                                                                    ?>
                                                                                                                                                                </select>
                                                                                                                                                            </div>
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                                <div class="form-group ">
                                                                                                                                                    <div class="row">
                                                                                                                                                        <div class="col-sm-4">
                                                                                                                                                            <label class="control-label" for="upload_glass_facade_compliance_photo">Upload Glass Facade Compliance Photo <span class="text-danger">*</span></label>
                                                                                                                                                        </div>
                                                                                                                                                        <div class="col-sm-8">
                                                                                                                                                            <div class="">
                                                                                                                                                                <div class="dropzone required" input="#ctrl-upload_glass_facade_compliance_photo" fieldname="upload_glass_facade_compliance_photo"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.gif,.jpeg" filesize="3" maximum="1">
                                                                                                                                                                    <input name="upload_glass_facade_compliance_photo" id="ctrl-upload_glass_facade_compliance_photo" required="" class="dropzone-input form-control" value="<?php  echo $data['upload_glass_facade_compliance_photo']; ?>" type="text"  />
                                                                                                                                                                        <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                                                                        <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                                                                    </div>
                                                                                                                                                                </div>
                                                                                                                                                                <?php Html :: uploaded_files_list($data['upload_glass_facade_compliance_photo'], '#ctrl-upload_glass_facade_compliance_photo'); ?>
                                                                                                                                                            </div>
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                    <div class="form-group ">
                                                                                                                                                        <div class="row">
                                                                                                                                                            <div class="col-sm-4">
                                                                                                                                                                <label class="control-label" for="officer_remark_on_glass_facade_compliance">Officer Remark On Glass Facade Compliance <span class="text-danger">*</span></label>
                                                                                                                                                            </div>
                                                                                                                                                            <div class="col-sm-8">
                                                                                                                                                                <div class="">
                                                                                                                                                                    <input id="ctrl-officer_remark_on_glass_facade_compliance"  value="<?php  echo $data['officer_remark_on_glass_facade_compliance']; ?>" type="text" placeholder="Enter Officer Remark On Glass Facade Compliance"  required="" name="officer_remark_on_glass_facade_compliance"  class="form-control " />
                                                                                                                                                                    </div>
                                                                                                                                                                </div>
                                                                                                                                                            </div>
                                                                                                                                                        </div>
                                                                                                                                                        <div class="form-group ">
                                                                                                                                                            <div class="row">
                                                                                                                                                                <div class="col-sm-4">
                                                                                                                                                                    <label class="control-label" for="car_parking_tower">Car Parking Tower <span class="text-danger">*</span></label>
                                                                                                                                                                </div>
                                                                                                                                                                <div class="col-sm-8">
                                                                                                                                                                    <div class="">
                                                                                                                                                                        <input id="ctrl-car_parking_tower"  value="<?php  echo $data['car_parking_tower']; ?>" type="text" placeholder="Enter Car Parking Tower"  required="" name="car_parking_tower"  class="form-control " />
                                                                                                                                                                        </div>
                                                                                                                                                                    </div>
                                                                                                                                                                </div>
                                                                                                                                                            </div>
                                                                                                                                                            <div class="form-group ">
                                                                                                                                                                <div class="row">
                                                                                                                                                                    <div class="col-sm-4">
                                                                                                                                                                        <label class="control-label" for="is_car_parking_tower_photo_attached_id">Is Car Parking Tower Photo Attached Id <span class="text-danger">*</span></label>
                                                                                                                                                                    </div>
                                                                                                                                                                    <div class="col-sm-8">
                                                                                                                                                                        <div class="">
                                                                                                                                                                            <select required=""  id="ctrl-is_car_parking_tower_photo_attached_id" name="is_car_parking_tower_photo_attached_id"  placeholder="Select a value ..."    class="custom-select" >
                                                                                                                                                                                <option value="">Select a value ...</option>
                                                                                                                                                                                <?php
                                                                                                                                                                                $rec = $data['is_car_parking_tower_photo_attached_id'];
                                                                                                                                                                                $is_car_parking_tower_photo_attached_id_options = $comp_model -> architecture_oc_noc_refuge_and_other_details_fourth_is_car_parking_tower_photo_attached_id_option_list();
                                                                                                                                                                                if(!empty($is_car_parking_tower_photo_attached_id_options)){
                                                                                                                                                                                foreach($is_car_parking_tower_photo_attached_id_options as $option){
                                                                                                                                                                                $value = (!empty($option['value']) ? $option['value'] : null);
                                                                                                                                                                                $label = (!empty($option['label']) ? $option['label'] : $value);
                                                                                                                                                                                $selected = ( $value == $rec ? 'selected' : null );
                                                                                                                                                                                ?>
                                                                                                                                                                                <option 
                                                                                                                                                                                    <?php echo $selected; ?> value="<?php echo $value; ?>"><?php echo $label; ?>
                                                                                                                                                                                </option>
                                                                                                                                                                                <?php
                                                                                                                                                                                }
                                                                                                                                                                                }
                                                                                                                                                                                ?>
                                                                                                                                                                            </select>
                                                                                                                                                                        </div>
                                                                                                                                                                    </div>
                                                                                                                                                                </div>
                                                                                                                                                            </div>
                                                                                                                                                            <div class="form-group ">
                                                                                                                                                                <div class="row">
                                                                                                                                                                    <div class="col-sm-4">
                                                                                                                                                                        <label class="control-label" for="upload_car_parking_tower_photo">Upload Car Parking Tower Photo <span class="text-danger">*</span></label>
                                                                                                                                                                    </div>
                                                                                                                                                                    <div class="col-sm-8">
                                                                                                                                                                        <div class="">
                                                                                                                                                                            <div class="dropzone required" input="#ctrl-upload_car_parking_tower_photo" fieldname="upload_car_parking_tower_photo"    data-multiple="true" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.gif,.jpeg" filesize="3" maximum="5">
                                                                                                                                                                                <input name="upload_car_parking_tower_photo" id="ctrl-upload_car_parking_tower_photo" required="" class="dropzone-input form-control" value="<?php  echo $data['upload_car_parking_tower_photo']; ?>" type="text"  />
                                                                                                                                                                                    <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                                                                                    <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                                                                                </div>
                                                                                                                                                                            </div>
                                                                                                                                                                            <?php Html :: uploaded_files_list($data['upload_car_parking_tower_photo'], '#ctrl-upload_car_parking_tower_photo'); ?>
                                                                                                                                                                        </div>
                                                                                                                                                                    </div>
                                                                                                                                                                </div>
                                                                                                                                                                <div class="form-group ">
                                                                                                                                                                    <div class="row">
                                                                                                                                                                        <div class="col-sm-4">
                                                                                                                                                                            <label class="control-label" for="officer_remark_on_car_parking_tower">Officer Remark On Car Parking Tower <span class="text-danger">*</span></label>
                                                                                                                                                                        </div>
                                                                                                                                                                        <div class="col-sm-8">
                                                                                                                                                                            <div class="">
                                                                                                                                                                                <input id="ctrl-officer_remark_on_car_parking_tower"  value="<?php  echo $data['officer_remark_on_car_parking_tower']; ?>" type="text" placeholder="Enter Officer Remark On Car Parking Tower"  required="" name="officer_remark_on_car_parking_tower"  class="form-control " />
                                                                                                                                                                                </div>
                                                                                                                                                                            </div>
                                                                                                                                                                        </div>
                                                                                                                                                                    </div>
                                                                                                                                                                    <div class="form-group ">
                                                                                                                                                                        <div class="row">
                                                                                                                                                                            <div class="col-sm-4">
                                                                                                                                                                                <label class="control-label" for="location_of_electric_sub_station">Location Of Electric Sub Station <span class="text-danger">*</span></label>
                                                                                                                                                                            </div>
                                                                                                                                                                            <div class="col-sm-8">
                                                                                                                                                                                <div class="">
                                                                                                                                                                                    <input id="ctrl-location_of_electric_sub_station"  value="<?php  echo $data['location_of_electric_sub_station']; ?>" type="text" placeholder="Enter Location Of Electric Sub Station"  required="" name="location_of_electric_sub_station"  class="form-control " />
                                                                                                                                                                                    </div>
                                                                                                                                                                                </div>
                                                                                                                                                                            </div>
                                                                                                                                                                        </div>
                                                                                                                                                                        <div class="form-group ">
                                                                                                                                                                            <div class="row">
                                                                                                                                                                                <div class="col-sm-4">
                                                                                                                                                                                    <label class="control-label" for="is_location_of_electric_sub_station_photo_attached_id">Is Location Of Electric Sub Station Photo Attached Id <span class="text-danger">*</span></label>
                                                                                                                                                                                </div>
                                                                                                                                                                                <div class="col-sm-8">
                                                                                                                                                                                    <div class="">
                                                                                                                                                                                        <select required=""  id="ctrl-is_location_of_electric_sub_station_photo_attached_id" name="is_location_of_electric_sub_station_photo_attached_id"  placeholder="Select a value ..."    class="custom-select" >
                                                                                                                                                                                            <option value="">Select a value ...</option>
                                                                                                                                                                                            <?php
                                                                                                                                                                                            $rec = $data['is_location_of_electric_sub_station_photo_attached_id'];
                                                                                                                                                                                            $is_location_of_electric_sub_station_photo_attached_id_options = $comp_model -> architecture_oc_noc_refuge_and_other_details_fourth_is_location_of_electric_sub_station_photo_attached_id_option_list();
                                                                                                                                                                                            if(!empty($is_location_of_electric_sub_station_photo_attached_id_options)){
                                                                                                                                                                                            foreach($is_location_of_electric_sub_station_photo_attached_id_options as $option){
                                                                                                                                                                                            $value = (!empty($option['value']) ? $option['value'] : null);
                                                                                                                                                                                            $label = (!empty($option['label']) ? $option['label'] : $value);
                                                                                                                                                                                            $selected = ( $value == $rec ? 'selected' : null );
                                                                                                                                                                                            ?>
                                                                                                                                                                                            <option 
                                                                                                                                                                                                <?php echo $selected; ?> value="<?php echo $value; ?>"><?php echo $label; ?>
                                                                                                                                                                                            </option>
                                                                                                                                                                                            <?php
                                                                                                                                                                                            }
                                                                                                                                                                                            }
                                                                                                                                                                                            ?>
                                                                                                                                                                                        </select>
                                                                                                                                                                                    </div>
                                                                                                                                                                                </div>
                                                                                                                                                                            </div>
                                                                                                                                                                        </div>
                                                                                                                                                                        <div class="form-group ">
                                                                                                                                                                            <div class="row">
                                                                                                                                                                                <div class="col-sm-4">
                                                                                                                                                                                    <label class="control-label" for="upload_location_of_electric_sub_station_photo">Upload Location Of Electric Sub Station Photo <span class="text-danger">*</span></label>
                                                                                                                                                                                </div>
                                                                                                                                                                                <div class="col-sm-8">
                                                                                                                                                                                    <div class="">
                                                                                                                                                                                        <div class="dropzone required" input="#ctrl-upload_location_of_electric_sub_station_photo" fieldname="upload_location_of_electric_sub_station_photo"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.gif,.jpeg" filesize="3" maximum="1">
                                                                                                                                                                                            <input name="upload_location_of_electric_sub_station_photo" id="ctrl-upload_location_of_electric_sub_station_photo" required="" class="dropzone-input form-control" value="<?php  echo $data['upload_location_of_electric_sub_station_photo']; ?>" type="text"  />
                                                                                                                                                                                                <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                                                                                                <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                                                                                            </div>
                                                                                                                                                                                        </div>
                                                                                                                                                                                        <?php Html :: uploaded_files_list($data['upload_location_of_electric_sub_station_photo'], '#ctrl-upload_location_of_electric_sub_station_photo'); ?>
                                                                                                                                                                                    </div>
                                                                                                                                                                                </div>
                                                                                                                                                                            </div>
                                                                                                                                                                            <div class="form-group ">
                                                                                                                                                                                <div class="row">
                                                                                                                                                                                    <div class="col-sm-4">
                                                                                                                                                                                        <label class="control-label" for="officer_remark_on_location_of_electric_sub_station">Officer Remark On Location Of Electric Sub Station <span class="text-danger">*</span></label>
                                                                                                                                                                                    </div>
                                                                                                                                                                                    <div class="col-sm-8">
                                                                                                                                                                                        <div class="">
                                                                                                                                                                                            <input id="ctrl-officer_remark_on_location_of_electric_sub_station"  value="<?php  echo $data['officer_remark_on_location_of_electric_sub_station']; ?>" type="text" placeholder="Enter Officer Remark On Location Of Electric Sub Station"  required="" name="officer_remark_on_location_of_electric_sub_station"  class="form-control " />
                                                                                                                                                                                            </div>
                                                                                                                                                                                        </div>
                                                                                                                                                                                    </div>
                                                                                                                                                                                </div>
                                                                                                                                                                                <div class="form-group ">
                                                                                                                                                                                    <div class="row">
                                                                                                                                                                                        <div class="col-sm-4">
                                                                                                                                                                                            <label class="control-label" for="location_of_dg_set">Location Of Dg Set <span class="text-danger">*</span></label>
                                                                                                                                                                                        </div>
                                                                                                                                                                                        <div class="col-sm-8">
                                                                                                                                                                                            <div class="">
                                                                                                                                                                                                <input id="ctrl-location_of_dg_set"  value="<?php  echo $data['location_of_dg_set']; ?>" type="text" placeholder="Enter Location Of Dg Set"  required="" name="location_of_dg_set"  class="form-control " />
                                                                                                                                                                                                </div>
                                                                                                                                                                                            </div>
                                                                                                                                                                                        </div>
                                                                                                                                                                                    </div>
                                                                                                                                                                                    <div class="form-group ">
                                                                                                                                                                                        <div class="row">
                                                                                                                                                                                            <div class="col-sm-4">
                                                                                                                                                                                                <label class="control-label" for="is_location_of_dg_set_photo_attached_id">Is Location Of Dg Set Photo Attached Id <span class="text-danger">*</span></label>
                                                                                                                                                                                            </div>
                                                                                                                                                                                            <div class="col-sm-8">
                                                                                                                                                                                                <div class="">
                                                                                                                                                                                                    <select required=""  id="ctrl-is_location_of_dg_set_photo_attached_id" name="is_location_of_dg_set_photo_attached_id"  placeholder="Select a value ..."    class="custom-select" >
                                                                                                                                                                                                        <option value="">Select a value ...</option>
                                                                                                                                                                                                        <?php
                                                                                                                                                                                                        $rec = $data['is_location_of_dg_set_photo_attached_id'];
                                                                                                                                                                                                        $is_location_of_dg_set_photo_attached_id_options = $comp_model -> architecture_oc_noc_refuge_and_other_details_fourth_is_location_of_dg_set_photo_attached_id_option_list();
                                                                                                                                                                                                        if(!empty($is_location_of_dg_set_photo_attached_id_options)){
                                                                                                                                                                                                        foreach($is_location_of_dg_set_photo_attached_id_options as $option){
                                                                                                                                                                                                        $value = (!empty($option['value']) ? $option['value'] : null);
                                                                                                                                                                                                        $label = (!empty($option['label']) ? $option['label'] : $value);
                                                                                                                                                                                                        $selected = ( $value == $rec ? 'selected' : null );
                                                                                                                                                                                                        ?>
                                                                                                                                                                                                        <option 
                                                                                                                                                                                                            <?php echo $selected; ?> value="<?php echo $value; ?>"><?php echo $label; ?>
                                                                                                                                                                                                        </option>
                                                                                                                                                                                                        <?php
                                                                                                                                                                                                        }
                                                                                                                                                                                                        }
                                                                                                                                                                                                        ?>
                                                                                                                                                                                                    </select>
                                                                                                                                                                                                </div>
                                                                                                                                                                                            </div>
                                                                                                                                                                                        </div>
                                                                                                                                                                                    </div>
                                                                                                                                                                                    <div class="form-group ">
                                                                                                                                                                                        <div class="row">
                                                                                                                                                                                            <div class="col-sm-4">
                                                                                                                                                                                                <label class="control-label" for="upload_location_of_dg_set_photo">Upload Location Of Dg Set Photo <span class="text-danger">*</span></label>
                                                                                                                                                                                            </div>
                                                                                                                                                                                            <div class="col-sm-8">
                                                                                                                                                                                                <div class="">
                                                                                                                                                                                                    <div class="dropzone required" input="#ctrl-upload_location_of_dg_set_photo" fieldname="upload_location_of_dg_set_photo"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.gif,.jpeg" filesize="3" maximum="1">
                                                                                                                                                                                                        <input name="upload_location_of_dg_set_photo" id="ctrl-upload_location_of_dg_set_photo" required="" class="dropzone-input form-control" value="<?php  echo $data['upload_location_of_dg_set_photo']; ?>" type="text"  />
                                                                                                                                                                                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                                                                                                            <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                    <?php Html :: uploaded_files_list($data['upload_location_of_dg_set_photo'], '#ctrl-upload_location_of_dg_set_photo'); ?>
                                                                                                                                                                                                </div>
                                                                                                                                                                                            </div>
                                                                                                                                                                                        </div>
                                                                                                                                                                                        <div class="form-group ">
                                                                                                                                                                                            <div class="row">
                                                                                                                                                                                                <div class="col-sm-4">
                                                                                                                                                                                                    <label class="control-label" for="officer_remark_on_location_of_dg_set">Officer Remark On Location Of Dg Set <span class="text-danger">*</span></label>
                                                                                                                                                                                                </div>
                                                                                                                                                                                                <div class="col-sm-8">
                                                                                                                                                                                                    <div class="">
                                                                                                                                                                                                        <input id="ctrl-officer_remark_on_location_of_dg_set"  value="<?php  echo $data['officer_remark_on_location_of_dg_set']; ?>" type="text" placeholder="Enter Officer Remark On Location Of Dg Set"  required="" name="officer_remark_on_location_of_dg_set"  class="form-control " />
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                </div>
                                                                                                                                                                                            </div>
                                                                                                                                                                                            <div class="form-group ">
                                                                                                                                                                                                <div class="row">
                                                                                                                                                                                                    <div class="col-sm-4">
                                                                                                                                                                                                        <label class="control-label" for="other_remarks">Other Remarks <span class="text-danger">*</span></label>
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                    <div class="col-sm-8">
                                                                                                                                                                                                        <div class="">
                                                                                                                                                                                                            <input id="ctrl-other_remarks"  value="<?php  echo $data['other_remarks']; ?>" type="number" placeholder="Enter Other Remarks" step="1"  required="" name="other_remarks"  class="form-control " />
                                                                                                                                                                                                            </div>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                </div>
                                                                                                                                                                                                <div class="form-group ">
                                                                                                                                                                                                    <div class="row">
                                                                                                                                                                                                        <div class="col-sm-4">
                                                                                                                                                                                                            <label class="control-label" for="is_any_other_photo_attached_id">Is Any Other Photo Attached Id <span class="text-danger">*</span></label>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                        <div class="col-sm-8">
                                                                                                                                                                                                            <div class="">
                                                                                                                                                                                                                <select required=""  id="ctrl-is_any_other_photo_attached_id" name="is_any_other_photo_attached_id"  placeholder="Select a value ..."    class="custom-select" >
                                                                                                                                                                                                                    <option value="">Select a value ...</option>
                                                                                                                                                                                                                    <?php
                                                                                                                                                                                                                    $rec = $data['is_any_other_photo_attached_id'];
                                                                                                                                                                                                                    $is_any_other_photo_attached_id_options = $comp_model -> architecture_oc_noc_refuge_and_other_details_fourth_is_any_other_photo_attached_id_option_list();
                                                                                                                                                                                                                    if(!empty($is_any_other_photo_attached_id_options)){
                                                                                                                                                                                                                    foreach($is_any_other_photo_attached_id_options as $option){
                                                                                                                                                                                                                    $value = (!empty($option['value']) ? $option['value'] : null);
                                                                                                                                                                                                                    $label = (!empty($option['label']) ? $option['label'] : $value);
                                                                                                                                                                                                                    $selected = ( $value == $rec ? 'selected' : null );
                                                                                                                                                                                                                    ?>
                                                                                                                                                                                                                    <option 
                                                                                                                                                                                                                        <?php echo $selected; ?> value="<?php echo $value; ?>"><?php echo $label; ?>
                                                                                                                                                                                                                    </option>
                                                                                                                                                                                                                    <?php
                                                                                                                                                                                                                    }
                                                                                                                                                                                                                    }
                                                                                                                                                                                                                    ?>
                                                                                                                                                                                                                </select>
                                                                                                                                                                                                            </div>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                </div>
                                                                                                                                                                                                <div class="form-group ">
                                                                                                                                                                                                    <div class="row">
                                                                                                                                                                                                        <div class="col-sm-4">
                                                                                                                                                                                                            <label class="control-label" for="upload_other_photos">Upload Other Photos <span class="text-danger">*</span></label>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                        <div class="col-sm-8">
                                                                                                                                                                                                            <div class="">
                                                                                                                                                                                                                <div class="dropzone required" input="#ctrl-upload_other_photos" fieldname="upload_other_photos"    data-multiple="true" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.gif,.jpeg" filesize="3" maximum="5">
                                                                                                                                                                                                                    <input name="upload_other_photos" id="ctrl-upload_other_photos" required="" class="dropzone-input form-control" value="<?php  echo $data['upload_other_photos']; ?>" type="text"  />
                                                                                                                                                                                                                        <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                                                                                                                        <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                <?php Html :: uploaded_files_list($data['upload_other_photos'], '#ctrl-upload_other_photos'); ?>
                                                                                                                                                                                                            </div>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                    <div class="form-group ">
                                                                                                                                                                                                        <div class="row">
                                                                                                                                                                                                            <div class="col-sm-4">
                                                                                                                                                                                                                <label class="control-label" for="officer_remark_other">Officer Remark Other <span class="text-danger">*</span></label>
                                                                                                                                                                                                            </div>
                                                                                                                                                                                                            <div class="col-sm-8">
                                                                                                                                                                                                                <div class="">
                                                                                                                                                                                                                    <input id="ctrl-officer_remark_other"  value="<?php  echo $data['officer_remark_other']; ?>" type="text" placeholder="Enter Officer Remark Other"  required="" name="officer_remark_other"  class="form-control " />
                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                </div>
                                                                                                                                                                                                            </div>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                    <div class="form-ajax-status"></div>
                                                                                                                                                                                                    <div class="form-group text-center">
                                                                                                                                                                                                        <button class="btn btn-primary" type="submit">
                                                                                                                                                                                                            Update
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
