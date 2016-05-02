<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
ini_set('default_socket_timeout', 300); // added in 2012
$hostname_weblink = "127.0.0.1:8889";
$database_weblink = "test3";
$username_weblink = "web1";
$password_weblink = "123";
$weblink = mysql_pconnect($hostname_weblink, $username_weblink, $password_weblink) or trigger_error(mysql_error(),E_USER_ERROR);
// new 2012
date_default_timezone_set("America/Los_Angeles");

//require_once('../includes/timer.php');

?>