<?php /* Smarty version 2.6.18, created on 2017-03-20 10:08:33
         compiled from jcdmin/index.html */ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>我的工作</title>
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
<!--aside nav-->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "jcdmin/jcdmenu.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<section class="rt_wrap content mCustomScrollbar">
 <div class="rt_content">
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
<section>
      <ul class="admin_tab">
       <li><a class="active">我的工作</a></li>
      </ul>
      <!--tabCont-->
      <div class="admin_tab_cont" style="display:block;">
      <!--左右分栏：左侧栏目-->
      <table class="table">
        <tr>
          <th>id</th>
          <th>姓名</th>
          <th>品牌</th>
          <th>类型</th>
          <th>检测时间</th>
          <th>检测</th>
        </tr>
          <?php $_from = $this->_tpl_vars['rs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['rs']):
?>
          <tr>
              <td><?php echo $this->_tpl_vars['rs']['id']; ?>
</td>
              <td><a href="wtai://wp/mc;<?php echo $this->_tpl_vars['rs']['mobile']; ?>
"><?php echo $this->_tpl_vars['rs']['name']; ?>
</a></td>
              <td><?php echo $this->_tpl_vars['rs']['brand']; ?>
</td>
              <td><?php echo $this->_tpl_vars['rs']['type']; ?>
</td>
              <td><?php echo $this->_tpl_vars['rs']['create_time']; ?>
</td>
              <td><?php if ($this->_tpl_vars['rs']['is_jiance'] == 1): ?><span style="color: green">已检测</span><?php else: ?><a href="jcdmin_login.php?m=czxx&id=<?php echo $this->_tpl_vars['rs']['id']; ?>
" ><span style="color: red">未检测</span></a><?php endif; ?></td>
          </tr>
          <?php endforeach; endif; unset($_from); ?>
      </table>
          <div class="listpage"><?php echo $this->_tpl_vars['button_basic']; ?>
<?php echo $this->_tpl_vars['button_select']; ?>
</div>
</div>
      <div class="admin_tab_cont">tabContent02，内容根据具体数据二次单独定义，公共样式单独调用</div>
      <div class="admin_tab_cont">可追加</div>
    </section>
 </div>
</section>
</body>
</html>