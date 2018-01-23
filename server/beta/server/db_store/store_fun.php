<?php
	header ( "content-Type: text/html; charset=utf-8" );
	//备份数据库
	$host="127.0.0.1:3306";
	$user="root";//数据库账号
	$password="seagull";//数据库密码
	$dbname="tjhzs";//数据库名称
	// $mysql_file="data/".$filename; //指定要恢复的MySQL备份文件路径,请自已修改此路径

	function db_store ($host, $user, $password, $dbname) {
		//这里的账号、密码、名称都是从页面传过来的
		if(!@mysql_connect($host,$user,$password)) //连接mysql数据库
		{
		 echo '数据库连接失败，请核对后再试';
		 exit;
		}
		if(!@mysql_select_db($dbname)) //是否存在该数据库
		{
		 echo '不存在数据库:'.$dbname.',请核对后再试';
		 exit;
		}
		$mysql= "set charset utf8;\r\n";
		$q1=@mysql_query("show tables");
		while($t=mysql_fetch_array($q1)){
		  $table=$t[0];
		  $q2=mysql_query("show create table `$table`");
		  $sql=mysql_fetch_array($q2);
		  $mysql.=$sql['Create Table'].";\r\n";
		  $q3=mysql_query("select * from `$table`");
		  while($data=mysql_fetch_assoc($q3)){
		    $keys=array_keys($data);
		    $keys=array_map('addslashes',$keys);
		    $keys=join('`,`',$keys);
		    $keys="`".$keys."`";
		    $vals=array_values($data);
		    $vals=array_map('addslashes',$vals);
		    $vals=join("','",$vals);
		    $vals="'".$vals."'";
		    $mysql.="insert into `$table`($keys) values($vals);\r\n";
		  }
		}
		$filename=dirname(__FILE__).'/'.$dbname.date('Ymjgi').".sql"; //存放路径及文件名
		$fp = fopen($filename,'w');
		fputs($fp,$mysql);
		fclose($fp);
		echo "数据备份成功";
	}
	// db_store($host, $user, $password, $dbname);

	// fname 需要写入到数据库的文件（也就是上面生成的备份文件）
	function restore($host, $user, $password, $dbname, $fname) {

		//这里的账号、密码、名称都是从页面传过来的
		if(!@mysql_connect($host,$user,$password)) //连接mysql数据库
		{
		 echo '数据库连接失败，请核对后再试';
		 exit;
		}
		if(!@mysql_select_db($dbname)) //是否存在该数据库
		{
		 echo '不存在数据库:'.$dbname.',请核对后再试';
		 exit;
		}

		if (file_exists($fname)) {
		  $sql_value="";
		  $cg=0;
		  $sb=0;
		  $sqls=file($fname);
		  foreach ($sqls as $sql) {
		  	$sql_value.=$sql;
		  }
		  $a=explode(";\r\n", $sql_value); //根据";\r\n"条件对数据库中分条执行
		  $total=count($a)-1;
		  mysql_query("set names 'utf8'");
		  for ($i=0;$i<$total;$i++) {
			  //执行命令
			  if(mysql_query($a[$i]))
			  {
			  	$cg+=1;
			  } else {
		   		$sb+=1;
		   		$sb_command[$sb]=$a[$i];
		  	}
		  }
		  echo "操作完毕，共处理 $total 条命令，成功 $cg 条，失败 $sb 条";
		  //显示错误信息
		  if ($sb>0) {
		  	echo "<hr><br><br>失败命令如下：<br>";
		  	for ($ii=1;$ii<=$sb;$ii++) {
		   		echo "<p><b>第 ".$ii." 条命令（内容如下）：</b><br>".$sb_command[$ii]."</p><br>";
		  	}
		  }  //-----------------------------------------------------------
	  } else {
	  	echo "MySQL备份文件不存在，请检查文件路径是否正确！";
	  }
	}
?>
