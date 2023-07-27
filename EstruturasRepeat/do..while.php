<?php
$inicio = 25;
$fim = 57;

echo "Números pares no intervalo de $inicio a $fim usando 'do..while':\n";

$i = $inicio;
do {
    if ($i % 2 == 0) {
        echo $i . "\n";
    }
    $i++;
} while ($i <= $fim);
?>