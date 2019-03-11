<?php

/*Validar valores vazios
* empty() -> "", 0, null, false, array()
* Não valida campos com dois espaços, ex: "  "
* utilizar trim() para retirar os espaço em branco
* strip_tags() -> retirar codigos script digitados em campo de texto
*/

$nome = trim($_POST['nome']);
$interesses = $_POST['interesses'] ?? null;
$mensagem = strip_tags($_POST['mensagem']);

if (empty($nome)){
    echo "Informe o nome!<br>";
}

if (is_null($interesses)){
    echo "Selecione pelo menos um item de interesse!<br>";
}

echo $mensagem;