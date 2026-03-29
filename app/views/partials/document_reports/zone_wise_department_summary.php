<?php 
//check if current user role is allowed access to the pages
$can_add = ACL::is_allowed("document_reports/add");
$can_edit = ACL::is_allowed("document_reports/edit");
$can_view = ACL::is_allowed("document_reports/view");
$can_delete = ACL::is_allowed("document_reports/delete");
?>
<?php
$comp_model = new SharedController;
$page_element_id = "list-page-" . random_str();
$current_page = $this->set_current_page_link();
$csrf_token = Csrf::$token;
//Page Data From Controller
$view_data = $this->view_data;
$records = $view_data->records;
$record_count = $view_data->record_count;
$total_records = $view_data->total_records;
$field_name = $this->route->field_name;
$field_value = $this->route->field_value;
$view_title = $this->view_title;
$show_header = $this->show_header;
$show_footer = $this->show_footer;
$show_pagination = $this->show_pagination;
?>
<section class="page" id="<?php echo $page_element_id; ?>" data-page-type="list"  data-display-type="table" data-page-url="<?php print_link($current_page); ?>">
    <?php
    if( $show_header == true ){
    ?>
    <div  class="bg-light p-3 mb-3">
        <div class="container-fluid">
            <div class="row ">
                <div class="col ">
                    <h4 class="record-title">Document Reports</h4>
                </div>
                <div class="col-sm-3 ">
                </div>
                <div class="col-sm-4 ">
                </div>
                <div class="col-md-12 comp-grid">
                    <div class="">
                        <!-- Page bread crumbs components-->
                        <?php
                        if(!empty($field_name) || !empty($_GET['search'])){
                        ?>
                        <hr class="sm d-block d-sm-none" />
                        <nav class="page-header-breadcrumbs mt-2" aria-label="breadcrumb">
                            <ul class="breadcrumb m-0 p-1">
                                <?php
                                if(!empty($field_name)){
                                ?>
                                <li class="breadcrumb-item">
                                    <a class="text-decoration-none" href="<?php print_link('document_reports'); ?>">
                                        <i class="fa fa-angle-left"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <?php echo (get_value("tag") ? get_value("tag")  :  make_readable($field_name)); ?>
                                </li>
                                <li  class="breadcrumb-item active text-capitalize font-weight-bold">
                                    <?php echo (get_value("label") ? get_value("label")  :  make_readable(urldecode($field_value))); ?>
                                </li>
                                <?php 
                                }   
                                ?>
                                <?php
                                if(get_value("search")){
                                ?>
                                <li class="breadcrumb-item">
                                    <a class="text-decoration-none" href="<?php print_link('document_reports'); ?>">
                                        <i class="fa fa-angle-left"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item text-capitalize">
                                    Search
                                </li>
                                <li  class="breadcrumb-item active text-capitalize font-weight-bold"><?php echo get_value("search"); ?></li>
                                <?php
                                }
                                ?>
                            </ul>
                        </nav>
                        <!--End of Page bread crumbs components-->
                        <?php
                        }
                        ?>
                    </div>
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
                    <div  class=" animated fadeIn page-content">
                        <script src="<?php print_link('assets/js/index.js'); ?>"></script>
                        <script src="<?php print_link('assets/js/xy.js'); ?>"></script>
                        <script src="<?php print_link('assets/js/Animated.js'); ?>"></script> 
                        <!--<script src="<?php print_link('assets/js/percent.js'); ?>"></script> -->
                        <div id="document_reports-list-records">
                            <div class="row">
                                <div class="col">
                                    <label>Department Name</label>
                                    <select required=""  id="db_name" name="db_name" id="db_name"  placeholder="Select a value ..."    class="custom-select" > 
                                        <option <?php if(isset($_GET['db_name'])&& $_GET['db_name']=="All"){ echo "selected"; } ?> value="All">All</option>
                                        <option <?php if(isset($_GET['db_name'])&& $_GET['db_name']=="Property"){ echo "selected"; } ?> value="Property">Property</option>
                                        <option <?php if(isset($_GET['db_name'])&& $_GET['db_name']=="Water"){ echo "selected"; } ?> value="Water">Water</option>
                                        <option <?php if(isset($_GET['db_name'])&& $_GET['db_name']=="Trade"){ echo "selected"; } ?> value="Trade">Trade</option>
                                    </select>
                                </div>
                                <div class="col ">
                                    <div class="form-group ">
                                        <label class="control-label" for="zone">Zone <span class="text-danger">*</span></label>
                                        <div id="ctrl-zone-holder" class=""> 
                                            <select required=""  id="zone" name="zone"  placeholder="Select a value ..."    class="custom-select" >
                                                <option value="">Select a value ...</option>
                                                <?php 
                                                $zone_options = $comp_model -> water_making_change_in_water_connection_size_zone_option_list();
                                                if(!empty($zone_options)){
                                                foreach($zone_options as $option){
                                                $value = (!empty($option['value']) ? $option['value'] : null);
                                                $label = (!empty($option['label']) ? $option['label'] : $value);
                                                $selected = $this->set_field_selected('zone',$value, "");
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
                                </div>
                                <div class="col "> 
                                    <label>Date Range</label>
                                    <div class="input-group"> 
                                        <input id="ledger_id" value="<?php echo $page_id; ?>" hidden/>
                                            <input class="form-control datepicker"  value="<?php echo $this->set_field_value('detailed_ledger_date') ?>" type="datetime"  id="detailed_ledger_date" placeholder="<?php print_lang(''); ?>" data-enable-time="" data-date-format="Y-m-d" data-alt-format="M j, Y" data-inline="false" data-no-calendar="false" data-mode="range" />
                                            </div>
                                        </div>
                                        <div class="col-sm-2"> 
                                            <label>Submit</label>
                                            <div class="input-group">
                                                <button class='btn btn-primary' onclick="loc();" id='deptreports'>FETCH REPORT</button>
                                            </div>
                                        </div>
                                    </div>
                                    <script>
                                        function loc(){<?php if(isset($_GET['db_name'])&& $_GET['db_name']=="="){ echo "selected"; } ?> 
                                        val=$("#db_name").val();
                                        val2=$("#detailed_ledger_date").val();
                                        zone=$("#zone").val();
                                        location.href='?db_name='+val+'&detailed_ledger_date='+val2+'&zone='+zone;
                                        }
                                        function compute_charts(){
                                        val=$("#db_name").val();
                                        val2=$("#detailed_ledger_date").val();
                                        zone=$("#zone").val();
                                        $.getJSON( '<?php echo SITE_ADDR; ?>api/report_for_document_dep/' + val  +'/' + val2+'/'+zone)
                                        .done(function (json) {
                                        data=json.data;
                                        am5.ready(function() {
                                        // Create root element
                                        // https://www.amcharts.com/docs/v5/getting-started/#Root_element
                                        var root = am5.Root.new("chartdiv");
                                        // Set themes
                                        // https://www.amcharts.com/docs/v5/concepts/themes/
                                        root.setThemes([
                                        am5themes_Animated.new(root)
                                        ]);
                                        // Create chart
                                        // https://www.amcharts.com/docs/v5/charts/xy-chart/
                                        var chart = root.container.children.push(am5xy.XYChart.new(root, {
                                        panX: false,
                                        panY: false,
                                        wheelX: "panX",
                                        wheelY: "zoomX",
                                        layout: root.verticalLayout
                                        }));
                                        // Add legend
                                        // https://www.amcharts.com/docs/v5/charts/xy-chart/legend-xy-series/
                                        var legend = chart.children.push(
                                        am5.Legend.new(root, {
                                        centerX: am5.p50,
                                        x: am5.p50
                                        })
                                        );
                                        // Create axes
                                        // https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
                                        var xRenderer = am5xy.AxisRendererX.new(root, {
                                        cellStartLocation: 0.1,
                                        cellEndLocation: 0.9
                                        })
                                        var xAxis = chart.xAxes.push(am5xy.CategoryAxis.new(root, {
                                        categoryField: "name",
                                        renderer: xRenderer,
                                        tooltip: am5.Tooltip.new(root, {})
                                        }));
                                        xRenderer.grid.template.setAll({
                                        location: 1
                                        })
                                        xAxis.data.setAll(data);
                                        var yAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
                                        renderer: am5xy.AxisRendererY.new(root, {
                                        strokeOpacity: 0.1
                                        })
                                        }));
                                        // Add series
                                        // https://www.amcharts.com/docs/v5/charts/xy-chart/series/
                                        function makeSeries(name, fieldName) {
                                        var series = chart.series.push(am5xy.ColumnSeries.new(root, {
                                        name: name,
                                        xAxis: xAxis,
                                        yAxis: yAxis,
                                        valueYField: fieldName,
                                        categoryXField: "name"
                                        }));
                                        series.columns.template.setAll({
                                        tooltipText: "{name}, {categoryX}:{valueY}",
                                        width: am5.percent(90),
                                        tooltipY: 0,
                                        strokeOpacity: 0
                                        });
                                        series.data.setAll(data);
                                        // Make stuff animate on load
                                        // https://www.amcharts.com/docs/v5/concepts/animations/
                                        series.appear();
                                        series.bullets.push(function() {
                                        return am5.Bullet.new(root, {
                                        locationY: 0,
                                        sprite: am5.Label.new(root, {
                                        text: "{valueY}",
                                        fill: root.interfaceColors.get("alternativeText"),
                                        centerY: 0,
                                        centerX: am5.p50,
                                        populateText: true
                                        })
                                        });
                                        });
                                        legend.data.push(series);
                                        }
                                        makeSeries("Total Application  ", "total");
                                        makeSeries("Total Open  ", "pending"); 
                                        makeSeries("Total Completed", "completed");
                                        makeSeries("Total Rejected", "rejected");
                                        // Make stuff animate on load
                                        // https://www.amcharts.com/docs/v5/concepts/animations/
                                        chart.appear(1000, 100);
                                        }); // end am5.ready()
                                        });
                                        }
                                        compute_charts();
                                    </script>
                                    <style>
                                        #chartdiv {
                                        width: 100%;
                                        height: 700px;
                                        }
                                    </style>
                                    <!-- HTML -->
                                    <div class="container-fluid">
                                        <div id="chartdiv"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
