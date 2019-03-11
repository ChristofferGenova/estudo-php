<html>
<head>
    <title>Formulário</title>
</head>

<body>
<h1>Formulário com PHP Validação</h1>
<form action="recebe_form_validacao.php" method="post">
    <label for="">Nome</label><br>
    <input type="text" name="nome"><br><br>

    <label for="">E-mail</label><br>
    <input type="text" name="email"><br><br>

    <fieldset>
        <legend>Área de interesse</legend>
        <input type="checkbox" name="interesses[]" id="" value="informatica"> Informática <br>
        <input type="checkbox" name="interesses[]" id="" value="esporte"> Esporte <br>
        <input type="checkbox" name="interesses[]" id="" value="esporte"> Compras <br>
        <input type="checkbox" name="interesses[]" id="" value="moda"> Moda <br>
        <input type="checkbox" name="interesses[]" id="" value="ciencia"> Ciência <br>
        <input type="checkbox" name="interesses[]" id="" value="religiao"> Religião <br>
    </fieldset>
    <br>

    <label for="">Onde conheceu?</label><br>
    <select name="onde_conheceu" id="">
        <option value="">Selecione</option>
        <option value="google">Google</option>
        <option value="amigos">Amigos</option>
        <option value="tv">TV</option>
    </select><br><br>

    <label for="">Mensagem</label><br>
    <textarea name="mensagem" id="" cols="30" rows="30"></textarea><br><br>
    <fieldset>
        <legend>Redirecionar para:</legend>
        <input type="radio" name="redirecionar" id="" value="home">Home<br>
        <input type="radio" name="redirecionar" id="" value="contato">Contato<br>
    </fieldset>

    <hr>

    <button type="submit">Enviar</button>
</form>
</body>
</html>