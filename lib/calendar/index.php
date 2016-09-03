<?php
require_once('classes/tc_calendar.php');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

<title>TriConsole - Programming, Web Hosting, and Entertainment Directory</title>


<link href="calendar.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="calendar.js"></script>


<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>


                    <td><?php
	  $myCalendar = new tc_calendar("date1", true);
	  $myCalendar->setIcon("./images/iconCalendar.gif");
	  //$myCalendar->setDate(19, 6, 2009);
	  $myCalendar->setPath("./");
	  $myCalendar->setYearInterval(2000, 2015);
	  $myCalendar->dateAllow('2008-05-13', '2010-03-01');
	  //$myCalendar->setHeight(350);	  
	  //$myCalendar->autoSubmit(true, "form1");
	  $myCalendar->writeScript();
	  ?></td>
                    
               
               
</table>
</body>
</html>
