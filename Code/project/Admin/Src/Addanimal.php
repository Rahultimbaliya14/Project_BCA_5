<?php
$con=mysqli_connect("localhost","root","","zoo"); 
if(isset($_POST['submit']) && isset($_FILES['file'])){
 if($_FILES['file']['tmp_name']!='' && $_POST['name']!='' &&  $_POST['animalid']!='' && $_POST['qauntity']!=''){
    $file=$_FILES['file'];
    $name=$_POST['name'];
    $number=$_POST['animalid'];
    $quantity=$_POST['qauntity'];
    $discription=$_POST['discription'];
    if($_FILES['file']['error']==0){
        $imagename=$_FILES['file']['name'];
        $img_upload=$_FILES['file']['tmp_name'];
        $img_ex=pathinfo($imagename,PATHINFO_EXTENSION);
        $img_ex_lc=strtolower($img_ex);   
        $allowed_ex=array("jpg","jpeg","png");
        if(in_array($img_ex_lc,$allowed_ex)){
              $img_upload=addslashes(file_get_contents($img_upload));
              $quary="INSERT INTO gallary(id,name,quantity,discription,image) VALUE('$number','$name','$quantity','$discription','$img_upload')";
               $result=mysqli_query($con,$quary);
               if($result){
                echo "<script>alert('Animal Added Successfully');</script>";
                echo "<script>window.location.replace('http://localhost:7878/project/Admin/View/addanimal.php');</script>";
                
              }
              else
              {
                echo "hello";
              }
              
        }
        else{
            header("Location: ../View/addanimal.php?error=This Type File Is Not Supported");
        }

    }
    else{
        header("Location: ../View/addanimal.php?error=Unknown Eroor Is Occure In The Image");
    }
 }
 else{
    if($_FILES['file']['tmp_name']==false){
        header("Location: ../View/addanimal.php?error=The Pucture is require");
    }
    if($_POST['name']==false){
        header("Location: ../View/addanimal.php?error=The Animal Name  is require");
    }
    if($_POST['animalid']==false){
        header("Location: ../View/addanimal.php?error=Animal Number is require");
    }
    if($_POST['qauntity']==false){
        header("Location: ../View/addanimal.php?error=Number Of Animal Feild is require");
    }
    if($_POST['discription']==false){
        header("Location: ../View/addanimal.php?error=Description is require");
    }
 }
}
else{
    echo "hello";
}
 ?>