<!DOCTYPE html>
<html>
<head>
<title>CAEDashboard - Login</title>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
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
  background-color: #4CAF50;
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
  background-color: #f44336;
}
.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}
h2{
	text-align:center;
}
form{
	width:30%;
}
.container{
text-align:left;
}
table{
	width:100%;
}

</style>
</head>
<body>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        if($username=="user" && $password == "user") {
            header('location: dashboard.php');
        }
	elseif($username="admin" && $password=="admin"){
    if(!session_id())
        session_start();
        $_SESSION['logon']=true;
		    header('location: admin.php');
        die();
	}
    }
?>

<h2>Login Form</h2>

<div class="container">
<center>
<form action="" method="post">
<table><tr><td>
  
    <label for="username"><b>Username</b></label></td></tr>
    <tr><td><input type="text" placeholder="Enter Username" name="username" required></td></tr>

    <tr><td><label for="password"><b>Password</b></label></td></tr>
    <tr><td><input type="password" placeholder="Enter Password" name="password" required></td></tr>
        
    <tr><td><button type="submit">Login</button></td></tr></table>
</form></center>
</div>
</body>
</html>