<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>anagramme</title>
</head>
<body>
	<?php 
	$a="listen";
	$b=["enlist","google","inlets","banana"]; 
	for ($i=0; $i<count($b);$i++){
		$b2 = strtolower($b[$i]);
		$c = str_split($a);
		$d = str_split($b2);
		sort($c);
		sort($d);
		if($c === $d ) {
			echo $b[$i].' est un anagramme de '.$a."\n";
		} 
	}
	?>
</body>
</html>