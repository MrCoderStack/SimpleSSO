<?php
//t2.example.com

if(isset($_GET['token']))
{
	//token验证逻辑
	$token = $_GET['token'];
	setcookie("t2", "$token", time()+3600);
	header("location:http://t2.example.com");
}
else
{

	if(!isset($_COOKIE['t2']))
	{
		header("location:http://www.sso.com?rollback=t2.example.com");
	}
	else
	{
		echo $_COOKIE['t2'];
	}
}


?>
