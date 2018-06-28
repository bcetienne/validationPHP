<!DOCTYPE html>
<html lang="en">

<head>
  <?php
    include_once('./templates/head.php');
    include_once('./functions.php');
  ?>
    <title>Connexion / inscription</title>
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
          <li class="nav-item">
            <a class="nav-link" href="./cart.php">Panier</a>
          </li>
          <li class="nav-item active">
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

    <div class="row">
      <div class="col-lg-6">
        <h1>Inscrivez-vous</h1>
          <div class="form-group">
            <label for="emailSignIn">Adresse e-mail</label>
            <input type="email" class="form-control" id="emailSignIn" aria-describedby="emailHelp" placeholder="email@domaine.com">
          </div>
          <div class="form-group">
            <label for="passwordSignIn">Mot de passe</label>
            <input type="password" class="form-control" id="passwordSignIn" placeholder="Mot de passe">
          </div>
          <button type="submit" class="btn btn-primary" onclick="signInJS(emailSignIn, passwordSignIn)">Envoyer</button>
      </div>
      <div class="col-lg-6">
        <h1>Connectez-vous</h1>
          <div class="form-group">
            <label for="emailLogIn">Adresse e-mail</label>
            <input type="email" class="form-control" id="emailLogIn" aria-describedby="emailHelp" placeholder="email@domaine.com">
          </div>
          <div class="form-group">
            <label for="passwordLogIn">Mot de passe</label>
            <input type="password" class="form-control" id="passwordLogIn" placeholder="Mot de passe">
          </div>
          <button type="submit" class="btn btn-primary" onclick="logInJS(emailLogIn, passwordLogIn)">Envoyer</button>
      </div>
    </div>

  </div>
  <?php
    include_once('./templates/bootstrap-call.php');
    include_once('./templates/footer.php');
  ?>
</body>

</html>