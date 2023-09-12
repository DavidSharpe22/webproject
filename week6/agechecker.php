<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age Checker</title>
</head>
<body>
    <form method="post" action="">
        <label for= "age">"Enter your age:</label>
        <input type="number" id="number">
    </form>


    <?php 
    
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $ageV = isset($_POST("age")) ?intval($_POST["age"] : 0;  )
        }
    
    
    ?>
    
</body>
</html>