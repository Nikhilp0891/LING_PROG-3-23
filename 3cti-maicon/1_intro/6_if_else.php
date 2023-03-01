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

if ( $b <= $a && $b < $c ) {
	echo 'b é menor ou igual a a. <hr>';
	echo 'b é menor que c.<hr>';
}

$dado = 'Oi';

if ( $dado === 'Oi<hr>' ) {
	echo $dado;
} else { 
	echo 'Tchau <hr>';
}
 
 $altura = 140;
 
 if($altura >= 150) {
	  echo 'voce e alto o necessario<hr>';
 } else {
	  echo 'voce e baixo demais<hr>';
 }
 ?>