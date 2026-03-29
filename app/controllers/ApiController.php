<?php

/**
 * Info Contoller Class
 * @category  Controller
 */

class ApiController extends BaseController
{

	/**
	 * call model action to retrieve data
	 * @return json data
	 */  
	 function save_data($table){ 
	    $db=$this->GetModel();
	    foreach($_POST as $field=>$value){
	        if(is_array($field) || is_array($value)){
	            continue;
	        }
        $data = [
            "value" => $value
        ];
    
        $db->where("user_id", USER_ID); 
        $db->where("tablename", $table);
        $db->where("field", $field);
    
        if ($db->getOne("temp_data")) { 
    
        $db->where("user_id", USER_ID); 
        $db->where("tablename", $table);
        $db->where("field", $field);
            $db->update("temp_data", $data);
        } else {
            print_r([
                "user_id"  => USER_ID,
                "tablename"=> $table,
                "field"    => $field,
                "value"    => $value,
            ]);
            $db->insert("temp_data", [
                "user_id"  => USER_ID,
                "tablename"=> $table,
                "field"    => $field,
                "value"    => $value,
            ]);
        }
        }
	 }
	 function get_data($table){
	     $db = $this->GetModel();

$db->where("user_id", USER_ID);
$db->where("tablename", $table);

$rows = $db->get("temp_data", 9999, "field, value");

$data = [];

foreach ($rows as $row) {
    if ($row['value'] !== '' && $row['value'] !== null) {
        $data[$row['field']] = $row['value'];
    }
}

render_json($data);

     
	 }
	 function fire_oc_paid($txn,$id,$txnname){
	     
	    $db=$this->GetModel();
	    
	   $db->where("id",4);
	   $db->update("fire_final_noc",["payment_done"=>1]); 
	 }
	  
	 function fire_cc_paid($txn,$id,$txnname){
	     
	    $db=$this->GetModel();
	    if($id==8 || $id==12){
	   $db->where("id",$id);
	   $db->update("fire_noc_provisional_new",["payment_done"=>1]); 
	    }
	 }
	  
	 function offlineredirect(){
	     $allow=1;
	     if($allow){
	         $_SESSION['home']=SITE_ADDR;
	         echo "<script>location.href='https://singlewindowsystemkdmc.in/offline_noc/integratelogin/?mob=fire&link=application_form';</script>";
	     }else{
	         echo "<script>alert('You are not authorized');location.href='".SITE_ADDR."'";
	     }
	 }
	 function fire_prov_report(){
	    $db=$this->GetModel();
	   
	   
	    
	    $rec=$db->get("fire_noc_provisional_new",99999,"*,DATEDIFF(CURDATE(), date) AS diff_days");
	    
	    $auth1=0;
	    $auth2=0;
	    $auth3=0;
	    $complete=0;
	    $rejected=0;
	    $reverted=0;
	     
	    $p_wt_sla=0;
	    $p_w_sla=0;
	    
	    $c_wt_sla=0;
	    $c_w_sla=0;
	    $citi=0;
	    foreach($rec as $r){ 
	        if($r['status']+0==1){
	            $auth1++;
	            if($r['diff_days']+0>10){$p_wt_sla++;}else{$p_w_sla++;}
	        }    
	        if($r['status']+0==2){
	            $auth2++;
	            if($r['diff_days']+0>10){$p_wt_sla++;}else{$p_w_sla++;}
	        }    
	        if($r['status']+0==3){
	            $citizen_pay=0;
                $recpaid=$r['paid'];
                $paid=explode(",",$recpaid);
                $cont=count($paid);
                if(count($paid)==0 || $paid[$cont-1]==0 || $r['payment_done']==-5){ 
                 }elseif($r['payment_done']==0){ 
                 $citizen_pay=1;   
                }
                             
                if($citizen_pay>0){
                                                                          
                                                                      
                                                                      $citi++;
                }else{
                                         
	            $auth3++;                                 
                                                                                                                                            
	            if($r['diff_days']+0>10){$p_wt_sla++;}else{$p_w_sla++;}
                }                                                      
	        }     
	        if($r['status']=='Completed'){
	            
	            if($r['upload_noc']==""){
	                $auth3++; 
	            if($r['diff_days']+0>10){$p_wt_sla++;}else{$p_w_sla++;}
	            }else{ 
	                $complete++;
	                if($r['diff_days']+0>10){$c_wt_sla++;}else{$c_w_sla++;}
	            }
	        }      
	        if($r['status']=='Rejected'){
	            $rejected++;
	        }  
	        if($r['status']=='Reverted'){
	            $reverted++;
	        } 
	    }
	    
	    render_json([
	            'auth_1'=>$auth1,
	            'auth_2'=>$auth2,
	            'auth_3'=>$auth3,
	            'complete'=>$complete,
	            'rejected'=>$rejected,
	            'reverted'=>$reverted,
	            'citizenpay'=>$citi,
	            
	            "sla_p"=>[$p_w_sla,$p_wt_sla],
	            "sla_c"=>[$c_w_sla,$c_wt_sla], 
	        ]);
	    
	 }
	 function fire_final_report(){
	    $db=$this->GetModel();
	   
	   
	    
	    $rec=$db->get("fire_final_noc",99999,"*,DATEDIFF(CURDATE(), date) AS diff_days");
	    
	    $auth1=0;
	    $auth2=0;
	    $auth3=0;
	    $complete=0;
	    $rejected=0;$reverted=0;
	     
	    $p_wt_sla=0;
	    $p_w_sla=0;
	    
	    $c_wt_sla=0;
	    $c_w_sla=0;
	    $citi=0;
	    foreach($rec as $r){
	        if($r['status']+0==1){
	            $auth1++;
	            if($r['diff_days']+0>10){$p_wt_sla++;}else{$p_w_sla++;}
	        }    
	        if($r['status']+0==2){
	            $auth2++;
	            if($r['diff_days']+0>10){$p_wt_sla++;}else{$p_w_sla++;}
	        }    
	        if($r['status']+0==3){
	            $citizen_pay=0;
                $recpaid=$r['paid'];
                $paid=explode(",",$recpaid);
                $cont=count($paid);
                if(count($paid)==0 || $paid[$cont-1]==0 || $r['payment_done']==-5){ 
                 }elseif($r['payment_done']==0){ 
                 $citizen_pay=1;   
                }
                             
                if($citizen_pay>0){
                                                                          
                                                                      
                                                                      $citi++;
                }else{
                                         
	            $auth3++;                                 
                                                                                                                                            
	            if($r['diff_days']+0>10){$p_wt_sla++;}else{$p_w_sla++;}
                }                   
	        }     
	        if($r['status']=='Completed'){
	            if($r['upload_noc']==""){
	                $auth3++; 
	            if($r['diff_days']+0>10){$p_wt_sla++;}else{$p_w_sla++;}
	            }else{ 
	                $complete++;
	                if($r['diff_days']+0>10){$c_wt_sla++;}else{$c_w_sla++;}
	            }
	        }      
	        if($r['status']=='Rejected'){
	            $rejected++;
	        } 
	        if($r['status']=='Reverted'){
	            $reverted++;
	        } 
	    }
	    
	    render_json([
	            'auth_1'=>$auth1,
	            'auth_2'=>$auth2,
	            'auth_3'=>$auth3,
	            'complete'=>$complete,
	            'rejected'=>$rejected,
	            'reverted'=>$reverted,
	            'citizenpay'=>$citi,
	            
	            "sla_p"=>[$p_w_sla,$p_wt_sla],
	            "sla_c"=>[$c_w_sla,$c_wt_sla], 
	        ]);
	    
	 }
	 function mark_cdemand($tid,$id,$amount,$name){
	     
	    $db=$this->GetModel();
	    
        $db->where("id",$id);
        $pay=$db->getOne("demand","*");
        
        $db->where("id",$id);
        $db->update("demand",[
                "payment_person"=>$name,
                "payment_type"=>"ONLINE",
                "remark"=>"GATEWAY $tid"
            ]);
            
        $db->where("id",$pay['rec_id']);
        $db->update($pay['db_name'],["payment_done"=>1]);
	    echo $pay['rec_id'];
	    
	 }
	 
    function redirectpayments($id){
	    $db=$this->GetModel();
        $db->where("id",$id);
        $pay=$db->getOne("demand","*");
        echo "<script>";
        echo "location.href='".SITE_ADDR."../payment_gateway/?proj=FIRE&id=$id&service=".$pay['db_name']."&amount=".$pay['amount']."&checksum=".hash('sha256',date("YmdHis")."Fire".$pay['amount'])."';";
        echo "</script>";
    }
    function redirectpayments2($id){
	    $db=$this->GetModel();
        $db->where("id",$id);
        $pay=$db->getOne("demand","*");
        echo "<script>";
        echo "location.href='".SITE_ADDR."../payment_gateway/?proj=FIRE&id=$id&service=".$pay['db_name']."&amount=".$pay['amount']."&checksum=".hash('sha256',date("YmdHis")."Fire".$pay['amount'])."';";
        echo "</script>";
    }
	function update_label($cahe=0){
	    $db=$this->GetModel();
		$lables=$db->get("label_names",99999,"*");
		$pages=['add','list','edit'];
		foreach($lables as $l){
			foreach($pages as $p){
				if(file_exists("app/views/partials/".$l['db_name']."/".$p."_old.php") && $cahe==0){
					$file="app/views/partials/".$l['db_name']."/".$p."_old.php";
				}else{
					$file="app/views/partials/".$l['db_name']."/".$p.".php"; 
				}
	
				$content=file_get_contents($file);
				$fval=str_replace("_"," ",$l['field']);
				  $fval=ucwords(strtolower($fval), '\',. ');
	
				$newval=$l['label_name'];
	
				if($p=="list"){  
					$contentnew=str_replace('<th  class="td-'.$l['field'].'"> '.$fval.'</th>',
					'<th  class="td-'.$l['field'].'"> '.$newval.'</th>',$content);
					$contentnew=str_replace($fval.':',$newval.':',$content);
				}else{ 

					$contentnew=str_replace('<label class="control-label" for="'.$l['field'].'">'.$fval.' <span class="text-danger">*</span></label>',
					'<label class="control-label" for="'.$l['field'].'">'.$newval.' <span class="text-danger">*</span></label>',$content);
					$contentnew=str_replace('<label class="control-label" for="'.$l['field'].'">'.$fval.' </label>',
					'<label class="control-label" for="'.$l['field'].'">'.$newval.' </label>',$contentnew);

				}
	
				file_put_contents("app/views/partials/".$l['db_name']."/".$p."_old.php",$content);
				file_put_contents("app/views/partials/".$l['db_name']."/".$p.".php",$contentnew);
	            echo "<br><hr>app/views/partials/".$l['db_name']."/".$p.".php";
			}
			
		}
		echo "Done"; 
	}
 

    function get_provisional($id){
        $db=$this->GetModel();
        $db=$db->where("application_no",$id);
        $rec=$db->getOne("fire_noc_provisional_new","*");
        if(!isset($rec['id'])){ 
            render_json(["type"=>"error","data"=>[]]);
        }else{
            render_json(["type"=>"success","data"=>$rec]);
        }
    }
    function get_form_filled($id,$dbname){
        $db=$this->GetModel();
        // $db=$db->where("user_id",USER_ID);
        $db=$db->where("application_no",$id);
        $rec=$db->getOne($dbname,"*");
        if(!isset($rec['id'])){ 
            render_json(["type"=>"error","data"=>[]]);
        }else{
            $rec['type']='success';
            render_json($rec);
        }
    }
    
    
    function get_report_old(){
        $db=$this->GetModel();
         
    // Fetch data
    $rec = $db->rawQuery("
        SELECT
            SUM(CASE WHEN payment_done = 0  AND paid_last != 0  AND status = 2  THEN 1  ELSE 0  END) AS citizen_count ,
            SUM(CASE WHEN status = 1 THEN 1 ELSE 0 END) AS auth1, 
            SUM(CASE WHEN status = 2 THEN 1 ELSE 0 END) AS auth2, 
            SUM(CASE WHEN status = 3 THEN 1 ELSE 0 END) AS auth3,
            SUM(CASE WHEN (status = 4 or (status='Completed' and admin_report='')) THEN 1 ELSE 0 END) AS auth4,
            SUM(CASE WHEN (status='Completed' and admin_report!='') THEN 1 ELSE 0 END) AS completed,
            SUM(CASE WHEN status = 'Rejected' THEN 1 ELSE 0 END) AS rejected 
        FROM fire_noc_provisional_new
    ")[0];
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Status Report</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
@import url('https://fonts.googleapis.com/css2?family=Signika+Negative:wght@300..700&display=swap');

* {
  font-family: "Signika Negative", serif;
  font-optical-sizing: auto;
  font-weight: 400;
  font-style: normal;
}

body {
  background: linear-gradient(135deg, #eef2f3, #dfe9f3);
  color: #212529;
  min-height: 100vh;
}

h2 {
  font-weight: 700;
  text-align: center;
  margin-bottom: 2.5rem;
  color: #212529;
  background: linear-gradient(45deg, #0d6efd, #6610f2);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

.card {
    border-radius: 1rem;
    border: none;
    overflow: hidden;
    box-shadow: 0 6px 18px rgba(0, 0, 0, 0.08);
    transition: all 0.3s ease;
}
.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
}

.table {
    border-radius: 0.75rem;
    overflow: hidden;
    margin-bottom: 0;
    font-size: 0.95rem;
}
.table th, .table td {
    vertical-align: middle;
    text-align: center;
    padding: 0.65rem 0.75rem;
}
.table tbody tr:hover {
    background: #e0ebff;
    cursor: pointer;
    transition: 0.2s ease;
}

.badge {
    font-size: 0.85rem;
    padding: 0.45em 0.85em;
}

/* Charts Styling */
canvas {
  background: #fff;
  border-radius: 1rem;
  padding: 1.2rem;
  box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

canvas:hover {
  transform: scale(1.04);
  box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
}

/* Chart animation */
.chartjs-render-monitor {
  animation: fadeIn 1.2s ease-in-out;
}

@keyframes fadeIn {
  from { opacity: 0; transform: translateY(25px); }
  to { opacity: 1; transform: translateY(0); }
}

/* Container Spacing */
.container {
  max-width: 1200px;
}
 /* Legend styling */
.chart-legend {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 12px;
}
.chart-legend span {
    display: flex;
    align-items: center;
    font-size: 14px;
    gap: 6px;
}
.chart-legend span::before {
    content: "";
    display: inline-block;
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background: currentColor;
}
.table-hover tbody tr:hover {
      background-color: #f1f5ff;
      transform: scale(1.01);
      transition: 0.2s ease-in-out;
  }
  .badge {
      min-width: 50px;
      padding: 0.6em 1em;
      font-size: 0.95rem;
      box-shadow: 0 2px 6px rgba(0,0,0,0.15);
  }
  .bg-purple {
      background-color: #6f42c1 !important;
  }
  /* Updated Table Styling */
.status-table {
    width: 100%;
    border-collapse: collapse;
    font-family: "Signika Negative", sans-serif;
    font-size: 14px;
    background: #fff;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    border-radius: 10px;
    overflow: hidden;
}

.status-table thead {
    background: linear-gradient(90deg, #0d6efd, #6610f2);
    color: #fff;
    position: sticky;
    top: 0;
    z-index: 2;
}

.status-table th {
    padding: 10px 14px;
    font-weight: 600;
    border-right: 1px solid rgba(255,255,255,0.2);
}

.status-table th:first-child {
    text-align: left;
    background: #005bb5;
}

.status-table td {
    padding: 8px 12px;
    border-bottom: 1px solid #e5e5e5;
    text-align: center;
}

.status-table td:first-child {
    font-weight: 600;
    text-align: left;
    background: #f9fbfd;
}

.status-table tbody tr:nth-child(even) {
    background: #f7f9fc;
}

.status-table tbody tr:hover {
    background: #eef5ff;
    transition: 0.2s;
}

.status-table .badge {
    font-size: 0.85rem;
    padding: 0.45em 0.85em;
    border-radius: 50px;
}
/* Dashboard Title Styling - Red-Orange Version */
.dashboard-title {
    font-family: "Signika Negative", sans-serif;
    font-size: 2rem;
    font-weight: 700;
    text-align: center;
    color: #fd7e14; /* fallback color */
    margin-bottom: 2rem;
    margin-top: 2px;
    padding-top: 20px;
    position: relative;
    display: block; /* ensure block element for proper centering */
    background: linear-gradient(90deg, #fd7e14, #ff4500); /* red-orange gradient */
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

/* Animated underline */
.dashboard-title::after {
    content: '';
    display: block;
    width: 0;
    height: 4px;
    margin: 6px auto 0; /* center with auto margins */
    background: linear-gradient(90deg, #fd7e14, #ff4500); /* red-orange gradient underline */
    border-radius: 2px;
    transition: width 0.4s ease-in-out;
}

.dashboard-title:hover::after {
    width: 50%; /* expands to half of container width on hover */
}
/* ===== Additional Table Interactions ===== */

/* Table cells hover effect */
.table td {
  transition: all 0.3s ease;
}
.table td:hover {
  background: rgba(79, 70, 229, 0.05); /* subtle highlight */
  color: #4f46e5;
  font-weight: 600;
  transform: scale(1.02);
}

/* Staggered fade-in for table on page load */
.table-responsive {
  opacity: 0;
  transform: translateY(20px);
  animation: tableFadeIn 0.8s ease forwards;
  animation-delay: 0.2s;
}

@keyframes tableFadeIn {
  to {
    opacity: 1;
    transform: translateY(0);
  }
}
/* Fade-in + slide-up animation */
.fade-up {
  opacity: 0;
  transform: translateY(25px);
  transition: all 0.8s ease-out;
}

.fade-up.show {
  opacity: 1;
  transform: translateY(0);
}

/* Optional staggered effect for table rows */
.status-table tbody tr {
  opacity: 0;
  transform: translateY(15px);
  animation: fadeInUpRow 0.6s ease forwards;
}

.status-table tbody tr:nth-child(1) { animation-delay: 0.1s; }
.status-table tbody tr:nth-child(2) { animation-delay: 0.2s; }
.status-table tbody tr:nth-child(3) { animation-delay: 0.3s; }
.status-table tbody tr:nth-child(4) { animation-delay: 0.4s; }
.status-table tbody tr:nth-child(5) { animation-delay: 0.5s; }
.status-table tbody tr:nth-child(6) { animation-delay: 0.6s; }
.status-table tbody tr:nth-child(7) { animation-delay: 0.7s; }
.status-table tbody tr:nth-child(8) { animation-delay: 0.8s; }

@keyframes fadeInUpRow {
  from { opacity: 0; transform: translateY(15px); }
  to { opacity: 1; transform: translateY(0); }
}
</style>
</head>
<body class="p-4 bg-light">

            <nav class="navbar navbar-expand-lg navbar-dark bg-info shadow-sm my-navbar">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold" href="#">KDMC Fire NOC Reports</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
                    <a class="nav-link " href="get_report">FIRE PROVISIONAL </a>
                  </li><li class="nav-item">
                    <a class="nav-link " href="get_report2">FINAL FIRE</a>
                  </li> 
                  </ul>
    </div>
  </div>
</nav>

    <div class="container">
        <h2 class="dashboard-title">Provisional Fire NOC Status Report</h2>

        <!-- Table -->
        <div class="card mb-4 shadow-lg border-0 rounded-3 fade-up">
            <div class="card-body p-0">
                <table class="status-table text-center mb-0">
                    <thead>
                        <tr>
                            <th style="width:70%">Currently With</th>
                            <th style="width:30%">Count</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Citizen Payment Pending</td>
                            <td><span class="badge bg-primary"><?= $rec['citizen_count'] ?></span></td>
                        </tr>
                        <tr>
                            <td>Authority 1</td>
                            <td><span class="badge bg-purple"><?= $rec['auth1'] ?></span></td>
                        </tr>
                        <tr>
                            <td>Authority 2</td>
                            <td><span class="badge bg-secondary"><?= $rec['auth2'] ?></span></td>
                        </tr>
                        <tr>
                            <td>Authority 3</td>
                            <td><span class="badge bg-warning text-dark"><?= $rec['auth3'] ?></span></td>
                        </tr>
                        <!--<tr>-->
                        <!--    <td>Authority 4</td>-->
                        <!--    <td><span class="badge bg-info text-dark"><?= $rec['auth4'] ?></span></td>-->
                        <!--</tr>-->
                        <tr>
                            <td>Completed</td>
                            <td><span class="badge bg-success"><?= $rec['completed'] ?></span></td>
                        </tr>
                        <tr>
                            <td>Rejected</td>
                            <td><span class="badge bg-danger"><?= $rec['rejected'] ?></span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Charts -->
<div class="row fade-up">
            <!-- Bar Chart -->
            <div class="col-md-2 mb-4"></div>
            <div class="col-md-4 mb-4">
                <div class="chart-container">
                    <canvas id="barChart" width="400" height="400"></canvas>
                </div>
            </div>
    
            <!-- Pie Chart -->
            <div class="col-md-4 mb-4">
                <div class="chart-container">
                    <canvas id="pieChart" width="400" height="400"></canvas>
                </div>
            </div>
        </div>
    
        </div>
    </div>

    <script>
        const labels = [
            "Citizen Payment Pending",
            "Authority 1",
            "Authority 2",
            "Authority 3 ", 
            "Completed",
            "Rejected"  
        ];
        const dataValues = [
            <?= $rec['citizen_count'] ?>,
            <?= $rec['auth1'] ?>,
            <?= $rec['auth2'] ?>,
            <?= $rec['auth3'] ?>, 
            <?= $rec['completed'] ?>,
            <?= $rec['rejected'] ?> 
        ];
        const baseColors = [
           "#0d6efd","#6f42c1","#6c757d","#ffc107","#198754","#dc3545"
        ]; 

        // Global font settings
    Chart.defaults.font.family = "'Signika Negative', sans-serif";
    Chart.defaults.font.size = 14;

    // PIE CHART
    const pieCtx = document.getElementById("pieChart").getContext("2d");
    new Chart(pieCtx, {
        type: "pie",
        data: {
            labels: labels,
            datasets: [{
                data: dataValues,
                backgroundColor: baseColors,
                borderWidth: 2,
                borderColor: "#fff"
            }]
        },
        options: {
            plugins: {
                title: {
                    display: true,
                    text: "Commencement Certificate – Status Distribution",
                    font: { size: 18, weight: "bold" },
                    padding: { bottom: 20 }
                },
                legend: {
                    position: "bottom",
                    labels: {
                        usePointStyle: true,
                        pointStyle: "circle",
                        padding: 20,
                        font: { size: 13 }
                    }
                },
                tooltip: {
                    backgroundColor: "#000",
                    padding: 10,
                    titleFont: { size: 14, weight: "600" },
                    bodyFont: { size: 13 },
                    callbacks: {
                        label: function(context) {
                            return `${context.label}: ${context.parsed}`;
                        }
                    }
                }
            },
            animation: {
                animateScale: true,
                animateRotate: true
            }
        }
    });

    // BAR CHART
    const barCtx = document.getElementById("barChart").getContext("2d");
    new Chart(barCtx, {
        type: "bar",
        data: {
            labels: labels,
            datasets: [{
                label: "Applications",
                data: dataValues,
                backgroundColor: baseColors,
                borderRadius: 8,
                borderSkipped: false
            }]
        },
        options: {
            plugins: {
                title: {
                    display: true,
                    text: "Commencement Certificate – Status Counts",
                    font: { size: 18, weight: "bold" },
                    padding: { bottom: 20 }
                },
                legend: { display: false },
                tooltip: {
                    backgroundColor: "#000",
                    padding: 10,
                    bodyFont: { size: 13 },
                    callbacks: {
                        label: function(context) {
                            return `${context.label}: ${context.parsed.y}`;
                        }
                    }
                }
            },
            interaction: { mode: "index", intersect: false },
            scales: {
                x: {
                    ticks: { font: { size: 13 } }
                },
                y: {
                    beginAtZero: true,
                    ticks: { stepSize: 1, font: { size: 13 } },
                    grid: { color: "rgba(0,0,0,0.05)" }
                }
            },
            animation: {
                duration: 1200,
                easing: "easeOutBounce"
            }
        }
    });
    </script>
    <!-- Fade Up Script -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
          const faders = document.querySelectorAll('.fade-up');
        
          const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
              if (entry.isIntersecting) {
                entry.target.classList.add('show');
                observer.unobserve(entry.target);
              }
            });
          }, { threshold: 0.25 });
        
          faders.forEach(el => observer.observe(el));
        });
    </script>

</body>
</html>

        <?php 
    }
    function get_report(){
        $db=$this->GetModel();
         
    // Fetch data
    $rec = $db->rawQuery("
        SELECT
           
            SUM(CASE WHEN payment_done = 0  AND SUBSTRING_INDEX(paid, ',', -1) != 0  AND status = 3  THEN 1  ELSE 0  END) AS citizen_count , 
            SUM(CASE WHEN status = 1 THEN 1 ELSE 0 END) AS auth1,
            SUM(CASE WHEN status = 2 THEN 1 ELSE 0 END) AS auth2,
            SUM(CASE WHEN status = 3  AND NOT ( payment_done = 0 AND SUBSTRING_INDEX(paid, ',', -1) != 0 )THEN 1 ELSE 0 END)  AS auth3,
            SUM(CASE WHEN (status = 4 or (status='Completed' and admin_report='')) THEN 1 ELSE 0 END) AS auth4,
            SUM(CASE WHEN (status='Completed' and admin_report!='') THEN 1 ELSE 0 END) AS completed,
            SUM(CASE WHEN status = 'Rejected' THEN 1 ELSE 0 END) AS rejected,
            SUM(CASE WHEN status = 'Reverted' THEN 1 ELSE 0 END) AS reverted
        FROM fire_noc_provisional_new
    ")[0];
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Status Report</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
      <style>
@import url('https://fonts.googleapis.com/css2?family=Signika+Negative:wght@300..700&display=swap');

* {
  font-family: "Signika Negative", serif;
  font-optical-sizing: auto;
  font-weight: 400;
  font-style: normal;
}

body {
  background: linear-gradient(135deg, #eef2f3, #dfe9f3);
  color: #212529;
  min-height: 100vh;
}

h2 {
  font-weight: 700;
  text-align: center;
  margin-bottom: 2.5rem;
  color: #212529;
  background: linear-gradient(45deg, #0d6efd, #6610f2);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

.card {
    border-radius: 1rem;
    border: none;
    overflow: hidden;
    box-shadow: 0 6px 18px rgba(0, 0, 0, 0.08);
    transition: all 0.3s ease;
}
.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
}

.table {
    border-radius: 0.75rem;
    overflow: hidden;
    margin-bottom: 0;
    font-size: 0.95rem;
}
.table th, .table td {
    vertical-align: middle;
    text-align: center;
    padding: 0.65rem 0.75rem;
}
.table tbody tr:hover {
    background: #e0ebff;
    cursor: pointer;
    transition: 0.2s ease;
}

.badge {
    font-size: 0.85rem;
    padding: 0.45em 0.85em;
}

 
/* Chart animation */
.chartjs-render-monitor {
  animation: fadeIn 1.2s ease-in-out;
}

@keyframes fadeIn {
  from { opacity: 0; transform: translateY(25px); }
  to { opacity: 1; transform: translateY(0); }
}

/* Container Spacing */
.container {
  max-width: 1200px;
}
 /* Legend styling */
.chart-legend {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 12px;
}
.chart-legend span {
    display: flex;
    align-items: center;
    font-size: 14px;
    gap: 6px;
}
.chart-legend span::before {
    content: "";
    display: inline-block;
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background: currentColor;
}
.table-hover tbody tr:hover {
      background-color: #f1f5ff;
      transform: scale(1.01);
      transition: 0.2s ease-in-out;
  }
  .badge {
      min-width: 50px;
      padding: 0.6em 1em;
      font-size: 0.95rem;
      box-shadow: 0 2px 6px rgba(0,0,0,0.15);
  }
  .bg-purple {
      background-color: #6f42c1 !important;
  }
  /* Updated Table Styling */
.status-table {
    width: 100%;
    border-collapse: collapse;
    font-family: "Signika Negative", sans-serif;
    font-size: 14px;
    background: #fff;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    border-radius: 10px;
    overflow: hidden;
}

.status-table thead {
    background: linear-gradient(90deg, #0d6efd, #6610f2);
    color: #fff;
    position: sticky;
    top: 0;
    z-index: 2;
}

.status-table th {
    padding: 10px 14px;
    font-weight: 600;
    border-right: 1px solid rgba(255,255,255,0.2);
}

.status-table th:first-child {
    text-align: left;
    background: #005bb5;
}

.status-table td {
    padding: 8px 12px;
    border-bottom: 1px solid #e5e5e5;
    text-align: center;
}

.status-table td:first-child {
    font-weight: 600;
    text-align: left;
    background: #f9fbfd;
}

.status-table tbody tr:nth-child(even) {
    background: #f7f9fc;
}

.status-table tbody tr:hover {
    background: #eef5ff;
    transition: 0.2s;
}

.status-table .badge {
    font-size: 0.85rem;
    padding: 0.45em 0.85em;
    border-radius: 50px;
}
/* Dashboard Title Styling */
.dashboard-title {
    font-family: "Signika Negative", sans-serif;
    font-size: 2rem;
    font-weight: 700;
    text-align: center;
    color: #0d6efd;
    margin-bottom: 2rem;
    position: relative;
    display: block; /* ensure block element for proper centering */
    background: linear-gradient(90deg, #0d6efd, #6610f2);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    
    /* Animate entry */
    opacity: 0;
    transform: translateY(-20px);
    animation: titleFadeIn 1s ease forwards;
}

/* Animated underline */
.dashboard-title::after {
    content: '';
    display: block;
    width: 0;
    height: 4px;
    margin: 6px auto 0; /* center with auto margins */
    background: linear-gradient(90deg, #0d6efd, #6610f2);
    border-radius: 2px;
    transition: width 0.5s ease, opacity 0.5s ease;
    opacity: 0.8;
}

/* Hover effect for underline and slight text glow */
.dashboard-title:hover::after {
    width: 50%; /* expands to half of container width on hover */
    opacity: 1;
}

.dashboard-title:hover {
    text-shadow: 0 0 4px rgba(13, 110, 253, 0.3), 0 0 6px rgba(102, 16, 242, 0.25);
    transform: translateY(-2px);
    transition: all 0.4s ease;
}

/* Fade-in animation */
@keyframes titleFadeIn {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* ===== Additional Table Interactions ===== */

/* Table cells hover effect */
.table td {
  transition: all 0.3s ease;
}
.table td:hover {
  background: rgba(79, 70, 229, 0.05); /* subtle highlight */
  color: #4f46e5;
  font-weight: 600;
  transform: scale(1.02);
}

/* Staggered fade-in for table on page load */
.table-responsive {
  opacity: 0;
  transform: translateY(20px);
  animation: tableFadeIn 0.8s ease forwards;
  animation-delay: 0.2s;
}

@keyframes tableFadeIn {
  to {
    opacity: 1;
    transform: translateY(0);
  }
}
/* Fade-in + slide-up animation */
.fade-up {
  opacity: 0;
  transform: translateY(25px);
  transition: all 0.8s ease-out;
}

.fade-up.show {
  opacity: 1;
  transform: translateY(0);
}

/* Optional staggered effect for table rows */
.status-table tbody tr {
  opacity: 0;
  transform: translateY(15px);
  animation: fadeInUpRow 0.6s ease forwards;
}

.status-table tbody tr:nth-child(1) { animation-delay: 0.1s; }
.status-table tbody tr:nth-child(2) { animation-delay: 0.2s; }
.status-table tbody tr:nth-child(3) { animation-delay: 0.3s; }
.status-table tbody tr:nth-child(4) { animation-delay: 0.4s; }
.status-table tbody tr:nth-child(5) { animation-delay: 0.5s; }
.status-table tbody tr:nth-child(6) { animation-delay: 0.6s; }
.status-table tbody tr:nth-child(7) { animation-delay: 0.7s; }
.status-table tbody tr:nth-child(8) { animation-delay: 0.8s; }

@keyframes fadeInUpRow {
  from { opacity: 0; transform: translateY(15px); }
  to { opacity: 1; transform: translateY(0); }
}


</style>
</head>
<body class="p-4 bg-light">

            <nav class="navbar navbar-expand-lg navbar-dark bg-info shadow-sm my-navbar">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold" href="#">KDMC Fire NOC Reports</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
                    <a class="nav-link " href="get_report">FIRE PROVISIONAL </a>
                  </li><li class="nav-item">
                    <a class="nav-link " href="get_report2">FINAL FIRE</a>
                  </li> 
                  </ul>
    </div>
  </div>
</nav>

    <div class="container">
        <h2 class="dashboard-title">Fire Provisional NOC Status Report</h2>

        <!-- Table -->
        <div class="card mb-4 shadow-lg border-0 rounded-3 fade-up">
            <div class="card-body p-0">
                <table class="status-table text-center mb-0">
                    <thead>
                        <tr>
                            <th style="width:70%">Currently With</th>
                            <th style="width:30%">Count</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Citizen Payment Pending</td>
                            <td><span class="badge bg-primary"><?= $rec['citizen_count'] ?></span></td>
                        </tr>
                        <tr>
                            <td>Authority 1</td>
                            <td><span class="badge bg-purple"><?= $rec['auth1'] ?></span></td>
                        </tr>
                        <tr>
                            <td>Authority 2</td>
                            <td><span class="badge bg-secondary"><?= $rec['auth2'] ?></span></td>
                        </tr> 
                        <tr>
                            <td>Authority 3</td>
                            <td><span class="badge bg-warning text-dark"><?= $rec['auth3'] ?></span></td>
                        </tr>
                        <!--<tr>-->
                        <!--    <td>Authority 4</td>-->
                        <!--    <td><span class="badge bg-info text-dark"><?= $rec['auth4'] ?></span></td>-->
                        <!--</tr>-->
                        <tr>
                            <td>Completed</td>
                            <td><span class="badge bg-success"><?= $rec['completed'] ?></span></td>
                        </tr>
                        <!-- Reverted -->
                        <tr>
                            <td>Reverted</td>
                            <td><span class="badge bg-info text-dark"><?= $rec['reverted'] ?></span></td>
                        </tr>
                        <tr>
                            <td>Rejected</td>
                            <td><span class="badge bg-danger"><?= $rec['rejected'] ?></span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Charts -->
        <div class="row fade-up">
            <div class="col-md-6 mb-4">
                <canvas id="pieChart" width="400" height="400"></canvas>
            </div>
            <div class="col-md-6 mb-4">
                <canvas id="barChart" width="400" height="400"></canvas>
            </div>
        </div>
    </div>


</body>
</html>
    <script>
    
        const labels = [
            "Citizen",
            "Authority 1",
            "Authority 2",
            "Authority 3",
            "Completed",
            "Reverted",
            "Rejected"
        ];
        const dataValues = [
            <?= $rec['citizen_count'] ?>,
            <?= $rec['auth1'] ?>,
            <?= $rec['auth2'] ?>,
            <?= $rec['auth3'] ?>,
            <?= $rec['completed'] ?>,
            <?= $rec['reverted'] ?>,
            <?= $rec['rejected'] ?>
        ];
        const baseColors = [
            "#0d6efd", // Citizen - Blue
            "#6f42c1", // Authority 1 - Purple
            "#6c757d", // Authority 2 - Grey
            "#ffc107", // Authority 3 - Yellow
            "#198754", // Completed - Green
            "#0dcaf0", // Reverted - Cyan / Info
            "#dc3545"  // Rejected - Red
        ];


    // Global font settings
    Chart.defaults.font.family = "'Signika Negative', sans-serif";
    Chart.defaults.font.size = 14;

    // PIE CHART
    const pieCtx = document.getElementById("pieChart").getContext("2d");
    new Chart(pieCtx, {
        type: "pie",
        data: {
            labels: labels,
            datasets: [{
                data: dataValues,
                backgroundColor: baseColors,
                borderWidth: 2,
                borderColor: "#fff"
            }]
        },
        options: {
            plugins: {
                title: {
                    display: true,
                    text: "Commencement Certificate – Status Distribution",
                    font: { size: 18, weight: "bold" },
                    padding: { bottom: 20 }
                },
                legend: {
                    position: "bottom",
                    labels: {
                        usePointStyle: true,
                        pointStyle: "circle",
                        padding: 20,
                        font: { size: 13 }
                    }
                },
                tooltip: {
                    backgroundColor: "#000",
                    padding: 10,
                    titleFont: { size: 14, weight: "600" },
                    bodyFont: { size: 13 },
                    callbacks: {
                        label: function(context) {
                            return `${context.label}: ${context.parsed}`;
                        }
                    }
                }
            },
            animation: {
                animateScale: true,
                animateRotate: true
            }
        }
    });

    // BAR CHART
    const barCtx = document.getElementById("barChart").getContext("2d");
    new Chart(barCtx, {
        type: "bar",
        data: {
            labels: labels,
            datasets: [{
                label: "Applications",
                data: dataValues,
                backgroundColor: baseColors,
                borderRadius: 8,
                borderSkipped: false
            }]
        },
        options: {
            plugins: {
                title: {
                    display: true,
                    text: "Commencement Certificate – Status Counts",
                    font: { size: 18, weight: "bold" },
                    padding: { bottom: 20 }
                },
                legend: { display: false },
                tooltip: {
                    backgroundColor: "#000",
                    padding: 10,
                    bodyFont: { size: 13 },
                    callbacks: {
                        label: function(context) {
                            return `${context.label}: ${context.parsed.y}`;
                        }
                    }
                }
            },
            interaction: { mode: "index", intersect: false },
            scales: {
                x: {
                    ticks: { font: { size: 13 } }
                },
                y: {
                    beginAtZero: true,
                    ticks: { stepSize: 1, font: { size: 13 } },
                    grid: { color: "rgba(0,0,0,0.05)" }
                }
            },
            animation: {
                duration: 1200,
                easing: "easeOutBounce"
            }
        }
    });
</script>
    <!--Fade Up Script-->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
          const faders = document.querySelectorAll('.fade-up');
        
          const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
              if (entry.isIntersecting) {
                entry.target.classList.add('show');
                observer.unobserve(entry.target);
              }
            });
          }, { threshold: 0.2 });
        
          faders.forEach(el => observer.observe(el));
        });
    </script>


        <?php 
    }
    function get_report2(){
        $db=$this->GetModel();
         
    // Fetch data
    $rec = $db->rawQuery("
        SELECT
            SUM(CASE WHEN payment_done = 0  AND SUBSTRING_INDEX(paid, ',', -1) != 0  AND status = 3  THEN 1  ELSE 0  END) AS citizen_count , 
            SUM(CASE WHEN status = 1 THEN 1 ELSE 0 END) AS auth1,
            SUM(CASE WHEN status = 2 THEN 1 ELSE 0 END) AS auth2,
            SUM(CASE WHEN status = 3  AND NOT ( payment_done = 0 AND SUBSTRING_INDEX(paid, ',', -1) != 0 )THEN 1 ELSE 0 END)  AS auth3,
            SUM(CASE WHEN (status = 4 or (status='Completed' and admin_report='')) THEN 1 ELSE 0 END) AS auth4,
            SUM(CASE WHEN (status='Completed' and admin_report!='') THEN 1 ELSE 0 END) AS completed,
            SUM(CASE WHEN status = 'Rejected' THEN 1 ELSE 0 END) AS rejected,
            SUM(CASE WHEN status = 'Reverted' THEN 1 ELSE 0 END) AS reverted
        FROM fire_final_noc
    ")[0];
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Status Report</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
@import url('https://fonts.googleapis.com/css2?family=Signika+Negative:wght@300..700&display=swap');

* {
  font-family: "Signika Negative", serif;
  font-optical-sizing: auto;
  font-weight: 400;
  font-style: normal;
}

body {
  background: linear-gradient(135deg, #eef2f3, #dfe9f3);
  color: #212529;
  min-height: 100vh;
}

h2 {
  font-weight: 700;
  text-align: center;
  margin-bottom: 2.5rem;
  color: #212529;
  background: linear-gradient(45deg, #0d6efd, #6610f2);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

.card {
    border-radius: 1rem;
    border: none;
    overflow: hidden;
    box-shadow: 0 6px 18px rgba(0, 0, 0, 0.08);
    transition: all 0.3s ease;
}
.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
}

.table {
    border-radius: 0.75rem;
    overflow: hidden;
    margin-bottom: 0;
    font-size: 0.95rem;
}
.table th, .table td {
    vertical-align: middle;
    text-align: center;
    padding: 0.65rem 0.75rem;
}
.table tbody tr:hover {
    background: #e0ebff;
    cursor: pointer;
    transition: 0.2s ease;
}

.badge {
    font-size: 0.85rem;
    padding: 0.45em 0.85em;
}

/* Charts Styling */
canvas {
  background: #fff;
  border-radius: 1rem;
  padding: 1.2rem;
  box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

canvas:hover {
  transform: scale(1.04);
  box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
}

/* Chart animation */
.chartjs-render-monitor {
  animation: fadeIn 1.2s ease-in-out;
}

@keyframes fadeIn {
  from { opacity: 0; transform: translateY(25px); }
  to { opacity: 1; transform: translateY(0); }
}

/* Container Spacing */
.container {
  max-width: 1200px;
}
 /* Legend styling */
.chart-legend {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 12px;
}
.chart-legend span {
    display: flex;
    align-items: center;
    font-size: 14px;
    gap: 6px;
}
.chart-legend span::before {
    content: "";
    display: inline-block;
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background: currentColor;
}
.table-hover tbody tr:hover {
      background-color: #f1f5ff;
      transform: scale(1.01);
      transition: 0.2s ease-in-out;
  }
  .badge {
      min-width: 50px;
      padding: 0.6em 1em;
      font-size: 0.95rem;
      box-shadow: 0 2px 6px rgba(0,0,0,0.15);
  }
  .bg-purple {
      background-color: #6f42c1 !important;
  }
  /* Updated Table Styling */
.status-table {
    width: 100%;
    border-collapse: collapse;
    font-family: "Signika Negative", sans-serif;
    font-size: 14px;
    background: #fff;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    border-radius: 10px;
    overflow: hidden;
}

.status-table thead {
    background: linear-gradient(90deg, #0d6efd, #6610f2);
    color: #fff;
    position: sticky;
    top: 0;
    z-index: 2;
}

.status-table th {
    padding: 10px 14px;
    font-weight: 600;
    border-right: 1px solid rgba(255,255,255,0.2);
}

.status-table th:first-child {
    text-align: left;
    background: #005bb5;
}

.status-table td {
    padding: 8px 12px;
    border-bottom: 1px solid #e5e5e5;
    text-align: center;
}

.status-table td:first-child {
    font-weight: 600;
    text-align: left;
    background: #f9fbfd;
}

.status-table tbody tr:nth-child(even) {
    background: #f7f9fc;
}

.status-table tbody tr:hover {
    background: #eef5ff;
    transition: 0.2s;
}

.status-table .badge {
    font-size: 0.85rem;
    padding: 0.45em 0.85em;
    border-radius: 50px;
}
/* Dashboard Title Styling - Red-Orange Version */
.dashboard-title {
    font-family: "Signika Negative", sans-serif;
    font-size: 2rem;
    font-weight: 700;
    text-align: center;
    color: #fd7e14; /* fallback color */
    margin-bottom: 2rem;
    margin-top: 2px;
    padding-top: 20px;
    position: relative;
    display: block; /* ensure block element for proper centering */
    background: linear-gradient(90deg, #fd7e14, #ff4500); /* red-orange gradient */
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

/* Animated underline */
.dashboard-title::after {
    content: '';
    display: block;
    width: 0;
    height: 4px;
    margin: 6px auto 0; /* center with auto margins */
    background: linear-gradient(90deg, #fd7e14, #ff4500); /* red-orange gradient underline */
    border-radius: 2px;
    transition: width 0.4s ease-in-out;
}

.dashboard-title:hover::after {
    width: 50%; /* expands to half of container width on hover */
}
/* ===== Additional Table Interactions ===== */

/* Table cells hover effect */
.table td {
  transition: all 0.3s ease;
}
.table td:hover {
  background: rgba(79, 70, 229, 0.05); /* subtle highlight */
  color: #4f46e5;
  font-weight: 600;
  transform: scale(1.02);
}

/* Staggered fade-in for table on page load */
.table-responsive {
  opacity: 0;
  transform: translateY(20px);
  animation: tableFadeIn 0.8s ease forwards;
  animation-delay: 0.2s;
}

@keyframes tableFadeIn {
  to {
    opacity: 1;
    transform: translateY(0);
  }
}
/* Fade-in + slide-up animation */
.fade-up {
  opacity: 0;
  transform: translateY(25px);
  transition: all 0.8s ease-out;
}

.fade-up.show {
  opacity: 1;
  transform: translateY(0);
}

/* Optional staggered effect for table rows */
.status-table tbody tr {
  opacity: 0;
  transform: translateY(15px);
  animation: fadeInUpRow 0.6s ease forwards;
}

.status-table tbody tr:nth-child(1) { animation-delay: 0.1s; }
.status-table tbody tr:nth-child(2) { animation-delay: 0.2s; }
.status-table tbody tr:nth-child(3) { animation-delay: 0.3s; }
.status-table tbody tr:nth-child(4) { animation-delay: 0.4s; }
.status-table tbody tr:nth-child(5) { animation-delay: 0.5s; }
.status-table tbody tr:nth-child(6) { animation-delay: 0.6s; }
.status-table tbody tr:nth-child(7) { animation-delay: 0.7s; }
.status-table tbody tr:nth-child(8) { animation-delay: 0.8s; }

@keyframes fadeInUpRow {
  from { opacity: 0; transform: translateY(15px); }
  to { opacity: 1; transform: translateY(0); }
}
</style>
</head>
<body class="p-4 bg-light">

            <nav class="navbar navbar-expand-lg navbar-dark bg-info shadow-sm my-navbar">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold" href="#">KDMC Fire NOC Reports</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
                    <a class="nav-link " href="get_report">FIRE PROVISIONAL </a>
                  </li><li class="nav-item">
                    <a class="nav-link " href="get_report2">FINAL FIRE</a>
                  </li> 
                  </ul>
    </div>
  </div>
</nav>

    <div class="container">
        <h2 class="dashboard-title">Fire Final NOC Status Report</h2>

        <!-- Table -->
        <div class="card mb-4 shadow-lg border-0 rounded-3 fade-up">
            <div class="card-body p-0">
                <table class="status-table text-center mb-0">
                    <thead>
                        <tr>
                            <th style="width:70%">Currently With</th>
                            <th style="width:30%">Count</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Citizen Payment Pending</td>
                            <td><span class="badge bg-primary"><?= $rec['citizen_count'] ?></span></td>
                        </tr>
                        <tr>
                            <td>Authority 1</td>
                            <td><span class="badge bg-purple"><?= $rec['auth1'] ?></span></td>
                        </tr>
                        <tr>
                            <td>Authority 2</td>
                            <td><span class="badge bg-secondary"><?= $rec['auth2'] ?></span></td>
                        </tr> 
                        <tr>
                            <td>Authority 3</td>
                            <td><span class="badge bg-warning text-dark"><?= $rec['auth3'] ?></span></td>
                        </tr>
                        <!--<tr>-->
                        <!--    <td>Authority 4</td>-->
                        <!--    <td><span class="badge bg-info text-dark"><?= $rec['auth4'] ?></span></td>-->
                        <!--</tr>-->
                        <tr>
                            <td>Completed</td>
                            <td><span class="badge bg-success"><?= $rec['completed'] ?></span></td>
                        </tr>
                        <!-- Reverted -->
                        <tr>
                            <td>Reverted</td>
                            <td><span class="badge bg-info text-dark"><?= $rec['reverted'] ?></span></td>
                        </tr>
                        <tr>
                            <td>Rejected</td>
                            <td><span class="badge bg-danger"><?= $rec['rejected'] ?></span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Charts -->
        <div class="row fadu-up">
            <div class="col-md-6 mb-4">
                <canvas id="pieChart"></canvas>
            </div>
            <div class="col-md-6 mb-4">
                <canvas id="barChart"></canvas>
            </div>
        </div>
    </div>

    <script>
        const labels = [
            "Citizen",
            "Authority 1",
            "Authority 2",
            "Authority 3 ", 
            "Completed",
            "Reverted",
            "Rejected"  
        ];
        const dataValues = [
            <?= $rec['citizen_count'] ?>,
            <?= $rec['auth1'] ?>,
            <?= $rec['auth2'] ?>,
            <?= $rec['auth3'] ?>, 
            <?= $rec['completed'] ?>,
            <?= $rec['reverted'] ?>,
            <?= $rec['rejected'] ?> 
        ];
        const baseColors = [
            "#0d6efd", // Citizen - Blue
            "#6f42c1", // Authority 1 - Purple
            "#6c757d", // Authority 2 - Grey
            "#ffc107", // Authority 3 - Yellow
            "#198754", // Completed - Green
            "#0dcaf0", // Reverted - Cyan / Info
            "#dc3545"  // Rejected - Red
        ];

        // Global font settings
    Chart.defaults.font.family = "'Signika Negative', sans-serif";
    Chart.defaults.font.size = 14;

    // PIE CHART
    const pieCtx = document.getElementById("pieChart").getContext("2d");
    new Chart(pieCtx, {
        type: "pie",
        data: {
            labels: labels,
            datasets: [{
                data: dataValues,
                backgroundColor: baseColors,
                borderWidth: 2,
                borderColor: "#fff"
            }]
        },
        options: {
            plugins: {
                title: {
                    display: true,
                    text: "Commencement Certificate – Status Distribution",
                    font: { size: 18, weight: "bold" },
                    padding: { bottom: 20 }
                },
                legend: {
                    position: "bottom",
                    labels: {
                        usePointStyle: true,
                        pointStyle: "circle",
                        padding: 20,
                        font: { size: 13 }
                    }
                },
                tooltip: {
                    backgroundColor: "#000",
                    padding: 10,
                    titleFont: { size: 14, weight: "600" },
                    bodyFont: { size: 13 },
                    callbacks: {
                        label: function(context) {
                            return `${context.label}: ${context.parsed}`;
                        }
                    }
                }
            },
            animation: {
                animateScale: true,
                animateRotate: true
            }
        }
    });

    // BAR CHART
    const barCtx = document.getElementById("barChart").getContext("2d");
    new Chart(barCtx, {
        type: "bar",
        data: {
            labels: labels,
            datasets: [{
                label: "Applications",
                data: dataValues,
                backgroundColor: baseColors,
                borderRadius: 8,
                borderSkipped: false
            }]
        },
        options: {
            plugins: {
                title: {
                    display: true,
                    text: "Commencement Certificate – Status Counts",
                    font: { size: 18, weight: "bold" },
                    padding: { bottom: 20 }
                },
                legend: { display: false },
                tooltip: {
                    backgroundColor: "#000",
                    padding: 10,
                    bodyFont: { size: 13 },
                    callbacks: {
                        label: function(context) {
                            return `${context.label}: ${context.parsed.y}`;
                        }
                    }
                }
            },
            interaction: { mode: "index", intersect: false },
            scales: {
                x: {
                    ticks: { font: { size: 13 } }
                },
                y: {
                    beginAtZero: true,
                    ticks: { stepSize: 1, font: { size: 13 } },
                    grid: { color: "rgba(0,0,0,0.05)" }
                }
            },
            animation: {
                duration: 1200,
                easing: "easeOutBounce"
            }
        }
    });
    </script>
    <!-- Fade Up Script -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
          const faders = document.querySelectorAll('.fade-up');
        
          const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
              if (entry.isIntersecting) {
                entry.target.classList.add('show');
                observer.unobserve(entry.target);
              }
            });
          }, { threshold: 0.25 });
        
          faders.forEach(el => observer.observe(el));
        });
    </script>
</body>
</html>

        <?php 
    }
    
    function final_report(){
        $db=$this->GetModel();
        $rec = $db->rawQuery("
    SELECT
        SUM(citizen_count) AS citizen_count,
        SUM(auth1) AS auth1,
        SUM(auth2) AS auth2,
        SUM(auth3) AS auth3,
        SUM(auth4) AS auth4,
        SUM(completed) AS completed,
        SUM(reverted) AS reverted,
        SUM(rejected) AS rejected
    FROM (
        SELECT
            SUM(CASE WHEN status = '0' THEN 1 ELSE 0 END) AS citizen_count,
            SUM(CASE WHEN status = 1 THEN 1 ELSE 0 END) AS auth1,
            SUM(CASE WHEN status = 2 THEN 1 ELSE 0 END) AS auth2,
            SUM(CASE WHEN status = 3 THEN 1 ELSE 0 END) AS auth3,
            SUM(CASE WHEN (status = 4 or (status='Completed' and admin_report='')) THEN 1 ELSE 0 END) AS auth4,
            SUM(CASE WHEN (status='Completed' and admin_report!='') THEN 1 ELSE 0 END) AS completed,
            SUM(CASE WHEN status = 'Reverted' THEN 1 ELSE 0 END) AS reverted,
            SUM(CASE WHEN status = 'Rejected' THEN 1 ELSE 0 END) AS rejected 
        FROM fire_noc_provisional_new

        UNION ALL

        SELECT
            SUM(CASE WHEN status = '0' THEN 1 ELSE 0 END) AS citizen_count,
            SUM(CASE WHEN status = 1 THEN 1 ELSE 0 END) AS auth1,
            SUM(CASE WHEN status = 2 THEN 1 ELSE 0 END) AS auth2,
            SUM(CASE WHEN status = 3 THEN 1 ELSE 0 END) AS auth3,
            SUM(CASE WHEN (status = 4 or (status='Completed' and admin_report='')) THEN 1 ELSE 0 END) AS auth4,
            SUM(CASE WHEN (status='Completed' and admin_report!='') THEN 1 ELSE 0 END) AS completed,
            SUM(CASE WHEN status = 'Reverted' THEN 1 ELSE 0 END) AS reverted,
            SUM(CASE WHEN status = 'Rejected' THEN 1 ELSE 0 END) AS rejected 
        FROM fire_final_noc
    ) AS combined
")[0];

$dailyData = $db->rawQuery("
    SELECT date, COUNT(*) as total
    FROM (
        SELECT DATE(date) AS date FROM fire_noc_provisional_new
        UNION ALL
        SELECT DATE(date) AS date FROM fire_final_noc
    ) AS combined
    GROUP BY date
    ORDER BY date DESC
"); 
$dates = [];
$totals = [];

foreach ($dailyData as $row) {
    $dates[] = $row['date'];
    $totals[] = $row['total'];
}
?>


<script>
location.href='get_report'
    const dailyLabels = <?= json_encode($dates) ?>;
    const dailyCounts = <?= json_encode($totals) ?>;
</script> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title class="dashboard-title">FIRE DEPARTMENT KDMC REPORT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS & Chart.js -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
@import url('https://fonts.googleapis.com/css2?family=Signika+Negative:wght@300..700&display=swap');

* {
  font-family: "Signika Negative", serif;
  font-optical-sizing: auto;
  font-weight: 400;
  font-style: normal;
}

body {
  background: linear-gradient(135deg, #eef2f3, #dfe9f3);
  color: #212529;
  min-height: 100vh;
}

h2 {
  font-weight: 700;
  text-align: center;
  margin-bottom: 2.5rem;
  color: #212529;
  background: linear-gradient(45deg, #0d6efd, #6610f2);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

.card {
    border-radius: 1rem;
    border: none;
    overflow: hidden;
    box-shadow: 0 6px 18px rgba(0, 0, 0, 0.08);
    transition: all 0.3s ease;
}
.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
}

.table {
    border-radius: 0.75rem;
    overflow: hidden;
    margin-bottom: 0;
    font-size: 0.95rem;
}
.table th, .table td {
    vertical-align: middle;
    text-align: center;
    padding: 0.65rem 0.75rem;
}
.table tbody tr:hover {
    background: #e0ebff;
    cursor: pointer;
    transition: 0.2s ease;
}

.badge {
    font-size: 0.85rem;
    padding: 0.45em 0.85em;
}

/* Charts Styling */
 
 

@keyframes fadeIn {
  from { opacity: 0; transform: translateY(25px); }
  to { opacity: 1; transform: translateY(0); }
}

/* Container Spacing */
.container {
  max-width: 1200px;
}
 /* Legend styling */
.chart-legend {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 12px;
}
.chart-legend span {
    display: flex;
    align-items: center;
    font-size: 14px;
    gap: 6px;
}
.chart-legend span::before {
    content: "";
    display: inline-block;
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background: currentColor;
}
.table-hover tbody tr:hover {
      background-color: #f1f5ff;
      transform: scale(1.01);
      transition: 0.2s ease-in-out;
  }
  .badge {
      min-width: 50px;
      padding: 0.6em 1em;
      font-size: 0.95rem;
      box-shadow: 0 2px 6px rgba(0,0,0,0.15);
  }
  .bg-purple {
      background-color: #6f42c1 !important;
  }
  /* Updated Table Styling */
    /* Status Table Styling */
.status-table {
    font-family: "Signika Negative", sans-serif;
    font-size: 14px;
    border-radius: 10px;
    overflow: hidden;
    background: #fff;
    box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    border: 2px solid #28a745; /* Green border for table */
}

.status-table thead {
    background: linear-gradient(90deg, #28a745, #218838); /* green gradient header */
    color: #fff;
    text-transform: uppercase;
    font-weight: 600;
}

.status-table th, .status-table td {
    padding: 12px 15px;
    border: 1px solid #c8e6c9; /* light green borders */
    transition: all 0.3s ease;
    font-weight: bold;
}

.status-table tbody tr:nth-child(even) {
    background-color: #f3f8f4; /* light green tint */
}

.status-table tbody tr:hover {
    background: #d4edda; /* hover light green */
    transform: scale(1.01);
    box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    transition: all 0.3s ease;
}

.status-table td span.badge {
    display: inline-block;
    min-width: 40px;
    padding: 5px 10px;
    border-radius: 20px;
    color: #fff;
    font-weight: 600;
}

/* Badge colors */
.status-table td span.citizen { background-color: #6c575d; }
.status-table td span.cg { background-color: #6f42c1; }
.status-table td span.gs { background-color: #d406a9; }
.status-table td span.gs-tippni { background-color: #ffc107; color: #212529; } /* fixed white text issue */
.status-table td span.dmc { background-color: #17a2b8; }
.status-table td span.completed { background-color: #28a745; }
.status-table td span.rejected { background-color: #dc3545; }
.status-table td span.cancelled { background-color: #6c757d; }

/* Dashboard Title Styling - Red-Orange Version */
.dashboard-title {
    font-family: "Signika Negative", sans-serif;
    font-size: 2rem;
    font-weight: 700;
    text-align: center;
    color: #fd7e14; /* fallback color */
    margin-bottom: 2rem;
    margin-top: 2px;
    padding-top: 20px;
    position: relative;
    display: block; /* ensure block element for proper centering */
    background: linear-gradient(90deg, #fd7e14, #ff4500); /* red-orange gradient */
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

/* Animated underline */
.dashboard-title::after {
    content: '';
    display: block;
    width: 0;
    height: 4px;
    margin: 6px auto 0; /* center with auto margins */
    background: linear-gradient(90deg, #fd7e14, #ff4500); /* red-orange gradient underline */
    border-radius: 2px;
    transition: width 0.4s ease-in-out;
}

.dashboard-title:hover::after {
    width: 50%; /* expands to half of container width on hover */
}
/* ===== Additional Table Interactions ===== */

/* Table cells hover effect */
.table td {
  transition: all 0.3s ease;
}
.table td:hover {
  background: rgba(79, 70, 229, 0.05); /* subtle highlight */
  color: #4f46e5;
  font-weight: 600;
  transform: scale(1.02);
}

/* Staggered fade-in for table on page load */
.table-responsive {
  opacity: 0;
  transform: translateY(20px);
  animation: tableFadeIn 0.8s ease forwards;
  animation-delay: 0.2s;
}

@keyframes tableFadeIn {
  to {
    opacity: 1;
    transform: translateY(0);
  }
}
/* Fade-in + slide-up animation */
.fade-up {
  opacity: 0;
  transform: translateY(25px);
  transition: all 0.8s ease-out;
}

.fade-up.show {
  opacity: 1;
  transform: translateY(0);
}

/* Optional staggered effect for table rows */
.status-table tbody tr {
  opacity: 0;
  transform: translateY(15px);
  animation: fadeInUpRow 0.6s ease forwards;
}

.status-table tbody tr:nth-child(1) { animation-delay: 0.1s; }
.status-table tbody tr:nth-child(2) { animation-delay: 0.2s; }
.status-table tbody tr:nth-child(3) { animation-delay: 0.3s; }
.status-table tbody tr:nth-child(4) { animation-delay: 0.4s; }
.status-table tbody tr:nth-child(5) { animation-delay: 0.5s; }
.status-table tbody tr:nth-child(6) { animation-delay: 0.6s; }
.status-table tbody tr:nth-child(7) { animation-delay: 0.7s; }
.status-table tbody tr:nth-child(8) { animation-delay: 0.8s; }

@keyframes fadeInUpRow {
  from { opacity: 0; transform: translateY(15px); }
  to { opacity: 1; transform: translateY(0); }
}
</style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-info shadow-sm my-navbar">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold" href="#">KDMC Fire NOC Reports</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
                    <a class="nav-link " href="get_report">FIRE PROVISIONAL </a>
                  </li><li class="nav-item">
                    <a class="nav-link " href="get_report2">FINAL FIRE</a>
                  </li> 
                  </ul>
    </div>
  </div>
</nav>
    <h1 class="dashboard-title">FIRE DEPARTMENT KDMC REPORT</h1>

    <!-- Data Table -->
    <div class="container mb-4 fade-up">
        <div class="table-responsive">
            <table class="table status-table text-center align-middle ">
                <thead>
                    <tr>
                        <th>Citizen Payment Pending</th>
                        <th>Auth Level 1</th>
                        <th>Auth Level 2</th>
                        <th>Auth Level 3</th>
                        <th>Auth Level 4</th>
                        <th>Completed</th>
                        <th>Reverted</th>
                        <th>Rejected</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><span class="badge citizen"><?= $rec['citizen_count'] ?></span></td>
                        <td><span class="badge cg"><?= $rec['auth1'] ?></span></td>
                        <td><span class="badge gs"><?= $rec['auth2'] ?></span></td>
                        <td><span class="badge gs-tippni"><?= $rec['auth3'] ?></span></td>
                        <td><span class="badge dmc"><?= $rec['auth4'] ?></span></td>
                        <td><span class="badge completed"><?= $rec['completed'] ?></span></td>
                        <td><span class="badge cancelled"><?= $rec['reverted'] ?></span></td>
                        <td><span class="badge rejected"><?= $rec['rejected'] ?></span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Charts Section -->
    <div class="container">
        <div class="row fade-up">
            <!-- Bar Chart -->
            <div class="col-md-2 mb-4"></div>
            <div class="col-md-4 mb-4">
                <div class="chart-container">
                    <canvas id="barChart" width="400" height="400"></canvas>
                </div>
            </div>
    
            <!-- Pie Chart -->
            <div class="col-md-4 mb-4">
                <div class="chart-container">
                    <canvas id="pieChart" width="400" height="400"></canvas>
                </div>
            </div>
        </div>
    
        <!-- Daily Applications Line Chart -->
        <div class="row fade-up d-none">
            <div class="col-2"></div>
            <div class="col-8">
                <div class="chart-container">
                    <h4 class="text-center text-success mb-3">Daily Applications Trend</h4>
                    <canvas id="dailyChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <script>
    // Daily Applications Line Chart
new Chart(document.getElementById('dailyChart'), {
    type: 'line',
    data: {
        labels: dailyLabels,
        datasets: [{
            label: 'Applications per Day',
            data: dailyCounts,
            fill: false,
            borderColor: '#0d6efd',
            backgroundColor: '#0d6efd',
            tension: 0.3,
            pointRadius: 4,
            pointBackgroundColor: '#0d6efd'
        }]
    },
    options: {
        responsive: true,
        plugins: {
            title: {
                display: true,
                text: 'Daily Applications',
                font: { size: 18 }
            }
        },
        scales: {
            x: {
                title: {
                    display: true,
                    text: 'Date'
                },
                ticks: {
                    maxRotation: 90,
                    minRotation: 45
                }
            },
            y: {
                beginAtZero: true,
                title: {
                    display: true,
                    text: 'Total Applications'
                }
            }
        }
    }
});


        const data = {
            citizen_count: <?= $rec['citizen_count'] ?>,
            auth1: <?= $rec['auth1'] ?>,
            auth2: <?= $rec['auth2'] ?>,
            auth3: <?= $rec['auth3'] ?>,
            auth4: <?= $rec['auth4'] ?>,
            completed: <?= $rec['completed'] ?>,
            reverted: <?= $rec['reverted'] ?>,
            rejected: <?= $rec['rejected'] ?>
        };

        const labels = [
            'Citizen Payment Pending',
            'Auth 1',
            'Auth 2',
            'Auth 3',
            'Auth 4',
            'Completed',
            'Reverted',
            'Rejected'
        ];
        
        const values = [
            data.citizen_count,
            data.auth1,
            data.auth2,
            data.auth3,
            data.auth4,
            data.completed,
            data.reverted,
            data.rejected
        ];
        
       const baseColors = [
            "#6c575d", // Citizen
            "#6f42c1", // Auth 1
            "#d406a9", // Auth 2
            "#ffc107", // Auth 3
            "#17a2b8", // Auth 4
            "#28a745", // Completed
            "#ff9da7", // Reverted
            "#dc3545"  // Rejected
        ];

        // Global font settings
        Chart.defaults.font.family = "'Signika Negative', sans-serif";
        Chart.defaults.font.size = 14;
        
        // -------------------- Pie Chart --------------------
        new Chart(document.getElementById('pieChart'), {
            type: 'pie',
            data: {
                labels: labels,
                datasets: [{
                    data: values,
                    backgroundColor: baseColors,
                    borderWidth: 2,
                    borderColor: "#fff"
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    title: {
                        display: true,
                        text: 'Status Proportion - Pie Chart',
                        font: { size: 18, weight: 'bold' },
                        padding: { bottom: 20 }
                    },
                    legend: {
                        position: 'bottom',
                        labels: { usePointStyle: true, pointStyle: 'circle', font: { size: 13 } }
                    },
                    tooltip: {
                        backgroundColor: '#000',
                        padding: 10,
                        titleFont: { size: 14, weight: '600' },
                        bodyFont: { size: 13 },
                        callbacks: { label: ctx => `${ctx.label}: ${ctx.parsed}` }
                    }
                },
                animation: { animateScale: true, animateRotate: true }
            }
        });
        
        // -------------------- Bar Chart --------------------
        new Chart(document.getElementById('barChart'), {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Applications',
                    data: values,
                    backgroundColor: baseColors,
                    borderRadius: 8,
                    borderSkipped: false
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    title: {
                        display: true,
                        text: 'Status Distrubution - Bar Chart',
                        font: { size: 18, weight: 'bold' },
                        padding: { bottom: 20 }
                    },
                    legend: { display: false },
                    tooltip: {
                        backgroundColor: '#000',
                        padding: 10,
                        bodyFont: { size: 13 },
                        callbacks: { label: ctx => `${ctx.label}: ${ctx.parsed.y}` }
                    }
                },
                interaction: { mode: 'index', intersect: false },
                scales: {
                    x: { ticks: { font: { size: 13 } } },
                    y: { beginAtZero: true, ticks: { stepSize: 1, font: { size: 13 } }, grid: { color: 'rgba(0,0,0,0.05)' } }
                },
                animation: { duration: 1200, easing: 'easeOutBounce' }
            }
        });
        

    </script>
    <!-- Fade Up Script -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
          const faders = document.querySelectorAll('.fade-up');
        
          const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
              if (entry.isIntersecting) {
                entry.target.classList.add('show');
                observer.unobserve(entry.target);
              }
            });
          }, { threshold: 0.25 });
        
          faders.forEach(el => observer.observe(el));
        });
    </script>



        <?php
    }
    function final_report2(){
        $db=$this->GetModel();
        $rec = $db->rawQuery("
    SELECT
        SUM(citizen_count) AS citizen_count,
        SUM(auth1) AS auth1,
        SUM(auth2) AS auth2,
        SUM(auth3) AS auth3,
        SUM(auth4) AS auth4,
        SUM(completed) AS completed,
        SUM(reverted) AS reverted,
        SUM(rejected) AS rejected
    FROM (
        SELECT
            SUM(CASE WHEN status = '0' THEN 1 ELSE 0 END) AS citizen_count,
            SUM(CASE WHEN status = 1 THEN 1 ELSE 0 END) AS auth1,
            SUM(CASE WHEN status = 2 THEN 1 ELSE 0 END) AS auth2,
            SUM(CASE WHEN status = 3 THEN 1 ELSE 0 END) AS auth3,
            SUM(CASE WHEN (status = 4 or (status='Completed' and admin_report='')) THEN 1 ELSE 0 END) AS auth4,
            SUM(CASE WHEN (status='Completed' and admin_report!='') THEN 1 ELSE 0 END) AS completed,
            SUM(CASE WHEN status = 'Reverted' THEN 1 ELSE 0 END) AS reverted,
            SUM(CASE WHEN status = 'Rejected' THEN 1 ELSE 0 END) AS rejected 
        FROM fire_noc_provisional_new

        UNION ALL

        SELECT
            SUM(CASE WHEN status = '0' THEN 1 ELSE 0 END) AS citizen_count,
            SUM(CASE WHEN status = 1 THEN 1 ELSE 0 END) AS auth1,
            SUM(CASE WHEN status = 2 THEN 1 ELSE 0 END) AS auth2,
            SUM(CASE WHEN status = 3 THEN 1 ELSE 0 END) AS auth3,
            SUM(CASE WHEN (status = 4 or (status='Completed' and admin_report='')) THEN 1 ELSE 0 END) AS auth4,
            SUM(CASE WHEN (status='Completed' and admin_report!='') THEN 1 ELSE 0 END) AS completed,
            SUM(CASE WHEN status = 'Reverted' THEN 1 ELSE 0 END) AS reverted,
            SUM(CASE WHEN status = 'Rejected' THEN 1 ELSE 0 END) AS rejected 
        FROM fire_final_noc
    ) AS combined
")[0];

$dailyData = $db->rawQuery("
    SELECT date, COUNT(*) as total
    FROM (
        SELECT DATE(date) AS date FROM fire_noc_provisional_new
        UNION ALL
        SELECT DATE(date) AS date FROM fire_final_noc
    ) AS combined
    GROUP BY date
    ORDER BY date DESC
"); 
$dates = [];
$totals = [];

foreach ($dailyData as $row) {
    $dates[] = $row['date'];
    $totals[] = $row['total'];
}
?>


<script>
    const dailyLabels = <?= json_encode($dates) ?>;
    const dailyCounts = <?= json_encode($totals) ?>;
</script> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FIRE DEPARTMENT KDMC REPORT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS & Chart.js -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
@import url('https://fonts.googleapis.com/css2?family=Signika+Negative:wght@300..700&display=swap');

* {
  font-family: "Signika Negative", serif;
  font-optical-sizing: auto;
  font-weight: 400;
  font-style: normal;
}

body {
  background: linear-gradient(135deg, #eef2f3, #dfe9f3);
  color: #212529;
  min-height: 100vh;
}

h2 {
  font-weight: 700;
  text-align: center;
  margin-bottom: 2.5rem;
  color: #212529;
  background: linear-gradient(45deg, #0d6efd, #6610f2);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

.card {
    border-radius: 1rem;
    border: none;
    overflow: hidden;
    box-shadow: 0 6px 18px rgba(0, 0, 0, 0.08);
    transition: all 0.3s ease;
}
.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
}

.table {
    border-radius: 0.75rem;
    overflow: hidden;
    margin-bottom: 0;
    font-size: 0.95rem;
}
.table th, .table td {
    vertical-align: middle;
    text-align: center;
    padding: 0.65rem 0.75rem;
}
.table tbody tr:hover {
    background: #e0ebff;
    cursor: pointer;
    transition: 0.2s ease;
}

.badge {
    font-size: 0.85rem;
    padding: 0.45em 0.85em;
}

/* Charts Styling */
canvas {
  background: #fff;
  border-radius: 1rem;
  padding: 1.2rem;
  box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

canvas:hover {
  transform: scale(1.04);
  box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
}

/* Chart animation */
.chartjs-render-monitor {
  animation: fadeIn 1.2s ease-in-out;
}

@keyframes fadeIn {
  from { opacity: 0; transform: translateY(25px); }
  to { opacity: 1; transform: translateY(0); }
}

/* Container Spacing */
.container {
  max-width: 1200px;
}
 /* Legend styling */
.chart-legend {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 12px;
}
.chart-legend span {
    display: flex;
    align-items: center;
    font-size: 14px;
    gap: 6px;
}
.chart-legend span::before {
    content: "";
    display: inline-block;
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background: currentColor;
}
.table-hover tbody tr:hover {
      background-color: #f1f5ff;
      transform: scale(1.01);
      transition: 0.2s ease-in-out;
  }
  .badge {
      min-width: 50px;
      padding: 0.6em 1em;
      font-size: 0.95rem;
      box-shadow: 0 2px 6px rgba(0,0,0,0.15);
  }
  .bg-purple {
      background-color: #6f42c1 !important;
  }
  /* Updated Table Styling */
    /* Status Table Styling */
.status-table {
    font-family: "Signika Negative", sans-serif;
    font-size: 14px;
    border-radius: 10px;
    overflow: hidden;
    background: #fff;
    box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    border: 2px solid #28a745; /* Green border for table */
}

.status-table thead {
    background: linear-gradient(90deg, #28a745, #218838); /* green gradient header */
    color: #fff;
    text-transform: uppercase;
    font-weight: 600;
}

.status-table th, .status-table td {
    padding: 12px 15px;
    border: 1px solid #c8e6c9; /* light green borders */
    transition: all 0.3s ease;
    font-weight: bold;
}

.status-table tbody tr:nth-child(even) {
    background-color: #f3f8f4; /* light green tint */
}

.status-table tbody tr:hover {
    background: #d4edda; /* hover light green */
    transform: scale(1.01);
    box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    transition: all 0.3s ease;
}

.status-table td span.badge {
    display: inline-block;
    min-width: 40px;
    padding: 5px 10px;
    border-radius: 20px;
    color: #fff;
    font-weight: 600;
}

/* Badge colors */
.status-table td span.citizen { background-color: #007bff; }
.status-table td span.cg { background-color: #6f42c1; }
.status-table td span.gs { background-color: #28a745; }
.status-table td span.gs-tippni { background-color: #ffc107; color: #212529; } /* fixed white text issue */
.status-table td span.dmc { background-color: #17a2b8; }
.status-table td span.completed { background-color: #28a745; }
.status-table td span.rejected { background-color: #dc3545; }
.status-table td span.cancelled { background-color: #6c757d; }

/* Dashboard Title Styling - Red-Orange Version */
.dashboard-title {
    font-family: "Signika Negative", sans-serif;
    font-size: 2rem;
    font-weight: 700;
    text-align: center;
    color: #fd7e14; /* fallback color */
    margin-bottom: 2rem;
    margin-top: 2px;
    padding-top: 20px;
    position: relative;
    display: block; /* ensure block element for proper centering */
    background: linear-gradient(90deg, #fd7e14, #ff4500); /* red-orange gradient */
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

/* Animated underline */
.dashboard-title::after {
    content: '';
    display: block;
    width: 0;
    height: 4px;
    margin: 6px auto 0; /* center with auto margins */
    background: linear-gradient(90deg, #fd7e14, #ff4500); /* red-orange gradient underline */
    border-radius: 2px;
    transition: width 0.4s ease-in-out;
}

.dashboard-title:hover::after {
    width: 50%; /* expands to half of container width on hover */
}
/* ===== Additional Table Interactions ===== */

/* Table cells hover effect */
.table td {
  transition: all 0.3s ease;
}
.table td:hover {
  background: rgba(79, 70, 229, 0.05); /* subtle highlight */
  color: #4f46e5;
  font-weight: 600;
  transform: scale(1.02);
}

/* Staggered fade-in for table on page load */
.table-responsive {
  opacity: 0;
  transform: translateY(20px);
  animation: tableFadeIn 0.8s ease forwards;
  animation-delay: 0.2s;
}

@keyframes tableFadeIn {
  to {
    opacity: 1;
    transform: translateY(0);
  }
}
/* Fade-in + slide-up animation */
.fade-up {
  opacity: 0;
  transform: translateY(25px);
  transition: all 0.8s ease-out;
}

.fade-up.show {
  opacity: 1;
  transform: translateY(0);
}

/* Optional staggered effect for table rows */
.status-table tbody tr {
  opacity: 0;
  transform: translateY(15px);
  animation: fadeInUpRow 0.6s ease forwards;
}

.status-table tbody tr:nth-child(1) { animation-delay: 0.1s; }
.status-table tbody tr:nth-child(2) { animation-delay: 0.2s; }
.status-table tbody tr:nth-child(3) { animation-delay: 0.3s; }
.status-table tbody tr:nth-child(4) { animation-delay: 0.4s; }
.status-table tbody tr:nth-child(5) { animation-delay: 0.5s; }
.status-table tbody tr:nth-child(6) { animation-delay: 0.6s; }
.status-table tbody tr:nth-child(7) { animation-delay: 0.7s; }
.status-table tbody tr:nth-child(8) { animation-delay: 0.8s; }

@keyframes fadeInUpRow {
  from { opacity: 0; transform: translateY(15px); }
  to { opacity: 1; transform: translateY(0); }
}
</style>

</head>
<body>

    <h1 class="dashboard-title">FIRE DEPARTMENT KDMC REPORT</h1>

    <!-- Responsive Table -->
    <div class="container mb-4 fade-up">
        <div class="table-responsive">
            <table class="table status-table text-center align-middle">
                <thead>
                    <tr>
                        <th>Citizen Payment Pending</th>
                        <th>Auth Level 1</th>
                        <th>Auth Level 2</th>
                        <th>Auth Level 3</th>
                        <th>Auth Level 4</th>
                        <th>Completed</th>
                        <th>Reverted</th>
                        <th>Rejected</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><span class="badge citizen"><?= $rec['citizen_count'] ?></span></td>
                        <td><span class="badge cg"><?= $rec['auth1'] ?></span></td>
                        <td><span class="badge gs"><?= $rec['auth2'] ?></span></td>
                        <td><span class="badge gs-tippni"><?= $rec['auth3'] ?></span></td>
                        <td><span class="badge dmc"><?= $rec['auth4'] ?></span></td>
                        <td><span class="badge completed"><?= $rec['completed'] ?></span></td>
                        <td><span class="badge cancelled"><?= $rec['reverted'] ?></span></td>
                        <td><span class="badge rejected"><?= $rec['rejected'] ?></span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
 

    <script>
    // Daily Applications Line Chart
new Chart(document.getElementById('dailyChart'), {
    type: 'line',
    data: {
        labels: dailyLabels,
        datasets: [{
            label: 'Applications per Day',
            data: dailyCounts,
            fill: false,
            borderColor: '#0d6efd',
            backgroundColor: '#0d6efd',
            tension: 0.3,
            pointRadius: 4,
            pointBackgroundColor: '#0d6efd'
        }]
    },
    options: {
        responsive: true,
        plugins: {
            title: {
                display: true,
                text: 'Daily Applications',
                font: { size: 18 }
            }
        },
        scales: {
            x: {
                title: {
                    display: true,
                    text: 'Date'
                },
                ticks: {
                    maxRotation: 90,
                    minRotation: 45
                }
            },
            y: {
                beginAtZero: true,
                title: {
                    display: true,
                    text: 'Total Applications'
                }
            }
        }
    }
});


        const data = {
            citizen_count: <?= $rec['citizen_count'] ?>,
            auth1: <?= $rec['auth1'] ?>,
            auth2: <?= $rec['auth2'] ?>,
            auth3: <?= $rec['auth3'] ?>,
            auth4: <?= $rec['auth4'] ?>,
            completed: <?= $rec['completed'] ?>,
            reverted: <?= $rec['reverted'] ?>,
            rejected: <?= $rec['rejected'] ?>
        };

        const labels = [
            'Citizen Payment Pending',
            'Auth 1',
            'Auth 2',
            'Auth 3',
            'Auth 4',
            'Completed',
            'Reverted',
            'Rejected'
        ];
        
        const values = [
            data.citizen_count,
            data.auth1,
            data.auth2,
            data.auth3,
            data.auth4,
            data.completed,
            data.reverted,
            data.rejected
        ];

        // const colors = ['#0d6efd', '#6610f2', '#6f42c1', '#d63384', '#fd7e14', '#198754', '#dc3545'];
        const colors = [
            "#6c575d", // Citizen
            "#6f42c1", // Auth 1
            "#d406a9", // Auth 2
            "#ffc107", // Auth 3
            "#17a2b8", // Auth 4
            "#28a745", // Completed
            "#ff9da7", // Reverted
            "#dc3545"  // Rejected
        ];

        // Bar Chart
        new Chart(document.getElementById('barChart'), {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Count',
                    data: values,
                    backgroundColor: colors
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    title: {
                        display: true,
                        text: 'Status Distribution (Bar Chart)',
                        font: { size: 18 }
                    },
                    legend: { display: false }
                }
            }
        });

        // Pie Chart
        new Chart(document.getElementById('pieChart'), {
            type: 'pie',
            data: {
                labels: labels,
                datasets: [{
                    data: values,
                    backgroundColor: colors
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    title: {
                        display: true,
                        text: 'Status Proportion (Pie Chart)',
                        font: { size: 18 }
                    }
                }
            }
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
          const faders = document.querySelectorAll('.fade-up');
        
          const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
              if (entry.isIntersecting) {
                entry.target.classList.add('show');
                observer.unobserve(entry.target);
              }
            });
          }, { threshold: 0.25 });
        
          faders.forEach(el => observer.observe(el));
        });
    </script>



        <?php
    }
	function json($action, $arg1 = null, $arg2 = null)
	{
		$model = new SharedController;
		$args = array($arg1, $arg2);
		$data = call_user_func_array(array($model, $action), $args);
		render_json($data);
	}
	function getrecdata($id){
	    $db=$this->GetModel();
	    $db->where("id",$id);
	    $x=$db->getOne("fire_noc_establishment","*");
	    render_json($x);
	}
	
	// Confirm layout fuction
	// Whatever data added we just need to update in db
	function confirm_layout($dbname,$id){
	    $db=$this->GetModel();
		$db->where("db_name",$dbname);
		$db->where("recid",$id);
		$builds=$db->get("bhuilding_details_for_fire_noc",9999,"*");
		foreach($builds as $b){
			$db->where("id",$b['id']);
			$db->update("bhuilding_details_for_fire_noc",array("locked"=>"1"));
			$db->where("rec_id",$b['id']);
			$wings=$db->get("wings_info",9999,"*");
			foreach($wings as $w){
				$db->where("id",$w['id']);
				$db->update("wings_info",array("locked"=>"1"));
				$db->where("recid",$w['id']);
				$floors=$db->get("floor_details",9999,"*");
				foreach($floors as $f){ 
					$db->where("id",$f['id']);
					$db->update("floor_details",array("locked"=>"1"));
				}
			}
		}
		$db->where("id",$id);
		$m=$db->getOne($dbname,"*");
// 		file_get_contents("https://jskbulkmarketing.in/app/smsapi/index.php?key=5676D2A626B98C&campaign=13987&routeid=3&type=text&contacts=".$m['mobile_no']."&senderid=VVMCDM&msg=Dear%20Applicant,%20You%20have%20successfully%20applied%20for%20fire%20NOC,%20your%20application%20id%20is".$m['application_no']."%20please%20keep%20this%20for%20future%20reference%E2%80%9D%20Regards%20VVCMC&template_id=1007982114993360101&pe_id=1001240621308818319");

		$db->where("id",$id);
		$db->update($dbname,array("status"=>"1"));
		?>
		<script>
			location.href="<?php echo SITE_ADDR . $dbname . '/view/' . $id; ?>";
			</script>
		<?php
	}
	// Function to add building layout
	function building_layout($dbname,$id){
		// Initialize the database model
	    $db=$this->GetModel();

		// Fetch record for main ID from the given table
		$db->where("id",$id);
		$rec=$db->getOne($dbname,"*");

		// Set session location for reference or redirection
		$_SESSION['location']="api/building_layout/$dbname/$id";

		 // Fetch all building details related to the given dbname and recid
		$db->where("db_name",$dbname);
		$db->where("recid",$id);
		$builds=$db->get("bhuilding_details_for_fire_noc",9999,"*");
		//display buildings layout
		?>
		<link rel="stylesheet" href="<?php echo SITE_ADDR ?>assets/css/bootstrap-theme-pulse-blue.css" />
		<link rel="stylesheet" href="<?php echo SITE_ADDR ?>assets/css/custom-styles.css" />
		<!-- Title and back button -->
		<center><h3>Building Layout</h3></center>
		<center>
		    <a href='<?php echo SITE_ADDR.$dbname ?>' class='btn btn-danger'>Go Back</a>
		</center>
		<br>
		<!-- Start container for building layout -->
		<div class='container-fluid'>
			<center>
				<button onclick="window.print();" class='btn btn-primary' style="float: right; background-color: #007bff; color: white; padding: 8px 12px; border: none; border-radius: 4px; font-size: 14px; cursor: pointer;">
					🖨️ Print Layout
				</button>
			</center>

			<br>
			<div class='row'> 
			<?php  foreach($builds as $b){ ?>
			<div class='col-md-3'>
				<div class='card'>
					<!-- Building name with link -->
					<div class='card-header'><a href='<?php echo SITE_ADDR ?>bhuilding_details_for_fire_noc?id=<?php echo $b['id'] ?>'><?php echo $b['name_of_building'] ?></a></div>
					<div class='card-body'>
						<?php
						// Fetch wings for this building
						$db->where("rec_id",$b['id']);
						$wings=$db->get("wings_info",9999,"*");
						$wn="";
						foreach($wings as $w){
							$wn=$w['wing_name'];
							?> 
							<!-- Display wing and nested floors -->
							<details style="border:1px solid black;margin:1px;padding:2px" open>
							<summary>
								Wing : <b><a href='<?php echo $w['wing_name']=="Not Applicable"?"#":"" ?><?php echo SITE_ADDR ?>wings_info/?id=<?php echo $w['id'] ?>'><?php echo $w['wing_name'] ?></a></b>
							</summary>
							<?php
							// Fetch floors for this wing
						    $db->where("recid",$w['id']);
						    $floors=$db->get("floor_details",9999,"*");
						    foreach($floors as $f){ 
								?>
								<!-- Floor display -->
								 &nbsp;&nbsp;&nbsp;> <a href='<?php echo SITE_ADDR ?>floor_details?id=<?php echo $f['id'] ?>'><?php echo $f['foor_name_value'] ?></a>
								<br>
								<?php
						    }
							?>
							<!-- Display Add buttons if status is 0 (i.e., layout is editable) -->
							<?php if($rec['status']==0){ ?>
							<br>
							&nbsp;&nbsp;&nbsp;<a href='<?php echo SITE_ADDR ?>typical_floor_plan/add?recid=<?php echo $w['id'] ?>&db_name=<?php echo $dbname ?>' class='b tn b tn-secondary'>Add Typical Floor Plan</a>
							<br>
							&nbsp;&nbsp;&nbsp;<a href='<?php  ECHO SITE_ADDR ?>floor_details/add?recid=<?php echo $w['id'] ?>&db_name=<?php echo $dbname ?>' class='b tn b tn-primary'>Add Floor</a>
							<?php } ?>
							</details>
							<?php
						}
						// If wing name is not "Not Applicable", allow adding new wing
						if($wn=="Not Applicable"){

						}else{
							?>
							<?php if($rec['status']==0){ ?>
							<HR>
							&nbsp;&nbsp;&nbsp;<a href='<?php  ECHO SITE_ADDR ?>wings_info/add?rec_id=<?php echo $b['id'] ?>&db_name=<?php echo $dbname ?>' class='b tn b tn-primary'>Add Wing</a>
							<?php
							}
						}
						?>
						
					</div>
				</div>
			</div>
			<?php } ?>
		</div>		
		<?php if($rec['status']==0){ ?>
			<!-- Option to add new building and confirm layout -->
		<a href='<?php echo SITE_ADDR ?>bhuilding_details_for_fire_noc/add?recid=<?php echo $id ?>&db_name=<?php echo $dbname ?>' class='btn btn-danger'>Add New Building</a>


		<a href='<?php echo SITE_ADDR ?>api/confirm_layout/<?php echo $dbname ?>/<?php echo $id ?>' onclick='return confirm("Are you sure, as you cannot edit the entry afterwards");' class='btn btn-success'>Confirm</a>
		<?php
		}
		
		if(1){
			?>
			<style>
				@media print {
					button, .btn {
						display: none !important;
					}
				}
			</style>
			<!-- Display layout summary table -->
			<table class='table' border='1' width="100%">
				<tr>
					<th class='table-dark'>Building Name</th>
					<th class='table-dark'>Wing Name</th>
					<th class='table-dark'>Floor Name</th>
					<th class='table-dark'>Area sq.mtr</th>
					<th class='table-dark'>Height in Meter</th>
					<th class='table-dark'>Refuge Area sq.mtr</th>
					<th class='table-dark'>Refuge Area Height in Meter </th>
					<!-- <th class='table-dark'>Actions</th> -->
				</tr>
				<?php
					// Re-fetch building list to display tabular summary
					$db->where("db_name", $dbname);
					$db->where("recid", $id);
					$builds = $db->get("bhuilding_details_for_fire_noc", 9999, "*");

					foreach ($builds as $b) {
						// Initialize totals
						$building_total_area = 0;
						$building_total_height = 0;
						$building_total_res_area = 0;
						$building_total_res_height = 0;

						$db->where("rec_id", $b['id']);
						$wings = $db->get("wings_info", 9999, "*");

						foreach ($wings as $iw => $w) {
							if ($iw == 0) {
								// Count total number of floors for row span
								// Get capacity of building
								$total = 0;
								foreach ($wings as $w2) {
									$db->where("recid", $w2['id']);
									$floors = $db->get("floor_details", 9999, "*");
									foreach ($floors as $f2) { 
										$total += 1;
									}
								}
								$tr = "true";
								?>
								<tr>
									<td rowspan="<?php echo ($total) ?>"><?php echo $b['name_of_building'] ?></td>
								<?php 
							}

							$db->where("recid", $w['id']);
							$floors = $db->get("floor_details", 9999, "*");

							foreach ($floors as $i => $f) {
								?>
								<?php if ($tr == "true") { } else { echo "<tr>"; } ?>

								<?php if ($i == 0) { ?>
									<td rowspan="<?php echo count($floors) ?>"><?php echo $w['wing_name'] ?></td>
								<?php } ?>
								<td><?php echo $f['foor_name_value'] ?></td>
								<td><?php echo $f['floor_wise_p_line_area_in_sqr_mtr'] ?></td>
								<td><?php echo $f['hight_in_mtr_from_ground'] ?></td>
								<td><?php echo $f['refuge_area'] == "NO" ? "" : $f['provided_refuge_area_in_sqr_mtr'] ?></td>
								<td><?php echo $f['refuge_area'] == "NO" ? "" : $f['hight_of_refuge_area_from_ground_in_mtr'] ?></td>

								<!-- Edit/Delete Actions
								<td>
									<a href="<?php echo SITE_ADDR . 'bhuilding_details_for_fire_noc/edit?id=' . $b['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
									<a href="<?php echo SITE_ADDR . 'bhuilding_details_for_fire_noc/delete?id=' . $b['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Delete this building?')">Delete</a>
								</td> -->
								</tr>

								<?php
								// Totals accumulation
								$building_total_area += (float)$f['floor_wise_p_line_area_in_sqr_mtr'];
								$building_total_height += (float)$f['hight_in_mtr_from_ground'];
								$building_total_res_area += ($f['refuge_area'] == "NO" ? 0 : (float)$f['provided_refuge_area_in_sqr_mtr']);
								$building_total_res_height += ($f['refuge_area'] == "NO" ? 0 : (float)$f['hight_of_refuge_area_from_ground_in_mtr']);
							}
						}

						// Total Row per Building
						echo "<tr style='font-weight:bold; background-color:#e2f0d9;'>";
						echo "<td colspan='3' align='right'>Total for {$b['name_of_building']}:</td>";
						echo "<td>{$building_total_area}</td>";
						// echo "<td>{$building_total_height}</td>";
						echo "<td></td>";
						echo "<td>{$building_total_res_area}</td>";
						// echo "<td>{$building_total_res_height}</td>";
						echo "<td></td>";
						// echo "<td>
						// 		<a href='" . SITE_ADDR . "bhuilding_details_for_fire_noc/edit?id={$b['id']}' class='btn btn-sm btn-warning'>Edit</a>
						// 		<a href='" . SITE_ADDR . "bhuilding_details_for_fire_noc/delete?id={$b['id']}' class='btn btn-sm btn-danger' onclick='return confirm(\"Delete this building?\")'>Delete</a>
						// 	</td>";
						echo "</tr>";
					}
					?>
			<?php
		}
	}

	
	function viewreason($id, $dbname){
	    $db=$this->GetModel();
	    $db->where("rec_id",$id);
	    $db->where("db_name",$dbname);
	    $db->orderby('id','DESC');
	    $reason =$db->getOne('accept_reject',"*")['remark'];
	 ?>
	 <html>
	     <body>
	         <table class="table"> 
	             <tr>
	                 <th>Remark</th>
	                 <td> <?php echo $reason ?> </td>
	             </tr>
	         </table>
	     </body>
	 </html>
	 <?php    
	}

	function getfloorinfo($typical_floor_type){
		// Initialize the database model
		$db = $this->getModel();
		// Apply condition to match the typical floor plan type
		$db->where("typical_floor_plan", $typical_floor_type);
		// Fetch one matching record from the typical_floor_plan table
		$arr = $db->getOne("typical_floor_plan");
		// Return JSON response
		render_json($arr);
	}
}