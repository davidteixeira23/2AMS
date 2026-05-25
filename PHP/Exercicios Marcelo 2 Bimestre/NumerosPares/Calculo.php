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


    function verificarPar($n1)
    {
        if ($n1 % 2 == 0) {
            return "par";
        } else {
            return "impar";
        }
    }

    echo "o número" . $n1 . "é" . verificarPar($n1);

    ?>



</body>

</html>