<?php
session_start();
require_once('config.php');


$username = $_POST['username'];
$Password = $_POST['Password'];

$sql = "SELECT * FROM useraccounts.users WHERE email = ? AND Password = ? LIMIT 1";
$stmtselect  = $db->prepare($sql);
$result = $stmtselect->execute([$username, $Password]);

if($result){
	$user = $stmtselect->fetch(PDO::FETCH_ASSOC);
	if($stmtselect->rowCount() > 0){
		$_SESSION['userlogin'] = $user;
		echo '1';
	}else{
		echo 'There no user for that combo';		
	}
}else{
	echo 'There were errors while connecting to database.';
}

header("index1.php");