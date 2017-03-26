<?php

$image = imagecreatetruecolor(120,50);
$bgcolor = imagecolorallocate($image,255,255,255);
imagefill($image,10,0,$bgcolor);
/*
for($i=0;$i<5;$i++){
	$fontsize=8;
	$fontcolor=imagecolorallocate($image,rand(0,255),rand(0,255),rand(0,255));
	$fontcontent=rand(0,9);
	
	$x=($i*100/4)+rand(5,10);
	$y=rand(5,10);
	
	imagestring($image,$fontsize,$x,$y,$fontcontent,$fontcolor);
	}
	*/
	for($i=0;$i<4;$i++){
		$fontsize=8;
		$data="abcdefghijklmnopqrstuvwxyz13456789";
		$fontcolor=imagecolorallocate($image,rand(0,255),rand(0,255),rand(0,255));
		$fontcontent=substr($data,rand(0,strlen($data)),1);
		
		$x=($i*100/4)+rand(5,10);
		$y=rand(5,10);
		imagestring($image,$fontsize,$x,$y,$fontcontent,$fontcolor);
	}
	
for($i=0;$i<200;$i++){
	$pointcolor = imagecolorallocate($image,rand(50,200),rand(50,200),rand(50,200));
	imagesetpixel($image,rand(1,99),rand(1,29),$pointcolor);
	}
	
for($i=0;$i<3;$i++){
	$linecolor = imagecolorallocate($image,rand(80,220),rand(80,220),rand(80,220));
	imageline($image,rand(1,99),rand(1,29),rand(1,99),rand(1,29),$linecolor);	
	}



	
header('content-type:image/jpeg');
imagepng($image);
imagedestroy($image);









