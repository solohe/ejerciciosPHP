<?php
$values = array(3.5, 4, -12.36);
foreach ($values as $value) {
    echo round($value). "\n";
    echo "is_int(";
    var_export($value);
    echo ") = ";
    var_dump(is_int($value));
}
?>

<?php
echo "La aproximación de PI en 4 decimales es: ". round(pi(),4);
?>

<?php
$values = array(2.5, 2.6, -3.1);
foreach ($values as $value) {
    #Entero inferior
    echo "El entero inferior de ";
    var_export($value);
    echo " es: ";
    echo (floor($value)). "\n";
    #Entero superior
    echo "El entero superior de ";
    var_export($value);
    echo " es: ";
    echo (ceil($value)). "\n";
}
?>

<?php
$numero = 123456789.1234;
echo "El número ". $numero . " con separadores es igual a: " . number_format($numero, 2, ",", "."). "\n";
?>