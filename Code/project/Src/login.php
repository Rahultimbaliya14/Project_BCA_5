<?php
session_start();
include('../includes/dbconnect.php');

if(isset($_POST['username']) && isset($_POST['password'])){
        $uname=$_POST['username'];
        $pass=$_POST['password'];
        if (empty($uname)){
            header("Location: ../Views/LoginTwo.php?error= User Name Is Require");
             exit();
        }
        else if (empty($pass))
        {
         
            header("Location: ../Views/LoginTwo.php?error= Password Is Require");
            exit();
        }
        else{
            $fatch="SELECT * FROM officialuser3 WHERE username='$uname'";
            $fatched=mysqli_query($con,$fatch);
            if($fatched){
                $row1=mysqli_fetch_assoc($fatched);
                $haspassword=$row1['password'];
                if($row1['username'] === $uname && password_verify($pass,$haspassword)){
                    $_SESSION['username']=$row1['username'];
                    $_SESSION['password']=$row1['password'];
                    $_SESSION['name']=$row1['name'];
                    $_SESSION['id']=$row1['id'];
                    if($row1['role']=='Ticket Booker'){
                    header("Location: ../Views/official.php");
                    exit();
                    }
                    else{
                        header("Location: ../Views/officialtc.php");   
                    }
                }
                else{
                    header("Location: ../Views/LoginTwo.php?error= Incorrect UserName And Password");
                exit();
                }
            }
            else{
                header("Location: ../Views/LoginTwo.php?error= Some Technical Issue Is Accure");
                exit();
            }
        }
}
else{
}

