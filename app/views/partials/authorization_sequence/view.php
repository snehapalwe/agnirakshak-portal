<?php 
//check if current user role is allowed access to the pages
$can_add = ACL::is_allowed("authorization_sequence/add");
$can_edit = ACL::is_allowed("authorization_sequence/edit");
$can_view = ACL::is_allowed("authorization_sequence/view");
$can_delete = ACL::is_allowed("authorization_sequence/delete");
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
                    <h4 class="record-title">View  Authorization Sequence</h4>
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
                                    <tr  class="td-id">
                                        <th class="title"> Id: </th>
                                        <td class="value"> <?php echo $data['id']; ?></td>
                                    </tr>
                                    <tr  class="td-user_id">
                                        <th class="title"> User Id: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-source='<?php print_link('api/json/authorization_sequence_user_id_option_list'); ?>' 
                                                data-value="<?php echo $data['user_id']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("authorization_sequence/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="user_id" 
                                                data-title="Select a value ..." 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="select" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['user_id']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-stage">
                                        <th class="title"> Stage: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-value="<?php echo $data['stage']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("authorization_sequence/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="stage" 
                                                data-title="Enter Stage" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['stage']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-zone">
                                        <th class="title"> Zone: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-source='<?php print_link('api/json/authorization_sequence_zone_option_list'); ?>' 
                                                data-value="<?php echo $data['zone']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("authorization_sequence/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="zone" 
                                                data-title="All" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="select" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['zone']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-db_name">
                                        <th class="title"> Db Name: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-source='<?php echo json_encode_quote(Menu :: $db_name); ?>' 
                                                data-value="<?php echo $data['db_name']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("authorization_sequence/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="db_name" 
                                                data-title="Select a value ..." 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="select" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['db_name']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-user_info_id">
                                        <th class="title"> User Info Id: </th>
                                        <td class="value"> <?php echo $data['user_info_id']; ?></td>
                                    </tr>
                                    <tr  class="td-user_info_username">
                                        <th class="title"> User Info Username: </th>
                                        <td class="value"> <?php echo $data['user_info_username']; ?></td>
                                    </tr>
                                    <tr  class="td-user_info_password">
                                        <th class="title"> User Info Password: </th>
                                        <td class="value"> <?php echo $data['user_info_password']; ?></td>
                                    </tr>
                                    <tr  class="td-user_info_email">
                                        <th class="title"> User Info Email: </th>
                                        <td class="value"> <?php echo $data['user_info_email']; ?></td>
                                    </tr>
                                    <tr  class="td-user_info_user_role_id">
                                        <th class="title"> User Info User Role Id: </th>
                                        <td class="value"> <?php echo $data['user_info_user_role_id']; ?></td>
                                    </tr>
                                    <tr  class="td-user_info_zone">
                                        <th class="title"> User Info Zone: </th>
                                        <td class="value"> <?php echo $data['user_info_zone']; ?></td>
                                    </tr>
                                    <tr  class="td-can_reject">
                                        <th class="title"> Can Reject: </th>
                                        <td class="value">
                                            <span <?php if($can_edit){ ?> data-source='<?php echo json_encode_quote(Menu :: $is_redevelopment); ?>' 
                                                data-value="<?php echo $data['can_reject']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("authorization_sequence/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="can_reject" 
                                                data-title="Select a value ..." 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="select" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" <?php } ?>>
                                                <?php echo $data['can_reject']; ?> 
                                            </span>
                                        </td>
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
                                <a class="btn btn-sm btn-info"  href="<?php print_link("authorization_sequence/edit/$rec_id"); ?>">
                                    <i class="fa fa-edit"></i> Edit
                                </a>
                                <?php } ?>
                                <?php if($can_delete){ ?>
                                <a class="btn btn-sm btn-danger record-delete-btn mx-1"  href="<?php print_link("authorization_sequence/delete/$rec_id/?csrf_token=$csrf_token&redirect=$current_page"); ?>" data-prompt-msg="Are you sure you want to delete this record?" data-display-style="modal">
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
