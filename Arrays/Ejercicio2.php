<?php
/* $arr = array ("Mamifero" => "Ballena","Insecto" => "Hormiga");
reset($arr);
while( list( ,$valor)=each($arr)) echo "Valor: $valor<br \>\n";
Resultado:
Valor: Ballena
Valor: Hormiga

Mostrar los índices y valores del ejercicio anterior usando el
bucle while y foreach.
Mostrar los resultados
*/

$arr = array("Mamifero" => "Ballena", "Insecto" => "Hormiga");
reset($arr);
while (list($indice, $contenido) = each($arr))
  echo "Indice: $indice, contenido: $contenido"."\n";

foreach($arr as $indice => $contenido) {
 print "Indice: $indice, contenido: $contenido"."\n";
}    
?>