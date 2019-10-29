<?

/*Dada la variable $cadena, en el que le asignáis vuestro nombre y apellidos en
minúsculas. Modificar la cadena cambiando la primera letra de del nombre y de los
apellidos a mayúsculas. Posteriormente, mostrarlo por pantalla combinando con
texto.*/

$cadena = "carlos santaniello lozano";
$cadena = ucwords($cadena);
echo("Mi nombre es: " . $cadena);
?>