<html>
<head> <title>Signup</title> 
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
    <?php session_start(); ?>
    <div id="signup">
    <div id="main">
   

    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" >


   
 <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
  <div class="container">
 <label for="name"><b>Your Name</b></label>
    <input type="text"  name="name" required>

    <label for="email"><b>Email</b></label>
    <input type="text"  name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="At least 6 characters" name="psw" required>
	
	<label for="rpsw"><b>Re-Enter Password</b></label>
    <input type="password"  name="rpsw" required>
        
    <button type="submit">Sign up</button>
     <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
  </div>
  
   <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn" onclick="window.location.href = 'main.php';">Cancel</button>
  </div>
    </form>

     <p>Already have an account? <a href="signin.php">Sign in</a>
     	<span style="float:right;">
       <a href="main.php">Back To Home Page</a>
    </span></p>    
</div>
    
</body>
</html>

<?php

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            
            
            if(empty($_POST['email'])){
                echo "Please enter your email";
            }
            else if(empty($_POST['name'])){
                echo "Please enter you name";
            }
			else if(empty($_POST['password'])){
				echo "Please enter your Password";
			}
            else{
                require 'connect.php';

           
                $name = $_POST['name'];
                $email = $_POST['email'];
				$password=$_POST['password'];

                setcookie('name', $name);
                setcookie('email', $email);
				setcookie('password',$password);
				
                header("Location: signup2.php");
            }
           
 
        }
?>


