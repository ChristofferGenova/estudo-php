<?php
require __DIR__.'/session.php';

$user = $_SESSION['user'] ?? null;

//Se usuario = null entao retorna para a pagina de login
if (!$user){
    header('location: login.php');
    exit;
}
?>

<h1>Página Protegida</h1>
<p>Olá <?php echo $user['email']; ?><br></p>