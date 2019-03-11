<?php
//session_save_path(__DIR__.'\sessions');
session_start();

//Criando a sessao
$_SESSION['usuario'] =[
    'nome' => 'Christoffer',
    'idade' => 21,
    'ativo' => true,
    'rate' => 4.3
];

//Removendo a sessao
//UNSET($_SESSION['usuario']);