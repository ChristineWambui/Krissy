

<?php

include('config.php');


   
session_start();

if(isset($_SESSION['admission']))
{
      ?>


<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Student portal</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->



<script>
//function setColor(btn){
  
   // var property = document.getElementById(btn);
    //if (property){
        //property.style.backgroundColor = "red"
       // property.innerHTML= "Applied"
                
    //}
//}

</script>
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    
      <!-- mini logo for sidebar mini 50x50 pixels -->
    
      <!-- logo for regular state and mobile devices -->
     
    

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->

      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
         

           <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">
			  <?php
			 foreach($_SESSION as $admission){
			    $MyAdmission = $admission;
			 }
			 
			 $retrieve = "SELECT COUNT(message) FROM notifications WHERE admission = '$MyAdmission'";
			 $result = mysqli_query($connection,$retrieve);
			 $row = mysqli_fetch_array($result);
			 echo $row[0];
				
			  
			  ?>
			  
			  </span>
            </a>
            <ul class="dropdown-menu">
              <li class="header"></li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
				  <?php 
				  
			
						function retrievemessage()
						{
							
						
						foreach($_SESSION as $admission){
						$MyAdmission = $admission;};
						global $connection;
						$select="SELECT message FROM notifications WHERE admission = '$MyAdmission'";
						$selectresult=mysqli_query($connection,$select);
						$result=array();
						if(mysqli_num_rows($selectresult)>0)
						{
							while($row=mysqli_fetch_array($selectresult))
								{
									$result[]=$row;
								}
						return $result;
						}
	
						}
						
				
				foreach(retrievemessage() as $sms)
				  {
					  
					 ?>
					 <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"><?php echo $sms['message']; ?></i>
                    </a>
                  </li>
                  <?php
				  }
				  ?>

              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks Menu -->
           <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the messages -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <!-- User Image -->
                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <!-- Message title and timestamp -->
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <!-- The message -->
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
                <!-- /.menu -->
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- /.messages-menu -->
         
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs"><?php foreach($_SESSION as $admission){
			  echo "$admission" ;}?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                 Student's name and course
                 
                </p>
              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class="user-footer">
                
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
         
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
 
    <!-- sidebar: style can be found in sidebar.less -->
    

      <!-- Sidebar user panel (optional) -->
   
      <!-- search form (Optional) -->
      
      <!-- /.search form -->

      <!-- Sidebar Menu -->
     
      <!-- /.sidebar-menu -->
   
    <!-- /.sidebar -->
 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 style="text-align: center;">
       <b>Clearance Form</b>
        <small></small>
      </h1>
    </section>
    <br>
    <br>

     <!-- table -->
    <div class="box box-info">
            
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <?php
				
					
						function retrieverecords()
						{
							
						
						foreach($_SESSION as $admission){
						$MyAdmission = $admission;};
						global $connection;
						$results=array();
						$selectprogress="SELECT*FROM project_progress WHERE admission = '$MyAdmission'";
						$progressresult=mysqli_query($connection,$selectprogress);
						if(mysqli_num_rows($progressresult)>0)
						{
							while($rows=mysqli_fetch_array($progressresult))
								{
									$results[]=$rows;
								}
						return $results;
						}
	
						}
						
				
				foreach(retrieverecords() as $record)
				  {
					  ?>
				
						<form action="" method="POST">
						<div class="form-group">
				<label for="fullname">Admission</label>
				<p class="form-control" id="admission"><?php echo $record['admission'];?></p>
				</div>
				<div class="form-group">
				<label for="email">Fullname</label>
				<p class="form-control" id="fullname"><?php echo $record['fullname'];?></p>
				</div>
  
				<div class="form-group">
				<label for="pwd">User Interface</label>
				<p  class="form-control" id="email"><?php echo  $record['userinterface'];?></p>
				</div>
				
				<div class="form-group">
				<label for="pwd">Functionality</label>
				<p class="form-control" id="email"><?php echo  $record['functionality'];?></p>
				</div>
				
				<div class="form-group">
				<label for="pwd">Message</label>
			    <p class="form-control" id="email"><?php echo  $record['message'];?></p>
				</div>
				</form>
				<?php
				  }
				  ?>
                 
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
       
            <!-- /.box-footer -->
          </div>

    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2019 Zalego Academy.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
 
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
</body>
</html> 
<?php

}
  
	  //  if(isset($_POST['exams']))
	  // {
		  
    //  $examquery="INSERT INTO clear(departmentid,admission,status,userid)VALUES(1,1,1,1);
    // $exam=mysqli_query($connection,$examquery);
		//  if($exam)

		//    {
		//  	   echo "<script>
		//     alert('application successful');
		// 	  window.location.href='studentportal.php';
		//     </script>
		//   ";
		//    }
		//    else{
		// 	   echo "<script>
		// 	  alert('application unsuccessful');
		//    window.location.href='studentportal.php';
		//   </script>
		//   ";
		//  }
    


   else 
   {
 

      echo"<script>
      alert('login first');
      window.location.href='index.html';
      </script>";
  
  
    }

  

?>

