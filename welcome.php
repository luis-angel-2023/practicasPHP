<?php
//recuperar los valores de los imput 
$nombre = $_POST["name"];
$edad = $_POST["edad"];
if ($edad>=18)
    echo "<p>Puede votar<p>";
else
    echo "NO Puede votar";
?>