<?php
//require_once('');
$user_id = $_REQUEST['user_id'];


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>
    <!--
    Created by Artisteer v2.2.0.17981
    Base template (without user's data) checked by http://validator.w3.org : "This page is valid XHTML 1.0 Transitional"
    -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <title>Tennis Sport </title>
    
       
	<link href="../../lib/calendar/calendar.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="../../lib/calendar/calendar.js"></script>

    <script type="text/javascript" src="../../js/script.js"></script>
	<script type="text/javascript" src="../../js/xhtmlReq.js"></script>
<script type="text/javascript" src="../../js/globals.js"></script>
	
    <link rel="stylesheet" href="../../css/style.css" type="text/css" media="screen" />
    <!--[if IE 6]><link rel="stylesheet" href="../../css/style.ie6.css" type="text/css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" href="../../css/style.ie7.css" type="text/css" media="screen" /><![endif]-->

<link rel="stylesheet" href="../../lib/formValidator/css/validationEngine.jquery.css" type="text/css" media="screen" title="no title" charset="utf-8" />
		
		<script src="../../lib/formValidator/js/jquery.js" type="text/javascript"></script> 
	
		<script src="../../lib/formValidator/js/jquery.validationEngine.js" type="text/javascript"></script>


</head>
<body>
<div id="art-main">
        <div class="art-Sheet">
            <div class="art-Sheet-tl"></div>
          <div class="art-Sheet-tr"></div>
          <div class="art-Sheet-bl"></div>
          <div class="art-Sheet-br"></div>
          <div class="art-Sheet-cl"></div>
            <div class="art-Sheet-cr"></div>
            <div class="art-Sheet-cc"></div>
            <div class="art-Sheet-body">
              <div class="art-Header">
                    <div class="art-Header-png"></div>
                <div class="art-Header-jpeg"></div>
        <a href="#" class=" active"><span class="l"></span><span class="r"></span></a> </div>
              <div class="art-nav">
               	<div class="l"></div>
               </div>
              
                  <div class="art-contentLayout" align="center">
                 
			<div id="navbalk">
				<div id="navpos1">
                <a href="../admin/index.php">
                <img src="../../images/home.png" alt=""><br>Main Menu</a>
                &nbsp;&nbsp;
                </div>
                <div id="navpos2">
                <img src="../../images/spacer.gif" style="height: 5px; width: 14px;" alt="">
                <a href="../admin/paymentMenu.php">
                <img src="../../images/folder64_leerlingen.png" style="height: 32px;" alt="Student">
                <br> 
                &gt;Payment</a>
                &nbsp;&nbsp;</div>
                <div id="navpos3">
                <img src="../../images/spacer.gif" style="height: 5px; width: 14px;" alt="">
                <a href="#"><img src="../../images/icon64_leerlingen_nw.png" style="height: 32px;" alt="">
                <br> &gt; New</a>
                &nbsp;&nbsp;</div>
                <div id="navpos4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:history.back()"><img src="../../images/nav_left.png" alt="Terug"></a>
                &nbsp;&nbsp;&nbsp;
                <a href="#"><img src="../../images/uitloggen.png" alt="Uitloggen"></a>
                <br>
                </div>
			</div>
                 
                     <div id="navtitel">
                       <div align="left">Please give your Payment information</div>
                    </div>
        		
                  
                  <br/>
                  <form name="form23" action="cconfirm.php" method="post">
                  
                  <div style="color:red;font-size:12px;font-family: Comic Sans MS, cursive;"><?php echo $data; ?></div>
                  
                  <div align="left">
                  <div id="title_1" align="center" style="width: 145px" >Payment Info</div>
                  </div>
                  
                  
                  <div class="content_body" align="left">
                 <input id="ue" type="hidden" name="user_id" value="<?php echo $user_id; ?>" />
                  <table  cellpadding="5" cellspacing="2">
        		 <tbody>
        		
          		<tr>
            	<td><div class="input_level">Country</div></td>
           	 	<td><select name="country" class="input_txt"><option value="NL">Netherlands</option></select></td>
            	
          		</tr>
          		<tr>
            	<td><div class="input_level">Language</div></td>
           	 	<td><select name="language"class="input_txt"><option value="NL">Dutch</option><option value="EN">English</option></select></td>
            	
          		</tr>
                <tr>
            	<td><div class="input_level">Currency</div></td>
           	 	<td><select name="currency"class="input_txt"><option value="EUR">EURO</option></select></td>
            	
          		</tr>
                
          		<tr>
            	<td><div class="input_level" >Amount (EURO)</div></td>
            	<td><input id="amount"  class="validate[required,custom[onlyEuro]] text-input input_txt "  size="30" name="amount" value=""/></td>
            	       		        
        		</tr>
                <tr>
            	<td><div class="input_level" >Payment Type</div></td>
            	<td><select name="payment_type" class="input_txt"><option value="IDEAL">IDEAL</option><option selected="selected" value="DDEBIT">DDEBIT</option></select> </td>
            	       		        
        		</tr>
                 <tr>
            	<td><div class="input_level" >IS USER</div></td>
            	<td><select class="input_txt" name='IC_Issuer'>
  <option value='ABNAMRO'>ABNAMRO
  <option value='FORTIS'>FORTIS
  <option value='POSTBANK'>POSTBANK
  <option value='RABOBANK'>RABOBANK
  <option value='SNSBANK'>SNSBANK
  <option value='PBAR'>PBAR
  <option value='PPC'>PPC
  <option selected="selected" value='INCASSO'>INCASSO
</select> </td>
            	       		        
        		</tr>
                <tr>
                <td>
                <div class="input_level">Description</div>
                </td>
                <td><textarea id="des" class="validate[length[0,100]] text-input input_txt " type="textarea" cols="50" rows="10"  name="description"></textarea> </td>
                <td>
                
                </td>
                <td></td>
                </tr>
        		</tbody>
        		</table>
        </div>
       
       
    
       
     
        <div class="content_body" align="left"></div>
     
        <br/>
        <div class="content_body" align="left">
        <input class="art-button" type="submit" name="Search" value="Confirm"/>
        <a  style="text-decoration:none" href="../admin/paymentMenu.php"><input class="art-button" type="button" name="Cancel" value="Cancel"/></a>
        
        </div>
        </form>
        <?php
	  require_once('../../template/footer.php');
	  ?>
