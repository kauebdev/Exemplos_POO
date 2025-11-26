<?php
if ($_POST){
    require_once "class.php";
    $n1 = $_POST["txtNum1"];
    $n2 = $_POST["txtNum2"];

    $obj = new Classe;
    $obj->n1 = $n1;
    $obj->n2 = $n2;

    $soma = $obj->Soma();
    include "index.php";
    echo "<center>".$soma."</center>";
}
?>