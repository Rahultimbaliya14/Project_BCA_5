<?php
include('../Include/dbconnect.php');
include('../Src/ViewAnimal.php');
$quary1="SELECT * FROM gallary";
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
        var col1 = currentrow.find("td:eq(0)").text();
        var col2 = currentrow.find("td:eq(1)").text();
        var col3 = currentrow.find("td:eq(2)").text();
        var col4 = currentrow.find("td:eq(3)").text();
        document.getElementById("no").innerHTML = col1;
        document.getElementById("name").innerHTML = col2;
        document.getElementById("quantity").innerHTML = col3;
        document.getElementById("description").innerHTML = col4;

      })
    })
  }
</script>
<?php
if(isset($_GET['error'])){
  ?>
  <script>
    alert("<?php echo $_GET['error']?>");
  </script>
  <?php
}
?>
<body onload="cancel()" class="view">
  <div class="modal fade" id="deletemodal" tabindex="-1" aria-labelledby="deletemodallable" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deletemodalLabel"></i>Animal Info</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="#" method="post">
            <div class="ticketno">
              <h4>Animal Id:</h4><textarea class="no" id="no" name="no" readonly></textarea>
            </div>
            <div class="nametext">
              <h4>Animal Name:</h4><textarea class="name" id="name" name="name"></textarea>
            </div>
            <div class="nametext">
              <h4>On Of Animal:</h4><textarea class="quantity" id="quantity" name="quantity"></textarea>
            </div>
            <div class="reason">
              <p> Description :</p> <textarea name="description"
                placeholder="Description" id="description">  </textarea>           
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <input type="submit" class="btn btn-primary" name="submit" id="submit" value="Update">
          <input type="submit" class="btn btn-primary" name="submit1" id="submit" value="Delete">
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
  <div class="viewbox">
  <h1 class="Title"><u>Animal Details</u></h1>
  <div class="info">
    <table id="example" class="table">
      <thead>
        <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Number Of Animal</th>
          <th>Discriptio</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
            if(mysqli_num_rows($result1) > 0){
            while($row1=mysqli_fetch_array($result1)){
            
         ?>
        <tr>
          <td class="td">
            <?php echo $row1['id']?>
        </td>
          <td class="td">
          <?php echo $row1['name']?>
        </td>
          <td class="td">
          <?php echo $row1['quantity']?>
        </td>
          <td class="td">
          <?php echo $row1['discription']?>
        </td>
          <td class="td"><button type="button" name="submit" class="delete btn btn-primary" data-bs-toggle="modal"
              data-bs-target="#deletemodal">Edit</button></td>
        </tr>
        <?php
                      
                    }
                  }
         ?>
      </tbody>
    </table>

  </div>
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