
<?php



require_once('db.php');

if (!isset($_SESSION["username"])) {


  header('Location: login.php');
  
}

$phone = $_SESSION["username"];

  $sql = "SELECT * FROM users where phone = '$phone'";
$result = $conn->query($sql);



?>
<!DOCTYPE html>
<html>
  <head>
	 <title>User Profile</title>
  </head>

  <body>
	   <form>
          <fieldset>
            	   <h1>User Profile</h1>
            	   <table border="1" width="100%">
              <?php 
                while($row = $result->fetch_assoc()) { ?>
                      <tr>
                      <td width="85%">
                        <h1>Name :<?php echo $row['name']; ?></h1>
                        <p>Phone : <?php echo $row['phone']; ?> <br>
                       	<b> Bio:</b> <?php echo $row['bio']; ?> <br>
                      
                    	
                      </td>


                      
                      <td>

                      <?php } ?>
                      </td>
                      </tr>

              </table><br>
                      <button><a href="doctorlist.php">Doctor's List</a></button><br><br>
                                            <button><a href="Donorslist.php">Donor's List</a></button><br><br>

                      <button><a href="changepass.php">Change Password</a></button><br><br>
                      <u><a href="logout.php">Logout</a></u><br>	
        	</fieldset>
		</form>
</body>
</html>