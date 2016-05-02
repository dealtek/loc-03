<?php 
if(!session_id()) session_start();

mysql_select_db($database_weblink, $weblink);
$query_memcheck = "select * from  st_invoices where sa_id = $_SESSION[now_said]";
$memcheck = mysql_query($query_memcheck) or die ('nope' . mysql_error());
$row_memcheck = mysql_fetch_assoc($memcheck);

if ($row_memcheck['sa_memid'] < 1) {
echo "nooooooooo";
echo '<meta http-equiv="refresh" content="0; url=../../login-customer.php">';
}



if ((isset($_SESSION['now_memid'])) && ($_SESSION['now_memid'] > 0)) {} else {
//header(sprintf("Location: %s", $updateGoTo));

echo '<meta http-equiv="refresh" content="0; url=../../login-customer.php">';


/*
if ($_SESSION['nowpage'] =='home') {
echo '<meta http-equiv="refresh" content="0; url=login.php">';
} elseif ($_SESSION['nowpage'] =='store') {
echo '<meta http-equiv="refresh" content="0; url=../../login.php">';
} elseif ($_SESSION['nowpage'] =='shop') {
echo '<meta http-equiv="refresh" content="0; url=../../login.php">';
//echo '<meta http-equiv="refresh" content="0; url=index.php">';
}elseif ($_SESSION['nowpage'] =='phone') {
echo '<meta http-equiv="refresh" content="0; url=../login.php">';
//echo '<meta http-equiv="refresh" content="0;index.php">';
}elseif ($_SESSION['nowpage'] =='plan') {
echo '<meta http-equiv="refresh" content="0; url=../login.php">';
//echo '<meta http-equiv="refresh" content="0;index.php">';
}else{
echo '<meta http-equiv="refresh" content="0; url=../../login.php">';
}

*/

$_SESSION['nowpage'] = '';


flush();
exit(0);
//$_SESSION['now_ven']
}
?>


<!--
tmp refer: <?php
echo $_SERVER['HTTP_REFERER'];
?>


 -->