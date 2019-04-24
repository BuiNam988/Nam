<!DOCTYPE html>
<html>
<head>
	<title>Buy product</title>
  <title>My first Bootstrap Web</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="web.css">
  <style>
  
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
          <input type="text" class="form-control" placeholder="Search" style="">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
      </form>
      <ul class="nav navbar-nav">
       <li> <a href=""><img src="Images/my5.png"></a></li>
       <li><a href="#"><img src="Images/my1.png "></a></li> 
     </ul>
     <ul class="nav navbar-nav navbar-right">
      <li><a href="login.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</div>
</nav>

<div class="container-fluid">
  <div class="row">
   <div class="col-sm-3" style="background-color: "></div>
   
   <div class="col-sm-6 border" style="border-style: groove; ">
    <div class="container-fluid">
      <div class="row">
       <div><img src="Images/my10.jpg" style="width: 150px; height: 150px; float: left;"></div>
       <div class="text-left" style="float: right;">
         <h4>Chanel Nº5 Eau Première</h4>
         <p>Reduce 5% when buying online</p>
         <form action="/action_page.php" >
          Quantity (between 1 and 10):
          <input type="number" name="quantity" value = "1" min="1" max="10" style="width: 30px">

        </form>
      </div>
    </div>
  </div>
  <div class="container-fluid border" style="border-top: groove; margin-top: 20px; ">
    <div style="float: left;">

      <h4>Price</h4>
      <p>Code Sale</p>
      <p>Total</p>
    </div>

    <div class="text-right" style="float: right;">
      <h4  style="color: red">$150</h4>
      <input type="text" name="sale code" style="width: 100px">
      <h4 style="color: red">$150</h4>
      
    </div>
  </div>
  <div class="container-fluid border-top text-left" style=" border-top: groove; margin: 10px auto;">
   <form action="/action_page.php" method="post" style="margin: 20px, auto"><br>

    <input type="text" name="Name" placeholder="Name" required="" style="width: 40%;float: left;">
    <input type="phone" name="Phone number" placeholder="Phone number" required="" style="width: 40%; float: right;">
    <br>
    <br>
    <input type="text" name="" placeholder="Other required" style="width: 100%"><br>
    <br>

    <div class="container-fluid">
      <div class="row text-center">
        <div class="col-sm-6" >
          <button class="btn success " style="margin: 5px auto; width: 100%">
            <h5>PAYMENT ON DELIVERY</h5>
            <p>(View the item before payment)</p>
          </button>
        </div>
        <div class="col-sm-6" >
          <button class="btn success "  style="margin: 5px auto; width: 100%">
            <h5>ONLINE PAYMENT</h5>
            <p>(ATM, Visa, Master Card)</p>
          </button>
        </div>
      </div>
    </div>
  </form>

  
</div>
<div class="container-fluid text-center" style="background-color: #F98B8B; margin-top:20px ">

  <p>Address: Floor 29, Lotte Building, 54 Nguyen Lieu Giai, Cong Vi Ward, Ba Dinh District, Hanoi.</p> 
  <p>Support: 19001221 - Email: support@blackswan.vn</p>
  <p>Business number: 0106773786 issued by the Department of Planning and Investment of Hanoi on 10/02/2015</p>
  <p>© 2015 - All Rights reserved by Phuong Nam</p>
  

</div>
</div>

<div class="col-sm-3" ></div>
</div>
</div>
