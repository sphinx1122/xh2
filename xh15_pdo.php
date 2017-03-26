<?php
header("content-type:text/html; charset=utf-8");
/*PDO连接数据库*/
try{
	$dsn = 'mysql:host=localhost;dbname=test';
	$username='root';
	$passwd='';
	$pdo = new PDO($dsn,$username,$passwd);
	
	var_dump($pdo);
}catch(PDOException $e){
	echo $e->getMessage();
}

/**
 * exec() 执行一条sql语句并返回其受影响的记录条数，没有受影响的条数即它返回值为0
 * exec() 对insert ,update ,delete有效， 对select 查询无效
 * 创建表
 **/
 try{
	 $pdo = new PDO('mysql:host=localhost;dbname=xh2','root','');
	$sql = <<<EOF
	create table if not exists user(
	id int unsigned auto_increment key,
	username varchar(20) not null unique,
	password char(32) not null,
	email varchar(30) not null
	); 
EOF;

	$res = $pdo->exec($sql);
	$sql = 'insert into user(username,password,email) values
	("light1126","'.md5("light4").'","lightonthekey@gmail.com"),
	("light152","'.md5("light5").'","lightonthekey@gmail.com"),
	("light126","'.md5("light6").'","lightonthekey@gmail.com")'; //插入数据
	
	//$sql = "update user set username='lightN' where id=1";	//更新
	//$sql = "delete from user where id=1";	//删除
	
	$res = $pdo->exec($sql);
	echo "受影响的条数：".$res;
	echo "最后一条记录的ID是：".$pdo->lastInsertId();
	
	}catch(PDOException $e){
	 echo $e->getMessage();
 }
 echo '<hr><br>';
 /**
  * query() 查询
  * query() 也可以用于增删改，但是更多用于查询。
  **/
try{
	$pdo=new PDO('mysql:host=localhost;dbname=xh2','root','');
	$sql = "select * from user where 1";
	$stmt = $pdo->query($sql);
	var_dump($stmt);
	foreach($stmt as $v){
		//print_r($v);
		echo $v['id'].'<br>';
		echo $v['username'].'<br>';
		echo $v['password'].'<br>';
	}

}catch(PDOException $e){
	echo $e->getMessage();
}
  

print_r(get_defined_functions());
  
  echo '<hr>';
  $a=0;
  if($a++){echo true;}else{echo false;}
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
 
