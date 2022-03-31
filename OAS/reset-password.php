<?php include("includes/s_session.php")
?>


<!doctype html>
<html lang="en"><head>
    <meta charset="utf-8">
    <title>Student Dash bord</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="lib/font-awesome/css/font-awesome.css">

    <script src="lib/jquery-1.11.1.min.js" type="text/javascript"></script>

        <script src="lib/jQuery-Knob/js/jquery.knob.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(function() {
            $(".knob").knob();
        });
    </script>


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

  if(isset($_SESSION['user']))
  {
  $id =$_SESSION['user'];
 $result = mysql_query("select * from student
WHERE student.user = '$id'");
if($result === FALSE) { 
    die(mysql_error()); // TODO: better error handling
}

while($row = mysql_fetch_array($result))

{
$image = "images/".$row['image'];
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
                <li><a href="s_edit.php?id=<?php echo $row['student_id']; ?> ">Users</a></li>
                <li><a href="./">Security</a></li>
                <li class="divider"></li>
                <li><a tabindex="-1" href="logout.php">Logout</a></li>
              </ul>
            </li>
          </ul>

        </div>
      </div>
    </div>
    </div>
    </div>
<div style="width:100%; height:auto;">
<div style="width:1490px; margin-left:auto; margin-right:auto; ">
   <div class="sidebar-nav">
   <ul>
    <li><a href="" class="nav-header" data-toggle="collapse"><i class="fa fa-fw fa-user"></i><?php echo $row['f_name'];?><?php echo $row['l_name'];?>  </a></li>
 
    <li style="width:100%; margin-top:10px; background:#cccccc;  height:170px;">
    
    <div style="width:150px; height:170px; margin-left:20px; margin-top:10px; background-color:#333333;"><img src="<?php echo $image;?>" width="100%" height="100%"></div>
    
    </li>
    
    
    
    
   
    <li><a href="student_main.php" data-target=".dashboard-menu" class="nav-header" data-toggle="collapse"><i class="fa fa-fw fa-user"></i> Dash Board<i class="fa fa-collapse"></i></a></li>
    <li><ul class="dashboard-menu nav nav-list collapse in ">

    </ul></li>

    <ul>
    <li><a href="#" data-target=".dashboard-menu" class="nav-header" data-toggle="collapse"><i class="fa fa-fw fa-book"></i> Subject_list<i class="fa fa-collapse"></i></a></li>
    <li><ul class="dashboard-menu nav nav-list collapse in ">
           <li class="active"><a href="student_subject_list.php"><span class="fa fa-caret-right"></span> subject List</a></li>

    </ul></li>

     <li><a href="#" data-target=".dashboard-menu" class="nav-header" data-toggle="collapse"><i class="fa fa-fw fa-file-pdf-o"></i> Results<i class="fa fa-collapse"></i></a></li>
        <li><ul class="premium-menu nav nav-list collapse">
                <li class="visible-xs visible-sm"><a href="#">- Premium features require a license -</a></span>
            <li ><a href="add_teacher.php"><span class="fa fa-caret-right"></span> Add Conductor</a></li>
               <li><a href="conductor_list.php"><span class="fa fa-caret-right"></span> Conductor List</a></li>
        
    </ul></li>

      
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

if(!isset($_POST['submit'])){
 $q="select * from student WHERE student.student_id ='".$_GET['id']."'";
 $result=mysql_query($q);
$row=mysql_fetch_array($result);
 }
?> <div class="main-content">
            
<ul class="nav nav-tabs">
  <li class="active"><a href="#home" data-toggle="tab">Profile</a></li>
 <li><a href="#profile" data-toggle="tab">Password</a></li>
</ul>

<div class="row">
  <div class="col-md-4">
    <br>
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="home">
     <form>
                <div class="form-group">
                    <label>Email Address</label>
                    <input type="text" class="form-controlspan12 form-control">
                </div>
                <a href="index.html" class="btn btn-primary pull-right">Reset Password</a>
                <div class="clearfix"></div>
            </form>
        
        
        
        
        
      </div>
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

</body></html>
<?php    
if(isset($_POST['submit'])){
$u="update `student` set `user`='".$_POST['user']."',`f_name`='".$_POST['fname']."' ,`l_name`='".$_POST['lname']."',`email`='".$_POST['email']."',`code`='".$_POST['code']."'  where student_id = '".$_GET['id']."'";
if(mysql_query($u)){
echo "<script> alert('Successfuly Updated')</script>";

 }
}


?>
<?php }} ?>