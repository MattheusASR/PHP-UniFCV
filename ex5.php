<?php
//ex5

$idade = 11;

switch($idade){
  case ($idade <= 7):
      echo 'Infantil';
	break;
  case ($idade <= 10):
	  echo 'Infantojuvenil';
	break;
  case ($idade <= 14 ):
	  echo 'Juvenil';
	break;
  case ($idade <= 18):
	  echo 'Juventude';
	break;
  case ($idade <= 29):
	  echo 'Adulto';
	break;
  case ($idade >= 30):
	echo 'Sênior';
	break;
}