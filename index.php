<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="./assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="./assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>

	<div class="container">
		<div class="row">
		<?php
		<div class="col-md-3 case1 container-fluid">
		?>
				
			</div>
		</div>
	</div>

</body>
</html>

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
		echo $v4,' est le resultat de addition ';
	}
	else{
		echo $v1,' ',$v2 ;
	}
	
}
function multi($nbr){
	$res='';
	for ($i=0;$i<=10;$i++){
		$res.= $nbr.'*'.$i.'='.$i*$nbr.'<br>';
		}
			return $res;
			}

	//echo rrr
	for($i=0;$i<100;$i++)
		{echo multi($i);}

function soustr ($v1,$v2){
	if(is_numeric($v1) & is_numeric($v2) ){
	$v4=$v1-$v2;
		echo $v4, ' est le resultat de soustraction ';
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
				multi (2);
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
