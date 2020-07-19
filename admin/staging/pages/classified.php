<?php
include "../includes/functions.php";
		$body = "First name(s):   " . valueOf("cookie", "firsnameText") . "<br>";
		$body .= "Last name:       " . valueOf("cookie", "lastnameText") . "<br>";
		$body .= "Street address:  " . valueOf("cookie", "addressText") . "<br>";
		$body .= "Email:           " . valueOf("cookie", "emailText") . "<br>";
		$body .= "Home phone:      " . valueOf("cookie", "homePhoneText") . "<br>";
		$body .= "Work phone:      " . valueOf("cookie", "workPhoneText") . "<br>";
		$body .= "Cell phone:      " . valueOf("cookie", "cellPhoneText") . "<br>";
		$body .= "Preferred phone: " . valueOf("cookie", "preferredphoneSelect") . "<br>";
		$body .= "Advertisement:   <br>" . valueOf("post", "adTextArea");
		SendEmail ("homeowner@waterfordparkestates.com", "Advertisement Submitted", $body, "true");
		setcookie("adTextArea", valueOf("post", "adTextArea"), time()+60*60*24*30*12*5);
?>
<table border="0" cellpadding="0" cellspacing="0">
<tr height="12">
  <td />
</tr>
<tr></tr>
  <td width="12"></td>
  <td class="standardtext" valign="top" width="100%"">

    Thanks for your classified submission.<br>
      <br>

        Please allow a couple of days for review before it will appear on the site.
        <br>
          <br>
            Please click <a href="#" onclick="pageChange('home.html');">here</a> to return to the main page.<br>
              <br>
    </td>
  <td width="7"></td>
</tr>
</table>