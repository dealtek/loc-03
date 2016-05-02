<?php
if(!session_id()) session_start();
if ((isset($_SESSION['now_memid'])) && ($_SESSION['now_memid'] > 0)) {} else {
//header(sprintf("Location: %s", $updateGoTo));

if ($_SESSION['nowpage'] =='home') {
//echo '<meta http-equiv="refresh" content="0; url=login-customer.php">';
} elseif ($_SESSION['nowpage'] =='purchase') {
$_SESSION['hint'] = "Please login or register prior to purchasing shares.";
echo '<meta http-equiv="refresh" content="0; url=../customers/login-customer.php">';

//echo '<meta http-equiv="refresh" content="0; url=index.php">';
}elseif ($_SESSION['nowpage'] =='customer') {
echo '<meta http-equiv="refresh" content="0; url=../customers99/login-customer.php">';
//echo '<meta http-equiv="refresh" content="0;index.php">';
}else{
echo '<meta http-equiv="refresh" content="0; url=../../customers99/login-customer.php">';
}


$_SESSION['nowpage'] = '';


flush();
exit(0);

}

//tmp refer:
//echo $_SERVER['HTTP_REFERER'];
?>