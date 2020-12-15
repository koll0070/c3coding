<?php
	require_once('../include/db_info.inc.php');

	$name = $_REQUEST['name'];
	$school = $_REQUEST['school'];
	$grade = $_REQUEST['grade'];

	$qry = "select * from c3_imgprjc where name =? and school =? and grade =?";
	$result = pdo_query($qry, $name, $school, $grade);

	echo $result[0][4];

?>