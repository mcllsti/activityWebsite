<?php

$servername = "localhost";
$username = "root";
$password="";
$dbname="activity";

 
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully <br />"; 
     }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

$query=$conn->prepare("CREATE TABLE courses (id int(6) NOT NULL auto_increment,Name varchar(30) NOT NULL,Description varchar(255) NOT NULL,cost float(50,2) NOT NULL,PRIMARY KEY (id),UNIQUE id (id),KEY id_2 (id))");
$query->execute();

$query=$conn->prepare("CREATE TABLE equipment (id int(6) NOT NULL auto_increment,Name varchar(255) NOT NULL,cost float(50,2) NOT NULL,PRIMARY KEY (id),UNIQUE id (id),KEY id_2 (id))");
$query->execute();

$query=$conn->prepare("CREATE TABLE enquiries (id int(6) NOT NULL auto_increment,First varchar(255) NOT NULL,Last varchar(255) NOT NULL,Email varchar(255) NOT NULL,Message varchar(255) NOT NULL,PRIMARY KEY (id),UNIQUE id (id),KEY id_2 (id))");
$query->execute();

$conn = null;
?>
