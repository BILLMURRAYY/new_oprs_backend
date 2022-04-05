<?php include("../include/head.php"); ?>

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

        .card-header {
            background: #004385;
            color: white;
        }

        /* .b_add {
        background: #05B2DC;
        color: white;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        transition: 0.35s;
        z-index: 1;
        border-radius: 50px;
        box-shadow: 0 17px 26px -9px rgba();
        transition: all 0.3s ease;


    }

    .b_add:hover {
        background: #04DB97;
        color: white;
        background-color: rgba(0.2, 0.7);
        box-shadow: 0 13px 26px -9px rgba(0.2, 0.7);
        transform: translateY(3px);
    } */
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">

    <div class="wrapper">
        <?php include("../include/header.php"); ?>
        <?php include("../include/sidebar_admin.php"); ?>

        <div class="content-wrapper" style="min-height: 608px;">
            <div class="contain">
                <div class="card card-primary">
                    <div class="card-header" style="background: #004385;color: white;">
                        <h3 class="card-title">เพิ่มข้อมูลแผนก</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="" method="post">
                        <div class="card-body">

                            <div class="form-group">
                                <label for="exampleInputEmail1">ชื่อแผนก</label>
                                <input type="input" class="form-control" id="depart" placeholder=" " required>
                            </div>

                            <div class="form-group ">

                                <label class="col-sm-2 col-form-label">สิทธิ์การเข้าถึง</label>
                                <div class="col">
                                    <select class="select2 form-control" style="width: 100%;" required>
                                        <option value="admin">admin</option>
                                        <option value="boss">Boss</option>
                                        <option value="staff">staff</option>
                                        <option value="employee">Employee</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>ส่งข้อมูลรายงาน</label>
                                        <select class="form-control select2" multiple="multiple" data-placeholder="" style="width: 100%;">
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

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>ส่งข้อมูลประเมิน </label>
                                        <select class="form-control select2" id="all" data-select="false" multiple="multiple" style="width: 100%;">
                                            <optgroup label="Condiments">
                                                <option>เลือกทั้งหมด</option>
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
                            </div>
                        </div>

                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> บันทึกข้อมูล</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(function() {
            $('.select2').select2()
        });
    </script>

</body>