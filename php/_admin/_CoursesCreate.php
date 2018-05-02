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
$description=$_POST['description'];
$cost=$_POST['cost']; 

 
 
$query=$conn->prepare("INSERT INTO courses (Name, Description, cost) VALUES (?,?,?)");

$query->bindParam(1, $name);
$query->bindParam(2, $description);
$query->bindParam(3, $cost);



$query->execute();

$conn = null;
 




?>