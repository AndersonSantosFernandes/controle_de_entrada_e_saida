<?php


?>
<!DOCTYPE html>
<html lang="pt br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/principal.css">
    <title>Tela de login</title>
</head>
<body>
    <header id="cabecalho">
        <h1>Controle de entrada e saída funcionários</h1>
    </header>
    <div id="master">
        <div id="indexMain">
            <div id="login">
                
            </div>
            <div id="ponto">
            <form action="sessao.php" method="POST">
                    <input id="log" type="email" name="emails" id="" placeholder="E-mail" required maxlength="50">
                    <input id="log" type="password" name="senhas" id="" placeholder="Senha" required maxlength="12" minlength="6">
                    <input id="log" type="submit" value="Logar">
                </form>
                <div id="msgLogin">
                    <p>Já é usuário? Faça o login. <br> Se não, se cadastre <a href="telaCadastro.php">aqui</a></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>