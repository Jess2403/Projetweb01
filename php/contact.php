<!DOCTYPE html>
<html>
    <head>
        <title>Projet préfo</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <link rel="stylesheet" type="text/css" href="css/contact.css">
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $('.toggle').click(function(){
                    $('ul').toggleClass('active');
                })
            })
        </script>
    </head>
    <body class="body">
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
                    <a href="?p=projet" class="nav-links">PROJET</a>
                </li>
                <li>
                    <a href="?p=liens" class="nav-links">LIENS</a>
                </li>
                <li>
                    <a href="?p=cv" class="nav-links">CV</a>
                </li>
            </ul>
        </header>
    </section>
    <div>
        <h1>Contact</h1>
        <form method="post" action="contact1.php">
            <fieldset>
                <legend>Vos coordonnées</legend>
                <label>Nom:</label>
                <input type="text" name="nom" required autofocus><br>
                <label>Prénom:</label>
                <input type="text" name="prenom" required><br>
                <label>Votre adresse email:</label>
                <input type="text" name="email" required><br>
                <label>Confirmation de l'email:</label>
                <input type="text" name="email_confirmation" required><br>
                <legend>Votre message</legend>
                <textarea name="message" cols="60" rows="8" maxlength="1000" required></textarea><br>
                <input type="submit" name="envoi" value="Envoyer">
            </fieldset>
        </form>
            <footer>
                <p class="liens" >
                    <a href="?p=cv">Précédant</a>/
                    <a href="./">Retour vers Home</a></p><br>
                <br>
                <hr>
                <p class="footer">Copyright &copy; CF2M 2020</p>
            </footer>
    </div>
    </body>
</html>
