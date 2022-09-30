<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://kit.fontawesome.com/0f900b0930.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width, initial-scale=1.0">
    <link rel="shortcut icon" href="../Images/LOGO.png" type="image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../Css/regiserandlogin.css">
    <title>Document</title>
</head>

<body>
    <?php if (isset($_GET['error2'])) { ?>
        <p class="error"><span>*</span><?php echo $_GET['error2']; ?><span>*</span></p>
    <?php } ?>
    <?php if (isset($_GET['Conferm'])) { ?>
        <script>
            alert("Password Reset Sucessfully");
            window.location.replace('http://localhost:7878/project/Views/registeredandlogin.php');
        </script>
    <?php } ?>
    <div class="container">
        <div class="bluebg">
            <div class="box official">
                <h2><i class="fa-regular fa-registered"></i>Registerd User ?</h2>
                <Button class="adminbtn">Login</Button>
            </div>
            <div class="box admin">
                <h2>You Have A Not Account ?</h2>
                <h2>Please Create The Acount </h2>
                <button class="officialbtn">Register</button>
                <br>
                <br>
                <h2>You Are A Official User ?</h2>
                <a href="../Views/LoginTwo.php  ">Click Hare</a>
            </div>

        </div>

        <div class="formbx">
            <div class="form adminform">
                <form action="../Src/loginuser.php" method="post">

                    <h3>User Login</h3>
                    <div class="align">
                        <i class="fa-regular fa-envelope"></i><input type="email" name="email" placeholder="Email">
                    </div>
                    <div class="align">
                        <i class="fa-solid fa-key"></i><input type="password" name="password" placeholder="Password">
                    </div>
                    <div class="btns">
                        <input type="submit" value="Login">
                    </div>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Forget Password <a href="Forgetpassword.php">Click Hare</a></p>
                </form>
            </div>

            <div class="form Officialform" id="timbaliya">
                <form action="../Src/useregistration.php" method="get">
                    <h3>User Registration</h3>
                    <input type="hidden" name="send" value="1">
                    <input type="text" name="name" placeholder="Name" required>
                    <input type="email" name="email" placeholder="Email (OTP Also Send To This Email)" required>
                    <input type="text" name="mobileno" placeholder="Mobile No" required>
                    <textarea name="address" id="address" cols="25" rows="3" placeholder="Address" required></textarea>
                    <input type="password" name="password" placeholder="Password" required>
                    <input type="password" name="confermpassword" placeholder=" Confirm Password" required>
                    <input type="submit" value="Register">
                </form>
            </div>
        </div>
    </div>
    <script>
        const adminbtn = document.querySelector('.adminbtn');
        const officialbtn = document.querySelector('.officialbtn');
        const formbx = document.querySelector('.formbx');
        const body = document.querySelector('body');

        officialbtn.onclick = function() {
            formbx.classList.add('active');
            body.classList.add('active');

        }
        adminbtn.onclick = function() {
            formbx.classList.remove('active');
            body.classList.remove('active');
        }
    </script>
    <?php if (isset($_GET['error'])) { ?>
        <p class="error"><i class="fa-solid fa-triangle-exclamation"></i><span>*</span><?php echo $_GET['error']; ?><span>*</span></p>
    <?php } ?>
</body>

</html>