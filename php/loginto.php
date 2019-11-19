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
			if (($row["user_type"] == "Super Admin") && ($row["status"] == "Active")) {
				# code...
				//$_SESSION['LoginUser'] = $row["email"];
				header('Location: ../classic/base/html/super_user/super_user.php');
			}else if(($row["user_type"] == "Dean User")  && ($row["status"] == "Active")){
				// $_SESSION['LoginUser'] = $row["email"];
				// header('Location: user.php');
				header('Location: ../classic/base/html/admin_user/dean_office.php');
			}else if(($row["user_type"] == "Sao User")  && ($row["status"] == "Active")){
				// $_SESSION['LoginUser'] = $row["email"];
				// header('Location: user.php');
				header('Location: ../classic/base/html/admin_user/sao_office.php');
			}else if(($row["user_type"] == "Guest User")  && ($row["status"] == "Active")){
				// $_SESSION['LoginUser'] = $row["email"];
				// header('Location: user.php');
				header('Location: ../classic/base/html/guest_user/guest_user.php');
			}else{
				echo '<script type="text/javascript">'; 
				echo 'alert("Invalid Account!");'; 
				echo 'window.location.href = "../index.php";';
				echo '</script>';

			}
			
		}
	}else{
			echo '<script type="text/javascript">'; 
			echo 'alert("Invalid Account!");'; 
			echo 'window.location.href = "../index.php";';
			echo '</script>';
		
	}
}
?>