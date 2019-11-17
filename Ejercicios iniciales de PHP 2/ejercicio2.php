 <?php
/* 
- Realizar una función matrizBidimensional, que cree una matriz bidimensional de n
filas y m columnas. El primer valor a introducir será el entero x, la matriz se irá
incrementando de p en p. La función devolverá la matriz construida.
Mostrar la matriz usando:
a) Las funciones print_r() o var_dump().
b) Construir una matrizBidimensional para 5 filas y 7 columnas, empezando
por el valor 3 y el incremento será de 2.
Ejemplo:
Para la fila 0 y la columna 0 toma el valor 3
Para la fila 0 y la columna 1 toma el valor 5
Para la fila 0 y la columna 3 toma el valor 7
*/

//a
function matrizBidimensional($n,$m,$x,$p) {
    $array=[];
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $m; $j++) {
            $array[$i][$j]=$x;
            $x+=$p;
        }
        
    }
    return $array;
}

print_r(matrizBidimensional(5, 10, 6, 3));

var_dump(matrizBidimensional(5, 10, 6, 3));
echo"\n";

//b
$array=matrizBidimensional(5, 7, 3, 2);
for ($i = 0; $i < count($array); $i++) {
    for ($j = 0; $j < count($array[$i]); $j++) {
        echo "\nPara la fila $i y la columna $j toma el valor ".$array[$i][$j];
        
    }
        echo "\n-----------------------------------------------------";
    
}
?>