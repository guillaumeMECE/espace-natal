<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Espace Natal</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="/espace-natal/style.css">
  <link rel="stylesheet" href="/espace-natal/css/accordion.css">
</head>

<body>

  <!-- NAVBAR -->
  <?php include("../views/navbar.html"); ?>

  <div class="container my-5">
    <!-- menu-wrapper -->
    <ul class="menu-list accordion">
      <li id="nav1" class="toggle accordion-toggle">
        <span class="icon-plus"></span>
        <a class="menu-link" href="#">Menu1</a>
      </li>
      <!-- accordion-toggle -->
      <div class="menu-submenu accordion-content">
        <div class="row">
          <!-- TXT D'ENTETE -->
          <div class="col-12">
            <p>La Maternité de la Clinique de la Muette appartient au réseau des 22 maternités du Groupe Ramsay Générale de santé, premier groupe de cliniques et d’hôpitaux privés en France.</p>
            <p>Cette maternité est une maternité de niveau 1 qui a établi un partenariat avec l’hôpital Necker lui permettant de prendre en charge les grossesses à risque ou encore les accouchements prématurés.</p>
            <p>Cette maternité est souvent privilégiée pour sa taille humaine avec sa trentaine de chambres cosy et les soins apportés aux mamans et aux nouveau-nés comme cette pratique du bain Thalasso … très appréciée par les intéressés !</p>
            <p>Découvrez la pratique du bain Thalasso à la Maternité de la Clinique de la Muette</p>
            <a href="https://www.youtube.com/watch?v=lfB7YIdtWFI" target="_blank">Lien vers une video de présentation</a>
          </div>
          <!-- SLIDE IMG -->
          <div class="col-lg-5">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="/espace-natal/src/clinique-de-la-muette-espace-natal-paris-01.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="/espace-natal/src/clinique-de-la-muette-espace-natal-paris-02.jpg" class="d-block w-100" alt="...">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
          <!-- TXT + LISTE -->
          <div class="col-7">
              <h6>La prise en charge</h6><br>
              <p>La Maternité de la Clinique de la Muette assure un accueil et une prise en charge permanente des urgences maternité et gynécologie: 24h/24 et 7j/7 une équipe d’astreinte pluridisciplinaire et expérimentée vous garantit une qualité de soins au sein du bloc obstétrical.</p>
          </div>
        </div>

      </div>

      <!--ul class="menu-submenu accordion-content">
           <li><a class="head" href="#">Submenu1</a></li>
           <li><a class="head" href="#">Submenu2</a></li>
           <li><a class="head" href="#">Submenu3</a></li>
        </ul-->
      <!-- menu-submenu accordon-content-->
      <li id="nav2" class="toggle accordion-toggle">
        <span class="icon-plus"></span>
        <a class="menu-link" href="#">Menu2</a>
      </li>
      <!-- accordion-toggle -->
      <ul class="menu-submenu accordion-content">
        <li><a class="head" href="#">Submenu1</a></li>
        <li><a class="head" href="#">Submenu2</a></li>
      </ul>
      <!-- menu-submenu accordon-content-->
      <li id="nav3" class="toggle accordion-toggle">
        <span class="icon-plus"></span>
        <a class="menu-link" href="#">Menu3</a>
      </li>
      <!-- accordion-toggle -->
      <ul class="menu-submenu accordion-content">
        <li><a class="head" href="#">Submenu1</a></li>
        <li><a class="head" href="#">Submenu2</a></li>
        <li><a class="head" href="#">Submenu3</a></li>
        <li><a class="head" href="#">Submenu4</a></li>
      </ul>
      <!-- menu-submenu accordon-content-->
    </ul>
    <!-- menu-list accordion-->
  </div>


  <!-- CONTACT -->
  <?php include("../views/contact.html"); ?>
  <!-- FOOTER & SCRIPT FOOTER/NAVBAR -->
  <?php include("../views/footer.html"); ?>
  <script type="text/javascript">
    $(document).ready(function() {
      $(".nav-link").find(".active").removeClass("active");
      $("#idPartenaires").addClass("active");
      $("#idPartenairesFooter").removeClass("inactiveFooter");
      $("#idPartenairesFooter").addClass("activeFooter");
    });
  </script>


  <script src="/espace-natal/javascript/accordion.js"></script>
  <!-- Bootstrap js/jquery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>

</html>
