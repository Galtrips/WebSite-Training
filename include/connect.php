<?php
session_start();

require_once __DIR__ . "/functionConnected.php";
require_once __DIR__ . "/connexion.php";

if (is_connected()) {
    redirectUser();
}

if (!empty($_POST['email']) && !empty($_POST['motdepasse'])) {
    $identity = htmlentities($_POST['email']);
    $mdp = $_POST['motdepasse'];

    /*
    if ($identity == "admin" && $mdp == "admin") {
        $_SESSION['connected'] = true;
        $_SESSION['username'] = $_POST['email'];
        $_SESSION['roles'] = "Administrateur";

        if (isset($_POST['souvenir'])) {

            setcookie('username', "admin", time() + 60 * 60 * 24, '/');
            setcookie('roles', "Administrateur", time() + 60 * 60 * 24, '/');
            $_COOKIE['username'] = "admin";
            $_COOKIE['roles'] = "Administrateur";
        }
        redirectUser();
    } else {*/
    $bdd = Connexion::getPdo();
    $stmt = $bdd->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$identity]);
    $res = $stmt->fetch();
    if ($res && password_verify($mdp, $res['password'])) {

        $_SESSION['connected'] = true;
        $_SESSION['user'] = $res;
        $_SESSION['roles'] = "Visiteur";

        if (isset($_POST['souvenir'])) {

            setcookie('username', $res['name'], time() + 60 * 60 * 24, '/');
            setcookie('roles', "Visiteur", time() + 60 * 60 * 24, '/');
            $_COOKIE['username'] = $res['name'];;
            $_COOKIE['roles'] = "Visiteur";
        }
        redirectUser();
    } else {
        header('Location: /pages/login.php');
    }
    //}
}
