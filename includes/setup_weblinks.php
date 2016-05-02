<?php //require_once('../../../files/Connections/weblink.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$maxRows_pl_topic = 9999;
$pageNum_pl_topic = 0;
if (isset($_GET['pageNum_pl_topic'])) {
  $pageNum_pl_topic = $_GET['pageNum_pl_topic'];
}
$startRow_pl_topic = $pageNum_pl_topic * $maxRows_pl_topic;

mysql_select_db($database_weblink, $weblink);
$query_pl_topic = "SELECT DISTINCT wb_Category FROM st_weblinks";
$query_limit_pl_topic = sprintf("%s LIMIT %d, %d", $query_pl_topic, $startRow_pl_topic, $maxRows_pl_topic);
$pl_topic = mysql_query($query_limit_pl_topic, $weblink) or die(mysql_error());
$row_pl_topic = mysql_fetch_assoc($pl_topic);

if (isset($_GET['totalRows_pl_topic'])) {
  $totalRows_pl_topic = $_GET['totalRows_pl_topic'];
} else {
  $all_pl_topic = mysql_query($query_pl_topic);
  $totalRows_pl_topic = mysql_num_rows($all_pl_topic);
}
$totalPages_pl_topic = ceil($totalRows_pl_topic/$maxRows_pl_topic)-1;

//mysql_free_result($pl_topic);
?>