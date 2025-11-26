<?php
if ($_POST){
    require_once "class.php";
    $nome = $_POST["txtNome"];
    $custo = $_POST["txtCusto"];
    $venda = $_POST["txtVenda"];

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