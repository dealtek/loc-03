<?php // require_once('../../../Connections/weblink.php');

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

$maxRows_prodlist = 9999;
$pageNum_prodlist = 0;
if (isset($_GET['pageNum_prodlist'])) {
  $pageNum_prodlist = $_GET['pageNum_prodlist'];
}
$startRow_prodlist = $pageNum_prodlist * $maxRows_prodlist;

mysql_select_db($database_weblink, $weblink);
$query_prodlist = "SELECT DISTINCT pr_model FROM st_products";
$query_limit_prodlist = sprintf("%s LIMIT %d, %d", $query_prodlist, $startRow_prodlist, $maxRows_prodlist);
$prodlist = mysql_query($query_limit_prodlist, $weblink) or die(mysql_error());
$row_prodlist = mysql_fetch_assoc($prodlist);

if (isset($_GET['totalRows_prodlist'])) {
  $totalRows_prodlist = $_GET['totalRows_prodlist'];
} else {
  $all_prodlist = mysql_query($query_prodlist);
  $totalRows_prodlist = mysql_num_rows($all_prodlist);
}
$totalPages_prodlist = ceil($totalRows_prodlist/$maxRows_prodlist)-1;

//mysql_free_result($prodlist);

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

mysql_select_db($database_weblink, $weblink);
//$query_catlist = "SELECT * FROM st_products WHERE pr_cat = 'Flutes' ORDER BY pr_cat ASC";
// 2012 added pr
$query_catlist_pr = "SELECT DISTINCT pr_cat FROM st_products ORDER BY pr_cat ASC";
$catlist_pr = mysql_query($query_catlist_pr, $weblink) or die(mysql_error());
$row_catlist_pr = mysql_fetch_assoc($catlist_pr);
$totalRows_catlist_pr = mysql_num_rows($catlist_pr);

mysql_select_db($database_weblink, $weblink);
//$query_catlist = "SELECT * FROM st_products WHERE pr_cat = 'Flutes' ORDER BY pr_cat ASC";
$query_catlist = "SELECT DISTINCT cat FROM st_cat ORDER BY cat ASC";
$catlist = mysql_query($query_catlist, $weblink) or die(mysql_error());
$row_catlist = mysql_fetch_assoc($catlist);
$totalRows_catlist = mysql_num_rows($catlist);

mysql_select_db($database_weblink, $weblink);
$query_drinks = "SELECT DISTINCT pr_name FROM st_products where pr_cat = 'Drinks' ORDER BY pr_name ASC";
$drinks = mysql_query($query_drinks, $weblink) or die(mysql_error());
$row_drinks = mysql_fetch_assoc($drinks);
$totalRows_drinks = mysql_num_rows($drinks);

mysql_select_db($database_weblink, $weblink);
$query_sides = "SELECT DISTINCT pr_name FROM st_products where pr_cat = 'Sides' ORDER BY pr_name ASC";
$sides = mysql_query($query_sides, $weblink) or die(mysql_error());
$row_sides = mysql_fetch_assoc($sides);
$totalRows_sides = mysql_num_rows($sides);

//mysql_free_result($catlist);
?>