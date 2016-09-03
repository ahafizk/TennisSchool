<?php
require_once('../../lib/mailer/sendMails.php');
require_once('../../control/cregister6.php');

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
                  <div id="title_1" align="center" style="width: 130px" >Agreement</div>
                  </div>
                  
					
                  <div class="content_body" align="left">
          	
<p class="input_level" style="font-size:14px">Thanks for your subscription!</p>
<p class="input_level" style="font-size:14px">A confirmation  is by e-mail sent to ur email address. This e-mail contains a link to the registration form again to call to make any changes.</p>

<p class="input_level" style="font-size:14px">We use   <b>Tennis Sport</b>. The <b>administrator</b> of Tennis Sport will now see if you are already in the administration is to prevent that happening twice. If you are already in it, additions and changes in personal data processing. After the check, the registration to us. <br/>
If you are new or first e-mail address, you as soon as possible
 via a personal access  sent to our website.</p>
 
<p class="input_level" style="font-size:14px">Follow the processing of the registration   <a href="http://www.tennisplanner.eu/view/register/register.php" style="text-decoration:none"><b> http://www.tennisplanner.eu</b> </a>.  log them in with your personal access code and select  Private </ i> </ b>. If desired, you can also change the entry there until it is processed.</p>

<br><br><br><p class="input_level" style="font-size:14px"><b>Let op!</b>	
DO NOT use the navigation buttons of the browser to return to the registration. Do you have someone else register? Start from a blank form on our website.
</p><p class="input_level">Close the registration</p>
<br>



                   </div>
        		<br/>
        		<br/>
        		<br/>
        		<br/>
        <div class="content_body" align="left">
       
        <a href="finish.php"><input size="30"  class="art-button" type="button" name="Close" value="Finish"/></a>
        </div>
        <div class="content_body" align="left">
        
        </div>
        </form>
        <?php
	  require_once('../../template/footer.php');
	  ?>
