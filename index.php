<?php
session_start();
require_once "include/functionConnected.php";
remember();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <?php require_once __DIR__ . "/module/head.php" ?>
    <title>Accueil</title>
    <link rel="stylesheet" href="/css/template.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>

<body>
    <?php require_once __DIR__ . "/module/header.php"; ?>

    <?php

    if (is_connected()) {
        echo '<h1 id="bvn" class="h3 mb-3 font-weight-normal"> Bienvenue ' . $_SESSION['user']['name'] . '. <br>Vous etes ' . $_SESSION['roles'] . ' ! </h1>';
    }
    ?>
    <?php require_once __DIR__ . "/module/footer.php"; ?>
</body>

</html>