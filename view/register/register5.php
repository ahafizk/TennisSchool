<?php
require_once('../../control/cregister5.php');
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
              <p  class="input_level" style="margin-top: 7"><font class=GroupText>Agreement provisions lession</font>
<br><font class=IntroText> <font class=IntroText></font></a>. Only if you accept the terms, we can take your registration pending. <br> I accept the provisions</font>

<SELECT class="input_txt"NAME="p_agree_conditions_1" size="1">
<OPTION value="Y" selected>Yes
<OPTION value="N">No
</SELECT>
<p class="input_level"style="margin-top: 7"><font class=GroupText>Agreement &quot;electronic&quot; correspondence</font>
<br><font class=IntroText>We want our records as quickly and efficiently as possible, as much as possible so that we can devote attention to our customers. You can help us by invoice by e-mail to accept. But, if you really want the bill on paper, then it is also by the question "No" answer. <br> I accept the invoice by e-mail</font>
<SELECT class="input_txt" NAME="p_agree_electronic_com_1" size="1">
<OPTION value="Y" selected>Yes
<OPTION value="N">No
</SELECT>
<INPUT TYPE="hidden" NAME="p_bank_account_mandatory" VALUE="N">

<hr size="3" class=BoxActiveColor><p class="input_level" style="margin-top: 7"><font class=GroupText>	
Authorize payment by direct debit: </ font>
You <br> <font class=IntroText> writes in a class for which payment by direct debit <b> possible </ b>. We would appreciate it if you specify here of what we take the fees payable to TK. 370.00 (per person) may collect. If you are not <b> collection </ b> pay, it is TK 375.00. Withdrawal means TK 5.00 discount!</font></p>
<TABLE  cellspacing="2" cellpadding="5">
<TR>
<TD class="input_level"><font class=ItemPrompt>I pay by direct debit</font></TD>

<td>
<SELECT class="input_txt" NAME="p_collection_allowed_1" size="1">
<OPTION value="Y">Yes
<OPTION value="N" selected>No
</SELECT>
</td>
</TR>
<TR>
<TD class="input_level"><font class=ItemPrompt>Bank account number </font></TD>
<TD><INPUT class="input_txt" TYPE="text" NAME="p_bank_account_number_1" SIZE="30" MAXLENGTH="50" ></TD>
</TR>
<TR>
<TD class="input_level"><font class=ItemPrompt>In the name of</font></TD>
<TD><INPUT class="input_txt" TYPE="text" NAME="p_bank_account_owner_name_1" SIZE="30" MAXLENGTH="40" VALUE="<?php echo $_SESSION['initial']." ".$_SESSION['call_name']." ".$_SESSION['last_name']; ?>" ></TD>
</TR>

<TR>
<TD class="input_level"><font class=ItemPrompt>Location </font></TD>
<TD><INPUT class="input_txt" TYPE="text" NAME="p_bank_account_owner_city_1" SIZE="30" MAXLENGTH="40" VALUE="<?php echo $_SESSION['home_palate']; ?>" ></TD>
</TR>
</TABLE>
<hr size="3" class=BoxActiveColor><p class="input_level" style="margin-top: 7"><font class=GroupText>Abnormal billing address: </ font>
<br> <font Mailings class=IntroText> we normally send to the person who subscribes. The following fields to fill, but the invoices you have sent to someone else, as father, mother or sponsor. <br> Note 1: Please enter only different names or address information. <br> Note 2: What you enter here applies to all bills, not just where you register.</font>
<TABLE  cellspacing="2" cellpadding="5">
<TR>
<TD><font class=ItemPrompt>Name</font></TD>
<TD><INPUT class="input_txt" TYPE="text" NAME="p_dbtr_name_1" SIZE="30" MAXLENGTH="80" ></TD>

<TD><font class=ItemPrompt>Email</font></TD>
<TD><INPUT class="input_txt" TYPE="text" NAME="p_dbtr_email_1" SIZE="30" MAXLENGTH="50" ></TD>
</TR>
<TR>
<TD><font class=ItemPrompt>Street</font></TD>
<TD><INPUT class="input_txt" TYPE="text" NAME="p_dbtr_street_1" SIZE="30" MAXLENGTH="50" ></TD>
<TD><font class=ItemPrompt>House number</font></TD>
<TD><INPUT class="input_txt" TYPE="text" NAME="p_dbtr_house_number_1" SIZE="30" MAXLENGTH="10" ></TD>
</TR>
<TR>
<TD><font class=ItemPrompt>Postcode</font></TD>
<TD><INPUT class="input_txt" TYPE="text" NAME="p_dbtr_zipcode_1" SIZE="30" MAXLENGTH="20" ></TD>
<TD><font class=ItemPrompt>Location</font></TD>

<TD><INPUT class="input_txt" TYPE="text" NAME="p_dbtr_city_1" SIZE="30" MAXLENGTH="50" ></TD>
</TR>
</TABLE>
<hr size="3" class=BoxActiveColor><p class="input_level" style="margin-top: 7"><font class=GroupText>Note:</font>
<TABLE >
<TR>
<TD valign="top" class="input_level"><font class=IntroText>Would you like to add?</font></TD>
<td>
<TEXTAREA class="input_txt"NAME="p_remark" ROWS=3 COLS=60 class=ItemArea>

</TEXTAREA>
</td>
</TR>
</TABLE>

                   </div>
        		<br/>
        		<br/>
        		<br/>
        		<br/>
        <div class="content_body" align="left">
        <input size="30"  class="art-button" type="submit" name="register5" value="Regiser"/>
        <a href="../client/index.php"><input size="30"  class="art-button" type="button" name="Cancel" value="Cancel"/></a>
        </div>
        <div class="content_body" align="left">
        
        </div>
        </form>
        <?php
	  require_once('../../template/footer.php');
	  ?>
