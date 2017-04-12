<?php
include('common.inc.php');
include(INC_DIR.'permission.func.php');
include(INC_DIR . 'html.func.php');
include ('index/page.php');

$m = isset($_GET['m']) ? $_GET['m'] : 'index';
if (!is_jcs_login()) $m = 'login';
if (!file_exists('jcdmin/'.$m.'.php')) exit('error url');
include('jcdmin/'.$m.'.php');
?>