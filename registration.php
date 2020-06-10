<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>

<div class="form">
<h2>Registration</h2>
<form name="registration" method="post">
<input type="text" name="username" placeholder="Username" required />
<input type="password" name="password" placeholder="Password" required />
<input type="submit" name="submit" value="Register" />
</form>
</div>
<?php
require('connect.php');
session_start();
if (isset($_POST['submit'])){
        $username = $_POST['username'];
 $password = $_POST['password'];
 $query = "INSERT into `users` (username, password)
VALUES ('$username', '$password')";
        $result = mysqli_query($conn,$query);
        if($result){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='main2.php'>Login</a></div>";
        }
    }
?>
</body>
</html>