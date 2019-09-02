<?php

include('config.php');




        $admission=$_POST['admission'];
        $password=$_POST['password'];


        $confirm="SELECT * FROM student  WHERE admission='$admission' ";
        $confirmquery=mysqli_query($connection,$confirm);
        if(mysqli_num_rows($confirmquery)>0)
        {
        
           session_start();
            $_SESSION['admission'] = $admission;
            
            echo "
            <script>
            window.location.href='studentportal.php';
            </script>
            ";
        }
        else
        {
            echo"<script>
            alert('You are not registered');
            window.location.href='index.html';
            </script>";
        }
?>