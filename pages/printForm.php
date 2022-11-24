<?php
session_start();
require_once __DIR__ . "/../include/functionConnected.php";
remember();
?>

<html lang="fr">

<head>
    <?php require_once "../module/head.php"; ?>
    <title>Contacts - Information</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php require_once "../module/header.php"; ?>

    <table>
        <tr>
            <th>Topic</th>
            <th>Email</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Content</th>
        </tr>
        <tr>
            <td><?= $_SESSION['topic'] ?></td>
            <td><?= $_SESSION['email'] ?></td>
            <td><?= $_SESSION['nom'] ?></td>
            <td><?= $_SESSION['prenom'] ?></td>
            <td><?= $_SESSION['content'] ?></td>

        </tr>
    </table>

    <?php require_once "../module/footer.php"; ?>

</body>

</html>