<?php
include("../Include/dbconnect.php");
$query="SELECT email from user3";
$result=mysqli_query($con,$query);
?>
<?php
if(isset($_GET['submit'])){
    $name=$_GET['Name'];
    $pass=1;
    $email=$_GET['email'];
    $mobile=$_GET['mobile'];
    $address=$_GET['address'];
    $password=$_GET['password'];  
    if(!preg_match("/^[0-9]{10}+$/",$mobile)){
        header("Location: ../View/Adduser.php?error=Mobile No Is Not Valid!!!!");
        exit();
    }
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number    = preg_match('@[0-9]@', $password);
    $specialChars = preg_match('@[^\w]@', $password);
        if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
            header("Location: ../View/Adduser.php?error=Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character");
            exit();
        } 
    if(empty($name)){
        header("location: ../View/Adduser.php?error=Name Is Require");
    }
    else if(empty($email)){
        header("location: ../View/Adduser.php?error=Email Is Require");
    }
    else if(empty($mobile)){
        header("location: ../View/Adduser.php?error=Mobile No Is Require");
    }
    else if(empty($address)){
        header("location: ../View/Adduser.php?error=Address Is Require");
    }
    else if(empty($password)){
        header("location: ../View/Adduser.php?error=Password Is Require");
    }
    else{
      while($row=mysqli_fetch_array($result)){
        if($row['email']==$email){
            header("location: ../View/Adduser.php?error=User Already Exist");   
            $pass=2;
            exit();
            break;
        }
        else{
            $pass=3;
        }
    }
        if($pass==3){
           $haspassword=password_hash($password,PASSWORD_DEFAULT);
          $query2="INSERT INTO user3(name,email,mobileno,address,password) VALUES('$name','$email','$mobile','$address','$haspassword')";
            $result2=mysqli_query($con,$query2);
            if($result2){
                echo "<script>window.location.replace('http://localhost:7878/project/Admin/View/Adduser.php?s=1');</script>";
            }
            else{
                echo "hello";
            }
            }
       
  
}
}
   
?>