<?php
session_start();
echo "<pre>";
print_r($_POST);
echo "</pre>";
exit();
//! ปิดแสดง Error   
error_reporting(0);

require_once("service/condb.php");


$email = $_POST['email'];
$pass = $_POST['password'];

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";

$email = $_POST['email'];
$password = $_POST['password'];
$password = md5($password);
$sql = "SELECT * FROM member 
    INNER JOIN department
    ON member.member_id = department.department_id
    WHERE  email = '" . $email . "' AND password = '" . $password . "' ";

$result = mysqli_query($condb, $sql) or die("Error in query: $sql ");
$row = mysqli_fetch_array($result);


if ($email == $row["email"] and $password == $row["password"]) {

    $_SESSION["level"] = $row["level"];
    $_SESSION["member_id"] = $row["member_id"];
    $_SESSION["member_name"] = $row["first_name"] . " " . $row["last_name"];
    $_SESSION["department_id"] = $row["department_id"];
    $_SESSION["department_name"] = $row["department_name"];
    // $_SESSION["m_Img"] = $row["m_Img"];
    //! Check $_SESSION
    // print_r($_SESSION);
    // echo $_SESSION["Email"];
    // echo $_SESSION["Name"];
    // echo $_SESSION["Department"];
    // exit();

    if ($_SESSION["level"] == "admin") {
        header("Location: page/admin/");
    } elseif ($_SESSION["level"] == "boss") {
        header("Location:page/boss/");
    } elseif ($_SESSION["level"] == "staff") {
        header("Location: page/staff/");
    } elseif ($_SESSION["level"] == "employee") {
        header("Location: page/emp/");
    }
} else {

    echo "<script>";
    echo "alert('email หรือ Password ไม่ถูกต้อง !!!');";
    echo "window.location = 'login.php'; ";
    echo "</script>";
    header("Location: login.php");
}
