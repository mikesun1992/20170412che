<?php
if (!defined('APP_IN')) exit('Access Denied');

include ('page.php');
	
$id = isset($_GET['id']) ? intval($_GET['id']) : showmsg('缺少ID', -1);

$car = $db -> row_select_one('cars', "p_id=" . intval($id));
$car['listtime'] = date('Y-m-d', $car['p_addtime']);
$car['p_price'] = intval($car['p_price']) == 0 ? "面谈" : $car['p_price'] . "万元";

if (!empty($car['p_details'])) {
	$car['p_details'] = $car['p_details'];
} 
if (!empty($car['p_model'])) $car['p_modelname'] = $commoncache['modellist'][$car['p_model']];


//获取检测项
$jc=$db->row_select_one('jcsRecord','cars_id='.intval($id));

$jcs=$db->row_select_one('jianceshi','jcs_id='.$jc['jcs_id']);


//info表数据
$info_rs=$db->row_select_one('info','id='.$jc['info_id']);
//事故排查
$sgpc_rs=$db->row_select_one('sgpc','info_id='.$jc['info_id']);
//系统设备
$xtsb_rs=$db->row_select_one('xtsb','info_id='.$jc['info_id']);
//发动机
$fdj_rs=$db->row_select_one('fdj','info_id='.$jc['info_id']);
//外观检测
$waiguan_rs=$db->row_select_one('waiguan','info_id='.$jc['info_id']);
//内饰检测
$neishi_rs=$db->row_select_one('neishi','info_id='.$jc['info_id']);

$tpl->assign('jcs',$jcs);//检测师信息
$tpl->assign('info_rs',$info_rs);
$tpl->assign('sgpc_rs',$sgpc_rs);
$tpl->assign('fdj_rs',$fdj_rs);
$tpl->assign('xtsb_rs',$xtsb_rs);
$tpl->assign('waiguan_rs',$waiguan_rs);
$tpl->assign('neishi_rs',$neishi_rs);

//获取检测项不正常的总数
//事故排查不正常的总数
$sgpc_num=0;
if($sgpc_rs['zaz']!=1){
	$sgpc_num++;
}
if($sgpc_rs['yaz']!=1){
	$sgpc_num++;
}
if($sgpc_rs['zbz']!=1){
	$sgpc_num++;
}
if($sgpc_rs['ybz']!=1){
	$sgpc_num++;
}
if($sgpc_rs['zcz']!=1){
	$sgpc_num++;
}
if($sgpc_rs['ycz']!=1){
	$sgpc_num++;
}
if($sgpc_rs['zqzl']!=1){
	$sgpc_num++;
}
if($sgpc_rs['yqzl']!=1){
	$sgpc_num++;
}
if($sgpc_rs['zhzl']!=1){
	$sgpc_num++;
}
if($sgpc_rs['yhzl']!=1){
	$sgpc_num++;
}
if($sgpc_rs['qfzl']!=1){
	$sgpc_num++;
}
if($sgpc_rs['hfzl']!=1){
	$sgpc_num++;
}
if($sgpc_rs['zqjzqxg']!=1){
	$sgpc_num++;
}
if($sgpc_rs['yqjzqxg']!=1){
	$sgpc_num++;
}
if($sgpc_rs['zhjzqxg']!=1){
	$sgpc_num++;
}
if($sgpc_rs['yhjzqxg']!=1){
	$sgpc_num++;
}
if($sgpc_rs['fdjfhq']!=1){
	$sgpc_num++;
}
if($sgpc_rs['hbxdb']!=1){
	$sgpc_num++;
}
if($sgpc_rs['zydc']!=1){
	$sgpc_num++;
}
if($sgpc_rs['fdjxs']!=1){
	$sgpc_num++;
}
if($sgpc_rs['hbxbj']!=1){
	$sgpc_num++;
}
if($sgpc_rs['zyhgn']!=1){
	$sgpc_num++;
}
if($sgpc_rs['hzydb']!=1){
	$sgpc_num++;
}
if($sgpc_rs['aqddb']!=1){
	$sgpc_num++;
}
if($sgpc_rs['djdt']!=1){
	$sgpc_num++;
}
if($sgpc_rs['yxlbdb']!=1){
	$sgpc_num++;
}
if($sgpc_rs['yhgdb']!=1){
	$sgpc_num++;
}
if($sgpc_rs['clfgj']!=1){
	$sgpc_num++;
}
$tpl->assign('sgpc_num',$sgpc_num);

//发动机检测不正常的总数
$fdj_num=0;
if($fdj_rs['fdj_cx']==1){
	$fdj_num++;
}
if($fdj_rs['fdj_lh']==1){
	$fdj_num++;
}
if($fdj_rs['cgq_sh']==1){
	$fdj_num++;
}
if($fdj_rs['gx_ps']==1){
	$fdj_num++;
}
if($fdj_rs['fdjg_ly']==1){
	$fdj_num++;
}
if($fdj_rs['sx_ps']==1){
	$fdj_num++;
}
if($fdj_rs['jydk']==1){
	$fdj_num++;
}
if($fdj_rs['jyym']==1){
	$fdj_num++;
}
if($fdj_rs['fdym']==1){
	$fdj_num++;
}
if($fdj_rs['zlbym']==1){
	$fdj_num++;
}
if($fdj_rs['bsxdk']==1){
	$fdj_num++;
}
if($fdj_rs['ls']!=1){
	$fdj_num++;
}
if($fdj_rs['zdy']==1){
	$fdj_num++;
}
if($fdj_rs['ktysj']==1){
	$fdj_num++;
}
if($fdj_rs['zxzlb']==1){
	$fdj_num++;
}
$tpl->assign('fdj_num',$fdj_num);

//系统设备检测不正常的总数
$xtsb_num=0;
if($xtsb_rs['bsxd']!=1){
	$xtsb_num++;
}
if($xtsb_rs['zdd']!=1){
	$xtsb_num++;
}
if($xtsb_rs['absd']!=1){
	$xtsb_num++;
}
if($xtsb_rs['aqql']!=1){
	$xtsb_num++;
}
if($xtsb_rs['fdjd']!=1){
	$xtsb_num++;
}
if($xtsb_rs['qwd']!=1){
	$xtsb_num++;
}
if($xtsb_rs['hwd']!=1){
	$xtsb_num++;
}
if($xtsb_rs['jgd']!=1){
	$xtsb_num++;
}
if($xtsb_rs['ygd']!=1){
	$xtsb_num++;
}
if($xtsb_rs['qzxd']!=1){
	$xtsb_num++;
}
if($xtsb_rs['hzxd']!=1){
	$xtsb_num++;
}
if($xtsb_rs['dcd']!=1){
	$xtsb_num++;
}
if($xtsb_rs['scd']!=1){
	$xtsb_num++;
}
if($xtsb_rs['sndd']!=1){
	$xtsb_num++;
}
$tpl->assign('xtsb_num',$xtsb_num);

//底盘检测不正常的总数
$dp_num=0;
if($waiguan_rs['yhjzq']!=1){
	$dp_num++;
}
if($waiguan_rs['yqjzq']!=1){
	$dp_num++;
}
if($waiguan_rs['zqjzq']!=1){
	$dp_num++;
}
if($waiguan_rs['zhjzq']!=1){
	$dp_num++;
}
$tpl->assign('dp_num',$dp_num);

//车辆配置不正常的总数
$clpz_num=0;
if($info_rs['yk_keys']!=1){
	$clpz_num++;
}
if($info_rs['qjd']!=1){
	$clpz_num++;
}
if($info_rs['tool']!=1){
	$clpz_num++;
}
if($info_rs['sjp']!=1){
	$clpz_num++;
}
if($info_rs['mhq']!=1){
	$clpz_num++;
}
if($info_rs['bt']!=1){
	$clpz_num++;
}
$tpl->assign('clpz_num',$clpz_num);



//内饰检测不正常的总数
$neishi_num=0;
if($neishi_rs['fxp']!=1){
	$neishi_num++;
}
if($neishi_rs['zkt']!=1){
	$neishi_num++;
}
if($neishi_rs['zjcm']!=1){
	$neishi_num++;
}
if($neishi_rs['fjcm']!=1){
	$neishi_num++;
}
if($neishi_rs['hzcm']!=1){
	$neishi_num++;
}
if($neishi_rs['hycm']!=1){
	$neishi_num++;
}
if($neishi_rs['zjzy']!=1){
	$neishi_num++;
}
if($neishi_rs['fjzy']!=1){
	$neishi_num++;
}
if($neishi_rs['hzy']!=1){
	$neishi_num++;
}
if($neishi_rs['tc']!=1 && $neishi_rs['tc']!=3){
	$neishi_num++;
}
if($neishi_rs['blsj']!=1){
	$neishi_num++;
}
$tpl->assign('neishi_num',$neishi_num);




//外观检测不正常的总数
$waiguan_num=0;
if($waiguan_rs['zq_bxg_hh']==1 || $waiguan_rs['zq_bxg_ax']==1 || $waiguan_rs['zq_bxg_ps']==1 || $waiguan_rs['zq_bxg_lh']==1){
	$zq_bxg=1;
	$waiguan_num++;
}else{
	$zq_bxg=2;
}
$tpl->assign('zq_bxg',$zq_bxg);
if($waiguan_rs['yq_bxg_hh']==1 || $waiguan_rs['yq_bxg_ax']==1 || $waiguan_rs['yq_bxg_ps']==1 || $waiguan_rs['yq_bxg_lh']==1){
	$yq_bxg=1;
	$waiguan_num++;
}else{
	$yq_bxg=2;
}
$tpl->assign('yq_bxg',$yq_bxg);
if($waiguan_rs['zh_bxg_hh']==1 || $waiguan_rs['zh_bxg_ax']==1 || $waiguan_rs['zh_bxg_ps']==1 || $waiguan_rs['zh_bxg_lh']==1){
	$zh_bxg=1;
	$waiguan_num++;
}else{
	$zh_bxg=2;
}
$tpl->assign('zh_bxg',$zh_bxg);
if($waiguan_rs['yh_bxg_hh']==1 || $waiguan_rs['yh_bxg_ax']==1 || $waiguan_rs['yh_bxg_ps']==1 || $waiguan_rs['yh_bxg_lh']==1){
	$yh_bxg=1;
	$waiguan_num++;
}else{
	$yh_bxg=2;
}
$tpl->assign('yh_bxg',$yh_bxg);
if($waiguan_rs['zq_yzb_hh']==1 || $waiguan_rs['zq_yzb_ax']==1 || $waiguan_rs['zq_yzb_ps']==1 || $waiguan_rs['zq_yzb_lh']==1){
	$zq_yzb=1;
	$waiguan_num++;
}else{
	$zq_yzb=2;
}
$tpl->assign('zq_yzb',$zq_yzb);
if($waiguan_rs['yq_yzb_hh']==1 || $waiguan_rs['yq_yzb_ax']==1 || $waiguan_rs['yq_yzb_ps']==1 || $waiguan_rs['yq_yzb_lh']==1){
	$yq_yzb=1;
	$waiguan_num++;
}else{
	$yq_yzb=2;
}
$tpl->assign('yq_yzb',$yq_yzb);
if($waiguan_rs['zh_yzb_hh']==1 || $waiguan_rs['zh_yzb_ax']==1 || $waiguan_rs['zh_yzb_ps']==1 || $waiguan_rs['zh_yzb_lh']==1){
	$zh_yzb=1;
	$waiguan_num++;
}else{
	$zh_yzb=2;
}
$tpl->assign('zh_yzb',$zh_yzb);
if($waiguan_rs['yh_yzb_hh']==1 || $waiguan_rs['yh_yzb_ax']==1 || $waiguan_rs['yh_yzb_ps']==1 || $waiguan_rs['yh_yzb_lh']==1){
	$yh_yzb=1;
	$waiguan_num++;
}else{
	$yh_yzb=2;
}
$tpl->assign('yh_yzb',$yh_yzb);
if($waiguan_rs['zaz_hh']==1 || $waiguan_rs['zaz_ax']==1 || $waiguan_rs['zaz_ps']==1 || $waiguan_rs['zaz_lh']==1){
	$zaz=1;
	$waiguan_num++;
}else{
	$zaz=2;
}
$tpl->assign('zaz',$zaz);
if($waiguan_rs['zbz_hh']==1 || $waiguan_rs['zbz_ax']==1 || $waiguan_rs['zbz_ps']==1 || $waiguan_rs['zbz_lh']==1){
	$zbz=1;
	$waiguan_num++;
}else{
	$zbz=2;
}
$tpl->assign('zbz',$zbz);
if($waiguan_rs['zcz_hh']==1 || $waiguan_rs['zcz_ax']==1 || $waiguan_rs['zcz_ps']==1 || $waiguan_rs['zcz_lh']==1){
	$zcz=1;
	$waiguan_num++;
}else{
	$zcz=2;
}
$tpl->assign('zcz',$zcz);
if($waiguan_rs['yaz_hh']==1 || $waiguan_rs['yaz_ax']==1 || $waiguan_rs['zyaz_ps']==1 || $waiguan_rs['yaz_lh']==1){
	$yaz=1;
	$waiguan_num++;
}else{
	$yaz=2;
}
$tpl->assign('yaz',$yaz);
if($waiguan_rs['ybz_hh']==1 || $waiguan_rs['ybz_ax']==1 || $waiguan_rs['ybz_ps']==1 || $waiguan_rs['ybz_lh']==1){
	$ybz=1;
	$waiguan_num++;
}else{
	$ybz=2;
}
$tpl->assign('ybz',$ybz);
if($waiguan_rs['ycz_hh']==1 || $waiguan_rs['ycz_ax']==1 || $waiguan_rs['ycz_ps']==1 || $waiguan_rs['ycz_lh']==1){
	$ycz=1;
	$waiguan_num++;
}else{
	$ycz=2;
}
$tpl->assign('ycz',$ycz);

if($waiguan_rs['zqm_hh']==1 || $waiguan_rs['zqm_ax']==1 || $waiguan_rs['zqm_ps']==1 || $waiguan_rs['zqm_lh']==1){
	$zqm=1;
	$waiguan_num++;
}else{
	$zqm=2;
}
$tpl->assign('zqm',$zqm);
if($waiguan_rs['zhm_hh']==1 || $waiguan_rs['zhm_ax']==1 || $waiguan_rs['zhm_ps']==1 || $waiguan_rs['zhm_lh']==1){
	$zhm=1;
	$waiguan_num++;
}else{
	$zhm=2;
}
$tpl->assign('zhm',$zhm);
if($waiguan_rs['yqm_hh']==1 || $waiguan_rs['yqm_ax']==1 || $waiguan_rs['yqm_ps']==1 || $waiguan_rs['yqm_lh']==1){
	$yqm=1;
	$waiguan_num++;
}else{
	$yqm=2;
}
$tpl->assign('yqm',$yqm);
if($waiguan_rs['yhm_hh']==1 || $waiguan_rs['yhm_ax']==1 || $waiguan_rs['yhm_ps']==1 || $waiguan_rs['yhm_lh']==1){
	$yhm=1;
	$waiguan_num++;
}else{
	$yhm=2;
}
$tpl->assign('yhm',$yhm);
if($waiguan_rs['zcd_hh']==1 || $waiguan_rs['zcd_ax']==1 || $waiguan_rs['zcd_ps']==1 || $waiguan_rs['zcd_lh']==1){
	$zcd=1;
	$waiguan_num++;
}else{
	$zcd=2;
}
$tpl->assign('zcd',$zcd);
if($waiguan_rs['ycd_hh']==1 || $waiguan_rs['ycd_ax']==1 || $waiguan_rs['ycd_ps']==1 || $waiguan_rs['ycd_lh']==1){
	$ycd=1;
	$waiguan_num++;
}else{
	$ycd=2;
}
$tpl->assign('ycd',$ycd);
if($waiguan_rs['zcqb_hh']==1 || $waiguan_rs['zcqb_ax']==1 || $waiguan_rs['zcqb_ps']==1 || $waiguan_rs['zcqb_lh']==1){
	$zcqb=1;
	$waiguan_num++;
}else{
	$zcqb=2;
}
$tpl->assign('zcqb',$zcqb);
if($waiguan_rs['ycqb_hh']==1 || $waiguan_rs['ycqb_ax']==1 || $waiguan_rs['ycqb_ps']==1 || $waiguan_rs['ycqb_lh']==1){
	$ycqb=1;
	$waiguan_num++;
}else{
	$ycqb=2;
}
$tpl->assign('ycqb',$ycqb);
if($waiguan_rs['hbx_hh']==1 || $waiguan_rs['hbx_ax']==1 || $waiguan_rs['hbx_ps']==1 || $waiguan_rs['hbx_lh']==1){
	$hbx=1;
	$waiguan_num++;
}else{
	$hbx=2;
}
$tpl->assign('hbx',$hbx);
if($waiguan_rs['fdj_hh']==1 || $waiguan_rs['fdj_ax']==1 || $waiguan_rs['fdj_ps']==1 || $waiguan_rs['fdj_lh']==1){
	$fdj=1;
	$waiguan_num++;
}else{
	$fdj=2;
}
$tpl->assign('fdj',$fdj);
$tpl->assign('waiguan_num',$waiguan_num);



/**
 * 车源图片
 */
if (!empty($car['p_pics'])) {
	$piclist = explode('|', $car['p_pics']);
	$spiclist = array();
	foreach($piclist as $k => $v) {
		$pic = explode(".", $v);
		$spiclist[$k] = $pic[0] . "_small" . "." . $pic[1];
	} 
	$tpl -> assign('pic_list', $piclist);
} else {
	$tpl -> assign('pic_list', "");
} 

//商家信息
if($settings['version']==2 or $settings['version']==3){
	if($car['uid']!=0){ 
		$user = $db -> row_select_one('member', 'id=' . $car['uid']);
		$tpl -> assign('shop', $user);
	}
}
if($settings['version']==3){
	if($car['cid']!=0){
		$rs_city = $db->row_select_one('area','id='.$car['cid'],'name');
		$car['city']=$rs_city['name'];
	}
}
$tpl -> assign('cars', $car);


// 同车系二手车
$samecarlist = get_carlist(0,"issell=0 and isshow=1 and p_brand=" . $car['p_brand']." and p_id!=".$car['p_id'], '5', 'listtime desc');
$tpl -> assign('samecar', $samecarlist); 

// 同价位二手车
if(!empty($car['p_price'])) {
	$where = "issell=0 and isshow=1 and p_id!=".$car['p_id'];
	$price = $car['p_price'];
	if ($price <= 5) {
		$where .= " and p_price<5";
	} elseif ($price > 5 and $price <= 8) {
		$where .= " and p_price>=5 and p_price<8";
	} elseif ($price > 8 and $price <= 12) {
		$where .= " and p_price>=8 and p_price<12";
	} elseif ($price > 12 and $price <= 18) {
		$where .= " and p_price>=12 and p_price<18";
	} elseif ($price > 18 and $price <= 25) {
		$where .= " and p_price>=18 and p_price<25";
	} elseif ($price > 25 and $price <= 35) {
		$where .= " and p_price>=25 and p_price<35";
	} elseif ($price > 35 and $price <= 50) {
		$where .= " and p_price>=35 and p_price<50";
	} elseif ($price > 50) {
		$where .= " and p_price>=50";
	} 
	$samepricecarlist = get_carlist(0,$where, '5', 'listtime desc');
	$tpl -> assign('samepricecars', $samepricecarlist);
} 

$tpl -> display('m/cars.html');
?>	