<?php 
//ex4 

$nota1 = 75;
$nota2 = 80;
$nota3 = 55;
$nota4 = 65;

$media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

if ($media >= 60){
  echo 'Aprovado!';
} else if ($media >= 45) {
  echo 'Recuperação!!';
} else {
  echo 'Reprovado!!!';
}