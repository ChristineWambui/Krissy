<?php

include('config.php');

$message = $_POST['message'];

$insertmessage = "INSERT INTO notifications(admission,message,status,date,departmentid)VALUES('$denyadmission','$message',1,NOW(),1)";
$insertresults = mysqli_query($connection,$insertmessage);

if($insertresults)
{
	
	echo
	"<script>
	alert('successful');
	window.location.href ='project.php';
	</script>";
}
else
{
	
	
	echo
	"<script>
	alert('unsuccessful');
	window.location.href ='project.php';
	</script>";
	
}

?>