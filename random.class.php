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
	
	function image($width=300, $height=300, $bc=array(), $word='', $wc=array()){
		$bc = (empty($bc)?array(rand(0,255), rand(0,255), rand(0,255)):$bc);
		$wc = (empty($wc)?array(rand(0,255), rand(0,255), rand(0,255)):$wc);			$word = (empty($word)?$width . 'x' . $height . ' Image':$word);
		$img = imagecreate($width ,$height);
		$backgroundColor = ImageColorAllocate($img, $bc[0], $bc[1], $bc[2]);
		$wordColor = ImageColorAllocate($img, $wc[0], $wc[1], $wc[2]);
		imagestring($img, 5, $width/4, $height/2, $word, $wordColor);
		//ImageTTFText($img, 5, 0, $width/4, $height/2, $wordColor, 'fontname.tff', $word);
		ob_start();
		imagePNG($img);
		$image = ob_get_contents();
		ob_end_clean();
		return $image;
	}
}

?>