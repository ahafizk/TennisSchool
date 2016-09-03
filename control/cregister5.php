<?php
require_once('../../model/register/Ruser_agreement.php');
require_once('../../common/forwarding.php');
session_start();
$ragreement = new Ruser_agreement();
if(isset($_POST['register5'])&&!strcasecmp($_POST['register5'],'Regiser'))
{
	$_SESSION['register5'] = 'Register';
	$_SESSION['p_agree_conditions_1']= $provision_accept = $_POST['p_agree_conditions_1'];
	$_SESSION['p_agree_electronic_com_1'] =$email_accept= $_POST['p_agree_electronic_com_1'];
	$_SESSION['p_collection_allowed_1'] =$debit_collection= $_POST['p_collection_allowed_1'];
	$_SESSION['p_bank_account_number_1'] = $bank_acc_no= $_POST['p_bank_account_number_1'];
	$_SESSION['p_bank_account_owner_name_1'] = $location = $_POST['p_bank_account_owner_name_1'];
	$_SESSION['p_dbtr_name_1'] = $other_name= $_POST['p_dbtr_name_1'];
	$_SESSION['p_dbtr_email_1'] = $email= $_POST['p_dbtr_email_1'];
	$_SESSION['p_dbtr_street_1'] = $street= $_POST['p_dbtr_street_1'];
	$_SESSION['p_dbtr_house_number_1'] =$house_num= $_POST['p_dbtr_house_number_1'];
	$_SESSION['p_dbtr_zipcode_1'] =$post_code= $_POST['p_dbtr_zipcode_1'];
	$_SESSION['p_dbtr_city_1'] =$other_location= $_POST['p_dbtr_city_1'];
	$_SESSION['p_remark'] = $note = $_POST['p_remark'];
	forward('register6.php');
	//$ragreement->insert_agreement($user_id, $provision_accept,$email_accept,$debit_collection,$bank_acc_no,$location,$other_name,$email,$street,$house_num,$post_code,$other_location,$note);
	
}
?>