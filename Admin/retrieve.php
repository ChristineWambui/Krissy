<?php

include('config.php');

function retrieveadmission()
{
	global $connection;
	$select="SELECT admission FROM clear WHERE departmentid = 1";
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
