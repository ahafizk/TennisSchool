<?php
//require_once('../../lib/calendar/classes/tc_calendar.php');
//require_once('../../control/student/cmovestudent1.php');
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
    
     <!-- here code goes for calendar -->  
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
                <a href="../admin/holidayMenu.php">
                <img src="../../images/folder64_leerlingen.png" style="height: 32px;" alt="Student">
                <br> 
                &gt; Schedule</a>
                &nbsp;&nbsp;</div>
                <div id="navpos3">
                <img src="../../images/spacer.gif" style="height: 5px; width: 14px;" alt="">
                <a href="newstudent1.php"><img src="../../images/icon64_leerlingen_nw.png" style="height: 32px;" alt="">
                <br> 
                &gt; show Schedule</a>
                &nbsp;&nbsp;</div>
                <div id="navpos4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:history.back()"><img src="../../images/nav_left.png" alt="Terug"></a>
                &nbsp;&nbsp;&nbsp;
                <a href="#"><img src="../../images/uitloggen.png" alt="Uitloggen"></a>
                <br>
                </div>
			</div>
                 
                     <div id="navtitel">
                       <div align="left">Show Schedule</div>
                    </div>
        		
                 
                  <br/>
                   
                   <div align="left">
                  <div id="title_1" align="center" style="width: 150px" >Select one to Show</div>
                  </div>
               	                   
                  <br/>
                   <div align="left">
                   <form name="form2" action="show_schedule2.php" method="post">
                   <table cellpadding="5" cellspacing="2">
                   <tr><td><input type="radio" name="all" value="1" checked="checked" /></td><td class="input_level">All</td></tr>
                   <tr><td><input type="radio" name="all" value="2" /></td><td class="input_level">Day</td>
                   <td><select name="week_day" class="input_txt">
                   <option value="1">Monday</option>
                   <option value="2">Tuesday</option>
                   <option value="3">Wednesday</option>
                   <option value="4">Thusday</option>
                   <option value="5">Friday</option>
                   <option value="6">Satday</option>
                   <option value="7">Sunday</option>
                   </select></td>
                   </tr>
                   <tr><td></td><td></td></tr>
                   </table>
                   </div>
                 	<div align="left">
                   <input class="input_level" type="submit" name="show" value="Show" />
                   </form>
                   </div>
                    <?php
	  require_once('../../template/footer.php');
	  ?>
