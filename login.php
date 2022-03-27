<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>

    <link href="assets/bootstrap/template/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/bootstrap/template/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="assets/bootstrap/template/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/bootstrap/template/dist/css/adminlte.min.css">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="assets/bootstrap/template/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
   
</head>

<style>
    a {
        color: #449ED3;
    }
    img{
        width: 60%;
        height: 60%;
        
    }
</style>

<body class="hold-transition login-page">
    <!-- login -->
    <div class="login-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <!-- <a href="#" class="h1"><b>photo_icon_icit</b>LTE</a> -->
               <img src="assets/images/kmutnb_logo.png" alt="">
                <!-- <p>ล็อคอินบัญชีด้วย</p> -->
               <img src="assets/images/icit.png" alt="">
            </div>
            <div class="card-body">
                <!-- <p class="login-box-msg">LOGIN</p> -->

                <form action="#" method="post">
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="ชื่อผู้ใช้งาน">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="รหัสผ่าน">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>

                </form>

                <div class=" social-auth-links text-center mt-2 ">
                    <a href="#" class="btn btn-block btn-info btn-lg" style="background:#3D8DBD; color:white;">
                        <i class="fas fa-door-open"></i> เข้าสู่ระบบ
                    </a>

                </div>
                <!-- /.social-auth-links -->

                <p class="mb-1 text-center">
                    <a href="https://account.kmutnb.ac.th/">ลืมรหัสผ่านหรือต้องการเปลี่ยนรหัสผ่าน</a>
                </p>

            </div>
            <!-- /.card-body -->
        </div>
    </div>

    <!-- /login -->



    <!-- jQuery -->
    <script src="assets/bootstrap/template/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="assets/bootstrap/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="assets/bootstrap/template/dist/js/adminlte.min.js"></script>
   
</body>

</html>