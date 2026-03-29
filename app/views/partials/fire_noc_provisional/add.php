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
                    <h4 class="record-title">Add New Fire Noc Provisional</h4>
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
                        <form id="fire_noc_provisional-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-vertical needs-validation" action="<?php print_link("fire_noc_provisional/add?csrf_token=$csrf_token") ?>" method="post">
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
                                                <input id="ctrl-mobile_no"  value="<?php  echo $this->set_field_value('mobile_no',""); ?>" type="number" placeholder="Enter Mobile No" min="0000000000" max="9999999999" step="1"  required="" name="mobile_no"  class="form-control " />
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <label class="control-label" for="zone_id">Zone Id <span class="text-danger">*</span></label>
                                                <div id="ctrl-zone_id-holder" class=""> 
                                                    <select required=""  id="ctrl-zone_id" name="zone_id"  placeholder="Select a value ..."    class="custom-select" >
                                                        <option value="">Select a value ...</option>
                                                        <?php 
                                                        $zone_id_options = $comp_model -> fire_noc_provisional_zone_id_option_list();
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
                                                        <label class="control-label" for="upload_developers_letter">Upload Developers Letter <span class="text-danger">*</span></label>
                                                        <div id="ctrl-upload_developers_letter-holder" class=""> 
                                                            <div class="dropzone required" input="#ctrl-upload_developers_letter" fieldname="upload_developers_letter"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                <input name="upload_developers_letter" id="ctrl-upload_developers_letter" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_developers_letter',""); ?>" type="text"  />
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
                                                                    <label class="control-label" for="upload_floor_plan_set">Upload Floor Plan Set <span class="text-danger">*</span></label>
                                                                    <div id="ctrl-upload_floor_plan_set-holder" class=""> 
                                                                        <div class="dropzone required" input="#ctrl-upload_floor_plan_set" fieldname="upload_floor_plan_set"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                            <input name="upload_floor_plan_set" id="ctrl-upload_floor_plan_set" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_floor_plan_set',""); ?>" type="text"  />
                                                                                <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group ">
                                                                        <label class="control-label" for="upload_location_site_photos">Upload Location Site Photos <span class="text-danger">*</span></label>
                                                                        <div id="ctrl-upload_location_site_photos-holder" class=""> 
                                                                            <div class="dropzone required" input="#ctrl-upload_location_site_photos" fieldname="upload_location_site_photos"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.gif,.jpeg" filesize="3" maximum="5">
                                                                                <input name="upload_location_site_photos" id="ctrl-upload_location_site_photos" required="" class="dropzone-input form-control" value="<?php  echo $this->set_field_value('upload_location_site_photos',""); ?>" type="text"  />
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
