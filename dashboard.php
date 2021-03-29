<?php
    $url1=$_SERVER['REQUEST_URI'];
    header("Refresh: 5; URL=$url1");
?>
<html>
  <head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CAE Dashboard</title>
		<style>
			body{
				margin:0%;
				overflow:hidden;
			}
			#header{
				width:100%;
				height:18%;
				content: "";
        			display: table;
        			clear: both;
			}
			#column1 {
				padding-top:1.5%;
				float:left;
				width:20%;
				padding-left:4%;
      			}
      			#column2 {
				float:left;
				width:60%;
      			}
      			#column3 {
				padding-right:3%;
				padding-top:1.5%;
				float:right;
				width:20%;
      			}

			#main{
				float:left;
				width:100%;
				height:82%;
			}

			#sidebar-left, #main, #sidebar-right{
				min-height: 600px				
			}

			#content{
				padding:1.5%;
				font-size:400%;
				font-family:arial;
				text-align: center;
				line-height: 1.1;
				padding-left:2%;
				padding-right:2%;
				margin-bottom:-12%;
			}
			#time{
				font-size:900%;
				font-family:arial;
				text-align: center;
			}
			img{
				width:300px;
				height:150px;
			}

		</style>
	</head>
	<body>
		<?php
			$myArray = array();
			$myfile = fopen("data.txt","rb") or die("Unable to open file!");
			while(!feof($myfile)){
				$line=fgets($myfile);
				$myArray[] = explode(' ',$line);
			}
			fclose($myfile);
		?>
		<div id="header">
			<div id="column1"><?php 
				echo '<img src="sante.jpg">'; 
			?></div>
			<div id="column2"></div>
			<div id="column3"><img src="cae.jpg"></div>
		</div>
		<div id="main"><div id="content">
				<p>NOUS ACCUEILLONS MAINTENANT LES PERSONNES AYANT RENDEZ-VOUS &#192;:</p>
				<p>WE ARE NOW WELCOMING PEOPLE THAT HAVE APPOINTMENT AT:</p>
			</div>
			<div id="time">
				<b><p>
				<?php
				echo $myArray[0][0].":".$myArray[0][1]." ".$myArray[0][2];
				?></p></b>
		</div>
	</body>
</html>




