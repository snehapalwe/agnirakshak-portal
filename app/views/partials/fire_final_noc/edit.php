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
                    <h4 class="record-title">Fire Final Noc Edit / अंतिम फायर ना हरकत दाखला बदल</h4>
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
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-horizontal needs-validation" action="<?php print_link("fire_final_noc/edit/$page_id/?csrf_token=$csrf_token"); ?>" method="post">
                            <div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="provisional_noc_number">PROVISIONAL FIRE  NOC NUMBER <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="">
                                                <input id="ctrl-provisional_noc_number"  value="<?php  echo $data['provisional_noc_number']; ?>" type="text" placeholder="Enter PROVISIONAL FIRE  NOC NUMBER"  required="" name="provisional_noc_number"  class="form-control " />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="revised_provisional_noc_number">REVISED PROVISIONAL FIRE  NOC NUMBER </label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input id="ctrl-revised_provisional_noc_number"  value="<?php  echo $data['revised_provisional_noc_number']; ?>" type="text" placeholder="Enter REVISED PROVISIONAL FIRE  NOC NUMBER"  name="revised_provisional_noc_number"  class="form-control " />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <label class="control-label" for="applicant_name">APPLICANT NAME <span class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="">
                                                        <input id="ctrl-applicant_name"  value="<?php  echo $data['applicant_name']; ?>" type="text" placeholder="Enter APPLICANT NAME"  required="" name="applicant_name"  class="form-control " />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <label class="control-label" for="applicant_address">APPLICANT ADDRESS <span class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="">
                                                            <input id="ctrl-applicant_address"  value="<?php  echo $data['applicant_address']; ?>" type="text" placeholder="Enter APPLICANT ADDRESS"  required="" name="applicant_address"  class="form-control " />
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
                                                                    $zone_id_options = $comp_model -> fire_final_noc_zone_id_option_list();
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
                                                                <input id="ctrl-mobile_no"  value="<?php  echo $data['mobile_no']; ?>" type="text" placeholder="Enter MOBILE NO."  required="" name="mobile_no"  class="form-control " />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <label class="control-label" for="survey_number">SURVEY NUMBER <span class="text-danger">*</span></label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="">
                                                                    <input id="ctrl-survey_number"  value="<?php  echo $data['survey_number']; ?>" type="text" placeholder="Enter SURVEY NUMBER"  required="" name="survey_number"  class="form-control " />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group ">
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <label class="control-label" for="village">VILLAGE <span class="text-danger">*</span></label>
                                                                </div>
                                                                <div class="col-sm-8">
                                                                    <div class="">
                                                                        <input id="ctrl-village"  value="<?php  echo $data['village']; ?>" type="text" placeholder="Enter VILLAGE"  required="" name="village"  class="form-control " />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group ">
                                                                <div class="row">
                                                                    <div class="col-sm-4">
                                                                        <label class="control-label" for="vp_number">VP NUMBER </label>
                                                                    </div>
                                                                    <div class="col-sm-8">
                                                                        <div class="">
                                                                            <input id="ctrl-vp_number"  value="<?php  echo $data['vp_number']; ?>" type="text" placeholder="Enter VP NUMBER"  name="vp_number"  class="form-control " />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group ">
                                                                    <div class="row">
                                                                        <div class="col-sm-4">
                                                                            <label class="control-label" for="road_width_north">ROAD WIDTH (IN METER) <span class="text-danger">*</span></label>
                                                                        </div>
                                                                        <div class="col-sm-8">
                                                                            <div class="">
                                                                                <input id="ctrl-road_width_north"  value="<?php  echo $data['road_width_north']; ?>" type="number" placeholder="Enter ROAD WIDTH (IN METER)" step="any"  required="" name="road_width_north"  class="form-control " />
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group ">
                                                                        <div class="row">
                                                                            <div class="col-sm-4">
                                                                                <label class="control-label" for="open_space_margin_north">OPEN SPACE OR SIDE MARGIN NORTH <span class="text-danger">*</span></label>
                                                                            </div>
                                                                            <div class="col-sm-8">
                                                                                <div class="">
                                                                                    <input id="ctrl-open_space_margin_north"  value="<?php  echo $data['open_space_margin_north']; ?>" type="number" placeholder="Enter OPEN SPACE OR SIDE MARGIN NORTH" step="any"  required="" name="open_space_margin_north"  class="form-control " />
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group ">
                                                                            <div class="row">
                                                                                <div class="col-sm-4">
                                                                                    <label class="control-label" for="open_space_margin_south">OPEN SPACE OR SIDE MARGIN SOUTH <span class="text-danger">*</span></label>
                                                                                </div>
                                                                                <div class="col-sm-8">
                                                                                    <div class="">
                                                                                        <input id="ctrl-open_space_margin_south"  value="<?php  echo $data['open_space_margin_south']; ?>" type="number" placeholder="Enter OPEN SPACE OR SIDE MARGIN SOUTH" step="any"  required="" name="open_space_margin_south"  class="form-control " />
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group ">
                                                                                <div class="row">
                                                                                    <div class="col-sm-4">
                                                                                        <label class="control-label" for="open_space_margin_east">OPEN SPACE OR SIDE MARGIN EAST <span class="text-danger">*</span></label>
                                                                                    </div>
                                                                                    <div class="col-sm-8">
                                                                                        <div class="">
                                                                                            <input id="ctrl-open_space_margin_east"  value="<?php  echo $data['open_space_margin_east']; ?>" type="number" placeholder="Enter OPEN SPACE OR SIDE MARGIN EAST" step="any"  required="" name="open_space_margin_east"  class="form-control " />
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group ">
                                                                                    <div class="row">
                                                                                        <div class="col-sm-4">
                                                                                            <label class="control-label" for="open_space_margin_west">OPEN SPACE OR SIDE MARGIN WEST <span class="text-danger">*</span></label>
                                                                                        </div>
                                                                                        <div class="col-sm-8">
                                                                                            <div class="">
                                                                                                <input id="ctrl-open_space_margin_west"  value="<?php  echo $data['open_space_margin_west']; ?>" type="number" placeholder="Enter OPEN SPACE OR SIDE MARGIN WEST" step="any"  required="" name="open_space_margin_west"  class="form-control " />
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
                                                                                                    <label class="control-label" for="upload_provisional_fire_noc">UPLOAD PROVISIONAL FIRE NOC <span class="text-danger">*</span></label>
                                                                                                </div>
                                                                                                <div class="col-sm-8">
                                                                                                    <div class="">
                                                                                                        <div class="dropzone required" input="#ctrl-upload_provisional_fire_noc" fieldname="upload_provisional_fire_noc"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                                                            <input name="upload_provisional_fire_noc" id="ctrl-upload_provisional_fire_noc" required="" class="dropzone-input form-control" value="<?php  echo $data['upload_provisional_fire_noc']; ?>" type="text"  />
                                                                                                                <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <?php Html :: uploaded_files_list($data['upload_provisional_fire_noc'], '#ctrl-upload_provisional_fire_noc'); ?>
                                                                                                        <small class="form-text"><p style="color: red; font-size: 12px;">Upload file size should not exceed 3 MB.</p></small>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group ">
                                                                                                <div class="row">
                                                                                                    <div class="col-sm-4">
                                                                                                        <label class="control-label" for="upload_revised_provisional_fire_noc">UPLOAD REVISED PROVISIONAL FIRE NOC </label>
                                                                                                    </div>
                                                                                                    <div class="col-sm-8">
                                                                                                        <div class="">
                                                                                                            <div class="dropzone " input="#ctrl-upload_revised_provisional_fire_noc" fieldname="upload_revised_provisional_fire_noc"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                                                                <input name="upload_revised_provisional_fire_noc" id="ctrl-upload_revised_provisional_fire_noc" class="dropzone-input form-control" value="<?php  echo $data['upload_revised_provisional_fire_noc']; ?>" type="text"  />
                                                                                                                    <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                    <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <?php Html :: uploaded_files_list($data['upload_revised_provisional_fire_noc'], '#ctrl-upload_revised_provisional_fire_noc'); ?>
                                                                                                            <small class="form-text"><p style="font-size: 12px;">
                                                                                                                <span style="color: green; font-weight: bold;">(Optional)</span>
                                                                                                                <span style="color: red;"> Upload file size should not exceed 3 MB.</span>
                                                                                                            </p>
                                                                                                        </small>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group ">
                                                                                                <div class="row">
                                                                                                    <div class="col-sm-4">
                                                                                                        <label class="control-label" for="upload_fire_final_part_noc">UPLOAD FIRE FINAL PART NOC </label>
                                                                                                    </div>
                                                                                                    <div class="col-sm-8">
                                                                                                        <div class="">
                                                                                                            <div class="dropzone " input="#ctrl-upload_fire_final_part_noc" fieldname="upload_fire_final_part_noc"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                                                                <input name="upload_fire_final_part_noc" id="ctrl-upload_fire_final_part_noc" class="dropzone-input form-control" value="<?php  echo $data['upload_fire_final_part_noc']; ?>" type="text"  />
                                                                                                                    <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                    <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <?php Html :: uploaded_files_list($data['upload_fire_final_part_noc'], '#ctrl-upload_fire_final_part_noc'); ?>
                                                                                                            <small class="form-text"><p style="font-size: 12px;">
                                                                                                                <span style="color: green; font-weight: bold;">(Optional)</span>
                                                                                                                <span style="color: red;"> Upload file size should not exceed 3 MB.</span>
                                                                                                            </p>
                                                                                                        </small>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group ">
                                                                                                <div class="row">
                                                                                                    <div class="col-sm-4">
                                                                                                        <label class="control-label" for="upload_architect_application_letter">UPLOAD ARCHITECT APPLICATION LETTER <span class="text-danger">*</span></label>
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
                                                                                                            <small class="form-text"><p style="color: red; font-size: 12px;">Upload file size should not exceed 3 MB.</p></small>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="form-group ">
                                                                                                    <div class="row">
                                                                                                        <div class="col-sm-4">
                                                                                                            <label class="control-label" for="upload_builders_application_letter">UPLOAD BUILDERS APPLICATION LETTER <span class="text-danger">*</span></label>
                                                                                                        </div>
                                                                                                        <div class="col-sm-8">
                                                                                                            <div class="">
                                                                                                                <div class="dropzone required" input="#ctrl-upload_builders_application_letter" fieldname="upload_builders_application_letter"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                                                                    <input name="upload_builders_application_letter" id="ctrl-upload_builders_application_letter" required="" class="dropzone-input form-control" value="<?php  echo $data['upload_builders_application_letter']; ?>" type="text"  />
                                                                                                                        <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                        <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <?php Html :: uploaded_files_list($data['upload_builders_application_letter'], '#ctrl-upload_builders_application_letter'); ?>
                                                                                                                <small class="form-text"><p style="color: red; font-size: 12px;">Upload file size should not exceed 3 MB.</p></small>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form-group ">
                                                                                                        <div class="row">
                                                                                                            <div class="col-sm-4">
                                                                                                                <label class="control-label" for="upload_gross_built_up_area_certificate">UPLOAD GROSS BUILT UP AREA CERTIFICATE <span class="text-danger">*</span></label>
                                                                                                            </div>
                                                                                                            <div class="col-sm-8">
                                                                                                                <div class="">
                                                                                                                    <div class="dropzone required" input="#ctrl-upload_gross_built_up_area_certificate" fieldname="upload_gross_built_up_area_certificate"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                                                                        <input name="upload_gross_built_up_area_certificate" id="ctrl-upload_gross_built_up_area_certificate" required="" class="dropzone-input form-control" value="<?php  echo $data['upload_gross_built_up_area_certificate']; ?>" type="text"  />
                                                                                                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                            <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <?php Html :: uploaded_files_list($data['upload_gross_built_up_area_certificate'], '#ctrl-upload_gross_built_up_area_certificate'); ?>
                                                                                                                    <small class="form-text"><p style="color: red; font-size: 12px;">Upload file size should not exceed 3 MB.</p></small>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="form-group ">
                                                                                                            <div class="row">
                                                                                                                <div class="col-sm-4">
                                                                                                                    <label class="control-label" for="upload_cc_rdp_oc">UPLOAD CC <span class="text-danger">*</span></label>
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
                                                                                                                        <small class="form-text"><p style="color: red; font-size: 12px;">Upload file size should not exceed 3 MB.</p></small>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="form-group ">
                                                                                                                <div class="row">
                                                                                                                    <div class="col-sm-4">
                                                                                                                        <label class="control-label" for="upload_floor_plan_set">UPLOAD APPROVED FLOOR PLAN SET <span class="text-danger">*</span></label>
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
                                                                                                                            <label class="control-label" for="upload_work_completion_certificate">UPLOAD WORK COMPLETION CERTIFICATE <span class="text-danger">*</span></label>
                                                                                                                        </div>
                                                                                                                        <div class="col-sm-8">
                                                                                                                            <div class="">
                                                                                                                                <div class="dropzone required" input="#ctrl-upload_work_completion_certificate" fieldname="upload_work_completion_certificate"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                                                                                    <input name="upload_work_completion_certificate" id="ctrl-upload_work_completion_certificate" required="" class="dropzone-input form-control" value="<?php  echo $data['upload_work_completion_certificate']; ?>" type="text"  />
                                                                                                                                        <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                                        <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <?php Html :: uploaded_files_list($data['upload_work_completion_certificate'], '#ctrl-upload_work_completion_certificate'); ?>
                                                                                                                                <small class="form-text"><p style="color: red; font-size: 12px;">Upload file size should not exceed 3 MB.</p></small>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <div class="form-group ">
                                                                                                                        <div class="row">
                                                                                                                            <div class="col-sm-4">
                                                                                                                                <label class="control-label" for="upload_structural_stability_certificate">UPLOAD STRUCTURAL STABILITY CERTIFICATE <span class="text-danger">*</span></label>
                                                                                                                            </div>
                                                                                                                            <div class="col-sm-8">
                                                                                                                                <div class="">
                                                                                                                                    <div class="dropzone required" input="#ctrl-upload_structural_stability_certificate" fieldname="upload_structural_stability_certificate"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                                                                                        <input name="upload_structural_stability_certificate" id="ctrl-upload_structural_stability_certificate" required="" class="dropzone-input form-control" value="<?php  echo $data['upload_structural_stability_certificate']; ?>" type="text"  />
                                                                                                                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                                            <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    <?php Html :: uploaded_files_list($data['upload_structural_stability_certificate'], '#ctrl-upload_structural_stability_certificate'); ?>
                                                                                                                                    <small class="form-text"><p style="color: red; font-size: 12px;">Upload file size should not exceed 3 MB.</p></small>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="form-group ">
                                                                                                                            <div class="row">
                                                                                                                                <div class="col-sm-4">
                                                                                                                                    <label class="control-label" for="upload_lift_certificate">UPLOAD LIFT CERTIFICATE <span class="text-danger">*</span></label>
                                                                                                                                </div>
                                                                                                                                <div class="col-sm-8">
                                                                                                                                    <div class="">
                                                                                                                                        <div class="dropzone required" input="#ctrl-upload_lift_certificate" fieldname="upload_lift_certificate"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                                                                                            <input name="upload_lift_certificate" id="ctrl-upload_lift_certificate" required="" class="dropzone-input form-control" value="<?php  echo $data['upload_lift_certificate']; ?>" type="text"  />
                                                                                                                                                <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                                                <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                        <?php Html :: uploaded_files_list($data['upload_lift_certificate'], '#ctrl-upload_lift_certificate'); ?>
                                                                                                                                        <small class="form-text"><p style="color: red; font-size: 12px;">Upload file size should not exceed 3 MB.</p></small>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <div class="form-group ">
                                                                                                                                <div class="row">
                                                                                                                                    <div class="col-sm-4">
                                                                                                                                        <label class="control-label" for="upload_electric_contractor_certificate_and_license_copy">UPLOAD ELECTRIC CONTRACTOR CERTIFICATE & LICENSE COPY <span class="text-danger">*</span></label>
                                                                                                                                    </div>
                                                                                                                                    <div class="col-sm-8">
                                                                                                                                        <div class="">
                                                                                                                                            <div class="dropzone required" input="#ctrl-upload_electric_contractor_certificate_and_license_copy" fieldname="upload_electric_contractor_certificate_and_license_copy"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                                                                                                <input name="upload_electric_contractor_certificate_and_license_copy" id="ctrl-upload_electric_contractor_certificate_and_license_copy" required="" class="dropzone-input form-control" value="<?php  echo $data['upload_electric_contractor_certificate_and_license_copy']; ?>" type="text"  />
                                                                                                                                                    <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                                                    <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                            <?php Html :: uploaded_files_list($data['upload_electric_contractor_certificate_and_license_copy'], '#ctrl-upload_electric_contractor_certificate_and_license_copy'); ?>
                                                                                                                                            <small class="form-text"><p style="color: red; font-size: 12px;">Upload file size should not exceed 3 MB.</p></small>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <div class="form-group ">
                                                                                                                                    <div class="row">
                                                                                                                                        <div class="col-sm-4">
                                                                                                                                            <label class="control-label" for="upload_diesel_engine_generator_invoice_copy_and_test_certificate">UPLOAD DIESEL ENGINE GENERATOR INVOICE COPY & TEST CERTIFICATE <span class="text-danger">*</span></label>
                                                                                                                                        </div>
                                                                                                                                        <div class="col-sm-8">
                                                                                                                                            <div class="">
                                                                                                                                                <div class="dropzone required" input="#ctrl-upload_diesel_engine_generator_invoice_copy_and_test_certificate" fieldname="upload_diesel_engine_generator_invoice_copy_and_test_certificate"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                                                                                                    <input name="upload_diesel_engine_generator_invoice_copy_and_test_certificate" id="ctrl-upload_diesel_engine_generator_invoice_copy_and_test_certificate" required="" class="dropzone-input form-control" value="<?php  echo $data['upload_diesel_engine_generator_invoice_copy_and_test_certificate']; ?>" type="text"  />
                                                                                                                                                        <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                                                        <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                                <?php Html :: uploaded_files_list($data['upload_diesel_engine_generator_invoice_copy_and_test_certificate'], '#ctrl-upload_diesel_engine_generator_invoice_copy_and_test_certificate'); ?>
                                                                                                                                                <small class="form-text"><p style="color: red; font-size: 12px;">Upload file size should not exceed 3 MB.</p></small>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    <div class="form-group ">
                                                                                                                                        <div class="row">
                                                                                                                                            <div class="col-sm-4">
                                                                                                                                                <label class="control-label" for="upload_form_A_certificate_from_license_agency">UPLOAD FORM-A CERTIFICATE FROM LICENSE AGENCY <span class="text-danger">*</span></label>
                                                                                                                                            </div>
                                                                                                                                            <div class="col-sm-8">
                                                                                                                                                <div class="">
                                                                                                                                                    <div class="dropzone required" input="#ctrl-upload_form_A_certificate_from_license_agency" fieldname="upload_form_A_certificate_from_license_agency"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                                                                                                        <input name="upload_form_A_certificate_from_license_agency" id="ctrl-upload_form_A_certificate_from_license_agency" required="" class="dropzone-input form-control" value="<?php  echo $data['upload_form_A_certificate_from_license_agency']; ?>" type="text"  />
                                                                                                                                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                                                            <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                    <?php Html :: uploaded_files_list($data['upload_form_A_certificate_from_license_agency'], '#ctrl-upload_form_A_certificate_from_license_agency'); ?>
                                                                                                                                                    <small class="form-text"><p style="color: red; font-size: 12px;">Upload file size should not exceed 3 MB.</p></small>
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                        <div class="form-group ">
                                                                                                                                            <div class="row">
                                                                                                                                                <div class="col-sm-4">
                                                                                                                                                    <label class="control-label" for="upload_license_copy_of_MFS">UPLOAD LICENSE COPY OF MFS <span class="text-danger">*</span></label>
                                                                                                                                                </div>
                                                                                                                                                <div class="col-sm-8">
                                                                                                                                                    <div class="">
                                                                                                                                                        <div class="dropzone required" input="#ctrl-upload_license_copy_of_MFS" fieldname="upload_license_copy_of_MFS"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                                                                                                            <input name="upload_license_copy_of_MFS" id="ctrl-upload_license_copy_of_MFS" required="" class="dropzone-input form-control" value="<?php  echo $data['upload_license_copy_of_MFS']; ?>" type="text"  />
                                                                                                                                                                <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                                                                <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                                                            </div>
                                                                                                                                                        </div>
                                                                                                                                                        <?php Html :: uploaded_files_list($data['upload_license_copy_of_MFS'], '#ctrl-upload_license_copy_of_MFS'); ?>
                                                                                                                                                        <small class="form-text"><p style="color: red; font-size: 12px;">Upload file size should not exceed 3 MB.</p></small>
                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                            <div class="form-group ">
                                                                                                                                                <div class="row">
                                                                                                                                                    <div class="col-sm-4">
                                                                                                                                                        <label class="control-label" for="upload_fire_auto_cad_drawing">UPLOAD FIRE AUTO CAD DRAWING <span class="text-danger">*</span></label>
                                                                                                                                                    </div>
                                                                                                                                                    <div class="col-sm-8">
                                                                                                                                                        <div class="">
                                                                                                                                                            <div class="dropzone required" input="#ctrl-upload_fire_auto_cad_drawing" fieldname="upload_fire_auto_cad_drawing"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                                                                                                                <input name="upload_fire_auto_cad_drawing" id="ctrl-upload_fire_auto_cad_drawing" required="" class="dropzone-input form-control" value="<?php  echo $data['upload_fire_auto_cad_drawing']; ?>" type="text"  />
                                                                                                                                                                    <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                                                                    <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                                                                </div>
                                                                                                                                                            </div>
                                                                                                                                                            <?php Html :: uploaded_files_list($data['upload_fire_auto_cad_drawing'], '#ctrl-upload_fire_auto_cad_drawing'); ?>
                                                                                                                                                            <small class="form-text"><p style="color: red; font-size: 12px;">Upload file size should not exceed 3 MB.</p></small>
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                                <div class="form-group ">
                                                                                                                                                    <div class="row">
                                                                                                                                                        <div class="col-sm-4">
                                                                                                                                                            <label class="control-label" for="upload_affidavit">UPLOAD AFFIDAVIT <span class="text-danger">*</span></label>
                                                                                                                                                        </div>
                                                                                                                                                        <div class="col-sm-8">
                                                                                                                                                            <div class="">
                                                                                                                                                                <div class="dropzone required" input="#ctrl-upload_affidavit" fieldname="upload_affidavit"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                                                                                                                    <input name="upload_affidavit" id="ctrl-upload_affidavit" required="" class="dropzone-input form-control" value="<?php  echo $data['upload_affidavit']; ?>" type="text"  />
                                                                                                                                                                        <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                                                                        <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                                                                    </div>
                                                                                                                                                                </div>
                                                                                                                                                                <?php Html :: uploaded_files_list($data['upload_affidavit'], '#ctrl-upload_affidavit'); ?>
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
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                    <div class="form-group ">
                                                                                                                                                        <div class="row">
                                                                                                                                                            <div class="col-sm-4">
                                                                                                                                                                <label class="control-label" for="declaration">DECLARATION <span class="text-danger">*</span></label>
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