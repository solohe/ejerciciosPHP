<?php
#El redondeo de 3.5 , 4, y de -12.36. Comprobar si son enteros o reales.
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
#Redondear el número pi en 4 decimales. Mostrarlo
echo "La aproximación de PI en 4 decimales es: ". round(pi(),4);
?>

<?php
#Redondear al entero inferior y entero posterior de los valores, 2.5, 2.6 y -3.1.
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
#Crear un array $max, que muestre el valor máximo y mínimo de una secuencia de valores reales
$valores = array(-2, 3.14, 1.67, -6874, 795874,41);
echo "El valor máximo del array es: ". max($valores). "\n";
echo "El valor mínimo del array es: ". min($valores). "\n";
?>

<?php
#Formatear el número 123456789.1234, para que tenga dos decimales y que tenga como separador de miles el . y como separador de decimales la ,
$numero = 123456789.1234;
echo "El número ". $numero . " con separadores es igual a: " . number_format($numero, 2, ",", "."). "\n";
?>

<?php #. Obtener un número aleatorio y mostrar su valor. ¿Cuál es el valor máximo que puede obtener? Usar las dos funciones.
echo "Máximo valor aleatorio posible: ". getrandmax() . "\n";
echo "Valor aleatorio: ". rand() . "\n";
?>

<?php #Obtener un número aleatorio comprendido entre 10 y 6789, usando dos funciones distintas. Mostrar los resultados.
echo "Número aleatorio: ". rand(10, 6789) . "\n";
echo "Número entero aleatorio: ". mt_rand(10, 6789). "\n";
?>