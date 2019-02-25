<!doctype html>
<html>
<head>
<title>Leltar</title>
<link href="indexstyle.css" rel="stylesheet" type="text/css">
</head>

<body>
<style>
body {
    background-image: url(img/hatter.png);
}
</style>
<div id="container">
	<div id="menu">
    <?php
		$menu="menu.html";
		include($menu);
	?>
    </div>
  <div id="content">
      <?php
		if(isset($_REQUEST['o']))
			{
				$betolt = $_REQUEST['o'];
			}
			else
			{
				$betolt = "ures.html";
			}
			include($betolt);
	?>
  </div
</div>
</body>
</html>