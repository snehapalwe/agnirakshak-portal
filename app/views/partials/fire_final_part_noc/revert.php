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
                    <h4 class="record-title">Edit  Fire Final Part Noc</h4>
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
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-vertical needs-validation" action="<?php print_link("fire_final_part_noc/revert/$page_id/?csrf_token=$csrf_token"); ?>" method="post">
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
                                        <small class="form-text"><p style="color: red; font-size: 12px;">Upload file size should not exceed 3 MB.</p></small>
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
                                            <small class="form-text"><p style="color: red; font-size: 12px;">Upload file size should not exceed 3 MB.</p></small>
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
                                                <small class="form-text"><p style="color: red; font-size: 12px;">Upload file size should not exceed 3 MB.</p></small>
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
                                                    <small class="form-text"><p style="color: red; font-size: 12px;">Upload file size should not exceed 3 MB.</p></small>
                                                </div>
                                                <div class="form-group ">
                                                    <label class="control-label" for="upload_floor_plan_set">Upload Floor Plan Set <span class="text-danger">*</span></label>
                                                    <div id="ctrl-upload_floor_plan_set-holder" class=""> 
                                                        <div class="dropzone required" input="#ctrl-upload_floor_plan_set" fieldname="upload_floor_plan_set"    data-multiple="true" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="30" maximum="10">
                                                            <input name="upload_floor_plan_set" id="ctrl-upload_floor_plan_set" required="" class="dropzone-input form-control" value="<?php  echo $data['upload_floor_plan_set']; ?>" type="text"  />
                                                                <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                            </div>
                                                        </div>
                                                        <?php Html :: uploaded_files_list($data['upload_floor_plan_set'], '#ctrl-upload_floor_plan_set'); ?>
                                                        <small class="form-text"><p style="color: red; font-size: 12px;">Upload file size should not exceed 30 MB.</p></small>
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
                                                            <small class="form-text"><p style="color: red; font-size: 12px;">Upload file size should not exceed 3 MB.</p></small>
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
                                                                <small class="form-text"><p style="color: red; font-size: 12px;">Upload file size should not exceed 3 MB.</p></small>
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
                                                                    <small class="form-text"><p style="color: red; font-size: 12px;">Upload file size should not exceed 3 MB.</p></small>
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
                                                                        <small class="form-text"><p style="color: red; font-size: 12px;">Upload file size should not exceed 3 MB.</p></small>
                                                                    </div>
                                                                    <div class="form-group ">
                                                                        <label class="control-label" for="upload_form_a">Upload Form A <span class="text-danger">*</span></label>
                                                                        <div id="ctrl-upload_form_a-holder" class=""> 
                                                                            <div class="dropzone required" input="#ctrl-upload_form_a" fieldname="upload_form_a"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                                <input name="upload_form_a" id="ctrl-upload_form_a" required="" class="dropzone-input form-control" value="<?php  echo $data['upload_form_a']; ?>" type="text"  />
                                                                                    <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                    <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                </div>
                                                                            </div>
                                                                            <?php Html :: uploaded_files_list($data['upload_form_a'], '#ctrl-upload_form_a'); ?>
                                                                            <small class="form-text"><p style="color: red; font-size: 12px;">Upload file size should not exceed 3 MB.</p></small>
                                                                        </div>
                                                                        <div class="form-group ">
                                                                            <label class="control-label" for="upload_lic_of_mfs">Upload Licence Copy Of MFS <span class="text-danger">*</span></label>
                                                                            <div id="ctrl-upload_lic_of_mfs-holder" class=""> 
                                                                                <div class="dropzone required" input="#ctrl-upload_lic_of_mfs" fieldname="upload_lic_of_mfs"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                                    <input name="upload_lic_of_mfs" id="ctrl-upload_lic_of_mfs" required="" class="dropzone-input form-control" value="<?php  echo $data['upload_lic_of_mfs']; ?>" type="text"  />
                                                                                        <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                        <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                    </div>
                                                                                </div>
                                                                                <?php Html :: uploaded_files_list($data['upload_lic_of_mfs'], '#ctrl-upload_lic_of_mfs'); ?>
                                                                                <small class="form-text"><p style="color: red; font-size: 12px;">Upload file size should not exceed 3 MB.</p></small>
                                                                            </div>
                                                                            <div class="form-group ">
                                                                                <label class="control-label" for="upload_electric_contract">Upload Electric Contract <span class="text-danger">*</span></label>
                                                                                <div id="ctrl-upload_electric_contract-holder" class=""> 
                                                                                    <div class="dropzone required" input="#ctrl-upload_electric_contract" fieldname="upload_electric_contract"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                                        <input name="upload_electric_contract" id="ctrl-upload_electric_contract" required="" class="dropzone-input form-control" value="<?php  echo $data['upload_electric_contract']; ?>" type="text"  />
                                                                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                            <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <?php Html :: uploaded_files_list($data['upload_electric_contract'], '#ctrl-upload_electric_contract'); ?>
                                                                                    <small class="form-text"><p style="color: red; font-size: 12px;">Upload file size should not exceed 3 MB.</p></small>
                                                                                </div>
                                                                                <div class="form-group ">
                                                                                    <label class="control-label" for="upload_site_photo">Upload Site Photo <span class="text-danger">*</span></label>
                                                                                    <div id="ctrl-upload_site_photo-holder" class=""> 
                                                                                        <div class="dropzone required" input="#ctrl-upload_site_photo" fieldname="upload_site_photo"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.gif,.jpeg" filesize="3" maximum="1">
                                                                                            <input name="upload_site_photo" id="ctrl-upload_site_photo" required="" class="dropzone-input form-control" value="<?php  echo $data['upload_site_photo']; ?>" type="text"  />
                                                                                                <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <?php Html :: uploaded_files_list($data['upload_site_photo'], '#ctrl-upload_site_photo'); ?>
                                                                                        <small class="form-text"><p style="color: red; font-size: 12px;">Upload file size should not exceed 3 MB.</p></small>
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
                                                                                            <small class="form-text"><p style="color: red; font-size: 12px;">Upload file size should not exceed 3 MB.</p></small>
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
