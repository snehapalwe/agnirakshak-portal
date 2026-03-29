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
                    <h4 class="record-title"><strong style='color: black;'>EDIT FIRE FINAL NOC</strong></h4>
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
                <div class="col-md-12 comp-grid">
                    <?php $this :: display_page_errors(); ?>
                    <div  class="bg-light p-3 animated fadeIn page-content">
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-vertical needs-validation" action="<?php print_link("fire_final_noc/revert/$page_id/?csrf_token=$csrf_token"); ?>" method="post">
                            <div>
                                <div class="form-group ">
                                    <label class="control-label" for="upload_architect_application_letter">Upload Architect Application Letter <span class="text-danger">*</span></label>
                                    <div id="ctrl-upload_architect_application_letter-holder" class=""> 
                                        <div class="dropzone required" input="#ctrl-upload_architect_application_letter" fieldname="upload_architect_application_letter"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                            <input name="upload_architect_application_letter" id="ctrl-upload_architect_application_letter" required="" class="dropzone-input form-control" value="<?php  echo $data['upload_architect_application_letter']; ?>" type="text"  />
                                                <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                            </div>
                                        </div>
                                        <?php Html :: uploaded_files_list($data['upload_architect_application_letter'], '#ctrl-upload_architect_application_letter'); ?>
                                    </div>
                                    <div class="form-group ">
                                        <label class="control-label" for="upload_builders_application_letter">Upload Builders Application Letter <span class="text-danger">*</span></label>
                                        <div id="ctrl-upload_builders_application_letter-holder" class=""> 
                                            <div class="dropzone required" input="#ctrl-upload_builders_application_letter" fieldname="upload_builders_application_letter"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                <input name="upload_builders_application_letter" id="ctrl-upload_builders_application_letter" required="" class="dropzone-input form-control" value="<?php  echo $data['upload_builders_application_letter']; ?>" type="text"  />
                                                    <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                    <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                </div>
                                            </div>
                                            <?php Html :: uploaded_files_list($data['upload_builders_application_letter'], '#ctrl-upload_builders_application_letter'); ?>
                                        </div>
                                        <div class="form-group ">
                                            <label class="control-label" for="upload_gross_built_up_area_certificate">Upload Gross Built Up Area Certificate <span class="text-danger">*</span></label>
                                            <div id="ctrl-upload_gross_built_up_area_certificate-holder" class=""> 
                                                <div class="dropzone required" input="#ctrl-upload_gross_built_up_area_certificate" fieldname="upload_gross_built_up_area_certificate"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                    <input name="upload_gross_built_up_area_certificate" id="ctrl-upload_gross_built_up_area_certificate" required="" class="dropzone-input form-control" value="<?php  echo $data['upload_gross_built_up_area_certificate']; ?>" type="text"  />
                                                        <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                        <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                    </div>
                                                </div>
                                                <?php Html :: uploaded_files_list($data['upload_gross_built_up_area_certificate'], '#ctrl-upload_gross_built_up_area_certificate'); ?>
                                            </div>
                                            <div class="form-group ">
                                                <label class="control-label" for="upload_cc_rdp_oc">Upload Cc Rdp Oc <span class="text-danger">*</span></label>
                                                <div id="ctrl-upload_cc_rdp_oc-holder" class=""> 
                                                    <div class="dropzone required" input="#ctrl-upload_cc_rdp_oc" fieldname="upload_cc_rdp_oc"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                        <input name="upload_cc_rdp_oc" id="ctrl-upload_cc_rdp_oc" required="" class="dropzone-input form-control" value="<?php  echo $data['upload_cc_rdp_oc']; ?>" type="text"  />
                                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                            <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                        </div>
                                                    </div>
                                                    <?php Html :: uploaded_files_list($data['upload_cc_rdp_oc'], '#ctrl-upload_cc_rdp_oc'); ?>
                                                </div>
                                                <div class="form-group ">
                                                    <label class="control-label" for="upload_floor_plan_set">Upload Floor Plan Set <span class="text-danger">*</span></label>
                                                    <div id="ctrl-upload_floor_plan_set-holder" class=""> 
                                                        <div class="dropzone required" input="#ctrl-upload_floor_plan_set" fieldname="upload_floor_plan_set"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                            <input name="upload_floor_plan_set" id="ctrl-upload_floor_plan_set" required="" class="dropzone-input form-control" value="<?php  echo $data['upload_floor_plan_set']; ?>" type="text"  />
                                                                <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                            </div>
                                                        </div>
                                                        <?php Html :: uploaded_files_list($data['upload_floor_plan_set'], '#ctrl-upload_floor_plan_set'); ?>
                                                    </div>
                                                    <div class="form-group ">
                                                        <label class="control-label" for="upload_location_site_photo">Upload Location Site Photo <span class="text-danger">*</span></label>
                                                        <div id="ctrl-upload_location_site_photo-holder" class=""> 
                                                            <div class="dropzone required" input="#ctrl-upload_location_site_photo" fieldname="upload_location_site_photo"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                <input name="upload_location_site_photo" id="ctrl-upload_location_site_photo" required="" class="dropzone-input form-control" value="<?php  echo $data['upload_location_site_photo']; ?>" type="text"  />
                                                                    <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                    <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                </div>
                                                            </div>
                                                            <?php Html :: uploaded_files_list($data['upload_location_site_photo'], '#ctrl-upload_location_site_photo'); ?>
                                                        </div>
                                                        <div class="form-group ">
                                                            <label class="control-label" for="upload_google_map_of_land_in_color">Upload Google Map Of Land In Color <span class="text-danger">*</span></label>
                                                            <div id="ctrl-upload_google_map_of_land_in_color-holder" class=""> 
                                                                <div class="dropzone required" input="#ctrl-upload_google_map_of_land_in_color" fieldname="upload_google_map_of_land_in_color"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                    <input name="upload_google_map_of_land_in_color" id="ctrl-upload_google_map_of_land_in_color" required="" class="dropzone-input form-control" value="<?php  echo $data['upload_google_map_of_land_in_color']; ?>" type="text"  />
                                                                        <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                        <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                    </div>
                                                                </div>
                                                                <?php Html :: uploaded_files_list($data['upload_google_map_of_land_in_color'], '#ctrl-upload_google_map_of_land_in_color'); ?>
                                                            </div>
                                                            <div class="form-group ">
                                                                <label class="control-label" for="upload_provisional_fire_noc">Upload Provisional Fire Noc <span class="text-danger">*</span></label>
                                                                <div id="ctrl-upload_provisional_fire_noc-holder" class=""> 
                                                                    <div class="dropzone required" input="#ctrl-upload_provisional_fire_noc" fieldname="upload_provisional_fire_noc"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                        <input name="upload_provisional_fire_noc" id="ctrl-upload_provisional_fire_noc" required="" class="dropzone-input form-control" value="<?php  echo $data['upload_provisional_fire_noc']; ?>" type="text"  />
                                                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                            <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                        </div>
                                                                    </div>
                                                                    <?php Html :: uploaded_files_list($data['upload_provisional_fire_noc'], '#ctrl-upload_provisional_fire_noc'); ?>
                                                                </div>
                                                                <div class="form-group ">
                                                                    <label class="control-label" for="upload_revised_provisional_fire_noc">Upload Revised Provisional Fire Noc <span class="text-danger">*</span></label>
                                                                    <div id="ctrl-upload_revised_provisional_fire_noc-holder" class=""> 
                                                                        <div class="dropzone required" input="#ctrl-upload_revised_provisional_fire_noc" fieldname="upload_revised_provisional_fire_noc"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                            <input name="upload_revised_provisional_fire_noc" id="ctrl-upload_revised_provisional_fire_noc" required="" class="dropzone-input form-control" value="<?php  echo $data['upload_revised_provisional_fire_noc']; ?>" type="text"  />
                                                                                <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                            </div>
                                                                        </div>
                                                                        <?php Html :: uploaded_files_list($data['upload_revised_provisional_fire_noc'], '#ctrl-upload_revised_provisional_fire_noc'); ?>
                                                                    </div>
                                                                    <div class="form-group ">
                                                                        <label class="control-label" for="upload_fire_final_part_noc">Upload Fire Final Part Noc <span class="text-danger">*</span></label>
                                                                        <div id="ctrl-upload_fire_final_part_noc-holder" class=""> 
                                                                            <div class="dropzone required" input="#ctrl-upload_fire_final_part_noc" fieldname="upload_fire_final_part_noc"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                                <input name="upload_fire_final_part_noc" id="ctrl-upload_fire_final_part_noc" required="" class="dropzone-input form-control" value="<?php  echo $data['upload_fire_final_part_noc']; ?>" type="text"  />
                                                                                    <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                    <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                </div>
                                                                            </div>
                                                                            <?php Html :: uploaded_files_list($data['upload_fire_final_part_noc'], '#ctrl-upload_fire_final_part_noc'); ?>
                                                                        </div>
                                                                        <div class="form-group ">
                                                                            <label class="control-label" for="upload_work_completion_certificate">Upload Work Completion Certificate <span class="text-danger">*</span></label>
                                                                            <div id="ctrl-upload_work_completion_certificate-holder" class=""> 
                                                                                <div class="dropzone required" input="#ctrl-upload_work_completion_certificate" fieldname="upload_work_completion_certificate"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                                    <input name="upload_work_completion_certificate" id="ctrl-upload_work_completion_certificate" required="" class="dropzone-input form-control" value="<?php  echo $data['upload_work_completion_certificate']; ?>" type="text"  />
                                                                                        <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                        <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                    </div>
                                                                                </div>
                                                                                <?php Html :: uploaded_files_list($data['upload_work_completion_certificate'], '#ctrl-upload_work_completion_certificate'); ?>
                                                                            </div>
                                                                            <div class="form-group ">
                                                                                <label class="control-label" for="upload_structural_stability_certificate">Upload Structural Stability Certificate <span class="text-danger">*</span></label>
                                                                                <div id="ctrl-upload_structural_stability_certificate-holder" class=""> 
                                                                                    <div class="dropzone required" input="#ctrl-upload_structural_stability_certificate" fieldname="upload_structural_stability_certificate"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                                        <input name="upload_structural_stability_certificate" id="ctrl-upload_structural_stability_certificate" required="" class="dropzone-input form-control" value="<?php  echo $data['upload_structural_stability_certificate']; ?>" type="text"  />
                                                                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                            <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <?php Html :: uploaded_files_list($data['upload_structural_stability_certificate'], '#ctrl-upload_structural_stability_certificate'); ?>
                                                                                </div>
                                                                                <div class="form-group ">
                                                                                    <label class="control-label" for="upload_lift_certificate">Upload Lift Certificate <span class="text-danger">*</span></label>
                                                                                    <div id="ctrl-upload_lift_certificate-holder" class=""> 
                                                                                        <div class="dropzone required" input="#ctrl-upload_lift_certificate" fieldname="upload_lift_certificate"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                                            <input name="upload_lift_certificate" id="ctrl-upload_lift_certificate" required="" class="dropzone-input form-control" value="<?php  echo $data['upload_lift_certificate']; ?>" type="text"  />
                                                                                                <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <?php Html :: uploaded_files_list($data['upload_lift_certificate'], '#ctrl-upload_lift_certificate'); ?>
                                                                                    </div>
                                                                                    <div class="form-group ">
                                                                                        <label class="control-label" for="upload_fixed_fire_fighting_installations_letter">Upload Fixed Fire Fighting Installations Letter <span class="text-danger">*</span></label>
                                                                                        <div id="ctrl-upload_fixed_fire_fighting_installations_letter-holder" class=""> 
                                                                                            <div class="dropzone required" input="#ctrl-upload_fixed_fire_fighting_installations_letter" fieldname="upload_fixed_fire_fighting_installations_letter"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                                                <input name="upload_fixed_fire_fighting_installations_letter" id="ctrl-upload_fixed_fire_fighting_installations_letter" required="" class="dropzone-input form-control" value="<?php  echo $data['upload_fixed_fire_fighting_installations_letter']; ?>" type="text"  />
                                                                                                    <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                    <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <?php Html :: uploaded_files_list($data['upload_fixed_fire_fighting_installations_letter'], '#ctrl-upload_fixed_fire_fighting_installations_letter'); ?>
                                                                                        </div>
                                                                                        <div class="form-group ">
                                                                                            <label class="control-label" for="upload_form_A_certificate_from_license_agency">Upload Form A Certificate From License Agency <span class="text-danger">*</span></label>
                                                                                            <div id="ctrl-upload_form_A_certificate_from_license_agency-holder" class=""> 
                                                                                                <div class="dropzone required" input="#ctrl-upload_form_A_certificate_from_license_agency" fieldname="upload_form_A_certificate_from_license_agency"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                                                    <input name="upload_form_A_certificate_from_license_agency" id="ctrl-upload_form_A_certificate_from_license_agency" required="" class="dropzone-input form-control" value="<?php  echo $data['upload_form_A_certificate_from_license_agency']; ?>" type="text"  />
                                                                                                        <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                        <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <?php Html :: uploaded_files_list($data['upload_form_A_certificate_from_license_agency'], '#ctrl-upload_form_A_certificate_from_license_agency'); ?>
                                                                                            </div>
                                                                                            <div class="form-group ">
                                                                                                <label class="control-label" for="upload_license_copy_of_MFS">Upload License Copy Of Mfs <span class="text-danger">*</span></label>
                                                                                                <div id="ctrl-upload_license_copy_of_MFS-holder" class=""> 
                                                                                                    <div class="dropzone required" input="#ctrl-upload_license_copy_of_MFS" fieldname="upload_license_copy_of_MFS"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                                                        <input name="upload_license_copy_of_MFS" id="ctrl-upload_license_copy_of_MFS" required="" class="dropzone-input form-control" value="<?php  echo $data['upload_license_copy_of_MFS']; ?>" type="text"  />
                                                                                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                            <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <?php Html :: uploaded_files_list($data['upload_license_copy_of_MFS'], '#ctrl-upload_license_copy_of_MFS'); ?>
                                                                                                </div>
                                                                                                <div class="form-group ">
                                                                                                    <label class="control-label" for="upload_fire_auto_cad_drawing">Upload Fire Auto Cad Drawing <span class="text-danger">*</span></label>
                                                                                                    <div id="ctrl-upload_fire_auto_cad_drawing-holder" class=""> 
                                                                                                        <div class="dropzone required" input="#ctrl-upload_fire_auto_cad_drawing" fieldname="upload_fire_auto_cad_drawing"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                                                            <input name="upload_fire_auto_cad_drawing" id="ctrl-upload_fire_auto_cad_drawing" required="" class="dropzone-input form-control" value="<?php  echo $data['upload_fire_auto_cad_drawing']; ?>" type="text"  />
                                                                                                                <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <?php Html :: uploaded_files_list($data['upload_fire_auto_cad_drawing'], '#ctrl-upload_fire_auto_cad_drawing'); ?>
                                                                                                    </div>
                                                                                                    <div class="form-group ">
                                                                                                        <label class="control-label" for="upload_affidavit">Upload Affidavit <span class="text-danger">*</span></label>
                                                                                                        <div id="ctrl-upload_affidavit-holder" class=""> 
                                                                                                            <div class="dropzone required" input="#ctrl-upload_affidavit" fieldname="upload_affidavit"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                                                                <input name="upload_affidavit" id="ctrl-upload_affidavit" required="" class="dropzone-input form-control" value="<?php  echo $data['upload_affidavit']; ?>" type="text"  />
                                                                                                                    <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                    <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <?php Html :: uploaded_files_list($data['upload_affidavit'], '#ctrl-upload_affidavit'); ?>
                                                                                                        </div>
                                                                                                        <div class="form-group ">
                                                                                                            <label class="control-label" for="upload_electric_contractor_certificate_and_license_copy">Upload Electric Contractor Certificate And License Copy <span class="text-danger">*</span></label>
                                                                                                            <div id="ctrl-upload_electric_contractor_certificate_and_license_copy-holder" class=""> 
                                                                                                                <div class="dropzone required" input="#ctrl-upload_electric_contractor_certificate_and_license_copy" fieldname="upload_electric_contractor_certificate_and_license_copy"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                                                                    <input name="upload_electric_contractor_certificate_and_license_copy" id="ctrl-upload_electric_contractor_certificate_and_license_copy" required="" class="dropzone-input form-control" value="<?php  echo $data['upload_electric_contractor_certificate_and_license_copy']; ?>" type="text"  />
                                                                                                                        <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                        <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <?php Html :: uploaded_files_list($data['upload_electric_contractor_certificate_and_license_copy'], '#ctrl-upload_electric_contractor_certificate_and_license_copy'); ?>
                                                                                                            </div>
                                                                                                            <div class="form-group ">
                                                                                                                <label class="control-label" for="upload_diesel_engine_generator_invoice_copy_and_test_certificate">Upload Diesel Engine Generator Invoice Copy And Test Certificate <span class="text-danger">*</span></label>
                                                                                                                <div id="ctrl-upload_diesel_engine_generator_invoice_copy_and_test_certificate-holder" class=""> 
                                                                                                                    <div class="dropzone required" input="#ctrl-upload_diesel_engine_generator_invoice_copy_and_test_certificate" fieldname="upload_diesel_engine_generator_invoice_copy_and_test_certificate"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                                                                        <input name="upload_diesel_engine_generator_invoice_copy_and_test_certificate" id="ctrl-upload_diesel_engine_generator_invoice_copy_and_test_certificate" required="" class="dropzone-input form-control" value="<?php  echo $data['upload_diesel_engine_generator_invoice_copy_and_test_certificate']; ?>" type="text"  />
                                                                                                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                            <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <?php Html :: uploaded_files_list($data['upload_diesel_engine_generator_invoice_copy_and_test_certificate'], '#ctrl-upload_diesel_engine_generator_invoice_copy_and_test_certificate'); ?>
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
