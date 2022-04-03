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

        .timeline-footer {
            text-align: center;
        }

        .btn11 {
            padding: 15px;
        }

        .show {
            border: 2px solid #C30404;
            padding: 20px;
            outline: none;
            border-radius: 30px;
            color: black;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <?php include("../include/header.php"); ?>
        <?php include("../include/sidebar_boss.php"); ?>


        <div class="content-wrapper" style="min-height: 608px;">
            <div class="contain">
                <div class="content">
                    <div class="card">
                        <div class="card-header " style="background:#004385 ;color:white;">
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
                                        <div style="height: auto;">
                                            <i class="fas fa-user bg-green"></i>
                                            <div class="timeline-item">
                                                <!-- <span class="time"><i class="fas fa-clock"></i> 27 mins ago</span> -->
                                                <h1 class="timeline-header"> <label for="">หัวข้อ</label></h1>
                                                <div class="timeline-body">

                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">รายละเอียดงาน :</label>
                                                        <div class="col-sm-10">
                                                            <!-- ดึง php ข้อมูลออกมาตรงนี้ -->
                                                        </div>
                                                    </div>


                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">สถานที่ปฎิบัติงาน :</label>
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label">บ้าน</label>
                                                        </div>
                                                        <label class="col-sm-2 col-form-label">วันที่และเวลาทำงาน:</label>
                                                        <div class="col-sm-4">
                                                            <label class="col-form-label">04/03/2021-05/03/2021</label>
                                                        </div>
                                                    </div>

                                                    <!-- <div class="row">
                                                        <div class="col-sm-6">
                                                         
                                                            <div class="form-group">
                                                                <label class="col-sm-2 col-form-label">สถานที่ปฎิบัติงาน :</label>
                                                                <div class="col-sm-3">
                                                                    <label class="col-form-label">บ้าน</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="col-sm-2 col-form-label">วันที่และเวลาทำงาน:</label>
                                                                <div class="col-sm-4">
                                                                    <label class="col-form-label">04/03/2021-05/03/2021</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> -->

                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label></label>
                                                                <div class="card card-danger">
                                                                    <div class="card-header">
                                                                        <h3 class="card-title">ความสำเร็จ</h3>

                                                                        <div class="card-tools">
                                                                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                                                <i class="fas fa-minus"></i>
                                                                            </button>

                                                                        </div>
                                                                    </div>
                                                                    <div class="card-body">

                                                                        <canvas id="myChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>

                                                                    </div>
                                                                    <!-- /.card-body -->
                                                                </div>
                                                                <!-- /.card -->
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label></label>
                                                                <div class="card card-danger">
                                                                    <div class="card-header">
                                                                        <h3 class="card-title">ปัญหาที่พบ</h3>
                                                                        <div class="card-tools">
                                                                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                                                <i class="fas fa-minus"></i>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-body">
                                                                        <canvas id="myChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                                                    </div>
                                                                    <!-- /.card-body -->
                                                                </div>
                                                                <!-- /.card -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- สร้างเงื่อนไข ถ้าพบว่ามีไฟล์ให้แแสดงหน้า ifame ถ้าไม่เจอให้เเสดงหน้ารูป ถ้าเจอทั้งสองแบ่งเป็ฯ 2 ฝั่ง -->
                                                    <div class="">
                                                        <div class="form-group ">
                                                            <label>ไฟล์เเละรูปภาพ</label>
                                                            <div class="" style="text-align: center;">
                                                                <iframe src="" width="80%" height="650px">
                                                                </iframe>
                                                            </div>

                                                        </div>

                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="card card-primary">
                                                                        <div class="card-header">
                                                                            <h4 class="card-title">รูปภาพ</h4>
                                                                        </div>
                                                                        <div class="card-body">
                                                                            <div>
                                                                                <div class="filter-container p-0 row">
                                                                                    <div class="filtr-item col-sm-2" data-category="1">
                                                                                        <a href="https://via.placeholder.com/1200/FFFFFF.png?text=1" data-toggle="lightbox" data-title="ชื่อรูปที่ 1">
                                                                                            <img src="https://via.placeholder.com/300/FFFFFF?text=1" class="img-fluid mb-2" alt="white sample" />
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="filtr-item col-sm-2" data-category="1">
                                                                                        <a href="https://via.placeholder.com/1200/FFFFFF.png?text=6" data-toggle="lightbox" data-title="ชื่อรูปที่ 2">
                                                                                            <img src="https://via.placeholder.com/300/FFFFFF?text=6" class="img-fluid mb-2" alt="white sample" />
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="filtr-item col-sm-2" data-category="1">
                                                                                        <a href="https://via.placeholder.com/1200/FFFFFF.png?text=7" data-toggle="lightbox" data-title="ชื่อรูปที่ 3">
                                                                                            <img src="https://via.placeholder.com/300/FFFFFF?text=7" class="img-fluid mb-2" alt="white sample" />
                                                                                        </a>
                                                                                    </div>

                                                                                    <div class="filtr-item col-sm-2" data-category="1">
                                                                                        <a href="https://via.placeholder.com/1200/FFFFFF.png?text=10" data-toggle="lightbox" data-title="ชื่อรูปที่ 4">
                                                                                            <img src="https://via.placeholder.com/300/FFFFFF?text=10" class="img-fluid mb-2" alt="white sample" />
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="filtr-item col-sm-2" data-category="1">
                                                                                        <a href="https://via.placeholder.com/1200/FFFFFF.png?text=11" data-toggle="lightbox" data-title="ชื่อรูปที่ 5">
                                                                                            <img src="https://via.placeholder.com/300/FFFFFF?text=11" class="img-fluid mb-2" alt="white sample" />
                                                                                        </a>
                                                                                    </div>

                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /div photo -->
                                                    <!-- กรณีลงไว้ทั้งคู่ -->
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">

                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="show">
                                                        <p>ชื่อผู้ส่ง :</p>
                                                        <p>ข้อความรายละเอียดจากหัวหน้า :</p>
                                                        <div class="timeline-footer" data-toggle="modal" data-target="#exampleModalCenter">
                                                            <a class="btn11 btn-danger btn-sm"><i class="fas fa-paper-plane"></i> ตอบกลับ</a>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!-- /timeline-body -->
                                            </div>
                                            <!-- popup -->
                                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="border:none; outline:none">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="">
                                                            <h5 class="modal-title" id="exampleModalLongTitle">ตอบข้อความกลับ</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="" method="post">
                                                                <div>
                                                                    <div class="card-body">
                                                                        <!-- <div class="form-group ">
                                                                            <label for="" class=" col-form-label">หัวข้อ :</label>
                                                                            <div class="col">
                                                                                <input type="text" class="form-control" id="" placeholder="">
                                                                            </div>
                                                                        </div> -->

                                                                        <div class="form-group ">
                                                                            <label for="" class=" col-form-label">รายละเอียด:</label>
                                                                            <div class="col">
                                                                                <!-- note -->
                                                                                <textarea id="summernote" style="display: none;"></textarea>
                                                                            </div>
                                                                            <!-- note -->
                                                                        </div>

                                                                    </div>

                                                            </form>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-primary">ส่ง</button>
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                                                            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- //popup -->
                                        </div>
                                        <!-- END timeline item -->


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