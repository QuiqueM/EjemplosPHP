<?php
#los arreglos se crean utilizando el operrador array()
#pueden contener cualquier tipo de datos

$arreglo = array('cadena',1234,3.1416,true);
for($i = 0; $i< count($arreglo);$i++)
{
    echo $arreglo[$i]."<br>";
}

echo '<ul>';
foreach($arreglo as $elem){
    echo '<li>'.$elem.'</li>';
}
echo '</ul>'
?>