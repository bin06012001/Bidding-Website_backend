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
  <li><a href="add_buyer.php">Back</a></li>
  
</ul>


<?php


echo "<img src='auction_logo.png' id='logo'/>";
echo "<br>";
echo "<form class='delete_item_form' action='check_delete_item.php' method='POST'>";

echo "<div class='box'>";
echo "<div class='container'>";
	if(isset($_GET["item"]))
	{

	if($_GET["item"]=="no_item")
	{
		echo "<h4>No such item exists</h4>";
		echo "<br>";
		echo "<h4>Please try again</h4>";
 
	}

	else if($_GET["item"]=="successful")
	{
	echo "<h4>Successfully deleted the item!</h4>";
	} 


	}
 
	else
	{
	echo "<h4>To Delete An Item, Please Enter The Item Name</h4>";
	}
	

echo "<label for='item_name' class='label'>Item Name: </label> <input class='text' type='text' name='item_name' placeholder='Item name'>";
echo "<input class='submit' type='submit' value='Delete Item'/>";	
echo "</form>";

?>
</body>
</html>


