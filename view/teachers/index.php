<?php
require_once('../../control/auth/cauth.php');

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
                 
                 <form name="abc" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        		
                 <table cellpadding="5" cellspacing="2">
                 <tr>
        <td class="input_level">This is the Teacher's registration site. If you are a teacher and register before then please login to this site.</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        </tr>
        <tr><td class="input_level" ><a href="../authorization/newuser.php">Do you Want to register?</a></td><td class="input_level">&nbsp;</td></tr>
                 </table>
                  
             <br/>
             <br/>     
      <table  cellpadding="5" cellspacing="2">
        <tbody>
       
        <tr><td class="input_level" align="center">User Name:</td><td ><input id="vl" class="validate[required,custom[names],length[0,50]] text-input input_txt " size="30" type="text" name="user_name" value="" /></td></tr>
        <tr><td class="input_level" align="center">Password:</td><td><input id="vw" class="validate[required,length[0,50]] text-input input_txt " size="30" type="password" name="password" value="" /></td></tr>
        <tr><td >&nbsp;</td><td style="color:#F00"><?php  if($_SESSION['invalid']==1)echo "Invalid User Name or Password"; ?></td></tr>
        
        <tr><td >&nbsp;</td><td class="input_level"><input class="art-button" type="submit" name="Login" value="Login"/></td></tr>
        <tr height="200" ></tr>
        </tbody>
		
        </table>
        </form>
        <div class="content_body" align="center">
        
        </div>
      <?php
	  require_once('../../template/footer.php');
	  ?>
