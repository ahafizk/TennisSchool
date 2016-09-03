<?php
require_once('../../common/forwarding.php');
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

    <script type="text/javascript" src="../../js/script.js"></script>

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
        		<div id="navpos1"><a href="index.php"><img src="../../images/home.png" alt="Main Menu"><br>Main Menu&nbsp;&nbsp;&gt;</a></div><div id="navpos2"><img src="../../images/spacer.gif" alt="" width="14" height="5"><img src="../../images/folder64_leerlingen.png" alt="Leerlingen" height="32"><br>&nbsp;&nbsp;&nbsp;Students</div><div id="navpos4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:history.back();"><img src="../../images/nav_left.png" alt="Back"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="../../images/uitloggen.png" alt="Logout" onclick="window.open('../../common/logout.php', '_self')"><br><div class="lockleerlingWrap">Logged in: <?Php  echo $_SESSION['USER']; ?></div></div>
    </div>
                 
                 
                  
                 
                 
 <table width="100%" cellpadding="5" cellspacing="2">
        <tbody>
        <tr>
        <td width="50">&nbsp;</td>
        <td valign="top" width="100" height="100" align="center"><a href="../student/newstudent1.php" onclick="setMenu(101, 0)" target="_self"><img name="afb1_1_100_P_101" src="../../images/icon64_leerlingen_nw.png" onmouseover="Big(this)" onmouseout="Small(this)" alt="Nieuwe leerling toevoegen" height="64" border="0"></a><br><strong style="" id="tit1_1_100_P_101">New</strong></td>
        <td width="10px">&nbsp;</td>
        <td valign="top" width="100" height="100" align="center"><a href="../student/searchstudent.php?s=c" onclick="setMenu(102, 0)" target="_self"><img name="afb1_2_100_P_102" src="../../images/icon64_leerlingen_wijz.png" onmouseover="Big(this)" onmouseout="Small(this)" alt="Leerling wijzigen" height="64" border="0"></a><br><strong style="" id="tit1_2_100_P_102">Change</strong></td>
        <td width="10px">&nbsp;</td>
        <td valign="top" width="100" height="100" align="center"><a href="../student/searchstudent.php?s=r" onclick="setMenu(103, 0)" target="_self"><img name="afb1_3_100_P_103" src="../../images/icon64_leerlingen_verw.png" onmouseover="Big(this)" onmouseout="Small(this)" alt="Leerling verwijderen" height="64" border="0"></a><br><strong id="tit1_3_100_P_103">Remove</strong></td>
        <td width="10px">&nbsp;</td>
        <!--<td valign="top" width="100" height="100" align="center"><a href="../student/searchstudent.php?s=m" onclick="setMenu(104, 0)" target="_self"><img name="afb1_4_100_P_104" src="../../images/icon64_leerlingen_verpl.png" onmouseover="Big(this)" onmouseout="Small(this)" alt="Leerling verplaatsen" height="64" border="0"></a><br><strong style="" id="tit1_4_100_P_104">Move</strong></td>-->
        <!--<td width="10px">&nbsp;</td>-->
        <td valign="top" width="100" height="100" align="center"><a href="../student/waitinglist.php?s=w" onclick="setMenu(105, 0)" target="_self"><img name="afb1_5_100_P_105" src="../../images/icon64_leerlingen_wlpl.png" onmouseover="Big(this)" onmouseout="Small(this)" alt="Wachtlijst plaatsen" height="64" border="0"></a><br><strong  id="tit1_5_100_P_105">Waiting list</strong></td>
        <td width="10px">&nbsp;</td>
        <!--<td valign="top" width="100" height="100" align="center"><a href="#" onclick="setMenu(106, 0)" target="_self"><img name="afb1_6_100_P_106" src="../../images/icon64_leerlingen_wlverw.png" onmouseover="Big(this)" onmouseout="Small(this)" alt="Wachtlijst verwijderen" height="64" border="0"></a><br><strong id="tit1_6_100_P_106">Waiting list removal</strong></td>-->
        <td width="10px">&nbsp;</td>
        <!--<td valign="top" width="100" height="100" align="center"><a href="#" onclick="setMenu(107, 0)" target="_self"><img name="afb1_7_100_P_107" src="../../images/icon64_leerlingen_wlverpl.png" onmouseover="Big(this)" onmouseout="Small(this)" alt="Wachtlijst verplaatsen" height="64" border="0"></a><br><strong id="tit1_7_100_P_107">Waiting list move</strong></td>-->
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
        <td valign="top" width="100" height="100" align="center"><a href="../student/search.php" onclick="setMenu(108, 0)" target="_self"><img name="afb2_1_100_P_108" src="../../images/icon64_leerlingen_zoek.png" onmouseover="Big(this)" onmouseout="Small(this)" alt="Leerling zoeken" height="64" border="0" /></a><br><strong id="tit2_1_100_P_108">Search</strong></td>
        <td width="10px">&nbsp;</td>
        <td valign="top" width="100" height="100" align="center"><a href="../student/list.php" onclick="setMenu(109, 0)" target="_self"><img name="afb2_2_100_P_109" src="../../images/icon64_leerlingen_lijst.png" onmouseover="Big(this)" onmouseout="Small(this)" alt="Lijst" height="64" border="0"></a><br><strong style="" id="tit2_2_100_P_109">List</strong></td>
        <td width="10px">&nbsp;</td>
        
<!--        <td valign="top" width="100" height="100" align="center"><a href="#" onclick="setMenu(111, 0)" target="_self"><img name="afb2_4_100_P_111" src="../../_images/icon64_leerlingen_info.png" onmouseover="Big(this)" onmouseout="Small(this)" alt="" height="64" border="0" /></a><br><strong style="" id="tit2_4_100_P_111">&nbsp;</strong></td>
        <td width="10px">&nbsp;</td>
        <td valign="top" width="100" height="100" align="center"><a href="#" onclick="setMenu(112, 0)" target="_self"><img name="afb2_5_100_P_112" src="../../_images/icon64_leerlingen_pasfoto.png" onmouseover="Big(this)" onmouseout="Small(this)"  height="64" border="0"></a><br><strong style="" id="tit2_5_100_P_112">&nbsp;</strong></td>
        <td width="10px">&nbsp;</td>-->
        <td>&nbsp;</td>
        <td width="10px">&nbsp;</td>
        <td>&nbsp;</td>
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
        </tbody></table>
   <?php
   require_once('../../template/footer.php');
   ?>