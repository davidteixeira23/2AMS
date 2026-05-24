<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $_salario = $_POST['salario'];
    $_bonus = ($_salario * 10) / 100;
    $_salariobonificado = $_salario + $_bonus;
    $_valorImposto = (($_salariobonificado * 20) / 100);
    $_salarioliquido = $_salariobonificado - $_valorImposto;

    echo "O salario liquido é";
    echo "<br>";
    echo $_salarioliquido;

    ?>
</body>

</html>