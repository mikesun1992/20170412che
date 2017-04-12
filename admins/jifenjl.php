<?php

if (!defined('APP_IN')) exit('Access Denied');
// 当前模块
$m_name = '积分获取规则';
// 允许操作
$ac_arr = array('jifen' => '积分获取规则','list'=>'积分记录','del'=>'删除记录');
// 当前操作
$ac = isset($_REQUEST['a']) && isset($ac_arr[$_REQUEST['a']]) ? $_REQUEST['a'] : 'default';

$tpl -> assign('mod_name', $m_name);
$tpl -> assign('ac_arr', $ac_arr);
$tpl -> assign('ac', $ac);
if($ac=="list"){
	$where = '1=1';
	include(INC_DIR.'Page.class.php');
	$Page = new Page($db->tb_prefix.'jifenrecord',$where,'*', '50', 'id desc');
	$list = $Page->get_data();
	$page = $Page -> page;
	foreach($list as $key => $value){
		$list[$key]['create_time'] = date('Y-m-d H:i:s',$value['create_time']);
	}
	$button_basic = $Page->button_basic();
	$button_select = $Page->button_select();
	$tpl->assign( 'list', $list );
	$tpl->assign( 'button_basic', $button_basic );
	$tpl->assign( 'button_select', $button_select );
	$tpl->assign( 'page', $page );
	$tpl->display( 'admins/jifenjl.html' );
	exit;
}
elseif($ac=='del'){
	$id = isset($_GET['id']) ? intval($_GET['id']) : showmsg('缺少ID',-1);
	$rs = $db->row_delete('jifenrecord',"id=$id");
}
else{
	showmsg('非法操作',-1);
}
showmsg($ac_arr[$ac].($rs ? '成功' : '失败'),ADMIN_PAGE."?m=$m&a=list&page=".$page_g);

/*if (submitcheck('a')) {
	$post = post('sitename');
	
	if(isset($post['issell'])){
		$post['issell'] = 1;
	}
	else{
		$post['issell'] = 0;
	}
	foreach ($post as $k => $v) {
		if (!in_array($k, array('smtp_port', 'smtp_password'))) {
			$post[$k] = htmlspecialchars($v);
		} elseif ($k == 'smtp_port') $post[$k] = intval($v);
		$rs = $db -> row_update('settings', array('v' => $v), "k='{$k}'");
		if (!$rs) showmsg("更新系统配置 {$k} 失败", -1);
	} 
	showmsg("更新" . $ac_arr[$ac] . "成功", ADMIN_PAGE."?m=$m&a=$ac");
} 

$data = settings();

$tpl -> assign('jifengz', $data);

$tpl -> display('admins/jifenjl.html');*/
?>