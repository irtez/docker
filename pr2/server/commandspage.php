<html lang="en">
<head>
	<title>Info page</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<header>
	<a id="logo-ref" href="http://localhost:8080/index.php"
	><img id="logo" src="minisf.png" alt="Логотип"/></a>
	<nav>
	<a href="http://localhost:8080/sortpage.php">Массивы</a>
	<a href="http://localhost:8080/commandspage.php">Информация о сервере</a>
	</nav>
</header>
<body>
<section id="comsec">
<?php	
	require_once ('commands.php');
	$commands = new Commands();
	echo "<br><b><span>ls:</span></b> ";
	foreach ($commands->ls() as $element) {
		echo $element . "<br>"; 
	}
	echo "<b><span>ps:</span></b> ";
	#echo $commands->ls() . "<b><span>ps:</span></b> ";
	foreach ($commands->ps() as $element) {
		echo $element . "<br>";
	}
	echo "<b><span>whoami:</span></b> ";
	#echo $commands->ps() . "<b><span>whoami:</span></b> ";
	echo $commands->whoami() . "<b><span>id:</span></b> ";
	echo $commands->id();
?>
</section>
</body>
</html>