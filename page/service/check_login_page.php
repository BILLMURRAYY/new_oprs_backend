<?php 
session_start(); 

print_r($_SESSION);
if(!isset($_SESSION["member_name"])){
    echo "<script>";
        echo "alert('Please Login !');";
        echo "window.location = '../index.php'; ";
        
    echo "</script>";
    exit();
}

?>