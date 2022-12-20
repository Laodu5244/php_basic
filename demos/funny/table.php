<?php

$days = 31;

echo "<table width='500px' border='1px'>";
for ($i=1; $i<=$days;){
	echo "<tr>";
	for($j=0;$j<7;$j++){
		if($i>$days) echo "<td></td>";
		else echo "<td>{$i}</td>";
		$i++;
	}
	echo "</tr>";
}
echo "</table>";

