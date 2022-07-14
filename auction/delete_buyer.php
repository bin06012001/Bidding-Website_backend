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
echo "<img src='auction_logo.png' id='logo'/>";
echo "<br>";
echo "<form class='delete_buyer_form' action='check_delete_buyer.php' method='POST'>";

echo "<div>";

if(isset($_GET["buyer"]))
{

if($_GET["buyer"]=="no_account")
{
	echo "<h4>No Such User To Delete</h4>";
	echo "<br>";
	echo "<h4>Please Try Again</h4>";
 
}

else if($_GET["buyer"]=="deleted")
{
echo "<h4>Successfully Deleted User!</h4>";
}

else if($_GET["buyer"]=="wrong_password")
{
echo "<h4>Wrong User And Password Combination</h4>";
echo "<br>";
echo "<h4>Please Try Again</h4>";
}

 

}
 
 else
 {
 
echo "<h4>To Delete An Account, Please Enter The Buyer's Username and Password</h4>";


 }

echo "<label for='username' class='label'>Username: </label><input class='text' type='text' name='username' placeholder='Username'>";
echo "<br>";
echo "<label for='password' class='label'>Password:</label><input class='password'  type='password' name='password' placeholder='Password'>";
echo "<br>";
echo "<input class='submit' type='submit' value='Delete User'/>";	
echo "</form>";
echo "</div>";



?>
</body>
</html>


