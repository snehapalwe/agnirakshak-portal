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
                    <h4 class="record-title">Edit  Fire Noc Provisional</h4>
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
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-horizontal needs-validation" action="<?php print_link("fire_noc_provisional/edit/$page_id/?csrf_token=$csrf_token"); ?>" method="post">
                            <div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="applicant_name">Applicant Name <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="">
                                                <input id="ctrl-applicant_name"  value="<?php  echo $data['applicant_name']; ?>" type="text" placeholder="Enter Applicant Name"  required="" name="applicant_name"  class="form-control " />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="applicant_address">Applicant Address <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input id="ctrl-applicant_address"  value="<?php  echo $data['applicant_address']; ?>" type="text" placeholder="Enter Applicant Address"  required="" name="applicant_address"  class="form-control " />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <label class="control-label" for="mobile_no">Mobile No <span class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="">
                                                        <input id="ctrl-mobile_no"  value="<?php  echo $data['mobile_no']; ?>" type="number" placeholder="Enter Mobile No" min="0000000000" max="9999999999" step="1"  required="" name="mobile_no"  class="form-control " />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <label class="control-label" for="zone_id">Zone Id <span class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="">
                                                            <select required=""  id="ctrl-zone_id" name="zone_id"  placeholder="Select a value ..."    class="custom-select" >
                                                                <option value="">Select a value ...</option>
                                                                <?php
                                                                $rec = $data['zone_id'];
                                                                $zone_id_options = $comp_model -> fire_noc_provisional_zone_id_option_list();
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
                                                        <label class="control-label" for="subject">Subject <span class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="">
                                                            <input id="ctrl-subject"  value="<?php  echo $data['subject']; ?>" type="text" placeholder="Enter Subject"  required="" name="subject"  class="form-control " />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <label class="control-label" for="upload_architect_application_letter">Upload Architect Application Letter <span class="text-danger">*</span></label>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <div class="">
                                                                <div class="dropzone required" input="#ctrl-upload_architect_application_letter" fieldname="upload_architect_application_letter"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                    <input name="upload_architect_application_letter" id="ctrl-upload_architect_application_letter" required="" class="dropzone-input form-control" value="<?php  echo $data['upload_architect_application_letter']; ?>" type="text"  />
                                                                        <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                        <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                    </div>
                                                                </div>
                                                                <?php Html :: uploaded_files_list($data['upload_architect_application_letter'], '#ctrl-upload_architect_application_letter'); ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <label class="control-label" for="upload_developers_letter">Upload Developers Letter <span class="text-danger">*</span></label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="">
                                                                    <div class="dropzone required" input="#ctrl-upload_developers_letter" fieldname="upload_developers_letter"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                        <input name="upload_developers_letter" id="ctrl-upload_developers_letter" required="" class="dropzone-input form-control" value="<?php  echo $data['upload_developers_letter']; ?>" type="text"  />
                                                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                            <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                        </div>
                                                                    </div>
                                                                    <?php Html :: uploaded_files_list($data['upload_developers_letter'], '#ctrl-upload_developers_letter'); ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group ">
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <label class="control-label" for="upload_gross_builtup_area_certificate">Upload Gross Builtup Area Certificate <span class="text-danger">*</span></label>
                                                                </div>
                                                                <div class="col-sm-8">
                                                                    <div class="">
                                                                        <div class="dropzone required" input="#ctrl-upload_gross_builtup_area_certificate" fieldname="upload_gross_builtup_area_certificate"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                            <input name="upload_gross_builtup_area_certificate" id="ctrl-upload_gross_builtup_area_certificate" required="" class="dropzone-input form-control" value="<?php  echo $data['upload_gross_builtup_area_certificate']; ?>" type="text"  />
                                                                                <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                            </div>
                                                                        </div>
                                                                        <?php Html :: uploaded_files_list($data['upload_gross_builtup_area_certificate'], '#ctrl-upload_gross_builtup_area_certificate'); ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group ">
                                                                <div class="row">
                                                                    <div class="col-sm-4">
                                                                        <label class="control-label" for="upload_cc_rdp_oc">Upload Cc Rdp Oc <span class="text-danger">*</span></label>
                                                                    </div>
                                                                    <div class="col-sm-8">
                                                                        <div class="">
                                                                            <div class="dropzone required" input="#ctrl-upload_cc_rdp_oc" fieldname="upload_cc_rdp_oc"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                                <input name="upload_cc_rdp_oc" id="ctrl-upload_cc_rdp_oc" required="" class="dropzone-input form-control" value="<?php  echo $data['upload_cc_rdp_oc']; ?>" type="text"  />
                                                                                    <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                    <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                </div>
                                                                            </div>
                                                                            <?php Html :: uploaded_files_list($data['upload_cc_rdp_oc'], '#ctrl-upload_cc_rdp_oc'); ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group ">
                                                                    <div class="row">
                                                                        <div class="col-sm-4">
                                                                            <label class="control-label" for="upload_floor_plan_set">Upload Floor Plan Set <span class="text-danger">*</span></label>
                                                                        </div>
                                                                        <div class="col-sm-8">
                                                                            <div class="">
                                                                                <div class="dropzone required" input="#ctrl-upload_floor_plan_set" fieldname="upload_floor_plan_set"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                                    <input name="upload_floor_plan_set" id="ctrl-upload_floor_plan_set" required="" class="dropzone-input form-control" value="<?php  echo $data['upload_floor_plan_set']; ?>" type="text"  />
                                                                                        <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                        <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                    </div>
                                                                                </div>
                                                                                <?php Html :: uploaded_files_list($data['upload_floor_plan_set'], '#ctrl-upload_floor_plan_set'); ?>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group ">
                                                                        <div class="row">
                                                                            <div class="col-sm-4">
                                                                                <label class="control-label" for="upload_location_site_photos">Upload Location Site Photos <span class="text-danger">*</span></label>
                                                                            </div>
                                                                            <div class="col-sm-8">
                                                                                <div class="">
                                                                                    <div class="dropzone required" input="#ctrl-upload_location_site_photos" fieldname="upload_location_site_photos"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.gif,.jpeg" filesize="3" maximum="5">
                                                                                        <input name="upload_location_site_photos" id="ctrl-upload_location_site_photos" required="" class="dropzone-input form-control" value="<?php  echo $data['upload_location_site_photos']; ?>" type="text"  />
                                                                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                            <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <?php Html :: uploaded_files_list($data['upload_location_site_photos'], '#ctrl-upload_location_site_photos'); ?>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group ">
                                                                            <div class="row">
                                                                                <div class="col-sm-4">
                                                                                    <label class="control-label" for="declaration">Declaration <span class="text-danger">*</span></label>
                                                                                </div>
                                                                                <div class="col-sm-8">
                                                                                    <div class="">
                                                                                        <label class="custom-control custom-checkbox custom-control-inline option-btn">
                                                                                            <input id="ctrl-declaration" class="custom-control-input" value="true" <?php echo $this->check_form_field_checked($data['declaration'] , 'true'); ?> type="checkbox" required="" name="declaration[]" />
                                                                                                <span class="custom-control-label">All the information is ture</span>
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
