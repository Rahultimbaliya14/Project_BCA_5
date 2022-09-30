<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://kit.fontawesome.com/0f900b0930.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../Images/LOGO.png" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../Css/Book/searchticket.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Ticket</title>
</head>

<body class="first">
    <?php
    if (isset($_GET['error2'])) { ?>
        <form action="../Src/forgetpassword.php" method="post">
            <marquee behavior="" direction=""><span>*</span>&nbsp;Please Enter The OTP&nbsp; <span>*</span></marquee>
            <h2>Verify OTP</h3>
                <?php if (isset($_GET['error2'])) { ?>
                    <p class="error2"><span>*</span><?php echo $_GET['error2']; ?><span>*</span></p>
                <?php } ?>
                <label>Enter OTP</label>
                <input type="number" name="otp" placeholder="OTP"></i><br>
                <button type="submit">Verify</button>
        </form>
        </body>
    <?php
    } else if (isset($_GET['forget'])) { ?>
    <body class="second">
            
        <form action="../Src/forgetpassword.php" method="post">
            <!-- <marquee behavior="" direction=""><span>*</span>&nbsp;Enter New Password&nbsp; <span>*</span></marquee> -->
            <h2>Forget Password</h3>
                <?php
                if ($_GET['forget'] == 1) {
                } else {

                    if (isset($_GET['forget'])) { ?>
                        <p class="forget"><span>*</span><?php echo $_GET['forget']; ?><span>*</span></p>
                <?php }
                } ?>

                <label>New Password</label>
                <input type="text" name="password" placeholder="New Password" required></i><br>
                <label> Conferm Password</label>
                <input type="password" name="confermpassword" placeholder="Conferm Password"></i><br>
                <button type="submit" name="forget" value="go">Confirm</button>
        </form>
        </body>
    <?php
    } else {
    ?>   
        <form action="../Src/forgetpassword.php" method="post">
            <marquee behavior="" direction=""><span>*</span>&nbsp;Forget Password&nbsp; <span>*</span></marquee>
            <h2>Forget Password</h3>
                <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><i class="fa-solid fa-circle-exclamation"></i><span>*</span><?php echo $_GET['error']; ?><span>*</span></p>
                <?php } ?>
                <label>Email</label>
                <input type="email" name="email" placeholder="Email"></i><br>
                <button type="submit">Send OTP</button>
        </form>
    <?php
    }
    ?>
</body>

</html>