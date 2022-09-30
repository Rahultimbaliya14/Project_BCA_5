<?php
session_start();
include('../includes/dbconnect.php');
if(isset($_POST['ticketno']) && isset($_POST['email'])){
        $ticketno=$_POST['ticketno'];
        $email=$_POST['email'];
        echo $ticketno;
        echo $email;
        if (empty($ticketno)){
            header("Location: ../Views/serchticket.php?error= Ticket No Is Require");
             exit();
        }
        else if (empty($email))
        {
         
            header("Location: ../Views/serchticket.php?error=Email Is Require");
            exit();
        }
        else{
            
             $fatch="SELECT * FROM book3 WHERE ticketno='$ticketno' AND email='$email'";
             $fatched=mysqli_query($con,$fatch);
                if($fatched){
                 $row1=mysqli_fetch_assoc($fatched);
                   if($row1['ticketno'] === $ticketno && $row1['email'] === $email){
                    echo $row['name'];
                    $_SESSION['name']=$row1['name'];
                    $_SESSION['email']=$row1['email'];
                    $_SESSION['adults']=$row1['adults'];
                    $_SESSION['child']=$row1['child'];
                    $_SESSION['ticketno']=$row1['ticketno'];
                    $_SESSION['nationality']=$row1['nationality'];
                    $_SESSION['prise']=$row1['prise'];
                     $_SESSION['name']=$row1['name'];
                    $_SESSION['official']=$row1['official'];
                    $_SESSION['status']=$row1['status'];
                    $_SESSION['massage']=$row1['massage'];
                    
                    header("Location: ../Views/ticket.php");
                    exit();
                }
                else{
                    header("Location: ../Views/serchticket.php?error=Unvalid Ticket No And Email");
                    exit();
                }
        }
        else{
        
                header("Location: ../Views/serchticket.php?error=Some Technical Issue Is Accure");
                   exit();
        }
    }
}
?>