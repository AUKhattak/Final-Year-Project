<?php
session_start();
if(!isset($_SESSION['user']))
{
header('location:../main_page.php');
}

else
?>