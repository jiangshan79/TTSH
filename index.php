<?php include_once("config/admin_config.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" lang="zh-CN">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" /> 
<meta name="author" content="<?php echo $author?>"/>
<link rel="shortcut icon" href="<?php echo $icon?>" />
<meta name="keywords" content="<?php echo $keywords?>"/>
<meta name="description" content="<?php echo $description?>"/>
<script src="../js/jquery-1.8.2.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function()
{
sessionStorage.clear(); 
$("#logfm").submit(function()
{
if($("#user_name").val()==null || $("#user_name").val()=="")
{
alert("用户名不能为空！");
$("#user_name").focus();
return(false);
}
if($("#user_pwd").val()==null || $("#user_pwd").val()=="")
{
alert("密码不能为空！");
$("#user_pwd").focus();
return(false);
}
if($("#yzm").val()==null || $("#yzm").val()=="")
{
alert("验证码不能为空！");
$("#yzm").focus();
return(false);
}
});
    
})
</script>
<style>
body
{
padding: 0;margin: 0;background-color: #f5f5f5;
}
.tijiao
{
cursor: pointer;
color: #000;
background-color: #fff;
border: solid 1px #000;
width: 100px;
height: 28px;
line-height: 26px;
font-size: 14px;
}
.tijiao:hover
{
color: #fff;
background-color: #009900;
border: solid 1px #017d01;
width: 100px;
height: 28px;
line-height: 26px;
}
input{outline:none;}
input:-webkit-autofill
{
-webkit-box-shadow: 0 0 0px 1000px white inset !important;
outline:none;
}
</style>
<title><?php echo $head_title?></title>
</head>
<body>
<div style="font-family: 微软雅黑;width: 80%;padding: 10%;padding-top: 8%;">
<div style="width:600px;height: 200px;margin:4% auto;padding-top: 30px;color: #000;background-color: #fff;border: solid 1px #d1d1d1;padding-bottom: 50px;">
<div style="font-size:24px;text-align: center;padding-bottom: 50px;color: #009900;">管理员登陆</div>
<form method="post" id="logfm" name="logfm" action="login_action.php" style="padding: 0;margin: 0;">
<table align="center"  cellpadding="0" cellspacing="0" >
<tr>
<td align="left" >
用户：<input type="text"  style="background: none;border:none;border-bottom: solid 1px #666;padding: 4px;width: 160px;vertical-align: text-bottom;margin-right: 10px;background-color: #fff;" id="user_name" name="user_name"/>
</td>
<td>
密码：<input type="password" style="background: none;border:none;border-bottom: solid 1px #666;padding: 4px;width: 160px;vertical-align: text-bottom;" id="user_pwd" name="user_pwd"/>
</td>
</tr>
<tr>
<td align="left" style="padding-top: 56px;">
验证码：<input type="text"  style="background: none;border:none;border-bottom: solid 1px #666;padding: 2px;width: 160px;vertical-align: text-bottom;"  id="yzm" name="yzm"/>
</td>
<td style="font-weight: bold;padding-top: 56px;">
<img style="cursor:pointer;vertical-align: bottom;height: 28px;margin-left: 2px;" src="inc/checkcode.php" onClick="this.src=this.src+'?'+Math.random();" name="yzimg"  id="yzimg"/>
<input type="submit" value="登陆"  class="tijiao" style="margin-left: 10px;"/>
</td>
</tr>
</table>
</form>
</div>
</div>
</body>
</html>