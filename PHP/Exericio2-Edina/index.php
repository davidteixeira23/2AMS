<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $var1 = 1; // variavel do tipo inteiro (fica armazenada na memoria volatil)
    $varX = 9.50; // variavel do tipo float (ponto flutuante)
    $varY = 1.50; // variiavel do tipo float (ponto flutuante)
    $var2 = $varX + $varY; // var2 recebe o resultado de uma expressão matematica (soma)
    $varSTR = "Valor em String"; // variavel do tipo string (texto)
    $varbool = true; // variavel do tipo boolean, atribuição lógica(verdadeiro ou falso);

    echo "Exemplo de uma aplicação em php";
    print "<P>";

    echo "Conteúdo da variável varX;";
    echo $varX;
    print "<P>";

    echo "Conteúdo da variável varY;";
    echo $varY;
    print "<P>";

    echo "Conteúdo da variável var2;";
    echo $var2;
    print "<P>";

    echo "Conteúdo da variável varSTR;";
    echo $varSTR;
    print "<P>";

    echo "Conteúdo da variável varbool;";
    echo $varbool;
    print "<P>";

    ?>




</body>

</html>
