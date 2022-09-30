<?php
include('../includes/dbconnect.php'); 
$select="SELECT email FROM user3";
$result5= mysqli_query($con,$select);
?>

<?php
if(($_GET['email']!='') && ($_GET['password']!='') &&($_GET['name']!='') && ($_GET['mobileno']!='') && ($_GET['address']!='') && ($_GET['confermpassword']!='')){
    $email=$_GET['email'];
    $password=$_GET['password'];
    $name=$_GET['name'];
    $mobileno=$_GET['mobileno'];
    $address=$_GET['address'];
    $conferm=$_GET['confermpassword'];
     while($row1=mysqli_fetch_array($result5)){
         if($row1['email']==$email){
            header("Location: ../Views/registeredandlogin.php?error=Email Is Already Exits");
            exit();
         }
        }
        if(!preg_match("/^[0-9]{10}+$/",$mobileno)){
            header("Location: ../Views/registeredandlogin.php?error=Mobile No Is Not Valid!!!!");
            exit();
        }
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $number    = preg_match('@[0-9]@', $password);
        $specialChars = preg_match('@[^\w]@', $password);
        if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
            header("Location: ../Views/registeredandlogin.php?error=Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character");
            exit();
        }
        
            if($password!=$conferm){
                header("Location: ../Views/registeredandlogin.php?error=Conferm Passsword And Password Is Not Match");
            }
            else{
                if($_GET['send']==1){
                $rand=rand(10000,100000);
                session_start();
                $_SESSION['rand']=$rand;
                $mail=$email;
                $sub="Verification For Registration";
                $body="Your One Time Password Is {$rand}";
                $header="From: zoomanagmentsystem@gmail.com";
                mail($email,$sub,$body,$header);
            }
                ?>
        <body class="register">
        <link rel="stylesheet" href="../Css/Book/searchticket.css">
        <form action="../Src/emailverfy.php" method="get">
        <marquee behavior="" direction=""><span>*</span>&nbsp;Search Ticket&nbsp; <span>*</span></marquee>
        <h2>Verfy The Email</h3>
            <?php if(isset($_GET['error'])) { ?>
                <p class="error"><i class="fa-solid fa-circle-exclamation"></i><span>*</span><?php echo $_GET['error']; ?><span>*</span></p>
           <?php } ?>
           <input type="hidden" name="email" value="<?php echo $email?>">
           
           <input type="hidden" name="password" value="<?php echo $password?>">
            
           <input type="hidden" name="name" value="<?php echo $name?>">
           
           <input type="hidden" name="mobileno" value="<?php echo $mobileno?>">
        
           <input type="hidden" name="address" value="<?php echo $address?>">
            
           <input type="hidden" name="confermpassword" value="<?php echo $conferm?>">
            
           <input type="hidden" name="rand" value="<?php echo $rand?>">
            
           <input type="number" name="otp" placeholder="OTP" required   ><br>
           <button type="submit">Verfy</button>
            </form>
            </body>
            <?php
            }
         }



else{
     if($_POST['email']==''){
         header("Location: ../Views/registeredandlogin.php?error=Email Is Require");
            exit();
    }
    if($_POST['password']==''){
        header("Location: ../Views/registeredandlogin.php?error=Password Is Require");
           exit();
    }
    if($_POST['name']==''){
        header("Location: ../Views/registeredandlogin.php?error=Name Is Require");
           exit();
    }
    if($_POST['mobileno']==''){
        header("Location: ../Views/registeredandlogin.php?error=Mobile No Is Require");
           exit();
    }
    if($_POST['address']==''){
        header("Location: ../Views/registeredandlogin.php?error=Address Is Require");
           exit();
    }
    if($_POST['confermpassword']==''){
        header("Location: ../Views/registeredandlogin.php?error=Confirm Password Is Require");
           exit();
    }
}
?>
<!-- http://localhost:7878/project/Src/emailverfy.php?email=rahultimbaliya123%40gmail.com&password=123&name=Rahul+Timbaliya&mobileno=123&address=123&confermpassword=123&rand=33620&ticketno=243254354 -->