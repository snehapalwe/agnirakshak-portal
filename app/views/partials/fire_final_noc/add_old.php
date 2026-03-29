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
                    <h4 class="record-title"><strong style='color: black;'>Fire Final Noc / अंतिम फायर ना हरकत दाखला</strong></h4>
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
                        <form id="fire_final_noc-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-vertical needs-validation" action="<?php print_link("fire_final_noc/add?csrf_token=$csrf_token") ?>" method="post">
                            <div>
                                <div class="form-group ">
                                    <label class="control-label" for="provisional_noc_number">PROVISIONAL FIRE  NOC NUMBER <span class="text-danger">*</span></label>
                                    <div id="ctrl-provisional_noc_number-holder" class=""> 
                                        <input id="ctrl-provisional_noc_number"  value="<?php  echo $this->set_field_value('provisional_noc_number',""); ?>" type="text" placeholder="Enter PROVISIONAL FIRE  NOC NUMBER"  required="" name="provisional_noc_number"  class="form-control " />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label class="control-label" for="revised_provisional_noc_number">REVISED PROVISIONAL FIRE  NOC NUMBER </label>
                                        <div id="ctrl-revised_provisional_noc_number-holder" class=""> 
                                            <input id="ctrl-revised_provisional_noc_number"  value="<?php  echo $this->set_field_value('revised_provisional_noc_number',""); ?>" type="text" placeholder="Enter REVISED PROVISIONAL FIRE  NOC NUMBER"  name="revised_provisional_noc_number"  class="form-control " />
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label class="control-label" for="applicant_name">APPLICANT NAME <span class="text-danger">*</span></label>
                                            <div id="ctrl-applicant_name-holder" class=""> 
                                                <input id="ctrl-applicant_name"  value="<?php  echo $this->set_field_value('applicant_name',""); ?>" type="text" placeholder="Enter APPLICANT NAME"  required="" name="applicant_name"  class="form-control " />
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <label class="control-label" for="applicant_address">APPLICANT ADDRESS <span class="text-danger">*</span></label>
                                                <div id="ctrl-applicant_address-holder" class=""> 
                                                    <input id="ctrl-applicant_address"  value="<?php  echo $this->set_field_value('applicant_address',""); ?>" type="text" placeholder="Enter APPLICANT ADDRESS"  required="" name="applicant_address"  class="form-control " />
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label class="control-label" for="zone_id">WARD <span class="text-danger">*</span></label>
                                                    <div id="ctrl-zone_id-holder" class=""> 
                                                        <select required=""  id="ctrl-zone_id" name="zone_id"  placeholder="Select a value ..."    class="custom-select" >
                                                            <option value="">Select a value ...</option>
                                                            <?php 
                                                            $zone_id_options = $comp_model -> fire_final_noc_zone_id_option_list();
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
                                                    <label class="control-label" for="mobile_no">MOBILE NO. <span class="text-danger">*</span></label>
                                                    <div id="ctrl-mobile_no-holder" class=""> 
                                                        <input id="ctrl-mobile_no"  value="<?php  echo $this->set_field_value('mobile_no',""); ?>" type="text" placeholder="Enter MOBILE NO."  required="" name="mobile_no"  class="form-control " />
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <label class="control-label" for="survey_number">SURVEY NUMBER <span class="text-danger">*</span></label>
                                                        <div id="ctrl-survey_number-holder" class=""> 
                                                            <input id="ctrl-survey_number"  value="<?php  echo $this->set_field_value('survey_number',""); ?>" type="text" placeholder="Enter SURVEY NUMBER"  required="" name="survey_number"  class="form-control " />
                                                            </div>
                                                        </div>
                                                        <div class="form-group ">
                                                            <label class="control-label" for="village">VILLAGE <span class="text-danger">*</span></label>
                                                            <div id="ctrl-village-holder" class=""> 
                                                                <input id="ctrl-village"  value="<?php  echo $this->set_field_value('village',""); ?>" type="text" placeholder="Enter VILLAGE"  required="" name="village"  class="form-control " />
                                                                </div>
                                                            </div>
                                                            <div class="form-group ">
                                                                <label class="control-label" for="vp_number">VP NUMBER </label>
                                                                <div id="ctrl-vp_number-holder" class=""> 
                                                                    <input id="ctrl-vp_number"  value="<?php  echo $this->set_field_value('vp_number',""); ?>" type="text" placeholder="Enter VP NUMBER"  name="vp_number"  class="form-control " />
                                                                    </div>
                                                                </div>
                                                                <div class="form-group ">
                                                                    <label class="control-label" for="road_width_north">ROAD WIDTH (IN METER) <span class="text-danger">*</span></label>
                                                                    <div id="ctrl-road_width_north-holder" class=""> 
                                                                        <input id="ctrl-road_width_north"  value="<?php  echo $this->set_field_value('road_width_north',""); ?>" type="number" placeholder="Enter ROAD WIDTH (IN METER)" step="any"  required="" name="road_width_north"  class="form-control " />
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group ">
                                                                        <label class="control-label" for="open_space_margin_north">OPEN SPACE OR SIDE MARGIN NORTH <span class="text-danger">*</span></label>
                                                                        <div id="ctrl-open_space_margin_north-holder" class=""> 
                                                                            <input id="ctrl-open_space_margin_north"  value="<?php  echo $this->set_field_value('open_space_margin_north',""); ?>" type="number" placeholder="Enter OPEN SPACE OR SIDE MARGIN NORTH" step="any"  required="" name="open_space_margin_north"  class="form-control " />
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group ">
                                                                            <label class="control-label" for="open_space_margin_south">OPEN SPACE OR SIDE MARGIN SOUTH <span class="text-danger">*</span></label>
                                                                            <div id="ctrl-open_space_margin_south-holder" class=""> 
                                                                                <input id="ctrl-open_space_margin_south"  value="<?php  echo $this->set_field_value('open_space_margin_south',""); ?>" type="number" placeholder="Enter OPEN SPACE OR SIDE MARGIN SOUTH" step="any"  required="" name="open_space_margin_south"  class="form-control " />
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group ">
                                                                                <label class="control-label" for="open_space_margin_east">OPEN SPACE OR SIDE MARGIN EAST <span class="text-danger">*</span></label>
                                                                                <div id="ctrl-open_space_margin_east-holder" class=""> 
                                                                                    <input id="ctrl-open_space_margin_east"  value="<?php  echo $this->set_field_value('open_space_margin_east',""); ?>" type="number" placeholder="Enter OPEN SPACE OR SIDE MARGIN EAST" step="any"  required="" name="open_space_margin_east"  class="form-control " />
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group ">
                                                                                    <label class="control-label" for="open_space_margin_west">OPEN SPACE OR SIDE MARGIN WEST <span class="text-danger">*</span></label>
                                                                                    <div id="ctrl-open_space_margin_west-holder" class=""> 
                                                                                        <input id="ctrl-open_space_margin_west"  value="<?php  echo $this->set_field_value('open_space_margin_west',""); ?>" type="number" placeholder="Enter OPEN SPACE OR SIDE MARGIN WEST" step="any"  required="" name="open_space_margin_west"  class="form-control " />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group ">
                                                                                        <label class="control-label" for="architect_or_developers_lic_number">ARCHITECT OR DEVELOPERS LIC NUMBER AND NAME <span class="text-danger">*</span></label>
                                                                                        <div id="ctrl-architect_or_developers_lic_number-holder" class=""> 
                                                                                            <input id="ctrl-architect_or_developers_lic_number"  value="<?php  echo $this->set_field_value('architect_or_developers_lic_number',""); ?>" type="text" placeholder="Enter ARCHITECT OR DEVELOPERS LIC NUMBER AND NAME"  required="" name="architect_or_developers_lic_number"  class="form-control " />
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group ">
                                                                                            <label class="control-label" for="upload_provisional_fire_noc">UPLOAD PROVISIONAL FIRE NOC <span class="text-danger">*</span></label>
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
                                                                                                <label class="control-label" for="upload_revised_provisional_fire_noc">UPLOAD REVISED PROVISIONAL FIRE NOC </label>
                                                                                                <div id="ctrl-upload_revised_provisional_fire_noc-holder" class=""> 
                                                                                                    <div class="dropzone " input="#ctrl-upload_revised_provisional_fire_noc" fieldname="upload_revised_provisional_fire_noc"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                                                        <input name="upload_revised_provisional_fire_noc" id="ctrl-upload_revised_provisional_fire_noc" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_revised_provisional_fire_noc',""); ?>" type="text"  />
                                                                                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                            <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <small class="form-text"><p style="font-size: 12px;">
                                                                                                        <span style="color: green; font-weight: bold;">(Optional)</span>
                                                                                                        <span style="color: red;"> Upload file size should not exceed 3 MB.</span>
                                                                                                    </p>
                                                                                                </small>
                                                                                            </div>
                                                                                            <div class="form-group ">
                                                                                                <label class="control-label" for="upload_fire_final_part_noc">UPLOAD FIRE FINAL PART NOC </label>
                                                                                                <div id="ctrl-upload_fire_final_part_noc-holder" class=""> 
                                                                                                    <div class="dropzone " input="#ctrl-upload_fire_final_part_noc" fieldname="upload_fire_final_part_noc"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                                                        <input name="upload_fire_final_part_noc" id="ctrl-upload_fire_final_part_noc" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_fire_final_part_noc',""); ?>" type="text"  />
                                                                                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                            <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <small class="form-text"><p style="font-size: 12px;">
                                                                                                        <span style="color: green; font-weight: bold;">(Optional)</span>
                                                                                                        <span style="color: red;"> Upload file size should not exceed 3 MB.</span>
                                                                                                    </p>
                                                                                                </small>
                                                                                            </div>
                                                                                            <div class="form-group ">
                                                                                                <label class="control-label" for="upload_architect_application_letter">UPLOAD ARCHITECT APPLICATION LETTER <span class="text-danger">*</span></label>
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
                                                                                                    <label class="control-label" for="upload_builders_application_letter">UPLOAD BUILDERS APPLICATION LETTER <span class="text-danger">*</span></label>
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
                                                                                                        <label class="control-label" for="upload_gross_built_up_area_certificate">UPLOAD GROSS BUILT UP AREA CERTIFICATE <span class="text-danger">*</span></label>
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
                                                                                                            <label class="control-label" for="upload_cc_rdp_oc">UPLOAD CC <span class="text-danger">*</span></label>
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
                                                                                                                <label class="control-label" for="upload_floor_plan_set">UPLOAD APPROVED FLOOR PLAN SET <span class="text-danger">*</span></label>
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
                                                                                                                    <label class="control-label" for="upload_work_completion_certificate">UPLOAD WORK COMPLETION CERTIFICATE <span class="text-danger">*</span></label>
                                                                                                                    <div id="ctrl-upload_work_completion_certificate-holder" class=""> 
                                                                                                                        <div class="dropzone required" input="#ctrl-upload_work_completion_certificate" fieldname="upload_work_completion_certificate"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                                                                            <input name="upload_work_completion_certificate" id="ctrl-upload_work_completion_certificate" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_work_completion_certificate',""); ?>" type="text"  />
                                                                                                                                <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                                <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <small class="form-text"><p style="color: red; font-size: 12px;">Upload file size should not exceed 3 MB.</p></small>
                                                                                                                    </div>
                                                                                                                    <div class="form-group ">
                                                                                                                        <label class="control-label" for="upload_structural_stability_certificate">UPLOAD STRUCTURAL STABILITY CERTIFICATE <span class="text-danger">*</span></label>
                                                                                                                        <div id="ctrl-upload_structural_stability_certificate-holder" class=""> 
                                                                                                                            <div class="dropzone required" input="#ctrl-upload_structural_stability_certificate" fieldname="upload_structural_stability_certificate"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                                                                                <input name="upload_structural_stability_certificate" id="ctrl-upload_structural_stability_certificate" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_structural_stability_certificate',""); ?>" type="text"  />
                                                                                                                                    <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                                    <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <small class="form-text"><p style="color: red; font-size: 12px;">Upload file size should not exceed 3 MB.</p></small>
                                                                                                                        </div>
                                                                                                                        <div class="form-group ">
                                                                                                                            <label class="control-label" for="upload_lift_certificate">UPLOAD LIFT CERTIFICATE <span class="text-danger">*</span></label>
                                                                                                                            <div id="ctrl-upload_lift_certificate-holder" class=""> 
                                                                                                                                <div class="dropzone required" input="#ctrl-upload_lift_certificate" fieldname="upload_lift_certificate"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                                                                                    <input name="upload_lift_certificate" id="ctrl-upload_lift_certificate" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_lift_certificate',""); ?>" type="text"  />
                                                                                                                                        <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                                        <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <small class="form-text"><p style="color: red; font-size: 12px;">Upload file size should not exceed 3 MB.</p></small>
                                                                                                                            </div>
                                                                                                                            <div class="form-group ">
                                                                                                                                <label class="control-label" for="upload_electric_contractor_certificate_and_license_copy">UPLOAD ELECTRIC CONTRACTOR CERTIFICATE & LICENSE COPY <span class="text-danger">*</span></label>
                                                                                                                                <div id="ctrl-upload_electric_contractor_certificate_and_license_copy-holder" class=""> 
                                                                                                                                    <div class="dropzone required" input="#ctrl-upload_electric_contractor_certificate_and_license_copy" fieldname="upload_electric_contractor_certificate_and_license_copy"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                                                                                        <input name="upload_electric_contractor_certificate_and_license_copy" id="ctrl-upload_electric_contractor_certificate_and_license_copy" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_electric_contractor_certificate_and_license_copy',""); ?>" type="text"  />
                                                                                                                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                                            <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    <small class="form-text"><p style="color: red; font-size: 12px;">Upload file size should not exceed 3 MB.</p></small>
                                                                                                                                </div>
                                                                                                                                <div class="form-group ">
                                                                                                                                    <label class="control-label" for="upload_diesel_engine_generator_invoice_copy_and_test_certificate">UPLOAD DIESEL ENGINE GENERATOR INVOICE COPY & TEST CERTIFICATE <span class="text-danger">*</span></label>
                                                                                                                                    <div id="ctrl-upload_diesel_engine_generator_invoice_copy_and_test_certificate-holder" class=""> 
                                                                                                                                        <div class="dropzone required" input="#ctrl-upload_diesel_engine_generator_invoice_copy_and_test_certificate" fieldname="upload_diesel_engine_generator_invoice_copy_and_test_certificate"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                                                                                            <input name="upload_diesel_engine_generator_invoice_copy_and_test_certificate" id="ctrl-upload_diesel_engine_generator_invoice_copy_and_test_certificate" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_diesel_engine_generator_invoice_copy_and_test_certificate',""); ?>" type="text"  />
                                                                                                                                                <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                                                <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                        <small class="form-text"><p style="color: red; font-size: 12px;">Upload file size should not exceed 3 MB.</p></small>
                                                                                                                                    </div>
                                                                                                                                    <div class="form-group ">
                                                                                                                                        <label class="control-label" for="upload_form_A_certificate_from_license_agency">UPLOAD FORM-A CERTIFICATE FROM LICENSE AGENCY <span class="text-danger">*</span></label>
                                                                                                                                        <div id="ctrl-upload_form_A_certificate_from_license_agency-holder" class=""> 
                                                                                                                                            <div class="dropzone required" input="#ctrl-upload_form_A_certificate_from_license_agency" fieldname="upload_form_A_certificate_from_license_agency"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                                                                                                <input name="upload_form_A_certificate_from_license_agency" id="ctrl-upload_form_A_certificate_from_license_agency" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_form_A_certificate_from_license_agency',""); ?>" type="text"  />
                                                                                                                                                    <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                                                    <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                            <small class="form-text"><p style="color: red; font-size: 12px;">Upload file size should not exceed 3 MB.</p></small>
                                                                                                                                        </div>
                                                                                                                                        <div class="form-group ">
                                                                                                                                            <label class="control-label" for="upload_license_copy_of_MFS">UPLOAD LICENSE COPY OF MFS <span class="text-danger">*</span></label>
                                                                                                                                            <div id="ctrl-upload_license_copy_of_MFS-holder" class=""> 
                                                                                                                                                <div class="dropzone required" input="#ctrl-upload_license_copy_of_MFS" fieldname="upload_license_copy_of_MFS"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                                                                                                    <input name="upload_license_copy_of_MFS" id="ctrl-upload_license_copy_of_MFS" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_license_copy_of_MFS',""); ?>" type="text"  />
                                                                                                                                                        <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                                                        <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                                <small class="form-text"><p style="color: red; font-size: 12px;">Upload file size should not exceed 3 MB.</p></small>
                                                                                                                                            </div>
                                                                                                                                            <div class="form-group ">
                                                                                                                                                <label class="control-label" for="upload_fire_auto_cad_drawing">UPLOAD FIRE AUTO CAD DRAWING <span class="text-danger">*</span></label>
                                                                                                                                                <div id="ctrl-upload_fire_auto_cad_drawing-holder" class=""> 
                                                                                                                                                    <div class="dropzone required" input="#ctrl-upload_fire_auto_cad_drawing" fieldname="upload_fire_auto_cad_drawing"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                                                                                                        <input name="upload_fire_auto_cad_drawing" id="ctrl-upload_fire_auto_cad_drawing" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_fire_auto_cad_drawing',""); ?>" type="text"  />
                                                                                                                                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                                                            <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                    <small class="form-text"><p style="color: red; font-size: 12px;">Upload file size should not exceed 3 MB.</p></small>
                                                                                                                                                </div>
                                                                                                                                                <div class="form-group ">
                                                                                                                                                    <label class="control-label" for="upload_affidavit">UPLOAD AFFIDAVIT <span class="text-danger">*</span></label>
                                                                                                                                                    <div id="ctrl-upload_affidavit-holder" class=""> 
                                                                                                                                                        <div class="dropzone required" input="#ctrl-upload_affidavit" fieldname="upload_affidavit"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                                                                                                            <input name="upload_affidavit" id="ctrl-upload_affidavit" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_affidavit',""); ?>" type="text"  />
                                                                                                                                                                <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                                                                <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                                                            </div>
                                                                                                                                                        </div>
                                                                                                                                                        <small class="form-text"><a href='<?php echo SITE_ADDR ?>uploads/download_affidavit.pdf' style="font-weight: bold;">
                                                                                                                                                            <span style="animation: blink 1s infinite;">👉</span> DOWNLOAD FORMAT
                                                                                                                                                        </a>
                                                                                                                                                        <style>
                                                                                                                                                            @keyframes blink {
                                                                                                                                                            0% { opacity: 1; }
                                                                                                                                                            50% { opacity: 0; }
                                                                                                                                                            100% { opacity: 1; }
                                                                                                                                                            }
                                                                                                                                                        </style></small>
                                                                                                                                                    </div>
                                                                                                                                                    <div class="form-group ">
                                                                                                                                                        <label class="control-label" for="declaration">DECLARATION <span class="text-danger">*</span></label>
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
                                                                                                                                                </script></div>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </section>
<script>
 $.getJSON("https://singlewindowsystemkdmc.in/api/common/fire_final/<?php echo USER_NAME ?>", function(data) {
    data.forEach(function(group) {
        var $ctrl = $("#ctrl-" + group.field);

        if ($ctrl.is("select")) {
            // Try to select option by its visible text (label)
            var matched = false;
            $ctrl.find("option").each(function() {
                if ($(this).text().trim() === group.value.trim()) {
                    $(this).prop("selected", true);
                    matched = true;
                    return false; // stop loop
                }
            });

            // Fallback: if label not matched, try selecting by value
            if (!matched) {
                $ctrl.val(group.value);
            }

        } else {
            // For inputs, textareas, etc.
            $ctrl.val(group.value);
        }

        // Handle readonly / disabled logic
        if (group.value && group.value.trim() !== "") {
            $ctrl.prop("readonly", true);
            // For selects, use disable instead of readonly
            if ($ctrl.is("select")) {
                $ctrl.css('pointer-events', 'none');
            } else {
                $ctrl.css('pointer-events', 'none');
            }
        } else {
            $ctrl.removeAttr("readonly");
            $ctrl.prop("disabled", false);
        }

        // Hide fields with URL values
        if (group.value.startsWith("http://") || group.value.startsWith("https://")) {
            $ctrl.parents(".form-group").hide();
        }
    });
});

</script> 