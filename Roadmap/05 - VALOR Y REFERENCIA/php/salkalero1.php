<?php
// asignación de variables "por valor" y "por referencia
// Por valor
function agrega_valor($num) {
    $num++;
    return $num;
}

// Por referencia
function agrega_referencia(&$num) {
    $num++;
    return $num;
}


$num_base = 15;
echo "Número de base: " . $num_base;
echo "Resultado de asignación por valor: " . agrega_valor($num_base);
echo "\n";
echo "Resultado de asignación por asignación: " . agrega_referencia(&$num_base);