<?php
include('conn.php');//DB Connection
if($_SERVER['REQUEST_METHOD'] == "POST")
{
 // Username and Password sent from Form
 $username = mysqli_real_escape_string($conn, $_POST['user']);
 $password = mysqli_real_escape_string($conn, $_POST['pass']);
 $password = md5($password); //Password Encrypted
 $sql = "INSERT INTO mosut_users(mosut_users_usuario,mosut_users_pass) values('$username', '$password')";
 $result = mysqli_query($conn, $sql);
 if(!$result){
 die ("Error on the Connection" . $conn->error);
 }else{

echo "bien";
 }
 
}
?>
<!doctype html>
<html>
<head>
<title>SoftAOX | New User Login</title>
</head>
<body>
<h1>New User Login</h1>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
<label>Username</label>
<input type="text" name="user"><br/><br/>
<label>Password</label>
<input type="password" name="pass"><br/><br/>
<input type="submit" name="submit" value="Create"><br/>
<p><a href="login.php">Login</a></p>
</form>
</body>
</html>