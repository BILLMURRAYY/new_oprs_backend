<?php

//1. เชื่อมต่อ database: 
require_once("../../condb.php"); //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
$id = $_POST['id'];
$department = $_POST['department']; //รับค่าไฟล์จากฟอร์ม	
$level = $_POST['level']; //รับค่าไฟล์จากฟอร์ม	
$flow_report = $_POST['flow_report']; //รับค่าไฟล์จากฟอร์ม	
$flow_estimate = $_POST['flow_estimate']; //รับค่าไฟล์จากฟอร์ม	
// $phone = $_POST['phone']; //รับค่าไฟล์จากฟอร์ม	
// $email = $_POST['email']; //รับค่าไฟล์จากฟอร์ม	
// $pass1 = $_POST['pass1']; //รับค่าไฟล์จากฟอร์ม	
// $pass2 = $_POST['pass2']; //รับค่าไฟล์จากฟอร์ม
// $fileupload = $_FILES['m_Img']; //รับค่าไฟล์จากฟอร์ม	
$flow_report = implode(",",$flow_report);
$flow_estimate = implode(",",$flow_estimate);
// echo $flow_report;
// echo $flow_estimate;
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
// exit();

$sql = "UPDATE department SET
    department_name ='$department',
    level = '$level',
    flow_report = '$flow_report',
    flow_estimate = '$flow_estimate'
    WHERE department_id = $id
    ";

$result = mysqli_query($condb, $sql) or die("Error in query: $sql ");

mysqli_close($condb);
// javascript แสดงการ upload file

if ($result) {
    echo "<script type='text/javascript'>";
    echo "alert('Update Succesfuly');";
    echo "window.location = 'send_report.php'; ";
    echo "</script>";
} else {
    echo "<script type='text/javascript'>";
    echo "alert('Error back to update again');";
    echo "</script>";
}
