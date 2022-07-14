<html>
<head><title></title>

<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #04AA6D;
}


div {
  
  width: 520px;
  padding: 20px;
  border: 5px solid seagreen;
  margin: 0;
}
</style>




 <link rel="stylesheet" type="text/css" href="style.css">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body style="background-color:#A9F5BC;">

<ul>
  <li><a href="add_buyer.php">Back</a></li>
  
</ul>
 

<?php

echo "<img src='auction_logo.png' id='logo'>";
echo "<br>";
echo "<form action='check_login.php' class='login_form' method='POST'>";
echo "<h3> Please Login...</h3>";

echo "<div>";
echo "<label for='username' class='label'> Username:</label>";
echo "<input class='text' type='text' name='username' placeholder='Username'>";
echo "<br>";
echo "<label for='password' class='label'>Password:</label>";
echo "<input  class='password' type='password' name='password' placeholder='Password'>";
echo "<br>";
echo "<input class='submit' type='submit' value='Sign in'/>";	
echo "</form>";
?>
</body>
</html>


