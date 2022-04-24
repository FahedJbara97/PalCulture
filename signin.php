<html>
<head> <title>Login</title> 
<style>
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #333;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #333;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

    <div id="main">
   

    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" >


   <h1>Login</h1>
      <hr>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>
  
   <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn" onclick="window.location.href = 'main.php';">Cancel</button>
    <span class="psw"><a href="#">Forgot your Password?</a></span>
  </div>
    </form>

     <p>If you dont have an account, <a href="signup.php"> Please Sign up here </a>
     	<span style="float:right;">
       <a href="main.php">Back To Home Page</a>
    </span></p>    
</div>
   
</body>
</html>


<?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
           
            if(empty($_POST['user'])){
                echo "Please enter your email";
            }
            else if(empty($_POST['password'])){
                echo "Please enter password";
            }
            else{
                session_start();
            $user = $_POST['user'];
            $pass = $_POST['password'];


                
                require 'connect.php';

                 // Write the SQL statement string to select all items
                 $sqlStatement = "SELECT `name` FROM `users` WHERE `email` = '$user' AND `password` = '$pass' ";

                 // Prepare the results
                 $result = $pdo->query($sqlStatement);

                 // Execute the SQL query and get all rows
                 $rows = $result->fetchAll();
                 
                 
                 if($rows){
                     
                     setcookie('username', $user);

                     echo "true";
                     header("Location: main.html");
                 }
                 else{
                     echo "Incorrect email or password. Please try again";
                 }
            }
     }


           
        ?>