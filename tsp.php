<?php
$out = '';
if(isset($_GET['id']) & isset($_GET['op'])) {
	$id = $_GET['id'];
	$op = $_GET['op'];
	if($op == 'state') {
		$out = exec('tsp -s '.$id);
	} else if ($op == 'kill') {
		$out = exec('tsp -s '.$id);
	} else if( $op == 'of') {
		$out = exec('tsp -o '.$id);
	} else if($op == 'urgent') {
		$out = exec('tsp -u '.$id);
	} else if($op == 'data') {
		$fp = exec('tsp -o '.$id);
		$out = file_get_contents($fp);
	}
} else if(isset($_GET['fetch_commands'])) {
	exec('tsp -l', $out);
	$out = implode(' <br />', $out);
} else if(isset($_GET['command'])) {
	$command = $_GET['command'];
	$command = base64_decode($command);
	$id = 'tsp '.$command;
	$out = exec($id);
}
print($out);