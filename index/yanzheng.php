<?php
if(!defined('APP_IN')) exit('Access Denied');

if($_POST['m']){
    $r=rand(100000,999999);
    //$r=22;
    $con='您好，您的验证码是：'.$r.'【车碑二手车直卖网】';
    $_SESSION['authcode']=$r;
    if(isset($_COOKIE['mob']) && $_COOKIE['mob']==$_POST['m']){
        echo 2;
    }else{
        setcookie('mob',$_POST['m'],time()+60);
        $result=sendSMS($_POST['m'],$con);
        if(strpos($result,"success")>-1) {
            echo 1;
        }else{
            echo 3;
        }
    }
}