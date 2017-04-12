<?php
if (!defined('APP_IN')) exit('Access Denied');

$m=array();
if(!empty($_POST)){
    if($_POST['pwd1']!=$_POST['pwd2']){
        showmsg('两次密码输入不一致！',-1);
    }else{
    $m['pwd']=md5($_POST['pwd1']);
    $m['update_time']=time();
    $rs=$db->row_select_one("jianceshi",'jcs_id='.$_SESSION['jcs_id'],'pwd');
    if($rs['pwd']!=md5($_POST['pwd'])){
        showmsg('原密码错误！',-1);
    }else{
        $r=$db->row_update("jianceshi",$m,'jcs_id='.$_SESSION['jcs_id']);
        if($r){
            showmsg('密码修改成功！','jcdmin_login.php?m=login&a=logout');
        }else{
            showmsg('密码修改失败！',-1);
        }
    }
}
}
$tpl->display('jcdmin/xgmm.html');