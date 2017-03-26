<?php
header("content-type:text/html,charset=utf8");
echo '--------系统常量-------<br>';
echo PHP_OS,'<br>';
echo PHP_VERSION,'<br>';
echo PHP_SAPI,'<br>';


echo '-------自定义常量-------<br>';
define('UNAME','zhangshan');

echo UNAME;

echo '----------魔术常量-----------<BR>';
echo __FILE__,'<br>';
echo __LINE__,'<br>';
echo __FUNCTION__,'<br>';
echo __METHOD__,'<br>';
echo __CLASS__,'<br>';

echo '--------文件上传------------<br>';
/*
$uname = $_POST['uname'];
echo $uname,'<br>';

$uimage = $_FILES["uimage"];
print_r($uimage);echo '<br>-----------------<br>';
$arr = explode('.',$uimage['name']);
echo '$arr的结果'; print_r($arr);echo '<br>';
$end = end($arr);
echo $end,'<br>';
//文件重命名
$tmp_name = time().'_'.rand(10000,99999).'.'.$end;
echo $tmp_name,'<br>'; 
//类型为jpg,png,gif
if($end !="jpg" && $end !="gif" && $end !="png" ){
	echo '图片类型错误';
	exit;
}elseif($uimage['size']>2048000){
	echo '文件大小超过2M';
	exit;
}

move_uploaded_file($uimage['tmp_name'],'./upload/'.$tmp_name);
*/

//接收POST传值
$uname = $_POST['uname'];
$uimage = $_FILES["uimage"];
echo $uname,'<br>';
print_r($uimage);echo '<br>';

//获取文件类型;
$name = explode('.',$uimage['name']);
$nameend = end($name);
print_r($nameend); echo '<br>';

//图片名
$rand = rand(10000,99999);
$rname = time().$rand.'.'.$nameend;
echo $rname; echo '<br>';

//判断文件大小及文件类型
if($uimage['size']==0){
		echo '未选择图片';die;
	}elseif($nameend !='jpg' && $nameend !='jpeg' && $nameend !='gif' && $nameend !='png'){
		echo '图片类型不对，上传类型为jpg,jpeg,png,gif';exit;
	}elseif($uimage['size']>2097152){
		echo '图片大小不能超过2M';die;
}

//上传图片
move_uploaded_file($uimage['tmp_name'],"./upload/$rname");








