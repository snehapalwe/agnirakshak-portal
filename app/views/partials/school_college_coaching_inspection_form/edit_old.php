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
                    <h4 class="record-title">School, College, Coaching Institute Inspection Edit / शाळा, महाविद्यालय, कोचिंग क्लास पाहणी बदल</h4>
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
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-horizontal needs-validation" action="<?php print_link("school_college_coaching_inspection_form/edit/$page_id/?csrf_token=$csrf_token"); ?>" method="post">
                            <div>
                                <input id="ctrl-recid"  value="<?php  echo $data['recid']; ?>" type="hidden" placeholder="Enter Recid"  required="" name="recid"  class="form-control " />
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="institute_name">INSTITUTE NAME  <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input id="ctrl-institute_name"  value="<?php  echo $data['institute_name']; ?>" type="text" placeholder="Enter Institute Name"  required="" name="institute_name"  class="form-control " />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <label class="control-label" for="institute_address">INSTITUTE ADDRESS  <span class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="">
                                                        <input id="ctrl-institute_address"  value="<?php  echo $data['institute_address']; ?>" type="text" placeholder="Enter Institute Address"  required="" name="institute_address"  class="form-control " />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <label class="control-label" for="building_floors">BUILDING FLOORS  <span class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="">
                                                            <input id="ctrl-building_floors"  value="<?php  echo $data['building_floors']; ?>" type="text" placeholder="Enter Building Floors"  required="" name="building_floors"  class="form-control " />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <label class="control-label" for="institute_owners_name">OWNER’S NAME  <span class="text-danger">*</span></label>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <div class="">
                                                                <input id="ctrl-institute_owners_name"  value="<?php  echo $data['institute_owners_name']; ?>" type="text" placeholder="Enter Institute Owners Name"  required="" name="institute_owners_name"  class="form-control " />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <label class="control-label" for="owners_mobile_no">OWNER’S MOBILE NO.  <span class="text-danger">*</span></label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="">
                                                                    <input id="ctrl-owners_mobile_no"  value="<?php  echo $data['owners_mobile_no']; ?>" type="text" placeholder="Enter Owners Mobile No"  required="" name="owners_mobile_no"  class="form-control " />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group ">
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <label class="control-label" for="principals_name">PRINCIPAL’S NAME  <span class="text-danger">*</span></label>
                                                                </div>
                                                                <div class="col-sm-8">
                                                                    <div class="">
                                                                        <input id="ctrl-principals_name"  value="<?php  echo $data['principals_name']; ?>" type="text" placeholder="Enter Principals Name"  required="" name="principals_name"  class="form-control " />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group ">
                                                                <div class="row">
                                                                    <div class="col-sm-4">
                                                                        <label class="control-label" for="principals_mobile_no">PRINCIPAL’S MOBILE NO.  <span class="text-danger">*</span></label>
                                                                    </div>
                                                                    <div class="col-sm-8">
                                                                        <div class="">
                                                                            <input id="ctrl-principals_mobile_no"  value="<?php  echo $data['principals_mobile_no']; ?>" type="text" placeholder="Enter Principals Mobile No"  required="" name="principals_mobile_no"  class="form-control " />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group ">
                                                                    <div class="row">
                                                                        <div class="col-sm-4">
                                                                            <label class="control-label" for="grade_n_class_from">GRADE/CLASS FROM <span class="text-danger">*</span></label>
                                                                        </div>
                                                                        <div class="col-sm-8">
                                                                            <div class="">
                                                                                <input id="ctrl-grade_n_class_from"  value="<?php  echo $data['grade_n_class_from']; ?>" type="text" placeholder="Enter Grade N Class From"  required="" name="grade_n_class_from"  class="form-control " />
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group ">
                                                                        <div class="row">
                                                                            <div class="col-sm-4">
                                                                                <label class="control-label" for="grade_n_class_to">GRADE/CLASS TO <span class="text-danger">*</span></label>
                                                                            </div>
                                                                            <div class="col-sm-8">
                                                                                <div class="">
                                                                                    <input id="ctrl-grade_n_class_to"  value="<?php  echo $data['grade_n_class_to']; ?>" type="text" placeholder="Enter Grade N Class To"  required="" name="grade_n_class_to"  class="form-control " />
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group ">
                                                                            <div class="row">
                                                                                <div class="col-sm-4">
                                                                                    <label class="control-label" for="entrance_and_exit_routes_details">ENTRANCE & EXIT ROUTES DETAILS  <span class="text-danger">*</span></label>
                                                                                </div>
                                                                                <div class="col-sm-8">
                                                                                    <div class="">
                                                                                        <input id="ctrl-entrance_and_exit_routes_details"  value="<?php  echo $data['entrance_and_exit_routes_details']; ?>" type="text" placeholder="Enter Entrance And Exit Routes Details"  required="" name="entrance_and_exit_routes_details"  class="form-control " />
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group ">
                                                                                <div class="row">
                                                                                    <div class="col-sm-4">
                                                                                        <label class="control-label" for="stairecase_count">STAIRCASE COUNT  <span class="text-danger">*</span></label>
                                                                                    </div>
                                                                                    <div class="col-sm-8">
                                                                                        <div class="">
                                                                                            <input id="ctrl-stairecase_count"  value="<?php  echo $data['stairecase_count']; ?>" type="number" placeholder="Enter Stairecase Count" step="1"  required="" name="stairecase_count"  class="form-control " />
                                                                                            </div>
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
                                                                                                    <label class="control-label" for="institute_total_area">TOTAL AREA  <span class="text-danger">*</span></label>
                                                                                                </div>
                                                                                                <div class="col-sm-8">
                                                                                                    <div class="">
                                                                                                        <input id="ctrl-institute_total_area"  value="<?php  echo $data['institute_total_area']; ?>" type="text" placeholder="Enter Institute Total Area"  required="" name="institute_total_area"  class="form-control " />
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group ">
                                                                                                <div class="row">
                                                                                                    <div class="col-sm-4">
                                                                                                        <label class="control-label" for="number_of_classrooms">NUMBER OF CLASSROOMS  <span class="text-danger">*</span></label>
                                                                                                    </div>
                                                                                                    <div class="col-sm-8">
                                                                                                        <div class="">
                                                                                                            <input id="ctrl-number_of_classrooms"  value="<?php  echo $data['number_of_classrooms']; ?>" type="number" placeholder="Enter Number Of Classrooms" step="1"  required="" name="number_of_classrooms"  class="form-control " />
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="form-group ">
                                                                                                    <div class="row">
                                                                                                        <div class="col-sm-4">
                                                                                                            <label class="control-label" for="is_laboratory_in_good_condition">LABORATORY IN GOOD CONDITION  <span class="text-danger">*</span></label>
                                                                                                        </div>
                                                                                                        <div class="col-sm-8">
                                                                                                            <div class="">
                                                                                                                <select required=""  id="ctrl-is_laboratory_in_good_condition" name="is_laboratory_in_good_condition"  placeholder="Select a value ..."    class="custom-select" >
                                                                                                                    <option value="">Select a value ...</option>
                                                                                                                    <?php
                                                                                                                    $is_laboratory_in_good_condition_options = Menu :: $is_redevelopment;
                                                                                                                    $field_value = $data['is_laboratory_in_good_condition'];
                                                                                                                    if(!empty($is_laboratory_in_good_condition_options)){
                                                                                                                    foreach($is_laboratory_in_good_condition_options as $option){
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
                                                                                                            <label class="control-label" for="is_reading_room_in_good_condition">READING ROOM IN GOOD CONDITION  <span class="text-danger">*</span></label>
                                                                                                        </div>
                                                                                                        <div class="col-sm-8">
                                                                                                            <div class="">
                                                                                                                <select required=""  id="ctrl-is_reading_room_in_good_condition" name="is_reading_room_in_good_condition"  placeholder="Select a value ..."    class="custom-select" >
                                                                                                                    <option value="">Select a value ...</option>
                                                                                                                    <?php
                                                                                                                    $is_reading_room_in_good_condition_options = Menu :: $is_redevelopment;
                                                                                                                    $field_value = $data['is_reading_room_in_good_condition'];
                                                                                                                    if(!empty($is_reading_room_in_good_condition_options)){
                                                                                                                    foreach($is_reading_room_in_good_condition_options as $option){
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
                                                                                                            <label class="control-label" for="no_table_reading_room">NO. OF TABLES IN READING ROOM  <span class="text-danger">*</span></label>
                                                                                                        </div>
                                                                                                        <div class="col-sm-8">
                                                                                                            <div class="">
                                                                                                                <input id="ctrl-no_table_reading_room"  value="<?php  echo $data['no_table_reading_room']; ?>" type="number" placeholder="Enter No Table Reading Room" step="1"  required="" name="no_table_reading_room"  class="form-control " />
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form-group ">
                                                                                                        <div class="row">
                                                                                                            <div class="col-sm-4">
                                                                                                                <label class="control-label" for="no_chair_reading_room">NO. OF CHAIRS IN READING ROOM  <span class="text-danger">*</span></label>
                                                                                                            </div>
                                                                                                            <div class="col-sm-8">
                                                                                                                <div class="">
                                                                                                                    <input id="ctrl-no_chair_reading_room"  value="<?php  echo $data['no_chair_reading_room']; ?>" type="text" placeholder="Enter No Chair Reading Room"  required="" name="no_chair_reading_room"  class="form-control " />
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="form-group ">
                                                                                                            <div class="row">
                                                                                                                <div class="col-sm-4">
                                                                                                                    <label class="control-label" for="is_record_room_in_good_condition">RECORD ROOM IN GOOD CONDITION  <span class="text-danger">*</span></label>
                                                                                                                </div>
                                                                                                                <div class="col-sm-8">
                                                                                                                    <div class="">
                                                                                                                        <select required=""  id="ctrl-is_record_room_in_good_condition" name="is_record_room_in_good_condition"  placeholder="Select a value ..."    class="custom-select" >
                                                                                                                            <option value="">Select a value ...</option>
                                                                                                                            <?php
                                                                                                                            $is_record_room_in_good_condition_options = Menu :: $is_redevelopment;
                                                                                                                            $field_value = $data['is_record_room_in_good_condition'];
                                                                                                                            if(!empty($is_record_room_in_good_condition_options)){
                                                                                                                            foreach($is_record_room_in_good_condition_options as $option){
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
                                                                                                                    <label class="control-label" for="is_computer_n_server_room_in_good_condition">COMPUTER & SERVER ROOM IN GOOD CONDITION  <span class="text-danger">*</span></label>
                                                                                                                </div>
                                                                                                                <div class="col-sm-8">
                                                                                                                    <div class="">
                                                                                                                        <select required=""  id="ctrl-is_computer_n_server_room_in_good_condition" name="is_computer_n_server_room_in_good_condition"  placeholder="Select a value ..."    class="custom-select" >
                                                                                                                            <option value="">Select a value ...</option>
                                                                                                                            <?php
                                                                                                                            $is_computer_n_server_room_in_good_condition_options = Menu :: $is_redevelopment;
                                                                                                                            $field_value = $data['is_computer_n_server_room_in_good_condition'];
                                                                                                                            if(!empty($is_computer_n_server_room_in_good_condition_options)){
                                                                                                                            foreach($is_computer_n_server_room_in_good_condition_options as $option){
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
                                                                                                                    <label class="control-label" for="computer_n_server_room_count">COMPUTER & SERVER ROOM COUNT  <span class="text-danger">*</span></label>
                                                                                                                </div>
                                                                                                                <div class="col-sm-8">
                                                                                                                    <div class="">
                                                                                                                        <input id="ctrl-computer_n_server_room_count"  value="<?php  echo $data['computer_n_server_room_count']; ?>" type="number" placeholder="Enter Computer N Server Room Count" step="1"  required="" name="computer_n_server_room_count"  class="form-control " />
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="form-group ">
                                                                                                                <div class="row">
                                                                                                                    <div class="col-sm-4">
                                                                                                                        <label class="control-label" for="is_lifts_in_the_good_condition">LIFTS IN GOOD CONDITION  <span class="text-danger">*</span></label>
                                                                                                                    </div>
                                                                                                                    <div class="col-sm-8">
                                                                                                                        <div class="">
                                                                                                                            <select required=""  id="ctrl-is_lifts_in_the_good_condition" name="is_lifts_in_the_good_condition"  placeholder="Select a value ..."    class="custom-select" >
                                                                                                                                <option value="">Select a value ...</option>
                                                                                                                                <?php
                                                                                                                                $is_lifts_in_the_good_condition_options = Menu :: $is_redevelopment;
                                                                                                                                $field_value = $data['is_lifts_in_the_good_condition'];
                                                                                                                                if(!empty($is_lifts_in_the_good_condition_options)){
                                                                                                                                foreach($is_lifts_in_the_good_condition_options as $option){
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
                                                                                                                        <label class="control-label" for="no_lifts_in_the_building">NO. OF LIFTS  <span class="text-danger">*</span></label>
                                                                                                                    </div>
                                                                                                                    <div class="col-sm-8">
                                                                                                                        <div class="">
                                                                                                                            <input id="ctrl-no_lifts_in_the_building"  value="<?php  echo $data['no_lifts_in_the_building']; ?>" type="number" placeholder="Enter No Lifts In The Building" step="1"  required="" name="no_lifts_in_the_building"  class="form-control " />
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="form-group ">
                                                                                                                    <div class="row">
                                                                                                                        <div class="col-sm-4">
                                                                                                                            <label class="control-label" for="status_lifts_in_the_building">STATUS OF LIFTS  <span class="text-danger">*</span></label>
                                                                                                                        </div>
                                                                                                                        <div class="col-sm-8">
                                                                                                                            <div class="">
                                                                                                                                <input id="ctrl-status_lifts_in_the_building"  value="<?php  echo $data['status_lifts_in_the_building']; ?>" type="text" placeholder="Enter Status Lifts In The Building"  required="" name="status_lifts_in_the_building"  class="form-control " />
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
                                                                                                                                    <input id="ctrl-generator_system_capacity"  value="<?php  echo $data['generator_system_capacity']; ?>" type="text" placeholder="Enter Generator System Capacity"  required="" name="generator_system_capacity"  class="form-control " />
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="form-group ">
                                                                                                                            <div class="row">
                                                                                                                                <div class="col-sm-4">
                                                                                                                                    <label class="control-label" for="is_generator_system_in_good_condition">GENERATOR IN GOOD CONDITION  <span class="text-danger">*</span></label>
                                                                                                                                </div>
                                                                                                                                <div class="col-sm-8">
                                                                                                                                    <div class="">
                                                                                                                                        <select required=""  id="ctrl-is_generator_system_in_good_condition" name="is_generator_system_in_good_condition"  placeholder="Select a value ..."    class="custom-select" >
                                                                                                                                            <option value="">Select a value ...</option>
                                                                                                                                            <?php
                                                                                                                                            $is_generator_system_in_good_condition_options = Menu :: $is_redevelopment;
                                                                                                                                            $field_value = $data['is_generator_system_in_good_condition'];
                                                                                                                                            if(!empty($is_generator_system_in_good_condition_options)){
                                                                                                                                            foreach($is_generator_system_in_good_condition_options as $option){
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
                                                                                                                                    <label class="control-label" for="is_electrical_conection_in_good_condition">ELECTRICAL CONNECTION IN GOOD CONDITION  <span class="text-danger">*</span></label>
                                                                                                                                </div>
                                                                                                                                <div class="col-sm-8">
                                                                                                                                    <div class="">
                                                                                                                                        <select required=""  id="ctrl-is_electrical_conection_in_good_condition" name="is_electrical_conection_in_good_condition"  placeholder="Select a value ..."    class="custom-select" >
                                                                                                                                            <option value="">Select a value ...</option>
                                                                                                                                            <?php
                                                                                                                                            $is_electrical_conection_in_good_condition_options = Menu :: $is_redevelopment;
                                                                                                                                            $field_value = $data['is_electrical_conection_in_good_condition'];
                                                                                                                                            if(!empty($is_electrical_conection_in_good_condition_options)){
                                                                                                                                            foreach($is_electrical_conection_in_good_condition_options as $option){
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
                                                                                                                                    <label class="control-label" for="is_electrical_audit_report">ELECTRICAL AUDIT REPORT AVAILABLE  <span class="text-danger">*</span></label>
                                                                                                                                </div>
                                                                                                                                <div class="col-sm-8">
                                                                                                                                    <div class="">
                                                                                                                                        <select required=""  id="ctrl-is_electrical_audit_report" name="is_electrical_audit_report"  placeholder="Select a value ..."    class="custom-select" >
                                                                                                                                            <option value="">Select a value ...</option>
                                                                                                                                            <?php
                                                                                                                                            $rec = $data['is_electrical_audit_report'];
                                                                                                                                            $is_electrical_audit_report_options = $comp_model -> school_college_coaching_inspection_form_is_electrical_audit_report_option_list();
                                                                                                                                            if(!empty($is_electrical_audit_report_options)){
                                                                                                                                            foreach($is_electrical_audit_report_options as $option){
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
                                                                                                                                    <label class="control-label" for="electrical_audit_report_date">ELECTRICAL AUDIT REPORT DATE  </label>
                                                                                                                                </div>
                                                                                                                                <div class="col-sm-8">
                                                                                                                                    <div class="input-group">
                                                                                                                                        <input id="ctrl-electrical_audit_report_date" class="form-control datepicker  datepicker"  value="<?php  echo $data['electrical_audit_report_date']; ?>" type="datetime" name="electrical_audit_report_date" placeholder="Enter Electrical Audit Report Date" data-enable-time="false" data-min-date="" data-max-date="<?php echo date_now(); ?>" data-date-format="Y-m-d" data-alt-format="F j, Y" data-inline="false" data-no-calendar="false" data-mode="single" />
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
                                                                                                                                        <label class="control-label" for="air_conditioning_system_cert">AC SYSTEM CERTIFICATE  <span class="text-danger">*</span></label>
                                                                                                                                    </div>
                                                                                                                                    <div class="col-sm-8">
                                                                                                                                        <div class="">
                                                                                                                                            <input id="ctrl-air_conditioning_system_cert"  value="<?php  echo $data['air_conditioning_system_cert']; ?>" type="text" placeholder="Enter Air Conditioning System Cert"  required="" name="air_conditioning_system_cert"  class="form-control " />
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <div class="form-group ">
                                                                                                                                    <div class="row">
                                                                                                                                        <div class="col-sm-4">
                                                                                                                                            <label class="control-label" for="fire_fighting_system_abc_type">FIRE FIGHTING SYSTEM ABC TYPE  <span class="text-danger">*</span></label>
                                                                                                                                        </div>
                                                                                                                                        <div class="col-sm-8">
                                                                                                                                            <div class="">
                                                                                                                                                <input id="ctrl-fire_fighting_system_abc_type"  value="<?php  echo $data['fire_fighting_system_abc_type']; ?>" type="text" placeholder="Enter Fire Fighting System Abc Type"  required="" name="fire_fighting_system_abc_type"  class="form-control " />
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    <div class="form-group ">
                                                                                                                                        <div class="row">
                                                                                                                                            <div class="col-sm-4">
                                                                                                                                                <label class="control-label" for="fire_fighting_system_co2_type">FIRE FIGHTING SYSTEM CO2 TYPE  <span class="text-danger">*</span></label>
                                                                                                                                            </div>
                                                                                                                                            <div class="col-sm-8">
                                                                                                                                                <div class="">
                                                                                                                                                    <input id="ctrl-fire_fighting_system_co2_type"  value="<?php  echo $data['fire_fighting_system_co2_type']; ?>" type="text" placeholder="Enter Fire Fighting System Co2 Type"  required="" name="fire_fighting_system_co2_type"  class="form-control " />
                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                        <div class="form-group ">
                                                                                                                                            <div class="row">
                                                                                                                                                <div class="col-sm-4">
                                                                                                                                                    <label class="control-label" for="fire_fighting_noc">FIRE FIGHTING NOC  <span class="text-danger">*</span></label>
                                                                                                                                                </div>
                                                                                                                                                <div class="col-sm-8">
                                                                                                                                                    <div class="">
                                                                                                                                                        <input id="ctrl-fire_fighting_noc"  value="<?php  echo $data['fire_fighting_noc']; ?>" type="text" placeholder="Enter Fire Fighting Noc"  required="" name="fire_fighting_noc"  class="form-control " />
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
