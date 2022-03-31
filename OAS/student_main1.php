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
    <li><a href="" class="nav-header" data-toggle="collapse"><i class="fa fa-fw fa-user"></i><?php echo $row['f_name'];?>&nbsp;<?php echo $row['l_name'];?>  </a></li>
 
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
      
        <div class="main-content">
            




    <div class="panel panel-default">
        <a href="#page-stats" class="panel-heading" data-toggle="collapse">Dash Board</a>
        <div id="page-stats" class="panel-collapse panel-body collapse in">

                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="knob-container">
                             <div style="width:260px; height:700px;margin-top:20px; border-radius:6px;">
                             <div style="height:320px; width:100%;background-color:#333333; border-radius:4px;"><img src="<?php echo $image;?>" width="100%" height="100%"></div>
                             <div style="height:30px; margin-top:10px; width:100%;text-align:center;background-color:#272750;font-size:16px;color:#FFFFFF;"><h4">Student</h4></div>
                             
                             <div class="stats">
    <p class="stat"><span class="label label-info">5</span> Pictures</p>
    <p class="stat"><span class="label label-success">27</span> Tasks</p>
    <p class="stat"><span class="label label-danger">15</span> Overdue</p>
</div>
  <div class="col-sm-6 col-md-6" style="margin-top:20px; margin-left:-15px; width:290px;;">
        <div class="panel panel-default">
            <a href="#widget1container" class="panel-heading" data-toggle="collapse">About Me </a>
            <div id="widget1container" class="panel-body collapse in">
              Maize epazote fava bean cabbage winter purslane turnip greens summer purslane scallion wattle seed green bean ricebean sierra leone bologi jícama bamboo shoot. Turnip greens amaranth gourd winter purslane pea grape prairie turnip taro sea lettuce chicory. Plantain kakadu plum melon sea lettuce soko garlic chicory.
               
              
               
           </div>
           </div>
           
</div>
                             </div>
                               
                            </div>
                            
                            
                        </div>
                        
                        
                        
                        
                        
                         <div class="col-sm-6 col-md-6"  style="margin-top:20px; width:400px;">
        <div class="panel panel-default" style="height:320px;">
            <a href="#widget1container" class="panel-heading" style="background-color:#333333;" data-toggle="collapse">Student information </a>
            <div id="widget1container" class="panel-body collapse in" style="margin-top:-10px;">
                <h2><?php echo $row['user']; ?></h2>
                <i class="fa fa-fw fa-user fa-2x"></i>&nbsp;<?php echo $row['f_name']; ?>&nbsp;<?php echo $row['l_name']; ?><br>
              <i class="fa fa-envelope fa-2x" aria-hidden="true"></i>&nbsp;<?php echo $row['email']; ?><br>
               <i class="fa fa-home fa-2x" aria-hidden="true"></i>&nbsp;<?php echo $row['address']; ?><br>
               <i class="fa fa-phone fa-2x" aria-hidden="true"></i>&nbsp;<?php echo $row['contact']; ?><br>
                <i class="fa fa-bank fa-2x" aria-hidden="true"></i>&nbsp;<?php echo $row['city']; ?>
               
               
            </div>
        </div>
    </div>
     <div class="row">
    <div class="col-sm-6 col-md-6" style="width:300px; margin-top:20px; width:400px;">
        <div class="panel panel-default">
           <table class="table" style="margin-top:-1px;">

  <thead >
    <tr style="background-color:#272750; color:#FFFFFF;">
   
       <th>Resistered  Subject</th>
     <th>Description</th>
      
      
      
     
    </tr>
  </thead>
  <tbody>
    <tr>
     <?php 
	 mysql_connect("localhost","root","","");
	 mysql_select_db("oas");

  if(isset($_SESSION['user']))
  {
  $id =$_SESSION['user'];
 $result = mysql_query("select subject.*,subject_register.*,student.* from subject 
 
 INNER JOIN subject_register ON subject_register.subject_id = subject.subject_id
 INNER JOIN  student ON student.student_id = subject_register.student_id
 where student.user = '$id'
 ");
 if($result === FALSE) { 
    die(mysql_error()); // TODO: better error handling
}

while($row = mysql_fetch_array($result))
{

?>

      <td><?php echo $row['name'];?></td>
      <td><?php echo $row['description'];?></td>
      
  

    </tr>
   <?php } ?>
   
  
  </tbody>
</table>
            
               </table>
        </div>
    </div>
     <div class="col-sm-6 col-md-6" style="width:800px; margin-top:1px;" >
        <div class="panel panel-default" style="margin-top:1px;">
           
              
                <form action="" method="Post">
                <table class="table" style="margin-top:-5px;">

  <thead >
    <tr style="background-color:#272750; color:#FFFFFF;">
   
       <th>Resister Your Subject</th>
      <th>Description</th>
      
      
      
     
    </tr>
  </thead>
  <tbody>
    <tr>
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

?>
 <input type="hidden" name="student_id" value="<?php echo $row['student_id']; ?> " >
  
  

     <?php 
	 mysql_connect("localhost","root","","");
	 mysql_select_db("oas");

  $qry="select * from subject";
  $result = mysql_query($qry);
        while ($row = mysql_fetch_array($result)) {
?>
     
     <td><input type="checkbox" name="check_list[]" value="<?php echo $row['subject_id'];?>">
     
      <?php echo $row['name'];?></td>
      <td><?php echo $row['description'];?></td>
      
    </tr>
   <?php } ?>
     
  </tbody>
  
</table>



            
            
        </div>
         <input type="submit" name="submit" value="submit" class="btn btn-primary" >
         </form>
    </div>
</div>
</div>

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
        </div>
    </div>


    <script src="lib/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript">
        $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
        });
    </script>
    
  </div> 	
</body></html>
<?php
mysql_connect("localhost","root","");
mysql_select_db("oas");



 if(isset($_POST['submit']))
 {
 if(!empty($_POST['check_list'])) {
 
    foreach($_POST['check_list'] as $check) {
            echo $check;
			echo $student_id = $_POST['student_id'];
			
					
	echo 		
	$query ="INSERT INTO `subject_register`(`student_id`, `subject_id`) VALUES('$student_id','$check')";
	
		
			if(mysql_query($query));{
			  echo'<script>window.location="student_main.php";</script>';
}
			}
}
}}
?> <?php }}}}?> 
