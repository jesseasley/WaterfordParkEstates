<?php
echo "({ 'userName': '";
if(!isset($_COOKIE["userName"])) {
    echo "";
} else {
    echo $_COOKIE["userName"];
}
echo "', 'password': '";
if(!isset($_COOKIE["password"])) {
    echo "";
} else {
    echo $_COOKIE["password"];
}
echo "' })";
?>