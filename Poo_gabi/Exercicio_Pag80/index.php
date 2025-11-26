<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <form action="index.PHP" method="post">
            digite o nome do produto: <input type="text" name="Nome"><br><br>
            digite o preço de custo: <input type="number" name="Custo"><br><br>
            digite o preço de venda: <input type="number" name="Venda"><br><br>

            <input type="submit" value="calcule lucro"><br><br>
        </form>
    </center>
</body>
</html>
<?php
if ($_POST){
    require_once "produto.php";
    $nome = $_POST["Nome"];
    $custo = $_POST["Custo"];
    $venda = $_POST["Venda"];

    $obj = new Produto($nome, $custo, $venda);

    $obj->calcularMargemLucro();

    include "index.php";
    echo "<center>
    o produto ".$obj->GetNome()." <br><br>
    tem custo de ".$obj->GetPrecoCusto()." <br><br>
    tem venda de ".$obj->GetPrecoVenda()." <br><br>
    com lucro de ".$obj->GetMargemLucro()." <br><br>
    porcentagem de ".$obj->GetMargemLucroPorcentagem()." <br><br>
    </center>";
}
?>