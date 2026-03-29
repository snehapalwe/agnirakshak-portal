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
                    <h4 class="record-title">View  Demand</h4>
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
                        <h1>Redirect....</h1>
                        <?php     $jeController = new DemandController;
                        $db = $jeController->GetModel(); 
                        $db->where("db_name",$data['db_name']);
                        $db->where("rec_id",$data['rec_id']);
                        $db->where("remark","DEMAND PAYMENT");
                        $link=$db->get("payments",1,"id")[0]['id'];
                        ?>
                        <script>location.href='<?php print_link("payments/view/".$link); ?>';</script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
