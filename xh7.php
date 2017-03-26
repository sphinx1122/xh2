<?php
header("content-type:text/html,charset=utf-8");
function br($i){
	echo "<br>---------$i--------------------<br>";
}
br('自定义函数');

function oneto($n){
	for($i=1;$i<$n;$i+=1){
		echo $i,'<br>';
	}
}
oneto(5);

br('有return ,从1加到100');
function addnum($n){
	$s = 0;
	for($i=0;$i<=$n;$i++){
		$s+=$i;
	}
	echo $s;	
}
//$sum = addnum(100);
//echo $sum;
addnum(100);
/*
br('复制一个文件的内容到另外一个文件,file_get_contents ---- file_put_contents');
$get = file_get_contents('./xh3.php');
$put = file_put_contents('xh3.txt',$get);
*/
br('使用fopen fwrite操作文件');
$fopen = 'fopen.txt';
$fo = fopen($fopen,"w+");
print_r($fo);
$fr = fwrite($fo,'hello world 你的世界 hello  you are ');
echo $fr; 
fclose($fo);








