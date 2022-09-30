<?php
session_start();
if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
    $id=$_SESSION['id'];
    include('../includes/dbconnect.php');
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="../Images/LOGO.png" type="image/x-icon">
        <link rel="stylesheet" href="../Css/Book/office.css">
        <link rel="stylesheet" href="../Css/Book/ticket.css">
        <title>Ticket Check</title>
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
                <form action="#" method="get">
                    <img class="image1" src="../Images/keylogo.jpg" alt="">
                    <h2 class="hading">Ticket Check</h2>
                    <?php if (isset($_GET['error'])) { ?>
                        <p class="error"><span>*</span><?php echo $_GET['error']; ?><span>*</span></p>
                    <?php } ?>
                    <div class="field">
                        <p>Ticket No</p>
                        <input type="number" placeholder="Ticket No" name="Ticket" id="name" required>
                    </div>
                    <div class="btn">
                        <button type="submit" name="submit" id="submit" value="search">Search</button>
                    </div>
                </form>
            </div>
            </div>
            <?php
            if(isset($_GET['submit'])){
                $ticketno=$_GET['Ticket'];
                $fatch="SELECT * FROM book3 WHERE ticketno=$ticketno";
                $fatched=mysqli_query($con,$fatch);
                if(mysqli_num_rows($fatched)>0){
                    $row1=mysqli_fetch_array($fatched)
                    ?>
                    
    <center>
    <p style="font-size:40px" color="white" ;>:&nbsp; Ticket &nbsp;:</p>
  </center>
  <div class="massage">
    <div class="img">
      <img src="..//Images/multy" alt="" class="ticketimage">
    </div>
    <?php
    if ($row1['status'] == 'Active') { ?>
      <div class="ticketinfo">
        <label class="atri">Ticket No :<?php echo $row1['ticketno']; ?> </label>
        <label class="atri">Name : <?php echo $row1['name']; ?> </label>
        <label class="atri">Email : <?php echo $row1['email']; ?> </label>
        <label class="atri">Adults : <?php echo $row1['adults']; ?> </label>
        <label class="atri">Children: <?php echo $row1['child']; ?> </label>
        <label class="atri">Indian: <?php echo $row1['nationality'] ?> </label>
        <?php
        if ($row1['nationality'] === 'Yes') { ?>
          <label class="atri"> Total Rs: <?php echo $row1['prise']; ?> </label>
        <?php
        } else { ?>
          <label class="atri"> Total $: <?php echo $row1['prise']; ?> </label>
        <?php
        }
        ?>
        <label class="atri">Official Booked: <?php echo  $row1['official'] ?> </label>
      </div>
  </div>
<?php
    } else { ?>
  <div class="else">
    <label class="else"><u><b>Ticket Is Cancelled</b></u></label>
    <hr>
    <br>
    <label>Ticket No: <?php echo $row1['ticketno']; ?></label>
    <br>
    <label class="else"><u><b>Reason:</label>
    <label class="else"></label><?php echo  $row1['massage']; ?></p>
  </div>
<?php
    }
}
else{
    echo "
    <script>
    alert('Ticket Is Not Found');
    window.location.replace('http://localhost:7878/project/Views/officialtc.php');</script>";
}
}
?>
    </body>

    </html>
<?php
} else {
    header("Location: LoginTwo.php?error=Login is Require");
}