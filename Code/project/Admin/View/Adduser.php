<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="../Css/User/adduser.css">
    <title>Document</title>
</head>
<body>
    <?php
    include("../include/Navbar.php");
    ?>
    <form action="../Src/Adduser.php" method="get">
    <div class="field">
        <h2><u>Add User</u></h2>
        <?php if(isset($_GET['error'])){?>
        <p>*<?php echo $_GET['error'];?>*</p>
        <?php
        }
        ?>
         <input type="text" name="Name" placeholder="Enter Name">
         <input type="email" name="email" placeholder="Enter Email">
         <input type="number" name="mobile" placeholder="Enter Mobile No">
         <textarea name="address" id="" name="address" placeholder="Enter Address" cols="30" rows="10"></textarea>
         <input type="password" name="password" placeholder="Enter Password">
         <input type="submit" name="submit" id="button" Value="AddUser">
         </form>
    </div>
    <?php
    if(isset($_GET['s'])){
        echo "<script>alert('User Added Succesfully')</script>";
        echo "<script>window.location.replace('http://localhost:7878/project/Admin/View/Adduser.php');</script>";
    }
    include("../include/footer.php");
    ?>
</body>
</html>