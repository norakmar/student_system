<?php
$host ="localhost";
$dbname ="dfp40443";
$username ="root";
$password ="";

//try {
$conn = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);

// Set error mode
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo "Database connection successful";
//} catch (PDOException $e) {
 //   echo "Connection failed: " . $e->getMessage();
//}
?>
