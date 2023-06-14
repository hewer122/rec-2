<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Cadastro de Computadires</title>
    <link rel='stylesheet' type='text/css' media='screen' href='css/estilo.css'>
</head>
<body>
    <form action="index.php" method="POST">
        <h1>Cadastro de Computadores</h1>
        <p>Codigo:<input type="int" name="codigo" size="50" maxlength="120" required></p>
        <p>Laboratorio:<input type="int" name="laboratorio" size="50" maxlength="120" required></p>
        <p>Memoria:<input type="int" name="memoria" size="50" maxlength="120" required></p>
        <p>Hd:<input type="int" name="hd" size="50" maxlength="120" required></p>
        <p>Processador:<input type="real" name="processador" size="50" maxlength="120" required></p>
        <p>Compra:<input type="date" name="compra" min="1960-01-01" max="<?= date("Y-m-d") ?>" required></p>
        <p>Preco:<input type="decimal" name="preco" size="50" maxlength="120" required></p>
        <p><input type="submit" name="botao" value="Cadastrar"></p>
    </form>
<?php
    if (isset($_POST['botao'])) {
        require_once './persistence/ComputadorPA.php';
        require_once './model/Computador.php';
        $computador=new Computador();
        $computadorPA=new ComputadorPA();
        $computador->setCod_cmp($_POST['codigo']);
        $computador->setLaboratorio($_POST['laboratorio']);
        $computador->setMemoria($_POST['memoria']);
        $computador->setHd($_POST['hd']);
        $computador->setProcessador($_POST['processador']);
        $computador->setCompra($_POST['compra']);
        $computador->setPreco($_POST['preco']);
        $cod_cmp=$computadorPA->retornaUltimo();
        if(!$cod_cmp){
            $cod_cmp=0;
        }
        $cod_cmp++;
        $computador->setCod_cmp($cod_cmp);
        $resposta=$computadorPA->cadastrar($computador);
        if(!$resposta){
            echo "<h2>Erro na tentativa de cadastrar um computador!</h2>";
        }else{
            echo "<h2>Computador cadastrado com sucesso!</h2>";
        }
    }
?>
</body>
</html>