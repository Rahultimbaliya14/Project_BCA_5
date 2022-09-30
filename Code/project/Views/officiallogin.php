<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="../Images/LOGO.png" type="image/x-icon">
    <link rel="stylesheet" href="../Css/Book/offficeallogin.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Official Login</title>
</head>

<body>

    <form action="../Src/login.php" method="post">
        <marquee behavior="" direction=""><span>*</span>&nbsp;This Login Only For Official User&nbsp; <span>*</span></marquee>
        <h2>LOGIN</h3>
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><span>*</span><?php echo $_GET['error']; ?><span>*</span></p>
            <?php } ?>
            <label>User Name</label>
            <input type="password" name="username" placeholder="User Name"><br>
            <i class='fa fa-key'></i>
            <label>Password</label>
            <input type="password" name="password" placeholder="Password"><br>
            <i class='fa fa-key'></i>
            <button type="submit">Login</button>
    </form>
    <a href="../Admin/View/Logine.php">The Direction</a>
</body>

</html>