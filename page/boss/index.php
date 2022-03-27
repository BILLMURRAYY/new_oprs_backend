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

        table {
            text-align: center;
        }
    </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <?php include("../include/header.php"); ?>

        <?php include("../include/sidebar_boss.php"); ?>

        <div class="content-wrapper" style="min-height: 608px;">
            <div class="contain">
            <div class="card">
                    <div class="card-header ">
                        <div>
                            <h3 class="card-title">ข้อมูลผลรายการปฎิบัติงานจากพนักงาน</h3>
                        </div>
                        <!-- <div style="text-align: right;">
                            <button type="button" class="btn btn-success text-right "><a href="form_add_member.php"><span class="fas fa-plus-circle"></span> เพิ่มสมาชิก</a></button>
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
                                    <th>ชื่อ-นามสกุล</th>
                                    <th>แผนก</th>
                                    <th>หัวข้อ</th>
                                    <th>วันที่ส่ง</th>
                                    <!-- <th>สิทธิ์การเข้าถึง</th>
                                    <th>เบอร์โทร</th> -->
                                    <th>แก้ไข</th>
                                    <th>ลบ</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>เจษฎา นันติ</td>
                                    <td>กลุ่มสาระการเรียนรู้เเเเเเเเเเเเเเเเเเเเเเเเเเเเเเเเเเเเเเเเเเเ</td>
                                    <td>รายงานเล่มที่เเเเเเเเเเเเเเเเเเเเเเเเเเเเเเเเเเเเเเเ </td>
                                    <td>12/04/2565</td>
                                    <!-- <td>แอดมิน</td>
                                    <td>0817016548</td> -->
                                    <td> <a href="#" class="btn btn-info"><i class="far fa-edit"></i></a></td>
                                    <td><a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>รูป</td>
                                    <td>อรุณสวัสดิ์</td>
                                    <td>สงข์สรินเเเเเเเเเเเเเเเเเเเเเเเเเเเเ</td>
                                    <td>ไอที</td>
                                    <!-- <td>แอดมิน</td>
                                    <td>0817016548</td> -->
                                    <td> <a href="#" class="btn btn-info"><i class="far fa-edit"></i></a></td>
                                    <td><a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a></td>
                                </tr>
                            </tbody>

                            <tfoot>
                                <tr>
                                    <th>ลำดับ</th>
                                    <th>ชื่อ-นามสกุล</th>
                                    <th>แผนก</th>
                                    <th>หัวข้อ</th>
                                    <th>วันที่ส่ง</th>
                                    <!-- <th>สิทธิ์การเข้าถึง</th>
                                    <th>เบอร์โทร</th> -->
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
</body>