<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <form action="post_index.PHP" method="post">
            digite o tipo da conta: <select name="txtTipo" id="">
                <option value="poupança"> Conta Poupança </option>
                <option value="fundo"> Fundo Simples </option>
            </select><br><br>
            digite o Valor que deseja depositar: <input type="number" name="txtValor"><br><br>
            digite a quantidade de meses: <input type="number" name="txtTempo"><br><br>

            <input type="submit" value="Simule"><br><br>
        </form>
    </center>
</body>
</html>