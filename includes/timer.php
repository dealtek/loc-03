<?php

ini_set('display_errors', 1); 
error_reporting(E_ALL | E_STRICT);

if(!session_id()) session_start();

//echo '<br /> now '. time().' . ';

if (!isset($_SESSION['timeout']))  {

$_SESSION['hint'] = 'You will need to login to access your data';

// if no timer then must login
echo '<meta http-equiv="refresh" content="0;url=../customers/login-customer.php">';
}

if ((isset($_SESSION['timeout'])) && ($_SESSION['timeout'] > time())) {

// + 5 * 60 REA; = 300
$_SESSION['timeout'] = time() + 1800;
//echo ' ok under less';

} else {
//
//echo 'to late -  more';
$_SESSION['hint'] = 'Your session is not active. You will need to re-login to access your data';
echo '<meta http-equiv="refresh" content="0;url=../customers/login-customer.php">';

}

?>