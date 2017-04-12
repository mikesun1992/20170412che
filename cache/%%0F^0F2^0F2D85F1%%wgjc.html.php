<?php /* Smarty version 2.6.18, created on 2017-04-10 16:34:13
         compiled from jcdmin/wgjc.html */ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>车辆检测管理系统</title>
<meta name="author" content="DeathGhost" />
<link rel="stylesheet" type="text/css" href="../templates/jcdmin/css/style.css" />
<!--[if lt IE 9]>
<script src="../templates/jcdmin/js/html5.js"></script>
<![endif]-->

    <link rel="stylesheet" href="../kindeditor/themes/default/default.css" />
    <script charset="utf-8" src="../kindeditor/kindeditor-min.js"></script>
    <script charset="utf-8" src="../kindeditor/lang/zh_CN.js"></script>

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

    <script>
        KindEditor.ready(function(K) {
            var editor = K.editor({
                allowFileManager : true
            });
            K('#J_selectImage').click(function() {
                editor.loadPlugin('multiimage', function() {
                    editor.plugin.multiImageDialog({
                        clickFn : function(urlList) {
                            var div = K('#piclist');
                            K.each(urlList, function(i, data) {
                                var arr_picid = data.url.split("/");
                                var arr_length = arr_picid.length;
                                var arr_picids = arr_picid[arr_length-1].split(".");
                                div.append('<li id="'+arr_picids[0]+'"><img src="' + data.url + '" class="vt img"><div><span class="del"></span><input type="hidden" name="p_pics[]" value="'+ data.url +'"></div><p><span>设为封面</span><input type="hidden" name="url" value="'+ data.url +'"></p></li>');
                            });
                            editor.hideDialog();
                        }
                    });
                });
            });
        });
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
            K('#img4').click(function() {
                editor.loadPlugin('image', function() {
                    editor.plugin.imageDialog({
                        showRemote : false,
                        imageUrl : K('#url4').val(),
                        clickFn : function(url, title, width, height, border, align) {
                            K('#url4').val(url);
                            $('#img4').attr('src',url);
                            editor.hideDialog();
                        }
                    });
                });
            });
            K('#img5').click(function() {
                editor.loadPlugin('image', function() {
                    editor.plugin.imageDialog({
                        showRemote : false,
                        imageUrl : K('#url5').val(),
                        clickFn : function(url, title, width, height, border, align) {
                            K('#url5').val(url);
                            $('#img5').attr('src',url);
                            editor.hideDialog();
                        }
                    });
                });
            });
            K('#img6').click(function() {
                editor.loadPlugin('image', function() {
                    editor.plugin.imageDialog({
                        showRemote : false,
                        imageUrl : K('#url6').val(),
                        clickFn : function(url, title, width, height, border, align) {
                            K('#url6').val(url);
                            $('#img6').attr('src',url);

                            editor.hideDialog();
                        }
                    });
                });
            });
            K('#img7').click(function() {
                editor.loadPlugin('image', function() {
                    editor.plugin.imageDialog({
                        showRemote : false,
                        imageUrl : K('#url7').val(),
                        clickFn : function(url, title, width, height, border, align) {
                            K('#url7').val(url);
                            $('#img7').attr('src',url);
                            editor.hideDialog();
                        }
                    });
                });
            });
            K('#img8').click(function() {
                editor.loadPlugin('image', function() {
                    editor.plugin.imageDialog({
                        showRemote : false,
                        imageUrl : K('#url8').val(),
                        clickFn : function(url, title, width, height, border, align) {
                            K('#url8').val(url);
                            $('#img8').attr('src',url);

                            editor.hideDialog();
                        }
                    });
                });
            });
            K('#img9').click(function() {
                editor.loadPlugin('image', function() {
                    editor.plugin.imageDialog({
                        showRemote : false,
                        imageUrl : K('#url9').val(),
                        clickFn : function(url, title, width, height, border, align) {
                            K('#url9').val(url);
                            $('#img9').attr('src',url);
                            editor.hideDialog();
                        }
                    });
                });
            });
            K('#img10').click(function() {
                editor.loadPlugin('image', function() {
                    editor.plugin.imageDialog({
                        showRemote : false,
                        imageUrl : K('#url10').val(),
                        clickFn : function(url, title, width, height, border, align) {
                            K('#url10').val(url);
                            $('#img10').attr('src',url);
                            editor.hideDialog();
                        }
                    });
                });
            });
            K('#img11').click(function() {
                editor.loadPlugin('image', function() {
                    editor.plugin.imageDialog({
                        showRemote : false,
                        imageUrl : K('#url11').val(),
                        clickFn : function(url, title, width, height, border, align) {
                            K('#url11').val(url);

                            $('#img11').attr('src',url);
                            editor.hideDialog();
                        }
                    });
                });
            });
            K('#img12').click(function() {
                editor.loadPlugin('image', function() {
                    editor.plugin.imageDialog({
                        showRemote : false,
                        imageUrl : K('#url12').val(),
                        clickFn : function(url, title, width, height, border, align) {
                            K('#url12').val(url);
                            $('#img12').attr('src',url);
                            editor.hideDialog();
                        }
                    });
                });
            });
            K('#img13').click(function() {
                editor.loadPlugin('image', function() {
                    editor.plugin.imageDialog({
                        showRemote : false,
                        imageUrl : K('#url13').val(),
                        clickFn : function(url, title, width, height, border, align) {
                            K('#url13').val(url);
                            $('#img13').attr('src',url);

                            editor.hideDialog();
                        }
                    });
                });
            });
            K('#img14').click(function() {
                editor.loadPlugin('image', function() {
                    editor.plugin.imageDialog({
                        showRemote : false,
                        imageUrl : K('#url14').val(),
                        clickFn : function(url, title, width, height, border, align) {
                            K('#url14').val(url);
                            $('#img14').attr('src',url);
                            editor.hideDialog();
                        }
                    });
                });
            });

            K('#img15').click(function() {
                editor.loadPlugin('image', function() {
                    editor.plugin.imageDialog({
                        showRemote : false,
                        imageUrl : K('#url15').val(),
                        clickFn : function(url, title, width, height, border, align) {
                            K('#url15').val(url);
                            $('#img15').attr('src',url);
                            editor.hideDialog();
                        }
                    });
                });
            });

            K('#img16').click(function() {
                editor.loadPlugin('image', function() {
                    editor.plugin.imageDialog({
                        showRemote : false,
                        imageUrl : K('#url16').val(),
                        clickFn : function(url, title, width, height, border, align) {
                            K('#url16').val(url);
                            $('#img16').attr('src',url);
                            editor.hideDialog();
                        }
                    });
                });
            });
            K('#img17').click(function() {
                editor.loadPlugin('image', function() {
                    editor.plugin.imageDialog({
                        showRemote : false,
                        imageUrl : K('#url17').val(),
                        clickFn : function(url, title, width, height, border, align) {
                            K('#url17').val(url);
                            $('#img17').attr('src',url);
                            editor.hideDialog();
                        }
                    });
                });
            });
            K('#img18').click(function() {
                editor.loadPlugin('image', function() {
                    editor.plugin.imageDialog({
                        showRemote : false,
                        imageUrl : K('#url18').val(),
                        clickFn : function(url, title, width, height, border, align) {
                            K('#url18').val(url);
                            $('#img18').attr('src',url);
                            editor.hideDialog();
                        }
                    });
                });
            });
            K('#img19').click(function() {
                editor.loadPlugin('image', function() {
                    editor.plugin.imageDialog({
                        showRemote : false,
                        imageUrl : K('#url19').val(),
                        clickFn : function(url, title, width, height, border, align) {
                            K('#url19').val(url);
                            $('#img19').attr('src',url);
                            editor.hideDialog();
                        }
                    });
                });
            });
            K('#img20').click(function() {
                editor.loadPlugin('image', function() {
                    editor.plugin.imageDialog({
                        showRemote : false,
                        imageUrl : K('#url20').val(),
                        clickFn : function(url, title, width, height, border, align) {
                            K('#url20').val(url);
                            $('#img20').attr('src',url);
                            editor.hideDialog();
                        }
                    });
                });
            });
            K('#img21').click(function() {
                editor.loadPlugin('image', function() {
                    editor.plugin.imageDialog({
                        showRemote : false,
                        imageUrl : K('#url21').val(),
                        clickFn : function(url, title, width, height, border, align) {
                            K('#url21').val(url);

                            $('#img21').attr('src',url);
                            editor.hideDialog();
                        }
                    });
                });
            });
            K('#img22').click(function() {
                editor.loadPlugin('image', function() {
                    editor.plugin.imageDialog({
                        showRemote : false,
                        imageUrl : K('#url22').val(),
                        clickFn : function(url, title, width, height, border, align) {
                            K('#url22').val(url);
                            $('#img22').attr('src',url);

                            editor.hideDialog();
                        }
                    });
                });
            });

            K('#img24').click(function() {
                editor.loadPlugin('image', function() {
                    editor.plugin.imageDialog({
                        showRemote : false,
                        imageUrl : K('#url24').val(),
                        clickFn : function(url, title, width, height, border, align) {
                            K('#url24').val(url);

                            $('#img24').attr('src',url);
                            editor.hideDialog();
                        }
                    });
                });
            });
            K('#img25').click(function() {
                editor.loadPlugin('image', function() {
                    editor.plugin.imageDialog({
                        showRemote : false,
                        imageUrl : K('#url25').val(),
                        clickFn : function(url, title, width, height, border, align) {
                            K('#url25').val(url);
                            $('#img25').attr('src',url);
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
       <li><a class="active">外观检测</a></li>
      </ul>
      <!--tabCont-->
      <form method="post" action="jcdmin_login.php?m=wgjc" enctype="multipart/form-data">
      <!--左右分栏：左侧栏目-->
      <table class="table">
        <tr>
          <td>

    <script language="javascript" type="text/javascript">
        /***
        *功能：隐藏和显示div
        *参数divDisplay：html标签id
        ***/
        function click_a(divDisplay)
        {
            if(document.getElementById(divDisplay).style.display != "block")
            {
                document.getElementById(divDisplay).style.display = "block";
            }
            else
            {
                document.getElementById(divDisplay).style.display = "none";
            }
        }
    </script>
	<div id="divOne_2"  style="display:block">
				<div class="demo"> 
<a onclick="return click_a('divOne_2')" style="cursor:pointer;" class="textbox">左右检测项切换</a>
</div>
		  <ul class="ulColumn2">
 <h1>左侧项</h1> 
		<li>
    <span class="item_nameS" >左前保险杠：</span>
            <label for="zq_bxg_a" >完好</label>&nbsp;&nbsp;<input id="zq_bxg_a" type="radio" value="1" name="zq_bxg"/>&nbsp;&nbsp;
            <label for="zq_bxg_b" >更换</label>&nbsp;&nbsp;<input id="zq_bxg_b" type="radio" value="2" name="zq_bxg" />
            <label for="zq_bxg_c" >做漆</label>&nbsp;&nbsp;<input id="zq_bxg_c" type="radio" value="3" name="zq_bxg" />
            <label for="zq_bxg_d" >钣金</label>&nbsp;&nbsp;<input id="zq_bxg_d" type="radio" value="4" name="zq_bxg" />
            </li>
              <li>
            <span class="item_name" >划痕：&nbsp;</span>
            <label for="zq_bxg_hh_a" >有</label>&nbsp;&nbsp;<input id="zq_bxg_hh_a" type="radio" value="1" name="zq_bxg_hh"/>&nbsp;&nbsp;
            <label for="zq_bxg_hh_b" >无</label>&nbsp;&nbsp;<input id="zq_bxg_hh_b" type="radio" value="2" name="zq_bxg_hh"  checked />&nbsp;&nbsp;
            <span class="item_name" >凹陷：&nbsp;</span>
            <label for="zq_bxg_ax_a" >有</label>&nbsp;&nbsp;<input id="zq_bxg_ax_a" type="radio" value="1" name="zq_bxg_ax"/>&nbsp;&nbsp;
            <label for="zq_bxg_ax_b" >无</label>&nbsp;&nbsp;<input id="zq_bxg_ax_b" type="radio" value="2" name="zq_bxg_ax"  checked />&nbsp;
            <span class="item_name" >破损：&nbsp;</span>
            <label for="zq_bxg_ps_a3" >有</label>&nbsp;&nbsp;<input id="zq_bxg_ps_a3" type="radio" value="1" name="zq_bxg_ps"/>&nbsp;&nbsp;
            <label for="zq_bxg_ps_b3" >无</label>&nbsp;&nbsp;<input id="zq_bxg_ps_b3" type="radio" value="2" name="zq_bxg_ps"  checked />
                  <span class="item_name" >裂痕：&nbsp;</span>
                  <label for="zq_bxg_lh_a3" >有</label>&nbsp;&nbsp;<input id="zq_bxg_lh_a3" type="radio" value="1" name="zq_bxg_lh"/>&nbsp;&nbsp;
                  <label for="zq_bxg_lh_b3" >无</label>&nbsp;&nbsp;<input id="zq_bxg_lh_b3" type="radio" value="2" name="zq_bxg_lh"  checked />
              </li>
              <li>
                <span class="item_name" >缺陷图片:&nbsp;</span>
                  <img id="img1" src="../templates/jcdmin/images/up.jpg" width="100px" height="80px"/>
                <input class="textbox" type="hidden" name="zq_bxg_pic" id="url1" value="" readonly/>
              </li>
<br/>

              <li>
                  <span class="item_nameS" >右前保险杠：</span>
                  <label for="yq_bxg_a" >完好</label>&nbsp;&nbsp;<input id="yq_bxg_a" type="radio" value="1" name="yq_bxg" />&nbsp;&nbsp;
                  <label for="yq_bxg_b" >更换</label>&nbsp;&nbsp;<input id="yq_bxg_b" type="radio" value="2" name="yq_bxg" />
                  <label for="yq_bxg_c" >做漆</label>&nbsp;&nbsp;<input id="yq_bxg_c" type="radio" value="3" name="yq_bxg" />
                  <label for="yq_bxg_d" >钣金</label>&nbsp;&nbsp;<input id="yq_bxg_d" type="radio" value="4" name="yq_bxg" />
              </li>
              <li><span class="item_name" >划痕：&nbsp;</span>
                  <label for="yq_bxg_hh_a" >有</label>&nbsp;&nbsp;<input id="yq_bxg_hh_a" type="radio" value="1" name="yq_bxg_hh"/>&nbsp;&nbsp;
                  <label for="yq_bxg_hh_b" >无</label>&nbsp;&nbsp;<input id="yq_bxg_hh_b" type="radio" value="2" name="yq_bxg_hh"  checked />&nbsp;&nbsp;
                <span class="item_name" >凹陷：&nbsp;</span>
                  <label for="yq_bxg_ax_a2" >有</label>
                  &nbsp;&nbsp;
                  <input id="yq_bxg_ax_a2" type="radio" value="1" name="yq_bxg_ax"/>
                  &nbsp;&nbsp;
                  <label for="yq_bxg_ax_b2" >无</label>
                  &nbsp;&nbsp;
                  <input id="yq_bxg_ax_b2" type="radio" value="2" name="yq_bxg_ax"  checked />
                <span class="item_name" >破损：&nbsp;</span>
                  <label for="yq_bxg_ps_a2" >有</label>
                  &nbsp;&nbsp;
                  <input id="yq_bxg_ps_a2" type="radio" value="1" name="yq_bxg_ps"/>
                  &nbsp;&nbsp;
                  <label for="yq_bxg_ps_b2" >无</label>
                  &nbsp;&nbsp;
                  <input id="yq_bxg_ps_b2" type="radio" value="2" name="yq_bxg_ps"  checked />
                  <span class="item_name" >裂痕：&nbsp;</span>
                  <label for="yq_bxg_lh_a3" >有</label>&nbsp;&nbsp;<input id="yq_bxg_lh_a3" type="radio" value="1" name="yq_bxg_lh"/>&nbsp;&nbsp;
                  <label for="yq_bxg_lh_b3" >无</label>&nbsp;&nbsp;<input id="yq_bxg_lh_b3" type="radio" value="2" name="yq_bxg_lh"  checked />
              </li>
              <li>
                  <span class="item_name" >缺陷图片:&nbsp;</span>
                  <img id="img2" src="../templates/jcdmin/images/up.jpg" width="100px" height="80px"/>
                  <input class="textbox" type="hidden" name="yq_bxg_pic" id="url2" value="" readonly/>
              </li>
              <br/>


              <li>
                  <span class="item_nameS" >发动机盖：</span>
                  <label for="fdj_a" >完好</label>&nbsp;&nbsp;<input id="fdj_a" type="radio" value="1" name="fdj"/>&nbsp;&nbsp;
                  <label for="fdj_b" >更换</label>&nbsp;&nbsp;<input id="fdj_b" type="radio" value="2" name="fdj" />
                  <label for="fdj_c" >做漆</label>&nbsp;&nbsp;<input id="fdj_c" type="radio" value="3" name="fdj" />
                  <label for="fdj_d" >钣金</label>&nbsp;&nbsp;<input id="fdj_d" type="radio" value="4" name="fdj" />
              </li>
              <li>
                  <span class="item_name" >划痕：&nbsp;</span>
                  <label for="fdj_hh_a" >有</label>&nbsp;&nbsp;<input id="fdj_hh_a" type="radio" value="1" name="fdj_hh"/>&nbsp;&nbsp;
                  <label for="fdj_hh_b" >无</label>&nbsp;&nbsp;<input id="fdj_hh_b" type="radio" value="2" name="fdj_hh"  checked />
                  &nbsp;&nbsp;<span class="item_name" >凹陷：</span>
                  <label for="fdj_ax_a2" >有</label>
                  &nbsp;
                  <input id="fdj_ax_a2" type="radio" value="1" name="fdj_ax"/>
                  &nbsp;&nbsp;
                  <label for="fdj_ax_b2" >无</label>
                  &nbsp;&nbsp;
                  <input id="fdj_ax_b2" type="radio" value="2" name="fdj_ax"  checked />
                  &nbsp;&nbsp;<span class="item_name" >破损：&nbsp;</span>
                  <label for="fdj_ps_a2" >有</label>
                  &nbsp;&nbsp;
                  <input id="fdj_ps_a2" type="radio" value="1" name="fdj_ps"/>
                  &nbsp;
                  <label for="fdj_ps_b2" >无</label>
                  &nbsp;
                  <input id="fdj_ps_b2" type="radio" value="2" name="fdj_ps"  checked />
                  <span class="item_name" >裂痕：&nbsp;</span>
                  <label for="fdj_lh_a3" >有</label>&nbsp;&nbsp;<input id="fdj_lh_a3" type="radio" value="1" name="fdj_lh"/>&nbsp;&nbsp;
                  <label for="fdj_lh_b3" >无</label>&nbsp;&nbsp;<input id="fdj_lh_b3" type="radio" value="2" name="fdj_lh"  checked />
              </li>
              <li>
                  <span class="item_name" >缺陷图片:&nbsp;</span>
                  <img id="img22" src="../templates/jcdmin/images/up.jpg" width="100px" height="80px"/>
                  <input class="textbox" type="hidden" name="fdj_pic" id="url22" value="" readonly/>

              </li><br/>


              <li>
                  <span class="item_nameS" >左前翼子板：</span>
                  <label for="zq_yzb_a" >完好</label>&nbsp;&nbsp;<input id="zq_yzb_a" type="radio" value="1" name="zq_yzb"/>&nbsp;&nbsp;
                  <label for="zq_yzb_b" >更换</label>&nbsp;&nbsp;<input id="zq_yzb_b" type="radio" value="2" name="zq_yzb" />
                  <label for="zq_yzb_c" >做漆</label>&nbsp;&nbsp;<input id="zq_yzb_c" type="radio" value="3" name="zq_yzb" />
                  <label for="zq_yzb_d" >钣金</label>&nbsp;&nbsp;<input id="zq_yzb_d" type="radio" value="4" name="zq_yzb" />
              </li>
              <li>
                  <span class="item_name" >划痕：&nbsp;</span>
                  <label for="zq_yzb_hh_a" >有</label>&nbsp;&nbsp;<input id="zq_yzb_hh_a" type="radio" value="1" name="zq_yzb_hh"/>&nbsp;&nbsp;
                  <label for="zq_yzb_hh_b" >无</label>&nbsp;&nbsp;<input id="zq_yzb_hh_b" type="radio" value="2" name="zq_yzb_hh"  checked />&nbsp;&nbsp;
                  <span class="item_name" >凹陷：&nbsp;</span>
                  <label for="zq_yzb_ax_a2" >有</label>
                  &nbsp;&nbsp;
                  <input id="zq_yzb_ax_a2" type="radio" value="1" name="zq_yzb_ax"/>
                  &nbsp;&nbsp;
                  <label for="zq_yzb_ax_b2" >无</label>
                  &nbsp;&nbsp;
                  <input id="zq_yzb_ax_b2" type="radio" value="2" name="zq_yzb_ax"  checked />
                  &nbsp; <span class="item_name" >破损：&nbsp;</span>
                  <label for="zq_yzb_ps_a2" >有</label>

                  <input id="zq_yzb_ps_a2" type="radio" value="1" name="zq_yzb_ps"/>
                  &nbsp;&nbsp;
                  <label for="zq_yzb_ps_b2" >无</label>
                  &nbsp;&nbsp;
                  <input id="zq_yzb_ps_b2" type="radio" value="2" name="zq_yzb_ps"  checked />
                  &nbsp;
                  <span class="item_name" >裂痕：&nbsp;</span>
                  <label for="zq_yzb_lh_a3" >有</label>&nbsp;&nbsp;<input id="zq_yzb_lh_a3" type="radio" value="1" name="zq_yzb_lh"/>&nbsp;&nbsp;
                  <label for="zq_yzb_lh_b3" >无</label>&nbsp;&nbsp;<input id="zq_yzb_lh_b3" type="radio" value="2" name="zq_yzb_lh"  checked />
              </li>
              <li>
                  <span class="item_name" >缺陷图片:&nbsp;</span>
                  <img id="img5" src="../templates/jcdmin/images/up.jpg" width="100px" height="80px"/>
                  <input class="textbox" type="hidden" name="zq_yzb_pic" id="url5" value="" readonly/>
              </li><br/>

              <li>
                  <span class="item_nameS" >左A柱：</span>
                  <label for="zaz_a" >完好</label>&nbsp;&nbsp;<input id="zaz_a" type="radio" value="1" name="zaz"/>&nbsp;&nbsp;
                  <label for="zaz_b" >更换</label>&nbsp;&nbsp;<input id="zaz_b" type="radio" value="2" name="zaz" />
                  <label for="zaz_c" >做漆</label>&nbsp;&nbsp;<input id="zaz_c" type="radio" value="3" name="zaz" />
                  <label for="zaz_d" >钣金</label>&nbsp;&nbsp;<input id="zaz_d" type="radio" value="4" name="zaz" />
              </li>
              <li>
                  <span class="item_name" >划痕：&nbsp;</span>
                  <label for="zaz_hh_a" >有</label>&nbsp;&nbsp;<input id="zaz_hh_a" type="radio" value="1" name="zaz_hh"/>&nbsp;&nbsp;
                  <label for="zaz_hh_b" >无</label>&nbsp;&nbsp;<input id="zaz_hh_b" type="radio" value="2" name="zaz_hh"  checked />&nbsp;&nbsp;<span class="item_name" >凹陷：&nbsp;</span>
                  <label for="zaz_ax_a2" >有</label>
                  &nbsp;&nbsp;
                  <input id="zaz_ax_a2" type="radio" value="1" name="zaz_ax"/>
                  &nbsp;&nbsp;
                  <label for="zaz_ax_b2" >无</label>
                  &nbsp;&nbsp;
                  <input id="zaz_ax_b2" type="radio" value="2" name="zaz_ax"  checked />
                  <span class="item_name" >破损：&nbsp;</span>
                  <label for="zaz_ps_a2" >有</label>
                  &nbsp;&nbsp;
                  <input id="zaz_ps_a2" type="radio" value="1" name="zaz_ps"/>
                  &nbsp;&nbsp;
                  <label for="zaz_ps_b2" >无</label>
                  &nbsp;&nbsp;
                  <input id="zaz_ps_b2" type="radio" value="2" name="zaz_ps"  checked />

                  <span class="item_name" >裂痕：&nbsp;</span>
                  <label for="zaz_lh_a3" >有</label>&nbsp;&nbsp;<input id="zaz_lh_a3" type="radio" value="1" name="zaz_lh"/>&nbsp;&nbsp;
                  <label for="zaz_lh_b3" >无</label>&nbsp;&nbsp;<input id="zaz_lh_b3" type="radio" value="2" name="zaz_lh"  checked />
              </li>
              <li>
                  <span class="item_name" >缺陷图片:&nbsp;</span>
                  <img id="img9" src="../templates/jcdmin/images/up.jpg" width="100px" height="80px"/>
                  <input class="textbox" type="hidden" name="zaz_pic" id="url9" value="" readonly/>
              </li><br/>


              <li>
                  <span class="item_nameS" >左前门：</span>
                  <label for="zqm_a" >完好</label>&nbsp;&nbsp;<input id="zqm_a" type="radio" value="1" name="zqm"/>&nbsp;&nbsp;
                  <label for="zqm_b" >更换</label>&nbsp;&nbsp;<input id="zqm_b" type="radio" value="2" name="zqm" />
                  <label for="zqm_c" >做漆</label>&nbsp;&nbsp;<input id="zqm_c" type="radio" value="3" name="zqm" />
                  <label for="zqm_d" >钣金</label>&nbsp;&nbsp;<input id="zqm_d" type="radio" value="4" name="zqm" />
              </li>
              <li>
                  <span class="item_name" >划痕：&nbsp;</span>
                  <label for="zqm_hh_a" >有</label>&nbsp;&nbsp;<input id="zqm_hh_a" type="radio" value="1" name="zqm_hh"/>&nbsp;&nbsp;
                  <label for="zqm_hh_b" >无</label>&nbsp;&nbsp;<input id="zqm_hh_b" type="radio" value="2" name="zqm_hh"  checked />&nbsp;<span class="item_name" >凹陷：&nbsp;</span>
                  <label for="zqm_ax_a2" >有</label>
                  &nbsp;&nbsp;
                  <input id="zqm_ax_a2" type="radio" value="1" name="zqm_ax"/>
                  &nbsp;&nbsp;
                  <label for="zqm_ax_b2" >无</label>
                  &nbsp;&nbsp;
                  <input id="zqm_ax_b2" type="radio" value="2" name="zqm_ax"  checked />
                  <span class="item_name" >破损：&nbsp;</span>
                  <label for="zqm_ps_a2" >有</label>
                  &nbsp;&nbsp;
                  <input id="zqm_ps_a2" type="radio" value="1" name="zqm_ps"/>
                  &nbsp;&nbsp;
                  <label for="zqm_ps_b2" >无</label>
                  &nbsp;&nbsp;
                  <input id="zqm_ps_b2" type="radio" value="2" name="zqm_ps"  checked />
                  &nbsp;
                  <span class="item_name" >裂痕：&nbsp;</span>
                  <label for="zqm_lh_a3" >有</label>&nbsp;&nbsp;<input id="zqm_lh_a3" type="radio" value="1" name="zqm_lh"/>&nbsp;&nbsp;
                  <label for="zqm_lh_b3" >无</label>&nbsp;&nbsp;<input id="zqm_lh_b3" type="radio" value="2" name="zqm_lh"  checked />
              </li>
              <li>
                  <span class="item_name" >缺陷图片:&nbsp;</span>
                  <img id="img15" src="../templates/jcdmin/images/up.jpg" width="100px" height="80px"/>
                  <input class="textbox" type="hidden" name="zqm_pic" id="url15" value="" readonly/>
              </li>
              <li>
                  <span class="item_name" >备注信息:&nbsp;</span>
                  <input class="textbox" type="text" name="zqm_msg"/>
              </li><br/>


              <li>
                  <span class="item_nameS" >左B柱：</span>
                  <label for="zbz_a" >完好</label>&nbsp;&nbsp;<input id="zbz_a" type="radio" value="1" name="zbz"/>&nbsp;&nbsp;
                  <label for="zbz_b" >更换</label>&nbsp;&nbsp;<input id="zbz_b" type="radio" value="2" name="zbz" />
                  <label for="zbz_c" >做漆</label>&nbsp;&nbsp;<input id="zbz_c" type="radio" value="3" name="zbz" />
                  <label for="zbz_d" >钣金</label>&nbsp;&nbsp;<input id="zbz_d" type="radio" value="4" name="zbz" />
              </li>
              <li>
                  <span class="item_name" >划痕：&nbsp;</span>
                  <label for="zbz_hh_a" >有</label>&nbsp;&nbsp;<input id="zbz_hh_a" type="radio" value="1" name="zbz_hh"/>&nbsp;&nbsp;
                  <label for="zbz_hh_b" >无</label>&nbsp;&nbsp;<input id="zbz_hh_b" type="radio" value="2" name="zbz_hh"  checked />
                  <span class="item_name" >凹陷：&nbsp;</span>
                  <label for="zbz_ax_a2" >有</label>
                  &nbsp;&nbsp;
                  <input id="zbz_ax_a2" type="radio" value="1" name="zbz_ax"/>
                  &nbsp;&nbsp;
                  <label for="zbz_ax_b2" >无</label>
                  &nbsp;&nbsp;
                  <input id="zbz_ax_b2" type="radio" value="2" name="zbz_ax"  checked />
                  &nbsp;<span class="item_name" >破损：&nbsp;</span>
                  <label for="zbz_ps_a2" >有</label>
                  &nbsp;&nbsp;
                  <input id="zbz_ps_a2" type="radio" value="1" name="zbz_ps"/>
                  &nbsp;&nbsp;
                  <label for="zbz_ps_b2" >无</label>
                  &nbsp;&nbsp;
                  <input id="zbz_ps_b2" type="radio" value="2" name="zbz_ps"  checked />

                  <span class="item_name" >裂痕：&nbsp;</span>
                  <label for="zbz_lh_a3" >有</label>&nbsp;&nbsp;<input id="zbz_lh_a3" type="radio" value="1" name="zbz_lh"/>&nbsp;&nbsp;
                  <label for="zbz_lh_b3" >无</label>&nbsp;&nbsp;<input id="zbz_lh_b3" type="radio" value="2" name="zbz_lh"  checked />
              </li>
              <li>
                  <span class="item_name" >缺陷图片:&nbsp;</span>
                  <img id="img11" src="../templates/jcdmin/images/up.jpg" width="100px" height="80px"/>
                  <input class="textbox" type="hidden" name="zbz_pic" id="url11" value="" readonly/>
              </li><br/>

              <li>
                  <span class="item_nameS" >左后门：</span>
                  <label for="zhm_a" >完好</label>&nbsp;&nbsp;<input id="zhm_a" type="radio" value="1" name="zhm"/>&nbsp;&nbsp;
                  <label for="zhm_b" >更换</label>&nbsp;&nbsp;<input id="zhm_b" type="radio" value="2" name="zhm" />
                  <label for="zhm_c" >做漆</label>&nbsp;&nbsp;<input id="zhm_c" type="radio" value="3" name="zhm" />
                  <label for="zhm_d" >钣金</label>&nbsp;&nbsp;<input id="zhm_d" type="radio" value="4" name="zhm" />
              </li>
              <li>
                  <span class="item_name" >划痕：&nbsp;</span>
                  <label for="zhm_hh_a" >有</label>&nbsp;&nbsp;<input id="zhm_hh_a" type="radio" value="1" name="zhm_hh"/>&nbsp;&nbsp;
                  <label for="zhm_hh_b" >无</label>
                  &nbsp;
                  <input id="zhm_hh_b" type="radio" value="2" name="zhm_hh"  checked />&nbsp;&nbsp;<span class="item_name" >凹陷：&nbsp;</span>
                  <label for="zhm_ax_a2" >有</label>
                  &nbsp;&nbsp;
                  <input id="zhm_ax_a2" type="radio" value="1" name="zhm_ax"/>
                  &nbsp;&nbsp;
                  <label for="zhm_ax_b2" >无</label>
                  &nbsp;&nbsp;
                  <input id="zhm_ax_b2" type="radio" value="2" name="zhm_ax"  checked />
                  &nbsp;<span class="item_name" >破损：</span>
                  <label for="zhm_ps_a2" >有</label>
                  &nbsp;
                  <input id="zhm_ps_a2" type="radio" value="1" name="zhm_ps"/>
                  &nbsp;&nbsp;
                  <label for="zhm_ps_b2" >无</label>
                  <input id="zhm_ps_b2" type="radio" value="2" name="zhm_ps"  checked />
                  &nbsp;&nbsp;

                  <span class="item_name" >裂痕：&nbsp;</span>
                  <label for="zhm_lh_a3" >有</label>&nbsp;&nbsp;<input id="zhm_lh_a3" type="radio" value="1" name="zhm_lh"/>&nbsp;&nbsp;
                  <label for="zhm_lh_b3" >无</label>&nbsp;&nbsp;<input id="zhm_lh_b3" type="radio" value="2" name="zhm_lh"  checked />
              </li>
              <li>
                  <span class="item_name" >缺陷图片:&nbsp;</span>

                  <img id="img17" src="../templates/jcdmin/images/up.jpg" width="100px" height="80px"/>
                  <input class="textbox" type="hidden" name="zhm_pic" id="url17" value="" readonly/>
              </li>
              <li>
                  <span class="item_name" >备注信息:&nbsp;</span>
                  <input class="textbox" type="text" name="zhm_msg" />
              </li>
              <br/>

              <li>
                  <span class="item_nameS" >左C柱：</span>
                  <label for="zcz_a" >完好</label>&nbsp;&nbsp;<input id="zcz_a" type="radio" value="1" name="zcz"/>&nbsp;&nbsp;
                  <label for="zcz_b" >更换</label>&nbsp;&nbsp;<input id="zcz_b" type="radio" value="2" name="zcz" />
                  <label for="zcz_c" >做漆</label>&nbsp;&nbsp;<input id="zcz_c" type="radio" value="3" name="zcz" />
                  <label for="zcz_d" >钣金</label>&nbsp;&nbsp;<input id="zcz_d" type="radio" value="4" name="zcz" />
              </li>
              <li>
                  <span class="item_name" >划痕：&nbsp;</span>
                  <label for="zcz_hh_a" >有</label>&nbsp;&nbsp;<input id="zcz_hh_a" type="radio" value="1" name="zcz_hh"/>&nbsp;&nbsp;
                  <label for="zcz_hh_b" >无</label>&nbsp;&nbsp;<input id="zcz_hh_b" type="radio" value="2" name="zcz_hh"  checked />&nbsp;<span class="item_name" >凹陷：&nbsp;</span>
                  <label for="zcz_ax_a2" >有</label>
                  &nbsp;&nbsp;
                  <input id="zcz_ax_a2" type="radio" value="1" name="zcz_ax"/>
                  &nbsp;&nbsp;
                  <label for="zcz_ax_b2" >无</label>
                  &nbsp;&nbsp;
                  <input id="zcz_ax_b2" type="radio" value="2" name="zcz_ax"  checked />
                  <span class="item_name" >破损：&nbsp;</span>
                  <label for="zcz_ps_a2" >有</label>
                  &nbsp;&nbsp;
                  <input id="zcz_ps_a2" type="radio" value="1" name="zcz_ps"/>
                  &nbsp;&nbsp;
                  <label for="zcz_ps_b2" >无</label>
                  &nbsp;&nbsp;
                  <input id="zcz_ps_b2" type="radio" value="2" name="zcz_ps"  checked />
                  &nbsp;


                  <span class="item_name" >裂痕：&nbsp;</span>
                  <label for="zcz_lh_a3" >有</label>&nbsp;&nbsp;<input id="zcz_lh_a3" type="radio" value="1" name="zcz_lh"/>&nbsp;&nbsp;
                  <label for="zcz_lh_b3" >无</label>&nbsp;&nbsp;<input id="zcz_lh_b3" type="radio" value="2" name="zcz_lh"  checked />
              </li>
              <li>
                  <span class="item_name" >缺陷图片:&nbsp;</span>
                  <img id="img13" src="../templates/jcdmin/images/up.jpg" width="100px" height="80px"/>
                  <input class="textbox" type="hidden" name="zcz_pic" id="url13" value="" readonly/>
              </li><br/>

              <li>
                  <span class="item_nameS" >左后翼子板：</span>
                  <label for="zh_yzb_a" >完好</label>&nbsp;&nbsp;<input id="zh_yzb_a" type="radio" value="1" name="zh_yzb"/>&nbsp;&nbsp;
                  <label for="zh_yzb_b" >更换</label>&nbsp;&nbsp;<input id="zh_yzb_b" type="radio" value="2" name="zh_yzb" />
                  <label for="zh_yzb_c" >做漆</label>&nbsp;&nbsp;<input id="zh_yzb_c" type="radio" value="3" name="zh_yzb" />
                  <label for="zh_yzb_d" >钣金</label>&nbsp;&nbsp;<input id="zh_yzb_d" type="radio" value="4" name="zh_yzb" />
              </li>
              <li>
                  <span class="item_name" >划痕：&nbsp;</span>
                  <label for="zh_yzb_hh_a" >有</label>&nbsp;&nbsp;<input id="zh_yzb_hh_a" type="radio" value="1" name="zh_yzb_hh"/>&nbsp;&nbsp;
                  <label for="zh_yzb_hh_b" >无</label>&nbsp;&nbsp;<input id="zh_yzb_hh_b" type="radio" value="2" name="zh_yzb_hh"  checked />
                  <span class="item_name" >凹陷：&nbsp;</span>
                  <label for="zh_yzb_ax_a2" >有</label>
                  &nbsp;&nbsp;
                  <input id="zh_yzb_ax_a2" type="radio" value="1" name="zh_yzb_ax"/>
                  &nbsp;&nbsp;
                  <label for="zh_yzb_ax_b2" >无</label>
                  &nbsp;&nbsp;
                  <input id="zh_yzb_ax_b2" type="radio" value="2" name="zh_yzb_ax"  checked />
                  <span class="item_name" >破损：&nbsp;</span>
                  <label for="zh_yzb_ps_a2" >有</label>
                  &nbsp;&nbsp;
                  <input id="zh_yzb_ps_a2" type="radio" value="1" name="zh_yzb_ps"/>
                  &nbsp;&nbsp;
                  <label for="zh_yzb_ps_b2" >无</label>
                  &nbsp;&nbsp;
                  <input id="zh_yzb_ps_b2" type="radio" value="2" name="zh_yzb_ps"  checked />
                  &nbsp;&nbsp;&nbsp;

                  <span class="item_name" >裂痕：&nbsp;</span>
                  <label for="zh_yzb_lh_a3" >有</label>&nbsp;&nbsp;<input id="zh_yzb_lh_a3" type="radio" value="1" name="zh_yzb_lh"/>&nbsp;&nbsp;
                  <label for="zh_yzb_lh_b3" >无</label>&nbsp;&nbsp;<input id="zh_yzb_lh_b3" type="radio" value="2" name="zh_yzb_lh"  checked />
              </li>

              <li>
                  <span class="item_name" >缺陷图片:&nbsp;</span>
                  <img id="img7" src="../templates/jcdmin/images/up.jpg" width="100px" height="80px"/>
                  <input class="textbox" type="hidden" name="zh_yzb_pic" id="url7" value="" readonly/>
              </li><br/>

              <li>
                  <span class="item_nameS" >左车顶：</span>
                  <label for="zcd_a" >完好</label>&nbsp;&nbsp;<input id="zcd_a" type="radio" value="1" name="zcd"/>&nbsp;&nbsp;
                  <label for="zcd_b" >更换</label>&nbsp;&nbsp;<input id="zcd_b" type="radio" value="2" name="zcd" />
                  <label for="zcd_c" >做漆</label>&nbsp;&nbsp;<input id="zcd_c" type="radio" value="3" name="zcd" />
                  <label for="zcd_d" >钣金</label>&nbsp;&nbsp;<input id="zcd_d" type="radio" value="4" name="zcd" />
              </li>
              <li>
                  <span class="item_name" >划痕：&nbsp;</span>
                  <label for="zcd_hh_a" >有</label>&nbsp;&nbsp;<input id="zcd_hh_a" type="radio" value="1" name="zcd_hh"/>&nbsp;&nbsp;
                  <label for="zcd_hh_b" >无</label>&nbsp;&nbsp;<input id="zcd_hh_b" type="radio" value="2" name="zcd_hh"  checked />&nbsp; <span class="item_name" >凹陷：&nbsp;</span>
                  <label for="zcd_ax_a2" >有</label>
                  &nbsp;&nbsp;
                  <input id="zcd_ax_a2" type="radio" value="1" name="zcd_ax"/>
                  &nbsp;
                  <label for="zcd_ax_b2" >无</label>
                  &nbsp;

                  <input id="zcd_ax_b2" type="radio" value="2" name="zcd_ax"  checked />
                  &nbsp;&nbsp; <span class="item_name" >破损：&nbsp;</span>
                  <label for="zcd_ps_a2" >有</label>
                  &nbsp;
                  <input id="zcd_ps_a2" type="radio" value="1" name="zcd_ps"/>
                  &nbsp;
                  <label for="zcd_ps_b2" >无</label>
                  &nbsp;&nbsp;
                  <input id="zcd_ps_b2" type="radio" value="2" name="zcd_ps"  checked />
                  &nbsp;              &nbsp;

                  <span class="item_name" >裂痕：&nbsp;</span>
                  <label for="zcd_lh_a3" >有</label>&nbsp;&nbsp;<input id="zcd_lh_a3" type="radio" value="1" name="zcd_lh"/>&nbsp;&nbsp;
                  <label for="zcd_lh_b3" >无</label>&nbsp;&nbsp;<input id="zcd_lh_b3" type="radio" value="2" name="zcd_lh"  checked />
              </li>
              <li>
                  <span class="item_name" >缺陷图片:&nbsp;</span>
                  <img id="img20" src="../templates/jcdmin/images/up.jpg" width="100px" height="80px"/>
                  <input class="textbox" type="hidden" name="zcd_pic" id="url20" value="" readonly/>
              </li>
              <br/>

              <li>
                  <span class="item_nameS" >左侧裙边：</span>
                  <label for="zcqb_a" >完好</label>&nbsp;&nbsp;<input id="zcqb_a" type="radio" value="1" name="zcqb"/>&nbsp;&nbsp;
                  <label for="zcqb_b" >更换</label>&nbsp;&nbsp;<input id="zcqb_b" type="radio" value="2" name="zcqb" />
                  <label for="zcqb_c" >做漆</label>&nbsp;&nbsp;<input id="zcqb_c" type="radio" value="3" name="zcqb" />
                  <label for="zcqb_d" >钣金</label>&nbsp;&nbsp;<input id="zcqb_d" type="radio" value="4" name="zcqb" />
              </li>
              <li>
                  <span class="item_name" >划痕：&nbsp;</span>
                  <label for="zcqb_hh_a" >有</label>&nbsp;&nbsp;<input id="zcqb_hh_a" type="radio" value="1" name="zcqb_hh"/>&nbsp;&nbsp;
                  <label for="zcqb_hh_b" >无</label>&nbsp;&nbsp;<input id="zcqb_hh_b" type="radio" value="2" name="zcqb_hh"  checked />&nbsp;&nbsp; <span class="item_name" >凹陷：&nbsp;</span>
                  <label for="zcqb_ax_a2" >有</label>
                  &nbsp;
                  <input id="zcqb_ax_a2" type="radio" value="1" name="zcqb_ax"/>
                  &nbsp;
                  <label for="zcqb_ax_b2" >无</label>
                  &nbsp;&nbsp;
                  <input id="zcqb_ax_b2" type="radio" value="2" name="zcqb_ax"  checked />
                  &nbsp;
                  <span class="item_name" >破损：&nbsp;</span>
                  <label for="zcqb_ps_a2" >有</label>
                  &nbsp;
                  <input id="zcqb_ps_a2" type="radio" value="1" name="zcqb_ps"/>
                  &nbsp;&nbsp;
                  <label for="zcqb_ps_b2" >无</label>
                  &nbsp;
                  <input id="zcqb_ps_b2" type="radio" value="2" name="zcqb_ps"  checked />
                  &nbsp;

                  <span class="item_name" >裂痕：&nbsp;</span>
                  <label for="zcqb_lh_a3" >有</label>&nbsp;&nbsp;<input id="zcqb_lh_a3" type="radio" value="1" name="zcqb_lh"/>&nbsp;&nbsp;
                  <label for="zcqb_lh_b3" >无</label>&nbsp;&nbsp;<input id="zcqb_lh_b3" type="radio" value="2" name="zcqb_lh"  checked />
              </li>
              <li>
                  <span class="item_name" >缺陷图片:&nbsp;</span>
                  <img id="img24" src="../templates/jcdmin/images/up.jpg" width="100px" height="80px"/>
                  <input class="textbox" type="hidden" name="zcqb_pic" id="url24" value="" readonly/>
              </li><br/>

              <li>
                  <span class="item_nameS" >后备箱：</span>
                  <label for="hbx_a" >完好</label>&nbsp;&nbsp;<input id="hbx_a" type="radio" value="1" name="hbx"/>&nbsp;&nbsp;
                  <label for="hbx_b" >更换</label>&nbsp;&nbsp;<input id="hbx_b" type="radio" value="2" name="hbx" />
                  <label for="hbx_c" >做漆</label>&nbsp;&nbsp;<input id="hbx_c" type="radio" value="3" name="hbx" />
                  <label for="hbx_d" >钣金</label>&nbsp;&nbsp;<input id="hbx_d" type="radio" value="4" name="hbx" />
              </li>
              <li>
                  <span class="item_name" >划痕：&nbsp;</span>
                  <label for="hbx_hh_a" >有</label>&nbsp;&nbsp;<input id="hbx_hh_a" type="radio" value="1" name="hbx_hh"/>&nbsp;&nbsp;
                  <label for="hbx_hh_b" >无</label>&nbsp;&nbsp;<input id="hbx_hh_b" type="radio" value="2" name="hbx_hh"  checked />&nbsp;&nbsp; <span class="item_name" >凹陷：&nbsp;</span>
                  <label for="hbx_ax_a2" >有</label>
                  &nbsp;&nbsp;
                  <input id="hbx_ax_a2" type="radio" value="1" name="hbx_ax"/>
                  &nbsp;&nbsp;
                  <label for="hbx_ax_b2" >无</label>
                  &nbsp;&nbsp;
                  <input id="hbx_ax_b2" type="radio" value="2" name="hbx_ax"  checked />
                  &nbsp;<span class="item_name" >破损：&nbsp;</span>
                  <label for="hbx_ps_a2" >有</label>
                  &nbsp;
                  <input id="hbx_ps_a2" type="radio" value="1" name="hbx_ps"/>
                  &nbsp;&nbsp;
                  <label for="hbx_ps_b2" >无</label>
                  &nbsp;
                  <input id="hbx_ps_b2" type="radio" value="2" name="hbx_ps"  checked />
                  &nbsp;&nbsp;


                  <span class="item_name" >裂痕：&nbsp;</span>
                  <label for="hbx_lh_a3" >有</label>&nbsp;&nbsp;<input id="hbx_lh_a3" type="radio" value="1" name="hbx_lh"/>&nbsp;&nbsp;
                  <label for="hbx_lh_b3" >无</label>&nbsp;&nbsp;<input id="hbx_lh_b3" type="radio" value="2" name="hbx_lh"  checked />
              </li>
              <li>
                  <span class="item_name" >缺陷图片:&nbsp;</span>
                  <img id="img19" src="../templates/jcdmin/images/up.jpg" width="100px" height="80px"/>
                  <input class="textbox" type="hidden" name="hbx_pic" id="url19" value="" readonly/>
              </li>
              <li>
                  <span class="item_name" >备注信息:&nbsp;</span>
                  <input class="textbox" type="text" name="hbx_msg" />
              </li>
              <br/>

              <li>
                  <span class="item_nameS" >左后保险杆：</span>
                  <label for="zh_bxg_a" >完好</label>&nbsp;&nbsp;<input id="zh_bxg_a" type="radio" value="1" name="zh_bxg"/>&nbsp;&nbsp;
                  <label for="zh_bxg_b" >更换</label>&nbsp;&nbsp;<input id="zh_bxg_b" type="radio" value="2" name="zh_bxg" />
                  <label for="zh_bxg_c" >做漆</label>&nbsp;&nbsp;<input id="zh_bxg_c" type="radio" value="3" name="zh_bxg" />
                  <label for="zh_bxg_d" >钣金</label>&nbsp;&nbsp;<input id="zh_bxg_d" type="radio" value="4" name="zh_bxg" />
              </li>
              <li>
                  <span class="item_name" >划痕：&nbsp;</span>
                  <label for="zh_bxg_hh_a" >有</label>&nbsp;&nbsp;<input id="zh_bxg_hh_a" type="radio" value="1" name="zh_bxg_hh"/>&nbsp;&nbsp;
                  <label for="zh_bxg_hh_b" >无</label>&nbsp;&nbsp;<input id="zh_bxg_hh_b" type="radio" value="2" name="zh_bxg_hh"  checked />&nbsp; <span class="item_name" >凹陷：&nbsp;</span>
                  <label for="zh_bxg_ax_a2" >有</label>
                  &nbsp;&nbsp;
                  <input id="zh_bxg_ax_a2" type="radio" value="1" name="zh_bxg_ax"/>
                  &nbsp;&nbsp;
                  <label for="zh_bxg_ax_b2" >无</label>
                  &nbsp;&nbsp;
                  <input id="zh_bxg_ax_b2" type="radio" value="2" name="zh_bxg_ax"  checked />
                  &nbsp;&nbsp;<span class="item_name" >破损：&nbsp;</span>
                  <label for="zh_bxg_ps_a2" >有</label>
                  &nbsp;
                  <input id="zh_bxg_ps_a2" type="radio" value="1" name="zh_bxg_ps"/>
                  &nbsp;&nbsp;
                  <label for="zh_bxg_ps_b2" >无</label>
                  &nbsp;&nbsp;
                  <input id="zh_bxg_ps_b2" type="radio" value="2" name="zh_bxg_ps"  checked />

                  <span class="item_name" >裂痕：&nbsp;</span>
                  <label for="zh_bxg_lh_a3" >有</label>&nbsp;&nbsp;<input id="zh_bxg_lh_a3" type="radio" value="1" name="zh_bxg_lh"/>&nbsp;&nbsp;
                  <label for="zh_bxg_lh_b3" >无</label>&nbsp;&nbsp;<input id="zh_bxg_lh_b3" type="radio" value="2" name="zh_bxg_lh"  checked />
              </li>
              <li>
                  <span class="item_name" >缺陷图片:&nbsp;</span>
                  <img id="img3" src="../templates/jcdmin/images/up.jpg" width="100px" height="80px"/>
                  <input class="textbox" type="hidden" name="zh_bxg_pic" id="url3" value="" readonly/>
              </li>
 </div>              <br/>
<div class="demo"> 
<a onclick="return click_a('divOne_2')" style="cursor:pointer;" class="textbox">左右检测项切换</a>
<a onclick="return click_a('divOne_1')" style="cursor:pointer;" class="textbox">右侧项</a>
</div>
<div id="divOne_1" style="display:none;">
		  <ul class="ulColumn2">
		  <h1>右侧项</h1>
				 <li>
                  <span class="item_nameS" >右后保险杆：</span>
                  <label for="yh_bxg_a" >完好</label>&nbsp;&nbsp;<input id="yh_bxg_a" type="radio" value="1" name="yh_bxg"/>&nbsp;&nbsp;
                  <label for="yh_bxg_b" >更换</label>&nbsp;&nbsp;<input id="yh_bxg_b" type="radio" value="2" name="yh_bxg" />
                  <label for="yh_bxg_c" >做漆</label>&nbsp;&nbsp;<input id="yh_bxg_c" type="radio" value="3" name="yh_bxg" />
                  <label for="yh_bxg_d" >钣金</label>&nbsp;&nbsp;<input id="yh_bxg_d" type="radio" value="4" name="yh_bxg" />
              </li>
              <li>
                  <span class="item_name" >划痕：&nbsp;</span>
                  <label for="yh_bxg_hh_a" >有</label>&nbsp;&nbsp;<input id="yh_bxg_hh_a" type="radio" value="1" name="yh_bxg_hh"/>&nbsp;&nbsp;
                  <label for="yh_bxg_hh_b" >无</label>&nbsp;&nbsp;<input id="yh_bxg_hh_b" type="radio" value="2" name="yh_bxg_hh"  checked />&nbsp;&nbsp;
                  <span class="item_name" >凹陷：&nbsp;</span>
                  <label for="yh_bxg_ax_a2" >有</label>
                  &nbsp;&nbsp;
                  <input id="yh_bxg_ax_a2" type="radio" value="1" name="yh_bxg_ax"/>
                  &nbsp;&nbsp;
                  <label for="yh_bxg_ax_b2" >无</label>
                  &nbsp;&nbsp;
                  <input id="yh_bxg_ax_b2" type="radio" value="2" name="yh_bxg_ax"  checked />
                  &nbsp;<span class="item_name" >破损：&nbsp;</span>
                  <label for="yh_bxg_ps_a2" >有</label>
                  &nbsp;
                  <input id="yh_bxg_ps_a2" type="radio" value="1" name="yh_bxg_ps"/>
                  &nbsp;&nbsp;
                  <label for="yh_bxg_ps_b2" >无</label>
                  &nbsp;&nbsp;
                  <input id="yh_bxg_ps_b2" type="radio" value="2" name="yh_bxg_ps"  checked />
                  <span class="item_name" >裂痕：&nbsp;</span>
                  <label for="yh_bxg_lh_a3" >有</label>&nbsp;&nbsp;<input id="yh_bxg_lh_a3" type="radio" value="1" name="yh_bxg_lh"/>&nbsp;&nbsp;
                  <label for="yh_bxg_lh_b3" >无</label>&nbsp;&nbsp;<input id="yh_bxg_lh_b3" type="radio" value="2" name="yh_bxg_lh"  checked />
              </li>
              <li>
                  <span class="item_name" >缺陷图片:&nbsp;</span>
                  <img id="img4" src="../templates/jcdmin/images/up.jpg" width="100px" height="80px"/>
                  <input class="textbox" type="hidden" name="yh_bxg_pic" id="url4" value="" readonly/>
              </li><br/>

              <li>
                  <span class="item_nameS" >右后翼子板：</span>
                  <label for="yh_yzb_a" >完好</label>&nbsp;&nbsp;<input id="yh_yzb_a" type="radio" value="1" name="yh_yzb"/>&nbsp;&nbsp;
                  <label for="yh_yzb_b" >更换</label>&nbsp;&nbsp;<input id="yh_yzb_b" type="radio" value="2" name="yh_yzb" />
                  <label for="yh_yzb_c" >做漆</label>&nbsp;&nbsp;<input id="yh_yzb_c" type="radio" value="3" name="yh_yzb" />
                  <label for="yh_yzb_d" >钣金</label>&nbsp;&nbsp;<input id="yh_yzb_d" type="radio" value="4" name="yh_yzb" />
              </li>
              <li>
                  <span class="item_name" >划痕：&nbsp;</span>
                  <label for="yh_yzb_hh_a" >有</label>&nbsp;&nbsp;<input id="yh_yzb_hh_a" type="radio" value="1" name="yh_yzb_hh"/>&nbsp;&nbsp;
                  <label for="yh_yzb_hh_b" >无</label>&nbsp;&nbsp;<input id="yh_yzb_hh_b" type="radio" value="2" name="yh_yzb_hh"  checked />&nbsp;&nbsp;<span class="item_name" >凹陷：&nbsp;</span>
                  <label for="yh_yzb_ax_a2" >有</label>
                  &nbsp;&nbsp;
                  <input id="yh_yzb_ax_a2" type="radio" value="1" name="yh_yzb_ax"/>
                  &nbsp;&nbsp;
                  <label for="yh_yzb_ax_b2" >无</label>
                  &nbsp;&nbsp;
                  <input id="yh_yzb_ax_b2" type="radio" value="2" name="yh_yzb_ax"  checked />
                  <span class="item_name" >破损：&nbsp;</span>
                  <label for="yh_yzb_ps_a2" >有</label>
                  &nbsp;&nbsp;
                  <input id="yh_yzb_ps_a2" type="radio" value="1" name="yh_yzb_ps"/>
                  &nbsp;&nbsp;
                  <label for="yh_yzb_ps_b2" >无</label>
                  &nbsp;&nbsp;
                  <input id="yh_yzb_ps_b2" type="radio" value="2" name="yh_yzb_ps"  checked />
                  <span class="item_name" >裂痕：&nbsp;</span>
                  <label for="yh_yzb_lh_a3" >有</label>&nbsp;&nbsp;<input id="yh_yzb_lh_a3" type="radio" value="1" name="yh_yzb_lh"/>&nbsp;&nbsp;
                  <label for="yh_yzb_lh_b3" >无</label>&nbsp;&nbsp;<input id="yh_yzb_lh_b3" type="radio" value="2" name="yh_yzb_lh"  checked />
              </li>
              <li>
                  <span class="item_name" >缺陷图片:&nbsp;</span>
                  <img id="img8" src="../templates/jcdmin/images/up.jpg" width="100px" height="80px"/>
                  <input class="textbox" type="hidden" name="yh_yzb_pic" id="url8" value="" readonly/>
              </li><br/>

              <li>
                  <span class="item_nameS" >右C柱：</span>
                  <label for="ycz_a" >完好</label>&nbsp;&nbsp;<input id="ycz_a" type="radio" value="1" name="ycz"/>&nbsp;&nbsp;
                  <label for="ycz_b" >更换</label>&nbsp;&nbsp;<input id="ycz_b" type="radio" value="2" name="ycz" />
                  <label for="ycz_c" >做漆</label>&nbsp;&nbsp;<input id="ycz_c" type="radio" value="3" name="ycz" />
                  <label for="ycz_d" >钣金</label>&nbsp;&nbsp;<input id="ycz_d" type="radio" value="4" name="ycz" />
              </li>
              <li>
                  <span class="item_name" >划痕：&nbsp;</span>
                  <label for="ycz_hh_a" >有</label>&nbsp;&nbsp;<input id="ycz_hh_a" type="radio" value="1" name="zcz_hh"/>&nbsp;&nbsp;
                  <label for="ycz_hh_b" >无</label>&nbsp;&nbsp;<input id="ycz_hh_b" type="radio" value="2" name="zcz_hh"  checked />&nbsp;&nbsp;<span class="item_name" >凹陷：&nbsp;</span>
                  <label for="ycz_ax_a2" >有</label>
                  &nbsp;&nbsp;
                  <input id="ycz_ax_a2" type="radio" value="1" name="ycz_ax"/>
                  &nbsp;&nbsp;
                  <label for="ycz_ax_b2" >无</label>
                  &nbsp;&nbsp;
                  <input id="ycz_ax_b2" type="radio" value="2" name="ycz_ax"  checked />
                  <span class="item_name" >破损：&nbsp;</span>
                  <label for="ycz_ps_a2" >有</label>
                  &nbsp;&nbsp;
                  <input id="ycz_ps_a2" type="radio" value="1" name="ycz_ps"/>
                  &nbsp;&nbsp;
                  <label for="ycz_ps_b2" >无</label>
                  &nbsp;&nbsp;
                  <input id="ycz_ps_b2" type="radio" value="2" name="ycz_ps"  checked />

                  <span class="item_name" >裂痕：&nbsp;</span>
                  <label for="ycz_lh_a3" >有</label>&nbsp;&nbsp;<input id="ycz_lh_a3" type="radio" value="1" name="ycz_lh"/>&nbsp;&nbsp;
                  <label for="ycz_lh_b3" >无</label>&nbsp;&nbsp;<input id="ycz_lh_b3" type="radio" value="2" name="ycz_lh"  checked />
              </li>
              <li>
                  <span class="item_name" >缺陷图片:&nbsp;</span>
                  <img id="img14" src="../templates/jcdmin/images/up.jpg" width="100px" height="80px"/>
                  <input class="textbox" type="hidden" name="ycz_pic" id="url14" value="" readonly/>
              </li><br/>

              <li>
                  <span class="item_nameS" >右后门：</span>
                  <label for="yhm_a" >完好</label>&nbsp;&nbsp;<input id="yhm_a" type="radio" value="1" name="yhm"/>&nbsp;&nbsp;
                  <label for="yhm_b" >更换</label>&nbsp;&nbsp;<input id="yhm_b" type="radio" value="2" name="yhm" />
                  <label for="yhm_c" >做漆</label>&nbsp;&nbsp;<input id="yhm_c" type="radio" value="3" name="yhm" />
                  <label for="yhm_d" >钣金</label>&nbsp;&nbsp;<input id="yhm_d" type="radio" value="4" name="yhm" />
              </li>
              <li>
                  <span class="item_name" >划痕：&nbsp;</span>
                  <label for="yhm_hh_a" >有</label>&nbsp;&nbsp;<input id="yhm_hh_a" type="radio" value="1" name="yhm_hh"/>&nbsp;&nbsp;
                  <label for="yhm_hh_b" >无</label>&nbsp;&nbsp;<input id="yhm_hh_b" type="radio" value="2" name="yhm_hh"  checked />&nbsp;&nbsp;<span class="item_name" >凹陷：&nbsp;</span>
                  <label for="yhm_ax_a2" >有</label>
                  &nbsp;&nbsp;
                  <input id="yhm_ax_a2" type="radio" value="1" name="yhm_ax"/>
                  &nbsp;&nbsp;
                  <label for="yhm_ax_b2" >无</label>
                  &nbsp;&nbsp;
                  <input id="yhm_ax_b2" type="radio" value="2" name="yhm_ax"  checked />
                  <span class="item_name" >破损：&nbsp;</span>
                  <label for="yhm_ps_a2" >有</label>
                  &nbsp;&nbsp;
                  <input id="yhm_ps_a2" type="radio" value="1" name="yhm_ps"/>
                  &nbsp;&nbsp;
                  <label for="yhm_ps_b2" >无</label>
                  &nbsp;&nbsp;
                  <input id="yhm_ps_b2" type="radio" value="2" name="yhm_ps"  checked />

                  <span class="item_name" >裂痕：&nbsp;</span>
                  <label for="yhm_lh_a3" >有</label>&nbsp;&nbsp;<input id="yhm_lh_a3" type="radio" value="1" name="yhm_lh"/>&nbsp;&nbsp;
                  <label for="yhm_lh_b3" >无</label>&nbsp;&nbsp;<input id="yhm_lh_b3" type="radio" value="2" name="yhm_lh"  checked />
              </li>
              <li>
                  <span class="item_name" >缺陷图片:&nbsp;</span>
                  <img id="img18" src="../templates/jcdmin/images/up.jpg" width="100px" height="80px"/>
                  <input class="textbox" type="hidden" name="yhm_pic" id="url18" value="" readonly/>
              </li>
              <li>
                  <span class="item_name" >备注信息:&nbsp;</span>
                  <input class="textbox" type="text" name="yhm_msg" />
              </li>
              <br/>

              <li>
                  <span class="item_nameS" >右B柱：</span>
                  <label for="ybz_a" >完好</label>&nbsp;&nbsp;<input id="ybz_a" type="radio" value="1" name="ybz"/>&nbsp;&nbsp;
                  <label for="ybz_b" >更换</label>&nbsp;&nbsp;<input id="ybz_b" type="radio" value="2" name="ybz" />
                  <label for="ybz_c" >做漆</label>&nbsp;&nbsp;<input id="ybz_c" type="radio" value="3" name="ybz" />
                  <label for="ybz_d" >钣金</label>&nbsp;&nbsp;<input id="ybz_d" type="radio" value="4" name="ybz" />
              </li>
              <li>
                  <span class="item_name" >划痕：&nbsp;</span>
                  <label for="ybz_hh_a" >有</label>&nbsp;&nbsp;<input id="ybz_hh_a" type="radio" value="1" name="ybz_hh"/>&nbsp;&nbsp;
                  <label for="ybz_hh_b" >无</label>&nbsp;&nbsp;<input id="ybz_hh_b" type="radio" value="2" name="ybz_hh"  checked />&nbsp;&nbsp;<span class="item_name" >凹陷：&nbsp;</span>
                  <label for="ybz_ax_a2" >有</label>
                  &nbsp;&nbsp;
                  <input id="ybz_ax_a2" type="radio" value="1" name="ybz_ax"/>
                  &nbsp;&nbsp;
                  <label for="ybz_ax_b2" >无</label>
                  &nbsp;
                  <input id="ybz_ax_b2" type="radio" value="2" name="ybz_ax"  checked />
                  <span class="item_name" >破损：&nbsp;</span>
                  <label for="ybz_ps_a2" >有</label>
                  &nbsp;&nbsp;
                  <input id="ybz_ps_a2" type="radio" value="1" name="ybz_ps"/>
                  &nbsp;&nbsp;
                  <label for="ybz_ps_b2" >无</label>
                  &nbsp;&nbsp;
                  <input id="ybz_ps_b2" type="radio" value="2" name="ybz_ps"  checked />
                  &nbsp;                  &nbsp;

                  <span class="item_name" >裂痕：&nbsp;</span>
                  <label for="ybz_lh_a3" >有</label>&nbsp;&nbsp;<input id="ybz_lh_a3" type="radio" value="1" name="ybz_lh"/>&nbsp;&nbsp;
                  <label for="ybz_lh_b3" >无</label>&nbsp;&nbsp;<input id="ybz_lh_b3" type="radio" value="2" name="ybz_lh"  checked />
              </li>
              <li>
                  <span class="item_name" >缺陷图片:&nbsp;</span>
                  <img id="img12" src="../templates/jcdmin/images/up.jpg" width="100px" height="80px"/>
                  <input class="textbox" type="hidden" name="ybz_pic" id="url12" value="" readonly/>
              </li><br/>

              <li>
                  <span class="item_nameS" >右前门：</span>
                  <label for="yqm_a" >完好</label>&nbsp;&nbsp;<input id="yqm_a" type="radio" value="1" name="yqm"/>&nbsp;&nbsp;
                  <label for="yqm_b" >更换</label>&nbsp;&nbsp;<input id="yqm_b" type="radio" value="2" name="yqm" />
                  <label for="yqm_c" >做漆</label>&nbsp;&nbsp;<input id="yqm_c" type="radio" value="3" name="yqm" />
                  <label for="yqm_d" >钣金</label>&nbsp;&nbsp;<input id="yqm_d" type="radio" value="4" name="yqm" />
              </li>
              <li>
                  <span class="item_name" >划痕：&nbsp;</span>
                  <label for="yqm_hh_a" >有</label>&nbsp;&nbsp;<input id="yqm_hh_a" type="radio" value="1" name="yqm_hh"/>&nbsp;&nbsp;
                  <label for="yqm_hh_b" >无</label>&nbsp;&nbsp;<input id="yqm_hh_b" type="radio" value="2" name="yqm_hh"  checked />&nbsp;&nbsp;<span class="item_name" >凹陷：&nbsp;</span>
                  <label for="yqm_ax_a2" >有</label>
                  &nbsp;&nbsp;
                  <input id="yqm_ax_a2" type="radio" value="1" name="yqm_ax"/>
                  &nbsp;&nbsp;
                  <label for="yqm_ax_b2" >无</label>
                  &nbsp;&nbsp;
                  <input id="yqm_ax_b2" type="radio" value="2" name="yqm_ax"  checked />
                  <span class="item_name" >破损：&nbsp;</span>
                  <label for="yqm_ps_a2" >有</label>
                  &nbsp;&nbsp;
                  <input id="yqm_ps_a2" type="radio" value="1" name="yqm_ps"/>
                  &nbsp;&nbsp;
                  <label for="yqm_ps_b2" >无</label>
                  &nbsp;&nbsp;
                  <input id="yqm_ps_b2" type="radio" value="2" name="yqm_ps"  checked />
                  &nbsp;&nbsp;
                  <span class="item_name" >裂痕：&nbsp;</span>
                  <label for="yqm_lh_a3" >有</label>&nbsp;&nbsp;<input id="yqm_lh_a3" type="radio" value="1" name="yqm_lh"/>&nbsp;&nbsp;
                  <label for="yqm_lh_b3" >无</label>&nbsp;&nbsp;<input id="yqm_lh_b3" type="radio" value="2" name="yqm_lh"  checked />
              </li>
              <li>
                  <span class="item_name" >缺陷图片:&nbsp;</span>
                  <img id="img16" src="../templates/jcdmin/images/up.jpg" width="100px" height="80px"/>
                  <input class="textbox" type="hidden" name="yqm_pic" id="url16" value="" readonly/>
              </li>
              <li>
                  <span class="item_name" >备注信息:&nbsp;</span>
                  <input class="textbox" type="text" name="yqm_msg" />
              </li>
              <br/>

              <li>
                  <span class="item_nameS" >右A柱：</span>
                  <label for="yaz_a" >完好</label>&nbsp;&nbsp;<input id="yaz_a" type="radio" value="1" name="yaz"/>&nbsp;&nbsp;
                  <label for="yaz_b" >更换</label>&nbsp;&nbsp;<input id="yaz_b" type="radio" value="2" name="yaz" />
                  <label for="yaz_c" >做漆</label>&nbsp;&nbsp;<input id="yaz_c" type="radio" value="3" name="yaz" />
                  <label for="yaz_d" >钣金</label>&nbsp;&nbsp;<input id="yaz_d" type="radio" value="4" name="yaz" />
              </li>
              <li>
                  <span class="item_name" >划痕：&nbsp;</span>
                  <label for="yaz_hh_a" >有</label>&nbsp;&nbsp;<input id="yaz_hh_a" type="radio" value="1" name="yaz_hh"/>&nbsp;&nbsp;
                  <label for="yaz_hh_b" >无</label>&nbsp;&nbsp;<input id="yaz_hh_b" type="radio" value="2" name="yaz_hh"  checked />
                  <span class="item_name" >凹陷：&nbsp;</span>
                  <label for="yaz_ax_a2" >有</label>
                  &nbsp;&nbsp;
                  <input id="yaz_ax_a2" type="radio" value="1" name="yaz_ax"/>
                  &nbsp;&nbsp;
                  <label for="yaz_ax_b2" >无</label>
                  &nbsp;&nbsp;
                  <input id="yaz_ax_b2" type="radio" value="2" name="yaz_ax"  checked />
                  <span class="item_name" >破损：&nbsp;</span>
                  <label for="yaz_ps_a2" >有</label>
                  &nbsp;&nbsp;
                  <input id="yaz_ps_a2" type="radio" value="1" name="yaz_ps"/>
                  &nbsp;&nbsp;
                  <label for="yaz_ps_b2" >无</label>
                  &nbsp;&nbsp;
                  <input id="yaz_ps_b2" type="radio" value="2" name="yaz_ps"  checked />
                  &nbsp;&nbsp;&nbsp;

                  <span class="item_name" >裂痕：&nbsp;</span>
                  <label for="yaz_lh_a3" >有</label>&nbsp;&nbsp;<input id="yaz_lh_a3" type="radio" value="1" name="yaz_lh"/>&nbsp;&nbsp;
                  <label for="yaz_lh_b3" >无</label>&nbsp;&nbsp;<input id="yaz_lh_b3" type="radio" value="2" name="yaz_lh"  checked />

              </li>
              <li>
                  <span class="item_name" >缺陷图片:&nbsp;</span>
                  <img id="img10" src="../templates/jcdmin/images/up.jpg" width="100px" height="80px"/>
                  <input class="textbox" type="hidden" name="yaz_pic" id="url10" value="" readonly/>
              </li><br/>

              <li>
                  <span class="item_nameS" >右前翼子板：</span>
                  <label for="yq_yzb_a" >完好</label>&nbsp;&nbsp;<input id="yq_yzb_a" type="radio" value="1" name="yq_yzb"/>&nbsp;&nbsp;
                  <label for="yq_yzb_b" >更换</label>&nbsp;&nbsp;<input id="yq_yzb_b" type="radio" value="2" name="yq_yzb" />
                  <label for="yq_yzb_c" >做漆</label>&nbsp;&nbsp;<input id="yq_yzb_c" type="radio" value="3" name="yq_yzb" />
                  <label for="yq_yzb_d" >钣金</label>&nbsp;&nbsp;<input id="yq_yzb_d" type="radio" value="4" name="yq_yzb" />
              </li>
              <li>
                  <span class="item_name" >划痕：&nbsp;</span>
                  <label for="yq_yzb_hh_a" >有</label>&nbsp;&nbsp;<input id="yq_yzb_hh_a" type="radio" value="1" name="yq_yzb_hh"/>&nbsp;&nbsp;
                  <label for="yq_yzb_hh_b" >无</label>&nbsp;&nbsp;<input id="yq_yzb_hh_b" type="radio" value="2" name="yq_yzb_hh"  checked />
                  <span class="item_name" >凹陷：&nbsp;</span>
                  <label for="yq_yzb_ax_a2" >有</label>
                  &nbsp;&nbsp;
                  <input id="yq_yzb_ax_a2" type="radio" value="1" name="yq_yzb_ax"/>
                  &nbsp;&nbsp;
                  <label for="yq_yzb_ax_b2" >无</label>
                  &nbsp;&nbsp;
                  <input id="yq_yzb_ax_b2" type="radio" value="2" name="yq_yzb_ax"  checked />
                  <span class="item_name" >破损：&nbsp;</span>
                  <label for="yq_yzb_ps_a2" >有</label>
                  &nbsp;&nbsp;
                  <input id="yq_yzb_ps_a2" type="radio" value="1" name="yq_yzb_ps"/>
                  &nbsp;&nbsp;
                  <label for="yq_yzb_ps_b2" >无</label>
                  &nbsp;&nbsp;
                  <input id="yq_yzb_ps_b2" type="radio" value="2" name="yq_yzb_ps"  checked />
                  &nbsp;&nbsp;

                  <span class="item_name" >裂痕：&nbsp;</span>
                  <label for="yq_yzb_lh_a3" >有</label>&nbsp;&nbsp;<input id="yq_yzb_lh_a3" type="radio" value="1" name="yq_yzb_lh"/>&nbsp;&nbsp;
                  <label for="yq_yzb_lh_b3" >无</label>&nbsp;&nbsp;<input id="yq_yzb_lh_b3" type="radio" value="2" name="yq_yzb_lh"  checked />
              </li>
              <li>
                  <span class="item_name" >缺陷图片:&nbsp;</span>
                  <img id="img6" src="../templates/jcdmin/images/up.jpg" width="100px" height="80px"/>
                  <input class="textbox" type="hidden" name="yq_yzb_pic" id="url6" value="" readonly/>
              </li><br/>

              <li>
                  <span class="item_nameS" >右车顶：</span>
                  <label for="ycd_a" >完好</label>&nbsp;&nbsp;<input id="ycd_a" type="radio" value="1" name="ycd"/>&nbsp;&nbsp;
                  <label for="ycd_b" >更换</label>&nbsp;&nbsp;<input id="ycd_b" type="radio" value="2" name="ycd" />
                  <label for="ycd_c" >做漆</label>&nbsp;&nbsp;<input id="ycd_c" type="radio" value="3" name="ycd" />
                  <label for="ycd_d" >钣金</label>&nbsp;&nbsp;<input id="ycd_d" type="radio" value="4" name="ycd" />
              </li>
              <li>
                  <span class="item_name" >划痕：&nbsp;</span>
                  <label for="ycd_hh_a" >有</label>&nbsp;&nbsp;<input id="ycd_hh_a" type="radio" value="1" name="ycd_hh"/>
                  &nbsp;
                  <label for="ycd_hh_b" >无</label>&nbsp;&nbsp;<input id="ycd_hh_b" type="radio" value="2" name="ycd_hh"  checked />&nbsp; <span class="item_name" >凹陷：&nbsp;</span>
                  <label for="ycd_ax_a2" >有</label>
                  &nbsp;
                  <input id="ycd_ax_a2" type="radio" value="1" name="ycd_ax"/>
                  &nbsp;&nbsp;
                  <label for="ycd_ax_b2" >无</label>
                  &nbsp;&nbsp;
                  <input id="ycd_ax_b2" type="radio" value="2" name="ycd_ax"  checked />
                  &nbsp; <span class="item_name" >破损：&nbsp;</span>
                  <label for="ycd_ps_a2" >有</label>
                  &nbsp;&nbsp;
                  <input id="ycd_ps_a2" type="radio" value="1" name="ycd_ps"/>
                  <label for="ycd_ps_b2" >无</label>
                  <input id="ycd_ps_b2" type="radio" value="2" name="ycd_ps"  checked />
                  &nbsp;              &nbsp;


                  <span class="item_name" >裂痕：&nbsp;</span>
                  <label for="ycd_lh_a3" >有</label>&nbsp;&nbsp;<input id="ycd_lh_a3" type="radio" value="1" name="ycd_lh"/>&nbsp;&nbsp;
                  <label for="ycd_lh_b3" >无</label>&nbsp;&nbsp;<input id="ycd_lh_b3" type="radio" value="2" name="ycd_lh"  checked />
              </li>
              <li>
                  <span class="item_name" >缺陷图片:&nbsp;</span>
                  <img id="img21" src="../templates/jcdmin/images/up.jpg" width="100px" height="80px"/>
                  <input class="textbox" type="hidden" name="ycd_pic" id="url21" value="" readonly/>
              </li>
              <br/>

              <li>
                  <span class="item_nameS" >右侧裙边：</span>
                  <label for="ycqb_a" >完好</label>&nbsp;&nbsp;<input id="ycqb_a" type="radio" value="1" name="ycqb"/>&nbsp;&nbsp;
                  <label for="ycqb_b" >更换</label>&nbsp;&nbsp;<input id="ycqb_b" type="radio" value="2" name="ycqb" />
                  <label for="ycqb_c" >做漆</label>&nbsp;&nbsp;<input id="ycqb_c" type="radio" value="3" name="ycqb" />
                  <label for="ycqb_d" >钣金</label>&nbsp;&nbsp;<input id="ycqb_d" type="radio" value="4" name="ycqb" />
              </li>
              <li>
                  <span class="item_name" >划痕：&nbsp;</span>
                  <label for="ycqb_hh_a" >有</label>&nbsp;&nbsp;<input id="ycqb_hh_a" type="radio" value="1" name="ycqb_hh"/>&nbsp;&nbsp;
                  <label for="ycqb_hh_b" >无</label>&nbsp;&nbsp;<input id="ycqb_hh_b" type="radio" value="2" name="ycqb_hh"  checked />&nbsp;&nbsp; <span class="item_name" >凹陷：&nbsp;</span>
                  <label for="ycqb_ax_a2" >有</label>
                  &nbsp;&nbsp;
                  <input id="ycqb_ax_a2" type="radio" value="1" name="ycqb_ax"/>
                  &nbsp;&nbsp;
                  <label for="ycqb_ax_b2" >无</label>
                  &nbsp;&nbsp;
                  <input id="ycqb_ax_b2" type="radio" value="2" name="ycqb_ax"  checked />
                  &nbsp;&nbsp;<span class="item_name" >破损：&nbsp;</span>
                  <label for="ycqb_ps_a2" >有</label>
                  &nbsp;
                  <input id="ycqb_ps_a2" type="radio" value="1" name="ycqb_ps"/>
                  &nbsp;
                  <label for="ycqb_ps_b2" >无</label>
                  &nbsp;
                  <input id="ycqb_ps_b2" type="radio" value="2" name="ycqb_ps"  checked />
                  &nbsp;

                  <span class="item_name" >裂痕：&nbsp;</span>
                  <label for="ycqb_lh_a3" >有</label>&nbsp;&nbsp;<input id="ycqb_lh_a3" type="radio" value="1" name="ycqb_lh"/>&nbsp;&nbsp;
                  <label for="ycqb_lh_b3" >无</label>&nbsp;&nbsp;<input id="ycqb_lh_b3" type="radio" value="2" name="ycqb_lh"  checked />
              </li>
              <li>
                  <span class="item_name" >缺陷图片:&nbsp;</span>
                  <img id="img25" src="../templates/jcdmin/images/up.jpg" width="100px" height="80px"/>
                  <input class="textbox" type="hidden" name="ycqb_pic" id="url25" value="" readonly/>
              </li>
			<div class="demo"> 
<a onclick="return click_a('divOne_2')" style="cursor:pointer;" class="textbox">显示/隐藏左侧项</a>
<a onclick="return click_a('divOne_1')" style="cursor:pointer;" class="textbox">显示/隐藏右侧项</a>
</div>
          </div>
   <br/>
              <br/>
              <label class="single_selection"></label>
        <span class="item_name" style="width:120px;"></span>
        <input type="submit" class="link_btn"/>
 
        </ul></td></tr>
      </table>
          </form>
      <div class="admin_tab_cont">tabContent02，内容根据具体数据二次单独定义，公共样式单独调用</div>
      <div class="admin_tab_cont">可追加</div>
 </div>
    </section>
</body>
</html>