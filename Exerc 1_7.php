<?php

$x = isset($_GET['num1']) ? (float)$_GET['num1'] : 0; 
$y = isset($_GET['num2']) ? (float)$_GET['num2'] : 0;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Comparação de Números</title>
    <meta charset="UTF-8">
</head>
<body>
    <h2>Comparação entre <?php echo $x; ?> e <?php echo $y; ?></h2>
    <ul>
        <li><?php echo "$x == $y : " . ($x == $y ? "Verdadeiro" : "Falso"); ?></li>
        <li><?php echo "$x != $y : " . ($x != $y ? "Verdadeiro" : "Falso"); ?></li>
        <li><?php echo "$x > $y : " . ($x > $y ? "Verdadeiro" : "Falso"); ?></li>
        <li><?php echo "$x < $y : " . ($x < $y ? "Verdadeiro" : "Falso"); ?></li>
        <li><?php echo "$x >= $y : " . ($x >= $y ? "Verdadeiro" : "Falso"); ?></li>
        <li><?php echo "$x <= $y : " . ($x <= $y ? "Verdadeiro" : "Falso"); ?></li>
        <li><?php echo "$x === $y : " . ($x === $y ? "Verdadeiro" : "Falso"); ?></li>
        <li><?php echo "$x !== $y : " . ($x !== $y ? "Verdadeiro" : "Falso"); ?></li>
    </ul>
    <form method="get">
        <label>Número 1: <input type="number" name="num1" value="<?php echo $x; ?>"></label><br>
        <label>Número 2: <input type="number" name="num2" value="<?php echo $y; ?>"></label><br>
        <button type="submit">Comparar</button>
