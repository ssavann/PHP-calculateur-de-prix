<?php
$prix = 9.90;

?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>

<h1 align="center"><?= $prix; ?> Euros HT</h1>

<form method="post" action="prixTotal1.php">
<p align="center">
    <input type="number" name="qt" placeholder="Quantite" />
    <input type="hidden" name="prix" value="<?= $prix; ?>" />  <!-- pour cacher le calculateur -->
    <input type="submit" value="Calculer" />

    <!-- le "prix" et "qt" vont etre transferer au fichier prixTotal1.php -->

</p>
</form>

</body>
</html>