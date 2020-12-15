<?php
include_once("./_common.php");

$name = $_REQUEST['name'];

$qry = "select * from c3_bebras where name = '{$name}'";
$result = sql_fetch($qry);

echo $result['code2'];

?>