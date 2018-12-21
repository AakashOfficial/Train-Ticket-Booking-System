<?php

/*echo $_POST['leavingfrom'];
echo '<br>';
echo $_POST['goingto'];
echo '<br>';
echo $_POST['departingon'];
echo '<br>';
echo $_POST['coachtype'];
echo '<br>';
echo $_POST['trainname'];
echo '<br>'; */



$db = new mysqli(
	'localhost',
	'root',
	'',
	'test'
);

if( $db->connect_errno )
	echo 'Failed';
else{
	$sql = null;
	$sql = <<<SQL
	insert into ticket values(
	'','{$_POST['leavingfrom']}','{$_POST['goingto']}','{$_POST['departingon']}','{$_POST['coachtype']}','{$_POST['trainname']}'
	)
SQL;

	$ok = $db->query($sql);
}



header("location:login1.php");


?>