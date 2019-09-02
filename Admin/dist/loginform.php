<?php

include('config.php');

if(isset($_POST['admission']) && isset($_POST['password']))
{
    $admission=$_POST['admission'];
    $password=$_POST['password'];

    $confirm="SELECT * FROM login WHERE admission='$admission' ";
    $confirmquery=mysqli_query($connection,$confirm);
    if(mysqli_num_rows($confirmquery)>0)
    {
        echo "
        <script>
        window.location.href='clearance.php';
        </script>
        ";
    }
    else
    {
        echo"<script>
        alert('You are not registered');
        window.location.href='login.php';
        </script>";
    }
}
else
{
    echo "Fill in the fields";
}


?>