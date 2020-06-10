<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
require('connect.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['submit'])){
        // removes backslashes
 $username = $_POST['username'];
 
 $password = $_POST['password'];
 //Checking is user existing in the database or not
        $query = "SELECT * FROM users WHERE username='$username'
and password='$password'";
 $result = mysqli_query($conn,$query) or die(mysql_error());
 $rows = mysqli_num_rows($result);
        if($rows==1){
     $_SESSION['username'] = $username;
	  $row = mysqli_fetch_assoc($result);
        $_SESSION['role'] = $row['role'];
            // Redirect user to admin.php
         }else{
 echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='index.php'>Login</a></div>";
 }
switch ($_SESSION['role']) {
	case 1: //admin
	 $query = "INSERT into `admin` (username, password)
VALUES ('$username', '$password')";
            header("Location: admin.php");
            exit();
            break;
    case 2: //fan
	 $query1 = "INSERT into `fans` (username, password)
VALUES ('$username', '$password')";
$result = mysqli_query($conn, $query1);
            header("Location: main2.php");
            exit();
            break;
	case 3: //player
	 $query2 = "INSERT into `players` (username, password)
VALUES ('$username', '$password')";
$result = mysqli_query($conn, $query2);
			header("Location: main3.php");
			exit();
			break;
    }

    }
?>


<div class="form">
<h1>Log In</h1>
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Username" required />
<input type="password" name="password" placeholder="Password" required />
<input name="submit" type="submit" value="Login" />
</form>
<p>Not registered yet? <a href='registration.php'>Register Here</a></p>
</div>
</body>
</html>