<?php session_start(); ?> 
<?php include("../include/head.php"); ?>
<?php include("../service/check_login_page.php"); ?>
<?php
require_once("../service/condb.php");

?>

<head>
    <style>
        .contain {
            padding: 25px;
        }

        .card-title {
            font-size: 25px;
        }

        a {
            color: white;
            text-decoration: none;
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

        <?php include("nav.php"); ?>

        <?php include("../include/sidebar_emp.php"); ?>


        <div class="content-wrapper" style="min-height: 608px;">
            <div class="contain">
                <div class="card">
                    <div class="card-header ">
                        <div>
                            <h3 class="card-title">รายงานผลการปฎิบัติงาน</h3>
                        </div>
                        <div style="text-align: right;">
                        <a class="t_add" href="form_report.php" style="color: white;"><button class="btn b_add text-right "><span class="fas fa-plus-circle"></span> เพิ่มรายงาน</button></a>
                        </div>
                    </div>


                    <!-- /.card-header -->
                    <div class="card-body">

                        <table id="example1" class="table table-bordered table-striped">

                            <thead>
                                <tr>
                                    <th>ลำดับ</th>
                                    <th>วันที่ส่ง</th>
                                    <th>หัวข้อ</th>
                                    <th>ดู</th>
                                    <!-- <th>ลบ</th> -->
                                </tr>
                            </thead>

                            <tbody>
                                <?php

                                // $result = $conn->prepare("SELECT * FROM department");
                                // $result->execute(); //
                                // $row = $result->fetch(PDO::FETCH_BOTH);
                                // ! กำหนดค่า session
                                // $department = 'หัวหน้าคณบดี';
                                // $_SESSION["member_id"] = 1;
                                // $member_id = 3;

                                // $department = 'รองคณบดีฝ่ายบริหาร';
                                // $_SESSION["member_id"] = 2;

                                $result = "SELECT * FROM send_report 
                                -- inner JOIN member
                                -- on member.member_id = send_report.member_send_id
                                -- inner join department
                                -- on department.department_id = member.department_id
                                WHERE member_send_id = ".$_SESSION["member_id"]."
                                ORDER BY send_report_id DESC";
                                $query = mysqli_query($condb, $result);

                                $rows = mysqli_fetch_all($query, MYSQLI_ASSOC);
                                // echo "<pre>";
                                // print_R($rows);
                                // echo "</pre>";


                                $count = 1;
                                foreach ($rows as $value) {

                                ?>
                                    <tr>
                                        <td><?php echo $count++ ?></td>
                                        <td><?php echo $value['date'] ?></td>

                                        <?php
                                        $report_id = $value['report_id'];
                                        $report_id = explode(",", $report_id);
                                        $header = [];
                                        foreach ($report_id as $value2) {
                                            $result2 = "SELECT header FROM report WHERE report_id = $value2";
                                            // echo $result2;
                                            $query2 = mysqli_query($condb, $result2);
                                            $rows2 = mysqli_fetch_all($query2, MYSQLI_ASSOC);
                                            // echo "<pre>";
                                            // print_R($rows2);
                                            // echo "</pre>";
                                            foreach ($rows2 as $value3) {
                                                // echo $value2['header'];
                                                array_push($header, $value3['header']);
                                            }
                                        }
                                        // print_r($header); 
                                        $header2 = implode(",", $header);
                                        // echo $header2;            
                                        // exit();
                                        ?>


                                        <td><?php echo $header2 ?></td>
                                        <!-- <td align="center"><button class="btn btn-warning"><a href="view_report.php?report_id=<?php echo $value['report_id'] ?>&department_receive=<?php echo $value['department_receive'] ?>"><i class="fas fa-eye"></i></a></button></td> -->
                        <td align="center"><a href="view_report.php?report_id=<?php echo $value['report_id'] ?>&department_receive=<?php echo $value['department_receive'] ?>"><button class="btn btn-warning"><i class="fas fa-eye"></i></button></a></td>
                                        
                                        <!-- <td><a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a></td> -->


                                    </tr>
                                <?php } ?>
                            </tbody>

                            <tfoot>
                                <tr>
                                    <th>ลำดับ</th>
                                    <th>วันที่ส่ง</th>
                                    <th>หัวข้อ</th>
                                    <th>ดู</th>
                                    <!-- <th>ลบ</th> -->
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
    <?php include("../include/footer.php"); ?>
    

    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": true,
                "autoWidth": true,
                "paging": true,
                "ordering": true,
                "info": false,
                "autoWidth": false,
                "buttons": ["copy", "excel", "print"]
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