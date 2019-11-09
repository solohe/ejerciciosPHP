<?php
/* $animales = array( array ( "Perro", "Mastin", 100 ),//00-01-02
 array ( "Gato", "Persa", 150 ),//10-11-12
 array ( "Gato", "Siames", 190 ),//20-21-22
 array ( "Perro", "Boxer", 25 ),//30-31-32
 array ( "Canario", "Timbrado", 250 ));//40-41-42
print_r($animales);
echo "<br>";
echo "<br>";
Realizar:
i) Recorrido del array bidimensional mediante el uso de variables.
j) Recorrido del array bidimensional usando un bucle while y un bucle for.
k) Recorrido del array bidimensional mediante el uso de dos for.
l) Recorrido del array bidimensional mediante el uso de dos foreach.*/

//i
echo "Recorrido del array bidimensional mediante el uso de variables:". "\n";
$animales0 = $animales[0];
echo $animales0[0] . "\n";
echo $animales0[1] . "\n";
echo $animales0[2] . "\n";
$animales1 = $animales[1];
echo $animales1[0] . "\n";
echo $animales1[1] . "\n";
echo $animales1[2] . "\n";
$animales2 = $animales[2];
echo $animales2[0] . "\n";
echo $animales2[1] . "\n";
echo $animales2[2] . "\n";
$animales3 = $animales[3];
echo $animales3[0] . "\n";
echo $animales3[1] . "\n";
echo $animales3[2] . "\n";
$animales4 = $animales[4];
echo $animales4[0] . "\n";
echo $animales4[1] . "\n";
echo $animales4[2] . "\n";

//j
echo "Recorrido del array bidimensional usando un bucle while y un bucle for:". "\n";
while (list(, $valor) = each($animales)) {
    for ($x = 0; $x < count($valor); $x++) {
        echo $valor[$x] . "\n";
    }
}

//k
echo "Recorrido del array bidimensional mediante el uso de dos for:". "\n";
for ($x = 0; $x < count($animales); $x++) {
    $subarray = $animales[$x];
    for ($y = 0; $y < count($subarray); $y++) {
        echo $subarray[$y] . "\n";
    }
}

//l
echo "Recorrido del array bidimensional mediante el uso de dos foreach:". "\n";
foreach ($animales as $subarray1) {
    foreach ($subarray1 as $value) {
        echo "$value" . "\n";
    }
}

?>