<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $preco = $_POST['preco'];
    $desconto = $_POST['desconto'];
    $resultado = $preco - (($preco * $desconto) / 100);
    echo "O valor do produto com o desconto é : " . $resultado;


    ?>
</body>

</html>