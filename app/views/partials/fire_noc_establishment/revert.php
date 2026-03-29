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
                    <h4 class="record-title">Edit  Fire Noc Establishment</h4>
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
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-vertical needs-validation" action="<?php print_link("fire_noc_establishment/revert/$page_id/?csrf_token=$csrf_token"); ?>" method="post">
                            <div>
                                <div class="form-group ">
                                    <label class="control-label" for="upload_agency_license_copy">Upload Agency License Copy <span class="text-danger">*</span></label>
                                    <div id="ctrl-upload_agency_license_copy-holder" class=""> 
                                        <div class="dropzone required" input="#ctrl-upload_agency_license_copy" fieldname="upload_agency_license_copy"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                            <input name="upload_agency_license_copy" id="ctrl-upload_agency_license_copy" required="" class="dropzone-input form-control" value="<?php  echo $data['upload_agency_license_copy']; ?>" type="text"  />
                                                <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                            </div>
                                        </div>
                                        <?php Html :: uploaded_files_list($data['upload_agency_license_copy'], '#ctrl-upload_agency_license_copy'); ?>
                                        <small class="form-text"><p style="color: red; font-size: 12px;">Upload file size should not exceed 3 MB.</p></small>
                                    </div>
                                    <div class="form-group ">
                                        <label class="control-label" for="upload_license_agencies_certificate">Upload License Agencies Certificate <span class="text-danger">*</span></label>
                                        <div id="ctrl-upload_license_agencies_certificate-holder" class=""> 
                                            <div class="dropzone required" input="#ctrl-upload_license_agencies_certificate" fieldname="upload_license_agencies_certificate"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                <input name="upload_license_agencies_certificate" id="ctrl-upload_license_agencies_certificate" required="" class="dropzone-input form-control" value="<?php  echo $data['upload_license_agencies_certificate']; ?>" type="text"  />
                                                    <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                    <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                </div>
                                            </div>
                                            <?php Html :: uploaded_files_list($data['upload_license_agencies_certificate'], '#ctrl-upload_license_agencies_certificate'); ?>
                                            <small class="form-text"><p style="color: red; font-size: 12px;">Upload file size should not exceed 3 MB.</p></small>
                                        </div>
                                        <div class="form-group ">
                                            <label class="control-label" for="upload_fire_equipment_color_photos">Upload Fire Equipment Color Photos <span class="text-danger">*</span></label>
                                            <div id="ctrl-upload_fire_equipment_color_photos-holder" class=""> 
                                                <div class="dropzone required" input="#ctrl-upload_fire_equipment_color_photos" fieldname="upload_fire_equipment_color_photos"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                    <input name="upload_fire_equipment_color_photos" id="ctrl-upload_fire_equipment_color_photos" required="" class="dropzone-input form-control" value="<?php  echo $data['upload_fire_equipment_color_photos']; ?>" type="text"  />
                                                        <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                        <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                    </div>
                                                </div>
                                                <?php Html :: uploaded_files_list($data['upload_fire_equipment_color_photos'], '#ctrl-upload_fire_equipment_color_photos'); ?>
                                                <small class="form-text"><p style="color: red; font-size: 12px;">Upload file size should not exceed 3 MB.</p></small>
                                            </div>
                                            <div class="form-group ">
                                                <label class="control-label" for="upload_available_fire_equipments_isi_certificate">Upload Available Fire Equipments Isi Certificate <span class="text-danger">*</span></label>
                                                <div id="ctrl-upload_available_fire_equipments_isi_certificate-holder" class=""> 
                                                    <div class="dropzone required" input="#ctrl-upload_available_fire_equipments_isi_certificate" fieldname="upload_available_fire_equipments_isi_certificate"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                        <input name="upload_available_fire_equipments_isi_certificate" id="ctrl-upload_available_fire_equipments_isi_certificate" required="" class="dropzone-input form-control" value="<?php  echo $data['upload_available_fire_equipments_isi_certificate']; ?>" type="text"  />
                                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                            <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                        </div>
                                                    </div>
                                                    <?php Html :: uploaded_files_list($data['upload_available_fire_equipments_isi_certificate'], '#ctrl-upload_available_fire_equipments_isi_certificate'); ?>
                                                    <small class="form-text"><p style="color: red; font-size: 12px;">Upload file size should not exceed 3 MB.</p></small>
                                                </div>
                                                <div class="form-group ">
                                                    <label class="control-label" for="upload_property_tax_receipt_or_agreement_or_rent_copy">Upload Property Tax Receipt Or Agreement Or Rent Copy <span class="text-danger">*</span></label>
                                                    <div id="ctrl-upload_property_tax_receipt_or_agreement_or_rent_copy-holder" class=""> 
                                                        <div class="dropzone required" input="#ctrl-upload_property_tax_receipt_or_agreement_or_rent_copy" fieldname="upload_property_tax_receipt_or_agreement_or_rent_copy"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                            <input name="upload_property_tax_receipt_or_agreement_or_rent_copy" id="ctrl-upload_property_tax_receipt_or_agreement_or_rent_copy" required="" class="dropzone-input form-control" value="<?php  echo $data['upload_property_tax_receipt_or_agreement_or_rent_copy']; ?>" type="text"  />
                                                                <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                            </div>
                                                        </div>
                                                        <?php Html :: uploaded_files_list($data['upload_property_tax_receipt_or_agreement_or_rent_copy'], '#ctrl-upload_property_tax_receipt_or_agreement_or_rent_copy'); ?>
                                                        <small class="form-text"><p style="color: red; font-size: 12px;">Upload file size should not exceed 3 MB.</p></small>
                                                    </div>
                                                    <div class="form-group ">
                                                        <label class="control-label" for="upload_mpcb_certificate">Upload Mpcb Certificate </label>
                                                        <div id="ctrl-upload_mpcb_certificate-holder" class=""> 
                                                            <div class="dropzone " input="#ctrl-upload_mpcb_certificate" fieldname="upload_mpcb_certificate"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                <input name="upload_mpcb_certificate" id="ctrl-upload_mpcb_certificate" class="dropzone-input form-control" value="<?php  echo $data['upload_mpcb_certificate']; ?>" type="text"  />
                                                                    <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                    <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                </div>
                                                            </div>
                                                            <?php Html :: uploaded_files_list($data['upload_mpcb_certificate'], '#ctrl-upload_mpcb_certificate'); ?>
                                                            <small class="form-text"><p style="font-size: 12px;">
                                                                <span style="color: green; font-weight: bold;">(Optional)</span>
                                                                <span style="color: red;"> Upload file size should not exceed 3 MB.</span>
                                                            </p>
                                                        </small>
                                                    </div>
                                                    <div class="form-group ">
                                                        <label class="control-label" for="upload_society_noc">Upload Society Noc </label>
                                                        <div id="ctrl-upload_society_noc-holder" class=""> 
                                                            <div class="dropzone " input="#ctrl-upload_society_noc" fieldname="upload_society_noc"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                <input name="upload_society_noc" id="ctrl-upload_society_noc" class="dropzone-input form-control" value="<?php  echo $data['upload_society_noc']; ?>" type="text"  />
                                                                    <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                    <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                </div>
                                                            </div>
                                                            <?php Html :: uploaded_files_list($data['upload_society_noc'], '#ctrl-upload_society_noc'); ?>
                                                            <small class="form-text"><p style="font-size: 12px;">
                                                                <span style="color: green; font-weight: bold;">(Optional)</span>
                                                                <span style="color: red;"> Upload file size should not exceed 3 MB.</span>
                                                            </p>
                                                        </small>
                                                    </div>
                                                    <div class="form-group ">
                                                        <label class="control-label" for="upload_internal_map">Upload Internal Map <span class="text-danger">*</span></label>
                                                        <div id="ctrl-upload_internal_map-holder" class=""> 
                                                            <div class="dropzone required" input="#ctrl-upload_internal_map" fieldname="upload_internal_map"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                <input name="upload_internal_map" id="ctrl-upload_internal_map" required="" class="dropzone-input form-control" value="<?php  echo $data['upload_internal_map']; ?>" type="text"  />
                                                                    <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                    <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                </div>
                                                            </div>
                                                            <?php Html :: uploaded_files_list($data['upload_internal_map'], '#ctrl-upload_internal_map'); ?>
                                                            <small class="form-text"><p style="color: red; font-size: 12px;">Upload file size should not exceed 3 MB.</p></small>
                                                        </div>
                                                        <div class="form-group ">
                                                            <label class="control-label" for="upload_location_layout_map">Upload Location Layout Map <span class="text-danger">*</span></label>
                                                            <div id="ctrl-upload_location_layout_map-holder" class=""> 
                                                                <div class="dropzone required" input="#ctrl-upload_location_layout_map" fieldname="upload_location_layout_map"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                    <input name="upload_location_layout_map" id="ctrl-upload_location_layout_map" required="" class="dropzone-input form-control" value="<?php  echo $data['upload_location_layout_map']; ?>" type="text"  />
                                                                        <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                        <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                    </div>
                                                                </div>
                                                                <?php Html :: uploaded_files_list($data['upload_location_layout_map'], '#ctrl-upload_location_layout_map'); ?>
                                                                <small class="form-text"><p style="color: red; font-size: 12px;">Upload file size should not exceed 3 MB.</p></small>
                                                            </div>
                                                            <div class="form-group ">
                                                                <label class="control-label" for="upload_electric_audit_report">Upload Electric Audit Report <span class="text-danger">*</span></label>
                                                                <div id="ctrl-upload_electric_audit_report-holder" class=""> 
                                                                    <div class="dropzone required" input="#ctrl-upload_electric_audit_report" fieldname="upload_electric_audit_report"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                        <input name="upload_electric_audit_report" id="ctrl-upload_electric_audit_report" required="" class="dropzone-input form-control" value="<?php  echo $data['upload_electric_audit_report']; ?>" type="text"  />
                                                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                            <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                        </div>
                                                                    </div>
                                                                    <?php Html :: uploaded_files_list($data['upload_electric_audit_report'], '#ctrl-upload_electric_audit_report'); ?>
                                                                    <small class="form-text"><p style="color: red; font-size: 12px;">Upload file size should not exceed 3 MB.</p></small>
                                                                </div>
                                                                <div class="form-group ">
                                                                    <label class="control-label" for="upload_affidavite">Upload Affidavite <span class="text-danger">*</span></label>
                                                                    <div id="ctrl-upload_affidavite-holder" class=""> 
                                                                        <div class="dropzone required" input="#ctrl-upload_affidavite" fieldname="upload_affidavite"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                            <input name="upload_affidavite" id="ctrl-upload_affidavite" required="" class="dropzone-input form-control" value="<?php  echo $data['upload_affidavite']; ?>" type="text"  />
                                                                                <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                            </div>
                                                                        </div>
                                                                        <?php Html :: uploaded_files_list($data['upload_affidavite'], '#ctrl-upload_affidavite'); ?>
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
                                                                        <label class="control-label" for="upload_lift_annual_maintenance_certificate">Upload Lift Annual Maintenance Certificate </label>
                                                                        <div id="ctrl-upload_lift_annual_maintenance_certificate-holder" class=""> 
                                                                            <div class="dropzone " input="#ctrl-upload_lift_annual_maintenance_certificate" fieldname="upload_lift_annual_maintenance_certificate"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                                <input name="upload_lift_annual_maintenance_certificate" id="ctrl-upload_lift_annual_maintenance_certificate" class="dropzone-input form-control" value="<?php  echo $data['upload_lift_annual_maintenance_certificate']; ?>" type="text"  />
                                                                                    <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                    <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                </div>
                                                                            </div>
                                                                            <?php Html :: uploaded_files_list($data['upload_lift_annual_maintenance_certificate'], '#ctrl-upload_lift_annual_maintenance_certificate'); ?>
                                                                            <small class="form-text"><p style="font-size: 12px;">
                                                                                <span style="color: green; font-weight: bold;">(Optional)</span>
                                                                                <span style="color: red;"> Upload file size should not exceed 3 MB.</span>
                                                                            </p>
                                                                        </small>
                                                                    </div>
                                                                    <div class="form-group ">
                                                                        <label class="control-label" for="upload_ac_annual_maintenance_certificate">Upload Ac Annual Maintenance Certificate </label>
                                                                        <div id="ctrl-upload_ac_annual_maintenance_certificate-holder" class=""> 
                                                                            <div class="dropzone " input="#ctrl-upload_ac_annual_maintenance_certificate" fieldname="upload_ac_annual_maintenance_certificate"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                                <input name="upload_ac_annual_maintenance_certificate" id="ctrl-upload_ac_annual_maintenance_certificate" class="dropzone-input form-control" value="<?php  echo $data['upload_ac_annual_maintenance_certificate']; ?>" type="text"  />
                                                                                    <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                    <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                </div>
                                                                            </div>
                                                                            <?php Html :: uploaded_files_list($data['upload_ac_annual_maintenance_certificate'], '#ctrl-upload_ac_annual_maintenance_certificate'); ?>
                                                                            <small class="form-text"><p style="font-size: 12px;">
                                                                                <span style="color: green; font-weight: bold;">(Optional)</span>
                                                                                <span style="color: red;"> Upload file size should not exceed 3 MB.</span>
                                                                            </p>
                                                                        </small>
                                                                    </div>
                                                                    <div class="form-group ">
                                                                        <label class="control-label" for="upload_building_structural_stability_report">Upload Building Structural Stability Report </label>
                                                                        <div id="ctrl-upload_building_structural_stability_report-holder" class=""> 
                                                                            <div class="dropzone " input="#ctrl-upload_building_structural_stability_report" fieldname="upload_building_structural_stability_report"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                                <input name="upload_building_structural_stability_report" id="ctrl-upload_building_structural_stability_report" class="dropzone-input form-control" value="<?php  echo $data['upload_building_structural_stability_report']; ?>" type="text"  />
                                                                                    <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                    <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                </div>
                                                                            </div>
                                                                            <?php Html :: uploaded_files_list($data['upload_building_structural_stability_report'], '#ctrl-upload_building_structural_stability_report'); ?>
                                                                            <small class="form-text"><p style="font-size: 12px;">
                                                                                <span style="color: green; font-weight: bold;">(Optional)</span>
                                                                                <span style="color: red;"> Upload file size should not exceed 3 MB.</span>
                                                                            </p>
                                                                        </small>
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
