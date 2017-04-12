<?php

$fn=date('Y-m-d')."-".time().rand(0,100).".jpg";
$add=array();
/*if($_SESSION['info_id']){*/
    if($fn){
        file_put_contents('upload_cars/' . $fn, file_get_contents('php://input'));

        $img="upload_cars/".$fn;
        $stat = img2thumb($img, $img, $width = 581, $height = 400, $cut = 1, $proportion = 0);
        //$stat = CreateSmallImage($img, $img, $width = 581, $height = 400);
		echo 1;
        /*if($stat){
            $add['info_id']=$_SESSION['info_id'];
            $add['pic']="/".$img;
            $rs=$db->row_insert('cltp',$add);
            if($rs){
                echo "成功!";
                exit;
            }else{
                echo "失敗!";
            }
        }*/
    }
/*}else{
    showmsg('请先填写车主信息','jcdmin_login.php?m=czxx');
}*/

