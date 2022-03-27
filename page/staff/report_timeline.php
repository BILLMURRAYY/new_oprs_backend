<?php include("../include/head.php"); ?>

<head>
    <link rel="stylesheet" href="../../assets/js/add_form.js">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../assets/bootstrap/template/dist/css/adminlte.min.css">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="../../assets/bootstrap/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="../../assets/bootstrap/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="../../assets/bootstrap/template/plugins/select2/css/select2.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../assets/bootstrap/template/dist/css/adminlte.min.css">

    <!-- summernote -->
    <link rel="stylesheet" href="../../assets/bootstrap/template/plugins/summernote/summernote-bs4.min.css">
    <!-- SimpleMDE -->
    <link rel="stylesheet" href="../../assets/bootstrap/template/plugins/simplemde/simplemde.min.css">
    <!-- CodeMirror -->
    <link rel="stylesheet" href="../../assets/bootstrap/template/plugins/codemirror/codemirror.css">
    <link rel="stylesheet" href="../../assets/bootstrap/template/plugins/codemirror/theme/monokai.css">
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

        label {
            display: block;
            padding: 15px;

        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <?php include("../include/header.php"); ?>
        <?php include("../include/sidebar_emp.php"); ?>

        <div class="content-wrapper" style="min-height: 608px;">
            <div class="contain">
                <div class="content">
                    <div class="card">
                        <div class="card-header ">
                            <div>
                                <h3 class="card-title">ไทม์ไลน์การปฎิบัติงาน</h3>
                            </div>
                            <!-- <div style="text-align: right;">
                                <button type="button" class="btn btn-success text-right "><a href="form_report.php"><span class="fas fa-plus-circle"></span> เพิ่มรายงาน</a></button>
                            </div> -->
                        </div>
                        <div class="card-body">
                            <!-- Timelime example  -->
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- The time line -->
                                    <div class="timeline">
                                        <!-- timeline time label -->
                                        <div class="time-label">
                                            <span class="bg-red">10 Feb.2014</span>
                                        </div>
                                        <!-- /.timeline-label -->


                                        <!-- timeline item -->
                                        <div>
                                            <i class="fas fa-user bg-green"></i>
                                            <div class="timeline-item">
                                                <span class="time"><i class="fas fa-clock"></i> 27 mins ago</span>
                                                <h3 class="timeline-header"><a href="#">Jay White</a> <label for="">หัวข้อ</label></h3>
                                                <div class="timeline-body">

                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">รายละเอียดงาน :</label>
                                                        <div class="col-sm-10">
                                                            <!-- ดึง php ข้อมูลออกมาตรงนี้ -->
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">

                                                        <label class="col-sm-2 col-form-label">วันที่ทำงาน :</label>
                                                        <div class="input-group date col-sm-4" id="reservationdate">
                                                            <input type="text" class="form-control ">
                                                            <div class="input-group-append">
                                                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                            </div>

                                                            <input type="text" class="form-control ">
                                                            <div class="input-group-append">
                                                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                            </div>
                                                        </div>

                                                        <label class="col-sm-2 col-form-label">เวลา :</label>
                                                        <div class="input-group date col-sm-4" id="timepicker">
                                                            <input type="text" class="form-control datetimepicker-input" />
                                                            <div class="input-group-append">
                                                                <div class="input-group-text"><i class="far fa-clock"></i></div>
                                                            </div>


                                                            <input type="text" class="form-control datetimepicker-input" />
                                                            <div class="input-group-append">
                                                                <div class="input-group-text"><i class="far fa-clock"></i></div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">สถานที่ปฎิบัติงาน :</label>
                                                        <div class="col-sm-4">
                                                            <!-- <select class="select2" style="width: 100%;">
                                                                <option value="บ้าน">บ้าน</option>
                                                                <option value="สำนักงาน">สำนักงาน</option>
                                                            </select> -->
                                                        </div>

                                                        <label class="col-sm-2 col-form-label">ความสำเร็จงาน :</label>
                                                        <div class="col-sm-4" style="">
                                                            <!-- <select class="select2" style="width: 100%;">
                                                                <option value="10">10 %</option>
                                                                <option value="20">20 %</option>
                                                                <option value="30">30 %</option>
                                                                <option value="40">40 %</option>
                                                                <option value="50">50 %</option>
                                                                <option value="60">60 %</option>
                                                                <option value="70">70 %</option>
                                                                <option value="80">80 %</option>
                                                                <option value="90">90 %</option>
                                                                <option value="100">100 %</option>
                                                            </select> -->
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label for="" class="col-sm-2 col-form-label">ไฟล์เอกสาร :</label>
                                                        <div class="col-sm-10">
                                                            <!-- <textarea class="form-control" name="" id="" cols="30" rows="10" placeholder=""></textarea> -->
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label for="" class="col-sm-2 col-form-label">ส่งให้กับ :</label>
                                                        <div class="col-sm-10">
                                                            <!-- <textarea class="form-control" name="" id="" cols="30" rows="10" placeholder=""></textarea> -->
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label for="" class="col-sm-2 col-form-label">ปัญหาที่พบ :</label>
                                                        <div class="col-sm-10">
                                                            <!-- <textarea class="form-control" name="" id="" cols="30" rows="10" placeholder=""></textarea> -->
                                                        </div>
                                                    </div>


                                                </div>
                                                <!-- สร้างเงื่อนไขคือ ถ้างานครบ ขึ้นตัวหนังสือว่าสำเร็จ  ปุ่มอัปเดตจะขึ้นแค่ของคนนั้น -->
                                                <div class="timeline-footer" data-toggle="modal" data-target="#exampleModalCenter">
                                                    <a class="btn btn-warning btn-sm">อัปเดตงาน</a>
                                                </div>
                                            </div>
                                           
                                            <!-- popup -->
                                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLongTitle">ฟอร์มการอัปเดตงาน</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="" method="post">
                                                                <div>
                                                                    <div class="card-body">
                                                                        <div class="form-group ">
                                                                            <label for="" class=" col-form-label">ชื่อหัวข้อรายงาน :</label>
                                                                            <div class="col">
                                                                                <input type="text" class="form-control" id="" placeholder="">
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group ">
                                                                            <label for="" class=" col-form-label">รายละเอียดการปฎิบัติงาน:</label>
                                                                            <div class="col">
                                                                                <!-- note -->
                                                                                <textarea id="summernote" style="display: none;">รายละเอียดงาน</textarea>

                                                                            </div>
                                                                            <!-- note -->
                                                                        </div>


                                                                        <div class="form-group ">
                                                                            <label class="col-form-label">สถานที่ปฎิบัติงาน :</label>
                                                                            <div class="col">
                                                                                <select class="select2" style="width: 100%;">
                                                                                    <option value="บ้าน">บ้าน</option>
                                                                                    <option value="สำนักงาน">สำนักงาน</option>
                                                                                </select>
                                                                            </div>

                                                                            <label class="col-form-label">ความสำเร็จงาน :</label>
                                                                            <div class="col" style="">
                                                                                <select class="select2" style="width: 100%;">
                                                                                    <option value="10">10 %</option>
                                                                                    <option value="20">20 %</option>
                                                                                    <option value="30">30 %</option>
                                                                                    <option value="40">40 %</option>
                                                                                    <option value="50">50 %</option>
                                                                                    <option value="60">60 %</option>
                                                                                    <option value="70">70 %</option>
                                                                                    <option value="80">80 %</option>
                                                                                    <option value="90">90 %</option>
                                                                                    <option value="100">100 %</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>

                                                                        <!-- แบบที่ 1 เลือกวันเเละเวลาทำงานได้ทีเดียว -->
                                                                        <div class="form-group ">
                                                                            <label class="col-form-label">วันที่ทำงานและเวลา :</label>
                                                                            <div class="input-group ">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text"><i class="far fa-clock"></i></span>
                                                                                </div>
                                                                                <input type="text" class="form-control float-right" id="reservationtime">
                                                                            </div>
                                                                        </div>
                                                                        <!-- เเบบที่2 เลือกวัน เเละ เวลาแยกกัน -->
                                                                        <div class="form-group ">

                                                                            <label class=" col-form-label">วันที่ทำงาน :</label>
                                                                            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                                                                <input type="text" class="form-control " data-target="#reservationdate">
                                                                                <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                                                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                                                </div>

                                                                                <input type="text" class="form-control " data-target="#reservationdate">
                                                                                <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                                                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                                                </div>
                                                                            </div>

                                                                            <label class="col-form-label">เวลา :</label>
                                                                            <div class="input-group date" id="timepicker" data-target-input="nearest">
                                                                                <input type="text" class="form-control datetimepicker-input" data-target="#timepicker" />
                                                                                <div class="input-group-append" data-target="#timepicker" data-toggle="datetimepicker">
                                                                                    <div class="input-group-text"><i class="far fa-clock"></i></div>
                                                                                </div>


                                                                                <input type="text" class="form-control datetimepicker-input" data-target="#timepicker" />
                                                                                <div class="input-group-append" data-target="#timepicker" data-toggle="datetimepicker">
                                                                                    <div class="input-group-text"><i class="far fa-clock"></i></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group ">
                                                                            <label class="col-form-label">เลือกผู้ส่ง :</label>
                                                                            <div class="col">
                                                                                <select class="select2" multiple="multiple" style="width: 100%;">
                                                                                    <option>1</option>
                                                                                    <option>2</option>
                                                                                    <option>3</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group ">
                                                                            <label for="col-form-label">อัพโหลดไฟล์ (ใส่รูปการทำงานเป็นไฟล์ .pdf)</label>
                                                                            <!-- <div class="col"> -->
                                                                            <div class="custom-file">
                                                                                <input type="file" class="custom-file-input" id="exampleInputFile">
                                                                                <label class="custom-file-label" for="exampleInputFile">เลือกไฟล์</label>
                                                                            </div>

                                                                            <!-- </div> -->
                                                                        </div>

                                                                        <div class="form-group ">
                                                                            <label for="" class="col-form-label">ปัญหาที่พบ :</label>
                                                                            <div class="col">
                                                                                <textarea class="form-control" name="" id="" cols="30" rows="10" placeholder=""></textarea>
                                                                            </div>
                                                                        </div>


                                                                    </div>


                                                                    <!-- <div class="card-footer">
                                                                        <button type="submit" class="btn btn-primary">บันทึกรายงาน</button>
                                                                       
                                                                    </div> -->

                                                            </form>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-primary">บันทึกรายงาน</button>
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                                                            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- //popup -->

                                        </div>
                                        <!-- END timeline item -->

                                        <h1>งานสำเร็จเเล้ว</h1>
                                    </div>
                                </div>
                                <!-- /.col -->
                            </div>
                        </div>
                    </div>
                    <!-- /.timeline -->

                </div>
            </div>
        </div>
    </div>

    <script>
        $(function() {
            // Summernote
            $('#summernote').summernote()

            // CodeMirror
            CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
                mode: "htmlmixed",
                theme: "monokai"
            });
        })

        $(function() {
            $('.select2').select2()
        });
    </script>
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": true,
                "searching": false,
                "paging": false,
                // "ordering": true,
                // "info": true,
                // "buttons": ["copy", "csv", "excel", "pdf", "print"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "responsive": true,
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false
            });
        });
    </script>
    <!-- jQuery -->
    <script src="../../assets/bootstrap/template/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../assets/bootstrap/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Select2 -->
    <script src="../../assets/bootstrap/template/plugins/select2/js/select2.full.min.js"></script>
    <!-- Bootstrap4 Duallistbox -->
    <script src="../../assets/bootstrap/template/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
    <!-- InputMask -->
    <script src="../../assets/bootstrap/template/plugins/moment/moment.min.js"></script>
    <script src="../../assets/bootstrap/template/plugins/inputmask/jquery.inputmask.min.js"></script>
    <!-- date-range-picker -->
    <script src="../../assets/bootstrap/template/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap color picker -->
    <script src="../../assets/bootstrap/template/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="../../assets/bootstrap/template/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Bootstrap Switch -->
    <script src="../../assets/bootstrap/template/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
    <!-- BS-Stepper -->
    <script src="../../assets/bootstrap/template/plugins/bs-stepper/js/bs-stepper.min.js"></script>
    <!-- dropzonejs -->
    <script src="../../assets/bootstrap/template/plugins/dropzone/min/dropzone.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../assets/bootstrap/template/dist/js/demo.js"></script>

    <!-- Summernote -->
    <script src="../../assets/bootstrap/template/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- CodeMirror -->
    <script src="../../assets/bootstrap/template/plugins/codemirror/codemirror.js"></script>
    <script src="../../assets/bootstrap/template/plugins/codemirror/mode/css/css.js"></script>
    <script src="../../assets/bootstrap/template/plugins/codemirror/mode/xml/xml.js"></script>
    <script src="../../assets/bootstrap/template/plugins/codemirror/mode/htmlmixed/htmlmixed.js"></script>
</body>