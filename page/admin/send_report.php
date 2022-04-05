<?php include("../include/head.php"); ?>

<head>
   
    <style>
        .contain {
            padding: 25px;
        }

        .card-title {
            font-size: 25px;
        }

        a ,a:hover {
            color: white;
        }

        table {
            text-align: center;
        }
        .card-header {
            background: #004385;
            color: white;
        }
        .b_add {
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
                            <h3 class="card-title">จัดการรายงานผล</h3>
                        </div>
                        <div style="text-align: right;">
                            <button type="button" class="btn b_add text-right "><a  href="form_add_depart.php"><span class="fas fa-plus-circle"></span> เพิ่มการจัดส่งรายงาน</a></button>

                            </a>
                        </div>
                    </div>
                    <div class="card-body  ">
                        <div class="card-tools">
                            <div class="input-group input-group">
                                <input type="text" class="form-control" placeholder="ค้นหาข้อมูล">
                                <div class="input-group-append">
                                    <div class="btn btn-primary">
                                        <i class="fas fa-search"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body">

                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ลำดับ</th>
                                    <th>แผนก</th>
                                    <th>ส่งถึง</th>
                                    <th>แก้ไข</th>
                                    <th>ลบ</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>ไอที</td>
                                    <td>คณบดี , หน่วยงานการเงิน ,</td>
                                    <td> <a href="#" class="btn btn-info"><i class="far fa-edit"></i></a></td>
                                    <td><a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>การเงิน</td>
                                    <td>คณบดี , สำนักงานวิจัย ,</td>
                                    <td> <a href="#" class="btn btn-info"><i class="far fa-edit"></i></a></td>
                                    <td><a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a></td>
                                </tr>
                            </tbody>

                            <tfoot>
                                <tr>
                                    <th>ลำดับ</th>
                                    <th>แผนก</th>
                                    <th>ส่งถึง</th>
                                    <th>แก้ไข</th>
                                    <th>ลบ</th>
                                </tr>
                            </tfoot>
                        </table>
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

    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": false,
                "autoWidth": false
            })
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
</body>