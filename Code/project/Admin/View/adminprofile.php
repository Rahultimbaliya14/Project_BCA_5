<?php
include('../include/dbconnect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/addminprofile.css">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    if(isset($_GET['first'])){
        $id=$_GET['id'];
        $query="SELECT * FROM ADMIN WHERE id=$id";
        $result=mysqli_query($con,$query);
         $row=mysqli_fetch_assoc($result);
         if($_GET['first']==2){
            echo "<script>alert('Profile Updated Successfully')</script>";
            // header("Location: ../View/adminprofile.php?first=1&id=$id&mass=2");
            echo "<script>window.location.replace('http://localhost:7878/project/Admin/View/adminprofile.php?first=1&id=$id');</script>";
          }
         
         
    ?>
    <form action="./adminprofile.php"> 
        <div class="profile">
        
            <?php
            echo '<img  src="data:image;base64,'.base64_encode($row['image']).'" height="100%" width="100%"/>';
            ?>
        <div class="flex">
            <div class="inputtype">
                <div class="box">
                    <span>ID:</span>
                          <input type="text" name="id" value="<?php echo $row['id'];?>" readonly>
                         
                </div>
                <div class="box">
                    <span>Name:</span>
                          <input type="text" name="name" value="<?php echo $row['name'];?>" readonly>
                          
                </div>
                <div class="box">
                    <span>Usename:</span>
                          <input type="text" name="name" value="<?php echo $row['username'];?>" readonly>
                          
                </div>
                <div class="box">
                    <span>Password</span>
                          <input type="Password" name="name" value="<?php echo $row['password'];?>" readonly>
                          
                </div>
                <div class="button">
                    <input type="submit" name="button" value="Update & Edit" readonly> 
                </div>
            </div>
            
        </div>
    </form>
    </div>
    <?php
    }
    else
    {
            $id=$_GET['id'];
            $query="SELECT * FROM ADMIN WHERE id=$id";
            $result=mysqli_query($con,$query);
             $row=mysqli_fetch_assoc($result);
        ?>
        <form action="../Src/Upadateadminprofile.php" method="post" enctype="multipart/form-data"> 
        <div class="profile">
        
        <?php
            echo '<img  src="data:image;base64,'.base64_encode($row['image']).'" height="100%" width="100%"/>';
            ?>
            <?php
              if(isset($_GET['error'])){?>
                <p><span>&#9938;&nbsp;&nbsp;</span><?php echo $_GET['error'];?></p>
<?php
              }
            ?>
        <div class="flex">
            <div class="inputtype">
                <div class="box1">
                    <span>ID:</span>
                          <input type="text" name="id" value="<?php echo $row['id'];?>" readonly>
                         
                </div>
                <div class="box1">
                    <span>Name:</span>
                          <input type="text" name="name" value="<?php echo $row['name'];?>" placeholder="Name" required>
                          
                </div>
                <div class="box1">
                    <span>Usename:</span>
                          <input type="text" name="username" value="<?php echo $row['username'];?>" placeholder="Username" required>
                          
                </div>
                <div class="box1">
                    <span>Password</span>
                          <input type="Password" name="password"  value="<?php echo $row['password'];?>" placeholder="Password"  required>
                          
                </div>
                <div class="box1">
                    <span>Image</span>
                          <input type="file" name="file" id="file" required>
                          
                </div>
                <div class="button">
                    <input type="submit" name="button" value="Update"> 
                </div>
            </div>
          
        </div>
    </form>
    </div>
        <?php
    }
    ?>
</body>
</html>