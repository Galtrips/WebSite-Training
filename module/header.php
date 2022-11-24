<?php
//require_once( __DIR__ ."/../include/debug.php");
//debug(basename($_SERVER['PHP_SELF']), true);
//PHP SELF

function active_class(string $link, string $title): string
{
    if ($link == "/") {
        $link = "/index.php";
    }
    $class = "";
    $currentFile = basename($_SERVER["PHP_SELF"]);
    if ($currentFile === basename($link)) {
        $class .= "active";
    }
    $html =  '<li class="' . $class . '"><a class="' . $class . '"href="' . $link . '">' . $title . '</a></li>';
    return $html;
}

require_once __DIR__ . "/../include/functionConnected.php";

?>

<header>
    <nav class="menu">
        <ul>
            <?= active_class("/", "Accueil") ?>
            <?= active_class("", "Présentation") ?>
            <?= active_class("/pages/contact.php", "Contact") ?>
            <li class="deroulant">
                <a href="/pages/blog.php">Blog</a>
                <ul class="sous">
                    <?= active_class("/articles/article1.php", "Article 1") ?>
                    <?= active_class("/articles/article2.php", "Article 2") ?>
                    <?= active_class("/articles/article3.php", "Article 3") ?>
                    <?= active_class("/articles/article4.php", "Article 4") ?>
                </ul>
            </li>
            <?= active_class("/pages/abonnement.php", "Abonnez-vous") ?>
            <?= active_class("", "Statistiques") ?>
            <?php
            if (!is_connected()) {
                echo active_class("/pages/login.php", "Connexion");
            } else {
                echo active_class("/module/disconnect.php", "Déconnexion");
            }
            ?>
        </ul>
    </nav>
    <label for="burger">
        <input type="checkbox" name="burger" id="burger">
        <img src="/img/burger.png" class="burger" alt="burger">
        <img src="/img/close.png" class="close" alt="close">
        <div class="menuBurger">
            <nav class="hamburger">
                <ul>
                    <?= active_class("/", "Accueil") ?>
                    <?= active_class("", "Présentation") ?>
                    <?= active_class("/pages/contact.php", "Contact") ?>

                    <?= active_class("/articles/article1.php", "Article 1") ?>
                    <?= active_class("/articles/article2.php", "Article 2") ?>
                    <?= active_class("/articles/article3.php", "Article 3") ?>
                    <?= active_class("/articles/article4.php", "Article 4") ?>

                    <?= active_class("/pages/abonnement.php", "Abonnez-vous") ?>
                    <?= active_class("", "Statistiques") ?>
                    <?php
                    if (!is_connected()) {
                        echo active_class("/pages/login.php", "Connexion");
                    } else {
                        echo active_class("/module/disconnect.php", "Déconnexion");
                    }
                    ?>
                </ul>
            </nav>
        </div>
    </label>
</header>