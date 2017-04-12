<?php /* Smarty version 2.6.18, created on 2017-03-16 08:43:01
         compiled from admins/jianceshi_list.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title></title>
<link href="static/css/admin/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="static/js/common.js"></script>
<script type="text/javascript" src="static/js/jquery.js"></script>
</head>
<body>
<div class="colorarea01">
<div class="search clearfix">
	<div class="searchL">
		<ul class="menulist">
			<li><a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=jianceshi&a=add" class="add">添加检测师</a></li>
		</ul>
	</div>
	<!--<div class="searchR">
		<form action="<?php echo $this->_tpl_vars['adminpage']; ?>
" method="get" name="form2">
		<table cellspacing="0" cellpadding="0" class="toptable">
			<tr>
				<td>
					<span>
						<select name="isdealer">
							<?php echo $this->_tpl_vars['select_isdealer']; ?>

						</select>
					</span>
					<input type="text" name="keywords" id="searchkey" value="" class="inp01"> &nbsp;<input type="submit" name="filtersubmit" value="查询" class="combutton02"><input type="hidden" name="m" value="member">
					<input type="hidden" name="a" value="list">
				</td>
			</tr>
		</table>
		</form>
	</div>-->
</div>
<form action="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=jianceshi" method="post" name="form">
<table cellspacing="0" cellpadding="0" width="100%"  class="listtable">
<tr><th>选择</th><th>ID</th><th>工号</th><th>姓名</th><th>手机号</th><?php if ($this->_tpl_vars['setting']['version'] == 3): ?><th>城市</th><?php endif; ?><th>类型</th><th>注册时间</th><th>操作</th></tr>
<?php $_from = $this->_tpl_vars['jcslist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['jcs']):
?>
<tr style=" height:32px;" align="center" onmouseover="on(this);" onmouseout="out(this);">
<td width="30" align="center"><input type="checkbox" name="bulkid[]" value="<?php echo $this->_tpl_vars['jcs']['id']; ?>
"></td>
<td width="30" align="center"><?php echo $this->_tpl_vars['jcs']['id']; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['jcs']['jcs_id']; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['jcs']['name']; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['jcs']['mobile']; ?>
</td>
<?php if ($this->_tpl_vars['setting']['version'] == 3): ?>
<td align="center"><?php echo $this->_tpl_vars['jcs']['province']; ?>
-<?php echo $this->_tpl_vars['jcs']['city']; ?>
</td>
<?php endif; ?>
<td align="center"><?php echo $this->_tpl_vars['jcs']['type']; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['jcs']['create_time']; ?>
</td>
<td width="150" align="center" class="rightmenu">
	<a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=jianceshi&a=show&jcs_id=<?php echo $this->_tpl_vars['jcs']['jcs_id']; ?>
&page=<?php echo $this->_tpl_vars['page']; ?>
">查看</a> |
	<a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=jianceshi&a=edit&id=<?php echo $this->_tpl_vars['jcs']['id']; ?>
&page=<?php echo $this->_tpl_vars['page']; ?>
">编辑</a> |
	删除
	<!-- <a href="javascript:if(confirm('确实要删除吗?'))location='<?php echo $this->_tpl_vars['adminpage']; ?>
?m=jianceshi&a=del&id=<?php echo $this->_tpl_vars['jcs']['id']; ?>
&page=<?php echo $this->_tpl_vars['page']; ?>
'">删除</a> -->
</td>
</tr>
<?php endforeach; endif; unset($_from); ?>
<tr>
    <td colspan="11" class="buttontd" style="text-align:left;">
	<a href="javascript:javascript:selectAll();" title="请选择后操作">全选</a>
    <!-- <a href="javascript:submitForm('<?php echo $this->_tpl_vars['adminpage']; ?>
?m=jianceshi&a=bulkdel&page=<?php echo $this->_tpl_vars['page']; ?>
','删除');" title="请选择后操作" >删除</a> -->删除
	</td>
</tr>
</table>
</form>
<div class="listpage"><?php echo $this->_tpl_vars['button_basic']; ?>
<?php echo $this->_tpl_vars['button_select']; ?>
</div>
</div>
<script type="text/javascript">
    function out(obj) {
        obj.style.color = 'black';
    }
 
 
    function on(obj) {
        obj.style.color = 'orange';
    }
</script>
</body>
</html>