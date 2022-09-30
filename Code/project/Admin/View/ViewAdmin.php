<?php

use LDAP\Result;

include('../Include/dbconnect.php');
$quary1="SELECT * FROM admin";
$result1=mysqli_query($con,$quary1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Domine:wght@500&family=Righteous&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet" href="../Css/Ticket/ticket.css">
</head>

<script>
  function cancel() {
    $(document).ready(function () {
      $(".delete").on('click', function () {
        var currentrow = $(this).closest("tr");
        var col2 = currentrow.find("td:eq(1)").text();
        var col3 = currentrow.find("td:eq(2)").text();
        var col4 = currentrow.find("td:eq(3)").text();
        var col5= currentrow.find("td:eq(4)").text();
        document.getElementById("no").innerHTML = col2;
        document.getElementById("name").innerHTML = col3;
        document.getElementById("username").innerHTML = col4;
      })
    })
  }
</script>

<body onload="cancel()">
  <div class="modal fade" id="deletemodal" tabindex="-1"            aria-labelledby="deletemodallable" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deletemodalLabel">User's Information</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="" method="post">
            <div class="ticketno">
              <h4>Id</h4><textarea class="no" id="no" name="no" readonly></textarea>
            </div>
            <div class="nametext">
              <h4>Name:</h4><textarea class="name" id="name" name="name" readonly></textarea>
            </div>
            <div class="nametext">
              <h4>Username:</h4><textarea class="name" id="username" name="username" placeholder="Enter Username"readonly></textarea>
            </div>
            <b style="font-size: 25px; margin-right: 60px;">Super Admin:</b>&nbsp;&nbsp;<select name="role" id="role" style="border: 5px dashed rgba(0,0,0,0.5); padding:10px;">
                  <option value="yes">
                    Super Admin
                  </option>
                  <option value="no">
                    Admin
                  </option>
            </select>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <input type="submit" class="btn btn-primary" name="update" value="Update">
          <input type="submit" class="btn btn-danger" name="submit" id="submit" value="Delete">
          </form>
        </div>
      </div>
    </div>
  </div>
  <script>
  let cancelBtn = document.getElementById('submit');
     cancelBtn.addEventListener('click', () => {
      navigation.reload();
    });
    </script>
  <?php
     include('../include/Navbar.php');
  ?>
  <h1 class="Title">All User's</h1>
  <h3 class="Title"><i class="fa-solid fa-ticket-simple"></i></h3>
  <div class="info">
    <table id="example" class="table">
      <thead>
        <tr>
        <th class="th"><u>image</u></th>
          <th class="th"><u>Id</u></th>
          <th>Name</th>
          <th>Username</th>
          <th>Super Admin</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
            if(mysqli_num_rows($result1) > 0){
            while($row1=mysqli_fetch_array($result1)){
                if($row1["id"]==$_SESSION['idadmin']){
                }else{
         ?>
        <tr>
          <td class="td">
            <?php
          echo '<img src="data:image;base64,'.base64_encode($row1['image']).'" height="100px" width="100px" style="border-radius:20px; margin-bottom:20px"/>';
          ?>
          </td>
          <td class="td">
            <?php echo $row1["id"]?>
          </td>
          <td class="td">
            <?php echo $row1["name"]?>
          </td>
          <td class="td">
            <?php echo $row1["username"]?>
          </td>
          <td class="td">
            <?php echo $row1["su"]?>
          </td>
          <?php
          if($row1["su"]!="sudo"){?>
          <td class="td"><button type="button" name="submit" class="delete btn btn-primary" data-bs-toggle="modal"
              data-bs-target="#deletemodal">View </button></td>
              <?php
          }
          else{?>
          <td>
               <b><h4 style="color:red;">Not Viewable</h4></b>
               <b>It Is A Sudo Admin</b>
          </td>
         <?php
          }
              ?>
        </tr>
        <?php
                      }
                    }
                }
                
         ?>
      </tbody>
      <tfoot>
      <tr>

      <th class="th"><u>image</u></th>
          <th class="th"><u>Id</u></th>
          <th>Name</th>
          <th>Username</th>
          <th>Super Admin</th>
          <th>Action</th>
          
        </tr>
      </tfoot>
    </table>

  </div>
  <?php
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
<?php
if(isset($_POST['submit'])){
   $id=$_POST['no'];
  $query="DELETE FROM admin WHERE id=$id";
  $delete=mysqli_query($con,$query);
  if($delete){
    echo "<script>window.location.replace('http://localhost:7878/project/Admin/View/ViewAdmin.php');</script>";             
  }

}
if(isset($_POST['update'])){
  $id=$_POST['no'];
  $name=$_POST['name'];
  $role=$_POST['role'];
  $update="UPDATE admin SET su='$role' WHERE id=$id";
  if(mysqli_query($con,$update)){
    echo "<script>window.location.replace('http://localhost:7878/project/Admin/View/ViewAdmin.php');</script>";
  }
}
?>