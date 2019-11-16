<?php
/* $productos =
array(array("Codigo"=> "CB", "Descripcion" =>" Cebollas","Precio"=> 100),
 //0codigo-0descripcion-0precio
 array("Codigo"=> "AC","Descripcion" => "Aceite","Precio"=> 120),
 //1codigo-1descripcion-1precio
 array("Codigo"=> "MZ","Descripcion" => "Manzanas", "Precio"=> 92)
 //2codigo-2descripcion-2precio
);
print_r($productos);
echo "<br>";echo "<br>";echo "<br>";
$productos2 =
array("prod1" =>array("Codigo"=> "CB", "Descripcion" =>" Cebollas","Precio"=> 100),
 //prod1codigo-prod1descripcion-prod1precio
 "prod2" =>array("Codigo"=> "AC","Descripcion" => "Aceite","Precio"=> 120),
 //prod2codigo-prod2descripcion-prod2precio
 "prod3" =>array("Codigo"=> "MZ","Descripcion" => "Manzanas", "Precio"=> 92)
 //prod3codigo-prod3descripcion-prod3precio
);
print_r($productos2);
echo "<br>";echo "<br>";echo "<br>";
Realizar para las dos variables $productos y $productos2:
m) Recorrido mediante el uso de variables.
n) Recorrido mediante el uso de un bucle while y otro for.
o) Recorrido mediante el uso de dos foreach.
*/

$productos = array(
    array(
        "Codigo" => "CB",
        "Descripcion" => " Cebollas",
        "Precio" => 100
    ),
    array(
        "Codigo" => "AC",
        "Descripcion" => "Aceite",
        "Precio" => 120
    ),
    array(
        "Codigo" => "MZ",
        "Descripcion" => "Manzanas",
        "Precio" => 92
    )
);
var_dump($productos);
print_r($productos);
$productos2 = array(
    "prod1" => array(
        "Codigo" => "CB",
        "Descripcion" => " Cebollas",
        "Precio" => 100
    ),
    "prod2" => array(
        "Codigo" => "AC",
        "Descripcion" => "Aceite",
        "Precio" => 120
    ),
    "prod3" => array(
        "Codigo" => "MZ",
        "Descripcion" => "Manzanas",
        "Precio" => 92
    )
);

//m
echo"Productos: \n";
echo "Posición 0.Codigo: " . $productos[0]['Codigo'] . "\n";
echo "Posición 0.Descripción: " . $productos[0]['Descripcion'] . "\n";
echo "Posición 0.Precio: " . $productos[0]['Precio'] . "\n";
echo "Posición 1.Codigo: " . $productos[1]['Codigo'] . "\n";
echo "Posición 1.Descripción: " . $productos[1]['Descripcion'] . "\n";
echo "Posición 1.Precio: " . $productos[1]['Precio'] . "\n";
echo "Posición 2.Codigo: " . $productos[2]['Codigo'] . "\n";
echo "Posición 2.Descripción: " . $productos[2]['Descripcion'] . "\n";
echo "Posición 2.Precio: " . $productos[2]['Precio'] . "\n";
echo"Productos2: \n";
echo "prod1.Codigo: " . $productos2['prod1']['Codigo'] . "\n";
echo "prod1.Descripción: " . $productos2['prod1']['Descripcion'] . "\n";
echo "prod1.Precio: " . $productos2['prod1']['Precio'] . "\n";
echo "prod2.Codigo: " . $productos2['prod2']['Codigo'] . "\n";
echo "prod2.Descripción: " . $productos2['prod2']['Descripcion'] . "\n";
echo "prod2.Precio: " . $productos2['prod2']['Precio'] . "\n";
echo "prod3.Codigo: " . $productos2['prod3']['Codigo'] . "\n";
echo "prod3.Descripción: " . $productos2['prod3']['Descripcion'] . "\n";
echo "prod3.Precio: " . $productos2['prod3']['Precio'] . "\n";

//n
echo"Productos: \n";
    for ($i = 0; $i < count($productos); $i ++) {
        while (list ($clave, $valor) = each($productos[$i])) {
            echo "$clave: $valor ";
        }
        echo "\n";
    }
echo"Productos2: \n";
$clavesProductos2=array_keys($productos2);
for ($i = 0; $i < count($productos2); $i ++) {
    while (list ($clave, $valor) = each($productos2[$clavesProductos2[$i]])) {
        echo "$clave: $valor ";
    }
    echo "\n";
}

//o
echo"Productos: \n";
$i = 0;
foreach ($productos as $producto) {
    echo "Producto $i: ";
    $i ++;
    foreach ($producto as $clave => $valor) {
        echo "$clave: $valor ";
    }
    echo "\n";
}

?>