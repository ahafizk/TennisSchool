<?php
//require_once('../../lib/calendar/classes/tc_calendar.php');
require_once('../../control/financial/cupdatepayment1.php');
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
    
     <!-- here code goes for calendar -->  
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

	<!-- here code goes for grid data -->    
<link rel="stylesheet" type="text/css" media="screen" href="../../lib/jqGrid_1/themes/basic/grid.css" /> 
<link rel="stylesheet" type="text/css" media="screen" href="../../lib/jqGrid_1/themes/jqModal.css" /> 
<script src="../../lib/jqGrid_1/jquery.jqGrid.js" type="text/javascript"></script> 
<script src="../../lib/jqGrid_1/js/jqModal.js" type="text/javascript"></script> 
<script src="../../lib/jqGrid_1/js/jqDnR.js" type="text/javascript"></script> 
    


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
                <a href="../admin/financialMenu.php">
                <img src="../../images/folder64_leerlingen.png" style="height: 32px;" alt="Student">
                <br> 
                &gt;Financial</a>
                &nbsp;&nbsp;</div>
                <div id="navpos3">
                <img src="../../images/spacer.gif" style="height: 5px; width: 14px;" alt="">
                <a href="#"><img src="../../images/icon64_leerlingen_nw.png" style="height: 32px;" alt=""><br> &gt; List</a>
                &nbsp;&nbsp;</div>
                <div id="navpos4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:history.back()"><img src="../../images/nav_left.png" alt="Terug"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="#"><img src="../../images/uitloggen.png" alt="Uitloggen"></a>
                <br>
                </div>
			</div>
                 
                     <div id="navtitel">
                       <div align="left">Update Payment Status</div>
                    </div>
        		<br/>
                
                  <form name="form1" action="processupdate.php" method="post">
                   <div align="left">
                  <div id="title_1" align="center" style="width: 150px" >Select Student</div>
                  </div>
                  <div class="content_body" align="left">
                  <table cellpadding="5" cellspacing="2">
                  <tr>
                  <td class="input_level">User Id:</td>
                  <td class="input_txt"><?php echo $record['user_id'][0];?></td>
                  </tr>
                  <tr>
                  <td class="input_level">Payment Id:</td>
                  <td class="input_txt"><?php echo $record['payment_id'][0];?></td>
                  </tr>
                  <tr>
                  <td class="input_level">Payment Status:</td>
                  <td class="input_txt"><?php echo $record['payment_status'][0];?></td>
                  </tr>
                  <tr>
                  <td class="input_level">Payment Amount:</td>
                  <td class="input_txt"><?php echo $record['amount'][0];?></td>
                  </tr>
                  <tr>
                  <td class="input_level">Payment Id:</td>
                  <td class="input_txt"><?php echo $record['pay_date'][0];?></td>
                  </tr>
                  </table>
                  </div>
                  
                  <br/>
                  <p align="left" class="input_level">This update will set the payment status = ok. Do you want to change the amount?</p>
                  
                  <input type="hidden" id="ab" name="status" value="<?php echo $record['payment_status'][0]; ?>" />
                  <input type="hidden" id="bc" name="payment_id" value="<?php echo $record['payment_id'][0];?>" />
                  <input type="hidden" id="cd" name="user_id" value="<?php echo $record['user_id'][0];?>" />
                  
                  <div class="content_body" align="left">
                  <table cellpadding="5" cellspacing="2">
                  <tr>
                  <td class="input_level">Amount:</td>
                  <td ><input class="input_txt" type="text" name="amount" value="<?php echo $record['amount'][0]; ?>" /></td>
                  </tr>
                  </table>
                  </div>
        <div class="content_body" align="left">
        <input class="art-button" type="submit" name="update" value="Update"/>
        
        <a href="../admin/financialMenu.php"><input class="art-button" type="button" name="Cancel" value="Cancel"/></a>
        </div>
                  </form>

        <?php
	  require_once('../../template/footer.php');
	  ?>
