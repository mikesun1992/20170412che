<?php

header("Content-type: text/html; charset=utf-8");
if (!defined('APP_IN')) exit('Access Denied');
// 当前模块
$m_name = '生成静态';
// 允许操作
$ac_arr = array('create' => '一键更新');
// 当前操作
$ac = isset($_REQUEST['a']) && isset($ac_arr[$_REQUEST['a']]) ? $_REQUEST['a'] : 'default';

$tpl -> assign('weburl', WEB_PATH);
$tpl -> assign('mod_name', $m_name);
$tpl -> assign('ac_arr', $ac_arr);
$tpl -> assign('ac', $ac);

if ($ac == 'create') {
	$action = isset($_GET['action']) ? $_GET['action'] : '';
	if ($action!=''){
		//step = 1 更新主页、step = 2 更新产品详细页、step = 3 更新新闻详细页、step = 4 更新单页
		$step = isset($_GET['step']) ? $_GET['step'] : 1;
		//更新主页
		if($step==1){
			html_index();
			showmsg('更新首页成功', 'admin.php?m=create_html_all&a=create&ation=create&step=2');
			exit;
		}
		/*更新产品列表页
		elseif($step==2){
			$categorylist = $db -> row_select('products_category', 'isshow=1', '*', 0 , 'catid asc');
			$catcount = count($categorylist);
			$cati = isset($_GET['cati']) ? intval($_GET['cati']) : 0;
			if($cati>=($catcount-1)){
				$catid = $categorylist[$cati]['catid'];
				html_product_list($catid);
				showmsg('更新产品'.$categorylist[$cati]['catname'].'列表页成功', 'admin.php?m=create_html_all&a=create&ation=create&step=3');
			}
			$catid = $categorylist[$cati]['catid'];
			html_product_list($catid);
			$cati = $cati + 1;
			showmsg('更新产品'.$categorylist[$cati]['catname'].'列表页成功', 'admin.php?m=create_html_all&a=create&ation=create&step=2&cati='.$cati);
			exit;
		}*/
		//更新产品详细页
		elseif($step==2){
			
			showmsg('更新产品成功', 'admin.php?m=create_html_all&step=3');
			exit;
		}
		//更新新闻详细页
		elseif($step==3){

			showmsg('更新新闻成功', 'admin.php?m=create_html_all&step=4');
			exit;
		}
		//更新单页
		elseif($step==3){
			
			showmsg('更新单页成功', 'admin.php?m=create_html_all');
			exit;
		}
	}
	else{
		$tpl -> display("admins/create_html_all.html");
	}
} 

?>