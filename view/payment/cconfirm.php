<?php
require_once('../../db/Database.php');
require_once('../../common/forwarding.php');
if(isset($_POST['user_id']))
{
	
	$user_id = $_POST['user_id'];
	$country = $_POST['country'];
	$language = $_POST['language'];
	$currency = $_POST['currency'];
	if(is_numeric($_POST['amount']))
	{
		$amount = $_POST['amount']*100; //get the cents from euro
	}
	else 
	{
		forward("../../view/payment/search.php");
	}
	
	
	$pay_meth = $_POST['payment_type'];
	$issuer = $_POST['IC_Issuer'];
	$description = $_POST['description'];
	
	$merchantid = 11012;
	$secret = "Az6x9M7Dcu3HEg4t5J8Skr8R6Kay9PLd75ZwTe3n";
	$orderid = time();//each time it should be different
	
	$chk = sha1("$secret|$merchantid|$amount|$currency|$orderid|$pay_meth|$issuer");
    
	$columns = array(
			'payment_id'=> "$orderid",
    		'user_id'=>$user_id,
			'issuer'	=> "$issuer",
			'country'=>"$country",
			'language'=>"$language",
			'currency'=>"$currency",
			'amount'=>"$amount",
			"description"=>"$description",
			"pay_date"=>date('Y-m-d'),
			'payment_type'	=> "$pay_meth",
			'payment_reference'=>"RefTESTk6QBr",
			'payment_status'=> "INIT" 
		);
	$db = new Database();
	$db->insert('user_payment', $columns); // insert into the table 
	
	$IC_URLCompleted	= "http://www.therandomshiz.com/sport/view/payment/ok_page.php";
	$IC_URLError		= "http://www.therandomshiz.com/sport/view/payment/error_page.php";
	
?>

<html>
<body>
<form name = "payment_form" method='POST' action='https://pay.icepay.eu/checkout.aspx'>
	<input type='hidden' name='ic_paymentMethod' value='<?php echo $pay_meth;?>'>
	<input type='hidden' name='ic_issuer' value='<?php echo $issuer;?>'>
	<input type='hidden' name='ic_merchant' value='<?php echo $merchantid; ?>'>
	<input type='hidden' name='ic_amount' value='<?php echo $amount;?>'>
	<input type='hidden' name='ic_currency' value='<?php echo $currency;?>'>
	<input type='hidden' name='ic_language' value='<?php echo $language; ?>'>
	<input type='hidden' name='ic_country' value='<?php echo $country; ?>'>
	<input type='hidden' name='ic_orderid' value='<? echo $orderid; ?>'>
	<input type='hidden' name='ic_reference' value='RefTESTk6QBr'>
	<input type='hidden' name='ic_description' value='<?php echo $description; ?>'>
	<input type='hidden' name='ic_checksum' value='<? echo $chk; ?>'>
	<input type='hidden' name='ic_urlcompleted' value='<?php echo $IC_URLCompleted;?>'>
	<input type='hidden' name='ic_urlerror' value='<?php echo $IC_URLError;  ?>'>
    
	<input type='hidden' name='ic_responsetype' value='REDIRECT'>
</form>
<script language="JavaScript" type="text/javascript">
	document.payment_form.submit();
</script>
</body>
</html>
<?php
	}

?>