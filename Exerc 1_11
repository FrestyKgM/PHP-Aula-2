<?php
$capital = isset($_GET['capital']) ? (float)$_GET['capital'] : 0;
$taxa = isset($_GET['taxa']) ? (float)$_GET['taxa'] : 0;
$tempo = isset($_GET['tempo']) ? (int)$_GET['tempo'] : 0;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Juros Simples - Tabela de Montante</title>
    <meta charset="UTF-8">
</head>
<body>
    <h2>Juros Simples</h2>
    <form method="get">
        <label>Capital: <input type="number" name="capital" value="<?php echo $capital; ?>" step="0.01"></label><br>
        <label>Taxa (%): <input type="number" name="taxa" value="<?php echo $taxa; ?>" step="0.01"></label><br>
        <label>Tempo: <input type="number" name="tempo" value="<?php echo $tempo; ?>"></label><br>
        <button type="submit">Calcular</button>
    </form>

    <?php if ($capital > 0 && $taxa > 0 && $tempo > 0): ?>
        <h3>Capital: <?php echo $capital; ?> | Taxa: <?php echo $taxa; ?>% | Tempo: <?php echo $tempo; ?></h3>
        <table border="1" cellpadding="5">
            <tr>
                <th>Tempo</th>
                <th>Montante</th>
                <th>Juro</th>
            </tr>
            <tr>
                <td>0</td>
                <td><?php echo number_format($capital, 2, ',', '.'); ?></td>
                <td>0</td>
            </tr>
            <?php
            for ($t = 1; $t <= $tempo; $t++) {
                $juro = $capital * ($taxa / 100) * $t;
                $montante = $capital + $juro;
                echo "<tr>
                        <td>$t</td>
                        <td>" . number_format($montante, 2, ',', '.') . "</td>
                        <td>" . number_format($juro, 2, ',', '.') . "</td>
                      </tr>";
            }
            ?>
        </table>
    <?php endif; ?>
</body>
