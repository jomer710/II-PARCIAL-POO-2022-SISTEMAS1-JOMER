 <!DOCTYPE html>
<html lang="es">

<head>
<meta charset="utf-8">
</head>
<body>
<?php
define('TAM',10); //definimos la constante para el tamaño
echo "<table border=1>"; //creamos la tabla
$n=1;
for ($n1=1; $n1<=TAM; $n1++)
{
 if ($n1 % 2 == 0) //Si la división de la variable $n1 entre dos da 0 creamos una fila gris
 echo "<tr bgcolor=#bdc3d6>";
 else
 echo "<tr>"; //creamos fila blanca cuando no sea divisible entre 2
 for ($n2=1; $n2<=TAM; $n2++)
 {
 echo "<td>", $n, "</td>"; //creamos una celda y mostramos el número
 $n=$n+1; //sumamos 1 al número mostrado para la siguiente vuelta del bucle
 }
 echo "</tr>"; //cerramos la fila
}
echo "</table>"; //cerramos la tabla
?>
</body>
</html>