<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel= "stylesheet" href="homepage.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Arima:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
		<title>About</title>
		
	</head>	

	<body>
		
			<div class = "container">
				<div class="navbar">
					<div class="logo">
						<a href="index.php"><image src="image/logo.png" width="125px"></a>
					</div>
					<nav>
						<ul id="MenuItems">
							<li> <a href ="index.php">Home</a></li>
							<li> <a href ="product.php">Products</a></li>
							<li> <a href ="about.php">About</a></li>
							<li> <a href ="contact.php">Contact</a></li>
							<li> <a href ="login.php">Account</a></li>
						</ul>
					</nav>
					<a href="cart.php"><img src="image/cart.png" width="30px" height="30px"></a>
					<img src="image/menu.png" class="menu-icon" 
					onclick="menutoggle()">
				</div>				
			</div>

    <!--About-->
    <div class="section">
        <div class="container">
            <div class="content-section">
                <div class="title">
                    <h1>About<h1>
                </div>
                <div class="content">
                    <h3>Computer Sales & Services Business</h3>
                    <p>his goes to show that any entrepreneur who properly 
                        positions himself or herself in computer sales and 
                        servicing industry would definitely enjoy good business 
                        turnover. As a matter of fact, almost all businesses 
                        and homes have computers, and these people may not have 
                        the skills, time or the desire to do their own computer servicing, 
                        repairs and upgrades, and that puts a computer physician right in 
                        the middle of one of the fastest-growing 
                        industries in the world.</p>
                        <div class="button">
                            <a href="">Read More</a>
                        </div>
                </div>
                <div class="social">
                    <a href=""><i class="fab fa-facebook-f"></i></a>
                    <a href=""><i class="fab fa-twitter"></i></a>
                    <a href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="image-section">
                <img src="image/homepagebg.jpg">
            </div>
        </div>
    </div>

	
	<!--footer-->
	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="footer-col-1">
					<h3>Download Our App</h3>
					<p>Download App for Android and IOS Mobile Phone.</p>
					<div class="app-logo">
						<img src="image/gp.png">
						<img src="image/apps.png">
					</div>
				</div>
				<div class="footer-col-2">
					<img src="image/pclogo.png">
					<p>Our Purpose is to Sustainably Make the Pleasure And 
						Benefits of Sports Accessible to the Many.
					</p>
				</div>
				<div class="footer-col-3">
					<h3>Links</h3>
					<ul>
						<li>Blog Post</li>
						<li>Cuopons</li>
						<li>Subscribe</li>
						<li>Return</li>
					</ul>
				</div>
				<div class="footer-col-4">
					<h3>Follow us</h3>
					<ul>
						<li>Facebook</li>
						<li>Instagram</li>
						<li>Twitter</li>
						<li>Youtube</li>
					</ul>
				</div>
			</div>
			<hr>
			<p class="copyright">Copyright 2022</p>
		</div>
	</div>

	<!--JS Toggle Menu-->

	<script>
		var MenuItems = document.getElementById("MenuItems");

		MenuItems.style.maxHeight = "0px";

		function menutoggle(){
			if(MenuItems.style.maxHeight == "0px")
				{
					MenuItems.style.maxHeight = "200px";
				}
			else
				{
					MenuItems.style.maxHeight = "0px";
				}
		} 
	</script>
			
	</body>
	
</html>