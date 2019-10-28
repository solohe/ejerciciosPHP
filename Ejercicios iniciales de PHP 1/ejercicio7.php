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

<?php #Hacerlo en array
$var1 = 2.5; 
$var2 = 2.6; 
$var3 = -3.1;

echo  ("El entero inferior de ". $var1 ." es: " .floor($var1). "\n");
echo ("El entero superior de ". $var1 ." es: " .ceil($var1). "\n");
echo  ("El entero inferior de ". $var2 ." es: " .floor($var2). "\n");
echo ("El entero superior de ". $var2 ." es: " .ceil($var2). "\n");
echo  ("El entero inferior de ". $var3 ." es: " .floor($var3). "\n");
echo ("El entero superior de ". $var3 ." es: " .ceil($var3). "\n");
?>