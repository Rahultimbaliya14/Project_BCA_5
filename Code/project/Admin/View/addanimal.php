<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alumni+Sans+Inline+One&family=Lora:ital,wght@1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../Css/Animal/addanimal.css">
    <title>Document</title>
</head>
<body>
    <?php
        include('../include/Navbar.php');
    ?>
    <center>
      <div class="container">
        <h1><u>Add Animal</u></h1>
        <div class="field">
           Click Hare&nbsp;&nbsp;<button id="btn"type="file"><i class="bi bi-folder-plus"></i>&nbsp;Add Image</button>
           <div id="display">
            <?php
            if(isset($_GET['error'])){?>
            <span>
              *
            <?php
              echo $_GET['error'];
            ?>
            *
            </span>
            <?php
            }
            ?>
           </div>
          <form action="../Src/Addanimal.php" method="post" enctype="multipart/form-data">
            <input type="text" name="name" placeholder="&nbsp;&nbsp; Animal Name" >
            <br>
            <input type="number" name="animalid" placeholder="&nbsp;&nbsp;Animal Id">
            <br>
            <input type="number" name="qauntity" placeholder=" &nbsp;Number Of Animal">
            <br><textarea name="discription" id="" cols="75" rows="5" placeholder="Discription"></textarea>
            <input type="file" name="file" id="file" hidden onchange="getname(this.value);">
        </div>
        <input type="submit" value="Add Animal" name="submit" class="btnadd">
      </div>
      <br>
    </form>
    </center>

    <?php
    include('../Include/footer.php');
    ?>
    <script>
      var btn1=document.getElementById("btn");
      btn1.addEventListener('click', () => {
         document.getElementById('file').click();
      });
    </script>
    <script>
      function getname(imagename){
        var newimage=imagename.replace(/^.*\\/,"");
        document.getElementById("display").innerHTML="Image Name:&nbsp;&nbsp"+newimage;
      }
    </script>
</body>
</html>