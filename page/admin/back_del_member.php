<?php

require_once("../../condb.php");  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี


$member_id = $_GET["id_member"];
$sql = "DELETE FROM member
WHERE member_id = $member_id ";
$query = mysqli_query($condb,$sql);

if(mysqli_affected_rows($condb)) {
echo "Record delete successfully";
}
mysqli_close($condb);
if ($query) {
    echo "<script type='text/javascript'>";
    echo "alert('Delete Succesfuly');";
    echo "window.location = 'index.php'; ";
    echo "</script>";
} else {
    echo "<script type='text/javascript'>";
    echo "alert('Error back to delete again');";
    echo "</script>";
}

?>
