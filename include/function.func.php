<?php 

// GPC过滤
function _addslashes($value) {
	if (is_array($value)) {
		foreach ($value as $key => $val) {
			$value[$key] = _addslashes($val);
		} 
		return $value;
	} 
	return addslashes($value);
} 
// 去掉addslashes加的\
function _stripslashes($value) {
	if (is_array($value)) {
		foreach ($value as $k => $v) {
			$value[$k] = _stripslashes($v);
		} 
		return $value;
	} 
	return stripslashes($value);
} 
// 过滤函数
function _filter($value) {
	if (is_array($value)) {
		foreach ($value as $key => $val) {
			$value[$key] = _filter($val);
		} 
		return $value;
	} 
	return str_replace(array('..\\', '../', './', '.\\'), '', trim($value));
} 

function RpLine($str) {
	$str = str_replace("\r", "\\r", $str);
	$str = str_replace("\n", "\\n", $str);
	return $str;
}
// 返回模板地址
function tpl($tpl_name = '', $index_file = FILE) {
	global $mod;
	if (empty($tpl_name)) $tpl_name = $mod;
	return TPL_DIR . $index_file . '/' . $tpl_name . TPL_SUFFIX;
} 
// 检查是否为合法post提交
function submitcheck($var) {
	if (empty($_POST[$var]) || $_SERVER['REQUEST_METHOD'] != 'POST') return false;
	if ((!empty($_SERVER['HTTP_REFERER']) || preg_replace("/https?:\/\/([^\:\/]+).*/i", "\\1", $_SERVER['HTTP_REFERER']) == preg_replace("/([^\:]+).*/", "\\1", $_SERVER['HTTP_HOST'])))
		return true;
	else alert('错误的请求', -1);
} 

function showmsg($msg, $url = -1, $is_frame = 0, $time = 2) {
	$addslashes = $is_frame ? '\\' : '';
	$parent = (empty($msg) && $is_frame) ? 'parent.' : '';
	if ($url == '-1') {
		$url = "javascript:history.go(-1);";
		$func = "history.go(-1)";
	} elseif ($url == 1) {
		$url = "javascript:location.href=location.href;";
		$func = "{$parent}window.location.href=location.href;";
	} else {
		$url = str_replace(array("\n", "\r"), '', $url);
		$func = "{$parent}window.location.href=\'$url\';";
	} 
	if (empty($msg)) {
		$func = str_replace('\\', '', $func);
		echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
        <script language='javascript'>$func</script>";
		exit;
	} 
	$str = "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
    <meta http-equiv=\"cache-control\" content=\"no-cache\">
    <title>提示信息</title>
    <style type=\"text/css\">
    <!--
    * {margin:0;padding:0;}
    body {text-align:center;font-family:Arial, Helvetica, sans-serif,\"宋体\";margin:0;paddig:0;}
    p {font-size: 12px;line-height:150%;background-color:#fff;padding:8px;}
    h1 {height:36px;line-height:36px;text-align:left;padding-left:15px;font-size:14px;font-weight:bold;color:#333;background:#efefef;}
    .noticebox{margin:0 auto;margin-top:80px;width:420px;padding:0;background:#fff;}
	.box_border {border:1px solid #ccc;background:#fff;}
    a:link {color: #0000FF;text-decoration: none;}
    a:visited {text-decoration: none;color: #003399;}
    a:hover {text-decoration: none;color: #0066FF;}
    a:active {text-decoration: none;color: #0066FF;}
	.msg{padding:20px 0;font-size:14px;}
	.msgp{padding:50px 0;}
	.notice{font-szie:12px;background:#efefef;color:#0068a6;}
    -->
    </style>
    </head>
    <body>
	<div class=\"noticebox\">
    <div class=\"box_border\">
    <h1>提示信息</h1>
    <p class=\"msgp\"><span class=\"msg\"> {$msg}</span> </p>
    <p class=\"notice\"><a href=\"{$url}\">如果{$time}秒后您的浏览器没有自动跳转，请点击这里</a></p>
	<script language=\"javascript\">setTimeout(\"{$func}\",{$time}*1000);<{$addslashes}/script>
    </div>
	</div>
    </body>";
	$str = str_replace(array("\r", "\n"), '', $str);
	if ($is_frame) {
		echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
        <script language='javascript'>parent.document.write('$str');</script>";
	} else echo $str;
	exit;
} 

function showmsg2($msg, $url = -1, $is_frame = 0, $time = 2) {
	$addslashes = $is_frame ? '\\' : '';
	$parent = (empty($msg) && $is_frame) ? 'parent.' : '';
	if ($url == '-1') {
		$url = "javascript:history.go(-1);";
		$func = "history.go(-1)";
	} elseif ($url == 1) {
		$url = "javascript:location.href=location.href;";
		$func = "{$parent}window.location.href=location.href;";
	} else {
		$url = str_replace(array("\n", "\r"), '', $url);
		$func = "{$parent}window.location.href=\'$url\';";
	} 
	if (empty($msg)) {
		$func = str_replace('\\', '', $func);
		echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
        <script language='javascript'>$func</script>";
		exit;
	} 
	$str = "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
    <meta http-equiv=\"cache-control\" content=\"no-cache\">
    <title>提示信息</title>
    <style type=\"text/css\">
    <!--
    * {margin:0;padding:0;}
    body {text-align:center;font-family:Arial, Helvetica, sans-serif,\"宋体\";margin:0;paddig:0;}
    p {font-size: 12px;line-height:150%;background-color:#fff;padding:8px;}
    h1 {height:36px;line-height:36px;text-align:left;padding-left:15px;font-size:14px;font-weight:bold;color:#333;background:#efefef;}
    .noticebox{margin:0 auto;margin-top:80px;width:420px;padding:0;background:#fff;}
	.box_border {border:1px solid #ccc;background:#fff;}
    a:link {color: #0000FF;text-decoration: none;}
    a:visited {text-decoration: none;color: #003399;}
    a:hover {text-decoration: none;color: #0066FF;}
    a:active {text-decoration: none;color: #0066FF;}
	.msg{padding:20px 0;font-size:14px;}
	.msgp{padding:50px 0;}
	.notice{font-szie:12px;background:#efefef;color:#0068a6;}
    -->
    </style>
    </head>
    <body>
	<div class=\"noticebox\">
    <div class=\"box_border\">
    <h1>提示信息</h1>
    <p class=\"msgp\"><span class=\"msg\"> {$msg}</span> </p>
    <p class=\"notice\"><a href=\"{$url}\">如果{$time}秒后您的浏览器没有自动跳转，请点击这里</a></p>
	<script language=\"javascript\">setTimeout(\"{$func}\",{$time}*100);<{$addslashes}/script>
    </div>
	</div>
    </body>";
	$str = str_replace(array("\r", "\n"), '', $str);
	if ($is_frame) {
		echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
        <script language='javascript'>parent.document.write('$str');</script>";
	} else echo $str;
	exit;
} 

function htmlshowmsg($msg) {
	$str = "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
    <meta http-equiv=\"cache-control\" content=\"no-cache\">
    <title>提示信息</title>
    <style type=\"text/css\">
    <!--
   * {margin:0;padding:0;}
    body {text-align:center;font-family:Arial, Helvetica, sans-serif,\"宋体\";margin:0;paddig:0;}
    p {font-size: 12px;line-height:150%;background-color:#fff;padding:8px;}
    h1 {height:36px;line-height:36px;text-align:left;padding-left:15px;font-size:14px;font-weight:bold;color:#333;background:#efefef;}
    .noticebox{margin:0 auto;margin-top:80px;width:420px;padding:0;background:#fff;}
	.box_border {border:1px solid #ccc;background:#fff;}
    a:link {color: #0000FF;text-decoration: none;}
    a:visited {text-decoration: none;color: #003399;}
    a:hover {text-decoration: none;color: #0066FF;}
    a:active {text-decoration: none;color: #0066FF;}
	.msg{padding:20px 0;font-size:14px;}
	.msgp{padding:50px 0;}
	.notice{font-szie:12px;background:#e4ecf7;color:#0068a6;}
    -->
    </style>
    </head>
    <body>
	<div class=\"noticebox\">
    <div class=\"box_border\">
    <h1>提示信息</h1>
    <p class=\"msgp\"><span class=\"msg\"> {$msg}</span> </p>
    </div>
	</div>
    </body>";
	$str = str_replace(array("\r", "\n"), '', $str);
	echo $str;
} 
function mshowmsg($msg) {
	global $tpl;
	$tpl -> assign('msg', $msg);
	$tpl -> display('m/notice.html');
	exit;
} 
// 使用JS弹出消息框
function alert1($msg, $url = '', $window = 'window', $display = 1) {
	$str = "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
	$str .= "<script language='javascript'>";
	if ($msg != '') $str .= "alert('$msg');";
	if ($url == '') $str .= '';
	elseif (is_numeric($url) && $url <= 0) $str .= "history.go($url);";
	elseif (is_numeric($url) && $url == 1) $str .= "{$window}.location.href=location.href";
	else $str .= "{$window}.location.href='$url';";
	$str .= '</script>';
	if (!$display) return $str;
	exit($str);
} 
// 消息提示框
function redirect($msg, $url = '', $window = 'window', $display = 1) {
	$str = "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
	$str .= "<script language='javascript'>";
	if ($msg != '') $str .= "alert('$msg');";
	if ($url == '') $str .= '';
	elseif (is_numeric($url) && $url <= 0) $str .= "history.go($url);";
	elseif (is_numeric($url) && $url == 1) $str .= "{$window}.location.href=location.href";
	else $str .= "{$window}.location.href='$url';";
	$str .= '</script>';
	if (!$display) return $str;
	exit($str);
} 
// 字符串截取
function _substr($str, $start = 0, $length, $charset = "utf-8", $suffix = '') {
	$string = substr($str, $start, $length);
	$re['utf-8'] = "/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|[\xe0-\xef][\x80-\xbf]{2}|[\xf0-\xff][\x80-\xbf]{3}/";
	$re['gb2312'] = "/[\x01-\x7f]|[\xb0-\xf7][\xa0-\xfe]/";
	$re['gbk'] = "/[\x01-\x7f]|[\x81-\xfe][\x40-\xfe]/";
	$re['big5'] = "/[\x01-\x7f]|[\x81-\xfe]([\x40-\x7e]|\xa1-\xfe])/";
	preg_match_all($re[$charset], $string, $match);
	$slice = join('', array_slice($match[0], 0, $length));
	return strlen($str) > strlen($slice) ? $slice . $suffix : $slice;
} 
// 获取post过来的值
function post() {
	$args = func_get_args();
	$value = array();
	while (list(, $key) = each ($args)) {
		if (isset($_POST[$key])) $value[$key] = $_POST[$key];
	} 
	if (count($args) === 1) return empty($value) ? '' : array_shift($value);
	return $value;
}
// 获取get过来的值
function get() {
	$args = func_get_args();
	$value = array();
	while (list(, $key) = each ($args)) {
		if (isset($_GET[$key])) $value[$key] = $_GET[$key];
	}
	if (count($args) === 1) return empty($value) ? '' : array_shift($value);
	return $value;
} 
// 不能为空
function can_not_be_empty($arr_not_empty, $arr_value) {
	foreach ($arr_not_empty as $k => $v) {
		if (empty($arr_value[$k])) showmsg($v, -1);
	} 
} 
// 获取客户端IP
function get_client_ip() {
	if (getenv("HTTP_CLIENT_IP") && strcasecmp(getenv("HTTP_CLIENT_IP"), "unknown"))
		$ip = getenv("HTTP_CLIENT_IP");
	else if (getenv("HTTP_X_FORWARDED_FOR") && strcasecmp(getenv("HTTP_X_FORWARDED_FOR"), "unknown"))
		$ip = getenv("HTTP_X_FORWARDED_FOR");
	else if (getenv("REMOTE_ADDR") && strcasecmp(getenv("REMOTE_ADDR"), "unknown"))
		$ip = getenv("REMOTE_ADDR");
	else if (isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], "unknown"))
		$ip = $_SERVER['REMOTE_ADDR'];
	else $ip = "unknown";
	if (!preg_match("/^\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}$/", $ip)) return 'unknown';
	return($ip);
} 
// 返回ID字符串
function return_str_id($id) {
	$str_id = '';
	if (is_array($id)) {
		foreach ($id as $v) {
			$str_id .= intval($v) . ',';
		} 
		$str_id = substr($str_id, 0, -1);
	} else $str_id = $id;
	return $str_id;
} 
// 创建多级目录
function createFolder($dir){
    return is_dir($dir) or (createFolder(dirname($dir)) and mkdir($dir,0777));
}
// 删除目录（包括目录下所有子目录和文件）
function _rmdir($path) {
	if (is_array($path)) {
		$arr = array_map('_rmdir', $path);
		if (in_array(false, $arr)) return false;
	} elseif (is_string($path)) {
		if (is_file($path)) return unlink($path);
		elseif (is_dir($path)) {
			if (!$op = opendir($path)) return false;
			if (substr($path, -1) != '/') $path .= '/';
			while (($file = readdir($op)) !== false) {
				if (!in_array($file, array('.', '..'))) _rmdir($path . $file);
			} 
			closedir($op);
			rmdir($path);
		} 
	} else return false;
	return true;
} 
// 构造select
function select_make($id, $arr, $default_str = '', $default_val = '') {
	$option = $default_str ? "<option value='$default_val'>$default_str</option>\r\n" : '';
	foreach ($arr as $k => $v) {
		$selected = '';
		if ($k == $id) $selected = 'selected';
		$option .= "<option value='{$k}' $selected>{$v}</option>\r\n";
	} 
	return $option;
} 
// 占用空间大小格式化
function byte_format($size, $unit = 'B', $dec = 2) {
	$arr_unit = array("B", "KB", "MB", "GB", "TB", "PB");
	$arr_rev_unit = array_flip($arr_unit);
	if (!isset($arr_rev_unit[$unit])) return round($size, $dec) . ' ' . $unit;
	$pos = $arr_rev_unit[$unit];
	while ($size >= 1024) {
		$size /= 1024;
		$pos++;
	} while ($size < 1) {
		$size *= 1024;
		$pos--;
	} 
	return round($size, $dec) . ' ' . $arr_unit[$pos];
} 
// 是否邮件地址
function is_email($email) {
	return preg_match('/\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/', $email);
} 

// 获取字符串首字母
function getinitial($s0)
{
	$s0 = trim($s0);
	$firstchar_ord=ord(strtoupper($s0{0}));
	if (($firstchar_ord>=65 and $firstchar_ord<=91)or($firstchar_ord>=48 and $firstchar_ord<=57)) return strtoupper($s0{0});
	$s = iconv('utf-8', 'gbk', $s0);
	$asc=ord($s{0})*256+ord($s{1})-65536;
	if($asc>=-20319 and $asc<=-20284)return "A";
	if($asc>=-20283 and $asc<=-19776)return "B";
	if($asc>=-19775 and $asc<=-19219)return "C";
	if($asc>=-19218 and $asc<=-18711)return "D";
	if($asc>=-18710 and $asc<=-18527)return "E";
	if($asc>=-18526 and $asc<=-18240)return "F";
	if($asc>=-18239 and $asc<=-17923)return "G";
	if($asc>=-17922 and $asc<=-17418)return "H";
	if($asc>=-17417 and $asc<=-16475)return "J";
	if($asc>=-16474 and $asc<=-16213)return "K";
	if($asc>=-16212 and $asc<=-15641)return "L";
	if($asc>=-15640 and $asc<=-15166)return "M";
	if($asc>=-15165 and $asc<=-14923)return "N";
	if($asc>=-14922 and $asc<=-14915)return "O";
	if($asc>=-14914 and $asc<=-14631)return "P";
	if($asc>=-14630 and $asc<=-14150)return "Q";
	if($asc>=-14149 and $asc<=-14091)return "R";
	if($asc>=-14090 and $asc<=-13319)return "S";
	if($asc>=-13318 and $asc<=-12839)return "T";
	if($asc>=-12838 and $asc<=-12557)return "W";
	if($asc>=-12556 and $asc<=-11848)return "X";
	if($asc>=-11847 and $asc<=-11056)return "Y";
	if($asc>=-11055 and $asc<=-10247)return "Z";
	return 'Others';
}

/**
 * 生成静态分页函数
 */
function getpagelist($action, $pagecount, $page, $result_num, $page_size) {
	$pagelist = $pagecountlist = "";
	$pagelist .= "<div class=\"page_list\">";
	if ($pagecount > 1) {
		$start = (ceil($page / 10)-1) * 10;
		$end = ceil($page / 10) * 10 + 1;
		if ($start <= 0) $start = 1;
		if ($end >= $pagecount) $end = $pagecount;
		for($i = $start;$i <= $end;$i++) {
			if ($page == $i)
				$pagecountlist .= "<span class=\"xspace-current\">" . $i . "</span>";
			else
				$pagecountlist .= "<a href=" . $action . "_" . sprintf("%02d", $i) . ".html>" . $i . "</a>";
		} 
	} else {
		$pagecountlist .= "<span class=\"xspace-current\">1</span>";
	} 
	$pagelist .= "Page：";
	if ($page > 1) {
		$pagelist .= "<a href=" . $action . "_" . sprintf("%02d", ($page-1)) . ".html class='prepage'></a>";
	} 

	$pagelist .= $pagecountlist . "";

	if ($page < $pagecount) {
		$pagelist .= "<a href=" . $action . "_" . sprintf("%02d", ($page + 1)) . ".html class='nextpage'></a>";
	} 
	$pagelist .= "</div>";
	return $pagelist;
} 
// PHP COOKIE设置函数立即生效，支持数组
function setMyCookie($var, $value = '', $time = 0, $path = '', $domain = '') {
	$_COOKIE[$var] = $value;
	if (is_array($value)) {
		foreach($value as $k => $v) {
			setcookie($var . '[' . $k . ']', $v, $time, $path, $domain);
		} 
	} else {
		setcookie($var, $value, $time, $path, $domain);
	} 
} 

// 获取访客ip
function getFirstIpFromList($ip) {
	$p = strpos($ip, ',');
	if ($p !== false) {
		return (substr($ip, 0, $p));
	} else {
		return ($ip);
	} 
} 
function getIp() {
	if (isset($_SERVER['HTTP_CLIENT_IP']) && ($ip = getFirstIpFromList($_SERVER['HTTP_CLIENT_IP'])) && strpos($ip, "unknown") === false && getHost($ip) != $ip) {
		return $ip;
	} elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR']) && $ip = getFirstIpFromList($_SERVER['HTTP_X_FORWARDED_FOR']) && isset($ip) && !empty($ip) && strpos($ip, "unknown") === false && getHost($ip) != $ip) {
		return $ip;
	} elseif (isset($_SERVER['HTTP_CLIENT_IP']) && strlen(getFirstIpFromList($_SERVER['HTTP_CLIENT_IP'])) != 0) {
		return getFirstIpFromList($_SERVER['HTTP_CLIENT_IP']);
	} else if (isset($_SERVER['HTTP_X_FORWARDED_FOR']) && strlen (getFirstIpFromList($_SERVER['HTTP_X_FORWARDED_FOR'])) != 0) {
		return getFirstIpFromList($_SERVER['HTTP_X_FORWARDED_FOR']);
	} else {
		return getFirstIpFromList($_SERVER['REMOTE_ADDR']);
	} 
} 
function get_cityname($ip) {
	$arr_ip = convertIp($ip);
	$cityname = $arr_ip['city'];
	if($cityname=="unkown") $cityname="";
	return $cityname;
} 

function convertIp($ip, $url = 'data/ipdata.dat') {
	if (!preg_match("/^\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}$/", $ip)) {
		return '';
	} 

	if ($fd = @fopen($url, 'rb')) {
		$ip = explode('.', $ip);
		$ipNum = $ip[0] * 16777216 + $ip[1] * 65536 + $ip[2] * 256 + $ip[3];

		$DataBegin = fread($fd, 4);
		$DataEnd = fread($fd, 4);
		$ipbegin = implode('', unpack('L', $DataBegin));
		if ($ipbegin < 0) $ipbegin += pow(2, 32);
		$ipend = implode('', unpack('L', $DataEnd));
		if ($ipend < 0) $ipend += pow(2, 32);
		$ipAllNum = ($ipend - $ipbegin) / 7 + 1;

		$BeginNum = 0;
		$EndNum = $ipAllNum;

		while ($ip1num > $ipNum || $ip2num < $ipNum) {
			$Middle = intval(($EndNum + $BeginNum) / 2);

			fseek($fd, $ipbegin + 7 * $Middle);
			$ipData1 = fread($fd, 4);
			if (strlen($ipData1) < 4) {
				fclose($fd);
				return 'System Error';
			} 
			$ip1num = implode('', unpack('L', $ipData1));
			if ($ip1num < 0) $ip1num += pow(2, 32);

			if ($ip1num > $ipNum) {
				$EndNum = $Middle;
				continue;
			} 

			$DataSeek = fread($fd, 3);
			if (strlen($DataSeek) < 3) {
				fclose($fd);
				return 'System Error';
			} 
			$DataSeek = implode('', unpack('L', $DataSeek . chr(0)));
			fseek($fd, $DataSeek);
			$ipData2 = fread($fd, 4);
			if (strlen($ipData2) < 4) {
				fclose($fd);
				return 'System Error';
			} 
			$ip2num = implode('', unpack('L', $ipData2));
			if ($ip2num < 0) $ip2num += pow(2, 32);

			if ($ip2num < $ipNum) {
				if ($Middle == $BeginNum) {
					fclose($fd);
					return 'Unknown';
				} 
				$BeginNum = $Middle;
			} 
		} 

		$ipFlag = fread($fd, 1);
		if ($ipFlag == chr(1)) {
			$ipSeek = fread($fd, 3);
			if (strlen($ipSeek) < 3) {
				fclose($fd);
				return 'System Error';
			} 
			$ipSeek = implode('', unpack('L', $ipSeek . chr(0)));
			fseek($fd, $ipSeek);
			$ipFlag = fread($fd, 1);
		} 

		if ($ipFlag == chr(2)) {
			$AddrSeek = fread($fd, 3);
			if (strlen($AddrSeek) < 3) {
				fclose($fd);
				return 'System Error';
			} 
			$ipFlag = fread($fd, 1);
			if ($ipFlag == chr(2)) {
				$AddrSeek2 = fread($fd, 3);
				if (strlen($AddrSeek2) < 3) {
					fclose($fd);
					return 'System Error';
				} 
				$AddrSeek2 = implode('', unpack('L', $AddrSeek2 . chr(0)));
				fseek($fd, $AddrSeek2);
			} else {
				fseek($fd, -1, SEEK_CUR);
			} while (($char = fread($fd, 1)) != chr(0))
			$ipAddr2 .= $char;

			$AddrSeek = implode('', unpack('L', $AddrSeek . chr(0)));
			fseek($fd, $AddrSeek);

			while (($char = fread($fd, 1)) != chr(0))
			$ipAddr1 .= $char;
		} else {
			fseek($fd, -1, SEEK_CUR);
			while (($char = fread($fd, 1)) != chr(0))
			$ipAddr1 .= $char;

			$ipFlag = fread($fd, 1);
			if ($ipFlag == chr(2)) {
				$AddrSeek2 = fread($fd, 3);
				if (strlen($AddrSeek2) < 3) {
					fclose($fd);
					return 'System Error';
				} 
				$AddrSeek2 = implode('', unpack('L', $AddrSeek2 . chr(0)));
				fseek($fd, $AddrSeek2);
			} else {
				fseek($fd, -1, SEEK_CUR);
			} while (($char = fread($fd, 1)) != chr(0))
			$ipAddr2 .= $char;
		} 
		fclose($fd);

		if (preg_match('/http/i', $ipAddr2)) {
			$ipAddr2 = '';
		} 
		$ipaddr = "$ipAddr1,$ipAddr2";
		$ipaddr = preg_replace('/CZ88\.NET/is', '', $ipaddr);
		$ipaddr = preg_replace('/^\s*/is', '', $ipaddr);
		$ipaddr = preg_replace('/\s*$/is', '', $ipaddr);
		if (preg_match('/http/i', $ipaddr) || $ipaddr == '') {
			$ipaddr = '';
		} 
		if (count(explode(',', $ipaddr)) > 0)
			$ipaddrArr = explode(',', $ipaddr);

		$Ripaddr[country] = $ipaddrArr[0] == '' ? 'unknown' : $ipaddrArr[0];
		$Ripaddr[province] = $ipaddrArr[1] == '' ? 'unknown' : $ipaddrArr[1];
		$Ripaddr[city] = $ipaddrArr[2] == '' ? 'unknown' : $ipaddrArr[2];
		$Ripaddr[address] = $ipaddrArr[3] == '' ? 'unknown' : $ipaddrArr[3];
		return $Ripaddr;
	} else {
		$datadir = $url . './ipdata/';
		$ip_detail = explode('.', $ip);
		if (file_exists($datadir . $ip_detail[0] . '.txt')) {
			$ip_fdata = @fopen($datadir . $ip_detail[0] . '.txt', 'r');
		} else {
			if (!($ip_fdata = @fopen($datadir . '0.txt', 'r'))) {
				return 'Invalid IP data file';
			} 
		} 
		for($i = 0; $i <= 3; $i++) {
			$ip_detail[$i] = sprintf('%03d', $ip_detail[$i]);
		} 
		$ip = join('.', $ip_detail);
		do {
			$ip_data = fgets($ip_fdata, 200);
			$ip_data_detail = explode('|', $ip_data);
			if ($ip >= $ip_data_detail[0] && $ip <= $ip_data_detail[1]) {
				fclose($ip_fdata);
				return $ip_data_detail[2] . $ip_data_detail[3];
			} 
		} while (!feof($ip_fdata));
		fclose($ip_fdata);
		return '';
	} 
} 

//判断是否为真实图片
function isImage($filename){
    $types = '|.gif|.jpeg|.png|.bmp|';//定义检查的图片类型
    if(file_exists($filename)){
        $info = getimagesize($filename);
        $ext = image_type_to_extension($info['2']);
        return stripos($types,$ext);
    }else{
        return false;
    }
}

//缩放图片
function fileext($file)
{
	return pathinfo($file, PATHINFO_EXTENSION);
}


function img2thumb($src_img, $dst_img, $width = 581, $height = 400, $cut = 0, $proportion = 0)
{
	if(!is_file($src_img))
	{
		return false;
	}
	$ot = fileext($dst_img);
	$otfunc = 'image' . ($ot == 'jpg' ? 'jpeg' : $ot);
	$srcinfo = getimagesize($src_img);
	$src_w = $srcinfo[0];
	$src_h = $srcinfo[1];
	$type  = strtolower(substr(image_type_to_extension($srcinfo[2]), 1));
	$createfun = 'imagecreatefrom' . ($type == 'jpg' ? 'jpeg' : $type);

	$dst_h = $height;
	$dst_w = $width;
	$x = $y = 0;

	/**
	 * 缩略图不超过源图尺寸（前提是宽或高只有一个）
	 */
	if(($width> $src_w && $height> $src_h) || ($height> $src_h && $width == 0) || ($width> $src_w && $height == 0))
	{
		$proportion = 1;
	}
	if($width> $src_w)
	{
		$dst_w = $width = $src_w;
	}
	if($height> $src_h)
	{
		$dst_h = $height = $src_h;
	}

	if(!$width && !$height && !$proportion)
	{
		return false;
	}
	if(!$proportion)
	{
		if($cut == 0)
		{
			if($dst_w && $dst_h)
			{
				if($dst_w/$src_w> $dst_h/$src_h)
				{
					$dst_w = $src_w * ($dst_h / $src_h);
					$x = 0 - ($dst_w - $width) / 2;
				}
				else
				{
					$dst_h = $src_h * ($dst_w / $src_w);
					$y = 0 - ($dst_h - $height) / 2;
				}
			}
			else if($dst_w xor $dst_h)
			{
				if($dst_w && !$dst_h)  //有宽无高
				{
					$propor = $dst_w / $src_w;
					$height = $dst_h  = $src_h * $propor;
				}
				else if(!$dst_w && $dst_h)  //有高无宽
				{
					$propor = $dst_h / $src_h;
					$width  = $dst_w = $src_w * $propor;
				}
			}
		}
		else
		{
			if(!$dst_h)  //裁剪时无高
			{
				$height = $dst_h = $dst_w;
			}
			if(!$dst_w)  //裁剪时无宽
			{
				$width = $dst_w = $dst_h;
			}
			$propor = min(max($dst_w / $src_w, $dst_h / $src_h), 1);
			$dst_w = (int)round($src_w * $propor);
			$dst_h = (int)round($src_h * $propor);
			$x = ($width - $dst_w) / 2;
			$y = ($height - $dst_h) / 2;
		}
	}
	else
	{
		$proportion = min($proportion, 1);
		$height = $dst_h = $src_h * $proportion;
		$width  = $dst_w = $src_w * $proportion;
	}

	$src = $createfun($src_img);
	$dst = imagecreatetruecolor($width ? $width : $dst_w, $height ? $height : $dst_h);
	$white = imagecolorallocate($dst, 255, 255, 255);
	imagefill($dst, 0, 0, $white);

	if(function_exists('imagecopyresampled'))
	{
		imagecopyresampled($dst, $src, $x, $y, 0, 0, $dst_w, $dst_h, $src_w, $src_h);
	}
	else
	{
		imagecopyresized($dst, $src, $x, $y, 0, 0, $dst_w, $dst_h, $src_w, $src_h);
	}
	$otfunc($dst, $dst_img);
	imagedestroy($dst);
	imagedestroy($src);
	return true;
}


//缩略图
function CreateSmallImage( $OldImagePath, $NewImagePath, $NewWidth=154, $NewHeight=134)
{
	// 取出原图，获得图形信息getimagesize参数说明：0(宽),1(高),2(1gif/2jpg/3png),3(width="638" height="340")
	$OldImageInfo = getimagesize($OldImagePath);
	if ( $OldImageInfo[2] == 1 ) $OldImg = @imagecreatefromgif($OldImagePath);
	elseif ( $OldImageInfo[2] == 2 ) $OldImg = @imagecreatefromjpeg($OldImagePath);
	else $OldImg = @imagecreatefrompng($OldImagePath);

	// 创建图形,imagecreate参数说明：宽,高
	$NewImg = imagecreatetruecolor( $NewWidth, $NewHeight );

	//创建色彩,参数：图形,red(0-255),green(0-255),blue(0-255)
	$black = ImageColorAllocate( $NewImg, 0, 0, 0 ); //黑色
	$white = ImageColorAllocate( $NewImg, 255, 255, 255 ); //白色
	$red   = ImageColorAllocate( $NewImg, 255, 0, 0 ); //红色
	$blue  = ImageColorAllocate( $NewImg, 0, 0, 255 ); //蓝色
	$other = ImageColorAllocate( $NewImg, 0, 255, 0 );

	//新图形高宽处理
	$WriteNewWidth = $NewHeight*($OldImageInfo[0] / $OldImageInfo[1]); //要写入的高度
	$WriteNewHeight = $NewWidth*($OldImageInfo[1] / $OldImageInfo[0]); //要写入的宽度

	//这样处理图片比例会失调，但可以填满背景
	if ($OldImageInfo[0] / $NewWidth > $OldImageInfo[1] / $NewHeight) {
		$WriteNewWidth  = $NewWidth;
		$WriteNewHeight  = $NewWidth / ($OldImageInfo[0] / $OldImageInfo[1]);
	} else {

		$WriteNewWidth  = $NewHeight * ($OldImageInfo[0] / $OldImageInfo[1]);
		$WriteNewHeight = $NewHeight;
	}
	//以$NewHeight为基础,如果新宽小于或等于$NewWidth,则成立
	if ( $WriteNewWidth <= $NewWidth ) {
		$WriteNewWidth = $WriteNewWidth; //用判断后的大小
		$WriteNewHeight = $NewHeight; //用规定的大小
		$WriteX = floor( ($NewWidth-$WriteNewWidth) / 2 ); //在新图片上写入的X位置计算
		$WriteY = 0;
	} else {
		$WriteNewWidth = $NewWidth; // 用规定的大小
		$WriteNewHeight = $WriteNewHeight; //用判断后的大小
		$WriteX = 0;
		$WriteY = floor( ($NewHeight-$WriteNewHeight) / 2 ); //在新图片上写入的X位置计算
	}

	//旧图形缩小后,写入到新图形上(复制),imagecopyresized参数说明：新旧, 新xy旧xy, 新宽高旧宽高
	@imageCopyreSampled( $NewImg, $OldImg, $WriteX, $WriteY, 0, 0, $WriteNewWidth, $WriteNewHeight, $OldImageInfo[0], $OldImageInfo[1] );

	//保存文件
//    @imagegif( $NewImg, $NewImagePath );
	@imagejpeg($NewImg, $NewImagePath, 100);
	//结束图形
	@imagedestroy($NewImg);
	return true;
}






//发送短信验证码
function sendSMS($mobile,$content)
{
	//发送链接（用户名，密码，apikey，手机号，内容）
	$url = "http://m.5c.com.cn/api/send/index.php?";  //如连接超时，可能是您服务器不支持域名解析，请将下面连接中的：【m.5c.com.cn】修改为IP：【115.28.23.78】
	$data=array
	(
		'username'=>'wutongshu',
		'password_md5'=>'157e57821d1ee95b223ffbaecfc2c377',
		'apikey'=>'ec0635f8740baa002c69eaf97c31bda7',
		'mobile'=>$mobile,
		'content'=>$content,
		'encode'=>'utf-8',
	);
	$result = curlSMS($url,$data);
	return $result;
}
function curlSMS($url,$post_fields=array())
{
	$ch=curl_init();
	curl_setopt($ch,CURLOPT_URL,$url);//用PHP取回的URL地址（值将被作为字符串）
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);//使用curl_setopt获取页面内容或提交数据，有时候希望返回的内容作为变量存储，而不是直接输出，这时候希望返回的内容作为变量
	curl_setopt($ch,CURLOPT_TIMEOUT,30);//30秒超时限制
	curl_setopt($ch,CURLOPT_HEADER,1);//将文件头输出直接可见。
	curl_setopt($ch,CURLOPT_POST,1);//设置这个选项为一个零非值，这个post是普通的application/x-www-from-urlencoded类型，多数被HTTP表调用。
	curl_setopt($ch,CURLOPT_POSTFIELDS,$post_fields);//post操作的所有数据的字符串。
	$data = curl_exec($ch);//抓取URL并把他传递给浏览器
	curl_close($ch);//释放资源
	$res = explode("\r\n\r\n",$data);//explode把他打散成为数组
	return $res[2]; //然后在这里返回数组。
}




?>