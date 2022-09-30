<?php
session_start();
include('../includes/dbconnect.php');

if(isset($_POST['username']) && isset($_POST['password'])){
        $uname=$_POST['username'];
        $pass=$_POST['password'];
        echo $uname;
        if (empty($uname)){
            header("Location: ../Views/LoginTwo.php?error2= User Name Is Require");
             exit();
        }
        else if (empty($pass))
        {
         
            header("Location: ../Views/LoginTwo.php?error2= Password Is Require");
            exit();
        }
        else{
            $fatch="SELECT * FROM Admin WHERE username='$uname'";
            $fatched=mysqli_query($con,$fatch);
            if($fatched){
                $row1=mysqli_fetch_assoc($fatched);
                $haspassword=$row1['password'];
                if($row1['username'] === $uname && password_verify($pass,$haspassword)){
                    $_SESSION['usernameadmin']=$row1['username'];
                    $_SESSION['passwordadmin']=$row1['password'];
                    $_SESSION['nameadmin']=$row1['name'];
                    $_SESSION['idadmin']=$row1['id'];
                    $_SESSION['imageadmin']=$row1['image'];
                    $_SESSION['su']=$row1['su'];
                    header("Location: ../Admin/View/Home.php");
                    exit();
                }
                else{
                    header("Location: ../Views/LoginTwo.php?error2= Incorrect UserName And Password");
                exit();
                }
            }
            else{
                header("Location: ../Views/LoginTwo.php?error2= Some Technical Issue Is Accure");
                exit();
            }
        }
}
else{
}
