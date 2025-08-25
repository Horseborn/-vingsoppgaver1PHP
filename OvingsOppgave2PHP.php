<?php

echo empty($_POST["fName"]) ? "No first name entered" . "<br>" : "Fornavnet ditt er " . $_POST["fName"] . "<br>";
echo empty($_POST["lName"]) ? "No last name entersed" . "<br>" : "Etternavnet ditt er " . $_POST["lName"] . "<br>";

echo empty($_POST["age"]) ? "No age entered" : "Du er " . (int)$_POST["age"] . " år gammel.";
