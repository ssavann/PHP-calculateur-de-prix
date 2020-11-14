<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Mon document</title>
</head>
<body>


    <h1 align="center">Hello world!</h1>
    <br />
    
    What's up my man?
    <br />
    Ceci est un fichier PHP.

    <?PHP
        echo '<h2 align="center">\'Avec des apostrophes ou simple cote!\'</h2>';
        echo "<h2 align=\"center\">\"Avec des guillemets ou double cotes!\"</h2>";

    ?>
    <br />
    <h3 align="right">
    <?php
        echo 'Une autre façon de formatter le texte avec php';
    ?>
    </h3>

    <!-- Ceci est un commentaire html -->

    <?PHP   

        // Pour faire un commentaire
        echo 'pour faire un commentaire simple ligne, on utilise // <br />';
        
        echo 'pour faire un commentaire html, on utilise \<\!-- et --> <br />';

        /*
        Pour 
            un
                commentaire
                            multiligne

        */


    ?>


</body>
</html>