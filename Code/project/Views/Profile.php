<?php
include('../includes/dbconnect.php');
$email=$_GET['email'];
$query="SELECT * FROM user3 WHERE email='$email'";
$result=mysqli_query($con,$query);
$row= mysqli_fetch_array($result)
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/Profile.css">
   <title>update profile</title>
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
if(isset($_POST['update_profile'])){?>
    <div class="update-profile">
    <form action="#" method="post" enctype="multipart/form-data">
    <div class="flex">
             <div class="inputBox">
                <span>ID:</span>
                <input type="text" name="" value="<?php echo $row['id'];?>" class="box" readonly>
                <span>Name:</span>
                <input type="text" name="name" value="<?php echo $row['name'];?>"
                 class="box" required>
                <span>Email :</span>
                <input type="email" name="update_email" value="<?php echo $row['email'];?>" class="box" readonly required>
             </div>
                <div class="inputBox">
                <span>Mobile:</span>
                <input type="text" name="mobile" class="box" value="<?php echo $row['mobileno'];?>" required>
                <span>Address:</span>
                <input type="text" name="Address" class="box" value="<?php echo $row['address'];?>" required>
             </div>
          </div>
          <input type="submit" value="Update" name="submit" class="btn">
       </form>
    </div>
    <?php
}
else{?>

<div class="update-profile">
<form action="#" method="post" enctype="multipart/form-data">
<div class="flex">
         <div class="inputBox">
            <span>ID:</span>
            <input type="text" name="update_name" value="<?php echo $row['id'];?>" class="box" readonly>
            <span>Name:</span>
            <input type="text" name="update_email" value="<?php echo $row['name'];?>" class="box" readonly>
            <span>Email :</span>
            <input type="text" name="update_email" value="<?php echo $row['email'];?>" class="box" readonly>
         </div>
         <div class="inputBox">
            <span>Mobile:</span>
            <input type="number" name="new_pass"  value="<?php echo $row['mobileno'];?>" class="box" readonly>
            <span>Address:</span>
            <input type="text" name="new_pass" value="<?php echo $row['address'];?>" class="box" readonly>
         </div>
      </div>
      <input type="submit" value="Update Profile" name="update_profile" class="btn">
   </form>
</div>
<?php
}
if(isset($_POST['submit'])){
     $name=$_POST['name'];
     $mobile=$_POST['mobile'];
     $address=$_POST['Address'];
     $query1="UPDATE user3 SET name='$name',mobileno=$mobile,address='$address' WHERE email='$email'";
     $result=mysqli_query($con,$query1);
     if($result){
         echo "<script>alert('Price Updated Succesfully');
         window.location.replace('http://localhost:7878/project/Views/Profile.php?email=$email');
     </script>";
     }
}
?>
</body>
</html>