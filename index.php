<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Espace Natal</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:600" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="/espace-natal/style.css">
</head>

<body>

  <!-- NAVBAR & STICKY CONTACT -->
  <?php include("views/navbar.html");
 include("views/sticky_contact.html"); ?>
<!-- Carousel -->
  <div  style="position:relative;">
    <div id="carouselExampleControls" class="carousel slide shadow-sm" data-ride="carousel" >
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="src\Photo-52.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="src\Photo-54.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="src\Photo-113.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev" style="z-index:4;">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next" style="z-index:4;">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <div class="imgContainerAccueil">
      <div class="txtContainerAccueil">
        <h1 style="text-decoration: none;">L'ESPACE NATAL</h1>
        <h2>ET VOTRE GROSSESSE</h2>
       <p class="mt-3" style="font-weight:600;">Le secrétariat de l’Espace Natal se tient à votre disposition du lundi au vendredi de 9h à 19h</p>
      </div>

     </div>
  </div>

<!-- CONTACT -->
<?php include("views/contact.html"); ?>

  <?php include("views/footer.html"); ?>

  <script type="text/javascript">
    $(document).ready(function(){
      $(".nav-link").find(".active").removeClass("active");
      $("#idAccueil").addClass("active");
      $("#idAccueilFooter").removeClass("inactiveFooter");
      $("#idAccueilFooter").addClass("activeFooter");
    });
  </script>

  <!-- Bootstrap js/jquery -->

  <!--script src="lib\parallax.js-1.5.0\parallax.js"></script-->
  <!--script src="lib\paroller.js\dist\jquery.paroller.js"></script-->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>

</html>
