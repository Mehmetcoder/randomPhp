<?php

class Random{

	function number($min=0, $max=999999){
		return rand($min, $max);
	}
	
	function comma($step=2, $min=0, $max=999999){
		return rand($min * 10**$step, $max * 10**$step) / 10**$step;
	}
	
	
	function color(){
		return '#' . rand(0, 999999);
	}
	
	function date($dateString){
		return date($dateString, mktime(
			rand(0, 23),
			rand(0, 59),
			rand(0, 59),
			rand(0, 30),
			rand(0, 12),
			rand(0, 9999),
		));
	}
	
	function letter(){
		$pool = 'abcdefghijklmnoprstuvyz';
		return $pool[rand(0, strlen($pool))];
	}
	
}

?>