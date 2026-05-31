<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $operador = $_POST['operadores'];


    if ($operador == "somar") {
        echo "valor da soma é :" . $n1 + $n2;
    } else if ($operador == "subtrair") {
        echo "valor da subtração é :" . $n1 - $n2;
    } else if ($operador == "multiplicar") {
        echo "valor da multiplicação é :" . $n1 * $n2;
    } else if ($operador == "dividir") {
        echo "valor da divisão é:" . $n1 / $n2;
    } else {
        echo "por favor, escolha uma opção válida";
    }






    ?>





</body>

</html>