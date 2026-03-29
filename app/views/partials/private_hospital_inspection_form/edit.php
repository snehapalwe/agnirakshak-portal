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
                    <h4 class="record-title">Edit  Private Hospital Inspection Form</h4>
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
                <div class="col-md-7 comp-grid">
                    <?php $this :: display_page_errors(); ?>
                    <div  class="bg-light p-3 animated fadeIn page-content">
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-horizontal needs-validation" action="<?php print_link("private_hospital_inspection_form/edit/$page_id/?csrf_token=$csrf_token"); ?>" method="post">
                            <div>
                                <input id="ctrl-recid"  value="<?php  echo $data['recid']; ?>" type="hidden" placeholder="Enter Recid"  required="" name="recid"  class="form-control " />
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="hospital_or_health_center_name">HOSPITAL / HEALTH CENTER NAME <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input id="ctrl-hospital_or_health_center_name"  value="<?php  echo $data['hospital_or_health_center_name']; ?>" type="text" placeholder="Enter Hospital Or Health Center Name"  required="" name="hospital_or_health_center_name"  class="form-control " />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <label class="control-label" for="hospital_or_health_center_address">HOSPITAL / HEALTH CENTER ADDRESS <span class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="">
                                                        <input id="ctrl-hospital_or_health_center_address"  value="<?php  echo $data['hospital_or_health_center_address']; ?>" type="text" placeholder="Enter Hospital Or Health Center Address"  required="" name="hospital_or_health_center_address"  class="form-control " />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <label class="control-label" for="doctor_name">DOCTOR NAME  <span class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="">
                                                            <input id="ctrl-doctor_name"  value="<?php  echo $data['doctor_name']; ?>" type="text" placeholder="Enter Doctor Name"  required="" name="doctor_name"  class="form-control " />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <label class="control-label" for="doctor_mobile_no">DOCTOR MOBILE NO.  <span class="text-danger">*</span></label>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <div class="">
                                                                <input id="ctrl-doctor_mobile_no"  value="<?php  echo $data['doctor_mobile_no']; ?>" type="text" placeholder="Enter Doctor Mobile No"  required="" name="doctor_mobile_no"  class="form-control " />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <label class="control-label" for="building_height">BUILDING HEIGHT  <span class="text-danger">*</span></label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="">
                                                                    <input id="ctrl-building_height"  value="<?php  echo $data['building_height']; ?>" type="text" placeholder="Enter Building Height"  required="" name="building_height"  class="form-control " />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group ">
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <label class="control-label" for="lifts_company_name">LIFTS COMPANY NAME  <span class="text-danger">*</span></label>
                                                                </div>
                                                                <div class="col-sm-8">
                                                                    <div class="">
                                                                        <input id="ctrl-lifts_company_name"  value="<?php  echo $data['lifts_company_name']; ?>" type="text" placeholder="Enter Lifts Company Name"  required="" name="lifts_company_name"  class="form-control " />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group ">
                                                                <div class="row">
                                                                    <div class="col-sm-4">
                                                                        <label class="control-label" for="no_lifts_in_building">NO. OF LIFTS  <span class="text-danger">*</span></label>
                                                                    </div>
                                                                    <div class="col-sm-8">
                                                                        <div class="">
                                                                            <input id="ctrl-no_lifts_in_building"  value="<?php  echo $data['no_lifts_in_building']; ?>" type="number" placeholder="Enter No Lifts In Building" step="1"  required="" name="no_lifts_in_building"  class="form-control " />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group ">
                                                                    <div class="row">
                                                                        <div class="col-sm-4">
                                                                            <label class="control-label" for="capacity_of_lifts">LIFT CAPACITY  <span class="text-danger">*</span></label>
                                                                        </div>
                                                                        <div class="col-sm-8">
                                                                            <div class="">
                                                                                <input id="ctrl-capacity_of_lifts"  value="<?php  echo $data['capacity_of_lifts']; ?>" type="text" placeholder="Enter Capacity Of Lifts"  required="" name="capacity_of_lifts"  class="form-control " />
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group ">
                                                                        <div class="row">
                                                                            <div class="col-sm-4">
                                                                                <label class="control-label" for="elevators_amc_done_by_org_name">ELEVATORS AMC DONE BY  <span class="text-danger">*</span></label>
                                                                            </div>
                                                                            <div class="col-sm-8">
                                                                                <div class="">
                                                                                    <input id="ctrl-elevators_amc_done_by_org_name"  value="<?php  echo $data['elevators_amc_done_by_org_name']; ?>" type="text" placeholder="Enter Elevators Amc Done By Org Name"  required="" name="elevators_amc_done_by_org_name"  class="form-control " />
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group ">
                                                                            <div class="row">
                                                                                <div class="col-sm-4">
                                                                                    <label class="control-label" for="elevators_amc_period">ELEVATORS AMC PERIOD  <span class="text-danger">*</span></label>
                                                                                </div>
                                                                                <div class="col-sm-8">
                                                                                    <div class="">
                                                                                        <input id="ctrl-elevators_amc_period"  value="<?php  echo $data['elevators_amc_period']; ?>" type="text" placeholder="Enter Elevators Amc Period"  required="" name="elevators_amc_period"  class="form-control " />
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group ">
                                                                                <div class="row">
                                                                                    <div class="col-sm-4">
                                                                                        <label class="control-label" for="number_of_staircase_in_bulding">NO. OF STAIRCASES  <span class="text-danger">*</span></label>
                                                                                    </div>
                                                                                    <div class="col-sm-8">
                                                                                        <div class="">
                                                                                            <input id="ctrl-number_of_staircase_in_bulding"  value="<?php  echo $data['number_of_staircase_in_bulding']; ?>" type="number" placeholder="Enter Number Of Staircase In Bulding" step="1"  required="" name="number_of_staircase_in_bulding"  class="form-control " />
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group ">
                                                                                    <div class="row">
                                                                                        <div class="col-sm-4">
                                                                                            <label class="control-label" for="width_of_staircase_in_bulding">WIDTH OF STAIRCASES  <span class="text-danger">*</span></label>
                                                                                        </div>
                                                                                        <div class="col-sm-8">
                                                                                            <div class="">
                                                                                                <input id="ctrl-width_of_staircase_in_bulding"  value="<?php  echo $data['width_of_staircase_in_bulding']; ?>" type="text" placeholder="Enter Width Of Staircase In Bulding"  required="" name="width_of_staircase_in_bulding"  class="form-control " />
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group ">
                                                                                        <div class="row">
                                                                                            <div class="col-sm-4">
                                                                                                <label class="control-label" for="entrance_routes_count">ENTRANCE ROUTES COUNT  <span class="text-danger">*</span></label>
                                                                                            </div>
                                                                                            <div class="col-sm-8">
                                                                                                <div class="">
                                                                                                    <input id="ctrl-entrance_routes_count"  value="<?php  echo $data['entrance_routes_count']; ?>" type="number" placeholder="Enter Entrance Routes Count" step="1"  required="" name="entrance_routes_count"  class="form-control " />
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group ">
                                                                                            <div class="row">
                                                                                                <div class="col-sm-4">
                                                                                                    <label class="control-label" for="exit_routes_count">EXIT ROUTES COUNT  <span class="text-danger">*</span></label>
                                                                                                </div>
                                                                                                <div class="col-sm-8">
                                                                                                    <div class="">
                                                                                                        <input id="ctrl-exit_routes_count"  value="<?php  echo $data['exit_routes_count']; ?>" type="number" placeholder="Enter Exit Routes Count" step="1"  required="" name="exit_routes_count"  class="form-control " />
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group ">
                                                                                                <div class="row">
                                                                                                    <div class="col-sm-4">
                                                                                                        <label class="control-label" for="is_record_room_available">RECORD ROOM AVAILABLE  <span class="text-danger">*</span></label>
                                                                                                    </div>
                                                                                                    <div class="col-sm-8">
                                                                                                        <div class="">
                                                                                                            <input id="ctrl-is_record_room_available"  value="<?php  echo $data['is_record_room_available']; ?>" type="text" placeholder="Enter Is Record Room Available"  required="" name="is_record_room_available"  class="form-control " />
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="form-group ">
                                                                                                    <div class="row">
                                                                                                        <div class="col-sm-4">
                                                                                                            <label class="control-label" for="hospital_area">HOSPITAL AREA  <span class="text-danger">*</span></label>
                                                                                                        </div>
                                                                                                        <div class="col-sm-8">
                                                                                                            <div class="">
                                                                                                                <input id="ctrl-hospital_area"  value="<?php  echo $data['hospital_area']; ?>" type="text" placeholder="Enter Hospital Area"  required="" name="hospital_area"  class="form-control " />
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form-group ">
                                                                                                        <div class="row">
                                                                                                            <div class="col-sm-4">
                                                                                                                <label class="control-label" for="doctors_count">DOCTORS COUNT  <span class="text-danger">*</span></label>
                                                                                                            </div>
                                                                                                            <div class="col-sm-8">
                                                                                                                <div class="">
                                                                                                                    <input id="ctrl-doctors_count"  value="<?php  echo $data['doctors_count']; ?>" type="number" placeholder="Enter Doctors Count" step="1"  required="" name="doctors_count"  class="form-control " />
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="form-group ">
                                                                                                            <div class="row">
                                                                                                                <div class="col-sm-4">
                                                                                                                    <label class="control-label" for="nurses_count">NURSES COUNT  <span class="text-danger">*</span></label>
                                                                                                                </div>
                                                                                                                <div class="col-sm-8">
                                                                                                                    <div class="">
                                                                                                                        <input id="ctrl-nurses_count"  value="<?php  echo $data['nurses_count']; ?>" type="number" placeholder="Enter Nurses Count" step="1"  required="" name="nurses_count"  class="form-control " />
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="form-group ">
                                                                                                                <div class="row">
                                                                                                                    <div class="col-sm-4">
                                                                                                                        <label class="control-label" for="ward_boy_count">WARD BOY COUNT  <span class="text-danger">*</span></label>
                                                                                                                    </div>
                                                                                                                    <div class="col-sm-8">
                                                                                                                        <div class="">
                                                                                                                            <input id="ctrl-ward_boy_count"  value="<?php  echo $data['ward_boy_count']; ?>" type="number" placeholder="Enter Ward Boy Count" step="1"  required="" name="ward_boy_count"  class="form-control " />
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="form-group ">
                                                                                                                    <div class="row">
                                                                                                                        <div class="col-sm-4">
                                                                                                                            <label class="control-label" for="aunts_count">AUNTS COUNT  <span class="text-danger">*</span></label>
                                                                                                                        </div>
                                                                                                                        <div class="col-sm-8">
                                                                                                                            <div class="">
                                                                                                                                <input id="ctrl-aunts_count"  value="<?php  echo $data['aunts_count']; ?>" type="number" placeholder="Enter Aunts Count" step="1"  required="" name="aunts_count"  class="form-control " />
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <div class="form-group ">
                                                                                                                        <div class="row">
                                                                                                                            <div class="col-sm-4">
                                                                                                                                <label class="control-label" for="clerk_count">CLERK COUNT  <span class="text-danger">*</span></label>
                                                                                                                            </div>
                                                                                                                            <div class="col-sm-8">
                                                                                                                                <div class="">
                                                                                                                                    <input id="ctrl-clerk_count"  value="<?php  echo $data['clerk_count']; ?>" type="number" placeholder="Enter Clerk Count" step="1"  required="" name="clerk_count"  class="form-control " />
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="form-group ">
                                                                                                                            <div class="row">
                                                                                                                                <div class="col-sm-4">
                                                                                                                                    <label class="control-label" for="other_employees_count">OTHER EMPLOYEES COUNT  <span class="text-danger">*</span></label>
                                                                                                                                </div>
                                                                                                                                <div class="col-sm-8">
                                                                                                                                    <div class="">
                                                                                                                                        <input id="ctrl-other_employees_count"  value="<?php  echo $data['other_employees_count']; ?>" type="number" placeholder="Enter Other Employees Count" step="1"  required="" name="other_employees_count"  class="form-control " />
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <div class="form-group ">
                                                                                                                                <div class="row">
                                                                                                                                    <div class="col-sm-4">
                                                                                                                                        <label class="control-label" for="floor_number_of_hospital_id">FLOOR NUMBER  <span class="text-danger">*</span></label>
                                                                                                                                    </div>
                                                                                                                                    <div class="col-sm-8">
                                                                                                                                        <div class="">
                                                                                                                                            <input id="ctrl-floor_number_of_hospital_id"  value="<?php  echo $data['floor_number_of_hospital_id']; ?>" type="number" placeholder="Enter Floor Number Of Hospital Id" step="1"  required="" name="floor_number_of_hospital_id"  class="form-control " />
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <div class="form-group ">
                                                                                                                                    <div class="row">
                                                                                                                                        <div class="col-sm-4">
                                                                                                                                            <label class="control-label" for="is_ot_dept">OT DEPARTMENT  <span class="text-danger">*</span></label>
                                                                                                                                        </div>
                                                                                                                                        <div class="col-sm-8">
                                                                                                                                            <div class="">
                                                                                                                                                <select required=""  id="ctrl-is_ot_dept" name="is_ot_dept"  placeholder="Select a value ..."    class="custom-select" >
                                                                                                                                                    <option value="">Select a value ...</option>
                                                                                                                                                    <?php
                                                                                                                                                    $is_ot_dept_options = Menu :: $is_redevelopment;
                                                                                                                                                    $field_value = $data['is_ot_dept'];
                                                                                                                                                    if(!empty($is_ot_dept_options)){
                                                                                                                                                    foreach($is_ot_dept_options as $option){
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
                                                                                                                                            <label class="control-label" for="is_xray_dept">X-RAY DEPARTMENT  <span class="text-danger">*</span></label>
                                                                                                                                        </div>
                                                                                                                                        <div class="col-sm-8">
                                                                                                                                            <div class="">
                                                                                                                                                <select required=""  id="ctrl-is_xray_dept" name="is_xray_dept"  placeholder="Select a value ..."    class="custom-select" >
                                                                                                                                                    <option value="">Select a value ...</option>
                                                                                                                                                    <?php
                                                                                                                                                    $is_xray_dept_options = Menu :: $is_redevelopment;
                                                                                                                                                    $field_value = $data['is_xray_dept'];
                                                                                                                                                    if(!empty($is_xray_dept_options)){
                                                                                                                                                    foreach($is_xray_dept_options as $option){
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
                                                                                                                                            <label class="control-label" for="is_opd_dept">OPD DEPARTMENT  <span class="text-danger">*</span></label>
                                                                                                                                        </div>
                                                                                                                                        <div class="col-sm-8">
                                                                                                                                            <div class="">
                                                                                                                                                <select required=""  id="ctrl-is_opd_dept" name="is_opd_dept"  placeholder="Select a value ..."    class="custom-select" >
                                                                                                                                                    <option value="">Select a value ...</option>
                                                                                                                                                    <?php
                                                                                                                                                    $is_opd_dept_options = Menu :: $is_redevelopment;
                                                                                                                                                    $field_value = $data['is_opd_dept'];
                                                                                                                                                    if(!empty($is_opd_dept_options)){
                                                                                                                                                    foreach($is_opd_dept_options as $option){
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
                                                                                                                                            <label class="control-label" for="is_emergency_opd_dept">EMERGENCY OPD DEPARTMENT  <span class="text-danger">*</span></label>
                                                                                                                                        </div>
                                                                                                                                        <div class="col-sm-8">
                                                                                                                                            <div class="">
                                                                                                                                                <select required=""  id="ctrl-is_emergency_opd_dept" name="is_emergency_opd_dept"  placeholder="Select a value ..."    class="custom-select" >
                                                                                                                                                    <option value="">Select a value ...</option>
                                                                                                                                                    <?php
                                                                                                                                                    $is_emergency_opd_dept_options = Menu :: $is_redevelopment;
                                                                                                                                                    $field_value = $data['is_emergency_opd_dept'];
                                                                                                                                                    if(!empty($is_emergency_opd_dept_options)){
                                                                                                                                                    foreach($is_emergency_opd_dept_options as $option){
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
                                                                                                                                            <label class="control-label" for="is_patholoty_dept">PATHOLOGY DEPARTMENT  <span class="text-danger">*</span></label>
                                                                                                                                        </div>
                                                                                                                                        <div class="col-sm-8">
                                                                                                                                            <div class="">
                                                                                                                                                <select required=""  id="ctrl-is_patholoty_dept" name="is_patholoty_dept"  placeholder="Select a value ..."    class="custom-select" >
                                                                                                                                                    <option value="">Select a value ...</option>
                                                                                                                                                    <?php
                                                                                                                                                    $is_patholoty_dept_options = Menu :: $is_redevelopment;
                                                                                                                                                    $field_value = $data['is_patholoty_dept'];
                                                                                                                                                    if(!empty($is_patholoty_dept_options)){
                                                                                                                                                    foreach($is_patholoty_dept_options as $option){
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
                                                                                                                                            <label class="control-label" for="is_post_nutal_care_dept">POST-NATAL CARE DEPARTMENT  <span class="text-danger">*</span></label>
                                                                                                                                        </div>
                                                                                                                                        <div class="col-sm-8">
                                                                                                                                            <div class="">
                                                                                                                                                <select required=""  id="ctrl-is_post_nutal_care_dept" name="is_post_nutal_care_dept"  placeholder="Select a value ..."    class="custom-select" >
                                                                                                                                                    <option value="">Select a value ...</option>
                                                                                                                                                    <?php
                                                                                                                                                    $is_post_nutal_care_dept_options = Menu :: $is_redevelopment;
                                                                                                                                                    $field_value = $data['is_post_nutal_care_dept'];
                                                                                                                                                    if(!empty($is_post_nutal_care_dept_options)){
                                                                                                                                                    foreach($is_post_nutal_care_dept_options as $option){
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
                                                                                                                                            <label class="control-label" for="is_icu_dept">ICU DEPARTMENT  <span class="text-danger">*</span></label>
                                                                                                                                        </div>
                                                                                                                                        <div class="col-sm-8">
                                                                                                                                            <div class="">
                                                                                                                                                <select required=""  id="ctrl-is_icu_dept" name="is_icu_dept"  placeholder="Select a value ..."    class="custom-select" >
                                                                                                                                                    <option value="">Select a value ...</option>
                                                                                                                                                    <?php
                                                                                                                                                    $is_icu_dept_options = Menu :: $is_redevelopment;
                                                                                                                                                    $field_value = $data['is_icu_dept'];
                                                                                                                                                    if(!empty($is_icu_dept_options)){
                                                                                                                                                    foreach($is_icu_dept_options as $option){
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
                                                                                                                                            <label class="control-label" for="is_gw_men_dept">GENERAL WARD MEN  <span class="text-danger">*</span></label>
                                                                                                                                        </div>
                                                                                                                                        <div class="col-sm-8">
                                                                                                                                            <div class="">
                                                                                                                                                <select required=""  id="ctrl-is_gw_men_dept" name="is_gw_men_dept"  placeholder="Select a value ..."    class="custom-select" >
                                                                                                                                                    <option value="">Select a value ...</option>
                                                                                                                                                    <?php
                                                                                                                                                    $is_gw_men_dept_options = Menu :: $is_redevelopment;
                                                                                                                                                    $field_value = $data['is_gw_men_dept'];
                                                                                                                                                    if(!empty($is_gw_men_dept_options)){
                                                                                                                                                    foreach($is_gw_men_dept_options as $option){
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
                                                                                                                                            <label class="control-label" for="is_gw_women_dept">GENERAL WARD WOMEN  <span class="text-danger">*</span></label>
                                                                                                                                        </div>
                                                                                                                                        <div class="col-sm-8">
                                                                                                                                            <div class="">
                                                                                                                                                <select required=""  id="ctrl-is_gw_women_dept" name="is_gw_women_dept"  placeholder="Select a value ..."    class="custom-select" >
                                                                                                                                                    <option value="">Select a value ...</option>
                                                                                                                                                    <?php
                                                                                                                                                    $is_gw_women_dept_options = Menu :: $is_redevelopment;
                                                                                                                                                    $field_value = $data['is_gw_women_dept'];
                                                                                                                                                    if(!empty($is_gw_women_dept_options)){
                                                                                                                                                    foreach($is_gw_women_dept_options as $option){
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
                                                                                                                                            <label class="control-label" for="is_special_ward_dept">SPECIAL WARD  <span class="text-danger">*</span></label>
                                                                                                                                        </div>
                                                                                                                                        <div class="col-sm-8">
                                                                                                                                            <div class="">
                                                                                                                                                <select required=""  id="ctrl-is_special_ward_dept" name="is_special_ward_dept"  placeholder="Select a value ..."    class="custom-select" >
                                                                                                                                                    <option value="">Select a value ...</option>
                                                                                                                                                    <?php
                                                                                                                                                    $is_special_ward_dept_options = Menu :: $is_redevelopment;
                                                                                                                                                    $field_value = $data['is_special_ward_dept'];
                                                                                                                                                    if(!empty($is_special_ward_dept_options)){
                                                                                                                                                    foreach($is_special_ward_dept_options as $option){
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
                                                                                                                                            <label class="control-label" for="is_ante_nutal_care_dept">ANTE-NATAL CARE DEPARTMENT  <span class="text-danger">*</span></label>
                                                                                                                                        </div>
                                                                                                                                        <div class="col-sm-8">
                                                                                                                                            <div class="">
                                                                                                                                                <select required=""  id="ctrl-is_ante_nutal_care_dept" name="is_ante_nutal_care_dept"  placeholder="Select a value ..."    class="custom-select" >
                                                                                                                                                    <option value="">Select a value ...</option>
                                                                                                                                                    <?php
                                                                                                                                                    $is_ante_nutal_care_dept_options = Menu :: $is_redevelopment;
                                                                                                                                                    $field_value = $data['is_ante_nutal_care_dept'];
                                                                                                                                                    if(!empty($is_ante_nutal_care_dept_options)){
                                                                                                                                                    foreach($is_ante_nutal_care_dept_options as $option){
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
                                                                                                                                            <label class="control-label" for="is_nicu_dept">NICU DEPARTMENT  <span class="text-danger">*</span></label>
                                                                                                                                        </div>
                                                                                                                                        <div class="col-sm-8">
                                                                                                                                            <div class="">
                                                                                                                                                <select required=""  id="ctrl-is_nicu_dept" name="is_nicu_dept"  placeholder="Select a value ..."    class="custom-select" >
                                                                                                                                                    <option value="">Select a value ...</option>
                                                                                                                                                    <?php
                                                                                                                                                    $is_nicu_dept_options = Menu :: $is_redevelopment;
                                                                                                                                                    $field_value = $data['is_nicu_dept'];
                                                                                                                                                    if(!empty($is_nicu_dept_options)){
                                                                                                                                                    foreach($is_nicu_dept_options as $option){
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
                                                                                                                                            <label class="control-label" for="directional_board">DIRECTIONAL BOARD  <span class="text-danger">*</span></label>
                                                                                                                                        </div>
                                                                                                                                        <div class="col-sm-8">
                                                                                                                                            <div class="">
                                                                                                                                                <select required=""  id="ctrl-directional_board" name="directional_board"  placeholder="Select a value ..."    class="custom-select" >
                                                                                                                                                    <option value="">Select a value ...</option>
                                                                                                                                                    <?php
                                                                                                                                                    $directional_board_options = Menu :: $is_redevelopment;
                                                                                                                                                    $field_value = $data['directional_board'];
                                                                                                                                                    if(!empty($directional_board_options)){
                                                                                                                                                    foreach($directional_board_options as $option){
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
                                                                                                                                            <label class="control-label" for="total_no_beds_hospital">TOTAL NO. OF BEDS  <span class="text-danger">*</span></label>
                                                                                                                                        </div>
                                                                                                                                        <div class="col-sm-8">
                                                                                                                                            <div class="">
                                                                                                                                                <input id="ctrl-total_no_beds_hospital"  value="<?php  echo $data['total_no_beds_hospital']; ?>" type="number" placeholder="Enter Total No Beds Hospital" step="1"  required="" name="total_no_beds_hospital"  class="form-control " />
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    <div class="form-group ">
                                                                                                                                        <div class="row">
                                                                                                                                            <div class="col-sm-4">
                                                                                                                                                <label class="control-label" for="generator_system_capacity">GENERATOR SYSTEM CAPACITY  <span class="text-danger">*</span></label>
                                                                                                                                            </div>
                                                                                                                                            <div class="col-sm-8">
                                                                                                                                                <div class="">
                                                                                                                                                    <div class="dropzone required" input="#ctrl-generator_system_capacity" fieldname="generator_system_capacity"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                                                                                                        <input name="generator_system_capacity" id="ctrl-generator_system_capacity" required="" class="dropzone-input form-control" value="<?php  echo $data['generator_system_capacity']; ?>" type="text"  />
                                                                                                                                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                                                            <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                    <?php Html :: uploaded_files_list($data['generator_system_capacity'], '#ctrl-generator_system_capacity'); ?>
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                        <div class="form-group ">
                                                                                                                                            <div class="row">
                                                                                                                                                <div class="col-sm-4">
                                                                                                                                                    <label class="control-label" for="generator_system_amc_org_name">GENERATOR AMC ORGANIZATION  <span class="text-danger">*</span></label>
                                                                                                                                                </div>
                                                                                                                                                <div class="col-sm-8">
                                                                                                                                                    <div class="">
                                                                                                                                                        <input id="ctrl-generator_system_amc_org_name"  value="<?php  echo $data['generator_system_amc_org_name']; ?>" type="text" placeholder="Enter Generator System Amc Org Name"  required="" name="generator_system_amc_org_name"  class="form-control " />
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                            <div class="form-group ">
                                                                                                                                                <div class="row">
                                                                                                                                                    <div class="col-sm-4">
                                                                                                                                                        <label class="control-label" for="generator_system_amc_period">GENERATOR AMC PERIOD  <span class="text-danger">*</span></label>
                                                                                                                                                    </div>
                                                                                                                                                    <div class="col-sm-8">
                                                                                                                                                        <div class="">
                                                                                                                                                            <input id="ctrl-generator_system_amc_period"  value="<?php  echo $data['generator_system_amc_period']; ?>" type="text" placeholder="Enter Generator System Amc Period"  required="" name="generator_system_amc_period"  class="form-control " />
                                                                                                                                                            </div>
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                                <div class="form-group ">
                                                                                                                                                    <div class="row">
                                                                                                                                                        <div class="col-sm-4">
                                                                                                                                                            <label class="control-label" for="electrical_audit_report_org_name">ELECTRICAL AUDIT ORGANIZATION  <span class="text-danger">*</span></label>
                                                                                                                                                        </div>
                                                                                                                                                        <div class="col-sm-8">
                                                                                                                                                            <div class="">
                                                                                                                                                                <input id="ctrl-electrical_audit_report_org_name"  value="<?php  echo $data['electrical_audit_report_org_name']; ?>" type="text" placeholder="Enter Electrical Audit Report Org Name"  required="" name="electrical_audit_report_org_name"  class="form-control " />
                                                                                                                                                                </div>
                                                                                                                                                            </div>
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                    <div class="form-group ">
                                                                                                                                                        <div class="row">
                                                                                                                                                            <div class="col-sm-4">
                                                                                                                                                                <label class="control-label" for="electrical_audit_report_date">ELECTRICAL AUDIT REPORT DATE  <span class="text-danger">*</span></label>
                                                                                                                                                            </div>
                                                                                                                                                            <div class="col-sm-8">
                                                                                                                                                                <div class="input-group">
                                                                                                                                                                    <input id="ctrl-electrical_audit_report_date" class="form-control datepicker  datepicker"  required="" value="<?php  echo $data['electrical_audit_report_date']; ?>" type="datetime" name="electrical_audit_report_date" placeholder="Enter Electrical Audit Report Date" data-enable-time="false" data-min-date="" data-max-date="<?php echo date_now(); ?>" data-date-format="Y-m-d" data-alt-format="F j, Y" data-inline="false" data-no-calendar="false" data-mode="single" />
                                                                                                                                                                        <div class="input-group-append">
                                                                                                                                                                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                                                                                                                                        </div>
                                                                                                                                                                    </div>
                                                                                                                                                                </div>
                                                                                                                                                            </div>
                                                                                                                                                        </div>
                                                                                                                                                        <div class="form-group ">
                                                                                                                                                            <div class="row">
                                                                                                                                                                <div class="col-sm-4">
                                                                                                                                                                    <label class="control-label" for="emergency_power_system">EMERGENCY POWER SYSTEM  <span class="text-danger">*</span></label>
                                                                                                                                                                </div>
                                                                                                                                                                <div class="col-sm-8">
                                                                                                                                                                    <div class="">
                                                                                                                                                                        <input id="ctrl-emergency_power_system"  value="<?php  echo $data['emergency_power_system']; ?>" type="text" placeholder="Enter Emergency Power System"  required="" name="emergency_power_system"  class="form-control " />
                                                                                                                                                                        </div>
                                                                                                                                                                    </div>
                                                                                                                                                                </div>
                                                                                                                                                            </div>
                                                                                                                                                            <div class="form-group ">
                                                                                                                                                                <div class="row">
                                                                                                                                                                    <div class="col-sm-4">
                                                                                                                                                                        <label class="control-label" for="info_about_fire_prevention_measures">FIRE PREVENTION MEASURES  <span class="text-danger">*</span></label>
                                                                                                                                                                    </div>
                                                                                                                                                                    <div class="col-sm-8">
                                                                                                                                                                        <div class="">
                                                                                                                                                                            <input id="ctrl-info_about_fire_prevention_measures"  value="<?php  echo $data['info_about_fire_prevention_measures']; ?>" type="text" placeholder="Enter Info About Fire Prevention Measures"  required="" name="info_about_fire_prevention_measures"  class="form-control " />
                                                                                                                                                                            </div>
                                                                                                                                                                        </div>
                                                                                                                                                                    </div>
                                                                                                                                                                </div>
                                                                                                                                                                <div class="form-group ">
                                                                                                                                                                    <div class="row">
                                                                                                                                                                        <div class="col-sm-4">
                                                                                                                                                                            <label class="control-label" for="no_emp_present_for_mock_drill">EMPLOYEES PRESENT IN DRILL  <span class="text-danger">*</span></label>
                                                                                                                                                                        </div>
                                                                                                                                                                        <div class="col-sm-8">
                                                                                                                                                                            <div class="">
                                                                                                                                                                                <input id="ctrl-no_emp_present_for_mock_drill"  value="<?php  echo $data['no_emp_present_for_mock_drill']; ?>" type="number" placeholder="Enter No Emp Present For Mock Drill" step="1"  required="" name="no_emp_present_for_mock_drill"  class="form-control " />
                                                                                                                                                                                </div>
                                                                                                                                                                            </div>
                                                                                                                                                                        </div>
                                                                                                                                                                    </div>
                                                                                                                                                                    <div class="form-group ">
                                                                                                                                                                        <div class="row">
                                                                                                                                                                            <div class="col-sm-4">
                                                                                                                                                                                <label class="control-label" for="upload_photo_of_employee_present_for_mock_drill">UPLOAD PHOTO OF EMPLOYEES  <span class="text-danger">*</span></label>
                                                                                                                                                                            </div>
                                                                                                                                                                            <div class="col-sm-8">
                                                                                                                                                                                <div class="">
                                                                                                                                                                                    <div class="dropzone required" input="#ctrl-upload_photo_of_employee_present_for_mock_drill" fieldname="upload_photo_of_employee_present_for_mock_drill"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="10" maximum="5">
                                                                                                                                                                                        <input name="upload_photo_of_employee_present_for_mock_drill" id="ctrl-upload_photo_of_employee_present_for_mock_drill" required="" class="dropzone-input form-control" value="<?php  echo $data['upload_photo_of_employee_present_for_mock_drill']; ?>" type="text"  />
                                                                                                                                                                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                                                                                            <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                                                                                        </div>
                                                                                                                                                                                    </div>
                                                                                                                                                                                    <?php Html :: uploaded_files_list($data['upload_photo_of_employee_present_for_mock_drill'], '#ctrl-upload_photo_of_employee_present_for_mock_drill'); ?>
                                                                                                                                                                                </div>
                                                                                                                                                                            </div>
                                                                                                                                                                        </div>
                                                                                                                                                                        <div class="form-group ">
                                                                                                                                                                            <div class="row">
                                                                                                                                                                                <div class="col-sm-4">
                                                                                                                                                                                    <label class="control-label" for="upload_fire_marshal_names_with_mobile_no">FIRE MARSHAL NAMES WITH MOBILE  <span class="text-danger">*</span></label>
                                                                                                                                                                                </div>
                                                                                                                                                                                <div class="col-sm-8">
                                                                                                                                                                                    <div class="">
                                                                                                                                                                                        <div class="dropzone required" input="#ctrl-upload_fire_marshal_names_with_mobile_no" fieldname="upload_fire_marshal_names_with_mobile_no"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" filesize="3" maximum="1">
                                                                                                                                                                                            <input name="upload_fire_marshal_names_with_mobile_no" id="ctrl-upload_fire_marshal_names_with_mobile_no" required="" class="dropzone-input form-control" value="<?php  echo $data['upload_fire_marshal_names_with_mobile_no']; ?>" type="text"  />
                                                                                                                                                                                                <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                                                                                                <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                                                                                            </div>
                                                                                                                                                                                        </div>
                                                                                                                                                                                        <?php Html :: uploaded_files_list($data['upload_fire_marshal_names_with_mobile_no'], '#ctrl-upload_fire_marshal_names_with_mobile_no'); ?>
                                                                                                                                                                                    </div>
                                                                                                                                                                                </div>
                                                                                                                                                                            </div>
                                                                                                                                                                            <div class="form-group ">
                                                                                                                                                                                <div class="row">
                                                                                                                                                                                    <div class="col-sm-4">
                                                                                                                                                                                        <label class="control-label" for="water_storage_capacity_terrace">WATER STORAGE TERRACE  <span class="text-danger">*</span></label>
                                                                                                                                                                                    </div>
                                                                                                                                                                                    <div class="col-sm-8">
                                                                                                                                                                                        <div class="">
                                                                                                                                                                                            <input id="ctrl-water_storage_capacity_terrace"  value="<?php  echo $data['water_storage_capacity_terrace']; ?>" type="text" placeholder="Enter Water Storage Capacity Terrace"  required="" name="water_storage_capacity_terrace"  class="form-control " />
                                                                                                                                                                                            </div>
                                                                                                                                                                                        </div>
                                                                                                                                                                                    </div>
                                                                                                                                                                                </div>
                                                                                                                                                                                <div class="form-group ">
                                                                                                                                                                                    <div class="row">
                                                                                                                                                                                        <div class="col-sm-4">
                                                                                                                                                                                            <label class="control-label" for="water_storage_capacity_groundfloor">WATER STORAGE GROUND FLOOR  <span class="text-danger">*</span></label>
                                                                                                                                                                                        </div>
                                                                                                                                                                                        <div class="col-sm-8">
                                                                                                                                                                                            <div class="">
                                                                                                                                                                                                <input id="ctrl-water_storage_capacity_groundfloor"  value="<?php  echo $data['water_storage_capacity_groundfloor']; ?>" type="text" placeholder="Enter Water Storage Capacity Groundfloor"  required="" name="water_storage_capacity_groundfloor"  class="form-control " />
                                                                                                                                                                                                </div>
                                                                                                                                                                                            </div>
                                                                                                                                                                                        </div>
                                                                                                                                                                                    </div>
                                                                                                                                                                                    <div class="form-group ">
                                                                                                                                                                                        <div class="row">
                                                                                                                                                                                            <div class="col-sm-4">
                                                                                                                                                                                                <label class="control-label" for="fire_noc_details">FIRE NOC DETAILS  <span class="text-danger">*</span></label>
                                                                                                                                                                                            </div>
                                                                                                                                                                                            <div class="col-sm-8">
                                                                                                                                                                                                <div class="">
                                                                                                                                                                                                    <input id="ctrl-fire_noc_details"  value="<?php  echo $data['fire_noc_details']; ?>" type="text" placeholder="Enter Fire Noc Details"  required="" name="fire_noc_details"  class="form-control " />
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                </div>
                                                                                                                                                                                            </div>
                                                                                                                                                                                        </div>
                                                                                                                                                                                        <div class="form-group ">
                                                                                                                                                                                            <div class="row">
                                                                                                                                                                                                <div class="col-sm-4">
                                                                                                                                                                                                    <label class="control-label" for="fire_noc_date">FIRE NOC DATE  <span class="text-danger">*</span></label>
                                                                                                                                                                                                </div>
                                                                                                                                                                                                <div class="col-sm-8">
                                                                                                                                                                                                    <div class="input-group">
                                                                                                                                                                                                        <input id="ctrl-fire_noc_date" class="form-control datepicker  datepicker"  required="" value="<?php  echo $data['fire_noc_date']; ?>" type="datetime" name="fire_noc_date" placeholder="Enter Fire Noc Date" data-enable-time="false" data-min-date="" data-max-date="" data-date-format="Y-m-d" data-alt-format="F j, Y" data-inline="false" data-no-calendar="false" data-mode="single" />
                                                                                                                                                                                                            <div class="input-group-append">
                                                                                                                                                                                                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                                                                                                                                                                            </div>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                </div>
                                                                                                                                                                                            </div>
                                                                                                                                                                                            <div class="form-group ">
                                                                                                                                                                                                <div class="row">
                                                                                                                                                                                                    <div class="col-sm-4">
                                                                                                                                                                                                        <label class="control-label" for="other_info_about_hospital">OTHER INFO  <span class="text-danger">*</span></label>
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                    <div class="col-sm-8">
                                                                                                                                                                                                        <div class="">
                                                                                                                                                                                                            <input id="ctrl-other_info_about_hospital"  value="<?php  echo $data['other_info_about_hospital']; ?>" type="text" placeholder="Enter Other Info About Hospital"  required="" name="other_info_about_hospital"  class="form-control " />
                                                                                                                                                                                                            </div>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                </div>
                                                                                                                                                                                                <div class="form-group ">
                                                                                                                                                                                                    <div class="row">
                                                                                                                                                                                                        <div class="col-sm-4">
                                                                                                                                                                                                            <label class="control-label" for="oxygen_system">OXYGEN SYSTEM  <span class="text-danger">*</span></label>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                        <div class="col-sm-8">
                                                                                                                                                                                                            <div class="">
                                                                                                                                                                                                                <input id="ctrl-oxygen_system"  value="<?php  echo $data['oxygen_system']; ?>" type="text" placeholder="Enter Oxygen System"  required="" name="oxygen_system"  class="form-control " />
                                                                                                                                                                                                                </div>
                                                                                                                                                                                                            </div>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                    <div class="form-group ">
                                                                                                                                                                                                        <div class="row">
                                                                                                                                                                                                            <div class="col-sm-4">
                                                                                                                                                                                                                <label class="control-label" for="maintenance_of_emergency_routes">MAINTENANCE OF EMERGENCY ROUTES  <span class="text-danger">*</span></label>
                                                                                                                                                                                                            </div>
                                                                                                                                                                                                            <div class="col-sm-8">
                                                                                                                                                                                                                <div class="">
                                                                                                                                                                                                                    <input id="ctrl-maintenance_of_emergency_routes"  value="<?php  echo $data['maintenance_of_emergency_routes']; ?>" type="text" placeholder="Enter Maintenance Of Emergency Routes"  required="" name="maintenance_of_emergency_routes"  class="form-control " />
                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                </div>
                                                                                                                                                                                                            </div>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                        <div class="form-group ">
                                                                                                                                                                                                            <div class="row">
                                                                                                                                                                                                                <div class="col-sm-4">
                                                                                                                                                                                                                    <label class="control-label" for="remark">REMARK  <span class="text-danger">*</span></label>
                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                <div class="col-sm-8">
                                                                                                                                                                                                                    <div class="">
                                                                                                                                                                                                                        <input id="ctrl-remark"  value="<?php  echo $data['remark']; ?>" type="text" placeholder="Enter Remark"  required="" name="remark"  class="form-control " />
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
