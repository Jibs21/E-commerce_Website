

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
		<title>Login form</title>
		
	</head>	

	<body>
		<div class="container">
            <div class="wrapper">
                <div class="title"><span>Login Form</span></div>
                <form action="logincheck.php" method="POST" class="">
                    <div class="row">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="username" name="username" required>
                    </div>
    
                    <div class="row">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="password" name="password" required>
                    </div>
    
                    <div class="pass"><a href="#">Forgot Password?</a></div>
                    <div class="row button">
						<input type="submit" value="Login" name="submit">
                    </div>
                    <div class="register-link">Don't have an Account? <a href="register.php">Register Now</a></div>
                </form>
            </div>
        </div>




        <div class="page-btn">
			<a href="index.php" class="btn">Back to Home</a>
		</div>

	</body>
</html>