<?php
	   
mysql_connect("localhost","root","");
mysql_select_db("oas");


if(isset($_POST['add']))
{
$s_id = $_POST['s_id'];
$q_id  = $_POST['q_id'];
$code = $_POST['code']; 


  $qry1= "INSERT INTO `student_question`(`student_id`, `question_id`, `t_code`, `s_answer`) values ('$s_id','$q_id','$code')";
if (mysql_query($qry1) === TRUE) {
    echo "<script>window.location.href = 'student_subject_list.php'; alert('You have Successfully Attempt this test')</script>";
} else {
   echo "<script>window.location.href = 'student_subject_list.php'; alert('You have Already Attempt This Test')</script>";
}     	

?>
<?php }} ?>
