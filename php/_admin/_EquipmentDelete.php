<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "activity";

 
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

$first= $_POST["first"];

 
$query=$conn->prepare("DELETE FROM `equipment` WHERE `id` = :make");

$query->bindParam(':make', $first);



$query->execute();

$conn = null;
 
 return 1;
?>