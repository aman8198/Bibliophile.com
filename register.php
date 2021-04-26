<?php
require_once('config.php');
?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	
	<title> User registation|php </title>
</head>
<body>
	<div>
		<?php
		

		if(isset($_POST['create'])){
		$Firstname   =   $_POST['Firstname'];
		$Lastname    = $_POST['Lastname'];
		$email       = $_POST['email'];
		$phonenumber = $_POST['phonenumber'];
		$Password    = $_POST['Password'];

		$sql = "INSERT INTO useraccounts.users (Firstname, Lastname, email, phonenumber, Password ) VALUES('$Firstname', '$Lastname', '$email', '$phonenumber', '$Password');";
		echo $sql;
		
		if($db->query($sql) == TRUE){
		echo 'Successfully saved.';

	}else{

	echo 'there were errors.';
}
		
	}


		?>
	</div>
	<div>
		<form action="registration.php" method="post">
			<div class="container">
				<div class="row">
					<div class="col-sm-3">
				      	<h1> Registration</h1>
				<p> please provide the details</p>

				<hr class="mb-3">
				<label for="Firstname"><b>First Name</b></label>
				<input class="form-control" type="text" id= "Firstname" name="Firstname" required>
				
				<label for="Lastname"><b>Last Name</b></label>
				<input class="form-control" type="text"  id= "Lastname" name="Lastname" required>
				

				<label for="email"><b>Email</b></label>
				<input  class="form-control" type="email"  id= "email" name="email" required>

				<label for="phonenumber"><b>Phone Number</b></label>
				<input class="form-control" type="text"  id= "phonenumber" name="phonenumber" required>

				<label for="Password"><b>Password</b></label>
				<input class="form-control" type="Password"  id= "Password" name="Password" required>

				<hr class="mb-3">

				<input class="btn btn-primary" type="submit" id= "register"name="create" value="Sign Up">



				</div>
               </div>
			</div>
		</form>
	</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

<script type="text/javascript">
	$(function(){

         

		$('#register').click(function(e){
			 var valid = this.form.checkValidity()
         if(valid){
         	var Firstname = $('#Firstname').val();
			var Lastname = $('#Lastname').val();
			var email = $('#email').val();
			var phonenumber = $('#phonenumber').val();
			var Password = $('#Password').val();

         	e.preventDefault();
         	$.ajax({
         		type: 'POST',
         		url: 'process.php',
         		data: {Firstname: Firstname, Lastname: Lastname, email: email, phonenumber: phonenumber, Password: Password},
         		success: function(data){
         			Swal.fire({
			'title': 'Successfull',
			'text': 'Successfully registered',
			'type':'success'
            })

         		},

         		error: function(data){
         			Swal.fire({
			'title': 'Errors',
			'text': 'there are errors',
			'type':'error'
            })

         		}


         	});
         	
         }else{
         	
         }





	});

	});
		

</script>
</body>
</html>