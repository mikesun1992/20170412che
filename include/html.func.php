<?php
// 生成首页
function html_index() {
	global $db, $tpl , $settings,$db_config;

	$tpl -> assign('menustate', 1);

	$array_subbrand = select_subbrand($brandid = 0);
	$array_brand_with_index = arr_brand_with_index();
	
	$array_model = arr_model();
	$array_year = arr_year();
	$array_color = arr_color();
	$array_gas = arr_gas();
	$array_transmission = arr_transmission();

	$select_brand = select_make('', $array_brand_with_index, '请选择品牌');
	$select_subbrand = select_make('', $array_subbrand, '请选择子品牌');
	$select_model = select_make('', $array_model, '');
	$select_year = select_make('', $array_year, '年份');
	$select_color = select_make('', $array_color, '请选择颜色');
	$select_month = select_make('', array('01' => '01月', '02' => '02月', '03' => '03月', '04' => '04月', '05' => '05月', '06' => '06月', '07' => '07月', '08' => '08月', '09' => '09月', '10' => '10月', '11' => '11月', '12' => '12月'), '月份', '');
	$select_gas = select_make('', $array_gas, '请选择排量');
	$select_transmission = select_make('', $array_transmission, '请选择变速箱');
	$select_country = select_make('', array('国产' => '国产', '进口' => '进口'), '请选择');

	//$tpl -> assign('select_brand', $select_brand);
	//$tpl -> assign('select_subbrand', $select_subbrand);
	$tpl -> assign('select_model', $select_model);
	$tpl -> assign('select_year', $select_year);
	$tpl -> assign('select_color', $select_color);
	$tpl -> assign('select_month', $select_month);
	$tpl -> assign('select_gas', $select_gas);
	$tpl -> assign('select_transmission', $select_transmission);
	$tpl -> assign('select_country', $select_country);


	$brand_search = arr_brand_with_search();
	$select_brand_search = select_make('', $brand_search, '请选择品牌');
	$tpl->assign( 'selectbrandsearch', $select_brand_search );
	
	$arr_p = array('1' => '3万以下', '2' => '3-5万', '3' => '5-8万', '4' => '8-12万', '5' => '12-18万', '6' => '18-24万','7' => '24-35万', '8' => '35-50万', '9' => '50-100万', '10' => '100万以上');
	$tpl -> assign('arr_price', $arr_p);
	$arr_a = array('1' => '1年以内', '2' => '2年以内', '3' => '3年以内', '4' => '4年以内', '5' => '5年以内', '6' => '6年以内', '7' => '6年以上');
	$tpl -> assign('arr_age', $arr_a);
	$arr_g = array('1' => '1.0L', '2' => '2.0L', '3' => '3.0L', '4' => '4.0L', '5' => '5.0L及以上');
	$tpl -> assign('arr_gas', $arr_g);
	$arr_b = arr_brand_recom();
	$tpl -> assign('arr_brand', $arr_b);
	
	/*公告*/
	$tpl -> assign('noticelist', get_comnews(8, 4));
	
	/*幻灯片*/
	$tpl -> assign('filmlist', get_filmstrip(1));
	
	$carlist = array();

	/*今日特荐*/
	$carlist['todaycar'] = get_todaycar();

	/*商家推荐二手车*/
	$carlist['sjcar'] = get_carlist($data['cid'],"isrecom=1 and issell=0 and isshow=1 and uid in( select id from " . $db_config['TB_PREFIX'] . "member where isdealer=2 and ischeck=1)",'8','listtime desc');

	/*个人推荐二手车*/
	$carlist['grcar'] = get_carlist($data['cid'],"isrecom=1 and issell=0 and p_mainpic!='' and isshow=1 and (uid in( select id from " . $db_config['TB_PREFIX'] . "member where isdealer=1) or uid=0)",'8','listtime desc');
	
	$tpl -> assign('car_list', $carlist);

	//推荐商家
	$tpl->assign( 'comdealer', get_comshop() );

	//热门商家
	$tpl->assign( 'hotdealer', get_hotshop() );

	//新闻
	$newslist = array();
	$newslist['1'] = get_comnews(1, 8);
	$newslist['2'] = get_comnews(2, 8);
	$newslist['3'] = get_comnews(3, 8);
	$newslist['4'] = get_comnews(4, 8);
	$tpl -> assign('newslist', $newslist);
	
	//公告
	$notice = get_comnews(5, 4);
	$tpl -> assign('noticelist', $notice);
	
	/*友情链接*/
	$tpl -> assign('link_list', get_flink());


	//热门关键词
	$tpl -> assign('hotkeywordlist', get_bottomkeywords());

	$indexhtml = $tpl -> fetch('default/'.$settings['templates'].'/index.html');
	$fp = fopen("index.html", "w");
	fwrite($fp, $indexhtml);
	fclose($fp);
	return true;
} 
// 生成新闻详细页
function html_news($id) {
	global $db, $tpl, $settings;
	$data = $db -> row_select_one('news', "n_id=" . intval($id));
	$data['addtime'] = date('Y-m-d H:i:s', $data['n_addtime']);
	$category = $db -> row_select_one('news_category', 'catid=' . $data['catid']);
	$data['catname'] = $category['catname'];
	$data['keywords']= $category['keywords'];
	$data['description']= $category['description'];
	$data['n_info'] = htmlspecialchars_decode($data['n_info']);

	$tpl -> assign('news', $data); 
	// 相关新闻
	$aboutnews['pre'] = $db -> row_select('news', "catid=" . $data['catid'] . " and n_id<" . $data['n_id'], 'n_id,n_title,n_addtime', '3', 'n_id desc');
	$aboutnews['next'] = $db -> row_select('news', "catid=" . $data['catid'] . " and n_id>" . $data['n_id'], 'n_id,n_title,n_addtime', '3', 'n_id asc');
	foreach($aboutnews as $key => $value) {
		foreach($value as $k => $v) {
			$aboutnews[$key][$k]['n_title'] = _substr($v['n_title'], 0, 70);
			$aboutnews[$key][$k]['n_url'] = WEB_PATH."/news/". date('Ym', $v['n_addtime']) . "/".$v['n_id'].".html";
		} 
	} 
	$tpl -> assign('aboutnewslist', $aboutnews);
	$newshtml = $tpl -> fetch('default/'.$settings['templates'].'/news.html');
	$newsdir = HTML_DIR."news/".date('Ym', $data['n_addtime'])."/";
	if(!is_dir($newsdir)) createFolder($newsdir);
	$fp = fopen($newsdir.$data['n_id'] . ".html", "w");
	fwrite($fp, $newshtml);
	fclose($fp);
	return true;
} 

// 生成车源详细页
function html_cars($id) {
	global $db,$tpl;
	$settings = settings();
	$data = $db -> row_select_one('cars', "p_id=" . intval($id));
	$data['listtime'] = date('Y-m-d', $data['listtime']);
	$data['p_page'] = !empty($data['p_page']) ? $data['p_page'] : $data['p_id'] . ".html";
	$data['p_details'] = htmlspecialchars_decode($data['p_details']);
	$data['n_info'] = htmlspecialchars_decode($data['n_info']);
	if(!empty($data['p_model'])){
		$category = $db -> row_select_one('model', 's_id=' . $data['p_model']);
		$data['modelname'] = $category['s_name'];
	}
	if(!empty($value['p_mainpic'])){
		$pic = explode(".", $value['p_mainpic']);
		$list[$k] = $pic[0].".".$pic[1];
	}
	
	$carpiclist = array();
	if (!empty($data['p_pics'])) {
		$piclist = explode('|', $data['p_pics']);
		foreach($piclist as $k => $v){
			$pic = explode(".", $v);
			$carpiclist[$k]['pic'] = $v;
			$carpiclist[$k]['smallpic'] = $pic[0].".".$pic[1];
		}
		$tpl -> assign('pic_list', $carpiclist);
	} else {
		$tpl -> assign('pic_list', "");
	} 

	if($settings['version']==3){
		if($data['cid']!=0){
			$rs_city = $db->row_select_one('area','id='.$data['cid'],'name');
			$data['city']=$rs_city['name'];
		}
	}


	//显示自定义参数
	$paralist = $db -> row_select('selfdefine', "isshow=1",' id,type_name,type_value,c_name');
	foreach($paralist as $key => $value){
		$para_value = $db -> row_select_one('selfdefine_value', "p_id=" . $data['p_id'].' and c_id='.$value['id']);
		if($value['type_name']=='checkbox'){
			$checkvalue=str_replace("|",'',$para_value['c_value']);			
			$paralist[$key]['c_value'] = $checkvalue;
		}
		else{
			$paralist[$key]['c_value'] = $para_value['c_value'];
		}
	}
	$tpl->assign('paralist',$paralist);

	//同车系二手车
	$samecarlist = get_carlist($data['cid'],"issell=0 and isshow=1 and p_brand=".$data['p_brand']." and p_id!=".$id,'6','listtime desc');
	$tpl -> assign('samecar', $samecarlist);
	
	//同价位二手车
	if (!empty($data['p_price'])) {
		$where = "issell=0 and isshow=1 and p_id!=".$id;
		if($data['p_price']>5){
			$startprice = $data['p_price']-5;
		}
		else{
			$startprice = $data['p_price'];
		}
		$endprice = $data['p_price']+5;			
		$where .= " and p_price>=".$startprice." and p_price<=".$endprice;
		$samepricecarlist = get_carlist($data['cid'],$where,'6', 'listtime desc');
		$tpl -> assign('samepricecars', $samepricecarlist);
	} 
	
	//首付比例关系
    $shoufu="￥" .$data['p_price']*0.3."万";
	$daikuan="￥" .$data['p_price']*0.7."万";
	$anjie="￥" .($data['p_price']-$shoufu)*7000/12*1.1;
	$data['p_price'] = intval($data['p_price']) == 0 ? "面谈" : "￥" . $data['p_price']."万";

	$tpl -> assign('shoufu', $shoufu);
    $tpl -> assign('daikuan', $daikuan);
	$tpl -> assign('anjie', $anjie);
	$tpl -> assign('cars', $data);
	
	if($data['is_jiance']==1){
		//获取该车检测师信息
		$jcs=$db->row_select_one('jianceshi','jcs_id='.$data['jcs_id']);
		//获取该车检测结果
		$jc=$db->row_select_one('jcsRecord','cars_id='.$data['p_id']);
		//info表数据
		$info_rs=$db->row_select_one('info','id='.$jc['info_id']);
		//事故排查
		$sgpc_rs=$db->row_select_one('sgpc','info_id='.$jc['info_id']);
		//系统设备
		$xtsb_rs=$db->row_select_one('xtsb','info_id='.$jc['info_id']);
		//发动机
		$fdj_rs=$db->row_select_one('fdj','info_id='.$jc['info_id']);
		//外观检测
		$waiguan_rs=$db->row_select_one('waiguan','info_id='.$jc['info_id']);
		//内饰检测
		$neishi_rs=$db->row_select_one('neishi','info_id='.$jc['info_id']);


		$tpl->assign('jcs',$jcs);//检测师信息
		$tpl->assign('info_rs',$info_rs);
		$tpl->assign('sgpc_rs',$sgpc_rs);
		$tpl->assign('fdj_rs',$fdj_rs);
		$tpl->assign('xtsb_rs',$xtsb_rs);
		$tpl->assign('waiguan_rs',$waiguan_rs);
		$tpl->assign('neishi_rs',$neishi_rs);

		//获取检测项不正常的总数
		//事故排查不正常的总数
		$sgpc_num=0;
		if($sgpc_rs['zaz']!=1){
			$sgpc_num++;
		}
		if($sgpc_rs['yaz']!=1){
			$sgpc_num++;
		}
		if($sgpc_rs['zbz']!=1){
			$sgpc_num++;
		}
		if($sgpc_rs['ybz']!=1){
			$sgpc_num++;
		}
		if($sgpc_rs['zcz']!=1){
			$sgpc_num++;
		}
		if($sgpc_rs['ycz']!=1){
			$sgpc_num++;
		}
		if($sgpc_rs['zqzl']!=1){
			$sgpc_num++;
		}
		if($sgpc_rs['yqzl']!=1){
			$sgpc_num++;
		}
		if($sgpc_rs['zhzl']!=1){
			$sgpc_num++;
		}
		if($sgpc_rs['yhzl']!=1){
			$sgpc_num++;
		}
		if($sgpc_rs['qfzl']!=1){
			$sgpc_num++;
		}
		if($sgpc_rs['hfzl']!=1){
			$sgpc_num++;
		}
		if($sgpc_rs['zqjzqxg']!=1){
			$sgpc_num++;
		}
		if($sgpc_rs['yqjzqxg']!=1){
			$sgpc_num++;
		}
		if($sgpc_rs['zhjzqxg']!=1){
			$sgpc_num++;
		}
		if($sgpc_rs['yhjzqxg']!=1){
			$sgpc_num++;
		}
		if($sgpc_rs['fdjfhq']!=1){
			$sgpc_num++;
		}
		if($sgpc_rs['hbxdb']!=1){
			$sgpc_num++;
		}
		if($sgpc_rs['zydc']!=1){
			$sgpc_num++;
		}
		if($sgpc_rs['fdjxs']!=1){
			$sgpc_num++;
		}
		if($sgpc_rs['hbxbj']!=1){
			$sgpc_num++;
		}
		if($sgpc_rs['zyhgn']!=1){
			$sgpc_num++;
		}
		if($sgpc_rs['hzydb']!=1){
			$sgpc_num++;
		}
		if($sgpc_rs['aqddb']!=1){
			$sgpc_num++;
		}
		if($sgpc_rs['djdt']!=1){
			$sgpc_num++;
		}
		if($sgpc_rs['yxlbdb']!=1){
			$sgpc_num++;
		}
		if($sgpc_rs['yhgdb']!=1){
			$sgpc_num++;
		}
		if($sgpc_rs['clfgj']!=1){
			$sgpc_num++;
		}
		$tpl->assign('sgpc_num',$sgpc_num);

		//发动机检测不正常的总数
		$fdj_num=0;
		if($fdj_rs['fdj_cx']==1){
			$fdj_num++;
		}
		if($fdj_rs['fdj_lh']==1){
			$fdj_num++;
		}
		if($fdj_rs['cgq_sh']==1){
			$fdj_num++;
		}
		if($fdj_rs['gx_ps']==1){
			$fdj_num++;
		}
		if($fdj_rs['fdjg_ly']==1){
			$fdj_num++;
		}
		if($fdj_rs['sx_ps']==1){
			$fdj_num++;
		}
		if($fdj_rs['jydk']==1){
			$fdj_num++;
		}
		if($fdj_rs['jyym']==1){
			$fdj_num++;
		}
		if($fdj_rs['fdym']==1){
			$fdj_num++;
		}
		if($fdj_rs['zlbym']==1){
			$fdj_num++;
		}
		if($fdj_rs['bsxdk']==1){
			$fdj_num++;
		}
		if($fdj_rs['ls']!=1){
			$fdj_num++;
		}
		if($fdj_rs['zdy']==1){
			$fdj_num++;
		}
		if($fdj_rs['ktysj']==1){
			$fdj_num++;
		}
		if($fdj_rs['zxzlb']==1){
			$fdj_num++;
		}
		$tpl->assign('fdj_num',$fdj_num);

		//系统设备检测不正常的总数
		$xtsb_num=0;
		if($xtsb_rs['bsxd']!=1){
			$xtsb_num++;
		}
		if($xtsb_rs['zdd']!=1){
			$xtsb_num++;
		}
		if($xtsb_rs['absd']!=1){
			$xtsb_num++;
		}
		if($xtsb_rs['aqql']!=1){
			$xtsb_num++;
		}
		if($xtsb_rs['fdjd']!=1){
			$xtsb_num++;
		}
		if($xtsb_rs['qwd']!=1){
			$xtsb_num++;
		}
		if($xtsb_rs['hwd']!=1){
			$xtsb_num++;
		}
		if($xtsb_rs['jgd']!=1){
			$xtsb_num++;
		}
		if($xtsb_rs['ygd']!=1){
			$xtsb_num++;
		}
		if($xtsb_rs['qzxd']!=1){
			$xtsb_num++;
		}
		if($xtsb_rs['hzxd']!=1){
			$xtsb_num++;
		}
		if($xtsb_rs['dcd']!=1){
			$xtsb_num++;
		}
		if($xtsb_rs['scd']!=1){
			$xtsb_num++;
		}
		if($xtsb_rs['sndd']!=1){
			$xtsb_num++;
		}
		$tpl->assign('xtsb_num',$xtsb_num);

		//底盘检测不正常的总数
		$dp_num=0;
		if($waiguan_rs['yhjzq']!=1){
			$dp_num++;
		}
		if($waiguan_rs['yqjzq']!=1){
			$dp_num++;
		}
		if($waiguan_rs['zqjzq']!=1){
			$dp_num++;
		}
		if($waiguan_rs['zhjzq']!=1){
			$dp_num++;
		}
		$tpl->assign('dp_num',$dp_num);

		//车辆配置不正常的总数
		$clpz_num=0;
		if($info_rs['yk_keys']!=1){
			$clpz_num++;
		}
		if($info_rs['qjd']!=1){
			$clpz_num++;
		}
		if($info_rs['tool']!=1){
			$clpz_num++;
		}
		if($info_rs['sjp']!=1){
			$clpz_num++;
		}
		if($info_rs['mhq']!=1){
			$clpz_num++;
		}
		if($info_rs['bt']!=1){
			$clpz_num++;
		}
		$tpl->assign('clpz_num',$clpz_num);



		//内饰检测不正常的总数
		$neishi_num=0;
		if($neishi_rs['fxp']!=1){
			$neishi_num++;
		}
		if($neishi_rs['zkt']!=1){
			$neishi_num++;
		}
		if($neishi_rs['zjcm']!=1){
			$neishi_num++;
		}
		if($neishi_rs['fjcm']!=1){
			$neishi_num++;
		}
		if($neishi_rs['hzcm']!=1){
			$neishi_num++;
		}
		if($neishi_rs['hycm']!=1){
			$neishi_num++;
		}
		if($neishi_rs['zjzy']!=1){
			$neishi_num++;
		}
		if($neishi_rs['fjzy']!=1){
			$neishi_num++;
		}
		if($neishi_rs['hzy']!=1){
			$neishi_num++;
		}
		if($neishi_rs['tc']!=1 && $neishi_rs['tc']!=3){
			$neishi_num++;
		}
		if($neishi_rs['blsj']!=1){
			$neishi_num++;
		}
		$tpl->assign('neishi_num',$neishi_num);




		//外观检测不正常的总数
		$waiguan_num=0;
		if($waiguan_rs['zq_bxg_hh']==1 || $waiguan_rs['zq_bxg_ax']==1 || $waiguan_rs['zq_bxg_ps']==1 || $waiguan_rs['zq_bxg_lh']==1){
			$zq_bxg=1;
			$waiguan_num++;
		}else{
			$zq_bxg=2;
		}
		$tpl->assign('zq_bxg',$zq_bxg);
		if($waiguan_rs['yq_bxg_hh']==1 || $waiguan_rs['yq_bxg_ax']==1 || $waiguan_rs['yq_bxg_ps']==1 || $waiguan_rs['yq_bxg_lh']==1){
			$yq_bxg=1;
			$waiguan_num++;
		}else{
			$yq_bxg=2;
		}
		$tpl->assign('yq_bxg',$yq_bxg);
		if($waiguan_rs['zh_bxg_hh']==1 || $waiguan_rs['zh_bxg_ax']==1 || $waiguan_rs['zh_bxg_ps']==1 || $waiguan_rs['zh_bxg_lh']==1){
			$zh_bxg=1;
			$waiguan_num++;
		}else{
			$zh_bxg=2;
		}
		$tpl->assign('zh_bxg',$zh_bxg);
		if($waiguan_rs['yh_bxg_hh']==1 || $waiguan_rs['yh_bxg_ax']==1 || $waiguan_rs['yh_bxg_ps']==1 || $waiguan_rs['yh_bxg_lh']==1){
			$yh_bxg=1;
			$waiguan_num++;
		}else{
			$yh_bxg=2;
		}
		$tpl->assign('yh_bxg',$yh_bxg);
		if($waiguan_rs['zq_yzb_hh']==1 || $waiguan_rs['zq_yzb_ax']==1 || $waiguan_rs['zq_yzb_ps']==1 || $waiguan_rs['zq_yzb_lh']==1){
			$zq_yzb=1;
			$waiguan_num++;
		}else{
			$zq_yzb=2;
		}
		$tpl->assign('zq_yzb',$zq_yzb);
		if($waiguan_rs['yq_yzb_hh']==1 || $waiguan_rs['yq_yzb_ax']==1 || $waiguan_rs['yq_yzb_ps']==1 || $waiguan_rs['yq_yzb_lh']==1){
			$yq_yzb=1;
			$waiguan_num++;
		}else{
			$yq_yzb=2;
		}
		$tpl->assign('yq_yzb',$yq_yzb);
		if($waiguan_rs['zh_yzb_hh']==1 || $waiguan_rs['zh_yzb_ax']==1 || $waiguan_rs['zh_yzb_ps']==1 || $waiguan_rs['zh_yzb_lh']==1){
			$zh_yzb=1;
			$waiguan_num++;
		}else{
			$zh_yzb=2;
		}
		$tpl->assign('zh_yzb',$zh_yzb);
		if($waiguan_rs['yh_yzb_hh']==1 || $waiguan_rs['yh_yzb_ax']==1 || $waiguan_rs['yh_yzb_ps']==1 || $waiguan_rs['yh_yzb_lh']==1){
			$yh_yzb=1;
			$waiguan_num++;
		}else{
			$yh_yzb=2;
		}
		$tpl->assign('yh_yzb',$yh_yzb);
		if($waiguan_rs['zaz_hh']==1 || $waiguan_rs['zaz_ax']==1 || $waiguan_rs['zaz_ps']==1 || $waiguan_rs['zaz_lh']==1){
			$zaz=1;
			$waiguan_num++;
		}else{
			$zaz=2;
		}
		$tpl->assign('zaz',$zaz);
		if($waiguan_rs['zbz_hh']==1 || $waiguan_rs['zbz_ax']==1 || $waiguan_rs['zbz_ps']==1 || $waiguan_rs['zbz_lh']==1){
			$zbz=1;
			$waiguan_num++;
		}else{
			$zbz=2;
		}
		$tpl->assign('zbz',$zbz);
		if($waiguan_rs['zcz_hh']==1 || $waiguan_rs['zcz_ax']==1 || $waiguan_rs['zcz_ps']==1 || $waiguan_rs['zcz_lh']==1){
			$zcz=1;
			$waiguan_num++;
		}else{
			$zcz=2;
		}
		$tpl->assign('zcz',$zcz);
		if($waiguan_rs['yaz_hh']==1 || $waiguan_rs['yaz_ax']==1 || $waiguan_rs['zyaz_ps']==1 || $waiguan_rs['yaz_lh']==1){
			$yaz=1;
			$waiguan_num++;
		}else{
			$yaz=2;
		}
		$tpl->assign('yaz',$yaz);
		if($waiguan_rs['ybz_hh']==1 || $waiguan_rs['ybz_ax']==1 || $waiguan_rs['ybz_ps']==1 || $waiguan_rs['ybz_lh']==1){
			$ybz=1;
			$waiguan_num++;
		}else{
			$ybz=2;
		}
		$tpl->assign('ybz',$ybz);
		if($waiguan_rs['ycz_hh']==1 || $waiguan_rs['ycz_ax']==1 || $waiguan_rs['ycz_ps']==1 || $waiguan_rs['ycz_lh']==1){
			$ycz=1;
			$waiguan_num++;
		}else{
			$ycz=2;
		}
		$tpl->assign('ycz',$ycz);

		if($waiguan_rs['zqm_hh']==1 || $waiguan_rs['zqm_ax']==1 || $waiguan_rs['zqm_ps']==1 || $waiguan_rs['zqm_lh']==1){
			$zqm=1;
			$waiguan_num++;
		}else{
			$zqm=2;
		}
		$tpl->assign('zqm',$zqm);
		if($waiguan_rs['zhm_hh']==1 || $waiguan_rs['zhm_ax']==1 || $waiguan_rs['zhm_ps']==1 || $waiguan_rs['zhm_lh']==1){
			$zhm=1;
			$waiguan_num++;
		}else{
			$zhm=2;
		}
		$tpl->assign('zhm',$zhm);
		if($waiguan_rs['yqm_hh']==1 || $waiguan_rs['yqm_ax']==1 || $waiguan_rs['yqm_ps']==1 || $waiguan_rs['yqm_lh']==1){
			$yqm=1;
			$waiguan_num++;
		}else{
			$yqm=2;
		}
		$tpl->assign('yqm',$yqm);
		if($waiguan_rs['yhm_hh']==1 || $waiguan_rs['yhm_ax']==1 || $waiguan_rs['yhm_ps']==1 || $waiguan_rs['yhm_lh']==1){
			$yhm=1;
			$waiguan_num++;
		}else{
			$yhm=2;
		}
		$tpl->assign('yhm',$yhm);
		if($waiguan_rs['zcd_hh']==1 || $waiguan_rs['zcd_ax']==1 || $waiguan_rs['zcd_ps']==1 || $waiguan_rs['zcd_lh']==1){
			$zcd=1;
			$waiguan_num++;
		}else{
			$zcd=2;
		}
		$tpl->assign('zcd',$zcd);
		if($waiguan_rs['ycd_hh']==1 || $waiguan_rs['ycd_ax']==1 || $waiguan_rs['ycd_ps']==1 || $waiguan_rs['ycd_lh']==1){
			$ycd=1;
			$waiguan_num++;
		}else{
			$ycd=2;
		}
		$tpl->assign('ycd',$ycd);
		if($waiguan_rs['zcqb_hh']==1 || $waiguan_rs['zcqb_ax']==1 || $waiguan_rs['zcqb_ps']==1 || $waiguan_rs['zcqb_lh']==1){
			$zcqb=1;
			$waiguan_num++;
		}else{
			$zcqb=2;
		}
		$tpl->assign('zcqb',$zcqb);
		if($waiguan_rs['ycqb_hh']==1 || $waiguan_rs['ycqb_ax']==1 || $waiguan_rs['ycqb_ps']==1 || $waiguan_rs['ycqb_lh']==1){
			$ycqb=1;
			$waiguan_num++;
		}else{
			$ycqb=2;
		}
		$tpl->assign('ycqb',$ycqb);
		if($waiguan_rs['hbx_hh']==1 || $waiguan_rs['hbx_ax']==1 || $waiguan_rs['hbx_ps']==1 || $waiguan_rs['hbx_lh']==1){
			$hbx=1;
			$waiguan_num++;
		}else{
			$hbx=2;
		}
		$tpl->assign('hbx',$hbx);
		if($waiguan_rs['fdj_hh']==1 || $waiguan_rs['fdj_ax']==1 || $waiguan_rs['fdj_ps']==1 || $waiguan_rs['fdj_lh']==1){
			$fdj=1;
			$waiguan_num++;
		}else{
			$fdj=2;
		}
		$tpl->assign('fdj',$fdj);
		$tpl->assign('waiguan_num',$waiguan_num);



		if($settings['version']==2 or $settings['version']==3){
			//商家信息
			if(!empty($data['uid'])){
				$user = $db -> row_select_one('member', 'id=' . $data['uid']);
				$tpl -> assign('shop', $user);
				$carcount[0] = $db -> row_count('cars', 'uid=' . $data['uid']);
				$carcount[1] = $db -> row_count('cars', 'uid=' . $data['uid'].' and issell=1');
				$carcount[2] = $carcount[0] - $carcount[1];
				$tpl -> assign('carcount', $carcount);

			}
		}


		$cardir = HTML_DIR."buy/".date('Y/m/d', $data['p_addtime'])."/";
		if (!is_dir($cardir)) createFolder($cardir);
		$carshtml = $tpl -> fetch('default/'.$settings['templates'].'/cars.html');
		$fp = fopen($cardir.$data['p_page'], "w");
		fwrite($fp, $carshtml);
		fclose($fp);
		return true;

	}else{
		return false;
	}

} 
// 生成租车详细页
function html_rentcars($id) {
	global $db, $tpl , $settings;
	$data = $db -> row_select_one('rentcars', "p_id=" . intval($id));
	$data['listtime'] = date('Y-m-d', $data['listtime']);
	$data['p_page'] = !empty($data['p_page']) ? $data['p_page'] : $data['p_id'] . ".html";
	$data['p_details'] = htmlspecialchars_decode($data['p_details']);
	if(!empty($data['p_model'])){
		$category = $db -> row_select_one('rentmodel', 's_id=' . $data['p_model']);
		$data['modelname'] = $category['s_name'];
	}

	$carpiclist = array();
	if (!empty($data['p_pics'])) {
		$piclist = explode('|', $data['p_pics']);
		foreach($piclist as $k => $v){
			$pic = explode(".", $v);
			$carpiclist[$k]['pic'] = $v;
			$carpiclist[$k]['smallpic'] = $pic[0].".".$pic[1];
		}
		$tpl -> assign('pic_list', $carpiclist);
	} else {
		$tpl -> assign('pic_list', "");
	} 
		//地区
	if(!empty($data['cid'])){
		$area = $db -> row_select_one('area','id = '.$data['cid']);
		$data['area'] = $area['name'];
	}

	$tpl -> assign('cars', $data);

	//商家信息
	if(!empty($data['uid'])){ 
		$user = $db -> row_select_one('member', 'id=' . $data['uid']);
	}
	$tpl -> assign('shop', $user);


	$cardir = HTML_DIR."rentcars/".date('Y/m/d', $data['p_addtime'])."/";
	if (!is_dir($cardir)) createFolder($cardir);
	$carshtml = $tpl -> fetch('default/'.$settings['templates'].'/rentcars.html');
	$fp = fopen($cardir.$data['p_page'], "w");
	fwrite($fp, $carshtml);
	fclose($fp);
	return true;
}
// 生成求购详细页
function html_qiugoucars($id) {
	global $db, $tpl , $settings;

	$data = $db -> row_select_one('buy', "p_id=" . intval($id));
	$data['addtime'] = date('Y-m-d', $data['p_addtime']);
	$data['p_page'] = !empty($data['p_page']) ? $data['p_page'] : $data['p_id'] . ".html";
	$data['p_details'] = htmlspecialchars_decode($data['p_details']);
	if(!empty($data['p_model'])){
		$category = $db -> row_select_one('model', 's_id=' . $data['p_model']);
		$data['modelname'] = $category['s_name'];
	}
	
	$arr_age_b = array('1'=>'1年以内','2'=>'2年以内','3'=>'3-5年','4'=>'5-8年','5'=>'8年以上');
	$data['age'] = $arr_age_b[$data['p_age']];

	if(!empty($value['p_mainpic'])){
		$pic = explode(".", $value['p_mainpic']);
		$list[$k] = $pic[0].".".$pic[1];
	}
	if (!empty($data['p_pics'])) {
		$piclist = explode('|', $data['p_pics']);
		$spiclist = array();
		foreach($piclist as $k => $v){
			$pic = explode(".", $v);
			$spiclist[$k] = $pic[0].".".$pic[1];
		}
		$tpl -> assign('pic_list', $piclist);
		$tpl -> assign('spic_list', $spiclist);
	} else {
		$tpl -> assign('pic_list', "");
		$tpl -> assign('spic_list', "");
	} 
		//地区
	if(!empty($data['cid'])){
		$area = $db -> row_select_one('area','id = '.$data['cid']);
		$data['area'] = $area['name'];
	}

	$tpl -> assign('cars', $data);


	//商家信息
	if(!empty($data['uid'])){ 
		$user = $db -> row_select_one('member', 'id=' . $data['uid']);
		$tpl -> assign('shop', $user);
	}

	$cardir = HTML_DIR."qiugou/".date('Y/m/d', $data['p_addtime'])."/";
	if (!is_dir($cardir)) createFolder($cardir);
	$carshtml = $tpl -> fetch('default/'.$settings['templates'].'/qiugou.html');
	$fp = fopen($cardir.$data['p_page'], "w");
	fwrite($fp, $carshtml);
	fclose($fp);
	return true;
}
// 生成单页
function html_page($id) {
	global $db, $tpl, $settings;
	$data = $db -> row_select_one('page', "p_id=" . intval($id));
	$list = $db -> row_select('page', 's_id=' . $data['s_id'], '*', 0);
	$tpl -> assign('pagelist', $list);
	$sort = $db -> row_select_one('page_sorts', 's_id=' . $data['s_id']);
	$data['sortname'] = $sort['s_name'];
	$data['sorturl'] = $sort['s_dir'] . "/" . $list[0]['p_page'];
	if ($data['s_id'] == 2) {
		$tpl -> assign('menustate', 2);
	} elseif ($data['s_id'] == 3) {
		$tpl -> assign('menustate', 3);
	} elseif ($data['s_id'] == 4) {
		$tpl -> assign('menustate', 4);
	} elseif ($data['s_id'] == 5) {
		$tpl -> assign('menustate', 5);
	} elseif ($data['s_id'] == 6) {
		$tpl -> assign('menustate', 6);
	} elseif ($data['s_id'] == 7) {
		$tpl -> assign('menustate', 7);
	} elseif ($data['s_id'] == 8) {
		$tpl -> assign('menustate', 8);
	} elseif ($data['s_id'] == 9) {
				$tpl -> assign('menustate', 9);
	} elseif ($data['s_id'] == 14) {
		$tpl -> assign('menustate', 14);
	} 
	$data['p_page'] = !empty($data['p_page']) ? $data['p_page'] : $data['p_id'] . ".html";
	$data['p_info'] = htmlspecialchars_decode($data['p_info']);
	$tpl -> assign('page', $data);
	$tpl -> assign('pageid', $id);

	if (!is_dir(HTML_DIR.$sort['s_dir'])) createFolder( HTML_DIR.$sort['s_dir']);

	$pagehtml = $tpl -> fetch('default/'.$settings['templates'].'/'.$data['p_tql']);
	$fp = fopen(HTML_DIR.$sort['s_dir'] . "/" . $data['p_page'], "w");
	fwrite($fp, $pagehtml);
	fclose($fp);
	return true;
}
?>