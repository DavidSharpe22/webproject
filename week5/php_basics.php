<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Basics</title>
</head>
<body>

    <h1>PHP Basics</h1>

    <?php

    $date = new DateTime();

    $currentTime = date( "Y/md H:i:s");

    echo "Hello world, The current time is ";

    /* */

    // echo "Hello world, The current time is $currentTime() ";
 
    $date = new DateTime();
    echo $date->format('Y-m-d');
    
    $age= 3;



    ?>
    
</body>
</html>