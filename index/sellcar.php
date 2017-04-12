<?php

if (!defined('APP_IN')) exit('Access Denied');

include ('page.php');
include(INC_DIR . 'html.func.php');

$tpl -> assign('menustate', 3);
if (submitcheck('action')) {
	// 不可为空
	if(empty($_SESSION['USER_ID'])){
		$arr_not_empty = array('p_brand' => '请选择品牌', 'p_subbrand' => '请选择车系', 'p_subsubbrand' => '请选择款式', 'p_tel' => '请输入您的联系电话');
	}
	else{
		$arr_not_empty = array('p_brand' => '请选择品牌', 'p_subbrand' => '请选择车系','p_subsubbrand' => '请选择款式');
	}

	can_not_be_empty($arr_not_empty, $_POST); 

	if (trim($_POST['authcode']) != $_SESSION['authcode']) showmsg('验证码不正确', -1);
	
	$_POST = post('p_brand','p_subbrand','p_subsubbrand','p_tel','p_model','p_price','p_color','p_emission','p_gas','p_transmission','p_year','p_month','p_kilometre','p_country','p_details','p_username');

  
	if(isset($_COOKIE['city'])){
		$_POST['cid'] = $_COOKIE['city'];
		if($_COOKIE['city']!=0){
			$area = $db->row_select_one('area','id='.$_COOKIE['city']);
			$_POST['aid'] = $area['parentid'];
		}
	}

	if(empty($_SESSION['USER_ID'])){
		$_POST['p_tel'] = trim($_POST['p_tel']);
	}

	if(empty($_SESSION['USER_ID'])){
		$_POST['p_username'] = trim($_POST['p_username']);
	}

	$_POST['p_model'] = intval($_POST['p_model']);
	$_POST['p_brand'] = intval($_POST['p_brand']);
	$_POST['p_subbrand'] = intval($_POST['p_subbrand']);
	$_POST['p_subsubbrand'] = intval($_POST['p_subsubbrand']);
	$_POST['p_allname'] = "";
	if(!empty($_POST['p_subbrand'])){
		$bname = $commoncache['brandlist'][$_POST['p_brand']];
		$subbname = arr_brandname($_POST['p_subbrand']);
		$compareword = strstr($subbname,$bname);
		if(!empty($compareword)){
			$_POST['p_allname'] .= arr_brandname($_POST['p_subbrand']);
		}
		else{
			$_POST['p_allname'] .= $bname ." ".arr_brandname($_POST['p_subbrand']);
		}
	}
	if(!empty($_POST['p_subsubbrand'])){
		$_POST['p_allname'] .= " ".arr_brandname($_POST['p_subsubbrand']);
	}

	$_POST['p_addtime'] = TIMESTAMP;
	$_POST['listtime'] = TIMESTAMP;
	//$_POST['p_no'] = TIMESTAMP;

	if(!empty($_SESSION['USER_ID'])){
		$_POST['uid'] = $_SESSION['USER_ID'];
		$userinfo = $db -> row_select_one('member', "id={$_SESSION['USER_ID']}");
		if($userinfo['isdealer']==2 and $userinfo['ischeck']==1){
			$_POST['isshow'] = 1;
		}
		else{
			$_POST['isshow'] = 0;
		}
	}
	else{
		$_POST['uid'] = 0;
		$_POST['isshow'] = 0;
	}
	$db -> row_insert('cars', $_POST);
	$insertid = $db -> insert_id();
	$m=array();
	$m['p_no']="CB-88".$insertid;
	$db->row_update('cars',$m,' p_id='.$insertid);
	html_cars($insertid);

	showmsg('您的信息已提交成功！', -1);
} 

$tpl -> display('default/' . $settings['templates'] . '/sell.html');

?>