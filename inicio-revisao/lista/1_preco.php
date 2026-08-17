<?php

// Variáveis
$preco = 200;
$quantidade = 2;

// Cálculo
$total = $preco * $quantidade;
$desconto = 0;
$totaldesconto = 0;

// Aplicando desconto
if ($total >= 200) {
    $desconto = $total * 0.1;
    $totaldesconto = $total - $totaldesconto;
    echo "O valor final é: $totaldesconto";
} else {
    echo "O valor final é: $total";
}