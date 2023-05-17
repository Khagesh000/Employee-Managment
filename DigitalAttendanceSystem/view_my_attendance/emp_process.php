<?php
			include "connect.php";
			
			if(isset($POST['send']));

			{
				 $name = htmlentities($_POST['name']);
				$email_address = htmlentities($_POST['email']);
				$me = htmlentities($_POST['message']);
				
				mysqli_query($conn,"INSERT INTO emp_message (empID, name, email, message) VALUES ('', '$name', '$email_address', '$me')") or die (mysqli_error());

				echo "<script type='text/javascript'>alert('Message Successfully Send!');document.location='emp_message.php'</script>";


			}
		?>