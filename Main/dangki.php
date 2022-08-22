<?php
$servername = "localhost";
$username = "root";
$password = "mysql";
$database = "database";
//create connection
$conn = mysqli_connect($servername, $username, $password, $database);
//Check connection
if (!$conn) {
                  die("Connection failed:" . mysqli_connect_error());
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Registration</title>
</head>
<body>
<form  method="post">
  <div class="imgcontainer">
    <img src="https://www.howtogeek.com/wp-content/uploads/2021/11/windows_11_account_hero.jpg?width=1198&trim=1,1&bg-color=000&pad=1,1" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" >

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="userpassword" >

    <button type="submit" name="submit">Đăng Ký</button>
   
  </div>
  
</form>
</body>
</html>
<?php
//insert new user (registry)
if(isset($_POST["submit"])){
                  $username = $_POST["username"];
                
                  $password = $_POST["userpassword"];

                  $sql = "INSERT INTO account (username,  password) VALUES ('".$username."',  '".$password."')";
	if(mysqli_query($conn, $sql)){
		echo "New member recorded";
		header("Location: home.php");
	}else{
		echo "Something went wrong : " . mysqli_error($conn);
	}

}
?>

