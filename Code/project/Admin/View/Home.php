<?php
include('../Include/dbconnect.php');
$query="SELECT * FROM  contact";
$result=mysqli_query($con,$query);
$row1 = mysqli_fetch_array($result);
$query1="SELECT * FROM book3";
$result1=mysqli_query($con,$query1);
$count=0;
while($row3=mysqli_fetch_array($result1)){
$count=$count+1;
}
$queryu="SELECT * FROM user3";
$resultu=mysqli_query($con,$queryu);
$countu=0;
while(mysqli_fetch_array($resultu)){
$countu=$countu+1;
}
$queryof="SELECT * FROM officialuser3";
$resultof=mysqli_query($con,$queryof);
$countof=0;
while(mysqli_fetch_array($resultof)){
$countof=$countof+1;
}
$queryg="SELECT * FROM gallary";
$resultg=mysqli_query($con,$queryg);
$countg=0;
while(mysqli_fetch_array($resultg)){
$countg=$countg+1;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <script src="https://kit.fontawesome.com/0f900b0930.js" crossorigin="anonymous"></script>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="../Css/home.css">
        <link rel="stylesheet" href="../Css/dashbord.css">
        <title>Document</title>
</head>
<body>
        <?php
        include('../include/Navbar.php');
        ?>
        <div class="wrapper">
                <div class="main-bord">
                        <div class="card-bord">
                                <div class="card" style="background-color: rgba(0,0,0,0.7);">
                                        <div class="card-icon">
                                                <br>
                                                <br>
                                                <i class="fa-solid fa-ticket" style="color:white;font-size:25px"></i>
                                                
                                                <h3 style="color: white;">Total Booked Ticket</h3>
                                                
                                        </div>
                                        <div class="text" style="color:white;">
                                                <hr>
                                                <br >
                                                <?php   echo $count;?></hr>
                                        </div>
                                </div>
                                <div class="card">      
                                        <div class="card-icon">
                                                <br>
                                                <br>
                                                <i class="bi bi-person" style="color:black;font-size:25px"></i>
                                                
                                                <h3>Total Active User</h3>
                                                
                                        </div>
                                        <div class="text">
                                                <hr>
                                                <br><?php echo $countu ?></hr>
                                        </div>
                                </div>
                                <div class="card" >
                                        <div class="card-icon">
                                                <br>
                                                <br>
                                                <i class="bi bi-person-workspace" style="color:black;font-size:25px"></i>
                                                
                                                <h3>Total Active Staff User</h3>
                                                
                                        </div>
                                        <div class="text">
                                                <hr>
                                                <br><?php echo $countof; ?></hr>
                                        </div>
                                </div>
                                <div class="card">
                                        <div class="card-icon">
                                                <br>
                                                <br>
                                                <i class="i bi-clipboard-data-fill" style="color:black;font-size:25px"></i>
                                                
                                                <h3>Total Animal</h3>
                                                
                                        </div>
                                        <div class="text">
                                                <hr>
                                                <br><?php echo $countg; ?></hr>
                                        </div>
                                </div>
                        </div>
                        
                </div>
        </div>
        <div class="wrapper">
        <div class="comment">
                <h2>Comment</h2>
                <br>
                <h3><?php echo $row1['name'] ; ?></h3>
                 <p><?php echo $row1['massage'] ; ?></p>
        </div>
        <div class="official">
        <table id="example" class="table">
      <thead>
        <tr>            
          <th>Ticket No</th>
          <th>Name</th>
          <th>Price</th>
          <th>Email</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $query5="SELECT * FROM book3";
        $result5=mysqli_query($con,$query5);
      while($row2=mysqli_fetch_array($result5)){
        ?>
        <tr>                      
          <td class="td">
                <?php echo $row2['ticketno'];?>                         
          </td>
          <td class="td">
          <?php echo $row2['name'];?>  
          </td>
          <td class="td">
          <?php echo $row2['prise'];?>  
          </td>
          <td class="td">
          <?php echo $row2['email'];?>  
          </td>
        </tr>
        <?php
      }
         ?>
      </tbody>
      <tfoot>
        <tr>
        <th>Ticket No</th>
          <th>Name</th>
          <th>Price</th>                        
          <th>Email</th>
        </tr>
      </tfoot>
    </table>   
        </div>
        </div>
                <?php
                echo $count;
        include('../Include/footer.php');
        ?>
         <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
    crossorigin="anonymous"></script>
    <script>
    $(document).ready(function () {
      $('#example').DataTable();
    });
  </script>
</body>
</html>