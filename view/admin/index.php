<?php
require_once('../../common/forwarding.php');
session_start();
if($_SESSION['auths']!=1)
{
	forward('/sport/view/teachers/index.php');
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

    <script type="text/javascript" src="../../js/script.js"></script>
	<script type="text/javascript" src="../../js/xhtmlReq.js"></script>
<script type="text/javascript" src="../../js/globals.js"></script>
	
    <link rel="stylesheet" href="../../css/style.css" type="text/css" media="screen" />
    <!--[if IE 6]><link rel="stylesheet" href="../../css/style.ie6.css" type="text/css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" href="../../css/style.ie7.css" type="text/css" media="screen" /><![endif]-->
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
                  <div id="navpos1"><img src="../../images/home.png" alt="Main Menu"><br>Main Menu</div>
                  <div id="navpos4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:history.back();"><img src="../../images/nav_left.png" alt="Terug"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="../../images/uitloggen.png" alt="Uitloggen" onclick="window.open('../../common/logout.php', '_self')"><br><div class="lockleerlingWrap">Logged in: <?Php  echo $_SESSION['USER']; ?></div></div>
                 
                 
        		 </div>
                 
                 
        		
                 
                  
                  
        <table width="100%" cellpadding="5" cellspacing="2">
        <tbody>
        <tr>
        <td width="50">&nbsp;</td>
        <td valign="top" width="100" align="center" height="100"><a href="studentMenu.php" onclick="setMenu(100, 0)" target="_self"><img src="../../images/folder64_leerlingen.png" alt="Folder Leerlingen" name="afb2_2_100_M_100" height="64" border="0" id="afb2_2_100_M_100" onmouseover="Big(this)" onmouseout="Small(this)" /></a><br />
          <strong id="tit2_2_100_M_100">Students</strong><br></td>
        <td width="10">&nbsp;</td>
        <td valign="top" width="100" align="center" height="100"><a href="levelMenu.php" onclick="setMenu(400, 0)" target="_self"><img src="../../images/folder64_niveau.png" alt="Folder Niveau" name="afb1_3_400_M_400" height="64" border="0" id="afb1_3_400_M_400" onmouseover="Big(this)" onmouseout="Small(this)" /></a><br />
          <strong>Level</strong><br></td>
        <td width="10">&nbsp;</td>
        <td valign="top" width="100" align="center" height="100"><a href="authorizeMenu.php" onclick="setMenu(200, 0)" target="_self"><img src="../../images/folder64_autorisatie.png" alt="Folder Autorisatie" name="afb1_4_200_M_200" height="64" border="0" id="afb1_4_200_M_200" onmouseover="Big(this)" onmouseout="Small(this)" /></a><br />
          <strong style="" id="tit1_4_200_M_200">Authorization</strong></td>
        <td width="10">&nbsp;</td>
        <td valign="top" width="100" align="center" height="100"><a href="settingMenu.php" onclick="setMenu(600, 0)" target="_self"><img src="../../images/folder64_instellingen.png" alt="Folder Instellingen" name="afb1_5_600_M_600" height="64" border="0" id="afb1_5_600_M_600" onmouseover="Big(this)" onmouseout="Small(this)" /></a><br />
          <strong style="" id="tit1_5_600_M_600">Settings</strong></td>
        <td width="10">&nbsp;</td>
        <td valign="top" width="100" align="center" height="100"><a href="holidayMenu.php" onclick="setMenu(900, 0)" target="_self"><img src="../../images/module64_rooster.png" alt="Module Vakantierooster" name="afb1_6_900_M_900" height="64" border="0" id="afb1_6_900_M_900" onmouseover="Big(this)" onmouseout="Small(this)" /></a><br />
          <strong id="tit1_6_900_M_900">schedule</strong></td>
        <td width="10">&nbsp;</td>
        <td valign="top" width="100" align="center" height="100">&nbsp;</td>
        <td width="10">&nbsp;</td>
        <td valign="top" width="100" align="center" height="100">&nbsp;</td>
        <td width="10">&nbsp;</td>
        <td width="100" height="100">&nbsp;</td>
        <td width="10">&nbsp;</td>
        <td width="100" height="100">&nbsp;</td>
        <td width="10">&nbsp;</td>
        <td width="100" height="100">&nbsp;</td>
        <td width="25">&nbsp;</td>
        </tr>
        <tr>
        <td width="50">&nbsp;</td>
        <td valign="top" width="100" align="center" height="100"><a href="../emails/newemail.php" onclick="setMenu(800, 0)" target="_self"><img src="../../images/folder64_brievenemail.png" alt="Folder Brieven/E-mail" name="afb2_5_800_M_800" height="64" border="0" id="afb2_5_800_M_800" onmouseover="Big(this)" onmouseout="Small(this)" /></a><strong style="" id="tit2_5_800_M_800"><br />
E-mail</strong></td>
        <td width="10">&nbsp;</td>
        <td valign="top" width="100" align="center" height="100"><a href="financialMenu.php" onclick="setMenu(1000, 0)" target="_self"><img src="../../images/module64_finan.png" alt="Module Financieel" name="afb1_7_1000_M_1000" height="64" border="0" id="afb1_7_1000_M_1000" onmouseover="Big(this)" onmouseout="Small(this)" /></a><br />
          <strong style="" id="tit1_7_1000_M_1000">Financial</strong></td>
        <td width="10">&nbsp;</td>
       
        <td valign="top" width="100" align="center" height="100"><a href="paymentMenu.php" onclick="setMenu(1100, 0)" target="_self"><img src="../../images/module64_betalingen.png" alt="Module Betalingen" name="afb2_7_1100_M_1100" height="64" border="0" id="afb2_7_1100_M_1100" onmouseover="Big(this)" onmouseout="Small(this)" /></a><br />
          <strong id="tit2_7_1100_M_1100">Payments</strong></td>
        <td width="10">&nbsp;</td>
        <td valign="top" width="100" align="center" height="100">&nbsp;</td>
        <td width="10">&nbsp;</td>
        <td width="100" height="100">&nbsp;</td>
        <td width="10">&nbsp;</td>
        <td valign="top" width="100" align="center" height="100">&nbsp;</td>
        <td width="10">&nbsp;</td>
        <td width="100" height="100">&nbsp;</td>
        <td width="10">&nbsp;</td>
        <td width="100" height="100">&nbsp;</td>
        <td width="10">&nbsp;</td>
        <td width="100" height="100">&nbsp;</td>
        <td width="25">&nbsp;</td>
        </tr>
        <tr>
        <td width="50">&nbsp;</td>
        <td valign="top" width="100" align="center" height="100">&nbsp;</td>
        <td width="10">&nbsp;</td>
        <td valign="top" width="100" align="center" height="100">&nbsp;</td>
        <td width="10">&nbsp;</td>
        <td valign="top" width="100" align="center" height="100"><br></td><td width="10">&nbsp;</td><td width="100" height="100">&nbsp;</td>
        <td width="10">&nbsp;</td>
        <td width="100" height="100">&nbsp;</td>
        <td width="10">&nbsp;</td>
        <td width="100" height="100">&nbsp;</td>
        <td width="10">&nbsp;</td>
        <td width="100" height="100">&nbsp;</td>
        <td width="10">&nbsp;</td>
        <td width="100" height="100">&nbsp;</td>
        <td width="10">&nbsp;</td>
        <td width="100" height="100">&nbsp;</td>
        <td width="10">&nbsp;</td>
        <td width="100" height="100">&nbsp;</td>
        <td width="25">&nbsp;</td>
        </tr>
        <tr>
        <td width="50">&nbsp;</td>
        <td width="100" height="100">&nbsp;</td>
        <td width="10">&nbsp;</td>
        <td width="100" height="100">&nbsp;</td>
        <td width="10">&nbsp;</td><td width="100" height="100">&nbsp;</td>
        <td width="10">&nbsp;</td>
        <td width="100" height="100">&nbsp;</td>
        <td width="10">&nbsp;</td>
        <td width="100" height="100">&nbsp;</td>
        <td width="10">&nbsp;</td>
        <td width="100" height="100">&nbsp;</td>
        <td width="10">&nbsp;</td>
        <td width="100" height="100">&nbsp;</td>
        <td width="10">&nbsp;</td>
        <td width="100" height="100">&nbsp;</td>
        <td width="10">&nbsp;</td>
        <td width="100" height="100">&nbsp;</td>
        <td width="10">&nbsp;</td>
        <td width="100" height="100">&nbsp;</td>
        <td width="25">&nbsp;</td>
        </tr>
        </tbody>
        </table>
      <?php
	  require_once('../../template/footer.php');
	  ?>
