<?php

if(!defined('APP_IN')) exit('Access Denied');


//用户名 换成手机号验证登录

//验证用户名
if (!empty($_POST['param']) and $_POST['name']=="username")
{	
	$data = $db->row_count('member',"mobilephone='".$_POST['param']."'");
    if($data==0){
		echo '{"info":"用户名不存在！","status":"n"}';
	}
	else{
		echo '{"info":"用户名验证成功！","status":"y"}';
	}
	exit;
}

//已登陆转向
if (is_user_login()) {
	redirect('',"index.php?m=user");
}

//登陆
if (submitcheck('username'))
{
    //不可为空
    $arr_not_empty = array('username'=>'请输入您的账号','password'=>'请输入您的密码');
    can_not_be_empty($arr_not_empty,$_POST);
    
	//if (trim($_POST['authcode']) != $_SESSION['authcode']) showmsg('验证码不正确',-1);
    $rs_user = $db->row_select_one('member',"mobilephone='".trim($_POST['username'])."' AND password='".md5(trim($_POST['password']))."'");
    if (!$rs_user) showmsg('用户不存在或密码错误',-1);
    //if (!$rs_user['status']) showmsg('此账户已被禁用',-1);
    $db->row_update('member',array('last_login_time'=>TIMESTAMP,'last_login_ip'=>get_client_ip(),'login_count'=>$rs_user['login_count']+1),"id={$rs_user['id']}");
    $_SESSION['USER_ID'] = $rs_user['id'];
	$_SESSION['USER_NAME'] = $rs_user['username'];
    showmsg('登陆成功',"index.php?m=user");
}

$tpl -> display('default/'.$settings['templates'].'/login.html');
?>