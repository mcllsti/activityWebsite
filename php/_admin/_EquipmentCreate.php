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

$name=$_POST['name'];
$cost=$_POST['cost'];

 
 
$query=$conn->prepare("INSERT INTO equipment (Name, cost) VALUES (?,?)");

$query->bindParam(1, $name);
$query->bindParam(2, $cost);


$query->execute();

$conn = null;
 




?>