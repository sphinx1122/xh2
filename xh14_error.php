<?php

/**
 *PHP�������쳣����
 */
 
 /** 
  *PHP�еĴ��󼶱�
  *
  * e_error ����������ֹ����ִ��
  * e_warning ����ʱ����
  * e_parse �﷨��������
  * e_notice ֪ͨ��ע�⣩�����ܴ���������
  * e_core_error PHP��ʼ�����̷�������������
  * e_core_warning PHP��ʼ�����������з����ľ���
  * e_compile_error �����������
  * e_compile_warning ����ʱ����
  *
  **
  * Deprecated ��˼�ǲ��Ƽ�����ͼ���Ĵ���
  * Notice ֪ͨ����
  * Warning ���漶��Ĵ���
  ***/
  
  /**
  *PHP.ini����
  * display_errors �Ƿ���ʾ����?
  * display_errors = On ���� Off  ��������ر�
  * error_reporting ���ô��󼶱�
  * error_reporting = E_ALL & ~E_Notice & E_Error �������д���ͬʱ����֪ͨ���������� 
  **
  * ini_set("����","ֵ"); �����ж�̬����
  * @ ʹ��@������ֹ���������
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
  * ���ô�����־
  * 1�� log_errors=On ����
  * 2�� error_log="D:\xampp\php\logs\php_error_log\e.log" ָ������λ��
  *	2-1 ע��㣬������error_log����; Module Settings ;������Ǹ���
  ***/
 
 ini_set('display_errors','off');
 //ini_set('error_log','D:\XAMPP\PHP\LOGS\testError.log');
 error_reporting(-1);
 echo $test;
 echo '<hr>';
 settype($var,'king');
 echo '<hr>';
 test();
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 