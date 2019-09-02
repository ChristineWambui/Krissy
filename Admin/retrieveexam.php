<?php

include('config.php');

function retrieveadmission()
{
	global $connection;
	$select="SELECT admission,studentname FROM clear WHERE departmentid = 2";
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
?>
