<form action="upload.php" method="post" enctype="multipart/form-data">
<input name="login" type="text" placeholder="Enter your name:"><br><br>
	Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>




<?php
	require_once "db/connection.php";
	$sql = "SELECT first_name, photo FROM users";

	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {

?>
			<p><?php echo $row['first_name'] ?></p>
			<img src="public/images/<?php echo $row['photo'] ?>"/>
<?php

			}
	}
?>