<?php /* Smarty version 2.6.18, created on 2017-03-16 08:28:52
         compiled from jcdmin/login.html */ ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta charset="utf-8"/>
<title>后台登录</title>
<meta name="author" content="DeathGhost" />
<link rel="stylesheet" type="text/css" href="../templates/jcdmin/css/style.css" />
<style>
body{height:100%;background:#16a085;overflow:hidden;}
canvas{z-index:-1;position:absolute;}
</style>
<script src="../templates/jcdmin/js/jquery.js"></script>
<script src="../templates/jcdmin/js/verificationNumbers.js"></script>
<script src="../templates/jcdmin/js/Particleground.js"></script>
<script>
$(document).ready(function() {
  //粒子背景特效
  $('body').particleground({
    dotColor: '#5cbdaa',
    lineColor: '#5cbdaa'
  });
  //验证码
  createCode();
  //测试提交，对接程序删除即可
  $(".submit_btn").click(function(){
	  //location.href="index.php";
	  });
});
</script>
</head>
<body>
<dl class="admin_login">
 <dt>
  <strong>检测员管理</strong>
  <em>Surveyor System</em>
 </dt>
    <form method="post" action="jcdmin_login.php?m=login">
 <dd class="user_icon">
  <input type="text" name="jcs_id" placeholder="请输入工号" class="login_txtbx"/>
 </dd>
 <dd class="pwd_icon">
  <input type="password" name="pwd" placeholder="请输入密码" class="login_txtbx"/>
 </dd>
 <dd class="val_icon">
  <div class="checkcode">
    <input type="text" id="J_codetext" placeholder="验证码核验" maxlength="4" class="login_txtbx">
    <canvas class="J_codeimg" id="myCanvas" onclick="createCode()">对不起，您的浏览器不支持canvas，请下载最新版浏览器!</canvas>
  </div>
  <input type="button" value="验证码核验" class="ver_btn" onClick="validate();">
 </dd>
 <dd>
  <input type="submit" value="立即登陆" class="submit_btn"/>
 </dd>
    </form>
 <dd>
  <p>© 2016 版权所有</p>
 </dd>
</dl>
</body>
</html>