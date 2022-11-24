<?php
session_start();
require_once __DIR__ . "/../include/functionConnected.php";
remember();

if (!empty($_POST["topic"]) && !empty($_POST["email"]) && !empty($_POST["nom"]) && !empty($_POST["prenom"]) && !empty($_POST["content"])) {

    foreach ($_POST as $key => $ses) {
        $_SESSION[$key]  = $ses;
    }
    header("Location: " . __DIR__ . "/printForm.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <?php require_once __DIR__ . "/../module/head.php"; ?>

    <title>Contact</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php require_once __DIR__ . "/../module/header.php"; ?>
    <section id="1">
        <form class="formulaire" id="form" method="post">
            <label for="Topic">Topic :</label>
            <input id="Topic" type="text" name="topic" required>

            <label for="email">E-mail :</label>
            <input id="email" type="email" name="email" required></input>
            <script src="../js/emailClick.js"></script>

            <fieldset>
                <legend>Identité</legend>
                <label for="nom">Nom</label>
                <input id="nom" type="text" name="nom" required></input>
                <label for="prenom">Prenom</label>
                <input id="prenom" type="text" name="prenom" required></input>
            </fieldset>

            <label id="contentLabel" for="content">Message :</label>
            <textarea id="content" name="content" required></textarea>

            <button id="sendContact" type=”submit”>Envoyer</button>

            </script>
            <button type=”reset”>Effacer</button>
        </form>
    </section>
    <?php require_once __DIR__ . "/../module/footer.php"; ?>
</body>

</html>