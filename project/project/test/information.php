<?php 

$db = new mysqli(
	'localhost',
	'root',
	'',
	'test'
);

$sql = <<<SQL
	select numberofticket,name from info
SQL;

$result = $db->query($sql);
if(!$result)
	die('try');
$arr = $result->fetch_all();

foreach($arr as $t){
	echo $t[0].'<br>';
	echo $t[1].'<br>';
	
}
header("location:login.php");

?>