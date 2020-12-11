<?php

require_once('db.php');

if($_SERVER["REQUEST_METHOD"] == "POST"){

	$sql = "UPDATE users SET password= ". $_POST['password']." WHERE phone=". $_SESSION["username"];

$result = $conn->query($sql);

if ($conn->query($sql) === TRUE) {
  echo "Password updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}
$conn->close();

}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Change Password</title>

	</head>

	<body>
		<form method="POST"><center>
			<fieldset>
				<legend>CHANGE PASSWORD</legend>

				New Password<br>
				<input type="password" name="password"><br>
				<button>Submit</button>
			</fieldset>
			
		</form>
		<br>
		
			<button><u><a href="Userprofile.php">Back</u></button>
	</body>
</html>