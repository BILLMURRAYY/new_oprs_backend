<?php

require_once("../../condb.php");


$sql = "SELECT *FROM department ORDER BY id asc";
$result = mysqli_query($condb, $sql);

$count = 1;
?>
