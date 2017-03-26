<?php
header('content-type:text/html;charset=utf-8');
function br(){echo '<br><br>';}
function hr(){echo '<hr><hr>';}
echo mt_rand(888,999);
br();
echo strlen('wish');br();
echo strtoupper('i mike you hah H i '); br();
echo strtolower('i mike you hah H i ');


function te1(){
	echo 111; 
	function te2(){
		echo 'hello world';
	}
}


te1();
te2();