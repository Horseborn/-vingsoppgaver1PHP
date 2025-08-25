<?php
//echo $_POST["fName"]; this is one option, but a better solution would be to first check if there
// is any value within the variable, before just printing so we have a fallback

echo empty($_POST["fName"]) ? "No first name entered" . "<br>" : $_POST["fName"] . "<br>";
echo empty($_POST["lName"]) ? "No last name entered" : $_POST["lName"];
