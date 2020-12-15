<?php
	include_once('../common.php');

	$name = $_REQUEST['name'];
	$number = $_REQUEST['number'];
	#$grade = $_REQUEST['grade'];

	$qry = "select * from c3_cube_class where name = '{$name}' and number = '{$number}'";
	$result = sql_fetch($qry);

	echo $result['code1'].'/'.$result['code2'];

?>