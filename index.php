<?php
if(!isset($_GET["p"])){
    //on importe le fichier home.php qui se trouve dans le dossier files, include permet d'importer n'importe quel fichier local
    include "php/home.php";
//"p" existe
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
        case "cv":
            include "php/cv.php";
            break;
        case "contact":
            include "php/contact.php";
            break;
        case "contact1":
            include "php/contact1.php";
            break;
    }
}

