<?php
require_once('config.php');
?>
<?php

if(isset($_POST)){

	$name 		= $_POST['name'];
	$address 		= $_POST['address'];
	$email 			= $_POST['email'];
	$phonenumber	= $_POST['phonenumber'];
	

		$sql = "INSERT INTO useraccounts.users1 (name, address, email, phonenumber ) VALUES('$name', '$address', '$email', '$phonenumber');";
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