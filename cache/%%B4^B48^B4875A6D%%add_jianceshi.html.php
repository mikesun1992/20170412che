<?php /* Smarty version 2.6.18, created on 2017-03-16 08:43:34
         compiled from admins/add_jianceshi.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title></title>
<link href="static/css/admin/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="static/js/common.js"></script>
<script type="text/javascript" src="static/js/jquery.js"></script>
<script type="text/javascript" src="static/js/Validform_v5.3.2_min.js"></script>

	<link rel="stylesheet" href="../kindeditor/themes/default/default.css" />
	<script charset="utf-8" src="../kindeditor/kindeditor-min.js"></script>
	<script charset="utf-8" src="../kindeditor/lang/zh_CN.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    //城市选择
	$("#province").change(function(){
		$.get("<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=ajax&ajax=1", { 
			cityid :  $("#province").val() 
		}, function (data, textStatus){
			$("#city").html(data); // 把返回的数据添加到页面上
		});
	});
	//表单验证
	$(".addmember").Validform({
		tiptype:3
	});
	$('#usertype').change(function(){
			if($("#usertype").val()==1){
				$('#dealer').hide();
			}
			else{
				$('#dealer').show();
			}
		});
});
</script>

	<script type="text/javascript">
		KindEditor.ready(function(K) {
			var editor = K.editor({
				uploadJson: 'index.php?m=upload',
				fileManagerJson: '<?php echo $this->_tpl_vars['adminpage']; ?>
?m=upload_manager',
				allowFileManager: true,
			});
			K('#image').click(function () {
				editor.loadPlugin('image', function () {
					editor.plugin.imageDialog({
						showRemote: false,
						imageUrl: K('#url').val(),
						clickFn: function (url, title, width, height, border, align) {
							K('#url').val(url);
							editor.hideDialog();
						}
					});
				});
			});
		});
	</script>
</head>
<body>
<div class="colorarea01">
	<div class="search clearfix">
		<div class="searchL">
			<ul class="menulist">
				<li><a href="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=jianceshi&a=list" class="list">返回检测师列表</a></li>
			</ul>
		</div>
	</div>
	<form name="form1" class="addmember" method="post"  action="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=jianceshi" enctype="multipart/form-data">
		<table cellspacing="0" cellpadding="0" width="100%"  class="maintable">
			<?php if ($this->_tpl_vars['ac'] == 'edit'): ?>
			<?php if ($this->_tpl_vars['setting']['version'] == 3): ?>
			<tr>
            <th>所在城市：</th>
				<td colspan="3">
					<select name="aid" id="province">
						<?php echo $this->_tpl_vars['selectprovince']; ?>

					</select>
					<select name="cid" id="city">
						<?php echo $this->_tpl_vars['selectcity']; ?>

					</select>
				</td>
			</tr>
			<?php endif; ?>
			<tr>
				<th>工号：</th>
				<td colspan="3"><input type="text" name="jcs_id" value="<?php echo $this->_tpl_vars['jcs']['jcs_id']; ?>
"  ajaxurl="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=jianceshi&ajax=1&id=<?php echo $this->_tpl_vars['jcs']['id']; ?>
" datatype="s" nullmsg="请输入工号！" ></td>
			</tr>
		<tr>
			<th>姓名：</th>
			<td colspan="3"><input type="text" name="name" value="<?php echo $this->_tpl_vars['jcs']['name']; ?>
"  datatype="s"  nullmsg="请输入姓名！" ></td>
		</tr>
			<tr>
				<th>头像：</th>
				<td colspan="3"><input class="textbox" type="text" name="pic" id="url" value="" />
					<input type="button" id="image" class="link_btn" value="选择图片" /></td>
			</tr>
		<tr>
			<th>密码：</th>
			<td colspan="3"><input type="password" name="pwd" value="<?php echo $this->_tpl_vars['jcs']['pwd']; ?>
" datatype="s"  nullmsg="请输入密码！" ></td>
		</tr>
		<tr>
			<th>手机号码：</th>
			<td colspan="3">
				<input type="text" name="mobile" value="<?php echo $this->_tpl_vars['jcs']['mobile']; ?>
" size="20" class="inp01" ajaxurl="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=jianceshi&ajax=1&id=<?php echo $this->_tpl_vars['jcs']['id']; ?>
" datatype="m"  nullmsg="请输入手机号！" errormsg="请输入正确的手机号！"/>
			</td>
		</tr>
		<tr>
			<th>类型：</th>
			<td><input type="text" name="type" value="<?php echo $this->_tpl_vars['jcs']['type']; ?>
" class="inp01"  datatype="s" nullmsg="请填写类型！"/></td>
		</tr>
		</table>
		<?php else: ?>
		<table cellspacing="0" cellpadding="0" width="100%"  class="maintable">
		<?php if ($this->_tpl_vars['setting']['version'] == 3): ?>
		<tr>
			<th>所在城市：</th>
			<td colspan="3">
				<select name="aid" id="province">
					<?php echo $this->_tpl_vars['selectprovince']; ?>

				</select>
				<select name="cid" id="city">
					<?php echo $this->_tpl_vars['selectcity']; ?>

				</select>
			</td>
		</tr>
		<?php endif; ?>
		<tr>
			<th>工号：</th>
			<td colspan="3"><input type="text" name="jcs_id" value="<?php echo $this->_tpl_vars['jcs']['jcs_id']; ?>
"  ajaxurl="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=check&ajax=1" datatype="n" nullmsg="请输入工号！" ></td>
		</tr>
		<tr>
			<th>姓名：</th>
			<td colspan="3"><input type="text" name="name" value="<?php echo $this->_tpl_vars['jcs']['name']; ?>
"  datatype="s"  nullmsg="请输入姓名！" ></td>
		</tr>
			<tr>
				<th>头像：</th>
				<td colspan="3"><input class="textbox" type="text" name="pic" id="url" value="" />
					<input type="button" id="image" class="link_btn" value="选择图片" /></td>
			</tr>
		<tr>
			<th>密码：</th>
			<td colspan="3"><input type="password" name="pwd" value="<?php echo $this->_tpl_vars['jcs']['pwd']; ?>
"  datatype="s"  nullmsg="请输入密码！" ></td>
		</tr>
		<tr>
			<th>手机号码：</th>
			<td colspan="3">
				<input type="text" name="mobile" value="<?php echo $this->_tpl_vars['jcs']['mobile']; ?>
" size="20" class="inp01" ajaxurl="<?php echo $this->_tpl_vars['adminpage']; ?>
?m=check&ajax=1" datatype="m"  nullmsg="请输入手机号！" errormsg="请输入正确的手机号！"/>
			</td>
		</tr>
		<tr>
			<th>类型：</th>
			<td><input type="text" name="type" value="<?php echo $this->_tpl_vars['jcs']['type']; ?>
" class="inp01"  datatype="s" nullmsg="请填写类型！"/></td>
		</tr>
		</table>
		<?php endif; ?>
		<table cellspacing="0" cellpadding="0" width="100%"  class="maintable">
			<tr>
				<th></th>
				<td><div class="buttons">
						<input type="submit" name="thevaluesubmit" value="提交保存" class="submit">
						<input type="hidden" name="a" value="<?php echo $this->_tpl_vars['ac']; ?>
">
						<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['jcs']['id']; ?>
">
						<input type="hidden" name="page" value="<?php echo $this->_tpl_vars['page_g']; ?>
">
					</div></td>
			</tr>
		</table>
	</form>
</div>
</body>
</html>