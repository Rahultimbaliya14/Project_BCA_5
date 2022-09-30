<?php
include('../include/dbconnect.php');
$query1="SELECT username FROM officialuser3";
$result1=mysqli_query($con,$query1);
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $name=$_POST['name'];
    $password=$_POST['password'];
    $role=$_POST['role'];
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number    = preg_match('@[0-9]@', $password);
    $specialChars = preg_match('@[^\w]@', $password);
        if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
            header("Location: ../View/Addoficialuser.php?error=Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character");
            exit();
        } 
    if($role=='none'){
        header("Location: ../View/Addoficialuser.php?error=Please Select The User Role");
        exit();
    }
    else{
    while($row=mysqli_fetch_array($result1)){
        if($row['username']==$username){
            header("Location: ../View/Addoficialuser.php?error=Username Is Already Exist");
            exit();
        }
    }
    if($_FILES['file']['error']==0){
        $imagename=$_FILES['file']['name'];
        $img_upload=$_FILES['file']['tmp_name'];
        $img_ex=pathinfo($imagename,PATHINFO_EXTENSION);
        $img_ex_lc=strtolower($img_ex);  
        $allowed_ex=array("jpg","jpeg","png");
        if(in_array($img_ex_lc,$allowed_ex)){
              $img_upload=addslashes(file_get_contents($img_upload));
              $haspassword=password_hash($password,PASSWORD_DEFAULT);
              $quary="INSERT INTO officialuser3(username,password,name,image,role) VALUES('$username','$haspassword','$name','$img_upload','$role')";
               $result=mysqli_query($con,$quary);
               if($result){
                echo "<script>alert('User Added Successfully');</script>";
                echo "<script>window.location.replace('http://localhost:7878/project/Admin/View/Addoficialuser.php');</script>";
                
              }
              
        }
        else{
            header("Location: ../View/Addoficialuser.php?error=This Type File Is Not Supported");
            exit();
        }
}
}
}
?>