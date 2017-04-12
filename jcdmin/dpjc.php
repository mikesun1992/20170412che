<?php
if (!defined('APP_IN')) exit('Access Denied');


if(!empty($_POST)){
    if($_SESSION['info_id']){
        $_POST['info_id']=$_SESSION['info_id'];
        $rs=$db->row_insert('waiguan',$_POST);
        if($rs){
            showmsg('录入成功！','jcdmin_login.php?m=xtsb');
        }else{
            showmsg('录入失败！',-1);
        }
    }else{
        showmsg('请先填写车主信息','jcdmin_login.php?m=czxx');
    }
}
$tpl->display('jcdmin/dpjc.html');