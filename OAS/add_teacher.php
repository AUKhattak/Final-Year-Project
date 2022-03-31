<?php
session_start();
if(!isset($_SESSION['username']))
{
header('location:main_user.php');
}
else {
?><!doctype html>
<html lang="en"><head>
    <meta charset="utf-8">
    <title>Add Teacher</title>
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
    </div>
<?php }}}?>
<div style="width:100%; height:auto;">
<div style="width:1490px; margin-left:auto; margin-right:auto; ">
      <div class="sidebar-nav">
    <ul>
    <li><a href="#" data-target=".dashboard-menu" class="nav-header" data-toggle="collapse"><i class="fa fa-fw fa-user"></i> Student Side<i class="fa fa-collapse"></i></a></li>
    <li><ul class="dashboard-menu nav nav-list collapse ">
           <li ><a href="index.php"><span class="fa fa-caret-right"></span> Main</a></li>
            <li ><a href="add.php"><span class="fa fa-caret-right"></span> Add Student</a></li>
            <li ><a href="users.php"><span class="fa fa-caret-right"></span> Student List</a></li>
         
           
        
    </ul></li>

     <li data-popover="true"rel="popover" data-placement="right"><a href="#" data-target=".premium-menu" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-book"></i> Test Conductor<i class="fa fa-collapse"></i></a></li>
        <li><ul class="premium-menu nav nav-list collapse in">
             
            <li class="active" ><a href="add_teacher.php"><span class="fa fa-caret-right"></span> Add Conductor</a></li>
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
             <li><a href="test_list.php"><span class="fa fa-caret-right"></span> Add Question</a></li>
    </ul></li>

   
              
            </ul>
    </div>

   <div class="content">
        <div class="header">
            
            <h1 class="page-title">Add  Test Conductor</h1>
                    <ul class="breadcrumb">
            <li><a href="index.php">Home</a> </li>
            <li><a href="">Add conductor</a> </li>
            
        </ul>

        </div>
        <div class="main-content">
            
<ul class="nav nav-tabs">
  <li class="active"><a href="#home" data-toggle="tab">Add Conductor </a></li>
 
</ul>
</div>
<div class="row">
  <div class="col-md-4">
    <br>
    <div id="myTabContent" class="tab-content" style="margin-left:100px; width:900px;">
      <div class="tab-pane active in" id="home">
      <form  method="post" action="">
        <div class="form-group">
        <label style="font-size:20px;">Username</label>
        <input type="text" name="user"  class="form-control" placeholder="Username"required/>
        </div>
        <div class="form-group">
        <label style="font-size:20px;">First Name</label>
        <input type="text" name="fname"  class="form-control" placeholder="First Name" required/>
        </div>
         <div class="form-group">
        <label style="font-size:20px;" >Last Name</label>
        <input type="text" name="lname"  class="form-control" placeholder="Last Name" required/>
        </div>
       
         <div class="form-group">
        <label> Password</label>
        <input type="password"  name="password" class="form-control">
        </div>
        <div class="form-group">
        <label  style="font-size:20px;">Email</label>
        <input type="email" name="email"  class="form-control"  placeholder="Email" required/>
        </div>
		 <div class="form-group">
        <label  style="font-size:20px;">Contact</label>
        <input type="text" name="contact"  class="form-control"  placeholder="Contact" required/>
        </div>
        
        <div class="form-group">
          <label>Address</label>
          <textarea value="Smith" name="address" rows="7" class="form-control"  placeholder="Address" required/></textarea>
        </div>
         <div class="form-group">
        <label  style="font-size:20px;">City</label>
        
        <input type="text" name="city"  class="form-control"  placeholder="City" required/>
        </div>
         <div class="form-group">
        <label  style="font-size:20px;">Pin Code</label>
        <input type="text"  name="code" class="form-control" placeholder="Code" required/>
        </div>
          <div class="form-group">
        <label style="font-size:20px;">Assign Subject </label>
        <select  type="text" name="subject"  class="form-control" placeholder="Subject Name" required/> 
         <?php
mysql_connect("localhost","root","");
mysql_select_db("oas");


$qry=" SELECT subject.* FROM subject 
LEFT JOIN teacher_conductor
ON teacher_conductor.subject_id= subject.subject_id 
WHERE teacher_conductor.subject_id IS NULL
";
     $run=mysql_query($qry);
     while($row=mysql_fetch_array($run)){
	echo '<option  value='.$row['subject_id'].'>'.$row['name'].'</option>';
	 }
	 
	 ?>
        </select>
        </div>

   
      </div>

     
             
          </div>
       
      </div>
    </div>

    <div class="btn-toolbar list-toolbar">
     <input type="submit" name="submit" value="submit" style="margin-left:940px; margin-top:40px;" class="btn btn-primary" >
       </form>
     </div>
  </div>
            <footer>
                <hr style="width:1500px">

                <!-- Purchase a site license to remove this link from the footer: http://www.portnine.com/bootstrap-themes -->
                <p class="pull-right"><a href="" target=""> Online Assessment</a></p>
                <p>© 2016 <a href="" target="">copyrights</a></p>
                </hr>
            </footer>
</div></div> 
        </div>
    </div>



    <script src="lib/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript">
        $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
        });
    </script>
    
  
</body></html>
<?php
mysql_connect("localhost","root","");
mysql_select_db("oas");

 if(isset($_POST['submit']))
 {
 $user =$_POST['user'];
$fname =$_POST['fname'];
$lname =$_POST['lname'];
$password=($_POST['password']);
$email =$_POST['email'];
  $contact =$_POST['contact'];
 $address =$_POST['address'];
  $city =$_POST['city'];
  $code =$_POST['code'];
   $subject =$_POST['subject'];

 $qry= "INSERT INTO `teacher_conductor`(`user`, `f_name`, `l_name`, `password`, `email`, `contact`, `address`, `city`, `subject_id`, `code`) VALUES ('$user', '$fname','$lname','$password', '$email', '$contact', '$address', '$city','$subject','$code')";
mysql_query($qry);
echo '<script> alert ("Your account has been successfully Add.") </script>';

 ?> 
<?php } ?>



