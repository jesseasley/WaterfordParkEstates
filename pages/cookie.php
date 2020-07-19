<?php
include "../includes/functions.php";
echo "({ 'nameText': '" . valueOF("cookie", "nameText") . "', ";
echo "'addressText': '" . valueOF("cookie", "addressText") . "', ";
echo "'emailText': '" . valueOF("cookie", "emailText") . "', ";
echo "'homePhoneText': '" . valueOF("cookie", "homePhoneText") . "', ";
echo "'workPhoneText': '" . valueOF("cookie", "workPhoneText") . "', ";
echo "'cellPhoneText': '" . valueOF("cookie", "cellPhoneText") . "', ";
echo "'preferredphoneSelect': '" . valueOF("cookie", "preferredphoneSelect") . "' })";
?>