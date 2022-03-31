<?php
session_start();
?>
<?php
        if (isset($_POST['submit'])){

     mysql_connect("localhost","root","");
mysql_select_db("oas");
        
        $username = $_POST['username'];
        $password = $_POST['password'];
        
       
         $query="SELECT * FROM teacher_conductor WHERE user ='$username' AND password='$password'";      
 $result=mysql_query($query) or die ("error: ".mysql_error());

            if (mysql_num_rows($result)==1){

  session_start();
                $_SESSION["username"]=$username;
             
				 
				  $row=mysql_fetch_array($result);
                        if ($row['account']==Admin){
						 header("location:index.php");
                        }
                        else if ($row['account']==teacher) {
                        header("location:oast/index.php");
                        }

                       }
                else 
               echo ("<SCRIPT>
    window.alert('Input Right Data')
    window.location.href='forget.php';
    </SCRIPT>");

}//from isset(submit)
?>

<!doctype html>
<html lang="en">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!-- Start WOWSlider.com HEAD section -->


<link rel="stylesheet" type="text/css" href="slider/engine1/style.css" />
	<script type="text/javascript" src="slider/engine1/jquery.js"></script>
<head>

</head>



    <meta charset="utf-8">
    <title>Index page</title>
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
<style>
ul {
    list-style-type: none;
	width:1400px;
    margin-left:auto;
	margin-right:auto;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left; width:200px;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color:#006393;
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
          <a class="" href="index.html"><span class="navbar-brand"><span class="fa fa-book"></span> Online Assessment</span></a></div>

        <div class="navbar-collapse collapse" style="height: 1px;">
         
          <div style="margin-top:12px; float:right;">
               <form action="" method="post">
                 <input type="text" name="username" placeholder="Username" style="height:30px; font-family:Arial, Helvetica, sans-serif; font-size:16px; border:solid 2px;  border-radius:4px;" required>
                 
                <input type="password" name="password" placeholder="Password"  style="height:30px; border:solid 2px; border-radius:4px;" required>
                <input style="color:#000000;border:solid 2px; border-radius:4px; height:30px; font-size:16px;" type="submit" name="submit" value="submit">
                </form>
               </div>
            
          
        </div>
      </div>
    </div>
    
</div></div>
  <div style="width:100%; height:auto;">
<div style="width:1490px; margin-left:auto; margin-right:auto; ">
        <div class="main-content">
            



                   
                      
                        <div style="width:100%; height:410px; ">
                        <div style="width:1400px;  margin-left:auto; margin-right:auto;">
                  <div id="wowslider-container1">
	<div class="ws_images"><ul>
		<li><img src="slider/data1/images/bigstockcomputerclassinuniversityw588306081600.jpg" alt="online examination system" title="online examination system" id="wows1_0"/></li>
		<li><img src="slider/data1/images/taking_a_computer_based_test.jpg" alt="ahmad" title="ahmad" id="wows1_1"/></li>
		<li><img src="slider/data1/images/nelson.jpg" alt="fa12-bcs-089" title="fa12-bcs-089" id="wows1_2"/></li>
		<li><img src="slider/data1/images/computer_adaptive_gmat.jpg" alt="fyp" title="fyp" id="wows1_3"/></li>
		<li><a href="http://wowslider.com"><img src="slider/data1/images/cover2.jpg" alt="slider wordpress" title="cover2" id="wows1_4"/></a></li>
		<li><img src="slider/data1/images/sahiwalcover.jpg" alt="ciit sahiwaal" title="ciit sahiwaal" id="wows1_5"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="online examination system"><span><img src="slider/data1/tooltips/bigstockcomputerclassinuniversityw588306081600.jpg" alt="online examination system"/>1</span></a>
		<a href="#" title="ahmad"><span><img src="slider/data1/tooltips/taking_a_computer_based_test.jpg" alt="ahmad"/>2</span></a>
		<a href="#" title="fa12-bcs-089"><span><img src="slider/data1/tooltips/nelson.jpg" alt="fa12-bcs-089"/>3</span></a>
		<a href="#" title="fyp"><span><img src="slider/data1/tooltips/computer_adaptive_gmat.jpg" alt="fyp"/>4</span></a>
		<a href="#" title="cover2"><span><img src="slider/data1/tooltips/cover2.jpg" alt="cover2"/>5</span></a>
		<a href="#" title="ciit sahiwaal"><span><img src="slider/data1/tooltips/sahiwalcover.jpg" alt="ciit sahiwaal"/>6</span></a>
	</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com/vi">css slider</a> by WOWSlider.com v8.2</div>
	<div class="ws_shadow"></div>
	</div>	
	<script type="text/javascript" src="engine1/wowslider.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>
	<!-- End WOWSlider.com BODY section -->
                        </div>
                        
                        
                        </div>
                           
              
       
    </div>
    <div><ul>
  <li><a class="active" href="main_page.php">Student Console</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
</ul>
</div>
<div style="width:300px; height:400px; float:left; margin-left:48px;"><img style="width:300px; height:300px; margin-top:60px;" src="images/Online assessment2.JPG"></div>
<div style="font-family:Arial, Helvetica, sans-serif; width:1000px; margin-left:20px; margin-top:40px; float:left; height:auto;font-size:18px; color:#333333">
<h1 style="font-family:Arial, Helvetica, sans-serif; margin-top:-2px; font-size:40px">About</h1>
        <p>In education, the term assessment refers to the wide variety of methods or tools that educators use to evaluate, measure, and document the academic readiness, learning progress, skill acquisition, or educational needs of students.The purpose of an assessment generally drives the way it is designed, and there are many ways in which assessments can be used.</p>
        <p>The test is highly customizeable.This project  will enable educational institute  to conduct teat and, 
             have automated checking on answer on the responce by candidte.</p>
        <p>This project allows facullities to create their own test. it would enable educational institute to perform 
            test quiz and feedback forms.</p>
        <p>It asks to faculty to create his / her own question</p>
        <p>Furthuer the test are associated with specific group so that only associated students can appear for the test </p>
        <p>Developed by the students of the COMSATS Institute of Information Technology Sahiwal 
            </p>
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
 