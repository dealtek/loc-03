<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>


<?php

ini_set('display_errors', 1);
error_reporting(E_ALL | E_STRICT);

//require("../../../files/inc/php-pdo-wrapper-class/class.db.php"); ?>

<?php

/*STEP 1: Include the project's required file, class.db.php.*/
//include("../../../files/inc/php-pdo-wrapper-class/class.db.php");
include("../../../_inc/pdo/class.db.php");
/*STEP 2: Connect to database using the project's constructor.*/
$db = new db("mysql:host=127.0.0.1;port=8889;dbname=easyplan", "root", "root");

//select Method Declaration
//public function select($table, $where="", $bind="", $fields="*") { }


//SELECT #1
//$results = $db->select("mytable");
/**/
//SELECT #2


//YO REV ERROR - HAS TO COME FIRST TO SHOW!!!

//$query_list1 = "SELECT * FROM st_invoices where sa_poid = 0 and sa_status = 'open'";

$er = $db->setErrorCallbackFunction("echo");
$results = $db->select("st_invoices", "sa_status = 'open'");

//SELECT #3 w/Prepared Statement

//YO FIXED
/*
$search = "Ji";
$bind = array(
//    ":search" => "%$search"
    ":search" => "%$search%"
);
$results = $db->select("mytable", "FName LIKE :search", $bind);
*/

echo '<br />';
print_r($er);
//print_r($results);

?>

<br /><br />


<table width="80%" border="1" cellspacing="2" cellpadding="2">
  <tr>
    <td>ID</td>
    <td>NAME</td>
    <td>Gender</td>
    <td>Age</td>
    <td>&nbsp;</td>
  </tr>
  
  
<?php 
//foreach ($results->fetchAll(PDO::FETCH_ASSOC) as $result) {
  foreach ($results as $result) {
   
?>
{list1.sa_code}
  <tr>
    <td><?php echo $result["sa_id"]; ?></td>
    <td>
	
	<?php echo $result['sa_status']; ?> <?php echo $result['sa_Company']; ?></td>
    <td><?php echo $result["sa_First"]; ?></td>
   <td><?php echo $result["sa_Last"]; ?></td>
    <td>&nbsp;</td>
  </tr>
  
<?php   }
?>

</table>
<br />
<br />






</body>
</html>