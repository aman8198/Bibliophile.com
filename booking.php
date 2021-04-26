<?php
require_once('config.php');
?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	
	<title> Booking|php </title>
</head>
<body>
	<div>
		<?php
		

		if(isset($_POST['create'])){
		$name   =   $_POST['name'];
		$address    = $_POST['address'];
		$email       = $_POST['email'];
		$phonenumber = $_POST['phonenumber'];
		

		$sql = "INSERT INTO useraccounts.users1 (name, address, email, phonenumber,  ) VALUES('$name', '$address', '$email', '$phonenumber' );";
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
				      	<h1> Booking Form </h1>
				<p> please provide the details</p>

				<hr class="mb-3">
				<label for="Firstname"><b>name</b></label>
				<input class="form-control" type="text" id= "name" name="name" required>
				
				<label for="Lastname"><b>address</b></label>
				<input class="form-control" type="text"  id= "address" name="address" required>
				

				<label for="email"><b>Email</b></label>
				<input  class="form-control" type="email"  id= "email" name="email" required>

				<label for="phonenumber"><b>Phone Number</b></label>
				<input class="form-control" type="text"  id= "phonenumber" name="phonenumber" required>

				

				<hr class="mb-3">

				<input class="btn btn-primary" type="submit" id= "register"name="create" value="Booking">



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
         	var name = $('#name').val();
			var address = $('#address').val();
			var email = $('#email').val();
			var phonenumber = $('#phonenumber').val();
			

         	e.preventDefault();
         	$.ajax({
         		type: 'POST',
         		url: 'process1.php',
         		data: {name: name, address: address, email: email, phonenumber: phonenumber},
         		success: function(data){
         			Swal.fire({
			'title': 'Booking confirmed',
			'text': 'Booking confirmed',
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