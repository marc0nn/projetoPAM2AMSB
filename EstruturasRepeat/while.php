<?php
$inicio = 25;
$fim = 57;

echo "Números pares no intervalo de $inicio a $fim usando 'while':\n";

$i = $inicio;
while ($i <= $fim) {
    if ($i % 2 == 0) {
        echo $i . "\n";
    }
    $i++;
}
?>