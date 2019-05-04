<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
  <title>My first Bootstrap Web</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="web.css">
  <style>
  div input {
   width:300px;
 }
</style>
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
          <li class=""><a href="homepage.html">Home</a></li>
          <li><a href="Categories.html">Products</a></li>
          <li><a href="#">Notice</a></li> 
          <li><a href="#">Help</a></li> 
        </ul>
      </ul>
      <form class="navbar-form navbar-left" action="/action_page.php">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
      </form>
      <ul class="nav navbar-nav">
       <li> <a href=""><img src="Images/my5.png" ></a></li>
       <li><a href="#"><img src="Images/my1.png "></a></li> 
     </ul>
     <ul class="nav navbar-nav navbar-right">
      <li><a href="login.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</div>
</nav>

<div class="container-fluid text-center">
  <div class="row">
    <div class="col-lg-3"><h2></h2></div>
    <div class="col-lg-6 border" style="border-style: groove;">
      <form action="/action_page.php" method="post" style="margin: 10px auto;">
        <div class="text-center" style="color: red"><h3>Register</h3></div>
        <div ><input type="phone" name="Phone" placeholder="Phone number" required></div><br>
        <div><input type="Email" name="Email" placeholder="Email" required=""></div><br>
        <div><input type="text" name="User name" placeholder="User name" required=""></div><br>
        <div><input type="password" name="password" placeholder="Password" required=""></div><br>
        <div><input type="password" name="retype password" placeholder="Retype password" required=""></div><br>
        <div><input type="text" name="Secure code" placeholder="Secure code" style="width:240px;"> <img src="Images/secure.gif" style="width: 60px; height: 25px"></div><br>
        <div><input type="submit" value="Regis" style="width: 60px"> <input type="submit" value="Cancel" style="width: 60px"></div><br>
        <div">
      </form>
      <p class="text-center">If you already have an account,<a href="">click here to login.</a></p>
      <div style="background-color: #134FE7; width: 150px;height: 25px; float: left; margin-bottom: 10px"><a href="https://facebook.com" style="color: #FFFFFF">Login with Facebook</a></div>
      <div style="background-color: #FF1D06;  width: 150px;height: 25px; float: right; margin-bottom: 10px"><a href="" style="color: #FFFFFF">Login with Google</a></div>
    </div><br>
    <div class="col-sm-3"></div>
  </div>
</div>

<div class="container-fluid" style="background-color: #F98B8B; margin-top:20px ">
  <div class="text-center"><h3>_______________About Us_____________</h3></div>
  <div class="row text-center">
    <div class="col-lg-4">
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
    <div class="col-lg-4">
      <h4>ABOUT PHUONG NAM</h4>
      <p>Introducing BS Vietnam</p>
      <p>Recruitment</p>
      <p>Terms Shopee</p>
      <p>Privacy Policy</p>
      <p>Genuine</p>
      <p>Flash Sales</p>

    </div>
    <div class="col-lg-4">
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