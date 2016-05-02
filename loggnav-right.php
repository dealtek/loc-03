<!--bgcolor="#CCCCCC" background="store/pix/bk4.png"-->

<table width="100%" border="0" cellpadding="2" cellspacing="2" bgcolor="#CCCCCC"  >

<tr>
    <td valign="top" bgcolor="#FFFFFF"><form id="login_form" name="login_form" method="post" action="store/customers/login-customer_a.php">
  <div align="center">
    
  </div>
  <table width="300" border="0" align="right" bgcolor="#CCCCCC" >
    <!--
    
    bgcolor="#CCCCCC"
    <tr>
      <th colspan="2" scope="row">
      
      

<?php 
if(!isset($_SESSION['hint']) && $_SESSION['hint'] != ''){
//echo '<br /><br /> 888'.$_SESSION['hint'].'<br /><br />';
}
else{;}
?>

<?php 
if(!isset($_SESSION['nowpage'])) $_SESSION['nowpage'] = '';

// echo $_SESSION['nowpage']; ?></th>
    </tr> -->
    <tr>
      <th scope="row">Current Customers</th>
      <td>Please Login<br /></td>
    </tr>
    <tr>
      <th valign="top" scope="row">User Name</th>
      <td valign="top"><input name="mem_user" type="text" id="mem_user" value="" /></td>
    </tr>
    <tr>
      <th valign="top" scope="row">Password</th>
      <td valign="top"><input name="mem_pass" type="password" id="mem_pass" value="" /></td>
    </tr>
    <tr>
      <th valign="top" scope="row">&nbsp;</th>
      <td valign="top">
      
      <!--
      <input name="Submit" type="submit" class="ip-16" value="Login" />
      
      <input name="Submit" type="button" class="ip-16" value="Login" src="images/submit_bt.gif" />
      
      <input name="Submit" type="button" class="" src="store/store-images/login-09-12a-login-up.png" />
       -->
      <input type="image" src="store/store-images/buttons/login-09-12a-login-down.png" alt="Submit Form" />
      
      
     <!-- <a href="" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image1','','store/store-images/login-09-12a-login-down.png',1)"><img src="store/store-images/login-09-12a-login-up.png" width="74" height="28" id="Image1" /></a> -->
      
      </td>
    </tr>
    <tr>
      <th valign="top" scope="row">&nbsp;</th>
      <td valign="top">&nbsp;</td>
    </tr>
    <tr>
      <th valign="top" scope="row">New Customers</th>
      <td valign="top"><a href="store/customers/ct-register-start.php">If you are a New Investor<br />Please Register Here.</a></td>
    </tr>
   <!-- <tr>
      <th scope="row"><br />
<br />
Admin</th>
      <td><br />
<br />
<a href="../admin/login-admin.php">Admin Login</a></td>
    </tr> -->
    
    
  </table>
</form>
    
    
    
    
    
    </td>
  </tr>











  <tr>
    <td align="center" bgcolor="#999999"  class="data2bs"><span class="data2Title">LATEST NEWS</span></td>
  </tr>
  <tr>
    <td  class="data2bs" bgcolor="#CCCCCC"><p>2013-09-02<br />
      Site graphics and layout now in progress.<br /><br />
    2013-08-20<br />
Logo design complete. As a result, color scheme established. Web layout commences iin earnest.<br />
<br />
2013-08-10<br />
Database back end of web site complete. Now able to track customer purchases, payment by credit card, paypal, e-check, and pay by mail operational. Merchant service contracts needed once site goes live.<br />
<br />
2013-08-01<br />
Search commences for prospetive nvestment businesses.<br />
<br />
2013-07-20<br />
Nothing much - jsut another news entry..<br />
<br />
2013-07-09<br />
American Equity Partners Limited graphics designer retained. First order of business - logo design.<br />
<br />
2013-06-15 <br />
        Web site development commences.<br />
        <br />
        2013-06-10<br />
        American Equity Partners Limited (Nevus) company established.<br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
    </p></td>
  </tr>
  <!--<tr>
    <td bgcolor="#d8f2cb"><br />
<br />
</td>
  </tr>
  <tr>
    <td bgcolor="#d8f2cb"><br />
</td>
  </tr>
  <tr>
    <td bgcolor="#d8f2cb">Demo Text 4<br />
<br />
</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">Demo Text 5<br />
<br />
</td>
  </tr> -->
 
  
</table>