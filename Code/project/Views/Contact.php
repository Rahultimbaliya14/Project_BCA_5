<?php
session_start();
if (isset($_SESSION['name'])) {
    $username = $_SESSION['name'];
    $email = $_SESSION['email'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="../Images/LOGO.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/0f900b0930.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ms+Madi&family=Qwitcher+Grypen&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../Css/Contact/contact.css">
    <title>Document</title>
</head>

<body>
    <?php
    include('../includes/navbar.php');
    ?>
    <div class="contact">
        <div class="content">
            <h2>Contact-Us</h2>
            <p>While we're good with smoke signals , there are simpler ways for us to get in touch and answer your questions</p>
        </div>
        <div class="container">
            <div class="contactinfo">
                <div class="box">
                    <div class="icon">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div class="text">
                        <h3>
                            Address
                        </h3>
                        <p>Rajkot Highway, Dolatpara, Junagadh, Gujarat 362001</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div class="text">
                        <h3>
                            Phone
                        </h3>
                        <p>+91 635-3647-592</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div class="text">
                        <h3>
                            Email
                        </h3>
                        <p>Zoomanagmentsystem@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="contactform">
                <form action="../Src/contact.php" method="post">
                    <h2>Send Massage</h2>
                    <div class="inputbox">
                        <input type="text" name="name" id="" value="<?php
                                                                    if (isset($_SESSION['name'])) {
                                                                        echo $username;
                                                                    } ?>" required>
                        <h3>Full Name</h3>
                    </div>
                    <div class="inputbox">
                        <input type="Email" name="email" id="" value="<?php
                                                                        if (isset($_SESSION['name'])) {
                                                                            echo $email;
                                                                        } ?>" required>
                        <h3>Email</h3>
                    </div>
                    <div class="inputbox">
                        <textarea name="massage" id="" cols="15" rows="4" required placeholder="Enter Some Text ........"></textarea>
                        <h3>Type Your Massage</h3>
                    </div>
                    <div class="inputbox">
                        <input type="submit" value="Send">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php
    include('../includes/footer.php')
    ?>
</body>

</html>