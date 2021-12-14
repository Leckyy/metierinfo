<?php 
$a=$_REQUEST['t1'];
$b=$_REQUEST['t2'];
$c=$_REQUEST['t3'];




$s=$a+$b;
$p=$a*$b;
$r=$a%$b;
$d=$a/$b;



if ($c=="+") 	
	echo "voila la somme:" .$s;
else if ($c== '*')
	echo "voila le produit:" .$p;
else if ($c== '%')
	echo "voila le reste de la division" .$r;
else if ($c=="/")
	echo "voila la division est " .$d;




?>
