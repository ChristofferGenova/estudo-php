<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$interesses = $_POST['interesses'];
$onde_conheceu = $_POST['onde_conheceu'];
$mensagem = $_POST['mensagem'];
$redirecionar = $_POST['redirecionar'];

echo "<h1>Dados do Formulário</h1><br>";
echo "<strong>Nome:</strong> " . $nome . "<br>";
echo "<strong>E-mail:</strong> " . $email . "<br>";

echo "<strong>Interesses:</strong>" . "<br>";
echo "<ul>";
foreach ($interesses as $interesse){
    echo "<li>$interesse</li>";
}
echo "</ul>";
echo "<strong>Onde Conheceu:</strong> " . $onde_conheceu . "<br>";
echo "<strong>Redirecionar:</strong> " . $redirecionar . "<br>";

