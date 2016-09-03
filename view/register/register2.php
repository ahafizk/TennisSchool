<?php
require_once('../../lib/calendar/classes/tc_calendar.php');
//require_once('../../control/student/csearchstudent.php');
require_once('../../control/cregister2.php');
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
                 
			<div id="navbalk"></div>
                 
                     <div id="navtitel">
                       <div align="left">New Student </div>
                    </div>
        		
                 
                  <br/>
                 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                  
                  <div align="left">
                  <div id="title_1" align="center" style="width: 130px" >Time Pref.</div>
                  </div>
                  
                  
                  <div class="content_body" align="left">
                 <table cellpadding="0"  cellspacing="0">
                 <tr>
                 <td class="input_level" align="center"><table border="0">
                 <tr > <td colspan="2" align="center">Monday</td></tr>
                 
                 <?php
				 $param= array('start_time','end_time','duration');
				 
				 $week1=$ruser_time_pref->get_times(1);
				 $week1 = time_range($week1,$param);
				 $cnt1 = count($week1);
				 
				 $week2=$ruser_time_pref->get_times(2);
				
                 $week2 = time_range($week2,$param);
				 $cnt2 = count($week2);
				 
				 $week3=$ruser_time_pref->get_times(3);
                 $week3 = time_range($week3,$param);
				 $cnt3 = count($week3);
				 
				 $week4=$ruser_time_pref->get_times(4);
                 $week4 = time_range($week4,$param);
				 $cnt4 = count($week4);
				 
				 $week5=$ruser_time_pref->get_times(5);
                 $week5 = time_range($week5,$param);
				 $cnt5 = count($week5);
				 
				 $week6=$ruser_time_pref->get_times(6);
				 $week6 = time_range($week6,$param);
				 $cnt6 = count($week6);
				 
				 $max = max($cnt1,$cnt2,$cnt3,$cnt4,$cnt5,$cnt6);
				 //echo $max;
				 for($i=0;$i<$cnt1;$i++)
				 {
					 $name = "p_presence".$i."_1";
				 	echo"<tr><td><input type=\"checkbox\" name=\"$name\" value=\"".$week1[$i]."\"/></td><td>".$week1[$i]."</td></tr>";
				 }
				 for($i=$cnt1;$i<$max;$i++)
				 {
					 echo"<tr><td>&nbsp;</td><td>&nbsp;</td></tr>";
				 }
				 
                 ?>
                 
                 </table></td>
                 <td class="input_level"><table border="0">
                 <tr > <td colspan="2" align="center">Tuesday</td></tr>
                 
                 <?php
				 
                 
				 for($i=0;$i<$cnt2;$i++)
				 {
					 $name = "p_presence".$i."_2";
				 	echo"<tr><td><input type=\"checkbox\" name=\"$name\" value=\"".$week2[$i]."\"/>"."</td><td>".$week2[$i]."</td></tr>";
				 }
				  for($i=$cnt2;$i<$max;$i++)
				 {
					 echo"<tr><td>&nbsp;</td><td>&nbsp;</td></tr>";
				 }
                 ?>
                 </table></td>
                 <td class="input_level"><table border="0">
                 <tr > <td colspan="2" align="center">Wednesday</td></tr>
                 
                 <?php
				 
				 for($i=0;$i<$cnt3;$i++)
				 {
					 $name = "p_presence".$i."_3";
				 	echo"<tr><td><input type=\"checkbox\" name=\"$name\" value=\"".$week3[$i]."\"/>"."</td><td>".$week3[$i]."</td></tr>";
				 }
				  for($i=$cnt3;$i<$max;$i++)
				 {
					 echo"<tr><td>&nbsp;</td><td>&nbsp;</td></tr>";
				 }
                 ?>
                 </table></td>
                 <td class="input_level"><table border="0">
                 <tr > <td colspan="2" align="center">Thusday</td></tr>
                 
                 <?php
				
				 for($i=0;$i<$cnt4;$i++)
				 {
					 $name = "p_presence".$i."_4";
				 	echo"<tr><td><input type=\"checkbox\" name=\"$name\" value=\"".$week4[$i]."\"/>"."</td><td>".$week4[$i]."</td></tr>";
				 }
				  for($i=$cnt4;$i<$max;$i++)
				 {
					 echo"<tr><td>&nbsp;</td><td>&nbsp;</td></tr>";
				 }
                 ?>
                 </table></td>
                 <td class="input_level"><table border="0">
                 <tr > <td colspan="2" align="center">Friday</td></tr>
                 
                 <?php
				 
				 for($i=0;$i<$cnt5;$i++)
				 {
					 $name = "p_presence".$i."_5";
				 	echo"<tr><td><input type=\"checkbox\" name=\"$name\" value=\"".$week5[$i]."\"/>"."</td><td>".$week5[$i]."</td></tr>";
				 }
				  for($i=$cnt5;$i<$max;$i++)
				 {
					 echo"<tr><td>&nbsp;</td><td>&nbsp;</td></tr>";
				 }
                 ?>
                 </table></td>
                  <td class="input_level"><table border="0">
                 <tr > <td colspan="2" align="center">Saturday</td></tr>
                 
                 <?php
				 
				 for($i=0;$i<$cnt6;$i++)
				 {
					 $name = "p_presence".$i."_6";
				 	echo"<tr><td><input type=\"checkbox\" name=\"$name\" value=\"".$week6[$i]."\"/>"."</td><td>".$week6[$i]."</td></tr>";
				 }
				  for($i=$cnt6;$i<$max;$i++)
				 {
					 echo"<tr><td>&nbsp;</td><td>&nbsp;</td></tr>";
				 }
                 ?>
                 </table></td>
                 </tr>
                 
                 </table>
            	
        		</div>
               <div align="left">
                  <div id="title_1" align="center" style="width: 150px" >Possible Explanation</div>
                  </div>
                  <div class="content_body" align="left">
                  <textarea class="input_txt" style="width: 362px;" name="p_absent" rows="2" cols="50" class="ItemArea">
						</textarea>
                  </div>
        		<br/>
        		<br/>
        		<br/>
        		<br/>
        <div class="content_body" align="left">
        <input size="30"  class="art-button" type="submit" name="register2" value="step2"/>
        <a href="../client/index.php"><input size="30"  class="art-button" type="button" name="Cancel" value="Cancel"/></a>
        </div>
        <div class="content_body" align="left">
        
        </div>
        </form>
        <?php
	  require_once('../../template/footer.php');
	  ?>
