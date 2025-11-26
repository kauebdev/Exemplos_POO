<?php
if ($_POST){
    require_once "class.php";

    $tipo = $_POST["txtTipo"];
    $valor = $_POST["txtValor"];
    $tempo = $_POST["txtTempo"];

    if ($tipo == "poupança") {
        $conta = new ContaPoupanca($valor, $tempo);

    } else {
        $conta = new ContaFundos($valor, $tempo);
    }

    $total = $conta->Calcular();

    include "index.php";
    echo "<center>o valor simulado é: ".number_format($total, 2,",", ".")."</center>";


}
?>