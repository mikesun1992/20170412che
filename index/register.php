<?php

if(!defined('APP_IN')) exit('Access Denied');

// 城市选择
/*if (!empty($_COOKIE['city'])) {
	$citydata = $db -> row_select_one('area', "id='" . $_COOKIE['city'] . "'", 'parentid');
	$select_province = select_make($citydata['parentid'], $commoncache['provincelist'], "请选择省份");
	$select_city = select_make($_COOKIE['city'], $commoncache['citylist'], "请选择城市");
} else {
	$select_province = select_make('', $commoncache['provincelist'], "请选择省份");
	$select_city = select_make('', $commoncache['citylist'], "请选择城市");
} 
$tpl -> assign('selectprovince', $select_province);
$tpl -> assign('selectcity', $select_city);*/

//商家类型
/*$array_dealer_category = arr_dealer_category();
$select_dealer_category = select_make('',$array_dealer_category,"请选择公司类型");
$tpl -> assign('select_dealer_category', $select_dealer_category);*/

//验证用户名
/*if (!empty($_POST['param']) and $_POST['name']=="username")
{	
	$data = $db->row_count('member',"username='".$_POST['param']."'");
    if($data==0){
		echo '{"info":"用户名验证成功！","status":"y"}';
	}
	else{
		echo '{"info":"用户名已存在！","status":"n"}';
	}
	exit;
}*/

/*//验证邮箱地址
if (!empty($_POST['param']) and $_POST['name']=="email")
{	
	$data = $db->row_count('member',"email='".$_POST['param']."'");
    if($data==0){
		echo '{"info":"邮箱验证成功！","status":"y"}';
	}
	else{
		echo '{"info":"邮箱地址已存在！","status":"n"}';
	}
	exit;
}*/

//验证手机号
if (!empty($_POST['param']) and $_POST['name']=="mobilephone")
{	
	$data = $db->row_count('member',"mobilephone='".$_POST['param']."'");
    if($data==0){
		echo '{"info":"手机号验证成功！","status":"y"}';
	}
	else{
		echo '{"info":"手机号已存在！","status":"n"}';
	}
	exit;

}


/*//验证推荐人手机号
if (!empty($_POST['param']) and $_POST['name']=="tuijian_mobile")
{
	$data = $db->row_count('member',"mobilephone='".$_POST['param']."'");
	if($data==0){
		echo '{"info":"手机号验证成功！","status":"y"}';
	}
	else{
		echo '{"info":"手机号已存在！","status":"n"}';
	}
	exit;
}*/

//验证验证码
if (!empty($_POST['param']) and $_POST['name']=="authcode")
{	
    if($_SESSION['authcode'] == $_POST['param']){
		echo '{"info":"验证码正确！","status":"y"}';
	}
	else{
		echo '{"info":"验证码不正确！","status":"n"}';
	}
	exit;
}



//已登陆转向
if (is_user_login()) {
	redirect('','index.php?mod=user&ac=index');
}

if (submitcheck('action'))
{
    $arr_not_empty = array('mobilephone'=>'请填写手机号','authcode'=>'验证码不能为空');
    if ($_POST['authcode'] != $_SESSION['authcode']) showmsg('验证码不正确',-1);

    //if (!preg_match('/^[\w]+$/',$_POST['username'])) showmsg('用户名格式错误',-1);
    if ($db->row_count('member',"mobilephone='{$_POST['mobilephone']}'")) showmsg('手机号已存在！',-1);
    $post = post('mobilephone','isdealer');

	if($settings['version']==3){
		$post['aid'] = intval($_POST['aid']);
		$post['cid'] = intval($_POST['cid']);
	}



	//查询积分表获取积分
	$jifen=$db->row_select_one('jifen',"id=1","tjr_jifen,newuser_jifen");
	//注册时增加积分
	$tuijianren=$db->row_select_one('member',"mobilephone='".$_POST['tuijian_mobile']."'","mobilephone,jifen");//查询推荐人
	if(!empty($tuijianren)){
		$modify['jifen']=intval($tuijianren['jifen'])+intval($jifen['tjr_jifen']);//推荐人的积分增加
		$db->row_update('member',$modify,"mobilephone='".$_POST['tuijian_mobile']."'");
		$post['jifen'] = $jifen['newuser_jifen'];//新用户有推荐人推荐增加积分

		//添加推荐人获得的积分
		$add['mobile']=trim($_POST['tuijian_mobile']);
		$add['status']=1;
		$add['jifen']=$jifen['tjr_jifen'];
		$add['create_time']=TIMESTAMP;
		$db->row_insert('jifenrecord',$add);

	}else{
		$post['jifen'] = $jifen['newuser_jifen'];// 新用户没有推荐人推荐
	}
	$sui="cb_手机用户".rand(11111111,99999999);
	$post['username'] = $sui;
	$post['mobilephone'] = trim($post['mobilephone']);
	$post['nicname'] = trim($post['nicname']);
    $post['password'] = md5($_POST['mobilephone']);
    $post['regtime'] = TIMESTAMP;
	$post['company'] = trim($post['company']);
	$post['isdealer'] = intval($post['isdealer']);
	$post['ischeck'] = 0;
   
    $rs = $db->row_insert('member',$post);
	$insertid = $db -> insert_id();
    if (!$rs) {
		showmsg('注册失败，请稍后重新尝试',-1);
	}
	else{
		//添加新用户积分记录
		$add['mobile']=$post['mobilephone'];
		$add['status']=2;
		$add['jifen']=$jifen['newuser_jifen'];
		$add['create_time']=time();
		$db->row_insert('jifenrecord',$add);


		$_SESSION['USER_ID'] = $insertid;
		$_SESSION['USER_NAME'] = $sui;
		$rs_user = $db->row_select_one('member',"mobilephone='".trim($_POST['mobilephone'])."'");
		$db->row_update('member',array('last_login_time'=>TIMESTAMP,'last_login_ip'=>get_client_ip(),'login_count'=>$rs_user['login_count']+1),"id={$rs_user['id']}");
		showmsg('登陆成功','index.php?mod=user&ac=index');
	}
    showmsg('注册成功','index.php?mod=login');
}

$tpl -> display('default/'.$settings['templates'].'/register.html');
?>