<?php include("../include/head.php"); ?>

<head>
    <style>
        .contain {
            padding: 25px;
        }

        .card-title {
            font-size: 30px;
        }

        a {
            color: black;
        }

        table {
            text-align: center;
        }
    </style>
</head>

        <h1>
                                                                ทำเผื่อไว


</h1>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <?php include("../include/header.php"); ?>

        <?php include("../include/sidebar_staff.php"); ?>


        <div class="content-wrapper" style="min-height: 608px;">
            <div class="contain">
                <div class="card">
                    <div class="card-header ">
                        <div>
                            <h3 class="card-title">ติดตามสถานะ</h3>
                        </div>
                        <!-- <div style="text-align: right;">
                            <button type="button" class="btn btn-success text-right "><a href="form_report.php"><span class="fas fa-plus-circle"></span> เพิ่มรายงาน</a></button>
                        </div> -->
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
                                    <th>วันที่ส่ง</th>
                                    <th>ชื่อ-นามสกุล</th>
                                    <th>หัวข้อ</th>
                                    <th>สถานะ</th>
                                    <th>ลบ</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>12/04/2565</td>
                                    <td>เจษฎา นันติ</td>
                                    <td>รายงานเล่มที่ 1 </td>
                                    <td><span class="badge bg-success">สำเร็จ</span></td>

                                    <!-- <td> <a href="#" class="btn btn-info"><i class="far fa-edit"></i></a></td> -->
                                    <td><a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>12/04/2565</td>
                                    <td>เจษฎา นันติ</td>
                                    <td>รายงานเล่มที่ 2 </td>
                                    <td><span class="badge bg-warning">ดำเนินการ</span></td>

                                    <!-- <td> <a href="#" class="btn btn-info"><i class="far fa-edit"></i></a></td> -->
                                    <td><a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a></td>
                                </tr>
                            </tbody>

                            <tfoot>
                                <tr>
                                    <th>ลำดับ</th>
                                    <th>วันที่ส่ง</th>
                                    <th>ชื่อ-นามสกุล</th>
                                    <th>หัวข้อ</th>
                                    <th>สถานะ</th>
                                    <th>ลบ</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>

    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": true,
                "searching": true,
                "paging": false,
                "info": false,

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