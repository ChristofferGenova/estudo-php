<?php
// Media e frequencia requerida
$media = 7;
$frequencia = 60;

// Media e frequencia do aluno
$media_aluno = 8;
$frequencia_aluno = 55;

if ($media_aluno >= $media && $frequencia_aluno >= $frequencia ) {
    echo "Aluno com media: $media_aluno e frequencia: $frequencia_aluno aprovado.";
} else {
    echo "Aluno com media: $media_aluno e frequencia: $frequencia_aluno reprovado.";
}