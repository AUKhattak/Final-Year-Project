<?php 
header('location:subject_list.php');
?>

 <?php
mysql_connect("localhost","root","");
mysql_select_db("oas"); 

$dell_id = $_GET['del'];
$sql=  "DELETE FROM `subject` WHERE subject_id = '$dell_id'";
mysql_query($sql);
?>
