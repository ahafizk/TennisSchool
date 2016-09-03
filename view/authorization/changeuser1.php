<?php
require_once('../../lib/calendar/classes/tc_calendar.php');
require_once('../../control/authorization/cchangeuser1.php');
session_start();
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
                <a href="../admin/authorizeMenu.php">
                <img src="../../images/authorize/folder64_autorisatie.png" alt="Autorisatie" height="32"><br> 
                &gt;Authorization</a>
              &nbsp;&nbsp;</div>
                <div id="navpos3">
                <img src="../../images/spacer.gif" style="height: 5px; width: 14px;" alt="">
                <a href="newstudent1.php"><img src="../../images/icon64_leerlingen_nw.png" style="height: 32px;" alt=""><br> 
                &gt;Change User</a>
                &nbsp;&nbsp;</div>
                <div id="navpos4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:history.back()"><img src="../../images/nav_left.png" alt="Terug"></a>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="#"><img src="../../images/uitloggen.png" alt="Uitloggen"></a>
                <br>
                </div>
			</div>
                 
                     <div id="navtitel">
                       <div align="left">Change User </div>
                    </div>
        		
                  
                  <br/>
                  <form name="form1" action="<?php $_SERVER['PHP_SELF'];?>" method="post">
                  <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']; ?>" />
                   <div align="left">
                  <div id="title_1" align="center" style="width: 130px" >Account Info</div>
                  </div>
                  <div class="content_body" align="left">
                  <table  cellpadding="5" cellspacing="2">
                  <tr>
            	<td><div class="input_level">User Name*</div></td>
           	 	<td><input id="user_name1" size="30" class="validate[required,custom[names],length[0,50]] text-input input_txt " type="text" name="user_name"value="<?php echo $_SESSION['user_name']; ?>" /></td>
                
                </tr>
                 <tr>
            	<td><div class="input_level">Password*</div></td>
           	 	<td><input id="password1" size="30" class="validate[required,length[0,50]] text-input input_txt " type="password" name="password"value="<?php echo $_SESSION['password']; ?>"/></td>
                </tr>
                 <tr>
            	<td><div class="input_level">Retype Password*</div></td>
           	 	<td><input id="repass1" size="30" class="validate[required,length[0,50]] text-input input_txt " type="password" name="repassword"value="<?php echo $_SESSION['repassword']; ?>"/></td>
                </tr>
                  </table>
                  </div>
                  
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
                            <option value="Men">Man</option>
                            <option value="Woman">Woman</option>
                            
                          </select></td>
            	<td><div class="input_level">Birth Date*</div></td>
            	<td><?php
	  $myCalendar = new tc_calendar("date1", true);
	   $myCalendar->setIcon("../../lib/calendar/images/iconCalendar.gif");
	   $date = date_parse($_SESSION['date']);
	  $myCalendar->setDate($date['day'], $date['month'], $date['month']);
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
           	<td><input id="street" size="30" class="validate[required,custom[names],length[0,50]] text-input input_txt " type="text" name="street" value="<?php echo $_SESSION['street']; ?>"/></td>
            <td><div class="input_level">House Number*</div></td>
           	<td><input id="house_number" size="30" class="validate[required,custom[names],length[0,50]] text-input input_txt " type="text" name="house_number" value="<?php echo $_SESSION['house_number']; ?>"/></td>
           </tr>
           <tr>
             <td><div class="input_level">Post Code*</div></td>
           	<td><input id="post_code" size="30" class="validate[required,custom[names],length[0,50]] text-input input_txt " type="text" name="post_code" value="<?php echo $_SESSION['post_code']; ?>"/></td>
            <td><div class="input_level">Location*</div></td>
           	<td><input id="location1" size="30" class="validate[required,custom[names],length[0,50]] text-input input_txt " type="text" name="location" value="<?php echo $_SESSION['location']; ?>"/></td>
           </tr>
           <tr>
             <td><div class="input_level">Phone Number</div></td>
           	<td><input class="input_txt" size="30" type="text" name="telephone" value="<?php echo $_SESSION['telephone']; ?>"/></td>
            <td><div class="input_level">Mobile Number</div></td>
           	<td><input class="input_txt" size="30" type="text" name="mobile" value="<?php echo $_SESSION['mobile']; ?>"/></td>
           </tr>
           <tr>
             <td><div class="input_level">Email Address*</div></td>
           	<td><input id="email" class="input_txt " size="30" type="text" name="email" value="<?php echo $_SESSION['email']; ?>"/></td>
            <td><div class="input_level">Fax</div></td>
           	<td><input class="input_txt" type="text" size="30" name="fax" value="<?php echo $_SESSION['fax']; ?>"/></td>
           </tr>
         </table>
       </div>
       
       
        <br/>
        <div class="content_body" align="left">
        <input class="art-button" type="submit" name="save" value="Save"/>
        <input type="hidden" name="save" value="true" />
        <a href="../admin/authorizeMenu.php"><input class="art-button" type="button" name="Cancel" value="Cancel"/></a>
        </div>
        <div class="content_body" align="left">
        
        </div>
        </form>
        <?php
	  require_once('../../template/footer.php');
	  ?>
