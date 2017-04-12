<?php

if (!defined('APP_IN')) exit('Access Denied');

$tpl->assign( 'weburl', WEB_PATH );


$time = date("Y-m-d H:i:s");
$tpl->assign('time', $time);


//退出登陆
if (is_jcs_login() && get('a') == 'logout')
{
    session_unset();
    session_destroy();
}

//已登陆转向
if (is_jcs_login()) redirect('', JCDMIN_PAGE.'?m=index');

//登陆
if (submitcheck('jcs_id'))
{
    //不可为空
    $arr_not_empty = array('jcs_id'=>'请输入您的检测师工号','pwd'=>'请输入您的进入密码');
    can_not_be_empty($arr_not_empty,$_POST);

    $rs = $db->row_select_one('jianceshi',"jcs_id='".trim($_POST['jcs_id'])."' AND pwd='".md5(trim($_POST['pwd']))."'");
    if (!$rs) showmsg('用户不存在或密码错误',-1);
    $_SESSION['jcs_id'] = $rs['jcs_id'];
    $_SESSION['name'] = $rs['name'];
    //$_SESSION['jcs_id'] = 123;
    //$_SESSION['name'] = 123;
    //redirect('', JCDMIN_PAGE.'?m=index');
    showmsg('登录成功', JCDMIN_PAGE.'?m=index');
}
else{
    //未登陆转到登陆页面
    $tpl->display( 'jcdmin/login.html' );
}
?>