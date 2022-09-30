<?php
include("../includes/dbconnect.php");
session_start();
if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $_SESSION['Email'] = $email;
    if (empty($email)) {
        header("Location: ../Views/Forgetpassword.php?error=User Name Is Require");
    }
    $query = "SELECT email FROM user3 WHERE email='$email'";
    $result = mysqli_query($con, $query);
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        if ($row['email'] == $email) {
            $rand = rand(10000, 100000);
            $mail = $email;
            $sub = "Authentication For The Zoomanagment System Forget Password";
            $body = "Your One Time Password Is   {$rand}";
            $header = "From: zoomanagmentsystem@gmail.com";
            if (mail($mail, $sub, $body, $header)) {

                $_SESSION['OTP'] = $rand;
                header("Location: ../Views/Forgetpassword.php?error2=OTP Sent Succesfully");
            }
        } else {
            header("Location: ../Views/Forgetpassword.php?error=User Does Not Exist");
        }
    }
}
if (isset($_POST['otp'])) {
    $otp = $_POST['otp'];
    if (empty($otp)) {
        header("Location: ../Views/Forgetpassword.php?error2=OTP Is Require");
    } else {
        session_start();
        $session = $_SESSION['OTP'];
        if ($otp == $session) {
            header("Location: ../Views/Forgetpassword.php?forget=1");
        } else {
            header("Location: ../Views/Forgetpassword.php?error2=Wrong OTP");
        }
    }
}
if (isset($_POST['forget'])) {
    $password = $_POST['password'];
    $conpassword = $_POST['confermpassword'];
    echo $password;
    echo $conpassword;
    if (empty($password)) {
        header("Location: ../Views/Forgetpassword.php?forget=Password Is Require");
    } else if (empty($conpassword)) {
        header("Location: ../Views/Forgetpassword.php?forget=Conferm Password Is Require");
    } else {
        if ($password == $conpassword) {
            $email2 = $_SESSION['Email'];
            echo $email2;
            $haspassword = password_hash($password, PASSWORD_DEFAULT);
            $query2 = "UPDATE user3 SET password='$haspassword' WHERE email='$email2'";
            $result2 = mysqli_query($con, $query2);
            if ($result2) {
                $mail = $email;
                $sub = "Password Reset Successfully";
                $body = "Your Password Is Reset Successfully \n Thank";
                $header = "From: zoomanagmentsystem@gmail.com";
                mail($mail, $sub, $body, $heade);
                header("Location: ../Views/registeredandlogin.php?Conferm=1");
            }
        } else {
            header("Location: ../Views/Forgetpassword.php?forget=Confirm And Password Are Not Match");
        }
    }
}
