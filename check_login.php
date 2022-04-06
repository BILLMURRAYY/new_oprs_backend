<?php
session_start();

//! ปิดแสดง Error   
error_reporting(0);

require_once("condb.php");


$email = $_POST['email'];
$pass = $_POST['password'];



$sql = "SELECT * FROM member 
        inner join department
        on department.department_id = member.department_id
        WHERE email = '" . $email . "' AND password = '" . $pass . "'  ";

$result = mysqli_query($condb, $sql) or die("Error in query: $sql ");
$row = mysqli_fetch_array($result);

foreach ($result as $row) {
    echo  $row['level']."".$row[''];
}


if ($email == $row['email'] and $pass == $row['password']) {

    $_SESSION["email"] = $row['email'];
    $_SESSION["Name"] = $row['first_name']." ".$row['last_name'];
    ($_SESSION["role"] = $row['level']);
    $_SESSION["department"] = $row['department_id'];

    if ($_SESSION["role"] == "admin") {
        header("Location: page/admin/");
    } elseif ($_SESSION["role"] == "boss") {
        header("Location: page/boss/");
    } elseif ($_SESSION["role"] == "staff") {
        header("Location: page/staff/");
    } elseif ($_SESSION["role"] == "emp") {
        header("Location: page/emp/");
    }
} else {

    echo "<script>";
    echo "alert('email หรือ Password ไม่ถูกต้อง !!!');";
    echo "window.location = 'login.php'; ";
    echo "</script>";
    header("Location: login.php");
}
    // echo "out";
    // echo $row["m_Email"];
