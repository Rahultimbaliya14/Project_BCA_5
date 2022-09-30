<?php
if (isset($_GET['t'])) {
  session_start();
  session_destroy();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" href="../Images/LOGO.png" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Qwitcher+Grypen&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="../Css/Home/Navbar.css">
  <link rel="stylesheet" href="../Css/Home/slide.css">
  <link rel="stylesheet" href="../Css/Home/card.css">
  <link rel="stylesheet" href="../Css/Home/multyimage.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>The Zoo Managment System</title>
</head>

<body>
  <?php
  include('../includes/navbar.php');
  ?>
  <div class="slide">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../Images/banner1.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5 class="slidetitle">Gir National Park
              The Heart of Nature</h5>
            <p class="slidecaption">Gir National Park and wildlife sanctuary is situated in Gujarat, Western India.
              It was established to
              protect Asiatic lions along with leopards and antelopes, form the fully protected area of 1,412 sq.km.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../Images/banner2.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5 class="slidetitle">Gir Is Only Place For Asiatic Lions</h5>
            <p class="slidecaption"> Gir National Park consists of a mixed deciduous forest interspersed with
              semi-evergreen and evergreen trees, scrub jungle, large patches of grasslands and rocky hills. It is the
              largest dry deciduous forest in Western India.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../Images/banner3.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5 class="slidetitle"></h5>
            <p class="slidecaption">Some representative placeholder content for the third slide.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <div class="card">
    <div class="box">
      <img src="../Images/TheCat.jpg" alt="">
    </div>
    <div class="box">
      <img src="../Images/TIGER.jpg" alt="">
    </div>
    <div class="box">
      <img src="../Images/lionchild.png" alt="">
    </div>
  </div>

  <section class="space">
    <div class="multyimage">
      <div class="mutyimagetext">
        <h3 style="font-family: 'Qwitcher Grypen', cursive; font-size:53px;">&#128515;Watch Out Zoo, Here We Come...</h3>


      </div>
      <img src="../Images/multy" alt="">
    </div>
  </section>
  <?php
  include('../includes/footer.php');
  ?>
</body>

</html>