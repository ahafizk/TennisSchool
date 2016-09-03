<?php
require_once('forwarding.php');
session_start();
$_SESSION['USER'] = "";
$_SESSION['password'] = "";
$_SESSION['auths']=0;
forward('/sport/view/register/index.php');
?>