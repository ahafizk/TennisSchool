<?php
require_once('../../control/payment/csearch.php');
session_start();
if($_SESSION['auths']!=1)
{
	forward('../../teacher/index.php');
}
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
                &gt; Payment</a>
                &nbsp;&nbsp;</div>
                <div id="navpos3">
                <img src="../../images/spacer.gif" style="height: 5px; width: 14px;" alt="">
                <a href="#"><img src="../../images/icon64_leerlingen_nw.png" style="height: 32px;" alt="">
                <br> &gt; New</a>
                &nbsp;&nbsp;</div>
                <div id="navpos4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:history.back()"><img src="../../images/nav_left.png" alt="Terug"></a>
                &nbsp;&nbsp;&nbsp;
                <img src="../../images/uitloggen.png" alt="Uitloggen" onclick="window.open('../../common/logout.php', '_self')"><br><div class="lockleerlingWrap">Logged in: <?Php  echo $_SESSION['USER']; ?></div>
                </div>
			</div>
                 
                     <div id="navtitel">
                       <div align="left">Student Information</div>
                    </div>
        		
                 
                  <br/>
                  
                  <div style="color:red;font-size:12px;font-family: Comic Sans MS, cursive;"><?php echo $data; ?></div>
                  <div align="left">
                  <div id="title_1" align="center" style="width: 110px" >User Info</div>
                  </div>
                  
                  <br />
                  <div class="content_body" align="left">
                   <table cellpadding="8" cellspacing="2">
                   <tr>
                   <td class="table_td">Initial:</td><td class="input_txt"><?php  echo $user['initial'][0];?></td>
                   <td class="table_td">Call Name:</td><td class="input_txt"><?php  echo $user['call_name'][0];?></td>
                   <td class="table_td">Middle Name:</td><td class="input_txt"><?php  echo $user['middle_name'][0];?></td>
                   <td class="table_td">Last Name:</td><td class="input_txt"><?php  echo $user['last_name'][0];?></td>
                   </tr>
                   <tr>
                   <td class="table_td">Gender:</td><td class="input_txt"><?php  echo getGender($user['gender'][0]);?></td>
                   <td class="table_td">Birth Date:</td><td class="input_txt"><?php  echo ($user['date_of_birth'][0]);?></td>
                   <td class="table_td">Middle Name:</td><td class="input_txt"><?php  echo getActive($user['active'][0]);?></td>
                   <td class="table_td">Other Details:</td><td class="input_txt"><?php  echo $user['other_detail'][0];?></td>
                   </tr>
                   </table>
                                  
                  </div>
                
                
                  
       			<div align="left">
                  <div id="title_1" align="center" style="width: 110px" >Address </div>
                  </div>
    				</br>
                    <br />
                    <div class="content_body" align="left">
       				<table cellpadding="8" cellspacing="2">
                   <tr>
                   <td class="table_td">Street:</td><td class="input_txt"><?php  echo $user['street'][0];?></td>
                   <td class="table_td">House Number:</td><td class="input_txt"><?php  echo $user['house_number'][0];?></td>
                   <td class="table_td">Location:</td><td class="input_txt"><?php  echo $user['home_plate'][0];?></td>
                   <td class="table_td">Post Code:</td><td class="input_txt"><?php  echo $user['post_code'][0];?></td>
                   </tr>
                   <tr>
                   <td class="table_td">Telephone:</td><td class="input_txt"><?php  echo ($user['telefoon_vast'][0]);?></td>
                   <td class="table_td">Mobile:</td><td class="input_txt"><?php  echo ($user['telefoon_mobiel'][0]);?></td>
                   <td class="table_td">Email:</td><td class="input_txt"><?php  echo ($user['email'][0]);?></td>
                   <td class="table_td">Fax:</td><td class="input_txt"><?php  echo $user['fax'][0];?></td>
                   </tr>
                   </table>
                    </div>
     
     
     			
                  <div align="left">
                  <div id="title_1" align="center" style="width: 110px" >Tennis Info.</div>
                  </div>	
       <br/>
       				<div class="content_body" align="left">
       				<table cellpadding="8" cellspacing="2">
                   <tr>
                   <td class="table_td">Member of association:</td><td class="input_txt"><?php  echo ($user['id_association'][0]);?></td>
                   <td class="table_td">Tennis-bond number:</td><td class="input_txt"><?php  echo $user[tb_bonds_nummer][0];?></td>
                   
                   </tr>
                   <tr>
                   <td class="table_td">Single Skill:</td><td class="input_txt"><?php  echo getSingleSkill($user['skill_single'][0]);?></td>
                   <td class="table_td">Double Skill:</td><td class="input_txt"><?php  echo getSingleSkill($user['skill_double'][0]);?></td>
                  
                   </tr>
                   </table>
                   
                    </div>
                    
                    
                  <div align="left">
                  <div id="title_1" align="center" style="width: 110px" >Payment</div>
                  </div>	
       <br/>
       				<div class="content_body" align="left">
                    <form name="ane1" action="payment.php" method="post">
                    <input type="hidden" name="user_id" value="<?php echo $user['id'][0]; ?>"/>
                    <table cellpadding="2" cellspacing="5">
<!--                    <tr><td class="input_level">Do you Want to pay? If yes! Please click the Paynent button.</td></tr>
                    
                    <tr><td><input class="art-button" type="submit" name="payment" value="Payment" /></form><a href="../admin/paymentMenu.php"><input class="art-button" type="button" name="Cancel" value="Cancel"/></a></td></tr>-->
                    </table>
                    </div>
       
        <?php
	  require_once('../../template/footer.php');
	  ?>
