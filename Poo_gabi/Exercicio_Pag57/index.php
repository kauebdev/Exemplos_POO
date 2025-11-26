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
            digite primeiro numero: <input type="number" name="N1" id=""><br><br>
            digite segundo numero: <input type="number" name="N2" id=""><br><br>

            <input type="submit" value="some"><br><br>
        </form>
    </center>
</body>
</html>

<?php
if ($_POST){
    require_once "classe.php";
    $n1 = $_POST["N1"];
    $n2 = $_POST["N2"];
    $obj = new Classe;
    $obj->n1 = $n1;
    $obj->n2 = $n2;

    $soma = $obj->Somar();
    include "index.php";
    echo "<center>".$soma."</center>";
}
?>