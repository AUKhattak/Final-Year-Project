<?php 
header('location:conductor_list.php');
?>

 <?php
mysql_connect("localhost","root","");
mysql_select_db("oas"); 

$dell_id = $_GET['del'];
$sql=  "DELETE FROM `teacher_conductor` WHERE teacher_id = '$dell_id'";
mysql_query($sql);
?>
