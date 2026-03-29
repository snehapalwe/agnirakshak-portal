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
                    <h4 class="record-title">Industrial Establishment Inspection Edit / औद्योगिक आस्थापनांकरिता पाहणी बदल</h4>
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
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-horizontal needs-validation" action="<?php print_link("industrial_factory_inspection_form/edit/$page_id/?csrf_token=$csrf_token"); ?>" method="post">
                            <div>
                                <input id="ctrl-recid"  value="<?php  echo $data['recid']; ?>" type="hidden" placeholder="Enter Recid"  required="" name="recid"  class="form-control " />
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="business_name">BUSINESS NAME  <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input id="ctrl-business_name"  value="<?php  echo $data['business_name']; ?>" type="text" placeholder="Enter Business Name"  required="" name="business_name"  class="form-control " />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <label class="control-label" for="business_address">BUSINESS ADDRESS  <span class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="">
                                                        <input id="ctrl-business_address"  value="<?php  echo $data['business_address']; ?>" type="text" placeholder="Enter Business Address"  required="" name="business_address"  class="form-control " />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <label class="control-label" for="mobile_no">MOBILE NO.  <span class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="">
                                                            <input id="ctrl-mobile_no"  value="<?php  echo $data['mobile_no']; ?>" type="number" placeholder="Enter Mobile No" maxlength="0000000000" minlength="9999999999" step="1"  required="" name="mobile_no"  class="form-control " />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <label class="control-label" for="owners_name">OWNER’S NAME  <span class="text-danger">*</span></label>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <div class="">
                                                                <input id="ctrl-owners_name"  value="<?php  echo $data['owners_name']; ?>" type="text" placeholder="Enter Owners Name"  required="" name="owners_name"  class="form-control " />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <label class="control-label" for="residential_address">RESIDENTIAL ADDRESS  <span class="text-danger">*</span></label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="">
                                                                    <input id="ctrl-residential_address"  value="<?php  echo $data['residential_address']; ?>" type="text" placeholder="Enter Residential Address"  required="" name="residential_address"  class="form-control " />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group ">
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <label class="control-label" for="owners_mobile_number">OWNER’S MOBILE NUMBER  <span class="text-danger">*</span></label>
                                                                </div>
                                                                <div class="col-sm-8">
                                                                    <div class="">
                                                                        <input id="ctrl-owners_mobile_number"  value="<?php  echo $data['owners_mobile_number']; ?>" type="number" placeholder="Enter Owners Mobile Number" min="0000000000" max="9999999999" step="1"  required="" name="owners_mobile_number"  class="form-control " />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group ">
                                                                <div class="row">
                                                                    <div class="col-sm-4">
                                                                        <label class="control-label" for="type_of_application_id">TYPE OF APPLICATION   <span class="text-danger">*</span></label>
                                                                    </div>
                                                                    <div class="col-sm-8">
                                                                        <div class="">
                                                                            <select required=""  id="ctrl-type_of_application_id" name="type_of_application_id"  placeholder="Select a value ..."    class="custom-select" >
                                                                                <option value="">Select a value ...</option>
                                                                                <?php
                                                                                $rec = $data['type_of_application_id'];
                                                                                $type_of_application_id_options = $comp_model -> industrial_factory_inspection_form_type_of_application_id_option_list();
                                                                                if(!empty($type_of_application_id_options)){
                                                                                foreach($type_of_application_id_options as $option){
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
                                                                        <label class="control-label" for="old_noc_number">OLD NOC NUMBER  </label>
                                                                    </div>
                                                                    <div class="col-sm-8">
                                                                        <div class="">
                                                                            <input id="ctrl-old_noc_number"  value="<?php  echo $data['old_noc_number']; ?>" type="text" placeholder="Enter Old Noc Number"  name="old_noc_number"  class="form-control " />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group ">
                                                                    <div class="row">
                                                                        <div class="col-sm-4">
                                                                            <label class="control-label" for="old_noc_date">OLD NOC DATE  </label>
                                                                        </div>
                                                                        <div class="col-sm-8">
                                                                            <div class="input-group">
                                                                                <input id="ctrl-old_noc_date" class="form-control datepicker  datepicker"  value="<?php  echo $data['old_noc_date']; ?>" type="datetime" name="old_noc_date" placeholder="Enter Old Noc Date" data-enable-time="false" data-min-date="" data-max-date="<?php echo date_now(); ?>" data-date-format="Y-m-d" data-alt-format="F j, Y" data-inline="false" data-no-calendar="false" data-mode="single" />
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
                                                                                <label class="control-label" for="building_type">BUILDING TYPE  <span class="text-danger">*</span></label>
                                                                            </div>
                                                                            <div class="col-sm-8">
                                                                                <div class="">
                                                                                    <select required=""  id="ctrl-building_type" name="building_type"  placeholder="Select a value ..."    class="custom-select" >
                                                                                        <option value="">Select a value ...</option>
                                                                                        <?php
                                                                                        $rec = $data['building_type'];
                                                                                        $building_type_options = $comp_model -> industrial_factory_inspection_form_building_type_option_list();
                                                                                        if(!empty($building_type_options)){
                                                                                        foreach($building_type_options as $option){
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
                                                                                <label class="control-label" for="building_height">BUILDING HEIGHT  <span class="text-danger">*</span></label>
                                                                            </div>
                                                                            <div class="col-sm-8">
                                                                                <div class="">
                                                                                    <input id="ctrl-building_height"  value="<?php  echo $data['building_height']; ?>" type="number" placeholder="Enter Building Height" step="1"  required="" name="building_height"  class="form-control " />
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group ">
                                                                            <div class="row">
                                                                                <div class="col-sm-4">
                                                                                    <label class="control-label" for="building_floor">BUILDING FLOORS  <span class="text-danger">*</span></label>
                                                                                </div>
                                                                                <div class="col-sm-8">
                                                                                    <div class="">
                                                                                        <input id="ctrl-building_floor"  value="<?php  echo $data['building_floor']; ?>" type="number" placeholder="Enter Building Floor" step="1"  required="" name="building_floor"  class="form-control " />
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group ">
                                                                                <div class="row">
                                                                                    <div class="col-sm-4">
                                                                                        <label class="control-label" for="no_of_staircase_in_building_and_width">NO. & WIDTH OF STAIRCASES  <span class="text-danger">*</span></label>
                                                                                    </div>
                                                                                    <div class="col-sm-8">
                                                                                        <div class="">
                                                                                            <input id="ctrl-no_of_staircase_in_building_and_width"  value="<?php  echo $data['no_of_staircase_in_building_and_width']; ?>" type="text" placeholder="Enter No Of Staircase In Building And Width"  required="" name="no_of_staircase_in_building_and_width"  class="form-control " />
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group ">
                                                                                    <div class="row">
                                                                                        <div class="col-sm-4">
                                                                                            <label class="control-label" for="no_of_commercial_spaces">NO. OF COMMERCIAL SPACES  <span class="text-danger">*</span></label>
                                                                                        </div>
                                                                                        <div class="col-sm-8">
                                                                                            <div class="">
                                                                                                <input id="ctrl-no_of_commercial_spaces"  value="<?php  echo $data['no_of_commercial_spaces']; ?>" type="number" placeholder="Enter No Of Commercial Spaces" step="1"  required="" name="no_of_commercial_spaces"  class="form-control " />
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group ">
                                                                                        <div class="row">
                                                                                            <div class="col-sm-4">
                                                                                                <label class="control-label" for="structural_audit_report_year_of_construction">YEAR OF CONSTRUCTION (AUDIT REPORT)  <span class="text-danger">*</span></label>
                                                                                            </div>
                                                                                            <div class="col-sm-8">
                                                                                                <div class="">
                                                                                                    <input id="ctrl-structural_audit_report_year_of_construction"  value="<?php  echo $data['structural_audit_report_year_of_construction']; ?>" type="number" placeholder="Enter Structural Audit Report Year Of Construction" step="1"  required="" name="structural_audit_report_year_of_construction"  class="form-control " />
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group ">
                                                                                            <div class="row">
                                                                                                <div class="col-sm-4">
                                                                                                    <label class="control-label" for="structural_audit_report_date">STRUCTURAL AUDIT REPORT DATE  <span class="text-danger">*</span></label>
                                                                                                </div>
                                                                                                <div class="col-sm-8">
                                                                                                    <div class="input-group">
                                                                                                        <input id="ctrl-structural_audit_report_date" class="form-control datepicker  datepicker"  required="" value="<?php  echo $data['structural_audit_report_date']; ?>" type="datetime" name="structural_audit_report_date" placeholder="Enter Structural Audit Report Date" data-enable-time="false" data-min-date="" data-max-date="<?php echo date_now(); ?>" data-date-format="Y-m-d" data-alt-format="F j, Y" data-inline="false" data-no-calendar="false" data-mode="single" />
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
                                                                                                        <label class="control-label" for="structural_audit_agency_name">STRUCTURAL AUDIT AGENCY NAME  <span class="text-danger">*</span></label>
                                                                                                    </div>
                                                                                                    <div class="col-sm-8">
                                                                                                        <div class="">
                                                                                                            <input id="ctrl-structural_audit_agency_name"  value="<?php  echo $data['structural_audit_agency_name']; ?>" type="text" placeholder="Enter Structural Audit Agency Name"  required="" name="structural_audit_agency_name"  class="form-control " />
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="form-group ">
                                                                                                    <div class="row">
                                                                                                        <div class="col-sm-4">
                                                                                                            <label class="control-label" for="structural_audit_agency_address">STRUCTURAL AUDIT AGENCY ADDRESS  <span class="text-danger">*</span></label>
                                                                                                        </div>
                                                                                                        <div class="col-sm-8">
                                                                                                            <div class="">
                                                                                                                <input id="ctrl-structural_audit_agency_address"  value="<?php  echo $data['structural_audit_agency_address']; ?>" type="text" placeholder="Enter Structural Audit Agency Address"  required="" name="structural_audit_agency_address"  class="form-control " />
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form-group ">
                                                                                                        <div class="row">
                                                                                                            <div class="col-sm-4">
                                                                                                                <label class="control-label" for="structural_audit_agency_mobile_no">STRUCTURAL AUDIT AGENCY MOBILE NO.  <span class="text-danger">*</span></label>
                                                                                                            </div>
                                                                                                            <div class="col-sm-8">
                                                                                                                <div class="">
                                                                                                                    <input id="ctrl-structural_audit_agency_mobile_no"  value="<?php  echo $data['structural_audit_agency_mobile_no']; ?>" type="number" placeholder="Enter Structural Audit Agency Mobile No" step="1"  required="" name="structural_audit_agency_mobile_no"  class="form-control " />
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="form-group ">
                                                                                                            <div class="row">
                                                                                                                <div class="col-sm-4">
                                                                                                                    <label class="control-label" for="permissions_obtained_for_the_business">PERMISSIONS OBTAINED  <span class="text-danger">*</span></label>
                                                                                                                </div>
                                                                                                                <div class="col-sm-8">
                                                                                                                    <div class="">
                                                                                                                        <input id="ctrl-permissions_obtained_for_the_business"  value="<?php  echo $data['permissions_obtained_for_the_business']; ?>" type="text" placeholder="Enter Permissions Obtained For The Business"  required="" name="permissions_obtained_for_the_business"  class="form-control " />
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="form-group ">
                                                                                                                <div class="row">
                                                                                                                    <div class="col-sm-4">
                                                                                                                        <label class="control-label" for="female_employees_count">FEMALE EMPLOYEES COUNT  <span class="text-danger">*</span></label>
                                                                                                                    </div>
                                                                                                                    <div class="col-sm-8">
                                                                                                                        <div class="">
                                                                                                                            <input id="ctrl-female_employees_count"  value="<?php  echo $data['female_employees_count']; ?>" type="number" placeholder="Enter Female Employees Count" step="1"  required="" name="female_employees_count"  class="form-control " />
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="form-group ">
                                                                                                                    <div class="row">
                                                                                                                        <div class="col-sm-4">
                                                                                                                            <label class="control-label" for="male_employees_count">MALE EMPLOYEES COUNT  <span class="text-danger">*</span></label>
                                                                                                                        </div>
                                                                                                                        <div class="col-sm-8">
                                                                                                                            <div class="">
                                                                                                                                <input id="ctrl-male_employees_count"  value="<?php  echo $data['male_employees_count']; ?>" type="number" placeholder="Enter Male Employees Count" step="1"  required="" name="male_employees_count"  class="form-control " />
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <div class="form-group ">
                                                                                                                        <div class="row">
                                                                                                                            <div class="col-sm-4">
                                                                                                                                <label class="control-label" for="total_employees_count">TOTAL EMPLOYEES COUNT  <span class="text-danger">*</span></label>
                                                                                                                            </div>
                                                                                                                            <div class="col-sm-8">
                                                                                                                                <div class="">
                                                                                                                                    <input id="ctrl-total_employees_count"  value="<?php  echo $data['total_employees_count']; ?>" type="number" placeholder="Enter Total Employees Count" step="1"  required="" name="total_employees_count"  class="form-control " />
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="form-group ">
                                                                                                                            <div class="row">
                                                                                                                                <div class="col-sm-4">
                                                                                                                                    <label class="control-label" for="working_hours_at_business_premises">WORKING HOURS  <span class="text-danger">*</span></label>
                                                                                                                                </div>
                                                                                                                                <div class="col-sm-8">
                                                                                                                                    <div class="">
                                                                                                                                        <input id="ctrl-working_hours_at_business_premises"  value="<?php  echo $data['working_hours_at_business_premises']; ?>" type="text" placeholder="Enter Working Hours At Business Premises"  required="" name="working_hours_at_business_premises"  class="form-control " />
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <div class="form-group ">
                                                                                                                                <div class="row">
                                                                                                                                    <div class="col-sm-4">
                                                                                                                                        <label class="control-label" for="natural_ventilation_total_windows">No. of Natural Ventilation Total Windows <span class="text-danger">*</span></label>
                                                                                                                                    </div>
                                                                                                                                    <div class="col-sm-8">
                                                                                                                                        <div class="">
                                                                                                                                            <input id="ctrl-natural_ventilation_total_windows"  value="<?php  echo $data['natural_ventilation_total_windows']; ?>" type="number" placeholder="Enter No. of Natural Ventilation Total Windows" step="1"  required="" name="natural_ventilation_total_windows"  class="form-control " />
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <div class="form-group ">
                                                                                                                                    <div class="row">
                                                                                                                                        <div class="col-sm-4">
                                                                                                                                            <label class="control-label" for="natural_ventilation_total_doors">No. of Natural Ventilation Total Doors <span class="text-danger">*</span></label>
                                                                                                                                        </div>
                                                                                                                                        <div class="col-sm-8">
                                                                                                                                            <div class="">
                                                                                                                                                <input id="ctrl-natural_ventilation_total_doors"  value="<?php  echo $data['natural_ventilation_total_doors']; ?>" type="number" placeholder="Enter No. of Natural Ventilation Total Doors" step="1"  required="" name="natural_ventilation_total_doors"  class="form-control " />
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    <div class="form-group ">
                                                                                                                                        <div class="row">
                                                                                                                                            <div class="col-sm-4">
                                                                                                                                                <label class="control-label" for="area_of_business_premises">AREA OF BUSINESS PREMISES  <span class="text-danger">*</span></label>
                                                                                                                                            </div>
                                                                                                                                            <div class="col-sm-8">
                                                                                                                                                <div class="">
                                                                                                                                                    <input id="ctrl-area_of_business_premises"  value="<?php  echo $data['area_of_business_premises']; ?>" type="text" placeholder="Enter Area Of Business Premises"  required="" name="area_of_business_premises"  class="form-control " />
                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                        <div class="form-group ">
                                                                                                                                            <div class="row">
                                                                                                                                                <div class="col-sm-4">
                                                                                                                                                    <label class="control-label" for="entrance_route_premises">ENTRANCE ROUTE  <span class="text-danger">*</span></label>
                                                                                                                                                </div>
                                                                                                                                                <div class="col-sm-8">
                                                                                                                                                    <div class="">
                                                                                                                                                        <input id="ctrl-entrance_route_premises"  value="<?php  echo $data['entrance_route_premises']; ?>" type="text" placeholder="Enter Entrance Route Premises"  required="" name="entrance_route_premises"  class="form-control " />
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                            <div class="form-group ">
                                                                                                                                                <div class="row">
                                                                                                                                                    <div class="col-sm-4">
                                                                                                                                                        <label class="control-label" for="exit_route_premises">EXIT ROUTE  <span class="text-danger">*</span></label>
                                                                                                                                                    </div>
                                                                                                                                                    <div class="col-sm-8">
                                                                                                                                                        <div class="">
                                                                                                                                                            <input id="ctrl-exit_route_premises"  value="<?php  echo $data['exit_route_premises']; ?>" type="text" placeholder="Enter Exit Route Premises"  required="" name="exit_route_premises"  class="form-control " />
                                                                                                                                                            </div>
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                                <div class="form-group ">
                                                                                                                                                    <div class="row">
                                                                                                                                                        <div class="col-sm-4">
                                                                                                                                                            <label class="control-label" for="record_room">RECORD ROOM  <span class="text-danger">*</span></label>
                                                                                                                                                        </div>
                                                                                                                                                        <div class="col-sm-8">
                                                                                                                                                            <div class="">
                                                                                                                                                                <input id="ctrl-record_room"  value="<?php  echo $data['record_room']; ?>" type="text" placeholder="Enter Record Room"  required="" name="record_room"  class="form-control " />
                                                                                                                                                                </div>
                                                                                                                                                            </div>
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                    <div class="form-group ">
                                                                                                                                                        <div class="row">
                                                                                                                                                            <div class="col-sm-4">
                                                                                                                                                                <label class="control-label" for="water_storage_capacity_terrace">WATER STORAGE (TERRACE)  <span class="text-danger">*</span></label>
                                                                                                                                                            </div>
                                                                                                                                                            <div class="col-sm-8">
                                                                                                                                                                <div class="">
                                                                                                                                                                    <input id="ctrl-water_storage_capacity_terrace"  value="<?php  echo $data['water_storage_capacity_terrace']; ?>" type="number" placeholder="Enter Water Storage Capacity Terrace" step="1"  required="" name="water_storage_capacity_terrace"  class="form-control " />
                                                                                                                                                                    </div>
                                                                                                                                                                </div>
                                                                                                                                                            </div>
                                                                                                                                                        </div>
                                                                                                                                                        <div class="form-group ">
                                                                                                                                                            <div class="row">
                                                                                                                                                                <div class="col-sm-4">
                                                                                                                                                                    <label class="control-label" for="water_storage_capacity_groundfloor">WATER STORAGE (GROUND FLOOR)  <span class="text-danger">*</span></label>
                                                                                                                                                                </div>
                                                                                                                                                                <div class="col-sm-8">
                                                                                                                                                                    <div class="">
                                                                                                                                                                        <input id="ctrl-water_storage_capacity_groundfloor"  value="<?php  echo $data['water_storage_capacity_groundfloor']; ?>" type="number" placeholder="Enter Water Storage Capacity Groundfloor" step="1"  required="" name="water_storage_capacity_groundfloor"  class="form-control " />
                                                                                                                                                                        </div>
                                                                                                                                                                    </div>
                                                                                                                                                                </div>
                                                                                                                                                            </div>
                                                                                                                                                            <div class="form-group ">
                                                                                                                                                                <div class="row">
                                                                                                                                                                    <div class="col-sm-4">
                                                                                                                                                                        <label class="control-label" for="no_lifts_in_the_building">No. of Lifts In The Building <span class="text-danger">*</span></label>
                                                                                                                                                                    </div>
                                                                                                                                                                    <div class="col-sm-8">
                                                                                                                                                                        <div class="">
                                                                                                                                                                            <input id="ctrl-no_lifts_in_the_building"  value="<?php  echo $data['no_lifts_in_the_building']; ?>" type="number" placeholder="Enter No. of Lifts In The Building" step="1"  required="" name="no_lifts_in_the_building"  class="form-control " />
                                                                                                                                                                            </div>
                                                                                                                                                                        </div>
                                                                                                                                                                    </div>
                                                                                                                                                                </div>
                                                                                                                                                                <div class="form-group ">
                                                                                                                                                                    <div class="row">
                                                                                                                                                                        <div class="col-sm-4">
                                                                                                                                                                            <label class="control-label" for="capacity_lifts_in_the_building">LIFT CAPACITY  <span class="text-danger">*</span></label>
                                                                                                                                                                        </div>
                                                                                                                                                                        <div class="col-sm-8">
                                                                                                                                                                            <div class="">
                                                                                                                                                                                <input id="ctrl-capacity_lifts_in_the_building"  value="<?php  echo $data['capacity_lifts_in_the_building']; ?>" type="text" placeholder="Enter Capacity Lifts In The Building"  required="" name="capacity_lifts_in_the_building"  class="form-control " />
                                                                                                                                                                                </div>
                                                                                                                                                                            </div>
                                                                                                                                                                        </div>
                                                                                                                                                                    </div>
                                                                                                                                                                    <div class="form-group ">
                                                                                                                                                                        <div class="row">
                                                                                                                                                                            <div class="col-sm-4">
                                                                                                                                                                                <label class="control-label" for="electrical_connection_capacity">ELECTRICAL CONNECTION CAPACITY  <span class="text-danger">*</span></label>
                                                                                                                                                                            </div>
                                                                                                                                                                            <div class="col-sm-8">
                                                                                                                                                                                <div class="">
                                                                                                                                                                                    <input id="ctrl-electrical_connection_capacity"  value="<?php  echo $data['electrical_connection_capacity']; ?>" type="text" placeholder="Enter Electrical Connection Capacity"  required="" name="electrical_connection_capacity"  class="form-control " />
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
                                                                                                                                                                                        <label class="control-label" for="electrical_audit_agency_name">ELECTRICAL AUDIT AGENCY NAME  <span class="text-danger">*</span></label>
                                                                                                                                                                                    </div>
                                                                                                                                                                                    <div class="col-sm-8">
                                                                                                                                                                                        <div class="">
                                                                                                                                                                                            <input id="ctrl-electrical_audit_agency_name"  value="<?php  echo $data['electrical_audit_agency_name']; ?>" type="text" placeholder="Enter Electrical Audit Agency Name"  required="" name="electrical_audit_agency_name"  class="form-control " />
                                                                                                                                                                                            </div>
                                                                                                                                                                                        </div>
                                                                                                                                                                                    </div>
                                                                                                                                                                                </div>
                                                                                                                                                                                <div class="form-group ">
                                                                                                                                                                                    <div class="row">
                                                                                                                                                                                        <div class="col-sm-4">
                                                                                                                                                                                            <label class="control-label" for="electrical_audit_agency_address">ELECTRICAL AUDIT AGENCY ADDRESS  <span class="text-danger">*</span></label>
                                                                                                                                                                                        </div>
                                                                                                                                                                                        <div class="col-sm-8">
                                                                                                                                                                                            <div class="">
                                                                                                                                                                                                <input id="ctrl-electrical_audit_agency_address"  value="<?php  echo $data['electrical_audit_agency_address']; ?>" type="text" placeholder="Enter Electrical Audit Agency Address"  required="" name="electrical_audit_agency_address"  class="form-control " />
                                                                                                                                                                                                </div>
                                                                                                                                                                                            </div>
                                                                                                                                                                                        </div>
                                                                                                                                                                                    </div>
                                                                                                                                                                                    <div class="form-group ">
                                                                                                                                                                                        <div class="row">
                                                                                                                                                                                            <div class="col-sm-4">
                                                                                                                                                                                                <label class="control-label" for="electrical_audit_agency_mobile_no">ELECTRICAL AUDIT AGENCY MOBILE NO.  <span class="text-danger">*</span></label>
                                                                                                                                                                                            </div>
                                                                                                                                                                                            <div class="col-sm-8">
                                                                                                                                                                                                <div class="">
                                                                                                                                                                                                    <input id="ctrl-electrical_audit_agency_mobile_no"  value="<?php  echo $data['electrical_audit_agency_mobile_no']; ?>" type="number" placeholder="Enter Electrical Audit Agency Mobile No" step="1"  required="" name="electrical_audit_agency_mobile_no"  class="form-control " />
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                </div>
                                                                                                                                                                                            </div>
                                                                                                                                                                                        </div>
                                                                                                                                                                                        <div class="form-group ">
                                                                                                                                                                                            <div class="row">
                                                                                                                                                                                                <div class="col-sm-4">
                                                                                                                                                                                                    <label class="control-label" for="generator_system">GENERATOR SYSTEM  <span class="text-danger">*</span></label>
                                                                                                                                                                                                </div>
                                                                                                                                                                                                <div class="col-sm-8">
                                                                                                                                                                                                    <div class="">
                                                                                                                                                                                                        <input id="ctrl-generator_system"  value="<?php  echo $data['generator_system']; ?>" type="text" placeholder="Enter Generator System"  required="" name="generator_system"  class="form-control " />
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                </div>
                                                                                                                                                                                            </div>
                                                                                                                                                                                            <div class="form-group ">
                                                                                                                                                                                                <div class="row">
                                                                                                                                                                                                    <div class="col-sm-4">
                                                                                                                                                                                                        <label class="control-label" for="raw_material_name">RAW MATERIAL NAME  <span class="text-danger">*</span></label>
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                    <div class="col-sm-8">
                                                                                                                                                                                                        <div class="">
                                                                                                                                                                                                            <input id="ctrl-raw_material_name"  value="<?php  echo $data['raw_material_name']; ?>" type="text" placeholder="Enter Raw Material Name"  required="" name="raw_material_name"  class="form-control " />
                                                                                                                                                                                                            </div>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                </div>
                                                                                                                                                                                                <div class="form-group ">
                                                                                                                                                                                                    <div class="row">
                                                                                                                                                                                                        <div class="col-sm-4">
                                                                                                                                                                                                            <label class="control-label" for="raw_material_storage_capacity">RAW MATERIAL STORAGE CAPACITY  <span class="text-danger">*</span></label>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                        <div class="col-sm-8">
                                                                                                                                                                                                            <div class="">
                                                                                                                                                                                                                <input id="ctrl-raw_material_storage_capacity"  value="<?php  echo $data['raw_material_storage_capacity']; ?>" type="text" placeholder="Enter Raw Material Storage Capacity"  required="" name="raw_material_storage_capacity"  class="form-control " />
                                                                                                                                                                                                                </div>
                                                                                                                                                                                                            </div>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                    <div class="form-group ">
                                                                                                                                                                                                        <div class="row">
                                                                                                                                                                                                            <div class="col-sm-4">
                                                                                                                                                                                                                <label class="control-label" for="no_of_lpg_gas_cylinders">NO. OF LPG CYLINDERS  <span class="text-danger">*</span></label>
                                                                                                                                                                                                            </div>
                                                                                                                                                                                                            <div class="col-sm-8">
                                                                                                                                                                                                                <div class="">
                                                                                                                                                                                                                    <input id="ctrl-no_of_lpg_gas_cylinders"  value="<?php  echo $data['no_of_lpg_gas_cylinders']; ?>" type="number" placeholder="Enter No Of Lpg Gas Cylinders" step="1"  required="" name="no_of_lpg_gas_cylinders"  class="form-control " />
                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                </div>
                                                                                                                                                                                                            </div>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                        <div class="form-group ">
                                                                                                                                                                                                            <div class="row">
                                                                                                                                                                                                                <div class="col-sm-4">
                                                                                                                                                                                                                    <label class="control-label" for="name_of_final_product">FINAL PRODUCT NAME  <span class="text-danger">*</span></label>
                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                <div class="col-sm-8">
                                                                                                                                                                                                                    <div class="">
                                                                                                                                                                                                                        <input id="ctrl-name_of_final_product"  value="<?php  echo $data['name_of_final_product']; ?>" type="text" placeholder="Enter Name Of Final Product"  required="" name="name_of_final_product"  class="form-control " />
                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                </div>
                                                                                                                                                                                                            </div>
                                                                                                                                                                                                            <div class="form-group ">
                                                                                                                                                                                                                <div class="row">
                                                                                                                                                                                                                    <div class="col-sm-4">
                                                                                                                                                                                                                        <label class="control-label" for="storage_capacity_of_final_product">FINAL PRODUCT STORAGE CAPACITY  <span class="text-danger">*</span></label>
                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                    <div class="col-sm-8">
                                                                                                                                                                                                                        <div class="">
                                                                                                                                                                                                                            <input id="ctrl-storage_capacity_of_final_product"  value="<?php  echo $data['storage_capacity_of_final_product']; ?>" type="text" placeholder="Enter Storage Capacity Of Final Product"  required="" name="storage_capacity_of_final_product"  class="form-control " />
                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                <div class="form-group ">
                                                                                                                                                                                                                    <div class="row">
                                                                                                                                                                                                                        <div class="col-sm-4">
                                                                                                                                                                                                                            <label class="control-label" for="fire_extinguishing_permanent">FIRE EXTINGUISHING (PERMANENT)  <span class="text-danger">*</span></label>
                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                        <div class="col-sm-8">
                                                                                                                                                                                                                            <div class="">
                                                                                                                                                                                                                                <input id="ctrl-fire_extinguishing_permanent"  value="<?php  echo $data['fire_extinguishing_permanent']; ?>" type="text" placeholder="Enter Fire Extinguishing Permanent"  required="" name="fire_extinguishing_permanent"  class="form-control " />
                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                    <div class="form-group ">
                                                                                                                                                                                                                        <div class="row">
                                                                                                                                                                                                                            <div class="col-sm-4">
                                                                                                                                                                                                                                <label class="control-label" for="fire_extinguishing_temporary">FIRE EXTINGUISHING (TEMPORARY)  <span class="text-danger">*</span></label>
                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                            <div class="col-sm-8">
                                                                                                                                                                                                                                <div class="">
                                                                                                                                                                                                                                    <input id="ctrl-fire_extinguishing_temporary"  value="<?php  echo $data['fire_extinguishing_temporary']; ?>" type="text" placeholder="Enter Fire Extinguishing Temporary"  required="" name="fire_extinguishing_temporary"  class="form-control " />
                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                        <div class="form-group ">
                                                                                                                                                                                                                            <div class="row">
                                                                                                                                                                                                                                <div class="col-sm-4">
                                                                                                                                                                                                                                    <label class="control-label" for="extinguishing_license_agency_name">FIRE LICENSE AGENCY NAME  <span class="text-danger">*</span></label>
                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                <div class="col-sm-8">
                                                                                                                                                                                                                                    <div class="">
                                                                                                                                                                                                                                        <input id="ctrl-extinguishing_license_agency_name"  value="<?php  echo $data['extinguishing_license_agency_name']; ?>" type="text" placeholder="Enter Extinguishing License Agency Name"  required="" name="extinguishing_license_agency_name"  class="form-control " />
                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                            <div class="form-group ">
                                                                                                                                                                                                                                <div class="row">
                                                                                                                                                                                                                                    <div class="col-sm-4">
                                                                                                                                                                                                                                        <label class="control-label" for="extinguishing_license_agency_lno">LICENSE NO.  <span class="text-danger">*</span></label>
                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                    <div class="col-sm-8">
                                                                                                                                                                                                                                        <div class="">
                                                                                                                                                                                                                                            <input id="ctrl-extinguishing_license_agency_lno"  value="<?php  echo $data['extinguishing_license_agency_lno']; ?>" type="text" placeholder="Enter Extinguishing License Agency Lno"  required="" name="extinguishing_license_agency_lno"  class="form-control " />
                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                <div class="form-group ">
                                                                                                                                                                                                                                    <div class="row">
                                                                                                                                                                                                                                        <div class="col-sm-4">
                                                                                                                                                                                                                                            <label class="control-label" for="extinguishing_license_agency_lvalidity">LICENSE VALIDITY  <span class="text-danger">*</span></label>
                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                        <div class="col-sm-8">
                                                                                                                                                                                                                                            <div class="input-group">
                                                                                                                                                                                                                                                <input id="ctrl-extinguishing_license_agency_lvalidity" class="form-control datepicker  datepicker"  required="" value="<?php  echo $data['extinguishing_license_agency_lvalidity']; ?>" type="datetime" name="extinguishing_license_agency_lvalidity" placeholder="Enter Extinguishing License Agency Lvalidity" data-enable-time="false" data-min-date="" data-max-date="" data-date-format="Y-m-d" data-alt-format="F j, Y" data-inline="false" data-no-calendar="false" data-mode="single" />
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
                                                                                                                                                                                                                                                <label class="control-label" for="extinguishing_licen_agency_cert_no">CERTIFICATE NO.  <span class="text-danger">*</span></label>
                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                            <div class="col-sm-8">
                                                                                                                                                                                                                                                <div class="">
                                                                                                                                                                                                                                                    <input id="ctrl-extinguishing_licen_agency_cert_no"  value="<?php  echo $data['extinguishing_licen_agency_cert_no']; ?>" type="text" placeholder="Enter Extinguishing Licen Agency Cert No"  required="" name="extinguishing_licen_agency_cert_no"  class="form-control " />
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
