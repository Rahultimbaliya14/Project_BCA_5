<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../Css/User/addofficialuser.css">
    <title>Document</title>
</head>
<body>
    <?php
    include("../include/Navbar.php");
    ?>
    <?php if(isset($_GET['error'])){?>
        <center>
                <h3 style="color:red; font-style:italic;"><?php echo $_GET['error'];?></h3></center>
       <div class="container" style="border-color: red;">
        <form action="../Src/Addadmin.php" method="post" enctype="multipart/form-data">
                    <div class="field">
                    <i class="bi bi-person-circle"></i>
            <h2>Add Admin User</h2>
            <br>
            
            <?php
            }
            ?>
            <br>
            <input type="text" name="username" id="" placeholder="Username" required>
            <input type="text" name="name" id="" placeholder="Name">
            <input type="password" name="password" id="" placeholder="Password" required>
            <select name="role" id="" required>
                <option value="none">
                    ----- Select Admin Role -----
                </option>
                <option value="yes">
                       Super Admin
                </option>
                <option value="no">
                     Admin
                </option>
            </select>
            <input type="file" name="file" id="file" placeholder="Upload Image" required>
            <input type="submit" name="submit" value="Add User">
        </form>
        </div>
       </div>
    
    <?php
    include("../include/footer.php");
    ?>
</body>
</html>