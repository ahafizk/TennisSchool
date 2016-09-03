<?php
//print_r($record);
require_once('../../model/financial/Rfinancial.php');
$rfinancial = new Rfinancial();

	$page = $_GET['page'];
	$limit = $_GET['rows']; 
	$sidx=0;
 	$sidx = $_GET['sidx'];
	$sord = $_GET['sord']; 
	if(!strcasecmp($sord,''))$sord = 'asc';
	if(!$sidx) $sidx =1;
	
	
	
	//$count = $rstudent->get_total_temp_schedule();
	$count = $rfinancial->get_total_financial();
	// calculate the total pages for the query showReport()
  	if( $count > 0 ) 
  	{ 
     	$total_pages = ceil($count/$limit); 
	 
  	} 
  	else 
   	{
      $total_pages = 0; 
   	}
	// if for some reasons the requested page is greater than the total // set the requested page to total page 
	if ($page > $total_pages) $page=$total_pages; 
 	
	// calculate the starting position of the rows 
 	$start = $limit*$page - $limit; 
 	// if for some reasons start position is negative set it to 0 // typical case is that the user type 0 for the requested page 
 	if($start <0) $start = 0; 
 	//$start = 1;
	// the actual query for the grid data 
 	 					//showReport(between start and end )
	$r .="s = ".$start."end=".($start+$limit);
 	//$result = $rstudent->get_temp_shcedule($start,($start+$limit),$sidx ,$sord);
	$result = $rfinancial->get_payment_record($start,($start+$limit),$sidx ,$sord);
	$totalSelected = count($result['payment_id']); //number of records return from start and end
	//$fp = fopen("fi.txt","w");
	//fwrite($fp,$totalSelected);
   // we should set the appropriate header information 
    if ( stristr($_SERVER["HTTP_ACCEPT"],"application/xhtml+xml") ) 
  	{
    	  header("Content-type: application/xhtml+xml;charset=utf-8"); 
   	} 
   	else 
    { 
	       header("Content-type: text/xml;charset=utf-8"); 
	 } 
  	echo "<?xml version='1.0' encoding='utf-8'?>"; 
  	echo "<rows>"; 
  	echo "<page>".$page."</page>"; 
  	echo "<total>".$total_pages."</total>"; 
  	echo "<records>".$count."</records>"; 
  	$amount=0;
  	$tax=0;
  	$total=0;
	//$fp = fopen('test.txt','w+');
	
  	// be sure to put text data in CDATA 
  	for($i=0;$i<$totalSelected;$i++)
	{ 
  		//$amount+=$row['amount'];
  		//$tax+=$row['tax'];
  		//$total+=$row['total'];
  		echo "<row id='". $start."'>"; 
		echo "<cell><![CDATA[". $result['initial'][$i]."]]></cell>";
		
		echo "<cell><![CDATA[". $result['call_name'][$i]."]]></cell>";
		echo "<cell><![CDATA[". $result['middle_name'][$i]."]]></cell>";
		echo "<cell><![CDATA[". $result['last_name'][$i]."]]></cell>";
		echo "<cell><![CDATA[". $result['payment_id'][$i]."]]></cell>";
		echo "<cell><![CDATA[". $result['amount'][$i]."]]></cell>";
		echo "<cell><![CDATA[". $result['pay_date'][$i]."]]></cell>";
		echo "<cell><![CDATA[". $result['payment_type'][$i]."]]></cell>";
		echo "</row>";
		$start++;
   }//end of while 
   
   echo "</rows>";
   
?>