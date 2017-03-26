<?php
function br(){echo '<br><br>';}
function b($name){echo " &nbsp;&nbsp; => $name ： <br><BR>";}
function hr(){echo '<hr><br>';}

/**
 *PHP函数
 *function_exists()检测函数是否存在，存在返回true，不存在返回false;
 */
 b('一PHP函数');
echo mt_rand(1000,9999); br();
echo strlen('wish'); br();
echo strtolower('this is a text '); br();
echo ucfirst('this is a text'); br();
echo ucwords('this is a text');  hr(); 

/**
 *自定义函数
 *函数，一个函数只完成一个功能，避免复杂化。
 */
 b('二自定义函数');
 function saySth(){
	 echo "welcome To Imooc To Study King's PHP！";br();
 }
 /**
  *函数执行原理：
  *函数不调用不执行，当封装完函数之后将其载入到内存中，当调用函数时，找到对应的函数，执行函数体。
  *当碰到Return 语句或者执行到函数的末端，再将控制权移交到调用的函数位置上，函数继续向下执行。
  ******/
 saySth(); 
 saySth();
 
 
 
 /**
 function 函数名称([参数名称[=值]]){
	 函数体;
	 return 返回值;
 }
 注意：
 函数名称不能包含特殊字符，以字母或者下划线开始，路上数字字母下划线
 函数名称最好以动词开始，最好含义明确,getExt() uploadFile()
 函数名称遵循驼峰命名法或者下划线
 函数名称是不区分大小写，但是尽量遵循函数的大小写进行调用。
 函数名称不能重名，函数重名会报 "Fatal error" 致命错误。
 函数名称不能与系统函数重名，“function_exists(函数名)” 检测函数是否存在。存在返回true，不存在false。
 函数参数可以有，也可以没有参数。可以有返回值，也可以没有返回值。 
 函数调用可以在函数定义上方调用，也可以在函数定义后面调用。
 */

 echo function_exists('substr');br();
 
 /**
  *封装函数的时候，平时代码怎么写，现在就怎么写，只不写完之后在外层套一个架子
  *函数封装完之后需要调用才会执行
  *返回值通过return 返回值形式，返回值形式可以是任意类型，函数默认返回NULL类型。
  */
 
 echo '函数返回类型 >>> ';
 if(!function_exists('test1')){
	 function test1(){
		 return array(15,18.1,false,'light',array(),null);
		 return new stdClass();
		 return fopen('xh2.php','r');
		 return null;
		 return false;
		 return 1;
	 }
 } 
 var_dump(test1());br();
 
 /**
  *参数的例子
  *返回一个3行2列的表格
  **  
 1.按照平时的写法创建一个表格
   $table = "<table border='1' cellpadding='0' cellspacing='0' width=50%  >";
	for($i=0;$i<3;$i++){
		$table.="<tr>";
			for($j=0;$j<2;$j++){
				$table.="<td>x</td>";
			}
		$table.="</tr>";
	}
	$table.="<table>";
	echo $table;
	
 2.在外面加上一个框架。
	function createTable(){
		函数体 ...
		return $table;
	}
 3.外层调用函数。
	echo createTable();
  **
	4.传参动态更改表格的行数和列数。
		function createTable($rows,$cols){}
		echo createTable(3,5);
	5.默认参数
		function createTable($rows=3,$cols=5){}
		echo createTable();
		echo createTable(6,4);
  */  
  
  
  /**
  * @param number $rows 行
  * @param number $cols 列
  * @param int $width 表格宽百分比
  * @param string $content 内容
  * @return  string
  */  
function createTable($rows=2,$cols=4,$width=40,$content='x'){	
 $table = "<table border='1' cellpadding='0' cellspacing='0' width=$width.% >";
	for($i=0;$i<$rows;$i++){
		$table.="<tr>";
			for($j=0;$j<$cols;$j++){
				$table.="<td>$content</td>";
			}
		$table.="</tr>";
	}
	$table.="<table>";
	return $table;
} 
echo createTable();br();
echo createTable(1,2,80,'Key');
 
/**
 *作业 ： 根据文件名得到它的扩展名
 */
 function getExt($filename){
	 return strrchr($filename,'.'); 
 }
 echo getExt('1.11.txt'); br();
 echo getExt('a.b.c.jpeg'); br(); hr();
 
 
 /**
  * 作用域，函数外无法调用函数内的变量，函数内也不能调用函数外的变量。
  * 局部变量->
  *		动态变量，立即释放，多次调用不累积，多次调用结果都一样。
  * 	静态变量，结果累积，首次调用结果保存在静态内存中，再次调用从静态内存中取值。
  * 全局变量->
  *		global：申明全局变量。global定义全局变量时不可以赋值，正确示范global $i,$j,$m,$username。错误示范global $i=1;
  *		$GLOBALS：超全局变量，不申明，只使用。所有global定义过的全局变量都可以在$GLOBALS里打印出来。比如打印全局变量$username，写法是$GLOBALS['username'];
  **/

  echo '局部变量--动态变量、静态变量 >>>';br();

 /* 局部变量--动态变量*/
  function getLocal(){
	  $num1=5;
	  echo $num1,',';
	  $num1++;
  }
getLocal();	getLocal();	getLocal();  br();

/*局部变量- 静态变量*/
  function getSta(){
	static $num2=5;
	echo $num2,',';
	$num2++;
} 
getSta(); getSta();  getSta(); br();


 /*全局变量--global*/
  echo '全局变量--global、$GLOBALS >>>';br();

 function getGlobal(){
	global $num3,$num4,$num5;
	$num3='hello10'; 
	$num4="10world ! ";
	$num5=1100;
	echo $num3.$num4;
} 
getGlobal(); br();
echo $num3.$num4; br();
 
 echo '打印$GLOBALS>>>';br();
 var_dump($GLOBALS); br();
 var_dump($GLOBALS['num3']); br();
 var_dump($GLOBALS['num5']); hr();
 
 
 /**
  *函数传值和传引用的区别
  *传值，改变函数内部的参数，不会影响到外部的值
  *传引用，在参数前加&符号,在改变函数内部参数，会影响函数本身。&传引用只能传变量，传值本身会报"Fatal error:"。
  **/
 echo '传值和传引用的区别>>>';br();
 function posValue($num6){
	 $num6+=10;
	 var_dump($num6);
 }
 $num7=5;
 posValue($num7); echo ', ';
 var_dump($num7); br();

 /*传引用& */
 function posQuote(&$num8){
	 $num8+=10;
	 var_dump($num8);
 }
 $num9=5;
 posQuote($num9);echo ', ';		# int(15) , int(5) 
 var_dump($num9); br();hr();	# int(15) , int(15) 
 
 /**
  *PHP特殊形式函数
  *可变函数的使用，把'md5'赋值给$funName='md5'，使用$funName()加密字符串，与md5()结果是一样的。
  *可变函数可以在自定义函数使用。
  *不存在的函数不能定义可变函数，使用get_defined_functions()查看所有内置函数和用户自定义函数。
  **
  *
  *
  **/
 echo '&nbsp;&nbsp;  => 三php特殊形式函数';br();
 $funName = 'md5';
 echo $funName('light');br();	# 2ac43aa43bf473f9a9c09b4b608619d3
 echo md5('light');br(); 	# 2ac43aa43bf473f9a9c09b4b608619d3
 
 #echo PHPINFO();
 #print_r(get_defined_functions());
 
 /**
  *回调函数
  *
  */
 function add($x,$y){
	 return $x+$y;
 }
 function minus($x,$y){
	 return $x-$y;
 }
 function sum($funcName,$x,$y){
	 return $funcName($x,$y);
 }
 echo sum('add',1,4); br();	# 5
 echo sum('minus',50,22); br(); # 28
 

function arrs($arr,$mult){
	
 for($i=0;$i<count($arr);$i++){
	  $arr[$i] = $arr[$i]*$mult;
 }
 return $arr;
}
 

 $arrt =array(21,15,10,3,2);
print_r(arrs($arrt,6));  # Array( [0] => 126 [1] => 90 [2] => 60 [3] => 18 [4] => 12 )


 /**
  *匿名函数
  *匿名函数也叫闭包函数，允许临时创建一个没有指定名称的函数。
  *匿名函数可以做作变量的值来使用
  */
 $funct = function(){
	 return 'this is a anonymous function ';
 };
 echo $funct();br();	# this is a anonymous function  
 
 $name  = function($from){
	 return "i am from $from";
 };
 echo $name('china'); br();		# i am from china	
 
 /**
  * 递归函数的例子
  *自己调用自己
  *
  *****/
 
 function digui($i){
	 echo $i;
	 $i--;
	 if($i>=0){
		 return digui($i);
	 }
 }  
 echo digui(5);  //543210
 br();hr();

  
  b('四引入自定义函数');
  /**
   * include 产生一个"Warning"警告错误。程序继续执行。
   * require 引入不存在的文件，会产生一个"Fatal error:"致命错误。程序中断执行。
   **
   *__FILE__ 当前文件的绝对路径
   *__LINE__ 当前位置的行号
   */
   
   //require 'noExists.php';
   //include './xh23.php'; 
 echo __FILE__; BR();	# D:\xampp\htdocs\xh2\xh13_function.php
 echo __LINE__; hr();	# 300
 
   b('五PHP函数实践');
 /**
  *函数实战
  */

  /*计算器 */
 function tatol($num1=10,$num2=22,$op='+'){	 
	 if(!is_numeric($num1)||!is_numeric($num2)){
		 echo '非法操作，请输入数字';	
		 
	 }else{		 
 switch($op){
	 case '+':$res = $num1+$num2;break;
	 case '-':$res = $num1-$num2;break;
	 case '*':$res = $num1*$num2;break;
	 case '/':$res = $num1/$num2;break;
	 case '%':$res = $num1%$num2;break;
 };
 return $num1."$op".$num2.'='.$res;

	 }
 }
echo is_numeric('1');br();	# 1
echo tatol('a',19,'%');br();	#非法操作，请输入数字
echo tatol();br();	#10+22=32
echo tatol(3,2,'/');br();	# 3/2=1.5

 
 /*封装时间函数
  *返回当前时间，星期几
  */ 
  function getTimeWeek($year='年',$month='月',$day='日')
{		 
 $nowTime = strtotime('now');
 $dateTime = date("Y{$year}m{$month}d{$day}",$nowTime);
 $dayWeek = date('w',$nowTime);
 $dayArr = array('日','一','二','三','四','五','六');
 
 switch($dayWeek)
	{
	 case '0': $dayWeek = '日';break;
	 case '1': $dayWeek = '一';break;
	 case '2': $dayWeek = '二';break;
	 case '3': $dayWeek = '三';break;
	 case '4': $dayWeek = '四';break;
	 case '5': $dayWeek = '五';break;
	 case '6': $dayWeek = '六';break;
	}
	return $dateTime . '  星期'.$dayWeek; 
}
 echo getTimeWeek('年','月','日'); br();	# 2017年03月13日 星期一
 echo getTimeWeek('/','/','');br();		# 2017/03/13 星期一
 
 /**
  *封装验证码
  *默认产生4位验证码
  *type=1 生成数字验证码
  *type=2 生成字母验证码
  *type=3 生成数字+字母的混合验证码
  *我也可以改变验证码长度 
 */
 

 function verify($type=1,$length=4){   

 $words = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
 $wordsNum = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';

		if($type==1)
		{			
			return substr(mt_rand(100,986789),0,$length);br(); #随机数字
			
		}elseif($type==2)
		{
			$wordsLength = strlen($words)-1; //字母长度
			$randOne = '';
				for($i=0;$i<$length;$i++)
					{
						$wordsPos = mt_rand(0,$wordsLength);  #在字母中随机产生一位位置
						$wordsRand = substr($words,$wordsPos,1);  #截取一个随机字母
						$randOne .= $wordsRand;
					}
			return $randOne;  #随机字母
	
		}else if($type==3)
		{
			$wordsLength = strlen($wordsNum)-1; //字母长度
			$randOne = '';
			for($i=0;$i<$length;$i++)
			{
				$wordsPos = mt_rand(0,$wordsLength);  #在字母中随机产生一位位置
				$wordsRand = substr($wordsNum,$wordsPos,1);  #截取一个随机字母
				$randOne .= $wordsRand;
			}
		 return $randOne;
		}
 }
 
echo verify(3,5);br(); #生成数字+字母
echo verify(1,6);br(); #数字
echo verify(2,4);br(); #字母
 
 
 
 
 
 
 
 
 
 