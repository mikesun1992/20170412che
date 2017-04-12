<?php
if(!defined('APP_IN')) exit('Access Denied');

//登录
if (!empty($_GET['ajax']) && isset($_GET['login']))
{	header('Content-Type:text/plain; charset=utf-8');
	if(!empty($_SESSION['USER_ID']) || !empty($_SESSION['USER_NAME'])){
		$loginstr= $_SESSION['USER_NAME']."，<i class='i-star'></i><a href='".WEB_PATH."/user.html'>[会员中心]</a> <a href='".WEB_PATH."/?m=user&a=logout'>[退出]</a>";
	}
	else{
		$loginstr = "<i class='i-star'></i><a href='".WEB_PATH."/login.html' target='_blank'>登录</a>";
	}
	echo $loginstr;
	exit;
}

//卖车
if (!empty($_GET['ajax']) && isset($_GET['contact']))
{	header('Content-Type:text/plain; charset=utf-8');
	$str = "";
	if(empty($_SESSION['USER_ID'])){
		$str = "<tr><th><span class='red'>*</span> 车主姓名：</th>
					<td colspan='5'><input name='p_username' type='text' size='30' class='inp01' value='' datatype='s' nullmsg='请填写车主姓名！'/></td></tr>
				<tr><th><span class='red'>*</span> 手机号：</th>
					<td colspan='5'><input name='p_tel' type='text' size='30' class='inp01' value='' datatype='m' nullmsg='请填写手机号！' errormsg='手机号码格式不正确！'/></td>
				</tr>";
	}
	echo $str;
	exit;
}

//品牌选择
if (!empty($_GET['ajax']) && !empty($_GET['bid']))
{	header('Content-Type:text/plain; charset=utf-8');
	$arr_b = explode("_", trim($_GET['bid'])); 
	$brandlist = "<option value='' selected>请选择车系</option>";
	$list = $db->row_select('brand',"b_parent='".$arr_b[1]."'");
	if($list){
		foreach($list as $key => $value){
			$brandlist .= "<optgroup label=".$value['b_name']." style='font-style: normal; background: none repeat scroll 0% 0% rgb(239, 239, 239); text-align: center;'></optgroup>";
			$sublist = $db->row_select('brand',"b_parent='".$value['b_id']."'");
			foreach($sublist as $subkey => $subvalue){
				$brandlist .= "<option value=".$subvalue['b_id'].">".$subvalue['b_name']."</option>";
			}
		}
	}
	echo $brandlist;
	exit;
}

//二级品牌选择
if (!empty($_GET['ajax']) && !empty($_GET['brandid']))
{	header('Content-Type:text/plain; charset=utf-8');
	$brandlist = "<option value='' selected>请选择车系</option>";
	$list = $db->row_select('brand',"b_parent='".$_GET['brandid']."'");
	if($list){
		foreach($list as $key => $value){
			$brandlist .= "<optgroup label=".$value['b_name']." style='font-style: normal; background: none repeat scroll 0% 0% rgb(239, 239, 239); text-align: center;'></optgroup>";
			$sublist = $db->row_select('brand',"b_parent='".$value['b_id']."'");
			foreach($sublist as $subkey => $subvalue){
				$brandlist .= "<option value=".$subvalue['b_id'].">".$subvalue['b_name']."</option>";
			}
		}
	}
	echo $brandlist;
	exit;
}


//三级品牌选择
if (!empty($_GET['ajax']) && !empty($_GET['subbrandid']))

{	header('Content-Type:text/plain; charset=utf-8');
	$brandlist = "<option value='' selected>请选择款式</option>";
	$list = $db->row_select('brand',"b_parent='".$_GET['subbrandid']."'");
	if($list){
		foreach($list as $key => $value){
			$brandlist .= "<optgroup label='".$value['b_name']."' style='font-style: normal; background: none repeat scroll 0% 0% rgb(239, 239, 239); text-align: center;'></optgroup>";
			$sublist = $db->row_select('brand',"b_parent='".$value['b_id']."'");
			foreach($sublist as $subkey => $subvalue){
				$brandlist .= "<option value=".$subvalue['b_id'].">".$subvalue['b_name']."</option>";
			}
		}
	}
	echo $brandlist;
	exit;
}



//四级品牌选择
if (!empty($_GET['ajax']) && !empty($_GET['subsubbrandid']))

{	header('Content-Type:text/plain; charset=utf-8');
	$brandlist = "<option value='' selected>请选择款式</option>";
	$list = $db->row_select('brand',"b_parent='".$_GET['subsubbrandid']."'");
	if($list){
		foreach($list as $key => $value){
				$brandlist .= "<option value=".$value['b_id'].">".$value['b_name']."</option>";
		}
	}
	echo $brandlist;
	exit;
}


//城市选择
if (!empty($_GET['ajax']) && isset($_GET['cityid']))
{	header('Content-Type:text/plain; charset=utf-8');
	$provincelist = "<option value='' selected>请选择城市</option>";
	$list = $db->row_select('area',"parentid='".$_GET['cityid']."'");
	if($list){
		foreach($list as $key => $value){
			$provincelist .= "<option value=".$value['id'].">".$value['name']."</option>";		
		}
	}
	echo $provincelist;
	exit;

}


//城市选择(搜索页面)
if (!empty($_GET['ajax']) && isset($_GET['searchcityid']))
{	header('Content-Type:text/plain; charset=utf-8');
	$citylist = "";
	$list = $db->row_select('area',"parentid='".$_GET['searchcityid']."'");
	if($list){
		foreach($list as $key => $value){
			$citylist .= "<option value='c_".$value['id']."'>".$value['name']."</option>";
		}
	}
	echo $citylist;
	exit;
}

//车源点击
if (!empty($_GET['ajax']) && isset($_GET['carshit']))
{	header('Content-Type:text/plain; charset=utf-8');
	$rs = $db->query_unbuffered("update ".$db->tb_prefix."cars set p_hits = p_hits+1 where p_id=".intval($_GET['id']));
	$data = $db->row_select_one('cars',"p_id=".intval($_GET['id']),'p_hits');
	echo $data['p_hits'];
	exit;
}

//车源点击
if (!empty($_GET['ajax']) && isset($_GET['rentcarshit']))
{	header('Content-Type:text/plain; charset=utf-8');
	$rs = $db->query_unbuffered("update ".$db->tb_prefix."rentcars set p_hits = p_hits+1 where p_id=".intval($_GET['id']));
	$data = $db->row_select_one('rentcars',"p_id=".intval($_GET['id']),'p_hits');
	echo $data['p_hits'];
	exit;
}


//新闻点击
if (!empty($_GET['ajax']) && isset($_GET['newshit']))
{	header('Content-Type:text/plain; charset=utf-8');
	$rs = $db->query_unbuffered("update ".$db->tb_prefix."news set n_hits = n_hits+1 where n_id=".intval($_GET['id']));
	$data = $db->row_select_one('news',"n_id=".intval($_GET['id']),'n_hits');
	echo $data['n_hits'];
	exit;
}

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

//热门车源排行
if(!empty($_GET['ajax']) && isset($_GET['cartype']) && $_GET['cartype']=="hot" ){
	header('Content-Type:text/plain; charset=utf-8');
	$where = "ishot=1 and p_mainpic!='' and isshow=1";
	if(!isset($_COOKIE['city']) or empty($_COOKIE['city'])){
		$_COOKIE['city'] = 0;
	}
	$list = get_carlist($_COOKIE['city'],$where,'8','listtime desc');
	$str = "";
	foreach($list as $key => $value) {
		$str .= "<div class='hotcarlist'><a href=".$value['p_url']." target='_blank'><img src=".$value['p_mainpic']."></a>
			<p class='mt5'><a href=".$value['p_url']." target='_blank' >".$value['p_shortname']."</a></p>
			<p class='gray01'>".$value['p_year']."年".$value['p_month']."月上牌<span class='orange01 fb fr'>".$value['p_price']."</span></p></div>";
	}
	echo $str;
	exit;
}


		
//最新车源排行
if(!empty($_GET['ajax']) && isset($_GET['cartype']) && $_GET['cartype']=="indexnew" ){
	header('Content-Type:text/plain; charset=utf-8');
	$where = "issell=0 and p_mainpic!='' and isshow=1";
	if(!isset($_COOKIE['city']) or empty($_COOKIE['city'])){
		$_COOKIE['city'] = 0;
	}
	$list = get_carlist($_COOKIE['city'],$where,'12','listtime desc');
	$str = "";
	foreach($list as $key => $value) {
		$str .= "<li class='bbgspe'><a href=".$value['p_url']." target='_blank'><img src=".$value['p_mainpic']." alt=".$value['p_allname']."></a>
        <p class='carname mt5'><a href=".$value['p_url']." target='_blank' >".$value['p_allname']."</a></p>
        <p><span class='price'>".$value['p_price']."</span>万</p>
        <p class='gray01 mt5 f12'><span class='fr'>里程：".$value['p_kilometre']."万公里</span>上牌：".$value['p_year']."年".$value['p_month']."月</p>
        </li>";
			

	}
	echo $str;
	exit;
}


//首页热门车源排行
if(!empty($_GET['ajax']) && isset($_GET['cartype']) && $_GET['cartype']=="indexhot" ){
	header('Content-Type:text/plain; charset=utf-8');
	$where = "ishot=1 and p_mainpic!='' and isshow=1";
	if(!empty($_COOKIE['city'])){
		$where .= " and cid = ".$_COOKIE['city'];
	}
	if(!isset($_COOKIE['city']) or empty($_COOKIE['city'])){
		$_COOKIE['city'] = 0;
	}
	$list = get_carlist($_COOKIE['city'],$where,'8','listtime desc');
	$str = "";
	foreach($list as $key => $value) {
		if($key<3){
			$class = "class='num01'";
		}
		else{
			$class = "class='num02'";
		}
		$str .= "<p class='clearfix'><span class='orange01 fb fr'>".$value['p_price']."</span><span ".$class.">".($key+1)."</span><a href='".$value['p_url']."' target='_blank' class='fl pl10'>".$value['p_shortname']."</a></p>";
	}
	echo $str;
	exit;
}

//预约看车
if(!empty($_GET['ajax']) && isset($_GET['yuyue']) && $_GET['yuyue']==1 ){
	header('Content-Type:text/plain; charset=utf-8');
	if(!empty($_POST['name']) and !empty($_POST['mobilephone']) and !empty($_POST['ordertime']) and !empty($_POST['orderinfo'])){
		$rs = $db->row_insert('subscribe',array('pid'=>intval($_POST['pid']),'uid'=>intval($_POST['uid']),'name'=>trim($_POST['name']),'mobilephone'=>trim($_POST['mobilephone']),'ordertime'=>strtotime(trim($_POST['ordertime'])),'orderinfo'=>trim($_POST['orderinfo']),'addtime'=>time()));
		if($rs){
			$status = 1;
		}
		else{
			$status = 0;
		}
	}
	else{
		$status = 0;
	}
	echo $status;
	exit;
}

//询价
if(!empty($_GET['ajax']) && isset($_GET['xunjia']) && $_GET['xunjia']==1 ){
	header('Content-Type:text/plain; charset=utf-8');
	if(!empty($_POST['name']) and !empty($_POST['mobilephone'])){
		$rs = $db->row_insert('inquiry',array('pid'=>intval($_POST['pid']),'uid'=>intval($_POST['uid']),'name'=>trim($_POST['name']),'mobilephone'=>trim($_POST['mobilephone']),'addtime'=>time()));
		if($rs){
			$status = 1;
		}
		else{
			$status = 0;
		}
	}
	else{
		$status = 0;
	}
	echo $status;
	exit;
}

//分期贷款
if(!empty($_GET['ajax']) && isset($_GET['daikuan']) && $_GET['daikuan']==1 ){
	header('Content-Type:text/plain; charset=utf-8');
	if(!empty($_POST['name']) and !empty($_POST['mobilephone'])){
		$rs = $db->row_insert('inquiry',array('pid'=>intval($_POST['pid']),'uid'=>intval($_POST['uid']),'name'=>trim($_POST['name']),'mobilephone'=>trim($_POST['mobilephone']),'addtime'=>time()));
		if($rs){
			$status = 1;
		}
		else{
			$status = 0;
		}
	}
	else{
		$status = 0;
	}
	echo $status;
	exit;
}

//投诉建议
if(!empty($_GET['ajax']) && isset($_GET['feedback']) && $_GET['feedback']==1 ){
	header('Content-Type:text/plain; charset=utf-8');
	if(!empty($_POST['f_detail']) and !empty($_POST['f_tel'])){
		$rs = $db->row_insert('feedback',array('typeid'=>1,'f_tel'=>trim($_POST['f_tel']),'f_detail'=>trim($_POST['f_detail']),'f_addtime'=>time()));
		if($rs){
			$status = 1;
		}
		else{
			$status = 0;
		}
	}
	else{
		$status = 0;
	}
	echo $status;
	exit;
}



?>