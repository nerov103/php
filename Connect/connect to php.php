<?php
//now start the php code
$hostname = "127.0.0.1";
$username = "root";
$password = "";
$databasename = "victem";

//connect to database serrver
$all_data = new mysqli($hostname, $username, $password, $databasename);

//for connect tasting
if($all_data->connect_error){
    die("Connection error!".$all_data->connect_error);
}
#echo "Connect Successfully!";
?>