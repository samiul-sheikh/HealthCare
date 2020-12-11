
<?php



require_once('db.php');

if (!isset($_SESSION["username"])) {


  header('Location: login.php');
  
}

$phone = $_SESSION["username"];

  $sql = "SELECT * FROM users where role = 'doctor'";
$result = $conn->query($sql);



?>

<!DOCTYPE html>
<html>
	<head>
		<title>Doctors List</title>

	</head>
	<body>
		<h1>Doctors List</h1>
		<table border ="1" cellspacing="0" width="100%">
			<tr>
				<td>
					<center><b>Doctor No<b>
				</td>
				<td><center><b>Name</b></td>
				<td><center><b>Phone Number<b></td>
									<td><center><b>Bio<b></td>

					<td><center><b>Join Date</b></center></td>

			</tr>
			    <?php 
                while($row = $result->fetch_assoc()) { ?>
			<tr>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['name']; ?></td>
				<td><?php echo $row['phone']; ?></td>
								<td><?php echo $row['bio']; ?></td>

				<td><center><u><?php echo $row['date']; ?></u></td>
			</tr>
		    <?php } ?>
			</tr>
			
		</table>
		<br>

			<button><u><a href="Userprofile.php">Back</u></button>
	</body>
</html>