<?php include("../include/head.php"); ?>


<head>
    <!-- เลือก js form_add เเละ delete   -->
    <link rel="stylesheet" href="../../assets/js/add_form.js">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- daterange picker -->
    <link rel="stylesheet" href="../../assets/bootstrap/plugins/daterangepicker/daterangepicker.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="../../assets/bootstrap/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="../../assets/bootstrap/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="../../assets/bootstrap/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="../../assets/bootstrap/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="../../assets/bootstrap/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="../../assets/bootstrap/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
    <!-- BS Stepper -->
    <link rel="stylesheet" href="../../assets/bootstrap/plugins/bs-stepper/css/bs-stepper.min.css">
    <!-- dropzonejs -->
    <link rel="stylesheet" href="../../assets/bootstrap/plugins/dropzone/min/dropzone.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../assets/bootstrap/template/dist/css/adminlte.min.css">
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

        .cloneContainer,
        .upload {
            border: 2px solid #D1CFCF;
            padding: 20px;
            outline: none;
            border-radius: 30px;
        }

        .add-right {
            text-align: right;
            padding: 10px;

        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <?php include("../include/header.php"); ?>
        <?php include("../include/sidebar_staff.php"); ?>


        <div class="content-wrapper" style="min-height: 608px;">
            <!--  -->
            <div class="contain ">
                <div class=" card-default">
                    <div class="card card-primary " data-duplicate="Exclusions" id="dynamic-field-1">
                        <!-- <div class="dynamic-field" > -->
                        <div class="card-header">
                            <?php $c = 1; ?>
                            <h3 class="card-title">แบบฟอร์มการปฎิบัติงาน <?php echo $c++; ?> </h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <!-- <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button> -->
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="" method="post">
                                <div>
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label">ชื่อหัวข้อรายงาน :</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="" placeholder="">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label">รายละเอียดการปฎิบัติงาน:</label>
                                            <div class="col-sm-10">
                                                <!-- note -->
                                                <textarea id="summernote" style="display: none;">รายละเอียดงาน</textarea>

                                            </div>
                                            <!-- note -->
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">สถานที่ปฎิบัติงาน :</label>
                                            <div class="col-sm-4">
                                                <select class="select2" style="width: 100%;">
                                                    <option value="สำนักงาน">สำนักงาน</option>
                                                    <option value="บ้าน">นอกสถานที่</option>
                                                </select>
                                            </div>

                                            <label class="col-sm-2 col-form-label">ความสำเร็จงาน :</label>
                                            <div class="col-sm-4" style="">
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
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">วันที่และเวลาทำงาน:</label>
                                            <div class="input-group col-sm-10">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="far fa-clock"></i></span>
                                                </div>
                                                <input type="text" class="form-control float-right" id="reservationtime">
                                            </div>
                                        </div>
                                        <!-- เเบบที่2 เลือกวัน เเละ เวลาแยกกัน -->
                                        <!-- <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">วันที่ทำงาน :</label>
                                            <div class="input-group date col-sm-4" id="reservationdate" data-target-input="nearest">
                                                <input type="text" class="form-control " data-target="#reservationdate">
                                                <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                </div>

                                                <input type="text" class="form-control " data-target="#reservationdate">
                                                <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                </div>
                                            </div>

                                            <label class="col-sm-2 col-form-label">เวลา :</label>
                                            <div class="input-group date col-sm-4" id="timepicker" data-target-input="nearest">
                                                <input type="text" class="form-control datetimepicker-input" data-target="#timepicker" />
                                                <div class="input-group-append" data-target="#timepicker" data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="far fa-clock"></i></div>
                                                </div>


                                                <input type="text" class="form-control datetimepicker-input" data-target="#timepicker" />
                                                <div class="input-group-append" data-target="#timepicker" data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="far fa-clock"></i></div>
                                                </div>
                                            </div>
                                        </div> -->

                                        <!-- <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">เลือกผู้ส่ง :</label>
                                            <div class="col-sm-10">
                                                <select class="select2" multiple="multiple" style="width: 100%;">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                </select>
                                            </div>
                                        </div> -->


                                        <!-- แบบที่ 1  -->
                                        <!-- <div class="form-group">
                                            <label class="col-sm-2 col-form-label">อัปโหลดไฟล์ (ใส่รูปการทำงานเป็นไฟล์ .pdf)</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name="s_photo" class="custom-file-input" accept="image/*">
                                                    <label class="custom-file-label">Choose file</label>
                                                </div>
                                            </div>
                                        </div> -->
                                        <!-- แบบที่ 2 -->
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">แนบหลักฐาน :</label>
                                            <div class="col-sm-10">
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
                                                    <div class="col-11">
                                                        <label for="">อัปโหลดรูปภาพ (นามสกุลรูป .PNG หรือ.JPG และ จำกัดได้แค่ 5 รูป)</label>
                                                    </div>
                                                    <div class="col-right">
                                                        <button type="button" id="clone-add" style="text-align: right;" class="btn  btn-outline-success"><span class="btn-flat fas fa-plus"></span> เพิ่ม</button>
                                                        <!-- <button type="button"  style="text-align: right;" class="btn  btn-outline-danger"><span class="btn-flat fas fa-minus"></span> ลบ</button> -->
                                                    </div>
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
                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label">ปัญหาที่พบ :</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" name="" id="" cols="30" rows="10" placeholder=""></textarea>
                                            </div>
                                        </div>
                                    </div>




                            </form>
                        </div>
                    </div>
                    <!-- /card body -->
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> อัพเดตรายงาน</button>          
                </div>
            </div>
        </div>
    </div>



    <!-- AdminLTE for demo purposes -->
    <script src="../../assets/bootstrap/template/dist/js/demo.js"></script>


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
                    $(wrapper).append('<br><div class="input-group"><input type="file" class="form-control"/><a href="#" class="remove_field"><i class="fas fa-times"></i></a></div>'); //add input box

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