<?php
$servername = 'localhost';
$dbname = 'inventaire';
$port = 3306;
try{
$conn = new PDO("mysql:host=$servername;port=$port;dbname=$dbname", 'root', '');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
echo "Erreur: " . $e->getMessage();
}
?>