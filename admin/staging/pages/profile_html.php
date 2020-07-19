<?php
include "../includes/functions.php";
?>
	<table border="0" width="100%" cellspacing="0" cellpadding="0" height="260">
		<tr>
			<td width=10></td>
			<td class="standardtext" colspan="2">
				We'd like to keep you up to date on what's going on, but we need your help. Please enter your information and press the "Submit" button below.
				<br><br>
			</td>
			<td width=20></td>
			<br>
		</tr>
		<tr>
			<td width=1></td>
			<td class="standardtextcaption">Name</td>
			<td align="left">
				<input type="text" id="nameText" value="<?php echo valueOF("cookie", "nameText"); ?>" class="standardedittext" style="width: 318px">
        </td>
			<td width=1></td>
		</tr>
		<tr>
			<td width=1></td>
			<td class="standardtextcaption">Street address</td>
			<td align="left">
				<input type="text" id="addressText" value="<?php echo valueOF("cookie", "addressText"); ?>" class="standardedittext" style="width: 318px">
        </td>
			<td width=1></td>
		</tr>
		<tr>
			<td width=1></td>
			<td class="standardtextcaption">Email</td>
			<td align="left">
				<input type="text" id="emailText" value="<?php echo valueOF("cookie", "emailText"); ?>" class="standardedittext" style="width: 318px">
        </td>
			<td width=1></td>
		</tr>
		<tr>
			<td width=1></td>
			<td class="standardtextcaption">Home phone</td>
			<td align="left">
				<input type="text" id="homePhoneText" value="<?php echo valueOF("cookie", "homePhoneText"); ?>" class="standardedittext" style="width: 318px">
        </td>
			<td width=1></td>
		</tr>
		<tr> 
			<td width=1></td>
			<td class="standardtextcaption">Work phone</td>
			<td align="left">
				<input type="text" id="workPhoneText" value="<?php echo valueOF("cookie", "workPhoneText"); ?>" class="standardedittext" style="width: 318px">
        </td>
			<td width=1></td>
		</tr>
		<tr>
			<td width=1></td>
			<td class="standardtextcaption">Cell phone</td>
			<td align="left">
				<input type="text" id="cellPhoneText" value="<?php echo valueOF("cookie", "cellPhoneText"); ?>" class="standardedittext" style="width: 318px">
        </td>
			<td width=1></td>
		</tr>
		<tr>
			<td width=1></td>
			<td class="standardtextcaption">Preferred phone</td>
			<td align="left">
				<select size="1" id="preferredphoneSelect" class="standardedittext" style="width: 318px">
					<option <?php if (valueOF("cookie", "preferredphoneSelect") == "Home") echo "selected"; ?> value="Home">Home</option>
					<option <?php if (valueOF("cookie", "preferredphoneSelect") == "Work") echo "selected"; ?> value="Work">Work</option>
					<option <?php if (valueOF("cookie", "preferredphoneSelect") == "Cell") echo "selected"; ?> value="Cell">Cell</option>
				</select>
			</td>
			<td width=1></td>
		</tr>
		<tr>
			<td width=1></td>
			<td colspan="2" align="right">
				<br>
				<input type="button" onclick="submitProfile();" value="Submit" name="submitButton" class="button">
			<img src=images/spacer.gif width=135 height=1>
			</td>
			<td width=1></td>
		</tr>
	</table>
