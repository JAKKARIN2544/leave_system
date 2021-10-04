<?php include '../include/user/header_user.php'; ?>
<div class="content-wrapper">
    <div class="container">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="alert alert-warning alert-dismissible text-center">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4 class="alert"><i class="icon fa fa-warning"></i> กรุณาอ่านก่อนกรอกแบบฟอร์ม ลางาน !!!</h4>
                กรอกแบบฟอร์มก่อนวันลางาน 1-3 วัน เพื่อรอรับการยืนยันการลางานจากผู้จัดการ.
            </div>
        </section>
        <section class="content">
            <div class="box-body bg-gray-light">
                <!-- Default box --> 
                <div class="container">
                    <div class="box-header with-border">
                        <h1 class="box-header text-center">แบบฟอร์มวันลางาน</h1>
                        <h5 class="box-header text-center">THAI EASTERN WIRE MESH CO., LTD</h5>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputtext1">Applicant Name/ชื่อ</label>
                                    <input type="text" class="form-control" id="exampleInputtext1"
                                        placeholder="Applicant Name">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputtext1">Staff Code/รหัส</label>
                                    <input type="text" class="form-control" id="exampleInputtext1"
                                        placeholder="Staff Code">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="exampleInputtext1">Department/แผนก</label>
                                    <input type="text" class="form-control" id="exampleInputtext1"
                                        placeholder="Department">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputtext1">Leave/ลางาน</label>
                                    <select class="form-control">
                                        <option>ลาป่วย (Sick Leave)</option>
                                        <option>ลากิจ (Casual Leave)</option>
                                        <option>ลาพักร้อน (Annual Leave)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="exampleInputtext1">sick Leave
                                        Application/ต้องการลางาน</label>
                                    <input type="text" class="form-control" id="exampleInputtext1"
                                        placeholder="sick Leave Application">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label>Reason for Leave Application (indicate if overseas) /
                                        โปรดระบุเหตุผล</label>
                                    <textarea class="form-control" rows="3"
                                        placeholder="Reason for Leave Application (indicate if overseas)"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="exampleInputtext1">Date To/ถึง วันที่</label>
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control pull-right" id="datepicker">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="exampleInputtext1">Time From/ เวลา</label>
                                    <input type="text" class="form-control timepicker" id="exampleInputtext1"
                                        placeholder="Time From">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="exampleInputtext1">Date To/ถึง วันที่</label>
                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control pull-right" id="datepicker1">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="exampleInputtext1">Time To/ถึง เวลา</label>
                                    <input type="text" class="form-control timepicker" id="exampleInputtext1"
                                        placeholder="Date To">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="exampleInputtext1">Days / จำนวนวัน</label>
                                    <input type="text" class="form-control" id="exampleInputtext1" placeholder="Days">
                                </div>
                            </div>
                        </div>
                        <br>
                        <!-- /.box-body -->
                        <div class="row">
                            <div class="col-md-2">

                            </div>
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-block btn btn-success btn-lg">ยืนยันการลา</button>
                            </div>
                            <div class="col-md-2">

                            </div>
                        </div>
                    </form>
                </div>
                <br>
            </div>
    </div>
</div>
<!-- /.box-body -->
<!-- /.box -->
</div>
<!-- /.container -->
</div>
<!-- /.content-wrapper -->
<?php include '../include/user/footer_user.php'; ?>