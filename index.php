<?php
if(!isset($_GET["p"])){
    include "php/home.php";
}
else {
    $p = $_GET["p"];
    switch ($p) {
        case "presentation":
            include "php/presentation.php";
            break;
        case "Tutos":
            include "php/Tutos.php";
            break;
        case "projet" :
            include "php/projet.php";
            break;
        case "liens":
            include "php/liens.php";
            break;
        case "cv1":
            include "php/cv1.php";
            break;
        case "contact":
            include "php/contact.php";
            break;
        case "contact1":
            include "php/contact1.php";
            break;
    }
}

