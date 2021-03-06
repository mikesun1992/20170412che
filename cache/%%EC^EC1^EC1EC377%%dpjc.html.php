<?php /* Smarty version 2.6.18, created on 2017-04-05 17:01:26
         compiled from jcdmin/dpjc.html */ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>底盘检测</title>
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
       <li><a class="active">底盘检测</a></li>
      </ul>
      <!--tabCont-->
      <div class="admin_tab_cont" style="display:block;">
      <!--左右分栏：左侧栏目-->
          <form method="post" action="jcdmin_login.php?m=dpjc">
      <table class="table">
        <tr>
          <td><ul class="ulColumn2">
              <li>
                  <span class="item_name">底盘检测：</span>
                  <label for="dp_a" >正常</label>&nbsp;&nbsp;<input id="dp_a" type="radio" value="1" name="dp"  checked />&nbsp;&nbsp;
                  <label for="dp_b" >剐蹭</label>&nbsp;&nbsp;<input id="dp_b" type="radio" value="2" name="dp" />
                  <label for="dp_c" >托底</label>&nbsp;&nbsp;<input id="dp_c" type="radio" value="3" name="dp" />
              </li>
              <li>
                  <span class="item_name">右后减震器：</span>
                  <label for="yhjzq_a" >正常</label>&nbsp;&nbsp;<input id="yhjzq_a" type="radio" value="1" name="yhjzq"  checked />&nbsp;&nbsp;
                  <label for="yhjzq_b" >漏油</label>&nbsp;&nbsp;<input id="yhjzq_b" type="radio" value="2" name="yhjzq" />
                  <label for="yhjzq_c" >塌陷</label>&nbsp;&nbsp;<input id="yhjzq_c" type="radio" value="3" name="yhjzq" />
              </li>
              <li>
                  <span class="item_name">右前减震器：</span>
                  <label for="yqjzq_a" >正常</label>&nbsp;&nbsp;<input id="yqjzq_a" type="radio" value="1" name="yqjzq"  checked />&nbsp;&nbsp;
                  <label for="yqjzq_b" >漏油</label>&nbsp;&nbsp;<input id="yqjzq_b" type="radio" value="2" name="yqjzq" />
                  <label for="yqjzq_c" >塌陷</label>&nbsp;&nbsp;<input id="yqjzq_c" type="radio" value="3" name="yqjzq" />
              </li>
              <li>
                  <span class="item_name">左前减震器：</span>
                  <label for="zqjzq_a" >正常</label>&nbsp;&nbsp;<input id="zqjzq_a" type="radio" value="1" name="zqjzq"  checked />&nbsp;&nbsp;
                  <label for="zqjzq_b" >漏油</label>&nbsp;&nbsp;<input id="zqjzq_b" type="radio" value="2" name="zqjzq" />
                  <label for="zqjzq_c" >塌陷</label>&nbsp;&nbsp;<input id="zqjzq_c" type="radio" value="3" name="zqjzq" />
              </li>
              <li>
                  <span class="item_name">左后减震器：</span>
                  <label for="zhjzq_a" >正常</label>&nbsp;&nbsp;<input id="zhjzq_a" type="radio" value="1" name="zhjzq"  checked />&nbsp;&nbsp;
                  <label for="zhjzq_b" >漏油</label>&nbsp;&nbsp;<input id="zhjzq_b" type="radio" value="2" name="zhjzq" />
                  <label for="zhjzq_c" >塌陷</label>&nbsp;&nbsp;<input id="zhjzq_c" type="radio" value="3" name="zhjzq" />
              </li>
              <li>
                  <span class="item_name" >底盘备注信息：</span><br/>
                  <textarea  name="dp_msg" class="textarea" style="width:500px;height:100px;"></textarea>
              </li>

        <li>  <span class="item_name" style="width:120px;"></span>
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