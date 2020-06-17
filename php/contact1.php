<?php

if(isset($_POST['nom'])){

    // Mail serveur
    ini_set('SMTP','imap.proximus.be');
    ini_set('smtp_port',993);
    //ini_set("sendmail_from", "myemail@test.com")

    // email
    $for = "web2020.jessica@gmail.com";

    $nom = strip_tags(trim($_POST['nom']));
    $prenom = strip_tags(trim($_POST['prenom']));
    $email = strip_tags(trim($_POST['email']));
    $email_confirmation = strip_tags(trim($_POST['email_confirmation']));
    $message = strip_tags(trim($_POST['message']));


    $subject = 'Mail venant de mon site';
    $headers = 'From: '. $email . "\r\n" .
        'Reply-To: '. $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    if(mail($for, $subject, $message, $headers)){

        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <title>Projet préfo</title>
            <meta charset="utf-8" />
            <link rel="stylesheet" type="text/css" href="css/contact.css">
        </head>

        <body class="body">

        <h1>Votre message a bien été envoyé!</h1>

        </body>
        </html>
        <?php

    }
}

?>