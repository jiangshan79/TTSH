<?php
$charset='utf-8';
header('Content-Type: text/html; charset='.$charset);
date_default_timezone_set('PRC');
$time=date('Y-m-d H:i:s');
session_start();
include("../inc/conn.php");
include_once("../inc/mag_box.php");
if($_POST["yzm"]==$_SESSION['rand'])
{
if($_POST["user_name"]!=null && $_POST["user_pwd"]!=null)
{
include("../inc/conn.php");
$user_name=$_POST["user_name"];
$user_pwd=md5($_POST["user_pwd"]);
$query=mysql_query("select * from good_admin where username='$user_name' and userpwd='$user_pwd' and state>0");
$us=is_array($row=mysql_fetch_array($query));
if($us)
{
mysql_query("update good_admin set logtime='$time' where id=".$row[0]); 
$_SESSION["admin_id"]=$row[0];
$_SESSION["admin_log_state"] =$row['state'];
$url ="admin_edit.php";
$url="admin_edit.php";
$magtxt="登录成功";
magtxt($magtxt,$url);
}
else
{ 
$magtxt="用户不存在！";
b_magtxt($magtxt);
}
}
else
{
$magtxt="登陆错误！";
b_magtxt($magtxt);
}
}
else
{
$magtxt="登陆错误！";
b_magtxt($magtxt); 
}
?>