<?php
if (!defined('APP_IN')) exit('Access Denied');

$tpl -> assign('menustate', 1);

if(!isset($_COOKIE['city']) or empty($_COOKIE['city'])){
	$_COOKIE['city'] = 0;
}

//公告
$tpl -> assign('noticelist', get_comnews(8, 4));

// 幻灯片
$tpl -> assign('filmlist', get_filmstrip(1));

//推荐品牌
$recombrand = get_brand_recom();

foreach($recombrand as $key => $value){
	$recombrand[$key]['carlist'] = get_carlist($_COOKIE['city'],"p_brand=".$value['b_id']." and issell=0 and p_mainpic!='' and isshow=1", '4', 'listtime desc');
}

$tpl -> assign('recombrandlist', $recombrand);



$carlist = array();

//特荐车源%
$carlist['todaycar'] = get_todaycar($_COOKIE['city']);



if($settings['version']==2 or $settings['version']==3){

	/* //商家推荐二手车
	$carlist['sjcar'] = get_carlist($_COOKIE['city'],"isrecom=1 and issell=0 and isshow=1 and uid in( select id from " . $db_config['TB_PREFIX'] . "member where isdealer>2)", '8', 'listtime desc'); */

	//准新车
	$carlist['newcar'] = get_carlist($_COOKIE['city']," isshow=1 and test='准新车' ", '4', 'listtime desc');
	$tpl -> assign('car_list', $carlist); 
	
	//急卖车
	$carlist['jscar'] = get_carlist($_COOKIE['city']," isshow=1 and test='急卖车' ", '4', 'listtime desc');
	$tpl -> assign('car_list', $carlist); 
	
	//特价车
	$carlist['tjcar'] = get_carlist($_COOKIE['city']," isshow=1 and test='特价车' ", '4', 'listtime desc');
	$tpl -> assign('car_list', $carlist); 
	
	//超值车
	$carlist['czcar'] = get_carlist($_COOKIE['city']," isshow=1 and test='超值车' ", '4', 'listtime desc');
	$tpl -> assign('car_list', $carlist); 

	//Chebey
	$carlist['grcar'] = get_carlist($_COOKIE['city']," isshow=1 and isrecom=1 ", '4', 'listtime desc');
	$tpl -> assign('car_list', $carlist); 

	//优质车
	$carlist['yzcar'] = get_carlist($_COOKIE['city']," isshow=1 and test='优质车' ", '4', 'listtime desc');
	$tpl -> assign('car_list', $carlist); 
	
    //练手车
	$carlist['lscar'] = get_carlist($_COOKIE['city']," isshow=1 and test='练手车' ", '4', 'listtime desc');
	$tpl -> assign('car_list', $carlist); 
	
	//SUV
	$carlist['suvcar'] = get_carlist($_COOKIE['city']," isshow=1 and p_model='8' ", '4', 'listtime desc');
	$tpl -> assign('car_list', $carlist); 
	
     //商务车
	$carlist['swcar'] = get_carlist($_COOKIE['city']," isshow=1 and p_model='7' ", '4', 'listtime desc');
	$tpl -> assign('car_list', $carlist); 

}
else{
	//推荐二手车
	$carlist['grcar'] = get_carlist($_COOKIE['city'],"isrecom=1 and issell=0 and p_mainpic!='' and isshow=1", '8', 'listtime desc');
}

$tpl -> assign('car_list', $carlist); 

// 新闻
$newslist = array();
$picnewslist = array();
$picnewslist['1'] = get_picnews(1,2);
$picnewslist['2'] = get_picnews(2,2);
$picnewslist['3'] = get_picnews(3,2);
$picnewslist['4'] = get_picnews(4,2);
$newslist['1'] = get_comnews(1, 8);
$newslist['2'] = get_comnews(2, 8);
$newslist['3'] = get_comnews(3, 8);
$newslist['4'] = get_comnews(4, 3);
$newslist['5'] = get_comnews(12, 3);
$tpl -> assign('picnewslist', $picnewslist); 
$tpl -> assign('newslist', $newslist);
$tpl -> assign('newslist', $newslist);



// 公告
$notice = get_comnews(5, 4);
$tpl -> assign('noticelist', $notice);

//友情链接
$tpl -> assign('link_list', get_flink()); 

// 热门关键词
$tpl -> assign('hotkeywordlist', get_bottomkeywords());

$tpl -> display('default/' . $settings['templates'] . '/index.html');

?>