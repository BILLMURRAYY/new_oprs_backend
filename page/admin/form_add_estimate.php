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

    .card-header {
        background: #004385;
        color: white;
    }
</style>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <?php include("../include/header.php"); ?>
        <?php include("../include/sidebar_admin.php"); ?>

        <div class="content-wrapper" style="min-height: 608px;">
            <div class="contain">
                <!-- <h1>สร้างแบบประเมิน</h1> -->
                <div class="card card-default" data-duplicate="Exclusions">
                    <div class="card-header">
                        <div style="display: inline-flex; ">
                            <input type="checkbox" class="form-control" name="" id="">
                            <h4 class="">แบบประเมินชุดที่ 1</h4>
                        </div>


                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" style="color: white;" data-card-widget="collapse">
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


                        </form>

                    </div>
                    <!-- /card-boy -->

                </div>

                <div class="btn_add_topic" style="text-align: center;">
                    <button type="button" class="btn btn-outline-info"> เลือกแบบประเมิน</button>
                    <button type="button" class="btn btn-outline-info" data-duplicate-add="Exclusions"><i class="fas fa-plus"></i> เพิ่มหัวข้อ</button>
                    <button type="button" class="btn btn-outline-danger" data-duplicate-remove="Exclusions"><i class="fas fa-remove"></i> ลบ</button>
                </div>


                <!-- test -->



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
    </script>


</body>