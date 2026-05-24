<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $numero1 = $_POST['num1'];
    $numero2 = $_POST['num2'];
    $numero3 = $_POST['num3'];
    $resultado = sqrt($numero1) + sqrt($numero2) + sqrt($numero3);
    echo "A soma quadratica dos valores é : " . $resultado;


    ?>


</body>

</html>