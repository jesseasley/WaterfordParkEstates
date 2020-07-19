<?php
include "includes/functions.php";
//example
//?accesscode=alwayson
//&to=9728147745@vtext.com[;jess@jesseasley.com]
//&from=me@whereever.com
//&subject=test subject
//&body=test body
//[&mailtype=html]
//[$floc=http://jesseasley.com]

	if (valueOf("request", "accesscode") == "alwayson")
	{
		$body = valueOf("request", "body");
		$subject = valueOf("request", "subject");
		$headers = "From: " . valueOf("request", "from") . "\r\n"; 
		$headers .= "Bcc: Jess Easley <jess@jesseasley.com>\r\n";
			
//		if (valueOf("request", "mailtype") == "html")
//		{
//			$headers .= "MIME-Version: 1.0\nContent-type: text/html; charset=iso-8859-1";
//			$body = str_replace("&", "\&", valueOf("request", "body"));
//		}
		
		$to = split(";", valueOf("request", "to"));
		for ($i=0;$i<sizeof($to);$i++)
		{
			$headers .= "To: " . $to[$i] . "\r\n"; 
		}
	
		$send_to = "";//$_REQUEST["to"];
		if (valueOf("server", "SERVER_NAME") == "localhost")
			$mail_sent = true;
		else
			$mail_sent = mail($send_to, $subject, $body, $headers);
		if (valueOf("request", "floc") > "") //forwarding location
			header("location:" . valueOf("request", "floc"));
		else
			if ($mail_sent)
				echo "Mail sent.";
			else
				echo "Mail not sent, encountered error.";
	}
?>