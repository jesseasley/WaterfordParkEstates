<?php
include "includes/functions.php";
if (isset($_REQUEST["addadvertisementButton"]))
{
	if (valueOf("request", "addadvertisementButton") == "Save Advertisement") 
	{
		$body = "First name(s):   " . valueOf("cookie", "firsnameText") . "\r\n";
		$body .= "Last name:       " . valueOf("cookie", "lastnameText") . "\r\n";
		$body .= "Street address:  " . valueOf("cookie", "addressText") . "\r\n";
		$body .= "Email:           " . valueOf("cookie", "emailText") . "\r\n";
		$body .= "Home phone:      " . valueOf("cookie", "homePhoneText") . "\r\n";
		$body .= "Work phone:      " . valueOf("cookie", "workPhoneText") . "\r\n";
		$body .= "Cell phone:      " . valueOf("cookie", "cellPhoneText") . "\r\n";
		$body .= "Preferred phone: " . valueOf("cookie", "preferredphoneSelect") . "\r\n";
		$body .= "Advertisement:   '" . valueOf("request", "adTextArea")  . "'";
		SendEmail ("homeowner@waterfordparkestates.com", "Advertisement Submitted", $body, "true");
		setcookie("adTextArea", valueOf("post", "adTextArea"), time()+60*60*24*30*12*5);
	}
}
include "includes/header.php";
?>
<table height="260" width="100%" border="0">
	<tr height=30>
		<td colspan=3>
		</td>
	</tr>
	<?php 
	if (valueOf("request", "addadvertisementButton") == "")
	{
		$body = "<tr>";
		$body .= "<td width=12></td>";
		$body .= "<td class=\"standardtext\" vAlign=\"top\" align=\"left\">";
		$body .= "	Help your neighbors reach their potential.";
		$body .= "	<br><br>";
		$body .= "	In need of some type of service?  Maybe someone in Waterford Park Estates can help.";
		$body .= "	<br><br>";
		$body .= "	Have a service to offer?  Maybe someone in Waterford Park Estates needs help.";
		$body .= "	<br><br>";
		$body .= "	Look through the available classifieds on this page to see what services Waterford ";
		$body .= "	Park Estates people offer or add your ";
		$body .= "	own advertisement using the button below.<br><br>";
		$body .= "</td> ";
		$body .= "<td width=7></td>";
		$body .= "</tr>";
		$body .= "<tr>";
		$body .= "<td width=12></td>";
		$body .= "<td class=\"standardtext\" vAlign=\"top\" align=\"left\">";

		if (valueOf("cookie", "lastnameText") == "")
		{
			$body .= "			Please update your contact information before advertising.  ";
			$body .= "			<br>";
			$body .= "			Click <a href=\"profile.php\">here</a> to go to the contact page.<br><br>";
		}
		elseif (valueOf("cookie", "adTextArea") > "")
		{
			$body .= "		<form method=\"post\">";
			$body .= "		<input type=\"submit\" value=\"Edit Advertisement\" name=\"addadvertisementButton\" class=\"button\">";
			$body .= "		</form>";
		}
		else
		{
			$body .= "		<form method=\"post\">";
			$body .= "		<input type=\"submit\" value=\"Add Advertisement\" name=\"addadvertisementButton\" class=\"button\">";
			$body .= "		</form>";
		}

		$body .= "</td> ";
		$body .= "<td width=7></td>";
		$body .= "</tr>";
		echo $body;
	}
	else
	{
		if (valueOf("request", "addadvertisementButton") == "Add Advertisement" or 
		    valueOf("request", "addadvertisementButton") == "Edit Advertisement") 
			{
				$body = "<tr>";
				$body .= "<td width=12></td>";
				$body .= "<td class=\"standardtext\" vAlign=\"top\" align=\"left\"> ";
				$body .= "<form method=\"post\">";
				$body .= "<textarea rows=\"12\" name=\"adTextArea\" cols=\"70\" class=\"standardedittextarea\">" . valueOf("cookie", "adTextArea") . "</textarea>";
				$body .= "<br>";
				$body .= "<input type=\"submit\" value=\"Save Advertisement\" name=\"addadvertisementButton\" class=\"button\">";
				$body .= "</form>";
				$body .= "</td>";
				$body .= "<td width=7></td>";
				$body .= "</tr>";
				echo $body;
			}
			else if (valueOf("request", "addadvertisementButton") == "Save Advertisement") 
			{
				$body = "<tr><td width=12></td><td class=\"standardtextcaption\" valign=top>";
				$body .= "Thanks for your classified submission.<br><br>";
				$body .= "Please allow a couple of days for review before it will appear on the site.";
				$body .= "<br><br>Please click <a href=\"default.php\">here</a> to return to the main page.<br><br></td><td width=7></td></tr>";
				echo $body;
			} 
	}
?>
<!--adds go here-->
  <tr>
    <td width="12"></td>
    <td class="adtext">
      <div class="addiv" id="layer1">
        <b>FREE</b>
        <br />
        Free Trampoline - in good shape, but had to throw out the pad.  
        <br /><br />
        This item is gone now, thanks to the WPE classifieds section.  
        <br />
        Advertise here today and turn your items into our next success story.
      </div>
    </td>
  </tr>
  

  <!--
		<tr>
			<td width=12></td>
			<td class="adtext">
				<div style="position: relative; width: 600px; height: 50px; z-index: 1; border-style: solid; border-width: 1px; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px" id="layer1">
					<b>FOR SALE</b> <br>Two tickets to Dallas Summer Musicals "Mary Poppins" for Saturday, October 10, 2009 at 2:00 PM. 
					$85 each. <br><b>Contact Karen Roberts 469-323-9394</b>.
				</div>
			</td>
		</tr>
		<tr>
			<td width=12></td>
			<td>
				<div style="position: relative; width: 600px; height: 150px; z-index: 1; border-style: solid; border-width: 1px; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px" id="layer1">
					<table border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td colspan=3 class="standardtext">
								Century 21 Judge Fite Company
							</td>
						</tr>
						<tr>
							<td class="adtext">
								<img 
									border=0 
									width=83 
									height=111 
									src="http://jesseasley.com/realty/images/Jess_Easley_Photo_82x111.jpg"
									alt="Jess_Easley_Photo_82x111">
							</td>
							<td width=7></td>
							<td class="adtext" width=590>
								Jess Easley<br>
								office: (972) 691-9987<br>
								mobile: (972) 814-7745<br>
								e-mail: <a href="jess@easley-realty.com">jess@easley-realty.com</a><br>
								web: <a href="www.easley-realty.com">www.easley-realty.com</a><br>
								blog: <a href="http://easley-realty.blogspot.com/">http://easley-realty.blogspot.com/</a><br>
							</td>
						</tr>
						<tr>
							<td colspan=3 class="adtext">
								<br>
								Serving the Flower Mound, Lewisville, Highland Village areas.  <br>
								You need an agent that understands the technology that drives the real estate business today. 
								Most consultations are free. Call today! Let's get started.
							</td>
						</tr>
					</table>
				</div>
			</td>
		</tr>
-->
<!--adds go here-->

		<tr height=50>
			<td width=12></td>
			<td class="addisclaimer" align=center valign=bottom>
				The HOA makes no representations as to the items listed.
			</td>
		</tr>

				</table>
<?php
include "includes/footer.php";
?>
