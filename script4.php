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

echo "Le prix total est : " . $total . " DH";
?>