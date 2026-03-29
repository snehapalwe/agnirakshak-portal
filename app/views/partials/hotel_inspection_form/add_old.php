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
                    <h4 class="record-title"><strong style='color: black;'>Hotel Inspection  / हॉटेल पाहणी</strong></h4>
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
                        <form id="hotel_inspection_form-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-vertical needs-validation" action="<?php print_link("hotel_inspection_form/add?csrf_token=$csrf_token") ?>" method="post">
                            <div>
                                <input id="ctrl-recid"  value="<?php  echo $this->set_field_value('recid',"0"); ?>" type="hidden" placeholder="Enter Recid"  required="" name="recid"  class="form-control " />
                                    <div class="form-group ">
                                        <label class="control-label" for="hotel_name">HOTEL NAME  <span class="text-danger">*</span></label>
                                        <div id="ctrl-hotel_name-holder" class=""> 
                                            <input id="ctrl-hotel_name"  value="<?php  echo $this->set_field_value('hotel_name',""); ?>" type="text" placeholder="Enter Hotel Name"  required="" name="hotel_name"  class="form-control " />
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label class="control-label" for="hotel_address">HOTEL ADDRESS  <span class="text-danger">*</span></label>
                                            <div id="ctrl-hotel_address-holder" class=""> 
                                                <input id="ctrl-hotel_address"  value="<?php  echo $this->set_field_value('hotel_address',""); ?>" type="text" placeholder="Enter Hotel Address"  required="" name="hotel_address"  class="form-control " />
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <label class="control-label" for="owners_name">OWNERS NAME  <span class="text-danger">*</span></label>
                                                <div id="ctrl-owners_name-holder" class=""> 
                                                    <input id="ctrl-owners_name"  value="<?php  echo $this->set_field_value('owners_name',""); ?>" type="text" placeholder="Enter Owners Name"  required="" name="owners_name"  class="form-control " />
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label class="control-label" for="mobile_no">MOBILE NO.  <span class="text-danger">*</span></label>
                                                    <div id="ctrl-mobile_no-holder" class=""> 
                                                        <input id="ctrl-mobile_no"  value="<?php  echo $this->set_field_value('mobile_no',""); ?>" type="text" placeholder="Enter Mobile No"  required="" name="mobile_no"  class="form-control " />
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <label class="control-label" for="type_of_application_id">TYPE OF APPLICATION   <span class="text-danger">*</span></label>
                                                        <div id="ctrl-type_of_application_id-holder" class=""> 
                                                            <select required=""  id="ctrl-type_of_application_id" name="type_of_application_id"  placeholder="Select a value ..."    class="custom-select" >
                                                                <option value="">Select a value ...</option>
                                                                <?php 
                                                                $type_of_application_id_options = $comp_model -> hotel_inspection_form_type_of_application_id_option_list();
                                                                if(!empty($type_of_application_id_options)){
                                                                foreach($type_of_application_id_options as $option){
                                                                $value = (!empty($option['value']) ? $option['value'] : null);
                                                                $label = (!empty($option['label']) ? $option['label'] : $value);
                                                                $selected = $this->set_field_selected('type_of_application_id',$value, "");
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
                                                        <label class="control-label" for="old_noc_number">OLD NOC NUMBER  </label>
                                                        <div id="ctrl-old_noc_number-holder" class=""> 
                                                            <input id="ctrl-old_noc_number"  value="<?php  echo $this->set_field_value('old_noc_number',""); ?>" type="text" placeholder="Enter Old Noc Number"  name="old_noc_number"  class="form-control " />
                                                            </div>
                                                        </div>
                                                        <div class="form-group ">
                                                            <label class="control-label" for="old_noc_date">OLD NOC DATE  </label>
                                                            <div id="ctrl-old_noc_date-holder" class="input-group"> 
                                                                <input id="ctrl-old_noc_date" class="form-control datepicker  datepicker"  value="<?php  echo $this->set_field_value('old_noc_date',""); ?>" type="datetime" name="old_noc_date" placeholder="Enter Old Noc Date" data-enable-time="false" data-min-date="" data-max-date="<?php echo date_now(); ?>" data-date-format="Y-m-d" data-alt-format="F j, Y" data-inline="false" data-no-calendar="false" data-mode="single" />
                                                                    <div class="input-group-append">
                                                                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group ">
                                                                <label class="control-label" for="building_height">BUILDING HEIGHT  <span class="text-danger">*</span></label>
                                                                <div id="ctrl-building_height-holder" class=""> 
                                                                    <input id="ctrl-building_height"  value="<?php  echo $this->set_field_value('building_height',""); ?>" type="text" placeholder="Enter Building Height"  required="" name="building_height"  class="form-control " />
                                                                    </div>
                                                                </div>
                                                                <div class="form-group ">
                                                                    <label class="control-label" for="building_floor">NUMBER OF FLOORS  <span class="text-danger">*</span></label>
                                                                    <div id="ctrl-building_floor-holder" class=""> 
                                                                        <input id="ctrl-building_floor"  value="<?php  echo $this->set_field_value('building_floor',""); ?>" type="text" placeholder="Enter Building Floor"  required="" name="building_floor"  class="form-control " />
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group ">
                                                                        <label class="control-label" for="no_n_width_stairs_one">No. & Width Stairs One <span class="text-danger">*</span></label>
                                                                        <div id="ctrl-no_n_width_stairs_one-holder" class=""> 
                                                                            <input id="ctrl-no_n_width_stairs_one"  value="<?php  echo $this->set_field_value('no_n_width_stairs_one',""); ?>" type="text" placeholder="Enter No. & Width Stairs One"  required="" name="no_n_width_stairs_one"  class="form-control " />
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group ">
                                                                            <label class="control-label" for="no_n_width_stairs_two">No. & Width Stairs Two <span class="text-danger">*</span></label>
                                                                            <div id="ctrl-no_n_width_stairs_two-holder" class=""> 
                                                                                <input id="ctrl-no_n_width_stairs_two"  value="<?php  echo $this->set_field_value('no_n_width_stairs_two',""); ?>" type="text" placeholder="Enter No. & Width Stairs Two"  required="" name="no_n_width_stairs_two"  class="form-control " />
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group ">
                                                                                <label class="control-label" for="no_n_width_stairs_three">No. & Width Stairs Three <span class="text-danger">*</span></label>
                                                                                <div id="ctrl-no_n_width_stairs_three-holder" class=""> 
                                                                                    <input id="ctrl-no_n_width_stairs_three"  value="<?php  echo $this->set_field_value('no_n_width_stairs_three',""); ?>" type="text" placeholder="Enter No. & Width Stairs Three"  required="" name="no_n_width_stairs_three"  class="form-control " />
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group ">
                                                                                    <label class="control-label" for="no_lifts_in_the_building">No. & Lifts In The Building <span class="text-danger">*</span></label>
                                                                                    <div id="ctrl-no_lifts_in_the_building-holder" class=""> 
                                                                                        <input id="ctrl-no_lifts_in_the_building"  value="<?php  echo $this->set_field_value('no_lifts_in_the_building',""); ?>" type="text" placeholder="Enter No. & Lifts In The Building"  required="" name="no_lifts_in_the_building"  class="form-control " />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group ">
                                                                                        <label class="control-label" for="no_entrance_routes">No. of Entrance Routes <span class="text-danger">*</span></label>
                                                                                        <div id="ctrl-no_entrance_routes-holder" class=""> 
                                                                                            <input id="ctrl-no_entrance_routes"  value="<?php  echo $this->set_field_value('no_entrance_routes',""); ?>" type="text" placeholder="Enter No. of Entrance Routes"  required="" name="no_entrance_routes"  class="form-control " />
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group ">
                                                                                            <label class="control-label" for="no_exit_routes">No. of Exit Routes <span class="text-danger">*</span></label>
                                                                                            <div id="ctrl-no_exit_routes-holder" class=""> 
                                                                                                <input id="ctrl-no_exit_routes"  value="<?php  echo $this->set_field_value('no_exit_routes',""); ?>" type="text" placeholder="Enter No. of Exit Routes"  required="" name="no_exit_routes"  class="form-control " />
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group ">
                                                                                                <label class="control-label" for="store_room_id">Store Room  <span class="text-danger">*</span></label>
                                                                                                <div id="ctrl-store_room_id-holder" class=""> 
                                                                                                    <select required=""  id="ctrl-store_room_id" name="store_room_id"  placeholder="Select a value ..."    class="custom-select" >
                                                                                                        <option value="">Select a value ...</option>
                                                                                                        <?php
                                                                                                        $store_room_id_options = Menu :: $is_redevelopment;
                                                                                                        if(!empty($store_room_id_options)){
                                                                                                        foreach($store_room_id_options as $option){
                                                                                                        $value = $option['value'];
                                                                                                        $label = $option['label'];
                                                                                                        $selected = $this->set_field_selected('store_room_id', $value, "");
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
                                                                                                <label class="control-label" for="natural_ventilation_windows">Number of Natural Ventilation Windows <span class="text-danger">*</span></label>
                                                                                                <div id="ctrl-natural_ventilation_windows-holder" class=""> 
                                                                                                    <input id="ctrl-natural_ventilation_windows"  value="<?php  echo $this->set_field_value('natural_ventilation_windows',""); ?>" type="text" placeholder="Enter Number of Natural Ventilation Windows"  required="" name="natural_ventilation_windows"  class="form-control " />
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="form-group ">
                                                                                                    <label class="control-label" for="area">Area (Sq. Mtr) <span class="text-danger">*</span></label>
                                                                                                    <div id="ctrl-area-holder" class=""> 
                                                                                                        <input id="ctrl-area"  value="<?php  echo $this->set_field_value('area',""); ?>" type="text" placeholder="Enter Area (Sq. Mtr)"  required="" name="area"  class="form-control " />
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form-group ">
                                                                                                        <label class="control-label" for="no_employees_female">No. of Female Employees  <span class="text-danger">*</span></label>
                                                                                                        <div id="ctrl-no_employees_female-holder" class=""> 
                                                                                                            <input id="ctrl-no_employees_female"  value="<?php  echo $this->set_field_value('no_employees_female',""); ?>" type="number" placeholder="Enter No. of Female Employees " step="1"  required="" name="no_employees_female"  class="form-control " />
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="form-group ">
                                                                                                            <label class="control-label" for="no_employees_male">No. of Male Employees  <span class="text-danger">*</span></label>
                                                                                                            <div id="ctrl-no_employees_male-holder" class=""> 
                                                                                                                <input id="ctrl-no_employees_male"  value="<?php  echo $this->set_field_value('no_employees_male',""); ?>" type="number" placeholder="Enter No. of Male Employees " step="1"  required="" name="no_employees_male"  class="form-control " />
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="form-group ">
                                                                                                                <label class="control-label" for="no_employees_total">No. of Total Employees  <span class="text-danger">*</span></label>
                                                                                                                <div id="ctrl-no_employees_total-holder" class=""> 
                                                                                                                    <input id="ctrl-no_employees_total"  value="<?php  echo $this->set_field_value('no_employees_total',""); ?>" type="number" placeholder="Enter No. of Total Employees " step="1"  required="" name="no_employees_total"  class="form-control " />
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="form-group ">
                                                                                                                    <label class="control-label" for="working_hours">WORKING HOURS  <span class="text-danger">*</span></label>
                                                                                                                    <div id="ctrl-working_hours-holder" class=""> 
                                                                                                                        <input id="ctrl-working_hours"  value="<?php  echo $this->set_field_value('working_hours',""); ?>" type="text" placeholder="Enter Working Hours"  required="" name="working_hours"  class="form-control " />
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <div class="form-group ">
                                                                                                                        <label class="control-label" for="floor_number_of_hotel">FLOOR NUMBER OF HOTEL  <span class="text-danger">*</span></label>
                                                                                                                        <div id="ctrl-floor_number_of_hotel-holder" class=""> 
                                                                                                                            <input id="ctrl-floor_number_of_hotel"  value="<?php  echo $this->set_field_value('floor_number_of_hotel',""); ?>" type="text" placeholder="Enter Floor Number Of Hotel"  required="" name="floor_number_of_hotel"  class="form-control " />
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="form-group ">
                                                                                                                            <label class="control-label" for="is_directional_board_available">IS DIRECTIONAL BOARD AVAILABLE?  <span class="text-danger">*</span></label>
                                                                                                                            <div id="ctrl-is_directional_board_available-holder" class=""> 
                                                                                                                                <select required=""  id="ctrl-is_directional_board_available" name="is_directional_board_available"  placeholder="Select a value ..."    class="custom-select" >
                                                                                                                                    <option value="">Select a value ...</option>
                                                                                                                                    <?php
                                                                                                                                    $is_directional_board_available_options = Menu :: $is_redevelopment;
                                                                                                                                    if(!empty($is_directional_board_available_options)){
                                                                                                                                    foreach($is_directional_board_available_options as $option){
                                                                                                                                    $value = $option['value'];
                                                                                                                                    $label = $option['label'];
                                                                                                                                    $selected = $this->set_field_selected('is_directional_board_available', $value, "");
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
                                                                                                                            <label class="control-label" for="hotel_departments">HOTEL DEPARTMENTS  <span class="text-danger">*</span></label>
                                                                                                                            <div id="ctrl-hotel_departments-holder" class=""> 
                                                                                                                                <input id="ctrl-hotel_departments"  value="<?php  echo $this->set_field_value('hotel_departments',""); ?>" type="text" placeholder="Enter Hotel Departments"  required="" name="hotel_departments"  class="form-control " />
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <div class="form-group ">
                                                                                                                                <label class="control-label" for="table_quantity">TABLE QUANTITY  <span class="text-danger">*</span></label>
                                                                                                                                <div id="ctrl-table_quantity-holder" class=""> 
                                                                                                                                    <input id="ctrl-table_quantity"  value="<?php  echo $this->set_field_value('table_quantity',""); ?>" type="number" placeholder="Enter Table Quantity" step="1"  required="" name="table_quantity"  class="form-control " />
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <div class="form-group ">
                                                                                                                                    <label class="control-label" for="chair_quantity">CHAIR QUANTITY  <span class="text-danger">*</span></label>
                                                                                                                                    <div id="ctrl-chair_quantity-holder" class=""> 
                                                                                                                                        <input id="ctrl-chair_quantity"  value="<?php  echo $this->set_field_value('chair_quantity',""); ?>" type="number" placeholder="Enter Chair Quantity" step="1"  required="" name="chair_quantity"  class="form-control " />
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    <div class="form-group ">
                                                                                                                                        <label class="control-label" for="is_generator_system_available">Is Generator / Inverter System Available  <span class="text-danger">*</span></label>
                                                                                                                                        <div id="ctrl-is_generator_system_available-holder" class=""> 
                                                                                                                                            <select required=""  id="ctrl-is_generator_system_available" name="is_generator_system_available"  placeholder="Select a value ..."    class="custom-select" >
                                                                                                                                                <option value="">Select a value ...</option>
                                                                                                                                                <?php
                                                                                                                                                $is_generator_system_available_options = Menu :: $is_redevelopment;
                                                                                                                                                if(!empty($is_generator_system_available_options)){
                                                                                                                                                foreach($is_generator_system_available_options as $option){
                                                                                                                                                $value = $option['value'];
                                                                                                                                                $label = $option['label'];
                                                                                                                                                $selected = $this->set_field_selected('is_generator_system_available', $value, "");
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
                                                                                                                                        <label class="control-label" for="is_structural_audit_report_avilable_id">STRUCTURAL AUDIT REPORT AVAILABLE   <span class="text-danger">*</span></label>
                                                                                                                                        <div id="ctrl-is_structural_audit_report_avilable_id-holder" class=""> 
                                                                                                                                            <select required=""  id="ctrl-is_structural_audit_report_avilable_id" name="is_structural_audit_report_avilable_id"  placeholder="Select a value ..."    class="custom-select" >
                                                                                                                                                <option value="">Select a value ...</option>
                                                                                                                                                <?php 
                                                                                                                                                $is_structural_audit_report_avilable_id_options = $comp_model -> hotel_inspection_form_is_structural_audit_report_avilable_id_option_list();
                                                                                                                                                if(!empty($is_structural_audit_report_avilable_id_options)){
                                                                                                                                                foreach($is_structural_audit_report_avilable_id_options as $option){
                                                                                                                                                $value = (!empty($option['value']) ? $option['value'] : null);
                                                                                                                                                $label = (!empty($option['label']) ? $option['label'] : $value);
                                                                                                                                                $selected = $this->set_field_selected('is_structural_audit_report_avilable_id',$value, "");
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
                                                                                                                                        <label class="control-label" for="structural_audit_report_date">Structural Audit Report Date <span class='text-danger'>*</span> </label>
                                                                                                                                        <div id="ctrl-structural_audit_report_date-holder" class="input-group"> 
                                                                                                                                            <input id="ctrl-structural_audit_report_date" class="form-control datepicker  datepicker"  value="<?php  echo $this->set_field_value('structural_audit_report_date',""); ?>" type="datetime" name="structural_audit_report_date" placeholder="Enter Structural Audit Report Date " data-enable-time="false" data-min-date="" data-max-date="<?php echo date_now(); ?>" data-date-format="Y-m-d" data-alt-format="F j, Y" data-inline="false" data-no-calendar="false" data-mode="single" />
                                                                                                                                                <div class="input-group-append">
                                                                                                                                                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                        <div class="form-group ">
                                                                                                                                            <label class="control-label" for="is_electrical_audit_report_available_id">ELECTRICAL AUDIT REPORT AVAILABLE ID  <span class="text-danger">*</span></label>
                                                                                                                                            <div id="ctrl-is_electrical_audit_report_available_id-holder" class=""> 
                                                                                                                                                <select required=""  id="ctrl-is_electrical_audit_report_available_id" name="is_electrical_audit_report_available_id"  placeholder="Select a value ..."    class="custom-select" >
                                                                                                                                                    <option value="">Select a value ...</option>
                                                                                                                                                    <?php 
                                                                                                                                                    $is_electrical_audit_report_available_id_options = $comp_model -> hotel_inspection_form_is_electrical_audit_report_available_id_option_list();
                                                                                                                                                    if(!empty($is_electrical_audit_report_available_id_options)){
                                                                                                                                                    foreach($is_electrical_audit_report_available_id_options as $option){
                                                                                                                                                    $value = (!empty($option['value']) ? $option['value'] : null);
                                                                                                                                                    $label = (!empty($option['label']) ? $option['label'] : $value);
                                                                                                                                                    $selected = $this->set_field_selected('is_electrical_audit_report_available_id',$value, "");
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
                                                                                                                                            <label class="control-label" for="electrical_audit_report_date">Electrical Audit Report Date  <span class='text-danger'>*</span> </label>
                                                                                                                                            <div id="ctrl-electrical_audit_report_date-holder" class="input-group"> 
                                                                                                                                                <input id="ctrl-electrical_audit_report_date" class="form-control datepicker  datepicker"  value="<?php  echo $this->set_field_value('electrical_audit_report_date',""); ?>" type="datetime" name="electrical_audit_report_date" placeholder="Enter Electrical Audit Report Date " data-enable-time="false" data-min-date="" data-max-date="<?php echo date_now(); ?>" data-date-format="Y-m-d" data-alt-format="F j, Y" data-inline="false" data-no-calendar="false" data-mode="single" />
                                                                                                                                                    <div class="input-group-append">
                                                                                                                                                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                            <div class="form-group ">
                                                                                                                                                <label class="control-label" for="fire_prevention_measures_information">FIRE PREVENTION MEASURES INFORMATION  <span class="text-danger">*</span></label>
                                                                                                                                                <div id="ctrl-fire_prevention_measures_information-holder" class=""> 
                                                                                                                                                    <input id="ctrl-fire_prevention_measures_information"  value="<?php  echo $this->set_field_value('fire_prevention_measures_information',""); ?>" type="text" placeholder="Enter Fire Prevention Measures Information"  required="" name="fire_prevention_measures_information"  class="form-control " />
                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                                <div class="form-group ">
                                                                                                                                                    <label class="control-label" for="extinguishing_licen_agency_name">EXTINGUISHING LICENSE AGENCY NAME  <span class="text-danger">*</span></label>
                                                                                                                                                    <div id="ctrl-extinguishing_licen_agency_name-holder" class=""> 
                                                                                                                                                        <input id="ctrl-extinguishing_licen_agency_name"  value="<?php  echo $this->set_field_value('extinguishing_licen_agency_name',""); ?>" type="text" placeholder="Enter Extinguishing Licen Agency Name"  required="" name="extinguishing_licen_agency_name"  class="form-control " />
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                    <div class="form-group ">
                                                                                                                                                        <label class="control-label" for="extinguishing_licen_agency_no">EXTINGUISHING LICENSE AGENCY NUMBER  <span class="text-danger">*</span></label>
                                                                                                                                                        <div id="ctrl-extinguishing_licen_agency_no-holder" class=""> 
                                                                                                                                                            <input id="ctrl-extinguishing_licen_agency_no"  value="<?php  echo $this->set_field_value('extinguishing_licen_agency_no',""); ?>" type="text" placeholder="Enter Extinguishing Licen Agency No"  required="" name="extinguishing_licen_agency_no"  class="form-control " />
                                                                                                                                                            </div>
                                                                                                                                                        </div>
                                                                                                                                                        <div class="form-group ">
                                                                                                                                                            <label class="control-label" for="extinguishing_licen_agency_validity">EXTINGUISHING LICENSE VALIDITY  <span class="text-danger">*</span></label>
                                                                                                                                                            <div id="ctrl-extinguishing_licen_agency_validity-holder" class=""> 
                                                                                                                                                                <input id="ctrl-extinguishing_licen_agency_validity"  value="<?php  echo $this->set_field_value('extinguishing_licen_agency_validity',""); ?>" type="text" placeholder="Enter Extinguishing Licen Agency Validity"  required="" name="extinguishing_licen_agency_validity"  class="form-control " />
                                                                                                                                                                </div>
                                                                                                                                                            </div>
                                                                                                                                                            <div class="form-group ">
                                                                                                                                                                <label class="control-label" for="extinguishing_licen_agency_cert_no">EXTINGUISHING LICENSE CERTIFICATE NUMBER  <span class="text-danger">*</span></label>
                                                                                                                                                                <div id="ctrl-extinguishing_licen_agency_cert_no-holder" class=""> 
                                                                                                                                                                    <input id="ctrl-extinguishing_licen_agency_cert_no"  value="<?php  echo $this->set_field_value('extinguishing_licen_agency_cert_no',""); ?>" type="text" placeholder="Enter Extinguishing Licen Agency Cert No"  required="" name="extinguishing_licen_agency_cert_no"  class="form-control " />
                                                                                                                                                                    </div>
                                                                                                                                                                </div>
                                                                                                                                                                <div class="form-group ">
                                                                                                                                                                    <label class="control-label" for="water_storage_capacity_terrace">Water Storage Capacity Terrace (Ltr)  <span class="text-danger">*</span></label>
                                                                                                                                                                    <div id="ctrl-water_storage_capacity_terrace-holder" class=""> 
                                                                                                                                                                        <input id="ctrl-water_storage_capacity_terrace"  value="<?php  echo $this->set_field_value('water_storage_capacity_terrace',""); ?>" type="number" placeholder="Enter Water Storage Capacity Terrace (Ltr) " step="1"  required="" name="water_storage_capacity_terrace"  class="form-control " />
                                                                                                                                                                        </div>
                                                                                                                                                                    </div>
                                                                                                                                                                    <div class="form-group ">
                                                                                                                                                                        <label class="control-label" for="water_storage_capacity_groundfloor">Water Storage Capacity Groundfloor (Ltr)  <span class="text-danger">*</span></label>
                                                                                                                                                                        <div id="ctrl-water_storage_capacity_groundfloor-holder" class=""> 
                                                                                                                                                                            <input id="ctrl-water_storage_capacity_groundfloor"  value="<?php  echo $this->set_field_value('water_storage_capacity_groundfloor',""); ?>" type="number" placeholder="Enter Water Storage Capacity Groundfloor (Ltr) " step="1"  required="" name="water_storage_capacity_groundfloor"  class="form-control " />
                                                                                                                                                                            </div>
                                                                                                                                                                        </div>
                                                                                                                                                                        <div class="form-group ">
                                                                                                                                                                            <label class="control-label" for="gas_bank">GAS BANK  <span class="text-danger">*</span></label>
                                                                                                                                                                            <div id="ctrl-gas_bank-holder" class=""> 
                                                                                                                                                                                <input id="ctrl-gas_bank"  value="<?php  echo $this->set_field_value('gas_bank',""); ?>" type="text" placeholder="Enter Gas Bank"  required="" name="gas_bank"  class="form-control " />
                                                                                                                                                                                </div>
                                                                                                                                                                            </div>
                                                                                                                                                                            <div class="form-group ">
                                                                                                                                                                                <label class="control-label" for="lpg_cylender">LPG CYLINDER  <span class="text-danger">*</span></label>
                                                                                                                                                                                <div id="ctrl-lpg_cylender-holder" class=""> 
                                                                                                                                                                                    <input id="ctrl-lpg_cylender"  value="<?php  echo $this->set_field_value('lpg_cylender',""); ?>" type="text" placeholder="Enter Lpg Cylender"  required="" name="lpg_cylender"  class="form-control " />
                                                                                                                                                                                    </div>
                                                                                                                                                                                </div>
                                                                                                                                                                                <div class="form-group ">
                                                                                                                                                                                    <label class="control-label" for="cng_pipe_line">CNG PIPE LINE  <span class="text-danger">*</span></label>
                                                                                                                                                                                    <div id="ctrl-cng_pipe_line-holder" class=""> 
                                                                                                                                                                                        <input id="ctrl-cng_pipe_line"  value="<?php  echo $this->set_field_value('cng_pipe_line',""); ?>" type="text" placeholder="Enter Cng Pipe Line"  required="" name="cng_pipe_line"  class="form-control " />
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
                                                                                                                                                        <div  class="">
                                                                                                                                                            <div class="container">
                                                                                                                                                                <div class="row ">
                                                                                                                                                                    <div class="col-md-12 comp-grid">
                                                                                                                                                                        <div class=""><script>
                                                                                                                                                                            val=$('#ctrl-recid').val();
                                                                                                                                                                            $.getJSON('<?php echo SITE_ADDR ?>api/getrecdata/'+val,function(json){
                                                                                                                                                                            $('#ctrl-hotel_name').val(json.establishment_name);$('#ctrl-hotel_name').prop('readonly',true);
                                                                                                                                                                            $('#ctrl-hotel_address').val(json.establishment_address);$('#ctrl-hotel_address').prop('readonly',true);
                                                                                                                                                                            $('#ctrl-mobile_no').val(json.mobile_no);$('#ctrl-mobile_no').prop('readonly',true);
                                                                                                                                                                            });
                                                                                                                                                                        </script></div>
                                                                                                                                                                    </div>
                                                                                                                                                                </div>
                                                                                                                                                            </div>
                                                                                                                                                        </div>
                                                                                                                                                    </section>
