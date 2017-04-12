<?php
if (!defined('APP_IN')) exit('Access Denied');
//省市
$settings  = settings();
if($settings['version']==3){
    $province_search = arr_province();
    $select_province_search = select_make('', $province_search, '请选择省份');
    $tpl -> assign('selectprovincesearch', $select_province_search);
}

$p_id=$_GET['p_id'];
if(!empty($_POST)){
    $where="aid=".$_POST['aid']." and cid=".$_POST['cid'];
}else{
    $where="1=1";
}
include(INC_DIR . 'Page.class.php');
$Page = new Page($db -> tb_prefix . 'jianceshi', $where, '*', '50', 'id asc');
$list = $Page -> get_data();
$page = $Page -> page;
$button_basic = $Page -> button_basic();
$button_select = $Page -> button_select();

$tpl -> assign('p_id', $p_id);
$tpl -> assign('button_basic', $button_basic);
$tpl -> assign('button_select', $button_select);
$tpl -> assign('jcs', $list);
$tpl -> assign('currpage', $page);
$tpl->display("admins/paidan.html");
if(!empty($_GET['p_id']) && !empty($_GET['jcs_id'])){
    $u=$db->row_select_one('cars',"p_id=".$_GET['p_id'],'uid,p_allname,p_tel,p_username');
    if($u['uid']){
        $user=$db->row_select_one('member','id='.$u['uid']);
    }


    if(empty($user['mobilephone'])){
        $add['mobile']=$u['p_tel'];
    }else{
        $add['mobile']=$user['mobilephone'];
    }


    if(empty($user['nicname'])){
        $add['name']=$u['p_username'];
    }else{
        $add['name']=$user['nicname'];
    }

    $modify['is_paidan']=1;
    $modify['jcs_id']=$_GET['jcs_id'];
    $update_cars=$db->row_update('cars',$modify,"p_id=".$_GET['p_id']);

    $add['jcs_id']=$_GET['jcs_id'];
    $add['cars_id']=$_GET['p_id'];
    //$add['name']=$user['nicname'];

    $add['brand']=$u['p_allname'];
    $add['is_jiance']=0;
    $add['create_time']=date('Y-m-d H:i:s');
    $j=$db->row_insert('jcsRecord',$add);

    $info_add['name']=$user['nicname'];
    $info_add['mobile']=$user['mobilephone'];
    $info_rs=$db->row_insert('info',$info_add);
    if($update_cars && $j && $info_rs){

        showmsg('派单成功！');
    }else{
        showmsg('操作有误！');
    }
}
