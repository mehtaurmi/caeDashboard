<?php
if (!session_id()) session_start();
if (!$_SESSION['logon']){ 
    header("Location:index.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin </title>
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
  background-color:lightgreen;
  color: black;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 20%;
}

button:hover {
  opacity: 0.8;
}


.container {
  padding: 16px;
}


form{
	width:30%;
}
.container{
text-align:left;
}

</style>
</head>
<body>
<center>
<h1>Select a time slot</h1>
<div class="container">
	<center>
	<form action="" method="post">
  		<label for="appt">Select a time:</label>&nbsp;<label>Hour</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>Minutes</label>
		<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	
		<select name="hour">
    			<option value="1">1</option>
    			<option value="2">2</option>
    			<option value="3">3</option>
    			<option value="4">4</option>
    			<option value="5">5</option>
    			<option value="6">6</option>
    			<option value="7">7</option>
    			<option value="8">8</option>
    			<option value="9">9</option>
    			<option value="10">10</option>
    			<option value="11">11</option>
    			<option value="12">12</option>
		</select>&nbsp;&nbsp;&nbsp;&nbsp;
		<select name="minute">
    			<option value="00">00</option>
    			<option value="05">05</option>
    			<option value="10">10</option>
    			<option value="15">15</option>
    			<option value="20">20</option>
    			<option value="25">25</option>
    			<option value="30">30</option>
    			<option value="35">35</option>
    			<option value="40">40</option>
    			<option value="45">45</option>
    			<option value="50">50</option>
    			<option value="55">55</option>
		</select>&nbsp;&nbsp;&nbsp;&nbsp;
		<select name="day">
    			<option value="AM">AM</option>
    			<option value="PM">PM</option>
		</select><br><br>
  		<input type="submit" name="submit" value="Submit"/><br><br>
		  <?php
    		if(isset($_POST['Submit']))
    		{
    			echo '<meta http-equiv=Refresh content="0;url=dashboard.php?reload=1">';
    		}
		  ?>
		  <a href="logout.php">Logout</a>
	</form>
	<?php
		$myfile = fopen("data.txt","w") or die("Unable to open file!");
		$txt = $_POST['hour']." ".$_POST['minute']." ".$_POST['day'];
		fwrite($myfile, $txt);
		fclose($myfile);
	?>
	</center>
</div>
</center>
</body>
</html>
