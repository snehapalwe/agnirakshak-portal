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
                    <h4 class="record-title">Provisional Fire NOC Edit / तात्पुरता अग्निशमन ना-हरकत दाखला बदल</h4>
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
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-horizontal needs-validation" action="<?php print_link("fire_noc_provisional_new/edit/$page_id/?csrf_token=$csrf_token"); ?>" method="post">
                            <div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="applicant_name">APPLICANT NAME  <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="">
                                                <input id="ctrl-applicant_name"  value="<?php  echo $data['applicant_name']; ?>" type="text" placeholder="Enter Applicant Name"  readonly required="" name="applicant_name"  class="form-control " />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="applicant_address">APPLICANT ADDRESS  <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input id="ctrl-applicant_address"  value="<?php  echo $data['applicant_address']; ?>" type="text" placeholder="Enter Applicant Address"  readonly required="" name="applicant_address"  class="form-control " />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <label class="control-label" for="zone_id">WARD <span class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="">
                                                        <select required=""  id="ctrl-zone_id" name="zone_id"  placeholder="Select a value ..."    class="custom-select" >
                                                            <option value="">Select a value ...</option>
                                                            <?php
                                                            $rec = $data['zone_id'];
                                                            $zone_id_options = $comp_model -> fire_noc_provisional_new_zone_id_option_list();
                                                            if(!empty($zone_id_options)){
                                                            foreach($zone_id_options as $option){
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
                                                    <label class="control-label" for="mobile_no">MOBILE NO. <span class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="">
                                                        <input id="ctrl-mobile_no"  value="<?php  echo $data['mobile_no']; ?>" type="number" placeholder="Enter MOBILE NO." min="1000000000" max="9999999999" step="1"  readonly required="" name="mobile_no"  class="form-control " />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <label class="control-label" for="architect_or_developers_lic_number">ARCHITECT OR DEVELOPERS LIC NUMBER AND NAME <span class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="">
                                                            <input id="ctrl-architect_or_developers_lic_number"  value="<?php  echo $data['architect_or_developers_lic_number']; ?>" type="text" placeholder="Enter ARCHITECT OR DEVELOPERS LIC NUMBER AND NAME"  required="" name="architect_or_developers_lic_number"  class="form-control " />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <label class="control-label" for="survey_number">SURVEY NUMBER  <span class="text-danger">*</span></label>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <div class="">
                                                                <input id="ctrl-survey_number"  value="<?php  echo $data['survey_number']; ?>" type="text" placeholder="Enter Survey Number"  readonly required="" name="survey_number"  class="form-control " />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <label class="control-label" for="village">VILLAGE  <span class="text-danger">*</span></label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="">
                                                                    <input id="ctrl-village"  value="<?php  echo $data['village']; ?>" type="text" placeholder="Enter Village"  readonly required="" name="village"  class="form-control " />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group ">
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <label class="control-label" for="vp_number">VP NUMBER  </label>
                                                                </div>
                                                                <div class="col-sm-8">
                                                                    <div class="">
                                                                        <input id="ctrl-vp_number"  value="<?php  echo $data['vp_number']; ?>" type="text" placeholder="Enter Vp Number"  readonly name="vp_number"  class="form-control " />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group ">
                                                                <div class="row">
                                                                    <div class="col-sm-4">
                                                                        <label class="control-label" for="open_space_margin_west">OPEN SPACE MARGIN <span class="text-danger">*</span></label>
                                                                    </div>
                                                                    <div class="col-sm-8">
                                                                        <div class="">
                                                                            <input id="ctrl-open_space_margin_west"  value="<?php  echo $data['open_space_margin_west']; ?>" type="number" placeholder="Enter OPEN SPACE MARGIN" step="any"  required="" name="open_space_margin_west"  class="form-control " />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group ">
                                                                    <div class="row">
                                                                        <div class="col-sm-4">
                                                                            <label class="control-label" for="uplaod_architect_application_with_building_plans">UPLOAD ARCHITECT APPLICATION WITH BUILDING PLANS <span class="text-danger">*</span></label>
                                                                        </div>
                                                                        <div class="col-sm-8">
                                                                            <div class="">
                                                                                <div class="dropzone required" input="#ctrl-uplaod_architect_application_with_building_plans" fieldname="uplaod_architect_application_with_building_plans"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.jpeg,.pdf" filesize="30" maximum="1">
                                                                                    <input name="uplaod_architect_application_with_building_plans" id="ctrl-uplaod_architect_application_with_building_plans" required="" class="dropzone-input form-control" value="<?php  echo $data['uplaod_architect_application_with_building_plans']; ?>" type="text"  />
                                                                                        <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                        <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                    </div>
                                                                                </div>
                                                                                <?php Html :: uploaded_files_list($data['uplaod_architect_application_with_building_plans'], '#ctrl-uplaod_architect_application_with_building_plans'); ?>
                                                                                <small class="form-text"><p style="color: red; font-size: 12px;">Upload file size should not exceed 30 MB.</p></small>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group ">
                                                                        <div class="row">
                                                                            <div class="col-sm-4">
                                                                                <label class="control-label" for="upload_floor_plan_set">UPLOAD FLOOR PLAN SET <span class="text-danger">*</span></label>
                                                                            </div>
                                                                            <div class="col-sm-8">
                                                                                <div class="">
                                                                                    <div class="dropzone required" input="#ctrl-upload_floor_plan_set" fieldname="upload_floor_plan_set"    data-multiple="true" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="30" maximum="10">
                                                                                        <input name="upload_floor_plan_set" id="ctrl-upload_floor_plan_set" required="" class="dropzone-input form-control" value="<?php  echo $data['upload_floor_plan_set']; ?>" type="text"  />
                                                                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                            <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <?php Html :: uploaded_files_list($data['upload_floor_plan_set'], '#ctrl-upload_floor_plan_set'); ?>
                                                                                    <small class="form-text"><p style="color: red; font-size: 12px;">Upload file size should not exceed 30 MB.</p></small>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group ">
                                                                            <div class="row">
                                                                                <div class="col-sm-4">
                                                                                    <label class="control-label" for="upload_layout_of_fire_prevention_and_protection_measures">UPLOAD LAYOUT OF FIRE PREVENTION AND PROTECTION MEASURES  <span class="text-danger">*</span></label>
                                                                                </div>
                                                                                <div class="col-sm-8">
                                                                                    <div class="">
                                                                                        <div class="dropzone required" input="#ctrl-upload_layout_of_fire_prevention_and_protection_measures" fieldname="upload_layout_of_fire_prevention_and_protection_measures"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.jpeg,.pdf" filesize="3" maximum="1">
                                                                                            <input name="upload_layout_of_fire_prevention_and_protection_measures" id="ctrl-upload_layout_of_fire_prevention_and_protection_measures" required="" class="dropzone-input form-control" value="<?php  echo $data['upload_layout_of_fire_prevention_and_protection_measures']; ?>" type="text"  />
                                                                                                <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <?php Html :: uploaded_files_list($data['upload_layout_of_fire_prevention_and_protection_measures'], '#ctrl-upload_layout_of_fire_prevention_and_protection_measures'); ?>
                                                                                        <small class="form-text"><p style="color: red; font-size: 12px;">Upload file size should not exceed 3 MB.</p></small>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group ">
                                                                                <div class="row">
                                                                                    <div class="col-sm-4">
                                                                                        <label class="control-label" for="upload_dbr_report">UPLOAD D. B. R. REPORT (FOR BUILDINGS ABOVE 90 METERS IN HEIGHT) <span class="text-danger">*</span></label>
                                                                                    </div>
                                                                                    <div class="col-sm-8">
                                                                                        <div class="">
                                                                                            <div class="dropzone required" input="#ctrl-upload_dbr_report" fieldname="upload_dbr_report"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.jpeg,.pdf" filesize="3" maximum="1">
                                                                                                <input name="upload_dbr_report" id="ctrl-upload_dbr_report" required="" class="dropzone-input form-control" value="<?php  echo $data['upload_dbr_report']; ?>" type="text"  />
                                                                                                    <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                    <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <?php Html :: uploaded_files_list($data['upload_dbr_report'], '#ctrl-upload_dbr_report'); ?>
                                                                                            <small class="form-text"><p style="color: red; font-size: 12px;">Upload file size should not exceed 3 MB.</p></small>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group ">
                                                                                    <div class="row">
                                                                                        <div class="col-sm-4">
                                                                                            <label class="control-label" for="is_redevelopment">IS REDEVELOPMENT?  <span class="text-danger">*</span></label>
                                                                                        </div>
                                                                                        <div class="col-sm-8">
                                                                                            <div class="">
                                                                                                <select required=""  id="ctrl-is_redevelopment" name="is_redevelopment"  placeholder="Select a value ..."    class="custom-select" >
                                                                                                    <option value="">Select a value ...</option>
                                                                                                    <?php
                                                                                                    $is_redevelopment_options = Menu :: $is_redevelopment;
                                                                                                    $field_value = $data['is_redevelopment'];
                                                                                                    if(!empty($is_redevelopment_options)){
                                                                                                    foreach($is_redevelopment_options as $option){
                                                                                                    $value = $option['value'];
                                                                                                    $label = $option['label'];
                                                                                                    $selected = ( $value == $field_value ? 'selected' : null );
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
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group ">
                                                                                    <div class="row">
                                                                                        <div class="col-sm-4">
                                                                                            <label class="control-label" for="upload_society_consent_or_recommendation_letter">Upload Society Consent Or Recommendation Letter <span class='text-danger'>*</span> </label>
                                                                                        </div>
                                                                                        <div class="col-sm-8">
                                                                                            <div class="">
                                                                                                <div class="dropzone " input="#ctrl-upload_society_consent_or_recommendation_letter" fieldname="upload_society_consent_or_recommendation_letter"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.jpeg,.pdf" filesize="3" maximum="1">
                                                                                                    <input name="upload_society_consent_or_recommendation_letter" id="ctrl-upload_society_consent_or_recommendation_letter" class="dropzone-input form-control" value="<?php  echo $data['upload_society_consent_or_recommendation_letter']; ?>" type="text"  />
                                                                                                        <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                        <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <?php Html :: uploaded_files_list($data['upload_society_consent_or_recommendation_letter'], '#ctrl-upload_society_consent_or_recommendation_letter'); ?>
                                                                                                <small class="form-text"><p style="color: red; font-size: 12px;">Upload file size should not exceed 3 MB.</p></small>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group ">
                                                                                        <div class="row">
                                                                                            <div class="col-sm-4">
                                                                                                <label class="control-label" for="declaration">DECLARATION  <span class="text-danger">*</span></label>
                                                                                            </div>
                                                                                            <div class="col-sm-8">
                                                                                                <div class="">
                                                                                                    <label class="custom-control custom-checkbox custom-control-inline option-btn">
                                                                                                        <input id="ctrl-declaration" class="custom-control-input" value="true" <?php echo $this->check_form_field_checked($data['declaration'] , 'true'); ?> type="checkbox" required="" name="declaration[]" />
                                                                                                            <span class="custom-control-label">All information provided above is correct and I shall be fully responsible for any discrepancy / वरील पुरविलेली सर्व माहिती ही अचूक असून, त्यात कुठल्याही प्रकारची तफावत आढळल्यास त्यास मी पूर्णतः जबाबदार असेन.</span>
                                                                                                        </label>
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
