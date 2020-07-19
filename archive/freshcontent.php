<?php
include "includes/functions.php";
$file = "freshcontent/proposed_fresh_contents.txt";
include "includes/header.php";

if (valueOf("request", "submit") == "Save"){
	writeTextFile($file, valueOf("request", "data"));
	$sBody = "New content has been proposed<br><br>";
	$sBody .= "Please use the following link to review/approve.<br><br>";
	$sBody .= "http://waterfordparkestates.com/proposedfreshcontent.php";
	SendSingleEmail("1", "New Content Proposed", $sBody);
	$body .= "	<tr height=30>";
	$body .= "		<td class=\"standardtext\"><br>Thank you for your submission.  It's now scheduled for review.";
	$body .= "		</td>";
	$body .= "	</tr>";
}
else
{
	
	$data = readTextFile($file);
	if ($data == ""){
		$file = "freshcontent/fresh_contents.txt";
		$data = readTextFile($file);
	}
	
	$body = "<form name=frm method=post><table height=\"260\" width=\"100%\" border=\"0\">";
	$body .= "	<tr height=30>";
	$body .= "		<td colspan=3>";
	$body .= "		</td>";
	$body .= "	</tr>";
	$body .= "	<tr>";
	$body .= "		<td width=12></td>";
	$body .= "		<td class=\"standardtext\" vAlign=\"top\" align=\"left\">Please enter your proposed content here<br>";
	$body .= "      <textarea name=\"data\" rows=20 cols=70>" . $data . "</textarea>";
	$body .= "		</td>";
	$body .= "	</tr>";
	$body .= "	<tr>";
	$body .= "		<td width=100% align=\"right\" colspan=2>";
	$body .= "         <p align=\"right\"><input class=\"standardtext\" type=\"submit\" name=\"submit\" value=\"Save\">";
	$body .= "      </td>";
	$body .= "	</tr>";
	$body .= "</table></form>";
}			
echo $body;

include "includes/footer.php";
?>
