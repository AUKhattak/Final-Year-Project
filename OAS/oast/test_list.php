<?php
session_start();
if(!isset($_SESSION['username']))
{
header('location:../main_user.php');
}
else {
?>
<!doctype html>
<html lang="en"><head>
    <meta charset="utf-8">
    <title>Test List</title>
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
    <style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
   
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #cccccc;
}
</style>

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
                <li><a tabindex="-1" href="../logout2.php">Logout</a></li>
              </ul>
            </li>
          </ul>

        </div>
      </div>
    </div></div>
<?php }}?>
<div style="width:100%; height:auto;">
<div style="width:1490px; margin-left:auto; margin-right:auto; ">
   <div class="sidebar-nav">
    <ul>
    <li><a href="index.php" data-target=".dashboard-menu" class="nav-header" data-toggle="collapse"><i class="fa fa-fw fa-user"></i> Dash Board<i class="fa fa-collapse"></i></a></li>
    <li><ul class="dashboard-menu nav nav-list collapse ">
          
    </ul></li>



        <li><a href="#" data-target=".legal-menu" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-file-text"></i> Manage Test<i class="fa fa-collapse"></i></a></li>
        <li><ul class="legal-menu nav nav-list collapse in">
             <li  ><a href="add_test.php"><span class="fa fa-caret-right"></span> Prepare Test</a></li>
            <li  class="active"><a href="test_list.php"><span class="fa fa-caret-right"></span> Test List</a></li>
             <li ><a href="test_list.php"><span class="fa fa-caret-right"></span> Question  List</a></li>
              <li><a href="test_list.php"><span class="fa fa-caret-right"></span> Add Question</a></li>
              
               </ul></li>

        <li><a href="#" data-target=".accounts-menu" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-file-pdf-o "></i> Result   <i class="fa fa-collapse"></i></a></li>
        <li><ul class="accounts-menu nav nav-list collapse">
            <li ><a href="add_subject.php"><span class="fa fa-caret-right"></span> Upload Result</a></li>
            <li ><a href="subject_list.php"><span class="fa fa-caret-right"></span> View Result</a></li>
            
    </ul></li>
      
       
      

 
              
            </ul>
    </div>

    <div class="content">
        <div class="header">
            
            <h1 class="page-title">Test List</h1>
                    <ul class="breadcrumb">
            <li><a href="index.php">Home</a> </li>
            <li><a href="test_list.php">Test List</a> </li>
           
        </ul>

        </div>
        <div class="main-content">
            
<div class="btn-toolbar list-toolbar">
    <button class="btn btn-primary"><i class="fa fa-plus"></i><a style="color:#FFFFFF;" href="add_test.php"> New Test</a></button>
 
  <div class="btn-group">
  </div>
</div>
<table class="table">

  <thead>
  <tr style="background-color:#272750; color:#FFFFFF;">
    
       <th>Subject Name</th>
      <th>Test Name</th>
      
       <th>Total Duration</th>
        <th>Secret Code</th>
        <th>Manage 	Question</th>
         <th>Attempt List</th>
          <th>Report</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
     <?php
mysql_connect("localhost","root","");
mysql_select_db("oas"); 
 if(isset($_SESSION['username']))
  {
  $id =$_SESSION['username'];
 
 
$qry="SELECT teacher_conductor.*,test.*,subject.* FROM test
inner join teacher_conductor on  teacher_conductor.subject_id = test.subject_id 
inner join subject on subject.subject_id = teacher_conductor.subject_id
WHERE teacher_conductor.user = '$id'";
      $result = mysql_query($qry);
        while ($row = mysql_fetch_array($result)) {
?>

      <td><?php echo $row['name'];?></td>
      <td><?php echo $row['t_name'];?></td>
     
        <td><?php echo $row['duration'];?></td>
     <td><?php echo $row['t_code'];?></td>
     
      <td>
       
            <a href="question_list.php?id=<?php echo $row['t_code'];?>"<i class="fa fa-question fa-2x"></a>
      </td>
           <td><a href="student_attempt_list.php?id=<?php echo $row['t_code'];?>"<i class="fa fa-pencil-square-o" aria-hidden="true"></i></td>
           <td><a href="student_attempt_list1.php?id=<?php echo $row['t_code'];?>"<i class="fa fa-pencil-square-o" aria-hidden="true"></i></td>

    </tr>
   <?php }} ?>
   
  
  </tbody>
</table>



<div class="modal small fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">??</button>
            <h3 id="myModalLabel">Delete Confirmation</h3>
        </div>
        <div class="modal-body">
            <p class="error-text"><i class="fa fa-warning modal-icon"></i>Are you sure you want to delete the user?<br>This cannot be undone.</p>
        </div>
        <div class="modal-footer">
            <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Cancel</button>
            <button class="btn btn-danger" data-dismiss="modal">Delete</button>
        </div>
      </div>
    </div>
</div>
</div></div>

            <footer>
                <hr style="width:1500px">

                <!-- Purchase a site license to remove this link from the footer: http://www.portnine.com/bootstrap-themes -->
                <p class="pull-right"><a href="" target=""> Online Assessment</a></p>
                <p>?? 2016 <a href="" target="">copyrights</a></p>
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
