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

$first=$_POST['first'];
$last=$_POST['last'];
$email=$_POST['email']; 
$message=$_POST['message'];
 
 
$query=$conn->prepare("INSERT INTO enquiries (First, Last, Email, Message) VALUES (?,?,?,?)");

$query->bindParam(1, $first);
$query->bindParam(2, $last);
$query->bindParam(3, $email);
$query->bindParam(4, $message);
 


$query->execute();

$conn = null;
 




?>