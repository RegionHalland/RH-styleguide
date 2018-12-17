<?php
$get_string = $_SERVER['QUERY_STRING'];
$iframe_url = $get_string;

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>RH-KOMPONENTER</title>
</head>
<style>
	body, html{ font-family: arial;
		margin: 0;padding: 0; overflow: hidden;}
	.de-nav-left{
		padding-top: 10px;
		padding-left: 10px;
		width: 200px; height: 100vh; overflow:auto; position: fixed;left: 0; top: 0; background: #e1e1e1;
	}
	.de-nav-container{width: 89%;height: 100vh; margin-left: 200px;}
</style>

<body>
<nav class="de-nav-left">
	<center><strong>RH-komponenter</strong></center>
<hr>
		<br>
	<strong>Header</strong><br>

	<strong>Footer</strong><br>

	<strong>Navigation</strong><br>

	<strong>Content</strong><br>



</nav>

<nav class="de-nav-container">
	<iframe style="border: 0; width:100%; height: 100vh; overflow: auto;" src="design-editor.php?<?php echo $iframe_url;?>"></iframe>
</nav>



</body>
</html>
