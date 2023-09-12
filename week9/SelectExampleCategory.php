<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <title>Connecting to a database</title>
 <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 <h1>Displaying the products</h1>
 <ul>
 <?php
$dsn = "mysql:host=localhost;dbname=northwind;charset=utf8";
$username = "root";
$password = "";
$pdo = new PDO($dsn, $username, $password);
$sql = "select ProductName, UnitPrice from Products";
$rows = $pdo->query($sql);
foreach ($rows as $row): ?>
 <li><?= $row["ProductName"] ?>: $<?= sprintf("%1.2f", $row["UnitPrice"]) ?></li>

<?php endforeach;
$pdo = null;
 ?>
 </ul>
</body>
</html>
You should see: