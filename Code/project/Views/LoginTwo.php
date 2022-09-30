<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://kit.fontawesome.com/0f900b0930.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width, initial-scale=1.0">
    <link rel="shortcut icon" href="../Images/LOGO.png" type="image/x-icon">
    <link rel="stylesheet" href="../Css/Book/logintwo.css">
    <title>Document</title>
</head>

<body>
    <?php if (isset($_GET['error2'])) { ?>
        <p class="error"><span>*</span><?php echo $_GET['error2']; ?><span>*</span></p>
    <?php } ?>
    <div class="container">
        <div class="bluebg">
            <div class="box official">
                <h2>You Are A Admin ?</h2>
                <Button class="adminbtn">Login</Button>
            </div>
            <div class="box admin">
                <h2>You Are A Official User ?</h2>
                <button class="officialbtn">login</button>
            </div>
        </div>
        <div class="formbx">
            <div class="form adminform">
                <form action="../Src/loginadmin.php" method="post">

                    <h3>Admin login</h3>
                    <input type="text" name="username" placeholder="Username">
                    <input type="password" name="password" placeholder="Password">
                    <input type="submit" value="login">
                </form>
            </div>

            <div class="form Officialform">
                <form action="../Src/login.php" method="post">
                    <h3>Official Login</h3>
                    <input type="text" name="username" placeholder="Username">
                    <input type="password" name="password" placeholder="Password">
                    <input type="submit" value="login">
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