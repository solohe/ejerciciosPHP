<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
<title>Práctica 2 PHP</title>
</head>
<body>
	<h2>Práctica 2 PHP (Array Bidimensional + CSS)</h2>
<?php
/* 
Realizar una función crearMatriz que cree una matriz de tantas filas y columnas
como deseemos. La matriz se rellenará a partir de un valor inicial y se irá
incrementando según otro valor. Los índices de fila será X1, X2, … Xn y los índices de
columna serán Y1, Y2, …Yn. La función devolverá la matriz creada.
*/
echo "<h3><hr>Ejercicio A</h3>";
function crearMatriz($filas, $columnas, $valor, $incremento) {
    $matriz=[];
    for ($i = 1; $i <= $filas; $i++) {
        for ($j = 1; $j <= $columnas; $j++) {
            //$fila=
            $matriz['X'.$i]['Y'.$j]=$valor;
            $valor+=$incremento;
        }
     }   
    
    
    return $matriz;
}
$nuevaMatriz=crearMatriz(10,5,20,10);
print_r($nuevaMatriz);

/* Crear una matriz $mat de 3 filas, 2 columnas, valor inicial 3 e incremento 2.
Mostrar la estructura del array, que quedará de la siguiente manera:
 Array ( [X1] => Array ( [Y1] => 3 [Y2] => 5 ) [X2] => Array ( [Y1] => 7 [Y2] => 9 ) [X3] => Array ( [Y1] => 11 [Y2] => 13 ) )
*/
echo "<h3><hr>Ejercicio B</h3>";
$mat=crearMatriz(3,2,3,2);
print_r($mat);

/* 
Realizar una función mostrarMatriz que muestre una matriz bidimensional.
Mostrar la matriz $mat, la cual quedará de la siguiente manera:
Para el índice X1 e índice Y1 tiene el Valor: 3
Para el índice X1 e índice Y2 tiene el Valor: 5
Para el índice X2 e índice Y1 tiene el Valor: 7
Para el índice X2 e índice Y2 tiene el Valor: 9
Para el índice X3 e índice Y1 tiene el Valor: 11
Para el índice X3 e índice Y2 tiene el Valor: 13
*/
echo "<h3><hr>Ejercicio C</h3>";
function mostrarMatriz($matriz){
    
    foreach ($matriz as $claveX=>$matInt) {
        
        
        foreach ($matInt as $claveY => $valor) {
            echo "Para el índice $claveX e índice $claveY tiene valor: $valor <br>";
        }
        echo "<br>";
    }
}
mostrarMatriz($nuevaMatriz);

/*
 Realizar una función dibujarMatriz, que muestre un array bidimensional en una
tabla como se muestra en el ejemplo:
donde:
o La tabla es colapsada y centrada.
o Los elementos e índices estén centrados.
o Se muestran los índices X’s .
o El borde de las celdas será de 2px y del color a elegir.
o El color de fondo de las celdas será a elegir.
o Los valores por defecto para bordes es blue y para el fondo de las
celdas orange.
Dibujar la matriz $mat.
*/
echo "<h3><hr>Ejercicio D</h3>";
function dibujarMatriz($array, $bdColor='blue',$bgColor='orange'){
    echo "<table style='border-collapse: collapse; text-align: center;margin: 0 auto'><tr>";
    foreach ($array as $key1=>$value1) {
        echo"<th style='padding: 0 1em; border: 2px solid $bdColor; background-color:$bgColor'>$key1</th>";
        foreach ($value1 as $key2=>$value2) {
            echo"<td style='padding: 0 1em; border: 2px solid $bdColor; background-color:$bgColor'>$value2</td>";
        }
        echo"</tr>";
    }
    echo"</table>";
    
}
dibujarMatriz($mat);
/*
Realizar una función dibujarMatriz2, que muestre un array bidimensional en una
tabla como se muestra en el ejemplo:
donde:
o La tabla es colapsada y centrada.
o Los elementos e índices estén centrados.
o Se muestran los índices X’s e Y’s.
o El borde de las celdas será de 2px y del color a elegir.
o El color de fondo de las celdas será a elegir.
o Los valores por defecto para bordes es red y para el fondo de las
celdas lightgreen.
Dibujar la matriz $mat. (según esta segunda versión)
*/
echo "<h3><hr>Ejercicio E</h3>";
function dibujarMatriz2($array, $bdColor='red',$bgColor='lightgreen'){
    echo "<table style='border-collapse: collapse; text-align: center;margin: 0 auto'><tr><td>";
    
    list(,$claves)=each($array);
    
    foreach ($claves as $key=>$value) {
            echo"<th style='padding: 0 1em; border: 2px solid $bdColor; background-color:$bgColor'>$key</th>";
        }
        echo"</tr>";
    
    foreach ($array as $key1=>$value1) {
        echo"<th style='padding: 0 1em; border: 2px solid $bdColor; background-color:$bgColor'>$key1</th>";
        foreach ($value1 as $key2=>$value2) {
            echo"<td style='padding: 0 1em; border: 2px solid $bdColor; background-color:$bgColor'>$value2</td>";
        }
        echo"</tr>";
    }
    
    echo"</table>";
    
}
dibujarMatriz2($mat);
?>
</body>
</html>
