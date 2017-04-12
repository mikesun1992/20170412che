<?php
if (!defined('APP_IN')) exit('Access Denied');

if(!empty($_POST)){
    $neishi['fxp']=$_POST['fxp'];
    $neishi['zkt']=$_POST['zkt'];
    $neishi['zjcm']=$_POST['zjcm'];
    $neishi['fjcm']=$_POST['fjcm'];
    $neishi['hzcm']=$_POST['hzcm'];
    $neishi['hycm']=$_POST['hycm'];
    $neishi['zjzy']=$_POST['zjzy'];
    $neishi['fjzy']=$_POST['fjzy'];
    $neishi['hzy']=$_POST['hzy'];
    $neishi['hzy']=$_POST['hzy'];
    $neishi['tc']=$_POST['tc'];
    $neishi['blsj']=$_POST['blsj'];
    if($_SESSION['info_id']){
        $up['price']=$_POST['price'];
        $up['jzsb_msg']=$_POST['jzsb_msg'];
        $up['tui']=$_POST['tui'];
        $up['pingjia']=$_POST['pingjia'];
        $info=$db->row_update('info',$up,'id='.$_SESSION['info_id']);

        $neishi['info_id']=$_SESSION['info_id'];
        $rs=$db->row_insert('neishi',$neishi);
        if($rs && $info){
            showmsg('录入成功！','jcdmin_login.php?m=over');
        }else{
            showmsg('录入失败！',-1);
        }
    }else{
        showmsg('请先填写车主信息','jcdmin_login.php?m=czxx');
    }
}
$tpl->display('jcdmin/nsjc.html');