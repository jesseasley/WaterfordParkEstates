<?php
include "../includes/functions.php";
?>
<script type="text/javascript">
  var AdHtml = "<textarea rows='12' id='adTextArea' cols='80' class='standardedittextarea'><?php echo valueOf("cookie", "adTextArea") ?></textarea>" +
    "<br><input type='button' value='Save' id='addAd' class='button' onclick='submitAd();'>" +
    "<input type='button' value='Cancel' id='cancelAd' class='button' onclick='$(\"#adArea\").hide(500);$(\"#btnAddAdvertisement\").show();'>";
    //alert(html);
</script>
      <table height="260" width="100%" border="0">
  <tr height="30">
    <td colspan="3">
    </td>
  </tr>
  <tr>
    <td width="12"></td>
    <td class="standardtext" vAlign="top" align="left">
      Help your neighbors reach their potential.
      <br>
        <br>
          In need of some type of service?  Maybe someone in Waterford Park Estates can help.
          <br>
            <br>
              Have a service to offer?  Maybe someone in Waterford Park Estates needs help.
              <br>
                <br>
                  Look through the available classifieds on this page to see what services Waterford
                  Park Estates people offer or add your
                  own advertisement using the button below.<br>
                    <br>
    </td>
    <td width="7"></td>
  </tr>
  <tr>
    <td width="12"></td>
    <td class="standardtext" vAlign="top" align="left">
      <?php
    if (valueOf("cookie", "nameText") == "")
      {
      			echo "Please update your contact information before advertising.  <br>";
            echo "<input type=\"hidden\" id=\"nameText\" value=\"" . valueOf("cookie", "nameText") . "\">";
            echo "Click <a href=\"#\" onclick=\"pageChange('profile_html.php');\">here</a> to go to the contact page.<br><br>";
      }
?>
      <input type="button" onclick="showAdArea();" value="Edit Advertisement" id="btnAddAdvertisement" class="button">
    </td>
    <td width="7"></td>
  </tr>
  <tr>
    <td width="12"></td>
    <td class="standardtext" vAlign="top" align="right">
      <div id="adArea"></div>
<!--
        <textarea rows='12' id='adTextArea' cols='80' class='standardedittextarea'><?php echo valueOf("cookie", "adTextArea") ?></textarea>
        <br />
        <input type='button' value='Save' id='addAd' class='button' onclick='submitAd();' />
        <input type='button' value='Cancel' id='cancelAd' class='button' onclick='$("#adArea").hide(500);$("#btnAddAdvertisement").show();' />
-->
      
    </td>
    <td width="7"></td>
  </tr>
  <tr height="20">
    <td></td>
  </tr>
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
  <script>
    function showAdArea(){
    $('#adArea').hide();
    if ($('#adArea').html() == ""){
    $('#adArea').html(AdHtml);
    tinyMCE.init({
    selector: "textarea",
    theme: "modern",
    plugins: [
    "advlist autolink lists link image charmap print preview hr anchor pagebreak",
    "searchreplace wordcount visualblocks visualchars code fullscreen",
    "insertdatetime media nonbreaking save table contextmenu directionality",
    "emoticons template paste textcolor "
    ],
    toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
    toolbar2: "print preview media | forecolor backcolor emoticons",
    image_advtab: true,
    templates: [
    { title: 'Test template 1', content: 'Test 1' },
    { title: 'Test template 2', content: 'Test 2' }
    ]
    });
    }
    $('#adArea').show(500);
    $('#btnAddAdvertisement').hide();
    }
  </script>

  <!--
		<tr>
			<td width=12></td>
			<td class="adtext">
				<div style="position: relative; width: 600px; height: 50px; z-index: 1; border-style: solid; border-width: 1px; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px" id="layer1">
					<b>FOR SALE</b> <br>Two tickets to Dallas Summer Musicals "Mary Poppins" for Saturday, October 10, 2009 at 2:00 PM. 
					$85 each. <br><b>Contact Karen Roberts 469-323-9394</b>.
				</div>
			</td>
		</tr>-->
		<tr>
			<td width=12></td>
			<td>
				<div style="position: relative; width: 600px; z-index: 1; border-style: solid; border-width: 1px; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px" id="layer1">
					<table border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td colspan=3 class="standardtext">
                DFW Premier Properties & Acquisitions
              </td>
						</tr>
						<tr>
							<td class="adtext">
								<img 
									border=0 
									width=83 
									height=111 
									src="images/Jess_Easley_Photo_82x111.jpg"
									alt="Jess_Easley_Photo_82x111">
							</td>
							<td width=7></td>
							<td class="adtext" width=590>
								Jess Easley<br>
								mobile: (972) 284-9403<br>
								e-mail: <a href="jess@easley-realty.com">jess@easley-realty.com</a><br>
								web: <a href="http://easley-realty.com" target="_empty">easley-realty.com</a><br>
							</td>
						</tr>
						<tr>
							<td colspan=3 class="adtext">
								<br>
								Serving the Flower Mound, Lewisville, Highland Village areas.  <br />
								Do you know someone who needs to buy or sell real estate today?<br />
                You need an agent that understands the technology that drives the real estate business. <br />
								Call for your FREE consultation today! 
							</td>
						</tr>
					</table>
				</div>
			</td>
		</tr>

<!--adds go here-->

		<tr height=50>
			<td width=12></td>
			<td class="addisclaimer" align=center valign=bottom>
				The HOA makes no representations as to the items listed.
			</td>
		</tr>

				</table>

