<?php
require_once('../models/QuizDAO.php');
$quiz = new QuizDAO();
$results = $quiz->selectQuizes();

$x = $results["qur_resultat"]; // Valor de X
$y = $results["uti_premiere_frequence_cardiaque"]; // Valor de Y
$n = 20; // Quantidade geral de valores

for ($i = 0; $i < 21; $i++) {
    $sumX += $x; // Somatório de X
    $sumY += $y; // Somatório de Y
    $sumXY += ($x*$y); // Somatório da multiplicação de X por Y
    $xx += ($x*$x); // Valor de x²
    $yy += ($y*$y); // Valor de y²
}

$sumXX += $xx; // Somatório de x²
$sumYY += $yy; // Somatório de y²

$sumTotalX = ($sumX*$sumX); // Quadrado do somatório de X
$sumTotalXY += ($sumX * $sumY); // Somatório da multiplicação dos somatórios de X por Y
$averageX = ($sumX/$n); // Média aritmética de X
$averageY = ($sumY/$n); // Média aritmética de Y

$m = $n($sumXY - [$sumX * $sumY]) / $n($sumXX - $sumTotalX); // Encontrando o valo de m

$b = $averageY + ($m*$averageX); // Encontrando o coeficiente b

$r = ($m*$x) + $b; // Fórmula da reta de regressão


