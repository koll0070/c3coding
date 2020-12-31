<?php
/*
	백준 2503
	C3 1015
*/
	//야구 게임 정답 숫자 입력
	$temp = "724";
	$ta = substr($temp, 0, 1);
	$tb = substr($temp, 1, 1);
	$tc = substr($temp, 2, 1);
	
	$num = rand(1, 100);
	echo $num . "<br/>";
	for($i=0; $i<$num; $i++)
	{
		$strike = 0;
		$ball = 0;
		$a = rand(1, 9);
		$b = rand(1, 9);
		while ($a == $b)
		{
			$b = rand(1, 9);
		}
		$c = rand(1, 9);
		while ($a == $c || $b == $c)
		{
			$c = rand(1, 9);
		}
		$randNum = $a . $b . $c;
		$strike += $ta==$a ? 1 : 0;
		$strike += $tb==$b ? 1 : 0;
		$strike += $tc==$c ? 1 : 0;
		$ball += $ta==$b ? 1 : 0;
		$ball += $ta==$c ? 1 : 0;
		$ball += $tb==$a ? 1 : 0;
		$ball += $tb==$c ? 1 : 0;
		$ball += $tc==$a ? 1 : 0;
		$ball += $tc==$b ? 1 : 0;
		echo $randNum . " " . $strike . " " . $ball ."<br />";
	}
	
?>