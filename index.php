<!DOCTYPE html>
<html lang="en">

<head>
  <?php
    include_once('./templates/head.php');
    include_once('./functions.php');
  ?>
    <title>Accueil</title>
</head>

<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="./index.php">Sportfit</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="./index.php">Accueil
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./cart.php">Panier</a>
          </li>
          <li class="nav-item">
            <?php 
              if (isset($_SESSION)) {
                echo '<a class="nav-link" href="./check-session.php">Vous êtes déjà connecté</a>';
              } else {
                echo '<a class="nav-link" href="./check-session.php">Connexion / Inscription</a>';
              }
            ?>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">Sportfit</h1>
        <p>Des produits sportifs de marque et de qualité, à des prix imbattables sur tout l'internet.</p>
        <!-- <div class="list-group">
          <a href="#" class="list-group-item">Category 1</a>
          <a href="#" class="list-group-item">Category 2</a>
          <a href="#" class="list-group-item">Category 3</a>
        </div> -->

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <!-- Carousel -->
        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="./images/car01.png" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="./images/car02" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="./images/car03" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#">
                <img class="card-img-top" src="./images/adadas.jpg" alt="bag-adidas">
              </a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Sac de sport</a>
                </h4>
                <h5>30€</h5>
                <p class="card-text">Magnifique sac de sport de la marque Adidas, affichez-vous avec les couleurs flashy de cet été à la salle comme à la plage.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Note : &#9733; &#9733; &#9733; &#9733; &#9734;</small> <button type="button" class="btn btn-success" onclick="addToCartJS(1, 30)">Acheter</button>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#">
                <img class="card-img-top" src="./images/nkie.jpg" alt="flip-flop-nike">
              </a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Claquettes</a>
                </h4>
                <h5>15€</h5>
                <p class="card-text">La dernière collection des claquettes Nike vient d'arriver, procurez vous ce tout nouveau modèle révolutionnaire !</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Note : &#9733; &#9733; &#9733; &#9733; &#9734;</small> <button type="button" class="btn btn-success" onclick="addToCartJS(2, 15)">Acheter</button>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#">
                <img class="card-img-top" src="./images/naik.jpg" alt="">
              </a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Sac en plastique</a>
                </h4>
                <h5>10€</h5>
                <p class="card-text">Superbe sac plastique de la marque Nike, cette couleur vous donnera la chaleur nécessaire pour le sport. <br> Grâce à notre tout nouveau plastique recyclé, utilisez le plus souvent !</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Note : &#9733; &#9733; &#9733; &#9733; &#9734;</small> <button type="button" class="btn btn-success" onclick="addToCartJS(3, 10)">Acheter</button>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#">
                <img class="card-img-top" src="./images/adidos.jpg" alt="">
              </a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Veste</a>
                </h4>
                <h5>50€</h5>
                <p class="card-text">Veste iconique Adidas qui a permis à la marque de se démarquer de ses concurrents à l'époque.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Note : &#9733; &#9733; &#9733; &#9733; &#9734;</small> <button type="button" class="btn btn-success" onclick="addToCartJS(4, 50)">Acheter</button>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#">
                <img class="card-img-top" src="./images/mike.jpg" alt="">
              </a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Chaussures street-wear</a>
                </h4>
                <h5>100€</h5>
                <p class="card-text">Replongez en enfance avec les légendaires Nike qui ont été portées par les jeunes des années 80 - 90, remises au gout du jour.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Note : &#9733; &#9733; &#9733; &#9733; &#9734;</small> <button type="button" class="btn btn-success" onclick="addToCartJS(5, 100)">Acheter</button>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#">
                <img class="card-img-top" src="./images/adadis.jpg" alt="">
              </a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Chaussures de running</a>
                </h4>
                <h5>90€</h5>
                <p class="card-text">Les fameuses Adidas qui ont permis de décrocher tous les records, faites-vos propre records avec.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Note : &#9733; &#9733; &#9733; &#9733; &#9734;</small> <button type="button" class="btn btn-success" onclick="addToCartJS(6, 90)">Acheter</button>
              </div>
            </div>
          </div>

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
  <?php
    include_once('./templates/footer.php');
    include_once('./templates/bootstrap-call.php');
  ?>
</body>

</html>