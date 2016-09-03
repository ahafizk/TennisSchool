<?php
require_once('../../common/common.php');
require_once('../../control/level/cgroup2.php');
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
                &gt;New Group</a>&nbsp;</div>
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
                  <div id="title_1" align="center" style="width: 140px" >Create Group</div>
                  </div>
                  <br/>
				  <form action="processGroup.php" method="post">
                  <input type="hidden" name="lesson_id" value="<?php echo $lesson_id; ?>"  />  
                   <div class="content_body" align="left">
           			<table border="0" cellspacing="2" cellpadding="5">
                         
                            <tr>
                              <td class="input_level">Lesson Type:</td>
                              <td class="input_level"><?Php echo $ls['lesson_type'][0]; ?></td>
                            </tr>
                            <tr>
                              <td class="input_level">Lesson Name:</td>
                              <td class="input_level"><?php echo $ls['name'][0]; ?></td>
                            </tr>
                            <tr>
                              <td  class="input_level">Age Group:</td>
                              <td class="input_level"><?php echo $ls['age_group'][0]; ?></td>
                            </tr>
                            <tr>
                              <td  class="input_level">Start date:</td>
                              <td class="input_level"><?php echo $ls['start_date'][0]; ?>
                            </tr>
                            <tr>
                              <td  class="input_level">End date:</td>
                              <td class="input_level"><?php echo $ls['end_date'][0]; ?>
                            </tr>
                            <tr>
                            <td class="input_level">Total Lesson:</td>
                            <td class="input_level"><?php echo $ls['num_lesson'][0]; ?></td>
                            </tr>
                            </table>
                            <p class="input_level input_txt" style="font-size:14px" align="center">Please give Group information in the below boxes.</p>
                            <table cellpadding="5" cellspacing="2">
                            <tr>
                              <td class="input_level">Max member*:</td>
                              <td><label>
                                <input type="text" class="validate[required,custom[onlyNumber],length[0,50]] text-input input_txt"  size="30" name="max_member" id="textfield" value="<?php echo $_SESSION['max_member'];?>" />
                              </label></td>
                            </tr>
                            <tr>
                              <td class="input_level">Total Trainer*:</td>
                              <td><label>
                                <input class="validate[required,custom[onlyNumber],length[0,50]] text-input input_txt"  type="text" size="30" name="total_trainer" id="textfield2" value="<?php echo $_SESSION['total_trainer'];?>" />
                              </label></td>
                            </tr>
                            <tr>
                              <td class="input_level">Number job*:</td>
                              <td><input class="validate[required,custom[onlyNumber],length[0,50]] text-input input_txt" type="text" size="30" name="job_num" id="textfield3" value="<?php echo $_SESSION['job_num'];?>" /></td>
                            </tr>
                            <tr>
                              <td class="input_level">Explanation:</td>
                              <td><label>
                                <textarea class="input_txt" name="explanation" id="textarea" cols="60" rows="10"><?php echo $_SESSION['explanation'];?></textarea>
                              </label></td>
                            </tr>
                            
                          </table>
                          <p class="input_level input_txt" style="font-size:14px" align="center">Please give time information here for each group.</p>
                    </div>
                    
                    <div class="content_body" align="left">
                    <table border="0" cellpadding="5" cellspacing="2">
                            <tr>
                              <td  class="table_td" align="center">Mon</td>
                              <td class="table_td" align="center">Tue</td>
                              <td class="table_td" align="center">Wed</td>
                              <td class="table_td" align="center">Thu</td>
                              <td class="table_td" align="center">Fri</td>
                              <td class="table_td" align="center">Sat</td>
                              <td class="table_td" align="center">Sun</td>
                              <td class="table_td" align="center">Start Time</td>
                              <td class="table_td" align="center">End Time</td>
                              <td class="table_td" align="center">Location</td>
                              <td class="table_td" align="center">Name</td>
                              <td class="table_td" align="center">Abbreviation</td>
                            </tr>
                            <?php
							 	for($i=1;$i<=7;$i++)
								{
									$str ="<tr>";
									for($j=1;$j<=7;$j++)
									{
										$day="day".$i."".$j;
										$checkId = "checkbox".$i."".$j;
										
                              			$str .="<td class=\"input_txt\"><input  type=\"checkbox\" name=\"$day\" id=\"$checkId\" value=\"$i\" /></td>";
                              			
                              			

									}
									$start = "start".$i;
									$end="end".$i;
									$location = "location".$i;
									$name ="name".$i;
									$abv = "abbriviation".$i;
									$str .="<td><input class=\"input_txt\" name=\"$start\" size=\"10\"/></td>
                              		<td><input class=\"input_txt\" name=\"$end\" size=\"10\"/></td>
                              		<td><input class=\"input_txt\" name=\"$location\" size=\"20\" /></td>
                              		<td><input class=\"input_txt\" name=\"$name\" value=\"\" /></td>
                              		<td><input class=\"input_txt\" name=\"$abv\" size=\"10\" value=\"\"/></td>
                            		</tr>";
									echo $str;
								}
							?>
                            
                          </table>
                    </div>
        <div class="content_body" align="left">
        <input class="art-button" type="submit" name="save" value="Save"/>
       
        <a href="../admin/levelMenu.php"><input class="art-button" type="button" name="Cancel" value="Cancel"/></a>
        
                 
   
      </div>             

            </form>     
				   
                    <?php
	  require_once('../../template/footer.php');
	  ?>
