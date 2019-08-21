<?php 
// operador lógico

// $n1 = 10;
// $n1 = 5;

// if ($n1 > $n2) {
  // echo 'n1 Maior';	
// }else{
	// echo 'n2 Menor';
// }

$media = 70 ;

if ($media >= 60 ){
	echo 'Aprovado!!';
}
elseif ($media <= 40){
	echo 'Reprovado!1';
}
else {
	echo 'Recuperação';
}

///---------

$opcao = 1;

if ($opcao == 1){
	echo 'Opção 1';
}
elseif ($opcao == 2) {
	echo 'Opção 2';
}
elseif ($opcao == 3) {
	echo 'Opção 3';
}
else {
	echo 'Nenhuma opção acima';
}