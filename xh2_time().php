<?php
header('content-type:text/html; charset=utf-8');
/**
 *date_default_timezone_get()  得到当前时区;
 *date_default_timezone_set(); 设置时区;
 *PRC "中华人民共和国";
 *Asia/shanghai;
 **/
function br(){echo '<br>';}
function hr(){echo '<hr>';}
 
//echo PHPINFO();
echo "设置当前时区为：".date_default_timezone_get();br();
echo date('Y-m-d H:i:s',time());br();

date_default_timezone_set("UTC");
echo "当前时区为：".date_default_timezone_get();br();
echo date('Y-m-d H:i:s',time());br();

/**
 *ini_set(); 动态设置php.ini
 *ini_get(); 获取 php.ini配置的值;
 */
 ini_set('date.timezone','Asia/shanghai');
 echo "ini_set的date.timezone值是：".ini_get('date.timezone');br();hr();
 
 
 /**
 *date();  Y 4位完整的年份。m月份，带前导零01-12; d日期，带前导0; H 小时 24小时格式，i 分钟， s 秒钟，均带前导零0;
 * date(); 小写h，12小时时间制。小写w获取这星期的第几天,大W全年的第多少周。大写L返回1为闰年，0不是闰年。
 */
 echo "date函数返回当前时间： ".date('Y年m月d日'); br();
 echo date('Y^m^d^'); br();
 echo date('Y/m/d H:i:s A');br();
 echo date('m月d日 i分s秒 a'); br();
 echo date('h:i:s a 星期w'); br();br();
 
 switch(date('w')){
	 case 0: $daystr="日";break;
	 case 1: $daystr="一";break;
	 case 2: $daystr="二";break;
	 case 3: $daystr="三";break;
	 case 4: $daystr="四";break;
	 case 5: $daystr="五";break;
	 case 6: $daystr="六";break;
	 default:$daystr="非法日期";break;
 }
 echo date('Y年m月d日')." 星期$daystr ".date('H时i分');br();
 
 if(date('L'==1)){
	 echo date('Y年')."是闰年"; br();
 }else{
	 echo date('Y年')."不是闰年"; br();
 }
 echo "本周是". date('Y年')."的". date('W')."周"; hr();
 
 echo "获取当前Unix时间戳：" , time(); br();
 
 /**
 *strtotime() ,将英文文本的日期时间返回为时间戳;如 now , +1 day +1 month +1 year;
 *getdate() 获得时间的关联数组;
 **/
 
echo "求时间差：2017-3-11 18:10:16 与 2017-3-5 之间： ";
 $day =(strtotime('2017-3-11 18:10:16')-strtotime('2017-3-5'))/(24*3600);
 echo round($day,1).'天'; br();
echo date('Y-m-d',strtotime('+1 years +3 day +1 month')); br();
 
 echo "获得时间关联数组 ， getdate()：  "; 	br();
 print_r(getdate()); br();
 
 hr();
 /**
  *时间插件,date , datetime-local, month , week ,time ; 
  */


 echo "<form action='doAction.php' method='post'>";
 echo "<input type='date' name='date'>";
 echo "<input type='datetime-local' name='datetime-local'>";
 echo "<input type='week' name='week'>";
 echo "<input type='submit' value='提交'>";
 echo "</form>"; br();


 
 
 
 
 
 
 
 
 
 
 
 
 
 