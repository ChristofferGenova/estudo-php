<?php

// Lendo o cookie
//var_dump($_COOKIE);

//Salvar arquivo com dados da sessao
//var_dump(session_save_path(__DIR__.'/../sessoes-cookies/sessions'));

session_start();
var_dump($_SESSION['usuario']);

