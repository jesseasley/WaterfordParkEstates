<?php
include "includes/functions.php";

if (isset($_REQUEST["submitButton"])) 
{
	if ($_REQUEST["submitButton"] == "Submit")
	{
		$sBody = "First name(s):   " . valueOF("post", "firstnameText") . "\r\n";
		$sBody .= "Last name:       " . valueOF("post", "lastnameText") . "\r\n";
		$sBody .= "Street address:  " . valueOF("post", "addressText") . "\r\n";
		$sBody .= "Email:           " . valueOF("post", "emailText") . "\r\n";
		$sBody .= "Home phone:      " . valueOF("post", "homePhoneText") . "\r\n";
		$sBody .= "Work phone:      " . valueOF("post", "workPhoneText") . "\r\n";
		$sBody .= "Cell phone:      " . valueOF("post", "cellPhoneText") . "\r\n";
		$sBody .= "Preferred phone: " . valueOF("post", "preferredphoneSelect");
		SendEmail ("homeowner@waterfordparkestates.com", "Profile Update for " . valueOF("post", "addressText"), $sBody, "false");
		$f = setcookie("firstnameText", valueOF("post", "firstnameText"), time()+60*60*24*30*12*5);
		$l = setcookie("lastnameText", valueOF("post", "lastnameText"), time()+60*60*24*30*12*5);
		$a = setcookie("addressText", valueOF("post", "addressText"), time()+60*60*24*30*12*5);
		$e = setcookie("emailText", valueOF("post", "emailText"), time()+60*60*24*30*12*5);
		$h = setcookie("homePhoneText", valueOF("post", "homePhoneText"), time()+60*60*24*30*12*5);
		$w = setcookie("workPhoneText", valueOF("post", "workPhoneText"), time()+60*60*24*30*12*5);
		$c = setcookie("cellPhoneText", valueOF("post", "cellPhoneText"), time()+60*60*24*30*12*5);
		$p = setcookie("preferredphoneSelect", valueOF("post", "preferredphoneSelect"), time()+60*60*24*30*12*5);
include "includes/header.php";

//		$body = $f . $_COOKIE["firstnameText"] . "<br>" . $l . $_COOKIE["lastnameText"] . "<br>" . $a . $_COOKIE["addressText"] . "<br>" . $e . $_COOKIE["emailText"] . "<br>" . $h . $_COOKIE["homePhoneText"] . "<br>" . $w . $_POST["workPhoneText"] . "<br>" . $c . $_COOKIE["cellPhoneText"] . "<br>" . $p . $_COOKIE["preferredphoneSelect"] . "<br>";
//$body = "*" . setcookie("workPhoneText", $_POST["workPhoneText"], time()+60*60*24*30*12*5) . "*" . $_POST["workPhoneText"] . "* = *" . $_COOKIE["workPhoneText"] . "*<br>";
		$body = "<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" height=\"260\">";
		$body .= "	<tr>";
		$body .= "		<td width=10></td>";
		$body .= "		<td class=\"standardtextcaption\" valign=top>";
		$body .= "			We apreciate you helping us stay up to date.";
		$body .= "			<br><br>";
		$body .= "			Please click <a href=\"default.php\">here</a> to return to the main page.";
		$body .= "		</td>";
		$body .= "		<td width=10></td>";
		$body .= "		<br>";
		$body .= "	</tr>";
		$body .= "</table>";
		echo $body;
	}

}
elseif (1==1)
{
include "includes/header.php";
	$body = "<form method=\"POST\" action=\"profile.php\">";
	$body .= "	<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" height=\"260\">";
	$body .= "		<tr>";
	$body .= "			<td width=10></td>";
	$body .= "			<td class=\"standardtext\" colspan=\"2\">";
	$body .= "				We'd like to keep you up to date on what's going on, but we need your help. Please enter your information and press the \"Submit\" button below.";
	$body .= "				<br><br>";
	$body .= "			</td>";
	$body .= "			<td width=20></td>";
	$body .= "			<br>";
	$body .= "		</tr>";
	$body .= "		<tr>";
	$body .= "			<td width=1></td>";
	$body .= "			<td width=\"100\" class=\"standardtextcaption\">First name(s)</td>";
	$body .= "			<td align=\"left\">";
	$body .= "				<input type=\"text\" name=\"firstnameText\" value=\"" . valueOF("cookie", "firstnameText");
	$body .= "\" class=\"standardedittext\">";
	$body .= "			</td>";
	$body .= "			<td width=1></td>";
	$body .= "		</tr>";
	$body .= "		<tr>";
	$body .= "			<td width=1></td>";
	$body .= "			<td class=\"standardtextcaption\">Last name</td>";
	$body .= "			<td align=\"left\">";
	$body .= "				<input type=\"text\" name=\"lastnameText\" value=\"" . valueOF("cookie", "lastnameText");
	$body .= "\" class=\"standardedittext\">";
	$body .= "			</td>";
	$body .= "			<td width=1></td>";
	$body .= "		</tr>";
	$body .= "		<tr>";
	$body .= "			<td width=1></td>";
	$body .= "			<td class=\"standardtextcaption\">Street address</td>";
	$body .= "			<td align=\"left\">";
	$body .= "				<input type=\"text\" name=\"addressText\" value=\"" . valueOF("cookie", "addressText");
	$body .= "\" class=\"standardedittext\">";
	$body .= "			</td>";
	$body .= "			<td width=1></td>";
	$body .= "		</tr>";
	$body .= "		<tr>";
	$body .= "			<td width=1></td>";
	$body .= "			<td class=\"standardtextcaption\">Email</td>";
	$body .= "			<td align=\"left\">";
	$body .= "				<input type=\"text\" name=\"emailText\" value=\"" . valueOF("cookie", "emailText");
	$body .= "\" class=\"standardedittext\">";
	$body .= "			</td>";
	$body .= "			<td width=1></td>";
	$body .= "		</tr>";
	$body .= "		<tr>";
	$body .= "			<td width=1></td>";
	$body .= "			<td class=\"standardtextcaption\">Home phone</td>";
	$body .= "			<td align=\"left\">";
	$body .= "				<input type=\"text\" name=\"homePhoneText\" value=\"" . valueOF("cookie", "homePhoneText");
	$body .= "\" class=\"standardedittext\">";
	$body .= "			</td>";
	$body .= "			<td width=1></td>";
	$body .= "		</tr>";
	$body .= "		<tr> ";
	$body .= "			<td width=1></td>";
	$body .= "			<td class=\"standardtextcaption\">Work phone</td>";
	$body .= "			<td align=\"left\">";
	$body .= "				<input type=\"text\" name=\"workPhoneText\" value=\"" . valueOF("cookie", "workPhoneText");
	$body .= "\" class=\"standardedittext\">";
	$body .= "			</td>";
	$body .= "			<td width=1></td>";
	$body .= "		</tr>";
	$body .= "		<tr>";
	$body .= "			<td width=1></td>";
	$body .= "			<td class=\"standardtextcaption\">Cell phone</td>";
	$body .= "			<td align=\"left\">";
	$body .= "				<input type=\"text\" name=\"cellPhoneText\" value=\"" . valueOF("cookie", "cellPhoneText");
	$body .= "\" class=\"standardedittext\">";
	$body .= "			</td>";
	$body .= "			<td width=1></td>";
	$body .= "		</tr>";
	$body .= "		<tr>";
	$body .= "			<td width=1></td>";
	$body .= "			<td class=\"standardtextcaption\">Preferred phone</td>";
	$body .= "			<td align=\"left\">";
	$body .= "				<select size=\"1\" name=\"preferredphoneSelect\" class=\"standardedittext\">";
	$body .= "					<option ";
	if (valueOF("cookie", "firstnameText") == "Home")
		$body .= " selected ";
	$body .= " value=\"Home\">Home</option>";
	$body .= "					<option ";
	if (valueOF("cookie", "firstnameText") == "Work")
		$body .= " selected ";
	$body .= " value=\"Work\">Work</option>";
	$body .= "					<option ";
	if (valueOF("cookie", "firstnameText") == "Cell")
		$body .= " selected ";
	$body .= " value=\"Cell\">Cell</option>";
	$body .= "				</select>";
	$body .= "			</td>";
	$body .= "			<td width=1></td>";
	$body .= "		</tr>";
	$body .= "		<tr>";
	$body .= "			<td width=1></td>";
	$body .= "			<td colspan=\"2\" align=\"right\">";
	$body .= "				<br>";
	$body .= "				<input type=\"submit\" value=\"Submit\" name=\"submitButton\" class=\"button\">";
	$body .= "			<img src=images/spacer.gif width=135 height=1>";
	$body .= "			</td>";
	$body .= "			<td width=1></td>";
	$body .= "		</tr>";
	$body .= "	</table>";
	$body .= "</form>";
	echo $body;
}

include "includes/footer.php";