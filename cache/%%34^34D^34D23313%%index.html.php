<?php /* Smarty version 2.6.18, created on 2017-03-17 08:11:37
         compiled from default/cartey/index.html */ ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $this->_tpl_vars['setting']['title']; ?>
</title>
<meta content="<?php echo $this->_tpl_vars['setting']['keywords']; ?>
" name="keywords" />
<meta content="<?php echo $this->_tpl_vars['setting']['description']; ?>
" name="description" />
<link href="<?php echo $this->_tpl_vars['weburl']; ?>
/skin/css/index.css" rel="stylesheet" type="text/css"/>
<link rel="shortcut icon" type="image/ico" href="<?php echo $this->_tpl_vars['weburl']; ?>
/skin/img/favicon.ico">
<script type="text/javascript" src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/js/jquery.SuperSlide.2.1.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/js/Validform_v5.3.2_min.js"></script>
<script src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/webappservice/uaredirect.js" type="text/javascript"></script><script type="text/javascript">uaredirect("<?php echo $this->_tpl_vars['weburl']; ?>
/m");</script>
<script language="JavaScript">
$(function() {
	$news_li = $("ul.indexnews_tab li");
	$news_li.bind('mouseover', function(e) {
		$(this).addClass("here").siblings().removeClass("here");
		var index = $news_li.index(this);
		$("div.indexnews_box > div").eq(index).show().siblings().hide();
	});
});
</script>

<script language="JavaScript">
			$(function() {
				//品牌选择
				$("#brand").change(function(){
					$.get("<?php echo $this->_tpl_vars['weburl']; ?>
/?m=ajax&ajax=1", { 
						brandid :  $("#brand").val() 
					}, function (data, textStatus){
						   $("#subbrand").html(data); // 把返回的数据添加到页面上
						}
					);
				});

				//品牌选择
				$("#subbrand").change(function(){
					$.get("<?php echo $this->_tpl_vars['weburl']; ?>
/?m=ajax&ajax=1", { 
						subbrandid :  $("#subbrand").val() 
					}, function (data, textStatus){
						   $("#subsubbrand").html(data); // 把返回的数据添加到页面上
						}
					);
				});
				
				$div_li = $("div.tab_title ul li a");
				$div_li.click(function() {
					$(this).addClass("current").parent().siblings().children().removeClass("current");
					var index = $div_li.index(this);
					$("div.cartab_box > div").eq(index).show().siblings().hide();
				});

				$search_li = $("div.leftsearch_tab ul li");
				$search_li.click(function() {
					$(this).addClass("here").siblings().removeClass("here");
					var index = $search_li.index(this);
					$("div.leftsearch_tab_box > div").eq(index).show().siblings().hide();
				});

				//表单验证
				$(".carform").Validform({
					tiptype:1
				});
				//热门车源
				$("#hotcar1").load("<?php echo $this->_tpl_vars['weburl']; ?>
/?m=ajax&ajax=1&cartype=indexhot");
				//首页推荐新车
				$("#hotcar").load("<?php echo $this->_tpl_vars['weburl']; ?>
/?m=ajax&ajax=1&cartype=indexnew");
				//首页推荐新车旧卖
				//$("#hotcar").load("<?php echo $this->_tpl_vars['weburl']; ?>
/?m=ajax&ajax=1&cartype=recommend");
				
				
				//修改处  nav
				
				$(".leftsearch .leftsearchbox:eq(0)").mouseover(function(){
																		 
					$("#icon_03").css("background-position","-278px -47px");	
					$("#icon_02").css("background-position","-278px 0px");
					$("#icon_04").css("background-position","-0px -219px");
					$(".leftsearch .leftsearchbox .clearfix a").css("color","#333");	
					$(".lefttitle").css("color","#fc5300");
					$(".triangle").show();
					$(".more:eq(0)").css("color","#fc5300");	
					$(".rightad").hide();
					$(".leftsearch .leftsearchbox").css("background","#fff");
									
					$(".leftsearch .leftsearchbox:eq(0)").css("background","#fc5300");
					$("#icon_01").css("background-position","-94px -266px");										   
					$(".leftsearch .leftsearchbox:eq(0) .clearfix a").css("color","#fff");
					$(".lefttitle:eq(0)").css("color","#fff");
					$(".triangle:eq(0)").hide();
					$(".rightad:eq(0)").show();
				});				
				
				$(".leftsearch .leftsearchbox:eq(1)").mouseover(function(){
																		 
					$("#icon_01").css("background-position","-278px -141px");
					$("#icon_03").css("background-position","-278px -47px");
					$("#icon_04").css("background-position","-0px -219px");
					$(".leftsearch .leftsearchbox .clearfix a").css("color","#333");
					$(".lefttitle").css("color","#fc5300");
					$(".triangle").show();
					$(".more:eq(0)").css("color","#fc5300");					
					$(".rightad").hide();	
					$(".leftsearch .leftsearchbox").css("background","#fff");
					
					$(".leftsearch .leftsearchbox:eq(1)").css("background","#fc5300");
					$("#icon_02").css("background-position","-188px -219px");
					$(".leftsearch .leftsearchbox:eq(1) .clearfix a").css("color","#fff");
					$(".lefttitle:eq(1)").css("color","#fff");
					$(".triangle:eq(1)").hide();
					$(".rightad:eq(1)").show();
				});
				
				$(".leftsearch .leftsearchbox:eq(2)").mouseover(function(){
																		 
					$("#icon_01").css("background-position","-278px -141px");
					$("#icon_02").css("background-position","-278px 0px");
					$("#icon_04").css("background-position","-0px -219px");
					$(".leftsearch .leftsearchbox .clearfix a").css("color","#333");
					$(".lefttitle").css("color","#fc5300");
					$(".triangle").show();
					$(".more:eq(0)").css("color","#fc5300");					
					$(".rightad").hide();	
					$(".leftsearch .leftsearchbox").css("background","#fff");
					
					$(".leftsearch .leftsearchbox:eq(2)").css("background","#fc5300");
					$("#icon_03").css("background-position","-278px -94px");										   
					$(".leftsearch .leftsearchbox:eq(2) .clearfix a").css("color","#fff");
					$(".lefttitle:eq(2)").css("color","#fff");
					$(".triangle:eq(2)").hide();
					$(".rightad:eq(2)").show();
				});
				
				$(".leftsearch .leftsearchbox:eq(3)").mouseover(function(){
																		 
					$("#icon_01").css("background-position","-278px -141px");
					$("#icon_02").css("background-position","-278px 0px");
					$("#icon_03").css("background-position","-278px -47px");
					$(".leftsearch .leftsearchbox .clearfix a").css("color","#333");	
					$(".lefttitle").css("color","#fc5300");
					$(".triangle").show();
					$(".more:eq(0)").css("color","#fc5300");					
					$(".rightad").hide();	
					$(".leftsearch .leftsearchbox").css("background","#fff");
					
					$(".leftsearch .leftsearchbox:eq(3)").css("background","#fc5300");
					$("#icon_04").css("background-position","-141px -219px");										   
					$(".leftsearch .leftsearchbox:eq(3) .clearfix a").css("color","#fff");
					$(".lefttitle:eq(3)").css("color","#fff");
					$(".triangle:eq(3)").hide();
					$(".rightad:eq(3)").show();
				});

				$(".leftsearch .leftsearchbox").mouseleave(function(){													 
					$(".rightad").hide();
					$("#icon_01").css("background-position","-278px -141px");
					$("#icon_02").css("background-position","-278px 0");	
					$("#icon_03").css("background-position","-278px -47px");	
					$("#icon_04").css("background-position","0 -219px");	
					$(".leftsearch .leftsearchbox .clearfix a").css("color","#333");	
					$(".lefttitle").css("color","#fc5300");
					$(".triangle").show();
					$(".more:eq(0)").css("color","#fc5300");	
					$(".leftsearch .leftsearchbox").css("background","#fff");
				});
				
				$(".tjdealer").slide({mainCell:".piclist", effect:"leftLoop",vis:5,autoPlay:true});

				

            });
		</script>
</head>
<body>
<!--内容-->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "default/".($this->_tpl_vars['setting']['templates'])."/head.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="fullSlide">
    <div class="leftsearch">
      <div class="leftsearch_tab">
        <ul class="clearfix">
          <!--修改处-->
          <li class="here">我要买车</li>
          <li>我要评估</li>
        </ul>
      </div>
      <div class="leftsearch_tab_box">
        <div>
          <div class="leftsearchbox" >
            <div class="rightad" id="allcarlist">
              <div class="triangle1" style="top:74px;"></div>
              <div class="carlist_left" >
                <h2>全部车辆品牌</h2>
                <ul class="carlist">
                  <li class="carlist_li"><span>A</span><a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=b_1" >奥迪</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=b_4" >阿斯顿马丁</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=b_2" >奥克斯</a> </li>
                  <li class="carlist_li"><span>B</span><a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=b_7" >宝马</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=b_16" >别克</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=b_11" >本田</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=b_6" >奔驰</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=b_10" >比亚迪</a> </li>
                  <li class="carlist_li"><span>C</span><a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=b_28" >长安商用</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=b_27" >长安轿车</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=b_25" >长城</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=b_26" >昌河</a> </li>
                  <li class="carlist_li"><span>D</span><a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=b_29" >大众</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=b_31" >东南</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=b_39" >东风小康</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=b_35" >东风风行</a> </li>
                  <li class="carlist_li"><span>F</span><a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=b_41" >丰田</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=b_42" >福特</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=b_43" >菲亚特</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=b_47" >福田</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=b_46" >法拉利</a> </li>
                  <li class="carlist_li"><span>H</span><a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=b_59" >海马</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=b_73" >哈弗</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=b_58" >哈飞</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=b_60" >华普</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=b_66" >华泰</a> </li>
                  <li class="carlist_li"><span>J</span><a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=b_75" >吉利汽车</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=b_76" >江淮</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=b_74" >Jeep</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=b_77" >江铃</a> </li>
                  <li class="carlist_li"><span>K</span><a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=b_87" >凯迪拉克</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=b_88" >克莱斯勒</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=b_89" >开瑞</a> </li>
                  <li class="carlist_li"><span>L</span><a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=b_101" >路虎</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=b_93" >铃木</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=b_99" >雷克萨斯</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=b_95" >力帆</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=b_102" >雷诺</a> </li>
                </ul>
                <ul class="carlist">
                  <li class="carlist_li"><span>M</span><a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=b_108" >马自达</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=b_111" >MINI</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=b_110" >MG</a> </li>
                  <li class="carlist_li"><span>O</span><a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=b_118" >欧宝</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=b_117" >讴歌</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=b_119" >欧朗</a> </li>
                  <li class="carlist_li"><span>Q</span><a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=b_123" >起亚</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=b_124" >奇瑞</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=b_126" >启辰</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=b_125" >庆玲</a> </li>
                  <li class="carlist_li"><span>R</span><a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=b_127" >日产</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=b_128" >荣威</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=b_129" >瑞麟</a> </li>
                  <li class="carlist_li"><span>S</span><a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=b_130" >斯柯达</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=b_131" >三菱</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=b_137" >斯巴鲁</a> </li>
                  <li class="carlist_li"><span>W</span><a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=b_152" >五菱</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=b_150" >沃尔沃</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=b_154" >威麟</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=b_153" >五十铃</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=b_151" >万丰</a> </li>
                  <li class="carlist_li"><span>X</span><a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=b_157" >现代</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=b_158" >雪佛兰</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=b_156" >雪铁龙</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=b_161" >新凯</a> </li>
                  <li class="carlist_li"><span>Y</span><a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=b_166" >一汽</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=b_168" >英菲尼迪</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=b_164" >依维柯</a> </li>
                  <li class="carlist_li"><span>Z</span><a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=b_176" >中华</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=b_179" >众泰</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=b_176" >中兴</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=b_180" >中欧</a> <a class="carlist_a" href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=b_178" >中顺</a> </li>
                </ul>
              </div>

            </div>
            <div class="lefttitle"> <span class="lefttitle_icon" id="icon_01"></span> 按品牌 </div>
            <div class="triangle"></div>
            <div class="clearfix"> <?php $_from = $this->_tpl_vars['recombrandlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skey'] => $this->_tpl_vars['brandlist']):
?><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=b_<?php echo $this->_tpl_vars['brandlist']['b_id']; ?>
" <?php if ($_COOKIE['brand'] == $this->_tpl_vars['brandlist']['b_id']): ?>class="here"<?php endif; ?>><?php echo $this->_tpl_vars['brandlist']['b_name']; ?>
</a><?php endforeach; endif; unset($_from); ?> <a href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search" class="more">更多<i></i></a> </div>
          </div>
          <div class="leftsearchbox">
            <div class="rightad" id="ad_01">
              <div class="triangle1" style="top:144px;"></div>
              <a class="rightad_center" href="#"> <img class="ad_img" src="<?php echo $this->_tpl_vars['weburl']; ?>
/skin/image/ad0.jpg" width="562" height="422" /> </a>
              <div class="rightad_right"> <a class="rightad_a" href="#"> <img class="ad_img" src="<?php echo $this->_tpl_vars['weburl']; ?>
/skin/image/ad1.jpg" width="300" height="211" /> </a> <a class="rightad_a" href="#"> <img class="ad_img" src="<?php echo $this->_tpl_vars['weburl']; ?>
/skin/image/ad2.jpg" width="300" height="211" /> </a> </div>
            </div>
            <div class="lefttitle"> <span class="lefttitle_icon" id="icon_02"></span> 按价格 </div>
            <div class="triangle"></div>
            <div class="clearfix"><?php $_from = $this->_tpl_vars['arr_price']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skey'] => $this->_tpl_vars['pricelist']):
?><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=p_<?php echo $this->_tpl_vars['skey']; ?>
" <?php if ($_COOKIE['price'] == $this->_tpl_vars['skey']): ?>class="here"<?php endif; ?>><?php echo $this->_tpl_vars['pricelist']; ?>
</a><?php endforeach; endif; unset($_from); ?></div>
          </div>
          <div class="leftsearchbox">
            <div class="rightad" id="ad_02">
              <div class="triangle1" style="top:225px;"></div>
              <a class="rightad_center" href="#"> <img class="ad_img" src="<?php echo $this->_tpl_vars['weburl']; ?>
/skin/image/ad5.jpg" width="562" height="422" /> </a>
              <div class="rightad_right"> <a class="rightad_a" href="#"> <img class="ad_img" src="<?php echo $this->_tpl_vars['weburl']; ?>
/skin/image/ad3.jpg" width="300" height="211" /> </a> <a class="rightad_a" href="#"> <img class="ad_img" src="<?php echo $this->_tpl_vars['weburl']; ?>
/skin/image/ad4.jpg" width="300" height="211" /> </a> </div>
            </div>
            <div class="lefttitle"> <span class="lefttitle_icon" id="icon_03"></span> 按车型 </div>
            <div class="triangle"></div>
            <div class="clearfix"><?php $_from = $this->_tpl_vars['cache']['modellist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skey'] => $this->_tpl_vars['modellist']):
?><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=m_<?php echo $this->_tpl_vars['skey']; ?>
" ><?php echo $this->_tpl_vars['modellist']; ?>
</a><?php endforeach; endif; unset($_from); ?></div>
          </div>
          <div class="leftsearchbox" style="height:62px;">
            <div class="rightad" id="ad_03">
              <div class="triangle1" style="top:295px;"></div>
              <a class="rightad_center" href="#"> <img class="ad_img" src="<?php echo $this->_tpl_vars['weburl']; ?>
/skin/image/ad6.jpg" width="562" height="422" /> </a>
              <div class="rightad_right"> <a class="rightad_a" href="#"> <img class="ad_img" src="<?php echo $this->_tpl_vars['weburl']; ?>
/skin/image/ad2.jpg" width="300" height="211" /> </a> <a class="rightad_a" href="#"> <img class="ad_img" src="<?php echo $this->_tpl_vars['weburl']; ?>
/skin/image/ad3.jpg" width="300" height="211" /> </a> </div>
            </div>
            <div class="lefttitle"> <span class="lefttitle_icon" id="icon_04"></span> 按车龄 </div>
            <div class="triangle"></div>
            <div class="clearfix"><?php $_from = $this->_tpl_vars['arr_age']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skey'] => $this->_tpl_vars['agellist']):
?><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=a_<?php echo $this->_tpl_vars['skey']; ?>
" ><?php echo $this->_tpl_vars['agellist']; ?>
</a><?php endforeach; endif; unset($_from); ?></div>
          </div>
          <div class="other"> <i></i>
            <div class="sell-car-box" data-value-domain="www">


            <form class="clearfix" id="m_form" action="" data-role="sell_form">
                
             <input class="sell-phone-input" id="m" type="text" datatype="m" placeholder="请输入手机号码" data-role="sellPhone">

                <input type="button"  onclick="s()" class="sell-phone-submit"  data-gzlog="tracking_type=click&amp;eventid=0210050000000013" data-clue-entry="03" value="我要卖车" />
                <input name="source_type" type="hidden" value="">
                    <span id="kong" style="display: none;" class='Validform_checktip Validform_wrong'>请输入手机号！</span>
                    <span id="error" style="display: none;" class='Validform_checktip Validform_wrong'>手机号码错误！</span>
            </form>
            <p class="sell-phone-error"></p>
            <div id="suc" class="submit-suc" style="display: none;">
                提交成功！
               <a href="javascript:void(0)" onclick="go_back()" data-role="go_back">返回</a>
            </div>
        </div>
          </div>
            <script type="text/javascript">
                function s(){
                    var m=$("#m").val();

                    if(m==""){
                        $('#kong').css('display','block');
                        $('#error').css('display','none');
                    }else if(!(/^1(3|4|5|7|8)\d{9}$/.test(m))){
                        $('#kong').css('display','none');
                        $('#error').css('display','block');
                    }else{
                        $('#kong').css('display','none');
                        $('#error').css('display','none');
                        $.post('index.php?m=zixun',{m:m},function(data){
                            if(data==1){
                                $('#m_form').css('display','none');
                                $('#suc').css('display','block');
                            }else{
                                alert('系统繁忙，请稍后操作！');
                            }
                        });
                    }
                }
                function go_back(){
                    $("#m").val("");
                    $('#m_form').css('display','block');
                    $('#suc').css('display','none');
                }
            </script>
        </div>
        <div class="hide pb20">
          <form name="carform" class="carform" method="post" action="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=assesscar">
            <table cellspacing="0" cellpadding="0" width="100%"  class="sell_table" id="quickassess">
              <tr>
                <th> 品&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;牌：</th>
                <td colspan="3"><select name="p_brand" id="brand" datatype="n" nullmsg="请选择品牌！" class="select01">
                    <?php echo $this->_tpl_vars['selectbrand']; ?>

                  </select></td>
              </tr>
              <tr>
                <th> 车&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;系：</th>
                <td><select id="subbrand" name="p_subbrand" datatype="n" nullmsg="请选择车系！" class="select01">
                    <option value="" selected>请选择车系</option>
                  </select></td>
              </tr>
              <tr>
                <th> 车&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;型：</th>
                <td><select id="subsubbrand" name="p_subsubbrand" datatype="n" nullmsg="请选择款式！" class="select01">
                    <option value="" selected>请选择款式</option>
                  </select></td>
              </tr>
              <tr>
                <th>上牌日期：</th>
                <td><select name="p_year" datatype="n" nullmsg="请选择年份！" class="select02">
                    <?php echo $this->_tpl_vars['select_year']; ?>

                  </select>
                  <select name="p_month" datatype="n" nullmsg="请选择月份！" class="select02">
                    <?php echo $this->_tpl_vars['select_month']; ?>

                  </select></td>
                </td>
              </tr>
              <tr>
                <th>行驶里程：</th>
                <td><input name="p_kilometre" type="text" id="p_kilometre" size="15" />
                  <span class="gray">(万公里)</span></td>
                </td>
              </tr>
              <tr>
                <th>手&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;机：</th>
                <td><input name="p_contact_tel" type="text" size="30" class="inp01" value="" datatype="m" nullmsg="请正确填写手机号！"/></td>
              </tr>
              <tr>
                <th>验&nbsp;&nbsp;证&nbsp;&nbsp;码：</th>
                <td colspan="5"><input name="authcode" id="cftcode" size="10"  type="text"  class="inp02" datatype="s" ajaxurl="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=ajax&ajax=1" nullmsg="请输入验证码！" errormsg="请输入正确的验证码！"/>
                  <img src="<?php echo $this->_tpl_vars['weburl']; ?>
/include/kcaptcha/" width="70" height="30" onclick="this.src='<?php echo $this->_tpl_vars['weburl']; ?>
/include/kcaptcha/?'+Math.random();" title="点击刷新验证码" style="cursor:pointer" id="checkcode" align="absmiddle"></td>
              </tr>
              <tr>
                <th></th>
                <td><input type="submit" value="立即评估" class="sell_but02">
                  <input type="hidden" name="action" value="sellcar"></td>
              </tr>
            </table>
          </form>
        </div>
      </div>
    </div>
	
    
    <div class="bd">
      <ul>
        <?php $_from = $this->_tpl_vars['filmlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['film_list']):
?>
        <li _src="url(<?php echo $this->_tpl_vars['film_list']['pic']; ?>
)" style="background:#fc5300 center 0 no-repeat;"><a target="_blank" href="<?php echo $this->_tpl_vars['film_list']['url']; ?>
"></a></li>
        <?php endforeach; endif; unset($_from); ?>
      </ul>
    </div>
    <div class="hd">
      <ul>
      </ul>
    </div>
    <span class="prev"></span> <span class="next"></span> </div>
</div>
<script type="text/javascript">
/* 控制左右按钮显示 */
jQuery(".fullSlide").hover(function(){ jQuery(this).find(".prev,.next").stop(true,true).fadeTo("show",0.5) },function(){ jQuery(this).find(".prev,.next").fadeOut() });
/* 调用SuperSlide */
jQuery(".fullSlide").slide({ titCell:".hd ul", mainCell:".bd ul", effect:"fold",  autoPlay:true, autoPage:true, trigger:"click",
	startFun:function(i){
		var curLi = jQuery(".fullSlide .bd li").eq(i); /* 当前大图的li */
		if( !!curLi.attr("_src") ){
			curLi.css("background-image",curLi.attr("_src")).removeAttr("_src") /* 将_src地址赋予li背景，然后删除_src */
		}
	}
});
</script>
<!--server s-->
    <ul class="ser-bey clearfix">
    <li><i class="ser-1"></i>100%个人车源</li>
    <li><i class="ser-2"></i>258项全面检测</li>
    <li><i class="ser-3"></i>14天可退</li>
    <li><i class="ser-4"></i>1年或2万公里质保</li>
	<li><i class="ser-5"></i>重大事故/水淹/火烧</li>
</ul>    <!--server  e -->
<?php if ($this->_tpl_vars['setting']['version'] == 2 || $this->_tpl_vars['setting']['version'] == 3): ?>
<div class="main mt20 clearfix" id="hot_brands">
  <div class="tab_title">
   <ul class="indexche_tab clearfix">
            <li class="js-title" > <a  href="javascript:;"><img src="../skin/img/zhun.png" alt="准新车">准 新 车</a> </li>
            <li class="js-title"> <a  href="javascript:;"><img src="../skin/img/xin.png" alt="急卖车">急 卖 车</a> </li>
            <li class="js-title"> <a  href="javascript:;"><img src="../skin/img/te.png" alt="特价车">特 价 车</a> </li>
            <li class="js-title"> <a  href="javascript:;"><img src="../skin/img/chao.png" alt="超值车">超 值 车</a> </li>
            <li class="js-title"> <a class="current"><img src="../skin/img/bey.png" alt="车碑推荐">车碑推荐</a> </li>
            <li class="js-title"> <a  href="javascript:;"><img src="../skin/img/you.png" alt="优质车">优 质 车</a> </li>
            <li class="js-title"> <a  href="javascript:;"><img src="../skin/img/lian.png" alt="练手车">练 手 车</a> </li>
            <li class="js-title"> <a  href="javascript:;"><img src="../skin/img/suv.png" alt="SUV">S U V</a> </li>
            <li class="js-title"> <a  href="javascript:;"><img src="../skin/img/shang.png" alt="商务车">商 务 车</a> </li>
          </ul>
  </div>
  <div class="cartab_box">
    <div class="box hide">
	      <ul class="bigcarlist clearfix">
      <ul class="bigcarlist clearfix">
  <?php $_from = $this->_tpl_vars['car_list']['newcar']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skey'] => $this->_tpl_vars['carlist']):
?> <li <?php if (( $this->_tpl_vars['skey']+1 ) % 4 <> 0): ?>class="bbg"<?php endif; ?> onmouseover="this.style.backgroundColor='#F4F9FD'" 
 
onmouseout="this.style.backgroundColor='#FFFFFF'"> <a href="<?php echo $this->_tpl_vars['carlist']['p_url']; ?>
" target="_blank"><?php if ($this->_tpl_vars['carlist']['p_mainpic'] <> ""): ?><img src="<?php echo $this->_tpl_vars['carlist']['p_mainpic']; ?>
" alt="<?php echo $this->_tpl_vars['recomcarlist']['p_shortname']; ?>
"/><?php else: ?><img src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/img/car.jpg"/><?php endif; ?></a>
            <p class="carname mt10"><a href="<?php echo $this->_tpl_vars['carlist']['p_url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['carlist']['p_shortname']; ?>
</a><span class="fr pt5 mt15"><?php if ($this->_tpl_vars['carlist']['test'] <> ""): ?><em class="tag-yellow"><?php echo $this->_tpl_vars['carlist']['test']; ?>
</em><?php else: ?> <?php endif; ?></span></p>
            <p class="mt5"><span class="price fb fr"><?php echo $this->_tpl_vars['carlist']['p_price']; ?>
万</span> <?php if ($this->_tpl_vars['carlist']['p_price'] <> "面议"): ?><?php endif; ?>
            <span class="gray01 f12 mt5"><?php echo $this->_tpl_vars['carlist']['p_kilometre']; ?>
万公里&nbsp;&nbsp;<?php echo $this->_tpl_vars['carlist']['p_year']; ?>
年<?php echo $this->_tpl_vars['carlist']['p_month']; ?>
月</span></p>
            </li>
            <?php endforeach; endif; unset($_from); ?>
      </ul>
	  <div class="carmore"><a target="_blank" href="buy.html">查看更多汽车<i></i></a></div>
    </div>
        <div class="box hide">
      <ul class="bigcarlist clearfix">
	  	              <?php $_from = $this->_tpl_vars['car_list']['jscar']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skey'] => $this->_tpl_vars['carlist']):
?> <li <?php if (( $this->_tpl_vars['skey']+1 ) % 4 <> 0): ?>class="bbg"<?php endif; ?>> <a href="<?php echo $this->_tpl_vars['carlist']['p_url']; ?>
" target="_blank"><?php if ($this->_tpl_vars['carlist']['p_mainpic'] <> ""): ?><img src="<?php echo $this->_tpl_vars['carlist']['p_mainpic']; ?>
" alt="<?php echo $this->_tpl_vars['recomcarlist']['p_shortname']; ?>
"/><?php else: ?><img src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/img/car.jpg"/><?php endif; ?></a>
            <p class="carname mt10"><a href="<?php echo $this->_tpl_vars['carlist']['p_url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['carlist']['p_shortname']; ?>
</a><span class="fr pt5 mt15"><?php if ($this->_tpl_vars['carlist']['test'] <> ""): ?><em class="tag-yellow"><?php echo $this->_tpl_vars['carlist']['test']; ?>
</em><?php else: ?> <?php endif; ?></span></p>
            <p class="mt5"><span class="price fb fr"><?php echo $this->_tpl_vars['carlist']['p_price']; ?>
万</span> <?php if ($this->_tpl_vars['carlist']['p_price'] <> "面议"): ?><?php endif; ?>
            <span class="gray01 f12 mt5"><?php echo $this->_tpl_vars['carlist']['p_kilometre']; ?>
万公里&nbsp;&nbsp;<?php echo $this->_tpl_vars['carlist']['p_year']; ?>
年<?php echo $this->_tpl_vars['carlist']['p_month']; ?>
月</span></p>
            </li>
            <?php endforeach; endif; unset($_from); ?>
              </ul>
      <div class="carmore"><a target="_blank" href="/buy.html">查看更多汽车<i></i></a></div>
    </div>
        <div class="box hide">
      <ul class="bigcarlist clearfix">
       	              <?php $_from = $this->_tpl_vars['car_list']['tjcar']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skey'] => $this->_tpl_vars['carlist']):
?> <li <?php if (( $this->_tpl_vars['skey']+1 ) % 4 <> 0): ?>class="bbg"<?php endif; ?>> <a href="<?php echo $this->_tpl_vars['carlist']['p_url']; ?>
" target="_blank"><?php if ($this->_tpl_vars['carlist']['p_mainpic'] <> ""): ?><img src="<?php echo $this->_tpl_vars['carlist']['p_mainpic']; ?>
" alt="<?php echo $this->_tpl_vars['recomcarlist']['p_shortname']; ?>
"/><?php else: ?><img src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/img/car.jpg"/><?php endif; ?></a>
            <p class="carname mt10"><a href="<?php echo $this->_tpl_vars['carlist']['p_url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['carlist']['p_shortname']; ?>
</a><span class="fr pt5 mt15"><?php if ($this->_tpl_vars['carlist']['test'] <> ""): ?><em class="tag-yellow"><?php echo $this->_tpl_vars['carlist']['test']; ?>
</em><?php else: ?> <?php endif; ?></span></p>
            <p class="mt5"><span class="price fb fr"><?php echo $this->_tpl_vars['carlist']['p_price']; ?>
万</span> <?php if ($this->_tpl_vars['carlist']['p_price'] <> "面议"): ?><?php endif; ?>
            <span class="gray01 f12 mt5"><?php echo $this->_tpl_vars['carlist']['p_kilometre']; ?>
万公里&nbsp;&nbsp;<?php echo $this->_tpl_vars['carlist']['p_year']; ?>
年<?php echo $this->_tpl_vars['carlist']['p_month']; ?>
月</span></p>
            </li>
            <?php endforeach; endif; unset($_from); ?>
              </ul>
      <div class="carmore"><a target="_blank" href="/buy.html">查看更多汽车<i></i></a></div>
    </div>
        <div class="box hide">
      <ul class="bigcarlist clearfix">
	              <?php $_from = $this->_tpl_vars['car_list']['czcar']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skey'] => $this->_tpl_vars['carlist']):
?> <li <?php if (( $this->_tpl_vars['skey']+1 ) % 4 <> 0): ?>class="bbg"<?php endif; ?>> <a href="<?php echo $this->_tpl_vars['carlist']['p_url']; ?>
" target="_blank"><?php if ($this->_tpl_vars['carlist']['p_mainpic'] <> ""): ?><img src="<?php echo $this->_tpl_vars['carlist']['p_mainpic']; ?>
" alt="<?php echo $this->_tpl_vars['recomcarlist']['p_shortname']; ?>
"/><?php else: ?><img src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/img/car.jpg"/><?php endif; ?></a>
            <p class="carname mt10"><a href="<?php echo $this->_tpl_vars['carlist']['p_url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['carlist']['p_shortname']; ?>
</a><span class="fr pt5 mt15"><?php if ($this->_tpl_vars['carlist']['test'] <> ""): ?><em class="tag-yellow"><?php echo $this->_tpl_vars['carlist']['test']; ?>
</em><?php else: ?> <?php endif; ?></span></p>
            <p class="mt5"><span class="price fb fr"><?php echo $this->_tpl_vars['carlist']['p_price']; ?>
万</span> <?php if ($this->_tpl_vars['carlist']['p_price'] <> "面议"): ?><?php endif; ?>
            <span class="gray01 f12 mt5"><?php echo $this->_tpl_vars['carlist']['p_kilometre']; ?>
万公里&nbsp;&nbsp;<?php echo $this->_tpl_vars['carlist']['p_year']; ?>
年<?php echo $this->_tpl_vars['carlist']['p_month']; ?>
月</span></p>
            </li>
            <?php endforeach; endif; unset($_from); ?>
              </ul>
      <div class="carmore"><a target="_blank" href="/buy.html">查看更多汽车<i></i></a></div>
    </div>
        <div class="box">
      <ul class="bigcarlist clearfix">
	  	              <?php $_from = $this->_tpl_vars['car_list']['grcar']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skey'] => $this->_tpl_vars['carlist']):
?> <li <?php if (( $this->_tpl_vars['skey']+1 ) % 4 <> 0): ?>class="bbg"<?php endif; ?>> <a href="<?php echo $this->_tpl_vars['carlist']['p_url']; ?>
" target="_blank"><?php if ($this->_tpl_vars['carlist']['p_mainpic'] <> ""): ?><img src="<?php echo $this->_tpl_vars['carlist']['p_mainpic']; ?>
" alt="<?php echo $this->_tpl_vars['recomcarlist']['p_shortname']; ?>
"/><?php else: ?><img src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/img/car.jpg"/><?php endif; ?></a>
            <p class="carname mt10"><a href="<?php echo $this->_tpl_vars['carlist']['p_url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['carlist']['p_shortname']; ?>
</a><span class="fr pt5 mt15"><?php if ($this->_tpl_vars['carlist']['test'] <> ""): ?><em class="tag-yellow"><?php echo $this->_tpl_vars['carlist']['test']; ?>
</em><?php else: ?> <?php endif; ?></span></p>
            <p class="mt5"><span class="price fb fr"><?php echo $this->_tpl_vars['carlist']['p_price']; ?>
万</span> <?php if ($this->_tpl_vars['carlist']['p_price'] <> "面议"): ?><?php endif; ?>
            <span class="gray01 f12 mt5"><?php echo $this->_tpl_vars['carlist']['p_kilometre']; ?>
万公里&nbsp;&nbsp;<?php echo $this->_tpl_vars['carlist']['p_year']; ?>
年<?php echo $this->_tpl_vars['carlist']['p_month']; ?>
月</span></p>
            </li>
            <?php endforeach; endif; unset($_from); ?>
              </ul>
      <div class="carmore"><a target="_blank" href="/buy.html">查看更多汽车<i></i></a></div>
    </div>
        <div class="box hide">
      <ul class="bigcarlist clearfix">
        	              <?php $_from = $this->_tpl_vars['car_list']['yzcar']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skey'] => $this->_tpl_vars['carlist']):
?> <li <?php if (( $this->_tpl_vars['skey']+1 ) % 4 <> 0): ?>class="bbg"<?php endif; ?>> <a href="<?php echo $this->_tpl_vars['carlist']['p_url']; ?>
" target="_blank"><?php if ($this->_tpl_vars['carlist']['p_mainpic'] <> ""): ?><img src="<?php echo $this->_tpl_vars['carlist']['p_mainpic']; ?>
" alt="<?php echo $this->_tpl_vars['recomcarlist']['p_shortname']; ?>
"/><?php else: ?><img src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/img/car.jpg"/><?php endif; ?></a>
            <p class="carname mt10"><a href="<?php echo $this->_tpl_vars['carlist']['p_url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['carlist']['p_shortname']; ?>
</a><span class="fr pt5 mt15"><?php if ($this->_tpl_vars['carlist']['test'] <> ""): ?><em class="tag-yellow"><?php echo $this->_tpl_vars['carlist']['test']; ?>
</em><?php else: ?> <?php endif; ?></span></p>
            <p class="mt5"><span class="price fb fr"><?php echo $this->_tpl_vars['carlist']['p_price']; ?>
万</span> <?php if ($this->_tpl_vars['carlist']['p_price'] <> "面议"): ?><?php endif; ?>
            <span class="gray01 f12 mt5"><?php echo $this->_tpl_vars['carlist']['p_kilometre']; ?>
万公里&nbsp;&nbsp;<?php echo $this->_tpl_vars['carlist']['p_year']; ?>
年<?php echo $this->_tpl_vars['carlist']['p_month']; ?>
月</span></p>
            </li>
            <?php endforeach; endif; unset($_from); ?>
              </ul>
      <div class="carmore"><a target="_blank" href="/buy.html">查看更多汽车<i></i></a></div>
    </div>
        <div class="box hide">
      <ul class="bigcarlist clearfix">
        	  <?php $_from = $this->_tpl_vars['car_list']['lscar']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skey'] => $this->_tpl_vars['carlist']):
?> <li <?php if (( $this->_tpl_vars['skey']+1 ) % 4 <> 0): ?>class="bbg"<?php endif; ?>> <a href="<?php echo $this->_tpl_vars['carlist']['p_url']; ?>
" target="_blank"><?php if ($this->_tpl_vars['carlist']['p_mainpic'] <> ""): ?><img src="<?php echo $this->_tpl_vars['carlist']['p_mainpic']; ?>
" alt="<?php echo $this->_tpl_vars['recomcarlist']['p_shortname']; ?>
"/><?php else: ?><img src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/img/car.jpg"/><?php endif; ?></a>
            <p class="carname mt10"><a href="<?php echo $this->_tpl_vars['carlist']['p_url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['carlist']['p_shortname']; ?>
</a><span class="fr pt5 mt15"><?php if ($this->_tpl_vars['carlist']['test'] <> ""): ?><em class="tag-yellow"><?php echo $this->_tpl_vars['carlist']['test']; ?>
</em><?php else: ?> <?php endif; ?></span></p>
            <p class="mt5"><span class="price fb fr"><?php echo $this->_tpl_vars['carlist']['p_price']; ?>
万</span> <?php if ($this->_tpl_vars['carlist']['p_price'] <> "面议"): ?><?php endif; ?>
            <span class="gray01 f12 mt5"><?php echo $this->_tpl_vars['carlist']['p_kilometre']; ?>
万公里&nbsp;&nbsp;<?php echo $this->_tpl_vars['carlist']['p_year']; ?>
年<?php echo $this->_tpl_vars['carlist']['p_month']; ?>
月</span></p>
            </li>
            <?php endforeach; endif; unset($_from); ?>
              </ul>
      <div class="carmore"><a target="_blank" href="/buy.html">查看更多汽车<i></i></a></div>
    </div>
         <div class="box hide">
      <ul class="bigcarlist clearfix">
        	  <?php $_from = $this->_tpl_vars['car_list']['suvcar']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skey'] => $this->_tpl_vars['carlist']):
?> <li <?php if (( $this->_tpl_vars['skey']+1 ) % 4 <> 0): ?>class="bbg"<?php endif; ?>> <a href="<?php echo $this->_tpl_vars['carlist']['p_url']; ?>
" target="_blank"><?php if ($this->_tpl_vars['carlist']['p_mainpic'] <> ""): ?><img src="<?php echo $this->_tpl_vars['carlist']['p_mainpic']; ?>
" alt="<?php echo $this->_tpl_vars['recomcarlist']['p_shortname']; ?>
"/><?php else: ?><img src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/img/car.jpg"/><?php endif; ?></a>
            <p class="carname mt10"><a href="<?php echo $this->_tpl_vars['carlist']['p_url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['carlist']['p_shortname']; ?>
</a><span class="fr pt5 mt15"><?php if ($this->_tpl_vars['carlist']['test'] <> ""): ?><em class="tag-yellow"><?php echo $this->_tpl_vars['carlist']['test']; ?>
</em><?php else: ?> <?php endif; ?></span></p>
            <p class="mt5"><span class="price fb fr"><?php echo $this->_tpl_vars['carlist']['p_price']; ?>
万</span> <?php if ($this->_tpl_vars['carlist']['p_price'] <> "面议"): ?><?php endif; ?>
            <span class="gray01 f12 mt5"><?php echo $this->_tpl_vars['carlist']['p_kilometre']; ?>
万公里&nbsp;&nbsp;<?php echo $this->_tpl_vars['carlist']['p_year']; ?>
年<?php echo $this->_tpl_vars['carlist']['p_month']; ?>
月</span></p>
            </li>
            <?php endforeach; endif; unset($_from); ?>
              </ul>
      <div class="carmore"><a target="_blank" href="/buy.html">查看更多汽车<i></i></a></div>
    </div>
          <div class="box hide">
      <ul class="bigcarlist clearfix">
        	  <?php $_from = $this->_tpl_vars['car_list']['swcar']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skey'] => $this->_tpl_vars['carlist']):
?> <li <?php if (( $this->_tpl_vars['skey']+1 ) % 4 <> 0): ?>class="bbg"<?php endif; ?>> <a href="<?php echo $this->_tpl_vars['carlist']['p_url']; ?>
" target="_blank"><?php if ($this->_tpl_vars['carlist']['p_mainpic'] <> ""): ?><img src="<?php echo $this->_tpl_vars['carlist']['p_mainpic']; ?>
" alt="<?php echo $this->_tpl_vars['recomcarlist']['p_shortname']; ?>
"/><?php else: ?><img src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/img/car.jpg"/><?php endif; ?></a>
            <p class="carname mt10"><a href="<?php echo $this->_tpl_vars['carlist']['p_url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['carlist']['p_shortname']; ?>
</a><span class="fr pt5 mt15"><?php if ($this->_tpl_vars['carlist']['test'] <> ""): ?><em class="tag-yellow"><?php echo $this->_tpl_vars['carlist']['test']; ?>
</em><?php else: ?> <?php endif; ?></span></p>
            <p class="mt5"><span class="price fb fr"><?php echo $this->_tpl_vars['carlist']['p_price']; ?>
万</span> <?php if ($this->_tpl_vars['carlist']['p_price'] <> "面议"): ?><?php endif; ?>
            <span class="gray01 f12 mt5"><?php echo $this->_tpl_vars['carlist']['p_kilometre']; ?>
万公里&nbsp;&nbsp;<?php echo $this->_tpl_vars['carlist']['p_year']; ?>
年<?php echo $this->_tpl_vars['carlist']['p_month']; ?>
月</span></p>
            </li>
            <?php endforeach; endif; unset($_from); ?>
              </ul>
      <div class="carmore"><a target="_blank" href="/buy.html">查看更多汽车<i></i></a></div>
    </div>
     </div>
</div>

<div class="main mt10">
  <script language="javascript" src="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=ad&id=54"></script>
</div>
</div>
<?php endif; ?>
<div class="main mt15 clearfix">
  <div class="index_left02">
    <ul class="indexnews_tab clearfix">
      <li class="here">小碑说车</li>
      <li>用车护车</li>
      <li>二手车专题</li>
    </ul>
    <div class="indexnews_box">
      <div class="clearfix">
        <div class="box_left"> <?php $_from = $this->_tpl_vars['picnewslist']['1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['picnewslist1']):
?>
          <div class="picnewslist clearfix">
            <div class="img"><a href="<?php echo $this->_tpl_vars['picnewslist1']['n_url']; ?>
" class="f14 fb" title="<?php echo $this->_tpl_vars['picnewslist1']['shorttitle']; ?>
"><img src="<?php echo $this->_tpl_vars['picnewslist1']['n_pic']; ?>
"></a></div>
            <div class="info">
              <p><a href="<?php echo $this->_tpl_vars['picnewslist1']['n_url']; ?>
" class="f14 fb"><?php echo $this->_tpl_vars['picnewslist1']['shorttitle']; ?>
</a></p>
              <p class="mt10 gray"><a href="<?php echo $this->_tpl_vars['picnewslist1']['n_url']; ?>
"><?php echo $this->_tpl_vars['picnewslist1']['shordetail']; ?>
……</a></p>
            </div>
          </div>
          <?php endforeach; endif; unset($_from); ?> </div>
        <div class="box_right">
          <ul class="newslist">
            <?php $_from = $this->_tpl_vars['newslist']['1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['newslist1']):
?>
            <li><a href="<?php echo $this->_tpl_vars['newslist1']['n_url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['newslist1']['shorttitle']; ?>
</a></li>
            <?php endforeach; endif; unset($_from); ?>
          </ul>
        </div>
      </div>
      <div class="hide clearfix">
        <div class="box_left"> <?php $_from = $this->_tpl_vars['picnewslist']['2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['picnewslist2']):
?>
          <div class="picnewslist clearfix">
            <div class="img"><a href="<?php echo $this->_tpl_vars['picnewslist2']['n_url']; ?>
" class="f14 fb" title="<?php echo $this->_tpl_vars['picnewslist2']['shorttitle']; ?>
"><img src="<?php echo $this->_tpl_vars['picnewslist2']['n_pic']; ?>
"></a></div>
            <div class="info">
              <p><a href="<?php echo $this->_tpl_vars['picnewslist2']['n_url']; ?>
" class="f14 fb"><?php echo $this->_tpl_vars['picnewslist2']['shorttitle']; ?>
</a></p>
              <p class="mt10 gray"><a href="<?php echo $this->_tpl_vars['picnewslist2']['n_url']; ?>
"><?php echo $this->_tpl_vars['picnewslist2']['shordetail']; ?>
……</a></p>
            </div>
          </div>
          <?php endforeach; endif; unset($_from); ?> </div>
        <div class="box_right">
          <ul class="newslist">
            <?php $_from = $this->_tpl_vars['newslist']['2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['newslist2']):
?>
            <li><a href="<?php echo $this->_tpl_vars['newslist2']['n_url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['newslist2']['shorttitle']; ?>
</a></li>
            <?php endforeach; endif; unset($_from); ?>
          </ul>
        </div>
      </div>
 
      <div class="hide clearfix">
        <div class="box_left"> <?php $_from = $this->_tpl_vars['picnewslist']['3']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['picnewslist3']):
?>
          <div class="picnewslist clearfix">
            <div class="img"><a href="<?php echo $this->_tpl_vars['picnewslist13']['n_url']; ?>
" class="f14 fb" title="<?php echo $this->_tpl_vars['picnewslist3']['shorttitle']; ?>
"><img src="<?php echo $this->_tpl_vars['picnewslist3']['n_pic']; ?>
"></a></div>
            <div class="info">
              <p><a href="<?php echo $this->_tpl_vars['picnewslist3']['n_url']; ?>
" class="f14 fb"><?php echo $this->_tpl_vars['picnewslist3']['shorttitle']; ?>
</a></p>
              <p class="mt10 gray"><a href="<?php echo $this->_tpl_vars['picnewslist3']['n_url']; ?>
"><?php echo $this->_tpl_vars['picnewslist3']['shordetail']; ?>
……</a></p>
            </div>
          </div>
          <?php endforeach; endif; unset($_from); ?> </div>
        <div class="box_right">
          <ul class="newslist">
            <?php $_from = $this->_tpl_vars['newslist']['3']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['newslist3']):
?>
            <li><a href="<?php echo $this->_tpl_vars['newslist3']['n_url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['newslist3']['shorttitle']; ?>
</a></li>
            <?php endforeach; endif; unset($_from); ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="index_right02">
    <div class="commonbox01">
      <h3><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/news-4.html" class="more">查看更多二手车问答</a><span>二手车问答</span></h3>
      <div class="box">
        <ul class="asklist clearfix">
          <?php $_from = $this->_tpl_vars['newslist']['4']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['newslist4']):
?>
          <li>
            <div class="ask clearfix"><i></i><strong><a href="<?php echo $this->_tpl_vars['newslist4']['n_url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['newslist4']['n_title']; ?>
</a></strong></div>
            <div class="reply clearfix"><i></i>
              <p><a href="<?php echo $this->_tpl_vars['newslist4']['n_url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['newslist4']['shordetail']; ?>
</a></p>
            </div>
          </li>
          <?php endforeach; endif; unset($_from); ?>
        </ul>
      </div>
    </div>
  </div>
</div>


<div class="mt15 clearfix" id="services">
  <!--公司相关-->
  <dl class="d1">
    <dt>售后服务电话</dt>
    <dd class="tel"><?php echo $this->_tpl_vars['setting']['tel']; ?>
</dd>
    <dd class="time">8:00-19:00(工作时间)</dd>
    <dd>客服邮箱:<?php echo $this->_tpl_vars['setting']['email']; ?>
</dd>
  </dl>
  <dl>
    <dt>交易流程</dt>
    <dd> <a target="_blank" href="<?php echo $this->_tpl_vars['weburl']; ?>
flow/buycar.html">买车帮助</a> <a target="_blank" href="<?php echo $this->_tpl_vars['weburl']; ?>
flow/sellcar.html">卖车帮助</a> <a target="_blank" href="<?php echo $this->_tpl_vars['weburl']; ?>
flow/transfer.html">过户帮助</a> </dd>
  </dl>
  <dl>
    <dt>关于我们</dt>
    <dd> <a target="_blank" href="<?php echo $this->_tpl_vars['weburl']; ?>
/about/index.html">关于我们</a><a target="_blank" href="<?php echo $this->_tpl_vars['weburl']; ?>
/about/job.html">人才招聘</a> </dd>
  </dl>
  <dl>
    <dt>客服中心</dt>
    <dd> <a style="text-decoration: none;font-weight: bold;"><?php echo $this->_tpl_vars['setting']['tel']; ?>
</a> <a target="_blank" href="<?php echo $this->_tpl_vars['weburl']; ?>
/about/cooperation.html">网站合作</a> <a target="_blank" href="<?php echo $this->_tpl_vars['weburl']; ?>
/about/contact.html">联系我们</a> </dd>
  </dl>
  <dl>
    <dt>意见反馈</dt>
    <dd> <a id="feedback" href="javascript:;">投诉与建议</a> </dd>
  </dl>
  <dl class="d6">
    <dt>车碑服务</dt>
	<dd> <a target="_blank" href="<?php echo $this->_tpl_vars['weburl']; ?>
/appraise/">车况鉴定</a> </dd>
	<dd> <a target="_blank" href="<?php echo $this->_tpl_vars['weburl']; ?>
/assesscar.html">二手车评估</a> </dd>
  </dl>
</div>
<script language="JavaScript">
$(function() {
	$mark_li = $("div.marklist ul li");
	$mark_li.mouseover(function() {
		$(this).addClass("here").siblings().removeClass("here");
		var index = $mark_li.index(this);
		$("div.marklistbox > div").eq(index).show().siblings().hide();
	});
});
</script>
<div class="main mt15 clearfix">
  <ul class="indexnews_tab clearfix">
    <li class="here">友情链接</li>
    <li>热门车系</li>
  </ul>
  <div class="indexnews_box">
    <div class="p10">
      <ul class="link_list clearfix">
        <?php $_from = $this->_tpl_vars['link_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['linklist']):
?>
        <li><a href="<?php echo $this->_tpl_vars['linklist']['l_url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['linklist']['l_name']; ?>
</a></li>
        <?php endforeach; endif; unset($_from); ?>
      </ul>
    </div>
    <div class="hide p10">
      <div class="marklist">
        <ul class="clearfix">
          <?php $_from = $this->_tpl_vars['hotkeywordlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skey'] => $this->_tpl_vars['hotkeyword']):
?> <li <?php if ($this->_tpl_vars['skey'] == 'A'): ?>class="here"<?php endif; ?>><?php echo $this->_tpl_vars['skey']; ?>

          </li>
          <?php endforeach; endif; unset($_from); ?>
        </ul>
      </div>
      <div class="marklistbox"> <?php $_from = $this->_tpl_vars['hotkeywordlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skey'] => $this->_tpl_vars['hotkeyword']):
?>
        <div class="markbox <?php if ($this->_tpl_vars['skey'] <> 'A'): ?>hide<?php endif; ?>"> <?php $_from = $this->_tpl_vars['hotkeyword']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skey'] => $this->_tpl_vars['hotkey']):
?> <a href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&k=<?php echo $this->_tpl_vars['hotkey']['keyword']; ?>
"><?php echo $this->_tpl_vars['hotkey']['keywords']; ?>
</a>&nbsp;&nbsp;|&nbsp;&nbsp;
          <?php endforeach; endif; unset($_from); ?> </div>
        <?php endforeach; endif; unset($_from); ?> </div>
    </div>
  </div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "default/".($this->_tpl_vars['setting']['templates'])."/foot.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</body>
</html>