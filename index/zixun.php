<?php
if (!defined('APP_IN')) exit('Access Denied');

function get_onlineip() {
    $a=file_get_contents('http://www.ip138.com/ip2city.asp');
    preg_match('/\[(.*)\]/', $a, $ip_arr);
    return $ip_arr[1];
}
$ip=get_onlineip();

$add['p_no']=time();
$add['uip']=$ip;
$add['p_tel']=$_POST['m'];
$add['p_addtime'] = time();
$add['listtime'] = time();
$rs=$db->row_insert('cars',$add);
if($rs){
    echo 1;
}else{
    echo 2;
}