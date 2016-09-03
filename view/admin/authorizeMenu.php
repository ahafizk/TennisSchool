<?php session_start(); 
require_once('../../common/forwarding.php');
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
        <div id="navpos1"><a href="index.php"><img src="../../images/authorize/home.png" alt="Main Menu"><br>Main Menu&nbsp;&nbsp;&gt;</a></div><div id="navpos2"><img src="../../images/authorize/spacer.gif" alt="" width="14px" height="5px"><img src="../../images/authorize/folder64_autorisatie.png" alt="Autorisatie" height="32"><br>&nbsp;&nbsp;&nbsp;Authorization</div><div id="navpos4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:history.back();"><img src="../../images/authorize/nav_left.png" alt="Back"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="../../images/authorize/uitloggen.png" alt="Logout" onclick="window.open('../../common/logout.php', '_self')"><br><div class="lockleerlingWrap">Logged in: <?Php  echo $_SESSION['USER']; ?></div></div>
    </div>
                 
                 
        		
                 
                  
                  
      <table width="100%" cellpadding="5" cellspacing="2">
        <tbody>
        <tr>
        <td width="50">&nbsp;</td>
        <td valign="top" width="100" height="100" align="center"><a href="../authorization/profile.php" onclick="setMenu(204, 0)" target="_self"><img src="../../images/authorize/icon64_autorisatie_prfl_adm.png" alt="Profile Administration" name="afb2_1_200_P_204" height="64" border="0" id="afb2_1_200_P_204" onmouseover="Big(this)" onmouseout="Small(this)" /></a><br />
          <strong style="" id="tit2_1_200_P_204">Profile Administration</strong></td>
        <td width="10px">&nbsp;</td>
        <td valign="top" width="100" height="100" align="center"><a href="../authorization/changeuser.php" onclick="setMenu(202, 0)" target="_self"><img name="afb1_2_200_P_202" src="../../images/authorize/icon64_autorisatie_wijz.png" onmouseover="Big(this)" onmouseout="Small(this)" alt="User change" height="64" border="0"></a><br><strong style="" id="tit1_2_200_P_202">User change</strong></td>
        <td width="10px">&nbsp;</td>
        <!--<td valign="top" width="100" height="100" align="center"><a href="../authorization/removeuser.php" onclick="setMenu(203, 0)" target="_self"><img name="afb1_3_200_P_203" src="../../images/authorize/icon64_autorisatie_verw.png" onmouseover="Big(this)" onmouseout="Small(this)" alt="Remove User" height="64" border="0"></a><br><strong style="" id="tit1_3_200_P_203">Remove User</strong></td>-->
        <td width="10px">&nbsp;</td>
        <td width="100" height="100">&nbsp;</td>
        <td width="10px">&nbsp;</td>
        <td valign="top" width="100" height="100" align="center"><br></td>
        <td width="10px">&nbsp;</td>
        <td valign="top" width="100" height="100" align="center"><br></td>
        <td width="10px">&nbsp;</td>
        <td valign="top" width="100" height="100" align="center"><br></td>
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
        <td valign="top" width="100" height="100" align="center"><br></td>
        <td width="10px">&nbsp;</td>
        <td valign="top" width="100" height="100" align="center"><br></td>
        <td width="10px">&nbsp;</td>
        <td width="100" height="100">&nbsp;</td>
        <td width="10px">&nbsp;</td>
        <td width="100" height="100">&nbsp;</td>
        <td width="10px">&nbsp;</td>
        <td width="100" height="100">&nbsp;</td>
        <td width="10px">&nbsp;</td>
        <td valign="top" width="100" height="100" align="center"><br></td>
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
