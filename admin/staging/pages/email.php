<?php
include "../includes/functions.php";

	$body = "Sent by: " . valueOf("post", "nameText") . "<br><br>";
	$body .= "Their email address: " . valueOf("post", "emailText") . "<br><br>";
	$body .= "Their message: ". valueOf("post", "bodyTextArea");
	SendSingleEmail(valueOf("post", "memberID"), valueOf("post", "subjectText"), $body);
	$body = "<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" height=\"260\">";
	$body .= "<tr height=12>";
	$body .= "	<td colspan=2></td>";
	$body .= "</tr>";
	$body .= "<tr>";
	$body .= "	<td width=12></td>";
	$body .= "	<td class=\"standardtextcaption\" valign=top align=left width=100%>";
	$body .= "		<b>Thanks for your comments.";
	$body .= "		<br><br>";
	$body .= "		Please click <a href=\"#\" onclick=\"pageChange('home.html');\">here</a> to return to the main page.</b>";
	$body .= "	</td>";
	$body .= "</tr>";
	$body .= "</table>";
	echo $body;

?>