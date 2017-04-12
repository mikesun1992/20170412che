<?php
if (!defined('APP_IN')) exit('Access Denied');

if(!empty($_GET['id'])){
    $cid=$db->row_select_one('jcsRecord','id='.$_GET['id']);
    /*echo $cid['cars_id'];
    print_r($cid);exit;*/
    $u=$db->row_select_one('cars','p_id='.$cid['cars_id'],'p_no,p_id,p_username,p_tel');
    if(empty($u['p_no'])){
        $u['p_no']="CB-88".$u['p_id'];
        $data['p_no']="CB-88".$u['p_id'];
        $db->row_update('cars',$data,'p_id='.$u['p_id']);
    }
    $_SESSION['p_no'] = $u['p_no'];
    $_SESSION['cars_id'] = $cid['cars_id'];
    $tpl->assign('nicname',$u['p_username']);
    $tpl->assign('mobile',$u['p_tel']);
}


if (!empty($_POST)) {
    if($_POST['mobile'] && $_POST['name']) {
    $xsz = substr($_POST['xsz'], 1);
    $stat = img2thumb($xsz, $xsz, $width = 581, $height = 400, $cut = 1, $proportion = 0);
    $_POST['xsz'] = "/" . $xsz;

    $djz = substr($_POST['djz'], 1);
    $stat = img2thumb($djz, $djz, $width = 581, $height = 400, $cut = 1, $proportion = 0);
    $_POST['djz'] = "/" . $djz;

    $mp = substr($_POST['mp'], 1);
    $stat = img2thumb($mp, $mp, $width = 581, $height = 400, $cut = 1, $proportion = 0);
    $_POST['mp'] = "/" . $mp;


    $p = $db->row_select_one('info', 'mobile="' . $_POST['mobile'].'"', 'id,cars_num');

        if (!empty($p) && !empty($p['id']) && $p['cars_num']==$_POST['cars_num']) {
            $czxx = $db->row_update('info', $_POST, 'id=' . $p['id']);
            if ($czxx) {
                $_SESSION['mobile'] = $_POST['mobile'];
                $_SESSION['info_id'] = $p['id'];
                showmsg('录入成功！', 'jcdmin_login.php?m=jbxx');
            } else {
                showmsg('录入失败！', -1);
            }
        } else {
            $czxx = $db->row_insert('info', $_POST);
            if ($czxx) {
                $info_id = $db->insert_id();
                $_SESSION['mobile'] = $_POST['mobile'];
                $_SESSION['info_id'] = $info_id;
                showmsg('录入成功！', 'jcdmin_login.php?m=jbxx');
            } else {
                showmsg('录入失败！', -1);
            }
        }
    }else{
        showmsg('车主信息不完整！', -1);
    }
}

$tpl->display('jcdmin/czxx.html');