<?php

function is_connected(): bool
{
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    return !empty($_SESSION['connected']);
}

function redirectUser(): void
{
    header('Location: /index.php');
    exit();
}

function disconnect(): void
{
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    $_SESSION = [];
    unset($_SESSION['connected']);
    unset($_SESSION['user']);
    unset($_SESSION['roles']);

    setcookie('username', "", time() - 10, '/');
    unset($_COOKIE['username']);

    setcookie('roles', "", time() - 10, '/');
    unset($_COOKIE['roles']);

    session_destroy();

    header('Location: /index.php');
}

function remember(): void
{

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    if (isset($_COOKIE['username'])) {
        $_SESSION['user']['email'] = $_COOKIE['username'];
    }
    if (isset($_COOKIE['roles'])) {
        $_SESSION['roles'] = $_COOKIE['roles'];
    }
    if (isset($_SESSION['user']) && isset($_SESSION['roles'])) {
        $_SESSION['connected'] = true;
    }
}
