<?php
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
                <a href="newstudent1.php"><img src="../../images/icon64_leerlingen_nw.png" style="height: 32px;" alt="">
                <br> &gt; New</a>
                &nbsp;&nbsp;</div>
                <div id="navpos4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:history.back()"><img src="../../images/nav_left.png" alt="Terug"></a>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <img src="../../images/uitloggen.png" alt="Uitloggen" onclick="window.open('../../common/logout.php', '_self')"><br><div class="lockleerlingWrap">Logged in: <?Php  echo $_SESSION['USER']; ?></div>
                </div>
			</div>
                 
                     <div id="navtitel">
                       <div align="left">New Student </div>
                    </div>
        		
                  
                  <br/>
                  <form name="form1" action="../../control/student/cnewstudent.php" method="post">
                  <div style="color:red;font-size:12px;font-family: Comic Sans MS, cursive;"><?php echo $_SESSION['']; ?></div>
                  <div align="left">
                  <div id="title_1" align="center" style="width: 130px" >Private Info</div>
                  </div>
                  
                  
                  <div class="content_body" align="left">
                 
                  <table  cellpadding="5" cellspacing="2">
        		 <tbody>
        		
          		<tr>
            	<td><div class="input_level">Initial*</div></td>
           	 	<td><input id="initial" size="30" class="validate[required,custom[names],length[0,50]] text-input input_txt " type="text" name="initial"value="<?php echo $_SESSION['initial']; ?>"/></td>
            	<td><div class="input_level">Call Name*</div></td>
            	<td><input id="call_name" size="30" class="validate[required,custom[names],length[0,50]] text-input input_txt " type="text" name="call_name"  value="<?php echo $_SESSION['call_name']; ?>"/></td>
          		</tr>
          		<tr>
            	<td><div class="input_level">Middle Name</div></td>
           	 	<td><input class="input_txt" size="30" type="text" name="middle_name"value="<?php echo $_SESSION['middle_name']; ?>"/></td>
            	<td><div class="input_level">Last Name*</div></td>
            	<td><input id="last_name" size="30" class="validate[required,custom[names],length[0,50]] text-input input_txt " type="text" name="last_name"  value="<?Php echo $_SESSION['last_name'];?>"/></td>
          		</tr>
          		<tr>
            	<td><div class="input_level">Gender*</div></td>
            	<td><select class="input_txt" name="gender">
                            <option value="M">Man</option>
                            <option value="W">Woman</option>
                            
                          </select></td>
            	<td><div class="input_level">Birth Date*</div></td>
            	<td><?php
	  $myCalendar = new tc_calendar("date1", true);
	   $myCalendar->setIcon("../../lib/calendar/images/iconCalendar.gif");
	  //$myCalendar->setDate(19, 6, 2009);
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
                <td><textarea id="last_name" class="input_txt " type="textarea" cols="50" rows="10"  name="comment"><?php echo $_SESSION['comment']; ?></textarea>  </td>
                                </tr>
                                <tr>
                                <td><div class="input_level">Active Student</div></td>
                <td><input type="checkbox" checked="checked" name="active"  /></td>

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
           	<td><input id="street" size="30" class="validate[required,custom[names],length[0,50]] text-input input_txt " type="text" name="street" value="<?php echo $_SESSION['street']; ?>"/></td>
            <td><div class="input_level">House Number*</div></td>
           	<td><input id="house_number" size="30" class="validate[required,custom[names],length[0,50]] text-input input_txt " type="text" name="house_number" value="<?php echo $_SESSION['house_number']; ?>"/></td>
           </tr>
           <tr>
             <td><div class="input_level">Post Code*</div></td>
           	<td><input id="post_code" size="30" class="validate[required,custom[names],length[0,50]] text-input input_txt " type="text" name="post_code" value="<?php echo $_SESSION['post_code']; ?>"/></td>
            <td><div class="input_level">Location*</div></td>
           	<td><input id="location" size="30" class="validate[required,custom[names],length[0,50]] text-input input_txt " type="text" name="home_palate" value="<?php echo $_SESSION['home_palate']; ?>"/></td>
           </tr>
           <tr>
             <td><div class="input_level">Phone Number</div></td>
           	<td><input class="input_txt" size="30" type="text" name="telephone" value="<?php echo $_SESSION['telephone']; ?>"/></td>
            <td><div class="input_level">Mobile Number</div></td>
           	<td><input class="input_txt" size="30" type="text" name="mobile" value="<?php echo $_SESSION['mobile']; ?>"/></td>
           </tr>
           <tr>
             <td><div class="input_level">Email Address</div></td>
           	<td><input id="email" class="input_txt " size="30" type="text" name="email" value="<?php echo $_SESSION['$email']; ?>"/></td>
            <td><div class="input_level">Fax</div></td>
           	<td><input class="input_txt" type="text" size="30" name="fax" value="<?php echo $_SESSION['$fax']; ?>"/></td>
           </tr>
         </table>
       </div>
       
       <div align="left">
       <div id="title_1" align="center" style="width: 100px" >Tennis Info</div>
       </div>
        <div class="content_body" align="left">
        
          <table cellpadding="5" cellspacing="2" >
            <tr>
              <td><div class="input_level">Member of association</div></td>
           	<td><input class="input_txt" type="text" size="30" name="knl_id" value="<?php echo $_SESSION['$knl_id']; ?>"/></td>
            <td><div class="input_level">Tennis bond number</div></td>
           	<td><input class="input_txt" type="text" size="30" name="bond_number" value="<?php echo $_SESSION['$bond_number']; ?>"/></td>
            </tr>
            <tr>
              <td><div class="input_level">Skill - only*</div></td>
              <td><select class="input_txt" name="skill_single">
                  <option selected="selected" value="0">unknown</option>
                  <?php
				 	for($i=1;$i<10;$i++)
				  	echo "<option>$i</option>";
				  ?>
                  <option value="10">No member KNL TB</option>
                 </select></td>
              <td><div class="input_level">Skill - Doubles*</div></td>
              <td><select class="input_txt" name="skill_double">
                  <option selected="selected" value="0">unknown</option>
                  <?php
					for($i=1;$i<10;$i++)
					echo "<option>$i</option>";
					?>
                    <option value="10">No member KNL TB</option>
                    </select></td>
            </tr>
          </table>
        </div>
        <br/>
        <br/>
        <div class="content_body" align="left">
        <input class="art-button" type="submit" name="save" value="Save"/>
        <input type="hidden" name="save" value="true" />
        <a href="../admin/studentMenu.php"><input class="art-button" type="button" name="Cancel" value="Cancel"/></a>
        </div>
        <div class="content_body" align="left">
        
        </div>
        </form>
        <?php
	  require_once('../../template/footer.php');
	  ?>
