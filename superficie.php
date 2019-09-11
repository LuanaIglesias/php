<?php

function triangulo(int $base, int $altura){
  $funcionesEjecutadas++;
$superficie = $base * $altura;
return $superficie/2;
}

echo triangulo(10, 12). '<br>';

function rectangulo(int $base, int $altura){
  $funcionesEjecutadas++;
$superficie = $base * $altura;
return $superficie;
}

echo rectangulo(34, 10).'<br>';

function cuadrado(int $base, int $altura){
  $funcionesEjecutadas++;
$superficie = $base * $altura;
return $superficie;
}

echo cuadrado(12,12).'<br>';



function circulo(float $radio){
  $funcionesEjecutadas++;
  $pi = pi();
$superficie = $pi * ($radio*$radio);
return $superficie;
}
echo circulo(20).'<br>';






 ?>
