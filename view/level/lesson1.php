<?php
require_once('../../common/common.php');
require_once('../../control/level/clesson1.php');
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
                <a href="../admin/levelMenu.php">
                <img src="../../images/folder64_leerlingen.png" style="height: 32px;" alt="Student"><br> 
                &gt;Level</a>
              &nbsp;&nbsp;</div>
                <div id="navpos3">
                <img src="../../images/spacer.gif" style="height: 5px; width: 14px;" alt="">
                <a href="#"><img src="../../images/icon64_leerlingen_nw.png" style="height: 32px;" alt="">
                <br> 
                &gt;New Lesson </a>&nbsp;</div>
                <div id="navpos4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:history.back()"><img src="../../images/nav_left.png" alt="Terug"></a>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <img src="../../images/uitloggen.png" alt="Uitloggen" onclick="window.open('../../common/logout.php', '_self')"><br><div class="lockleerlingWrap">Logged in: <?Php  echo $_SESSION['USER']; ?></div>
                </div>
			</div>
                 
                     <div id="navtitel">
                       <div align="left">Lesson</div>
                    </div>

        		
                 
                  <br/>
                                      
                  <div align="left">
                  <div id="title_1" align="center" style="width: 160px" >Create Lesson</div>
                  </div>
                  <br/>
				  <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                   <div class="content_body" align="left">
                   
                    
                       <table border="0" cellspacing="2" cellpadding="5">
  
  <tr>
    <td class="input_level">Type*</td>
    <td ><label>
      <input type="text" class="validate[required,length[0,50]] text-input input_txt" size="30" name="lesson_type" id="textfield" value="<?php echo $_SESSION['lesson_type'];?>" />
    </label></td>
  </tr>
  <tr>
    <td class="input_level">Name*</td>
    <td class="input_level"><label>
      <input type="text" name="lesson_name" class="validate[required,length[0,50]] text-input input_txt" size="30" id="textfield2" value="<?php echo $_SESSION['lesson_name']; ?>" />
    </label></td>
  </tr>
  <tr>
    <td class="input_level">Description</td>
    <td><label>
      <textarea name="description" class="input_txt" id="textarea" cols="45" rows="7"><?php echo $_SESSION['description']; ?></textarea>
    </label></td>
  </tr>
  <tr>
    <td class="input_level">Start Date*</td>
    <td ><?php
	  $myCalendar = new tc_calendar("start_date", true);
	   $myCalendar->setIcon("../../lib/calendar/images/iconCalendar.gif");
	  $myCalendar->setDate(date('d'), date('m'), date('Y'));
	  $myCalendar->setPath("../../lib/calendar");
	  $myCalendar->setYearInterval(1960, (date('Y')+10));
	  //$myCalendar->dateAllow('2008-05-13', '2010-03-01');
	  //$myCalendar->setHeight(350);	  
	  //$myCalendar->autoSubmit(true, "form1");
	  $myCalendar->writeScript();
	  ?></td>
  </tr>
  <tr>
    <td class="input_level">End Date*</td>
    <td><?php
	  $myCalendar = new tc_calendar("end_date", true);
	   $myCalendar->setIcon("../../lib/calendar/images/iconCalendar.gif");
	  $myCalendar->setDate(date('d'), date('m'), date('Y'));
	  $myCalendar->setPath("../../lib/calendar");
	  $myCalendar->setYearInterval(1960, (date('Y')+10));
	  //$myCalendar->dateAllow('2008-05-13', '2010-03-01');
	  //$myCalendar->setHeight(350);	  
	  //$myCalendar->autoSubmit(true, "form1");
	  $myCalendar->writeScript();
	  ?></td>
  </tr>
   <tr>
    <td class="input_level">Intented Skill</td>
    <td><select class="input_txt" name="intented_skill" id="select8">
    <option value="1">All skills</option>
    </select></td>
  </tr>
   <tr>
    <td class="input_level">Duration per Lesson*</td>
    <td><label>
      <input id="duddr"  size="30" type="text" name="duration" class="validate[required,custom[onlyNumber],length[0,50]] text-input input_txt"  value=" <?php echo $_SESSION['duration']; ?>" />
    </label></td>
  </tr>
   <tr>
    <td class="input_level">Total Lessons*</td>
    <td><label>
      <input id="total_lesson"  size="30" type="text" name="total_lesson" class="validate[required,custom[onlyNumber],length[0,50]] text-input input_txt"  value=" <?php echo $_SESSION['total_lesson']; ?>" />
    </label></td>
  </tr>
  <tr>
    <td class="input_level">Age Group</td>
    <td><label>
      <input type="text" class="input_txt" size="30" name="age_group" value="<?php echo $_SESSION['age_group'];?>" />
    </label></td>
  </tr>
   <tr>
    <td class="input_level">Comment</td>
    <td><label>
      <textarea name="comment" class="input_txt" id="textarea2" cols="45" rows="7"><?php echo $_SESSION['comment']; ?></textarea>
    </label></td>
  </tr>
  </table>
     </div>
        <div class="content_body" align="left">
        <input class="art-button" type="submit" name="next" value="Next"/>
        <input type="hidden" name="save" value="true" />
        <a href="../admin/levelMenu.php"><input class="art-button" type="button" name="Cancel" value="Cancel"/></a>
        
                 
   
      </div>             
            </form>     
				   
                    <?php
	  require_once('../../template/footer.php');
	  ?>
