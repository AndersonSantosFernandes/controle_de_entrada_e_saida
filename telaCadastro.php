<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/principal.css">
    <link rel="stylesheet" href="css/cadastro.css">
    <?php 
    // mostraCss()
     ?>
    <title>Página de cadástro</title>
</head>
<body>
    <header id="cabecalho">
        <h1>
            Faça seu cadástro
        </h1>
    </header>
<div id="cadastro">
    <form method="POST" action="cadastrar.php">
        <input class="cad" type="text" name="nome" id="" placeholder="Nome" required autofocus>
        <input class="cad" type="text" name="sobrenome" id="" placeholder="Sobrenome" required>
        <input class="cad" type="tel" name="telefone" id="" placeholder="Telefone" required>
        <input class="cad" type="email" name="email" id="" placeholder="E-mail" required>
        <input class="cad" type="password" name="senha" id="" placeholder="Senha" required>
        <input class="cad" type="password" name="confSenha" id="" placeholder="Confirmar" required>
        <input class="cad" type="submit" value="Cadastrar">
    </form>
    <div id="msgCadastro">        
        <p><a href="index.php">Página de login</a></p>
    </div>
</div>
</body>
</html>