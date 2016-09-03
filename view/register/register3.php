<?php
require_once('../../control/cregister3.php');
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
                  <div id="title_1" align="center" style="width: 210px" >Opportunities for teaching</div>
                  </div>
                  
					<div class="conten_body" align="left">
					<p class="input_level">
				Based on your availability we can offer these lessons. Click for more information
				</p>
                </div>
                  <div class="content_body" align="left">
                   <table border="0" cellpadding="8" cellspacing="2">
  					<tr>
    				<td class="table_td"><strong>Type of lesson</strong></td>
    				<td class="table_td"><strong>Students <br/>per group</strong></td>
    				<td class="table_td"><strong>Number<br />of lesson
</strong></td>
    				<td class="table_td"><strong>Tuition fees</strong></td>
    				<td class="table_td"><strong>Tuition fees<br/>
collection</strong></td>
    				
  					</tr>
 				 	<?php 
					$cnt = count( $lesson_detail['lesson_id']);
                    for($i=0;$i<$cnt;$i++)
					{
						echo "<tr>";
    				
    					echo "<td class=\"input_txt\">".$lesson_detail['lesson_type'][$i]."</td>";
    					echo"<td class=\"input_txt\">".$lesson_detail['member'][$i]."</td>";
    					echo "<td class=\"input_txt\">".$lesson_detail['num_lesson'][$i]."</td>";
    					echo "<td class=\"input_txt\">".$lesson_detail['tution_fees'][$i]."</td>";
    					echo "<td class=\"input_txt\">".$lesson_detail['tution_fee_collection'][$i]."</td>";
  						echo "</tr>";
					}
					?>
  					
					</table>
                  </div>
                   <div class="content_body" align="left">
                    <p class="input_level">
                    Make your choice, select at least one option - all preferences is not needed.
If you only can choose private lessons, then in step 2 "Availability" one days / time indicated that we usually do not teach. The solution is now to select private lessons, return to step 2, since more opportunities to boxes and then proceed to the step 3 to replace a private lesson to another option.:
</p>
                   </div>
                   <div class="content_body" align="left">
                   <table cellpadding="5" cellspacing="2">
                   <tr><td class="input_level">Preference1:</td><td><select class="input_txt" name="choice1">
                   <?php
				   $cnt =count($lesson_detail['group_id']);
				   for($i=0;$i<$cnt;$i++)
				   {
					   $str = $lesson_detail['lesson_type'][$i].", ".$lesson_detail['max_member'][$i]." students ,".$lesson_detail['num_lesson'][$i]." classes of ".$lesson_detail['duration'][$i]." minutes,".$lesson_detail['tution_fees'][$i]." TAKA";
					 echo "<option  value=\"".$lesson_detail['group_id']."\">".$str."</option>";  
					 }
				   ?>
                   </select></td></tr>
                   <tr><td class="input_level">Preference2:</td><td><select class="input_txt" name="choice2">
                   <?php
				   $cnt =count($lesson_detail['group_id']);
				   for($i=0;$i<$cnt;$i++)
				   {
					   $str = $lesson_detail['lesson_type'][$i].", ".$lesson_detail['max_member'][$i]." students ,".$lesson_detail['num_lesson'][$i]." classes of ".$lesson_detail['duration'][$i]." minutes,".$lesson_detail['tution_fees'][$i]." TAKA";
					 echo "<option  value=\"".$lesson_detail['group_id']."\">".$str."</option>";  
					 }
				   ?>
                   </select></td></tr>
                   <tr><td class="input_level">Preference3:</td><td><select class="input_txt" name="choice3">
                   <?php
				   $cnt =count($lesson_detail['group_id']);
				   for($i=0;$i<$cnt;$i++)
				   {
					   $str = $lesson_detail['lesson_type'][$i].", ".$lesson_detail['max_member'][$i]." students ,".$lesson_detail['num_lesson'][$i]." classes of ".$lesson_detail['duration'][$i]." minutes,".$lesson_detail['tution_fees'][$i]." TAKA";
					 echo "<option  value=\"".$lesson_detail['group_id']."\">".$str."</option>";  
					 }
				   ?>
                   </select></td></tr>
                   </table>
                   </div>
        		<br/>
        		<br/>
        		<br/>
        		<br/>
        <div class="content_body" align="left">
        <input size="30"  class="art-button" type="submit" name="register3" value="step3"/>
        <a href="../client/index.php"><input size="30"  class="art-button" type="button" name="Cancel" value="Cancel"/></a>
        </div>
        <div class="content_body" align="left">
        
        </div>
        </form>
        <?php
	  require_once('../../template/footer.php');
	  ?>
