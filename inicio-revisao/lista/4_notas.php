<?php

// Vetor (array simples)
$alunos = ["10", "8", "6", "7", "8"];

// Exibindo (Usando laço)
foreach ($alunos as $indice => $alunos) {
    echo "Nota $indice: $alunos\n";
}

// Média
$media = $alunos[0] + $alunos[1] + $alunos[2] + $alunos[3] + $alunos[4] / 5;

// Exibindo as notas
echo "\n \n";
echo ": \n";
foreach ($matriz as $linha) {
    foreach ($linha as $piloto) {
        echo $piloto . " | ";
    }
    echo "\n";
}