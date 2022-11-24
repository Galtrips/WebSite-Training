<?php
session_start();
require_once __DIR__ . "/../include/functionConnected.php";
remember();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <?php require_once __DIR__ . "/../module/head.php"; ?>
    <title>Abonnez-vous</title>
</head>

<body>

    <?php require_once __DIR__ . "/../module/header.php"; ?>
    <section id="1">
        <form class="formulaire" enctype="multipart/form-data">

            <label for="email">E-mail :</label>
            <input id="email" type="email" name="email" required></input>

            <label for="mdp">Mot de Passe :</label>
            <input id="mdp" type="password" name="password" required></input>

            <fieldset>
                <legend>Identité</legend>
                <label for="nom">Nom</label>
                <input id="nom" type="text" name="nom" required></input>
                <label for="prenom">Prenom</label>
                <input id="prenom" type="text" name="prenom" required></input>
            </fieldset>

            <label for="date">Mot de Passe :</label>
            <input id="date" type="date" name="date" required></input>

            <label for="adress">Adresse :</label>
            <input id="adress" type="text" name="adress" required></input>

            <label for="postal">Code Postal :</label>
            <input id="postal" pattern="[0-9]{5}" type="text" name="postal" required></input>

            <label for="ville">Ville :</label>
            <input id="ville" type="text" name="ville" required></input>

            <label for="sexe">Sexe :</label>
            <select id="sexe" name="sexe">
                <option value="Men" selected>Homme</option>
                <option value="Women">Femme</option>
                <option value="Other">Autre</option>
            </select>

            <label for="avatar">Photo :</label>
            <input type="file" id="avatar" name="avatar" accept=".jpg, .png">

            <fieldset>
                <legend>Loisir</legend>
                Loisir1<input type="checkbox" name="fruit" value="loisir1">
                Loisir2<input type="checkbox" name="fruit" value="loisir2">
                Loisir3<input type="checkbox" name="fruit" value="loisir3">
                Loisir4<input type="checkbox" name="fruit" value="loisir4">
            </fieldset>

            <label for="color">Couleur :</label>
            <input id="color" type="color" name="color" required></input>


            <button type=”submit”>Envoyer</button>
            <button type=”reset”>Effacer</button>
        </form>
    </section>

    <?php require_once __DIR__ . "/../module/footer.php"; ?>

</body>

</html>