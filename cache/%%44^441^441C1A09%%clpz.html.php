<?php /* Smarty version 2.6.18, created on 2017-04-05 17:01:25
         compiled from jcdmin/clpz.html */ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>车辆配置</title>
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
       <li><a class="active">车辆配置</a></li>
      </ul>
      <!--tabCont-->
      <div class="admin_tab_cont" style="display:block;">
      <!--左右分栏：左侧栏目-->
          <form method="post" action="jcdmin_login.php?m=clpz">
          <table class="table">
        <tr>
          <td><ul class="ulColumn2">
     <li>
    <span class="item_name"   >遥控钥匙：</span>
         <label    for="yk_keys_a">有</label>&nbsp;&nbsp;<input id="yk_keys_a" type="radio" value="1" name="yk_keys"  checked />&nbsp;&nbsp;
         <label    for="yk_keys_b">无</label>&nbsp;&nbsp;<input id="yk_keys_b" type="radio" value="2" name="yk_keys" />
     </li>
	  <li>
    <span class="item_name"   >千 斤 顶：</span>
          <label    for="qjd_a">有</label>&nbsp;&nbsp;<input id="qjd_a" type="radio" value="1" name="qjd"  checked />&nbsp;&nbsp;
          <label    for="qjd_b">无</label>&nbsp;&nbsp;<input id="qjd_b" type="radio" value="2" name="qjd" />
      </li>
	  <li>
    <span class="item_name"   >随车工具：</span>
          <label    for="tool_a">有</label>&nbsp;&nbsp;<input id="tool_a" type="radio" value="1" name="tool"  checked />&nbsp;&nbsp;
          <label    for="tool_b">无</label>&nbsp;&nbsp;<input id="tool_b" type="radio" value="2" name="tool" /></li>
	  <li>
    <span class="item_name"   >三 角 牌：</span>
          <label    for="sjp_a">有</label>&nbsp;&nbsp;<input id="sjp_a" type="radio" value="1" name="sjp"  checked />&nbsp;&nbsp;
          <label    for="sjp_b">无</label>&nbsp;&nbsp;<input id="sjp_b" type="radio" value="2" name="sjp" /></li>
	  <li>
    <span class="item_name"   >灭 火 器：</span>
          <label    for="mhq_a">有</label>&nbsp;&nbsp;<input id="mhq_a" type="radio" value="1" name="mhq"  checked />&nbsp;&nbsp;
          <label    for="mhq_b">无</label>&nbsp;&nbsp;<input id="mhq_b" type="radio" value="2" name="mhq" /></li>
	  <li>
    <span class="item_name"   >备   胎：</span>
          <label    for="bt_a">有</label>&nbsp;&nbsp;<input id="bt_a" type="radio" value="1" name="bt"  checked />&nbsp;&nbsp;
          <label    for="bt_b">无</label>&nbsp;&nbsp;<input id="bt_b" type="radio" value="2" name="bt" /></li>
            <label    class="single_selection"></label>
        <li>  <span class="item_name"   ></span>
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