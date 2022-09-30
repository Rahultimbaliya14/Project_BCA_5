<?php
include('../includes/dbconnect.php');
$quary1 = "SELECT * FROM gallary";
$result1 = mysqli_query($con, $quary1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="../Images/LOGO.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../Css/Gallary/gallary.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include('../includes/navbar.php');
    ?>
    <div class="container">
        <div class="row gy-3">
            <?php
            if (mysqli_num_rows($result1) > 0) {
                while ($row1 = mysqli_fetch_array($result1)) {
            ?>
                    <div class=" col col-sm-6 col-md-4 col-lg-3">
                        <div class="card">
                            <?php
                            echo '<img  src="data:image;base64,' . base64_encode($row1['image']) . '" height="100%" width="100%"/>';
                            ?>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <?php echo $row1["name"]; ?>
                                </h5>
                                <h6>Number Of Animal: <?php echo $row1["quantity"]; ?></h4>
                                    <p class="card-text">
                                        <?php echo $row1["discription"]; ?>
                                    </p>
                            </div>
                        </div>
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </div>
    <?php
    include('../includes/footer.php')
    ?>
</body>

</html>