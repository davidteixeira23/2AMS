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
    $n3 = $_POST['n3'];

    if ($n1 > $n2 || $n2 > $n3) {
        echo "O numero 1 é maior que numero 2 que é maior que numero 3";
    } else if ($n1 > $n3 || $n3 > $n2) {
        echo "O numero 1 é maior que o numero 3 que é maior que o numero 2";
    } else if ($n2 > $n1 || $n1 > $n3) {
        echo "O numero 2 é maior que o numero1 que é maior que o numero 3";
    } else if ($n2 > $n3 || $n3 > $n1) {
        echo "O numero 2 é maior que o numero 3 que é maior que o numero2";
    } else if ($n3 > $n2 || $n2 > $n1) {
        echo "O numero 3 é maior que o numero 2 que é maior que o numero3";
    } else if ($n3 > $n2 || $n2 > $n1) {
        echo "O numero 3 é maior que o numero 2 que é maior que o numero 1";
    }

        12345


    ?>



</body>

</html>
