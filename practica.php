<?php

/*for ($i=0; $i <=20 ; $i=$i + 2) {
  echo "$i <br>";
}
*/
/*$contador = 100;
while ($contador >= 85){
  echo $contador . '<br>';
  $contador--;
}
*/

/*$contador = rand(1,5);
while ($contador > 0){
  echo $contador * 2 . ;
break;
}
*/

/*$tiros = 0;
$vecesCara = 0;
while ($vecesCara != 5){
  $moneda = rand (0,1);
  if($moneda==1){
    $vecesCara++;
  }
  $tiros++;
}
  echo "Para obtener 5 veces cara se necesitaron $tiros tiros";
*/
$array = ['Luana', 'Pedro', 'Lucia', 'Lina', 'Rita'];

/*for ($i=0; $i < count($array) ; $i++) {
echo $array[$i] . '<br>';
}

$nombres = 0;
while ($nombres < count($array)){
  echo $array[$nombres] . '<br>';
  $nombres++;
}
*/
/*
$nombres = 0;
do{
  echo $array[$nombres] . '<br>';
  $nombres++;
} while ($nombres < count($array))
*/
/*
$arrayNumerico = [];
for ($i=0; $i < 10; $i++) {
  $arrayNumerico[] = rand(0,10);
}
var_dump($arrayNumerico);

for ($i=0; $i < count($arrayNumerico); $i++) {
  echo $i;
  if ($arrayNumerico[$i] == 5){
    echo 'Es un 5!';
    break;
  }
*/
$arrayAleatorio =[];
for ($i=0; $i < 100; $i++) {
  $arrayAleatorio[] = rand(0,100);
}

$pares = 0;
for ($i=0; $i < count($arrayAleatorio) ; $i++) {
  if ($arrayAleatorio[$i] % 2 == 0){
    $pares++;
    echo $pares;
  }
}







 ?>
