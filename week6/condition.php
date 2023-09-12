<!DOCTYPE html>
    <html lang="en">
    <head>
       <meta charset="utf-8">
<title>Random if statement</title> </head>
<body> 
    <?php
        //use the rand function to generate a random number between 1 and 6
        $diceRoll = rand(1, 6);
        //display to the user the random number
        echo "<p>You rolled a " . $diceRoll . "</p>";
            //if it is a 6 they are a winner
        if ($diceRoll == 6 || $diceRoll == 1 || $diceRoll > 3)
        {
            echo "<p>Winner!</p>";
        }
        else
        {
            echo "<p>Sorry, you didn't win.</p>";
        }
        echo "<p>The end</p>";
    ?>
    <br>
    <p>Greeting</p>
    <br>
    <?php 
        $date = new Datetime(); $hour = $date->format("G");
        if ($hour < 12)
        {

        echo "Good morning"; }
        else
        {
        echo "Good afternoon"; }
    ?>

    </body>
    </html>

