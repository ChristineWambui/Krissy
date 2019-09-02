<?php

include('config.php');


    $username=$_POST['username'];
    $password=$_POST['password'];

    $confirm="SELECT * FROM users	WHERE username='$username'  AND password = '$password'";
    $confirmquery=mysqli_query($connection,$confirm);
    if(mysqli_num_rows($confirmquery)>0)
   {
  

    session_start();
            $_SESSION['username'] = $username;

    $rolequery="SELECT role FROM users WHERE username='$username' ";
    $selectrole=mysqli_query($connection,$rolequery);
	$row = mysqli_fetch_array($selectrole);
	$role=$row[0];

     

    switch($role)
    {
        case 1:
        echo "
        <script>
        window.location.href='project.php';
        </script>
        ";
        break;

        case 2:
        echo "
        <script>
        window.location.href='exam.php';
        </script>
        ";
        break;

        case 3:
        echo "
        <script>
        window.location.href='accounts.php';
        </script>
        ";
        break;

        case 4:
        echo "
        <script>
        window.location.href='adminstration.php';
        </script>
        ";
        break;

        default:
        echo"
        <script>
        alert('You are not registered');
        window.location.href='index.html';
        </script>";
        break;


    }

    }

    else
    {
        echo"<script>
        alert('You are not registered');
        window.location.href='index.html';
        </script>";
    }




?>