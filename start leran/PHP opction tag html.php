

<h1>Year</h1>
<select>
    <?php

    $startyear = 2006;
    while ($startyear<=2025){

    ?>
    <option value="<?php echo $startyear; ?>"><?php echo $startyear; ?></option>
    <?php

        $startyear++;
    }
    ?>
</select>

<!-- another example  -->

<h2>Age</h2>
<select>
    <?php //start the php code
    $startold = 1; //start the old 
    while ($startold<=18){
        
        echo "<option value='$startold'>$startold</option>";

        $startold++;
    }
    ?>
</select>




