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
                    <h4 class="record-title">Fire Noc Application for Establishments / Fire Noc Application for Establishments / आस्थापनांकरिता फायर ना-हरकत दाखला अर्ज </h4>
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
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-vertical needs-validation" action="<?php print_link("fire_noc_establishment/edit/$page_id/?csrf_token=$csrf_token"); ?>" method="post">
                            <div>
                                <div class="form-group ">
                                    <label class="control-label" for="property_number">PROPERTY NUMBER  <span class="text-danger">*</span></label>
                                    <div id="ctrl-property_number-holder" class=""> 
                                        <input id="ctrl-property_number"  value="<?php  echo $data['property_number']; ?>" type="text" placeholder="Enter Property Number"  required="" name="property_number"  class="form-control " />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label class="control-label" for="name_of_property_owner">NAME OF PROPERTY OWNER  </label>
                                        <div id="ctrl-name_of_property_owner-holder" class=""> 
                                            <input id="ctrl-name_of_property_owner"  value="<?php  echo $data['name_of_property_owner']; ?>" type="text" placeholder="Enter Name Of Property Owner"  readonly name="name_of_property_owner"  class="form-control " />
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label class="control-label" for="pending_due_amount">PENDING DUE AMOUNT  </label>
                                            <div id="ctrl-pending_due_amount-holder" class=""> 
                                                <input id="ctrl-pending_due_amount"  value="<?php  echo $data['pending_due_amount']; ?>" type="number" placeholder="Enter Pending Due Amount" step="0.1"  readonly name="pending_due_amount"  class="form-control " />
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <label class="control-label" for="area_in_sq_ft">AREA (SQ. FT.)  </label>
                                                <div id="ctrl-area_in_sq_ft-holder" class=""> 
                                                    <input id="ctrl-area_in_sq_ft"  value="<?php  echo $data['area_in_sq_ft']; ?>" type="number" placeholder="Enter Area In Sq Ft" step="1"  readonly name="area_in_sq_ft"  class="form-control " />
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label class="control-label" for="application_type">APPLICATION TYPE  <span class="text-danger">*</span></label>
                                                    <div id="ctrl-application_type-holder" class=""> 
                                                        <select required=""  id="ctrl-application_type" name="application_type"  placeholder="Select a value ..."    class="custom-select" >
                                                            <option value="">Select a value ...</option>
                                                            <?php
                                                            $application_type_options = Menu :: $application_type;
                                                            $field_value = $data['application_type'];
                                                            if(!empty($application_type_options)){
                                                            foreach($application_type_options as $option){
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
                                                <div class="form-group ">
                                                    <label class="control-label" for="establishment_type_id">ESTABLISHMENT TYPE   <span class="text-danger">*</span></label>
                                                    <div id="ctrl-establishment_type_id-holder" class=""> 
                                                        <select required=""  id="ctrl-establishment_type_id" name="establishment_type_id"  placeholder="Select a value ..."    class="custom-select" >
                                                            <option value="">Select a value ...</option>
                                                            <?php
                                                            $rec = $data['establishment_type_id'];
                                                            $establishment_type_id_options = $comp_model -> fire_noc_establishment_establishment_type_id_option_list();
                                                            if(!empty($establishment_type_id_options)){
                                                            foreach($establishment_type_id_options as $option){
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
                                                <div class="form-group ">
                                                    <label class="control-label" for="applicant_name">APPLICANT NAME  <span class="text-danger">*</span></label>
                                                    <div id="ctrl-applicant_name-holder" class=""> 
                                                        <input id="ctrl-applicant_name"  value="<?php  echo $data['applicant_name']; ?>" type="text" placeholder="Enter Applicant Name"  required="" name="applicant_name"  class="form-control " />
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <label class="control-label" for="establishment_name">ESTABLISHMENT NAME  <span class="text-danger">*</span></label>
                                                        <div id="ctrl-establishment_name-holder" class=""> 
                                                            <input id="ctrl-establishment_name"  value="<?php  echo $data['establishment_name']; ?>" type="text" placeholder="Enter Establishment Name"  required="" name="establishment_name"  class="form-control " />
                                                            </div>
                                                        </div>
                                                        <div class="form-group ">
                                                            <label class="control-label" for="establishment_address">ESTABLISHMENT ADDRESS  <span class="text-danger">*</span></label>
                                                            <div id="ctrl-establishment_address-holder" class=""> 
                                                                <input id="ctrl-establishment_address"  value="<?php  echo $data['establishment_address']; ?>" type="text" placeholder="Enter Establishment Address"  required="" name="establishment_address"  class="form-control " />
                                                                </div>
                                                            </div>
                                                            <div class="form-group ">
                                                                <label class="control-label" for="mobile_no">MOBILE NO.  <span class="text-danger">*</span></label>
                                                                <div id="ctrl-mobile_no-holder" class=""> 
                                                                    <input id="ctrl-mobile_no"  value="<?php  echo $data['mobile_no']; ?>" type="number" placeholder="Enter Mobile No" min="0000000000" max="9999999999" step="1"  required="" name="mobile_no"  class="form-control " />
                                                                    </div>
                                                                </div>
                                                                <div class="form-group ">
                                                                    <label class="control-label" for="zone_id">Ward / प्रभाग  <span class="text-danger">*</span></label>
                                                                    <div id="ctrl-zone_id-holder" class=""> 
                                                                        <select required=""  id="ctrl-zone_id" name="zone_id"  placeholder="Select a value ..."    class="custom-select" >
                                                                            <option value="">Select a value ...</option>
                                                                            <?php
                                                                            $rec = $data['zone_id'];
                                                                            $zone_id_options = $comp_model -> fire_noc_establishment_zone_id_option_list();
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
                                                                <div class="form-group ">
                                                                    <label class="control-label" for="working_hours_from">WORKING HOURS FROM  <span class="text-danger">*</span></label>
                                                                    <div id="ctrl-working_hours_from-holder" class="input-group"> 
                                                                        <input id="ctrl-working_hours_from" class="form-control datepicker  datepicker"  required="" value="<?php  echo $data['working_hours_from']; ?>" type="time" name="working_hours_from" placeholder="Enter Working Hours From" data-enable-time="true" data-min-date="" data-max-date=""  data-alt-format="H:i" data-date-format="H:i:S" data-inline="false" data-no-calendar="true" data-mode="single" /> 
                                                                            <div class="input-group-append">
                                                                                <span class="input-group-text"><i class="fa fa-clock"></i></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group ">
                                                                        <label class="control-label" for="working_hours_to">WORKING HOURS TO  <span class="text-danger">*</span></label>
                                                                        <div id="ctrl-working_hours_to-holder" class="input-group"> 
                                                                            <input id="ctrl-working_hours_to" class="form-control datepicker  datepicker"  required="" value="<?php  echo $data['working_hours_to']; ?>" type="time" name="working_hours_to" placeholder="Enter Working Hours To" data-enable-time="true" data-min-date="" data-max-date=""  data-alt-format="H:i" data-date-format="H:i:S" data-inline="false" data-no-calendar="true" data-mode="single" /> 
                                                                                <div class="input-group-append">
                                                                                    <span class="input-group-text"><i class="fa fa-clock"></i></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group ">
                                                                            <label class="control-label" for="worker_count">WORKER COUNT  <span class="text-danger">*</span></label>
                                                                            <div id="ctrl-worker_count-holder" class=""> 
                                                                                <input id="ctrl-worker_count"  value="<?php  echo $data['worker_count']; ?>" type="number" placeholder="Enter Worker Count" step="1"  required="" name="worker_count"  class="form-control " />
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group ">
                                                                                <label class="control-label" for="subject">SUBJECT  <span class="text-danger">*</span></label>
                                                                                <div id="ctrl-subject-holder" class=""> 
                                                                                    <input id="ctrl-subject"  value="<?php  echo $data['subject']; ?>" type="text" placeholder="Enter Subject"  required="" name="subject"  class="form-control " />
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group ">
                                                                                    <label class="control-label" for="upload_form_b">UPLOAD FORM B  <span class="text-danger">*</span></label>
                                                                                    <div id="ctrl-upload_form_b-holder" class=""> 
                                                                                        <div class="dropzone required" input="#ctrl-upload_form_b" fieldname="upload_form_b"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.jpeg,.pdf" filesize="3" maximum="1">
                                                                                            <input name="upload_form_b" id="ctrl-upload_form_b" required="" class="dropzone-input form-control" value="<?php  echo $data['upload_form_b']; ?>" type="text"  />
                                                                                                <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <?php Html :: uploaded_files_list($data['upload_form_b'], '#ctrl-upload_form_b'); ?>
                                                                                        <small class="form-text"><p style="color: red; font-size: 12px;">Upload file size should not exceed 3 MB.</p></small>
                                                                                    </div>
                                                                                    <div class="form-group ">
                                                                                        <label class="control-label" for="upload_agency_license_copy">UPLOAD AGENCY LICENSE COPY  <span class="text-danger">*</span></label>
                                                                                        <div id="ctrl-upload_agency_license_copy-holder" class=""> 
                                                                                            <div class="dropzone required" input="#ctrl-upload_agency_license_copy" fieldname="upload_agency_license_copy"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.jpeg,.pdf" filesize="3" maximum="1">
                                                                                                <input name="upload_agency_license_copy" id="ctrl-upload_agency_license_copy" required="" class="dropzone-input form-control" value="<?php  echo $data['upload_agency_license_copy']; ?>" type="text"  />
                                                                                                    <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                    <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <?php Html :: uploaded_files_list($data['upload_agency_license_copy'], '#ctrl-upload_agency_license_copy'); ?>
                                                                                            <small class="form-text"><p style="color: red; font-size: 12px;">Upload file size should not exceed 3 MB.</p></small>
                                                                                        </div>
                                                                                        <div class="form-group ">
                                                                                            <label class="control-label" for="upload_license_agencies_certificate">UPLOAD LICENSE AGENCY CERTIFICATE  <span class="text-danger">*</span></label>
                                                                                            <div id="ctrl-upload_license_agencies_certificate-holder" class=""> 
                                                                                                <div class="dropzone required" input="#ctrl-upload_license_agencies_certificate" fieldname="upload_license_agencies_certificate"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.jpeg,.pdf" filesize="3" maximum="1">
                                                                                                    <input name="upload_license_agencies_certificate" id="ctrl-upload_license_agencies_certificate" required="" class="dropzone-input form-control" value="<?php  echo $data['upload_license_agencies_certificate']; ?>" type="text"  />
                                                                                                        <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                        <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <?php Html :: uploaded_files_list($data['upload_license_agencies_certificate'], '#ctrl-upload_license_agencies_certificate'); ?>
                                                                                                <small class="form-text"><p style="color: red; font-size: 12px;">Upload file size should not exceed 3 MB.</p></small>
                                                                                            </div>
                                                                                            <div class="form-group ">
                                                                                                <label class="control-label" for="upload_fire_equipment_color_photos">UPLOAD FIRE EQUIPMENT COLOR PHOTOS  <span class="text-danger">*</span></label>
                                                                                                <div id="ctrl-upload_fire_equipment_color_photos-holder" class=""> 
                                                                                                    <div class="dropzone required" input="#ctrl-upload_fire_equipment_color_photos" fieldname="upload_fire_equipment_color_photos"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.jpeg,.pdf" filesize="3" maximum="1">
                                                                                                        <input name="upload_fire_equipment_color_photos" id="ctrl-upload_fire_equipment_color_photos" required="" class="dropzone-input form-control" value="<?php  echo $data['upload_fire_equipment_color_photos']; ?>" type="text"  />
                                                                                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                            <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <?php Html :: uploaded_files_list($data['upload_fire_equipment_color_photos'], '#ctrl-upload_fire_equipment_color_photos'); ?>
                                                                                                    <small class="form-text"><p style="color: red; font-size: 12px;">Upload file size should not exceed 3 MB.</p></small>
                                                                                                </div>
                                                                                                <div class="form-group ">
                                                                                                    <label class="control-label" for="upload_available_fire_equipments_isi_certificate">Upload Available Fire Equipment's ISI Certificate <span class="text-danger">*</span></label>
                                                                                                    <div id="ctrl-upload_available_fire_equipments_isi_certificate-holder" class=""> 
                                                                                                        <div class="dropzone required" input="#ctrl-upload_available_fire_equipments_isi_certificate" fieldname="upload_available_fire_equipments_isi_certificate"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.jpeg,.pdf" filesize="3" maximum="1">
                                                                                                            <input name="upload_available_fire_equipments_isi_certificate" id="ctrl-upload_available_fire_equipments_isi_certificate" required="" class="dropzone-input form-control" value="<?php  echo $data['upload_available_fire_equipments_isi_certificate']; ?>" type="text"  />
                                                                                                                <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <?php Html :: uploaded_files_list($data['upload_available_fire_equipments_isi_certificate'], '#ctrl-upload_available_fire_equipments_isi_certificate'); ?>
                                                                                                        <small class="form-text"><p style="color: red; font-size: 12px;">Upload file size should not exceed 3 MB.</p></small>
                                                                                                    </div>
                                                                                                    <div class="form-group ">
                                                                                                        <label class="control-label" for="upload_property_tax_receipt_or_agreement_or_rent_copy">UPLOAD PROPERTY TAX  / AGREEMENT / RENT COPY  <span class="text-danger">*</span></label>
                                                                                                        <div id="ctrl-upload_property_tax_receipt_or_agreement_or_rent_copy-holder" class=""> 
                                                                                                            <div class="dropzone required" input="#ctrl-upload_property_tax_receipt_or_agreement_or_rent_copy" fieldname="upload_property_tax_receipt_or_agreement_or_rent_copy"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.jpeg,.pdf" filesize="3" maximum="1">
                                                                                                                <input name="upload_property_tax_receipt_or_agreement_or_rent_copy" id="ctrl-upload_property_tax_receipt_or_agreement_or_rent_copy" required="" class="dropzone-input form-control" value="<?php  echo $data['upload_property_tax_receipt_or_agreement_or_rent_copy']; ?>" type="text"  />
                                                                                                                    <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                    <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <?php Html :: uploaded_files_list($data['upload_property_tax_receipt_or_agreement_or_rent_copy'], '#ctrl-upload_property_tax_receipt_or_agreement_or_rent_copy'); ?>
                                                                                                            <small class="form-text"><p style="color: red; font-size: 12px;">Upload file size should not exceed 3 MB.</p></small>
                                                                                                        </div>
                                                                                                        <div class="form-group ">
                                                                                                            <label class="control-label" for="upload_mpcb_certificate">UPLOAD MPCB CERTIFICATE  </label>
                                                                                                            <div id="ctrl-upload_mpcb_certificate-holder" class=""> 
                                                                                                                <div class="dropzone " input="#ctrl-upload_mpcb_certificate" fieldname="upload_mpcb_certificate"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.jpeg,.pdf" filesize="3" maximum="1">
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
                                                                                                            <label class="control-label" for="upload_society_noc">UPLOAD SOCIETY NOC  </label>
                                                                                                            <div id="ctrl-upload_society_noc-holder" class=""> 
                                                                                                                <div class="dropzone " input="#ctrl-upload_society_noc" fieldname="upload_society_noc"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.jpeg,.pdf" filesize="3" maximum="1">
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
                                                                                                            <label class="control-label" for="upload_internal_map">UPLOAD INTERNAL MAP  <span class="text-danger">*</span></label>
                                                                                                            <div id="ctrl-upload_internal_map-holder" class=""> 
                                                                                                                <div class="dropzone required" input="#ctrl-upload_internal_map" fieldname="upload_internal_map"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.jpeg,.pdf" filesize="3" maximum="1">
                                                                                                                    <input name="upload_internal_map" id="ctrl-upload_internal_map" required="" class="dropzone-input form-control" value="<?php  echo $data['upload_internal_map']; ?>" type="text"  />
                                                                                                                        <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                        <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <?php Html :: uploaded_files_list($data['upload_internal_map'], '#ctrl-upload_internal_map'); ?>
                                                                                                                <small class="form-text"><p style="color: red; font-size: 12px;">Upload file size should not exceed 3 MB.</p></small>
                                                                                                            </div>
                                                                                                            <div class="form-group ">
                                                                                                                <label class="control-label" for="upload_location_layout_map">UPLOAD LOCATION / LAYOUT MAP <span class="text-danger">*</span></label>
                                                                                                                <div id="ctrl-upload_location_layout_map-holder" class=""> 
                                                                                                                    <div class="dropzone required" input="#ctrl-upload_location_layout_map" fieldname="upload_location_layout_map"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.gif,.jpeg,.pdf" filesize="3" maximum="1">
                                                                                                                        <input name="upload_location_layout_map" id="ctrl-upload_location_layout_map" required="" class="dropzone-input form-control" value="<?php  echo $data['upload_location_layout_map']; ?>" type="text"  />
                                                                                                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                            <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <?php Html :: uploaded_files_list($data['upload_location_layout_map'], '#ctrl-upload_location_layout_map'); ?>
                                                                                                                    <small class="form-text"><p style="color: red; font-size: 12px;">Upload file size should not exceed 3 MB.</p></small>
                                                                                                                </div>
                                                                                                                <div class="form-group ">
                                                                                                                    <label class="control-label" for="upload_electric_audit_report">UPLOAD ELECTRIC AUDIT REPORT  <span class="text-danger">*</span></label>
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
                                                                                                                        <label class="control-label" for="upload_affidavite">UPLOAD AFFIDAVIT  <span class="text-danger">*</span></label>
                                                                                                                        <div id="ctrl-upload_affidavite-holder" class=""> 
                                                                                                                            <div class="dropzone required" input="#ctrl-upload_affidavite" fieldname="upload_affidavite"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.jpeg,.pdf" filesize="3" maximum="1">
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
                                                                                                                            <label class="control-label" for="upload_lift_annual_maintenance_certificate">UPLOAD LIFT ANNUAL MAINTENANCE CERTIFICATE  </label>
                                                                                                                            <div id="ctrl-upload_lift_annual_maintenance_certificate-holder" class=""> 
                                                                                                                                <div class="dropzone " input="#ctrl-upload_lift_annual_maintenance_certificate" fieldname="upload_lift_annual_maintenance_certificate"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.jpeg,.pdf" filesize="3" maximum="1">
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
                                                                                                                            <label class="control-label" for="upload_ac_annual_maintenance_certificate">UPLOAD AC ANNUAL MAINTENANCE CERTIFICATE  </label>
                                                                                                                            <div id="ctrl-upload_ac_annual_maintenance_certificate-holder" class=""> 
                                                                                                                                <div class="dropzone " input="#ctrl-upload_ac_annual_maintenance_certificate" fieldname="upload_ac_annual_maintenance_certificate"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.jpeg,.pdf" filesize="3" maximum="1">
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
                                                                                                                            <label class="control-label" for="upload_building_structural_stability_report">UPLOAD BUILDING STRUCTURAL STABILITY REPORT  </label>
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
                                                                                                                        <div class="form-group ">
                                                                                                                            <label class="control-label" for="do_you_want_to_add_more_property">Do You Want To Add More Property <span class="text-danger">*</span></label>
                                                                                                                            <div id="ctrl-do_you_want_to_add_more_property-holder" class=""> 
                                                                                                                                <select required=""  id="ctrl-do_you_want_to_add_more_property" name="do_you_want_to_add_more_property"  placeholder="Select a value ..."    class="custom-select" >
                                                                                                                                    <option value="">Select a value ...</option>
                                                                                                                                    <?php
                                                                                                                                    $do_you_want_to_add_more_property_options = Menu :: $do_you_want_to_add_more_property;
                                                                                                                                    $field_value = $data['do_you_want_to_add_more_property'];
                                                                                                                                    if(!empty($do_you_want_to_add_more_property_options)){
                                                                                                                                    foreach($do_you_want_to_add_more_property_options as $option){
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
                                                                                                                        <div class="form-group ">
                                                                                                                            <label class="control-label" for="declaration">DECLARATION  <span class="text-danger">*</span></label>
                                                                                                                            <div id="ctrl-declaration-holder" class=""> 
                                                                                                                                <label class="custom-control custom-checkbox custom-control-inline option-btn">
                                                                                                                                    <input id="ctrl-declaration" class="custom-control-input" value="true" <?php echo $this->check_form_field_checked($data['declaration'] , 'true'); ?> type="checkbox" required="" name="declaration[]" />
                                                                                                                                        <span class="custom-control-label">All information provided above is correct and I shall be fully responsible for any discrepancy / वरील पुरविलेली सर्व माहिती ही अचूक असून, त्यात कुठल्याही प्रकारची तफावत आढळल्यास त्यास मी पूर्णतः जबाबदार असेन.</span>
                                                                                                                                    </label>
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
