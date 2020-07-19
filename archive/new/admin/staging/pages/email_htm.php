<?php 
include "../includes/functions.php";
?>
	<table border="0" width="650" cellspacing="0" cellpadding="0">
		<tr height=20>
			<td colspan=3><input type="hidden" id="memberID" value="
<?php 
	echo valueOf("get", "memberID"); 
?>
"</td>
		</tr>
		<tr>
			<td width=1></td>
			<td width=1></td>
			<td width="410" class="sectionheading">
				Please enter your comments below and press the Send button.
			</td>
		</tr>
		<tr>
			<td width=1></td>
			<td width=1></td>
			<td >&nbsp;</td>
		</tr>
		<tr>
			<td width=1></td>
			<td width=1 class="smallheading" align=right valign=top>Name:</td>
			<td class="text">
			<input type=text id="nameText" class="text" size="89" value="<?php echo valueOf("cookie", "nameText") ?>" style="width: 318px"></td>
		</tr>
		<tr>
			<td width=1></td>
			<td width=1 class="smallheading" align=right valign=top>Email:</td>
			<td class="text">
			<input type=text id="emailText" class="text" size="89" value="<?php echo valueOf("cookie", "emailText"); ?>" style="width: 318px"></td>
		</tr>
		<tr>
			<td width=1></td>
			<td width=1 class="smallheading" align=right valign=top>Subject:</td>
			<td class="text">
			<input type=text id="subjectText" class="text" size="89" value="" style="width: 318px"></td>
		</tr>
		<tr>
			<td width=1></td>
			<td width=1 align=right valign=top class="smallheading">Message:</td>
			<td class="text">
			<textarea rows="12" id="bodyTextArea" cols="85" class="text" style="width: 550px"></textarea></td>
		</tr>
		<tr>
			<td width=10></td>
			<td width=1></td>
			<td width="85%">&nbsp;</td>
		</tr>
		<tr>
			<td width=1></td>
			<td width=1></td>
			<td width="475" align="right">
			<input type="hidden" value="Send" name="sendButton">
			<input type="button" id="btnSend" onclick="submitSingleEmail();" value="Send" />
			</td>
		</tr>
	</table>
<br><br>
	
