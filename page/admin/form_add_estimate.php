<?php include("../include/head.php"); ?>
<style>
    .contain {
        padding: 25px;
    }



    input {
        margin-left: 20px;
    }

    input[type=checkbox] {
        width: 20px;
        margin-right: 15px;
    }

    .component {
        margin-top: 20px;
        margin-left: 40px;
    }

    .all-topic {
        border-radius: 15px;
        border: #E0E0E0 solid 2px;
    }

    table th,
    td {
        border: #E0E0E0 solid 2px;
    }

    .btn_add_topic {}
</style>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <?php include("../include/header.php"); ?>
        <?php include("../include/sidebar_admin.php"); ?>

        <div class="content-wrapper" style="min-height: 608px;">
            <div class="contain">
                <h1>สร้างแบบประเมิน</h1>
                <div class="card card-default" data-duplicate="Exclusions">
                    <div class="card-header">
                        <div style="display: inline-flex; padding:10px; ">
                            <input type="checkbox" class="form-control" name="" id="">
                            <h4 class="">แบบประเมินชุดที่ 1</h4>
                        </div>


                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <!-- <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button> -->
                        </div>
                    </div>
                    <!-- card-boy -->
                    <div class="card-body" id="form_input">

                        <form action="" method="post">
                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label">ชื่อหัวข้อแบบประเมิน :</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="" placeholder="">
                                </div>
                            </div>
                            <div class="form-group">

                                <table class="table table-border">
                                    <thead>
                                        <tr>
                                            <th>คะแนน/Rating</th>
                                            <th>คำอธิบาย</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><input type="text" class="form-control col-11" id="" placeholder="text"></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td><input type="text" class="form-control col-11" id="" placeholder="text"></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td><input type="text" class="form-control col-11" id="" placeholder="text"></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td><input type="text" class="form-control col-11" id="" placeholder="text"></td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td><input type="text" class="form-control col-11" id="" placeholder="text"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /////แบบที่ 1 -->
                            <div class="all-topic">
                                <div class="form-group">
                                    <div class="col-lg-11">
                                        <span class="fas fa-circle"></span>
                                        <label for="exampleInputRounded0">หัวข้อ/Topics</label>
                                        <div class="col-sm-12">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control" id="" placeholder="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="component">
                                    <label for="exampleInputRounded0">หมายเหตุ</label>
                                    <div class="row">
                                        <div class="col-sm-11">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control">
                                                <span class="input-group-append">
                                                    <button type="button" class="btn btn-info btn-flat">เพิ่ม</button>
                                                </span>
                                            </div>
                                        </div>
                                        <!-- /.col-lg-6 -->
                                    </div>
                                    <br><br>
                                </div>

                                <!-- <input type="button" id="click_add" onclick="add_input();" value="เพิ่มหัวข้อประเมิน" /> -->

                            </div>

                            <br><br>

                            <!-- //////แบบที่ 2 -->
                            <div class="all-topic">
                                <div class="form-group">
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label for="topic" class="col-sm-2 col-form-label">หัวข้อ/Topics</label>
                                            <div class="col-sm-10">
                                                <div class="input-group input-group-sm">
                                                    <input type="text" class="form-control" id="" placeholder="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-2 col-form-label">หมายเหตุ</label>
                                            <div class="col-sm-10">
                                                <div class="input-group input-group-sm" id="all_input">
                                                    <input type="text" class="form-control">
                                                    <span class="input-group-append">
                                                        <button type="button" id="btn_add" class="btn btn-info btn-flat" data-duplicate-add="Ex">เพิ่ม</button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="btn_add_topic" style="text-align: right;">
                                <button type="button" class="btn btn-outline-info" data-duplicate-add="Exclusions"><i class="fas fa-plus"></i> เพิ่มหัวข้อ</button>
                                <button type="button" class="btn btn-outline-danger" data-duplicate-remove="Exclusions"><i class="fas fa-remove"></i> ลบ</button>
                            </div>

                        </form>

                    </div>
                    <!-- /card-boy -->

                </div>
                <button type="button" class="btn btn-block bg-gradient-warning"> เลือกแบบประเมิน</button>


                <!-- test -->

                <div class="panel panel-primary" style="width: 420px; margin: 0 auto;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Bootstrap Dynamic DatePicker</h3>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-8">
                            <div class="form-group">
                                <input type="text" class="form-control datepicker" placeholder="Pick the date">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-primary add_field_button"><i class="fa fa-plus"></i> Add More</button>
                        </div>
                        <div class="input_fields_wrap">
                            <!-- Dynamic Fields go here -->
                        </div>
                    </div>
                </div>
                
                </script>
                <!--  -->
            </div>
            <!-- /.contain-->
        </div>
        <!-- /.wrapper -->
    </div>
    <!-- /.hold-transition -->


    <script>
        //Dynamic Datepicker Fields
        $('body').on('focus', ".datepicker", function() {
            $(this).datepicker();
        });

        $(document).ready(function() {
            var max_fields = 10; //maximum input boxes allowed
            var wrapper = $(".input_fields_wrap"); //Fields wrapper
            var add_button = $(".add_field_button"); //Add button ID

            var x = 1; //initlal text box count
            $(add_button).click(function(e) { //on add input button click
                e.preventDefault();
                if (x < max_fields) { //max input box allowed
                    x++; //text box increment
                    $(wrapper).append('<div class="input-line-control removeMe"><div class="col-md-8"><div class="form-group"><input type="text" class="form-control datepicker" placeholder="Pick the date"></div></div><div class="col-md-4"><button class="btn btn-danger remove-date"><i class="fa fa-remove"></i>Remove</button></div></div>'); //add input box
                }
            });

            $(wrapper).on("click", ".remove-date", function(e) { //user click on remove text
                e.preventDefault();
                $(this).closest('div.removeMe').remove();
                x--;
            })
        });
        $(document).ready(function() {
            var max_fields = 10;
            var wrapper = $(".container1");
            var add_button = $(".add_form_field");

            var x = 1;
            $(add_button).click(function(e) {
                e.preventDefault();
                if (x < max_fields) {
                    x++;
                    $(wrapper).append('<div><input type="text" name="mytext[]"/><a href="#" class="delete">Delete</a></div>'); //add input box
                } else {
                    alert('You Reached the limits')
                }
            });

            $(wrapper).on("click", ".delete", function(e) {
                e.preventDefault();
                $(this).parent('div').remove();
                x--;
            })
        });
    </script>
    <script src="../../assets/js/add_form.js"></script>

</body>