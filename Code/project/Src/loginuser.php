<?php
session_start();
include('../includes/dbconnect.php');

if(($_POST['email']!='') && ($_POST['password']!='')){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $fatch="SELECT * FROM user3 WHERE email='$email' or password='$password'";
            $fatched=mysqli_query($con,$fatch);
            if($fatched){
                $row1=mysqli_fetch_assoc($fatched);
                $haspassword=$row1['password'];
                if($row1['email'] === $email && password_verify($password,$haspassword)){
                    $_SESSION['id']=1;
                    $_SESSION['userid']=$row1['id'];
                    $_SESSION['password']=$row1['password'];
                    $_SESSION['name']=$row1['name'];
                    $_SESSION['email']=$row1['email'];
                    $_SESSION['name']=$row1['name'];
                    header("Location: ../Views/Book.php?s=0");
                    exit();
                }
                else{
                        header("Location: ../Views/registeredandlogin.php?error2= Incorrect UserName And Password");
                    exit();
                }
            }
}
else{
     if($_POST['email']!=''){
         header("Location: ../Views/registeredandlogin.php?error2=Password Is Require");
            exit();
    }
    else if($_POST['password']!=''){
        header("Location: ../Views/registeredandlogin.php?error2=Email Is Require");
           exit();
    }
    else{
        header("Location: ../Views/registeredandlogin.php?error2=Email And Password Is Require");
           exit(); 
    }
    
}
?>