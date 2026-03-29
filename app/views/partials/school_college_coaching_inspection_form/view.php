<?php 
//check if current user role is allowed access to the pages
$can_add = ACL::is_allowed("school_college_coaching_inspection_form/add");
$can_edit = ACL::is_allowed("school_college_coaching_inspection_form/edit");
$can_view = ACL::is_allowed("school_college_coaching_inspection_form/view");
$can_delete = ACL::is_allowed("school_college_coaching_inspection_form/delete");
?>
<?php
$comp_model = new SharedController;
$page_element_id = "view-page-" . random_str();
$current_page = $this->set_current_page_link();
$csrf_token = Csrf::$token;
//Page Data Information from Controller
$data = $this->view_data;
//$rec_id = $data['__tableprimarykey'];
$page_id = $this->route->page_id; //Page id from url
$view_title = $this->view_title;
$show_header = $this->show_header;
$show_edit_btn = $this->show_edit_btn;
$show_delete_btn = $this->show_delete_btn;
$show_export_btn = $this->show_export_btn;
?>
<section class="page" id="<?php echo $page_element_id; ?>" data-page-type="view"  data-display-type="table" data-page-url="<?php print_link($current_page); ?>">
    <?php
    if( $show_header == true ){
    ?>
    <div  class="bg-light p-3 mb-3">
        <div class="container">
            <div class="row ">
                <div class="col ">
                    <h4 class="record-title">School, College, Coaching Institute Inspection / शाळा, महाविद्यालय, कोचिंग क्लास पाहणी</h4>
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
                    <div  class="card animated fadeIn page-content">
                        <?php
                        $counter = 0;
                        if(!empty($data)){
                        $rec_id = (!empty($data['id']) ? urlencode($data['id']) : null);
                        $counter++;
                        ?>
                        <div id="page-report-body" class="">
                            <table class="table table-hover table-borderless table-striped">
                                <!-- Table Body Start -->
                                <tbody class="page-data" id="page-data-<?php echo $page_element_id; ?>">
                                    <tr  class="td-institute_name">
                                        <th class="title"> Institute Name: </th>
                                        <td class="value"> <?php echo $data['institute_name']; ?></td>
                                    </tr>
                                    <tr  class="td-institute_address">
                                        <th class="title"> Institute Address: </th>
                                        <td class="value"> <?php echo $data['institute_address']; ?></td>
                                    </tr>
                                    <tr  class="td-building_floors">
                                        <th class="title"> Building Floors: </th>
                                        <td class="value"> <?php echo $data['building_floors']; ?></td>
                                    </tr>
                                    <tr  class="td-institute_owners_name">
                                        <th class="title"> Institute Owners Name: </th>
                                        <td class="value"> <?php echo $data['institute_owners_name']; ?></td>
                                    </tr>
                                    <tr  class="td-owners_mobile_no">
                                        <th class="title"> Owners Mobile No: </th>
                                        <td class="value"> <?php echo $data['owners_mobile_no']; ?></td>
                                    </tr>
                                    <tr  class="td-principals_name">
                                        <th class="title"> Principals Name: </th>
                                        <td class="value"> <?php echo $data['principals_name']; ?></td>
                                    </tr>
                                    <tr  class="td-principals_mobile_no">
                                        <th class="title"> Principals Mobile No: </th>
                                        <td class="value"> <?php echo $data['principals_mobile_no']; ?></td>
                                    </tr>
                                    <tr  class="td-grade_n_class_from">
                                        <th class="title"> Grade N Class From: </th>
                                        <td class="value"> <?php echo $data['grade_n_class_from']; ?></td>
                                    </tr>
                                    <tr  class="td-grade_n_class_to">
                                        <th class="title"> Grade N Class To: </th>
                                        <td class="value"> <?php echo $data['grade_n_class_to']; ?></td>
                                    </tr>
                                    <tr  class="td-entrance_and_exit_routes_details">
                                        <th class="title"> Entrance And Exit Routes Details: </th>
                                        <td class="value"> <?php echo $data['entrance_and_exit_routes_details']; ?></td>
                                    </tr>
                                    <tr  class="td-stairecase_count">
                                        <th class="title"> Stairecase Count: </th>
                                        <td class="value"> <?php echo $data['stairecase_count']; ?></td>
                                    </tr>
                                    <tr  class="td-water_storage_capacity_terrace">
                                        <th class="title"> Water Storage Capacity Terrace: </th>
                                        <td class="value"> <?php echo $data['water_storage_capacity_terrace']; ?></td>
                                    </tr>
                                    <tr  class="td-water_storage_capacity_groundfloor">
                                        <th class="title"> Water Storage Capacity Groundfloor: </th>
                                        <td class="value"> <?php echo $data['water_storage_capacity_groundfloor']; ?></td>
                                    </tr>
                                    <tr  class="td-institute_total_area">
                                        <th class="title"> Institute Total Area: </th>
                                        <td class="value"> <?php echo $data['institute_total_area']; ?></td>
                                    </tr>
                                    <tr  class="td-number_of_classrooms">
                                        <th class="title"> Number Of Classrooms: </th>
                                        <td class="value"> <?php echo $data['number_of_classrooms']; ?></td>
                                    </tr>
                                    <tr  class="td-is_laboratory_in_good_condition">
                                        <th class="title"> Is Laboratory In Good Condition: </th>
                                        <td class="value"> <?php echo $data['is_laboratory_in_good_condition']; ?></td>
                                    </tr>
                                    <tr  class="td-is_reading_room_in_good_condition">
                                        <th class="title"> Is Reading Room In Good Condition: </th>
                                        <td class="value"> <?php echo $data['is_reading_room_in_good_condition']; ?></td>
                                    </tr>
                                    <tr  class="td-no_table_reading_room">
                                        <th class="title"> No Table Reading Room: </th>
                                        <td class="value"> <?php echo $data['no_table_reading_room']; ?></td>
                                    </tr>
                                    <tr  class="td-no_chair_reading_room">
                                        <th class="title"> No Chair Reading Room: </th>
                                        <td class="value"> <?php echo $data['no_chair_reading_room']; ?></td>
                                    </tr>
                                    <tr  class="td-is_record_room_in_good_condition">
                                        <th class="title"> Is Record Room In Good Condition: </th>
                                        <td class="value"> <?php echo $data['is_record_room_in_good_condition']; ?></td>
                                    </tr>
                                    <tr  class="td-is_computer_n_server_room_in_good_condition">
                                        <th class="title"> Is Computer N Server Room In Good Condition: </th>
                                        <td class="value"> <?php echo $data['is_computer_n_server_room_in_good_condition']; ?></td>
                                    </tr>
                                    <tr  class="td-computer_n_server_room_count">
                                        <th class="title"> Computer N Server Room Count: </th>
                                        <td class="value"> <?php echo $data['computer_n_server_room_count']; ?></td>
                                    </tr>
                                    <tr  class="td-is_lifts_in_the_good_condition">
                                        <th class="title"> Is Lifts In The Good Condition: </th>
                                        <td class="value"> <?php echo $data['is_lifts_in_the_good_condition']; ?></td>
                                    </tr>
                                    <tr  class="td-no_lifts_in_the_building">
                                        <th class="title"> No Lifts In The Building: </th>
                                        <td class="value"> <?php echo $data['no_lifts_in_the_building']; ?></td>
                                    </tr>
                                    <tr  class="td-status_lifts_in_the_building">
                                        <th class="title"> Status Lifts In The Building: </th>
                                        <td class="value"> <?php echo $data['status_lifts_in_the_building']; ?></td>
                                    </tr>
                                    <tr  class="td-generator_system_capacity">
                                        <th class="title"> Generator System Capacity: </th>
                                        <td class="value"> <?php echo $data['generator_system_capacity']; ?></td>
                                    </tr>
                                    <tr  class="td-is_generator_system_in_good_condition">
                                        <th class="title"> Is Generator System In Good Condition: </th>
                                        <td class="value"> <?php echo $data['is_generator_system_in_good_condition']; ?></td>
                                    </tr>
                                    <tr  class="td-is_electrical_conection_in_good_condition">
                                        <th class="title"> Is Electrical Conection In Good Condition: </th>
                                        <td class="value"> <?php echo $data['is_electrical_conection_in_good_condition']; ?></td>
                                    </tr>
                                    <tr  class="td-is_electrical_audit_report">
                                        <th class="title"> Is Electrical Audit Report: </th>
                                        <td class="value"> <?php echo $data['is_electrical_audit_report']; ?></td>
                                    </tr>
                                    <tr  class="td-electrical_audit_report_date">
                                        <th class="title"> Electrical Audit Report Date: </th>
                                        <td class="value"> <?php echo $data['electrical_audit_report_date']; ?></td>
                                    </tr>
                                    <tr  class="td-air_conditioning_system_cert">
                                        <th class="title"> Air Conditioning System Cert: </th>
                                        <td class="value"> <?php echo $data['air_conditioning_system_cert']; ?></td>
                                    </tr>
                                    <tr  class="td-fire_fighting_system_abc_type">
                                        <th class="title"> Fire Fighting System Abc Type: </th>
                                        <td class="value"> <?php echo $data['fire_fighting_system_abc_type']; ?></td>
                                    </tr>
                                    <tr  class="td-fire_fighting_system_co2_type">
                                        <th class="title"> Fire Fighting System Co2 Type: </th>
                                        <td class="value"> <?php echo $data['fire_fighting_system_co2_type']; ?></td>
                                    </tr>
                                    <tr  class="td-fire_fighting_noc">
                                        <th class="title"> Fire Fighting Noc: </th>
                                        <td class="value"> <?php echo $data['fire_fighting_noc']; ?></td>
                                    </tr>
                                    <tr  class="td-user_id">
                                        <th class="title"> User Id: </th>
                                        <td class="value"> <?php echo $data['user_id']; ?></td>
                                    </tr>
                                    <tr  class="td-date">
                                        <th class="title"> Date: </th>
                                        <td class="value"> <?php echo $data['date']; ?></td>
                                    </tr>
                                </tbody>
                                <!-- Table Body End -->
                            </table>
                        </div>
                        <div class="p-3 d-flex">
                            <?php $export_excel_link = $this->set_current_page_link(array('format' => 'excel')); ?>
                            <a class="btn  btn-sm btn-primary export-link-btn" data-format="excel" href="<?php print_link($export_excel_link); ?>" target="_blank">
                                <img src="<?php print_link('assets/images/xsl.png') ?>" class="mr-2" /> EXCEL
                                </a>
                                <?php if($can_edit){ ?>
                                <a class="btn btn-sm btn-info"  href="<?php print_link("school_college_coaching_inspection_form/edit/$rec_id"); ?>">
                                    <i class="fa fa-edit"></i> Edit
                                </a>
                                <?php } ?>
                                <?php if($can_delete){ ?>
                                <a class="btn btn-sm btn-danger record-delete-btn mx-1"  href="<?php print_link("school_college_coaching_inspection_form/delete/$rec_id/?csrf_token=$csrf_token&redirect=$current_page"); ?>" data-prompt-msg="Are you sure you want to delete this record?" data-display-style="modal">
                                    <i class="fa fa-times"></i> Delete
                                </a>
                                <?php } ?>
                            </div>
                            <?php
                            }
                            else{
                            ?>
                            <!-- Empty Record Message -->
                            <div class="text-muted p-3">
                                <i class="fa fa-ban"></i> No Record Found
                            </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
