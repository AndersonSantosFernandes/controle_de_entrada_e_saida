<?php
    include_once("conexao.php");
    include("verificaLogin.php");
    $buscar = isset($_POST['busca'])?$_POST['busca']:"";
    if(empty($_POST['busca']))
    {
        $sql = "SELECT* from salvamento";
        $salvar = mysqli_query($conexao, $sql);
        $linhas = mysqli_affected_rows($conexao);
    }
    else
    {
        $sql = "SELECT* from salvamento where codigo = '$buscar'";
        $salvar = mysqli_query($conexao, $sql);
        $linhas = mysqli_affected_rows($conexao);
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/principal.css">
        <title>Consulta</title>
    </head>
    <body>
        <header id="cabecalho">
            <h1>Consulta</h1>
        </header>
        <fieldset id="form">
            
            <form action="" method="POST">
                <input type="text" name="busca" id="" autofocus>
                <input type="submit" value="Buscar">                
                <a href="index1.php"><h2>Inicio</h2></a>
            </form>
           
        </fieldset>       
        <table>
        <tr>
            <td>ID:</td>
            <td id="codigo">Código:</td>
            <td>Data:</td>
            <td>Hora:</td>
            <td>Entrada/Saída:</td>           
        </tr>
    <?php   
        function inverterData($data, $separar ='-', $juntar = '/'){
            return implode($juntar, array_reverse(explode($separar, $data)));
        } 
        while($exibir = mysqli_fetch_array($salvar))
        {
            $id = $exibir[0];
            $codigo = $exibir[1];
            $data = inverterData($exibir[2]);
            $hora = $exibir[3];
            $entraSai = $exibir[4];
            print"<tr>
            <td> $id </td>
            <td> $codigo </td>
            <td> $data </td>
            <td> $hora </td>
            <td> $entraSai</td>  
            </tr>";
        }
    ?>
</table>
    </body>
</html>