<?php
//require_once('../../lib/calendar/classes/tc_calendar.php');
$email = $_POST['email'];
$path = $_POST['path'];
$file_name = $_POST['file_name'];
//echo $file_name;
//echo $path;
//echo "$path".""."$file_name";
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
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="#"><img src="../../images/icon32_nwfavorieten.png" alt="Opnemen in favorieten"></a>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="#"><img style="width: 32px; height: 32px;" src="../../images/icon32_izm_mededeling.png" alt="Mededelingen"></a>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href=""><img src="../../images/logo32_izm.png" alt="Zwemscore info"></a>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="#"><img src="../../images/icon32_indexfaq.png" alt="Index/FAQ"></a>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="#"><img src="../../images/uitloggen.png" alt="Uitloggen"></a>
                <br>
                <div class="lockleerlingWrap">Ingelogd: Mike</div>
                </div>
			</div>
                 
                     <div id="navtitel">
                       <div align="left"><?php echo $title_name; ?></div>
                    </div>
        		
                  
                  <br/>
                  <form name="form1" action="mailer/csuccess.php" method="post">
                  <div style="color:red;font-size:12px;font-family: Comic Sans MS, cursive;"><?php echo $data; ?></div>
                  <div align="left">
                  <div id="title_1" align="center" style="width: 145px" >EMail</div>
                  </div>
                  
                  
                  <div class="content_body" align="left">
                  <table  cellpadding="5" cellspacing="2">
                  <tr><td class="input_level">To:</td><td><input class="input_txt" size="30" type="text" name="to" value="<?php echo $email; ?>" /></td></tr>
                  <tr><td class="input_level">Subject:</td><td><input class="input_txt" size="30" type="text" name="subject" value="Invoice" /></td></tr>
                  <tr>
                  <td><input type="checkbox" name="attached" checked="checked" value=""  /></td><td><a href="#"><?php echo $file_name; ?></a></td>
                  </tr>
                  <tr><td>&nbsp;</td><td class="input_level"><textarea class="input_txt" cols="70" rows="10" name="message">This is for sending invoice.</textarea></td></tr>
                  </table>
        		  </div>
       
    
       
     
        <div class="content_body" align="left"></div>
     
        <br/>
        <div class="content_body" align="left">
        <input type="hidden" name="path" value="<?php echo $path; ?>"/>
        <input type="hidden" name="file_name" value="<?php echo $file_name; ?>" />
        <input class="art-button" type="submit" name="send" value="Send"/>
        <a href="../admin/paymentMenu.php"><input class="art-button" type="button" name="Cancel" value="Discard"/></a>
        </div>
        <div class="content_body" align="left">
        </div>
        
        </form>
        <?php
	  require_once('../../template/footer.php');
	  ?>
