<!DOCTYPE HTML>  
<html lang="en">
<head>
  <title>ATN company</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style type="text/css">
  body{
            margin:0px;
        }
        #container{
            width:1500px;
            border:1px solid gray;
            margin-left:auto;
            margin-right:auto;
        }
        #header{
            background-color:#73ad21;
            color:white;
        }
        #content{
            margin:15px;
        }
        #footer{
            background-color:#ddd;
            font-size:18px;
            text-align:center;
            padding:15px;
        }
        .title1{
            font-size:30px;
            text-align:center;
            padding-top:15px;
        }
        

    
</style>
</head>
<body> 

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $addressErr = "";
$name = $email = $gender = $comment = $Address = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["address"])) {
    $addressErr = "Address is required";
  } else {
    $address = test_input($_POST["address"]);
  }


  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<div id="container">
        <div id="header">
            <div class="title1">COMPANY ATN</div>
          </div>
  </div>
  <br><br>

  Name: <input type="text" name="name">
  <span class="error"><?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error"><?php echo $emailErr;?></span>
  <br><br>
 Address: <input type="text" name="Address">
  <span class="error"><?php echo $addressErr;?>
  <br><br>
  
  
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  

</form>
<table class="table table-condensed">
    <thead>
      <tr>
        <th>Name</th>
        <th>E-mail</th>
        <th>Address</th>
        <th>Gender</th>
      </tr>
    </thead>
    <tbody>
     
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>

    </tbody>
  </table>
  
  </body>
</html>