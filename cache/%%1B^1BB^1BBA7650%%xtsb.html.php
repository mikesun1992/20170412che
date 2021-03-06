<?php /* Smarty version 2.6.18, created on 2017-04-05 17:01:25
         compiled from jcdmin/xtsb.html */ ?>
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
       <li><a class="active">系统设备</a></li>
      </ul>
      <!--tabCont-->
      <div class="admin_tab_cont" style="display:block;">
      <!--左右分栏：左侧栏目-->
          <form method="post" action="jcdmin_login.php?m=xtsb">
          <table class="table">
        <tr>
          <td><ul class="ulColumn2">
              <h1>安全系统检测</h1>
                <li>
                <span class="item_name"  >变速箱系统警示灯：</span>
                    <label   for="bsxd_a">正常</label>&nbsp;&nbsp;<input id="bsxd_a" type="radio" value="1" checked name="bsxd">&nbsp;&nbsp;
                    <label   for="bsxd_b">不正常</label>&nbsp;&nbsp;<input id="bsxd_b" type="radio" value="2" name="bsxd">
                </li>

              <li>
                  <span class="item_name"  >制动系统警示灯：</span>
                  <label   for="zdd_a">正常</label>&nbsp;&nbsp;<input id="zdd_a" type="radio" value="1" checked name="zdd">&nbsp;&nbsp;
                  <label   for="zdd_b">不正常</label>&nbsp;&nbsp;<input id="zdd_b" type="radio" value="2" name="zdd">
              </li>

              <li>
                  <span class="item_name"  >ABS系统警示灯：</span>
                  <label   for="absd_a">正常</label>&nbsp;&nbsp;<input id="absd_a" type="radio" value="1" checked name="absd">&nbsp;&nbsp;
                  <label   for="absd_b">不正常</label>&nbsp;&nbsp;<input id="absd_b" type="radio" value="2" name="absd">&nbsp;&nbsp;
                  <label   for="absd_c">无</label>&nbsp;&nbsp;<input id="absd_c" type="radio" value="3" name="absd">
              </li>

              <li>
                  <span class="item_name"  >安全气囊系统：</span>
                  <label   for="aqql_a">正常</label>&nbsp;&nbsp;<input id="aqql_a" type="radio" value="1" checked name="aqql">&nbsp;&nbsp;
                  <label   for="aqql_b">不正常</label>&nbsp;&nbsp;<input id="aqql_b" type="radio" value="2" name="aqql">&nbsp;&nbsp;
                  <label   for="aqql_c">无</label>&nbsp;&nbsp;<input id="aqql_c" type="radio" value="3" name="aqql">
              </li>

              <li>
                  <span class="item_name"  >发动机系统警示灯：</span>
                  <label   for="fdjd_a">正常</label>&nbsp;&nbsp;<input id="fdjd_a" type="radio" value="1" checked name="fdjd">&nbsp;&nbsp;
                  <label   for="fdjd_b">不正常</label>&nbsp;&nbsp;<input id="fdjd_b" type="radio" value="2" name="fdjd">
              </li>


              <h1>指示灯系统检测</h1>
              <li>
                  <span class="item_name"  >前雾灯：</span>
                  <label   for="qwd_a">正常</label>&nbsp;&nbsp;<input id="qwd_a" type="radio" value="1" checked name="qwd">&nbsp;&nbsp;
                  <label   for="qwd_b">不正常</label>&nbsp;&nbsp;<input id="qwd_b" type="radio" value="2" name="qwd">
                  <label   for="qwd_c">无</label>&nbsp;&nbsp;<input id="qwd_c" type="radio" value="3" name="qwd">
              </li>
              <li>
                  <span class="item_name"  >后雾灯：</span>
                  <label   for="hwd_a">正常</label>&nbsp;&nbsp;<input id="hwd_a" type="radio" value="1" checked name="hwd">&nbsp;&nbsp;
                  <label   for="hwd_b">不正常</label>&nbsp;&nbsp;<input id="hwd_b" type="radio" value="2" name="hwd">
                  <label   for="hwd_c">无</label>&nbsp;&nbsp;<input id="hwd_c" type="radio" value="3" name="hwd">
              </li>
              <li>
                  <span class="item_name"  >近光灯：</span>
                  <label   for="jgd_a">正常</label>&nbsp;&nbsp;<input id="jgd_a" type="radio" value="1" checked name="jgd">&nbsp;&nbsp;
                  <label   for="jgd_b">不正常</label>&nbsp;&nbsp;<input id="jgd_b" type="radio" value="2" name="jgd">
              </li>
              <li>
                  <span class="item_name"  >远光灯：</span>
                  <label   for="ygd_a">正常</label>&nbsp;&nbsp;<input id="ygd_a" type="radio" value="1" checked name="ygd">&nbsp;&nbsp;
                  <label   for="ygd_b">不正常</label>&nbsp;&nbsp;<input id="ygd_b" type="radio" value="2" name="ygd">
              </li>
              <li>
                  <span class="item_name"  >前转向灯：</span>
                  <label   for="qzxd_a">正常</label>&nbsp;&nbsp;<input id="qzxd_a" type="radio" value="1" checked name="qzxd">&nbsp;&nbsp;
                  <label   for="qzxd_b">不正常</label>&nbsp;&nbsp;<input id="qzxd_b" type="radio" value="2" name="qzxd">
              </li>
              <li>
                  <span class="item_name"  >后转向灯：</span>
                  <label   for="hzxd_a">正常</label>&nbsp;&nbsp;<input id="hzxd_a" type="radio" value="1" checked name="hzxd">&nbsp;&nbsp;
                  <label   for="hzxd_b">不正常</label>&nbsp;&nbsp;<input id="hzxd_b" type="radio" value="2" name="hzxd">
              </li>
              <li>
                  <span class="item_name"  >倒车灯：</span>
                  <label   for="dcd_a">正常</label>&nbsp;&nbsp;<input id="dcd_a" type="radio" value="1" checked name="dcd">&nbsp;&nbsp;
                  <label   for="dcd_b">不正常</label>&nbsp;&nbsp;<input id="dcd_b" type="radio" value="2" name="dcd">
              </li>
              <li>
                  <span class="item_name"  >刹车灯：</span>
                  <label   for="scd_a">正常</label>&nbsp;&nbsp;<input id="scd_a" type="radio" value="1" checked name="scd">&nbsp;&nbsp;
                  <label   for="scd_b">不正常</label>&nbsp;&nbsp;<input id="scd_b" type="radio" value="2" name="scd">
              </li>
              <li>
                  <span class="item_name"  >室内顶灯：</span>
                  <label   for="sndd_a">正常</label>&nbsp;&nbsp;<input id="sndd_a" type="radio" value="1" checked name="sndd">&nbsp;&nbsp;
                  <label   for="sndd_b">不正常</label>&nbsp;&nbsp;<input id="sndd_b" type="radio" value="2" name="sndd">
              </li>
              <li>
                  <span class="item_name" >系统设备备注信息：</span><br/>
                  <textarea  name="sb_msg" class="textarea" style="width:500px;height:100px;"></textarea>
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