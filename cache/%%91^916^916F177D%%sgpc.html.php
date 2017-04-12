<?php /* Smarty version 2.6.18, created on 2017-04-05 17:01:28
         compiled from jcdmin/sgpc.html */ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>事故排查</title>
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
       <li><a class="active">事故排查</a></li>
      </ul>
      <!--tabCont-->
      <div class="admin_tab_cont" style="display:block;">
      <!--左右分栏：左侧栏目-->
          <form method="post" action="jcdmin_login.php?m=sgpc">
          <table class="table">
        <tr>
          <td><ul class="ulColumn2">
              <h1>排除重大碰撞</h1>
              <li>
                  <span class="item_name"  >左A柱：</span>
                  <label   for="zaz_a">正常</label>&nbsp;&nbsp;<input id="zaz_a" type="radio" value="1" checked name="zaz">&nbsp;&nbsp;
                  <label   for="zaz_b">不正常</label>&nbsp;&nbsp;<input id="zaz_b" type="radio" value="2" name="zaz">
              </li>

              <li>
                  <span class="item_name"  >右A柱：</span>
                  <label   for="yaz_a">正常</label>&nbsp;&nbsp;<input id="yaz_a" type="radio" value="1" checked name="yaz">&nbsp;&nbsp;
                  <label   for="yaz_b">不正常</label>&nbsp;&nbsp;<input id="yaz_b" type="radio" value="2" name="yaz">
              </li>

              <li>
                  <span class="item_name"  >左B柱：</span>
                  <label   for="zbz_a">正常</label>&nbsp;&nbsp;<input id="zbz_a" type="radio" value="1" checked name="zbz">&nbsp;&nbsp;
                  <label   for="zbz_b">不正常</label>&nbsp;&nbsp;<input id="zbz_b" type="radio" value="2" name="zbz">
              </li>

              <li>
                  <span class="item_name"  >右B柱：</span>
                  <label   for="ybz_a">正常</label>&nbsp;&nbsp;<input id="ybz_a" type="radio" value="1" checked name="ybz">&nbsp;&nbsp;
                  <label   for="ybz_b">不正常</label>&nbsp;&nbsp;<input id="ybz_b" type="radio" value="2" name="ybz">
              </li>

              <li>
                  <span class="item_name"  >左C柱：</span>
                  <label   for="zcz_a">正常</label>&nbsp;&nbsp;<input id="zcz_a" type="radio" value="1" checked name="zcz">&nbsp;&nbsp;
                  <label   for="zcz_b">不正常</label>&nbsp;&nbsp;<input id="zcz_b" type="radio" value="2" name="zcz">
              </li>


              <li>
                  <span class="item_name"  >右C柱：</span>
                  <label   for="ycz_a">正常</label>&nbsp;&nbsp;<input id="ycz_a" type="radio" value="1" checked name="ycz">&nbsp;&nbsp;
                  <label   for="ycz_b">不正常</label>&nbsp;&nbsp;<input id="ycz_b" type="radio" value="2" name="ycz">
              </li>

              <li>
                  <span class="item_name"  >左前纵梁：</span>
                  <label   for="zqzl_a">正常</label>&nbsp;&nbsp;<input id="zqzl_a" type="radio" value="1" checked name="zqzl">&nbsp;&nbsp;
                  <label   for="zqzl_b">不正常</label>&nbsp;&nbsp;<input id="zqzl_b" type="radio" value="2" name="zqzl">
              </li>
              <li>
                  <span class="item_name"  >右前纵梁：</span>
                  <label   for="yqzl_a">正常</label>&nbsp;&nbsp;<input id="yqzl_a" type="radio" value="1" checked name="yqzl">&nbsp;&nbsp;
                  <label   for="yqzl_b">不正常</label>&nbsp;&nbsp;<input id="yqzl_b" type="radio" value="2" name="yqzl">
              </li>
              <li>
                  <span class="item_name"  >左后纵梁：</span>
                  <label   for="zhzl_a">正常</label>&nbsp;&nbsp;<input id="zhzl_a" type="radio" value="1" checked name="zhzl">&nbsp;&nbsp;
                  <label   for="zhzl_b">不正常</label>&nbsp;&nbsp;<input id="zhzl_b" type="radio" value="2" name="zhzl">
              </li>
              <li>
                  <span class="item_name"  >右后纵梁：</span>
                  <label   for="yhzl_a">正常</label>&nbsp;&nbsp;<input id="yhzl_a" type="radio" value="1" checked name="yhzl">&nbsp;&nbsp;
                  <label   for="yhzl_b">不正常</label>&nbsp;&nbsp;<input id="yhzl_b" type="radio" value="2" name="yhzl">
              </li>
              <li>
                  <span class="item_name"  >前防撞梁：</span>
                  <label   for="qfzl_a">正常</label>&nbsp;&nbsp;<input id="qfzl_a" type="radio" value="1" checked name="qfzl">&nbsp;&nbsp;
                  <label   for="qfzl_b">不正常</label>&nbsp;&nbsp;<input id="qfzl_b" type="radio" value="2" name="qfzl">
              </li>
              <li>
                  <span class="item_name"  >后防撞梁：</span>
                  <label   for="hfzl_a">正常</label>&nbsp;&nbsp;<input id="hfzl_a" type="radio" value="1" checked name="hfzl">&nbsp;&nbsp;
                  <label   for="hfzl_b">不正常</label>&nbsp;&nbsp;<input id="hfzl_b" type="radio" value="2" name="hfzl">
              </li>
              <li>
                  <span class="item_name"  >左前减震器悬挂部位：</span>
                  <label   for="zqjzqxg_a">正常</label>&nbsp;&nbsp;<input id="zqjzqxg_a" type="radio" value="1" checked name="zqjzqxg">&nbsp;&nbsp;
                  <label   for="zqjzqxg_b">不正常</label>&nbsp;&nbsp;<input id="zqjzqxg_b" type="radio" value="2" name="zqjzqxg">
              </li>
              <li>
                  <span class="item_name"  >右前减震器悬挂部位：</span>
                  <label   for="yqjzqxg_a">正常</label>&nbsp;&nbsp;<input id="yqjzqxg_a" type="radio" value="1" checked name="yqjzqxg">&nbsp;&nbsp;
                  <label   for="yqjzqxg_b">不正常</label>&nbsp;&nbsp;<input id="yqjzqxg_b" type="radio" value="2" name="yqjzqxg">
              </li>
              <li>
                  <span class="item_name"  >左后减震器悬挂部位：</span>
                  <label   for="zhjzqxg_a">正常</label>&nbsp;&nbsp;<input id="zhjzqxg_a" type="radio" value="1" checked name="zhjzqxg">&nbsp;&nbsp;
                  <label   for="zhjzqxg_b">不正常</label>&nbsp;&nbsp;<input id="zhjzqxg_b" type="radio" value="2" name="zhjzqxg">
              </li>
              <li>
                  <span class="item_name"  >右后减震器悬挂部位：</span>
                  <label   for="yhjzqxg_a">正常</label>&nbsp;&nbsp;<input id="yhjzqxg_a" type="radio" value="1" checked name="yhjzqxg">&nbsp;&nbsp;
                  <label   for="yhjzqxg_b">不正常</label>&nbsp;&nbsp;<input id="yhjzqxg_b" type="radio" value="2" name="yhjzqxg">
              </li>
              <li>
                  <span class="item_name"  >发动机舱防火墙：</span>
                  <label   for="fdjfhq_a">正常</label>&nbsp;&nbsp;<input id="fdjfhq_a" type="radio" value="1" checked name="fdjfhq">&nbsp;&nbsp;
                  <label   for="fdjfhq_b">不正常</label>&nbsp;&nbsp;<input id="fdjfhq_b" type="radio" value="2" name="fdjfhq">
              </li>
              <li>
                  <span class="item_name"  >后备箱底板：</span>
                  <label   for="hbxdb_a">正常</label>&nbsp;&nbsp;<input id="hbxdb_a" type="radio" value="1" checked name="hbxdb">&nbsp;&nbsp;
                  <label   for="hbxdb_b">不正常</label>&nbsp;&nbsp;<input id="hbxdb_b" type="radio" value="2" name="hbxdb">
              </li>
              <li>
                  <span class="item_name"  >车身左右对称性：</span>
                  <label   for="zydc_a">正常</label>&nbsp;&nbsp;<input id="zydc_a" type="radio" value="1" checked name="zydc">&nbsp;&nbsp;
                  <label   for="zydc_b">不正常</label>&nbsp;&nbsp;<input id="zydc_b" type="radio" value="2" name="zydc">
              </li>

              <h1>排除泡水</h1>
              <li>
                  <span class="item_name"  >发动机线束及橡胶制品：</span>
                  <label   for="fdjxs_a">正常</label>&nbsp;&nbsp;<input id="fdjxs_a" type="radio" value="1" checked name="fdjxs">&nbsp;&nbsp;
                  <label   for="fdjxs_b">不正常</label>&nbsp;&nbsp;<input id="fdjxs_b" type="radio" value="2" name="fdjxs">
              </li>
              <li>
                  <span class="item_name"  >后备箱边角及备胎槽：</span>
                  <label   for="hbxbj_a">正常</label>&nbsp;&nbsp;<input id="hbxbj_a" type="radio" value="1" checked name="hbxbj">&nbsp;&nbsp;
                  <label   for="hbxbj_b">不正常</label>&nbsp;&nbsp;<input id="hbxbj_b" type="radio" value="2" name="hbxbj">
              </li>
              <li>
                  <span class="item_name"  >座椅滑轨内：</span>
                  <label   for="zyhgn_a">正常</label>&nbsp;&nbsp;<input id="zyhgn_a" type="radio" value="1" checked name="zyhgn">&nbsp;&nbsp;
                  <label   for="zyhgn_b">不正常</label>&nbsp;&nbsp;<input id="zyhgn_b" type="radio" value="2" name="zyhgn">
              </li>
              <li>
                  <span class="item_name"  >后排座椅坐垫底部：</span>
                  <label   for="hzydb_a">正常</label>&nbsp;&nbsp;<input id="hzydb_a" type="radio" value="1" checked name="hzydb">&nbsp;&nbsp;
                  <label   for="hzydb_b">不正常</label>&nbsp;&nbsp;<input id="hzydb_b" type="radio" value="2" name="hzydb">
              </li>
              <li>
                  <span class="item_name"  >安全带底部：</span>
                  <label   for="aqddb_a">正常</label>&nbsp;&nbsp;<input id="aqddb_a" type="radio" value="1" checked name="aqddb">&nbsp;&nbsp;
                  <label   for="aqddb_b">不正常</label>&nbsp;&nbsp;<input id="aqddb_b" type="radio" value="2" name="aqddb">
              </li>
              <li>
                  <span class="item_name"  >全车地胶地毯：</span>
                  <label   for="djdt_a">正常</label>&nbsp;&nbsp;<input id="djdt_a" type="radio" value="1" checked name="djdt">&nbsp;&nbsp;
                  <label   for="djdt_b">不正常</label>&nbsp;&nbsp;<input id="djdt_b" type="radio" value="2" name="djdt">
              </li>
              <li>
                  <span class="item_name"  >音响喇叭底部：</span>
                  <label   for="yxlbdb_a">正常</label>&nbsp;&nbsp;<input id="yxlbdb_a" type="radio" value="1" checked name="yxlbdb">&nbsp;&nbsp;
                  <label   for="yxlbdb_b">不正常</label>&nbsp;&nbsp;<input id="yxlbdb_b" type="radio" value="2" name="yxlbdb">
              </li>
              <li>
                  <span class="item_name"  >烟灰缸底座：</span>
                  <label   for="yhgdb_a">正常</label>&nbsp;&nbsp;<input id="yhgdb_a" type="radio" value="1" checked name="yhgdb">&nbsp;&nbsp;
                  <label   for="yhgdb_b">不正常</label>&nbsp;&nbsp;<input id="yhgdb_b" type="radio" value="2" name="yhgdb">
              </li>

              <h1>排除火烧</h1>
              <li>
                  <span class="item_name"  >车辆覆盖件及驾驶舱：</span>
                  <label   for="clfgj_a">正常</label>&nbsp;&nbsp;<input id="clfgj_a" type="radio" value="1" checked name="clfgj">&nbsp;&nbsp;
                  <label   for="clfgj_b">不正常</label>&nbsp;&nbsp;<input id="clfgj_b" type="radio" value="2" name="clfgj">
              </li>

              <li>
                  <span class="item_name" >事故排查备注信息：</span><br/>
                  <textarea  name="sg_msg" class="textarea" style="width:500px;height:100px;"></textarea>
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