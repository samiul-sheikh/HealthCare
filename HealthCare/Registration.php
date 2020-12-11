<?php

require_once('db.php');

if($_SERVER["REQUEST_METHOD"] == "POST"){
$sql = "INSERT INTO users (name, phone, password,bio,role)
VALUES ('".$_POST['name']."', '".$_POST['phone']."', '".$_POST['password']."', '".$_POST['bio']."','donor')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
    header('Location: login.php');

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
?>
<!DOCTYPE html>
<html>

	<head>

		<title>Registration Page</title>

	</head>


		<body>
			<center>

				<form method="POST">
					<fieldset>
							<legend>
							Donor	Registration
							</legend>

								<table>
    
									<tr>
										<td>Name</td>
										<td><input type="text" name="name"></td>
									</tr>


									<tr>
										<td>phone</td>
										<td><input type="text" name="phone"></td>
									</tr>


									<tr>
										<td>Password</td>
										<td><input type="password" name="password"></td>
									</tr>


									<tr>
										<td>Details</td>
										<td><input type="text" name="bio"></td>
									</tr>
									<button>Submit</button>

								</table> 
			
						</fieldset>
				</form>
			</center>
		</body>
</html>