<?php
 include('../include/Navbar.php');
/*for fatch prise*/
$quary="select * from prise3";
$res=mysqli_query($con,$quary);
$row=mysqli_fetch_array($res);
include('../Src/Editprise.php');
?>
<?php
if(isset($_GET['ss'])){
    $a=$_GET['ss'];
    if($a==1)
    echo "<script>
            const message = setTimeout(alert('Price Updated Succesfully'),5000);
            window.location.replace('http://localhost:7878/project/Admin/View/editprise.php');
        </script>";
    
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/Ticket/editprise.css">
    <title>Document</title>
</head>
<body>
    
    <center>
        
    <div class="edit">
        <div class="formedit">
            <form action="#" method="post">
                <h1><u>Price India</u>
                     <h3>&#8377;</h3>
                </h1>
                <div class="india">
                 <label>Adults:</label><input type="text" name="nationaladults" value="<?php echo $row['adults']?>">
                 <label> Children:</label><input type="text" name="nationalchild" value="<?php echo $row['child']?>">
                </div>
                <div class="foreign">
                <h1><u>Price Of Foreners</u></h1>
                      <h3>$</h3>
                <input type="text" name="internationaladults" value="<?php echo $row['fadults']?>">
                <input type="text" name="internationalchild" value="<?php echo $row['fchild']?>">
                </div>
        </div>
    </div>
     <div class="btn">
    <input type="submit" name="submit" class="updatebtn" value="Update">
    </div>
</form> 
</center>
<?php
     include('../Include/footer.php');
     ?>
</body>
</html>
