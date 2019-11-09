<?php
//Realizar un ejemplo de uso de Pilas mediante arrays

$array2 = array('Carlos', 'Santaniello', 'Lozano');
print_r(array_values($array2))."\n";

print_r(array_pop($array2))."\n";

print_r(array_values($array2))."\n";
echo " Ha sacado y eliminado \"Lozano\"."."\n";

print_r(array_push($array2, "Lozano"));
print_r(array_values($array2));
echo " Introducimos de nuevo \"Lozano\".";
?>