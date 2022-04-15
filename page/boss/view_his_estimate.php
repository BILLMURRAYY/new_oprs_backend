<?php include("../include/head.php"); ?>
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
        }

        .card-header {
            background: #004385;
            color: white;
        }

        table {
            text-align: center;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <?php include("nav.php"); ?>

        <?php include("../include/sidebar_boss.php"); ?>

        <div class="content-wrapper" style="min-height: 608px;">
            <div class="contain">
                <div class="card">
                    <div class="card-header ">
                        <div>
                            <h3 class="card-title">ประวัติการประเมิน</h3>
                        </div>
                        <!-- <div style="text-align: right;">
                            <button type="button" class="btn btn-success text-right "><a href="form_report.php"><span class="fas fa-plus-circle"></span> เพิ่มรายงาน</a></button>
                        </div> -->
                    </div>

                    <!--  -->
                    <?php
                    $estimate_id = $_GET['feedback_id'];
                    $member_send_name = $_GET['member_send_name'];
                    $member_receive_id = $_GET['member_receive_id'];
                    // $member_send_id = $_GET['member_send_id'];
                    // echo "<pre>";
                    // print_R($_GET);
                    // echo "</pre>";
                    // exit();

                    ?>

                    <?php
                    // $report_id = explode(",", $report_id);
                    // echo "<per>";
                    // print_r ($id_report);
                    // echo "</per>";
                    // foreach ($report_id as $value) {
                    $result = "SELECT * FROM estimate WHERE estimate_id = $estimate_id";
                    $query = mysqli_query($condb, $result);
                    $rows = mysqli_fetch_all($query, MYSQLI_ASSOC);
                    // echo "<pre>";
                    // print_R($rows);
                    // echo "</pre>";

                    foreach ($rows as $values) {
                    ?>
                        <div class="card-body">
                            <div class="callout callout-info">

                                <h5>ชื่อพนักงาน :<?php echo $member_send_name ?></h5>


                                <div class="post clearfix">

                                    <div class="col">
                                        <h4>K : <?php echo $values['K']; ?></h4>
                                        <h4>M : <?php echo $values['M']; ?></h4>
                                        <h4>U : <?php echo $values['U']; ?></h4>
                                        <h4>T : <?php echo $values['T']; ?></h4>
                                        <h4>N : <?php echo $values['N']; ?></h4>
                                        <h4>B : <?php echo $values['B']; ?></h4>
                                        <!-- <?php echo $values['detail']; ?> -->
                                    </div>
                                    <div class="form-control">

                                        <p>รายละเอียดเพิ่มเติม: </p>

                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <?php } ?>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
        <!--  -->
    </div>
    </div>
    </div>
    </div>

    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": true,
                "autoWidth": true,
                "paging": false,
                "ordering": true,
                "info": false,
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