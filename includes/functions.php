<?php
$sEmail = "Jordan.Low@goodwintx.com;Denny.Rice@DentonCMG.com";
//$sEmail = "jess.easley@waterfordparkestates.com";
//$sEmail = "jess@jesseasley.com";
$CC = "Cc: Jess Easley <jess.easley@waterfordparkestates.com>\r\n";
$CC .= "Cc: Randy Moody <RANMAN0807@verizon.net>\r\n";
$CC .= "Cc: Chris Custard <chriscustard21@msn.com>\r\n";
$CC .= "Cc: Michael Devese <mdevese@verizon.net>\r\n";
$CC .= "Cc: Dawn Garber <dgarber4@hotmail.com>\r\n";
$CC .= "Cc: Martin Bernstein <Mab.tab@verizon.net>\r\n";
$CC = "";

function valueOf($class, $variable)
{
	$return = "";

	switch ($class)
	{
		case "cookie":
			if (isset($_COOKIE[$variable]))
				$return = $_COOKIE[$variable];
			break;
		case "post":
			if (isset($_POST[$variable]))
				$return = $_POST[$variable];
			break;
		case "get":
			if (isset($_GET[$variable]))
				$return = $_GET[$variable];
			break;
		case "request":
			if (isset($_REQUEST[$variable]))
				$return = $_REQUEST[$variable];
			break;
		case "server":
			if (isset($_SERVER[$variable]))
				$return = $_SERVER[$variable];
			break;
		default:
			$return = "";
	}

	return $return;
}

function SendEmail($sFrom, $sSubject, $sBody, $sSendToGroup)
{

	global $CC, $sEmail;
	
	$headers = "From: " . $sFrom . "\r\n"; 
	$headers .= "MIME-Version: 1.0\nContent-type: text/html; charset=iso-8859-1\r\n";
	
	if ($sSendToGroup == "true")
		$headers .= $CC;
	else
		$headers .= "Bcc: Jess Easley <jess.easley@waterfordparkestates.com>\r\n";
	
	$send_to = $sEmail;
	if (valueOf("server", "SERVER_NAME") != "localhost")
		if (!(mail($send_to, $sSubject, $sBody, $headers)))
			echo "Error!";
}	

function PageUpdateEmail($sSubject, $sBody)
{
	$headers = "From: website@waterfordparkestates.com\r\n"; 
	$headers .= "MIME-Version: 1.0\nContent-type: text/html; charset=iso-8859-1\r\n";
	$send_to = "Jess Easley <jess.easley@waterfordparkestates.com>";

	if (valueOf("server", "SERVER_NAME") != "localhost")
		if (!(mail($send_to, $sSubject, $sBody, $headers)))
			echo "Error!";
}

function PageUpdateCustomerEmail($eMail, $sSubject, $sBody)
{
	$headers = "From: admin@waterfordparkestates.com\r\n"; 
	$headers .= "MIME-Version: 1.0\nContent-type: text/html; charset=iso-8859-1\r\n";
	$send_to = $eMail;

	if (valueOf("server", "SERVER_NAME") != "localhost")
		if (!(mail($send_to, $sSubject, $sBody, $headers)))
			echo "Error!";
}

function SendSingleEmail($sEmail, $sSubject, $sBody)
{
	$headers = "From: homeowner@waterfordparkestates.com\r\n"; 
	$headers .= "MIME-Version: 1.0\nContent-type: text/html; charset=iso-8859-1\r\n";
	$headers .= "Bcc: Jess Easley <jess@jesseasley.com>\r\n";

//$sEmail = "Jess Easley <jess@jesseasley.com>";

	if (valueOf("server", "SERVER_NAME") != "localhost")
		if (!(mail($sEmail, $sSubject, $sBody, $headers)))
			echo "Error!";
}

function readTextFile($sFile){
	$mline = "";
	if (file_exists($sFile)){
		$f = fopen($sFile, "r");
		while ( $line = fgets($f, 1000) ) 
			$mline .= $line;
	}
	return $mline;
}

function writeTextFile($sFile, $contents){
	$fp = fopen($sFile, "w");  
	fwrite($fp, $contents);  
	fclose($fp);  
}
?>