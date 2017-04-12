<?php

if (!defined('APP_IN')) exit('Access Denied');
// 当前模块
$m_name = '积分获取规则';
// 允许操作
$ac_arr = array('jifen' => '积分获取规则','list'=>'积分规则');
// 当前操作
$ac = isset($_REQUEST['a']) && isset($ac_arr[$_REQUEST['a']]) ? $_REQUEST['a'] : 'default';

$tpl -> assign('mod_name', $m_name);
$tpl -> assign('ac_arr', $ac_arr);
$tpl -> assign('ac', $ac);
if($ac=="list"){
	if(empty($_POST)){
		$jifengz=$db->row_select_one('jifen',"id=1","tjr_jifen,newuser_jifen,newcars_jifen");
		$tpl->assign( 'jifengz', $jifengz );
		$tpl->display( 'admins/jifengz.html' );
	}else{
		$modify['tjr_jifen']=$_POST['tjr_jifen'];
		$modify['newuser_jifen']=$_POST['newuser_jifen'];
		$modify['newcars_jifen']=$_POST['newcars_jifen'];
		$rs=$db->row_update('jifen',$modify,"id=1");
		showmsg("修改".($rs ? '成功' : '失败'),1);
	}
}else{
	showmsg('非法操作',-1);
}


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

$tpl -> display('admins/jifengz.html');*/
?>