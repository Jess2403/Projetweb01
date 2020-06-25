<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projet</title>
    <link rel="stylesheet" href="css/projet.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.toggle').click(function(){
                $('ul').toggleClass('active');
            })
        })
    </script>
</head>
<body>
<section>
    <header>
        <a href="#" class="logo"><img src="img/logojess01.jpg" class="logojess"/></a>
        <a class="toggle">Menu</a>
        <ul class="active">
            <li>
                <a href="./" class="nav-links">HOME</a>
            </li>
            <li>
                <a href="?p=presentation" class="nav-links">PRESENTATION</a>
            </li>
            <li>
                <a href="?p=Tutos" class="nav-links">TUTOS</a>
            </li>
            <li>
                <a href="?p=liens" class="nav-links">LIENS</a>
            </li>
            <li>
                <a href="?p=cv1" class="nav-links">CV</a>
            </li>
            <li>
                <a href="?p=contact" class="nav-links">CONTACT</a>
            </li>
        </ul>
    </header>
</section>
<div class="div1">
    <img class="logo02" src="img/fondlogo.png"/>
    <h1>Voici quelques-un de mes projets en cours!</h1>
    <p>Vous trouverez ci-dessous quelques liens vers mes autres projets en cours pour l'instant il y en a peu mais je compte bien y rajouter quelques liens d'ici la fin de la formation</p>
    <h2>Mon début de projet personnel de site de rencontre</h2>
    <p><a href="http://jessica.webdev-cf2m.be/amourtoujours/php/">Amour Toujours</a></p><br>
    <p>Je dois encore pas mal le paufiner et le énormément le développer</p>
    <h2>Mon projet de préformation</h2>
    <p><a href="http://jessica.webdev-cf2m.be/projetpersonnel/html/index.html">Site préfoweb</a></p><br>
    <h2> Quelques idées futures:</h2>
    <ol class="liste2">
        <li>Un blog avec mes meilleures recettes de cuisine. Où des personnes pourront se créer un profil et rajouter leurs propres recettes</li>
        <li>J'aimerais faire un e-commerce avec comparaison de prix. Si j'ai le même produit que d'autres sur le site je veux voir ceux qui ont les mêmes prix que moi.
                Et ainsi je saurai si je peux diminuer ou augmenter mes prix comparé au marché</li>
        <li>Faire une appli mobile jeux d'échec</li>
        <li>Faire un répertoire de vidéo karaoké téléchargeable.</li>
    </ol>
<footer>
    <p class="liens" >
        <a href="?p=Tutos">Précédant</a>/
        <a href="?p=liens">Suivant</a></p><br>
    <br>
    <hr>
    <p class="footer">Copyright &copy; CF2M 2020</p>
</footer>
</div>
</body>
</html>
