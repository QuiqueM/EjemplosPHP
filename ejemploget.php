<?php
# el protocolo HTTP utiliza arreglos asociativos para transferir informacion DESDE el cliente HACIA el servidor

#el arreglo $_GET un arreglo asociativo contien los datos que envia el cliente hacia el servidor al URL
//var_dump($_GET);
#sumar dos numeros y regresar el resultado de la suma
if($_GET){
$numero1 = $_GET['num1'];
$numero2 = $_GET['num2'];
$suma = $numero1 +$numero2;
echo '<h1>La suma es '.$suma.'</h1>';
}
?>
<form>
    Escribe Numero 1
    <input type="text" name="num1">
    escribe el numero 2
    <input type="text" name='num2'>
    <input type="submit" value="enviar">
</form>