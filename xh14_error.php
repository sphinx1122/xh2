<?php

/**
 *PHP错误处理，异常处理
 */
 
 /** 
  *PHP中的错误级别
  *
  * e_error 致命错误，终止程序执行
  * e_warning 运行时警告
  * e_parse 语法解析错误
  * e_notice 通知（注意），可能错误的情况。
  * e_core_error PHP初始化过程发生的致命错误
  * e_core_warning PHP初始化启动过程中发生的警告
  * e_compile_error 致命编译错误
  * e_compile_warning 编译时警告
  *
  **
  * Deprecated 意思是不推荐，最低级别的错误，
  * Notice 通知级别
  * Warning 警告级别的错误
  ***/
  
  /**
  *PHP.ini设置
  * display_errors 是否显示错误?
  * display_errors = On 或者 Off  ，开启或关闭
  * error_reporting 设置错误级别。
  * error_reporting = E_ALL & ~E_Notice & E_Error 。报所有错误，同时不报通知、致命错误。 
  **
  * ini_set("参数","值"); 代码中动态设置
  * @ 使用@符号抑止错误输出。
  */
  
  echo 333;
  //error_reporting("E_Notice");
  //echo ini_set("display_errors",'0');
 echo $a;
 $username = 'imooc';
 echo $username;
 echo 1+1; echo'<br>';
echo ini_get('error_reporting');
 
 
 /**
  * 配置错误日志
  * 1， log_errors=On 开启
  * 2， error_log="D:\xampp\php\logs\php_error_log\e.log" 指定保存位置
  *	2-1 注意点，有两个error_log，是; Module Settings ;下面的那个。
  ***/
 
 ini_set('display_errors','off');
 //ini_set('error_log','D:\XAMPP\PHP\LOGS\testError.log');
 error_reporting(-1);
 echo $test;
 echo '<hr>';
 settype($var,'king');
 echo '<hr>';
 test();
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 