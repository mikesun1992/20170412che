<?php 
    include_once "smarty/Smarty.class.php";
    $tpl =new Smarty;
    $tpl->template_dir = WEB_ROOT.TPL_DIR;
    $tpl->compile_dir = WEB_ROOT . "cache/";  #缓存文件目录
    $tpl->left_delimiter = '<{';
    $tpl->right_delimiter = '}>';
	$TPL_IMGURL = 'templates/images'; #模板图片URL
?>