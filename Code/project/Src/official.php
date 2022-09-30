<?php
$quary="select * from prise3";
$res=mysqli_query($con,$quary);
$row=mysqli_fetch_array($res);



if(isset($_POST['submit'])){
    $nm=$_POST['name'];
    $email=$_POST['email'];
    $date=$_POST['date'];
    $date1=date("Y-m-d ", strtotime($date));
    $india=$_POST['national'];
    $adults=$_POST['adults_total'];
    $child=$_POST['chil_total'];
    $tickitno=$_POST['ticketno'];
    $id=$_SESSION['id'];
    $bookname=$_SESSION['name'];
    if($india == "No")
    {
        $prise=$adults*$row['fadults']+$child*$row['fchild'];
        
    }
    else{
        $prise=$adults*$row['adults']+$child*$row['child'];
    }
    if(empty($nm)){
        header("Location: ../Views/official.php?error=Name Is Require");  
        exit();

    }
    else if(empty($email)){
        header("Location: ../Views/official.php?error=Email Is Requre");  
        exit();

    }
    else if(empty($date)){
        header("Location: ../Views/official.php?error=Date Is Requre");  
        exit();

    }
    else{
 
    $quarybook="INSERT INTO book3(name,email,adults,child,ticketno,nationality,prise,official,bookedbyid,bookbyname) VALUES('$nm','$email',$adults,$child,$tickitno,'$india',$prise,'Yes',$id,'$bookname')";
     $bookc=mysqli_query($con,$quarybook);
     $datequary="UPDATE book3 SET date='$date1' WHERE ticketno='$tickitno'";
     if(mysqli_query($con,$datequary)){
        
        $sub="Ticket Is Booked Succesfully";
        $body="\t\tTicket No: {$tickitno}\n\n\t\tName : {$nm}\n\n\t\tDate: {$date1}\n\n\t\tNO Of Adults: {$adults}\n\n\t\tNo Of Children: {$child}\n\n\t\tPrice: {$prise}\n\n
        Thank You For Booking \n\n\t\t\t\t
        Have A Nice Day...";
        $header="From: zoomanagmentsystem@gmail.com";
        mail($email,$sub,$body,$header);
        echo "<script>alert('Ticket Is Booked Please Check Your Email');</script>";
        echo "<script>window.location.replace('http://localhost:7878/project/Views/official.php');</script>";
        
     }
    }
}
?>