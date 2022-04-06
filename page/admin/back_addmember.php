<?php

//1. เชื่อมต่อ database: 
require_once("../../condb.php");  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
$depart = $_POST['id_depart']; //รับค่าไฟล์จากฟอร์ม	
$mr = $_POST['prefix']; //รับค่าไฟล์จากฟอร์ม	
$f_name = $_POST['f_name']; //รับค่าไฟล์จากฟอร์ม	
$l_name = $_POST['l_name']; //รับค่าไฟล์จากฟอร์ม	
$phone = $_POST['phone']; //รับค่าไฟล์จากฟอร์ม	
$email = $_POST['email']; //รับค่าไฟล์จากฟอร์ม	
$pass1 = $_POST['pass1']; //รับค่าไฟล์จากฟอร์ม	
$pass2 = $_POST['pass2']; //รับค่าไฟล์จากฟอร์ม
// $fileupload = $_FILES['m_Img']; //รับค่าไฟล์จากฟอร์ม	

 //รับค่าไฟล์จากฟอร์ม	


// print_r($_FILES);
//ฟังก์ชั่นวันที่
date_default_timezone_set('Asia/Bangkok');
$date = date("Ymd");
//ฟังก์ชั่นสุ่มตัวเลข
$numrand = (mt_rand());
//เพิ่มไฟล์
$upload = $_FILES['m_Img'];
// echo "($_FILES['m_Img'])";
if ($upload != '') {   //not select file
    //โฟลเดอร์ที่จะ upload file เข้าไป 
    $path = "../../assets/images/";

    //เอาชื่อไฟล์เก่าออกให้เหลือแต่นามสกุล
    $type = strrchr($_FILES['m_Img']['name'], ".");

    //ตั้งชื่อไฟล์ใหม่โดยเอาเวลาไว้หน้าชื่อไฟล์เดิม
    $newname = $date . $numrand . $type;
    $path_copy = $path . $newname;
    $path_link = "m_Img/" . $newname;

    //คัดลอกไฟล์ไปเก็บที่เว็บเซริ์ฟเวอร์
    move_uploaded_file($_FILES['m_Img']['tmp_name'], $path_copy);
}

// เพิ่มไฟล์เข้าไปในตาราง uploadfile

$sql = "INSERT INTO member
    (
    
    prefix,
    first_name,
    last_name,
    tel,
    email,
    password,
    department_id
    ) 
    VALUES
    (
    
    '$mr',
    '$f_name',
    '$l_name',
    '$phone',
    '$email',
    '$pass2',
    '$depart'
    )";

$result = mysqli_query($condb, $sql) or die("Error in query: $sql ");

mysqli_close($condb);
// javascript แสดงการ upload file

if ($result) {
    echo "<script type='text/javascript'>";
    echo "alert('Upload File Succesfuly');";
    echo "window.location = 'index.php'; ";
    echo "</script>";
} else {
    echo "<script type='text/javascript'>";
    echo "alert('Error back to upload again');";
    echo "</script>";
}
