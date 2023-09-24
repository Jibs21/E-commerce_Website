


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
		<title>Edit form</title>
		
	</head>	

	<body>
    <div class="container">
            <div class="wrapper">
                <div class="title"><span>Edit Form</span></div>
                <form action="" method="POST" class="">
                    <div class="row">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="username" name="username" value= <?php echo $username; ?>>
                    </div>
    
                    <div class="row">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="password" name="password" value= <?php echo $password;?>>
                    </div>

                    <div class="row">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="confirmpass" name="password" value=<?php echo $password;?>>
                    </div>

                    <div class="row">
                        <i class="fa fa-envelope-square"></i>
                        <input type="email" placeholder="email" name="email" value= <?php echo $email; ?>>
                    </div>
    
                    <div class="row button">
						<input type="submit" value="Edit" name="submit">
                    </div>

                    <div class="row button">
                        <input type="submit" value="Clear">
                    </div>

                </form>
            </div>
        </div>

	</body>
</html>