<?php
// Récupérer la partie "path" de l'URL
$page = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

// Nettoyer le slash de fin éventuel
$page = rtrim($page, '/');

// Router selon la page
switch($page) {
    case '':
    case '/':
    case '/home':
        include "controle/home.php";
        break;

    case '/services':
        include "controle/services.php";
        break;

    case '/contact':
        include "controle/contact.php";
        break;

    case '/about':
        include "controle/about.php";
        break;

    default:
        include "controle/404.php";
        break;
}
