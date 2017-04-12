<?php

if(!defined('APP_IN')) exit('Access Denied');



//验证工号
if (!empty($_POST['param']) and $_POST['name']=="jcs_id")
{
    $data = $db->row_count('jianceshi',"jcs_id='".$_POST['param']."'");

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
    $data = $db->row_count('jianceshi',"mobile='".$_POST['param']."'");
    if($data==0){
        echo '{"info":"手机号验证成功！","status":"y"}';
    }
    else{
        echo '{"info":"手机号已存在！","status":"n"}';
    }
    exit;
}

?>