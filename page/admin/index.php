<?php include("../include/head.php"); ?>

<head>
    
  
    <style>
        .contain {
            padding: 25px;
        }

        .card-title {
            font-size: 25px;
        }

        a , a:hover{
            color: white;
        }
        table{
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
                            <h3 class="card-title">ข้อมูลสมาชิก</h3>
                        </div>
                        <div style="text-align: right;">
                            <button type="button" class="btn b_add text-right "><a href="form_add_member.php"><span class="fas fa-plus-circle"></span> เพิ่มสมาชิก</a></button>
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

    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": true,
                "autoWidth": true,
                "paging": false,
                "ordering": true,
                "info": false,
                "buttons": ["copy","excel",  "print"]
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