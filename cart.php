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
		<title>All Products - PC PARTS</title>
		
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

    <!--cart Items details-->

      <div class="small-container cart-page">
        <table>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>

            <tr>
                <td>
                    <div class="cart-info">
                        <img src="image/avr1.jpg">
                        <div>
                            <p>Automatic Voltage Regulator</p>
                            <small>&#8369;200.00</small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"</td>
                <td>&#8369;200.00</td>
            </tr>

            <tr>
                <td>
                    <div class="cart-info">
                        <img src="image/case1.jpg">
                        <div>
                            <p>System Unit Case</p>
                            <small>&#8369;2,000.00</small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"</td>
                <td>&#8369;2,000.00</td>
            </tr>

            <tr>
                <td>
                    <div class="cart-info">
                        <img src="image/gpu1.jpg">
                        <div>
                            <p>Graphics Processing Unit</p>
                            <small>&#8369;20,000.00</small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"</td>
                <td>&#8369;20,000.00</td>
            </tr>

            <tr>
                <td>
                    <div class="cart-info">
                        <img src="image/kb1.jpg">
                        <div>
                            <p>Graphics Processing Unit</p>
                            <small>&#8369;2,000.00</small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"</td>
                <td>&#8369;2,000.00</td>
            </tr>

            <tr>
                <td>
                    <div class="cart-info">
                        <img src="image/m1.jpg">
                        <div>
                            <p>Mouse</p>
                            <small>&#8369;2,000.00</small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"</td>
                <td>&#8369;2,000.00</td>
            </tr>

            <tr>
                <td>
                    <div class="cart-info">
                        <img src="image/monitor1.jpg">
                        <div>
                            <p>Monitor</p>
                            <small>&#8369;5,000.00</small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"</td>
                <td>&#8369;5,000.00</td>
            </tr>
        </table>

        <div class="total-price">
            <table>
                <tr>
                    <td>Subtotal</td>
                    <td>&#8369;200.00</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>&#8369;20.00</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>&#8369;220.00</td>
                </tr>
            </table>
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