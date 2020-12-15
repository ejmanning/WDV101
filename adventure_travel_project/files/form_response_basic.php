
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact Form Response</title>
<link href="https://fonts.googleapis.com/css?family=Bungee+Inline&display=swap" rel="stylesheet">
<style>
body	{background-color: #c0eefc;}
img src	{margin-left: 50%;}
</style>
</head>

<body>
<header>
<img src="../images/banner.jpg" alt="banner" width="100%">
<h1>Thank you for your message!</h1>
</header>

<div id="container">
<p>We will get back with you soon.</p>
<p><a href="../index.html">Go Home!</a></p>

</div><!--close div container-->

<p>RESULT WILL DISPLAY BELOW THIS LINE</p>
<hr>
<p>&nbsp;</p>

<?php

echo "<p class='colorRed center'>This page was created by PHP on the server and sent back to your browser. </p>";

//It will create a table and display one set of name value pairs per row
	echo "<table border='1'>";
	echo "<tr><th>Field Name</th><th>Value</th></tr>";
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
<footer style="text-align:center; background-color:#242c2e; color:white;">
<img src="../images/AT_logo.gif" alt="AT logo" width="10%">
<div>Adventure Travel</div>
<div>3450 Conhost Avenue</div>
<div>Boulder Colorado 12345</div>
<div>(317) 555-7414</div>
</footer>
</body>
</html>
