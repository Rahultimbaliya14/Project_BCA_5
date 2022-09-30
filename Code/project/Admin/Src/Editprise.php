<?php

include('../Include/dbconnect.php');
if(isset($_POST['submit'])){
    $nationaladults=$_POST['nationaladults'];
    $nationalchild=$_POST['nationalchild'];
    $internationaladults=$_POST['internationaladults'];
    $internationalchild=$_POST['internationalchild'];
    $quary2="UPDATE prise3 SET adults=$nationaladults,child=$nationalchild,fadults=$internationaladults,fchild=$internationalchild";
    $res1=mysqli_query($con,$quary2);
    if($res1){
      echo "<script>
      alert('Price Updated Succesfully');
      window.location.replace('http://localhost:7878/project/Admin/View/editprise.php');
  </script>";
    }
    else{
    }
  }
  ?>