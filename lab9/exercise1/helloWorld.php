<?php
//Inside myfirstprogram.php
function sum($x, $y)
{
 $z = $x + $y;
 return $z;
}

function countUp($x) 
{
 $z = $x + 1;
 return $z;
}

function multiplyUp($a, $b)
{
 $z = $a * $b;
 return $z;
}

echo "Exercise 1: Multiplication Table <b><br>";

echo "--<b>";
for ($x = 0; $x <= 99; $x++)
	{
  		echo "" . countUp($x)  . " </b>";
	}
	
for ($y = 0; $y <= 99; $y++)
{ 
	echo "<b><br>";
	echo "". countUp($y) . " </b>";

	for ($x = 1; $x <= 100; $x++)
	{
  		echo "". multiplyUp($x, $y+1) . " </b>";
	}
}

?>