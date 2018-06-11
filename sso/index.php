<?php 
//www.sso.com

if(!isset($_COOKIE['sso']))
{
	//执行登录逻辑
	setcookie("sso", "123456", time()+3600, '/', 'www.sso.com');
	$token = 123456;
}
else
{
	$token = $_COOKIE['sso'];
}
//登录完成后携带token跳转子应用
$rollback =  urldecode($_GET['rollback'])."?token=$token";
header("location:http://$rollback");

?>