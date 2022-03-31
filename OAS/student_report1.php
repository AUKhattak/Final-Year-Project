<?php
session_start();
if(!isset($_SESSION['username']))
{
header('location:index.php');
}
else {
?>
<!doctype html>
<html lang="en"><head>
    <meta charset="utf-8">
    <title>Student Report</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="lib/font-awesome/css/font-awesome.css">

    <script src="lib/jquery-1.11.1.min.js" type="text/javascript"></script>

    

    <link rel="stylesheet" type="text/css" href="stylesheets/theme.css">
    <link rel="stylesheet" type="text/css" href="stylesheets/premium.css">

</head>
<body class=" theme-blue">
<div style="width:100%; height:auto;">
<div style="width:1490px; margin-left:auto; margin-right:auto; ">
    <!-- Demo page code -->

    <script type="text/javascript">
        $(function() {
            var match = document.cookie.match(new RegExp('color=([^;]+)'));
            if(match) var color = match[1];
            if(color) {
                $('body').removeClass(function (index, css) {
                    return (css.match (/\btheme-\S+/g) || []).join(' ')
                })
                $('body').addClass('theme-' + color);
            }

            $('[data-popover="true"]').popover({html: true});
            
        });
    </script>
    <style type="text/css">
	@media print
  {
	  #no_print
	  {
		  display:none;
	  }
  }
	
        #line-chart {
            height:300px;
            width:800px;
            margin: 0px auto;
            margin-top: 1em;
        }
        .navbar-default .navbar-brand, .navbar-default .navbar-brand:hover { 
            color: #fff;
        }
    </style>

    <script type="text/javascript">
        $(function() {
            var uls = $('.sidebar-nav > ul > *').clone();
            uls.addClass('visible-xs');
            $('#main-menu').append(uls.clone());
        });
    </script>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
  

  <!--[if lt IE 7 ]> <body class="ie ie6"> <![endif]-->
  <!--[if IE 7 ]> <body class="ie ie7 "> <![endif]-->
  <!--[if IE 8 ]> <body class="ie ie8 "> <![endif]-->
  <!--[if IE 9 ]> <body class="ie ie9 "> <![endif]-->
  <!--[if (gt IE 9)|!(IE)]><!--> 
   
  <!--<![endif]-->

    <div class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        <a class="" href="index.html"><span class="navbar-brand"><span class="fa fa-paper-plane"></span> Online Assessment</span></a></div>
           <?php 
	 mysql_connect("localhost","root","","");
	 mysql_select_db("oas");

  if(isset($_SESSION['username']))
  {
  $id =$_SESSION['username'];
 $result = mysql_query("select * from teacher_conductor
WHERE teacher_conductor.user = '$id'");
if($result === FALSE) { 
    die(mysql_error()); // TODO: better error handling
}

while($row = mysql_fetch_array($result))

{


?>


        <div class="navbar-collapse collapse" style="height: 1px;">
          <ul id="main-menu" class="nav navbar-nav navbar-right">
            <li class="dropdown hidden-xs">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <span class="glyphicon glyphicon-user padding-right-small" style="position:relative;top: 3px;"></span>
                     <?php echo $row['f_name'];?>
                    <i class="fa fa-caret-down"></i>
                   
                </a>

              <ul class="dropdown-menu">
                <li><a href="./">My Account</a></li>
                <li class="divider"></li>
                <li><a href="./">Users</a></li>
                <li><a href="./">Security</a></li>
                <li class="divider"></li>
                <li><a tabindex="-1" href="logout1.php">Logout</a></li>
              </ul>
            </li>
          </ul>

        </div>
      </div>
    </div></div>
<?php }}?>

    <div style="width:1000px; height:1000px; margin-left:auto; margin-right:auto; border:solid 2px; margin-top:10px; border-radius:4px;">
     <h1 style="margin-left:300px; float:left; margin-top:50px;">Student Report</h1><br>
      <?php


mysql_connect("localhost","root","");
mysql_select_db("oas");

if(isset($_GET['id']) || ($_GET['s_id'])){
$s_id = $_GET['s_id']; 
$id = $_GET['id']; 


$result = mysql_query("SELECT student_question.*,student.*,test.*,subject.*,question.* FROM  student_question
INNER JOIN student ON student_question.student_id=student.student_id
INNER JOIN test ON test.t_code = student_question.t_code
INNER JOIN subject ON test.subject_id = subject.subject_id
INNER JOIN Question ON question.question_id = student_question.question_id 




  where  student.student_id='$s_id' ANd test.t_code='$id'  ");

if($result === FALSE) { 
    die(mysql_error()); // TODO: better error handling
}

while($row = mysql_fetch_array($result))
{

?>

     <table  style="width:700px; margin-left:auto; margin-right:auto; margin-top:150px; ">

  <thead>
    <tr>
    <td>
    <th style="height:70px; font-size:22px;">Student Name </th>
    </td>
    <td style="font-size:20px; font-family:'Courier New', Courier, monospace;"><?php echo $row['f_name'];?>&nbsp;<?php echo $row['l_name']; ?></td>
    </tr>
   <tr>
    <td>
    <th style="height:70px; font-size:22px;">Subject Name  </th>
    </td>
    <td style="font-size:20px; font-family:'Courier New', Courier, monospace;"><?php echo $row['name'];?></td>
    </tr>
         <tr>
    <td>
    <th style="height:70px; font-size:22px;">Test Name </th>
    </td>
    <td style="font-size:20px; font-family:'Courier New', Courier, monospace;"><?php echo $row['t_name'];?></td>
    </tr>
     <tr>

     <?php


mysql_connect("localhost","root","");
mysql_select_db("oas");

if(isset($_GET['id']) || ($_GET['s_id'])){
$s_id = $_GET['s_id']; 
$id = $_GET['id']; 


$result = mysql_query("SELECT student_question.*,student.*,test.*,subject.*,question.* FROM  student_question
INNER JOIN student ON student_question.student_id=student.student_id
INNER JOIN test ON test.t_code = student_question.t_code
INNER JOIN subject ON test.subject_id = subject.subject_id
INNER JOIN Question ON question.question_id = student_question.question_id 




  where  student.student_id='$s_id' ANd test.t_code='$id'  ");

if($result === FALSE) { 
    die(mysql_error()); // TODO: better error handling
}

while($row = mysql_fetch_array($result))
{

?>
     <tr>
    <td>
    
    <th style="height:70px; font-size:22px;">Question</th>
    </td>
    <td style="font-size:20px; font-family:'Courier New', Courier, monospace;"><?php echo $row['question'];?></td>
    </tr>
     <tr>
    <td>
    <th style="height:70px; font-size:22px;">Answer</th>
    </td>
    <td style="font-size:20px; font-family:'Courier New', Courier, monospace;"><?php echo $row['s_answer'];?></td>
    </tr>
      <?php }}?>
      <th style="width: 3.5em;"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
</tr>

</tbody>
</table>
    
    
    
    </div>
         <div id="no_print">
                       <center>
                            <button type="submit"  style="margin-left:-830px;" class="btn btn-primary btn_submit" onClick="window.history.back(-1) " style="width:80px; margin-left:-1000px;">Go Back</button>
                      		<button type="submit" class="btn btn-primary btn_submit hidden-xs" onClick="window.print() " style="width:80px;">Print</button>
                       </center>     
                      </div>
       


   <?php }} ?>
   
  

<div style="width:100%; height:auto;">
<div style="width:1490px; margin-left:auto; margin-right:auto; ">





            <footer>
                <hr style="width:1500px">

                <!-- Purchase a site license to remove this link from the footer: http://www.portnine.com/bootstrap-themes -->
                <p class="pull-right"><a href="" target=""> Online Assessment</a></p>
                <p>© 2016 <a href="" target="">copyrights</a></p>
                </hr>
            </footer>
        </div>
    </div>


    <script src="lib/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript">
        $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
        });
    </script>
    
  
</body></html><?php } ?>
