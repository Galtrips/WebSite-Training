<?php
session_start();
require_once __DIR__ . "/../include/functionConnected.php";
remember();
if (is_connected()) {
  header('Location: /index.php');
}
?>

<!doctype html>
<html lang="fr">

<head>
  <?php
  include __DIR__ . '/../module/head.php';
  ?>
  <link rel="stylesheet" href="../css/template.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body class="text-center">
  <?php require_once "../module/header.php" ?>
  <form class="form-signin" method="POST" action="/include/connect.php">
    <h1 class="h3 mb-3 font-weight-normal">Formulaire de connexion</h1>

    <label for="inputEmail">Adresse Email</label>
    <input name="email" type="text" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>

    <label for="inputPassword">Mot de passe</label>
    <input name="motdepasse" type="password" id="inputPassword" class="form-control" placeholder="Password" required>

    <div class="checkbox mb-3">
      <label>
        <input name="souvenir" type="checkbox" value="remember-me"> Se souvenir de moi
      </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Connexion</button>
    <a href="/pages/inscription.php">Vous n'avez pas de compte ? S'inscrire</a>
    <p class="mt-5 mb-3 text-muted">&copy; 2017-2020</p>
  </form>
</body>

</html>