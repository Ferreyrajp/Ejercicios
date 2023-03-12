<?php
//////////////////////// 1 2  //////////////////////////////
$noNumero = "5";
$numero = 2;
echo $noNumero . "<br /> ";
echo $numero . "<br /> ";

$suma = $noNumero + $numero;
echo $suma . "<br /> ";
echo gettype($suma) . "<br /> ";
/////////////////////////////////////////////////////////

//////////////////////// 3 //////////////////////////////

$var1 ="mi nombre es";
$var2=" pablo ";
$var3=" y soy de necochea". "<br /> ";
$var4= $var1.$var2.$var3;
echo $var4;
/////////////////////////////////////////////////////////

//////////////////////// 4 //////////////////////////////

$booluno=true;
$booldos=false;

echo $booluno. "<br /> ";
echo $booldos. "<br /> ";
/////////////////////////////////////////////////////////

//////////////////////// 5 //////////////////////////////
$vararr = array("uno","dos","tres","cuatro","cinco");
var_dump($vararr);
echo "<br /> ";
/////////////////////////////////////////////////////////

//////////////////////////tipado/////////////////////////

////1

$var1="soy un string";
echo $var1;
echo "<br /> ";
$var1=5;
echo $var1;
echo "<br /> ";

/////2

$var1="10";
$var2=5;
$var3=$var1+$var2;
echo $var3;
echo "<br /> ";

/////3
define("VAR1","valor const uno");
define("VAR2","valor const dos");
define("VAR3","valor const tres");
echo VAR1;
echo "<br /> ";
echo VAR2;
echo "<br /> ";
echo VAR3;
echo "<br /> ";

////4
//VAR2 = "cambio";

////5
define("VAR4",2);
define("VAR5",3);
define("VAR6",4);
define("VAR7",5);
define("VAR8",6);
define("VAR9",VAR4+VAR5+VAR6+VAR7+VAR8);
echo VAR9;
/////////////////////////////////////////////////////////
?>