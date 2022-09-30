<?php
session_start();
if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
    $id=$_SESSION['id'];
    include('../includes/dbconnect.php');
    include('../Src/official.php');
?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="../Images/LOGO.png" type="image/x-icon">
        <link rel="stylesheet" href="../Css/Book/office.css">
        <title>Official Booking</title>
    </head>

    <body>
        <div class="nav">
            <div class="image">
                <img src="../Images/log.png" alt="The Lion">
            </div>
            <div class="content">
                <div class="content1">
                    <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hellow  <?php echo $_SESSION['name']; ?></h1>
                </div>
                <div class="content1">
                    <a href="../Views/OfProfile.php?id=<?php echo $id?>&first=1">Profile</a>
                    <a href="../Views/index.php?t=1">Logout</a>
                </div>
               
            </div>
            <script>
            </script>
        </div>
        <center>
            <div class="container_form">
                <form action="#" method="post">
                    <img class="image1" src="../Images/keylogo.jpg" alt="">
                    <h2 class="hading">Official Booking</h2>
                    <?php if (isset($_GET['error'])) { ?>
                        <p class="error"><span>*</span><?php echo $_GET['error']; ?><span>*</span></p>
                    <?php } ?>
                    <div class="field">
                        <p> Name:</p>
                        <input type="text" placeholder="Name" name="name" id="name">
                    </div>
                    <div class="field">
                        <p> Email:</p>
                        <input type="email" placeholder="Email" name="email" id="email">
                    </div>
                    <div class="field">
                        <p>Date:</p>
                        <input type="date" id="date" name="date" id="date">
                    </div>
                    <div class=" select1">
                        <p>Indian:</p>
                        <select name="national" id="SE">
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div class="select1">
                        <p>Total Adults:</p>
                        <select name="adults_total" id="SE">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                        </select>
                    </div>
                    <div class="select1">
                        <p>Total Children:</p>
                        <select name="chil_total" id="SE">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                        </select>
                        <input type="hidden" name="ticketno" id="ticketno" value="<?php echo mt_rand(0, 10000) ?>">
                    </div>
                    <div class="btn">
                        <button type="submit" name="submit" id="submit">Book</button>
                    </div>
                </form>
            </div>
            </div>
        </center>
    </body>

    </html>
<?php
} else {
    header("Location: LoginTwo.php?error=Login is Require");
}
