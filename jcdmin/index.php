<?php
if (!defined('APP_IN')) exit('Access Denied');
include(INC_DIR.'Page.class.php');
if($_SESSION['jcs_id']){
    $where='jcs_id='.$_SESSION['jcs_id'];
    $Page = new Page($db->tb_prefix.'jcsRecord',$where, '*', '20', 'id desc');
    $rs = $Page->get_data();
    $page = $Page -> page;
    $button_basic = $Page->button_basic();
    $button_select = $Page->button_select();;
    $tpl->assign( 'button_basic', $button_basic );
    $tpl->assign( 'button_select', $button_select );
    $tpl->assign( 'page', $page );
    $tpl->assign('rs',$rs);
}

$tpl->display('jcdmin/index.html');