<?php
if (!defined('APP_IN')) exit('Access Denied');
//存检测记录

$i=$db->row_select('info','id='.$_SESSION['info_id'],"name,mobile,cars_num,p_brand,p_subbrand,p_subsubbrand,type");

$p_brand=$db->row_select('brand','b_id='.$i[0]['p_brand'],'b_name');
$p_subbrand=$db->row_select('brand','b_id='.$i[0]['p_subbrand'],'b_name');
$p_subsubbrand=$db->row_select('brand','b_id='.$i[0]['p_subsubbrand'],'b_name');
$type=$db->row_select('model','s_id='.$i[0]['type'],'s_name');

$jc=array();

if(!empty($i[0]['p_subbrand'])){
    $bname = $commoncache['brandlist'][$i[0]['p_brand']];
    $subbname = arr_brandname($i[0]['p_subbrand']);
    $compareword = strstr($subbname,$bname);
    if(!empty($compareword)){
        $jc['brand'] .= arr_brandname($i[0]['p_subbrand']);
    }
    else{
        $jc['brand'] .= $bname ." ".arr_brandname($i[0]['p_subbrand']);
    }
}
if(!empty($i[0]['p_subsubbrand'])){
    $jc['brand'] .= " ".arr_brandname($i[0]['p_subsubbrand']);
}
$jc['jcs_id']=$_SESSION['jcs_id'];
$jc['info_id']=$_SESSION['info_id'];
$jc['name']=$i[0]['name'];
$jc['mobile']=$i[0]['mobile'];
$jc['type']=$type[0]['s_name'];
$jc['cars_num']=$i[0]['cars_num'];
$jc['is_jiance']=1;



$p=$db->row_select_one('jcsRecord','cars_id='.$_SESSION['cars_id']);
if(!empty($p) && empty($p['info_id'])){
    $jc['cars_id']=$_SESSION['cars_id'];
    $jc['update_time']=date('Y-m-d H:i:s');
    $pai=$db->row_update('jcsRecord',$jc,'cars_id='.$_SESSION['cars_id']);
}else{
    $jc['create_time']=date('Y-m-d H:i:s');
    $jc_R=$db->row_insert('jcsRecord',$jc);
}

//添加数据到前台表中

/*
 * 判断用户在前台是否有注册信息，有就取id，没有就录入信息 初始用户名为姓名+123456密码为123456
 */

$info=$db->row_select_one('info','id='.$_SESSION['info_id']);
if($_SESSION['mobile']){
    $where='mobilephone='.$_SESSION['mobile'].' or username='.$_SESSION['mobile'];
    $member_rs=$db->row_select_one('member',$where,'id');
    if(empty($member_rs)) {
        //$suiji=rand(1,99);
        $add['username'] = $_SESSION['mobile'];
        $add['nicname'] = $info['name'];
        $add['aid'] = $info['aid'];
        $add['cid'] = $info['cid'];
        $add['password'] = md5("123456");
        $add['mobilephone'] = $_SESSION['mobile'];
        $add['regtime'] = time();
        $m=$db->row_insert('member',$add);
        $uid=$db->insert_id();
        if($m){
            echo "录入会员成功！初始用户名为“手机号码”，密码为“123456”。";
        }
    }else{
        $uid=$member_rs['id'];
    }
}


/*
 * 取出用户ID后 存入cars表中
 */

$pic = $db->row_select('cltp', 'info_id=' . $_SESSION['info_id']);
$n = array();
foreach ($pic as $k => $v) {
    $n[] = $v['pic'];
}
$new = implode('|', $n);

if (!empty($info['p_subbrand'])) {
    $bname = $commoncache['brandlist'][$info['p_brand']];
    $subbname = arr_brandname($info['p_subbrand']);
    $compareword = strstr($subbname, $bname);
    if (!empty($compareword)) {
        $cars['p_allname'] .= arr_brandname($info['p_subbrand']);
    } else {
        $cars['p_allname'] .= $bname . " " . arr_brandname($info['p_subbrand']);
    }
}
if (!empty($info['p_subsubbrand'])) {
    $cars['p_allname'] .= " " . arr_brandname($info['p_subsubbrand']);
}

if ($info['tui'] == 2) {
    $info['tui'] = 0;
}
if (strlen($info['sp_time']) > 6) {
    $cars['p_year'] = substr($info['sp_time'], 0, 4);
    $cars['p_month'] = substr($info['sp_time'], 7, 2);
}
$cars['aid'] = $info['aid'];
$cars['cid'] = $info['cid'];
$cars['s_aid'] = $info['s_aid'];
$cars['s_cid'] = $info['s_cid'];
$cars['uid'] = $uid;
$cars['p_brand'] = $info['p_brand'];
$cars['p_subbrand'] = $info['p_subbrand'];
$cars['p_subsubbrand'] = $info['p_subsubbrand'];
$cars['p_color'] = $info['color'];
$cars['p_transmission'] = $info['bsx'];
$cars['p_model'] = $info['type'];
$cars['p_pics'] = $new;
$cars['p_mainpic'] = $info['zhutu'];
$cars['p_gas'] = $info['pl'];
$cars['p_emission'] = $info['p_emission'];
$cars['p_kilometre'] = $info['km'];
$cars['p_price'] = $info['price'];
$cars['p_tel'] = $info['mobile'];
$cars['isrecom'] = $info['tui'];
$cars['is_paidan'] = 1;
$cars['is_jiance'] = 1;
$cars['jcs_id'] = $_SESSION['jcs_id'];

//判断用户是否发布车辆
//$c_id=$db->row_select_one('jcsRecord','jcs_id='.$_SESSION['jcs_id']);
if($_SESSION['p_no']){
    $is_cars=$db->row_select_one('cars',"p_no='".$_SESSION['p_no']."'");
}
if(!empty($is_cars)){
    $c_rs=$db->row_update('cars',$cars,"p_no='".$_SESSION['p_no']."'");
    if ($c_rs) {
        showmsg('更新车辆成功！全部检测完成！', 'jcdmin_login.php?m=index');
    }
}else {
    $cars['p_addtime'] = time();
    $cars['listtime'] = time();
    $cars['p_username'] = $info['name'];
    $cars_rs = $db->row_insert('cars', $cars);
    $cars_id=$db->insert_id();
    $up['cars_id']=$cars_id;
    $up['update_time']=date('Y-m-d H:i:s');
    $j=$db->row_update('jcsRecord',$up,'info_id='.$_SESSION['info_id']);
    if ($cars_rs) {
        showmsg('录入车辆成功！全部检测完成！', 'jcdmin_login.php?m=index');
    }
}


















