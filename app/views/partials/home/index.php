<?php 
$page_id = null;
$comp_model = new SharedController;
$current_page = $this->set_current_page_link();
?>
<div>
    <div  class="bg-light p-3 mb-3">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 comp-grid">
                    <h4 >The Dashboard</h4>
                </div>
            </div>
        </div>
    </div>
    <div  class="">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 comp-grid">
                    <div class=""><?php if(USER_ROLE == 3) { ?></div>
                </div>
            </div>
        </div>
    </div>
    <div  class="">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 comp-grid">
                    <a  class="btn btn-dashboard1 btn-apply1" href="<?php print_link("fire_noc_establishment/add") ?>">
                        <i class="fa fa-arrow-right fa-1x"></i>                             
                        Apply for Fire NOC  Establishment 
                    </a>
                    <a  class="btn btn-dashboard1 btn-status1" href="<?php print_link("fire_noc_establishment/list") ?>">
                        <i class="fa fa-check-circle fa-1x"></i>                                
                        View Fire Noc establishment Application Status 
                    </a>
                    <a  class="btn btn-dashboard1 btn-apply1" href="<?php print_link("fire_noc_provisional_new/add") ?>">
                        <i class="fa fa-arrow-right fa-1x"></i>                             
                        Apply for Provisional Fire NOC 
                    </a>
                    <a  class="btn btn-dashboard1 btn-status1" href="<?php print_link("fire_noc_provisional_new/list") ?>">
                        <i class="fa fa-check-circle fa-1x"></i>                                
                        View Provisional Fire NOC Application Status 
                    </a>
                    <a  class="btn btn-dashboard1 btn-apply1" href="<?php print_link("fire_noc_revised_provisional/add") ?>">
                        <i class="fa fa-arrow-right fa-1x"></i>                             
                        Apply for Revised Provisional Fire NOC  
                    </a>
                    <a  class="btn btn-dashboard1 btn-status1" href="<?php print_link("fire_noc_revised_provisional/list") ?>">
                        <i class="fa fa-check-circle fa-1x"></i>                                
                        View Revised Provisional Fire NOC Application Status 
                    </a>
                    <a  class="btn btn-dashboard1 btn-apply1" href="<?php print_link("fire_final_part_noc/add") ?>">
                        <i class="fa fa-arrow-right fa-1x"></i>                             
                        Apply for Fire Final Part NOC 
                    </a>
                    <a  class="btn btn-dashboard1 btn-status1" href="<?php print_link("fire_final_part_noc/list") ?>">
                        <i class="fa fa-check-circle fa-1x"></i>                                
                        View Fire Final Part NOC Application Status 
                    </a>
                    <a  class="btn btn-dashboard1 btn-apply1" href="<?php print_link("fire_final_noc/add") ?>">
                        <i class="fa fa-arrow-right fa-1x"></i>                             
                        Apply for Fire Final Noc  
                    </a>
                    <a  class="btn btn-dashboard1 btn-status1" href="<?php print_link("fire_final_noc/list") ?>">
                        <i class="fa fa-check-circle fa-1x"></i>                                
                        View Fire Final Noc Application Status 
                    </a>
                    <a  class="btn btn-dashboard1 btn-apply1" href="<?php print_link("fire_final_noc_renewal/add") ?>">
                        <i class="fa fa-arrow-right fa-1x"></i>                             
                        Apply for Renewal of Fire Final Noc 
                    </a>
                    <a  class="btn btn-dashboard1 btn-status1" href="<?php print_link("fire_final_noc_renewal/list") ?>">
                        <i class="fa fa-check-circle fa-1x"></i>                                
                        View Renewal of Fire Final Noc Application status 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div  class="">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 comp-grid">
                    <div class=""><style> 
                        /*body {*/
                        background-image: url('<?php echo SITE_ADDR.SITE_LOGO ?>'); /* replace with your actual logo path */
                        /*  background-repeat: no-repeat;*/
                        /*  background-position: center center;*/
                        /*  background-size: 550px 550px;*/
                        /*  min-height: 100vh;*/
                        /*  margin: 0;*/
                        /*}*/
                    </style>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div  class="">
    <div class="container">
        <div class="row ">
            <div class="col-md-12 comp-grid">
                <div class=""><?php if(USER_ROLE == 1) { ?></div>
            </div>
        </div>
    </div>
</div>
<div  class="">
    <div class="container">
        <div class="row ">
            <div class="col-md-12 comp-grid">
                <?php $rec_count = $comp_model->getcount_firenocestablishmentapplicationscount();  ?>
                <a class="animated zoomIn record-count alert alert-primary"  href="<?php print_link("fire_noc_establishment/") ?>">
                    <div class="row">
                        <div class="col-2">
                            <i class="fa fa-globe"></i>
                        </div>
                        <div class="col-10">
                            <div class="flex-column justify-content align-center">
                                <div class="title">Fire Noc Establishment Applications Count</div>
                                <small class=""></small>
                            </div>
                        </div>
                        <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                    </div>
                </a>
                <?php $rec_count = $comp_model->getcount_provisionalfirenocapplicationscount();  ?>
                <a class="animated zoomIn record-count alert alert-secondary"  href="<?php print_link("fire_noc_provisional_new/") ?>">
                    <div class="row">
                        <div class="col-2">
                            <i class="fa fa-globe"></i>
                        </div>
                        <div class="col-10">
                            <div class="flex-column justify-content align-center">
                                <div class="title">Provisional Fire Noc Applications Count</div>
                                <small class=""></small>
                            </div>
                        </div>
                        <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                    </div>
                </a>
                <?php $rec_count = $comp_model->getcount_revisedprovisionalfirenocapplicationscount();  ?>
                <a class="animated zoomIn record-count alert alert-info"  href="<?php print_link("fire_noc_revised_provisional/") ?>">
                    <div class="row">
                        <div class="col-2">
                            <i class="fa fa-globe"></i>
                        </div>
                        <div class="col-10">
                            <div class="flex-column justify-content align-center">
                                <div class="title">Revised Provisional Fire Noc Applications Count</div>
                                <small class=""></small>
                            </div>
                        </div>
                        <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                    </div>
                </a>
                <?php $rec_count = $comp_model->getcount_firefinalpartnocapplicationscount();  ?>
                <a class="animated zoomIn record-count alert alert-warning"  href="<?php print_link("fire_final_part_noc/") ?>">
                    <div class="row">
                        <div class="col-2">
                            <i class="fa fa-globe"></i>
                        </div>
                        <div class="col-10">
                            <div class="flex-column justify-content align-center">
                                <div class="title">Fire Final Part Noc Applications Count</div>
                                <small class=""></small>
                            </div>
                        </div>
                        <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                    </div>
                </a>
                <?php $rec_count = $comp_model->getcount_firefinalnocapplicationscount();  ?>
                <a class="animated zoomIn record-count alert alert-danger"  href="<?php print_link("fire_final_noc/") ?>">
                    <div class="row">
                        <div class="col-2">
                            <i class="fa fa-globe"></i>
                        </div>
                        <div class="col-10">
                            <div class="flex-column justify-content align-center">
                                <div class="title">Fire Final Noc Applications Count</div>
                                <small class=""></small>
                            </div>
                        </div>
                        <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                    </div>
                </a>
                <?php $rec_count = $comp_model->getcount_firefinalnocrenewalapplicationscount();  ?>
                <a class="animated zoomIn record-count alert alert-success"  href="<?php print_link("fire_final_noc_renewal/") ?>">
                    <div class="row">
                        <div class="col-2">
                            <i class="fa fa-globe"></i>
                        </div>
                        <div class="col-10">
                            <div class="flex-column justify-content align-center">
                                <div class="title">Fire Final Noc Renewal Applications Count</div>
                                <small class=""></small>
                            </div>
                        </div>
                        <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<div  class="">
    <div class="container">
        <div class="row ">
            <div class="col-md-12 comp-grid">
                <div class=""><h2 style="font-size: 20px; font-weight: 600; margin-bottom: 10px; margin-top: 10px; color: #003366;">
                    Overall Summary Report
                </h2>
                <?php 
                $jei = new User_infoController();
                $db = $jei->GetModel();
                // Fetch logged-in user's details
                $user_id = get_active_user("id"); 
                $user_name = get_active_user("name"); 
                // Define services with respective table names
                $services = [
                "Fire Noc Application for Establishments / आस्थापनांकरिता फायर ना-हरकत दाखला" => "fire_noc_establishment",
                "Provisional Fire NOC / तात्पुरता अग्निशमन ना-हरकत दाखला" => "fire_noc_provisional_new",
                "Revised Provisional Fire NOC / सुधारित तात्पुरती अग्निशमन ना हरकत प्रमाणपत्र" => "fire_noc_revised_provisional",
                "Fire Final Part NOC / फायर फायनल पार्ट ना हरकत दाखला" => "fire_final_part_noc",
                "Fire Final Noc / अंतिम फायर ना हरकत दाखला" => "fire_final_noc",
                "Fire Final NOC Renewal / अग्निशामक अंतिम नूतनीकरण ना हरकत दाखला" => "fire_final_noc_renewal"
                ];
                ?>
                <div class="stock-report-table-container"> 
                    <table class="stock-report-table">
                        <tr>
                            <th>Sr.No</th>
                            <th>Name of Service</th>
                            <th>Total Applications Received</th>
                            <!--<th>Pending at Citizen</th>-->
                            <th>Pending at Auth1</th>
                            <th>Pending at Auth2</th>
                            <th>Pending at Auth3</th>
                            <!--<th>Pending at Auth4</th>-->
                            <th>Completed Applications</th>
                            <th>Rejected Applications</th>
                        </tr>
                        <?php
                        $i = 0;
                        foreach ($services as $service_name => $table_name) {
                        $i++;
                        // Fetch total count
                        $count = $db->getOne($table_name, "count(id) as num")['num'] ?? 0;
                        // Fetch pending auth1 approval count
                        $db->where("status", "0");
                        $count_pending_at_citizen = $db->getOne($table_name, "count(id) as num")['num'] ?? 0;
                        // Fetch pending auth1 approval count
                        $db->where("status", "1");
                        $count_pending_at_auth1 = $db->getOne($table_name, "count(id) as num")['num'] ?? 0;
                        // Fetch pending auth1 approval count
                        $db->where("status", "2");
                        $count_pending_at_auth2 = $db->getOne($table_name, "count(id) as num")['num'] ?? 0;
                        // Fetch pending auth1 approval count
                        $db->where("status", "3");
                        $count_pending_at_auth3 = $db->getOne($table_name, "count(id) as num")['num'] ?? 0;
                        // Fetch pending auth1 approval count
                        $db->where("status", "4");
                        $count_pending_at_auth4 = $db->getOne($table_name, "count(id) as num")['num'] ?? 0;
                        // Fetch completed count
                        $db->where("status", "Completed");
                        $count_completed = $db->getOne($table_name, "count(id) as num")['num'] ?? 0;
                        // Fetch rejected count
                        $db->where("status", "Rejected");
                        $count_rejected = $db->getOne($table_name, "count(id) as num")['num'] ?? 0;
                        $count_total=$count-$count_pending_at_citizen;
                        echo "<tr>";
                            echo "<td>" . $i . "</td>";                          // Sr. No.
                            echo "<td>" . $service_name . "</td>";               // Services
                            echo "<td><span style='background-color: #ffc107; color: #212529; padding: 2px 6px; border-radius: 3px; font-weight: bold;'>" . $count_total . "</span></td>";
                            // Pending at Citizen – Light Gray
                            // echo "<td><span style='background-color: #e2e3e5; color: #000; padding: 2px 6px; border-radius: 3px; font-weight: bold;'>" . $count_pending_at_citizen . "</span></td>";
                            // Pending at Auth1 – Light Blue
                            echo "<td><span style='background-color: #bee5eb; color: #000; padding: 2px 6px; border-radius: 3px; font-weight: bold;'>" . $count_pending_at_auth1 . "</span></td>";
                            // Pending at Auth2 – Light Teal
                            echo "<td><span style='background-color: #d1ecf1; color: #000; padding: 2px 6px; border-radius: 3px; font-weight: bold;'>" . $count_pending_at_auth2 . "</span></td>";
                            // Pending at Auth3 – Light Purple
                            echo "<td><span style='background-color: #e2d9f3; color: #000; padding: 2px 6px; border-radius: 3px; font-weight: bold;'>" . $count_pending_at_auth3 . "</span></td>";
                            // Pending at Auth4 – Light Orange
                            // echo "<td><span style='background-color: #ffe5b4; color: #000; padding: 2px 6px; border-radius: 3px; font-weight: bold;'>" . $count_pending_at_auth4 . "</span></td>";
                            echo "<td><span style='background-color: #28a745; color: #fff; padding: 2px 6px; border-radius: 3px; font-weight: bold;'>" . $count_completed . "</span></td>";
                            echo "<td><span style='background-color: #dc3545; color: #fff; padding: 2px 6px; border-radius: 3px; font-weight: bold;'>" . $count_rejected . "</span></td>";
                        echo "</tr>"; 
                        }
                        ?>
                    </table>
                </div>
            </br>
        </br>
    </div>
</div>
</div>
</div>
</div>
<div  class="">
    <div class="container">
        <div class="row ">
            <div class="col-md-12 comp-grid">
                <div class=""><h2 style="font-size: 20px; font-weight: 600; margin-bottom: 10px; margin-top: 10px; color: #003366;">
                    Ward wise Report
                </h2>
                <form method="GET" style="margin-bottom: 20px;">
                    <label for="from_date">From: </label>
                    <input type="date" id="from_date" name="from_date" value="<?= $_GET['from_date'] ?? '' ?>" required>
                        <label for="to_date" style="margin-left: 10px;">To: </label>
                        <input type="date" id="to_date" name="to_date" value="<?= $_GET['to_date'] ?? '' ?>" required>
                            <button type="submit" style="margin-left: 10px;">Filter</button>
                        </form>
                        <style>
                            form {
                            background: #f9f9f9;
                            padding: 15px;
                            border: 1px solid #ccc;
                            border-radius: 5px;
                            display: inline-block;
                            margin-bottom: 20px;
                            }
                            form label {
                            font-weight: bold;
                            color: #003366;
                            margin-right: 5px;
                            }
                            form input[type="date"] {
                            padding: 5px 10px;
                            margin-right: 10px;
                            border: 1px solid #ccc;
                            border-radius: 3px;
                            }
                            form button {
                            background-color: #003366;
                            color: #fff;
                            padding: 6px 12px;
                            border: none;
                            border-radius: 3px;
                            cursor: pointer;
                            }
                            form button:hover {
                            background-color: #005b9a;
                            }
                            button {
                            padding: 6px 12px;
                            background-color: #28a745;
                            border: none;
                            color: white;
                            border-radius: 4px;
                            font-weight: bold;
                            cursor: pointer;
                            }
                            button:hover {
                            background-color: #218838;
                            }
                        </style>
                        <?php 
                        $from_date = $_GET['from_date'] ?? '';
                        $to_date = $_GET['to_date'] ?? '';
                        $jei = new User_infoController();
                        $db = $jei->GetModel();
                        // Fetch logged-in user's details
                        $user_id = get_active_user("id"); 
                        $user_name = get_active_user("name"); 
                        // Define services with respective table names
                        $services = [
                        "Fire Noc Application for Establishments" => "fire_noc_establishment",
                        "Provisional Fire NOC" => "fire_noc_provisional_new",
                        "Revised Provisional Fire NOC" => "fire_noc_revised_provisional",
                        "Fire Final Part NOC" => "fire_final_part_noc",
                        "Fire Final Noc" => "fire_final_noc",
                        "Fire Final NOC Renewal" => "fire_final_noc_renewal"
                        ];
                        ?>
                        <div class="wide-report-table-container"> 
                            <table class="wide-report-table">
                                <tr>
                                    <th>Sr.No</th>
                                    <th>Name of Service</th>
                                    <th>Total Applications Received</th>
                                    <!--<th>Pending at Citizen</th>-->
                                    <th>Pending at Auth1</th>
                                    <th>Pending at Auth2</th>
                                    <!-- <th>Pending at Auth2-A</th> -->
                                    <!-- <th>Pending at Auth2-B</th> -->
                                    <!-- <th>Pending at Auth2-C</th> -->
                                    <!-- <th>Pending at Auth2-D</th> -->
                                    <!-- <th>Pending at Auth2-E</th> -->
                                    <!-- <th>Pending at Auth2-F</th> -->
                                    <!-- <th>Pending at Auth2-G</th> -->
                                    <!-- <th>Pending at Auth2-H</th> -->
                                    <!-- <th>Pending at Auth2-I</th> -->
                                    <th>Pending at Auth3</th>
                                    <th>Pending at Citizen Payment</th>
                                    <!--<th>Pending at Auth4</th>-->
                                    <th>Completed Applications</th>
                                    <th>Reverted Applications</th>
                                    <th>Rejected Applications</th>
                                </tr>
                                <?php
                                $i = 0;
                                $zones = ['A','B','C','D','E','F','G','H','I'];
                                foreach ($services as $service_name => $table_name) {
                                $i++;
                                // Fetch counts
                                if ($from_date && $to_date) {
                                $db->where("DATE(timestamp)", $from_date, ">=");
                                $db->where("DATE(timestamp)", $to_date, "<=");
                                }
                                $count = $db->getOne($table_name, "count(id) as num")['num'] ?? 0;
                                if ($from_date && $to_date) {
                                $db->where("DATE(timestamp)", $from_date, ">=");
                                $db->where("DATE(timestamp)", $to_date, "<=");
                                }
                                $db->where("status", "0");
                                // Total count without pending at citizen
                                if ($from_date && $to_date) {
                                $db->where("DATE(timestamp)", $from_date, ">=");
                                $db->where("DATE(timestamp)", $to_date, "<=");
                                }
                                $count_pending_at_citizen = $db->getOne($table_name, "count(id) as num")['num'] ?? 0;
                                $count_total=$count-$count_pending_at_citizen;
                                $db->where("status", "1");
                                if ($from_date && $to_date) {
                                $db->where("DATE(timestamp)", $from_date, ">=");
                                $db->where("DATE(timestamp)", $to_date, "<=");
                                }
                                $count_pending_at_auth1 = $db->getOne($table_name, "count(id) as num")['num'] ?? 0;
                                $db->where("status", "2");
                                if ($from_date && $to_date) {
                                $db->where("DATE(timestamp)", $from_date, ">=");
                                $db->where("DATE(timestamp)", $to_date, "<=");
                                }
                                $count_pending_at_auth2 = $db->getOne($table_name, "count(id) as num")['num'] ?? 0;
                                // Zone-wise Auth2 counts
                                $auth2_zone_counts = [];
                                foreach ($zones as $zone) {
                                $db->where("status", "2");
                                $db->where("zone_value", $zone);
                                if ($from_date && $to_date) {
                                $db->where("DATE(timestamp)", $from_date, ">=");
                                $db->where("DATE(timestamp)", $to_date, "<=");
                                }
                                $auth2_zone_counts[$zone] = $db->getOne($table_name, "count(id) as num")['num'] ?? 0;
                                } 
                                if ($from_date && $to_date) {
                                $db->where("DATE(timestamp)", $from_date, ">=");
                                $db->where("DATE(timestamp)", $to_date, "<=");
                                }
                                $count_pending_at_auth3 = $db->getOne($table_name, "SUM(CASE WHEN status = 3  AND NOT ( payment_done = 0 AND SUBSTRING_INDEX(paid, ',', -1) != 0 )THEN 1 ELSE 0 END) as num")['num'] ?? 0;
                                if ($from_date && $to_date) {
                                $db->where("DATE(timestamp)", $from_date, ">=");
                                $db->where("DATE(timestamp)", $to_date, "<=");
                                }
                                $count_pending_at_auth_cp = $db->getOne($table_name, "SUM(CASE WHEN payment_done = 0  AND SUBSTRING_INDEX(paid, ',', -1) != 0  AND status = 3  THEN 1  ELSE 0  END) as num")['num'] ?? 0;
                                $db->where("status", "4");
                                if ($from_date && $to_date) {
                                $db->where("DATE(timestamp)", $from_date, ">=");
                                $db->where("DATE(timestamp)", $to_date, "<=");
                                }
                                $count_pending_at_auth4 = $db->getOne($table_name, "count(id) as num")['num'] ?? 0;
                                $db->where("status", "Completed");
                                if ($from_date && $to_date) {
                                $db->where("DATE(timestamp)", $from_date, ">=");
                                $db->where("DATE(timestamp)", $to_date, "<=");
                                }
                                $count_completed = $db->getOne($table_name, "count(id) as num")['num'] ?? 0;
                                $db->where("status", "Rejected");
                                if ($from_date && $to_date) {
                                $db->where("DATE(timestamp)", $from_date, ">=");
                                $db->where("DATE(timestamp)", $to_date, "<=");
                                }
                                $count_rejected = $db->getOne($table_name, "count(id) as num")['num'] ?? 0;
                                $db->where("status", "Reverted");
                                if ($from_date && $to_date) {
                                $db->where("DATE(timestamp)", $from_date, ">=");
                                $db->where("DATE(timestamp)", $to_date, "<=");
                                }
                                $count_rev = $db->getOne($table_name, "count(id) as num")['num'] ?? 0;
                                // Output table row
                                echo "<tr>";
                                    echo "<td>$i</td>";
                                    echo "<td>$service_name</td>";
                                    echo "<td><span style='background-color: #ffc107; color: #212529; padding: 2px 6px; border-radius: 3px; font-weight: bold;'>$count_total</span></td>";
                                    // echo "<td><span style='background-color: #e2e3e5; color: #000; padding: 2px 6px; border-radius: 3px; font-weight: bold;'>$count_pending_at_citizen</span></td>";
                                    echo "<td><span style='background-color: #bee5eb; color: #000; padding: 2px 6px; border-radius: 3px; font-weight: bold;'>$count_pending_at_auth1</span></td>";
                                    echo "<td><span style='background-color: #d1ecf1; color: #000; padding: 2px 6px; border-radius: 3px; font-weight: bold;'>$count_pending_at_auth2</span></td>";
                                    // foreach ($zones as $zone) {
                                    //     echo "<td><span style='background-color: #d1ecf1; color: #000; padding: 2px 6px; border-radius: 3px; font-weight: bold;'>" . $auth2_zone_counts[$zone] . "</span></td>";
                                    // }
                                    echo "<td><span style='background-color: #e2d9f3; color: #000; padding: 2px 6px; border-radius: 3px; font-weight: bold;'>$count_pending_at_auth3</span></td>";
                                    echo "<td><span style='background-color: #e2d9f3; color: #000; padding: 2px 6px; border-radius: 3px; font-weight: bold;'>$count_pending_at_auth_cp</span></td>";
                                    // echo "<td><span style='background-color: #ffe5b4; color: #000; padding: 2px 6px; border-radius: 3px; font-weight: bold;'>$count_pending_at_auth4</span></td>";
                                    echo "<td><span style='background-color: #B8FFB8; color: #000; padding: 2px 6px; border-radius: 3px; font-weight: bold;'>$count_completed</span></td>";
                                    echo "<td><span style='background-color: #FFB8B8; color: #000; padding: 2px 6px; border-radius: 3px; font-weight: bold;'>$count_rev</span></td>";
                                    echo "<td><span style='background-color: #FFB8B8; color: #000; padding: 2px 6px; border-radius: 3px; font-weight: bold;'>$count_rejected</span></td>";
                                echo "</tr>";
                                }
                                ?>
                            </table>
                            <br><br>
                                <button onclick="exportTableToExcel('reportTable', 'ward_report')" style="margin-right: 10px;">Export to Excel</button>
                                <!--<button onclick="printTable()" style="margin-right: 10px;">Export to PDF</button>-->
                                <script>
                                    function exportTableToExcel(tableID, filename = '') {
                                    const tableSelect = document.querySelector('.wide-report-table-container table');
                                    const tableHTML = tableSelect.outerHTML;
                                    const blob = new Blob(
                                    ['\ufeff' + tableHTML],
                                    { type: 'application/vnd.ms-excel;charset=utf-8;' }
                                    );
                                    const downloadLink = document.createElement('a');
                                    const url = URL.createObjectURL(blob);
                                    downloadLink.href = url;
                                    downloadLink.download = filename ? filename + '.xls' : 'ward_report.xls';
                                    downloadLink.click();
                                    URL.revokeObjectURL(url);
                                    }
                                    function printTable() {
                                    const divToPrint = document.querySelector('.wide-report-table-container').innerHTML;
                                    const newWin = window.open('', '_blank');
                                    newWin.document.write('<html><head><title>PDF Export</title></head><body>');
                                        newWin.document.write('<h2>Ward Wise Report</h2>');
                                        newWin.document.write(divToPrint);
                                    newWin.document.write('</body></html>');
                                    newWin.document.close();
                                    newWin.print();
                                    }
                                </script>
                            </div>
                        </br>
                    </br>
                </div>
            </div>
        </div>
    </div>
</div>
<div  class="">
    <div class="container">
        <div class="row ">
            <div class="col-md-12 comp-grid">
                <div class=""><?php } ?></div>
            </div>
        </div>
    </div>
</div>
<div  class="">
    <div class="container">
        <div class="row ">
            <div class="col-md-12 comp-grid">
                <div class=""><?php if(USER_ROLE == 2) { ?>
                    <h2 style="font-size: 20px; font-weight: 600; margin-bottom: 10px; margin-top: 10px; color: #003366;">
                        Ward wise Report
                    </h2>
                    <form method="GET" style="margin-bottom: 20px;">
                        <label for="from_date">From: </label>
                        <input type="date" id="from_date" name="from_date" value="<?= $_GET['from_date'] ?? '' ?>" required>
                            <label for="to_date" style="margin-left: 10px;">To: </label>
                            <input type="date" id="to_date" name="to_date" value="<?= $_GET['to_date'] ?? '' ?>" required>
                                <button type="submit" style="margin-left: 10px;">Filter</button>
                            </form>
                            <style>
                                form {
                                background: #f9f9f9;
                                padding: 15px;
                                border: 1px solid #ccc;
                                border-radius: 5px;
                                display: inline-block;
                                margin-bottom: 20px;
                                }
                                form label {
                                font-weight: bold;
                                color: #003366;
                                margin-right: 5px;
                                }
                                form input[type="date"] {
                                padding: 5px 10px;
                                margin-right: 10px;
                                border: 1px solid #ccc;
                                border-radius: 3px;
                                }
                                form button {
                                background-color: #003366;
                                color: #fff;
                                padding: 6px 12px;
                                border: none;
                                border-radius: 3px;
                                cursor: pointer;
                                }
                                form button:hover {
                                background-color: #005b9a;
                                }
                                button {
                                padding: 6px 12px;
                                background-color: #28a745;
                                border: none;
                                color: white;
                                border-radius: 4px;
                                font-weight: bold;
                                cursor: pointer;
                                }
                                button:hover {
                                background-color: #218838;
                                }
                            </style>
                            <?php 
                            $from_date = $_GET['from_date'] ?? '';
                            $to_date = $_GET['to_date'] ?? '';
                            $jei = new User_infoController();
                            $db = $jei->GetModel();
                            // Fetch logged-in user's details
                            $user_id = get_active_user("id"); 
                            $user_name = get_active_user("name"); 
                            // Define services with respective table names
                            $services = [
                            "Fire Noc Application for Establishments" => "fire_noc_establishment",
                            "Provisional Fire NOC" => "fire_noc_provisional_new",
                            "Revised Provisional Fire NOC" => "fire_noc_revised_provisional",
                            "Fire Final Part NOC" => "fire_final_part_noc",
                            "Fire Final Noc" => "fire_final_noc",
                            "Fire Final NOC Renewal" => "fire_final_noc_renewal"
                            ];
                            ?>
                            <div class="wide-report-table-container"> 
                                <table class="wide-report-table">
                                    <tr>
                                        <th>Sr.No</th>
                                        <th>Name of Service</th>
                                        <th>Total Applications Received</th>
                                        <!--<th>Pending at Citizen</th>-->
                                        <th>Pending at Auth1</th>
                                        <th>Pending at Auth2</th>
                                        <!-- <th>Pending at Auth2-A</th> -->
                                        <!-- <th>Pending at Auth2-B</th> -->
                                        <!-- <th>Pending at Auth2-C</th> -->
                                        <!-- <th>Pending at Auth2-D</th> -->
                                        <!-- <th>Pending at Auth2-E</th> -->
                                        <!-- <th>Pending at Auth2-F</th> -->
                                        <!-- <th>Pending at Auth2-G</th> -->
                                        <!-- <th>Pending at Auth2-H</th> -->
                                        <!-- <th>Pending at Auth2-I</th> -->
                                        <th>Pending at Auth3</th>
                                        <th>Pending at Citizen Payment</th>
                                        <!--<th>Pending at Auth4</th>-->
                                        <th>Completed Applications</th>
                                        <th>Rejected Applications</th>
                                        <th>Reverted Applications</th>
                                    </tr>
                                    <?php 
                                    $i = 0;
                                    $zones = ['A','B','C','D','E','F','G','H','I'];
                                    foreach ($services as $service_name => $table_name) {
                                    $i++;
                                    // Fetch counts
                                    if ($from_date && $to_date) {
                                    $db->where("DATE(timestamp)", $from_date, ">=");
                                    $db->where("DATE(timestamp)", $to_date, "<=");
                                    }
                                    $count = $db->getOne($table_name, "count(id) as num")['num'] ?? 0;
                                    if ($from_date && $to_date) {
                                    $db->where("DATE(timestamp)", $from_date, ">=");
                                    $db->where("DATE(timestamp)", $to_date, "<=");
                                    }
                                    $db->where("status", "0");
                                    // Total count without pending at citizen
                                    if ($from_date && $to_date) {
                                    $db->where("DATE(timestamp)", $from_date, ">=");
                                    $db->where("DATE(timestamp)", $to_date, "<=");
                                    }
                                    $count_pending_at_citizen = $db->getOne($table_name, "count(id) as num")['num'] ?? 0;
                                    $count_total=$count-$count_pending_at_citizen;
                                    $db->where("status", "1");
                                    if ($from_date && $to_date) {
                                    $db->where("DATE(timestamp)", $from_date, ">=");
                                    $db->where("DATE(timestamp)", $to_date, "<=");
                                    }
                                    $count_pending_at_auth1 = $db->getOne($table_name, "count(id) as num")['num'] ?? 0;
                                    $db->where("status", "2");
                                    if ($from_date && $to_date) {
                                    $db->where("DATE(timestamp)", $from_date, ">=");
                                    $db->where("DATE(timestamp)", $to_date, "<=");
                                    }
                                    $count_pending_at_auth2 = $db->getOne($table_name, "count(id) as num")['num'] ?? 0;
                                    // Zone-wise Auth2 counts
                                    $auth2_zone_counts = [];
                                    foreach ($zones as $zone) {
                                    $db->where("status", "2");
                                    $db->where("zone_value", $zone);
                                    if ($from_date && $to_date) {
                                    $db->where("DATE(timestamp)", $from_date, ">=");
                                    $db->where("DATE(timestamp)", $to_date, "<=");
                                    }
                                    $auth2_zone_counts[$zone] = $db->getOne($table_name, "count(id) as num")['num'] ?? 0;
                                    }
                                if ($from_date && $to_date) {
                                $db->where("DATE(timestamp)", $from_date, ">=");
                                $db->where("DATE(timestamp)", $to_date, "<=");
                                }
                                $count_pending_at_auth3 = $db->getOne($table_name, "SUM(CASE WHEN status = 3  AND NOT ( payment_done = 0 AND SUBSTRING_INDEX(paid, ',', -1) != 0 )THEN 1 ELSE 0 END) as num")['num'] ?? 0;
                                if ($from_date && $to_date) {
                                $db->where("DATE(timestamp)", $from_date, ">=");
                                $db->where("DATE(timestamp)", $to_date, "<=");
                                }
                                $count_pending_at_auth_cp = $db->getOne($table_name, "SUM(CASE WHEN payment_done = 0  AND SUBSTRING_INDEX(paid, ',', -1) != 0  AND status = 3  THEN 1  ELSE 0  END) as num")['num'] ?? 0;
                                    $db->where("status", "4");
                                    if ($from_date && $to_date) {
                                    $db->where("DATE(timestamp)", $from_date, ">=");
                                    $db->where("DATE(timestamp)", $to_date, "<=");
                                    }
                                    $count_pending_at_auth4 = $db->getOne($table_name, "count(id) as num")['num'] ?? 0;
                                    $db->where("status", "Completed");
                                    if ($from_date && $to_date) {
                                    $db->where("DATE(timestamp)", $from_date, ">=");
                                    $db->where("DATE(timestamp)", $to_date, "<=");
                                    }
                                    $count_completed = $db->getOne($table_name, "count(id) as num")['num'] ?? 0;
                                    $db->where("status", "Rejected");
                                    if ($from_date && $to_date) {
                                    $db->where("DATE(timestamp)", $from_date, ">=");
                                    $db->where("DATE(timestamp)", $to_date, "<=");
                                    }
                                    $count_rejected = $db->getOne($table_name, "count(id) as num")['num'] ?? 0;
                                    $db->where("status", "Reverted");
                                    if ($from_date && $to_date) {
                                    $db->where("DATE(timestamp)", $from_date, ">=");
                                    $db->where("DATE(timestamp)", $to_date, "<=");
                                    }
                                    $count_rev = $db->getOne($table_name, "count(id) as num")['num'] ?? 0;
                                    // Output table row
                                    echo "<tr>";
                                        echo "<td>$i</td>";
                                        echo "<td>$service_name</td>";
                                        echo "<td><span style='background-color: #ffc107; color: #212529; padding: 2px 6px; border-radius: 3px; font-weight: bold;'>$count_total</span></td>";
                                        // echo "<td><span style='background-color: #e2e3e5; color: #000; padding: 2px 6px; border-radius: 3px; font-weight: bold;'>$count_pending_at_citizen</span></td>";
                                        echo "<td><span style='background-color: #bee5eb; color: #000; padding: 2px 6px; border-radius: 3px; font-weight: bold;'>$count_pending_at_auth1</span></td>";
                                        echo "<td><span style='background-color: #d1ecf1; color: #000; padding: 2px 6px; border-radius: 3px; font-weight: bold;'>$count_pending_at_auth2</span></td>";
                                        // foreach ($zones as $zone) {
                                        //     echo "<td><span style='background-color: #d1ecf1; color: #000; padding: 2px 6px; border-radius: 3px; font-weight: bold;'>" . $auth2_zone_counts[$zone] . "</span></td>";
                                        // }
                                        echo "<td><span style='background-color: #e2d9f3; color: #000; padding: 2px 6px; border-radius: 3px; font-weight: bold;'>$count_pending_at_auth3</span></td>";
                                        echo "<td><span style='background-color: #e2d9f3; color: #000; padding: 2px 6px; border-radius: 3px; font-weight: bold;'>$count_pending_at_auth_cp</span></td>";
                                        // echo "<td><span style='background-color: #ffe5b4; color: #000; padding: 2px 6px; border-radius: 3px; font-weight: bold;'>$count_pending_at_auth4</span></td>";
                                        echo "<td><span style='background-color: #B8FFB8; color: #000; padding: 2px 6px; border-radius: 3px; font-weight: bold;'>$count_completed</span></td>";
                                        echo "<td><span style='background-color: #FFB8B8; color: #000; padding: 2px 6px; border-radius: 3px; font-weight: bold;'>$count_rejected</span></td>";
                                        echo "<td><span style='background-color: #FFB8B8; color: #000; padding: 2px 6px; border-radius: 3px; font-weight: bold;'>$count_rev</span></td>";
                                    echo "</tr>";
                                    }
                                    ?>
                                </table>
                                <br><br>
                                    <button onclick="exportTableToExcel('reportTable', 'ward_report')" style="margin-right: 10px;">Export to Excel</button>
                                    <button onclick="printTable()" style="margin-right: 10px;">Export to PDF</button>
                                    <script>
                                        function exportTableToExcel(tableID, filename = '') {
                                        const tableSelect = document.querySelector('.wide-report-table-container table');
                                        const tableHTML = tableSelect.outerHTML;
                                        const blob = new Blob(
                                        ['\ufeff' + tableHTML],
                                        { type: 'application/vnd.ms-excel;charset=utf-8;' }
                                        );
                                        const downloadLink = document.createElement('a');
                                        const url = URL.createObjectURL(blob);
                                        downloadLink.href = url;
                                        downloadLink.download = filename ? filename + '.xls' : 'ward_report.xls';
                                        downloadLink.click();
                                        URL.revokeObjectURL(url);
                                        }
                                        function printTable() {
                                        const divToPrint = document.querySelector('.wide-report-table-container').innerHTML;
                                        const newWin = window.open('', '_blank');
                                        newWin.document.write('<html><head><title>PDF Export</title></head><body>');
                                            newWin.document.write('<h2>Ward Wise Report</h2>');
                                            newWin.document.write(divToPrint);
                                        newWin.document.write('</body></html>');
                                        newWin.document.close();
                                        newWin.print();
                                        }
                                    </script>
                                </div>
                            </br>
                        </br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div  class="">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 comp-grid">
                    <a  class="btn btn-dashboard1 btn-apply1" href="<?php print_link("fire_noc_establishment/list") ?>">
                        <i class="fa fa-check-circle fa-1x"></i>                                
                        Fire Noc establishment Applications 
                    </a>
                    <a  class="btn btn-dashboard1 btn-apply1" href="<?php print_link("fire_noc_provisional_new/list") ?>">
                        <i class="fa fa-check-circle fa-1x"></i>                                
                        Provisional Fire NOC Applications 
                    </a>
                    <a  class="btn btn-dashboard1 btn-apply1" href="<?php print_link("fire_noc_revised_provisional/list") ?>">
                        <i class="fa fa-check-circle fa-1x"></i>                                
                        Revised Provisional Fire NOC Applications 
                    </a>
                    <a  class="btn btn-dashboard1 btn-apply1" href="<?php print_link("fire_final_part_noc/list") ?>">
                        <i class="fa fa-check-circle fa-1x"></i>                                
                        Fire Final Part NOC Applications 
                    </a>
                    <a  class="btn btn-dashboard1 btn-apply1" href="<?php print_link("fire_final_noc/list") ?>">
                        <i class="fa fa-check-circle fa-1x"></i>                                
                        Fire Final Noc Applications 
                    </a>
                    <a  class="btn btn-dashboard1 btn-apply1" href="<?php print_link("fire_final_noc_renewal/list") ?>">
                        <i class="fa fa-check-circle fa-1x"></i>                                
                        Renewal of Fire Final Noc Applications 
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div  class="">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 comp-grid">
                    <div class=""><?php } ?></div>
                </div>
            </div>
        </div>
    </div>
    <div  class="">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 comp-grid">
                    <div class=""><?php if(USER_ROLE == 2 || USER_ROLE == 1) { ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div  class="">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 comp-grid">
                    <div class=""><h4 class="legend-heading">Graph Legends</h4>
                        <div class="graph-legend">
                            <!--<div><strong>0</strong> = Pending at Citizen for uploading building details</div>-->
                            <div><strong>1</strong> = Pending at Authority 1</div>
                            <div><strong>2</strong> = Pending at Authority 2</div>
                            <div><strong>3</strong> = Pending at Authority 3</div>
                            <!--<div><strong>4</strong> = Pending at Authority 4</div>-->
                        </div>
                        <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div  class="">
            <div class="container">
                <div class="row ">
                    <div class="col-md-6 comp-grid">
                        <div class="card card-body">
                            <?php 
                            $chartdata = $comp_model->piechart_firenocestablishmentstatuschart();
                            ?>
                            <div>
                                <h4>FIRE NOC ESTABLISHMENT STATUS CHART</h4>
                                <small class="text-muted"></small>
                            </div>
                            <hr />
                            <canvas id="piechart_firenocestablishmentstatuschart"></canvas>
                            <script>
                                $(function (){
                                var chartData = {
                                labels : <?php echo json_encode($chartdata['labels']); ?>,
                                datasets : [
                                {
                                label: 'Dataset 1',
                                backgroundColor:[
                                <?php 
                                foreach($chartdata['labels'] as $g){
                                echo "'" . random_color(0.9) . "',";
                                }
                                ?>
                                ],
                                borderWidth:1,
                                data : <?php echo json_encode($chartdata['datasets'][0]); ?>,
                                }
                                ]
                                }
                                var ctx = document.getElementById('piechart_firenocestablishmentstatuschart');
                                var chart = new Chart(ctx, {
                                type:'pie',
                                data: chartData,
                                options: {
                                responsive: true,
                                scales: {
                                yAxes: [{
                                ticks:{display: false},
                                gridLines:{display: false},
                                scaleLabel: {
                                display: true,
                                labelString: ""
                                }
                                }],
                                xAxes: [{
                                ticks:{display: false},
                                gridLines:{display: false},
                                scaleLabel: {
                                display: true,
                                labelString: ""
                                }
                                }],
                                },
                                }
                                ,
                                })});
                            </script>
                        </div>
                    </div>
                    <div class="col-md-6 comp-grid">
                        <div class="card card-body">
                            <?php 
                            $chartdata = $comp_model->piechart_provisionalfirenocstatuschart();
                            ?>
                            <div>
                                <h4>PROVISIONAL FIRE NOC STATUS CHART</h4>
                                <small class="text-muted"></small>
                            </div>
                            <hr />
                            <canvas id="piechart_provisionalfirenocstatuschart"></canvas>
                            <script>
                                $(function (){
                                var chartData = {
                                labels : <?php echo json_encode($chartdata['labels']); ?>,
                                datasets : [
                                {
                                label: 'Dataset 1',
                                backgroundColor:[
                                <?php 
                                foreach($chartdata['labels'] as $g){
                                echo "'" . random_color(0.9) . "',";
                                }
                                ?>
                                ],
                                borderWidth:1,
                                data : <?php echo json_encode($chartdata['datasets'][0]); ?>,
                                }
                                ]
                                }
                                var ctx = document.getElementById('piechart_provisionalfirenocstatuschart');
                                var chart = new Chart(ctx, {
                                type:'pie',
                                data: chartData,
                                options: {
                                responsive: true,
                                scales: {
                                yAxes: [{
                                ticks:{display: false},
                                gridLines:{display: false},
                                scaleLabel: {
                                display: true,
                                labelString: ""
                                }
                                }],
                                xAxes: [{
                                ticks:{display: false},
                                gridLines:{display: false},
                                scaleLabel: {
                                display: true,
                                labelString: ""
                                }
                                }],
                                },
                                }
                                ,
                                })});
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div  class="">
            <div class="container">
                <div class="row ">
                    <div class="col-md-12 comp-grid">
                        <div class=""><?php echo "<br><br>"; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div  class="">
            <div class="container">
                <div class="row ">
                    <div class="col-md-6 comp-grid">
                        <div class="card card-body">
                            <?php 
                            $chartdata = $comp_model->piechart_revisedprovisionalfirenocstatuschart();
                            ?>
                            <div>
                                <h4>REVISED PROVISIONAL FIRE NOC STATUS CHART</h4>
                                <small class="text-muted"></small>
                            </div>
                            <hr />
                            <canvas id="piechart_revisedprovisionalfirenocstatuschart"></canvas>
                            <script>
                                $(function (){
                                var chartData = {
                                labels : <?php echo json_encode($chartdata['labels']); ?>,
                                datasets : [
                                {
                                label: 'Dataset 1',
                                backgroundColor:[
                                <?php 
                                foreach($chartdata['labels'] as $g){
                                echo "'" . random_color(0.9) . "',";
                                }
                                ?>
                                ],
                                borderWidth:1,
                                data : <?php echo json_encode($chartdata['datasets'][0]); ?>,
                                }
                                ]
                                }
                                var ctx = document.getElementById('piechart_revisedprovisionalfirenocstatuschart');
                                var chart = new Chart(ctx, {
                                type:'pie',
                                data: chartData,
                                options: {
                                responsive: true,
                                scales: {
                                yAxes: [{
                                ticks:{display: false},
                                gridLines:{display: false},
                                scaleLabel: {
                                display: true,
                                labelString: ""
                                }
                                }],
                                xAxes: [{
                                ticks:{display: false},
                                gridLines:{display: false},
                                scaleLabel: {
                                display: true,
                                labelString: ""
                                }
                                }],
                                },
                                }
                                ,
                                })});
                            </script>
                        </div>
                    </div>
                    <div class="col-md-6 comp-grid">
                        <div class="card card-body">
                            <?php 
                            $chartdata = $comp_model->piechart_firefinalpartnocstatuschart();
                            ?>
                            <div>
                                <h4>FIRE FINAL PART NOC STATUS CHART</h4>
                                <small class="text-muted"></small>
                            </div>
                            <hr />
                            <canvas id="piechart_firefinalpartnocstatuschart"></canvas>
                            <script>
                                $(function (){
                                var chartData = {
                                labels : <?php echo json_encode($chartdata['labels']); ?>,
                                datasets : [
                                {
                                label: 'Dataset 1',
                                backgroundColor:[
                                <?php 
                                foreach($chartdata['labels'] as $g){
                                echo "'" . random_color(0.9) . "',";
                                }
                                ?>
                                ],
                                borderWidth:1,
                                data : <?php echo json_encode($chartdata['datasets'][0]); ?>,
                                }
                                ]
                                }
                                var ctx = document.getElementById('piechart_firefinalpartnocstatuschart');
                                var chart = new Chart(ctx, {
                                type:'pie',
                                data: chartData,
                                options: {
                                responsive: true,
                                scales: {
                                yAxes: [{
                                ticks:{display: false},
                                gridLines:{display: false},
                                scaleLabel: {
                                display: true,
                                labelString: ""
                                }
                                }],
                                xAxes: [{
                                ticks:{display: false},
                                gridLines:{display: false},
                                scaleLabel: {
                                display: true,
                                labelString: ""
                                }
                                }],
                                },
                                }
                                ,
                                })});
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div  class="">
            <div class="container">
                <div class="row ">
                    <div class="col-md-12 comp-grid">
                        <div class=""><?php echo "<br><br>"; ?></div>
                        </div>
                    </div>
                </div>
            </div>
            <div  class="">
                <div class="container">
                    <div class="row ">
                        <div class="col-md-6 comp-grid">
                            <div class="card card-body">
                                <?php 
                                $chartdata = $comp_model->piechart_firefinalnocstatuschart();
                                ?>
                                <div>
                                    <h4>FIRE FINAL NOC STATUS CHART</h4>
                                    <small class="text-muted"></small>
                                </div>
                                <hr />
                                <canvas id="piechart_firefinalnocstatuschart"></canvas>
                                <script>
                                    $(function (){
                                    var chartData = {
                                    labels : <?php echo json_encode($chartdata['labels']); ?>,
                                    datasets : [
                                    {
                                    label: 'Dataset 1',
                                    backgroundColor:[
                                    <?php 
                                    foreach($chartdata['labels'] as $g){
                                    echo "'" . random_color(0.9) . "',";
                                    }
                                    ?>
                                    ],
                                    borderWidth:1,
                                    data : <?php echo json_encode($chartdata['datasets'][0]); ?>,
                                    }
                                    ]
                                    }
                                    var ctx = document.getElementById('piechart_firefinalnocstatuschart');
                                    var chart = new Chart(ctx, {
                                    type:'pie',
                                    data: chartData,
                                    options: {
                                    responsive: true,
                                    scales: {
                                    yAxes: [{
                                    ticks:{display: false},
                                    gridLines:{display: false},
                                    scaleLabel: {
                                    display: true,
                                    labelString: ""
                                    }
                                    }],
                                    xAxes: [{
                                    ticks:{display: false},
                                    gridLines:{display: false},
                                    scaleLabel: {
                                    display: true,
                                    labelString: ""
                                    }
                                    }],
                                    },
                                    }
                                    ,
                                    })});
                                </script>
                            </div>
                        </div>
                        <div class="col-md-6 comp-grid">
                            <div class="card card-body">
                                <?php 
                                $chartdata = $comp_model->piechart_renewaloffirefinalnocstatuschart();
                                ?>
                                <div>
                                    <h4>RENEWAL OF FIRE FINAL NOC STATUS CHART</h4>
                                    <small class="text-muted"></small>
                                </div>
                                <hr />
                                <canvas id="piechart_renewaloffirefinalnocstatuschart"></canvas>
                                <script>
                                    $(function (){
                                    var chartData = {
                                    labels : <?php echo json_encode($chartdata['labels']); ?>,
                                    datasets : [
                                    {
                                    label: 'Dataset 1',
                                    backgroundColor:[
                                    <?php 
                                    foreach($chartdata['labels'] as $g){
                                    echo "'" . random_color(0.9) . "',";
                                    }
                                    ?>
                                    ],
                                    borderWidth:1,
                                    data : <?php echo json_encode($chartdata['datasets'][0]); ?>,
                                    }
                                    ]
                                    }
                                    var ctx = document.getElementById('piechart_renewaloffirefinalnocstatuschart');
                                    var chart = new Chart(ctx, {
                                    type:'pie',
                                    data: chartData,
                                    options: {
                                    responsive: true,
                                    scales: {
                                    yAxes: [{
                                    ticks:{display: false},
                                    gridLines:{display: false},
                                    scaleLabel: {
                                    display: true,
                                    labelString: ""
                                    }
                                    }],
                                    xAxes: [{
                                    ticks:{display: false},
                                    gridLines:{display: false},
                                    scaleLabel: {
                                    display: true,
                                    labelString: ""
                                    }
                                    }],
                                    },
                                    }
                                    ,
                                    })});
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div  class="">
                <div class="container">
                    <div class="row ">
                        <div class="col-md-12 comp-grid">
                            <div class=""><?php } ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
