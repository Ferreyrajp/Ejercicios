<?php

/////////////////////////////////////////ejercicio 1

function msjsecreto(){
    echo"este es un msj secreto";
}
msjsecreto();

/////////////////////////////////////////ejercicio 2

function cuenta(){
    for($i=0;$i<=100;$i++){
        echo $i." </br>";
    }
}
cuenta();

/////////////////////////////////////////ejercicio 3

function cuentaValor($Valor){
    for($i=$Valor;$i<=100+$Valor;$i++){
        echo $i." </br>";
    }
}
cuentaValor(6);

/////////////////////////////////////////ejercicio 4
function iguales($valora,$valorb){
    if($valora==$valorb){
        return true;
    }else{
        return false;
    }
}

if (iguales(5,5)){
    echo"son iguales";
}else{
    echo"son distintos";
}

/////////////////////////////////////////ejercicio 5

function potencia($valor,$pot){
    $aux=$valor;
    for($i=1;$i<$pot;$i++){
        $aux=$aux*$valor;
    }
    return $aux;
}

echo "pontencia de 4 al 3: ".potencia(4,4);

/////////////////////////////////////////ejercicio 6
function piramide($filas){
    for($i=1;$i<=$filas;$i++){
        for($k=$i;$k>=1;$k--){
            echo "*";
        }
        echo"</br>";
    }

}
piramide(6);
?>