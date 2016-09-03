<?php
require_once('../../db/Database.php');
if (getenv('HTTP_USER_AGENT') == 'icepay.eu'){

    $status = $_REQUEST['Status'];
    $statuscode = $_REQUEST['StatusCode'];
    $merchant = $_REQUEST['Merchant'];
    $order_id = $_REQUEST['OrderID'];
    $payment_id = $_REQUEST['PaymentID'];
    $reference = $_REQUEST['Reference'];
    $transactionid = $_REQUEST['TransactionID'];
    $consumername = $_REQUEST['ConsumerName'];
    $accountnumber = $_REQUEST['ConsumerAccountNumber'];
    $city = $_REQUEST['ConsumerCity'];
    $checksum = $_REQUEST['Checksum'];
	$ic_amount  = $_REQUEST['Amount'];
	$ic_currency  = $_REQUEST['Currency'];
	$ic_duration  = $_REQUEST['Duration'];
	$ic_consumeripaddres  = $_REQUEST['ConsumerIPAddress'];
	$ic_separator = "|";

    $ic_merchant_id = "11012";
    $ic_password = "Az6x9M7Dcu3HEg4t5J8Skr8R6Kay9PLd75ZwTe3n";
    $date = date("Y-m-d");


	$query = "select * from user_payment where payment_id = \"$order_id\"  and payment_status != \"ERR\"";
	
	 $db = new Database();
	
	$ret = $db->process_query($query);
	
	if(mysql_num_rows($ret) == 1){
		$rs = mysql_fetch_assoc($query_result);
		
		$tbl_type = $rs['payment_type'];
		$tbl_order_id = $rs['payment_id'];
		$tbl_client_id = $rs['user_id'];
		$tbl_bank = $rs['payment_bank'];
		$tbl_amount = $rs['payment_amount'] ;
		$tbl_status = $rs['payment_status'];
		$tbl_reference = $rs['payment_reference'];
		
		
		if($order_id == $tbl_order_id){
			$ic_checksum = SHA1($ic_password.$ic_separator.$ic_merchant_id.$ic_separator.$total_amount.$ic_separator.$ic_cur.$ic_separator.$ic_order_id.$ic_separator.$ic_paymentmethod.$ic_separator.$ic_issuer);
			
			$ic_checksum = SHA1("$ic_password|$ic_merchant_id|$status|$statuscode|$tbl_order_id|$payment_id|$reference|$transactionid|$ic_amount|$ic_currency|$ic_duration|$ic_consumeripaddres");
			
			if($ic_checksum == $checksum && $tbl_reference == $reference){
				if($status == "OK"){
							
							
							$query = "update user_payment set 
										  payment_status = \"OK\", 
										  payment_date = \"$date\", 
										  payment_ic_id = \"$transactionid\"  
									  where
										  payment_id = \"$tbl_order_id\"";
							$db->process_query($query);
				}			

				if($status == "OPEN"){
					$query = "update user_payment set payment_status = \"OPEN\" where payment_id = \"$tbl_order_id\"";
					process_query($query);
				}

				if($status == "ERR"){
					
					$query = "update user_payment set payment_status = \"ERR\" where payment_id = \"$tbl_order_id\"";
					$db->process_query($query); 
				}
			}
		}
	}
}
else{
    return "TRYING TO HACK ME OR WHAT?";
}
?>