<?php include("../include/head.php"); ?>

<head>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../assets/bootstrap/template/plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../../assets/bootstrap/template/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../assets/bootstrap/template/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../../assets/bootstrap/template/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../assets/bootstrap/template/dist/css/adminlte.min.css">
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
        table{
            text-align: center;
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
                            <h3 class="card-title">ข้อมูลสมาชิก</h3>
                        </div>
                        <div style="text-align: right;">
                            <button type="button" class="btn btn-success text-right "><a href="form_add_member.php"><span class="fas fa-plus-circle"></span> เพิ่มสมาชิก</a></button>
                        </div>
                    </div>


                    <!-- /.card-header -->
                    <div class="card-body">

                        <table id="example1" class="table table-bordered table-striped">
                            <!-- <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div  id="example1" class="dt-buttons btn-group flex-wrap"> <button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>Copy</span></button> <button class="btn btn-secondary buttons-csv buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>CSV</span></button> <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>Excel</span></button> <button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>PDF</span></button> <button class="btn btn-secondary buttons-print" tabindex="0" aria-controls="example1" type="button"><span>Print</span></button> </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div id="example1" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1"></label></div>
                                </div>
                            </div> -->
                            <thead>
                                <tr>
                                    <th>ลำดับ</th>
                                    <th>รูปภาพ</th>
                                    <th>ชื่อ</th>
                                    <th>นามสกุล</th>
                                    <th>แผนก</th>
                                    <th>สิทธิ์การเข้าถึง</th>
                                    <!-- <th>เบอร์โทร</th> -->
                                    <th>แก้ไข</th>
                                    <th>ลบ</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>รูป</td>
                                    <td>อรุณสวัสดิ์</td>
                                    <td>สงข์สริน</td>
                                    <td>ไอที</td>
                                    <td>แอดมิน</td>
                                    <!-- <td>0817016548</td> -->
                                    <td> <a href="#" class="btn btn-info"><i class="far fa-edit"></i></a></td>
                                    <td><a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>รูป</td>
                                    <td>อรุณสวัสดิ์</td>
                                    <td>สงข์สริน</td>
                                    <td>ไอที</td>
                                    <td>แอดมิน</td>
                                    <!-- <td>0817016548</td> -->
                                    <td> <a href="#" class="btn btn-info"><i class="far fa-edit"></i></a></td>
                                    <td><a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a></td>
                                </tr>
                            </tbody>

                            <tfoot>
                                <tr>
                                    <th>ลำดับ</th>
                                    <th>รูปภาพ</th>
                                    <th>ชื่อ</th>
                                    <th>นามสกุล</th>
                                    <th>แผนก</th>
                                    <th>สิทธิ์การเข้าถึง</th>
                                    <!-- <th>เบอร์โทร</th> -->
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

    <!-- jQuery -->
    <script src="../../assets/bootstrap/template/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../assets/bootstrap/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="../../assets/bootstrap/template/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../assets/bootstrap/template/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../assets/bootstrap/template/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../assets/bootstrap/template/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="../../assets/bootstrap/template/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../../assets/bootstrap/template/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="../../assets/bootstrap/template/plugins/jszip/jszip.min.js"></script>
    <script src="../../assets/bootstrap/template/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="../../assets/bootstrap/template/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="../../assets/bootstrap/template/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="../../assets/bootstrap/template/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="../../assets/bootstrap/template/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- AdminLTE App -->
    <!-- <script src="../../assets/bootstrap/template/dist/js/adminlte.min.js"></script> -->
    <!-- AdminLTE for demo purposes -->
    <script src="../../assets/bootstrap/template/dist/js/demo.js"></script>
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": true,
                "autoWidth": true,
                "paging": false,
                "ordering": true,
                "info": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print"]
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
</body>