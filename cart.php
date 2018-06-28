<!DOCTYPE html>
<html lang="en">

<head>
  <?php
    include_once('./templates/head.php');
    include_once('./functions.php');
    session_start();
    $productsPrice = [
      '1' => 30,
      '2' => 15,
      '3' => 10,
      '4' => 50,
      '5' => 100,
      '6' => 90
    ];
  ?>
    <title>Panier</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="./index.php">Sportfit</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="./index.php">Accueil
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item active">
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
  <div class="container">
    <header>
      <h1>Contenu du panier</h1>
    </header>
    <section>
      <?php 

    if (empty($_COOKIE)) {
      echo 'Votre panier est vide';
    } else {
      $arrayCookie = $_COOKIE;
      $total = 0;
      foreach ($arrayCookie as $key => $value) {
        $total += intval($value);
        switch ($key) {
          case 1:
            echo 'Nom de l\'article : Sac de sport <br>';
            break;
          case 2:
            echo 'Nom de l\'article : Claquettes <br>';
            break;
          case 3:
            echo 'Nom de l\'article : Sac en plastique <br>';
            break;
          case 4:
            echo 'Nom de l\'article : Veste <br>';
            break;
          case 5:
            echo 'Nom de l\'article : Chaussures street-wear <br>';
            break;
          case 6:
            echo 'Nom de l\'article : Chaussures de running <br>';
            break;
        }
        echo 'Quantité : ' . $value / $productsPrice[$key] . '<br>';
        echo 'Prix total : ' . $value . ' € <br>';
        echo '<button type="button" class="btn btn-danger" onclick="removeToCartJS(' . $key . ',' . $productsPrice[$key] . ')">Supprimer un article du total</button> <br><br>';
      }

      echo "Sous-total : $total €";
    }
    ?>
      <br>
      <br>
      <button type="button" class="btn btn-danger" onclick="clearCartJS()">Vider le panier</button>
    </section>
  </div>

  <?php
    include_once('./templates/footer.php');
    include_once('./templates/bootstrap-call.php');
  ?>
</body>

</html>