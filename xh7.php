<?php
header("content-type:text/html,charset=utf-8");
function br($i){
	echo "<br>---------$i--------------------<br>";
}
br('�Զ��庯��');

function oneto($n){
	for($i=1;$i<$n;$i+=1){
		echo $i,'<br>';
	}
}
oneto(5);

br('��return ,��1�ӵ�100');
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
br('����һ���ļ������ݵ�����һ���ļ�,file_get_contents ---- file_put_contents');
$get = file_get_contents('./xh3.php');
$put = file_put_contents('xh3.txt',$get);
*/
br('ʹ��fopen fwrite�����ļ�');
$fopen = 'fopen.txt';
$fo = fopen($fopen,"w+");
print_r($fo);
$fr = fwrite($fo,'hello world ������� hello  you are ');
echo $fr; 
fclose($fo);








