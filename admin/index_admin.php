<?php include "../include/admin/header_admin.php"; ?>
<!------------------------------------------------------------------------------------------------------------------->

<body class="body-all hold-transition skin-blue-light sidebar-mini">
    <div class="wrapper">
        <?php include "../include/admin/menu_admin.php"; ?>
        <!-- Content Wrapper. Contains page content -->
        <!------------------------------------------------------------------------------------------------------------------->
        <div class="content-wrapper">

            <!-- Main content -->
            <section class="content">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-aqua">
                            <div class="inner">
                                <h3>150<sup class="sup1" style="font-size: 20px"> คน</sup></h3>
                                <p>ลางานทั้งหมด</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-plus-square" aria-hidden="true"></i>
                            </div>
                            <a href="#" class="small-box-footer">เพิ่มเติม <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div><!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-green">
                            <div class="inner">
                                <h3>53<sup class="sup1" style="font-size: 20px"> คน</sup></h3>
                                <p>ลากิจ ทั้งหมด</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-briefcase" aria-hidden="true"></i>
                            </div>
                            <a href="#" class="small-box-footer">เพิ่มเติม <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div><!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-yellow">
                            <div class="inner">
                                <h3>44<sup class="sup1" style="font-size: 20px"> คน</sup></h3>
                                <p>ลาป่วย ทั้งหมด</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-heartbeat" aria-hidden="true"></i>
                            </div>
                            <a href="#" class="small-box-footer">เพิ่มเติม <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div><!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-red">
                            <div class="inner">
                                <h3>65<sup class="sup1" style="font-size: 20px"> คน</sup></h3>
                                <p>ลาพักร้อน ทั้งหมด</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-sun-o" aria-hidden="true"></i>
                            </div>
                            <a href="#" class="small-box-footer">เพิ่มเติม <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div><!-- ./col -->
                </div><!-- /.row -->
                <!-- Main row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="box ">
                            <div class="box-header with-border">
                                <h3 class="box-title">รายงานลางาน ประจำเดือน</h3>
                                
                            </div><!-- /.box-header -->
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <p class="text-center">
                                            <strong>ตั้งแต่วันที่ : 1 Jan, 2014 - 30 Jul, 2014</strong>
                                        </p>
                                        <div class="tab-content no-padding">
                                            <!-- Morris chart - Sales -->
                                            <div class="chart tab-pane active" id="revenue-chart"
                                                style="position: relative; height: 220px;"></div>
                                            <div class="chart tab-pane" id="sales-chart"
                                                style="position: relative; height: 220px;">
                                            </div>
                                        </div><!-- /.chart-responsive -->
                                    </div><!-- /.col -->
                                    <div class="col-md-4">
                                        <p class="text-center">
                                            <strong>ลางาน แบ่งแยกสถานะ</strong>
                                        </p><!-- /.progress-group -->
                                        <div class="progress-group">
                                            <span class="progress-text">ลากิจ</span>
                                            <span class="progress-number"><b>310</b> คน</span>
                                            <div class="progress sm">
                                                <div class="progress-bar progress-bar-green" style="width: 30%"></div>
                                            </div>
                                        </div><!-- /.progress-group -->
                                        <div class="progress-group">
                                            <span class="progress-text">ลาป่วย</span>
                                            <span class="progress-number"><b>480</b> คน</span>
                                            <div class="progress sm">
                                                <div class="progress-bar progress-bar-yellow" style="width: 70%"></div>
                                            </div>
                                        </div><!-- /.progress-group -->
                                        <div class="progress-group">
                                            <span class="progress-text">ลาพักร้อน</span>
                                            <span class="progress-number"><b>250</b> คน</span>
                                            <div class="progress sm">
                                                <div class="progress-bar progress-bar-red" style="width: 10%"></div>
                                            </div>
                                        </div><!-- /.progress-group -->
                                    </div><!-- /.col -->
                                </div><!-- /.row -->
                            </div><!-- ./box-body -->
                            <div class="box-footer">
                                <div class="row">
                                    <div class="col-sm-3 col-xs-6">
                                        <div class="description-block border-right">
                                            <span class="description-percentage text-green"><i
                                                    class=""></i> 17%</span>
                                            <h5 class="description-header">ลากิจ</h5>
                                            <span class="description-text">คิดเป็น เปอร์เซ็นต์ (%)</span>
                                        </div><!-- /.description-block -->
                                    </div><!-- /.col -->
                                    <div class="col-sm-3 col-xs-6">
                                        <div class="description-block border-right">
                                            <span class="description-percentage text-yellow"><i
                                                    class=""></i> 0%</span>
                                            <h5 class="description-header">ลาป่วย</h5>
                                            <span class="description-text">คิดเป็น เปอร์เซ็นต์ (%)</span>
                                        </div><!-- /.description-block -->
                                    </div><!-- /.col -->
                                    <div class="col-sm-3 col-xs-6">
                                        <div class="description-block border-right">
                                            <span class="description-percentage text-red"><i
                                                    class=""></i> 20%</span>
                                            <h5 class="description-header">ลาพักร้อน</h5>
                                            <span class="description-text">คิดเป็น เปอร์เซ็นต์ (%)</span>
                                        </div><!-- /.description-block -->
                                    </div><!-- /.col -->
                                    <div class="col-sm-3 col-xs-6">
                                        <div class="description-block">
                                            <span class="description-percentage text-dark">
                                                     18%</span>
                                            <h5 class="description-header">ยอดรวมทั้งหมด</h5>
                                            <span class="description-text">คิดเป็น เปอร์เซ็นต์ (%) </span>
                                        </div><!-- /.description-block -->
                                    </div>
                                </div><!-- /.row -->
                            </div><!-- /.box-footer -->
                        </div><!-- /.box -->
                    </div><!-- /.col -->
                </div>
                <div class="row">
                    <!-- Left col -->
                    <section class="col-lg-7 connectedSortable">
                        <!-- Custom tabs (Charts with tabs)-->
                        <div class="nav-tabs-custom">
                            <!-- Tabs within a box -->
                            <ul class="nav nav-tabs pull-right">
                                <li class="pull-left header"><i class="fa fa-inbox"></i> Sales</li>
                            </ul>
                            <div class="tab-content no-padding">
                                <!-- Morris chart - Sales -->
                                <div class="chart tab-pane active" id="revenue-chart"
                                    style="position: relative; height: 300px;"></div>
                                <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                                </div>
                            </div>
                        </div><!-- /.nav-tabs-custom -->

                        <!-- Chat box -->
                        <!-- /.box (chat box) -->
                    </section><!-- /.Left col -->
                    <!-- right col (We are only adding the ID to make the widgets sortable)-->
                    <section class="col-lg-5 connectedSortable">

                        <!-- Map box -->
                        <div class="box box-solid bg-light">

                            <div class="box-body">
                                <!-- Info Boxes Style 2 -->
                                <div class="info-box ">
                                    <span class="info-box-icon"><i class="ion ion-ios-pricetag-outline"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Inventory</span>
                                        <span class="info-box-number">5,200</span>
                                        <span class="progress-description">
                                            50% Increase in 30 Days
                                        </span>
                                    </div><!-- /.info-box-content -->
                                </div><!-- /.info-box -->
                                <div class="info-box bg-light">
                                    <span class="info-box-icon"><i class="ion ion-ios-heart-outline"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Mentions</span>
                                        <span class="info-box-number">92,050</span>
                                        <span class="progress-description">
                                            20% Increase in 30 Days
                                        </span>
                                    </div><!-- /.info-box-content -->
                                </div><!-- /.info-box -->
                                <div class="info-box bg-light">
                                    <span class="info-box-icon"><i
                                            class="ion ion-ios-cloud-download-outline"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Downloads</span>
                                        <span class="info-box-number">114,381</span>
                                        <span class="progress-description">
                                            70% Increase in 30 Days
                                        </span>
                                    </div><!-- /.info-box-content -->
                                </div><!-- /.info-box -->
                                <div class="info-box bg-light">
                                    <span class="info-box-icon"><i class="ion-ios-chatbubble-outline"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Direct Messages</span>
                                        <span class="info-box-number">163,921</span>
                                        <span class="progress-description">
                                            40% Increase in 30 Days
                                        </span>
                                    </div><!-- /.info-box-content -->
                                </div><!-- /.info-box -->
                                <!-- /.box -->
                            </div><!-- /.box-body-->
                        </div>

                    </section><!-- right col -->
                </div><!-- /.row (main row) -->

            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->
        <?php include "../include/admin/footer_admin.php";