<?php 

require_once('db.php');

if($_SERVER["REQUEST_METHOD"] == "POST"){

	$sql = "SELECT * FROM users where phone = ". $_POST['username']." and password =  ". $_POST['password'];

$result = $conn->query($sql);

if ($result->num_rows > 0) {


	$_SESSION["username"] = $_POST['username'];

	header('Location: Userprofile.php');

 
} else {
  echo "No user Found";
}
$conn->close();

}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
	</head>

	<body>
		<center>
		<form method="POST" action="">

			<fieldset>
				<legend>LOGIN</legend>

					User ID<br>
					<input type="number" name="username" value=""><br>

					Password<br>
					<input type="password" name="password" value=""><br> <br>



					<button>Login</button>
				
				
					<u><a href="Registration.php">Register</a></u>

			</fieldset>

		</form>
	</center>
	</body>
</html>