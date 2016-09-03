<?php
// Fill up array with names
require_once('../../model/authorization/Rauthorization.php');

//get the q parameter from URL
$q=$_GET["q"];

//lookup all hints from array if length of q>0
if (strlen($q) > 0)
  {
  $hint="";
  /*for($i=0; $i<count($a); $i++)
    {
    if (strtolower($q)==strtolower(substr($a[$i],0,strlen($q))))
      {
      if ($hint=="")
        {
        $hint=$a[$i];
        }
      else
        {
        $hint=$hint." , ".$a[$i];
        }
      }
    }*/
	$rauth = new Rauthorization();
	$ret = $rauth->get_user_name($q);
	if($ret>0)$hint = "<p style=\"color:#F00\">User Name Not Available!</p>";
	else $hint = "<p style=\"color:#63741E\">User Name Available</p>";
  }

// Set output to "no suggestion" if no hint were found
// or to the correct values
if ($hint == "")
  {
  $response="no suggestion";
  }
else
  {
  $response=$hint;
  }

//output the response
echo $response;
?>