<?php 
$sn=$_REQUEST['t1']*$_REQUEST['c1']+
$_REQUEST['t2']*$_REQUEST['c2']+
$_REQUEST['t3']*$_REQUEST['c3']+
$_REQUEST['t4']*$_REQUEST['c4']+
$_REQUEST['t5']*$_REQUEST['c4'];

$sc=$_REQUEST['c1']+$_REQUEST['c2']+$_REQUEST['c3']+$_REQUEST['c4']+$_REQUEST['c5'];

$moyenne = $sn/$sc;

if ($moyenne <10)
	echo "Refuse ou Redoublant <br>";
if ($moyenne<15) 
	echo "Admis passable";
else
	echo "Admis avec mention <br>";

echo "<br>votre moyenne est: ",$moyenne;

?>
