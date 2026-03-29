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
                    <h4 class="record-title">Add New Fire Noc Final</h4>
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
                        <form id="fire_noc_final-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-vertical needs-validation" action="<?php print_link("fire_noc_final/add?csrf_token=$csrf_token") ?>" method="post">
                            <div>
                                <div class="form-group ">
                                    <label class="control-label" for="applicant_name">Applicant Name <span class="text-danger">*</span></label>
                                    <div id="ctrl-applicant_name-holder" class=""> 
                                        <input id="ctrl-applicant_name"  value="<?php  echo $this->set_field_value('applicant_name',""); ?>" type="text" placeholder="Enter Applicant Name"  required="" name="applicant_name"  class="form-control " />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label class="control-label" for="applicant_address">Applicant Address <span class="text-danger">*</span></label>
                                        <div id="ctrl-applicant_address-holder" class=""> 
                                            <input id="ctrl-applicant_address"  value="<?php  echo $this->set_field_value('applicant_address',""); ?>" type="text" placeholder="Enter Applicant Address"  required="" name="applicant_address"  class="form-control " />
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label class="control-label" for="mobile_no">Mobile No <span class="text-danger">*</span></label>
                                            <div id="ctrl-mobile_no-holder" class=""> 
                                                <input id="ctrl-mobile_no"  value="<?php  echo $this->set_field_value('mobile_no',""); ?>" type="text" placeholder="Enter Mobile No"  required="" name="mobile_no"  class="form-control " />
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <label class="control-label" for="provisional_noc_number">Provisional Noc Number <span class="text-danger">*</span></label>
                                                <div id="ctrl-provisional_noc_number-holder" class=""> 
                                                    <input id="ctrl-provisional_noc_number"  value="<?php  echo $this->set_field_value('provisional_noc_number',""); ?>" type="text" placeholder="Enter Provisional Noc Number"  required="" name="provisional_noc_number"  class="form-control " />
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label class="control-label" for="provisional_noc_date">Provisional Noc Date <span class="text-danger">*</span></label>
                                                    <div id="ctrl-provisional_noc_date-holder" class="input-group"> 
                                                        <input id="ctrl-provisional_noc_date" class="form-control datepicker  datepicker"  required="" value="<?php  echo $this->set_field_value('provisional_noc_date',""); ?>" type="datetime" name="provisional_noc_date" placeholder="Enter Provisional Noc Date" data-enable-time="false" data-min-date="" data-max-date="" data-date-format="Y-m-d" data-alt-format="F j, Y" data-inline="false" data-no-calendar="false" data-mode="single" />
                                                            <div class="input-group-append">
                                                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <label class="control-label" for="zone_id">Zone Id <span class="text-danger">*</span></label>
                                                        <div id="ctrl-zone_id-holder" class=""> 
                                                            <select required=""  id="ctrl-zone_id" name="zone_id"  placeholder="Select a value ..."    class="custom-select" >
                                                                <option value="">Select a value ...</option>
                                                                <?php 
                                                                $zone_id_options = $comp_model -> fire_noc_final_zone_id_option_list();
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
                                                        <label class="control-label" for="subject">Subject <span class="text-danger">*</span></label>
                                                        <div id="ctrl-subject-holder" class=""> 
                                                            <input id="ctrl-subject"  value="<?php  echo $this->set_field_value('subject',""); ?>" type="text" placeholder="Enter Subject"  required="" name="subject"  class="form-control " />
                                                            </div>
                                                        </div>
                                                        <div class="form-group ">
                                                            <label class="control-label" for="upload_architect_application_letter">Upload Architect Application Letter <span class="text-danger">*</span></label>
                                                            <div id="ctrl-upload_architect_application_letter-holder" class=""> 
                                                                <div class="dropzone required" input="#ctrl-upload_architect_application_letter" fieldname="upload_architect_application_letter"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                    <input name="upload_architect_application_letter" id="ctrl-upload_architect_application_letter" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_architect_application_letter',""); ?>" type="text"  />
                                                                        <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                        <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group ">
                                                                <label class="control-label" for="upload_certificate_from_license_agency">Upload Certificate From License Agency <span class="text-danger">*</span></label>
                                                                <div id="ctrl-upload_certificate_from_license_agency-holder" class=""> 
                                                                    <div class="dropzone required" input="#ctrl-upload_certificate_from_license_agency" fieldname="upload_certificate_from_license_agency"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                        <input name="upload_certificate_from_license_agency" id="ctrl-upload_certificate_from_license_agency" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_certificate_from_license_agency',""); ?>" type="text"  />
                                                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                            <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group ">
                                                                    <label class="control-label" for="upload_work_completion_certificate">Upload Work Completion Certificate <span class="text-danger">*</span></label>
                                                                    <div id="ctrl-upload_work_completion_certificate-holder" class=""> 
                                                                        <div class="dropzone required" input="#ctrl-upload_work_completion_certificate" fieldname="upload_work_completion_certificate"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                            <input name="upload_work_completion_certificate" id="ctrl-upload_work_completion_certificate" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_work_completion_certificate',""); ?>" type="text"  />
                                                                                <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group ">
                                                                        <label class="control-label" for="upload_structural_stability_certificate">Upload Structural Stability Certificate <span class="text-danger">*</span></label>
                                                                        <div id="ctrl-upload_structural_stability_certificate-holder" class=""> 
                                                                            <div class="dropzone required" input="#ctrl-upload_structural_stability_certificate" fieldname="upload_structural_stability_certificate"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                                <input name="upload_structural_stability_certificate" id="ctrl-upload_structural_stability_certificate" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_structural_stability_certificate',""); ?>" type="text"  />
                                                                                    <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                    <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group ">
                                                                            <label class="control-label" for="upload_affidavite">Upload Affidavite <span class="text-danger">*</span></label>
                                                                            <div id="ctrl-upload_affidavite-holder" class=""> 
                                                                                <div class="dropzone required" input="#ctrl-upload_affidavite" fieldname="upload_affidavite"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                                    <input name="upload_affidavite" id="ctrl-upload_affidavite" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_affidavite',""); ?>" type="text"  />
                                                                                        <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                        <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group ">
                                                                                <label class="control-label" for="upload_fire_fighting_installation_photo">Upload Fire Fighting Installation Photo <span class="text-danger">*</span></label>
                                                                                <div id="ctrl-upload_fire_fighting_installation_photo-holder" class=""> 
                                                                                    <div class="dropzone required" input="#ctrl-upload_fire_fighting_installation_photo" fieldname="upload_fire_fighting_installation_photo"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.gif,.jpeg" filesize="3" maximum="5">
                                                                                        <input name="upload_fire_fighting_installation_photo" id="ctrl-upload_fire_fighting_installation_photo" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_fire_fighting_installation_photo',""); ?>" type="text"  />
                                                                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                            <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group ">
                                                                                    <label class="control-label" for="upload_gross_builtup_area_certificate">Upload Gross Builtup Area Certificate <span class="text-danger">*</span></label>
                                                                                    <div id="ctrl-upload_gross_builtup_area_certificate-holder" class=""> 
                                                                                        <div class="dropzone required" input="#ctrl-upload_gross_builtup_area_certificate" fieldname="upload_gross_builtup_area_certificate"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                                            <input name="upload_gross_builtup_area_certificate" id="ctrl-upload_gross_builtup_area_certificate" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_gross_builtup_area_certificate',""); ?>" type="text"  />
                                                                                                <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group ">
                                                                                        <label class="control-label" for="upload_cc_rdp_oc">Upload Cc Rdp Oc <span class="text-danger">*</span></label>
                                                                                        <div id="ctrl-upload_cc_rdp_oc-holder" class=""> 
                                                                                            <div class="dropzone required" input="#ctrl-upload_cc_rdp_oc" fieldname="upload_cc_rdp_oc"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                                                <input name="upload_cc_rdp_oc" id="ctrl-upload_cc_rdp_oc" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_cc_rdp_oc',""); ?>" type="text"  />
                                                                                                    <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                    <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group ">
                                                                                            <label class="control-label" for="upload_provisional_fire_noc">Upload Provisional Fire Noc <span class="text-danger">*</span></label>
                                                                                            <div id="ctrl-upload_provisional_fire_noc-holder" class=""> 
                                                                                                <div class="dropzone required" input="#ctrl-upload_provisional_fire_noc" fieldname="upload_provisional_fire_noc"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                                                    <input name="upload_provisional_fire_noc" id="ctrl-upload_provisional_fire_noc" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_provisional_fire_noc',""); ?>" type="text"  />
                                                                                                        <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                        <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group ">
                                                                                                <label class="control-label" for="upload_license_copy_mfs">Upload License Copy Mfs <span class="text-danger">*</span></label>
                                                                                                <div id="ctrl-upload_license_copy_mfs-holder" class=""> 
                                                                                                    <div class="dropzone required" input="#ctrl-upload_license_copy_mfs" fieldname="upload_license_copy_mfs"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                                                        <input name="upload_license_copy_mfs" id="ctrl-upload_license_copy_mfs" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_license_copy_mfs',""); ?>" type="text"  />
                                                                                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                            <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="form-group ">
                                                                                                    <label class="control-label" for="upload_disel_engine_test_certificate">Upload Disel Engine Test Certificate <span class="text-danger">*</span></label>
                                                                                                    <div id="ctrl-upload_disel_engine_test_certificate-holder" class=""> 
                                                                                                        <div class="dropzone required" input="#ctrl-upload_disel_engine_test_certificate" fieldname="upload_disel_engine_test_certificate"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                                                            <input name="upload_disel_engine_test_certificate" id="ctrl-upload_disel_engine_test_certificate" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_disel_engine_test_certificate',""); ?>" type="text"  />
                                                                                                                <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form-group ">
                                                                                                        <label class="control-label" for="upload_electical_certificate">Upload Electical Certificate <span class="text-danger">*</span></label>
                                                                                                        <div id="ctrl-upload_electical_certificate-holder" class=""> 
                                                                                                            <div class="dropzone required" input="#ctrl-upload_electical_certificate" fieldname="upload_electical_certificate"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                                                                <input name="upload_electical_certificate" id="ctrl-upload_electical_certificate" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_electical_certificate',""); ?>" type="text"  />
                                                                                                                    <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                    <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="form-group ">
                                                                                                            <label class="control-label" for="upload_lift_certificate">Upload Lift Certificate <span class="text-danger">*</span></label>
                                                                                                            <div id="ctrl-upload_lift_certificate-holder" class=""> 
                                                                                                                <div class="dropzone required" input="#ctrl-upload_lift_certificate" fieldname="upload_lift_certificate"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                                                                    <input name="upload_lift_certificate" id="ctrl-upload_lift_certificate" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_lift_certificate',""); ?>" type="text"  />
                                                                                                                        <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                        <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="form-group ">
                                                                                                                <label class="control-label" for="declaration">Declaration <span class="text-danger">*</span></label>
                                                                                                                <div id="ctrl-declaration-holder" class=""> 
                                                                                                                    <label class="custom-control custom-checkbox custom-control-inline option-btn">
                                                                                                                        <input class="custom-control-input" id="ctrl-declaration" value="true" <?php echo $this->set_field_checked('declaration','true'); ?> type="checkbox"  required="" name="declaration[]"  />
                                                                                                                            <span class="custom-control-label">All the information is ture</span>
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
