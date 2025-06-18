<?php
$typeChambre = $_GET['type'];
$nuite = $_GET['nuite'];
$nombrePersonnes = $_GET['nombrePersonnes'];
$avecPetitDejeuner = $_GET['avecPD'];


$prixNuit = 0;

if ($typeChambre === 'simple') {
    $prixNuit = 240;
} 
else if ($typeChambre === 'double') {
    $prixNuit = 340;
} 
else if ($typeChambre === 'multiple') {
    $prixNuit = 500;
}
$total = $prixNuit * $nuite;

if ($avecPetitDejeuner === 'oui') {
    $total += 40 * $nombrePersonnes * $nuite;
}


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ce script permet de calculer le prix total de réservation :</h1>
    <p>le prix total est <?php echo $total; ?> dh </p>
</body>
</html>

