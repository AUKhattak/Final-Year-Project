<?php
session_start();
if(!isset($_SESSION['user']))
{
header('location:main_page.php');
}

else
?>

<!doctype html>
<html lang="en"><head>
    <meta charset="utf-8">
    <title>test code</title>
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
<div style="width:1510px; margin-left:auto; margin-right:auto; ">

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
          <a class="" href="index.html"><span class="navbar-brand"><span class="fa fa-paper-plane"></span> Online Assessment</span></a></div>

        <div class="navbar-collapse collapse" style="height: 1px;">

        </div>
      </div>
    </div>
    
</div></div>

        <div class="dialog">
    <div class="panel panel-default">
        <p class="panel-heading no-collapse">Add New Subject</p>
        <div class="panel-body">
            <form method="post">
                <div class="form-group">
                    <label>Test Code</label>
                    <input type="text"  name="code"class="form-control span12">
                </div>
                <input type="submit" name="submit" value="submit" class="btn btn-primary pull-right">
                
                <div class="clearfix"></div>
            </form>
            <?php
             if (isset($_POST['submit'])){
     mysql_connect("localhost","root","");
mysql_select_db("oas");

      if(isset($_GET['name'])){
	  $name = $_GET['name'];
	   $code=$_SESSION['code']=$_POST['code'];
		

         $query="SELECT * FROM test
		  WHERE test_id='$name' AND t_code='$code' and current_timestamp>`t_from` and current_timestamp<`t_to`  ";      
$runn=mysql_query($query);

if(mysql_num_rows($runn)==1){
echo  "<script> window.location.assign('student_question.php','_self')</script>";
$row = mysql_fetch_array($runn);
$duration=$row['duration'];
date_default_timezone_set("Asia/Karachi");
	   $endTime = date('Y-m-d H:i:s', strtotime('+'.$duration.' minutes', strtotime(date('Y-m-d H:i:s'))));
	   $qry="update  test  set `test_start`=CURRENT_TIMESTAMP , `test_end`='$endTime' where `t_code`=$code";
	   mysql_query($qry);
}
else{
echo "<script> alert('Input Right Data')</script>";
}
}}
?>
        </div>
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
