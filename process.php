<?php
require_once('config.php');
?>
<?php

if(isset($_POST)){

	$Firstname 		= $_POST['Firstname'];
	$Lastname 		= $_POST['Lastname'];
	$email 			= $_POST['email'];
	$phonenumber	= $_POST['phonenumber'];
	$Password 		= sha1($_POST['Password']);

		$sql = "INSERT INTO useraccounts.users (Firstname, Lastname, email, phonenumber, Password ) VALUES('$Firstname', '$Lastname', '$email', '$phonenumber', '$Password');";
		echo $sql;
		
		if($db->query($sql) == TRUE){
		echo 'Successfully saved.';

	}else{

	echo 'there were errors.';
}
}else{
	echo 'No data';
}

?>