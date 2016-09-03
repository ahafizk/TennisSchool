<?php
require_once('../../lib/calendar/classes/tc_calendar.php');
//require_once('../../control/student/csearchstudent.php');
require_once('../../control/cregister.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>
  
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
                  <div id="title_1" align="center" style="width: 130px" >Private Info</div>
                  </div>
                  
                  
                  <div class="content_body" align="left">
                 
                  <table  cellpadding="5" cellspacing="2">
        		 <tbody>
        		
          		<tr>
            	<td><div class="input_level">Initial</div></td>
           	 	<td><input size="30"  id="initial" class="input_txt"  type="text" name="initial"value="<?php echo $_SESSION['initial']; ?>"/>
               </td>
            	<td><div class="input_level">First Name*</div></td>
            	<td><input size="30"  id="call_name" class="validate[required,custom[names],length[0,50]] text-input input_txt " type="text" name="call_name"  value="<?php echo $_SESSION['call_name']; ?>"/></td>
          		</tr>
          		<tr>
            	<td><div class="input_level">Middle Name</div></td>
           	 	<td><input size="30"  class="input_txt" type="text" name="middle_name"value="<?php echo $_SESSION['middle_name'][0]; ?>"/></td>
            	<td><div class="input_level">Last Name*</div></td>
            	<td><input size="30"  id="last_name" class="validate[required,custom[names],length[0,50]] text-input input_txt " type="text" name="last_name"  value="<?php echo $_SESSION['last_name']; ?>"/></td>
          		</tr>
          		<tr>
            	<td><div class="input_level">Gender*</div></td>
            	<td><select class="input_txt" name="gender">
                			<?php
							 if(!strcasecmp('M',$_SESSION['gender']))$sel = " selected";
							 else $sel = " ";
							 if(!strcasecmp('W',$_SESSION['gender'])) $sel2 = " selected";
							 else $sel =" ";
							 ?>
                            <option value="M" <?php echo $sel; ?> >Male</option>
                            <option value="W" <?php echo $sel2; ?> >Female</option>
                           
                          </select></td>
            	<td><div class="input_level">Birth Date*</div></td>
            	<td><?php
	  $myCalendar = new tc_calendar("date_of_birth", true);
	   $myCalendar->setIcon("../../lib/calendar/images/iconCalendar.gif");
	   //fd
	   $dat = date_parse($_SESSION['date_of_birth']);
	   
	  $myCalendar->setDate($dat['day'], $dat['month'], $dat['year']);
	  $myCalendar->setPath("../../lib/calendar");
	  $myCalendar->setYearInterval(1960, (date('Y')+10));
	  //$myCalendar->dateAllow('2008-05-13', '2010-03-01');
	  //$myCalendar->setHeight(350);	  
	  //$myCalendar->autoSubmit(true, "form1");
	  $myCalendar->writeScript();
	  ?></td>
          		
       
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
           	<td><input size="30"  id="street" class="validate[required,custom[names],length[0,50]] text-input input_txt " type="text" name="street" value="<?php echo $_SESSION['street']; ?>"/></td>
            <td><div class="input_level">House Number*</div></td>
           	<td><input size="30"  id="house_number" class="validate[required,custom[names],length[0,50]] text-input input_txt " type="text" name="house_number" value="<?php echo $_SESSION['house_number']; ?>"/></td>
           </tr>
           <tr>
             <td><div class="input_level">Post Code*</div></td>
           	<td><input size="30"  id="post_code" class="validate[required,custom[names],length[0,50]] text-input input_txt " type="text" name="post_code" value="<?php echo $_SESSION['post_code']; ?>"/></td>
            <td><div class="input_level">Location*</div></td>
           	<td><input size="30"  id="location" class="validate[required,custom[names],length[0,50]] text-input input_txt " type="text" name="home_palate" value="<?php echo $_SESSION['home_palate']; ?>"/></td>
           </tr>
           <tr>
             <td><div class="input_level">Phone Number</div></td>
           	<td><input size="30"  class="input_txt" type="text" name="telephone" value="<?php echo $_SESSION['telephone']; ?>"/></td>
            <td><div class="input_level">Mobile Number</div></td>
           	<td><input size="30"  class="input_txt" type="text" name="mobile" value="<?php echo $_SESSION['mobile']; ?>"/></td>
           </tr>
           <tr>
             <td><div class="input_level">Email Address</div></td>
           	<td><input size="30"  id="email" class="validate[custom[email],length[0,50]] text-input input_txt " type="text" name="email" value="<?php echo $_SESSION['email']; ?>"/></td>
            <td><div class="input_level">Fax</div></td>
           	<td><input size="30"  class="input_txt" type="text" name="fax" value="<?php echo $_SESSION['fax']; ?>"/></td>
           </tr>
         </table>
       </div>
       
       <div align="left">
       <div id="title_1" align="center" style="width: 150px" >Tennis Skills</div>
       </div>
        <div class="content_body" align="left">
        
          <table cellpadding="5" cellspacing="2" >
<!--            <tr>
              <td><div class="input_level">Member of association</div></td>
           	<td><input size="30"  class="input_txt" type="text" name="knl_id" value="<?php echo $_SESSION['knl_id']; ?>"/></td>
            <td><div class="input_level">KNLTB-bond number</div></td>
           	<td><input size="30"  class="input_txt" type="text" name="bond_number" value="<?php echo $_SESSION['bond_number']; ?>"/></td>
            </tr>-->
            <tr>
              <td><div class="input_level">Skill - only*</div></td>
              <td><select class="input_txt" name="skill_single">
                  <?php if($_SESSION['skill_single'][0])$sel = " selected "; ?>
                  <option selected="selected" value="0"<?php echo $sel; ?> >unknown</option>
                  <?php
				 	for($i=1;$i<10;$i++)
					{	
						if($_SESSION['skill_single'][0])$sel = " selected ";
						else $sel = " ";
				  		echo "<option ".$sel.">$i</option>";
					}
				  ?>
                  <?php if($_SESSION['skill_single'][0])$sel = " selected "; ?>
                  <option value="10" <?php echo $sel; ?> >No member KNL TB</option>
                 </select></td>
              <td><div class="input_level">Skill - Doubles*</div></td>
              <td><select class="input_txt" name="skill_double">
              		<?php if($_SESSION['skill_double'][0])$sel = " selected "; ?>
                  <option selected="selected" value="0" <?php echo $sel; ?> >unknown</option>
                  <?php
				 	for($i=1;$i<10;$i++)
					{	
						if($_SESSION['skill_double'][0])$sel = " selected ";
						else $sel = " ";
				  		echo "<option ".$sel.">$i</option>";
					}
				  ?>
                  <?php if($_SESSION['skill_double'][0])$sel = " selected "; ?>
                    <option value="10" <?php echo $sel; ?>  >No member KNL TB</option>
                    </select></td>
            </tr>
          </table>
        </div>
        <div align="left">
       <div id="title_1" align="center" style="width: 150px" >Sporting Experience</div>
       </div>
        <div class="content_body" align="left">
        <table cellpadding="5" cellspacing="2">
        <tr>
        <td class="input_level">Level (Skill):</td><td ><select class="input_txt" name="level_skill">
                            <option selected="selected" value="0"></option>
                            <option value="1">1 - Professional, top national</option>
                            <option value="2">2 - Professional, rural subtop</option>
                            <option value="3">3 - Top tennis match</option>
                            <option value="4">4 - Very experienced tennis match</option>
                            <option value="5">5 - Experienced tennis match</option>
                            <option value="6">6 - Very experienced tennis match</option>
                            <option value="7">7 - Experienced tennis match</option>
                            <option value="8">8 - Upcoming tennis match</option>
                            <option value="9">9 - Recreational tennis players</option>
                            <option value="10">10 - Advanced beginner</option>
                            <option value="11">11 - Beginner</option>
                            <option value="12">12 - Real beginner</option>
                          </select>
                         </td>
                         <td class="input_level">Years had tennis:</td><td> <select class="input_txt" name="had_tennis">
                            <option selected="selected" value="-1"  > </option>
                           <option value="0">0 year</option>
                           <option value="1">1 year</option>
                           <option value="2">2 year</option>
                           <option value="3">3 year</option>
                           <option value="4">4 year</option>
                           <option value="5">5 year</option>
                           <option value="6">more than 5 years</option> 
                          </select></td>
        </tr>
        <tr>
        <td class="input_level">Number of years played tennis:</td><td> <select class="input_txt" name="year_played">
                             <option selected="selected" value="-1"> </option>
                           <option value="0">0 year</option>
                           <option value="1">1 year</option>
                           <option value="2">2 year</option>
                           <option value="3">3 year</option>
                           <option value="4">4 year</option>
                           <option value="5">5 year</option>
                           <option value="6">more than 5 years</option> 
                            
                          </select></td>
                          <td class="input_level">Years workout:</td>
                          <td><select class="input_txt" name="year_workout">
                            <option selected="selected" value="-1"> </option>
                           <option value="0">0 year</option>
                           <option value="1">1 year</option>
                           <option value="2">2 year</option>
                           <option value="3">3 year</option>
                           <option value="4">4 year</option>
                           <option value="5">5 year</option>
                           <option value="6">more than 5 years</option> 
                            
                          </select> </td>
        </tr>
        <tr>
        <td class="input_level">Explanation of those sports:</td><td><textarea class="input_txt" style="position: absolute" cols="50" rows="3" name="explanation" ></textarea> </td>
        </tr>
        </table>
        </div>
        <br/>
        <br/>
        <br/>
        <br/>
        <div class="content_body" align="left">
        <input size="30"  class="art-button" type="submit" name="register" value="step1"/>
        <a href="../register/index.php"><input size="30"  class="art-button" type="button" name="Cancel" value="Cancel"/></a>
        </div>
        <div class="content_body" align="left">
        
        </div>
        </form>
        <?php
	  require_once('../../template/footer.php');
	  ?>
