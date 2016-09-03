<?php
require_once('../../control/cregister4.php');
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
                  <div id="title_1" align="center" style="width: 210px" >Partners</div>
                  </div>
                  <div class="content_body" align="left">
                   
                      <p class="input_level">
Enter here with whom you would like to have lessons together.
Caution! This is no registration! Your partners should also register themselves.</p>
					<div>
					<table border="0" cellpadding="5" cellspacing="2">
  <tr>
    <td class="table_td">SL</td>
    <td class="table_td">Desired</td>
    <td class="table_td">Call Name *</td>
    <td class="table_td">Between -<br/>prefixes</td>
    <td class="table_td">Last Name *</td>
    <td class="table_td">M/O</td>
    <td class="table_td">Birth<br />
date</td>
    <td class="table_td">Street</td>
   	<td class="table_td">Nr</td>
    <td class="table_td">Post Code</td>
    
  </tr>
  <tr>
    <td class="table_td">1</td>
    <td class="input_txt"><label>
    <select class="input_txt" name="pf_wanted_as_partner1">
	<OPTION value="Y" selected>Please</OPTION>
	<OPTION value="O">Ok</OPTION>
	<OPTION value="N">Not</OPTION>
	</SELECT>
    </label>
	</td>
    <td class="input_txt"><INPUT class="input_txt" TYPE="text" NAME="pf_call_name1" SIZE="7" MAXLENGTH="40" value="<?php echo $_SESSION['pf_call_name1']; ?>" class=ItemBox></td>
    <td><INPUT class="input_txt" TYPE="text" NAME="pf_middle_name1" SIZE="5" MAXLENGTH="40" value="<?php echo $_SESSION['pf_middle_name1']; ?>" class=ItemBox></td>
    <td class="input_txt"><INPUT class="input_txt" TYPE="text" NAME="pf_last_name1" SIZE="11" MAXLENGTH="40"<?php echo $_SESSION['pf_last_name1']; ?> class=ItemBox></td>
    <td><SELECT class="input_txt" NAME="pf_sex1" class=ItemPopList SIZE="1">
<OPTION value="M" selected>Man
<OPTION value="W">Woman
</SELECT></td>
<TD><INPUT class="input_txt" TYPE="text" NAME="pf_birth_date1" SIZE="9" MAXLENGTH="11" value="<?php echo $_SESSION['pf_birth_date1']; ?>" class=ItemBox></TD>
<TD><INPUT class="input_txt" TYPE="text" NAME="pf_street1" SIZE="9" MAXLENGTH="50" value="<?php echo $_SESSION['pf_street1']; ?>" class=ItemBox></TD>
<TD><INPUT class="input_txt" TYPE="text" NAME="pf_house_number1" SIZE="5" MAXLENGTH="10" value="<?php echo $_SESSION['pf_house_number1']; ?>" class=ItemBox></TD>
<TD><INPUT class="input_txt" TYPE="text" NAME="pf_zipcode1" SIZE="8" MAXLENGTH="20" value="<?php echo $_SESSION['pf_zipcode1']; ?>" class=ItemBox></TD>
  </tr>
  <tr>
    <td class="table_td">2</td>
    <td><SELECT class="input_txt" NAME="pf_wanted_as_partner2" class=ItemPopList size="1">

	<OPTION value="Y" selected>Please</OPTION>
	<OPTION value="O">Ok</OPTION>
	<OPTION value="N">Not</OPTION>
	</SELECT>
	</td>
    <td><INPUT class="input_txt" TYPE="text" NAME="pf_call_name2" SIZE="7" MAXLENGTH="40" value="<?php echo $_SESSION['pf_call_name2']; ?>"  class=ItemBox></td>
    <td><INPUT class="input_txt" TYPE="text" NAME="pf_middle_name2" SIZE="5" MAXLENGTH="40" value="<?php echo $_SESSION['pf_middle_name2']; ?>"  class=ItemBox></td>
    <td><INPUT  class="input_txt" TYPE="text" NAME="pf_last_name2" SIZE="11" MAXLENGTH="40" value="<?php echo $_SESSION['pf_last_name2']; ?>"  class=ItemBox></td>
    <td><SELECT class="input_txt"  NAME="pf_sex2" class=ItemPopList SIZE="1">
<OPTION value="M" selected>Man
<OPTION value="W">Woman
</SELECT></td>
<TD><INPUT class="input_txt" TYPE="text" NAME="pf_birth_date2" SIZE="9" MAXLENGTH="11" value="<?php echo $_SESSION['pf_birth_date2']; ?>"  class=ItemBox></TD>
<TD><INPUT  class="input_txt" TYPE="text" NAME="pf_street2" SIZE="9" MAXLENGTH="50" value="<?php echo $_SESSION['pf_street2']; ?>"  class=ItemBox></TD>
<TD><INPUT class="input_txt" TYPE="text" NAME="pf_house_number2" SIZE="5" MAXLENGTH="10" value="<?php echo $_SESSION['pf_house_number2']; ?>"  class=ItemBox></TD>
<TD><INPUT class="input_txt" TYPE="text" NAME="pf_zipcode2" SIZE="8" MAXLENGTH="20" value="<?php echo $_SESSION['pf_zipcode2']; ?>"  class=ItemBox></TD>
  </tr>
  <tr>
    <td class="table_td">3</td>
    <td><SELECT class="input_txt" NAME="pf_wanted_as_partner3" class=ItemPopList size="1">

	<OPTION value="Y" selected>Please
	<OPTION value="O">Ok
	<OPTION value="N">Not
	</SELECT>
	</td>
    <td><INPUT class="input_txt" TYPE="text" NAME="pf_call_name3" SIZE="7" MAXLENGTH="40" value="<?php echo $_SESSION['pf_call_name3']; ?>"  class=ItemBox></td>
    <td><INPUT class="input_txt" TYPE="text" NAME="pf_middle_name3" SIZE="5" MAXLENGTH="40" value="<?php echo $_SESSION['pf_middle_name3']; ?>"  class=ItemBox></td>
    <td><INPUT class="input_txt" TYPE="text" NAME="pf_last_name3" SIZE="11" MAXLENGTH="40" value="<?php echo $_SESSION['pf_last_name3']; ?>"  class=ItemBox></td>
    <td><SELECT class="input_txt" NAME="pf_sex3" class=ItemPopList SIZE="1">
<OPTION value="M" selected>Man
<OPTION value="F">Woman
</SELECT></td>
<TD><INPUT class="input_txt" TYPE="text" NAME="pf_birth_date3" SIZE="9" MAXLENGTH="11"  value="<?php echo $_SESSION['pf_birth_date3']; ?>" class=ItemBox></TD>
<TD><INPUT class="input_txt" TYPE="text" NAME="pf_street3" SIZE="9" MAXLENGTH="50" value="<?php echo $_SESSION['pf_street3']; ?>"  class=ItemBox></TD>
<TD><INPUT class="input_txt" TYPE="text" NAME="pf_house_number3" SIZE="5" MAXLENGTH="10" value="<?php echo $_SESSION['pf_house_number3']; ?>"  class=ItemBox></TD>
<TD><INPUT class="input_txt" TYPE="text" NAME="pf_zipcode3" SIZE="8" MAXLENGTH="20" value="<?php echo $_SESSION['pf_zipcode3']; ?>"  class=ItemBox></TD>
  </tr>
  <tr>
    <td class="table_td">4</td>
    <td><SELECT class="input_txt" NAME="pf_wanted_as_partner4" class=ItemPopList size="1">

	<OPTION value="Y" selected>Please</OPTION>
	<OPTION value="O">Ok</OPTION>
	<OPTION value="N">Not</OPTION>
	</SELECT>
	</td>
    <td><INPUT class="input_txt" TYPE="text" NAME="pf_call_name4" SIZE="7" MAXLENGTH="40"  value="<?php echo $_SESSION['pf_call_name4']; ?>" class=ItemBox></td>
    <td><INPUT class="input_txt" TYPE="text" NAME="pf_middle_name4" SIZE="5" MAXLENGTH="40" value="<?php echo $_SESSION['pf_middle_name4']; ?>" class=ItemBox></td>
    <td><INPUT  class="input_txt" TYPE="text" NAME="pf_last_name4" SIZE="11" MAXLENGTH="40"  value="<?php echo $_SESSION['pf_last_name4']; ?>" class=ItemBox></td>
    <td><SELECT class="input_txt" NAME="pf_sex4" class=ItemPopList SIZE="1">
<OPTION value="M" selected>Man</OPTION>
<OPTION value="F">Woman</OPTION>
</SELECT></td>
<TD><INPUT class="input_txt" TYPE="text" NAME="pf_birth_date4" SIZE="9" MAXLENGTH="11" value="<?php echo $_SESSION['pf_birth_date4']; ?>"  class=ItemBox></TD>
<TD><INPUT class="input_txt" TYPE="text" NAME="pf_street4" SIZE="9" MAXLENGTH="50" value="<?php echo $_SESSION['pf_street4']; ?>"  class=ItemBox></TD>
<TD><INPUT class="input_txt" TYPE="text" NAME="pf_house_number4" SIZE="5" MAXLENGTH="10" value="<?php echo $_SESSION['pf_house_number4']; ?>"  class=ItemBox></TD>
<TD><INPUT class="input_txt" TYPE="text" NAME="pf_zipcode4" SIZE="8" MAXLENGTH="20" value="<?php echo $_SESSION['pf_zipcode4']; ?>"  class=ItemBox></TD>
  </tr>
</table>
	<br />
    <br />
    <table border="0" cellpadding="5" cellspacing="2">
  <tr>
    <td class="table_td" >SL</td>
    <td class="table_td">Location</td>
    <td class="table_td">Telphone</td>
    <td class="table_td">Mobile</td>
    <td class="table_td">Email</td>
    <td class="table_td">Tennis-<br/>bonds number</td>
    <td class="table_td">Level(skill)</td>
  </tr>
  <tr>
  <td class="table_td">1</td>
  <TD><INPUT class="input_txt" TYPE="text" NAME="pf_city1" SIZE="9" MAXLENGTH="50" value="<?php echo $_SESSION['pf_city1']; ?>"  class=ItemBox></TD>
<TD><INPUT class="input_txt" TYPE="text" NAME="pf_telephone_net1" SIZE="11" MAXLENGTH="30" value="<?php echo $_SESSION['pf_telephone_net1']; ?>"  class=ItemBox></TD>
<TD><INPUT class="input_txt" TYPE="text" NAME="pf_telephone_mobile1" SIZE="11" MAXLENGTH="30" value="<?php echo $_SESSION['pf_telephone_mobile1']; ?>"  class=ItemBox></TD>
<TD><INPUT class="input_txt" TYPE="text" NAME="pf_email1" SIZE="11" MAXLENGTH="50" value="<?php echo $_SESSION['pf_email1']; ?>"  class=ItemBox></TD>
<TD><INPUT class="input_txt" TYPE="text" NAME="pf_tennis_licence_number1" SIZE="11" MAXLENGTH="8" value="<?php echo $_SESSION['pf_tennis_licence_number1']; ?>"  class=ItemBox></TD>
<td>
<SELECT class="input_txt" NAME="pf_pcy_code1">
<OPTION value="" selected>
<OPTION value="1">1 - Professional, top national</OPTION>
<OPTION value="2">2 - Professional, rural subtop</OPTION>
<OPTION value="3">3 - Top tennis match</OPTION>
<OPTION value="4">4 - Very experienced tennis match</OPTION>
<OPTION value="5">5 - Experienced tennis match</OPTION>
<OPTION value="6">6 - Very experienced tennis match</OPTION>
<OPTION value="7">7 - Experienced tennis match</OPTION>

<OPTION value="8">8 - Upcoming tennis match</OPTION>
<OPTION value="9">9 - Recreational tennis players</OPTION>
<OPTION value="10">10 - Advanced beginner</OPTION>
<OPTION value="11">11 - Beginner</OPTION>
<OPTION value="12">12 - Real beginner</OPTION>
</SELECT>
</td>
</tr>
 <tr>
  <td class="table_td">2</td>
  <TD><INPUT  class="input_txt" TYPE="text" NAME="pf_city2" SIZE="9" MAXLENGTH="50" value="<?php echo $_SESSION['pf_city2']; ?>"  class=ItemBox></TD>
<TD><INPUT  class="input_txt" TYPE="text" NAME="pf_telephone_net2" SIZE="11" MAXLENGTH="30" value="<?php echo $_SESSION['pf_telephone_net2']; ?>"  class=ItemBox></TD>
<TD><INPUT class="input_txt"TYPE="text" NAME="pf_telephone_mobile2" SIZE="11" MAXLENGTH="30" value="<?php echo $_SESSION['pf_telephone_mobile2']; ?>"  class=ItemBox></TD>
<TD><INPUT class="input_txt"TYPE="text" NAME="pf_email2" SIZE="11" MAXLENGTH="50"  value="<?php echo $_SESSION['pf_email2']; ?>" class=ItemBox></TD>
<TD><INPUT class="input_txt" TYPE="text" NAME="pf_tennis_licence_number2" SIZE="11" MAXLENGTH="8" value="<?php echo $_SESSION['pf_tennis_licence_number2']; ?>"  class=ItemBox></TD>
<td>
<SELECT class="input_txt" NAME="pf_pcy_code2">
<OPTION value="" selected>
<OPTION value="1">1 - Professional, top national</OPTION>
<OPTION value="2">2 - Professional, rural subtop</OPTION>
<OPTION value="3">3 - Top tennis match</OPTION>
<OPTION value="4">4 - Very experienced tennis match</OPTION>
<OPTION value="5">5 - Experienced tennis match</OPTION>
<OPTION value="6">6 - Very experienced tennis match</OPTION>
<OPTION value="7">7 - Experienced tennis match</OPTION>

<OPTION value="8">8 - Upcoming tennis match</OPTION>
<OPTION value="9">9 - Recreational tennis players</OPTION>
<OPTION value="10">10 - Advanced beginner</OPTION>
<OPTION value="11">11 - Beginner</OPTION>
<OPTION value="12">12 - Real beginner</OPTION>
</SELECT>
</td>
</tr>
 <tr>
  <td class="table_td">3</td>
  <TD><INPUT class="input_txt"TYPE="text" NAME="pf_city3" SIZE="9" MAXLENGTH="50"  value="<?php echo $_SESSION['pf_city3']; ?>" class=ItemBox></TD>
<TD><INPUT class="input_txt" TYPE="text" NAME="pf_telephone_net3" SIZE="11" MAXLENGTH="30" value="<?php echo $_SESSION['pf_telephone_net3']; ?>"  class=ItemBox></TD>
<TD><INPUT class="input_txt" TYPE="text" NAME="pf_telephone_mobile3" SIZE="11" MAXLENGTH="30" value="<?php echo $_SESSION['pf_telephone_mobile3']; ?>"  class=ItemBox></TD>
<TD><INPUT class="input_txt" TYPE="text" NAME="pf_email3" SIZE="11" MAXLENGTH="50" value="<?php echo $_SESSION['pf_email3']; ?>"  class=ItemBox></TD>
<TD><INPUT class="input_txt" TYPE="text" NAME="pf_tennis_licence_number3" SIZE="11" MAXLENGTH="8" value="<?php echo $_SESSION['pf_tennis_licence_number3']; ?>"  class=ItemBox></TD>
<td>
<SELECT class="input_txt" NAME="pf_pcy_code3">
<OPTION value="" selected>
<OPTION value="1">1 - Professional, top national</OPTION>
<OPTION value="2">2 - Professional, rural subtop</OPTION>
<OPTION value="3">3 - Top tennis match</OPTION>
<OPTION value="4">4 - Very experienced tennis match</OPTION>
<OPTION value="5">5 - Experienced tennis match</OPTION>
<OPTION value="6">6 - Very experienced tennis match</OPTION>
<OPTION value="7">7 - Experienced tennis match</OPTION>

<OPTION value="8">8 - Upcoming tennis match</OPTION>
<OPTION value="9">9 - Recreational tennis players</OPTION>
<OPTION value="10">10 - Advanced beginner</OPTION>
<OPTION value="11">11 - Beginner</OPTION>
<OPTION value="12">12 - Real beginner</OPTION>
</SELECT>
</td>
</tr>
 <tr>
  <td class="table_td">4</td>
  <TD><INPUT class="input_txt" TYPE="text" NAME="pf_city4" SIZE="9" MAXLENGTH="50"  value="<?php echo $_SESSION['pf_city4']; ?>" class=ItemBox></TD>
<TD><INPUT  class="input_txt"TYPE="text" NAME="pf_telephone_net4" SIZE="11" MAXLENGTH="30" value="<?php echo $_SESSION['pf_telephone_net4']; ?>"  class=ItemBox></TD>
<TD><INPUT class="input_txt"TYPE="text" NAME="pf_telephone_mobile4" SIZE="11" MAXLENGTH="30" value="<?php echo $_SESSION['pf_telephone_mobile4']; ?>"  class=ItemBox></TD>
<TD><INPUT class="input_txt"TYPE="text" NAME="pf_email4" SIZE="11" MAXLENGTH="50"  value="<?php echo $_SESSION['pf_email4']; ?>" class=ItemBox></TD>
<TD><INPUT class="input_txt" TYPE="text" NAME="pf_tennis_licence_number4" SIZE="11" MAXLENGTH="8" value="<?php echo $_SESSION['pf_tennis_licence_number4']; ?>"  class=ItemBox></TD>
<td>
<SELECT class="input_txt" NAME="pf_pcy_code4">
<OPTION value="" selected>
<OPTION value="" selected>
<OPTION value="1">1 - Professional, top national</OPTION>
<OPTION value="2">2 - Professional, rural subtop</OPTION>
<OPTION value="3">3 - Top tennis match</OPTION>
<OPTION value="4">4 - Very experienced tennis match</OPTION>
<OPTION value="5">5 - Experienced tennis match</OPTION>
<OPTION value="6">6 - Very experienced tennis match</OPTION>
<OPTION value="7">7 - Experienced tennis match</OPTION>

<OPTION value="8">8 - Upcoming tennis match</OPTION>
<OPTION value="9">9 - Recreational tennis players</OPTION>
<OPTION value="10">10 - Advanced beginner</OPTION>
<OPTION value="11">11 - Beginner</OPTION>
<OPTION value="12">12 - Real beginner</OPTION></SELECT>
</td>
</tr>

</table>
                  </div>
        		<br/>
        		<br/>
        		<br/>
        		<br/>
        <div class="content_body" align="left">
        <input size="30"  class="art-button" type="submit" name="register4" value="step4"/>
        <a href="../client/index.php"><input size="30"  class="art-button" type="button" name="Cancel" value="Cancel"/></a>
        </div>
        <div class="content_body" align="left">
        
        </div>
        </form>
        <?php
	  require_once('../../template/footer.php');
	  ?>
