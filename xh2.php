<?php

	for($i=1;$i<9;$i++){
		for($n=1;$n<=$i;$n++){	
			
			echo $i,'x',$n."=" ,$i*$n,"  ";
		}		
		echo '<br>';
	}
echo '<br><br>';

$arr = array(1,2,3,4,5,6,6,7,78,8,8,55);
function so($a,$add){
		$add = array_push($a,$add);
		sort($a);
		foreach($a as $v){
			 
		}
		return $a;
}
print_r(so($arr,0));

$numbers=array(4,6,2,22,11);
sort($numbers);

$arrlength=count($numbers);
for($x=0;$x<$arrlength;$x++)
   {
   echo $numbers[$x];
   echo "<br>";
   }
   
$array = array ('1年龄'=>'18', '2姓名'=>'ee', '4身高'=>'180cm', '5年级'=>'大三');
 asort($array);
 
$n = count($array);
foreach($array as $k=>$v){
	echo ("$k".": $v");echo '<br>';
}
echo '<br>';echo '<br>';

$arr = array(112,3,45,6,7,9,0,71,04,5,8,24,54,11,7,12,2,19,9,2,5,56,221);
function sorts($s){	
	$sort = rsort($s);
	$n = count($s);
	for($i=0;$i<$n;$i++){
		 echo $sort[$i];
	}
	return $s;
}
#var_dump(sorts($arr));

function asc($a,$add){
	array_push($a,$add);
	$sort = sort($a);
	
	foreach($a as $v){
		echo $v;echo ',';
	}
	return $v;
}
print_r(asc($arr,60));

echo '<br>------------------------------';
$a=['a','a','c','c','e','e'];

function strtoarr($arr){
	 $str = implode(',',$arr);
	 $str = strtoupper($str);
	return $arr = explode(',',$str);
}

$aa = strtoarr($a);
print_r($aa);
$b = [1,2,3,3,3,3,'se',4,'aAaA',6,76,7];
print_r(strtoarr($b));
echo '<br>';

$s=['a','b','c','d','e'];
print_r($s);
$up = implode(',',$s);echo '<br>';
print_r($up);echo '<br>';
$up = strtoupper($up);
$st = explode(',',$up);
print_r($st);echo '<br>';

print_r( ucwords ('sSFW Esd fsdfs'));

echo '<br>-|---';

$arr=array(1,5,8,3,5,4,56,2,12,11);
$n = count($arr);echo $n,'<br>';

echo '<br>-----';

//冒泡排序
$arr=array(23,5,26,4,9,85,10,2,55,44,21,39,11,16,55,88,421,226,588);
$n = count($arr);
//echo $n;echo '<br>';

for($h=0;$h<$n-1;$h++){
	for($i=0;$i<$n-$h-1;$i++){
		if($arr[$i]>$arr[$i+1]){
			$dong=$arr[$i+1];
			$arr[$i+1]=$arr[$i];
			$arr[$i]=$dong;
		}
	}
}
var_dump($arr);echo '<br>';

//布尔、整型、字符串、浮点型、数据、资源、NULL、对象。



if(strpos('abd','abd')==false){
	echo 'false';
}
if(strpos('abc','abc')==false){
	echo ' ,abc false';
}
if(0==='0'){
	echo ', same';
}


$a = 'abcdef';
echo $a[0].'<br>';
echo substr($a,0,2).'<br>';
echo substr($a,0,2).'<br>';

$arr = array('james', 'tom', 'symfony');

for($i=0;$i<count($arr);$i++){
	echo $arr[$i].',';
}
echo '<br>';
foreach($arr as $v){
	echo $v.',';
}


echo '<br>';

function ex($path){
	return substr($path, strpos($path,'.'));
}
echo ex('adasf.jpg');
echo '<br>';

function ex1($path){
	return strchr($path,'.');
}
echo ex1('asdfasfas.fas');



echo count("54564321");echo '<br>';
echo strlen("12234566765");
echo '<br>';
$str = ['aa','bb','ee','ff','kk'];

print_r($str);
echo '<br>';
define('AB','AA',true);
if(defined("AB")){
	echo "AB已经定义";
}else{
	echo '没定义';
}
$str = 'cd';
$$str = 'hotdog';
$$str .='ok';
echo $cd;





$str = 'ww.baidu.com';
function str1($str){
	$str = strrev($str);
	$str = rtrim($str,'ww');
	return $str;
}
echo str1($str);echo '<br>';

$str="abcdefg";
echo strrev($str);

$str = "1234567890";
function str($str){
	$str = strrev($str);
	return $str;
}
echo str($str);
echo "<br>";
echo strrev($str);echo '<br>';
echo $str = chunk_split(strrev($str),3,',');echo '<br>';
echo $str = ltrim(strrev($str),',1');

$a = ['H','E','LL'];
list($h,,$ll)= $a;
echo $h,$ll;

echo '<br>';
$a = 'PHP';
$b = 'MySQL';
echo $a,$b;

echo '<br>';
echo $a,$b;

echo '<br>';
echo date('Y-m-d H:i:s',strtotime("-1 day"));
echo '<br>';
echo strtotime("2017-02-13 17:22:58");
echo '<br>';
echo (strtotime('2017-2-15')-strtotime("2017-1-1")) /(3600*24),' day';

$a= ['a','b','c','d','e','f'];
$b = NULL;
echo $b,'<br>';
print $b;
echo '<br>';
print($b);
print_r($a);


  
function maxnum($a,$b,$c){
	return $a>$b?($a>$c?$a:$b):($b>$c?$b:$c);
}
echo maxnum(15,5,2);
echo '<br>';

echo $_SERVER['DOCUMENT_ROOT'],'<br>';
echo $_SERVER['HTTP_HOST'],'\n';

echo $_SERVER['REMOTE_ADDR'];
echo '<br>';
echo $_SERVER['SERVER_NAME'];
echo '<br>';
echo $_SERVER['REQUEST_METHOD'];



?>