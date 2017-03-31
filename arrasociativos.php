<?php
#un arreglo asociativo contiene varios partes de elementos llave -> valor
#la llave es ek nombre de la persona y su valor el telefono
$directorio = array(
    'omar' => '1-23-45-67',
    'irma' => '9-87-65-43',
    'carlos' => '8-23-64-34'
);

#var_dump($directorio);
#los arreglso asociativos se indexan por medio de la clave
/*echo $directorio['omar'].'<br>';
echo $directorio['irma'].'<br>';
echo $directorio['carlos'].'<br>';*/

foreach($directorio as $llave=>$valor){
    echo $llave .'='.$valor .'<br>';
}
?>