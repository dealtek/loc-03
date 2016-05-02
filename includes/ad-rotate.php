<?php require_once('../../../Connections/weblink.php'); 

ini_set('display_errors', 1); 
error_reporting(E_ALL | E_STRICT); 
$nowpub = 1;

mysql_select_db($database_weblink, $weblink);
$query_cur = "SELECT st_mt_tracker.tid FROM st_mt_tracker WHERE pid = $nowpub
and lid in (SELECT lid
FROM st_mt_links
where ltype = 'ban' and mid > 100 and size = '175*45' or size = '120*60' or size = '88*33' or size = '95*95' or size = '234*60')
";
$cur = mysql_query($query_cur, $weblink) or die(mysql_error());
//$row_cur = mysql_fetch_array($cur); 
$row_cur = mysql_fetch_assoc($cur);

// try less
if (isset($_GET['totalRows_cur'])) {
  $totalRows_cur = $_GET['totalRows_cur'];
} else {
  $all_cur = mysql_query($query_cur);
  $totalRows_cur = mysql_num_rows($all_cur);
}

//echo $row_cur('tid',2);

//$ran = rand(1, $totalRows_cur);
$ran = rand(0, $totalRows_cur - 1);
//echo $ran;
//$ran = 216;


$now = mysql_result($cur, $ran);

mysql_select_db($database_weblink, $weblink);
$query_ads = "SELECT
	st_mt_tracker.tid,
	st_mt_tracker.pid,
	st_mt_tracker.wsid,
	st_mt_tracker.mid,
	st_mt_tracker.lid,
	st_mt_tracker.mc,
	st_mt_tracker.status,
	st_mt_links.lid,
	st_mt_links.ltype,
	st_mt_links.body,
	st_mt_links.goto

FROM st_mt_tracker, st_mt_links

Where st_mt_tracker.tid = $now and st_mt_links.lid = st_mt_tracker.lid";
$ads = mysql_query($query_ads, $weblink) or die(mysql_error());
$row_ads = mysql_fetch_assoc($ads);
 ?>

<!--
start text<br /><br /><br />



ted text -
Depends on how you're creating running the query. You could do something like:

echo mysql_result($result, 1, 'fieldname');

Where $result is your result object and 1 is a 0 indexed array, so would be the second result.

Thanks,
Ash<br /><br /><br /> -->
<br />
now - 

<?php echo $now;?>
 show - 
<?php



 echo mysql_result($cur, $ran);

// echo mysql_result($ads, 1, 'tid');


//$row_ads['tid']; 

?>


<br /><br /><br />



<p>
  <?php //$ran = rand(1, 10);
echo $ran;

 ?>
</p>
<p>aaaaaaa</p>
<p>tot<?php echo $totalRows_cur;  ?></p>

cur <?php // echo $row_cur['tid',1];  ?></p>
..........echo $row[0] 

<?php //echo $row_cur('tid',2); ?><br /><br />
<?php // echo $emp_row->getField('Corp_ID',0); ?>
<!--
<p>&nbsp;</p>
<table width="800" border="1" cellspacing="2" cellpadding="2">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <?php do { ?>
    <tr>
      <td><?php echo $row_cur['tid']; ?></td>
      <td>&nbsp;</td>
    </tr>
    <?php } while ($row_cur = mysql_fetch_assoc($cur)); ?>
</table> -->

<br /><br />
-------
<br /><br />

<table width="800" border="1" cellspacing="2" cellpadding="2">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
    <?php do { ?>
  <tr>
          <td><?php echo $row_ads['tid']; ?><br />

<?php echo $row_ads['lid']; ?> - <?php echo $row_ads['goto']; ?>


</td>
    <td>&nbsp;</td>
  </tr>
   <?php } while ($row_ads = mysql_fetch_assoc($ads)); ?>
</table>

<br /><br />



<?php
mysql_free_result($cur);
?>
