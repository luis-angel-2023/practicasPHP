<?php
echo "My first PHP script!";
echo "<br>";
echo "Mis datos:";
$nombre = "Luis Angel";
$edad = 20;
$estatura = 1.75;
echo " Soy ...". strtoupper($nombre). "tengo " .$edad . " años y mido " .$estatura . " metros ";
echo "<br>";
echo "<br>";
var_dump(is_int($nombre));
echo "<br>";
$x = 34;
$y = 356.78;
$z = $x+$y;
echo "La suma es $x + $y = $z <br>";
echo "<br>";
$x = 51;
$y = 34;
$z = $x-$y;
echo "La resta es $x + $y = $z <br>";
echo "<br>";
$x = 5;
$y = 8;
$z = $x * $y;
echo "La multiplicacion es $x * $y = $z <br>";
echo "<br>";
$x = 28;
$y = 7;
$z = $x / $y;
echo "La division es $x / $y = $z <br>";
echo "<br>";
echo(pi());
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practicas PHP</title>
</head>
<body>

</body>
</html>