<?php
if (!defined('APP_IN')) exit('Access Denied');

if(!empty($_POST)){

    if($_SESSION['mobile']){
        $rs=$db->row_update('info',$_POST,'mobile='.$_SESSION['mobile']);
        if($rs){
            showmsg('录入成功！','jcdmin_login.php?m=wgjc');
        }else{
            showmsg('录入失败！',-1);
        }
    }

}
$tpl->display('jcdmin/clpz.html');