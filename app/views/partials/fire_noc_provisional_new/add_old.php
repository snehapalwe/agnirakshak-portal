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
                    <h4 class="record-title">
                    <strong style='color: black;'>Provisional Fire NOC</strong></h4>
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
                        <form id="fire_noc_provisional_new-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-vertical needs-validation" action="<?php print_link("fire_noc_provisional_new/add?csrf_token=$csrf_token") ?>" method="post">
                            <div>
                                <div class="form-group ">
                                    <label class="control-label" for="applicant_name">APPLICANT NAME  <span class="text-danger">*</span></label>
                                    <div id="ctrl-applicant_name-holder" class=""> 
                                        <input id="ctrl-applicant_name"  value="<?php  echo $this->set_field_value('applicant_name',""); ?>" type="text" placeholder="Enter Applicant Name"  readonly required="" name="applicant_name"  class="form-control " />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label class="control-label" for="applicant_address">APPLICANT ADDRESS  <span class="text-danger">*</span></label>
                                        <div id="ctrl-applicant_address-holder" class=""> 
                                            <input id="ctrl-applicant_address"  value="<?php  echo $this->set_field_value('applicant_address',""); ?>" type="text" placeholder="Enter Applicant Address"  readonly required="" name="applicant_address"  class="form-control " />
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label class="control-label" for="zone_id">WARD <span class="text-danger">*</span></label>
                                            <div id="ctrl-zone_id-holder" class=""> 
                                                <select required=""  id="ctrl-zone_id" name="zone_id"  placeholder="Select a value ..."    class="custom-select" >
                                                    <option value="">Select a value ...</option>
                                                    <?php 
                                                    $zone_id_options = $comp_model -> fire_noc_provisional_new_zone_id_option_list();
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
                                                <input id="ctrl-mobile_no"  value="<?php  echo $this->set_field_value('mobile_no',""); ?>" type="number" placeholder="Enter MOBILE NO." min="1000000000" max="9999999999" step="1"  readonly required="" name="mobile_no"  class="form-control " />
                                                </div>
                                            </div>
                                                <div class="form-group ">
                                                    <label class="control-label" for="survey_number">SURVEY NUMBER  <span class="text-danger">*</span></label>
                                                    <div id="ctrl-survey_number-holder" class=""> 
                                                        <input id="ctrl-survey_number"  value="<?php  echo $this->set_field_value('survey_number',""); ?>" type="text" placeholder="Enter Survey Number"  readonly required="" name="survey_number"  class="form-control " />
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <label class="control-label" for="village">VILLAGE  <span class="text-danger">*</span></label>
                                                        <div id="ctrl-village-holder" class=""> 
                                                            <input id="ctrl-village"  value="<?php  echo $this->set_field_value('village',""); ?>" type="text" placeholder="Enter Village"  readonly required="" name="village"  class="form-control " />
                                                            </div>
                                                        </div>
                                                        <div class="form-group ">
                                                            <label class="control-label" for="vp_number">VP NUMBER  </label>
                                                            <div id="ctrl-vp_number-holder" class=""> 
                                                                <input id="ctrl-vp_number"  value="<?php  echo $this->set_field_value('vp_number',""); ?>" type="text" placeholder="Enter Vp Number"  readonly name="vp_number"  class="form-control " />
                                                                </div>
                                                            </div>
                                                            <div class="form-group ">
                                                                <label class="control-label" for="open_space_margin_west">OPEN SPACE MARGIN <span class="text-danger">*</span></label>
                                                                <div id="ctrl-open_space_margin_west-holder" class=""> 
                                                                    <input id="ctrl-open_space_margin_west"  value="<?php  echo $this->set_field_value('open_space_margin_west',""); ?>" type="number" placeholder="Enter OPEN SPACE MARGIN" step="any"  required="" name="open_space_margin_west"  class="form-control " />
                                                                    </div>
                                                                </div>
                                            <div class="form-group ">
                                                <label class="control-label" for="architect_or_developers_lic_number">ARCHITECT OR DEVELOPERS LIC NUMBER AND NAME <span class="text-danger">*</span></label>
                                                <div id="ctrl-architect_or_developers_lic_number-holder" class=""> 
                                                    <input id="ctrl-architect_or_developers_lic_number"  value="<?php  echo $this->set_field_value('architect_or_developers_lic_number',""); ?>" type="text" placeholder="Enter ARCHITECT OR DEVELOPERS LIC NUMBER AND NAME"  required="" name="architect_or_developers_lic_number"  class="form-control " />
                                                    </div>
                                                </div>
                                                                <div class="form-group ">
                                                                    <label class="control-label" for="uplaod_architect_application_with_building_plans">UPLOAD ARCHITECT APPLICATION WITH BUILDING PLANS <span class="text-danger">*</span></label>
                                                                    <div id="ctrl-uplaod_architect_application_with_building_plans-holder" class=""> 
                                                                        <div class="dropzone required" input="#ctrl-uplaod_architect_application_with_building_plans" fieldname="uplaod_architect_application_with_building_plans"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.jpeg,.pdf" filesize="30" maximum="1">
                                                                            <input name="uplaod_architect_application_with_building_plans" id="ctrl-uplaod_architect_application_with_building_plans" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('uplaod_architect_application_with_building_plans',""); ?>" type="text"  />
                                                                                <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                            </div>
                                                                        </div>
                                                                        <small class="form-text"><p style="color: red; font-size: 12px;">Upload file size should not exceed 30 MB.</p></small>
                                                                    </div>
                                                                    <div class="form-group ">
                                                                        <label class="control-label" for="upload_floor_plan_set">UPLOAD FLOOR PLAN SET <span class="text-danger">*</span></label>
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
                                                                            <label class="control-label" for="upload_layout_of_fire_prevention_and_protection_measures">UPLOAD LAYOUT OF FIRE PREVENTION AND PROTECTION MEASURES  <span class="text-danger">*</span></label>
                                                                            <div id="ctrl-upload_layout_of_fire_prevention_and_protection_measures-holder" class=""> 
                                                                                <div class="dropzone required" input="#ctrl-upload_layout_of_fire_prevention_and_protection_measures" fieldname="upload_layout_of_fire_prevention_and_protection_measures"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.jpeg,.pdf" filesize="3" maximum="1">
                                                                                    <input name="upload_layout_of_fire_prevention_and_protection_measures" id="ctrl-upload_layout_of_fire_prevention_and_protection_measures" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_layout_of_fire_prevention_and_protection_measures',""); ?>" type="text"  />
                                                                                        <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                        <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                    </div>
                                                                                </div>
                                                                                <small class="form-text"><p style="color: red; font-size: 12px;">Upload file size should not exceed 3 MB.</p></small>
                                                                            </div>
                                                                            <div class="form-group ">
                                                                                <label class="control-label" for="upload_dbr_report">UPLOAD D. B. R. REPORT (FOR BUILDINGS ABOVE 90 METERS IN HEIGHT) <span class="text-danger">*</span></label>
                                                                                <div id="ctrl-upload_dbr_report-holder" class=""> 
                                                                                    <div class="dropzone required" input="#ctrl-upload_dbr_report" fieldname="upload_dbr_report"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.jpeg,.pdf" filesize="3" maximum="1">
                                                                                        <input name="upload_dbr_report" id="ctrl-upload_dbr_report" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_dbr_report',""); ?>" type="text"  />
                                                                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                            <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <small class="form-text"><p style="color: red; font-size: 12px;">Upload file size should not exceed 3 MB.</p></small>
                                                                                </div>
                                                                                <div class="form-group ">
                                                                                    <label class="control-label" for="is_redevelopment">IS REDEVELOPMENT?  <span class="text-danger">*</span></label>
                                                                                    <div id="ctrl-is_redevelopment-holder" class=""> 
                                                                                        <select required=""  id="ctrl-is_redevelopment" name="is_redevelopment"  placeholder="Select a value ..."    class="custom-select" >
                                                                                            <option value="">Select a value ...</option>
                                                                                            <?php
                                                                                            $is_redevelopment_options = Menu :: $is_redevelopment;
                                                                                            if(!empty($is_redevelopment_options)){
                                                                                            foreach($is_redevelopment_options as $option){
                                                                                            $value = $option['value'];
                                                                                            $label = $option['label'];
                                                                                            $selected = $this->set_field_selected('is_redevelopment', $value, "");
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
                                                                                    <label class="control-label" for="upload_society_consent_or_recommendation_letter">UPLOAD SOCIETY CONSENT OR RECOMMENDATION LETTER <span class='text-danger'>*</span> </label>
                                                                                    <div id="ctrl-upload_society_consent_or_recommendation_letter-holder" class=""> 
                                                                                        <div class="dropzone " input="#ctrl-upload_society_consent_or_recommendation_letter" fieldname="upload_society_consent_or_recommendation_letter"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.jpeg,.pdf" filesize="3" maximum="1">
                                                                                            <input name="upload_society_consent_or_recommendation_letter" id="ctrl-upload_society_consent_or_recommendation_letter" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_society_consent_or_recommendation_letter',""); ?>" type="text"  />
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
                                                        </section>
<script>
 $.getJSON("https://singlewindowsystemkdmc.in/api/common/fire_noc_provisional_new/<?php echo USER_NAME ?>", function(data) {
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