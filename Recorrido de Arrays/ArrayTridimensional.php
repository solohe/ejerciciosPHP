<?php
/*
Crear una array tridimensional asociativo a vuestro gusto de 3 filas x 3 columnas, llamado $tri.
Realizar:
p) Recorrido mediante el uso de variables.
q) Recorrido mediante el uso de tres foreach.
 */

//n
$tri = array(
    "Clientes" => array(
        "Cliente01" => array("Nombre"=>"Pepe", "Apellido1"=>"Pérez", "Apellido2"=>"Pérez"),
        "Cliente02" => array("Nombre"=>"Paco", "Apellido1"=>"González", "Apellido2"=>"Martín"),
        "Cliente03" => array("Nombre"=>"María", "Apellido1"=>"Álvarez", "Apellido2"=>"Nuñez")
    ),
    "Proveedores" => array(
        "Proveedor01" =>array("Nombre"=>"Juan", "Apellido1"=>"Martínez", "Apellido2"=>"Pérez"),
        "Proveedor02" =>array("Nombre"=>"Ana", "Apellido1"=>"Pérez", "Apellido2"=>"González"),
        "Proveedor03" => array("Nombre"=>"Silvia", "Apellido1"=>"Pérez", "Apellido2"=>"Pérez")
    ),
    "Empleados" => array(
        "Empleado01" =>array("Nombre"=>"Carlos", "Apellido1"=>"Pérez", "Apellido2"=>"Martínez"),
        "Empleado02" =>array("Nombre"=>"Victor", "Apellido1"=>"Martín", "Apellido2"=>"Pérez"),
        "Empleado03" =>array("Nombre"=>"Manuel", "Apellido1"=>"Nuñez", "Apellido2"=>"Pérez")
    )
);

$Cliente01 = $tri["Clientes"]["Cliente01"]["Nombre"]." ".$tri["Clientes"]["Cliente01"]["Apellido1"]." ".$tri["Clientes"]["Cliente01"]["Apellido2"];
$Cliente02 = $tri["Clientes"]["Cliente02"]["Nombre"]." ".$tri["Clientes"]["Cliente02"]["Apellido1"]." ".$tri["Clientes"]["Cliente02"]["Apellido2"];
$Cliente03 = $tri["Clientes"]["Cliente03"]["Nombre"]." ".$tri["Clientes"]["Cliente03"]["Apellido1"]." ".$tri["Clientes"]["Cliente03"]["Apellido2"];
$Proveedor01 = $tri["Proveedores"]["Proveedor01"]["Nombre"]." ".$tri["Proveedores"]["Proveedor01"]["Apellido1"]." ".$tri["Proveedores"]["Proveedor01"]["Apellido2"];
$Proveedor02 = $tri["Proveedores"]["Proveedor02"]["Nombre"]." ".$tri["Proveedores"]["Proveedor02"]["Apellido1"]." ".$tri["Proveedores"]["Proveedor02"]["Apellido2"];
$Proveedor03 = $tri["Proveedores"]["Proveedor03"]["Nombre"]." ".$tri["Proveedores"]["Proveedor03"]["Apellido1"]." ".$tri["Proveedores"]["Proveedor03"]["Apellido2"];
$Empleado01 = $tri["Empleados"]["Empleado01"]["Nombre"]." ".$tri["Empleados"]["Empleado01"]["Apellido1"]." ".$tri["Empleados"]["Empleado01"]["Apellido2"];
$Empleado02 = $tri["Empleados"]["Empleado02"]["Nombre"]." ".$tri["Empleados"]["Empleado02"]["Apellido1"]." ".$tri["Empleados"]["Empleado02"]["Apellido2"];
$Empleado03 = $tri["Empleados"]["Empleado03"]["Nombre"]." ".$tri["Empleados"]["Empleado03"]["Apellido1"]." ".$tri["Empleados"]["Empleado03"]["Apellido2"];

echo "Clientes:\n";
echo "Cliente 01: $Cliente01\n";
echo "Cliente 02: $Cliente02\n";
echo "Cliente 03: $Cliente03\n";
echo "Proveedores:\n";
echo "Proveedor 01: $Proveedor01\n";
echo "Proveedor 02: $Proveedor02\n";
echo "Proveedor 03: $Proveedor03\n";
echo "Empleados:\n";
echo "Empleado 01: $Empleado01\n";
echo "Empleado 02: $Empleado02\n";
echo "Empleado 03: $Empleado03\n";

//p

foreach ($tri as $key=>$arrays) {
    echo"$key:\n";
    foreach ($arrays as $key=>$array) {
        echo"$key:\n";
        foreach ($array as $key=>$value){
            echo "$key: $value ";
        }
echo"\n";
    }
        
}
?>

