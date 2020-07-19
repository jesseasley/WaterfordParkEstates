<?php
if (($_POST["userName"] == "Waterford") && ($_POST["password"] == "RussWood")){
  echo "success";
  $l = setcookie("userName", $_POST["userName"], time()+60*60*24*30*12*5);
  $a = setcookie("password", $_POST["password"], time()+60*60*24*30*12*5);
}
else{
  echo "Incorrect username or password";
  echo "<br>Username entered: " . $_POST["userName"] . "<br>Password entered: " . $_POST["password"];
}
?>