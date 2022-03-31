
 
       <form method="post" action="" >  
                          <input type="submit" name="export_excel" class="btn btn-success" value="Generate Report" />  
                     </form>  
  <?php
/*
$fp = fopen("myText.txt","wb");
$content ="Test text.";
if( $fp == false ){
    //do debugging or logging here
}else{
    fwrite($fp,$content);
	}
*/	


 $connect = mysqli_connect("localhost", "root", "", "oas");  
 
if(isset($_GET['id'])){
$id = $_GET['id']; 
 $output = '';  
 if(isset($_POST["export_excel"]))  
 {  
$sql = "SELECT student_question.*,student.*,test.*,subject.*,question.* FROM  student_question
INNER JOIN student ON student_question.student_id=student.student_id
INNER JOIN test ON test.t_code = student_question.t_code
INNER JOIN subject ON test.subject_id = subject.subject_id
INNER JOIN question ON question.question_id=student_question.question_id


  where  student_question.t_code = '$id' ";
 $result = mysqli_query($connect, $sql);  
      if(mysqli_num_rows($result) > 0)  
      {  
           $output .= 'Id              Name               Question             Answer'.PHP_EOL;
				  
           while($row = mysqli_fetch_array($result))  
           {  
		   
                $output .=$row["code"].'              '.$row["name"].'              '.$row["question"].'      '.$row["s_answer"].PHP_EOL;  
           }  
           
  $abc = fopen("Reports/ReportText".$id.".txt","wb");
  if($abc!=false)
  {
  	fwrite($abc,$output);
  }

 }  
 ?>  <?php }}?>
   
  
 