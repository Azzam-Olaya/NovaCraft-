<?php

$page = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

switch($page) {
    case "/":
        include "controle/home.php";
        break;

    case "/home":
        include "controle/home.php";
        break;

    case "/services":
        include "controle/services.php";
        break;

    case "/contact":
        include "controle/contact.php";
        break;

    case "/about":
        include "controle/about.php";
        break;

    default:
        include "views/404.php";
        break;
}
?>
