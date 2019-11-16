<?php
 $conn = mysqli_connect("localhost","root","","database_itproject2");

 $role="";

if (isset($_POST["btnLogin"])) {
	# code...
	$email = $_POST["email"];
	$password = $_POST["password"];

	$query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $query);

	if (mysqli_num_rows($result) > 0) {
		# code...
		while ($row = mysqli_fetch_assoc($result)) {
			# code...
			if ($row["user_type"] == "Super Admin") {
				# code...
				//$_SESSION['LoginUser'] = $row["email"];
				header('Location: ../classic/base/html/super_user/super_user.php');
			}else if($row["user_type"] == "Admin User"){
				// $_SESSION['LoginUser'] = $row["email"];
				// header('Location: user.php');
				header('Location: ../classic/base/html/admin_user/admin_user.php');
			}else{
				header('Location: ../classic/base/html/guest_user/guest_user.php');
			}

			
		}
	}else{
		header("Location: loginto.php?errorLogin");
	}

}

?>