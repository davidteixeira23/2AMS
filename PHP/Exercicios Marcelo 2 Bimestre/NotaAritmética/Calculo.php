<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    $aluno = $_POST['aluno'];
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];
    $n4 = $_POST['n4'];

    $Media = ($n1 + $n2 + $n3 + $n4) / 4;

    if ($Media > 6) {
        echo "Aluno " . $aluno . " aprovado";
    } else if ($Media < 3) {
        echo "Aluno" . $aluno . " reprovado";
    } else {
        echo "Aluno " . $aluno . " fará o exame";
    }

    ?>




</body>

</html>