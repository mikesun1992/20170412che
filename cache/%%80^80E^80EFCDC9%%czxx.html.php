<?php /* Smarty version 2.6.18, created on 2017-04-05 17:01:29
         compiled from jcdmin/czxx.html */ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>车主信息</title>
<meta name="author" content="DeathGhost" />
<link rel="stylesheet" type="text/css" href="../templates/jcdmin/css/style.css" />
<!--[if lt IE 9]>
    <script src="js/html5.js"></script>
    <![endif]-->
<script src="../templates/jcdmin/js/jquery.js"></script>
<script src="../templates/jcdmin/js/jquery.mCustomScrollbar.concat.min.js"></script>

    <link rel="stylesheet" href="../kindeditor/themes/default/default.css" />
    <script charset="utf-8" src="../kindeditor/kindeditor-min.js"></script>
    <script charset="utf-8" src="../kindeditor/lang/zh_CN.js"></script>

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
    <script>
        KindEditor.ready(function(K) {
            var editor = K.editor({
                uploadJson : 'index.php?m=upload',
                fileManagerJson : '<?php echo $this->_tpl_vars['adminpage']; ?>
?m=upload_manager',
                allowFileManager : true,
            });
            K('#img1').click(function() {
                editor.loadPlugin('image', function() {
                    editor.plugin.imageDialog({
                        showRemote : false,
                        imageUrl : K('#url1').val(),
                        clickFn : function(url, title, width, height, border, align) {
                            K('#url1').val(url);
                            $('#img1').attr('src',url);
                            editor.hideDialog();
                        }
                    });
                });
            });
            K('#img2').click(function() {
                editor.loadPlugin('image', function() {
                    editor.plugin.imageDialog({
                        showRemote : false,
                        imageUrl : K('#url2').val(),
                        clickFn : function(url, title, width, height, border, align) {
                            K('#url2').val(url);
                            $('#img2').attr('src',url);
                            editor.hideDialog();
                        }
                    });
                });
            });
            K('#img3').click(function() {
                editor.loadPlugin('image', function() {
                    editor.plugin.imageDialog({
                        showRemote : false,
                        imageUrl : K('#url3').val(),
                        clickFn : function(url, title, width, height, border, align) {
                            K('#url3').val(url);
                            $('#img3').attr('src',url);
                            editor.hideDialog();
                        }
                    });
                });
            });
        });
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
       <li><a class="active">车主信息</a></li>
      </ul>
      <!--tabCont-->
      <div class="admin_tab_cont" style="display:block;">
      <!--左右分栏：左侧栏目-->
          <form method="post" action="jcdmin_login.php?m=czxx" enctype="multipart/form-data">
      <table class="table">
        <tr>
          <td>
              <ul class="ulColumn2">
  <li>
    <span class="item_name" style="width:120px;">车主姓名：</span>
    <input name="name" type="text" class="textbox" placeholder="请填写车主姓名" value="<?php echo $this->_tpl_vars['nicname']; ?>
"/>
     </li>
          <li>
            <span class="item_name" style="width:120px;">联系方式：</span>
            <input name="mobile" type="tel" class="textbox" placeholder="请填写联系方式" value="<?php echo $this->_tpl_vars['mobile']; ?>
"/>
                   </li>
		   <li>
		     <span class="item_name" style="width:120px;">车 牌 号：</span>
		     <input name="cars_num" type="text" class="textbox" placeholder="请填写车牌号"/>
		      </li>
		  
       <li>
        <span class="item_name" style="width:120px;">行 驶 证：</span>
           <img id="img1" src="../templates/jcdmin/images/up.jpg" width="104px" height="90px"/>
            <input class="textbox" type="hidden" name="xsz" id="url1" value=""/>
         </li>
	          <li>
        <span class="item_name" style="width:120px;">登记证书：</span>
                  <img id="img2" src="../templates/jcdmin/images/up.jpg" width="104px" height="90px"/>
                  <input class="textbox" type="hidden" name="djz" id="url2" value="" readonly />
       </li>
	   
	          <li>
        <span class="item_name" style="width:120px;">车辆铭牌：</span>
                  <img id="img3" src="../templates/jcdmin/images/up.jpg" width="104px" height="90px"/>
                  <input class="textbox" type="hidden" name="mp" id="url3" value="" readonly />
       </li>
	    <li>
        <span class="item_name" style="width:120px;">车 架 号：</span>
        <input name="cjh" type="text" class="textbox" placeholder="请填写车架号"/>
        </li>
        <li>  <span class="item_name" style="width:120px;"></span>
        <input type="submit" class="link_btn"/>
       </li>
 </ul>
          </td>
        </tr>
      </table>
          </form>
</div>
      <div class="admin_tab_cont">tabContent02，内容根据具体数据二次单独定义，公共样式单独调用</div>
      <div class="admin_tab_cont">可追加</div>
</div>
 </section>
</div>

</body>
</html>