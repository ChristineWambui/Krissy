<?php

include('config.php');

session_start();

    if(isset($_SESSION['admission']))
        {
            foreach($_SESSION as $admission){
                $thevalue = $admission;
            }
        }
		
		
	$select="SELECT * FROM clear WHERE departmentid = 1 AND admission = $admission";
	$selectresult=mysqli_query($connection,$select);
	if(mysqli_num_rows($selectresult)>0)
	{
		
		$update ="UPDATE clear SET status = 2 WHERE departmentid = 1 AND admission = $admission";
		$updatequery = mysqli_query($connection,$update)or die(mysqli_error($connection));
		if($updatequery)
		{	echo 
				"<script>
				window.location.href ='studentportal.php';
				</script>";
		}
	}
	
else{

	$apply ="INSERT INTO clear(departmentid,admission,userid,datetime,status)VALUES(1,'".$thevalue."',1,NOW(),2)";
	$project = mysqli_query($connection,$apply)or die(mysqli_error($connection));

	if($project)
	{
    echo "<script>
	window.location.href = 'studentportal.php';
	</script>";
	
	

	}
	else
	{
    echo "failed";
	}
}

?>