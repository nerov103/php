<?php
//now start the php code
require_once "./database.php";

//write the a quary in sql
$qurry = "SELECT * FROM `bank` WHERE 1";
$dt = $all_data->query ($qurry);

if($dt){
    $face_data = mysqli_fetch_array($dt);

}

 ?>

<!-- now ima create a table use html only -->
<hr>

<table border>
  <tr>
    <th>Email</th>
    <th>Password</th>
  </tr>

  <?php while($face_data = mysqli_fetch_array($dt)):?>
    <!-- write the yor php code -->
    <!-- last goo.... -->
    <tr>
    <td><?php echo $face_data['Username'];?></td>
    <td><?php echo $face_data["ppssword"];?></td>
  </tr>
  <?php endwhile;?>

 
</table>

<!-- this all code write by mr.Pydor -->