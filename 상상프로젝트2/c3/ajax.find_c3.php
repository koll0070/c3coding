<?php
	include_once('../common.php');

	$name = $_REQUEST['name'];
	$school = $_REQUEST['school'];
	$grade = $_REQUEST['grade'];

	$qry = "select * from c3_imgprjc where name = '{$name}' and school = '{$school}' and grade = {$grade}";
	$result = sql_fetch($qry);

	echo $result['code1'];

?>