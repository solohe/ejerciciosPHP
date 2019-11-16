<?php
/*
NOTAS DAW DIW DWS DWC
AL1     7   8   8   7
AL2     6   5   4   3
AL3     8   8   8   9
AL4     4   3   3   6
a) Crear la matriz asociativa notasAlumnos y muestra su estructura de array.
b) Realizar la función mostrarNotasAlumnos, para que muestre las notas por cada
alumno y asignatura de la siguiente manera:
El alumno AL1 de la asignatura DAW ha obtenido un 7
El alumno AL1 de la asignatura DIW ha obtenido un 8
….
c) Realizar la función mostrarNotasAlumno, que muestre las notas de cada
asignatura para un alumno dado, de la siguiente manera:
La nota del alumno AL1 para la asignatura DAW es 7
…
La nota del alumno AL1 para la asignatura DWC es 7
Realizar la llamada correspondiente para un alumno dado.
d) Realizar la función Mostrar_NotaMasAlta_Alumno, que nos devuelva la nota más
alta obtenida por un alumno dado.
Realizar la llamada correspondiente a la función y mostrar lo que devuelve.
*/

//a
$notasAlumnos = array(
    "AL1"=>array('DAW'=>7, 'DIW'=>8, 'DWS'=>8, 'DWC'=>7),
    "AL2"=>array('DAW'=>6, 'DIW'=>5, 'DWS'=>4, 'DWC'=>3),
    "AL3"=>array('DAW'=>8, 'DIW'=>8, 'DWS'=>8, 'DWC'=>9),
    "AL4"=>array('DAW'=>4, 'DIW'=>3, 'DWS'=>3, 'DWC'=>6)
);
print_r($notasAlumnos);

//b
function mostrarNotasAlumnos($arNotas){
	foreach ($arNotas as $key=>$arrays) {
	    $alumno=$key ;
	    foreach ($arrays as $key=>$value) {
		        echo"El alumno $alumno de la asignatura $key ha obtenido un $value\n";
		    }
	        
	}
}
mostrarNotasAlumnos($notasAlumnos)


?>