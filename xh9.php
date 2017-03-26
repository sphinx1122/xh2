<?php
header("content-type:text/html;charset=utf8");
function br(){
	echo '<br>-----------------------<br>';
}
$str = <<<GOD
eral，缩写式为num. ），如four，sixty。
GOD;
echo $str;

//error_reporting(~E_ALL);
$fopen = fopen('css1.css',"r");
if($fopen){
	while(!feof($fopen)){
		echo fgets($fopen);
	}
}
br();
fclose($fopen);
$a = 'hello world';
define("PP",$a);
echo defined("PP") or die('没有定义');br();
echo PP;br();
echo __FILE__;br();
echo __LINE__;br();
echo PHP_OS;br();
echo PHP_VERSION;br();
$var = 55;
$a = &$var;
echo $a; br();

br();
$line = 4;
$num = 66;
$ceil = ceil($num/$line);

$row = $num%$line?$num%$line:$line;

echo "编号$num 学生坐在$ceil 行第$row 行";br();
 $students = array(
'2010'=>array('令狐冲',"59"),
'2011'=>array('林平之',"44"),
'2012'=>array('曲洋',"89"),
'2013'=>array('任盈盈',"92"),
'2014'=>array('向问天',"93"),
'2015'=>array('任我行',"87"),
'2016'=>array('冲虚',"58"),
'2017'=>array('方正',"74"),
'2018'=>array('岳不群',"91"),
'2019'=>array('宁中则',"90"),
);

foreach($students as $key=>$val){
	echo $key,':';
	
	foreach($val as $k=>$v){
		echo $v;
			
	}br();
	}

br();
echo strtotime("now");br();
echo strtotime("+5 day");


