<?php 

include 'connect.php';

error_reporting(0);

session_start();

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$confirmpass = md5($_POST['confirmpass']);
	$email = $_POST['email'];

	if ($password == $confirmpass) {
		$sql = "SELECT * FROM register WHERE email='$email'";
		$result = mysqli_query($connect, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO register (username, password, email)
					VALUES ('$username', '$password', '$email')";
			$result = mysqli_query($connect, $sql);
			if ($result) {
				echo "<script>alert('You Are Registrated.')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['confirmpass'] = "";
			} else {
				echo "<script>alert('Please Try Again')</script>";
			}
		} else {
			echo "<script>alert(' Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel= "stylesheet" href="login-register.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Arima:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
		<title>Register form</title>
		
	</head>	

	<body>
		<div class="container">
            <div class="wrapper">
                <div class="title"><span>Register Form</span></div>
                <form action="" method="POST" class="">
                    <div class="row">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="username" name="username" value="<?php echo $username; ?>" required>
                    </div>
    
                    <div class="row">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="password" name="password" value="<?php echo $_POST['password']; ?>" required>
                    </div>

                    <div class="row">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="confirmpass" name="confirmpass" value="<?php echo $_POST['confirmpass']; ?>" required>
                    </div>

                    <div class="row">
                        <i class="fa fa-envelope-square"></i>
                        <input type="email" placeholder="email" name="email" value="<?php echo $email; ?>" required>
                    </div>
    
                    <div class="row button">
						<input type="submit" value="Register" name="submit">
                    </div>

                    <div class="row button">
                        <input type="submit" value="Clear">
                    </div>

                    <div class="register-link">Already have an Account? <a href="login.php">Login Now</a></div>  
                </form>
            </div>
        </div>




        <div class="page-btn">
			<a href="index.php" class="btn">Back to Home</a>
		</div>

	</body>
</html>