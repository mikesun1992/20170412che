<?php /* Smarty version 2.6.18, created on 2017-04-05 17:01:27
         compiled from jcdmin/fdj.html */ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>发动机检测</title>
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
    <style>

    </style>
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
       <li><a class="active">发动机检测</a></li>
      </ul>
      <!--tabCont-->
      <div class="admin_tab_cont" style="display:block;">
      <!--左右分栏：左侧栏目-->
          <form method="post" action="jcdmin_login.php?m=fdj">
          <table class="table">
        <tr>
          <td><ul class="ulColumn2">
  <li>
    <span class="item_name"  >是否有拆卸痕迹：</span>
      <label   for="cx_a">是</label>&nbsp;&nbsp;<input id="cx_a" type="radio" value="1" name="fdj_cx">&nbsp;&nbsp;
      <label   for="cx_b">否</label>&nbsp;&nbsp;<input id="cx_b" type="radio" value="2" checked name="fdj_cx">

  </li>
          <li>
    <span class="item_name"  >舱线束是否老化：</span>
              <label   for="lh_a">是</label>&nbsp;&nbsp;<input id="lh_a" type="radio" value="1" name="fdj_lh">&nbsp;&nbsp;
              <label   for="lh_b">否</label>&nbsp;&nbsp;<input id="lh_b" type="radio" value="2" checked name="fdj_lh">
          </li>
		    <li>
    <span class="item_name"  >传感器外观损坏：</span>
                <label   for="cgq_a">是</label>&nbsp;&nbsp;<input id="cgq_a" type="radio" value="1" name="cgq_sh">&nbsp;&nbsp;
                <label   for="cgq_b">否</label>&nbsp;&nbsp;<input id="cgq_b" type="radio" value="2" checked name="cgq_sh">

            </li>
		   <li>
    <span class="item_name"  >缸线有无破损：</span>
               <label   for="gx_a">是</label>&nbsp;&nbsp;<input id="gx_a" type="radio" value="1" name="gx_ps">&nbsp;&nbsp;
               <label   for="gx_b">否</label>&nbsp;&nbsp;<input id="gx_b" type="radio" value="2" checked name="gx_ps">

           </li>
			   <li>
    <span class="item_name"  >缸盖漏油渗油：</span>
                   <label   for="g_a">是</label>&nbsp;&nbsp;<input id="g_a" type="radio" value="1" name="fdjg_ly">&nbsp;&nbsp;
                   <label   for="g_b">否</label>&nbsp;&nbsp;<input id="g_b" type="radio" value="2" checked name="fdjg_ly">
               </li>
	<li>
    <span class="item_name"  >水箱是否破损：</span>
        <label   for="sx_a">是</label>&nbsp;&nbsp;<input id="sx_a" type="radio" value="1" name="sx_ps">&nbsp;&nbsp;
        <label   for="sx_b">否</label>&nbsp;&nbsp;<input id="sx_b" type="radio" value="2" checked name="sx_ps">
    </li>
	<li>
    <span class="item_name"  >机油底壳：</span>
        <label   for="jydk_a">不正常</label>&nbsp;&nbsp;<input id="jydk_a" type="radio" value="1" name="jydk">&nbsp;&nbsp;
        <label   for="jydk_b">正常</label>&nbsp;&nbsp;<input id="jydk_b" type="radio" value="2" checked name="jydk">
    </li>
<li>
    <span class="item_name"  >机油液面：</span>
    <label   for="jyym_a">不正常</label>&nbsp;&nbsp;<input id="jyym_a" type="radio" value="1" name="jyym">&nbsp;&nbsp;
    <label   for="jyym_b">正常</label>&nbsp;&nbsp;<input id="jyym_b" type="radio" value="2" checked name="jyym">
</li>
<li>
    <span class="item_name"  >防冻液液面：</span>
    <label   for="fdym_a">不正常</label>&nbsp;&nbsp;<input id="fdym_a" type="radio" value="1" name="fdym">&nbsp;&nbsp;
    <label   for="fdym_b">正常</label>&nbsp;&nbsp;<input id="fdym_b" type="radio" value="2" checked name="fdym">
</li>
<li>
    <span class="item_name"  >助力泵液面：</span>
    <label   for="zlbym_a">不正常</label>&nbsp;&nbsp;<input id="zlbym_a" type="radio" value="1" name="zlbym">&nbsp;&nbsp;
    <label   for="zlbym_b">正常</label>&nbsp;&nbsp;<input id="zlbym_b" type="radio" value="2" checked name="zlbym">&nbsp;&nbsp;
    <label   for="zlbym_c">无</label>&nbsp;&nbsp;<input id="zlbym_c" type="radio" value="3"  name="zlbym">
</li>
<li>
    <span class="item_name"  >变速箱底壳：</span>
    <label   for="bsxdk_a">不正常</label>&nbsp;&nbsp;<input id="bsxdk_a" type="radio" value="1" name="bsxdk">&nbsp;&nbsp;
    <label   for="bsxdk_b">正常</label>&nbsp;&nbsp;<input id="bsxdk_b" type="radio" value="2" checked name="bsxdk">
</li>
              <li>
                  <span class="item_name"  >空调压缩机：</span>
                  <label   for="ktysj_a">不正常</label>&nbsp;&nbsp;<input id="ktysj_a" type="radio" value="1"  name="ktysj">&nbsp;&nbsp;
                  <label   for="ktysj_b">正常</label>&nbsp;&nbsp;<input id="ktysj_b" type="radio" value="2" checked name="ktysj">&nbsp;&nbsp;
                  <label   for="ktysj_c">无</label>&nbsp;&nbsp;<input id="ktysj_c" type="radio" value="3"  name="ktysj">
              </li>
              <li>
                  <span class="item_name"  >制动液液面：</span>
                  <label   for="zdy_a">不正常</label>&nbsp;&nbsp;<input id="zdy_a" type="radio" value="1"  name="zdy">&nbsp;&nbsp;
                  <label   for="zdy_b">正常</label>&nbsp;&nbsp;<input id="zdy_b" type="radio" value="2" checked name="zdy">
              </li>
              <li>
                  <span class="item_name"  >转向助力泵：</span>
                  <label   for="zxzlb_a">不正常</label>&nbsp;&nbsp;<input id="zxzlb_a" type="radio" value="1"  name="zxzlb">&nbsp;&nbsp;
                  <label   for="zxzlb_b">正常</label>&nbsp;&nbsp;<input id="zxzlb_b" type="radio" value="2" checked name="zxzlb">&nbsp;&nbsp;
                  <label   for="zxzlb_c">无</label>&nbsp;&nbsp;<input id="zxzlb_c" type="radio" value="3"  name="zxzlb">&nbsp;&nbsp;
                  <label   for="zxzlb_d">电子助力</label>&nbsp;&nbsp;<input id="zxzlb_d" type="radio" value="4"  name="zxzlb">
              </li>
<li>
    <span class="item_name"  >螺丝出厂状态：</span>
    <label   for="ls_a">是</label>&nbsp;&nbsp;<input id="ls_a" type="radio" value="1" checked name="ls">&nbsp;&nbsp;
    <label   for="ls_b">否</label>&nbsp;&nbsp;<input id="ls_b" type="radio" value="2" name="ls">
</li>
              <li>
                  <span class="item_name" >发动机备注信息：</span><br/>
                  <textarea  name="fdj_msg" class="textarea" style="width:500px;height:100px;"></textarea>
              </li>

	   <label   class="single_selection"></label>
        <li>  <span class="item_name"  ></span>
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