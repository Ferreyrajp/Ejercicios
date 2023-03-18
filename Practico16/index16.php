<?php

/////////////////////////////// a)
$cont=50;
while($cont>40){
    $cont -= 1;
    echo $cont."</br>";
}


/////////////////////////////// b)
$contador=0;
while($contador<5){
    $contador += 1;
    echo ($contador*2).",";
}
echo "</br>";


/////////////////////////////// c)
$contador=0;
while($contador<149){
    $contador += 1;
    echo ($contador*4)."</br>";
}

/////////////////////////////// d)
for($cont=0; $cont <= 500; $cont += 25) {
    echo $cont . "<br>";
}

/////////////////////////////// e)
//$num = readline("Ingrese un número entero: ");
$num=9;
for($i = 1; $i <= $num; $i+=2) {
    for($j = $i; $j >= 1; $j -= 2) {
        echo $j . " ";
    }
    echo "</br>";
}


/////////////////////////////// f)
for($piso = 1; $piso <= 5; $piso++) {
    for($puerta = 1; $puerta <= 4; $puerta++) {
        echo "Piso:".$piso." puerta:".$puerta."</br>";
    }
    echo "</br>";
}

/////////////////////////////// g)
for($peso = 50; $peso <= 1000; $peso +=50) {
    $dolar=$peso*377;
    echo "peso: ".$peso." dolar: ".$dolar."</br>";
    }
    echo "</br>";


?>