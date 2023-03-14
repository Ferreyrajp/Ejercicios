<?php
/////////////////////////////WHILE 1
$cont=0;
$suma=0;
while ($cont<100){
    $cont=$cont+1;
    $aleatorio=rand(1,100);
    $suma = $suma + $aleatorio;
}
echo "la suma de los 100 noeros es: ".$suma."</br>";

////////////////////////WHILE 2
$cont=0;
while ($cont<5){
    $cont=$cont+1;
    echo "<h1>Hola</h1>";
}


////////////////////////////DO-WHILE 1
    $num1 = 0;
    $num2 = 1;
    $count = 0;

    echo $num1.", ".$num2.", ";

    do {
        $num3 = $num1 + $num2;
        echo $num3.", "; 
        $num1 = $num2; 
        $num2 = $num3;
        $count++; 
    } while ($count < 10); 
    echo "</br>";

    ////////////////////////////DO-WHILE 2
    $edad=53;
    $cont=1;
    do{
        echo "-- ".$cont." --</br>";
        $cont=$cont+1;
    }while ($cont<=$edad);


    ////////////////////////////FOR
        $num = 5;
        $anterior = "";
    
        for ($i = 0 ; $i <= $num; $i++) {
            $actual = "";

            if ($anterior != "") {
                $actual .= $anterior;
            }
            $actual .= $i;
            echo $actual."<br>";
    
            $anterior = $actual;
        };

    ////////////////////////////////FOREACH 1
     $personas = array(
        "Juan" => 25,
        "María" => 30,
        "Pedro" => 28,
        "Ana" => 32
    );
    $nombres = array();
     foreach ($personas as $nombre => $edad) {
        $nombres[] = $nombre;
    }
    print_r($personas);
    echo "</br>";
    print_r($nombres);
    echo "</br>";
    ////////////////////////////////FOREACH 2
    $personas = array(
        "Juan" => 25,
        "María" => 30,
        "Pedro" => 28,
        "Ana" => 32,
        "Pablo" => 53
    );
     foreach ($personas as $nombre => $edad) {
        echo $nombre."</br>";
    }
   
?>