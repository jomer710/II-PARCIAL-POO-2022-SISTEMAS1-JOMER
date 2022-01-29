  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dias de la semana</title>
</head>
<body>
   
   
<?php
$arreglo = array("Lunes","Martes","Miercoles","Jueves","Viernes","Sabado","Domingo");


echo '<table border="1">'.
'<tr>'.
"<td>$arreglo[0]</td>".
"<td>$arreglo[1]</td>".
"<td>$arreglo[2]</td>".
"<td>$arreglo[3]</td>".
'</tr>'.
'<tr>'.
"<td>$arreglo[4]</td>".
"<td>$arreglo[5]</td>".
"<td>$arreglo[6]</td>".
'</td>'.
'</table>';

?>


</body>
</html>