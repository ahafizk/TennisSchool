<?php
require_once('../../control/settings/csendan1.php');
require_once('../../lib/calendar/classes/tc_calendar.php');
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
    <script src="clienthint.js"></script>
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
                <a href="../admin/settingMenu.php">
                <img src="../../images/authorize/folder64_autorisatie.png" alt="Autorisatie" height="32"><br> 
                &gt;Settings</a>
              &nbsp;&nbsp;</div>
                <div id="navpos3">
                <img src="../../images/spacer.gif" style="height: 5px; width: 14px;" alt="">
                <a href="#"><img src="../../images/icon64_leerlingen_nw.png" style="height: 32px;" alt=""><br> 
                &gt; Announcement</a>
                &nbsp;&nbsp;</div>
                <div id="navpos4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:history.back()"><img src="../../images/nav_left.png" alt="Terug"></a>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <img src="../../images/uitloggen.png" alt="Uitloggen" onclick="window.open('../../common/logout.php', '_self')"><br><div class="lockleerlingWrap">Logged in: <?Php  echo $_SESSION['USER']; ?></div>
                </div>
			</div>
                 
                     <div id="navtitel">
                       <div align="left">Send Announcement</div>
                    </div>
        		
                  
                  <br/>
                  <form name="form1" action="processsend.php" method="post">
                  
                   <div align="left">
                  <div id="title_1" align="center" style="width: 150px" >Send Announcement</div>
                  </div>
                  <div class="content_body" align="left">
                  
                  <table  cellpadding="5" cellspacing="2">
                 <?php
				 
                 $str = "<tr>
            	<td><div class=\"input_level\">To:</div></td>
           	 	<td><input type=\"text\" class=\"input_txt\" size=\"30\" name=\"email\" value=\"\" /></td>
                
                </tr>";
				if($type==1)
				echo $str;
				?>
                  <tr>
            	<td><div class="input_level">Subject:</div></td>
           	 	<td><input type="text" class="input_txt" size="30" name="subject" value="<?php echo $record['subject'][0]; ?>" /></td>
                
                </tr>
                <tr>
                <td class="input_level">Date:</td>
                <td><?php
				
	  $myCalendar = new tc_calendar("date1", true);
	   $myCalendar->setIcon("../../lib/calendar/images/iconCalendar.gif");
	   $date = date_parse($record['date'][0]);
	  $myCalendar->setDate($date['day'],$date['month'], $date['year']);
	  $myCalendar->setPath("../../lib/calendar");
	  $myCalendar->setYearInterval(1960, (date('Y')+10));
	  //$myCalendar->dateAllow('2008-05-13', '2010-03-01');
	  //$myCalendar->setHeight(350);	  
	  //$myCalendar->autoSubmit(true, "form1");
	  $myCalendar->writeScript();
	  ?></td></tr>
                <tr>
                <td class="input_level">Announcement:</td>
                <td><textarea class="input_txt" name="body" cols="100" rows="20"><?php echo $record['body'][0]; ?></textarea></td>
                </tr>
                 <tr>
                 <td class="input_level">Signature:</td>
                 <td><input type="text" name="signature" class="input_txt" size="30" value="<?php echo $record['signature'][0]; ?>" /></td>
                 </tr>
              
                  </table>
                  </div>
                  
    
   
       
       
        <br/>
        <div class="content_body" align="left">
        <input class="art-button" type="submit" name="send" value="Send"/>
        
        <a href="../admin/authorizeMenu.php"><input class="art-button" type="button" name="Cancel" value="Cancel"/></a>
        </div>
        <div class="content_body" align="left">
        
        </div>
        </form>
        <?php
	  require_once('../../template/footer.php');
	  ?>
