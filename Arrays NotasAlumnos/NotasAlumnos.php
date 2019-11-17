<?php
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

//c
echo "Ejercicio c:\n";
function mostrarNotasAlumno($arNotas, $al){
	foreach ($arNotas as $key=>$arrays) {
		if ($key===$al) {
			$alumno=$key ;
			    foreach ($arrays as $key=>$value) {
				        echo"La nota del alumno $alumno para la asignatura $key es $value\n";
				    }
		}  
	}
}
mostrarNotasAlumno($notasAlumnos, 'AL3');

//d
echo "Ejercicio d:\n";
function Mostrar_NotaMasAlta_Alumno($arNotas, $al){
	$notaMasAlta=0;
	$asignatura="";
	$alumno="";
	foreach ($arNotas as $key=>$arrays) {
		if ($key===$al) {
			$alumno=$key ;
			    foreach ($arrays as $key=>$value) {
				        if ($value > $notaMasAlta) {
				        	$asignatura=$key;
				        	$notaMasAlta=$value;
				        }
				    }
		}  
	}
	echo "La nota más alta del  alumno $alumno, es un $notaMasAlta en $asignatura";
}
Mostrar_NotaMasAlta_Alumno($notasAlumnos, 'AL2');
?>