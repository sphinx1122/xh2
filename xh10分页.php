<html>
	<head><title>分页</title></head>
<body>
	<style>
	a{text-decoration:none;border:1px solid #aaaadd; padding:2px 5px;}
	.xz{color:white;background:blue; }
	.text_gray{color:gray;}
	</style>
<?php

/**br 换行 函数**/
function br(){echo '<br><br>';}

/*
//连接mysql
$link = mysql_connect('localhost','root','');
$select  = mysql_select_db('xh2');
mysql_query('set names utf8');

//数据写入mysql
for($i=0;$i<200;$i++){
	$content="$i 我是内容 ";
$insert = "insert into page (content) value('$content')";
mysql_query($insert);
echo 'ok';
}
*/

/**连接mysql数据库 ,选库 ，设置字符集**/
$host = "localhost";
$username = "root";
$password="";
$conn=mysql_connect($host,$username,$password);
if(!$conn){echo '连接失败';exit;}
mysql_select_db('xh2');
mysql_query("set names utf8");

//获取总共多少行记录
$page = $_GET['p'];
$row = 15;
$p=($page-1)*$row;
$pup=$page-1;
$pdown=$page+1;


$a_page="select count(*) from page";
$total_result=mysql_fetch_array(mysql_query($a_page));
$total=$total_result[0];
$total_page = ceil($total/$row);

//limit 打印表格
$sql = "select * from page limit $p,$row"; 
$result = mysql_query($sql);
echo '<table border=1 width=40% style="margin:auto">';
echo '<tr><th>ID</th><th>content</th></tr>';
while($row = mysql_fetch_assoc($result))
{	
	print_r("<tr><td>".$row['id']."</td>"."<td>".$row['content']."</td></tr>");
}
echo '</table>'; br();

/**显示分页 选择分页**/
$page_banner_start="<a href='$_SERVER[PHP_SELF]?p=$pup'>上一页</a> ";
$page_banner_end="<a href='$_SERVER[PHP_SELF]?p=$pdown'>下一页</a>";
$a_page=" &nbsp;&nbsp;共 $total_page 页";
$head_page = "<a href='$_SERVER[PHP_SELF]?p=1'> 首页 &nbsp</a>";
$end_page="<a href='$_SERVER[PHP_SELF]?p=$total_page'> &nbsp 尾页 </a>";

if($page>1)
	{	
	echo $head_page; echo $page_banner_start;
}else{
	echo '<span class="text_gray">首页 上一页</span>';
	}

for($i=1;$i<$total_page+1;$i++){
	if($page ==$i){
	echo "  <a class='xz' href='$_SERVER[PHP_SELF]?p=$i'> $i </a>";	
	}else{
	echo "  <a href='$_SERVER[PHP_SELF]?p=$i'> $i </a>";	
	}
}

if($page<$total_page)
{	
		echo $page_banner_end; echo $end_page; echo $a_page; 
	}else{
		echo '<span class="text_gray">下一页 尾页 </span>';
}

echo "<form action='xh10page.php' method='get'>";
echo "到第<input type='text' size=2 name='p'>页";
echo "<input type='submit' value='确定'>";
echo "</from>";


//释放结果，关闭链接
mysql_free_result($result);
mysql_close($conn);

?>
</body>
</html>




