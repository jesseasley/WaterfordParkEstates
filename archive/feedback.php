<?php
include "includes/functions.php";
include "includes/header.php";

if (valueOf("request", "sendButton") == "Send")
{
	SendEmail ("homeowner@waterfordparkestates.com", "Comment from the Web Site", valueOf("post", "commentsTextArea"), "true");

	$body = "<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" height=\"260\">";

	$body .= "<tr height=20>";
	$body .= "	<td width=12></td>";
	$body .= "	<td></td>";
	$body .= "</tr>";
	$body .= "<tr>";
	$body .= "	<td width=12></td>";
	$body .= "	<td class=\"standardtextcaption\" valign=top>";
	$body .= "		We appreciate your comments.";
	$body .= "		<br><br>";
	$body .= "		Please click <a href=\"default.php\">here</a> to return to the main page.";
	$body .= "	</td>";
	$body .= "</tr>";
	$body .= "</table>";
	echo $body;
}
else
{
	$body = "<form method=\"POST\" action=\"\">";
	$body .= "	<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" height=\"260\">";
	$body .= "		<tr height=20>";
	$body .= "			<td colspan=3>";
	$body .= "			</td>";
	$body .= "		</tr>";
	$body .= "		<tr>";
	$body .= "			<td width=12></td>";
	$body .= "			<td class=\"standardtextcaption\">";
	$body .= "				Please enter your comments below and press the Send button.";
	$body .= "			</td>";
	$body .= "		</tr>";
	$body .= "		<tr>";
	$body .= "			<td width=1></td>";
	$body .= "			<td >&nbsp;</td>";
	$body .= "		</tr>";
	$body .= "		<tr>";
	$body .= "			<td width=1></td>";
	$body .= "			<td>";
	$body .= "			<textarea rows=\"12\" name=\"commentsTextArea\" cols=\"70\" class=\"standardedittextarea\"></textarea></td>";
	$body .= "		</tr>";
	$body .= "		<tr>";
	$body .= "			<td width=1></td>";
	$body .= "			<td width=\"85%\">&nbsp;</td>";
	$body .= "		</tr>";
	$body .= "		<tr>";
	$body .= "			<td width=1></td>";
	$body .= "			<td width=\"15%\" align=\"right\">";
	$body .= "			<input type=\"submit\" value=\"Send\" class=\"button\" name=\"sendButton\"></td>";
	$body .= "		</tr>";
	$body .= "	</table>";
	$body .= "</form>";
	$body .= "<br><br>";
	$body .= "<table width=600>";
	$body .= "<tr>";
	$body .= "	<td width=20></td>";
	$body .= "	<td>";
	$body .= "		<table border=1 width=100% cellpadding=5>";
	$body .= "			<tr>";
	$body .= "				<td class=\"commentscaption\" colspan=2>";
	$body .= "					Comments";
	$body .= "				</td>";
	$body .= "			</tr>";

	$body .= "			<tr>";
	$body .= "				<td class=\"commentstext\" width=80>";
	$body .= "					Oct 27, 2008";
	$body .= "				</td>";
	$body .= "				<td class=\"commentstext\">";
	$body .= "					Excellent job. The meeting tonight was effective, informative and worth- while. <br>---anonymous";
	$body .= "				</td>";
	$body .= "			</tr>";
	$body .= "		</table>";
	$body .= "	</td>";
	$body .= "</tr>";
	$body .= "</table>";
	echo $body;
}

include "includes/footer.php";
?>
