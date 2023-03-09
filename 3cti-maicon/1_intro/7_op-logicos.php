<?php
$idade = 18;
$cnh = true;
$penalidade = true;
/*$penalidade = 0;*/
$quitacao = true;

/* 0 e 1 e igual false e verdadeiro */

/*
&& e and VV
|| ou or VF
*/

if($idade > 18 && $cnh == true){
	echo 'pode dirigir!  seu bosta';
} else{
	echo 'nao pode dirigir, seu viado';
}
/*exercicio
 O MOTORISTA PODE TER PENALIDADE POREM CASO ESTEJA QUITADO, ELE PODERA REALIZAR (A CNH D)
 */
 if(($idade >= 23 && $penalidade == false)
	 or ($idade >= 23 && $quitacao == true)){
	echo '<hr>pode fazer a CNH D';
} else {
	echo '<hr>Tem que ficar de maior pra fazer a CNH D';
}



 ?>