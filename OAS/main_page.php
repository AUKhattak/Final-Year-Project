<?php
session_start();
?>

<!doctype html>
<html lang="en"><head>
<style>

</style>


    <meta charset="utf-8">
    <title>Student Login</title>
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
          <a class="" href="index.html"><span class="navbar-brand"><span class="fa fa-book"></span> Online Assessment</span></a></div>

        <div class="navbar-collapse collapse" style="height: 1px;">
          <ul id="main-menu" class="nav navbar-nav navbar-right">
         
            
          </ul>

        </div>
      </div>
 
    

  
      
      
      
            
      
      
      
      <div style="width:100%; height:700px; ">
      <div style="width:1300px; height:420px;margin-left:auto;background-color:#D2D2D2;  margin-right:auto;">
      
      
     
      <div style="width:300px; height:300px;  float:left; margin-left:60px; margin-top:40px; "> <img style="width:300px; height:300px;" src="images/Online assessment2.JPG">
</div>
<div  style="width:495px; height:40px; float:left; margin-left:90px; margin-top:50px;border-bottom: solid 3px #000000;;  font-size:22px; font-family:Arial, Helvetica, sans-serif; padding-top:-5px;
"><strong>Student Login</strong></div>


<div style="width:500px; height:280px; margin-left:90px; margin-top:20px;float:left;">
<form action="" method="post">
<strong style="font-size:18px; font-family:Arial, Helvetica, sans-serif;">Username:</strong>

<input type="text" name="user" placeholder="Username"   style="width:400px; font-family:'Courier New', Courier, monospace;  font-size:22px; height:35px; border-radius:4px; margin-top:30px;"required><br>
<strong style="font-size:18px; font-family:Arial, Helvetica, sans-serif; margin-top:20px;">Password:</strong>

<input type="password" name="password"  style="width:400px; font-size:22px; height:35px; border-radius:4px;  font-family:'Courier New', Courier, monospace;  margin-top:30px;" placeholder='Password' required>

<input type="submit" name="submit" value="Login"   class="btn btn-primary" style="margin-top:40px; height:35px; margin-left:390px; font-size:18px; background-color:#E1F5FF; float:left; width:100px;">



</form>

</div>
      

      
           </div>
           </div>
       
           
   
      
      

            <footer>
                <hr style="width:1500px">

                <!-- Purchase a site license to remove this link from the footer: http://www.portnine.com/bootstrap-themes -->
                <p class="pull-right"><a href="" target=""> Online Assessment</a></p>
                <p>© 2016 <a href="" target="">copyrights</a></p>
                </hr>
            </footer>
         

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
      $conn=mysqli_connect("localhost","root","","oas");
if(isset($_POST['submit']))
{
 $user=$_SESSION['user']=$_POST['user'];
 $password=$_POST['password'];
$query="SELECT * from student where user='$user' and password='$password'";
$runn=mysqli_query($conn,$query);
if(mysqli_num_rows($runn)==1){
echo  "<script> window.location.assign('student_main.php','_self')</script>";
}
else{
echo "<script> alert('Input Right Data')</script>";
}
}
?>