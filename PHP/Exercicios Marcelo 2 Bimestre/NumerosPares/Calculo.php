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

    if ($n1 % 2 == 0) {
        echo "o numero é par";
    } else {
        echo "O numero é impar";
    }


    ?>



</body>

</html>
