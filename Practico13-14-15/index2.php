<?php
////////////////////////IF
$edad=23;
if ($edad < 18 ){
    echo "Lo sentimos para mantener esta
    billetera virtual abierta necesitas ser mayor de edad</br>";
};

/////////////////////////ELSE
//$edad=23;
if ($edad >= 18 ){
    echo "Genial sos mayor de edad</br>";
}else{
    $diferenciedad=18-$edad;
    echo "“Te faltan ".$diferenciedad
    ." años para que seas mayor de edad</br>";
};


$nombre="Pablo";
if($nombre!="" and $edad!=""){
    echo"tu nombre es ".$nombre." y tienes ".$edad." años de edad</br>";
}

/////////////////ELSE IF
$mes=rand(1,12);

if ((1 <= $mes) and ($mes <= 3 )){
    echo"estas en verano</br>";
}elseif ((4 <= $mes) and ($mes <= 6 )){
    echo"estas en otoño</br>";
}elseif ((7 <= $mes) and ($mes <= 9 )){
    echo"estas en Invierno</br>";
}elseif ((10 <= $mes) and ($mes <= 12 )){
    echo"estas en Primavera</br>";
}


/////////////////////SWITCH
$numeromes=rand(1,12);

switch ($numeromes){
    case 1:
        echo "enero</br>";
        break;
    case 2:
        echo "febrero</br>";
        break;
    case 3:
        echo "marzo</br>";
        break;
    case 4:
        echo "abril</br>";
        break;
    case 5:
        echo "mayo</br>";
        break; 
    case 6:
        echo "junio</br>";
        break;
    case 7:
        echo "julio</br>";
        break;
    case 8:
        echo "agosto</br>";
        break;
    case 9:
        echo "setiembre</br>";
        break;   
    case 10:
        echo "octubre</br>";
        break;
    case 11:
        echo "noviembre</br>";
        break;
    case 12:
        echo "diciembre</br>";
        break;
}

$valor=rand(0,50);

switch ($valor){
    case (0 <= $valor && $valor <=10):
        echo"La infancia es increíble</br>";
        break;
    case (11 <= $valor && $valor <=20):
        echo"Muchos cambios y mucho estudio</br>";
        break;
    case (21 <= $valor && $valor <=30):
        echo"Amor y comienza el trabajo</br>";
        break;
    default:
        echo"Etapa de la vida no reconocida</br>";
    break;
}

?>