<?php

require_once("01_Producto.php");
require_once("01_ProdMueble.php");

$objProducto = new Producto("Mesa rustica",350000);
echo " precio producto ".number_format($objProducto->getPrecio())."<br>";

echo"ESTADO ".Producto::$estado."<br>";
$objProducto->setEstado(" Inactivo")."<br>";
echo"Estado ".Producto::$estado."<br>";
$objProducto->getInfoProducto();

print_r('<pre>');
print_r($objProducto->getInfoProducto());
print_r("</pre>");
echo "<br>";
echo "<h3> Clase Mueble </h3>";

$objMuebles=new Mueble("Mesa con marco",270000,"Marron","Pino");
echo "<br>";
$objMuebles->getInfoProducto();
print_r('<pre>');
print_r($objMuebles);
print_r('</pre>');

?>