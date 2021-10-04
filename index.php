
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LEAVE WORK TEMMESH</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="src/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="src/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="src/plugins/iCheck/square/blue.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Athiti&display=swap" rel="stylesheet">
    <style>
        .login-page {
        font-family: 'Athiti', sans-serif;
        font-weight: bold;
         background: url("src/dist/img/back.jpg") no-repeat center center fixed;
        background-size: cover;	
    }
        .login-logo {
            font-size: 60px;
        }
        .password1{
            font-size: 10px;
        }
        .btn{
            font-weight: bold;
        }

    </style>
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <p href="index.php"><b>TEM</b>MESH</p>
        </div>
        <p class="text-center">THAI EASTERN WIRE MESH CO., LTD</p>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg text-danger">LOG IN ก่อนเข้าใช้งาน !!!</p>

            <form action="../sql/file_login.php" method="POST">
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="รหัสพนักงาน" name="emp_id" id="emp_id" style="text-transform:uppercase">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="รหัสผ่าน (วัน/เดือน/ปีเกิด)"  name="emp_birthday" id="emp_birthday">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <a class="password1 text-danger">* รหัสผ่านจะเป็น วัน/เดือน/ปีเกิด เช่น 01/01/2000</a>
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block ">เข้าสู่ระบบ</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
            <br>
            <br>
            <div class="text-center">
                <p class="">พนักงานใหม่ติดต่อขอรับ <a>USERNAME & PASSWORD</a></p>
                <p>ที่ ฝ่ายบุคคล</p>
            </div>
        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery 2.2.0 -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="src/bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="src/plugins/iCheck/icheck.min.js"></script>
    <script>
    $(function() {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
    </script>
</body>

</html>