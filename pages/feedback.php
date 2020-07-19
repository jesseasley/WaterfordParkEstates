<?php
include "../includes/functions.php";
SendEmail("homeowner@waterfordparkestates.com", "Comment from the Web Site", $_POST["comment"], "true");
?>

<table border="0" width="100%" cellspacing="0" cellpadding="0" height="260">
  <tr height="12">
    <td width="12"></td>
    <td />
  </tr>
  <tr>
    <td />
    <td class="standardtextcaption" valign="top" width="100%">
      We appreciate your comments.
      <br />
      <br />
      Please click <a href="#" onclick="pageChange('home.php');">here</a> to return to the main page.
    </td>
  </tr>
</table>
 