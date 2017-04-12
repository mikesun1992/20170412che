<?php
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>网站后台管理</title>
<meta name="description" content="网站后台">
<link href="skin/css/metinfo.css" rel="stylesheet" />
</head>
<script type="text/javascript" src="skin/js/jquery1.7.2.js"></script>
<script type="text/javascript" src="skin/js/cookie.js"></script>
<script type="text/javascript">

function kzqie(my){
	if(my.text()=="宽版"){
		$("#metcmsbox").css("width","100%");
		$.ajax({url : "include/config.php?lang=cn&met_kzqie=1",type: "POST"});
		my.attr("title","切换到窄版");
		my.text("窄版");
	}else{
		$("#metcmsbox").css("width","1000px");
		$.ajax({url : "include/config.php?lang=cn&met_kzqie=0",type: "POST"});
		my.attr("title","宽版");
		my.text("宽版");
	}
}
    function exit(){
        if(confirm("您确定要安全退出本系统吗？")){
            window.location.href="admins_login.php?m=login&a=logout";
        }
     }
</script>
<body id="indexid">
<div id="metcmsbox">
  <div id="top">
    <div class="floatr">
      <div class="top-r-box">
        <div class="top-right-boxr">
          <div class="top-r-t"> 您好 <a href="#" id="mydata" title="编辑 admin 的个人资料" class="tui" style="text-decoration:underline;"> 管理员</a><span>-</span><a target="_top" href="javascript:void(0);" onclick="exit();" id="outhome" title="退出" class="tui">退出</a><span>|</span><a href="javascript:;" onclick="kzqie($(this))" title="切换到窄版">窄版</a> </div>
          <div class="langs">
            <div class="langtxt">
			<div style="float:left;"><a style="color:#fff;" href="admins_login.php?m=cache&a=del">清除缓存</a> </div>
              <div class="langkkkbox">
                <div id="langcig"> <span id="langcion" title="cn">简体中文</span> <span class="langqie">语言设置</span> </div>
                <div class="langlist shadow" style="display:none;"></div>
              </div>
              <div class="webyy">网站语言：</div>
            </div>
          </div>
        </div>
        <div class="nav">
          <ul id="topnav">
            <li id="metnav_1" class="list"> <a href="javascript:;" id="nav_1" class="onnav" hidefocus="true"> <span class="c1"></span> 车源信息管理 </a> </li>
            <li id="metnav_2" class="list"> <a href="javascript:;" id="nav_2"  hidefocus="true"> <span class="c2"></span> 新闻资讯管理 </a> </li>
            <li id="metnav_3" class="list"> <a href="javascript:;" id="nav_3"  hidefocus="true"> <span class="c3"></span> 会员信息管理 </a> </li>
            <li id="metnav_4" class="list"> <a href="javascript:;" id="nav_4"  hidefocus="true"> <span class="c4"></span> 静态页面生成 </a> </li>
            <li id="metnav_5" class="list"> <a href="javascript:;" id="nav_5"  hidefocus="true"> <span class="c5"></span> 其他扩展模块 </a> </li>
            <li id="metnav_6" class="list"> <a href="javascript:;" id="nav_6"  hidefocus="true"> <span class="c6"></span> 检测调度 </a> </li>
            <li id="metnav_7" class="list"> <a href="javascript:;" id="nav_7"  hidefocus="true"> <span class="c7"></span> 系统设置 </a> </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="floatl"> <a href="#" hidefocus="true" id="met_logo"><img src="skin/images/logoen.gif" alt="MetInfo企业网站管理系统" title="MetInfo企业网站管理系统" /></a> </div>
  </div>
  <div id="content">
    <div class="floatl" id="metleft">
      <div class="fast"> <a  href="/" id="qthome" title="网站首页" style="color:#FF0000;"  target="_blank">网站首页</a> <span></span> <a href="admins_login.php?m=main" id="hthome" title="后台首页" style="color:#006600;">后台首页</a> </div>
			 <div class="nav_list" id="leftnav">
        <ul  id="ul_1">
          <li ><a href="?m=brand&a=list" target="main" id="nav_1_8" class="on" title="品牌管理" hidefocus="true">品牌管理</a></li>
          <li ><a href="?m=carmodel&a=list" target="main" target="main" id="nav_1_9" title="车型管理" hidefocus="true">车型管理</a></li>
          <li ><a href="?m=model&a=list" target="main" id="nav_1_10" title="级别管理" hidefocus="true">级别管理</a></li>
          <li ><a href="?m=cars&a=list&clear=1" target="main" id="nav_1_11" title="车源列表" hidefocus="true">车源列表</a></li>
          <li ><a href="?m=assesscars&a=list" target="main" id="nav_1_12" title="车源评估" hidefocus="true">车源评估</a></li>
          <li ><a href="?m=bargain&a=list" target="main" id="nav_1_13" title="砍价管理" hidefocus="true">砍价管理</a></li>
          <li ><a href="?m=buycars&a=list" target="main" id="nav_1_14" title="求购信息" hidefocus="true">求购信息</a></li>
                    <li ><a href="?m=subscribe&a=list" target="main" id="nav_1_13" title="预约管理" hidefocus="true">预约管理</a></li>
          <li ><a href="<?php echo WEB_PATH?>?m=feedback&a=list&typeid=1" target="main" id="nav_1_15" title="评论管理" hidefocus="true">评论管理</a></li>
  
        </ul>
        <ul style="display:none;" id="ul_2">
          <li ><a href="?m=news_category&a=list" target="main" id="nav_2_18" title="分类管理" hidefocus="true">分类管理</a></li>
          <li ><a href="?m=news&a=list" target="main" id="nav_2_19" title="新闻管理" hidefocus="true">新闻管理</a></li>
        </ul>
        <ul style="display:none;" id="ul_3">
          <li ><a href="?m=member&a=list" target="main" id="nav_3_25" title="会员管理" hidefocus="true">会员管理</a></li>
          <li ><a href="?m=dealer_category&a=list" target="main" id="nav_3_26" title="检测师类别管理" hidefocus="true">商家类别管理</a></li>
          <li ><a href="?m=jianceshi&a=list" target="main" id="nav_3_26" title="检测师管理" hidefocus="true">检测师管理</a></li>
          <li ><a href="?m=jifengz&a=list" target="main" id="nav_3_26" title="积分获取规则" hidefocus="true">积分获取规则</a></li>
          <li ><a href="<?php echo WEB_PATH?>?m=jifenjl&a=list" target="main" id="nav_3_26" title="积分获取记录" hidefocus="true">积分获取记录</a></li>
        </ul>
        <ul style="display:none;" id="ul_4">
          <li ><a href="?m=create_html&a=qiugou" target="main" id="nav_4_29" title="生成求购" hidefocus="true">生成求购</a></li>
          <li ><a href="?m=create_html&a=news" target="main" id="nav_4_30" title="更新新闻" hidefocus="true">更新新闻</a></li>
          <li ><a href="?m=create_html&a=page" target="main" id="nav_4_31" title="更新单页" hidefocus="true">更新单页</a></li>
          <li ><a href="?m=create_html&a=cars" target="main" id="nav_4_32" title="更新车源" hidefocus="true">更新车源</a></li>
        </ul>
        <ul style="display:none;" id="ul_5">
          <li ><a href="?m=channel&a=list" target="main" id="nav_5_34" title="栏目管理" hidefocus="true">栏目管理</a></li>
          <li ><a href="?m=page&a=list" target="main" id="nav_5_35" title="单页管理" hidefocus="true">单页管理</a></li>
          <li ><a href="?m=keywords&a=list" target="main" id="nav_5_36" title="关键词管理" hidefocus="true">关键词管理</a></li>
          <li ><a href="<?php echo WEB_PATH?>?m=ad&a=list" target="main" id="nav_5_37" title="广告管理" hidefocus="true">广告管理</a></li>
          <li ><a href="?m=filmstrip&a=list&typeid=1" target="main" id="nav_5_38" title="首页轮播广告" hidefocus="true">首页轮播广告</a></li>
          <li ><a href="?m=filmstrip&a=list&typeid=3" target="main" id="nav_5_39" title="活动首页广告" hidefocus="true">活动首页广告</a></li>
          <li ><a href="?m=filmstrip&a=list&typeid=2" target="main" id="nav_5_55" title="手机版轮播广告" hidefocus="true">手机版轮播广告</a></li>
		  <li ><a href="?m=flink&a=list" target="main" id="nav_5_56" title="友情链接" hidefocus="true">友情链接</a></li>
        </ul>
        <ul style="display:none;" id="ul_6">
          <li ><a href="admins_login.php?m=jianceshi&a=list" target="main" id="nav_6_44" title="检测调度" hidefocus="true">检测调度</a></li>
        </ul>
        <ul style="display:none;" id="ul_7">
          <li ><a href="?m=selfdefine&a=list" target="main" id="nav_7_45" title="二手车自定义参数" hidefocus="true">二手车自定义参数</a></li>
          <li ><a href="?m=settings&a=web" target="main" id="nav_7_49" title="系统基本设置" hidefocus="true">系统基本设置</a></li>
          <li ><a href="?m=settings&a=car" target="main" id="nav_7_46" title="车源相关设置" hidefocus="true">车源相关设置</a></li>
          <li ><a href="?m=settings&a=contact" target="main" id="nav_7_47" title="联系方式设置" hidefocus="true">联系方式设置</a></li>
          <li ><a href="?m=admingroup&a=list" target="main" id="nav_7_48" title="管理员用户组" hidefocus="true">管理员用户组</a></li>
		  <li ><a href="?m=admin&a=list" target="main" id="nav_7_48" title="管理员选项" hidefocus="true">管理员选项</a></li>
        </ul>
      </div>	
      <div class="claer"></div>
      <div class="left_footer">程序版本：v1.0<span class="none">&copy;2008-2017 &nbsp;</span></div>
    </div>
    <div class="floatr" id="metright">
      <div class="iframe">
        <div class="min">
         <iframe id="main" frameborder="0" name="main" src="admins_login.php?m=index" width="100%"></iframe>
        </div>
      </div>
    </div>
    <div class="clear"></div>
  </div>
</div>
<script src="skin/js/metinfo.js" type="text/javascript"></script>
</body>
</html>

