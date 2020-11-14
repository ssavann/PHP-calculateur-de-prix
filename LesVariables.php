<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Les Variables</title>
</head>
<body>

<h1 align="center">
    
<?php

    $prenom;
    $pre_nom;
    $PRENOM;
    $preNom;
    $monPrenom = 'Carl';  //chaine de charactere, on ajoute une apostrophe ou des guillemets
    //Important, ne pas mettre des accents sur les variables. Ex: "prénom"

    echo "Par rapport aux variables <br />" ;
    echo "Je m'appelle $monPrenom <br />";
    echo "Bonjour $monPrenom, comment ca va? <br />";
    echo 'Bonjour $monPrenom, comment ca va? <br />';
    echo 'Bonjour '.$monPrenom.', comment ca va? <br />';  
    /*a cause des apostrophes, il faut concatenir la variable
    sinon, utiliser les guillemets pour eviter la concatenation */


?>
</h1>


<!-- La Concatenation  -->

<?php   



?>





</body>
</html>