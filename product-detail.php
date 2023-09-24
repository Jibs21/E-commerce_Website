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


		<!--Products detail -->
    <div class="small-container single-product">
        <div class="row">
            <div class="col-2">
                <img src="image/avr1.jpg" width="100%" id="ProductImg">

				<div class="small-img-row">
					<div class="small-img-col">
						<img src="image/avr2.jpg" width="100%" class="small-img">
					</div>
					<div class="small-img-col">
						<img src="image/avr3.jpg" width="100%"class="small-img">
					</div>
					<div class="small-img-col">
						<img src="image/avr4.jpg" width="100%"class="small-img">
					</div>
					<div class="small-img-col">
						<img src="image/avr7.jpg" width="100%"class="small-img">
					</div>
					<div class="small-img-col">
						<img src="image/avr8.jpg" width="100%"class="small-img">
					</div>
					<div class="small-img-col">
						<img src="image/avr9.jpg" width="100%"class="small-img">
					</div>
				</div>

            </div>
            <div class="col-2">
                <p>Home / Automatic Voltage Regulator</p>
                <h1>Automatic Voltage Regulator</h1>
                <h4>&#8369;200-350.00</h4>
                <select>
                    <option>220V</option>
                    <option>250V</option>
                    <option>300V</option>
                    <option>500V</option>
                </select>
                <input type="number" value="1">
                <a href="login.php" class="btn">Add to Cart</a>

                <h3>Product Details<i class="fa fa-indent"></i></h3>
				<br>
                <p>Model: Secure AVR.<br>
                    Automatic Voltage Regulator.<br>
                    Solid state electronic device.<br>
                    Voltage: 220V AVR.<br>
                    Watts: 500 Watts.<br>
                    Max Capacity: 50VA.<br>
                    Fuse: 5A.<br>
                    Socket: 3 x 220V.</p>
            </div>
        </div>
    </div>

	<div class="small-container single-product">
        <div class="row">
            <div class="col-2">
                <img src="image/case1.jpg" width="100%" id="CaseImg">

				<div class="small-img-row">
					<div class="small-img-col">
						<img src="image/case2.jpg" width="100%" class="case-img">
					</div>
					<div class="small-img-col">
						<img src="image/case3.jpg" width="100%"class="case-img">
					</div>
					<div class="small-img-col">
						<img src="image/case4.jpg" width="100%"class="case-img">
					</div>
					<div class="small-img-col">
						<img src="image/case5.jpg" width="100%"class="case-img">
					</div>
				</div>

            </div>
            <div class="col-2">
                <h1>System Unit Case</h1>
                <h4>&#8369;2,000-6,000.00</h4>
                <select>
                    <option>Mini-iTX Case</option>
                    <option>MicroATX Case</option>
                    <option>ATX Case</option>
                    <option>EATX Case</option>
                </select>
                <input type="number" value="1">
                <a href="cart.php" class="btn">Add to Cart</a>

                <h3>Product Details<i class="fa fa-indent"></i></h3>
				<br>
                <p>For expansion cards such as graphics cards, sound cards, network cards 
					(Wi-Fi, Ethernet, Bluetooth) and connector cards (USB, FireWire, eSATA).</p>
            </div>
        </div>
    </div>

	<div class="small-container single-product">
        <div class="row">
            <div class="col-2">
                <img src="image/gpu1.jpg" width="100%" id="GPUImg">

				<div class="small-img-row">
					<div class="small-img-col">
						<img src="image/gpu2.jpg" width="100%" class="gpu-img">
					</div>
					<div class="small-img-col">
						<img src="image/gpu3.jpg" width="100%"class="gpu-img">
					</div>
					<div class="small-img-col">
						<img src="image/gpu4.jpg" width="100%"class="gpu-img">
					</div>
					<div class="small-img-col">
						<img src="image/gpu5.jpg" width="100%"class="gpu-img">
					</div>
				</div>

            </div>
            <div class="col-2">
                <h1>Graphics Processing Unit</h1>
                <h4>&#8369;20,000-60,000.00</h4>
                <select>
                    <option>RX</option>
                    <option>GTX</option>
                    <option>GT</option>
                    <option>RTX</option>
                </select>
                <input type="number" value="1">
                <a href="cart.php" class="btn">Add to Cart</a>

                <h3>Product Details<i class="fa fa-indent"></i></h3>
				<br>
                <p>GPU - AMD, Nvidia.<br>
					Core Count.<br>
					Core Clock Speed.<br>
					Memory Type.<br>
					Memory Size.<br>
					Memory Bandwidth.<br>
					Motherboard Interface.<br>
					Thermal Design Power.</p>
            </div>
        </div>
    </div>

	<div class="small-container single-product">
        <div class="row">
            <div class="col-2">
                <img src="image/kb1.jpg" width="100%" id="KBImg">

				<div class="small-img-row">
					<div class="small-img-col">
						<img src="image/kb2.jpg" width="100%" class="kb-img">
					</div>
					<div class="small-img-col">
						<img src="image/kb3.jpg" width="100%"class="kb-img">
					</div>
					<div class="small-img-col">
						<img src="image/kb4.jpg" width="100%"class="kb-img">
					</div>
					<div class="small-img-col">
						<img src="image/kb5.jpg" width="100%"class="kb-img">
					</div>
				</div>

            </div>
            <div class="col-2">
                <h1>Keyboard</h1>
                <h4>&#8369;2,000-5,000.00</h4>
                <select>
                    <option>Blue Switch</option>
                    <option>Red Switch</option>
                    <option>Brown Switch</option>
                </select>
                <input type="number" value="1">
                <a href="cart.php" class="btn">Add to Cart</a>

                <h3>Product Details<i class="fa fa-indent"></i></h3>
				<br>
                <p>12.6" W x 6.5" L x 6.5" D.<br>
					1.3 pounds.<br>
					2.4 GHz Wireless.<br>
					Laptop-Style Individual Keys.<br>
				</p>
            </div>
        </div>
    </div>

	<div class="small-container single-product">
        <div class="row">
            <div class="col-2">
                <img src="image/m1.jpg" width="100%" id="MImg">

				<div class="small-img-row">
					<div class="small-img-col">
						<img src="image/m2.jpg" width="100%" class="m-img">
					</div>
					<div class="small-img-col">
						<img src="image/m3.jpg" width="100%"class="m-img">
					</div>
					<div class="small-img-col">
						<img src="image/m4.jpg" width="100%"class="m-img">
					</div>
					<div class="small-img-col">
						<img src="image/m5.jpg" width="100%"class="m-img">
					</div>
				</div>

            </div>
            <div class="col-2">
                <h1>Mouse</h1>
                <h4>&#8369;1,000-5,000.00</h4>
                <select>
                    <option>Logitech</option>
                    <option>Razer</option>
                    <option>ViperMini</option>
                    <option>ROG</option>
                </select>
                <input type="number" value="1">
                <a href="cart.php" class="btn">Add to Cart</a>

                <h3>Product Details<i class="fa fa-indent"></i></h3>
				<br>
                <p>Metallic Black, Blue and Red<br>
					Blue LED Technology.<br>
					Core Clock Speed.<br>
					1.2m.<br>
					1,600 dpi.<br>
					USB, wired.<br>
				</p>
            </div>
        </div>
    </div>

	<div class="small-container single-product">
        <div class="row">
            <div class="col-2">
                <img src="image/monitor1.jpg" width="100%" id="MonitorImg">

				<div class="small-img-row">
					<div class="small-img-col">
						<img src="image/monitor2.jpg" width="100%" class="monitor-img">
					</div>
					<div class="small-img-col">
						<img src="image/monitor3.jpg" width="100%"class="monitor-img">
					</div>
					<div class="small-img-col">
						<img src="image/monitor6.jpg" width="100%"class="monitor-img">
					</div>
					<div class="small-img-col">
						<img src="image/monitor5.jpg" width="100%"class="monitor-img">
					</div>
				</div>

            </div>
            <div class="col-2">
                <h1>Monitor</h1>
                <h4>&#8369;5,000-9,000.00</h4>
                <select>
                    <option>ROG</option>
                    <option>Acer</option>
                    <option>Nvision</option>
                    <option>Predator</option>
                </select>
                <input type="number" value="1">
                <a href="cart.php" class="btn">Add to Cart</a>

                <h3>Product Details<i class="fa fa-indent"></i></h3>
				<br>
                <p>Resolution<br>
					Size<br>
					Aspect Ratio<br>
					Panel Type - IPS, VA, TN<br>
					Refresh Rate<br>
					Response Time<br>
					Synchronisation Technology - G-Sync, FreeSync<br>
					Viewing Angles<br>
					Input Connectors - HDMI, DisplayPort, D-Sub<br>
					Curvature<br>
					Brightness<br>
					HDR<br>
					Contrast<br>
					Color Space
				</p>
            </div>
        </div>
    </div>

<!--title-->
	<div class="small-container">
		<div class="row row-2">
			<h2>Related Products</h2>
			<p>View More</p>
		</div>
	</div>

<!--Products-->
	<div class="small-container">
		
		<div class="row">
			<div class="col-4">
				<img src="image/avr1.jpg">
				<h4>Automatic Voltage Regulator</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-o"></i>
				</div>
				<p>&#8369;350.00</p>
			</div>


			<div class="col-4">
				<img src="image/case1.jpg">
				<h4>System Unit Case</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-o"></i>
				</div>
				<p>&#8369;2000.00</p>
			</div>


			<div class="col-4">
				<img src="image/gpu1.jpg">
				<h4>Graphics Processing Unit</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half-o"></i>
				</div>
				<p>&#8369;20,000.00</p>
			</div>
		

			<div class="col-4">
				<img src="image/i3.jpg">
				<h4>Intel Processor</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half-o"></i>
				</div>
				<p>&#8369;18,000.00</p>
			</div>
			<div class="col-4">
				<img src="image/i5.jpg">
				<h4>Intel Processor</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half-o"></i>
				</div>
				<p>&#8369;20,000.00</p>
			</div>


			<div class="col-4">
				<img src="image/ryzen5.jpg">
				<h4>Ryzen Processor</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half-o"></i>
				</div>
				<p>&#8369;15,000.00</p>
			</div>
			<div class="col-4">
				<img src="image/ryzen7.jpg">
				<h4>Ryzen Processor</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half-o"></i>
				</div>
				<p>&#8369;25,000.00</p>
			</div>


			<div class="col-4">
				<img src="image/kb1.jpg">
				<h4>Keyboard</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half-o"></i>
				</div>
				<p>&#8369;3,000.00</p>
			</div>


			<div class="col-4">
				<img src="image/m1.jpg">
				<h4>Mouse</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half-o"></i>
				</div>
				<p>&#8369;1,000.00</p>
			</div>


			<div class="col-4">
				<img src="image/monitor1.jpg">
				<h4>Monitor</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half-o"></i>
				</div>
				<p>&#8369;1,500.00</p>
			</div>
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
		
	<!--JS for Products-->
	<script>
		var ProductImg = document.getElementById("ProductImg");
		var SmallIng= document.getElementsByClassName("small-img");

		SmallIng[0].onclick = function()
		{
			ProductImg.src = SmallIng[0].src;
		}

		SmallIng[1].onclick = function()
		{
			ProductImg.src = SmallIng[1].src;
		}

		SmallIng[2].onclick = function()
		{
			ProductImg.src = SmallIng[2].src;
		}

		SmallIng[4].onclick = function()
		{
			ProductImg.src = SmallIng[4].src;
		}

		SmallIng[5].onclick = function()
		{
			ProductImg.src = SmallIng[5].src;
		}

		SmallIng[6].onclick = function()
		{
			ProductImg.src = SmallIng[6].src;
		}

		SmallIng[7].onclick = function()
		{
			ProductImg.src = SmallIng[7].src;
		}
	</script>

	<script>
		var CaseImg = document.getElementById("CaseImg");
		var CasesIng= document.getElementsByClassName("case-img");

		CasesIng[0].onclick = function()
		{
			CaseImg.src = CasesIng[0].src;
		}

		CasesIng[1].onclick = function()
		{
			CaseImg.src = CasesIng[1].src;
		}

		CasesIng[2].onclick = function()
		{
			CaseImg.src = CasesIng[2].src;
		}

		CasesIng[3].onclick = function()
		{
			CaseImg.src = CasesIng[3].src;
		}

		CasesIng[4].onclick = function()
		{
			CaseImg.src = CasesIng[4].src;
		}
	</script>

	<script>
		var GPUImg = document.getElementById("GPUImg");
		var GPUSIng= document.getElementsByClassName("gpu-img");

		GPUSIng[0].onclick = function()
		{
			GPUImg.src = GPUSIng[0].src;
		}

		GPUSIng[1].onclick = function()
		{
			GPUImg.src = GPUSIng[1].src;
		}

		GPUSIng[2].onclick = function()
		{
			GPUImg.src = GPUSIng[2].src;
		}

		GPUSIng[3].onclick = function()
		{
			GPUImg.src = GPUSIng[3].src;
		}

		GPUSIng[4].onclick = function()
		{
			GPUImg.src = GPUSIng[4].src;
		}	
	</script>

	<script>
		var KBImg = document.getElementById("KBImg");
		var KBSIng= document.getElementsByClassName("kb-img");

		KBSIng[0].onclick = function()
		{
			KBImg.src = KBSIng[0].src;
		}

		KBSIng[1].onclick = function()
		{
			KBImg.src = KBSIng[1].src;
		}

		KBSIng[2].onclick = function()
		{
			KBImg.src = KBSIng[2].src;
		}

		KBSIng[3].onclick = function()
		{
			KBImg.src = KBSIng[3].src;
		}

		KBSIng[4].onclick = function()
		{
			KBImg.src = KBSIng[4].src;
		}
	</script>

	<script>
		var MImg = document.getElementById("MImg");
		var MSIng= document.getElementsByClassName("m-img");

		MSIng[0].onclick = function()
		{
			MImg.src = MSIng[0].src;
		}

		MSIng[1].onclick = function()
		{
			MImg.src = MSIng[1].src;
		}

		MSIng[2].onclick = function()
		{
			MImg.src = MSIng[2].src;
		}

		MSIng[3].onclick = function()
		{
			MImg.src = MSIng[3].src;
		}

		MSIng[4].onclick = function()
		{
			MImg.src = MSIng[4].src;
		}	
	</script>

	<script>
		var MonitorImg = document.getElementById("MonitorImg");
		var MonitorsIng= document.getElementsByClassName("monitor-img");

		MonitorsIng[0].onclick = function()
		{
			MonitorImg.src = MonitorsIng[0].src;
		}

		MonitorsIng[1].onclick = function()
		{
			MonitorImg.src = MonitorsIng[1].src;
		}

		MonitorsIng[2].onclick = function()
		{
			MonitorImg.src = MonitorsIng[2].src;
		}

		MonitorsIng[3].onclick = function()
		{
			MonitorImg.src = MonitorsIng[3].src;
		}

		MonitorsIng[4].onclick = function()
		{
			MonitorImg.src = MonitorsIng[4].src;
		}

		
	</script>

	</body>
	
</html>