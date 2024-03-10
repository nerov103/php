<?php
//now start the php code
require_once "connect to php.php";

//write the a quary in sql
$qurry = "SELECT * FROM `you` WHERE 1";
$dt = $all_data->query ($qurry);

if($dt){
    $face_data = mysqli_fetch_array($dt);

}

//now i'ma get the data in database
//las't go....
// echo $face_data["Username"];
// echo "<br>";
// echo $face_data["ppssword"];

// ?>

<!-- now ima create a table use html only -->
<hr>

<table border>
  <tr>
    <th>Email</th>
    <th>Password</th>
  </tr>
  <tr>
    <td><?php echo $face_data['Username'];?></td>
    <td><?php echo $face_data["ppssword"];?></td>
  </tr>


</table>

<!-- this all code write by mr.Pydor -->