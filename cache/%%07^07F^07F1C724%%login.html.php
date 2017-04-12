<?php /* Smarty version 2.6.18, created on 2017-03-16 08:29:03
         compiled from admins/login.html */ ?>

<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />

<!--[if lt IE 9]>
<script type="text/javascript" src="js/html5.js"></script>
<script type="text/javascript" src="js/respond.min.js"></script>
<script type="text/javascript" src="js/PIE_IE678.js"></script>
<![endif]-->
<link href="../skin/css/H-ui.css" rel="stylesheet" type="text/css" />
<link href="../skin/css/H-ui.login.css" rel="stylesheet" type="text/css" />
<!--[if IE 6]>
<script type="text/javascript" src="js/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>后台登录 - 二手车管理系统后台</title>

</head>
<body>
<input type="hidden" id="TenantId" name="TenantId" value="" />
<div class="header"></div>
<div class="loginWraper">
  <div id="loginform" class="loginBox">
    <form action="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=login" method="post" name="form_login">
      <div class="formRow user">
        <input id=""  name="username" type="text"  value="请输入用户名" onfocus="if (this.value=='请输入用户名') {this.value=''}" onblur="if (value=='' ) {value='请输入用户名'}" class="input_text input-big">
      </div>
      <div class="formRow password">
        <input id="" name="password" type="password" value="请输入密码" onfocus="if (this.value=='请输入密码') {this.value=''}" onblur="if (value=='' ) {value='请输入密码'}" class="input_text input-big">
      </div>
      <div class="formRow yzm">
        <input class="input_text input-big" type="text" name="authcode" onBlur="if(this.value==''){this.value='验证码:'}" onClick="if(this.value=='验证码:'){this.value='';}" value="验证码:" style="width:150px;" onfocus="document.getElementById('yzm').style.display='block'" >
        <img src="<?php echo $this->_tpl_vars['weburl']; ?>
/include/kcaptcha/" width="100" height="45" onclick="this.src='<?php echo $this->_tpl_vars['weburl']; ?>
/include/kcaptcha/?'+Math.random();" title="点击刷新验证码"  align="absmiddle" style="cursor:pointer">  </div>
    
      <div class="formRow">
        <input name="submit" type="submit" class="btn radius btn-success btn-big" value="&nbsp;登&nbsp;&nbsp;&nbsp;&nbsp;录&nbsp;">
      
      </div>
    </form>
  </div>
</div>
<div class="footer">二手车管理系统后台</div>
<script type="text/javascript" src="../skin/js/jquery.min.js"></script>
<script type="text/javascript" src="../skin/js/H-ui.js"></script>

</body>
</html>