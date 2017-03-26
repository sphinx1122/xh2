<?php
/*
$link = @mysql_connect("localhost","root","") or die('连接错误,'.mysql_error()); //mysql连接。
mysql_select_db('demo',$link);	//选库相当于use demo;
$insert = "insert into admin(adm_name,adm_pwd) values('admin','admin')";	//inset into 数据
	//$insert = "delete from admin where adm_name='admin'";
mysql_query("set names utf8");	//设置字符集
mysql_query($insert);	//执行mysql
mysql_close($link);		//关闭


//INSERT INTO `fanwe_admin`(`id`, `adm_name`, `adm_password`, `is_effect`, `is_delete`, `role_id`, `login_time`, `login_ip`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8])

*/

$link = @mysql_connect("localhost","root","") or die("连接错误，".mysql_error());
mysql_select_db('dusnr',$link);
$sql = "select * from fanwe_admin where 1";
$query = mysql_query($sql);


while($rs = mysql_fetch_row($query)){
print_r($rs); echo '<br>';	
}
/*
	mysql_fetch_array()	从结果集中返回一条记录 (混合数组)
	mysql_fetch_assoc()	返回关联数组
	mysql_fetch_row()	返回索引数组
*/
mysql_close($link);