<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Espace Natal2</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="/espace-natal/style.css">
</head>

<body>

  <!-- NAVBAR & STICKY CONTACT -->
  <?php include("../views/sticky_contact.html");
  include("../views/navbar.html");?>

  <!-- IMAGE+TXTBOX -->
  <div class="mb-5 shadow-sm" style="position:relative;">
     <div style="">
        <img src="\espace-natal\src\Photo-134.jpg" alt="" style="width:100%;">
     </div>
     <div class="imgContainerContact">
       <h1>INFERTILITÉ</h1>
      <p class="mt-3"><small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ultrices condimentum ligula, vel varius lacus eleifend vitae.</small></p>
      </div>
  </div>

<!-- Lien-redirection -->
  <div class="container">
    <div class="row my-5">
      <div class="col-12">
        <p>Mauris consectetur ut risus ac posuere. Nulla laoreet lectus ultrices eros posuere venenatis. Pellentesque auctor ultrices nulla eget efficitur. Aliquam ullamcorper sodales mattis. Vestibulum sollicitudin facilisis leo, eget tempus nibh suscipit sit amet. Vivamus vitae ipsum porttitor, auctor elit vitae, consectetur sem. Nullam lobortis, enim eget hendrerit venenatis, nulla velit ornare diam, non pharetra arcu quam a metus.</p>
      </div>
    </div>
  <div class="row my-5">
    <div class="col-12 border-left">
      <a href="bilan_fertilite.php"><button type="button" class="btn btn-primary shadow rounded-pill px-4 my-2">Bilan de Fertilité</button></a><br>
      <a href="bilan_infertilite.php"><button type="button" class="btn btn-primary shadow rounded-pill px-4 my-2">Bilan d'Infertilité</button></a><br>
      <a href="prise_en_charge.php"><button type="button" class="btn btn-primary shadow rounded-pill px-4 my-2" >Prise en Charge</button></a>
    </div>
  </div>
</div>

  <!-- FOOTER & SCRIPT FOOTER/NAVBAR -->
  <?php include("../views/footer.html"); ?>
  <script type="text/javascript">
    $(document).ready(function(){
      $(".nav-link").find(".active").removeClass("active");
      $("#idInfertilite").addClass("active");
      $("#idInfertiliteFooter").removeClass("inactiveFooter");
      $("#idInfertiliteFooter").addClass("activeFooter");
    });
  </script>


  <!-- Bootstrap js/jquery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>

</html>
