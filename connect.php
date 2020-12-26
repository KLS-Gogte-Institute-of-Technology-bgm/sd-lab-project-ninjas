<?php
	$firstName = $_POST['firstName'];
    	$date = $_POST['date'];
    	$date1 = $_POST['date1'];
	$gender = $_POST['gender'];
	$gender1 = $_POST['gender1'];
	$gender2 = $_POST['gender2'];
	

	// Database connection
	  $conn = mysqli_connect("localhost","root","","demo") or die("Connection Failed");
		$stmt ="INSERT INTO reserve (`id`,`firstName`,`date`,`date1`,`gender`,`gender1`,`gender2`) VALUES ('','$firstName','$date','$date1','$gender','$gender1','$gender2')";
		$result = mysqli_query($conn, $stmt);
		if($result)
		{
			echo "Registration successfully...";
    }
?>
