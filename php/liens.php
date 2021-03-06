<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liens</title>
    <link rel="stylesheet" href="css/liens.css">
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
            </li >
            <li>
                <a href="?p=Tutos" class="nav-links">TUTOS</a>
            </li>
            <li>
                <a href="?p=projet" class="nav-links">PROJET</a>
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
    <img src="img/fondlogo.png" class="logo02"/>
    <h1>Liste de liens utiles.</h1>
        <p>Vous trouverez ci-dessous quelques liens qui m'ont servit pour confectionner mon site:</p>
    <h2>Pour mes animations:</h2>
    <div class="liste1"
        <ol>
            <li>Pour faire mes boutons de navigation dans ma page "ACCUEIL".<br>
                <a href="https://www.youtube.com/watch?v=ex7jGbyFgpA">Bouton néon</a>
            </li>
            <li>Pour faire ma sphère 3d qui est sur ma page "ACCUEIL".<br>
                <a href="https://www.youtube.com/watch?v=icgbxlqf9Kc">Sphère animation 3D</a>
            </li>
            <li>Pour faire mon animation texte dans ma page "ACCUEIL"<br>
                <a href="https://www.youtube.com/watch?v=ajhJnfS_FK4">Effet animation texte</a>
            </li>
            <li>Pour faire le swipe responsive que vous trouverez dans ma page "PRESENTATION".<br>
                <a href="https://www.youtube.com/watch?v=kw1wnvWjgCw">Swipe 3d responsive:</a>
            </li>
        </ol>
    </div>
    <h2>Pour mes recherches:</h2>
    <div class="liste1">
        <ol>
            <li>Pour faire mes fonds d'écran en linear-gradient. ( Mes couleurs de fonds de pages).</li>
                <a href="https://developer.mozilla.org/fr/docs/Web/CSS/linear-gradient">Linear-gradient</a>
            <li>Pour faire ma barre de navigation responsive sur toutes mes pages sauf "ACCUEIL".</li>
                <a href="https://www.youtube.com/watch?v=lYw-FE60Dws">Navbar responsive</a>
            <li>Pour divers soucis en css</li>
                <a href="https://developer.mozilla.org/fr/docs/Web/CSS/font-style">Ici pour les font-style(gras, italic,...</a>
            <li>
                <a href="https://www.formget.com/css-lists/">Pour faire mes listes de liens.</a>
            </li>
            <li>Pour m'aider dans ma mise en page de ma page cv pour l'intégration d'un paragraphe dans mon encadré faisant partie de mon titre.</li>
                <a href="https://www.cssdebutant.com/debuter-en-css-integrer-du-css-page-HTML.html">Mise en page</a>
        </ol>
    </div>
<footer>
    <p class="liens" >
        <a href="?p=projet">Précédant</a>/
        <a href="?p=cv1">Suivant</a></p><br>
    <br>
    <hr>
    <p class="footer">Copyright &copy; CF2M 2020</p>
</footer>
</div>
</body>
</html>
