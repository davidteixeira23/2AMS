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

if ($n1 > $n2 && $n2 > $n3) {
    echo "$n1 > $n2 > $n3";
}
else if ($n1 > $n3 && $n3 > $n2) {
    echo "$n1 > $n3 > $n2";
}
else if ($n2 > $n1 && $n1 > $n3) {
    echo "$n2 > $n1 > $n3";
}
else if ($n2 > $n3 && $n3 > $n1) {
    echo "$n2 > $n3 > $n1";
}
else if ($n3 > $n1 && $n1 > $n2) {
    echo "$n3 > $n1 > $n2";
}
else if ($n3 > $n2 && $n2 > $n1) {
    echo "$n3 > $n2 > $n1";
}
else {
    echo "Existem números iguais.";
}

?>



</body>

</html>
