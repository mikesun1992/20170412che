<?php /* Smarty version 2.6.18, created on 2017-04-05 17:01:28
         compiled from jcdmin/jbxx.html */ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>基础信息</title>
<meta name="author" content="DeathGhost" />
<link rel="stylesheet" type="text/css" href="../templates/jcdmin/css/style.css" />
<!--[if lt IE 9]>
    <script src="../templates/jcdmin/js/html5.js"></script>
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
        $(function(){
            //城市
            $("#province").change(function(){
                $.get("<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=ajax&ajax=1", {
                        cityid :  $("#province").val()
                    }, function (data, textStatus){
                        $("#city").html(data); // 把返回的数据添加到页面上
                    }
                );
            });
            $("#province1").change(function(){
                $.get("<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=ajax&ajax=1", {
                        cityid :  $("#province1").val()
                    }, function (data, textStatus){
                        $("#city1").html(data); // 把返回的数据添加到页面上
                    }
                );
            });
            $("input[name*='p_price']").blur(function(){
                var obj=$(this).next();//回调函数前先写入变量;
                $.get("<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=cars&ajax=1", {
                        p_id :  $(this).attr('valueid'),
                        price : $(this).val()
                    }, function (data){
                        obj.html("<img src='static/img/admin/onSuccess.gif' align='absmiddle'/>");
                    }
                );
            });
            //品牌选择
            $("#brand").change(function(){
                $.get("<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=ajax&ajax=1", {
                            brandid :  $("#brand").val()
                        }, function (data, textStatus){
                            $("#subbrand").html(data); // 把返回的数据添加到页面上
                        }
                );
            });
            //品牌选择
            $("#subbrand").change(function(){
                $.get("<?php echo $this->_tpl_vars['weburl']; ?>
/index.php?m=ajax&ajax=1", {
                            subbrandid :  $("#subbrand").val()
                        }, function (data, textStatus){
                            $("#subsubbrand").html(data); // 把返回的数据添加到页面上
                        }
                );
            });
        })
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
       <li><a class="active">基础信息</a></li>
      </ul>
      <!--tabCont-->
      <div class="admin_tab_cont" style="display:block;">
      <!--左右分栏：左侧栏目-->
          <form method="post" action="jcdmin_login.php?m=jbxx" enctype="multipart/form-data">
          <table class="table">
        <tr>
          <td><ul class="ulColumn2">
  <li>
    <span class="item_name" style="width:120px;">品牌型号：</span>
      <select name="p_brand" id="brand" class="select">
          <?php echo $this->_tpl_vars['select_brand']; ?>

      </select>
      <select id="subbrand" class="select" name="p_subbrand">
          <option  value="">请选择车系</option>
          <?php echo $this->_tpl_vars['select_subbrand']; ?>

      </select> &nbsp;
      <select class="select" id="subsubbrand" name="p_subsubbrand">
      <option  value="">请选择款式</option>
      <?php echo $this->_tpl_vars['select_subsubbrand']; ?>

  </select>
  </li>
          <li>
            <span class="item_name" style="width:120px;">上牌时间：</span>
              <select class="select" name="sp_year">
                  <?php echo $this->_tpl_vars['select_year']; ?>

              </select>
              <select class="select" name="sp_month">
                  <?php echo $this->_tpl_vars['select_month']; ?>

              </select>
          </li>
		   <li>
		     <span class="item_name" style="width:120px;">公 里 数：</span>
		     <input name="km" type="tel" class="textbox" placeholder="请填写公里数"/> /万公里
		   </li>
		   <li>
    <span class="item_name" style="width:120px;">销 售 地：</span>
           <select id="province" class="select" name="aid">
               <?php echo $this->_tpl_vars['selectprovincesearch']; ?>

           </select>
           <select id="city" class="select" name="cid">
               <option value="">请选择城市</option>
           </select>
           </li>
			   <li>
          <li>
    <span class="item_name" style="width:120px;">上 牌 地：</span>
           <select id="province1" class="select" name="s_aid">
               <?php echo $this->_tpl_vars['selectprovincesearch']; ?>

           </select>
           <select id="city1" class="select" name="s_cid">
               <option value="">请选择城市</option>
           </select>
           </li>
         <li>
    <span class="item_name" style="width:120px;">变 速 箱：</span>      <select class="select" name="bsx">
       <?php echo $this->_tpl_vars['select_transmission']; ?>

      </select></li>
	<li>
    <span class="item_name" style="width:120px;">排 量：</span>      <select class="select" name="pl">
        <?php echo $this->_tpl_vars['select_gas']; ?>

      </select></li>
              <li>
                  <span class="item_name" style="width:120px;">排放标准：</span>
                      <select name="p_emission" class="select">
                          <option value="">请选择</option>
                          <option value="国二">国二</option>
                          <option value="国三">国三</option>
                          <option value="国四">国四</option>
                          <option value="国五">国五</option>
                      </select>
               </li>
	<li>
    <span class="item_name" style="width:120px;">车辆类型：</span>      <select class="select" name="type">
        <?php echo $this->_tpl_vars['select_model']; ?>

      </select></li>
	  	<li>
    <span class="item_name" style="width:120px;">过户次数：</span>
        <input name="gh" type="tel" class="textbox" placeholder="请填写过户次数" />
        </li>
	    <li>
    <span class="item_name" style="width:120px;">年检到期：</span>
            <select class="select" name="nj_year">
                <?php echo $this->_tpl_vars['select_year']; ?>

            </select>
            <select class="select" name="nj_month">
                <?php echo $this->_tpl_vars['select_month']; ?>

            </select>
      </select>
        </li>
	  <li>
    <span class="item_name" style="width:120px;">强险到期：</span>
          <select class="select" name="jqx_year">
              <?php echo $this->_tpl_vars['select_year']; ?>

          </select>
          <select class="select" name="jqx_month">
              <?php echo $this->_tpl_vars['select_month']; ?>

          </select>
      </li>
	  <li>
    <span class="item_name" style="width:120px;">商险到期：</span>
          <select class="select" name="syx_year">
              <?php echo $this->_tpl_vars['select_year']; ?>

          </select>
          <select class="select" name="syx_month">
              <?php echo $this->_tpl_vars['select_month']; ?>

          </select>
      </li>
	  	  <li>
    <span class="item_name" style="width:120px;">车身颜色：</span>      <select class="select" name="color">
              <?php echo $this->_tpl_vars['select_color']; ?>

      </select></li>
       <li>
        <span class="item_name" style="width:120px;">检验标志：</span>
           <img id="img1" src="../templates/jcdmin/images/up.jpg" width="104px" height="90px"/>
           <input class="textbox" type="hidden" name="jd_pic" id="url1" value="" readonly />
         </li>
	   
	          <li>
        <span class="item_name" style="width:120px;">强险标志：</span>
                  <img id="img2" src="../templates/jcdmin/images/up.jpg" width="104px" height="90px"/>
                  <input class="textbox" type="hidden" name="jqx_pic" id="url2" value="" readonly />
       </li>
	   
	          <li>
        <span class="item_name" style="width:120px;">环保标志：</span>
                  <img id="img3" src="../templates/jcdmin/images/up.jpg" width="104px" height="90px"/>
                  <input class="textbox" type="hidden" name="hb_pic" id="url3" value="" readonly />
       </li>

            <label class="single_selection"></label>
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