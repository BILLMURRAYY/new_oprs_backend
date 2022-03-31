<?php include("../include/head.php"); ?>

<head>
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
    <!-- <link rel="stylesheet" href="../../assets/bootstrap/template/plugins/select2/css/select2.min.css"> -->
    <link rel="stylesheet" href="../../assets/bootstrap/css/select2.css">
    <!-- add multiple -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" /> -->


    <style>
        .contain {
            padding: 25px;
        }

        .card-title {
            font-size: 30px;
        }

        a {
            color: white;
        }

        table {
            text-align: center;
        }

        .dynamic-field {
            position: relative;
            background: #dfefff;
            box-shadow: 0px 0px 0px 5px #dfefff;
            border: dashed 2px #fff;
            padding: 0.2em 0.5em;
            color: #454545;
        }

        .dynamic-field:after {
            position: absolute;
            content: '';
            left: -7px;
            top: -7px;
            border-width: 0 0 15px 15px;
            border-style: solid;
            border-color: #fff #fff #a8d4ff;
            box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.15);
        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">

    <div class="wrapper">

        <?php include("../include/header.php"); ?>

        <?php include("../include/sidebar_admin.php"); ?>

        <div class="content-wrapper" style="min-height: 608px;">
            <div class="contain">
                <div class="card">
                    <div class="card-header ">
                        <div>
                            <h3 class="card-title">จัดการส่งรายงานผล</h3>
                        </div>
                        <div style="text-align: right;">
                            <!-- <button type="button" class="btn btn-success text-right "><a href="form_add_member.php"><span class="fas fa-plus-circle"></span> เพิ่มสมาชิก</a></button> -->
                        </div>
                    </div>


                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="card card-default">
                            <div class="card-header" style="">
                                <!-- <h3 class="card-title"></h3> -->

                                <div class="card-tools">
                                    <!-- <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button> -->
                                    <!-- <button type="button" class="btn btn-tool" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                    </button> -->
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                
                                    <form action="" method="post">
                                        <div class="dynamic-field" id="dynamic-field-1">
                                            <div class="form-group">
                                                <label>หน่วยงาน</label>
                                                <select class="form-control select2" style="width: 100%;" data-placeholder="เลือกรายการ" data-select2-id="9" tabindex="-1" aria-hidden="true">
                                                    <optgroup label="Condiments">
                                                        <option>Mustard</option>
                                                        <option>Ketchup</option>
                                                        <option>Relish</option>
                                                    </optgroup>
                                                    <optgroup label="Breads">
                                                        <option>Plain</option>
                                                        <option>Steamed</option>
                                                        <option>Toasted</option>
                                                    </optgroup>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label>ส่งรายงานถึง</label>
                                                <select class="form-control select2 " multiple="multiple" data-placeholder="เลือกรายการ" style="width:100%;" data-select2-id="9" tabindex="-1" aria-hidden="true">

                                                    <optgroup label="Condiments">
                                                        <option>Mustard</option>
                                                        <option>Ketchup</option>
                                                        <option>Relish</option>
                                                    </optgroup>
                                                    <optgroup label="Breads">
                                                        <option>Plain</option>
                                                        <option>Steamed</option>
                                                        <option>Toasted</option>
                                                    </optgroup>
                                                </select>
                                            </div>                                        
                                        </div>     
                                    </form>
                                <!--/. group -->
                            </div>
                            <!-- /.card-body -->
                            <div class="b" style="text-align: center;">
                                <input type="button" class="btn btn-info" value="บันทึก">
                                <input type="button" id="add-button" class="btn btn-info" id="clone-add" value="เพิ่ม">
                            </div>
                            <br>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>

    <!-- /.content-wrapper -->
    <footer class="main-footer">

    </footer>

    <!-- jQuery -->
    <script src="../../assets/bootstrap/template/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../assets/bootstrap/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Select2 -->
    <script src="../../assets/bootstrap/template/plugins/select2/js/select2.full.min.js"></script>
    <!-- Bootstrap4 Duallistbox -->
    <script src="../../assets/bootstrap/template/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js">
    </script>
    <!-- InputMask -->
    <script src="../../assets/bootstrap/template/plugins/moment/moment.min.js"></script>
    <script src="../../assets/bootstrap/template/plugins/inputmask/jquery.inputmask.min.js"></script>
    <!-- date-range-picker -->
    <script src="../../assets/bootstrap/template/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap color picker -->
    <script src="../../assets/bootstrap/template/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js">
    </script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="../../assets/bootstrap/template/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js">
    </script>
    <!-- Bootstrap Switch -->
    <script src="../../assets/bootstrap/template/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
    <!-- BS-Stepper -->
    <script src="../../assets/bootstrap/template/plugins/bs-stepper/js/bs-stepper.min.js"></script>
    <!-- dropzonejs -->
    <script src="../../assets/bootstrap/template/plugins/dropzone/min/dropzone.min.js"></script>

    <!-- add -->
    <script src="../../assets/js/btn_add.js"></script>

    <!-- add multiple select -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
     -->


    <script>
        // $('select').selectpicker();

        $(function() {
            $('.select2').select2()


            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })

        });


        $(document).ready(function() {
            var buttonAdd = $("#add-button");
            var buttonRemove = $("#remove-button");
            var className = ".dynamic-field";
            var count = 0;
            var field = "";
            var maxFields = 10;

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
</body>