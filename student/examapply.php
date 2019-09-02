<?php

include('config.php');

session_start();

    if(isset($_SESSION['admission']))
        {
            foreach($_SESSION as $admission){
                $thevalue = $admission;
            }
        }
		
	
	
function apply()
{	
	global $admission;
	global $connection;
	$retrievename = "SELECT fullname FROM student WHERE admission ='$admission'";
	$namequery = mysqli_query($connection,$retrievename);
	$names = mysqli_fetch_array($namequery);
	foreach ($names as $name){}
	
	
	
	$applyfirst ="INSERT INTO clear(departmentid,admission,datetime,status,userid,studentname)VALUES(2,'".$admission."',NOW(),2,2,'".$name."')";
	$projectapplyfirst = mysqli_query($connection,$applyfirst)or die(mysqli_error($connection));
	if($projectapplyfirst)
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

function update()
{
	global $admission;
	global $connection;
	$update ="UPDATE clear SET status=2 WHERE admission=$admission and departmentid=2";
	$projectupdate = mysqli_query($connection,$update)or die(mysqli_error($connection));
	if($projectupdate)
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

$selectQuery = "SELECT * FROM clear WHERE admission=$thevalue  and departmentid=2";
$selectResults = mysqli_query($connection,$selectQuery);


	if (mysqli_num_rows ($selectResults)>0)
    {
    	update();
    }
    else
    {
    	apply();
    } 

?>