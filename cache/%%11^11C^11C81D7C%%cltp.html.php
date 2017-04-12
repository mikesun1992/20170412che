<?php /* Smarty version 2.6.18, created on 2017-04-05 17:01:24
         compiled from jcdmin/cltp.html */ ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>车辆图片</title>
<script src="../templates/jcdmin/js/jquery.js"></script>
<link rel="stylesheet" type="text/css" href="../templates/jcdmin/css/style.css" />
<link rel="stylesheet" type="text/css" href="../templates/jcdmin/css/webuploader.css">
<link rel="stylesheet" type="text/css" href="../templates/jcdmin/css/diyUpload.css">
<script type="text/javascript" src="../templates/jcdmin/js/webuploader.html5only.min.js"></script>
<script type="text/javascript" src="../templates/jcdmin/js/diyUpload.js"></script>
</head>
<style>
*{ margin:0; padding:0;}
#demo{ margin:50px auto; width:100%; min-height:800px; background:#F8F8F8}
</style>
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
		<ul class="admin_tab">
			<li><a class="active">车辆图片</a></li>
		</ul>
		<!--tabCont-->
		<div class="admin_tab_cont" style="display:block;">
			<!--左右分栏：左侧栏目-->
			<div id="demo" style="margin: 0 auto;">
				<div id="as" ></div>
			</div>

			<script type="text/javascript">

			/*
			* 服务器地址,成功返回,失败返回参数格式依照jquery.ajax习惯;
			* 其他参数同WebUploader
			*/

			$('#as').diyUpload({
				url:'jcdmin_login.php?m=fileupload',
				success:function( data ) {
					console.info( data );
				},
				error:function( err ) {
					console.info( err );
				},
				buttonText : '选择文件',
				chunked:true,
				// 分片大小
				chunkSize:512 * 1024,
				//最大上传的文件数量, 总文件大小,单个文件大小(单位字节);
				fileNumLimit:30,
				fileSizeLimit:500000 * 10240,
				fileSingleSizeLimit:30000 * 10240,
				accept:{
					title:"Images",
					extensions:"gif,jpg,jpeg,bmp,png",
					mimeTypes:"image/*"
				},
			});
			</script>
		</div>
		<div class="admin_tab_cont">tabContent02，内容根据具体数据二次单独定义，公共样式单独调用</div>
		<div class="admin_tab_cont">可追加</div>
	</div>
</section>
</body>
</html>