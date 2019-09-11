<?php
function mayor($num1, $num2, $num3){
$funcionesEjecutadas++;
  if($num1 > $num2){
    $mayor = $num1;
  } else {
    $mayor = $num2;
  }
  if ($num3 > $num2){
    $mayor = $num3;
  }
return $mayor;
}
echo mayor(23, 4, 60);

function tabla ($base, $limite){
  $funcionesEjecutadas++;
  $cosas = [];
  for($i= $base; $i <= $limite; $i++){
    $cosas []=$i;
  }
  return $cosas;
}


 ?>
