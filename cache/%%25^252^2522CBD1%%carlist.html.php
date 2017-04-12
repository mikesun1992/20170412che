<?php /* Smarty version 2.6.18, created on 2017-03-20 10:07:02
         compiled from default/cartey/carlist.html */ ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>买车-<?php echo $this->_tpl_vars['setting']['title']; ?>
</title>
		<meta content="<?php echo $this->_tpl_vars['setting']['keywords']; ?>
" name="keywords" />
		<meta content="<?php echo $this->_tpl_vars['setting']['description']; ?>
" name="description" />
		<link href="<?php echo $this->_tpl_vars['weburl']; ?>
/skin/css/car.css" rel="stylesheet" type="text/css"/>
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/js/jquery.js"></script>
		<script language="JavaScript">
			$(function() {
				//品牌选择
				$("#brand").change(function(){
					$.get("<?php echo $this->_tpl_vars['weburl']; ?>
/?m=ajax&ajax=1", { 
						bid :  $("#brand").val() 
					}, function (data, textStatus){
						   $("#subbrand").html(data); // 把返回的数据添加到页面上
						}
					);
				});

				$("div.car_tab ul li a").mouseover(function() {
					$(this).addClass("here").parent().siblings().children().removeClass("here");
					var index = $div_li.index(this);
					$("div.cartab_box > div").eq(index).show().siblings().hide();
				});
			})
		</script>
		</head>
	<body>
<!--内容--> 
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "default/".($this->_tpl_vars['setting']['templates'])."/head.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="nav">您当前的位置：<a href="<?php echo $this->_tpl_vars['weburl']; ?>
/">首页</a> <span>></span> <a href="<?php echo $this->_tpl_vars['weburl']; ?>
/">买车</a></div>
<div class="main clearfix mt10">
		<div class="search_box mb15">
			<div class="condition">
				<span class="fl gray pl20">已选条件：</span>
				<ul class="condition_list fl">
					<?php if ($_COOKIE['keywords'] <> ''): ?><li><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&k=" class="condition"><?php echo $_COOKIE['keywords']; ?>
</a></li><?php endif; ?>
					<?php if ($_COOKIE['brand'] <> 0): ?><li><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=b_0" class="condition"><?php echo $this->_tpl_vars['cache']['brandlist'][$_COOKIE['brand']]; ?>
</a></li><?php endif; ?>
					<?php if ($_COOKIE['subbrand'] <> 0): ?><li><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&sb=0" class="condition"><?php echo $_COOKIE['subbrandname']; ?>
</a></li><?php endif; ?>
					<?php if ($_COOKIE['model'] <> 0): ?><li><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=m_0" class="condition"><?php echo $this->_tpl_vars['cache']['modellist'][$_COOKIE['model']]; ?>
</a></li><?php endif; ?>
					<?php if ($_COOKIE['price'] <> 0): ?><li><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=p_0" class="condition"><?php echo $this->_tpl_vars['arr_price'][$_COOKIE['price']]; ?>
</a></li><?php endif; ?>
					<?php if ($_COOKIE['age'] <> 0): ?><li><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=a_0" class="condition"><?php echo $this->_tpl_vars['arr_age'][$_COOKIE['age']]; ?>
</a></li><?php endif; ?>
					<?php if ($_COOKIE['gas'] <> 0): ?><li><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=g_0" class="condition"><?php echo $this->_tpl_vars['arr_gas'][$_COOKIE['gas']]; ?>
</a></li><?php endif; ?>
				</ul>
				<span class="del"><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&clear=1"><i class="i-del"></i>重置条件</a></span>
			</div>
			<ul class="search_list">
				<form method="get" action="<?php echo $this->_tpl_vars['weburl']; ?>
/">
				<li>品&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;牌 <a href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=b_0" <?php if ($_COOKIE['brand'] == 0): ?>class="here"<?php endif; ?>>不限</a><?php $_from = $this->_tpl_vars['arr_brand']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skey'] => $this->_tpl_vars['brandlist']):
?><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=b_<?php echo $this->_tpl_vars['skey']; ?>
" <?php if ($_COOKIE['brand'] == $this->_tpl_vars['skey']): ?>class="here"<?php endif; ?>><?php echo $this->_tpl_vars['brandlist']; ?>
</a><?php endforeach; endif; unset($_from); ?>
				<select id="brand" name="c">
					<?php echo $this->_tpl_vars['selectbrandsearch']; ?>

				</select>
				<select id="subbrand" name="sb">
					<option value="">请选择车系</option>
				</select>
				<input type="hidden" name="m" value="search">
				<input type="submit" value="搜索" class="cbutton">
				</li>
				</form>
				<li>车&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;型 <a href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=m_0" <?php if ($_COOKIE['model'] == 0): ?>class="here"<?php endif; ?>>不限</a><?php $_from = $this->_tpl_vars['cache']['modellist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skey'] => $this->_tpl_vars['modellist']):
?><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=m_<?php echo $this->_tpl_vars['skey']; ?>
" <?php if ($_COOKIE['model'] == $this->_tpl_vars['skey']): ?>class="here"<?php endif; ?>><?php echo $this->_tpl_vars['modellist']; ?>
</a><?php endforeach; endif; unset($_from); ?></li>
				<li>价&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;格 <a href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=p_0"  <?php if ($_COOKIE['price'] == 0): ?>class="here"<?php endif; ?>>不限</a><?php $_from = $this->_tpl_vars['arr_price']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skey'] => $this->_tpl_vars['pricelist']):
?><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=p_<?php echo $this->_tpl_vars['skey']; ?>
" <?php if ($_COOKIE['price'] == $this->_tpl_vars['skey']): ?>class="here"<?php endif; ?>><?php echo $this->_tpl_vars['pricelist']; ?>
</a><?php endforeach; endif; unset($_from); ?></li>
				<li>车&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;龄 <a href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=a_0"  <?php if ($_COOKIE['age'] == 0): ?>class="here"<?php endif; ?>>不限</a><?php $_from = $this->_tpl_vars['arr_age']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skey'] => $this->_tpl_vars['agellist']):
?><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=a_<?php echo $this->_tpl_vars['skey']; ?>
" <?php if ($_COOKIE['age'] == $this->_tpl_vars['skey']): ?>class="here"<?php endif; ?>><?php echo $this->_tpl_vars['agellist']; ?>
</a><?php endforeach; endif; unset($_from); ?></li>
				<li>排&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;量 <a href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=g_0"  <?php if ($_COOKIE['gas'] == 0): ?>class="here"<?php endif; ?>>不限</a><?php $_from = $this->_tpl_vars['arr_gas']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skey'] => $this->_tpl_vars['gasllist']):
?><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&c=g_<?php echo $this->_tpl_vars['skey']; ?>
" <?php if ($_COOKIE['gas'] == $this->_tpl_vars['skey']): ?>class="here"<?php endif; ?>><?php echo $this->_tpl_vars['gasllist']; ?>
</a><?php endforeach; endif; unset($_from); ?></li>
			</ul>
		</div>
</div>
<div class="main clearfix">
	<div class="main_left">
		<div class="search_big_box">
			<div class="orderlist">
				<ul class="fl">
					<li><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&order=<?php if ($_COOKIE['order'] == 1): ?>2<?php elseif ($_COOKIE['order'] == 2): ?>1<?php else: ?>2<?php endif; ?>" <?php if ($_COOKIE['order'] == 1): ?>class="or01"<?php elseif ($_COOKIE['order'] == 2): ?>class="or03"<?php else: ?>class="or02"<?php endif; ?>>时间</a></li>
					<li><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&order=<?php if ($_COOKIE['order'] == 3): ?>4<?php elseif ($_COOKIE['order'] == 4): ?>3<?php else: ?>3<?php endif; ?>" <?php if ($_COOKIE['order'] == 3): ?>class="or01"<?php elseif ($_COOKIE['order'] == 4): ?>class="or03"<?php else: ?>class="or02"<?php endif; ?>>价格</a></li>
					<li><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&order=<?php if ($_COOKIE['order'] == 5): ?>6<?php elseif ($_COOKIE['order'] == 6): ?>5<?php else: ?>5<?php endif; ?>" <?php if ($_COOKIE['order'] == 5): ?>class="or01"<?php elseif ($_COOKIE['order'] == 6): ?>class="or03"<?php else: ?>class="or02"<?php endif; ?>>里程</a></li>
					<li><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&order=<?php if ($_COOKIE['order'] == 7): ?>8<?php elseif ($_COOKIE['order'] == 8): ?>7<?php else: ?>7<?php endif; ?>"  <?php if ($_COOKIE['order'] == 7): ?>class="or01"<?php elseif ($_COOKIE['order'] == 8): ?>class="or03"<?php else: ?>class="or02"<?php endif; ?>>车龄</a></li>
				</ul>
				<div class="showtype">
					<?php if ($_COOKIE['showtype'] == 'list'): ?>
					<span class="type01"><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&showtype=list">列表</a></span>
					<?php else: ?>
					<span class="type02"><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&showtype=list">列表</a></span>
					<?php endif; ?>
					<?php if ($_COOKIE['showtype'] == 'pic'): ?>
					<span class="type03"><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&showtype=pic">网格</a></span>
					<?php else: ?>
					<span class="type04"><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&showtype=pic">网格</a></span>
					<?php endif; ?>
				</div>
				<div class="page_num">
					<span>每页显示：</span>
					<span class="num"><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&pagenum=20" <?php if ($_COOKIE['pagenum'] == 20): ?>class="fb orange01"<?php endif; ?>>20</a></span>
					<span class="num"><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&pagenum=40" <?php if ($_COOKIE['pagenum'] == 40): ?>class="fb orange01"<?php endif; ?>>40</a></span>
					<span class="num"><a href="<?php echo $this->_tpl_vars['weburl']; ?>
/?m=search&pagenum=80" <?php if ($_COOKIE['pagenum'] == 80): ?>class="fb orange01"<?php endif; ?>>80</a></span>
				</div>
			</div>
			<div class="box">
				<?php if ($_COOKIE['showtype'] == 'pic'): ?>
				<ul class="bigcarlist clearfix">
					<?php $_from = $this->_tpl_vars['carslist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skey'] => $this->_tpl_vars['cars_list']):
?>
					<li <?php if (( $this->_tpl_vars['skey']+1 ) % 4 <> 0): ?>class="bbg"<?php endif; ?>>
						<?php if ($this->_tpl_vars['cars_list']['issell'] == 1): ?>
						<div class="psoldout"><a href="<?php echo $this->_tpl_vars['cars_list']['p_url']; ?>
" target="_blank" title="<?php echo $this->_tpl_vars['cars_list']['p_shortname']; ?>
"><?php if ($this->_tpl_vars['cars_list']['p_mainpic'] <> ""): ?><img src="<?php echo $this->_tpl_vars['weburl']; ?>
<?php echo $this->_tpl_vars['cars_list']['p_mainpic']; ?>
" alt="<?php echo $this->_tpl_vars['cars_list']['p_shortname']; ?>
"/><?php else: ?><img src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/img/car.jpg"/><?php endif; ?></a>
						<p class="carname"><a href="<?php echo $this->_tpl_vars['cars_list']['p_url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['cars_list']['p_shortname']; ?>
</a></p>
						<p class="red"><span class="price">已售罄</span><span class="fr pt5 mt15"><?php if ($this->_tpl_vars['cars_list']['test'] <> ""): ?><em class="tag-yellow"><?php echo $this->_tpl_vars['cars_list']['test']; ?>
</em><?php else: ?> <?php endif; ?></span></p>
						<p class="gray01 mt5"><span class="fr">里程：<?php echo $this->_tpl_vars['cars_list']['p_kilometre']; ?>
万公里</span>上牌:<?php echo $this->_tpl_vars['cars_list']['p_year']; ?>
年<?php echo $this->_tpl_vars['cars_list']['p_month']; ?>
月</p>
						</div>
						<?php else: ?>
						<a href="<?php echo $this->_tpl_vars['cars_list']['p_url']; ?>
" target="_blank" title="<?php echo $this->_tpl_vars['cars_list']['p_shortname']; ?>
"><?php if ($this->_tpl_vars['cars_list']['p_mainpic'] <> ""): ?><img src="<?php echo $this->_tpl_vars['weburl']; ?>
<?php echo $this->_tpl_vars['cars_list']['p_mainpic']; ?>
" alt="<?php echo $this->_tpl_vars['cars_list']['p_shortname']; ?>
"/><?php else: ?><img src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/img/car.jpg"/><?php endif; ?></a>
						<p class="carname"><a href="<?php echo $this->_tpl_vars['cars_list']['p_url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['cars_list']['p_shortname']; ?>
</a></p>
						<p class="red"><span class="price"><?php echo $this->_tpl_vars['cars_list']['p_price']; ?>
</span> <?php if ($this->_tpl_vars['cars_list']['p_price'] <> "面议"): ?>万<?php endif; ?><span class="fr pt5 mt15"><?php if ($this->_tpl_vars['cars_list']['test'] <> ""): ?><em class="tag-yellow"><?php echo $this->_tpl_vars['cars_list']['test']; ?>
</em><?php else: ?> <?php endif; ?></span></p>
						<p class="gray01 mt5"><span class="fr">里程：<?php echo $this->_tpl_vars['cars_list']['p_kilometre']; ?>
万公里</span>上牌:<?php echo $this->_tpl_vars['cars_list']['p_year']; ?>
年<?php echo $this->_tpl_vars['cars_list']['p_month']; ?>
月</p>
						<?php endif; ?>
					</li>
					<?php endforeach; endif; unset($_from); ?>
				</ul>
				<?php else: ?>
				<?php $_from = $this->_tpl_vars['carslist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['skey'] => $this->_tpl_vars['cars_list']):
?>
					<?php if ($this->_tpl_vars['cars_list']['issell'] == 1): ?>
					<div class="listcar clearfix soldout">
						<div class="img">
							<a href="<?php echo $this->_tpl_vars['cars_list']['p_url']; ?>
" target="_blank" title="<?php echo $this->_tpl_vars['cars_list']['p_allname']; ?>
"><?php if ($this->_tpl_vars['cars_list']['p_mainpic'] <> ""): ?><img src="<?php echo $this->_tpl_vars['weburl']; ?>
<?php echo $this->_tpl_vars['cars_list']['p_mainpic']; ?>
" alt="<?php echo $this->_tpl_vars['cars_list']['p_allname']; ?>
"/><?php else: ?><img src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/img/car.jpg"/><?php endif; ?></a>
						</div>
						<div class="word">
							<p class="clearfix"><span class="carname fl"><a href="<?php echo $this->_tpl_vars['cars_list']['p_url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['cars_list']['p_allname']; ?>
</a></span>&nbsp;  <span class="fr pt5"><?php if ($this->_tpl_vars['cars_list']['test'] <> ""): ?><em class="tag-yellow"><?php echo $this->_tpl_vars['cars_list']['test']; ?>
</em><?php else: ?> <?php endif; ?></span></p>
							<p class="gray">
								<span class="orange01"><?php echo $this->_tpl_vars['cars_list']['p_year']; ?>
年<?php echo $this->_tpl_vars['cars_list']['p_month']; ?>
月</span> 上牌 &nbsp;&nbsp;/&nbsp;&nbsp;  
								<span class="orange01"><?php echo $this->_tpl_vars['cars_list']['p_kilometre']; ?>
</span> 万公里 <?php if ($this->_tpl_vars['cars_list']['p_emission'] <> ''): ?>&nbsp;&nbsp;/ &nbsp;&nbsp;
								<?php echo $this->_tpl_vars['cars_list']['p_emission']; ?>
 <?php endif; ?>&nbsp;&nbsp;/&nbsp;&nbsp;
								<?php if ($this->_tpl_vars['cars_list']['province'] <> ''): ?><?php echo $this->_tpl_vars['cars_list']['province']; ?>
<?php endif; ?> <?php if ($this->_tpl_vars['cars_list']['city'] <> ''): ?><?php echo $this->_tpl_vars['cars_list']['city']; ?>
<?php endif; ?>
								信息编号：<?php echo $this->_tpl_vars['cars_list']['p_no']; ?>

							</p>
							<p class="gray f14">车主说明：<?php echo $this->_tpl_vars['cars_list']['p_details']; ?>
</p>
							<p class="gray f12"><?php echo $this->_tpl_vars['cars_list']['listtime']; ?>
 更新</p>
						</div>
						<div class="price">
							<span class="fb f30">已售罄</span>
						</div>
					</div>
					<?php else: ?>
					<div class="listcar clearfix">
						<div class="img">
							<a href="<?php echo $this->_tpl_vars['cars_list']['p_url']; ?>
" target="_blank" title="<?php echo $this->_tpl_vars['cars_list']['p_allname']; ?>
"><?php if ($this->_tpl_vars['cars_list']['p_mainpic'] <> ""): ?><img src="<?php echo $this->_tpl_vars['weburl']; ?>
<?php echo $this->_tpl_vars['cars_list']['p_mainpic']; ?>
" alt="<?php echo $this->_tpl_vars['cars_list']['p_allname']; ?>
"/><?php else: ?><img src="<?php echo $this->_tpl_vars['weburl']; ?>
/static/img/car.jpg"/><?php endif; ?></a>
						</div>
						<div class="word">
							<p class="clearfix"><span class="carname fl"><a href="<?php echo $this->_tpl_vars['cars_list']['p_url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['cars_list']['p_allname']; ?>
</a></span>&nbsp;   <span class="fr pt5"><?php if ($this->_tpl_vars['cars_list']['test'] <> ""): ?><em class="tag-yellow"><?php echo $this->_tpl_vars['cars_list']['test']; ?>
</em><?php else: ?> <?php endif; ?></span></p>
							<p class="gray">
								<span class="orange01"><?php echo $this->_tpl_vars['cars_list']['p_year']; ?>
年<?php echo $this->_tpl_vars['cars_list']['p_month']; ?>
月</span> 上牌 &nbsp;&nbsp;/&nbsp;&nbsp;  
								<span class="orange01"><?php echo $this->_tpl_vars['cars_list']['p_kilometre']; ?>
</span> 万公里 <?php if ($this->_tpl_vars['cars_list']['p_emission'] <> ''): ?>&nbsp;&nbsp;/ &nbsp;&nbsp;
								<?php echo $this->_tpl_vars['cars_list']['p_emission']; ?>
 <?php endif; ?>&nbsp;&nbsp;/&nbsp;&nbsp;
								<?php if ($this->_tpl_vars['cars_list']['province'] <> ''): ?><?php echo $this->_tpl_vars['cars_list']['province']; ?>
<?php endif; ?> <?php if ($this->_tpl_vars['cars_list']['city'] <> ''): ?><?php echo $this->_tpl_vars['cars_list']['city']; ?>
<?php endif; ?>
								信息编号：<?php echo $this->_tpl_vars['cars_list']['p_no']; ?>

							</p>
							<p class="gray f14">车主说明：<?php echo $this->_tpl_vars['cars_list']['p_details']; ?>
</p>
							<p class="gray f12"><?php echo $this->_tpl_vars['cars_list']['listtime']; ?>
 更新</p>
						</div>
						<div class="price">
							<span class="fb f30"><?php echo $this->_tpl_vars['cars_list']['p_price']; ?>
</span> <?php if ($this->_tpl_vars['cars_list']['p_price'] <> "面议"): ?>万<?php endif; ?>
						</div>
					</div>
					<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?>
				<?php endif; ?>
				<div class="page_list"><?php echo $this->_tpl_vars['button_basic']; ?>
</div>
			</div>
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