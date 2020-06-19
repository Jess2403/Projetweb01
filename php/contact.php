<!DOCTYPE html>
<html>
    <head>
        <title>Contact</title>
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
        <div class="container">
        <form method="post" action="?p=contact1">
            <fieldset>
                <legend>Vos coordonnées</legend>
                <div class="row">
                    <div class="col-25">
                        <label for="nom">Nom:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="nom" name="nom" required autofocus>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="prenom">Prénom:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="prenom" name="prenom" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="email">Votre adresse email:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="email" name="email" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="cemail">Confirmation de l'email:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="cemail" name="email_confirmation" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label id="label">Votre message</label>
                    </div>
                    <div class="col-75">
                        <textarea id="message" name="message" style="height:200px" placeholder="Ecrivez votre message ici..." required></textarea>
                    </div>
                </div>
                <div class="row" id="bouton">
                    <input type="submit" value="Envoyer">
                </div>
            </fieldset>
        </form>
        </div>
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
