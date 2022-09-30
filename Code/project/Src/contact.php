<?php
   include('../includes/dbconnect.php');
   $name=$_POST['name'];
   $email=$_POST['email'];
   $massage=$_POST['massage'];
  $query="INSERT INTO contact(name,email,massage) VALUES('$name','$email','$massage')";
  $result=mysqli_query($con,$query);
   if($result){
    echo "<script>alert('Your Query Is Submited Successfully');</script>";
    echo "<script>window.location.replace('http://localhost:7878/project/Views/Contact.php');</script>";
   }
   else{
    echo "<script>alert('Some Technical Error Is Accure');</script>";
    echo "<script>window.location.replace('http://localhost:7878/project/Views/Contact.php');</script>";
   }
?>