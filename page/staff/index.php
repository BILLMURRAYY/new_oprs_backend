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
            color: white;
        }

        /* table {
            text-align: center;
        } */
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
                            <h3 class="card-title">ข้อมูลการปฎิบัติงานของพนักงาน</h3>
                        </div>
                        <div style="text-align: right;">
                            <button type="button" class="btn btn-success text-right "><a href="form_report.php"><span class="fas fa-plus-circle"></span> เพิ่มรายงาน</a></button>
                        </div>
                    </div>


                    <!-- /.card-header -->
                    <div class="card-body">

                        <table id="example2" class="table table-bordered table-striped">

                            <thead>
                                <tr>
                                    <th>ลำดับ</th>
                                    <th>ชื่อ-นามสกุล</th>
                                    <th>วันที่ส่ง</th>
                                    <th>แผนก</th>
                                    <th>หัวข้อ</th>
                                    <th>สถานะ</th>
                                    <th>ดู</th>
                                    <th>ลบ</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>เจษฎา นันติ</td>
                                    <td>12/04/2565</td>
                                    <td>กลุ่มสาระการเรียนรู้เเเเเเเ</td>
                                    <td>รายงานเล่มที่เเเเ </td>
                                    <td>สำเร็จ</td>
                                    <td> <a href="form_feedback.php" class="btn btn-info"><i class="fas fa-eye"></i></a></td>
                                    <td><a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>รูป</td>
                                    <td>อรุณสวัสดิ์</td>
                                    <td>สงข์สรินเเเเเเเเเเเเเเเเเเเเเเเเเเเเ</td>
                                    <td>ไอที</td>
                                    <td>อยู่ระหว่างดำเนินงาน</td>
                                    <td> <a href="form_feedback.php" class="btn btn-info"><i class="fas fa-eye"></i></a></td>
                                    <td><a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a></td>
                                </tr>
                            </tbody>

                            <tfoot>
                                <tr>
                                    <th>ลำดับ</th>
                                    <th>ชื่อ-นามสกุล</th>
                                    <th>วันที่ส่ง</th>
                                    <th>แผนก</th>
                                    <th>หัวข้อ</th>
                                    <th>สถานะ</th>
                                    <th>แก้ไข</th>
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
                // "ordering": true,
                // "info": true,
                "buttons": ["copy", "csv", "excel", "pdf", "print"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "responsive": true,
                "paging": false,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": false,
                "autoWidth": false,
                
            });
        });
    </script>
</body>