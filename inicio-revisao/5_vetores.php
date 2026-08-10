<?php

// Vetor (array simples)
$frutas = ["Maça", "Banana", "Uva"];

// Exibindo (Usando laço)
foreach ($frutas as $indice => $fruta) {
    echo "Posição $indice: $fruta\n";
}

// Matriz (array completo "Linhas e colunas")
$matriz = [
    ["Max Verstappen", "Lando Norris", "Oscar Piastri"],
    ["Charles LecLerc", "Lewis Hamilton", "George Russel"],
    ["Fernando Alonso", "Carlos Sainz", "Ayrton Senna"]
];

// Exibindo nomde dos pilotos
echo "\n \n";
echo "Melhores pilotos da F1: \n";
foreach ($matriz as $linha) {
    foreach ($linha as $piloto) {
        echo $piloto . " | ";
    }
    echo "\n";
}