<?php
if (!defined('APP_IN')) exit('Access Denied');
//品牌
//sprint_r($_SESSION);exit;
$select_brand = select_make('', $commoncache['markbrandlist'], '请选择品牌');
$select_subbrand = select_subbrand(intval($data['p_subbrand']));
$select_subsubbrand = select_subbrand(intval($data['p_subsubbrand']));
$tpl -> assign('select_brand', $select_brand);
$tpl -> assign('select_subbrand', $select_subbrand);
$tpl -> assign('select_subsubbrand', $select_subsubbrand);
//省市
$settings  = settings();
if($settings['version']==3){
    $province_search = arr_province();
    $select_province_search = select_make('', $province_search, '请选择省份');
    $tpl -> assign('selectprovincesearch', $select_province_search);
}

//时间
$array_year = arr_year();
$select_year = select_make('', $array_year, '年份');
$select_month = select_make('', array('01' => '01月', '02' => '02月', '03' => '03月', '04' => '04月', '05' => '05月', '06' => '06月', '07' => '07月', '08' => '08月', '09' => '09月', '10' => '10月', '11' => '11月', '12' => '12月'), '月份', '');
$tpl->assign('select_year',$select_year);
$tpl->assign('select_month',$select_month);

//变速箱
$array_transmission = arr_transmission();
$select_transmission = select_make('', $array_transmission, '请选择变速箱');
$tpl->assign('select_transmission',$select_transmission);

//排量
$array_gas = arr_gas();
$select_gas = select_make('', $array_gas, '请选择排量');
$tpl->assign('select_gas',$select_gas);

//车辆类型
$array_model = arr_model();
$select_model = select_make('', $array_model, '请选择车辆类型');
$tpl->assign('select_model',$select_model);

//颜色
$array_color = arr_color();
$select_color = select_make('', $array_color, '请选择颜色');
$tpl->assign('select_color',$select_color);
if(!empty($_POST)){

    $jd_pic=substr($_POST['jd_pic'],1);
    $stat = img2thumb($jd_pic, $jd_pic, $width = 581, $height = 400, $cut = 1, $proportion = 0);
    $_POST['jd_pic']="/".$jd_pic;

    $jqx_pic=substr($_POST['jqx_pic'],1);
    $stat = img2thumb($jqx_pic, $jqx_pic, $width = 581, $height = 400, $cut = 1, $proportion = 0);
    $_POST['jqx_pic']="/".$jqx_pic;

    $hb_pic=substr($_POST['hb_pic'],1);
    $stat = img2thumb($hb_pic, $hb_pic, $width = 581, $height = 400, $cut = 1, $proportion = 0);
    $_POST['hb_pic']="/".$hb_pic;

    $m=array();
    $m['p_brand']=$_POST['p_brand'];
    $m['p_subbrand']=$_POST['p_subbrand'];
    $m['p_subsubbrand']=$_POST['p_subsubbrand'];
    $m['sp_time']=$_POST['sp_year']."年".$_POST['sp_month']."月";
    $m['km']=$_POST['km'];
    $m['aid']=$_POST['aid'];
    $m['cid']=$_POST['cid'];
    $m['s_aid']=$_POST['s_aid'];
    $m['s_cid']=$_POST['s_cid'];
    $m['bsx']=$_POST['bsx'];
    $m['pl']=$_POST['pl'];
    $m['p_emission']=$_POST['p_emission'];
    $m['type']=$_POST['type'];//类型待定 存储
    $m['gh']=$_POST['gh'];
    $m['nj_overtime']=$_POST['nj_year']."年".$_POST['nj_month']."月";
    $m['jqx_overtime']=$_POST['jqx_year']."年".$_POST['jqx_month']."月";
    $m['syx_overtime']=$_POST['syx_year']."年".$_POST['syx_month']."月";
    $m['color']=$_POST['color'];
    $m['jd_pic']=$_POST['jd_pic'];
    $m['jqx_pic']=$_POST['jqx_pic'];
    $m['hb_pic']=$_POST['hb_pic'];

    if($_SESSION['mobile']){
        $rs=$db->row_update('info',$m,'id='.$_SESSION['info_id']);
        if($rs){
            showmsg('录入成功！','jcdmin_login.php?m=sgpc');
        }else{
            showmsg('录入失败！',-1);
        }
    }
}else{
    $tpl->display('jcdmin/jbxx.html');
}