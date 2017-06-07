<?php
function magtxt($magtxt,$url)
{
echo "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'><html><script language='javascript' type='text/javascript'  charset='utf-8'>";
echo "function mm(){window.history.forward(1);history.go(-1);";
echo "window.top.location.href='$url'}";
echo "</script>"; 
$magbox="<body style='padding: 0;margin: 0;background-color: #fff;'><div style='position: fixed;top: 25%;width: 30%;left: 35%;'><div style='width: 96%;padding:2%;'><div style='width: 90%;margin: auto;margin-top: 30px;margin-bottom: 30px;padding: 5px;font-size: 20px;text-align: center;'>".$magtxt."</div><div style='border-radius:5px 5px 5px 5px;color: #4498d9;padding: 10px;width: 120px;margin: auto;text-align: center;font-size: 14px;cursor: pointer;margin-bottom: 30px;' onclick='mm()'>未跳转请点击<span style='font-family: 黑体;'>>></span></div></div></div></body></html>"; 
echo $magbox;
echo "<meta http-equiv='refresh' content='1; url=$url' />";   
}
function b_magtxt($magtxt)
{
echo "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'><html><script language='javascript' type='text/javascript'  charset='utf-8'>";
echo "setTimeout(function(){history.go(-1);},1000);";
echo "</script>"; 
$magbox="<body style='padding: 0;margin: 0;background-color: #fff;'><div style='position: fixed;top: 25%;width: 30%;left: 35%;'><div style='width: 96%;padding:2%;'><div style='width: 90%;margin: auto;margin-top: 30px;margin-bottom: 30px;padding: 5px;font-size: 20px;text-align: center;'>".$magtxt."</div><div style='border-radius:5px 5px 5px 5px;color: #4498d9;padding: 10px;width: 120px;margin: auto;text-align: center;font-size: 14px;cursor: pointer;margin-bottom: 30px;' onclick='mm()'>未跳转请点击<span style='font-family: 黑体;'>>></span></div></div></div></body></html>"; 
echo $magbox;
}
?>