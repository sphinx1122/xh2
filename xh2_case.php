<?php
function br($i){echo "<br>-------------$i-------------<br>";};
function hr(){echo '<hr>';};

/**
 *随机生成彩色验证码
 ****/
 hr(); br("验证码");
$string = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789~!@#$%^&*()_+-=';
$verify = '';
	for($i=0;$i<10;$i++)
	{
		$verify .= '<span style="color:rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).'); font-size:5rem; ">'.$string{(mt_rand(0,strlen($string)-1))}.'</span>';
	}
	echo $verify;  hr();

/**
 *冒泡排序
 *
 **/
  br('冒泡排序');
 $arr = array(12,5,7,9,14,68,9);
 $n = count($arr);
 
for($i=0;$i<$n;$i+=1){
	for($j=$i;$j<$n;$j+=1){
		if($arr[$i]>$arr[$j]){
			$s = $arr[$i];
			$arr[$i]=$arr[$j];
			$arr[$j]=$s;
		}
	}
}
print_r($arr); hr();

/**
 *
 *
 ***/


