<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Traitement</title>
</head>
<body>


<h1 align="center">
<?php   
    $lePrenomArecuperer = $_POST['prenom']; //un superglobale. le mot "prenom" vient du fichier formulaire.php pour recuperer les donnees
    $leNomArecuperer = $_POST['nom'];
    echo 'Bonjour '.$lePrenomArecuperer. ' ' .$leNomArecuperer.', comment ca va? <br />';
    // le mot "prenom" vient du fichier formulaire.php associer avec name="prenom"

   // echo 'Bonjour '.$_POST['prenom'].', comment ca va? <br />';  // Ou bien mettre le superglobale directement en concatenation

   echo "Bonjour $lePrenomArecuperer $leNomArecuperer, comment ca va?"; // plus simple avec les guillemets
?>
</h1>






</body>
</html>