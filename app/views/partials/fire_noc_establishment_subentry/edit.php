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
                    <h4 class="record-title">Edit  Fire Noc Establishment Subentry</h4>
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
                    <div  class="bg-light p-3 animated fadeIn page-content">
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-vertical needs-validation" action="<?php print_link("fire_noc_establishment_subentry/edit/$page_id/?csrf_token=$csrf_token"); ?>" method="post">
                            <div>
                                <input id="ctrl-rec_id"  value="<?php  echo $data['rec_id']; ?>" type="hidden" placeholder="Enter Rec Id"  readonly required="" name="rec_id"  class="form-control " />
                                    <div class="form-group ">
                                        <label class="control-label" for="property_number">Property Number <span class="text-danger">*</span></label>
                                        <div id="ctrl-property_number-holder" class=""> 
                                            <input id="ctrl-property_number"  value="<?php  echo $data['property_number']; ?>" type="text" placeholder="Enter Property Number"  required="" name="property_number"  class="form-control " />
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label class="control-label" for="name_of_property_owner">Name Of Property Owner <span class="text-danger">*</span></label>
                                            <div id="ctrl-name_of_property_owner-holder" class=""> 
                                                <input id="ctrl-name_of_property_owner"  value="<?php  echo $data['name_of_property_owner']; ?>" type="text" placeholder="Enter Name Of Property Owner"  required="" name="name_of_property_owner"  class="form-control " />
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <label class="control-label" for="pending_due_amount">Pending Due Amount <span class="text-danger">*</span></label>
                                                <div id="ctrl-pending_due_amount-holder" class=""> 
                                                    <input id="ctrl-pending_due_amount"  value="<?php  echo $data['pending_due_amount']; ?>" type="number" placeholder="Enter Pending Due Amount" step="0.001"  readonly required="" name="pending_due_amount"  class="form-control " />
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label class="control-label" for="area_in_sq_ft">Area In Sq Ft <span class="text-danger">*</span></label>
                                                    <div id="ctrl-area_in_sq_ft-holder" class=""> 
                                                        <input id="ctrl-area_in_sq_ft"  value="<?php  echo $data['area_in_sq_ft']; ?>" type="number" placeholder="Enter Area In Sq Ft" step="0.001"  readonly required="" name="area_in_sq_ft"  class="form-control " />
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
