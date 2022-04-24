<!DOCTYPE html>
<html>
<head>

<style>
body {
  font-family: "Lato", sans-serif;
  font-size: 30px;
}


ul {
  list-style-type: none;
  margin: 0px 0px;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  position: -webkit-sticky; /* Safari */
  position: sticky;
  top: 0;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 10px 10px;
  text-decoration: none;
  
}

li a:hover {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}



.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 15;
  left: 0;
  background-color: #333;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;

 
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}


.footer {
font-size:15px;
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   padding: 2px 2px;
   background-color: #333;
   color: white;
   text-align: center;
}


.search-container {
float: right;
  color:#FFF;
  width:1000px ;
  margin : 10px 0px 0px 0px;
}

.items{
	background-color:white;
	font-size:40px;
	
}

.grid-container {
  display: grid;
  grid-template-columns: auto auto auto;
  background-color: #ffffff;
  padding: 10px;
}
.grid-item {
  background-color: rgba(255, 255, 255, 0.8);
  border: 1px solid rgba(0, 0, 0, 0.8);
  padding: 20px;
  font-size: 30px;
  text-align: center;
}


</style>

<title>PalCulture </title>

</head>
<body>


<ul>
<li><div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">My Account</a>
  <a href="/Project/shoppingcart.html">Shopping Cart</a>
  <a href="/Project/checkout.html">Checkout</a>
  <a href="/Project/signin.php">Login</a>
  <a href="/Project/signup.php">Register</a>
</div>


<div id="main">
 
  <span style="font-size:25px;cursor:pointer; color:#FFF" onclick="openNav()">&#9776; </span>
</div></li>
<li></li>
<li></li>
<li></li>
<li></li>
<li><div class="search-container">
    <form action="">
      <input type="text" required size="80" name="search">
      <button type="submit">Submit</button>
    </form>
  </div></li>

  <li><a href="#home">Home</a></li>
  <li><a href="#aboutUs">About Us</a></li>
  <li><a href="#product">Product</a></li>
  
</ul>  
  
<?php
$servername = "localhost";
$username = "c85_master";
$password = "123456789";
$dbname = "c85dbschema_1151736_sql";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT Name, Price, Size FROM palestine";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "Name: " . $row["Name"]. "<br>Price: " . $row["Price"]. "<br>Size " . $row["Size"]. "<br><br><br><br><br>";
    }
} else {
    echo "0 results";
}
mysqli_close($conn);

?>


<div class="footer">
  <p>All images are copyright to their owners, this is just a hypothetical website &copy; 2019</p>
</div>


<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
 <!-- document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}

</script>

   
</body>
</html> 

<?php 
    function signup(){
        if($_COOKIE['user'] === ""){
         echo "hi " . $_COOKIE['user'];
      }
      else{
        echo  '| <a href="signin.php"> Sign In </a> | <a href="signup.php"> Sign Up </a>';
      }
  }

?>



