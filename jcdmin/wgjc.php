<?php
if (!defined('APP_IN')) exit('Access Denied');


if(!empty($_POST)){

    /*$zhutu=substr($_POST['zhutu'],1);
    $stat = img2thumb($zhutu, $zhutu, $width = 581, $height = 400, $cut = 1, $proportion = 0);
    $_POST['zhutu']="/".$zhutu;*/

    $zq_bxg_pic=substr($_POST['zq_bxg_pic'],1);
    $stat = img2thumb($zq_bxg_pic, $zq_bxg_pic, $width = 581, $height = 400, $cut = 1, $proportion = 0);
    $_POST['zq_bxg_pic']="/".$zq_bxg_pic;

    $yq_bxg_pic=substr($_POST['yq_bxg_pic'],1);
    $stat = img2thumb($yq_bxg_pic, $yq_bxg_pic, $width = 581, $height = 400, $cut = 1, $proportion = 0);
    $_POST['yq_bxg_pic']="/".$yq_bxg_pic;

    $zh_bxg_pic=substr($_POST['zh_bxg_pic'],1);
    $stat = img2thumb($zh_bxg_pic, $zh_bxg_pic, $width = 581, $height = 400, $cut = 1, $proportion = 0);
    $_POST['zh_bxg_pic']="/".$zh_bxg_pic;

    $yh_bxg_pic=substr($_POST['yh_bxg_pic'],1);
    $stat = img2thumb($yh_bxg_pic, $yh_bxg_pic, $width = 581, $height = 400, $cut = 1, $proportion = 0);
    $_POST['yh_bxg_pic']="/".$yh_bxg_pic;

    $zq_yzb_pic=substr($_POST['zq_yzb_pic'],1);
    $stat = img2thumb($zq_yzb_pic, $zq_yzb_pic, $width = 581, $height = 400, $cut = 1, $proportion = 0);
    $_POST['zq_yzb_pic']="/".$zq_yzb_pic;

    $yq_yzb_pic=substr($_POST['yq_yzb_pic'],1);
    $stat = img2thumb($yq_yzb_pic, $yq_yzb_pic, $width = 581, $height = 400, $cut = 1, $proportion = 0);
    $_POST['yq_yzb_pic']="/".$yq_yzb_pic;

    $zh_yzb_pic=substr($_POST['zh_yzb_pic'],1);
    $stat = img2thumb($zh_yzb_pic, $zh_yzb_pic, $width = 581, $height = 400, $cut = 1, $proportion = 0);
    $_POST['zh_yzb_pic']="/".$zh_yzb_pic;

    $yh_yzb_pic=substr($_POST['yh_yzb_pic'],1);
    $stat = img2thumb($yh_yzb_pic, $yh_yzb_pic, $width = 581, $height = 400, $cut = 1, $proportion = 0);
    $_POST['yh_yzb_pic']="/".$yh_yzb_pic;

    $zaz_pic=substr($_POST['zaz_pic'],1);
    $stat = img2thumb($zaz_pic, $zaz_pic, $width = 581, $height = 400, $cut = 1, $proportion = 0);
    $_POST['zaz_pic']="/".$zaz_pic;

    $yaz_pic=substr($_POST['yaz_pic'],1);
    $stat = img2thumb($yaz_pic, $yaz_pic, $width = 581, $height = 400, $cut = 1, $proportion = 0);
    $_POST['yaz_pic']="/".$yaz_pic;

    $zbz_pic=substr($_POST['zbz_pic'],1);
    $stat = img2thumb($zbz_pic, $zbz_pic, $width = 581, $height = 400, $cut = 1, $proportion = 0);
    $_POST['zbz_pic']="/".$zbz_pic;

    $ybz_pic=substr($_POST['ybz_pic'],1);
    $stat = img2thumb($ybz_pic, $ybz_pic, $width = 581, $height = 400, $cut = 1, $proportion = 0);
    $_POST['ybz_pic']="/".$ybz_pic;

    $zcz_pic=substr($_POST['zcz_pic'],1);
    $stat = img2thumb($zcz_pic, $zcz_pic, $width = 581, $height = 400, $cut = 1, $proportion = 0);
    $_POST['zcz_pic']="/".$zcz_pic;

    $ycz_pic=substr($_POST['ycz_pic'],1);
    $stat = img2thumb($ycz_pic, $ycz_pic, $width = 581, $height = 400, $cut = 1, $proportion = 0);
    $_POST['ycz_pic']="/".$ycz_pic;

    $zqm_pic=substr($_POST['zqm_pic'],1);
    $stat = img2thumb($zqm_pic, $zqm_pic, $width = 581, $height = 400, $cut = 1, $proportion = 0);
    $_POST['zqm_pic']="/".$zqm_pic;

    $yqm_pic=substr($_POST['yqm_pic'],1);
    $stat = img2thumb($yqm_pic, $yqm_pic, $width = 581, $height = 400, $cut = 1, $proportion = 0);
    $_POST['yqm_pic']="/".$yqm_pic;

    $zhm_pic=substr($_POST['zhm_pic'],1);
    $stat = img2thumb($zhm_pic, $zhm_pic, $width = 581, $height = 400, $cut = 1, $proportion = 0);
    $_POST['zhm_pic']="/".$zhm_pic;

    $yhm_pic=substr($_POST['yhm_pic'],1);
    $stat = img2thumb($yhm_pic, $yhm_pic, $width = 581, $height = 400, $cut = 1, $proportion = 0);
    $_POST['yhm_pic']="/".$yhm_pic;

    $fdj_pic=substr($_POST['fdj_pic'],1);
    $stat = img2thumb($fdj_pic, $fdj_pic, $width = 581, $height = 400, $cut = 1, $proportion = 0);
    $_POST['fdj_pic']="/".$fdj_pic;

    $hbx_pic=substr($_POST['hbx_pic'],1);
    $stat = img2thumb($hbx_pic, $hbx_pic, $width = 581, $height = 400, $cut = 1, $proportion = 0);
    $_POST['hbx_pic']="/".$hbx_pic;

    $zcd_pic=substr($_POST['zcd_pic'],1);
    $stat = img2thumb($zcd_pic, $zcd_pic, $width = 581, $height = 400, $cut = 1, $proportion = 0);
    $_POST['zcd_pic']="/".$zcd_pic;

    $ycd_pic=substr($_POST['ycd_pic'],1);
    $stat = img2thumb($ycd_pic, $ycd_pic, $width = 581, $height = 400, $cut = 1, $proportion = 0);
    $_POST['ycd_pic']="/".$ycd_pic;

    $ycd_pic=substr($_POST['ycd_pic'],1);
    $stat = img2thumb($ycd_pic, $ycd_pic, $width = 581, $height = 400, $cut = 1, $proportion = 0);
    $_POST['ycd_pic']="/".$ycd_pic;

    $zcqb_pic=substr($_POST['zcqb_pic'],1);
    $stat = img2thumb($zcqb_pic, $zcqb_pic, $width = 581, $height = 400, $cut = 1, $proportion = 0);
    $_POST['zcqb_pic']="/".$zcqb_pic;

    $ycqb_pic=substr($_POST['ycqb_pic'],1);
    $stat = img2thumb($ycqb_pic, $ycqb_pic, $width = 581, $height = 400, $cut = 1, $proportion = 0);
    $_POST['ycqb_pic']="/".$ycqb_pic;

    if($_SESSION['info_id']){
        $rs=$db->row_update('waiguan',$_POST,'info_id='.$_SESSION['info_id']);

        //$zhutu_pic['zhutu']=$_POST['zhutu'];
        //$zhu=$db->row_update('info',$zhutu_pic,'mobile="'.$_SESSION['mobile'].'"');
        if($rs){
            showmsg('录入成功！','jcdmin_login.php?m=cltp');
        }else{
            showmsg('录入失败！',-1);
        }
    }else{
        showmsg('请先填写车主信息','jcdmin_login.php?m=czxx');
    }
}
$tpl->display('jcdmin/wgjc.html');