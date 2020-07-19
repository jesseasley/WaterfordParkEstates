<?php
include "includes/functions.php";
include "includes/header.php";

if (valueOf("request", "sendButton") == "Send")
{
	$body = "Sent by: " . valueOf("post", "nameText") . "<br><br>";
	$body .= "Their email address: " . valueOf("post", "emailText") . "<br><br>";
	$body .= "Their message: ". valueOf("post", "bodyTextArea");
	SendSingleEmail(valueOf("get", "memberID"), valueOf("post", "subjectText"), $body);
	$body = "<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" height=\"260\">";
	$body .= "<tr height=20>";
	$body .= "	<td colspan=2></td>";
	$body .= "</tr>";
	$body .= "<tr>";
	$body .= "	<td></td>";
	$body .= "	<td class=\"text\" valign=top align=left>";
	$body .= "		<b>Thanks for your comments.";
	$body .= "		<br><br>";
	$body .= "		Please click <a href=\"default.php\">here</a> to return to the main page.</b>";
	$body .= "	</td>";
	$body .= "</tr>";
	$body .= "</table>";
	echo $body;
}
else
{
	$body = "<form method=\"POST\" action=\"\" id=\"message\" name=\"message\">\n";
	$body .= "	<table border=\"0\" width=\"660\" cellspacing=\"0\" cellpadding=\"0\">\n";
	$body .= "		<tr height=20>\n";
	$body .= "			<td colspan=3></td>\n";
	$body .= "		</tr>\n";
	$body .= "		<tr>\n";
	$body .= "			<td width=1></td>\n";
	$body .= "			<td width=1></td>\n";
	$body .= "			<td width=\"410\" class=\"sectionheading\">";
	$body .= "				Please enter your comments below and press the Send button.";
	$body .= "			</td>\n";
	$body .= "		</tr>\n";
	$body .= "		<tr>\n";
	$body .= "			<td width=1></td>\n";
	$body .= "			<td width=1></td>\n";
	$body .= "			<td >&nbsp;</td>\n";
	$body .= "		</tr>\n";
	$body .= "		<tr>\n";
	$body .= "			<td width=1></td>\n";
	$body .= "			<td width=1 class=\"smallheading\" align=right valign=top>Name:</td>\n";
	$body .= "			<td class=\"text\">\n";
	$body .= "			<input type=text name=\"nameText\" class=\"text\" size=\"90\" value=\"" . valueOf("cookie", "firstnameText") . " " . valueOf("cookie", "lastnameText") . "\"></td>\n";
	$body .= "		</tr>\n";
	$body .= "		<tr>\n";
	$body .= "			<td width=1></td>\n";
	$body .= "			<td width=1 class=\"smallheading\" align=right valign=top>Email:</td>\n";
	$body .= "			<td class=\"text\">\n";
	$body .= "			<input type=text name=\"emailText\" class=\"text\" size=\"90\" value=\"" . valueOf("cookie", "emailText") . "\"></td>\n";
	$body .= "		</tr>\n";
	$body .= "		<tr>\n";
	$body .= "			<td width=1></td>\n";
	$body .= "			<td width=1 class=\"smallheading\" align=right valign=top>Subject:</td>\n";
	$body .= "			<td class=\"text\">\n";
	$body .= "			<input type=text name=\"subjectText\" class=\"text\" size=\"90\" value=\"" . valueOf("get", "subject") . "\"></td>\n";
	$body .= "		</tr>\n";
	$body .= "		<tr>\n";
	$body .= "			<td width=1></td>\n";
	$body .= "			<td width=1 align=right valign=top class=\"smallheading\">Message:</td>\n";
	$body .= "			<td class=\"text\">\n";
	$body .= "			<textarea rows=\"12\" name=\"bodyTextArea\" cols=\"65\" class=\"text\"></textarea></td>\n";
	$body .= "		</tr>\n";
	$body .= "		<tr>\n";
	$body .= "			<td width=10></td>\n";
	$body .= "			<td width=1></td>\n";
	$body .= "			<td width=\"85%\">&nbsp;</td>\n";
	$body .= "		</tr>\n";
	$body .= "		<tr>\n";
	$body .= "			<td width=1></td>\n";
	$body .= "			<td width=1></td>\n";
	$body .= "			<td width=\"475\" align=\"right\">\n";
	$body .= "			<input type=\"hidden\" value=\"Send\" name=\"sendButton\">\n";
	$body .= "			<a href=\"javascript:message.submit()\" id=\"button\">Send</a>\n";
	$body .= "			</td>\n";
	$body .= "		</tr>\n";
	$body .= "	</table>\n";
	$body .= "</form>\n";
	$body .= "<br><br>";
	echo $body;
}

include "includes/footer.php"

?>