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
<body>





<ul>
  <li><a class="active" href="add_buyer.php">Home</a></li>
  <li><a href="login.php">Sign in</a></li>
  <li><a href="item_details.php">Items</a></li>
  <li><a href="delete_buyer.php">Delete Buyer</a></li>
  <li><a href="add_item.php">Add Items</a></li>
  <li><a href="delete_item.php">Delete Items</a></li>
</ul>



<?php

echo "<img src='auction_logo.png' id='logo'/>";
echo "<br>";


echo "<form class='add_buyer_form' action='check_buyer.php' method='POST'>";
echo "<div class='box'>";
echo "<div class='container'>";

if(isset($_GET["buyer"]))
{

if($_GET["buyer"]=="successful")
{
	echo "<h4>Successfully Added User!</h4>";
 
}

else if($_GET["buyer"]=="duplicate")
{
	echo "<h4>Buyer Already Exists. Please Enter Another Username And Password</h4>";
 
}

}

 
else
{
echo "<h4 >Please Add The Buyer's Username and Password</h4>";
}



echo "<label style=background:'white' for='username' class='label' > Username:</label>";
echo "<input class='text' type='text' name='username' placeholder='Username'>";
echo "<br>";



echo "<label for='password' class='label'>Password:</label>";
echo "<input class='password' type='password' name='password' placeholder='Password'>";
echo "<br>";
echo "<input class='submit' type='submit' value='Add Buyer'/>";	
echo "</form>";

echo "</div>";
echo "</div>";

?>

</body>
</html>


