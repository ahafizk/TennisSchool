<?php
require_once('../../lib/calendar/classes/tc_calendar.php');
require_once('../../control/student/cmovestudent1.php');
session_start();
if($_SESSION['auths']!=1)
{
	forward('../../teacher/index.php');
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>
   
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
                <a href="../admin/studentMenu.php">
                <img src="../../images/folder64_leerlingen.png" style="height: 32px;" alt="Student">
                <br> &gt; Student</a>
                &nbsp;&nbsp;</div>
                <div id="navpos3">
                <img src="../../images/spacer.gif" style="height: 5px; width: 14px;" alt="">
                <a href="#"><img src="../../images/icon64_leerlingen_nw.png" style="height: 32px;" alt="">
                <br> 
                &gt;move</a>
                &nbsp;&nbsp;</div>
                <div id="navpos4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:history.back()"><img src="../../images/nav_left.png" alt="Terug"></a>
                &nbsp;&nbsp;&nbsp;
                <img src="../../images/uitloggen.png" alt="Uitloggen" onclick="window.open('../../common/logout.php', '_self')"><br><div class="lockleerlingWrap">Logged in: <?Php  echo $_SESSION['USER']; ?></div>
                </div>
			</div>
                 
                     <div id="navtitel">
                       <div align="left">Move Student</div>
                    </div>
        		
                 
                  <br/>
                   
                   <div align="left">
                  <div id="title_1" align="center" style="width: 130px" >Student Info</div>
                  </div>
               		
                    <div class="content_body" align="left">
                         <table cellspacing="2" cellpadding="2">
                      <tr>
                        <td><div class="input_level">Name:</div></td>
                        <td>
                        <div class="input_level">
                        <?php
						echo $user['initial'][0]." ".$user['call_name'][0]." ".$user['middle_name'][0]." ".$user['last_name'][0];
						?>
                        </div>
                        </td>
                        
                      </tr>
                      <tr>
                        <td><div class="input_level">Lesson Name:</div></td>
                        <td>
                        <div class="input_level">
                        <?php
						echo $info['lesson_name'][0];
						?>
                        </div>
                        </td>
                      </tr>
                      
                       <tr>
                        <td><div class="input_level">Lesson Types:</div></td>
                        <td>
                        <div class="input_level">
                        <?php
						echo $info['lesson_type'][0];
						?>
                        </div>
                        </td>
                        
                      </tr>
                      
                      <tr>
                        <td><div class="input_level">Day:</div></td>
                        <td>
                        <div class="input_level">
                        <?php
						echo $weekDay[$info['week_day'][0]];
						?>
                        </div>
                        </td>
                        
                      </tr>
                      <tr>
                      <td><div class="input_level">Time:</div></td>
                        <td>
                        <div class="input_level">
                        <?php
						echo $info['start_time'][0]." -- ".$info['end_time'][0];
						?>
                        </div>
                        </td>
                      </tr>
                       <tr>
                      <td><div class="input_level">Maximum Members:</div></td>
                        <td>
                        <div class="input_level">
                        <?php
						echo $info['max_member'][0];
						?>
                        </div>
                        </td>
                      </tr>
                       <tr>
                      <td><div class="input_level">Available Member:</div></td>
                        <td>
                        <div class="input_level">
                        <?php
						echo $info['available_member'][0];
						?>
                        </div>
                        </td>
                      </tr>
                      
                       <tr>
                      <td><div class="input_level">Location:</div></td>
                        <td>
                        <div class="input_level">
                        <?php
						echo $info['location'][0];
						?>
                        </div>
                        </td>
                      </tr>
                    </table>
                    </div>
                  <br/>
                  <div align="left">
                  <div id="title_1" align="center" style="width: 160px" >Select Desired Time</div>
                  </div>
                  <br/>
                   <div class="content_body" align="left">
                   <form name="form4" action="../../control/student/cmovestudent2.php" method="post">
                   <input type="hidden" name="user_id" value="<?php echo $user_id; ?>" />
                   <table cellpadding="8" cellspacing="2">
                   <tr>
                   <td class="table_td">select</td> 
                   <td class="table_td">Lesson Name</td>
                   <td class="table_td">Lesson Type</td>
                   <td class="table_td">Day</td>
                   <td class="table_td">Start Time</td>
                   <td class="table_td">End Time</td>
                   <td class="table_td">Max Member</td>
                   <td class="table_td">Available Member</td>
                   <td class="table_td">Location</td>
                   <td class="table_td">Location Name</td>
                   </tr>
                   
                   <?php 
				   $cntI =count($record['lesson_id']);
				   for($i=0;$i<$cntI;$i++)
				   {
                   echo "<tr>";
				   if($i==0)$sel = " checked ";
				   else $sel  = " ";
                   echo "<td class=\"table_td\"><input type=\"radio\" name=\"lookup_id\" $sel value=\"".$record['lookup_id'][$i]."\" /></td>"; 
				   echo "<td class=\"input_txt\" align=\"center\">".$record['lesson_name'][$i]."</td>";
                   echo "<td class=\"input_txt\" align=\"center\">".$record['lesson_type'][$i]."</td>";
				   echo "<td class=\"input_txt\" align=\"center\">".$weekDay[$record['week_day'][$i]]."</td>";
                   echo "<td class=\"input_txt\" align=\"center\">".$record['start_time'][$i]."</td>";
                   echo "<td class=\"input_txt\" align=\"center\">".$record['end_time'][$i]."</td>";
                   echo "<td class=\"input_txt\" align=\"center\">".$record['max_member'][$i]."</td>";
                   echo "<td class=\"input_txt\" align=\"center\">".$record['available_member'][$i]."</td>";
                   echo "<td class=\"input_txt\" align=\"center\">".$record['location'][$i]."</td>";
				   echo "<td class=\"input_txt\" align=\"center\">".$record['location_name'][$i]."</td>";
                   echo "</tr>";
				   }
				   ?>
                   </table>
                   <br/>
                   <input class="input_level" type="submit" name="assign" value="Assign" />
                   </form>
                   </div>
                    <?php
	  require_once('../../template/footer.php');
	  ?>
