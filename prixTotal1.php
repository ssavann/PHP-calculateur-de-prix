<?php 
    $lePrix = $_POST['prix'];  // le "prix" vient du fichier prix1.php (superglobale)
    $laQte = $_POST['qt'];  // le "qt" vient du fichier prix1.php (superglobale)
    $tva = 1.2; // taxe en europe
?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>

<?php //calcul du prix

    $total = $lePrix * $laQte; //affecter la reponse a "$total"
    $totalTTC = $total * $tva; //affecter la reponse avec taxe a "$totalTTC"

?>

<h1 align="center">
    Le prix total a payer est de <?= $total; ?> Euros HT. <br />
    Le prix TTC est de <?= $totalTTC; ?> Euros <br />
</h1>

<!-- ------------nouvelle facon --------------- -->

<?php //calcul du prix

    $totalPrix = $lePrix * $laQte; //affecter la reponse a "$totalPrix"
    $totalPrix = $totalPrix * $tva; // "$totalPrix" aura une nouvelle valeur

?>

<h1 align="center">
    
    Le prix TTC avec taxe est de <?= $totalPrix; ?> Euros <br />
</h1>


</body>
</html>