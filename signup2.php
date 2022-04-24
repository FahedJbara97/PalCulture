<html>
<head><title> User Signup </title>
 </head>
 <link rel="stylesheet" href="../CSS/styleMain.css">  </head>
<body>
    <?php //session_start(); ?>
    <div id="signup">
        <p> Please enter your information </p>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
        <table>
        <tr>
            <td>UserName:</td>
            <td> <input type="text" name="user"> </td>
        </tr>
        <tr>
            <td>Pssword:</td>
            <td> <input type="password" name="pass"> </td>
        </tr>
        <tr>
        <td> <input type="submit" name="sub" value="done">
        </tr>

   </table>
    </form>
    <a href="main.php"> Back to main screen </a>
</div>

<br/>
</body>
</html>

<?php
//session_start();
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            
            $name = $_POST['user'];
            $pass = $_POST['pass'];

            if(empty($_POST['user'])){
                echo "Please enter a username";
            }
            else if(empty($_POST['pass'])){
                echo "Please enter a password";
            }
            else{
                echo "WORKS";
                require 'connect.php';

                $user = $_POST['user'];
                $pass = $_POST['pass'];


                setcookie('user', $user);
                setcookie('pass', $pass);

                header("Location: viewinfo.php");
				exit;
            }
           
 
        }
?>


