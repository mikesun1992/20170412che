<?php
include('common.inc.php');
include(INC_DIR.'permission.func.php');
include(INC_DIR . 'html.func.php');
include ('index/page.php');


$m = isset($_GET['m']) ? $_GET['m'] : 'main';
if (!is_admin_login()) $m = 'login';
if (!file_exists('admins/'.$m.'.php')) exit('error url');
permission_chk();
include('admins/'.$m.'.php');
?>