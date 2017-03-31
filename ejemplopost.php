<?php
# el protocolo HTTP utiliza arreglos asociativos para transferir informacion DESDE el cliente HACIA el servidor

#el arreglo $_POST un arreglo asociativo contien los datos que envia el cliente hacia el servidor empaquetados como parte del protocolo ya no aparece en la URLK
//var_dump($_GET);
#sumar dos numeros y regresar el resultado de la suma
if($_POST){
$numero1 = $_POST['num1'];
$numero2 = $_POST['num2'];
$suma = $numero1 +$numero2;
echo '<h1>La suma es '.$suma.'</h1>';
}
?>
<form method="POST">
    Escribe Numero 1
    <input type="text" name="num1">
    escribe el numero 2
    <input type="text" name='num2'>
    <input type="submit" value="enviar">
</form>