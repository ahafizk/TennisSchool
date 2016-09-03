<?php
require_once('../../lib/calendar/classes/tc_calendar.php');
require_once('../../control/student/csearchstudent.php');
session_start();
if($_SESSION['auths']!=1)
{
	forward('../register/index.php');
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
                <a href="editstudent.php"><img src="../../images/icon64_leerlingen_nw.png" style="height: 32px;" alt="">
                <br> 
                &gt;edit</a>
                &nbsp;&nbsp;</div>
                <div id="navpos4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:history.back()"><img src="../../images/nav_left.png" alt="Terug"></a>&nbsp;&nbsp;
                <img src="../../images/uitloggen.png" alt="Uitloggen" onclick="window.open('../../common/logout.php', '_self')"><br><div class="lockleerlingWrap">Logged in: <?Php  echo $_SESSION['USER']; ?></div>
                </div>
			</div>
                 
                     <div id="navtitel">
                       <div align="left">New Student </div>
                    </div>
        		
                 
                  <br/>
                  <form name="edit" action="../../control/student/cupdatestudent.php" method="post">
                  
                  <div align="left">
                  <div id="title_1" align="center" style="width: 130px" >Private Info</div>
                  </div>
                  
                  
                  <div class="content_body" align="left">
                 
                  <table  cellpadding="5" cellspacing="2">
        		 <tbody>
        		
          		<tr>
            	<td><div class="input_level">Initial</div></td>
           	 	<td><input size="30"  id="initial" class="text-input input_txt " type="text" name="initial"value="<?php echo $user['initial'][0]; ?>"/>
                <input size="30"  type="hidden" id="user_id" name="user_id" value="<?php echo $user['id'][0]; ?>"/></td>
            	<td><div class="input_level">Call Name*</div></td>
            	<td><input size="30"  id="call_name" class="validate[required,custom[names],length[0,50]] text-input input_txt " type="text" name="call_name"  value="<?php echo $user['call_name'][0]; ?>"/></td>
          		</tr>
          		<tr>
            	<td><div class="input_level">Middle Name</div></td>
           	 	<td><input size="30"  class="input_txt" type="text" name="middle_name"value="<?php echo $user['middle_name'][0]; ?>"/></td>
            	<td><div class="input_level">Last Name*</div></td>
            	<td><input size="30"  id="last_name" class="validate[required,custom[names],length[0,50]] text-input input_txt " type="text" name="last_name"  value="<?php echo $user['last_name'][0]; ?>"/></td>
          		</tr>
          		<tr>
            	<td><div class="input_level">Gender*</div></td>
            	<td><select class="input_txt" name="gender">
                			<?php
							 if(!strcasecmp('M',$user['gender'][0]))$sel = " selected";
							 else $sel = " ";
							 if(!strcasecmp('W',$user['gender'][0])) $sel2 = " selected";
							 else $sel =" ";
							 ?>
                            <option value="M" <?php echo $sel; ?> >Man</option>
                            <option value="W" <?php echo $sel2; ?> >Woman</option>
                           
                          </select></td>
            	<td><div class="input_level">Birth Date*</div></td>
            	<td><?php
	  $myCalendar = new tc_calendar("date1", true);
	   $myCalendar->setIcon("../../lib/calendar/images/iconCalendar.gif");
	   //fd
	   $dat = date_parse($user['date_of_birth'][0]);
	   
	  $myCalendar->setDate($dat['day'], $dat['month'], $dat['year']);
	  $myCalendar->setPath("../../lib/calendar");
	  $myCalendar->setYearInterval(1960, (date('Y')+10));
	  //$myCalendar->dateAllow('2008-05-13', '2010-03-01');
	  //$myCalendar->setHeight(350);	  
	  //$myCalendar->autoSubmit(true, "form1");
	  $myCalendar->writeScript();
	  ?></td>
          		
       
        		</tr>
                 <tr>
                <td><div class="input_level">Comment</div></td>
                <td><textarea id="last_name" class="input_txt " type="textarea" cols="50" rows="10"  name="comment"><?php echo $user['other_detail'][0]; ?></textarea>  </td>
                </tr>
        		</tbody>
        		</table>
        </div>
       
       
        <div align="left">
       <div id="title_1" align="center" style="width: 82px" >Address</div>
       </div>
        
       <div class="content_body" align="left">
         <table cellpadding="5" cellspacing="2">
           <tr>
            <td><div class="input_level">Street*</div></td>
           	<td><input size="30"  id="street" class="validate[required,custom[names],length[0,50]] text-input input_txt " type="text" name="street" value="<?php echo $user['street'][0]; ?>"/></td>
            <td><div class="input_level">House Number*</div></td>
           	<td><input size="30"  id="house_number" class="validate[required,custom[names],length[0,50]] text-input input_txt " type="text" name="house_number" value="<?php echo $user['house_number'][0]; ?>"/></td>
           </tr>
           <tr>
             <td><div class="input_level">Post Code*</div></td>
           	<td><input size="30"  id="post_code" class="validate[required,custom[names],length[0,50]] text-input input_txt " type="text" name="post_code" value="<?php echo $user['post_code'][0]; ?>"/></td>
            <td><div class="input_level">Location*</div></td>
           	<td><input size="30"  id="location" class="validate[required,custom[names],length[0,50]] text-input input_txt " type="text" name="home_palate" value="<?php echo $user['home_plate'][0]; ?>"/></td>
           </tr>
           <tr>
             <td><div class="input_level">Phone Number</div></td>
           	<td><input size="30"  class="input_txt" type="text" name="telephone" value="<?php echo $user['telefoon_vast'][0]; ?>"/></td>
            <td><div class="input_level">Mobile Number</div></td>
           	<td><input size="30"  class="input_txt" type="text" name="mobile" value="<?php echo $user['telefoon_mobiel'][0]; ?>"/></td>
           </tr>
           <tr>
             <td><div class="input_level">Email Address</div></td>
           	<td><input size="30"  id="email" class="validate[custom[email],length[0,50]] text-input input_txt " type="text" name="email" value="<?php echo $user['email'][0]; ?>"/></td>
            <td><div class="input_level">Fax</div></td>
           	<td><input size="30"  class="input_txt" type="text" name="fax" value="<?php echo $user['fax'][0]; ?>"/></td>
           </tr>
         </table>
       </div>
       
       <div align="left">
       <div id="title_1" align="center" style="width: 82px" >Tennis Info</div>
       </div>
        <div class="content_body" align="left">
        
          <table cellpadding="5" cellspacing="2" >
            <tr>
              <td><div class="input_level">Member of association</div></td>
           	<td><input size="30"  class="input_txt" type="text" name="knl_id" value="<?php echo $user['id_association'][0]; ?>"/></td>
            <td><div class="input_level">Tennis Member number</div></td>
           	<td><input size="30"  class="input_txt" type="text" name="bond_number" value="<?php echo $user['tb_bonds_nummer'][0]; ?>"/></td>
            </tr>
            <tr>
              <td><div class="input_level">Skill - only*</div></td>
              <td><select class="input_txt" name="skill_single">
                  <?php if($user['skill_single'][0]==0)$sel = " selected "; ?>
                  <option selected="selected" value="0"<?php echo $sel; ?> >unknown</option>
                  <?php
				 	for($i=1;$i<10;$i++)
					{	
						if($user['skill_single'][0])$sel = " selected ";
						else $sel = " ";
				  		echo "<option ".$sel.">$i</option>";
					}
				  ?>
                  <?php if($user['skill_single'][0]==0)$sel = " selected "; ?>
                  <option value="10" <?php echo $sel; ?> >Not Tennis member</option>
                 </select></td>
              <td><div class="input_level">Skill - Doubles*</div></td>
              <td><select class="input_txt" name="skill_double">
              		<?php if($user['skill_single'][0])$sel = " selected "; ?>
                  <option selected="selected" value="0" <?php echo $sel; ?> >unknown</option>
                  <?php
				 	for($i=1;$i<10;$i++)
					{	
						if($user['skill_single'][0])$sel = " selected ";
						else $sel = " ";
				  		echo "<option ".$sel.">$i</option>";
					}
				  ?>
                  <?php if($user['skill_single'][0]==0)$sel = " selected "; ?>
                    <option value="10" <?php echo $sel; ?>  >Not Tennis member</option>
                    </select></td>
            </tr>
          </table>
        </div>
        <br/>
        <br/>
        <div class="content_body" align="left">
        <input size="30"  class="art-button" type="submit" name="Update" value="Update"/>
        <a href="../admin/studentMenu.php"><input size="30"  class="art-button" type="button" name="Cancel" value="Cancel"/></a>
        </div>
        <div class="content_body" align="left">
        
        </div>
        </form>
        <?php
	  require_once('../../template/footer.php');
	  ?>
