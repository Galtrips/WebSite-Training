<?php

/** 
 * Partie 1 du tp sur PDO
 * Sert à faire l'update des dates des utilisateurs...
 * Non utilisé directement sur le site web
 */

require_once "./include/connexion.php";

try {
    echo "start\n";
    $bdd = Connexion::getPdo();
    $bdd->exec('UPDATE users SET updated = datetime("now")');
    $stmt = $bdd->query('SELECT * FROM users');
    $res = $stmt->fetchAll();

    foreach ($res as $row) {
        $mdp = password_hash($row['password'], PASSWORD_DEFAULT);
        $bdd->exec('UPDATE users SET password ="' . $mdp . '" WHERE email= "' . $row['email'] . '"');
        set_time_limit(10);
    }

    echo "end\n";
} catch (PDOException $Exception) {
    echo $Exception->getMessage();
}
