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
                    <h4 class="record-title"><strong style='color: black;'>Fire Final Part NOC / फायर फायनल पार्ट ना हरकत दाखला</strong></h4>
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
                        <form id="fire_final_part_noc-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-vertical needs-validation" action="<?php print_link("fire_final_part_noc/add?csrf_token=$csrf_token") ?>" method="post">
                            <div>
                                <div class="form-group ">
                                    <label class="control-label" for="is_revised_provisional_taken">Is Provisional Fire NOC Taken <span class="text-danger">*</span></label>
                                    <div id="ctrl-is_revised_provisional_taken-holder" class=""> 
                                        <select required=""  id="ctrl-is_revised_provisional_taken" name="is_revised_provisional_taken"  placeholder="Select a value ..."    class="custom-select" >
                                            <option value="">Select a value ...</option>
                                            <?php
                                            $is_revised_provisional_taken_options = Menu :: $is_redevelopment;
                                            if(!empty($is_revised_provisional_taken_options)){
                                            foreach($is_revised_provisional_taken_options as $option){
                                            $value = $option['value'];
                                            $label = $option['label'];
                                            $selected = $this->set_field_selected('is_revised_provisional_taken', $value, "");
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
                                    <label class="control-label" for="provisional_noc_number">Provisional Fire Noc Number <span class='text-danger'>*</span> </label>
                                    <div id="ctrl-provisional_noc_number-holder" class=""> 
                                        <input id="ctrl-provisional_noc_number"  value="<?php  echo $this->set_field_value('provisional_noc_number',""); ?>" type="text" placeholder="Enter Provisional Noc Number "  name="provisional_noc_number"  class="form-control " />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label class="control-label" for="is_revised_noc_taken">Is Revised Provisional Fire Noc Taken <span class="text-danger">*</span></label>
                                        <div id="ctrl-is_revised_noc_taken-holder" class=""> 
                                            <select required=""  id="ctrl-is_revised_noc_taken" name="is_revised_noc_taken"  placeholder="Select a value ..."    class="custom-select" >
                                                <option value="">Select a value ...</option>
                                                <?php
                                                $is_revised_noc_taken_options = Menu :: $is_redevelopment;
                                                if(!empty($is_revised_noc_taken_options)){
                                                foreach($is_revised_noc_taken_options as $option){
                                                $value = $option['value'];
                                                $label = $option['label'];
                                                $selected = $this->set_field_selected('is_revised_noc_taken', $value, "");
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
                                        <label class="control-label" for="revised_provisional_noc_number">Revised Provisional Fire Noc Number <span class='text-danger'>*</span> </label>
                                        <div id="ctrl-revised_provisional_noc_number-holder" class=""> 
                                            <input id="ctrl-revised_provisional_noc_number"  value="<?php  echo $this->set_field_value('revised_provisional_noc_number',""); ?>" type="text" placeholder="Enter Revised Provisional Noc Number "  name="revised_provisional_noc_number"  class="form-control " />
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label class="control-label" for="applicant_name">APPLICANT NAME  <span class="text-danger">*</span></label>
                                            <div id="ctrl-applicant_name-holder" class=""> 
                                                <input id="ctrl-applicant_name"  value="<?php  echo $this->set_field_value('applicant_name',""); ?>" type="text" placeholder="Enter Applicant Name"  required="" name="applicant_name"  class="form-control " />
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <label class="control-label" for="applicant_address">APPLICANT ADDRESS  <span class="text-danger">*</span></label>
                                                <div id="ctrl-applicant_address-holder" class=""> 
                                                    <input id="ctrl-applicant_address"  value="<?php  echo $this->set_field_value('applicant_address',""); ?>" type="text" placeholder="Enter Applicant Address"  required="" name="applicant_address"  class="form-control " />
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label class="control-label" for="zone_id">Ward / प्रभाग  <span class="text-danger">*</span></label>
                                                    <div id="ctrl-zone_id-holder" class=""> 
                                                        <select required=""  id="ctrl-zone_id" name="zone_id"  placeholder="Select a value ..."    class="custom-select" >
                                                            <option value="">Select a value ...</option>
                                                            <?php 
                                                            $zone_id_options = $comp_model -> fire_final_part_noc_zone_id_option_list();
                                                            if(!empty($zone_id_options)){
                                                            foreach($zone_id_options as $option){
                                                            $value = (!empty($option['value']) ? $option['value'] : null);
                                                            $label = (!empty($option['label']) ? $option['label'] : $value);
                                                            $selected = $this->set_field_selected('zone_id',$value, "");
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
                                                    <label class="control-label" for="mobile_no">MOBILE NO.  <span class="text-danger">*</span></label>
                                                    <div id="ctrl-mobile_no-holder" class=""> 
                                                        <input id="ctrl-mobile_no"  value="<?php  echo $this->set_field_value('mobile_no',""); ?>" type="text" placeholder="Enter Mobile No"  required="" name="mobile_no"  class="form-control " />
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <label class="control-label" for="architect_or_developers_lic_number">Architect or Developers Lic Number and Name <span class="text-danger">*</span></label>
                                                        <div id="ctrl-architect_or_developers_lic_number-holder" class=""> 
                                                            <input id="ctrl-architect_or_developers_lic_number"  value="<?php  echo $this->set_field_value('architect_or_developers_lic_number',""); ?>" type="text" placeholder="Enter Architect or Developers Lic Number and Name"  required="" name="architect_or_developers_lic_number"  class="form-control " />
                                                            </div>
                                                        </div>
                                                        <div class="form-group ">
                                                            <label class="control-label" for="survey_number">SURVEY NUMBER  <span class="text-danger">*</span></label>
                                                            <div id="ctrl-survey_number-holder" class=""> 
                                                                <input id="ctrl-survey_number"  value="<?php  echo $this->set_field_value('survey_number',""); ?>" type="text" placeholder="Enter Survey Number"  required="" name="survey_number"  class="form-control " />
                                                                </div>
                                                            </div>
                                                            <div class="form-group ">
                                                                <label class="control-label" for="village">VILLAGE  <span class="text-danger">*</span></label>
                                                                <div id="ctrl-village-holder" class=""> 
                                                                    <input id="ctrl-village"  value="<?php  echo $this->set_field_value('village',""); ?>" type="text" placeholder="Enter Village"  required="" name="village"  class="form-control " />
                                                                    </div>
                                                                </div>
                                                                <div class="form-group ">
                                                                    <label class="control-label" for="vp_number">VP NUMBER  </label>
                                                                    <div id="ctrl-vp_number-holder" class=""> 
                                                                        <input id="ctrl-vp_number"  value="<?php  echo $this->set_field_value('vp_number',""); ?>" type="text" placeholder="Enter Vp Number"  name="vp_number"  class="form-control " />
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group ">
                                                                        <label class="control-label" for="road_width_north">Road Width North (In Meter) <span class="text-danger">*</span></label>
                                                                        <div id="ctrl-road_width_north-holder" class=""> 
                                                                            <input id="ctrl-road_width_north"  value="<?php  echo $this->set_field_value('road_width_north',""); ?>" type="number" placeholder="Enter Road Width North (In Meter)" step="any"  required="" name="road_width_north"  class="form-control " />
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group ">
                                                                            <label class="control-label" for="road_width_south">Road Width South (In Meter) <span class="text-danger">*</span></label>
                                                                            <div id="ctrl-road_width_south-holder" class=""> 
                                                                                <input id="ctrl-road_width_south"  value="<?php  echo $this->set_field_value('road_width_south',""); ?>" type="number" placeholder="Enter Road Width South (In Meter)" step="any"  required="" name="road_width_south"  class="form-control " />
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group ">
                                                                                <label class="control-label" for="road_width_east">Road Width East (In Meter) <span class="text-danger">*</span></label>
                                                                                <div id="ctrl-road_width_east-holder" class=""> 
                                                                                    <input id="ctrl-road_width_east"  value="<?php  echo $this->set_field_value('road_width_east',""); ?>" type="number" placeholder="Enter Road Width East (In Meter)" step="any"  required="" name="road_width_east"  class="form-control " />
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group ">
                                                                                    <label class="control-label" for="road_width_west">Road Width West (In Meter) <span class="text-danger">*</span></label>
                                                                                    <div id="ctrl-road_width_west-holder" class=""> 
                                                                                        <input id="ctrl-road_width_west"  value="<?php  echo $this->set_field_value('road_width_west',""); ?>" type="number" placeholder="Enter Road Width West (In Meter)" step="any"  required="" name="road_width_west"  class="form-control " />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group ">
                                                                                        <label class="control-label" for="open_space_margin_north">OPEN SPACE MARGIN NORTH  <span class="text-danger">*</span></label>
                                                                                        <div id="ctrl-open_space_margin_north-holder" class=""> 
                                                                                            <input id="ctrl-open_space_margin_north"  value="<?php  echo $this->set_field_value('open_space_margin_north',""); ?>" type="number" placeholder="Enter Open Space Margin North" step="any"  required="" name="open_space_margin_north"  class="form-control " />
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group ">
                                                                                            <label class="control-label" for="open_space_margin_south">OPEN SPACE MARGIN SOUTH  <span class="text-danger">*</span></label>
                                                                                            <div id="ctrl-open_space_margin_south-holder" class=""> 
                                                                                                <input id="ctrl-open_space_margin_south"  value="<?php  echo $this->set_field_value('open_space_margin_south',""); ?>" type="number" placeholder="Enter Open Space Margin South" step="any"  required="" name="open_space_margin_south"  class="form-control " />
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group ">
                                                                                                <label class="control-label" for="open_space_margin_east">OPEN SPACE MARGIN EAST  <span class="text-danger">*</span></label>
                                                                                                <div id="ctrl-open_space_margin_east-holder" class=""> 
                                                                                                    <input id="ctrl-open_space_margin_east"  value="<?php  echo $this->set_field_value('open_space_margin_east',""); ?>" type="number" placeholder="Enter Open Space Margin East" step="any"  required="" name="open_space_margin_east"  class="form-control " />
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="form-group ">
                                                                                                    <label class="control-label" for="open_space_margin_west">OPEN SPACE MARGIN WEST  <span class="text-danger">*</span></label>
                                                                                                    <div id="ctrl-open_space_margin_west-holder" class=""> 
                                                                                                        <input id="ctrl-open_space_margin_west"  value="<?php  echo $this->set_field_value('open_space_margin_west',""); ?>" type="number" placeholder="Enter Open Space Margin West" step="any"  required="" name="open_space_margin_west"  class="form-control " />
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form-group ">
                                                                                                        <label class="control-label" for="upload_provisional_fire_noc">UPLOAD PROVISIONAL FIRE NOC  <span class="text-danger">*</span></label>
                                                                                                        <div id="ctrl-upload_provisional_fire_noc-holder" class=""> 
                                                                                                            <div class="dropzone required" input="#ctrl-upload_provisional_fire_noc" fieldname="upload_provisional_fire_noc"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                                                                <input name="upload_provisional_fire_noc" id="ctrl-upload_provisional_fire_noc" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_provisional_fire_noc',""); ?>" type="text"  />
                                                                                                                    <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                    <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <small class="form-text"><p style="color: red; font-size: 12px;">Upload file size should not exceed 3 MB.</p></small>
                                                                                                        </div>
                                                                                                        <div class="form-group ">
                                                                                                            <label class="control-label" for="upload_revised_provisional_fire_noc">UPLOAD REVISED PROVISIONAL FIRE NOC  <span class="text-danger">*</span></label>
                                                                                                            <div id="ctrl-upload_revised_provisional_fire_noc-holder" class=""> 
                                                                                                                <div class="dropzone required" input="#ctrl-upload_revised_provisional_fire_noc" fieldname="upload_revised_provisional_fire_noc"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                                                                    <input name="upload_revised_provisional_fire_noc" id="ctrl-upload_revised_provisional_fire_noc" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_revised_provisional_fire_noc',""); ?>" type="text"  />
                                                                                                                        <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                        <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <small class="form-text"><p style="color: red; font-size: 12px;">Upload file size should not exceed 3 MB.</p></small>
                                                                                                            </div>
                                                                                                            <div class="form-group ">
                                                                                                                <label class="control-label" for="upload_architect_application_letter">UPLOAD ARCHITECT APPLICATION LETTER  <span class="text-danger">*</span></label>
                                                                                                                <div id="ctrl-upload_architect_application_letter-holder" class=""> 
                                                                                                                    <div class="dropzone required" input="#ctrl-upload_architect_application_letter" fieldname="upload_architect_application_letter"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                                                                        <input name="upload_architect_application_letter" id="ctrl-upload_architect_application_letter" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_architect_application_letter',""); ?>" type="text"  />
                                                                                                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                            <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <small class="form-text"><p style="color: red; font-size: 12px;">Upload file size should not exceed 3 MB.</p></small>
                                                                                                                </div>
                                                                                                                <div class="form-group ">
                                                                                                                    <label class="control-label" for="upload_builders_application_letter">UPLOAD BUILDER’S APPLICATION LETTER  <span class="text-danger">*</span></label>
                                                                                                                    <div id="ctrl-upload_builders_application_letter-holder" class=""> 
                                                                                                                        <div class="dropzone required" input="#ctrl-upload_builders_application_letter" fieldname="upload_builders_application_letter"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                                                                            <input name="upload_builders_application_letter" id="ctrl-upload_builders_application_letter" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_builders_application_letter',""); ?>" type="text"  />
                                                                                                                                <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                                <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <small class="form-text"><p style="color: red; font-size: 12px;">Upload file size should not exceed 3 MB.</p></small>
                                                                                                                    </div>
                                                                                                                    <div class="form-group ">
                                                                                                                        <label class="control-label" for="upload_gross_built_up_area_certificate">UPLOAD GROSS BUILT-UP AREA CERTIFICATE  <span class="text-danger">*</span></label>
                                                                                                                        <div id="ctrl-upload_gross_built_up_area_certificate-holder" class=""> 
                                                                                                                            <div class="dropzone required" input="#ctrl-upload_gross_built_up_area_certificate" fieldname="upload_gross_built_up_area_certificate"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                                                                                <input name="upload_gross_built_up_area_certificate" id="ctrl-upload_gross_built_up_area_certificate" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_gross_built_up_area_certificate',""); ?>" type="text"  />
                                                                                                                                    <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                                    <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <small class="form-text"><p style="color: red; font-size: 12px;">Upload file size should not exceed 3 MB.</p></small>
                                                                                                                        </div>
                                                                                                                        <div class="form-group ">
                                                                                                                            <label class="control-label" for="upload_cc_rdp_oc">UPLOAD CC / RDP / OC <span class="text-danger">*</span></label>
                                                                                                                            <div id="ctrl-upload_cc_rdp_oc-holder" class=""> 
                                                                                                                                <div class="dropzone required" input="#ctrl-upload_cc_rdp_oc" fieldname="upload_cc_rdp_oc"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                                                                                    <input name="upload_cc_rdp_oc" id="ctrl-upload_cc_rdp_oc" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_cc_rdp_oc',""); ?>" type="text"  />
                                                                                                                                        <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                                        <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <small class="form-text"><p style="color: red; font-size: 12px;">Upload file size should not exceed 3 MB.</p></small>
                                                                                                                            </div>
                                                                                                                            <div class="form-group ">
                                                                                                                                <label class="control-label" for="upload_floor_plan_set">UPLOAD FLOOR PLAN SET  <span class="text-danger">*</span></label>
                                                                                                                                <div id="ctrl-upload_floor_plan_set-holder" class=""> 
                                                                                                                                    <div class="dropzone required" input="#ctrl-upload_floor_plan_set" fieldname="upload_floor_plan_set"    data-multiple="true" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="30" maximum="10">
                                                                                                                                        <input name="upload_floor_plan_set" id="ctrl-upload_floor_plan_set" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_floor_plan_set',""); ?>" type="text"  />
                                                                                                                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                                            <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    <small class="form-text"><p style="color: red; font-size: 12px;">Upload file size should not exceed 30 MB.</p></small>
                                                                                                                                </div>
                                                                                                                                <div class="form-group ">
                                                                                                                                    <label class="control-label" for="upload_location_site_photo">UPLOAD LOCATION / SITE PHOTO <span class="text-danger">*</span></label>
                                                                                                                                    <div id="ctrl-upload_location_site_photo-holder" class=""> 
                                                                                                                                        <div class="dropzone required" input="#ctrl-upload_location_site_photo" fieldname="upload_location_site_photo"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                                                                                            <input name="upload_location_site_photo" id="ctrl-upload_location_site_photo" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_location_site_photo',""); ?>" type="text"  />
                                                                                                                                                <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                                                <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                        <small class="form-text"><p style="color: red; font-size: 12px;">Upload file size should not exceed 3 MB.</p></small>
                                                                                                                                    </div>
                                                                                                                                    <div class="form-group ">
                                                                                                                                        <label class="control-label" for="upload_google_map_of_land_in_color">UPLOAD GOOGLE MAP OF LAND (COLOR)  <span class="text-danger">*</span></label>
                                                                                                                                        <div id="ctrl-upload_google_map_of_land_in_color-holder" class=""> 
                                                                                                                                            <div class="dropzone required" input="#ctrl-upload_google_map_of_land_in_color" fieldname="upload_google_map_of_land_in_color"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                                                                                                <input name="upload_google_map_of_land_in_color" id="ctrl-upload_google_map_of_land_in_color" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_google_map_of_land_in_color',""); ?>" type="text"  />
                                                                                                                                                    <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                                                    <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                            <small class="form-text"><p style="color: red; font-size: 12px;">Upload file size should not exceed 3 MB.</p></small>
                                                                                                                                        </div>
                                                                                                                                        <div class="form-group ">
                                                                                                                                            <label class="control-label" for="upload_form_a"> Upload FORM-A Certificate From License Agency <span class="text-danger">*</span></label>
                                                                                                                                            <div id="ctrl-upload_form_a-holder" class=""> 
                                                                                                                                                <div class="dropzone required" input="#ctrl-upload_form_a" fieldname="upload_form_a"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                                                                                                    <input name="upload_form_a" id="ctrl-upload_form_a" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_form_a',""); ?>" type="text"  />
                                                                                                                                                        <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                                                        <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                                <small class="form-text"><p style="color: red; font-size: 12px;">Upload file size should not exceed 3 MB.</p></small>
                                                                                                                                            </div>
                                                                                                                                            <div class="form-group ">
                                                                                                                                                <label class="control-label" for="upload_lic_of_mfs">Upload License Copy Of MFS <span class="text-danger">*</span></label>
                                                                                                                                                <div id="ctrl-upload_lic_of_mfs-holder" class=""> 
                                                                                                                                                    <div class="dropzone required" input="#ctrl-upload_lic_of_mfs" fieldname="upload_lic_of_mfs"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                                                                                                        <input name="upload_lic_of_mfs" id="ctrl-upload_lic_of_mfs" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_lic_of_mfs',""); ?>" type="text"  />
                                                                                                                                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                                                            <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                    <small class="form-text"><p style="color: red; font-size: 12px;">Upload file size should not exceed 3 MB.</p></small>
                                                                                                                                                </div>
                                                                                                                                                <div class="form-group ">
                                                                                                                                                    <label class="control-label" for="upload_electric_contract">Upload Electric Contractor Certificate & License Copy  <span class="text-danger">*</span></label>
                                                                                                                                                    <div id="ctrl-upload_electric_contract-holder" class=""> 
                                                                                                                                                        <div class="dropzone required" input="#ctrl-upload_electric_contract" fieldname="upload_electric_contract"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                                                                                                            <input name="upload_electric_contract" id="ctrl-upload_electric_contract" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_electric_contract',""); ?>" type="text"  />
                                                                                                                                                                <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                                                                <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                                                            </div>
                                                                                                                                                        </div>
                                                                                                                                                        <small class="form-text"><p style="color: red; font-size: 12px;">Upload file size should not exceed 3 MB.</p></small>
                                                                                                                                                    </div>
                                                                                                                                                    <div class="form-group ">
                                                                                                                                                        <label class="control-label" for="upload_site_photo">UPLOAD SITE PHOTO  <span class="text-danger">*</span></label>
                                                                                                                                                        <div id="ctrl-upload_site_photo-holder" class=""> 
                                                                                                                                                            <div class="dropzone required" input="#ctrl-upload_site_photo" fieldname="upload_site_photo"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.gif,.jpeg" filesize="3" maximum="1">
                                                                                                                                                                <input name="upload_site_photo" id="ctrl-upload_site_photo" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_site_photo',""); ?>" type="text"  />
                                                                                                                                                                    <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                                                                    <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                                                                </div>
                                                                                                                                                            </div>
                                                                                                                                                            <small class="form-text"><p style="color: red; font-size: 12px;">Upload file size should not exceed 3 MB.</p></small>
                                                                                                                                                        </div>
                                                                                                                                                        <div class="form-group ">
                                                                                                                                                            <label class="control-label" for="upload_affidavit">UPLOAD AFFIDAVIT  <span class="text-danger">*</span></label>
                                                                                                                                                            <div id="ctrl-upload_affidavit-holder" class=""> 
                                                                                                                                                                <div class="dropzone required" input="#ctrl-upload_affidavit" fieldname="upload_affidavit"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                                                                                                                    <input name="upload_affidavit" id="ctrl-upload_affidavit" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_affidavit',""); ?>" type="text"  />
                                                                                                                                                                        <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                                                                        <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                                                                    </div>
                                                                                                                                                                </div>
                                                                                                                                                                <small class="form-text"><p style="color: red; font-size: 12px;">Upload file size should not exceed 3 MB.</p></small>
                                                                                                                                                            </div>
                                                                                                                                                            <div class="form-group ">
                                                                                                                                                                <label class="control-label" for="declaration">DECLARATION  <span class="text-danger">*</span></label>
                                                                                                                                                                <div id="ctrl-declaration-holder" class=""> 
                                                                                                                                                                    <label class="custom-control custom-checkbox custom-control-inline option-btn">
                                                                                                                                                                        <input class="custom-control-input" id="ctrl-declaration" value="true" <?php echo $this->set_field_checked('declaration','true'); ?> type="checkbox"  required="" name="declaration[]"  />
                                                                                                                                                                            <span class="custom-control-label">All information provided above is correct and I shall be fully responsible for any discrepancy / वरील पुरविलेली सर्व माहिती ही अचूक असून, त्यात कुठल्याही प्रकारची तफावत आढळल्यास त्यास मी पूर्णतः जबाबदार असेन.</span>
                                                                                                                                                                        </label>
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
                                                                                                                                                        <div></div>
                                                                                                                                                        <script>
                                                                                                                                                            $('#ctrl-provisional_noc_number').on('change', function(){ 
                                                                                                                                                            //do something like 
                                                                                                                                                            //$(this).hide(); 
                                                                                                                                                            //$(#anotherfieldid).show();
                                                                                                                                                            var ctrlVal = $(this).val();
                                                                                                                                                            //$(#anotherfieldname).val(ctrlVal)
                                                                                                                                                            $.getJSON(siteAddr+"api/get_form_filled/"+ctrlVal+"/fire_noc_provisional_new",function(data){
                                                                                                                                                            if(data.type=="success"){
                                                                                                                                                            $("#ctrl-applicant_name").val(data.applicant_name);
                                                                                                                                                            $("#ctrl-applicant_address").val(data.applicant_address);
                                                                                                                                                            $("#ctrl-zone_id").val(data.zone_id);
                                                                                                                                                            $("#ctrl-mobile_no").val(data.mobile_no);
                                                                                                                                                            $("#ctrl-architect_or_developers_lic_number").val(data.architect_or_developers_lic_number);
                                                                                                                                                            $("#ctrl-survey_number").val(data.survey_number);
                                                                                                                                                            $("#ctrl-village").val(data.village);
                                                                                                                                                            $("#ctrl-vp_number").val(data.vp_number);
                                                                                                                                                            $("#ctrl-number_of_buildings").val(data.number_of_buildings);
                                                                                                                                                            $("#ctrl-number_of_floors").val(data.number_of_floors);
                                                                                                                                                            $("#ctrl-road_width").val(data.road_width);
                                                                                                                                                            $("#ctrl-open_space_margin_north").val(data.open_space_margin_north);
                                                                                                                                                            $("#ctrl-open_space_margin_south").val(data.open_space_margin_south);
                                                                                                                                                            $("#ctrl-open_space_margin_east").val(data.open_space_margin_east);
                                                                                                                                                            $("#ctrl-open_space_margin_west").val(data.open_space_margin_west); 
                                                                                                                                                            $('#ctrl-zone_id').css("pointer-events","none");
                                                                                                                                                            $('#ctrl-provisional_noc_number').prop("readonly",true);
                                                                                                                                                            $("#ctrl-applicant_name").prop("readonly",true);
                                                                                                                                                            $("#ctrl-applicant_address").prop("readonly",true);
                                                                                                                                                            $("#ctrl-zone_id").prop("readonly",true);
                                                                                                                                                            $("#ctrl-mobile_no").prop("readonly",true);
                                                                                                                                                            $("#ctrl-architect_or_developers_lic_number").prop("readonly",true);
                                                                                                                                                            $("#ctrl-survey_number").prop("readonly",true);
                                                                                                                                                            $("#ctrl-village").prop("readonly",true);
                                                                                                                                                            $("#ctrl-vp_number").prop("readonly",true);
                                                                                                                                                            $("#ctrl-number_of_buildings").prop("readonly",true);
                                                                                                                                                            $("#ctrl-number_of_floors").prop("readonly",true);
                                                                                                                                                            $("#ctrl-road_width").prop("readonly",true);
                                                                                                                                                            $("#ctrl-open_space_margin_north").prop("readonly",true);
                                                                                                                                                            $("#ctrl-open_space_margin_south").prop("readonly",true);
                                                                                                                                                            $("#ctrl-open_space_margin_east").prop("readonly",true);
                                                                                                                                                            $("#ctrl-open_space_margin_west").prop("readonly",true);
                                                                                                                                                            }else{
                                                                                                                                                            alert("Not found");
                                                                                                                                                            $(this).val("");
                                                                                                                                                            }
                                                                                                                                                            });
                                                                                                                                                            });
                                                                                                                                                            $('#ctrl-revised_provisional_noc_number').on('change', function(){ 
                                                                                                                                                            //do something like 
                                                                                                                                                            //$(this).hide(); 
                                                                                                                                                            //$(#anotherfieldid).show();
                                                                                                                                                            var ctrlVal = $(this).val();
                                                                                                                                                            //$(#anotherfieldname).val(ctrlVal)
                                                                                                                                                            $.getJSON(siteAddr+"api/get_form_filled/"+ctrlVal+"/fire_noc_revised_provisional",function(data){
                                                                                                                                                            if(data.type=="success"){
                                                                                                                                                            $("#ctrl-applicant_name").val(data.applicant_name);
                                                                                                                                                            $("#ctrl-applicant_address").val(data.applicant_address);
                                                                                                                                                            $("#ctrl-zone_id").val(data.zone_id);
                                                                                                                                                            $("#ctrl-mobile_no").val(data.mobile_no);
                                                                                                                                                            $("#ctrl-architect_or_developers_lic_number").val(data.architect_or_developers_lic_number);
                                                                                                                                                            $("#ctrl-survey_number").val(data.survey_number);
                                                                                                                                                            $("#ctrl-village").val(data.village);
                                                                                                                                                            $("#ctrl-vp_number").val(data.vp_number);
                                                                                                                                                            $("#ctrl-number_of_buildings").val(data.number_of_buildings);
                                                                                                                                                            $("#ctrl-number_of_floors").val(data.number_of_floors);
                                                                                                                                                            $("#ctrl-road_width").val(data.road_width);
                                                                                                                                                            $("#ctrl-open_space_margin_north").val(data.open_space_margin_north);
                                                                                                                                                            $("#ctrl-open_space_margin_south").val(data.open_space_margin_south);
                                                                                                                                                            $("#ctrl-open_space_margin_east").val(data.open_space_margin_east);
                                                                                                                                                            $("#ctrl-open_space_margin_west").val(data.open_space_margin_west); 
                                                                                                                                                            $('#ctrl-revised_provisional_noc_number').prop("readonly",true);
                                                                                                                                                            $("#ctrl-applicant_name").prop("readonly",true);
                                                                                                                                                            $("#ctrl-applicant_address").prop("readonly",true);
                                                                                                                                                            $("#ctrl-zone_id").prop("readonly",true);
                                                                                                                                                            $("#ctrl-mobile_no").prop("readonly",true);
                                                                                                                                                            $("#ctrl-architect_or_developers_lic_number").prop("readonly",true);
                                                                                                                                                            $("#ctrl-survey_number").prop("readonly",true);
                                                                                                                                                            $("#ctrl-village").prop("readonly",true);
                                                                                                                                                            $("#ctrl-vp_number").prop("readonly",true);
                                                                                                                                                            $("#ctrl-number_of_buildings").prop("readonly",true);
                                                                                                                                                            $("#ctrl-number_of_floors").prop("readonly",true);
                                                                                                                                                            $("#ctrl-road_width").prop("readonly",true);
                                                                                                                                                            $("#ctrl-open_space_margin_north").prop("readonly",true);
                                                                                                                                                            $("#ctrl-open_space_margin_south").prop("readonly",true);
                                                                                                                                                            $("#ctrl-open_space_margin_east").prop("readonly",true);
                                                                                                                                                            $("#ctrl-open_space_margin_west").prop("readonly",true);
                                                                                                                                                            $('#ctrl-zone_id').css("pointer-events","none");
                                                                                                                                                            }else{
                                                                                                                                                            alert("Not found");
                                                                                                                                                            $(this).val("");
                                                                                                                                                            }
                                                                                                                                                            });
                                                                                                                                                            });
                                                                                                                                                        </script></div>
                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </section>
