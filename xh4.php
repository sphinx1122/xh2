<?php
echo '索引数组','<br>';
$arr[0] = 'zhangsan';
$arr[1] = 'man';
$arr[6] = 'china';
$arr[3] = 'beijing';
echo ($arr[0]),'<br>';echo $arr[6] ,'<br>';
echo count($arr),"<br>";
krsort($arr);
print_r($arr); echo "<br>";
var_dump($arr); echo "<br><br>";

echo '关联数组','<br>';
$arrs['name'] = 'zhangsan';
$arrs['gender'] = 'man';
$arrs['guojia'] = 'china';
$arrs['diqu'] = 'beijing';
echo ($arrs['name']),'<br>';echo $arrs['gender'] ,'<br>';
echo count($arrs),"<br>";
print_r($arrs); echo "<br>";
var_dump($arrs); echo "<br><br>";

echo '二维数组','<br>';
$ar = array(
	array('张三',18,'北京'),
	array('李四',28,'上海'),
	array('王五',38,'地区'=>'广州')
);
print_r($ar);echo '<br>';
echo $ar[2]['地区'];echo '<br>';
echo 'foreach遍历','<br><br>';
$arr1 = array("张三",'湖南人','吃辣椒');
foreach($arr1 as $k => $v){
	#echo $k;
	echo $arr1[$k],' ==> <br>'; 
}
$file = "a.class.txt.php";
echo substr($file,-4,4),'<br>';
$arr = explode('.',$file);
print_r(end($arr));echo '<br>';
echo $join = join(".",$arr),'<br>';
$arr2 = array('name'=>'zhangshan','age'=>28,'gender'=>'man','height'=>'180');
print_r(array_keys($arr2));echo '<br>';
print_r(array_pop($arr2));echo '<br>';
print_r($arr2);
echo '<br>---------list-------------------<br>';
$arr4 = array('zhangshan','28','man','180');
list($n1,,$n3,$n4) = $arr4;
print_r($n4);
echo '<br>---------list-------------------<br>';
$arr5 = array('zhangshan','28','man','180');
echo next($arr5),'<br>';
echo end($arr5),'<br>';
echo prev($arr5),'<br>';
echo in_array('zhangshan',$arr5),'<br>';
$arr6 = array_reverse($arr5);
print_r($arr6);
echo '<br>---------list-------------------<br>';
















