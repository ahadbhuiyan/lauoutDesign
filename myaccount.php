<!DOCTYPE html>
<!-- Template by Quackit.com -->
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="style.css">  
	</head>
	
	<body>
		<header>
			<div class="header_left">			
				<img src="image/shopping_cart1.png">
			</div>	  

			<div class="header_middle">
				<p style="font-family:verdana; font-size:15px; font-weight:bold">Welcome to Online Shopping</p><br><br />
				<form id="search" class="form-inline">
					<input type="search" class="form-control" size="60" placeholder="search">
					<input type="button" class="btn btn-success" value="Search" />	
				</form>
			</div>     
				
			<div class="header_right">
				<a href="index.php">Sign in </a>  | 
				<a href="account.php">Register</a>  | 
				<a href="shoppingcart.php">My Account</a>  | 
				<a href="checkout">Track Rocord</a>				
				
				<div class="support">
					<p>Cash on Delivery | 30 Day Return</p>
					<p>24/7 ustomer Service : +88 01711974171</p>
				</div>
				
				<div class="chart_img">
					<p><img class="image" src="image/mycart.png">My Cart</p>
				</div>
			</div> 
			
		</header>
		
			<nav class="nav_area">
				<ul class="nav nav-pills">
					<li role="presentation" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button"> ELECTRONICS <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">COMPUTER</a></li>
							<li><a href="#">MOBILE</a></li>
							<li><a href="#">TELEVISION</a><li>
							<li><a href="#">VEDIO CAMERA</a><li>
							<li><a href="#">LIGHT BULBES</a><li>
							<li><a href="#">IRON</a></li>
						</ul>
					</li>
					<li role="presentation" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button">MAN<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">SHIRT</a></li>
							<li><a href="#">PANT</a></li>
							<li><a href="#">TEE SHIRT</a></li>
							<li><a href="#">PANJABI</a></li>
							<li><a href="#">PAYJAMA</a></li>
							<li><a href="#">BELT</a></li>
							<li><a href="#">WATCH</a></li>
							<li><a href="#">FATUA</a></li>
							<li><a href="#">SUITING & BLAZERS</a></li>
							<li><a href="#">SOCKS & HOSIERY</a></li>
						</ul>
					</li>
					<li role="presentation" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button">WOMAN <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">SHAREE</a></li>
							<li><a href="#">SKIRT</a></li>
							<li><a href="#">SHALWAR KAMEEZ</a></li>
							<li><a href="#">JEWELLERY ACCESSORIES</a></li>
							<li><a href="#">HAND BAG</a></li>
							<li><a href="#">SCRAF</a></li>
							<li><a href="#">SUNGLASS</a></li>
							<li><a href="#">SHAWLS</a></li>
							<li><a href="#">COSMETICS</a></li>
						</ul>
					</li>		
					<li role="presentation" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button">BABY & KIDS <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">DRESS</a></li>
							<li><a href="#">SHOE</a></li>
							<li><a href="#">OIL</a></li>
							<li><a href="#">SHAMPOO</a></li>
							<li><a href="#">BATH & WASH</a></li>
							<li><a href="#">DIAPER</a></li>
							<li><a href="#">BABY TRALLY</a></li>
							<li><a href="#">TOYS</a></li>								
						</ul>
					</li>
					<li role="presentation" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button">BOOKS & MEDIA <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">CHILDREN'S CLASSIC BOOK</a></li>
							<li><a href="#">MAGAZIN</a></li>
							<li><a href="#">SCIENCE FICTION</a></li>
							<li><a href="#">DISTIONARY</a></li>
							<li><a href="#">POETRY</a></li>
							<li><a href="#">COMIC</a></li>
						</ul>
					</li>
					<li role="presentation" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button">HOSE HOLD <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">LAUNDRY DETERGENT</a></li>
							<li><a href="#">ALL PURPOSE CLEANER</a></li>
							<li><a href="#">BASIC TOOLS</a></li>
							<li><a href="#">WASTEBASKET</a></li>
							<li><a href="#">BASKET</a></li>
							<li><a href="#">DUST CLEANER</a></li>
							<li><a href="#">TOILET PAPER</a></li>
							<li><a href="#">HANGER</a></li>
						</ul>
					</li>
					<li role="presentation" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button">ALL DEPARTMENTS<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">READYMATE GARMENTS</a></li>
							<li><a href="#">JEWELERY</a></li>
							<li><a href="#">LEATHER</a></li>
							<li><a href="#">FOOD</a></li>
						</ul>
					</li>
					
				</ul>
			</nav>	
		
		<main class="main_log_reg">
		
			<div class="log_label">
				<p>LOGIN</P>
			</div>
		
			<div class="reg_label">
				<p>REGISTER</P>
			</div>
		
			<div class="login"> 
				<div class="container">
					<form role="form">
						<div class="form-group">
							<div class="col-xs-6">
								<label for="ex1">E-mail Address</label>
								<input class="form-control" id="ex1" type="text">
							</div>
						</div>
					</form>
				</div>
				<div class="container">
					<form role="form">
						<div class="form-group">
							<div class="col-xs-6">
								<label for="ex1">Passward</label>
								<input class="form-control" id="ex1" type="text">
							</div>
						</div>
					</form>
				</div>
				<div class="container">
					<form role="form">
						<div class="form-group">
							<div class="col-xs-6">
								<label for="ex1"></label>
							</div>
						</div>
					</form>
				</div>
				<div class="container">
					<div class="form-group">        
						<div class="col-sm-offset-2 col-sm-3">
							<button type="submit" class="btn btn-success">Login</button>
						</div>
					</div>
				</div>
				<div class="container">
					<form role="form">
						<div class="form-group">
							<div class="col-xs-6">
								<label for="ex1"></label>
							</div>
						</div>
					</form>
				</div>
				<div class="container">
					<div class="form-group">        
						<div class="col-xs-6">
							<div class="checkbox">
								<label><input type="checkbox"> Remember me</label>
							</div>
						</div>
					</div>
				</div>
				<div class="container">
					<form role="form">
						<div class="form-group">
							<div class="col-xs-6">
								<label for="ex1"></label>
							</div>
						</div>
					</form>
				</div>
				<div class="container">
					<div class="form-group">        
						<div class="col-sm-offset-2 col-sm-3">
							<label for="ex3">OR</label>
						</div>
					</div>
				</div>
			</div>
		
			<div class="register">
				<div class="container">
					<form role="form">
						<div class="form-group">
							<div class="col-xs-6">
								<label for="ex1">Full Name</label>
								<input class="form-control" id="ex1" type="text">
							</div>
						</div>
					</form>
				</div>
				<div class="container">
					<form role="form">
						<div class="form-group">
							<div class="col-xs-6">
								<label for="ex1">Email Address</label>
								<input class="form-control" id="ex1" type="text">
							</div>
						</div>
					</form>
				</div>
				<div class="container">
					<form role="form">
						<div class="form-group">
							<div class="col-xs-6">
								<label for="ex1">Confirm E-mail Address</label>
								<input class="form-control" id="ex1" type="text">
							</div>
						</div>
					</form>
				</div>
				<div class="container">
					<form role="form">
						<div class="form-group">
							<div class="col-xs-6">
								<label for="ex1">Passward</label>
								<input class="form-control" id="ex1" type="text">
							</div>
						</div>
					</form>
				</div>
				<div class="container">
					<form role="form">
						<div class="form-group">
							<div class="col-xs-6">
								<label for="ex1">Confirm Passward</label>
								<input class="form-control" id="ex1" type="text">
							</div>
						</div>
					</form>
				</div>
				<div class="container">
					<form role="form">
						<div class="form-group">
							<div class="col-xs-6">
								<label for="ex1"></label>
							</div>
						</div>
					</form>
				</div>
				<div class="container">
					<div class="form-group">        
						<div class="col-sm-offset-3 col-sm-3">
							<button type="submit" class="btn btn-success">Register</button>
						</div>
					</div>
				</div>
				<div class="container">
					<form role="form">
						<div class="form-group">
							<div class="col-xs-5">
								<label for="ex1"></label>
							</div>
						</div>
					</form>
				</div>
			
				<div>
					<p style="text-align:center;">By clicking Register you confirm <br>that you accept the terms of Use</p>
				</div>
		      
				<div>
					<p style="text-align:center;">OR</p>
				</div>
			</div>
		</main>
		
		<div class="last_part">
		
			<div class="payment">
				<h4>Payment Methods</h4>
					<img src="image/payment_icon.png">
			</div>
		
			<div class="quick_links">		
				<h4>Quick Links</h4>	
					<a href="help.php">Help</a><br>
					<a href="shipping.php">Shipping Policy</a><br>
					<a href="cancelaton.php">Cancelation & Returns</a><br>
					<a href="faq.php">FAQ</a><br>
					<a href="privacy.php">Privacy & Policy</a><br>
					<a href="disclamer.php">Disclamer</a>			
			</div>
		
			<div class="social">
				<h4>Lets to be Social</h4>
				<a href="www.facebook.com"><img src="image/facebook.png"></a>
				<a href="www.google.com"><img src="image/googleplus.png"></a>
				<a href="www.twitter.com"><img src="image/twitter.png"></a>
			</div>
		
			<div class="contract">
				<h4>Contract Us</h4>
				<p>Bhuiyan Garden<br>
				House # 7, Road # 1, Block-C<br>
				Chand Uddan, Mohammadpur<br>
				Dhaka, Bangladesh.<br>
				<img src="image/mail.png">info@abdullah.net<br>
				<img src="image/caller.jpg">+88 01711974171</p>		
			</div>		
		</div>
		
	</body>
	
	<footer>
		<p>All Right to Reserved by Abdullah Soft.</p>
	</footer>
</html>