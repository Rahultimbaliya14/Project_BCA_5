
<?php
session_start();
include('../includes/dbconnect.php');
if(isset($_GET['rand']) || isset($_GET['rand1'])){
   $otp=$_GET['otp'];
   $rand=$_SESSION['rand'];
   $name=$_GET['name'];
   $email=$_GET['email'];
   $mobileno=$_GET['mobileno'];
   $address=$_GET['address'];
   $password=$_GET['confermpassword'];
   if($otp==$rand){
      $haspassword=password_hash($password,PASSWORD_DEFAULT);
    $query="INSERT INTO user3(name,email,mobileno,address,password) VALUES('$name','$email',$mobileno,'$address','$haspassword')";
       $done=mysqli_query($con,$query);  
       if($done){
       echo "<script> alert('Account Created Succesfully');</script>";
       echo "<script>window.location.replace('http://localhost:7878/project/Views/registeredandlogin.php');</script>";
   }
}
else{
      header("location: useregistration.php?email=$email&password=$password&name=$name&mobileno=$mobileno&address=$address&confermpassword=$password&send=0&error=Wrong OTP");
}
}
?>  