<?php

include('config.php');

function retrievependingadmission()
{
	global $connection;
	$select="SELECT admission,studentname FROM clear WHERE departmentid = 4 AND status=2";
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

function retrieveclearedadmission()
{
	global $connection;
	$select="SELECT admission,studentname FROM clear WHERE departmentid = 4 AND status=1";
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

function retrievedeniedadmission()
{
	global $connection;
	$select="SELECT admission,studentname FROM clear WHERE departmentid = 4 AND status=3";
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