<?php 
//check if current user role is allowed access to the pages
$can_add = ACL::is_allowed("demand/add");
$can_edit = ACL::is_allowed("demand/edit");
$can_view = ACL::is_allowed("demand/view");
$can_delete = ACL::is_allowed("demand/delete");
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
                    <h4 class="record-title"></h4>
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
                    <?php // $this :: display_page_errors(); ?>
                    <div  class="card animated fadeIn page-content">
                        <?php
                        $counter = 0;
                        if(!empty($data) || 1){
                        $rec_id = (!empty($data['id']) ? urlencode($data['id']) : null);
                        $jei=new User_infoController();
                        $db=$jei->GetModel();
                        if(isset($_GET['paid'])){
                        $paid=explode(",",$_GET['paid']);
                        ?>
                        <div class="text-center my-4">
    <div class="alert alert-success d-inline-block px-4 py-3 rounded shadow-sm">
        <h5 class="fw-bold mb-2">✅ Receipts Available</h5>
        <p class="mb-0 text-muted">The buttons below are your official payment receipts. Click any button to view or download your receipt.</p>
    </div>
</div>

<div class="text-center">
<?php
foreach ($paid as $p) {
    $db->where("id", $p);
    $dpm = $db->getOne("demand");
    if (!empty($dpm['payment_type'])) {
        ?>
        <div class="mb-3">
            <a class="btn btn-primary  " 
               href="<?php echo SITE_ADDR ?>demand/view/<?php echo $p ?>" 
               target="_blank">
                💳 View Receipt (<?php echo $p; ?>)
            </a>
        </div>
        <?php
    }
}
?>
</div>

                        <?php
                            }else{
                            $db->where("payment_cash_collection_center",$data['payment_cash_collection_center']);
                            $db->where("timestamp<='".$data['timestamp']."'");
                            $db->where("DATE(timestamp)=DATE('".$data['timestamp']."')");
                            $dayrecs=$db->getOne("demand","count(id) as val")['val'];
                            $db->where("id",$data['rec_id']);
                            $appl=$db->getOne($data['db_name'],"*");
                            function eng_marathi($val){
                            if($val=="issuance_of_no_dues_certificate"){
                            return "थकबाकी नसल्याचा दाखला देणे";
                            }
                            }
                            function convertEnglishToMarathiNumerals($englishNumber) {
                            $englishNumerals = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
                            $marathiNumerals = array('०', '१', '२', '३', '४', '५', '६', '७', '८', '९');
                            $marathiNumber = str_replace($englishNumerals, $marathiNumerals, $englishNumber);
                            return $marathiNumber;
                            }
                            // For Number longer than 9 digits
                            function all_two_digit($digits_2, $num_dic, $separator) {
                            if (strlen($digits_2) <= 1) {  // Provided only one/zero digit
                            return $num_dic[$digits_2];
                            } elseif ($digits_2 == "00") {  // Two Zero provided
                            return $num_dic["0"] . $separator . $num_dic["0"];
                            } elseif ($digits_2[0] == "0") {  // First digit is zero
                            return $num_dic["0"] . $separator . $num_dic[$digits_2[1]];
                            } else {  // Both digits provided
                            return $num_dic[$digits_2];
                            }
                            }
                            // For Number less than 9 digits
                            function two_digit($digits_2, $num_dic) {
                            $digits_2 = ltrim($digits_2, "0");
                            if (strlen($digits_2) != 0) {
                            return $num_dic[$digits_2];
                            } else {
                            return "";
                            }
                            }
                            function all_digit($digits, $num_dic, $separator, $combiner) {
                            $digits = ltrim($digits, "0");
                            $digit_len = strlen($digits);
                            if ($digit_len > 3) {
                            $num_of_digits_to_process = ($digit_len % 2) + 1;
                            $process_digits = substr($digits, 0, $num_of_digits_to_process);
                            $base = strval(10 ** ((round($digit_len / 2,2)) * 2 - 1));
                            $remain_digits = substr($digits, $num_of_digits_to_process);
                            if($base=="10000" ){
                            $base="1000";
                            }
                            if($base=="1000000" ){
                            $base="100000";
                            }
                            if($base=="100000000" ){
                            $base="10000000";
                            }
                            if($process_digits=="10000" ){
                            $process_digits="1000";
                            }
                            if($process_digits=="1000000" ){
                            $process_digits="100000";
                            }
                            if($process_digits=="100000000" ){
                            $process_digits="10000000";
                            }
                            return $num_dic[$process_digits] . $combiner . $num_dic[$base] . $separator . all_digit($remain_digits, $num_dic, $separator, $combiner);
                            } elseif (strlen($digits) == 3) {
                            return $num_dic[$digits[0]]  . $num_dic["100"] . $separator . two_digit(substr($digits, 1), $num_dic);
                            } else {
                            return two_digit($digits, $num_dic);
                            }
                            }
                            function getmarathiruppees($num, $lang='mr', $separator = ", ", $combiner = " ")
                            {
                            $lang = strtolower($lang);
                            $num = strval($num);
                            $NUM_DICT = array(
                            0=> "शून्य",
                            1=> "एक",
                            2=> "दोन",
                            3=> "तीन",
                            4=> "चार",
                            5=> "पाच",
                            6=> "सहा",
                            7=> "सात",
                            8=> "आठ",
                            9=> "नऊ",
                            10=> "दहा",
                            11=> "अकरा",
                            12=> "बारा",
                            13=> "तेरा",
                            14=> "चौदा",
                            15=> "पंधरा",
                            16=> "सोळा",
                            17=> "सतरा",
                            18=> "अठरा",
                            19=> "एकोणीस",
                            20=> "वीस",
                            21=> "एकवीस",
                            22=> "बावीस",
                            23=> "तेवीस",
                            24=> "चोवीस",
                            25=> "पंचवीस",
                            26=> "सव्वीस",
                            27=> "सत्तावीस",
                            28=> "अठ्ठावीस",
                            29=> "एकोणतीस",
                            30=> "तीस",
                            31=> "एकतीस",
                            32=> "बत्तीस",
                            33=> "तेहेतीस",
                            34=> "चौतीस",
                            35=> "पस्तीस",
                            36=> "छत्तीस",
                            37=> "सदतीस",
                            38=> "अडतीस",
                            39=> "एकोणचाळीस",
                            40=> "चाळीस",
                            41=> "एक्केचाळीस",
                            42=> "बेचाळीस",
                            43=> "त्रेचाळीस",
                            44=> "चव्वेचाळीस",
                            45=> "पंचेचाळीस",
                            46=> "सेहेचाळीस",
                            47=> "सत्तेचाळीस",
                            48=> "अठ्ठेचाळीस",
                            49=> "एकोणपन्नास",
                            50=> "पन्नास",
                            51=> "एक्कावन्न",
                            52=> "बावन्न",
                            53=> "त्रेपन्न",
                            54=> "चोपन्न",
                            55=> "पंचावन्न",
                            56=> "छप्पन्न",
                            57=> "सत्तावन्न",
                            58=> "अठ्ठावन्न",
                            59=> "एकोणसाठ",
                            60=> "साठ",
                            61=> "एकसष्ठ",
                            62=> "बासष्ठ",
                            63=> "त्रेसष्ठ",
                            64=> "चौसष्ठ",
                            65=> "पासष्ठ",
                            66=> "सहासष्ठ",
                            67=> "सदुसष्ठ",
                            68=> "अडुसष्ठ",
                            69=> "एकोणसत्तर",
                            70=> "सत्तर",
                            71=> "एक्काहत्तर",
                            72=> "बाहत्तर",
                            73=> "त्र्याहत्तर",
                            74=> "चौर्‍याहत्तर",
                            75=> "पंच्याहत्तर",
                            76=> "शहात्तर",
                            77=> "सत्याहत्तर",
                            78=> "अठ्ठ्याहत्तर",
                            79=> "एकोण ऐंशी",
                            80=> "ऐंशी",
                            81=> "एक्क्याऐंशी",
                            82=> "ब्याऐंशी",
                            83=> "त्र्याऐंशी",
                            84=> "चौऱ्याऐंशी",
                            85=> "पंच्याऐंशी",
                            86=> "शहाऐंशी",
                            87=> "सत्त्याऐंशी",
                            88=> "अठ्ठ्याऐंशी",
                            89=> "एकोणनव्वद",
                            90=> "नव्वद",
                            91=> "एक्क्याण्णव",
                            92=> "ब्याण्णव",
                            93=> "त्र्याण्णव",
                            94=> "चौऱ्याण्णव",
                            95=> "पंच्याण्णव",
                            96=> "शहाण्णव",
                            97=> "सत्त्याण्णव",
                            98=> "अठ्ठ्याण्णव",
                            99=> "नव्व्याण्णव",
                            100=> "शे",
                            1000=> "हजार", 
                            100000=> "लाख",
                            10000000=> "कोटी",
                            1000000000=> "अब्ज",
                            ); 
                            $num_dic = $NUM_DICT;
                            // Dash default combiner for English-India
                            if ($lang == "en" && $combiner == " ") {
                            $combiner = "-";
                            }
                            $num = ltrim($num, "0");
                            $full_digit_len = strlen($num);
                            if ($full_digit_len == 0) {
                            $output = $num_dic["0"];
                            } elseif ($full_digit_len <= 9) {
                            $output = all_digit($num, $num_dic, $separator, $combiner);
                            } else {
                            $iteration = round($full_digit_len / 2);
                            $output = all_two_digit(substr($num, 0, 2), $num_dic, $separator);  // First two digits
                            for ($i = 1; $i < $iteration; $i++) {
                            $output .= $separator . all_two_digit(substr($num, $i * 2, 2), $num_dic, $separator);  // Next two digit pairs
                            }
                            $remaining_digits = substr($num, $iteration * 2);
                            if (all_two_digit($remaining_digits, $num_dic, $separator) != "") {
                            $output .= $separator . all_two_digit($remaining_digits, $num_dic, $separator);  // Remaining last one/two digits
                            }
                            }
                            $output = trim($output, $separator);
                            // /    $output = language_specific_exception($output, $lang, $combiner);
                            return $output;
                            }
                            $counter++;
                            ?>
                            <div id="page-report-body" class="">
                                <?php // $this :: display_page_errors(); ?>
                                <div  class="card animated fadeIn page-content">
                                    <?php     $jeController = new DemandController;
                                    $db = $jeController->GetModel(); 
                                    //get header footer 
                                    $db->where("type","Reciept");
                                    $hrec=$db->get("report_header_footer",1,'*');
                                    ?>
                                    <style>
                                        @media print {
                                        body *, #main * { display:none; }
                                        #main, #main #printarea, #main #printarea * { display:block ; }
                                        }
                                    </style>
                                    <div>
                                        <a href="#"  class="btn btn-danger" onclick="printDiv('printarea')"  >PRINT</a>
                                    </div>
                                    <div style="padding:25px">
                                        <div id="main" class>
                                            <div id="printarea">
                                                <div STYLE="border:1px solid black;<?php if(USER_ROLE!=2){ echo "display:none";} ?>">
                                                    <div STYLE="float:right;padding:2px;">
                                                        <img src="<?php echo SITE_ADDR ?>qr.php?d=<?php echo SITE_ADDR ?>demand/view/<?php echo $data['id'] ?>" width="100px" >
                                                            <br>Office Copy
                                                            </div>
                                                            <?php echo $hrec[0]['header']; ?> 
                                                            <table border="1" width="100%">
                                                                <tr>
                                                                    <th>Receipt No/पावती क्र.</th>
                                                                    <th>Date of Receipt/दिनांक</th>
                                                                    <th>CFC Reference/सी.एफ.सी निदेश  </th>
                                                                    <th>Counter Reference / खिडकी निदेश </th>
                                                                </tr>
                                                                <tr>
                                                                    <td>FIRE/<?php echo $data['id'] ?></td>
                                                                    <td><?php echo date("d-m-Y",strtotime($data['timestamp'])); ?></td>
                                                                    <td><?php echo $data['payment_counter'] ?></td>
                                                                    <td><?php echo $data['payment_cash_collection_center']."/".$dayrecs ?></td>
                                                                </tr>
                                                            </table>
                                                            <br>
                                                                <table border="1" width="100%">
                                                                    <tr>
                                                                        <th>Received From / कोणाकडुन</th>
                                                                        <td><?php echo $data['payment_person'] ?></td> 
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Amount/ रकम  </th>
                                                                        <td><?php echo convertEnglishToMarathiNumerals($data['amount']) ?></td> 
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Amount In Words / अक्षरी रक्कम  </th>
                                                                        <td style="text-transform:capitalize"><?php 
                                                                            function getIndianCurrency(float $number)
                                                                            {
                                                                            if($number==100){
                                                                            return "शंभर";
                                                                            }
                                                                            return getmarathiruppees($number);
                                                                            }
                                                                        echo getIndianCurrency($data['amount']); ?></td> 
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Subject/विषय</th>
                                                                        <td style="text-transform:capitalize"><?php echo ucfirst(str_replace("_"," ",$data['db_name'])); ?>  </td> 
                                                                    </tr>
                                                                </table>
                                                                <br>
                                                                    <table border="1" width="100%">
                                                                        <tr>
                                                                            <th>Payment Mode/देयक प्रकार </th>
                                                                            <th>Amount/ रकम  </th> 
                                                                            <th>Bank Name / बँकेचे नाव  </th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><?php  echo $data['payment_type'] ?> </td>
                                                                            <td><?php echo  convertEnglishToMarathiNumerals($data['amount']) ?></td> 
                                                                            <td><?php  echo $data['payment_bankname'] ?></td> 
                                                                        </tr>
                                                                    </table>
                                                                    <br>
                                                                        <table border="1" width="100%">
                                                                            <tr>
                                                                                <th>Application No. / अर्ज क्रमांक      </th>
                                                                                <th>Date /दिनांक     </th>
                                                                                <th>Details/माहिती </th>
                                                                                <th>Payable Amount /देय रक्कम</th>
                                                                                <th>Received Amount/स्वीकारलेली रक्कम  </th>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><?php
                                                                                    echo $appl['application_no']
                                                                                ?></td> 
                                                                                <td><?php echo date("d-m-Y",strtotime($data['timestamp'])); ?></td>
                                                                                <!--<td style="text-transform:capitalize"><?php echo eng_marathi($data['db_name']); ?> </td>-->
                                                                                <td><?php  echo $data['remark'] ?></td>
                                                                                <td><?php echo convertEnglishToMarathiNumerals($data['amount']) ?></td>
                                                                                <td><?php echo convertEnglishToMarathiNumerals($data['amount']) ?></td> 
                                                                            </tr>
                                                                            <tr>
                                                                                <th colspan="4">Total Received Amt / एकुण स्वीकृत रक्कम</th>
                                                                                <th colspan=""><?php echo convertEnglishToMarathiNumerals($data['amount']) ?></th>
                                                                            </tr>
                                                                        </table>
                                                                        <?php echo $hrec[0]['footer']; ?> 
                                                                    </div>
                                                                    <span style="<?php if(USER_ROLE!=2){ echo "display:none";} ?>">
                                                                        <?PHP echo date("d/m/Y H:i:s",strtotime($data['timestamp'])); ?><br>
                                                                            <br> <div class="dotted-line" style="border-top: 4px dotted #000;
                                                                                position: relative;" id="hideeee22">
                                                                                <img class="scissor-image" width="30px" src="https://propertytestlink.sataranp.in/assets/images/sci.jpg" style=" position: absolute;
                                                                                    top: -17px; /* Adjust this value to position the scissor image correctly */
                                                                                    left: 0%; /* Center the image horizontally */
                                                                                    transform: translateX(+50%);
                                                                                    width: 30px; /* Adjust the width of the scissor image */" alt="Scissor">
                                                                                </div>
                                                                                <br>
                                                                                    <br>
                                                                                    </span>
                                                                                    <div STYLE="border:1px solid black;">
                                                                                        <div STYLE="float:right;padding:2px;">
                                                                                            <img src="<?php echo SITE_ADDR ?>qr.php?d=<?php echo SITE_ADDR ?>demand/view/<?php echo $data['id'] ?>" width="100px" >
                                                                                                <br>Customer Copy
                                                                                                </div>
                                                                                                <?php echo $hrec[0]['header']; ?> 
                                                                                                <table border="1" width="100%">
                                                                                                    <tr>
                                                                                                        <th>Receipt No/पावती क्र.</th>
                                                                                                        <th>Date of Receipt/दिनांक</th>
                                                                                                        <th>CFC Reference/सी.एफ.सी निदेश  </th>
                                                                                                        <th>Counter Reference / खिडकी निदेश </th>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td>FIRE/<?php echo $data['id'] ?></td>
                                                                                                        <td><?php echo date("d-m-Y",strtotime($data['timestamp'])); ?></td>
                                                                                                        <td><?php echo $data['payment_counter'] ?></td>
                                                                                                        <td><?php echo $data['payment_cash_collection_center'] ?></td>
                                                                                                    </tr>
                                                                                                </table>
                                                                                                <br>
                                                                                                    <table border="1" width="100%">
                                                                                                        <tr>
                                                                                                            <th>Received From / कोणाकडुन</th>
                                                                                                            <td><?php echo $data['payment_person'] ?></td> 
                                                                                                        </tr>
                                                                                                        <tr>  <th>Amount/ रकम  </th> 
                                                                                                            <td><?php echo convertEnglishToMarathiNumerals($data['amount']) ?></td> 
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <th>Amount In Words / अक्षरी रक्कम  </th>
                                                                                                            <td style="text-transform:capitalize"><?php 
                                                                                                            echo getIndianCurrency($data['amount']); ?></td> 
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <th>Subject/विषय</th>
                                                                                                            <td style="text-transform:capitalize"><?php echo ucfirst(str_replace("_"," ",$data['db_name'])); ?>  </td> 
                                                                                                        </tr>
                                                                                                    </table>
                                                                                                    <br>
                                                                                                        <table border="1" width="100%">
                                                                                                            <tr>
                                                                                                                <th>Payment Mode/देयक प्रकार </th>
                                                                                                                <th>Amount/ रकम  </th> 
                                                                                                                <th>Bank Name / बँकेचे नाव  </th>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <td><?php  echo $data['payment_type'] ?> </td>
                                                                                                                <td><?php echo convertEnglishToMarathiNumerals($data['amount']) ?></td> 
                                                                                                                <td><?php  echo $data['payment_bankname'] ?></td> 
                                                                                                            </tr>
                                                                                                        </table>
                                                                                                        <br>
                                                                                                            <table border="1" width="100%">
                                                                                                                <tr>
                                                                                                                    <th>Application No. / अर्ज क्रमांक      </th>
                                                                                                                    <th>Date /दिनांक     </th>
                                                                                                                    <th>Details/माहिती </th>
                                                                                                                    <th>Payable Amount /देय रक्कम</th>
                                                                                                                    <th>Received Amount/स्वीकारलेली रक्कम  </th>
                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                    <td><?php    echo $appl['application_no']
                                                                                                                    ?></td>
                                                                                                                    <td><?php echo date("d-m-Y",strtotime($data['timestamp'])); ?></td>
                                                                                                                    <!--<td style="text-transform:capitalize"><?php echo eng_marathi($data['db_name']); ?>  </td> -->
                                                                                                                    <td><?php  echo $data['remark'] ?></td>
                                                                                                                    <td><?php echo convertEnglishToMarathiNumerals($data['amount']) ?></td>
                                                                                                                    <td><?php echo convertEnglishToMarathiNumerals($data['amount']) ?></td> 
                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                    <th colspan="4">Total Received Amt / एकुण स्वीकृत रक्कम</th>
                                                                                                                    <th colspan=""><?php echo convertEnglishToMarathiNumerals($data['amount']) ?></th>
                                                                                                                </tr>
                                                                                                            </table>
                                                                                                            <?php echo $hrec[0]['footer']; ?> 
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <?PHP echo date("d/m/Y H:i:s",strtotime($data['timestamp'])); ?><br>
                                                                                                    </div>
                                                                                                </div>    
                                                                                                <style>
                                                                                                    .dotted-line {
                                                                                                    border-top: 4px dotted #000;
                                                                                                    position: relative;
                                                                                                    }
                                                                                                    .scissor-image {
                                                                                                    position: absolute;
                                                                                                    top: -17px; /* Adjust this value to position the scissor image correctly */
                                                                                                    left: 0%; /* Center the image horizontally */
                                                                                                    transform: translateX(-50%);
                                                                                                    width: 30px; /* Adjust the width of the scissor image */
                                                                                                    }
                                                                                                </style>
                                                                                                <script>
                                                                                                    function printDiv(divName) {
                                                                                                    var printContents = document.getElementById(divName).innerHTML;
                                                                                                    var originalContents = document.body.innerHTML;
                                                                                                    document.body.innerHTML = printContents;
                                                                                                    window.print();
                                                                                                    document.body.innerHTML = originalContents;
                                                                                                    }
                                                                                                </script>
                                                                                            </div>
                                                                                        </div> 
                                                                                        <?php
                                                                                        }
                                                                                        }?>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </section>
