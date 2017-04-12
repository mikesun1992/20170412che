<?php /* Smarty version 2.6.18, created on 2017-04-05 17:01:23
         compiled from jcdmin/nsjc.html */ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>内饰检测</title>
<meta name="author" content="DeathGhost" />
<link rel="stylesheet" type="text/css" href="../templates/jcdmin/css/style.css" />
<!--[if lt IE 9]>
<script src="../templates/jcdmin/js/html5.js"></script>
<![endif]-->
<script src="../templates/jcdmin/js/jquery.js"></script>
<script src="../templates/jcdmin/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script>
	(function($){
		$(window).load(function(){
			
			$("a[rel='load-content']").click(function(e){
				e.preventDefault();
				var url=$(this).attr("href");
				$.get(url,function(data){
					$(".content .mCSB_container").append(data); //load new content inside .mCSB_container
					//scroll-to appended content 
					$(".content").mCustomScrollbar("scrollTo","h2:last");
				});
			});
			
			$(".content").delegate("a[href='top']","click",function(e){
				e.preventDefault();
				$(".content").mCustomScrollbar("scrollTo",$(this).attr("href"));
			});
			
		});
	})(jQuery);
</script>
</head>
<body>
<!--header-->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "jcdmin/jcdheader.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php echo '<?php'; ?>
 include('');<?php echo '?>'; ?>

<!--aside nav-->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "jcdmin/jcdmenu.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<section class="rt_wrap content mCustomScrollbar">
<div class="rt_content">
   <section>
  <!--tabStyle-->
         <script>
     $(document).ready(function(){
		 //tab
		 $(".admin_tab li a").click(function(){
		  var liindex = $(".admin_tab li a").index(this);
		  $(this).addClass("active").parent().siblings().find("a").removeClass("active");
		  $(".admin_tab_cont").eq(liindex).fadeIn(150).siblings(".admin_tab_cont").hide();
		 });
		 });
         </script>
  </section>
      <ul class="admin_tab">
       <li><a class="active">内饰检测</a></li>
      </ul>
      <!--tabCont-->
      <div class="admin_tab_cont" style="display:block;">
      <!--左右分栏：左侧栏目-->
          <form method="post" action="jcdmin_login.php?m=nsjc">
      <table class="table">
        <tr>
          <td><ul class="ulColumn2">
		   <li>
               <span class="item_name" >方向盘磨损：</span>
               <label for="fxp_a" >正常</label>&nbsp;&nbsp;<input id="fxp_a" type="radio" value="1" name="fxp"  checked />&nbsp;&nbsp;
               <label for="fxp_b" >轻微</label>&nbsp;&nbsp;<input id="fxp_b" type="radio" value="2" name="fxp" />&nbsp;&nbsp;
               <label for="fxp_c" >严重</label>&nbsp;&nbsp;<input id="fxp_c" type="radio" value="3" name="fxp" />
           </li>
	   <li>
           <span class="item_name" >中控台磨损：</span>
           <label for="zkt_a" >正常</label>&nbsp;&nbsp;<input id="zkt_a" type="radio" value="1" name="zkt"  checked />&nbsp;&nbsp;
           <label for="zkt_b" >轻微</label>&nbsp;&nbsp;<input id="zkt_b" type="radio" value="2" name="zkt" />&nbsp;&nbsp;
           <label for="zkt_c" >严重</label>&nbsp;&nbsp;<input id="zkt_c" type="radio" value="3" name="zkt" />

       </li>
	   <li>
           <span class="item_name" >主驾车门内饰板磨损：</span>
           <label for="zjcm_a" >正常</label>&nbsp;&nbsp;<input id="zjcm_a" type="radio" value="1" name="zjcm"  checked />&nbsp;&nbsp;
           <label for="zjcm_b" >轻微</label>&nbsp;&nbsp;<input id="zjcm_b" type="radio" value="2" name="zjcm" />&nbsp;&nbsp;
           <label for="zjcm_c" >严重</label>&nbsp;&nbsp;<input id="zjcm_c" type="radio" value="3" name="zjcm" />
       </li>
	   <li>
           <span class="item_name" >副驾车门内饰板磨损：</span>
           <label for="fjcm_a" >正常</label>&nbsp;&nbsp;<input id="fjcm_a" type="radio" value="1" name="fjcm"  checked />&nbsp;&nbsp;
           <label for="fjcm_b" >轻微</label>&nbsp;&nbsp;<input id="fjcm_b" type="radio" value="2" name="fjcm" />&nbsp;&nbsp;
           <label for="fjcm_c" >严重</label>&nbsp;&nbsp;<input id="fjcm_c" type="radio" value="3" name="fjcm" />
       </li>
	   <li>
           <span class="item_name" >后排左侧车门内饰板磨损：</span>
           <label for="hzcm_a" >正常</label>&nbsp;&nbsp;<input id="hzcm_a" type="radio" value="1" name="hzcm"  checked />&nbsp;&nbsp;
           <label for="hzcm_b" >轻微</label>&nbsp;&nbsp;<input id="hzcm_b" type="radio" value="2" name="hzcm" />&nbsp;&nbsp;
           <label for="hzcm_c" >严重</label>&nbsp;&nbsp;<input id="hzcm_c" type="radio" value="3" name="hzcm" />
       </li>
	   <li>
           <span class="item_name" >后排右侧车门内饰板磨损：</span>
           <label for="hycm_a" >正常</label>&nbsp;&nbsp;<input id="hycm_a" type="radio" value="1" name="hycm"  checked />&nbsp;&nbsp;
           <label for="hycm_b" >轻微</label>&nbsp;&nbsp;<input id="hycm_b" type="radio" value="2" name="hycm" />&nbsp;&nbsp;
           <label for="hycm_c" >严重</label>&nbsp;&nbsp;<input id="hycm_c" type="radio" value="3" name="hycm" />
       </li>
	   <li>
           <span class="item_name" >主驾座椅磨损：</span>
           <label for="zjzy_a" >正常</label>&nbsp;&nbsp;<input id="zjzy_a" type="radio" value="1" name="zjzy"  checked />&nbsp;&nbsp;
           <label for="zjzy_b" >轻微</label>&nbsp;&nbsp;<input id="zjzy_b" type="radio" value="2" name="zjzy" />&nbsp;&nbsp;
           <label for="zjzy_c" >严重</label>&nbsp;&nbsp;<input id="zjzy_c" type="radio" value="3" name="zjzy" />
       </li>
	   <li>
           <span class="item_name" >副驾座椅磨损：</span>
           <label for="fjzy_a" >正常</label>&nbsp;&nbsp;<input id="fjzy_a" type="radio" value="1" name="fjzy"  checked />&nbsp;&nbsp;
           <label for="fjzy_b" >轻微</label>&nbsp;&nbsp;<input id="fjzy_b" type="radio" value="2" name="fjzy" />&nbsp;&nbsp;
           <label for="fjzy_c" >严重</label>&nbsp;&nbsp;<input id="fjzy_c" type="radio" value="3" name="fjzy" />
       </li>
	   <li>
           <span class="item_name" >后排座椅磨损：</span>
           <label for="hzy_a" >正常</label>&nbsp;&nbsp;<input id="hzy_a" type="radio" value="1" name="hzy"  checked />&nbsp;&nbsp;
           <label for="hzy_b" >轻微</label>&nbsp;&nbsp;<input id="hzy_b" type="radio" value="2" name="hzy" />&nbsp;&nbsp;
           <label for="hzy_c" >严重</label>&nbsp;&nbsp;<input id="hzy_c" type="radio" value="3" name="hzy" />
       </li>
	   <li>
           <span class="item_name" >天窗开启状态：</span>
           <label for="tc_a" >正常</label>&nbsp;&nbsp;<input id="tc_a" type="radio" value="1" name="tc"  checked />&nbsp;&nbsp;
           <label for="tc_b" >不正常</label>&nbsp;&nbsp;<input id="tc_b" type="radio" value="2" name="tc" />&nbsp;&nbsp;
           <label for="tc_c" >无</label>&nbsp;&nbsp;<input id="tc_c" type="radio" value="3" name="tc" />

       </li>
              <li>
                  <span class="item_name" >玻璃升降：</span>
                  <label for="blsj_a" >正常</label>&nbsp;&nbsp;<input id="blsj_a" type="radio" value="1" name="blsj"  checked />&nbsp;&nbsp;
                  <label for="blsj_b" >不正常</label>&nbsp;&nbsp;<input id="blsj_b" type="radio" value="2" name="blsj" />&nbsp;&nbsp;

              </li>
              <li>
                  <span class="item_name" >评估价格：</span>
                  <input name="price" type="text" class="textbox"/> (万/元)
              </li>
              <li>
       <span class="item_name" >是否推荐：</span>
                  <label for="tui_a" >推荐</label>&nbsp;&nbsp;<input id="tui_a" type="radio" value="1" name="tui"  checked />&nbsp;&nbsp;
                  <label for="tui_b" >不推荐</label>&nbsp;&nbsp;<input id="tui_b" type="radio" value="2" name="tui" />
           </li>
              <li>
                  <span class="item_name" >加装设备信息：</span><br/>
                  <textarea placeholder="加装设备信息" name="jzsb_msg" class="textarea" style="width:500px;height:100px;"></textarea>
              </li>
              <li>
                <span class="item_name" >检测师点评：</span><br/>
                <textarea placeholder="检测师评价" name="pingjia" class="textarea" style="width:500px;height:100px;"></textarea>
              </li>
            <label class="single_selection"></label>
        <li>  <span class="item_name" style="width:200px;"></span>
        <input type="submit" class="link_btn"/>
       </li>
 
          </ul></td></tr>
      </table>
              </form>
</div>
      <div class="admin_tab_cont">tabContent02，内容根据具体数据二次单独定义，公共样式单独调用</div>
      <div class="admin_tab_cont">可追加</div>
 </div>
    </section>
</body>
</html>