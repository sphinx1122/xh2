<?php
header('content-type:text/html; charset=utf-8');
function br(){echo '<br><br>';}
function hr(){echo '<hr>';}

echo gmstrftime('%H小时%M分钟%S ',1000); hr();

/***
 *JSON的四个基本规则
 * (1)并列的数据之间用逗号','分隔。
 * (2)映射用冒号':'表示
 * (3)并列的数据的集合'数组'用方括号'[]'表示
 * (4)映射的集合'对象'用大括号'{}'表示
 *
 ***
 * 举例：北京的面积16800平方公里，常住人口1600万人。上海6400平方公里，常住人口1800万。 
 * 转换成JSON格式之后：
 *
 ***
	 [ 
	 {"城市":"北京","面积":"16800","人口":"1600" },
	 {"城市":"上海","面积":"6400","人口":"1800" } 
	 ];
 */
 
 /*
 JSON的缺点
 1、要求字符集，必须是Unicode。
 2、语法过于严谨，必须遵循JSON语法四个原则。
 
 
 */
 
 /**
  * json_encode 编码成JOSN
  * json_decode 解码
  * json_decode总是返回一个PHP对象，而不是数组。强制生成数组，需要加一个参数true >> json_decode($var,true);
  *
  *
  ********/
 
 
 $a = array('a'=>1,'b'=>2,'c'=>3,'d'=>4,'e'=>5);
 var_dump($a);br();
 var_dump($de = json_encode($a)); br();
 
var_dump($deco = json_decode($de));br();

echo json_last_error();br();
echo json_last_error_msg();
br();

hr();
