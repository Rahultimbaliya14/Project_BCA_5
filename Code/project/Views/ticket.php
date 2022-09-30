<?php
session_start();
if (isset($_SESSION['name']) && isset($_SESSION['email'])) {

?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../Images/LOGO.png" type="image/x-icon">
    <link rel="stylesheet" href="../Css/Book/ticket.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>

    <body>
      <center>
        <p style="font-size:40px" color="white" ;>:&nbsp; Ticket &nbsp;:</p>
      </center>
      <div class="massage">
        <div class="img">
          <img src="..//Images/multy" alt="" class="ticketimage">
        </div>
        <?php
        if ($_SESSION['status'] == 'Active') { ?>
          <div class="ticketinfo">
            <label class="atri">Ticket No : <?php echo $_SESSION['ticketno']; ?> </label>
            <label class="atri">Name : <?php echo $_SESSION['name']; ?> </label>
            <label class="atri">Email : <?php echo $_SESSION['email']; ?> </label>
            <label class="atri">Adults : <?php echo $_SESSION['adults']; ?> </label>
            <label class="atri">Children: <?php echo $_SESSION['child']; ?> </label>
            <label class="atri">Indian: <?php echo $_SESSION['nationality'] ?> </label>
            <?php
            if ($_SESSION['nationality'] === 'Yes') { ?>
              <label class="atri"> Total Rs: <?php echo $_SESSION['prise']; ?> </label>
            <?php
            } else { ?>
              <label class="atri"> Total $: <?php echo $_SESSION['prise']; ?> </label>
            <?php
            }
            ?>
            <label class="atri">Official Booked: <?php echo  $_SESSION['official'] ?> </label>
          </div>
      </div>
    <?php
        } else { ?>
      <div class="else">
        <label class="else"><u><b>Ticket Is Cancelled</b></u></label>
        <hr>
        <br>
        <label>Ticket No: <?php echo $_SESSION['ticketno']; ?></label>
        <br>
        <label class="else"><u><b>Reason:</label>
        <label class="else"></label><?php echo  $_SESSION['massage']; ?></p>
      </div>
    <?php
        }
    ?>
    <form>
      <center>
        <?php
        if ($_SESSION['status'] == 'Active') { ?>
          <div class="print">
            <input type="button" value="PRINT" onclick="window.print()">
          </div>
        <?php
        } else {
        }
        ?>
      </center>
    </form>
  </body>

  </html>
<?php
} else {
}
?>