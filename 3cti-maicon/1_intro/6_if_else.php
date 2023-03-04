<?php

 $idade = 20;
 if($idade < 18) {
	  echo 'Você não pode entrar aqui! <hr>';
 } else {
	  echo 'Seja bem - vindo!<hr>';
 }
 
$a = 2;
$b = 1;
$c = 2;
if ( $b <= $a) {
	echo 'b é menor ou igual a a. <hr>';
	}else if($b < $c){
	echo 'b é menor que c.<hr>';
}

$dado = 'Oi';
if ( $dado === 'Oi' ) {
	echo "$dado <hr>";
} else { 
	echo 'Tchau <hr>';
}
 
 $altura = 140;
 if($altura >= 150) {
	  echo 'voce e alto o necessario<hr>';
 } else {
	  echo 'voce e baixo demais<hr>';
 }
 
 $numero = '1';
 if($numero === '1'){
	 echo " A e igual a 1";
 }else{
	 echo " a nao e igual a 1";
 }
 //= atribuicao
 //== comparacao simples
 //=== comparacao indetica (tipo de valor)
 
 //'' ela considera tudo texto
 //"" considera variavel 
 ?>