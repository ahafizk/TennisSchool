<?php
session_start();
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
        <div id="navpos1"><a href="index.php"><img src="../../images/financial/home.png" alt="Main Menu"><br>Main Menu&nbsp;&nbsp;&gt;</a></div><div id="navpos2"><img src="../../images/financial/spacer.gif" alt="" width="14px" height="5px"><img src="../../images/financial/module64_finan.png" alt="Financieel" height="32"><br>&nbsp;&nbsp;&nbsp;Financial</div><div id="navpos4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:history.back();"><img src="../../images/financial/nav_left.png" alt="Terug"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="../../images/financial/uitloggen.png" alt="Uitloggen" onclick="window.open('../../common/logout.php', '_self')"><br><div class="lockleerlingWrap">Logged in: <?Php  echo $_SESSION['USER']; ?></div></div>
    </div>
                 
                 
        		
                 
                  
                  
      <table width="100%" cellpadding="5" cellspacing="2">
        <tbody>
        <tr>
        <td width="50">&nbsp;</td>
        <td valign="top" width="100" height="100" align="center"><a href="../financial/updatepayment.php" onclick="setMenu(1001, 0)" target="_self"><img name="afb1_1_1000_P_1001" src="../../images/financial/icon64_finan_inst.png" onmouseover="Big(this)" onmouseout="Small(this)" alt="Instellingen" height="64" border="0"></a><br>
          <span onmouseover="_tipon(this)" onmouseout="_tipoff()"><strong id="tit1_1_1000_P_1001">Update Payments</strong></span></td>
        <td width="10px">&nbsp;</td>
        <td valign="top" width="100" height="100" align="center"><a href="../financial/financiallist.php" onclick="setMenu(1003, 0)" target="_self"><img src="../../images/financial/icon64_finan_andersbet.png" alt="Anders betalen" name="afb1_3_1000_P_1003" height="64" border="0" id="afb1_3_1000_P_1003" onmouseover="Big(this)" onmouseout="Small(this)" /></a><br />
          <strong>Paid List</strong></td>
        <td width="10px">&nbsp;</td>
        <td valign="top" width="100" height="100" align="center"><a href="../financial/unpaidlist.php" onclick="setMenu(1008, 0)" target="_self"><img src="../../images/financial/icon64_finan_ovznietbet.png" alt="Overzicht niet betaald" name="afb2_1_1000_P_1008" height="64" border="0" id="afb2_1_1000_P_1008" onmouseover="Big(this)" onmouseout="Small(this)" /></a><br />
          <span onmouseover="_tipon(this)" onmouseout="_tipoff()"><strong id="tit2_1_1000_P_1008">Overview unpaid</strong></span></td>
        <td width="10px">&nbsp;</td>
        <td valign="top" width="100" height="100" align="center"><a href="../financial/summary.php" onclick="setMenu(1006, 0)" target="_self"><img src="../../images/financial/icon64_finan_ovzfin.png" alt="Overzicht financieel" name="afb1_6_1000_P_1006" height="64" border="0" id="afb1_6_1000_P_1006" onmouseover="Big(this)" onmouseout="Small(this)" /></a><br />
          <span onmouseover="_tipon(this)" onmouseout="_tipoff()"><strong id="tit1_6_1000_P_1006">Financial Summary</strong></span></td>
        <td width="10px">&nbsp;</td>
        <!--<td valign="top" width="100" height="100" align="center"><a href="../financial/paymentreport.php" onclick="setMenu(1007, 0)" target="_self"><img src="../../images/financial/icon64_finan_ovzandersbet.png" alt="Overzicht anders betalen" name="afb1_7_1000_P_1007" height="64" border="0" id="afb1_7_1000_P_1007" onmouseover="Big(this)" onmouseout="Small(this)" /></a><br />-->
          <!--<strong>Payment Report</strong></td>-->
        <td width="10px">&nbsp;</td>
        <td valign="top" width="100" height="100" align="center">&nbsp;</td>
        <td width="10px">&nbsp;</td>
        <td valign="top" width="100" height="100" align="center">&nbsp;</td>
        <td width="10px">&nbsp;</td>
        <td width="100" height="100">&nbsp;</td>
        <td width="10px">&nbsp;</td>
        <td width="100" height="100">&nbsp;</td>
        <td width="10px">&nbsp;</td>
        <td width="100" height="100">&nbsp;</td>
        <td width="25px">&nbsp;</td>
        </tr>
        <tr>
        <td width="50">&nbsp;</td>
        <td valign="top" width="100" height="100" align="center">&nbsp;</td>
        <td width="10px">&nbsp;</td>
        <td valign="top" width="100" height="100" align="center">&nbsp;</td>
        <td width="10px">&nbsp;</td>
        <td valign="top" width="100" height="100" align="center">&nbsp;</td>
        <td width="10px">&nbsp;</td>
        <td valign="top" width="100" height="100" align="center">&nbsp;</td>
        <td width="10px">&nbsp;</td>
        <td valign="top" width="100" height="100" align="center">&nbsp;</td>
        <td width="10px">&nbsp;</td>
        <td valign="top" width="100" height="100" align="center">&nbsp;</td>
        <td width="10px">&nbsp;</td>
        <td valign="top" width="100" height="100" align="center">&nbsp;</td>
        <td width="10px">&nbsp;</td>
        <td width="100" height="100">&nbsp;</td>
        <td width="10px">&nbsp;</td>
        <td width="100" height="100">&nbsp;</td>
        <td width="10px">&nbsp;</td>
        <td width="100" height="100">&nbsp;</td>
        <td width="25px">&nbsp;</td>
        </tr>
        <tr>
        <td width="50">&nbsp;</td>
        <td valign="top" width="100" height="100" align="center">&nbsp;</td>
        <td width="10px">&nbsp;</td>
        <td valign="top" width="100" height="100" align="center">&nbsp;</td>
        <td width="10px">&nbsp;</td>
        <td valign="top" width="100" height="100" align="center">&nbsp;</td>
        <td width="10px">&nbsp;</td>
        <td valign="top" width="100" height="100" align="center">&nbsp;</td>
        <td width="10px">&nbsp;</td>
        <td valign="top" width="100" height="100" align="center">&nbsp;</td>
        <td width="10px">&nbsp;</td>
        <td valign="top" width="100" height="100" align="center">&nbsp;</td>
        <td width="10px">&nbsp;</td>
        <td valign="top" width="100" height="100" align="center">&nbsp;</td>
        <td width="10px">&nbsp;</td>
        <td width="100" height="100">&nbsp;</td>
        <td width="10px">&nbsp;</td>
        <td width="100" height="100">&nbsp;</td>
        <td width="10px">&nbsp;</td>
        <td width="100" height="100">&nbsp;</td>
        <td width="25px">&nbsp;</td>
        </tr>
        <tr>
        <td width="50">&nbsp;</td>
        <td width="100" height="100">&nbsp;</td>
        <td width="10px">&nbsp;</td>
        <td width="100" height="100">&nbsp;</td>
        <td width="10px">&nbsp;</td>
        <td width="100" height="100">&nbsp;</td>
        <td width="10px">&nbsp;</td>
        <td width="100" height="100">&nbsp;</td>
        <td width="10px">&nbsp;</td>
        <td width="100" height="100">&nbsp;</td>
        <td width="10px">&nbsp;</td>
        <td width="100" height="100">&nbsp;</td>
        <td width="10px">&nbsp;</td>
        <td width="100" height="100">&nbsp;</td>
        <td width="10px">&nbsp;</td>
        <td width="100" height="100">&nbsp;</td>
        <td width="10px">&nbsp;</td>
        <td width="100" height="100">&nbsp;</td>
        <td width="10px">&nbsp;</td>
        <td width="100" height="100">&nbsp;</td>
        <td width="25px">&nbsp;</td>
        </tr>
        </tbody>
        </table>
      <?php
	  require_once('../../template/footer.php');
	  ?>
