<?php
    include_once("conexao.php");
    include("verificaLogin.php");
    $entrar = isset($_POST['serial'])?$_POST['serial']:"";
    $entraSai = "Esperando código";
    $mostraCodigo = null;
    if( empty($_POST['serial']))
    {    
        print "";
    }
    else
    {
        $consultaCodigo = "SELECT codigo from entrasai WHERE codigo = '$entrar'";
        $consultar = mysqli_query($conexao, $consultaCodigo);
        $codigo = mysqli_fetch_array($consultar);
        $linhaCodigo = mysqli_affected_rows($conexao);
            if($linhaCodigo >= 1)
            {                
                 $mostraCodigo = $codigo[0];
            }
            else
            {

            }
        if($mostraCodigo == $entrar)
        {
            $entraSai = "Saiu";
            $sqlDelete = "DELETE from entrasai WHERE codigo = '$entrar'";            
            $salvarDelete = mysqli_query($conexao, $sqlDelete);            
            $sqlSalvar = "INSERT into salvamento(codigo, data_entraSai, hora, entrou_saiu)
            VALUES('$entrar',CURRENT_DATE, CURRENT_TIME, '$entraSai');";
            $salvarSalvar = mysqli_query($conexao, $sqlSalvar);            
            
        }
        else
        {
            $entraSai = "Entrou";
            $sql = "INSERT into entrasai(codigo, dataEntrada) VALUES('$entrar', CURRENT_DATE)";
            $salvar = mysqli_query($conexao, $sql);
            $linhas = mysqli_affected_rows($conexao);
            $sqlSalvar = "INSERT into salvamento(codigo, data_entraSai, hora, entrou_saiu)
            VALUES('$entrar',CURRENT_DATE, CURRENT_TIME, '$entraSai');";
            $salvarSalvar = mysqli_query($conexao, $sqlSalvar);
            
        }         
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/principal.css">
        <style>
            input[type = submit]{
                display: none;
            }
        </style>
        <title>Cancela</title>
    </head>
    <body>
        <fieldset id="form">
        <legend>Entrada e Saída</legend>
            <form action="" method="POST">
                <input type="text" name="serial" id="" autofocus>
                <input type="submit" value="Entrar">
            </form>
            <a href="Consulta.php"><h2>Consultar</h2></a>
        </fieldset>
       
        <div id="msg">
            <?php
                echo"<h1>$entrar <br> $entraSai</h1>";
            ?>
        </div>
        <a href="deslogar.php">Encerrar sessão</a>
    </body>
</html>