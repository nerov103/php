<?php

echo "<pre>";
var_dump($_POST);
echo "</pre>";

//new iam print the in  in login from

echo "My name is ".$_POST['fname'];
echo "My last name is ".$_POST['lname'];
echo "My Full Name is: ".$_POST['fname'].$_POST['lname'];


?>