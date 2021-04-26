<?php
$db_user = "root";
$db_pass = "";
$db_name = "useraccounts";

try{
	$db = new PDO('mysql:host=localhost;dbname'. $db_name.'charset=utf8mb4',$db_user,$db_pass);
$db-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 echo "Connected successfully";
}catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}


?>