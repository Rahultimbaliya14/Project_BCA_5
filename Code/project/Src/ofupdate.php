<?php
include('../includes/dbconnect.php');
$id=$_POST['id'];
$name=$_POST['name'];
$username=$_POST['username'];
$password=$_POST['password'];
if($_FILES['file']['error']==0){
    $imagename=$_FILES['file']['name'];
    $img_upload=$_FILES['file']['tmp_name'];
    $img_ex=pathinfo($imagename,PATHINFO_EXTENSION);
    $img_ex_lc=strtolower($img_ex);   
    $allowed_ex=array("jpg","jpeg","png");
    if(in_array($img_ex_lc,$allowed_ex)){
         $haspassword=password_hash($password,PASSWORD_DEFAULT);
          $img_upload=addslashes(file_get_contents($img_upload));
        $query="UPDATE  officialuser3 SET username='$username',password='$haspassword',name='$name', image='$img_upload' WHERE id=$id";
        $result=mysqli_query($con,$query);
       if($result){
                header("Location: ../Views/OfProfile.php?first=2&id=$id");
        }
    }
    else{
        header("Location: ../Views/OfProfile.php?id=$id&error=This Type File Is Not Supported");
    }
}
else{
    header("Location: ../Views/OfProfile.php?adminprofile.php?id=$id&error=Unknown Error Is Accure On The Image");
}
?>