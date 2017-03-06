<?php 
function comp ($v1,$v2){
	if(is_numeric($v1) & is_numeric($v2) ){
		$v1>$v2;
		echo $v1,' est superieur a ',$v2;
	}
	else{
		echo $v1,' est inferieur a ',$v2;
	}
}
function add($v1,$v2){
	if(is_numeric($v1) & is_numeric($v2) ){

	$v4=$v1+$v2;
		echo $v4,' est le resultat ';
	}
	else{
		echo $v1,' ',$v2 ;
	}
	
}
function soustr ($v1,$v2){
	if(is_numeric($v1) & is_numeric($v2) ){
	$v4=$v1-$v2;
		echo $v4, ' est le resultat ';
	}
	else{
		echo $v1,' ',$v2 ;
	}
}

	$v1=2;
	$v2=5;
	$v3=null;
	$v4=null;
	$b='<br>';

		echo $v1,' est v1 ';
			echo $b;
		echo $v2,' est v2 ';
			echo $b;
				comp ($v1,$v2);
			echo $b;
				add ($v1,$v2);
			echo $b;
				soustr ($v1,$v2);
			echo $b;
				$v3=$v1;
				$v1=$v2;
				$v2=$v3;
			echo $b;
				echo $v1,' est v1 ';
			echo $b;
				echo $v2,' est v2 ';
			echo $b;
				comp ($v1,$v2);
			echo $b;
 
				echo strlen('Eddy');
				echo (" Eddy");
?>
