<?php /* Smarty version 2.6.18, created on 2017-03-17 08:11:37
         compiled from default/cartey/head.html */ ?>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/js/jquery.inputtext.js"></script>
<script language="JavaScript">
$(function(){
	$("#carcount").load("<?php echo $this->_tpl_vars['weburl']; ?>
/?m=ajax&ajax=1&carcount=1");
	$(".keywords").textRemindAuto();
	<?php if ($this->_tpl_vars['setting']['version'] == 3): ?>
	//城市选择
	$(".topcity").toggle(
	  function () {
		$(".topcitylist").show();
	  },
	  function () {
		$(".topcitylist").hide();
	  }
	);
	<?php endif; ?>
})
</script>

<!--头部-->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "default/".($this->_tpl_vars['setting']['templates'])."/top.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="headw">
	<div class="head">
		<div class="logo"><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/"><?php if ($this->_tpl_vars['setting']['logo'] <> ''): ?><img src="<?php echo $this->_tpl_vars['setting']['logo']; ?>
" alt="<?php echo $this->_tpl_vars['setting']['sitename']; ?>
"><?php else: ?><?php echo $this->_tpl_vars['setting']['sitename']; ?>
<?php endif; ?></a></div>
		 	<?php if ($this->_tpl_vars['setting']['version'] == 3): ?><div class="topcity">
				<div class="topcitybox"><i></i><script src="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=city"></script></div></div>
			<div class="topcitylist hide">
			<h3>热门城市</h3>
			<ul class="clearfix">
				<li><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=city&cid=0">全国</a></li>
				<?php $_from = $this->_tpl_vars['cache']['recomcitylist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skey'] => $this->_tpl_vars['city']):
?>
				<li><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=city&cid=<?php echo $this->_tpl_vars['skey']; ?>
"><?php echo $this->_tpl_vars['city']; ?>
</a></li>
				<?php endforeach; endif; unset($_from); ?>
			</ul>
			<p class="tr"><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=citylist" class="orange01">更多城市</a></p>
			</div>
			<?php endif; ?>
		<div class="topsearch">
			<div class="topsearchbox">
			<form method="get" action="<?php echo $this->_tpl_vars['weburl']; ?>
/">
				<input type="text" name="k" class="keywords" id="s" value="请输入车辆关键词或信息编号"><input type="submit" value="" class="button"/>
				<input type="hidden" name="m" value="search">
			</form>
			</div>
			<p class="topkeywords"><?php $_from = $this->_tpl_vars['cache']['topkeywords']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['keywords']):
?><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&k=<?php echo $this->_tpl_vars['keywords']['keyword']; ?>
"><?php echo $this->_tpl_vars['keywords']['keywords']; ?>
</a>&nbsp;&nbsp;<?php endforeach; endif; unset($_from); ?></p>
		</div><div class="hot-phone">

		<script>

		</script>
                <i></i>

                <!--顶部热线电话  -->

 
               <span class="js-change-phone">

                    <?php echo $this->_tpl_vars['setting']['tel']; ?>

                </span>

            </div>
	</div>
</div>



<div class="nav_list">
	<ul class="clearfix">
		<?php $_from = $this->_tpl_vars['partlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['part']):
?>
		<li>
		<a href="<?php if ($this->_tpl_vars['part']['c_target'] == 2): ?><?php echo $this->_tpl_vars['part']['c_url']; ?>
<?php else: ?><?php echo $this->_tpl_vars['weburl']; ?>
/<?php echo $this->_tpl_vars['part']['c_url']; ?>
<?php endif; ?>" title="<?php echo $this->_tpl_vars['part']['c_name']; ?>
" <?php if ($this->_tpl_vars['menustate'] == $this->_tpl_vars['part']['c_id']): ?>class="here"<?php endif; ?> <?php if ($this->_tpl_vars['part']['c_target'] == 2): ?>target="_blank"<?php endif; ?>><?php echo $this->_tpl_vars['part']['c_name']; ?>
</a>
		</li>
		<?php endforeach; endif; unset($_from); ?>
		<li style="float:right;"><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/app.html" style="vertical-align:top;"><img src="<?php echo $this->_tpl_vars['weburl']; ?>
/skin/img/dealer.png"/>APP下载</a></li>
		<li style="float:right;"><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/service.html" style="vertical-align:top;"><img src="<?php echo $this->_tpl_vars['weburl']; ?>
/skin/img/kche.png"/>我要服务</a></li>
	</ul>
</div>
<!--头部end -->