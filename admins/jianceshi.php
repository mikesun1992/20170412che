<?php

if (!defined('APP_IN')) exit('Access Denied');

//当前模块
$mod_name = '检测师管理';
//允许操作
$ac_arr = array('list'=>'检测师列表','add'=>'添加检测师','edit'=>'编辑检测师','del'=>'删除检测师','bulkdel'=>'批量删除','show'=>'查看检测师记录','info'=>'查看检测结果','jcs_del'=>'删除检测记录');
//当前操作
$ac = isset($_REQUEST['a']) && isset($ac_arr[$_REQUEST['a']]) ? $_REQUEST['a'] : 'default';

$tpl->assign( 'mod_name', $mod_name );
$tpl->assign( 'ac_arr', $ac_arr );
$tpl->assign( 'ac', $ac );

//验证工号
if (!empty($_POST['param']) and $_POST['name']=="jcs_id")
{
    $data = $db->row_count('jianceshi',"jcs_id='".$_POST['param']."' and id<>".intval($_GET['id']));
    if($data==0){
        echo '{"info":"工号验证成功！","status":"y"}';
    }
    else{
        echo '{"info":"工号已存在！","status":"n"}';
    }
    exit;
}


//验证手机号
if (!empty($_POST['param']) and $_POST['name']=="mobile")
{
    $data = $db->row_count('jianceshi',"mobile='".$_POST['param']."' and id<>".intval($_GET['id']));
    if($data==0){
        echo '{"info":"手机号验证成功！","status":"y"}';
    }
    else{
        echo '{"info":"手机号已存在！","status":"n"}';
    }
    exit;
}

//页码
$page_g = isset($_REQUEST['page']) ? intval($_REQUEST['page']) : 1;
$tpl->assign( 'page_g', $page_g );

$array_isdealer = array('1' => '个人','2' => '检测师');

$array_dealer_category = arr_dealer_category();
//列表
if ($ac == 'list')
{
    $where = '1=1';
    //搜索条件
    if (!empty($_GET['keywords']))
    {
        $keywords = $_GET['keywords'];
        $where .= " AND (username LIKE '%{$keywords}%' or company LIKE '%{$keywords}%')";
    }

    include(INC_DIR.'Page.class.php');
    $Page = new Page($db->tb_prefix.'jianceshi',$where, '*', '50', 'id desc');
    $list = $Page->get_data();
    $page = $Page -> page;
    foreach($list as $key => $value){
        $list[$key]['create_time'] = date('Y-m-d H:i:s',$value['create_time']);
        if($settings['version']==3){
            if($value['aid']!=0){
                $list[$key]['province']=$commoncache['provincelist'][$value['aid']];
            }
            if($value['cid']!=0){
                $list[$key]['city']=$commoncache['citylist'][$value['cid']];
            }
        }
    }
    $button_basic = $Page->button_basic();
    $button_select = $Page->button_select();
    $tpl->assign( 'jcslist', $list );
    $tpl->assign( 'button_basic', $button_basic );
    $tpl->assign( 'button_select', $button_select );
    $tpl->assign( 'page', $page );
    $tpl->display( 'admins/jianceshi_list.html' );
    exit;
}
//单条删除
elseif ($ac == 'del')
{
    $id = isset($_GET['id']) ? intval($_GET['id']) : showmsg('缺少ID',-1);
    $rs = $db->row_delete('jianceshi',"id=$id");
}
//批量删除
elseif ($ac == 'bulkdel')
{
    if (empty($_POST['bulkid'])) showmsg('没有选中任何项',-1);
    $str_id = return_str_id($_POST['bulkid']);
    $rs = $db->row_delete('jianceshi',"id in($str_id)");
}
elseif ($ac == 'show'){
    if(!empty($_GET['jcs_id'])){
        $where="jcs_id=".$_GET['jcs_id'];
        include(INC_DIR.'Page.class.php');
        $Page = new Page($db->tb_prefix.'jcsRecord',$where, '*', '50', 'id desc');
        $list = $Page->get_data();
        $page = $Page -> page;
        $button_basic = $Page->button_basic();
        $button_select = $Page->button_select();
        $tpl->assign( 'jcsRecord', $list );
        $tpl->assign( 'button_basic', $button_basic );
        $tpl->assign( 'button_select', $button_select );
        $tpl->assign( 'page', $page );
        $tpl->display( 'admins/jcs_Record.html' );
        exit;
    }

}elseif($ac == 'jcs_del'){
    if(!empty($_GET['id'])){
        $jc=$db->row_delete('jcsRecord','id='.$_GET['id']);
        /*$rs1=$db->row_delete('info','id='.$_GET['info_id']);
        $rs2=$db->row_delete('fdj','info_id='.$_GET['info_id']);
        $rs3=$db->row_delete('waiguan','info_id='.$_GET['info_id']);
        $rs4=$db->row_delete('waiguan','info_id='.$_GET['info_id']);
        $rs5=$db->row_delete('cltp','info_id='.$_GET['info_id']);
        $rs6=$db->row_delete('neishi','info_id='.$_GET['info_id']);*/
        if($jc){
            showmsg('检测记录删除成功！',-1);
        }else{
            showmsg('检测记录删除失败！',-1);
        }
    }
    exit;
}
elseif($ac == 'info'){
    if(!empty($_GET['info_id'])){
        //info表数据
        $info_rs=$db->row_select_one('info','id='.$_GET['info_id']);
        //车辆图片多条
        $cltp_rs=$db->row_select('cltp','info_id='.$_GET['info_id']);
        //事故排查
        $sgpc_rs=$db->row_select_one('sgpc','info_id='.$_GET['info_id']);
        //系统设备
        $xtsb_rs=$db->row_select_one('xtsb','info_id='.$_GET['info_id']);
        //发动机
        $fdj_rs=$db->row_select_one('fdj','info_id='.$_GET['info_id']);
        //外观检测
        $waiguan_rs=$db->row_select_one('waiguan','info_id='.$_GET['info_id']);
        //内饰检测
        $neishi_rs=$db->row_select_one('neishi','info_id='.$_GET['info_id']);
        //品牌
        $brand=$db->row_select_one('jcsRecord','info_id='.$_GET['info_id'],'brand');
        $tpl->assign('brand',$brand['brand']);

        //城市
        if($info_rs['aid']!=0){
            $a=$db->row_select_one('area','id='.$info_rs['aid'],'name');
        }else{
            $a['name']="未选择";
        }
        if($info_rs['cid']!=0){
            $c=$db->row_select_one('area','id='.$info_rs['cid'],'name');
        }else{
            $c['name']="未选择";
        }
        $tpl->assign('a',$a['name']);
        $tpl->assign('c',$c['name']);

        //类型
        if($info_rs['type']!=0){
            $type=$db->row_select_one('model','s_id='.$info_rs['type'],'s_name');
        }else{
            $type="未选择";
        }
        $tpl->assign('type',$type['s_name']);

        $tpl->assign('info_rs',$info_rs);
        $tpl->assign('pic',$cltp_rs);
        $tpl->assign('sgpc_rs',$sgpc_rs);
        $tpl->assign('fdj_rs',$fdj_rs);
        $tpl->assign('xtsb_rs',$xtsb_rs);
        $tpl->assign('waiguan_rs',$waiguan_rs);
        $tpl->assign('neishi_rs',$neishi_rs);

        $tpl->display('admins/jcs_info.html');
        exit;
    }
}
//添加
elseif ($ac == 'add' || $ac == 'edit')
{
    //添加或修改
    if (submitcheck('a'))
    {
        if ($ac == 'add')
        {
            $arr_not_empty = array('jcs_id'=>'工号不可为空','pic'=>'头像不能为空','name'=>'姓名不能为空','pwd'=>'密码不能为空','mobile'=>'手机号不能为空','type'=>'类型不能为空');
            can_not_be_empty($arr_not_empty,$_POST);
            $post['jcs_id']=$_POST['jcs_id'];
            $post['name']=$_POST['name'];
            $post['mobile']=$_POST['mobile'];
            $post['aid']=$_POST['aid'];
            $post['cid']=$_POST['cid'];
            $post['pic']=$_POST['pic'];
            $post['type']=$_POST['type'];
            if ($settings['version'] == 3) {
                $post['aid'] = intval($_POST['aid']);
                $post['cid'] = intval($_POST['cid']);
            } else {
                $post['aid'] = 0;
                $post['cid'] = 0;
            }
            $post['pwd']=md5($_POST['pwd']);
            $post['create_time'] = time();
            $rs = $db->row_insert('jianceshi',$post);
        }
        else
        {
            $arr_not_empty = array('jcs_id'=>'工号不可为空','name'=>'姓名不能为空','mobile'=>'手机号不能为空','type'=>'类型不能为空');
            can_not_be_empty($arr_not_empty,$_POST);
            $modify['jcs_id']=$_POST['jcs_id'];
            $modify['name']=$_POST['name'];
            $modify['mobile']=$_POST['mobile'];
            $modify['aid']=$_POST['aid'];
            $modify['cid']=$_POST['cid'];
            $modify['type']=$_POST['type'];
            if($settings['version'] == 3) {
                $modify['aid'] = intval($_POST['aid']);
                $modify['cid'] = intval($_POST['cid']);
            } else {
                $modify['aid'] = 0;
                $modify['cid'] = 0;
            }
            $modify['pwd']=md5($_POST['pwd']);
            $modify['update_time'] = time();
            $rs = $db->row_update('jianceshi',$modify,"id=".intval($_REQUEST['id']));
        }
    }
    //转向添加或修改页面
    else
    {
        if (empty($_GET['id'])) $data = array('username'=>'','password'=>'','email'=>'','mobilephone '=>'','aid'=>'','cid'=>'');
        else $data = $db->row_select_one('jianceshi',"id=".intval($_GET['id']));
        $select_province = select_make($data['aid'],$commoncache['provincelist'],"请选择省份");
        $select_city = select_make($data['cid'],$commoncache['citylist'],"请选择城市");
        $tpl->assign( 'selectprovince', $select_province );
        $tpl->assign( 'selectcity', $select_city );
        $tpl->assign( 'jcs', $data );
        $tpl->assign( 'sessionid', session_id() );
        $tpl->display( 'admins/add_jianceshi.html' );
        exit;
    }
}
//默认操作
else
{
    showmsg('非法操作',-1);
}

showmsg($ac_arr[$ac].($rs ? '成功' : '失败'),ADMIN_PAGE."?m=$m&a=list&page=".$page_g);
?>