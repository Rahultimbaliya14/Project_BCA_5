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

<body>
    <form action="../Src/search.php" method="post">
        <marquee behavior="" direction=""><span>*</span>&nbsp;Search Ticket&nbsp; <span>*</span></marquee>
        <h2>Search Ticket</h3>
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><i class="fa-solid fa-circle-exclamation"></i><span>*</span><?php echo $_GET['error']; ?><span>*</span></p>
            <?php } ?>
            <label>Ticket No</label>
            <input type="number" name="ticketno" placeholder="Ticket No"><br>
            <label>Email</label>
            <input type="email" name="email" placeholder="Email"></i><br>
            <button type="submit">Search</button>
    </form>
</body>

</html>