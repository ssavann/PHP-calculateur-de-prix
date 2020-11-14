<?php
    $lePrenom = $_GET['prenom']; 
    $leNom = $_GET['nom'];
    //Mettre superglobale en en-tete
    //Les variables doivent definies avant le echo
?>


<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Traitement2</title>
</head>
<body>




<h2 align="center">
Bonjour <?php echo $lePrenom; ?> <?php echo $leNom; ?>, comment ca va?
</h2>









</body>
</html>