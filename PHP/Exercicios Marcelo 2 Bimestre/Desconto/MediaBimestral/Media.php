<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../MediaBimestral/style.css">
</head>

<body>

    <?php
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];
    $nota4 = $_POST['nota4'];
    $_notaFinal = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
    echo $_notaFinal;
    if ($_notaFinal >= 5) {
        echo "aluno aprovado";
    } else echo "aluno reprovado";


    ?>


</body>

</html>