<?php
//require_once('../../../Connections/webpdo.php');
//require_once('../../../files/inc/Connections/weblink.php');
//ini_set('display_errors', 1);
//error_reporting(E_ALL | E_STRICT);

$pdo = new PDO("mysql:host=$hostname_weblink;dbname=$database_weblink", $username_weblink, $password_weblink);

$sth = $pdo->prepare("SELECT DISTINCT mem_cat FROM st_customers");
$sth->setFetchMode(PDO::FETCH_ASSOC);
$sth->execute();
$rows = $sth->fetchAll();

foreach ($rows as $result) {

//	echo $result['mem_cat'];

}?>