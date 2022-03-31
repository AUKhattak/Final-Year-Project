\<?php 
header('location:users.php');
?>

 <?php
mysql_connect("localhost","root","");
mysql_select_db("oas"); 

$dell_id = $_GET['delete'];
$sql=  "DELETE FROM `student` WHERE student_id = '$dell_id'";
mysql_query($sql);
?>
