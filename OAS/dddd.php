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
    <title>Edit student</title>
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
          <a class="" href="index.html"><span class="navbar-brand"><span class="fa fa-paper-plane"></span> Online Examination System</span></a></div>
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
    </div>
<?php }}?>

    <div class="sidebar-nav">
    <ul>
    <li><a href="#" data-target=".dashboard-menu" class="nav-header" data-toggle="collapse"><i class="fa fa-fw fa-dashboard"></i> Student Side<i class="fa fa-collapse"></i></a></li>
    <li><ul class="dashboard-menu nav nav-list collapse in">
            <li ><a href="index.php"><span class="fa fa-caret-right"></span> Main</a></li>
            <li ><a href="add.php"><span class="fa fa-caret-right"></span> Add Student</a></li>
            <li ><a href="users.php"><span class="fa fa-caret-right"></span> Student List</a></li>
            <li class="active"><a href="edit.php"><span class="fa fa-caret-right"></span> Edit Student</a></li>
           
           
    </ul></li>
   <li data-popover="true"rel="popover" data-placement="right"><a href="#" data-target=".premium-menu" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-book"></i> Test Conductor<i class="fa fa-collapse"></i></a></li>
        <li><ul class="premium-menu nav nav-list collapse">
                
            <li ><a href="add_teacher.php"><span class="fa fa-caret-right"></span> Add Conductor</a></li>
               <li><a href="conductor_list.php"><span class="fa fa-caret-right"></span> Conductor List</a></li>
        
    </ul></li>

        <li><a href="#" data-target=".accounts-menu" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-file-pdf-o "></i> Subject   <i class="fa fa-collapse"></i></a></li>
        <li><ul class="accounts-menu nav nav-list collapse">
            <li ><a href="add_subject.php"><span class="fa fa-caret-right"></span> Add New Subject</a></li>
            <li ><a href="subject_list.php"><span class="fa fa-caret-right"></span>Subject List</a></li>
            
    </ul></li>

        <li><a href="#" data-target=".legal-menu" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-file-text"></i> Manage Test<i class="fa fa-collapse"></i></a></li>
        <li><ul class="legal-menu nav nav-list collapse">
             <li ><a href="add_test.php"><span class="fa fa-caret-right"></span> Prepare Test</a></li>
            <li ><a href="test_list.php"><span class="fa fa-caret-right"></span> Test List</a></li>
             <li ><a href="test_list.php"><span class="fa fa-caret-right"></span> Question  List</a></li>
              <li><a href="add_question.php"><span class="fa fa-caret-right"></span> Add Qustion</a></li>
    </ul></li>
            </ul>
    </div>

    <div class="content">
        <div class="header">
            
            <h1 class="page-title">Edit User</h1>
                    <ul class="breadcrumb">
            <li><a href="index.html">Home</a> </li>
            <li><a href="users.html">Users</a> </li>
            
        </ul>

        </div>
        
        <?php
mysql_connect("localhost","root","");
mysql_select_db("oas"); 
if(isset($_GET['id'])){
$id = $_GET['id']; 
 $result = mysql_query("select * from student
WHERE student.student_id = '$id'");
if($result === FALSE) { 
    die(mysql_error()); // TODO: better error handling
}

while($row = mysql_fetch_array($result))

{
?>  <div class="main-content">
            
<ul class="nav nav-tabs">
  <li class="active"><a href="#home" data-toggle="tab">Profile</a></li>
 
</ul>

<div class="row">
  <div class="col-md-4">
    <br>
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="home">
      <form id="tab">
        <div class="form-group">
        <label>Username</label>
        <input type="text"  class="form-control" name="user"  value="<?php echo $row['user']; ?>"> 
        </div>
        <div class="form-group">
        <label>First Name</label>
        <input type="text"  class="form-control" name="f_name" value="<?php echo $row['f_name']; ?>">
        </div>
        <div class="form-group">
        <label>Last Name</label>
        <input type="text"  class="form-control" name="l_name"  value="<?php echo $row['l_name']; ?>">
        </div>
        <div class="form-group">
        <label>Email</label>
        <input type="text"  class="form-control" name="id"  value="<?php echo $row['student_id']; ?>">
        </div>

        <div class="form-group">
          <label>Address</label>
          <textarea value="Smith" rows="3" class="form-control"  value="<?php echo $row['address']; ?>"></textarea>
        </div>
         <div class="form-group">
        <label>City</label>
        <input type="text"  class="form-control"  value="<?php echo $row['city']; ?>">
        </div>
         <div class="form-group">
        <label>code</label>
        <input type="text"  class="form-control" >
        </div>

       <input type="submit" name="submit" value="submit" class="btn btn-primary">
        </form>
      </div>

      <div class="tab-pane fade" id="profile">

        <form id="tab2">
          <div class="form-group">
            <label>New Password</label>
            <input type="password" class="form-control">
          </div>
          <div>
             
          </div>
        </form>
        
        
        
        
        
      </div>
    </div>

    <div class="btn-toolbar list-toolbar">
      <button class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
      <a href="#myModal" data-toggle="modal" class="btn btn-danger">Delete</a>
    </div>
  </div>
</div>

<div class="modal small fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Delete Confirmation</h3>
      </div>
      <div class="modal-body">
        
        <p class="error-text"><i class="fa fa-warning modal-icon"></i>Are you sure you want to delete the user?</p>
      </div>
      <div class="modal-footer">
        <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Cancel</button>
        <button class="btn btn-danger" data-dismiss="modal">Delete</button>
      </div>
    </div>
  </div>
</div>


             <footer>
                <hr>

                <!-- Purchase a site license to remove this link from the footer: http://www.portnine.com/bootstrap-themes -->
                <p class="pull-right"><a href="main_user.php" target="_blank">Online examination system</a></p>
                <p>© 2016 <a href="http://www.portnine.com" target="_blank">copyrights</a></p>
            </footer>



    <script src="lib/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript">
        $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
        });
    </script>
<?php }} ?>
</body></html>
<?php
mysql_connect("localhost","root","");
mysql_select_db("oas"); 
if(isset($_POST['submit'])){
$user = $_POST['user'];
$fname = $_POST['f_name'];
$lname = $_POST['l_name'];
$id = $_POST['id'];
$qry = "UPDATE `student` SET  f_name ='$fname' , l_name = '$lname' where student_id = '$id' ";
 if(mysql_query($qry)){
 echo "<script> alert('Input Right Data')</script>";
 }
}?>
<?php }	 ?>
