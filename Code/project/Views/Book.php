<?php
include('../includes/dbconnect.php');
include('../Src/book.php');
if ($_SESSION['id'] == 0) {
    header("Location: ../Views/registeredandlogin.php?error2=Login Or Registration Are Require For Book A Ticket");
} else {
    $_SESSION['id'] == 2;
    if ($_GET['s'] == 1){
        session_destroy();
        header('location: index.php');
    }
}
$username = $_SESSION['name'];
$email = $_SESSION['email'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../Images/LOGO.png" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Domine:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../Css/Book/book.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
</head>

<body>
    <?php

    include('../includes/navbar.php')
    ?>
    <center>
        <div class="serchoffice">
            <p>Serch The Ticket <a href="serchticket.php">Click Hare</a></p>
            <p> <a href="Book.php?s=1">Logout</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="Profile.php?email=<?php echo $email;?>">Profile</a></p>

        </div>
    </center>

    <center>
        <div class="container">
            <div class="container_detail">
                <br>
                <h2 class="hading">Time Open</h2>
                <h3 class="day"> Monday - Sunday</h3>
                <p> 7am - 6pm</p>

                <br>
                <p>------------------------</p>
                <h2 class="hading">Price</h2>
                <h4 class="price">Adults - <spam>&#8377;<?php echo $row['adults'] ?></spam>
                </h4>
                <h4 class="price">Children- <spam>&#8377;<?php echo $row['child'] ?></spam>
                </h4>

                <h4 class="price">Adults(Foreners) -<spam>$<?php echo $row['fadults'] ?></spam>
                </h4>
                <h4 class="price">Children(foreners) -<spam>$<?php echo $row['fchild'] ?></spam>
                </h4>

                <br>

            </div>

            <div class="container_form">
                <form action="#" method="post">
                    <h2 class="hading">Online Booking</h2>
                    <?php if (isset($_GET['error'])) { ?>
                        <p class="error"><i class="fa-solid fa-triangle-exclamation"></i><span>*</span><?php echo $_GET['error']; ?><span>*</span></p>
                    <?php } ?>
                    <div class="field">
                        <p>Your Name:</p>
                        <input type="text" placeholder="Your Name" name="name" id="name" value="<?php echo $username ?>" required>
                    </div>
                    <div class="field">
                        <p>Your Email:</p>
                        <input type="email" placeholder="Your Email" name="email" id="email" value="<?php echo $email ?>" readonly>
                    </div>
                    <div class="field">
                        <p>Date:</p>
                        <input type="date" id="date" name="date" id="date" placeholder=" "required>
                    </div>
                    <div class=" select1">
                        <p>You Are Indian:</p>
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
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                        <input type="hidden" name="ticketno" id="ticketno" value="<?php echo mt_rand(0, 10000) ?>">
                    </div>
                    <div class="btn">
                        <button type="submit" name="submit" id="submit"><i class="fa-brands fa-wolf-pack-battalion"></i>Book</button>
                    </div>
                </form>
            </div>
        </div>
        <?php
        if (isset($_POST['submit'])) { ?>
            <center>
                <p style="font-size:40px ;">:&nbsp; Ticket &nbsp;:</p>
            </center>
            <div class="massage">
                <div class="img">
                    <img src="..//Images/multy" alt="" class="ticketimage">
                </div>
                <div class="ticketinfo">
                    <?php
                    if ($bookc) {
                        ?>
                       <script>alert('Your Ticket Is Booked. Please Scroll Down To Show Your Ticket\nAlso Send Copy Of Ticket To Your Email')</script> 
                         
                        <label class="atri">Ticket No : <?php echo  $tickitno; ?> </label>

                        <label class="atri">Name : <?php echo  $nm; ?> </label>
                        <label class="atri">Email : <?php echo  $email; ?> </label>
                        <label class="atri">Adults : <?php echo  $adults; ?> </label>
                        <label class="atri">Children: <?php echo  $child; ?> </label>
                        <label class="atri">Indian : <?php echo  $india; ?> </label>
                        <?php
                        if ($india == 'Yes') { ?>
                            <label class="atri"> Total Rs: <?php echo  $prise; ?> </label>
                        <?php
                        } else { ?>
                            <label class="atri"> Total $: <?php echo  $prise; ?> </label>

                        <?php

                        }
                        ?>
                <?php
                    } else {
                        echo "data is noty insserted";
                    }
                }
                ?>
                </div>
            </div>
    </center>
    <?php
    include('../includes/footer.php');
    ?>

</body>

</html>
<?php
?>