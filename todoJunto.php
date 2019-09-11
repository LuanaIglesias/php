<?php
$funcionesEjecutadas = 0;
include("funciones.php");
include("superficie.php");

function radios ($radio1, $radio2, $radio3){
  $superficie1 = circulo($radio1);
  $superficie2 = circulo($radio2);
  $superficie3 = circulo($radio3);
  $mayor = mayor($superficie1, $superficie2, $superficie3);
  return $mayor;
}
echo radios(30, 20, 15);



 ?>
