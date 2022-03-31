<?php include("../include/head.php"); ?>
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
</style>

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
                    <form action="" method="post">
                        <div class="card-body">
                            <div class="form-group">
                                <label>สิทธิ์การเข้าถึง</label>
                                <select id="m_role" class="form-control select2bs4" style="width: 100%;" required>
                                    <option value="">-เลือกข้อมูล-</option>
                                    <option value="admin">admin</option>
                                    <option value="boss">Boss</option>
                                    <option value="staff">staff</option>
                                    <option value="employee">Employee</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>แผนก</label>
                                <select id="m_position" class="form-control select2bs4" style="width: 100%;" required>
                                    <option value="">-เลือกข้อมูล-</option>
                                    <option value="แอดมิน">แอดมิน</option>
                                    <option value="ฝ่ายบริหาร">ฝ่ายบริหาร</option>
                                    <option value="ฝ่ายบริการศึกษา">ฝ่ายบริการศึกษา</option>
                                    <option value="งานคลังและพัสดุ">งานคลังและพัสดุ</option>
                                    <option value="กลุ่มงานประกัน">กลุ่มงานประกัน</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-2" data-select2-id="83">
                                        <div class="form-group" data-select2-id="82">
                                            <label>คำนำหน้า</label>
                                            <select id="m_prefix" class="form-control select2bs4 select2-hidden-accessible" style="width: 100%;" data-select2-id="17" tabindex="-1" aria-hidden="true">
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
                                            <input type="text" name="m_FName" class="form-control" required placeholder="กรอกชื่อจริง" value="" minlength="2">
                                        </div>
                                    </div>

                                    <div class="col-md-5" data-select2-id="56">
                                        <div class="form-group" data-select2-id="55">
                                            <label>นามสกุล</label>
                                            <input type="text" name="m_LName" class="form-control" required placeholder="กรอกนามสกุล" value="" minlength="2">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">เบอร์โทรศัพท์</label>
                                <input type="email" class="form-control" id="m_tell" placeholder="กรอกเบอร์โทรศัพท์" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">อีเมล</label>
                                <input type="email" class="form-control" id="m_email" placeholder="กรอกอีเมล" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">รหัสผ่าน</label>
                                <input type="password" class="form-control" id="m_pass" placeholder="กรอกรหัสผ่าน" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">ยืนยันรหัสรหัสผ่านอีกครั้ง</label>
                                <input type="password" class="form-control" id="m_pass2" placeholder="กรอกรหัสผ่านอีกครั้ง" required>
                            </div>
                            <div class="form-group">
                                <label for="InputFile">ไฟล์รูปภาพ</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="m_file">
                                        <label class="custom-file-label" for="exampleInputFile">ใส่รูปภาพ (นามสกุลไฟล์รูปภาพ .jpg และ .png)</label>
                                    </div>
                                    <!-- <div class="input-group-append">
                                        <span class="input-group-text">อัปโหลด</span>
                                    </div> -->
                                </div>
                            </div>

                            <div class="form-group" data-select2-id="10">
                                <section class="content">
                                    <div class="col-3">
                                        <div class="form-group">
                                            <label>Sort Order:</label>
                                            <select class="select2" style="width: 100%;">
                                                <option selected>ASC</option>
                                                <option>Text only</option>
                                                <option>Images</option>
                                                <option>Video</option>
                                            </select>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <!-- <div class="form-group">
                                <label>Disabled Result</label>
                                <select class="form-control select2bs4" style="width: 100%;">
                                    <option selected="selected">Alabama</option>
                                    <option>Alaska</option>
                                    <option disabled="disabled">California (disabled)</option>
                                    <option>Delaware</option>
                                    <option>Tennessee</option>
                                    <option>Texas</option>
                                    <option>Washington</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>สมาชิก</label>
                                <select class="form-control select2bs4" style="width: 100%;">

                                    <option selected="selected">Alabama</option>
                                    <option>Alaska</option>
                                    <option disabled="disabled">แผนก</option>
                                    <option>Delaware</option>
                                    <option>Tennessee</option>
                                    <option>Texas</option>
                                    <option>Washington</option>
                                </select>
                            </div> -->
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

    <!-- script -->

    <!-- Select2 -->
    <script src="../../assets/bootstrap/template/plugins/select2/js/select2.full.min.js"></script>
    <!-- dropzonejs -->
    <script src="../../assets/bootstrap/template/plugins/dropzone/min/dropzone.min.js"></script>
</body>