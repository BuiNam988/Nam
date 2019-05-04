<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
	<title>My first Bootstrap Web</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="web.css">
</head>
<body>
	<nav class="navbar navbar-inverse sticky" >
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span> 
				</button>
				<a class="navbar-brand" href="homepage.html"><p>Phuong Nam</p></a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">Home</a></li>
					<li><a href="Categories.html">Products</a></li>
					<li><a href="#">Notice</a></li> 
					<li><a href="#">Help</a></li> 
				</ul>
				<form class="navbar-form navbar-left" action="/action_page.php">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search" style="">
					</div>
					<button type="submit" class="btn btn-default">Search</button>
				</form>
				<ul class="nav navbar-nav">
					<li> <a href=""><img src="Images/my5.png" style=""></a></li>
					<li><a href="#"><img src="Images/my1.png " style=""></a></li> 
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="login.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!--  -->
	<div class="container-fluid " style="margin-bottom: : 10px">
		<div class="row">
			<!--  -->
			<div class="col-sm-6">
				<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner">
						<div class="item active">
							<a href="">
								<img src="Images/my2.jpg" alt="sp1">
							</a>
						</div>

						<div class="item">
							<a href="">
								<img src="Images/my3.jpg" alt="sp2">
							</a>
						</div>

						<div class="item">
							<a href="">
								<img src="Images/my4.jpg" alt="sp3">
							</a>
						</div>
						

						<!-- Left and right controls -->
						<a class="left carousel-control" href="#myCarousel" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#myCarousel" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
				<!--  -->
			</div>
			<div class="col-sm-6 text-center" >
				<div class="text-center test " style="height: 80px "><h3>Hot Sale</h3></div>
				<div class="row" >
					<div class="col-sm-4" ">
						<div class="panel panel-default">
							<div class="panel-heading"><b>Versace Pour Homme</b></div>
							<div class="panel-body">
								<div><img src="Images/my6.jpg" style="">
								</div>
								<div class="text-center" ><b>Price: 100$</b></div>
							</div>
						</div>
						
					</div>
					<div class="col-sm-4" >
						<div class="panel panel-default">
							<div class="panel-heading"><b>Bright Crystal 2013 best</b></div>
							<div class="panel-body">
								<div ><img src="Images/my7.jpg" style="">
								</div>
								<div class="text-center"><b>Price: 100$</b></div>
							</div>
						</div>
						
					</div>

					<div class="col-sm-4" >
						
						<div class="panel panel-default">
							<div class="panel-heading"><b>My Burberry for Women</b></div>
							<div class="panel-body">
								<div style=""><img src="Images/my8.jpg" style="" >
								</div>
								<div class="text-center"><b>Price: 100$</b></div>
							</div>
							
						</div>
						
					</div>
				</div>
				
				
			</div>
		</div>
	</div>
	<!--  -->
	<div class="container-fluid" style="margin-top:20px;">
		<div class="text-center"><h3>For Man</h3></div>
		<div class="row text-center">
			<div class=" col-sm-3">
				<div class="panel panel-default">
					<div class="panel-heading"><b>Bright Crystal</b></div>
					<div class="panel-body">
						<div ><img src="Images/m1.jpg" style="">
						</div>
						<div class="text-center"><b>Price: 150$</b></div>
					</div>
				</div>
			</div>
			<div class=" col-sm-3">
				<div class="panel panel-default">
					<div class="panel-heading"><b>Nvasual</b></div>
					<div class="panel-body">
						<div ><img src="Images/m2.jpg" style="">
						</div>
						<div class="text-center"><b>Price: 150$</b></div>
					</div>
				</div>
			</div>
			<div class=" col-sm-3">
				<div class="panel panel-default">
					<div class="panel-heading"><b>Kalas</b></div>
					<div class="panel-body">
						<div ><img src="Images/m3.jpg" style="">
						</div>
						<div class="text-center"><b>Price: 150$</b></div>
					</div>
				</div>
			</div>
			<div class=" col-sm-3">
				<div class="panel panel-default">
					<div class="panel-heading"><b>Ubuntu</b></div>
					<div class="panel-body">
						<div ><img src="Images/m4.jpg" style="">
						</div>
						<div class="text-center"><b>Price: 150$</b></div>
					</div>
				</div>
			</div>
			<div class=" col-sm-3">
				<div class="panel panel-default">
					<div class="panel-heading"><b>Maslow</b></div>
					<div class="panel-body">
						<div ><img src="Images/m5.jpg" style="">
						</div>
						<div class="text-center"><b>Price: 150$</b></div>
					</div>
				</div>
			</div>
			<div class=" col-sm-3">
				<div class="panel panel-default">
					<div class="panel-heading"><b>Lipice</b></div>
					<div class="panel-body">
						<div ><img src="Images/m6.jpg" style="">
						</div>
						<div class="text-center"><b>Price: 150$</b></div>
					</div>
				</div>
			</div>
			<div class=" col-sm-3">
				<div class="panel panel-default">
					<div class="panel-heading"><b>Nivia</b></div>
					<div class="panel-body">
						<div ><img src="Images/m7.jpg" style="">
						</div>
						<div class="text-center"><b>Price: 150$</b></div>
					</div>
				</div>
			</div>
			<div class=" col-sm-3">
				<div class="panel panel-default">
					<div class="panel-heading"><b>Omomatic</b></div>
					<div class="panel-body">
						<div ><img src="Images/m8.jpg" style="">
						</div>
						<div class="text-center"><b>Price: 150$</b></div>
					</div>
				</div>
			</div>
			<div class=" col-sm-3">
				<div class="panel panel-default">
					<div class="panel-heading"><b>Downny</b></div>
					<div class="panel-body">
						<div ><img src="Images/m9.jpg" style="">
						</div>
						<div class="text-center"><b>Price: 150$</b></div>
					</div>
				</div>
			</div>
			<div class=" col-sm-3">
				<div class="panel panel-default">
					<div class="panel-heading"><b>Comfort</b></div>
					<div class="panel-body">
						<div ><img src="Images/m10.jpg" style="">
						</div>
						<div class="text-center"><b>Price: 150$</b></div>
					</div>
				</div>
			</div>
			<div class=" col-sm-3">
				<div class="panel panel-default">
					<div class="panel-heading"><b>Diana</b></div>
					<div class="panel-body">
						<div ><img src="Images/m11.jpg" style="">
						</div>
						<div class="text-center"><b>Price: 150$</b></div>
					</div>
				</div>
			</div>
			<div class=" col-sm-3">
				<div class="panel panel-default">
					<div class="panel-heading"><b>Kotex</b></div>
					<div class="panel-body">
						<div ><img src="Images/m12.jpg" style="">
						</div>
						<div class="text-center"><b>Price: 150$</b></div>
					</div>
				</div>
			</div>
			
		</div>



	</div>
	<!--  -->
	<div class="container-fluid" style="margin-top:20px ">
		<div class="text-center"><h3>For Woman</h3></div>
		<div class="row text-center">
			<div class=" col-sm-3">
				<div class="panel panel-default">
					<div class="panel-heading"><b>Durex</b></div>
					<div class="panel-body">
						<div ><img src="Images/g1.jpg" style="">
						</div>
						<div class="text-center"><b>Price: 150$</b></div>
					</div>
				</div>
			</div>
			<div class=" col-sm-3">
				<div class="panel panel-default">
					<div class="panel-heading"><b>Sting</b></div>
					<div class="panel-body">
						<div ><img src="Images/g2.jpg" style="">
						</div>
						<div class="text-center"><b>Price: 150$</b></div>
					</div>
				</div>
			</div>
			<div class=" col-sm-3">
				<div class="panel panel-default">
					<div class="panel-heading"><b>Vodka</b></div>
					<div class="panel-body">
						<div ><img src="Images/g3.jpg" style="">
						</div>
						<div class="text-center"><b>Price: 150$</b></div>
					</div>
				</div>
			</div>
			<div class=" col-sm-3">
				<div class="panel panel-default">
					<div class="panel-heading"><b>Ploding ketten</b></div>
					<div class="panel-body">
						<div ><img src="Images/g4.jpg" style="">
						</div>
						<div class="text-center"><b>Price: 150$</b></div>
					</div>
				</div>
			</div>
			<div class=" col-sm-3">
				<div class="panel panel-default">
					<div class="panel-heading"><b>Brain Wolf</b></div>
					<div class="panel-body">
						<div ><img src="Images/g5.jpg" style="">
						</div>
						<div class="text-center"><b>Price: 150$</b></div>
					</div>
				</div>
			</div>
			<div class=" col-sm-3">
				<div class="panel panel-default">
					<div class="panel-heading"><b>Duy Dang Kaka</b></div>
					<div class="panel-body">
						<div ><img src="Images/g6.jpg" style="">
						</div>
						<div class="text-center"><b>Price: 150$</b></div>
					</div>
				</div>
			</div>
			<div class=" col-sm-3">
				<div class="panel panel-default">
					<div class="panel-heading"><b>Teamo</b></div>
					<div class="panel-body">
						<div ><img src="Images/g7.jpg" style="">
						</div>
						<div class="text-center"><b>Price: 150$</b></div>
					</div>
				</div>
			</div>
			<div class=" col-sm-3">
				<div class="panel panel-default">
					<div class="panel-heading"><b>Rhythm</b></div>
					<div class="panel-body">
						<div ><img src="Images/g8.jpg" style="">
						</div>
						<div class="text-center"><b>Price: 150$</b></div>
					</div>
				</div>
			</div>
			<div class=" col-sm-3">
				<div class="panel panel-default">
					<div class="panel-heading"><b>Ding Tea</b></div>
					<div class="panel-body">
						<div ><img src="Images/g9.jpg" style="">
						</div>
						<div class="text-center"><b>Price: 150$</b></div>
					</div>
				</div>
			</div>
			<div class=" col-sm-3">
				<div class="panel panel-default">
					<div class="panel-heading"><b>Tocotoco</b></div>
					<div class="panel-body">
						<div ><img src="Images/g10.jpg" style="">
						</div>
						<div class="text-center"><b>Price: 150$</b></div>
					</div>
				</div>
			</div>
			<div class=" col-sm-3">
				<div class="panel panel-default">
					<div class="panel-heading"><b>Royal Tea</b></div>
					<div class="panel-body">
						<div ><img src="Images/g11.jpg" style="">
						</div>
						<div class="text-center"><b>Price: 150$</b></div>
					</div>
				</div>
			</div>
			<div class=" col-sm-3">
				<div class="panel panel-default">
					<div class="panel-heading"><b>Feeling Tea</b></div>
					<div class="panel-body">
						<div ><img src="Images/g12.jpg" style="">
						</div>
						<div class="text-center"><b>Price: 150$</b></div>
					</div>
				</div>
			</div>
			
		</div>



	</div>

	<div class="container-fluid" style="background-color: #F98B8B; margin-top:20px ">
		<div class="text-center"><h3>_______________About Us_____________</h3></div>
		<div class="row text-center">
			<div class="col-sm-4">
				<h4>CUSTOMER CARE</h4>
				<p>Help Center</p>
				<p>Shopee Mall</p>
				<p>Shopping guide</p>
				<p>Sales Guide</p>
				<p>Pay</p>
				<p>Transport</p>
				<p>Returns & Refunds</p>
				<p>Customer care</p>
				<p>Warranty Policy</p>
				
			</div>
			<div class="col-sm-4">
				<h4>ABOUT PHUONG NAM</h4>
				<p>Introducing BS Vietnam</p>
				<p>Recruitment</p>
				<p>Terms Shopee</p>
				<p>Privacy Policy</p>
				<p>Genuine</p>
				<p>Flash Sales</p>
				
			</div>
			<div class="col-sm-4">
				<h4>PAY</h4>
				<p>Visa</p>
				<p>Master Card</p>
				<h4>SHIPPING UNITS</h4>
				<p>Delivery of Savings</p>
				<p>Fast delivery</p>
				<p>Viettel Post</p>
				
			</div>

			
		</div>
	</div>
	<div class="container-fluid text-center" style="background-color: #F98B8B; margin-top:20px ">
		
		<p>Address: Floor 29, Lotte Building, 54 Nguyen Lieu Giai, Cong Vi Ward, Ba Dinh District, Hanoi.</p> 
		<p>Support: 19001221 - Email: support@blackswan.vn</p>
		<p>Business number: 0106773786 issued by the Department of Planning and Investment of Hanoi on 10/02/2015</p>
		<p>© 2015 - All Rights reserved by Phuong Nam</p>
		

	</div>





</body>
</html>