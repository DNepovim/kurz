<html lang="cs">
<head>
	<title>Kurz webdesignu</title>
	<meta charset="utf-8">
</head>
<body>
	<?php if ($new) { ?>
		<h1><?php echo $new["title"]; ?></h1>
		<time><?php echo $new["date"]; ?></time>
		<span><?php echo $new["author"]; ?></span>
		<p><?php echo $new["content"]; ?></p>
	<?php } else { ?>
		<h1>Tato aktualita neexistuje</h1>
		<a href="/">Nehccete se vratit na domovskou strnku?</a>
	<?php } ?>
</body>
</html>
