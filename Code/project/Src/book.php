<?php
/*for fatch prise*/
$quary="select * from prise3";
$res=mysqli_query($con,$quary);
$row=mysqli_fetch_array($res);

session_start();
$_SESSION['id']==0;
if($_SESSION['id']==0){
    $_SESSION['id']==2;
    
}

/* insert to book*/
if(isset($_POST['submit'])){
    $nm=$_POST['name'];
    $email=$_POST['email'];
    $date=$_POST['date'];
    $date1=date("Y-m-d ", strtotime($date));
    $india=$_POST['national'];
    $adults=$_POST['adults_total'];
    $child=$_POST['chil_total'];
    $tickitno=$_POST['ticketno'];
    if($india == "No")
    {
        $prise=$adults*$row['fadults']+$child*$row['fchild'];
        
    }
    else{
        $prise=$adults*$row['adults']+$child*$row['child'];
    }
    if(empty($nm)){
        header("Location: ../Views/Book.php?error=Name Is Require");  
        exit();

    }
    else if(empty($email)){
        header("Location: ../Views/Book.php?error=Email Is Requre");  
        exit();

    }
    else if(empty($date)){
        header("Location: ../Views/Book.php?error=Date Is Requre");  
        exit();

    }
    else{
    $boookbyuserid=$_SESSION['userid'];
    $quarybook="INSERT INTO book3(bookbyuserid,name,email,adults,child,ticketno,nationality,prise,official) VALUES('$boookbyuserid','$nm','$email',$adults,$child,$tickitno,'$india',$prise,'No')";
    $datequary="UPDATE book3 SET date='$date1' WHERE ticketno='$tickitno'";
    $bookc=mysqli_query($con,$quarybook);
    mysqli_query($con,$datequary);
    if($bookc){
        echo "<script>alert('Your Ticket Is Booked. Please Scroll Down To Show Your Ticket\nAlso Send Copy Of Ticket To Your Email')</script>"; 
        $sub="Ticket Is Booked Succesfully";
        $body="\t\tTicket No: {$tickitno}\n\n\t\tName : {$nm}\n\n\t\tDate: {$date1}\n\n\t\tNO Of Adults: {$adults}\n\n\t\tNo Of Children: {$child}\n\n\t\tPrice: {$prise}\n\n
        Thank You For Booking \n\n\t\t\t\t
        Have A Nice Day...";
        $header="From: zoomanagmentsystem@gmail.com";
        mail($email,$sub,$body,$header);
       
    }
    }
}
?>