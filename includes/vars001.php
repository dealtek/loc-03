<?php

// universal tech
date_default_timezone_set("America/Los_Angeles");

$t=getdate();
$today=date('m-d-Y',$t[0]); 
//$today2=date('m-d-y',$t[0]); i took this out - many need this so i put bak 12-02 (04-49-28 PM)
$today2=date('m-d-y',$t[0]);
$back1=$t[0]-(86400*1);
$back7=$t[0]-(86400*7);
$back14=$t[0]-(86400*14);
$back30=$t[0]-(86400*30);
$back60=$t[0]-(86400*60);
$back90=$t[0]-(86400*90);
$back180=$t[0]-(86400*180);
$back365=$t[0]-(86400*365);

$past1=date('m-d-Y',$back1);
$past7=date('m-d-Y',$back7);
$past14=date('m-d-Y',$back14);
$past30=date('m-d-Y',$back30);
$past60=date('m-d-Y',$back60);
$past90=date('m-d-Y',$back90);
$past180=date('m-d-Y',$back180);
$past365=date('m-d-Y',$back365);
//$searchDateString = $past30."...".$today; // just for fm for now    
$thetime = date('h:i A',$t[0]);
$todaysearch=date('Y-m-d',$t[0]);

$t_day=date('d',$t[0]);
$t_mo=date('m',$t[0]);
$t_yr=date('Y',$t[0]);


//$ts=date('m-d-Y H:i:s',$t[0]);
$ts=date('Y-m-d H:i:s',$t[0]);

//more for sql
//$todays=date('Y-m-d 00:00:00',$t[0]); // needs zeros for 10 am
$todays=date('Y-m-d',$t[0]);
$past1s=date('Y-m-d',$back1);
$past7s=date('Y-m-d',$back7);
$past14s=date('Y-m-d',$back14);
$past30s=date('Y-m-d',$back30);
$past60s=date('Y-m-d',$back60);
$past90s=date('Y-m-d',$back90);
$past180s=date('Y-m-d',$back180);
$past365s=date('Y-m-d',$back365);

// defaults
$backs=$todays;
$backmod=$todays;




// biz - store

$pr_list_discount = array('.00','.05','.10','.15','.20','.25','.30','.35','.40','.45','.50'); 
$pr_prd0 = .5;

$pr_prd95 = .00;
$pr_prd95 = .95;
$pr_prd90 = .90;
$pr_prd75 = .75;

$pr_prd05 = .05;
$pr_prd10 = .10;
$pr_prd15 = .15;
$pr_prd20 = .20;
$pr_prd25 = .25;
$pr_prd30 = .30;
$pr_prd35 = .35;
$pr_prd40 = .40;
$pr_prd45 = .45;
$pr_prd50 = .50;

$nv_mod = array('M',''); 

$inv_list_status = array('Open','Closed','Hold','CartOnly'); // for invoice to delete 

//$pr_list_type = array('Serial','Bulk');
$pr_list_type = array('S','B');
$pr_list_status = array('Open','Closed','Hold'); 

$pr_list_cat = array(
'Domains',
'WebServices',
'Production',
'Consulting',
'Hosting',
'Other',
'Saxophones',
'Accessories',
'Flutes',
'Clarinets',
'Trumpets',
'Marching Brass',
'Guitars',
'Varied'
); 


$pr_list_loc = array(
'Back',
'Shipping',
'Stock',
'US',
'Foriegn1',
'Foriegn2'
); 



// global

$pr_list_day = array('01','02','03','04','05','06','07','08'); 
$pr_list_month = array('01','02','03','04','05','06','07','08');
$pr_list_year = array('2009','2010','2011','2012','2013','2014','2015','2016','2017','2018','2019','2020'); 


$glob_list_daterange = array('Today','1Day', '1Week','2Weeks', '1Month', '3Months', '6Months','1Year');

$link_list_level = array(
'1',
'2',
'3',
'4',
'5',
'6',
'7',
'8',
'9',
'10'
);



// purchase orders

$own_info = 'RevDave<br />
1 Cool Street<br />
Room 1<br />
MyPlace, CA 11111';

// phone

$pb_list_display = array('Co', 'Name', 'Rev', 'Co:Name', 'Name:Co');
$pb_list_lvl = array('1', '2', '3', '4', '5');
$pb_list_type = array('General', 'Personal', 'Business');
$pb_list_bool = array('0','1');  
$pb_list_vendor = array('customer','dealer','distributor'); 
$pb_list_region = array('US','CHINA','ALL','FOREIGN-1','FOREIGN-2','NONE');  

// planner

$pl_list_pri = array('Hi','Med','Low');
//$pl_list_status = array('Active','Complete','Pending','Cancelled');
$pl_list_status = array('.','Active','In Process','Done','On Hold','Future','Cancel','Drop','Arc','Missed','Perm');

$pl_list_type = array('Note', 'Do', 'Call-I', 'Call-O', 'Chow', 'EMail-I', 'EMail-O', 'Fax-I', 'Fax-O', 'Gig', 'Letter', 'Meet', 'Net', 'Tracker', 'TimeSheet');
$pl_list_cat = array('Biz', 'Career', 'Computing', 'Creative', 'DayToDay', 'Educate', 'Exercise', 'General', 'Misc', 'Money', 'Music', 'NetWork', 'Personal', 'Relax', 'Shopping', 'Social'); 
$pl_list_sel = array('0','1'); 
$pl_list_bool = array('0','1'); 
//$pl_list_day = array('01','02','03','04','05','06','07','08','09','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31'); 
$pl_list_day = array('1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31'); 
//$pl_list_mo = array('01','02','03','04','05','06','07','08','09','10','11','12');
$pl_list_mo = array('1','2','3','4','5','6','7','8','9','10','11','12'); 
$pl_list_yr = array('2013','2014','2015','2016','2017','2018','2019','2020');

$pl_list_hrs = array('01','02','03','04','05','06','07','08','09','10','11','12'); 
$pl_list_min = array('00','15','30','45'); 
$pl_list_ap = array('am','pm');   

$pl_list_hrsx = array('6:00 AM', '6:30 AM', '7:00 AM', '7:30 AM', '8:00 AM', '8:30 AM', '9:00 AM', '9:30 AM', '10:00 AM', '10:30 AM', '11:00 AM', '11:30 AM', '12:00 PM', '12:30 PM', '1:00 PM', '1:30 PM', '2:00 PM', '2:30 PM', '3:00 PM', '3:30 PM', '4:00 PM', '4:30 PM', '5:00 PM', '5:30 PM', '6:00 PM', '6:30 PM', '7:00 PM', '7:30 PM', '8:00 PM', '8:30 PM', '9:00 PM', '9:30 PM', '10:00 PM', '10:30 PM', '11:00 PM', '11:30 PM', '12:00 AM', '12:30 AM', '1:00 AM', '1:30 AM', '2:00 AM', '2:30 AM', '3:00 AM', '3:30 AM', '4:00 AM', '4:30 AM', '5:00 AM', '5:30 AM');  

//$pl_list_topic = array('fun shit','sad shit','meaningless shit'); 

?>
