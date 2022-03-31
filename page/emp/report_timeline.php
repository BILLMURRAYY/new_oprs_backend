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
                                            <!-- <span class="time"><i class="fas fa-clock"></i> 27 mins ago</span> -->
                                            <h2 class="timeline-header"><label for="">หัวข้อ</label></h2>
                                            <div class="timeline-body">

                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">รายละเอียดงาน :</label>
                                                    <div class="col-sm-10">
                                                        <!-- ดึง php ข้อมูลออกมาตรงนี้ -->
                                                    </div>
                                                </div>

                                                <!-- <div class="form-group row">

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
                                                </div> -->

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
                                            <div class="timeline-footer" data-toggle="modal" data-target="#exampleModalCenter" style="text-align: center;">
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
                                                                                <option value="บ้าน">นอกสถานที่</option>
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



                                                                    <div class="form-group">
                                                                        <label class="col-form-label">แนบหลักฐาน :</label>
                                                                        <div class="col">
                                                                            <select class="select2" style="width: 100%;" onchange="display(this)">
                                                                                <option>เลือกรายการ</option>
                                                                                <option value="file">เอกสาร</option>
                                                                                <option value="photo">รูปภาพ</option>
                                                                            </select>
                                                                        </div>

                                                                    </div>
                                                                    <div class="upload" id="show1" style="display: none">
                                                                        <div class="form-group ">
                                                                            <!-- <div class="clone"> -->
                                                                            <label for="">อัปโหลดไฟล์ (จำกัดขนาดไฟล์ไม่เกิน 4.MB)</label>
                                                                            <input type="file" class="form-control">
                                                                            <!-- </div> -->
                                                                        </div>
                                                                    </div>
                                                                    <div class="cloneContainer" id="show2" style="display: none">
                                                                        <div class="form-group ">
                                                                            <div class="row">
                                                                                <div class="col-10">
                                                                                    <label for="">อัปโหลดรูปภาพ (นามสกุลรูป .PNG หรือ.JPG และ จำกัดได้แค่ 5 รูป)</label>
                                                                                    <button id="clone-add" class="btn  btn-outline-success"><span class="btn-flat fas fa-plus"></span> เพิ่ม</button>
                                                                                </div>


                                                                                <!-- <button type="button"  style="text-align: right;" class="btn  btn-outline-danger"><span class="btn-flat fas fa-minus"></span> ลบ</button> -->

                                                                            </div>
                                                                            <br>
                                                                            <div class="clone">
                                                                                <div class="input-group ">
                                                                                    <input type="file" class="form-control ">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <br>

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
                                                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> บันทึกรายงาน</button>
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                                                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- //popup -->

                                    </div>
                                    <!-- END timeline item -->
                                    <div style="text-align: center;">
                                        <h1>งานสำเร็จเมื่อครบ 100 %</h1>
                                    </div>

                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                    </div>
                </div>
                <!-- /.timeline -->

            </div>
        </div>


        <script>
            // add input photo
            $(document).ready(function() {
                var max_fields = 5; //maximum input boxes allowed
                var wrapper = $(".clone"); //Fields wrapper
                var add_button = $("#clone-add"); //Add button ID

                var x = 1; //initlal text box count
                $(add_button).click(function(e) { //on add input button click
                    e.preventDefault();
                    if (x < max_fields) { //max input box allowed
                        x++; //text box increment
                        $(wrapper).append('<div class="input-group"><input type="file" class="form-control"/><a href="#" class="remove_field"><i class="fas fa-times"></i></a></div>'); //add input box

                    }
                });

                $(wrapper).on("click", ".remove_field", function(e) { //user click on remove text
                    e.preventDefault();
                    $(this).parent('div').remove();
                    x--;
                })
            });

            function display(s) {
                if (s.value == "file") {
                    document.getElementById('show1').style.display = "block";
                } else {
                    document.getElementById('show1').style.display = "none";
                }
                if (s.value == "photo") {
                    document.getElementById('show2').style.display = "block";
                } else {
                    document.getElementById('show2').style.display = "none";
                }

            }
        </script>

        <script>
            $(document).ready(function() {
                var buttonAdd = $("#add-button");
                var buttonRemove = $("#remove-button");
                var className = ".card-primary";
                var count = 0;
                var field = "";
                var maxFields = 50;

                function totalFields() {
                    return $(className).length;
                }

                function addNewField() {
                    count = totalFields() + 1;
                    field = $("#dynamic-field-1").clone();
                    field.attr("id", "dynamic-field-" + count);
                    field.children("label").text("Field " + count);
                    field.find("input").val("");
                    $(className + ":last").after($(field));
                }

                function removeLastField() {
                    if (totalFields() > 1) {
                        $(className + ":last").remove();
                    }
                }

                function enableButtonRemove() {
                    if (totalFields() === 2) {
                        buttonRemove.removeAttr("disabled");
                        buttonRemove.addClass("shadow-sm");
                    }
                }

                function disableButtonRemove() {
                    if (totalFields() === 1) {
                        buttonRemove.attr("disabled", "disabled");
                        buttonRemove.removeClass("shadow-sm");
                    }
                }

                function disableButtonAdd() {
                    if (totalFields() === maxFields) {
                        buttonAdd.attr("disabled", "disabled");
                        buttonAdd.removeClass("shadow-sm");
                    }
                }

                function enableButtonAdd() {
                    if (totalFields() === (maxFields - 1)) {
                        buttonAdd.removeAttr("disabled");
                        buttonAdd.addClass("shadow-sm");
                    }
                }

                buttonAdd.click(function() {
                    addNewField();
                    enableButtonRemove();
                    disableButtonAdd();
                });

                buttonRemove.click(function() {
                    removeLastField();
                    disableButtonRemove();
                    enableButtonAdd();
                });
            });
        </script>

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


            //Datemask dd/mm/yyyy
            $('#datemask').inputmask('dd/mm/yyyy', {
                'placeholder': 'dd/mm/yyyy'
            });
            //Datemask2 mm/dd/yyyy
            $('#datemask2').inputmask('mm/dd/yyyy', {
                'placeholder': 'mm/dd/yyyy'
            });
            //Money Euro
            $('[data-mask]').inputmask()

            //Date picker
            $('#reservationdate').datetimepicker({
                format: 'L'
            });

            //Date and time picker
            $('#reservationdatetime').datetimepicker({
                icons: {
                    time: 'far fa-clock'
                }
            });

            //Date range picker
            $('#reservation').daterangepicker()
            //Date range picker with time picker
            $('#reservationtime').daterangepicker({
                timePicker: true,
                timePickerIncrement: 30,
                locale: {
                    format: 'MM/DD/YYYY hh:mm A'
                }
            });
            //Date range as a button

            //Timepicker
            $('#timepicker').datetimepicker({
                format: 'LT'
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