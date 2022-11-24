<?php
session_start();
require_once "../include/functionConnected.php";
remember();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <?php require_once __DIR__ . "/../module/head.php" ?>
    <title>Blog</title>
    <link rel="stylesheet" href="/css/template.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>

<body>
    <?php require_once __DIR__ . "/../module/header.php"; ?>

    <div class="container">
        <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark bg-6">
        <div class="col-md-6 px-0">
            <h1 class="display-4 font-italic">Les Blogs de notre site !</h1>
            <p class="lead my-3">Lorem, ipsum dolor sit, amet consectetur adipisicing elit. Excepturi itaque autem ducimus dolores ab consectetur, unde distinctio sed nulla modi! Maxime labore debitis quam illo omnis non animi obcaecati molestiae.</p>
        </div>
        </div>
    </div>

    <div class="container">
        <button class="btn btn-lg btn-outline-primary mg-5"><a>Créer un nouveau blog</a></button>
    </div>

    <div class="container mt-5">
        <div class="border border-secondary border-3 rounded">
            <h2 class="pb-2 border-bottom ml-5 mt-3 mb-5 mr-5">Les 5 derniers blogs</h2>
            
            <div class="ml-5 mb-2 mr-5">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">World</strong>
                        <h3 class="mb-0">Featured post</h3>
                        <div class="mb-1 text-muted">Nov 12</div>
                        <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="stretched-link">Continue reading</a>
                    </div>

                    <div class="col-auto d-lg-block">
                        <img class="bd-placeholder-img" src="/img/img-1.jpg" alt="" width="100%" height="250">
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php require_once __DIR__ . "/../module/footer.php"; ?>
</body>

</html>