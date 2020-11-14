<?php
$couleur = $_GET['coul'];

// definir une superglobale pour aller chercher l'information dans un autre fichier questionnaire1.php
?>


<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Reponse au questionnaire 1</title>
</head>
<body>

<h1 align="center">
    Votre couleur preferee est la couleur <?php echo $couleur; ?>
    <br>
    Votre couleur preferee est la couleur <?=  $couleur; ?>
    <!-- le "php echo" peut etre remplacee par un simple "plus petit, point d'interogation et egale -->
    


</h1>


</body>
</html>