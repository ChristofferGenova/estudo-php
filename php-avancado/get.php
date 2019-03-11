<?php
// Utilizando query string
//echo $_GET['planeta'] . "<br>";
//echo $_GET['cor'];


//Validando se a variavel está definida
$planeta = isset($_GET['planeta']) ? $_GET['planeta'] : null;
if ($planeta != null){
    echo $planeta;
} else {
    echo 'Planeta não informado.';
}
echo "<br>";

//coalesce
//$cor = $_GET['cor'] ?? "Cor não informada.";
//echo $cor;