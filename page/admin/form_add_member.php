<?php include("../include/head.php"); ?>
<?php include("sql_select.php"); ?>

<head>


    <style>
        .contain {
            padding: 25px;
        }

        .card-title {
            font-size: 20px;
        }

        .card-footer {
            text-align: center;
        }
        input[type="file"]{
           
        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">

    <div class="wrapper">
        <?php include("../include/header.php"); ?>
        <?php include("../include/sidebar_admin.php"); ?>

        <div class="content-wrapper" style="min-height: 608px;">
            <div class="contain">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">เพิ่มสมาชิก</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="sql_add_member.php" id="" method="post" onSubmit="return chkpsw(this)" enctype="multipart/form-data">
                        <div class="card-body">
                            <!-- <div class="form-group">
                                <label>สิทธิ์การเข้าถึง</label>
                                <select id="m_role" class="form-control select2bs4" style="width: 100%;" required>
                                    <option value="">-เลือกข้อมูล-</option>
                                    <option value="admin">admin</option>
                                    <option value="boss">Boss</option>
                                    <option value="staff">staff</option>
                                    <option value="employee">Employee</option>
                                </select>
                            </div> -->
                            <div class="form-group">
                                <label>แผนก</label>
                                <select id="m_position" name="depart" class="select2" style="width: 100%;" required>
                                    <?php foreach ($result as $row) {
                                        if ($row['departmentName'] != "admin") { ?>
                                            <option value="<?php echo $row["departmentName"] ?>"><?php echo $row["departmentName"] ?></option>

                                    <?php }
                                    } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-2" data-select2-id="83">
                                        <div class="form-group" data-select2-id="82">
                                            <label>คำนำหน้า</label>
                                            <select id="m_prefix" name="mr" class="select2" style="width: 100%;" data-select2-id="17" tabindex="-1" aria-hidden="true">
                                                <option value="">-เลือกข้อมูล-</option>
                                                <option value="นาย">นาย</option>
                                                <option value="นางสาว">นางสาว</option>
                                                <option value="นาง">นาง</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-5" data-select2-id="56">
                                        <div class="form-group" data-select2-id="55">
                                            <label>ชื่อ</label>
                                            <input type="text" name="f_name" class="form-control" required placeholder="กรอกชื่อจริง" value="" minlength="2">
                                        </div>
                                    </div>

                                    <div class="col-md-5" data-select2-id="56">
                                        <div class="form-group" data-select2-id="55">
                                            <label>นามสกุล</label>
                                            <input type="text" name="l_name" class="form-control" required placeholder="กรอกนามสกุล" value="" minlength="2">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">เบอร์โทรศัพท์</label>
                                <input type="text" class="form-control" name="phone" id="m_tell" placeholder="กรอกเบอร์โทรศัพท์" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">อีเมล</label>
                                <input type="email" class="form-control" name="email" id="m_email" placeholder="กรอกอีเมล" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">รหัสผ่าน</label>
                                <input type="password" class="form-control" name="pass1" id="m_pass" placeholder="กรอกรหัสผ่าน" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">ยืนยันรหัสรหัสผ่านอีกครั้ง</label>
                                <input type="password" class="form-control" name="pass2" id="m_pass2" placeholder="กรอกรหัสผ่านอีกครั้ง" required>
                            </div>

                            <div class="form-group">
                                <label >ไฟล์รูปภาพ</label>
                                <div class="input-group">
                                    <!-- <div class="custom-file"> -->
                                        <input type="file" name="m_Img" class="form-control" id="m_Img"  accept="image/*">
                                        <!-- <label class="" for="exampleInputFile">ใส่รูปภาพ (นามสกุลไฟล์รูปภาพ .jpg และ .png)</label> -->
                                    <!-- </div> -->
                                    <!-- <div class="input-group-append">
                                        <span class="input-group-text">อัปโหลด</span>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script language="Javascript">
        function chkpsw(form) {
            password1 = form.pass1.value;
            password2 = form.pass2.value;

            // ถ้าช่่องรหัสผ่านไม่ถูกกรอก
            if (password1 == '')
                alert("กรุณากรอกรหัสยืนยันอีกครั้ง");

            // ถ้าช่่องยืนยันรหัสผ่านไม่ถูกกรอก
            else if (password2 == '')
                alert("กรุณากรอกรหัสยืนยันอีกครั้ง");

            //ถ้าทั้งสองช่องไม่ตรงกัน   ให้แจ้งผู้ใช้  และ  return false
            else if (password1 != password2) {
                alert("\n รหัสผ่านของคุณไม่ตรงกัน")
                return false;
            }

            //ถ้าทั้งสองช่องตรงกัน  return true
            else {

                alert("เพิ่มสมาชิกเรียบร้อย")
                return true;
            }
        }
    </script>

    <script>
        $(function() {
            $('.select2').select2()
        });
    </script>

</body>