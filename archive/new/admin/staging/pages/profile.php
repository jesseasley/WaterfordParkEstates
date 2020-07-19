<?php
include "../includes/functions.php";
$sBody .= "Name:       " . valueOF("post", "nameText") . "\r\n";
$sBody .= "Street address:  " . valueOF("post", "addressText") . "\r\n";
$sBody .= "Email:           " . valueOF("post", "emailText") . "\r\n";
$sBody .= "Home phone:      " . valueOF("post", "homePhoneText") . "\r\n";
$sBody .= "Work phone:      " . valueOF("post", "workPhoneText") . "\r\n";
$sBody .= "Cell phone:      " . valueOF("post", "cellPhoneText") . "\r\n";
$sBody .= "Preferred phone: " . valueOF("post", "preferredphoneSelect");
SendEmail ("homeowner@waterfordparkestates.com", "Profile Update for " . valueOF("post", "addressText"), $sBody, "false");
$l = setcookie("nameText", valueOF("post", "nameText"), time()+60*60*24*30*12*5);
$a = setcookie("addressText", valueOF("post", "addressText"), time()+60*60*24*30*12*5);
$e = setcookie("emailText", valueOF("post", "emailText"), time()+60*60*24*30*12*5);
$h = setcookie("homePhoneText", valueOF("post", "homePhoneText"), time()+60*60*24*30*12*5);
$w = setcookie("workPhoneText", valueOF("post", "workPhoneText"), time()+60*60*24*30*12*5);
$c = setcookie("cellPhoneText", valueOF("post", "cellPhoneText"), time()+60*60*24*30*12*5);
$p = setcookie("preferredphoneSelect", valueOF("post", "preferredphoneSelect"), time()+60*60*24*30*12*5);

?>
<table border="0" width="100%" cellspacing="0" cellpadding="0" height="260">
	<tr height="12"><td /></tr>
	<tr>
		<td width=12></td>
		<td class="standardtextcaption" valign=top width="100%">
			We apreciate you helping us stay up to date.
			<br><br>
			Please click <a href="#" onclick="pageChange('home.html');">here</a> to return to the main page.
		</td>
		<td width=10></td>
		<br>
	</tr>
</table>
