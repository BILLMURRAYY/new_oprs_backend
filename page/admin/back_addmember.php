<?php

//1. เชื่อมต่อ database: 
require_once("../service/condb.php");  //ไฟล์เชื่อมต่อกับ database 

$department_id = $_POST['department_id']; //รับค่าไฟล์จากฟอร์ม	
$prefix = $_POST['prefix']; //รับค่าไฟล์จากฟอร์ม	
$first_name = $_POST['first_name']; //รับค่าไฟล์จากฟอร์ม	
$last_name = $_POST['last_name']; //รับค่าไฟล์จากฟอร์ม	
$tel = $_POST['tel']; //รับค่าไฟล์จากฟอร์ม	
$email = $_POST['email']; //รับค่าไฟล์จากฟอร์ม	
$pass1 = $_POST['pass1']; //รับค่าไฟล์จากฟอร์ม	
$pass2 = $_POST['pass2']; //รับค่าไฟล์จากฟอร์ม
$pass2 = md5($pass2);
$img_upload = $_FILES['img']; //รับค่าไฟล์จากฟอร์ม	

 //รับค่าไฟล์จากฟอร์ม	


// print_r($_FILES);
//!!! CHECK FILE
if(isset($img_upload)) {
    $errors     = array();
    $value_img = 1;
    // $maxsize    = 4194304;
    $maxsize    = 2097152;
    // $maxsize    = 97152;
    $acceptable = array(
        'image/jpeg',
        'image/jpg',
        'image/png'
    );
    // || ($_FILES["img"]["size"] == 0)
    if(($_FILES['img']['size'] >= $maxsize) || ($_FILES["img"]["size"] == 0)) {
        $errors[] = 'File too large. File must be less than 2 megabytes.';
        $value_img = 0;
        // echo "<script>";
        //     echo "history.back(); ";
        // echo "</script>";
    }

    if((!in_array($_FILES['img']['type'], $acceptable)) && (!empty($_FILES["img"]["type"]))) {
        $errors[] = 'Invalid file type. Only PDF, JPG, GIF and PNG types are accepted.';
    }
    // if($_FILES["img"]["size"] == 0){
    //     $value_img = 0;
    // }

    if(count($errors) === 0 && $value_img = 1) {
            //ฟังก์ชั่นวันที่
            date_default_timezone_set('Asia/Bangkok');
            $date = date("Ymd");	
            //ฟังก์ชั่นสุ่มตัวเลข
            $numrand = (mt_rand());
        
            //โฟลเดอร์ที่จะ upload file เข้าไป 
            $path="../../assets/images/";  
        
            //เอาชื่อไฟล์เก่าออกให้เหลือแต่นามสกุล
            $type = strrchr($_FILES['img']['name'],".");
                
            //ตั้งชื่อไฟล์ใหม่โดยเอาเวลาไว้หน้าชื่อไฟล์เดิม
            $newname = $date.$numrand.$type;
            $path_copy=$path.$newname;
            $path_link="m_Img/".$newname;
            $GLOBALS['newnames'] = $newname;
        
            //คัดลอกไฟล์ไปเก็บที่เว็บเซริ์ฟเวอร์
            move_uploaded_file($_FILES['img']['tmp_name'],$path_copy);  	
        
        // move_uploaded_file($_FILES['gile']['tmpname'], '/store/to/location.file');
    }
    elseif($value_img == 0){
        $GLOBALS['newnames'] = '';

    }
    else {
        foreach($errors as $error) {
            echo '<script>alert("'.$error.'");</script>';
            echo "<script>";
            // echo "alert(' มีผู้ใช้ username นี้แล้ว กรุณาสมัครใหม่อีกครั้ง !');";
            echo "window.location='addmember.php';";
              echo "</script>";
        }
        

        // die(); //Ensure no more processing is done
    }
}

// เพิ่มไฟล์เข้าไปในตาราง uploadfile

$check = "select * from member  where email = '$email' ";
$result1 = mysqli_query($condb,$check) or die("Error in query: $sql ");
$num = mysqli_num_rows($result1); 
if($num > 0)   		
        {
//ถ้ามี username นี้อยู่ในระบบแล้วให้แจ้งเตือน
// exit();
             echo "<script>";
			 echo "alert(' มีผู้ใช้ username นี้แล้ว กรุณาสมัครใหม่อีกครั้ง !');";
			 echo "window.location='form_add_member.php';";
          	 echo "</script>";
 
}else{
$sql = "INSERT INTO member
    (
    
    prefix,
    first_name,
    last_name,
    tel,
    email,
    password,
    img,
    department_id
    ) 
    VALUES
    (
    
    '$prefix',
    '$first_name',
    '$last_name',
    '$tel',
    '$email',
    '$pass2',
    '$newnames',
    '$department_id'
    )";

$result = mysqli_query($condb, $sql) or die("Error in query: $sql ");
}
mysqli_close($condb);
// javascript แสดงการ upload file
// exit();
if ($result) {
    echo "<script type='text/javascript'>";
    echo "alert('Succesfuly');";
    echo "window.location = 'index.php'; ";
    echo "</script>";
} else {
    echo "<script type='text/javascript'>";
    echo "alert('Error back to add member again');";
    echo "</script>";
}
