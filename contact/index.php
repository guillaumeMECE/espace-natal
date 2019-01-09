<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Espace Natal - Contact</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>

  <!-- NAVBAR -->
  <?php include("../views/navbar.html"); ?>
  <?php //include("contactMailTo.php"); ?>

  <!-- FORM SEND MESSAGE -->
  <div class="container" >
    <div class="row ">
      <div class="col-6 my-5 border-right">
        <form action="contactMailTo.php" method="post">
          <h3 class="mb-5">ENVOYER UN MESSAGE</h3>
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Nom</span>
              </div>
              <input type="text" class="form-control" name="inputNom" aria-describedby="nomHelp" placeholder="Nom">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Prenom</span>
              </div>
              <input type="text" class="form-control" name="inputPrenom" aria-describedby="prenomHelp" placeholder="Prenom">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
              </div>
              <input type="email" class="form-control" name="inputEmail" aria-describedby="emailHelp" placeholder="E-mail">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Sujet</span>
              </div>
              <input type="text" class="form-control" name="inputSujet" aria-describedby="nomHelp" placeholder="Sujet">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">Message</span>
              </div>
              <textarea class="form-control" name="inputMessage" aria-label="Message" placeholder="Message"></textarea>
            </div>
          </div>
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1"><small>J'accepte que le site utilise ces informations pour répondre à ma demande</small></label>
          </div>
          <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
      </div>
      <div class="col-6 my-5">
        2 of 2
      </div>
    </div>
  </div>





  <!-- Bootstrap js/jquery -->
  <!--script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>

</html>
