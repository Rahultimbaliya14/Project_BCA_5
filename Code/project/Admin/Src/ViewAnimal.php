<?php
if(isset($_POST['submit'])){
    $id=$_POST['no'];
    $name=$_POST['name'];
    $quantity=$_POST['quantity'];
    $description=$_POST['description'];
    $quary="UPDATE gallary SET name='$name',quantity='$quantity',discription='$description' WHERE id=$id";
    $result=mysqli_query($con,$quary);
    if($result){
        echo "<script>alert('Animal Detail Updated Succesfully')</script>";
        echo "<script>window.location.replace('http://localhost:7878/project/Admin/View/viewanimal.php');</script>";
    }
}
if(isset($_POST['submit1'])){
    echo "helow";
    $id=$_POST['no'];
    echo $id;
    $quary="DELETE FROM gallary WHERE id=$id";
    $result=mysqli_query($con,$quary);
    if($result){
        echo "<script>alert('Animal Deleted Succesfully')</script>";
        echo "<script>window.location.replace('http://localhost:7878/project/Admin/View/viewanimal.php');</script>";
    }
}
?>