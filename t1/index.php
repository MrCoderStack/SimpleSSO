<?php
//t1.example.com

if(isset($_GET['token']))
{
	//token验证逻辑
	$token = $_GET['token'];
	setcookie("t1", "$token", time()+3600);
	header("location:http://t1.example.com");
}
else
{
	
	if(!isset($_COOKIE['t1']))
	{
		header("location:http://www.sso.com?rollback=t1.example.com");
	}
	else
	{
		echo $_COOKIE['t1'];
	}


}




?>
