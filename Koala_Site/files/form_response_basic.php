
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>contact form response</title>
<style type="text/css">
#container  {
			width: 800px;
			border: 1px solid black;
			padding: 10px;
			margin: 10px auto;
			}
.colorRed {
	color: #F00;
}

h1	{font-size:2em;
	background-color:#47331F;
	color:white;
	text-transform:uppercase;
	font-family: 'Bungee Inline';
	padding: 15px;}
		
p	{font-family:Arial, Helvetica, sans-serif;
	color: darkblue;
	text-align: center;}
	
body	{background-color: bisque;}

?php	{alignment-adjust: center;}



</style>
<link href="https://fonts.googleapis.com/css?family=Bungee+Inline&display=swap" rel="stylesheet">
</head>

<body>
<div id="container">
<h1>Thank you for your message!</h1>

<p>We will get back with you soon.</p>

</div><!--close div container-->

<p class="center">RESULT WILL DISPLAY BELOW THIS LINE</p>
<hr>
<p>&nbsp;</p>

<?php

echo "<p class='colorRed center'>This page was created by PHP on the server and sent back to your browser. </p>";

//It will create a table and display one set of name value pairs per row
	echo "<table border='1'>";
	echo "<tr><th>Field Name</th><th>Value of field</th></tr>";
	foreach($_POST as $key => $value)
	{
		echo '<tr class=colorRow>';
		echo '<td>',$key,'</td>';
		echo '<td>',$value,'</td>';
		echo "</tr>";
	} 
	echo "</table>";
	echo "<p>&nbsp;</p>";

?>

<a href="../../../index.html">Erica's Home Page</a>

</body>
</html>
