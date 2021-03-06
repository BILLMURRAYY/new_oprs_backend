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
        }

        .card-header {
            background: #004385;
            color: white;
        }

        /* table {
            text-align: center;
        } */
        .table td,
        .table {
            padding: 10px;
            border: 1px solid #828487;
        }

        .head1 td {
            background: #17a2b8;
            color: white;
            border: none;

        }

        .card-header {
            background: #004385;
        }

        tbody {
            text-align: center;
        }

        tfoot {
            background: #EEE600;
            text-align: center;
        }

        h3 {
            color: white;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <?php include("nav.php"); ?>

        <?php include("../include/sidebar_staff.php"); ?>

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
                    $estimate_id = $_GET['estimate_id'];
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

                    // $k = [4,5,3];
                    // $m = [1,2,2];
                    // $u = [3,3,1];
                    // $t = [4,4,4];
                    // $n = [2,3,2];
                    // $b = [4,4,3];
                    // $total = $k+$m+$u+$t+$n+$b;
                    // $total = array_merge($k,$m,$u,$t,$n,$b);
                    // print_r($total);

                    foreach ($rows as $values) {
                        $k = explode(",", $values['K']);
                        $m = explode(",", $values['M']);
                        $u = explode(",", $values['U']);
                        $t = explode(",", $values['T']);
                        $n = explode(",", $values['N']);
                        $b = explode(",", $values['B']);
                        $total = array_merge($k, $m, $u, $t, $n, $b);
                        // echo $total;
                        // $totals = number_format($total[0], 2, '.', '');

                        // $number = 1234.5678;

                        // echo number_format($number, 2, '.', '');
                        // print_r(array_sum($total));

                    ?>
                        <div class="card-body">
                            <div class="callout callout-info">

                                <h5>ชื่อพนักงาน : <?php echo $member_send_name ?></h5>


                                <!-- <div class="post clearfix">

                                    <div class="col">
                                        <h4>K : <?php echo $values['K']; ?></h4>
                                        <h4>M : <?php echo $values['M']; ?></h4>
                                        <h4>U : <?php echo $values['U']; ?></h4>
                                        <h4>T : <?php echo $values['T']; ?></h4>
                                        <h4>N : <?php echo $values['N']; ?></h4>
                                        <h4>B : <?php echo $values['B']; ?></h4>
                                        <?php echo $values['detail']; ?>
                                    </div>
                                    <div class="form-control">

                                        <p>รายละเอียดเพิ่มเติม: </p>

                                    </div>
                                </div> -->
                                <table class="table table-bordered table-hover table-fixed">
                                    <div class="custom-control custom-checkbox">
                                        <thead class="head_es">
                                            <tr>
                                                <th>รายการ</th>
                                                <th>คะเเนน</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="head1 ">
                                                <td> ความใฝ่รู้ K (ประยุกต์ใช้ความรู้ได้ตามสถานการณ์)</td>
                                                <td></td>
                                            </tr>

                                            <tr>
                                                <td>สามารถให้ข้อเสนอแนะเพื่อปรับปรุงวิธีการปฎิบัติงานใน
                                                    สายงานที่เ้กี้ยวข้องกับตนเอง โดยใช้ความรู้ใหม่ๆ</td>
                                                <td><?php echo $k[0] ?></td>


                                            </tr>

                                            <tr>
                                                <td>ลงมือปรับปรุงวิธีการปฎิบัติงานโดยประยุกต์ใช้ความรู้ใหม่ๆ
                                                    ที่ได้จากประสบการณ์และแหล่งความรู้อื่นๆจนเกิดความ
                                                    คืบหน้าอย่างเห็นได้ชัด</td>
                                                <td><?php echo $k[1] ?></td>

                                            </tr>

                                            <tr>
                                                <td>สามารถเปลี่ยนวิธีการปฎิบัติงานโดยอธิบายได้ถึงเหตุผลความ
                                                    จำเป็นที่อิงอยู่กับข้อความรู้และประสบการณ์เมื่อเกิดปัญหา
                                                    หรือสถานการณ์ความเปลี่ยนแปลง</td>

                                                <td><?php echo $k[2] ?></td>
                                            </tr>

                                            <tr class="head1">
                                                <td>คุณธรรมและความซื่อสัตย์ M (เป็นแบบอย่างของความซื่อสัตย์และอุทิศตนเพื่อผดุงความยุติธรรม)</td>
                                                <td></td>
                                            </tr>

                                            <tr>
                                                <td>นำเสนอหลักการทำงานด้วยความโปร่งใสในการดำเนินงานร่วม
                                                    กับหน่วยงานภายนอก</td>
                                                <td><?php echo $m[0] ?></td>
                                            </tr>

                                            <tr>
                                                <td>คิดหาวิธีการสนับสนุนและจูงใจให้บุคคลในองค์กรยึดมั่นและ
                                                    ปฎิบัติตนอย่างซื่อสัตย์สุจริต</td>
                                                <td><?php echo $m[1] ?></td>
                                            </tr>

                                            <tr>
                                                <td>ธำรงความถูกต้อง ยืนหยัดพิทักษ์ผลประโยชน์และชื่อเสียงของ
                                                    มหาวิทยาลัยแม้ในสถานการณ์ที่อาจะเสี่ยงต่อความมั่นคงใน
                                                    ตำแหน่งหน้าที่การงานของตนเองหรืออาจเสี่ยงต่อชีm</td>
                                                <td><?php echo $m[2] ?></td>
                                            </tr>

                                            <tr class="head1">
                                                <td>ความมุ่งมั่นให้เกิดผลสำเร็จของงาน U
                                                    ( สามารถทำงานได้ผลงานที่มีประสิทธิภาพมากยิ่งขึ้น )</td>
                                                <td></td>
                                            </tr>

                                            <tr>
                                                <td>มีความละเอียดรอบคอบเอาใจใส่ ตรวจตราความถูกต้องของ
                                                    งานเพื่อให้ได้งานที่มีคุณภาพ</td>
                                                <td><?php echo $u[0] ?></td>
                                            </tr>

                                            <tr>
                                                <td>ปรับปรุงวิธีการทำงานได้ดีขึ้น เร็วขึ้น มีคุณภาพดีขึ้น
                                                    หรือมีประสิทธิภาพมากขึ้น</td>
                                                <td><?php echo $u[1] ?></td>
                                            </tr>

                                            <tr>
                                                <td>เสนอหรือทดลองวิธีการทำงานแบบใหม่ที่มีประสิทธิภาพ
                                                    มากกว่าเดิมเพื่อให้ได้ผลงานตามที่กำหนดไว้</td>
                                                <td><?php echo $u[2] ?></td>
                                            </tr>

                                            <tr class="head1">
                                                <td>การทำงานเป็นทีม T ( สามารถเข้าร่วมกำหนดเป้าหมาย
                                                    ประสานงาน แก้ไขปัญหาและอุปสรรค )</td>
                                                <td></td>
                                            </tr>

                                            <tr>
                                                <td>เข้าร่วมกำหนดวัตถุประสงค์ เป้าหมาย และวางแผนการดำเนิน
                                                    งานของทีม / หน่วยงาน</td>
                                                <td><?php echo $t[0] ?></td>

                                            <tr>
                                                <td>ไกล่เกลี่ยแก้ไขปัญหาหรือข้อพิพากระหว่างสมาชิก</td>
                                                <td><?php echo $t[1] ?></td>
                                            </tr>

                                            <tr>
                                                <td>ประสานงานแก้ไขปัญหาและอุปสรรคในการทำงาน</td>
                                                <td><?php echo $t[2] ?></td>
                                            </tr>

                                            <tr class="head1">
                                                <td>จิตสำนึกองค์กร N ( สำนึกต่อความเป็นเจ้าของพอสมควร )</td>
                                                <td></td>
                                            </tr>

                                            <tr>
                                                <td>การรับอาสาทำการกิจกรรมเพื่อส่วนรวม</td>
                                                <td><?php echo $n[0] ?></td>
                                            </tr>

                                            <tr>
                                                <td>รายงานปัญหาต่อผู้บังคับบัญชาทราบและพร้อมจะรับผิดชอบที่
                                                    จะแก้ไขร่วมกับผู้อื่น</td>
                                                <td><?php echo $n[1] ?></td>
                                            </tr>

                                            <tr>
                                                <td>สอนแนะผู้ใต้บังคับบัญชาถึงโครงสร้างหน่วยงาน การดำเนินงาน
                                                    ตามภารกิจกฎระเบียบ และ กระบวนการทำงานในปัจจุบัน</td>
                                                <td><?php echo $n[2] ?></td>
                                            </tr>

                                            <tr class="head1">
                                                <td>การพัฒนางานอย่างต่อเนื่อง B ( หาแนวทางใหม่ เพื่อปรับปรุงให้
                                                    ดีกว่าเดิม )</td>
                                                <td></td>
                                            </tr>

                                            <tr>
                                                <td>เสนอแนะวิธีการแก้ปัญหาหรือปรับปรุงงานที่ดีกว่าเดิม ซึ่งวิธีการ
                                                    ดังกล่าวยังไม่เคยใช่ในหน่วยงานมาก่อน ด้วยความคิด"นอกกรอบ"
                                                    หรือคิดแตกต่างจากที่เคยทำ</td>
                                                <td><?php echo $b[0] ?></td>
                                            </tr>

                                            <tr>
                                                <td>ประยุกต์แนวคิด ทฤษฎี หรือองค์ความรู้ใหม่ๆ ที่เกี่ยวข้องมาให้ใน
                                                    การพัฒนาหรือปรับปรุงกระบวนการทำงานของตนหรือหน่วยงาน
                                                    ของตนให้มีประสิทธิภาพมากขึ้น</td>
                                                <td><?php echo $b[1] ?></td>
                                            </tr>

                                            <tr>
                                                <td>จัดทำแผนปฎิบัติการ ( Action plan ) ในการปฎิบัติงาน</td>
                                                <td><?php echo $b[2] ?></td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td>คะเเนนรวม</td>
                                                <td><?php echo array_sum($total) ?></td>
                                            </tr>
                                            <tr>
                                                <td>คะเเนนเฉลี่ย</td>

                                                <td><?php echo number_format(array_sum($total) * 100 / 90, 2, '.', '') ?>%</td>
                                            </tr>
                                        </tfoot>
                                    </div>
                                </table>
                                </br>
                                <div style="margin: 15px;">
                                    <label for="">ข้อเสนอแนะ</label></br>
                                    <?php  echo $values['detail'] ?>
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
    <?php include("../include/footer.php"); ?>

</body>